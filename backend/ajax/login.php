<?php
require_once '../include/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $required_fields = ['username', 'otp'];

    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'โปรดใส่รหัส OTP']);
        }
    }

    $username = htmlspecialchars(trim($_POST['username']), ENT_QUOTES, 'UTF-8');
    $otp = filter_var(trim($_POST['otp']), FILTER_SANITIZE_NUMBER_INT);

    if (verifyOtp($username, $otp)) {
        $stmt = query('SELECT user_id FROM user WHERE username = :username', [':username' => $username]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_id = $result['user_id'];

        session_regenerate_id(true);
        $_SESSION['user'] = $user_id;

        writeLog('เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '');
        sendJsonResponse(['status_code' => 200, 'status' => 'OK', 'message' => 'เข้าสู่ระบบสำเร็จ']);
    } else {
        sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'รหัส OTP ไม่ถูกต้อง']);
    }
}
