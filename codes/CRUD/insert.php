<?php
require_once("proces.php");
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
        <legend >INSERT EMPLOYEE DATA</legend>
        <br>
        
        firstname:<br>
        <input type="text" name="firstname" placeholder="Enter your firstname" required="enter your first name" >
             
                    <br>

        
        lastname:<br>
        <input  type="text" name="lastname" placeholder="Enter your lastname"  required="enter your first name" > 
            
        <br>
            
            city_name:<br>
         <select name="city_name">    
        
       
        <option name="Kumasi" value="Kumasi">Kumasi</option> <br>  
        <option name="Accra" value="Accra" selected>Accra</option> <br>  
        <option name="Tamale" value="Tamale">Tamale</option>                            
        <option name="WA" value="Wa">Wa</option>                            
        <option name="Cape Coast" value="Cape Coast">Cape Coast</option> 
            
 </select>
            <br>
            email_ID: <br>
            <input type="email" name="email" placeholder="please your valid email" required >
        
        
        <br>
            
           <input type="submit" name="send" value="Add Record" class="in">
           
            
            
            <br>
      
        </fieldset>
        
        </form>
    
    
    
</body>
 
</html>

