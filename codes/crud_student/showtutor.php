<?php  
require_once("database.php");

$sql = "select * from tutors";
$querys = mysqli_query($conn, $sql);
$allusers= mysqli_fetch_all($querys, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>student</title>
     <link rel="stylesheet" href="table.css">
</head>
<body>
                <h2 style="text-align: center; color:white">new tutor added successfully</h2>
	<table class="show" border="1"  height="300px" widht="300px"  border="1" >
		<tr>
			<th>TUTOR_ID</th>
			<th>TUTOR NAME</th>
			<th>PROGRAMMER_ID</th>
			<th>COURSE_ID</th>
            
			<th colspan="2">Options</th>
		</tr>
 
		<?php  
		foreach ($allusers as $userdata) {
		?>
			<tr>
				<td><?php echo $userdata['TutorId']; ?></td>
				<td><?php echo $userdata['TutorName']; ?></td>
				<td><?php echo $userdata['ProgrammeID']; ?></td>
				<td><?php echo $userdata['CourseID']; ?></td>
		 
                
					<td><a class="hr" href="updatetutor.php?id=<?php echo $userdata['TutorId']; ?>">Update</a></td>
					<td><a class="hr" href="deleteTutor.php?del=<?php echo $userdata['TutorId']; ?>">Delete</a></td>
                   
                
				 
			</tr>
		<?php
		}
		?>

    
	</table>
     <a class="add" href="tutors.php">Add New Record</a>

	 <br>
	 <br>
	 <a class="add" href="home.php">main menu</a>
</body>
</html>