1 <!doctype html>
<html>
    <head>
  
        <title>calculator</title>
    </head>
    <body id="main">
    <h1>welcome! Do you want to perform a calculation</h1> 
        <h3>select an operator</h3>
        
        <!-- this gets the data from input and hide it from a third party -->
        <form method="GET"> 

    
        <input id="finput" type="text" name="opt1" placeholder="enter a number">
            <!-- this takes the first input from the user -->
            <select name="Operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
            <option>modulus</option>
            </select>
        <input id="sinput" type="text" name="opt2" placeholder="enter a number">
         <!-- this takes the second input from the user -->
            <br>
            <br>
       <button type="submit" name="submit" value="submit">calculate</button>
        <!-- this is the submit button -->
            </form>
        <br>
        <p>The answer is:</p>
        <?php
        //  the php codes starts here.

        //in here,i used the swith statement which is ease to understand
        if(isset($_GET['submit'])){
             $opt1 = $_GET['opt1'];
         $opt2 = $_GET['opt2'];
            $result = $_GET['Operator'];
            switch($result){
            case "None":
            echo "please select an operator";
                    break;
                case "Add":
            echo $opt1 + $opt2;
                    break;
                case "Subtract":
          echo $opt1 - $opt2;
                    break; 
                case "Multiply":
           echo $opt1 * $opt2;
                    break; 
                case "Divide":
           echo $opt1 / $opt2;
                    break; 
                case "modulus":
           echo $opt1 % $opt2;
                    break;
            }
            
        }
        
        
        ?>
    
   </body>
</html>