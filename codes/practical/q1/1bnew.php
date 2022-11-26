<?php  
echo "Enter the prime number?";  
$n=readline();  
$sum=0;  
    while($n!=0)  
        {  
        $reverse = $n%10;  
        $sum = $sum*10 + $reverse;  
        $n= $n/10;  
        }  
    $flag = 0;  
    for ($j = 2; $j <= $sum / 2; $j++)  
    {  
        if (($sum % $j) == 0)  
        {  
            $flag = 1;  
            break;  
        }  
    }  
    if ($flag == 0)  
          echo ("Twisted Prime");  
     else  
        echo("Not Twisted Prime");  
?> 