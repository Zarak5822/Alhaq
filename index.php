<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alhaq";

$t1=$_POST['t1'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$t4=$_POST['t4'];

$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "INSERT INTO `donation`(`ID`, `Type`, `Name`, `PhoneNumber`, `Amount`) VALUES ('','$t1','$t2','$t3','$t4')";

if ($con->query($sql) === TRUE) {
    echo '<script> alert("Apki Information humay mil gyi hn 1 to 2 working day ma ap se contact krty hn insha Allah.")</script>';
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}


?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Alhaq Scholar Academy</title>
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
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $(".gallery").hide();
  });
  $("#show").click(function(){
    $(".gallery1").show();
  });
});
</script>

<style>

	
.font2{
	font-family:Roboto;
	font-size:35px;
	text-align:center;}
.text1{
	float:right;
	margin-right:10px;}
.box1{
	background-color:#666;}
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
<div style="width:150px; height:50px; margin-left:250px; margin-bottom:30px;">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Donate Us</button>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Donate to Alhaq Scholar Acadmey</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post" >
                        
                       
                        <div class="form-group">
                            <label class="control-label mb-1">Type</label>
                            <select name="t1">
                            <option selected>Choose...</option>
                            <option value="zakat">Zakat</option>
                            <option value="sadqa">Sadqa</option>
                            <option value="fitrat">Fitrat</option>
                         
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label mb-1">Name</label>
                            <input id="" name="t2" type="text" class="form-control" value="name" data-val="true">
                            
                        </div>
                         <div class="form-group">
                            <label for="" class="control-label mb-1">Phone Number</label>
                            <input id="" name="t3" type="text" class="form-control" value="phnone" data-val="true" >
                           
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label mb-1">Amount</label>
                            <input id="" name="t4" type="text" class="form-control" value="amount" data-val="true" >
                           
                        </div>
                        <input type="submit" name="submit" class="btn btn-success " value="Save"> 
                        

                    </form>
      </div>
     
    </div>
  </div>
</div>
</div>
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

<center>
<div style=" background-color:#333;">
<marquee><img src="images/khutba_desktop.png" class="img-responsive" ></marquee>
</div>
</center>
<br>


<div class="content1">
<div class="container">
<div class="row">
<div class="col-lg-9 col-md-9 col-sm-9">
<div class="slider">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
     <li data-target="#carousel-example-generic" data-slide-to="4"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
    <div class="item active">
      <img src="images/Slider/57486281_2098637356920937_2919918389310783488_n.jpg" width="100%" height="auto" class="img-responsive" alt="...">
      
    </div>
    
    <div class="item">
      <img src="images/Slider/93721144_2789245271193472_7925390124949438464_n.jpg" width="100%" height="auto" class="img-responsive" alt="...">
      
    </div>
    
        <div class="item">
      <img src="images/Slider/82146192_2620217784762889_3003691245382926336_n.jpg"  width="100%" height="100px" class="img-responsive" alt="...">
      
    </div>
    <div class="item">
      <img src="images/Slider/83031245_2620217724762895_5546781199986327552_n.jpg"  width="100%" height="100px" class="img-responsive" alt="...">
      
    </div>
    
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
     </div>
               <!--Ya hissa Announcement Record se Utha kr dkha rha han   -->    
 <!--ANNOUNCEMENT insert  ka page se insert or Delete hongi  or 4 se zaida na hon-->
                                    
     <div class="col-lg-3 col-md-3 col-sm-3">
     <div style="color:#F00; font-family:Roboto; text-align:center; font-size:34px;" class="alert-link"><b>A</b>nnouncements</div><hr>
     
	  <?php
	  include'connection.php';
$qry="SELECT * FROM `announcements` ";
	$result=$con->query($qry);
	while($row=$result->fetch_assoc()){
	$name1=$row["Announcements"];
		
		

		

?>    
	 
 
	
          <h3>* <?php echo $name1;?> </h3>
           <?php
	}
	?>
     </div>
    
     </div>
     <br>
     <br>
   
    <!-- Yaha Se Ayat ki Picture Change hogi	-->										   
    <div class="container">
     <div class="row">
     <div class="col-lg-4 col-md-4 col-sm-4">
<div style="color: #06F; font-family:Roboto; font-size:34px;" class="alert-link"><b>A</b>yat of the <b>D</b>ay</div><hr>
     </div>
       <!-- Yaha Se Hadees ki Picture Change hogi	-->	
       
<div class="col-lg-4 col-md-4 col-sm-4">
<div style="color:#06F; font-family:Roboto; font-size:34px;" class="alert-link"><b>H</b>adees of the <b>D</b>ay</div><hr>
     </div>
     
       <!-- Yaha Se Fatwa ki Picture Change hogi	-->	
       
     <div class="col-lg-4 col-md-4 col-sm-4">
<div style="color:#06F; font-family:Roboto; font-size:34px;" class="alert-link"><b>F</b>atwa of the <b>D</b>ay</div><hr>
     </div>
     </div>
</div>
     </div>

  </div>

   </div>
   <br>
   <br>
   <?php
include'connection.php';
$qry="SELECT `Id`, `Name`, `Category`, `Image` FROM `ayathadeesfatwa` where Category='Ayat'";
	$result=$con->query($qry);
	$row=$result->fetch_assoc();
	$name1=$row["Name"];
		
		

		

?>
      <!-- AYAT ki Pic Yaha se change karny gy Bus Apna images/ change krna han-->
    <div class="container">
     <div class="row">
     <div class="col-lg-4 col-md-4 col-sm-4">
     <div style=" width:20px;height:30px;">

	<?php echo " <img src='./img/".$row["Image"]."'>"?>
   
    </div>
    </div>
    <?php
    $qry="SELECT `Id`, `Name`, `Category`, `Image` FROM `ayathadeesfatwa` where Category='H1' ";
	$result=$con->query($qry);
	$row=$result->fetch_assoc();
	$name1=$row["Name"];
		?>
          <!-- Hadees pak ki Pic Yaha se change karny gy Bus Apna images/ change krna han-->
<div class="col-lg-4 col-md-4 col-sm-4">
<div class="area">
 <?php echo " <img src='./img/".$row["Image"]."'>"?>
    </div>
    </div>
	
    <?php
    $qry="SELECT `Id`, `Name`, `Category`, `Image` FROM `ayathadeesfatwa` where Category='F1' ";
	$result=$con->query($qry);
	$row=$result->fetch_assoc();
	$name1=$row["Name"];
		?>
          <!-- fatwa ki Pic Yaha se change karny gy Bus Apna images/ change krna han-->
     <div class="col-lg-4 col-md-4 col-sm-4">
 <?php echo " <img src='./img/".$row["Image"]."'>"?>
    </div>
     </div>
     </div>
</div>
     </div>
<br>
<br>
 
 <!------Gallery----->
 
 <div class="container">
 <div class="row">
 <h1 style="color:#06F; font-family:Roboto; font-size:34px;" align="center" ><b>G</b>allery</h1>
 </div>
 <br>
 <br>
 <div class="row">

 <div class="col-lg-4 col-md-4 col-sm-4">
 <img src="images/6.jpg" class="img-responsive">
 </div>
 
 <div class="col-lg-4 col-md-4 col-sm-">
 <img src="images/6.jpg" class="img-responsive">
 </div>
 <div class="col-lg-4 col-md-4 col-sm-4">
 <img src="images/6.jpg" class="img-responsive">
 </div>

 </div>
 <div class="row">
 <div class="col-lg-4">
 </div>
 <div class="col-lg-4">
 <button type="button" class="btn btn-default"  style="width:150px; color:#F00; margin-left:100px; font-size:24px; "><a href="Gallery.php" style="text-decoration:none;">See More</a></button>
 </div>
 <div class="col-lg-4">
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

