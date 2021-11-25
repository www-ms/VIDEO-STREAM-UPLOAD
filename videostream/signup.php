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
    <form class="login" action="signup.php" method="post">
        <a class="videoflooranchor" href="index.php"><h2>VideoFloor</h2></a>
        <label for="">Email</label>
        <input type="email" name="email" id="email" required >
        <label for="">Create Password</label>
        <input type="password" name="password1" id="password" required >
        <label for="">Confirm Password</label>
        <input type="password" name="password1" id="password" required >
        <button class="loginbtn" type="submit" value="signup">SIGNUP</button>
        <div>
            <label>already registered?, -</label>
            <a href="login.php">Login here</a>
        </div>
    </div>
</form>
</body>
</html>
<!-- ======================= script ====================== -->
<script src="js.js"></script>
