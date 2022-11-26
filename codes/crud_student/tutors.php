<?php
require_once("TutorsProcess.php");
?>

<!doctype html>
<html>
<head>
    
    <title>insert</title>
    
    <link rel="stylesheet" href="tutormain.css">
     
     
</head>
<body>
    
    <form action="" method="post"> 
        <fieldset>      
        <legend >INSERT TUTORS DATA</legend>
        tutor_id:<br>
        <input type="text" name="TutorId" placeholder="provide your tutor_Id" required>
             
                    <br>
       TutorName:<br>
        <input type="text" name="TutorName" placeholder="Enter your tutor name" required>
             
                    <br>

        
        programme_id:<br>
        <input  type="text" name="ProgrammeID" placeholder="Enter your programme_id"  required> 
            <br>

          

         course_id:<br>
        <input type="text" name="CourseID" placeholder="course_id" required>
             
        <br>
                   
        
        
        
        <br>
        <input type="submit" name="send" value="Add Record" class="in">
           
        <br>

        
	 <br>
	 <a class="add" href="home.php">main menu</a>

     <br>
     <br>
	 <a class="add" href="showtutor.php">view tutor data</a>
      
        </fieldset>
        
        </form>
   
</body>
</html>
 