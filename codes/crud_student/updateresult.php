<?php
 include_once ("processupdateresult.php");
$studentid = $_GET['id'];

$sql = "select * from results where studentId='$studentid'";
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
                  
        <legend >update result</legend>
            <input type="hidden" name ="studentId" value="<?php echo $studentid ?>" >
        <br>
        
       
        coursename:<br>
        <input type="text" name= "CourseName" placeholder="Enter your course name" required="enter your course name" value="<?php echo $userdata['CourseName']?>">
             
                    <br>

        
        quiz_1:<br>
        <input  type="text" name= "Quiz1" placeholder="quiz 1"  required="quiz 1 marks" value="<?php echo $userdata['Quiz1']?>"> 
            
        <br>
           
            quiz_2: <br>
            <input type="text" name="Quiz2" placeholder="quiz 2" required="quiz 2 marks" value="<?php echo $userdata['Quiz2']?>">
        
        
        <br>
         
        exams: <br>
            <input type="text" name="Exams" placeholder="enter exams score" required="exams score" value="<?php echo $userdata['Exams']?>">
        
        
        <br>

        total: <br>
            <input type="text" name="Total" placeholder="enter exams score" required="exams score" value="<?php echo $userdata['Total']?>">
        
        
        <br>
        grade: <br>
            <input type="text" name="Grade" placeholder="enter Grade" required="Grade" value="<?php echo $userdata['Grade']?>">
        
        
        <br>
            
           <input type="submit" value="save" name="update" >
            
            
            <br>
      
        </fieldset>
        
        </form>
    
    
    
    </body>
 
</html>

