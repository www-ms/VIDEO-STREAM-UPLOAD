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
<!-- ========== main section ============== -->
<div class="bg">
    <img src="g.jpg">
</div>
<div class="loginformbox">
    <form class="login" action="login.php" method="post">
        <a class="videoflooranchor" href="index.php"><h2>VideoFloor</h2></a>
        <label for="">Email</label>
        <input type="email" name="email" id="email" required >
        <label for="">Password</label>
        <input type="password" name="password" id="password" required >
        <button class="loginbtn" type="submit">LOGIN</button>
        <div>
            <label>don't have an account?, -</label>
            <a href="signup.php">Register here</a>
        </div>
    </div>
</form>
</body>
</html>
<!-- ======================= script ====================== -->
<script src="js.js"></script>
