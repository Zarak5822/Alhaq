<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book Store ,Book Store Online</title>
<link href="css/animate.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/lightbox.min.css" rel="stylesheet">
<link href="css/hover-min.css" rel="stylesheet">
<link href="css/imagehover.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/scroll_design.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/sscrol.js"></script>
<script src="js/wow.min.js"></script>

</head>
<body>
</body>
</html>

<?php
require_once('connection.php');
$a=$_POST['t1'];
$sql="INSERT INTO `emailsub`(`id`, `Email`) VALUES (1,'$a')";
$run=$con->query($sql);
echo '<script>alert(Succesfully Subscribe)</script>';
 
?>

