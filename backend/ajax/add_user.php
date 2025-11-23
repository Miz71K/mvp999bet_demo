<?php
require_once '../include/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required_fields = ['username', 'password', 'role'];
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'โปรดกรอกข้อมูลให้ถูกต้องและครบถ้วน']);
        }
    }

    $username = htmlspecialchars(trim($_POST['username']), ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];
    $role = htmlspecialchars(trim($_POST['role']), ENT_QUOTES, 'UTF-8');

    $stmt = query('SELECT COUNT(*) AS count FROM user WHERE username = :username', [':username' => $username]);
    if ($stmt->fetch(PDO::FETCH_ASSOC)['count'] > 0) {
        sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'ชื่อผู้ใช้นี้ถูกใช้ไปแล้ว']);
    }

    $hashed_password = encrypt($password);

    $user_id = bin2hex(random_bytes(8));

    query('INSERT INTO user (user_id, username, password, role) VALUES (:user_id, :username, :password, :role)', [
        ':user_id' => $user_id,
        ':username' => $username,
        ':password' => $hashed_password,
        ':role' => $role
    ]);

    writeLog('เพิ่มผู้ใช้ใหม่', 'เพิ่มผู้ใช้', '', $username, 'success', $user_id);
    sendJsonResponse(['status_code' => 201, 'status' => 'Created', 'message' => 'เพิ่มผู้ใช้สำเร็จ!']);
}
