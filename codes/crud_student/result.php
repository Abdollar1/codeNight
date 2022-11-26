<?php
require_once("resultprocess.php");
?>

<!doctype html>
<html>
<head>
    
    <title>insert</title>
    
    <link rel="stylesheet" href="resultmain.css">
     
     
</head>
<body>
    
    <form action="" method="post"> 
        <fieldset>      
        <legend >input student result</legend>
        <br>
        
        studentId:<br>
        <input type="text" name="studentId" placeholder="Enter your studentId" required >
             
                    <br>

        
        CourseID:<br>
        <input  type="text" name="CourseID" placeholder="Enter your CourseID"  required > 
            
        <br>
                
        CourseName: <br>
        <input type="text" name="CourseName" placeholder="coursename" required >
        
        
        <br>
            
        Quiz_1: <br>
        <input type="text" name="Quiz1" placeholder="quiz 1 score" required >
        
        
        <br>

          
        QUiz_2:<br>
        <input  type="text" name="Quiz2" placeholder="quiz 2 score"  required="quiz 2 marks" > 
            
        <br>  
        Exams:<br>
        <input  type="text" name="Exams" placeholder="exams score"  required="exams scores" > 
            
        <br>  

          
        Total:<br>
        <input  type="text" name="Total" placeholder="Total score" required="total scores" > 
            
        <br>  
        Grade:<br>
        <input  type="text" name="Grade"> 
            
        <br>  
        Tutor_id:<br>
        <input  type="text" name="TutorID" placeholder="Enter your TutorID"  required="TutorID" > 
            
        <br>  
        
            
           <input type="submit" name="send" value="Add Record" class="in">
           
            
            
            <br>
            <br>
	 <a class="add" href="home.php">main menu</a>

     <br>
     <br>
	 <a class="add" href="viewresult.php">view result data</a>
        </fieldset>
        
        </form>
    
    
    
</body>
 
</html>

