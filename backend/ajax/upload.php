<?php
$targetDir = __DIR__ . '/../../asset/img/uploads/';
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo 'Invalid upload';
    exit;
}

$filename = basename($_FILES['file']['name']);
$filename = uniqid() . '_' . preg_replace("/[^a-zA-Z0-9.]/", "_", $filename);
$targetFile = $targetDir . $filename;

if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
    // Return public URL
    echo '/asset/img/uploads/' . $filename;
} else {
    http_response_code(500);
    echo 'Upload failed';
}
