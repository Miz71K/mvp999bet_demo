<?php
require_once '../include/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $required_fields = ['user_id', 'status'];
        foreach ($required_fields as $field) {
            if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
                sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'โปรดกรอกข้อมูลให้ครบถ้วน']);
            }
        }

        $user_id = htmlspecialchars(trim($_POST['user_id']), ENT_QUOTES, 'UTF-8');
        $status = htmlspecialchars(trim($_POST['status']), ENT_QUOTES, 'UTF-8');

        if ($status !== 'inactive' && $status !== 'active') {
            sendJsonResponse([
                'status_code' => 400,
                'status' => 'Bad Request',
                'message' => 'สถานะไม่ถูกต้อง'
            ]);
        }

        $stmt = query("UPDATE user SET status = :status WHERE user_id = :user_id", [
            ':status' => $status,
            ':user_id' => $user_id
        ]);

        if ($stmt->rowCount() === 0) {
            sendJsonResponse([
                'status_code' => 404,
                'status' => 'Not Found',
                'message' => 'ไม่พบผู้ใช้ที่ต้องการอัปเดต'
            ]);
        }

        sendJsonResponse([
            'status_code' => 200,
            'status' => 'OK',
            'message' => 'อัปเดตข้อมูลสำเร็จ'
        ]);
    } catch (Throwable $e) {
        sendJsonResponse(['status_code' => 500, 'status' => 'Internal Server Error', 'message' => 'เกิดข้อผิดพลาดภายในเซิร์ฟเวอร์: ' . $e->getMessage()]);
    }
}
