<?php
//FILE HANDLING

// $file = 'misc/users.txt';

// if(file_exists($file)) {
//     //echo readfile($file);
//     $handle = fopen($file, 'r');
//     $contents = fread($handle, filesize($file));
//     fclose($handle);
//     echo $contents;
// }
// else {
//     $handle = fopen($file, 'w');
//     $contents = 'Omer' . PHP_EOL . 'Ali' . PHP_EOL . 'Ahmed';
//     fwrite($handle, $contents);
//     fclose($handle);
// }



session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    $allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');

    if(!empty($_FILES['upload']['name']))
    {
        
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_temp = $_FILES['upload']['tmp_name'];

        //get file extension

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        //echo $file_ext;

        //validate extension

        if(!in_array($file_ext,$allowed_extensions))
            $message = "<p style = 'color: red;'> Please upload a valid file (png,jpg,jpeg,gif) </p>";
        else if ($file_size > 1000000)
            $message = "<p style = 'color: red;'> File too large </p>";
        else 
        {
            $target_dir = "uploads/{$file_name}";

            move_uploaded_file($file_temp,$target_dir);

            $message = "<p style = 'color: green;'> File Uploaded Successfully </p>";
        }

    }
    else {
        $message = "<p style = 'color: red;'> Please choose a file </p>";
    }
    $_SESSION['file_upload_message'] = $message;
    header("Location: file_uploading_form.php");
}



?>


