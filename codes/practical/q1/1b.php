<?php
 

if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){

$i = 2;
$isprime = true;
while ($i < $_GET['number']){
    
  if($_GET['number'] % $i == 0) {
      
      
      $isprime = false;
  } 
    $i++;
   
}
if($isprime){
    
    echo "<p>".$i."is a prime </p>";
    
    
}
else{
    
    echo "<p>".$i."is a prime </p>";
}

 

}
else if

?>


<form>
<input name="number" type="text">
    
<input type="submit" value="check">


</form>