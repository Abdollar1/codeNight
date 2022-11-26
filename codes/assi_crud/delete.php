<?php  
include 'database.php';

$userid = $_GET['id'];
$sql = "DELETE FROM myusers WHERE userid='$userid' ";
$query = mysqli_query($conn, $sql);

if($query) {
	echo "Deleted Successfully";
	header("Location: showusers.php");
}
else {
	echo "Could not delete user";
}