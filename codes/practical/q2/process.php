<?php 
require_once("database.php"); 


if(isset($_POST["send"])){
$fname = $_POST['Firstname'];
$lname = $_POST['Firstname'];
$mail = $_POST['email'];
$city = $_POST['city_name'];

$sqls = "insert into mydata(firstname,lastname,city_name,email) values('$fname','$lname','$city','$mail')";  
$queryin =mysqli_query($conn,$sqls);

if ($queryin) {
    
    header("location:index.php");
}
else {
	echo "Could not insert data";
     
}
  }  
     ?>