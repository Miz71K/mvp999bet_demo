<?php
require_once '../include/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    unset($_SESSION['user']);

    sendJsonResponse(['status_code' => 200, 'status' => 'OK', 'message' => 'ออกจากระบบเรียบร้อยแล้ว']);
}
