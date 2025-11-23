<?php

declare(strict_types=1);

date_default_timezone_set('Asia/Bangkok');
ob_start();
ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

// Configure session with secure settings
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => '',
    'secure' => false,
    'httponly' => true,
    'samesite' => 'Lax'
]);
session_start();

require_once 'db.php';

function getBaseUrl(): string
{
    return 'http' . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 's' : '') . '://' . $_SERVER['HTTP_HOST'];
}

function getClientIp(): string
{
    $ipSources = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR'
    ];

    foreach ($ipSources as $source) {
        if ($ip = getenv($source)) {
            return $ip;
        }
    }

    return 'UNKNOWN';
}

function encrypt(string $string): string
{
    $cipher = "AES-128-CTR";
    $key = "BS539TDGZF3ND71";
    $iv = '1234567891011121';

    return openssl_encrypt($string, $cipher, $key, 0, $iv);
}

function decrypt(string $string): string
{
    $cipher = "AES-128-CTR";
    $key = "BS539TDGZF3ND71";
    $iv = '1234567891011121';

    return openssl_decrypt($string, $cipher, $key, 0, $iv);
}

function query(string $sql, array $params = []): PDOStatement|bool
{
    try {
        $pdo = DB::getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        error_log("Query failed: " . $e->getMessage());
        return false;
    }
}

function sendJsonResponse(array $data): void
{
    header('Content-Type: application/json; charset=utf-8;');
    exit(json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}

function getSession(): string
{
    return $_SESSION['user'] ?? '';
}

function getBanners(): array
{
    $stmt = query("SELECT id, setting_value, setting_link, status FROM site_setting WHERE setting_key = :setting_key ORDER BY order_id ASC", [':setting_key' => 'banner']);
    return $stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
}

function getPromotions(): array
{
    $stmt = query("SELECT id, setting_value, setting_link, status FROM site_setting WHERE setting_key = :setting_key ORDER BY order_id ASC", [':setting_key' => 'promotion']);
    return $stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
}

function getUser(string $column): mixed
{
    $stmt = query('SELECT * FROM user WHERE user_id = :user_id', [':user_id' => getSession()]);
    return $stmt ? $stmt->fetch()[$column] : null;
}

function getSite(string $key): ?array
{
    $stmt = query('SELECT id, setting_value, status FROM site_setting WHERE setting_key = :key LIMIT 1', [':key' => $key]);

    if (!$stmt instanceof PDOStatement) {
        return null;
    }

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result !== false ? $result : null;
}


function insertSite(int $orderId, string $key, string $value, string $title, string $link, int $status): bool
{
    return query(
        'INSERT INTO site_setting (order_id, setting_key, setting_value, setting_title, setting_link, status) VALUES (:order_id, :key, :value, :title, :link, :status)',
        [
            ':order_id' => $orderId,
            ':key' => $key,
            ':value' => $value,
            ':title' => $title,
            ':link' => $link,
            ':status' => $status
        ]
    ) !== false;
}

function updateSite(int $id, int $orderId, string $key, string $value, string $title, string $link, int $status = 1): bool
{
    $stmt = query(
        'UPDATE site_setting 
         SET order_id = :order_id, 
             setting_key = :key, 
             setting_value = :value,
             setting_title = :title,
             setting_link = :link,
             status = :status 
         WHERE id = :id',
        [
            ':id' => $id,
            ':order_id' => $orderId,
            ':key' => $key,
            ':value' => $value,
            ':title' => $title,
            ':link' => $link,
            ':status' => $status
        ]
    );

    return $stmt !== false;
}

function deleteSite(int $id): bool
{
    $stmt = query("DELETE FROM site_setting WHERE id = :id", [
        ':id' => (int) $id
    ]);

    return $stmt !== false;
}

function getAllSiteSettingKeys(): array
{
    $stmt = query('SELECT setting_key FROM site_setting');
    return $stmt ? $stmt->fetchAll(PDO::FETCH_COLUMN) : [];
}

function writeLog(string $action, string $detail, string $from, string $to, string $status, string $for): bool
{
    return (bool) query(
        'INSERT INTO user_log (`action`, detail, `from`, `to`, `status`, created_at, created_by, created_for, ip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)',
        [$action, $detail, $from, $to, $status, date("Y-m-d H:i:s"), getUser('username'), $for, getClientIp()]
    );
}

function getUserLogs(): array
{
    $stmt = query('SELECT id, `action`, detail, `from`, `to`, `status`, created_at, created_by, ip FROM user_log ORDER BY created_at DESC');

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function generateOtp(string $username): array
{
    $otp = sprintf("%06d", random_int(100000, 999999));
    $ref_id = bin2hex(random_bytes(3));

    $stmt = query('INSERT INTO otp_log (username, otp, ref_id) VALUES (?, ?, ?)', [$username, $otp, $ref_id]);

    $success = $stmt && sendTelegramOtp($username, $otp, $ref_id);

    return [
        'success' => $success,
        'ref_id' => $ref_id
    ];
}

function verifyOtp(string $username, string $submittedOtp): bool
{
    $stmt = query(
        'SELECT otp FROM otp_log WHERE username = :username AND created_at > NOW() - INTERVAL 5 MINUTE ORDER BY id DESC LIMIT 1',
        [':username' => $username]
    );

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result && $result['otp'] === $submittedOtp && query('DELETE FROM otp_log WHERE username = :username', [':username' => $username]);;
}

function sendTelegramOtp(string $username, string $otpCode, string $refId): bool
{
    $token = getSite('telegram_bot_token')['setting_value'];
    $chatId = getSite('telegram_otp_chat_id')['setting_value'];
    $message = "พนักงาน: $username\nOTP: $otpCode\nREF: $refId";

    $url = "https://api.telegram.org/bot$token/sendMessage";

    $data = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ]
    ];

    $context = stream_context_create($options);
    return file_get_contents($url, false, $context) !== false;
}

// Site Settings
$logo_auth = getSite('logo_auth');
$logo_main = getSite('logo_main');
$logo_play = getSite('logo_play');
$icon = getSite('icon');
$image = getSite('image');
$title = getSite('title');
$keywords = getSite('keywords');
$background = getSite('background');
$description = getSite('description');
$deposit_info = getSite('deposit_info');
$withdraw_info = getSite('withdraw_info');
$affiliate_info = getSite('affiliate_info');
$user_profile = getSite('user_profile');
$popup = getSite('popup');
$line_contact_link = getSite('line_contact_link');
$announcement = getSite('announcement');
$primary_theme_color = getSite('primary_theme_color');
$secondary_theme_color = getSite('secondary_theme_color');
$border_theme_color = getSite('border_theme_color');
$text_theme_color = getSite('text_theme_color');
$text_highlight_color = getSite('text_highlight_color');
$primary_button_color = getSite('primary_button_color');
$secondary_button_color = getSite('secondary_button_color');
$shadow_button_color = getSite('shadow_button_color');
$text_button_color = getSite('text_button_color');
$min_withdraw = getSite('min_withdraw');

$telegram_bot_token = getSite('telegram_bot_token');
$telegram_otp_chat_id = getSite('telegram_otp_chat_id');
