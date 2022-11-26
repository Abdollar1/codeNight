
<?php
        //displaying information form 
        /*multiple line*/
        //echo "<h2> we are about to display something </h2>";
        $firstnumber = $_POST["firstno"];
        $secondnumber = $_POST["lastno"];
        $option= $_POST["operations"];
        $answer =0;


        if($option=="sum"){

            $answer = $firstnumber + $secondnumber;
        }
         elseif($option=="sub"){
             $answer = $firstnumber - $secondnumber;


         }
        elseif($option=="mul"){

            $answer = $firstnumber * $secondnumber;

        }
        elseif($option=="div"){

            $answer = $firstnumber / $secondnumber;

        }
        elseif($option=="mod"){

            $answer = $firstnumber % $secondnumber;

        }



?>




<!doctype html>

 
<html>
        <head>
            <tit></tit>
        <link rel="stylesheet" href="edit.css">

        </head>

        <body align="center">

        <form action="calculate.php" method="post" class="cal">
        <h1>ONLINE CALCULATOR</h1>

         <fieldset>

        <legend> calculation of 2 numbers</legend>
                        <br />


        SELECT OPERATOR: <br />
        <select name="operations">

        <option> please select a operator</option>
                    <option value="sum"> ADDICTION(+)</option>
                    <option value="mul">MULTIPLICATION(*)</option>
                    <option value="sub"> SUBTRACTION(-)</option>
                    <option value="div">DIVISION(/)</option>
                    <option value="mod">MODUS(%)</option>
             </select><br>




         First Number: <br />
                <input type= "text" placeholder="enter first number" required  name="firstno"> <br />

        Second Number: <br />
                <input type= "tex" placeholder="enter last number" required   name="lastno"> <br />

                <p>click on the link below to display the sum</p>

     <input type= "SUBMIT" value="calculate" class="calc" > <br />
        Answer:
             <h3> <?php echo $answer ?> </h3>



        </fieldset>

        </form>

    
    
    
       </body>
</html>