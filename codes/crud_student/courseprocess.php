<?php 
    require_once("database.php"); 


    if(isset($_POST["send"])){
    $courseid = $_POST['CourseId'];
    $coursename = $_POST['CourseName'];
    $programmeid = $_POST['ProgrammeID'];
    $tutorid = $_POST['TutorID'];
    

    $sqls = "insert into courses(CourseId,CourseName,ProgrammeID,TutorID) values(' $courseid','$coursename','$programmeid','$tutorid')";  
    $queryin =mysqli_query($conn,$sqls);

    if ($queryin) {
        
        header("location:showcourse.php");
    }
    else {
        echo "Could not insert data";
        
    }
    }  
        ?>