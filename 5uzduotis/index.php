<?php
    include 'config.php';
?>
<html>
<head>
    <style>
        body {
            margin:10px;
            padding: 10px;
        }

        form input, form button {
            margin: 3px;
        }
    </style>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="filename"><br>
    <input type="file" name="my_file"><br>
    <button type="submit">Upload</button>
</form>


