<?php 
include_once("connection.php"); 


 
$First = $_POST['First'];
$Middle = $_POST['Middle'];
$Last = $_POST['Last'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Class = $_POST['Class'];
$Doa= $_POST['Dateofadmittance'];
$Nog = $_POST['Nameofguider'];
$Gm = $_POST['Guidernumber'];
$Reside = $_POST['Residing'];
 
 

$sqls = "insert into new_student (Firstname,Middle_name,Last_name,Age,Gender,Class,Date_of_admittance,Name_of_guider,Guider_number,Residing,House_number) values('$First','$Middle','$Last','$Age','$Gender','$Class','$Doa','$Nog','$Gm','$Reside');";  
 mysqli_query($conn,$sqls);
    
    header("location : insert.php");
 
     ?>