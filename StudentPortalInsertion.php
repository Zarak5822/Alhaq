

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alhaq";
if(isset($_POST['submit'])) {
$t1=basename($_FILES["t1"]["name"]);
//$tImage=basename($_FILES["tImage"]["name"]);
$t2=$_POST['t2'];
$t3=$_POST['t3'];

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

if($t1=="" && $t2=="" && $t3==""){
	echo "<script>alert('Baary Maharbani Dabby fill kary Shukria..')</script>"; 
}
else{
//$qry="INSERT INTO `fatwas`(`FatwaID`, `Name`, `Category`, `Image`) VALUES ('','$t2','$t3','$t1')";
$qry="INSERT INTO `studentportal`(`Student_ID`, `Name`, `Darja`, `Result`) VALUES ('','$t2','$t3','$t1')";
$result=$con->query($qry);



echo "<script>alert('Apki Kitab Mahfuze hogi han.! Shukria..')</script>"; 
}


}
//echo "New video inserted";

if(isset($_POST["submit"])) {
$target_dir = "./files/";
$target_file = $target_dir.basename($_FILES["t1"]["name"]);



$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

// Check if file already exists

// Check file size
//if ($_FILES["t1"]["size"] > 1000000000000000000000000000000000000000000000000000000000000000) {
  //  echo "Sorry, your file is too large.";
   // $uploadOk = 0;

// Allow certain file formats
if($imageFileType != "txt" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "jpg" && $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "mp3" && $imageFileType != "mp4"  && $imageFileType != "avi"  && $imageFileType != "pdf"  && $imageFileType != "xlsx" && $imageFileType != "pptx" && $imageFileType != "ppt") 
{
    echo "Sorry, only mp3,mp4,png,jpg,avi,pdf,doc,docx,pptx,xlsx,txt files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else 
{
if (move_uploaded_file($_FILES["t1"]["tmp_name"], $target_file)) 
{
        //echo "The file ". basename( $_FILES["t1"]["name"]). " has been uploaded.";
}
 else
  {
        echo "Sorry, there was an error uploading your file.";
  }
}
}

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book Insertion</title>
</head>

<body>






<div class="panel-body" style="height: 380px; margin:0; padding:0; ">
 <form action="" method="post" enctype="multipart/form-data">
<table>

<tr>
<td><label id="bb"> Upload Result Pdf File 
    <input type="file" id="File" size="30" multiple    name="t1" required >
    </label></td>
    <td><label id="bb"> Name
    <input type="text" id="File" size="30" multiple    name="t2" required >
    </label></td>
    <td><label id="bb"> Darja
    <input type="text" id="File" size="30" multiple    name="t3" required >
    </label></td>
   </tr>
   <tr>
<td><input type='submit' name='submit' class='btn2'value="Send" ></td>
</tr>

</table>


