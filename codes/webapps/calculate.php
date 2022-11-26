<!doctype html>
<html>
<head>
    
    
<link rel="stylesheet" href=edi.css />
    <title>
    calculation of number</title> 
    
    </head>
<body>

    <form action="display.php" method="post" class="">
          <h1>ONLINE CALCULATOR</h1>
            
        
        <fieldset >
        
            <legend> calculation of 2 numbers</legend>
                    <br />
                    
            
 First Number: <br />
            <input type= "text" placeholder="enter first name" required  
                   name="firstno"> <br />
            
            Second Number: <br />
            <input type= "text" placeholder="enter last name" required  
                   name="lastno"> <br />
            
            <p>   click on the link below to display the sum on the display.php  </p>

 <input type= "submit" name="calculate" > 


   
             </fieldset>
         
    </form>
    <form action="display.php" method="post">
        
        
        
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
        
        <fieldset>
            
            <legend>personal info</legend>
            
            first name: <br />
            <input type= "text" placeholder="enter first name" required 
                   name="firstno"> <br />

            second number: <br />
            <input type= "text"
                   name= "secondNO"  placeholder=" enter second name" require > <br />


            
     course: <br />
            <input type= "text" placeholder="select course" required 
                   name="course"> <br />
            
           course: <br />
            <select name="course">
                
            <option value=""> please select a program</option>
            <option value="CE 271"> Freanch</option>
                <option value="CE 274"> Computer Grapgic</option>
                <option value="CE 275"> OPP C++</option>
                
            
            
            
            
            </select> <br/>
            
            
            
            
            
    religion: <br />
            <input type="text" placeholder="type course"
                   
                   required> <br />
            
            Religion: <br />
            <select name="religion">
            <option value="">please select a religion</option>
                <option>Muslim</option>
                <option>Penticost</option>
                <option>Methodist</option>
                <option>Roman</option>
            
            
            </select>
            
            
</fieldset>
        
    <input type ="radio" name="gender"
           value="m">male <br />
       
        <input type ="radio" name="gender"
           value="f">female <br />
        
        <input type ="radio" name="gender"
           value="o">other
        
        <br />
        <br />
        <br />
        <br />
        
        Address: <br />
        <textarea name="Address" rows="10" cols="20"
                  placeholder="please typr your address here"></textarea>
       <br />
       <br />
       <br />
    <input type="checkbox" name="vehicle" value="tundra">i have a car <br />
    <input type="checkbox" name="vehicle" value="motor">i have a motor <br />
        
        <input type="button" onclick="alert('hllo world')" value="click me">
    
    
    
    </form>
        </form>
    
    </body>

</html>