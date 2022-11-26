<?php
 include_once ("database.php");
if(isset($_GET["id"])){
$userid = $_GET['id'];
$sql = "select * from hold where id='$userid'";
$query = mysqli_query($conn, $sql);
$view = mysqli_fetch_assoc($query);
}
?>
<!doctype html>
<html>
<head>
    <title>Record Details</title>
    
    </head>
    <body style="text-align:center;
                 background-color:#586c74;">
         
        <label>FirstName: </label>
    <h3> <?= $view['firstname'];?>  </h3>
        <label>secondname: </label>
    <h3> <?= $view['secondname'];?>  </h3>
        
        <label>loacation: </label>
    <h3> <?= $view['city'];?>  </h3>
        
        <label>Email: </label>
    <h3> <?= $view['email'];?>  </h3>
        <a class="Gback" href="index.php">Go back</a>
            </div>
    </body>
    

</html>