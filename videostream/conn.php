<?php
$servername = 'localhost';
$serveradmin = 'root';
$serverpassword = '';
$serverdatabase = 'videostreaming';

$conn = mysqli_connect($servername,$serveradmin,$serverpassword,$serverdatabase);
echo  $conn ? '':'error';
?>
<!-- (id auto), video, user, (time auto), tittle, description -->