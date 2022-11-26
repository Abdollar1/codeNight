 <?php

require_once("database.php"); 
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
        <legend >INSERT Student information</legend>
        <br>
        
        Surname:<br>
        <input type="text" name="Surname/Family name" placeholder="Surname/Family name" required="enter your first name" >
             
                    <br>

        
        Firstname:<br>
        <input  type="text" name="Firstname" placeholder="Enter your Firstname"  required="enter your first name" >
            <br>
        
             Middle name:<br>
        <input  type="text" name="Middle name" placeholder="Enter your Firstname"  required="enter your first name" >
            
            
            
        <br>
            
               Sex:<br>
         <select name="Sex">    
        
       
        <option name="male" value="male">male</option> <br>  
        <option name="Female" value="Female" selected>Female</option> <br>  
       
 </select>
            <br>
            <!--date of birth-->
                 Date of Birth:<br>
         <select name="Date of Birth">    
        
      <option>
     <input  type="date"  > </option>  
        
       
 </select>
            <br>
            <br>
            <br>
            Country of Origin:<br>
         <select name="Country of Origin">    
        
       
        <option name="Ghana" value="Kumasi">Ghana</option> <br>  
        <option name="Togo" value="Togo" selected>Togo</option> <br>  
         
            
 </select> 
            <br>
      
        </fieldset>
         <input type="submit" name="send" value="Add student" class="in">
        </form>
    
    
   
    
</body>
 
</html>

<?php  
require_once("database.php");

$sql = "select * from studinfo";
$querys = mysqli_query($conn, $sql);
$allusers= mysqli_fetch_all($querys, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
     <link rel="stylesheet" href="table.css">
</head>
<body>
                <h2 style="text-align: center; color:white">new member added successfully</h2>
	<table class="show" border="1" height="30px" widht="30px" border="1px">
		<tr>
			<th>UserID</th>
			<th>Surname</th>
			<th>Firstname</th>
			<th>Middle name</th>
			<th>Sex</th>
			<th>Date of Birth</th>
			<th>Country of Origin</th>
			<th colspan="3">Options</th>
		</tr>
 
		<?php  
		foreach ($allusers as $userdata) {
		?>
			<tr>
				<td><?php echo $userdata['id']; ?></td>
				<td><?php echo $userdata['Surname']; ?></td>
				<td><?php echo $userdata['Firstname']; ?></td>
				<td><?php echo $userdata['Middle name']; ?></td>
				<td><?php echo $userdata['Sex']; ?></td>
				<td><?php echo $userdata['Date of birth']; ?></td>
				<td><?php echo $userdata['County of Origin']; ?></td>
				 
				 
					<td><a class="hr" href="update.php?id=<?php echo $userdata['id']; ?>">Update</a></td>
					<td><a class="hr" href="delete.php?del=<?php echo $userdata['id']; ?>">Delete</a></td>
                    <td><a class="hr"  href="view.php?view=<?php echo $userdata['id']; ?>">View</a></td>
                
				 
			</tr>
		<?php
		}
		?>

    
	</table>
     <a class="add" href="sign-up.html">Add New Record</a>
</body>
</html>

