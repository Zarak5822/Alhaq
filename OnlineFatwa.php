<?php


if(isset($_POST['Submit'])){
include('connection.php');
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];

$sql = "INSERT INTO `QuestionInfo`(`QuestionID`, `Name`, `PhoneNumber`, `Masla`) VALUES ('','$a','$b','$c')";
if ($con->query($sql) === TRUE) {
echo "<script>alert('Apka Sawal Humay mil gya han.! Shukria..')</script>"; 
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
}

	
    

?>



<!doctype html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv=Content-Type>
<title>Alhaq دارالافتاء</title>
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
body{
  margin:0 0 0 0;
  
  
}

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
		.content {
    background:url(images/slider-bg.jpg) no-repeat top;
background-size: cover;
    padding: 120px 0;
		}
		
</style>
</head>

<body>
<main>
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

<nav class="pull-right nav1">
<ul class="nav navbar-nav">
<li><a href="index.php"  class="">HOME</a></li>
<li>
<a href="Dars-e-Nizami.php" style="background-color:#03F;">DARS E NIZAMI</a>
</li>
<li>
<a href="Books.php" style="background-color:#03F;">BOOKS<span class=""></span></a>

</li>
<li class="dropdown">
<a  class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color:#03F;">FATWAJAT<span class="caret"></span></a>
<ul class="dropdown-menu drp1">
<li><a href="OnlineFatwa.php" style="background-color:#FFF; color:#000;">Online Fatwa</a></li>

<li><a href="Fatwa.php" style="background-color:#FFF; color:#000;">Fatwa</a></li>

</ul>
</li>
<li><a href="Literature.php" style="font-family: UnitedSans,tahoma,helvetica,arial,sans-serif!important; font-size:19px; ">LITERATURE</a></li>


<li>
<a href="#" style="background-color:#03F;">COURSES</a>
</li>
s<li><a href="media.php" style="font-family: UnitedSans,tahoma,helvetica,arial,sans-serif!important; font-size:19px; ">MEDIA</a></li>
<li><a href="Events.php" style="font-family: UnitedSans,tahoma,helvetica,arial,sans-serif!important; font-size:19px; ">EVENTS</a></li>

<li><a href="aboutUs.php" style="font-family: UnitedSans,tahoma,helvetica,arial,sans-serif!important; font-size:14px; ">About Us</a></li>

</ul>
</nav>
</div>
</div>
</div>

</div>
</div>
</header>
</div>
<div style="background-color:#efefef;">
<div class="content">	
<div class="container">
<div class="row">
<div class="col-md-12">
<div style="font-size: 30px;
    padding-bottom: 15px;
    color: #fff;
    text-align: center;
    font-family: 'NafeesWeb', serif;">
<center>
      <p>دارالافتاء </p>
      <h1> فَاسْأَلُوا أَهْلَ الذِّكْرِ إِنْ كُنْتُمْ لَا تَعْلَمُونَ </h1>
      <br>
      
                
 
	
      </center>
</div>
</div>  
</div>
</div>
</div>
<br>


<br>
<div class="content8">
<div class="container">
<div class="row">

<div class="col-md-1 col-lg-1 col-sm-1">
</div>
<center>
<div class="col-md-2 col-lg-2 col-sm-2">
 <input type="submit" value="مزید" class="btn btn-large" />
</div>
</center>

<div class="col-md-1 col-lg-1 col-sm-1">
</div>

<div class="col-md-1 col-lg-1 col-sm-1">
</div>
<center>
<div class="col-md-2 col-lg-2 col-sm-2">
 <input type="submit" value="مزید" class="btn btn-large" />
</div>
</center>

<div class="col-md-1 col-lg-1 col-sm-1">
</div>
<div class="col-md-1 col-lg-1 col-sm-1">
</div>
<center>
<div class="col-md-2 col-lg-2 col-sm-2">
 <input type="submit" value="مزید" class="btn btn-large" />
</div>
</center>

<div class="col-md-1 col-lg-1 col-sm-1">
</div>
</div>
</div>
</div>
<br>
<br>
<br>
</div>


<div class="content14">
<div class="container">
<center>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<b><h1 style="color: #00aeef; font-size:45px; font-family: 'NafeesWeb', 'Open Sans', sans-serif;">رہنمائے صارف</h1></b>
</div>
</div>
<br>
</center>
<div class="row">

<div class="col-lg-4 col-md-4 col-sm-4">
<center><h3 style="color:#F00;"><strong>سوال کیسے بھیجیں</strong>؟</h3></center>
<br>
<div class="form-group">
<form action="OnlineFatwa.php" method="post">
                                        <label for="exampleInputPassword1" style="font-size: 20px;">Name/</label>
                                    <input required type="text" class="form-control" name="t1" placeholder="Enter your Name" style="padding: 20px;">
                                     <span class="text-danger"></span>
                                  </div>
                                  <div class="form-group">
                                   <label for="exampleInputPassword1" style="font-size: 20px;">Mobile Number/</label>
                                    <input required type="text" class="form-control" name="t2" placeholder="Enter Your Mobile number" style="padding: 20px;">
                                     <span class="text-danger"></span>
                                  </div>
                                                                    <div class="form-group">
                                   <label for="exampleInputPassword1" style="font-size: 20px;">Enter Your Masla/</label>
                                    <textarea  required="" type="text" class="form-control" name="t3" placeholder="Enter Your Masala" style="padding: 20px;"></textarea>
                                     <span class="text-danger"></span>
                                  </div>
<center>                                  <input type="submit" value="Send" name="Submit"></center>
</form>
                                    
                                    
                                  
                                  
</div>


<div class="col-lg-4 col-md-4 col-sm-4">
<center><h3 style="color:#F00;"><strong>جواب کیسے ملے گا؟</strong></h3></center>
<br>
<p style="font-size:18px;">. ہر سوال کا جواب بالعموم پانچ دنوں میں شائع کر دیا جاتا ہے، تاہم بہت زیادہ سوالات اکٹھے ہونے کی صورت میں یا تحقیقی نوعیت کے فتویٰ کی صورت میں تاخیر ہوسکتی ہے۔</p>
<p style="font-size:18px;">. ہر سوال کا جواب بالعموم پانچ دنوں میں شائع کر دیا جاتا ہے، تاہم بہت زیادہ سوالات اکٹھے ہونے کی صورت میں یا تحقیقی نوعیت کے فتویٰ کی صورت میں تاخیر ہوسکتی ہے۔</p>
<p style="font-size:18px;">. ہر سوال کا جواب بالعموم پانچ دنوں میں شائع کر دیا جاتا ہے، تاہم بہت زیادہ سوالات اکٹھے ہونے کی صورت میں یا تحقیقی نوعیت کے فتویٰ کی صورت میں تاخیر ہوسکتی ہے۔</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-4">
<center><h3 style="color:#F00;"><strong>تحریری فتویٰ کا حصول</strong></h3></center>
<br>
<p style="font-size:18px;">.دارالافتاء کے سرنامہ (Letter Head) پر فتویٰ کی مصدقہ کاپی کے حصول کے لیے اپنا خط و کتابت کا پتہ ارسال کریں یا خود دارالافتاء میں تشریف لائیں۔</p>
<p style="font-size:18px;">.دارالافتاء کے سرنامہ (Letter Head) پر فتویٰ کی مصدقہ کاپی کے حصول کے لیے اپنا خط و کتابت کا پتہ ارسال کریں یا خود دارالافتاء میں تشریف لائیں۔</p>
<p style="font-size:18px;">. ہر سوال کا جواب بالعموم پانچ دنوں میں شائع کر دیا جاتا ہے، تاہم بہت زیادہ سوالات اکٹھے ہونے کی صورت میں یا تحقیقی نوعیت کے فتویٰ کی صورت میں تاخیر ہوسکتی ہے۔</p>

</div>

</div>
</div>
</div>














<br>
<br>

<div class="col-lg-12">
<address style="text-align:center; color:#03F;">
  © 2014 Alhaq Scholar Acadmey and Book store, Pakistan Inc. All rights reserved. <br>
  Designed By Zarak khan.
  </address>
  <br><br>
</div>
</main>

</body>
</html>
