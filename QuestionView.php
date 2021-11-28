<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>سوالات</title>
</head>

<body>
<h1>Sawalat/سوالات</h1>
<?php
 include'connection.php';
$qry="SELECT * FROM `questioninfo` ";
	$result=$con->query($qry);
	
	?>
<form>
<table border="1px">
<tr>
<td>Name</td>
<td>Phone Number</td>
<td>Sawal/Masla</td>
<tr>
<?php
while($row=$result->fetch_assoc()){
	$name1=$row["Name"];
	$PhNo=$row["PhoneNumber"];
	$masla=$row["Masla"];
	
	?>
   
<td>
<?php echo "$name1";?>
</td>
<td>
<?php echo "$PhNo" ?>
</td>
<td>
<?php echo "$masla" ?>
</td>
</tr>
<?php
}
?>
</table>
</form></body>
</html>