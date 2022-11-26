<?php
include_once ("database.php");


 
$first = $_POST['first'];
$lastname = $_POST['last'];
$email = $_POST['email'];

$sqli = "insert into info (id, firstname, lastname, email) values ('$first','$lastname','$email');";
      
     mysqli_query($conn, $sqli);

header("location : index.php");



?>