<?php
require_once '../include/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $stmt = query("
        SELECT 
            user_id,
            status, 
            username, 
            role
        FROM user
    ");

    $raw = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $users = [];
    foreach ($raw as $row) {
        $user_id = $row['user_id'];
        if (!isset($users[$user_id])) {
            $users[$user_id] = [
                'user_id' => $user_id,
                'status' => $row['status'],
                'username' => $row['username'],
                'role' => $row['role'],
            ];
        }
    }

    $result = array_values($users);
    $total = count($result);
    sendJsonResponse([
        'status_code' => 200,
        'status' => 'OK',
        'message' => 'สำเร็จ',
        'data' => $result,
        'total' => $total
    ]);
}
