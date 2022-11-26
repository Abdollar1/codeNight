    <?php
     
  
include_once "database.php";

if(isset($_POST['update'])){
$uid = $_POST['id'];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$city_name = $_POST["city_name"];
$email_id = $_POST["email"];


$sql = mysqli_query($conn, "update mydata set firstname = '".$firstname."', lastname = '".$lastname."', city_name = '".$city_name."', email = '".$email_id."' where id='$uid'") or die(mysqli_error($conn));
    
if($sql) {
   
    header("location: showusers.php");
}
    else {
        echo "failed to create account";
    }
    
}

    ?>