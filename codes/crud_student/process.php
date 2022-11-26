    <?php 
    require_once("database.php"); 


    if(isset($_POST["send"])){
    $studentid = $_POST['studentId'];
    $Firstname = $_POST['FirstName'];
    $Lastname = $_POST['LastName'];
    $gender = $_POST['Gender'];
    $programmeid = $_POST['ProgrammeID'];
    $electives = $_POST['Electives'];
    $centre = $_POST['Centre'];

    $sqls = "insert into students(studentId,FirstName,LastName,Gender,ProgrammeID,Electives,Centre) values(' $studentid','$Firstname','$Lastname','$gender','$programmeid','$electives','$centre ')";  
    $queryin =mysqli_query($conn,$sqls);

    if ($queryin) {
        
        header("location:showuser.php");
    }
    else {
        echo "Could not insert data";
        
    }
    }  
        ?>