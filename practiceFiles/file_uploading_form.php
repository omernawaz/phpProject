<?php
    session_start();

    if(isset($_SESSION['file_upload_message']))
    {
        $message = $_SESSION['file_upload_message'];
        unset($_SESSION['file_upload_message']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

    <?php echo $message ?? null ?>
    <form action = "file_uploading.php" method = "POST" enctype = "multipart/form-data">
    Select image to Upload<br>
    <input type="file" name="upload">
    <br>
    <input type="submit" value="Submit">

    </form>
</body>
</html>