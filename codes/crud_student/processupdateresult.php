<?php
     
  
     include_once "database.php";
     
     if(isset($_POST['update'])){
    $studentID = $_POST["studentId"];
     $courseid = $_POST["CourseID"];
     $coursename = $_POST["CourseName"];
     $quiz_1 = $_POST["Quiz1"];
     $quiz_2 = $_POST["Quiz2"];
     $exams = $_POST["Exams"];
     $total = $_POST["Total"];
     $grade = $_POST["Grade"];
   
     
     
     $sql = mysqli_query($conn, "update results set CourseName = '".$coursename."', Quiz1 = '".$quiz_1."', Quiz2 = '".$quiz_2."', Exams = '".$exams."',Grade = '".$grade."', Total = '".$total."'  where studentId='$studentID'") or die(mysqli_error($conn));
         
     if($sql) {
        
         header("location: viewresult.php");
     }
         else {
             echo "failed to create account";
         }
         
     }
     
         ?>