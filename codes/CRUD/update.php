<?php
 include_once ("processupdate.php");
$userid = $_GET['id'];

$sql = "select * from mydata where id='$userid'";
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
            <input type="hidden" name ="id" value="<?php echo $userid ?>" >
        <br>
        
       
        firstname:<br>
        <input type="text" name= "firstname" placeholder="Enter your firstname" required="enter your first name" value="<?php echo $userdata['firstname']?>">
             
                    <br>

        
        lastname:<br>
        <input  type="text" name= "lastname" placeholder="Enter your lastname"  required="enter your first name" value="<?php echo $userdata['lastname']?>"> 
            
        <br>
            
            city_name:<br>
         <input name="city_name" placeholder="city" value="<?php echo $userdata['city_name']?>" >
            
            <br>
            email_ID: <br>
            <input type="email" name="email" placeholder="please your valid email" required="enter your email" value="<?php echo $userdata['email']?>">
        
        
        <br>
            
           <input type="submit" value="save" name="update" >
            
            
            <br>
      
        </fieldset>
        
        </form>
    
    
    
    </body>
 
</html>

