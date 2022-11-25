<?php
include 'config.php';

$error = $_FILES['my_file']['error'];

if ($error !== UPLOAD_ERR_OK) {
    echo 'File upload error!';
    die();
}

if (!is_dir(FILE_STORAGE_PATH)) {
    mkdir(FILE_STORAGE_PATH, 0777);
}

$fileName = $_POST['filename'];
$fileTmpPath = $_FILES['my_file']['tmp_name'];
$fileStoragePath = sprintf('%s/%s', FILE_STORAGE_PATH, sprintf($fileName));

if (move_uploaded_file($fileTmpPath, $fileStoragePath)) {
    $fileResource = fopen(MY_DB_FILE, 'a');
    fwrite($fileResource, $fileStoragePath . PHP_EOL);
    fclose($fileResource);

    echo 'File uploaded successfully!';
}