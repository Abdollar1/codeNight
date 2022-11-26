<?php  
require_once("database.php");

$sql = "select * from results";
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
                <h2 style="text-align: center; color:white">new result added successfully</h2>
	<table class="show" border="1" height="300px" widht="300px" border="1px">
		<tr>
			<th>STUDENT_ID</th>
			<th>COURSE_ID</th>
			<th>COURSE NAME</th>
			<th>QUIZ_1</th>
			<th>QUIZ_2</th>
			<th>EXAMS</th>
			<th>TOTAL</th>
			<th>GRADE</th>
            <th>TUTOR_ID</th>
			<th colspan="2">OPTIONS</th>
		</tr>
 
		<?php  
		foreach ($allusers as $userdata) {
		?>
			<tr>
				<td><?php echo $userdata['studentId']; ?></td>
				<td><?php echo $userdata['CourseID']; ?></td>
				<td><?php echo $userdata['CourseName']; ?></td>
				<td><?php echo $userdata['Quiz1']; ?></td>
				<td><?php echo $userdata['Quiz2']; ?></td>
				<td><?php echo $userdata['Exams']; ?></td>
				<td><?php echo $userdata['Total']; ?></td>
                <td><?php echo $userdata['Grade']; ?></td>
                <td><?php echo $userdata['TutorID']; ?></td>
				 
					<td><a class="hr" href="updateresult.php?id=<?php echo $userdata['studentId']; ?>">Update</a></td>
					<td><a class="hr" href="resultdelete.php?del=<?php echo $userdata['studentId']; ?>">Delete</a></td>
  
                
				 
			</tr>
		<?php
		}
		?>

    
	</table>
     <a class="add" href="result.php">Add New Record</a>
	 <br>
	 <br>
	 <a class="add" href="home.php">Main Menu</a>
</body>
</html>