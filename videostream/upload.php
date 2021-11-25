<?php 
session_start();
$_SESSION['user'] = '111@g.com';
$user = $_SESSION['user'];
require 'conn.php';
if ( isset($_POST['upload']) ) {
    $filename = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $filetmpname = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $filedestination = 'temp/'.$filename;
    $_SESSION['filename'] = $filename;
    echo $filedestination;
    move_uploaded_file($filetmpname,$filedestination);
    header("Location: finishing.php?filename=$filename&user=$user");
}
?>
<!DOCTYPE html>
<html lang="en" style="background-color: white;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <script src="jquery36.js"></script>
    <title>VideoFloor | HOME</title>
    <style>
        .bg{
            background-color: #2C666E;
            float: left;
            width: 100%;
            height: 100vh;
        }
        .bg img{
            background-color: #2C666E;
            float: left;
            width: 100%;
            height: 100vh;
            object-fit: cover;
            opacity: .3;
        }
    </style>
</head>
<body >
<div class="bg">
    <img src="g.jpg">
</div>
<!-- ========== main section ============== -->
<div class="loginformbox">
    <form class="login" action="upload.php" enctype="multipart/form-data" method="post">
        <a class="videoflooranchor" href="index.php"><h2 id="floor">VideoFloor</h2></a>
        <label for="">Choose File</label>
        <input type="file" name="file" id="file" required>
        <button class="loginbtn" type="submit" name="upload" value="upload">UPLOAD</button>
    </div>
</form>
</body>
</html>
<!-- ======================= script ====================== -->
<script src="js.js"></script>
