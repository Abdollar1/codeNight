<?php
 include_once "database.php";
if(isset($_GET['del'])){
$courseid = $_GET['del']; 

$sqlite="delete from courses where CourseId='$courseid'";

if(mysqli_query($conn, $sqlite)){
    
   
    header("location:showcourse.php");
    
}
else {
    
   echo "couldnt:" . mysqli_error($conn); 
}

}
?>