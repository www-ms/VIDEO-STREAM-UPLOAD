<?php 

require 'conn.php';

$sqlfetch = "SELECT * FROM videolist";
$fetchedata = mysqli_query($conn,$sqlfetch);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <script src="jquery36.js"></script>
    <title>VideoFloor | HOME</title>
    <style>
        .selected{
            margin-top: 50px;
            max-width: 800px;
            transition: .5s;
        }
        .selected video{
            max-width: 800px;
        }
    </style>
</head>
<body>
<div id="header">
    <h3 id="floor">VideoFloor</h3>
    <div>
        <a href="login.php"><button>LOGIN</button></a>
        <a href="upload.php" ><button>UPLOAD</button></a>
    </div>
</div>
<!-- ========== main section ============== -->
<div id="vidbox" class="boxvid">
    <?php 
    
    while ($row = mysqli_fetch_assoc($fetchedata)) {
        $fvideo=$row['video'];
        $ftime=$row['time'];
        $ftitle=$row['title'];
        $fdesctiption=$row['description'];
        $fuser=$row['user'];
    
    ?>
    <div class="box">
        <video id="id1" class="vid" src="vids/<?php echo $fvideo ?>" type="video/mp4"></video>
        <div class="bot">
            <h4><?php echo $ftitle ?></h4>
            <div>
                <p><?php echo $fuser ?></p>  <p><?php echo $ftime ?></p>
            </div>
            <div class="des hidden">
                <p><?php echo $fdesctiption ?></p>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
</body>
</html>
<!-- ======================= script ====================== -->
<script src="js.js"></script>
