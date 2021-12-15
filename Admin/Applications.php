
<?php
include'connection.php';

$qry="SELECT * FROM `admission` ";
	$result=$conn->query($qry);

	
	


		

		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
  
<body>
	<div class="container">
		<h1 style="text-align: center;">Student Application</h1>
		<div class="" style="border-top: 3px solid #5abfb8;"></div>
		<div class="profile">
			<table style="margin-bottom: 20px; margin-top: 20px;" width="70%" cellspacing="10" cellpadding="10" class="tableStyle" border="1px"  >
        <tbody><tr style="margin-bottom: 5px;">
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue; margin-bottom: 5px;">
                Registration ID:
            </td>
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue; margin-bottom: 5px;">
                Student First Name:
            </td>
            
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue;">
                Student Last Name:
            </td>
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue;">
                Address
            </td>
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue; margin-bottom: 5px;">
                Gender:            </td>
          
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue; width:200px;">
                Date Of Birth
            </td>
           <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue;">
             Phone Number
            </td>
           
          
           
                      
           <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; width:30PX; background-color: lightblue;">
                Image</td>
           
        </tr>
         <?php
  while($row=$result->fetch_assoc()){
	
?>
          
        <tr style="margin-bottom: 5px;">
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue; margin-bottom: 5px;">
              <?php   echo $row["RegId"];?>
            </td>
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue; margin-bottom: 5px;">
              <?php   echo $row["FirstName"];?>
            </td>
            
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue;">
               <?php  echo $row["LastName"]; ?>
            </td>
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue;">
                 <?php  echo $row["Address"]; ?>
            </td>
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue; margin-bottom: 5px;">
                    <?php  echo $row["Gender"]; ?>          </td>
          
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue;">
                <?php  echo $row["Course"]; ?> 
            </td>
          
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue;">
                <?php  echo $row["DOB"]; ?> 
            </td>
           <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue;">
                 <?php  echo $row["PhoneNo"]; ?> 
            </td>
           
            <td class="tableHeaderStyle" style="padding-left: 20px; padding-right: 20px; vertical-align: middle; background-color: lightblue; margin-bottom: 5px;">
                               <?php echo " <img src='./img/".$row["Image"]."'>"?>  
            </td>
            
            
        </tr>
        
           <?php
}
?>
    </tbody></table>
		</div>

	</div>

	  


<!-- <?php
include'footer.php';
?> -->
</body>
</html>