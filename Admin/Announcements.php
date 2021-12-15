<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:Login.php');
}

?>'
<?php

require 'connection.php';
if(isset($_POST['insert']))
{
$annoucement=$_POST['annoucement'];
$sql="INSERT INTO announcement (id, announcements) values ('','$annoucement')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Data Has been Added Succesfully")</script>';
    // header("location: Movie-Insert.php");
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
        <form class=" " action="" method="POST" enctype="multipart/form-data">
                    
                    <h1 class="heading"> Insert here </h1>

                              
                              <div class="form-group size">
                              <label for="exampleInputName"> Announcement</label>
                              <textarea required  type="text" class="form-control" name="annoucement" placeholder="Enter Post Title "></textarea>
                              <span class="text-danger"></span>
                              </div>
                   
                  </div>
                  <div class="form-group btn-save">
            <input required   type="submit" name="insert" value="Save" class="btn btn-success btn-block">
            </div>    
                  </form>
</div>
</div>
</body>
</html>