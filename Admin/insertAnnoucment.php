<?php
 include'connection.php';

$AnoounceID=$_GET['id'];
$qry="DELETE FROM `announcements` WHERE ID='$AnoounceID' ";
$data=mysqli_query($con,$qry);
if($data)
{
	echo "Announcements Delete Hogyi han";

}
else{
	echo "Announcements Delete Nhi howi han";
}
?>
<html>
<head>
<title>
Announcements
</title>
</head>
<body>
<h1>Announcements Updated  from here</h1>
</form>

<form action="insertAnnoucment.php" method="post" enctype="multipart/form-data">
<table>

<tr>
    <td><label id="bb"> Yaha Per Announcements Likay. shukria
    <input type="text" id="File" size="30" multiple    name="t1" required >
    </label></td>
   </tr>
   <tr>
<td><input type='submit' name='submit' class='btn21'value="Insert" ></td>

</tr>

</table>
</form>
  </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alhaq";

$t1=$_POST['t1'];

$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "INSERT INTO `announcements`(`ID`, `Announcements`) VALUES ('','$t1')";

if ($con->query($sql) === TRUE) {
    echo "Announcements update hogyi han.";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}


?>

<?php
 include'connection.php';
$qry="SELECT * FROM `announcements` ";
	$result=$con->query($qry);
	
	?>
<form>
<table border="1px">
<tr>
<td>Id</td>
<td>Announcment</td>
<td>Operation</td>
</tr>
<tr>
<?php
while($row=$result->fetch_assoc()){
	$name1=$row["Announcements"];
	$id=$row["ID"];
	
	?>
    <td><?php echo "$id";?></td>
<td>
<?php echo "$name1";?>
</td>
<td>
<?php echo "<a href='insertAnnoucment.php?id=$row[ID]'>Delete</a>" ?>
</td>
</tr>
<?php
}
?>
</table>
</form>