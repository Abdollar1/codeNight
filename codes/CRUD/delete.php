<?php
 include_once "database.php";
if(isset($_GET['del'])){
$useriD = $_GET['del']; 

$sqlite="delete from mydata where id='$useriD'";

if(mysqli_query($conn, $sqlite)){
    
   
    header("location:showusers.php");
    
}
else {
    
   echo "couldnt:" . mysqli_error($conn); 
}

}
?>