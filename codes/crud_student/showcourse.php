<?php  
require_once("database.php");

$sql = "select * from courses";
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
                <h2 style="text-align: center; color:white">new Course added successfully</h2>
	<table class="show" border="1"  height="300px" widht="300px"  border="1" >
		<tr>
			<th>COURSE_ID</th>
			<th>COURSE NAME</th>
			<th>PROGRAMME_ID</th>
			<th>TUTOR_ID</th>
            
			<th colspan="2">Options</th>
		</tr>
 
		<?php  
		foreach ($allusers as $userdata) {
		?>
			<tr>
				<td><?php echo $userdata['CourseId']; ?></td>
				<td><?php echo $userdata['CourseName']; ?></td>
				<td><?php echo $userdata['ProgrammeID']; ?></td>
				<td><?php echo $userdata['TutorID']; ?></td>
		 
                
					<td><a class="hr" href="updatecourse.php?id=<?php echo $userdata['CourseId']; ?>">Update</a></td>
					<td><a class="hr" href="deletecourse.php?del=<?php echo $userdata['CourseId']; ?>">Delete</a></td>
                   
                
				 
			</tr>
		<?php
		}
		?>

    
	</table>
     <a class="add"  href="course.php">Add New Record</a>

	 <br>
	 <br>
	 <a class="add"  href="home.php">main menu</a>
</body>
</html>