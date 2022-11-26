<?php
 include_once "database.php";
if(isset($_GET['del'])){
$tutorid = $_GET['del']; 

$sqlite="delete from tutors where TutorId='$tutorid'";

if(mysqli_query($conn, $sqlite)){
    
   
    header("location:showtutor.php");
    
}
else {
    
   echo "couldnt:" . mysqli_error($conn); 
}

}
?>