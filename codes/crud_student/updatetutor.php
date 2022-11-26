<?php
 include_once ("processupdatetutor.php");
$tutorid = $_GET["id"];

$sql = "select * from tutors where TutorId='$tutorid'";
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
                  
        <legend >UPDATE EMPLOYEE DATA</legend>
            <input type="hidden" name ="TutorId" value="<?php echo $tutorid ?>" >
        <br>
        
       
        Tutorname:<br>
        <input type="text" name= "TutorName" placeholder="Enter your Tutor Name" required="enter your Tutor name" value="<?php echo $userdata['TutorName']?>">
             
                    <br>

        
         Programme_id:<br>
        <input  type="text" name= "ProgrammeID" placeholder="Enter your programme_id"  required="enter your programme_ID" value="<?php echo $userdata['ProgrammeID']?>"> 
            
        <br>
            
        <br>
            courseid: <br>
            <input type="text" name="CourseID" placeholder="please your valid course_ID" required="enter your courseID" value="<?php echo $userdata['CourseID']?>">
        
        
        <br>

       
            
           <input type="submit" value="save" name="update">
 
           
            
            <br>
      
        </fieldset>
        
        </form>
    
    
    
    </body>
 
</html>

