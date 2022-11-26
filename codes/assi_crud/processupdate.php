<?php 
include 'database.php';

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$city = $_POST['city'];
$userid = $_GET['id'];

$sql = "UPDATE myusers SET first_name = '$firstname', last_name = '$lastname', email = '$email', city_name = '$city' WHERE userid='$userid' ";
$query = mysqli_query($conn, $sql);

if ($query) {
	echo "Updated Successfully";
	header("Location: showusers.php");
}
else {
	echo "Could not update data";
}