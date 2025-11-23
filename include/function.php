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
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
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

function getSite(string $key): ?array
{
    $stmt = query('SELECT id, setting_value, status FROM site_setting WHERE setting_key = :key LIMIT 1', [':key' => $key]);

    if (!$stmt instanceof PDOStatement) {
        return null;
    }

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result !== false ? $result : null;
}

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
