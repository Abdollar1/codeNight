<?php
 include_once ("processupdatestudent.php");
$studentid = $_GET["id"];

$sql = "select * from students where StudentId='$studentid'";
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
            <input type="hidden" name ="StudentId" value="<?php echo $studentid ?>" >
        <br>
        
       
        firstname:<br>
        <input type="text" name= "FirstName" placeholder="Enter your firstname" required="enter your first name" value="<?php echo $userdata['FirstName']?>">
             
                    <br>

        
        lastname:<br>
        <input  type="text" name= "LastName" placeholder="Enter your lastname"  required="enter your last name" value="<?php echo $userdata['LastName']?>"> 
            
        <br>
            
            Gender:<br>
         <input name="Gender" placeholder="city" value="<?php echo $userdata['Gender']?>" >
            
            <br>
            programme_ID: <br>
            <input type="text" name="ProgrammeID" placeholder="please your valid programme_ID" required="enter your PID" value="<?php echo $userdata['ProgrammeID']?>">
        
        
        <br>

        electives: <br>
            <input type="text" name="Electives" placeholder="electives" required="please,provide your electives" value="<?php echo $userdata['Electives']?>">
        
        
        <br>

       Centre: <br>
            <input type="text" name="Centre" placeholder="please your valid centre name" required="centre name" value="<?php echo $userdata['Centre']?>">
        
        
        <br>
            
           <input type="submit" value="save" name="update">
 
           
            
            <br>
      
        </fieldset>
        
        </form>
    
    
    
    </body>
 
</html>

