<?php
require_once '../include/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (!isset($_POST['user_id']) || trim($_POST['user_id']) === '') {
            sendJsonResponse(['status_code' => 400, 'status' => 'Bad Request', 'message' => 'โปรดกรอกข้อมูลให้ครบถ้วน']);
        }

        $user_id = htmlspecialchars(trim($_POST['user_id']), ENT_QUOTES, 'UTF-8');

        $stmt = query("DELETE FROM user WHERE user_id = :user_id", [
            ':user_id' => $user_id
        ]);

        if ($stmt->rowCount() === 0) {
            sendJsonResponse([
                'status_code' => 404,
                'status' => 'Not Found',
                'message' => 'ไม่พบผู้ใช้ที่ต้องการลบ'
            ]);
        }

        sendJsonResponse([
            'status_code' => 200,
            'status' => 'OK',
            'message' => 'ลบผู้ใช้สำเร็จ'
        ]);
    } catch (Throwable $e) {
        sendJsonResponse(['status_code' => 500, 'status' => 'Internal Server Error', 'message' => 'เกิดข้อผิดพลาดภายในเซิร์ฟเวอร์: ' . $e->getMessage()]);
    }
}
