<?php
  include_once "database.php";
     
     if(isset($_POST['update'])){
     $studentid = $_POST['StudentId'];
     $Firstname = $_POST["FirstName"];
     $Lastname = $_POST["LastName"];
     $gender = $_POST["Gender"];
     $Programmeid = $_POST["ProgrammeID"];
     $electives = $_POST["Electives"];
     $centre= $_POST["Centre"];
     
     
     $sql = mysqli_query($conn, "update students set FirstName = '".$Firstname."', LastName = '".$Lastname."', Gender = '".$gender."', ProgrammeID = '".$Programmeid."', Electives = '".$electives."', Centre = '".$centre."' where StudentId='$studentid'") or die(mysqli_error($conn));
         
     if($sql) {
        
         header("location:showuser.php");
     }
         else {
             echo "failed to create account";
         }
         
     }
     
         ?>