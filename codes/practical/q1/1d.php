<?php 
$myarray = array("bright", "tommy","uthman");
 
print_r($myarray);

 
echo "<br>";
$anotherarray[0] = "pizza";
$anotherarray[1] = "rice";
$anotherarray[2] = "fufu";
 

print_r($anotherarray);
echo "<br>";

$thirdarray = array(
"firstname" => "asap",
"secondname" => "dasty",
"age" => "20",
);


    unset($thirdarray["asap"]);

    print_r($thirdarray);
echo "<br>";
    echo sizeof($thirdarray);
    





?>