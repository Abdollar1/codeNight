<?php 

$conn = mysqli_connect('localhost','root','','studinfo ');

if($conn){
    
    
    echo "connected successfully";
    echo "<br/>";
    }

    else if (!$conn){
        
        
        echo "error";
    }





?>
