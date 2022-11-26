<?php
  include_once "database.php";
     
     if(isset($_POST['update'])){
     $tutorid = $_POST['TutorId'];
     $tutorname = $_POST["TutorName"];
     $programmeid = $_POST["ProgrammeID"];
     $courseid = $_POST["CourseID"]; 
     
     
     $sql = mysqli_query($conn, "update tutors set TutorName = '".$tutorname."', ProgrammeID = '".$programmeid."', CourseID = '".$courseid."' where TutorId='$tutorid'") or die(mysqli_error($conn));
         
     if($sql) {
        
         header("location:showtutor.php");
     }
         else {
             echo "failed to create account";
         }
         
     }
     
         ?>