<?php 
require 'conn.php';
session_start();

if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];
    // echo "------".$_SESSION['user'];
};
if (isset($_POST['finish'])) {
    $title = $_POST['title'];
    $user = $_SESSION['user'];
    $description = $_POST['description'];
    $filename1 = $_SESSION['filename'];
    $fileext = ".".pathinfo("temp/$filename1")['extension'];
    echo $filefull = uniqid('VID--'.time(),true).$fileext;
    rename("temp/$filename1","vids/$filefull");
    $sqlupload = "INSERT INTO videolist (video,user,title,description) VALUES('$filefull','$user','$title','$description')";
    mysqli_query($conn,$sqlupload);
    header("location: index.php");
};
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
    <form class="login" action="finishing.php" method="post">
        <div>
            <video src="temp/<?php echo $filename ?>" type="video/mp4" style="width: 400px;" controls></video>
        </div>
        <label for="">Title*</label>
        <input type="text" name="title" id="tittle" required>
        <label for="">description</label>
        <input type="text" name="description" id="descriptions">
        <button class="loginbtn" type="submit" name="finish">FINISH</button>
    </div>
</form>
</body>
</html>
<!-- ======================= script ====================== -->
<script src="js.js"></script>
