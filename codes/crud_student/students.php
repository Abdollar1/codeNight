<?php
require_once("process.php");
?>

<!doctype html>
<html>
<head>
    
    <title>insert</title>
    
    <link rel="stylesheet" href="main.css">
     
     
</head>
<body>
    
    <form action="" method="post"> 
        <fieldset>      
        <legend >INSERT STUDENT DATA</legend>
        studentid:<br>
        <input type="text" name="studentId" placeholder="provide your student_Id" required>
             
                    <br>
       firstname:<br>
        <input type="text" name="FirstName" placeholder="Enter your firstname" required>
             
                    <br>

        
        lastname:<br>
        <input  type="text" name="LastName" placeholder="Enter your lastname"  required> 
            <br>

         Gender:<br>
         <select name="Gender">    
        <option name="Male" value="Male">Male</option> <br>  
        <option name="Female" value="Female">Female</option> <br>  
        <option name="None" value="None" selected>None</option> <br>                           
         
        </select>
        <br>

         programmeid:<br>
        <input type="text" name="ProgrammeID" placeholder="programmeId" required>
             
        <br>
                   
        Elective: <br>
         <input type="Electives" name="Electives" placeholder="please your elective" required >
        
        
        <br>

        Centre: <br>
            <input type="Centre" name="Centre" placeholder="please your valid centre name" required >
        
        
        <br>
        <input type="submit" name="send" value="Add Record" class="in">
           
        <br>
      
	 <br>
	 <a  href="home.php">main menu</a>

     
	 <br>
	 <a   href="showuser.php">view student data</a>
        </fieldset>
        
        </form>
   
</body>
</html>
 