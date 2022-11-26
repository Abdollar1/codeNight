<?php 
    require_once("database.php"); 


    if(isset($_POST["send"])){
    $tutorid = $_POST['TutorId'];
    $tutorname = $_POST['TutorName'];
    $programmeid = $_POST['ProgrammeID'];
    $courseid = $_POST['CourseID'];
    

    $sqls = "insert into tutors(TutorId,TutorName,ProgrammeID,CourseID) values(' $tutorid','$tutorname','$programmeid','$courseid')";  
    $queryin =mysqli_query($conn,$sqls);

    if ($queryin) {
        
        header("location:showtutor.php");
    }
    else {
        echo "Could not insert data";
        
    }
    }  
        ?>