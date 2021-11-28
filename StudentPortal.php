<?php
require_once('connection.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alhaq دارالافتاء Books</title>
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

<style>

.sign{
	display:none;}
	
.pizz1{
	margin-left:50px;
	font-family:Roboto;
	font-weight:bold;
}
.font2{
	font-family:Roboto;
	font-size:35px;
	text-align:center;}
.text1{
	float:right;
	margin-right:10px;}
.box1{
	background-color:#666;}
.pizz2{
	margin-left:25px;
	font-family:Roboto;
	font-weight:bold;}
pizz3{
	text-align:center;}	
.font1{
	font-weight:bold;}
.zak1{text-align:center;}
header{
	width:100%;
	background-color:#03F;}
.head1{
	text-align:center;
	font-family:Roboto;
	margin-top:20px;
	font-size:15px;
	
	
	}
	.nav1 ul li a{
		color:#FFF;
		font-size:18px;
		
		font-family: UnitedSans,tahoma,helvetica,arial,sans-serif!important;
		
	}
	.nav1 ul li a:hover{
		color:#CCC;
		background-color:#03F;}	
		
		background-color:#CCC;}	
	
.za1{
	float:right;
	margin-top:-3px;
	margin-right:-10px;
	font-family:Roboto;
	font-size:20px;
	color: #fed75f;}
.jum1{
	background-color:#999;}
.font1{
	background-color:#666;}
	body{
		margin:0px;
		padding:0px;
		}

</style>
</head>

<body>
<main>
<div class="logo">
<div class="container">
<div class="row">
<div class="col-md-4 col-lg-4 col-sm-4">
<center>
<h1 style="font-family:Robotto;  color:#000; margin-top:45px;" title="Al-Haq Scholar's Academy">Alhaq Scholar's Acadmey</h1>
</center>
</div>

<div class="col-md-4 col-lg-4 col-md-4">
<center>
<a href=""><img src="images/logo.jpg" height="170" width="170" class="img-circle "  style="margin-top:13px;  margin-bottom:13px;" title="Al-Haq Scholar's Academy"></a>
</center>
</div>
<div class="col-md-4 col-lg-4 col-sm-4">
<center>

<img src="img/facebook-icon.png" class="img-circle" style="margin-top:50px;"  title="Facebook">
<img src="img/insta-icon.png" class="img-circle" style="margin-top:50px;" title="instagram">
<img src="img/youtube-icon.png" class="img-circle" style="margin-top:50px;" title="Youtube">
<img src="img/twitter-icon.png" class="img-circle" style="margin-top:50px;" title="Twitter"></center>
</div>

</div>
</div>
</div>




<div class="container1">
<div class="row">
<div class="col-md-4 col-lg-4 col-sm-4">
</div>
<div class="col-md-4 col-lg-4 col-sm-4">
<center>
<h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:#06F; font-size:20px; margin-left:14px; margin-top:10px;" title="Al-Haq Scholar's Academy">ISLAMIC EDUCATION FOR MALE AND FEMALE</h1>
</center>
</div>
<div class="col-md-4 col-lg-4 col-sm-4">
</div>
</div>
</div>
<header>
<div class="container">
<div class=" col-md-12 col-lg-12 col-sm-12 ">
<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed btn btn-default bnt1"  data-toggle="collapse" data-target="#abc" >
       <i class="fa fa-bars" aria-hidden="true" ></i>
    </button>
</div>

<div class="collapse navbar-collapse" id="abc">

<nav class="pull-left nav1">
<ul class="nav navbar-nav">
<li><a href="index.php" class="">HOME</a></li>

</ul>
</nav>
</div>
</div>
</div>

</div>
</div>
</header>
</div>
<br>

<br>
<br>
<div class="content">
<div class="container">
<h3 style="font-family:Robotto; font-size:40px;"><b>S</b>tudent Portal</h3><br>
</div>

</div>
</div>



<?php
include'connection.php';
$qry="SELECT * FROM `studentportal` ";
	$result=$con->query($qry);
	$row=$result->fetch_assoc();
	echo $name1=$row["Name"];
		
		

		

?>

    <div class="container">
     <div class="row">
     <div class="col-lg-4 col-md-4 col-sm-4">
     <div style=" width:20px;height:30px;">

	<?php echo " <img src='./img/".$row["Result"]."'>"?>


       


</div>
</div>
</div>
</div>

<br>
<br>
<br>
<br>
   
<div class="col-lg-12">
<address style="text-align:center; color:#03F;">
  © 2018 Alhaq Book store, Pakistan Inc. All rights reserved. <br>
  Designed By Zarak khan.
  </address>
  <br><br>
</div>


</main>

</body>
</html>
