<?php 
include ('database.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['Lastname'];
$email = $_POST['email'];
$city = $_POST['city_name'];

$sql = "INSERT INTO myusers(firstname, lastname, email, city_name) VALUES('$firstname', '$lastname', '$email', '$city')";
$query = mysqli_query($conn, $sql);

if ($query) {
	echo "Inserted Successfully";
	header("Location: showuser");
}
else {
	echo "Could not insert data";
}

?>