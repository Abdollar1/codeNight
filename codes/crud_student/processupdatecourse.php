<?php
  include_once "database.php";
     
     if(isset($_POST['update'])){
     $courseid = $_POST['CourseId'];
     $coursename = $_POST["CourseName"];
     $programmeid = $_POST["ProgrammeID"];
     $tutorid = $_POST["TutorID"]; 
     
     
     $sql = mysqli_query($conn, "update courses set CourseName = '".$coursename."', ProgrammeID = '".$programmeid."', TutorID = '".$tutorid."' where CourseId='$courseid'") or die(mysqli_error($conn));
         
     if($sql) {
        
         header("location:showcourse.php");
     }
         else {
             echo "failed to create account";
         }
         
     }
     
         ?>