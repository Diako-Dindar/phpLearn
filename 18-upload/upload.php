<?php

session_start();
$msg = null;
if(isset($_SERVER["REQUEST_METHOD"]) == "POST") {
    if(isset($_POST["uploadBtn"])) {
        if(isset($_FILES["uplodedFile"]["name"]) && !empty($_FILES["uplodedFile"]["name"])) {

            $fileName = $_FILES["uplodedFile"]["name"];
            $fileSize = $_FILES["uplodedFile"]["size"];
            $fileType = $_FILES["uplodedFile"]["type"];
            $fileTmp  = $_FILES["uplodedFile"]["tmp_name"];

            $fileNameSeparator = explode('.', $fileName);
            $fileNameSection1 = md5(time().$fileNameSeparator[0]);
            $fileNameSection2 = strtolower($fileNameSeparator[1]);
            $fileNameFinal = $fileNameSection1.'.'.$fileNameSection2;

            $uploadPath = 'asset/upload/';
            $uploadFileName = $uploadPath.$fileNameFinal;

            $fileTypeAllow = [
                'image/jpg',
                'image/jpeg',
                'application/pdf'
            ];

            if(in_array($fileType, $fileTypeAllow)) {
                if(move_uploaded_file($fileTmp, $uploadFileName)) {
                    $msg = "<p class='msg'>File Uploaded Successfully</p>";
                } else {
                    $msg = "<p class='msg'>Error in sending The File</p>";
                }
            } else {
                $msg = "<p class='msg'>You Are Not Allowed To Upload Such A File</p>";
            }
        } else {
            echo $msg = "<p class='msg'>Please Choose the file!!!</p>";
        }
    }
}
$_SESSION['msg'] = $msg;
header('location:index.php');
