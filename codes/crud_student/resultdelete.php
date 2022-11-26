<?php
 include_once "database.php";
if(isset($_GET['del'])){
$studentid = $_GET['del']; 

$sqlite="delete from results where studentId='$studentid'";

if(mysqli_query($conn, $sqlite)){
    
   
    header("location:viewresult.php");
    
}
else {
    
   echo "couldnt:" . mysqli_error($conn); 
}

}
?>