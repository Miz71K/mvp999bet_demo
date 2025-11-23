<?php
require_once '../include/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required_fields = ['username', 'password'];

    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'โปรดกรอกข้อมูลให้ถูกต้องและครบถ้วน']);
        }
    }

    $username = htmlspecialchars(trim($_POST['username']), ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];

    if (!preg_match('/^[a-zA-Z0-9_\-]+$/', $username) && !preg_match('/^[a-zA-Z0-9@._!#$%^&*()-]+$/', $password)) {
        sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'กรอกผู้ใช้และรหัสให้ถูกต้องและครบถ้วน']);
    }

    $stmt = query('SELECT status, username, password FROM user WHERE username = :user', [':user' => $username]);

    if ($stmt->rowCount() < 1) {
        sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'ไม่มีชื่อผู้ใช้นี้ในระบบ']);
    }

    $result = $stmt->fetch();
    $username = $result['username'];

    if ($password !== decrypt($result['password'])) {
        sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'รหัสผ่านผิด']);
    }

    if ($result['status'] === 'inactive') {
        sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'ชื่อผู้ใช้นี้ได้ปิดการใช้งานไปแล้ว']);
    }

    if (empty($telegram_bot_token['setting_value']) && empty($telegram_otp_chat_id['setting_value'])) {
        $stmt = query('SELECT user_id FROM user WHERE username = :username', [':username' => $username]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_id = $result['user_id'];

        session_regenerate_id(true);
        $_SESSION['user'] = $user_id;

        writeLog('เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '');
        sendJsonResponse(['status_code' => 200, 'status' => 'OK', 'message' => 'เข้าสู่ระบบสำเร็จ']);
    } else {
        $result = generateOtp($username);
        if ($result['success']) {
            sendJsonResponse(['status_code' => 200, 'status' => 'OK', 'message' => 'ขอ OTP สำเร็จ', 'data' => ['ref_id' => $result['ref_id']]]);
        }
    }
}
