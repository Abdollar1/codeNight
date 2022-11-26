<?php
 include_once ("database.php");
if(isset($_GET["view"])){
$userid = $_GET['view'];
$sql = "select * from mydata where id='$userid'";
$query = mysqli_query($conn, $sql);
$userdata = mysqli_fetch_assoc($query);
}
?>
<!doctype html>
<html>
<head>
    <title>Record Details</title>
    
    </head>
    <body style="text-align:center;">
        <label>FirstName: </label>
    <h3> <?= $userdata['firstname'];?>  </h3>
        <label>LastName: </label>
    <h3> <?= $userdata['lastname'];?>  </h3>
        
        <label>Location: </label>
    <h3> <?= $userdata['city_name'];?>  </h3>
        
        <label>Email: </label>
    <h3> <?= $userdata['email'];?>  </h3>
    </body>
    <a class="Gback" href="showusers.php">Go back</a>

</html>