<?php
require_once '../include/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (isset($_POST['data'])) {

        $datas = json_decode($_POST['data'], true);
        if (!is_array($datas)) {
            sendJsonResponse([
                'status_code' => 400,
                'status' => 'Bad Request',
                'message' => 'รูปแบบข้อมูลไม่ถูกต้อง',
            ]);
        }

        foreach ($datas as $data) {
            $id = (int) $data['id'];
            $orderId = (int) ($data['order_id'] ?? 0);
            $key = (string) $data['setting_key'];
            $value = (string) $data['setting_value'];
            $title = (string) ($data['setting_title'] ?? '');
            $link = (string) ($data['setting_link'] ?? '');
            $status = (int) ($data['status'] ?? 1);

            if ($value === '' && !$id) continue;

            $result = $id
                ? updateSite($id, $orderId, $key, $value, $title, $link, $status)
                : insertSite($orderId, $key, $value, $title, $link, $status);

            if (!$result) {
                $errors[] = $id ? "อัปเดต ID $id ล้มเหลว" : "เพิ่มข้อมูลใหม่ล้มเหลว";
            }
        }
    }

    if (isset($_POST['delete'])) {
        $delete = json_decode($_POST['delete'], true);
        if (is_array($delete)) {
            foreach ($delete as $id) {
                $result = deleteSite($id);

                if (!$result) {
                    $errors[] = "$id ไม่สามารถลบได้";
                }
            }
        }
    }

    if (!empty($errors)) {
        sendJsonResponse([
            'status_code' => 500,
            'status' => 'ERROR',
            'message' => 'บางรายการไม่สามารถบันทึกได้',
            'errors' => $errors
        ]);
    } else {
        sendJsonResponse([
            'status_code' => 200,
            'status' => 'OK',
            'message' => 'บันทึกข้อมูลเรียบร้อยแล้ว',
        ]);
    }
}
