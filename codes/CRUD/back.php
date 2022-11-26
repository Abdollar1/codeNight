 <?php 
 
require_once("database.php");
if(isset($_POST["back"])){

$sql = "select * from mydata";
$querys = mysqli_query($conn, $sql);
$allusers= mysqli_fetch_all($conn, $querys);

 
if ($querys ){
    
    header("location:showusers.php");
}
else {
	echo "return denied";
     
}
  }  
 
  }  
     ?>