<?php 
require_once("database.php"); 


if(isset($_POST["send"])){
$studentID = $_POST['studentId'];
$courseid = $_POST['CourseID'];
$coursename = $_POST['CourseName'];
$quiz1 = $_POST['Quiz1'];
$quiz2 = $_POST['Quiz2'];
$exams = $_POST['Exams'];
$total = $_POST['Total'];
$grade = $_POST['Grade'];
$tutorid = $_POST['TutorID'];

$sqls = "insert into results(studentId,CourseID,CourseName,Quiz1,Quiz2,Exams,Total,Grade,TutorID) values('$studentID','$courseid','$coursename','$quiz1','$quiz2','$exams',$total,'$grade','$tutorid')";  
$queryin =mysqli_query($conn,$sqls);

if ($queryin) {
    
    header("location:viewresult.php");
}
else {
	echo "Could not insert data";
     
}
  }  
     ?>