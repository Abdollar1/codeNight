<?php
require_once("courseprocess.php");
?>

<!doctype html>
<html>
<head>
    
    <title>insert</title>
    
    <link rel="stylesheet" href="coursemain.css">
     
     
</head>
<body>
    
    <form action="" method="post"> 
        <fieldset>      
        <legend >INSERT COURSES DATA</legend>
        CourseID:<br>
        <input type="text" name="CourseId" placeholder="provide your course_id" required>
             
                    <br>
       CourseName:<br>
        <input type="text" name="CourseName" placeholder="Enter your tutor name" required>
             
                    <br>

        
        ProgrammeID:<br>
        <input  type="text" name="ProgrammeID" placeholder="Enter your programme_id"  required> 
            <br>

          

       TutorID:<br>
        <input type="text" name="TutorID" placeholder="tutor_Id" required>
             
        <br>
                   
        
        
        
        <br>
        <input type="submit" name="send" value="Add Record" class="in">
           
        <br>

        
	 <br>
	 <a class="add" href="home.php">main menu</a>

     <br>
     <br>
	 <a class="add" href="showcourse.php">view course information</a>
      
        </fieldset>
        
        </form>
   
</body>
</html>
 