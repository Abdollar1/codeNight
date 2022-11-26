<?php
 include_once ("processupdatecourse.php");
$courseid = $_GET["id"];

$sql = "select * from courses where CourseId='$courseid'";
$query = mysqli_query($conn, $sql);
$userdata = mysqli_fetch_assoc($query);


 
?>

<!doctype html>
<html>
<head>
    
    <title>insert</title>
   <link rel="stylesheet" href="main.css" />
      </head>
    <body>
    
    <form class="main" action="" method="post" > 
        <fieldset>
                  
        <legend >update course information</legend>
            <input type="hidden" name ="CourseId" value="<?php echo $courseid ?>">
        <br>
        
       
        course_Name:<br>
        <input type="text" name= "CourseName" placeholder="Enter your course name" required="enter your course name" value="<?php echo $userdata['CourseName']?>">
             
                    <br>

        
         Programme_id:<br>
        <input  type="text" name= "ProgrammeID" placeholder="Enter your programme_ID"  required="enter your programme_ID" value="<?php echo $userdata['ProgrammeID']?>"> 
            
        <br>
            
        <br>
            tutorid: <br>
            <input type="text" name="TutorID" placeholder="please your valid TutorID" required="enter your PID" value="<?php echo $userdata['TutorID']?>">
        
        
        <br>

       
            
           <input type="submit" value="save" name="update">
 
           
            
            <br>
      
        </fieldset>
        
        </form>
    
    
    
    </body>
 
</html>

