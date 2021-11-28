<?php

if(isset($_POST['register']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alhaq";

	
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$g=$_POST['t7'];
$h=$_POST['t8'];
$i=$_POST['t9'];
$j=basename($_FILES['t12']['name']);





// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "INSERT INTO `admission`(`FirstName`, `LastName`, `RegId`, `Address`, `Gender`, `City`, `Course`,`DOB`, `PhoneNo`, `Image`)VALUES('$a','$b','$c','$d','$e','$f','$i','$g',$h,'$j')";

if ($con->query($sql) === TRUE) {
    echo "<script>alert('Apka Form Humay Mil Gya han Shukria...')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}

?>



<!DOCTYPE html>
<html>
<head>
 

<title>Admission Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="css/animate.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/lightbox.min.css" rel="stylesheet">
<link href="css/hover-min.css" rel="stylesheet">
<link href="css/imagehover.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/scroll_design.css" rel="stylesheet">
<script src="js/jquery.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
<div class="logo">
<div class="container">
<div class="row">
<div class="col-md-4 col-lg-4 col-sm-4">
<center>
<h1 style="font-family:Robotto;  color:#000; margin-top:45px;" title="Al-Haq Scholar's Academy"><b>A</b>lhaq <b>S</b>cholar's <b>A</b>cadmey</h1>
</center>
</div>

<div class="col-md-4 col-lg-4 col-md-4">
<center>
<a href=""><img src="img/logo.jpg" height="170" width="170" class="img-circle "  style="margin-top:13px;  margin-bottom:13px;" title="Al-Haq Scholar's Academy"></a>
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
<li><a href="index.php"  class="">HOME</a></li>

<li><a href="Admission.php" style="font-family: UnitedSans,tahoma,helvetica,arial,sans-serif!important; font-size:19px; ">Admission Form</a></li>


</ul>
</nav>
</div>
</div>
</div>

</div>
</div>
</header><!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Robotics World</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="SDI.php">SDI<span class="sr-only">(current)</span></a>
      </li>
     
      
    </ul>
  </div>
</nav> -->
<div class="container">
  
   <div class="container-fluid bg">
                <div class="row">
                   <div class="col-md-4 col-md-4"></div>
                    <div class="col-md-4 col-md-4">
                        <div class="clear"></div>

                        
                         <form class="support form-container" action="" method="POST" enctype="multipart/form-data">
                    
                          <h1 class="heading">Admission Form </h1>
                                 
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input required  type="text" class="form-control" name="t1" placeholder="Enter FirstName"/>
                                    <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group">

                                     <label for="exampleInputPassword1">Last Name</label>
                                    <input required  type="text" class="form-control" name="t2" placeholder="Enter LastName"/>
                                     <span class="text-danger"></span>
                                     </div>
                                 
                                  <div class="form-group">
                                        <label for="exampleInputPassword1">Registration Id</label>
                                    <input required  type="text" class="form-control" name="t3" disabled placeholder="Enter Reg Id"/>
                                     <span class="text-danger"></span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input required  type="text" class="form-control" name="t4" placeholder="Enter Address"/>
                                     <span class="text-danger"></span>
                                  </div>
                                  
                                           <div class="form-group">
                                <label for="state">Gender :</label>
                                <div class="form-select" >
                                    <select required name="t5" id="state" placeholder="select state" class="form-control" >
                                        <option value=""></option>
                                        <option value="Male">Male</option>
                                         <option value="Female">Female</option>

                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                                      
                                      <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">
                                    <select required name="t6" id="city" class="form-control">
                                        <option value=""></option>
                                        <option value="Karachi">Karachi</option>
                                        <option value="Lahore">Lahore</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            
                                  <div class="form-group">
                                    <label for="">Course Name</label>
                                    <input required  type="text" class="form-control" name="t9"  placeholder="Enter Course name "/>
                                     <span class="text-danger"></span>
                                  </div>
                              
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">DOB</label>
                                    <input required  type="date" class="form-control" name="t7"  placeholder="Enter DOB"/>
                                     <span class="text-danger"></span>
                                  </div>
                          
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Phone Number</label>
                                    <input required  type="text" class="form-control" name="t8" placeholder="Enter PhoneNumber"/>
                                     <span class="text-danger"></span>
                                  </div>    
                                     
                       
                                  
                            
                            <div class="form-group">
                                <label for="father_name">Image :</label>
                                <input required type="file" name="t12" id="moccupation" required class="form-control">
                            </div>
                        

                                 
                                     
                                  <input required   type="submit" name="register" value="Enroll Student" class="btn btn-success btn-block">
                                  
                        </form>
                        <!--form end-->
                    </div>
              </div>
      </div>


</div>

</body>
</html>