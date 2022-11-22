<?php
    $con = new mysqli("localhost","root","");
            if($con->connect_errno > 0){
            die('Unable to connect to database [' . $con->connect_error . ']');  } 
        
    $con->query("CREATE DATABASE IF NOT EXISTS cgcicard");
    
            mysqli_select_db($con,"cgcicard");

            $balmiki="CREATE TABLE IF NOT EXISTS student (
            roll int(255) NOT NULL,
            student_name varchar(300)NOT NULL,
            father_name varchar(100)NOT NULL,
            semester varchar(300)NOT NULL,
            branch varchar(300)NOT NULL,
            ession varchar(255)NOT NULL,
            ddress varchar(255)NOT NULL,
            PRIMARY KEY(roll) )";
           $con->query($balmiki);

if(isset($_POST['submit'])){
    $roll = $_POST['roll'];
    $name = $_POST['sname'];
    $fname = $_POST['fname'];
    $sem = $_POST['sem'];
    $branch = $_POST['branch'];
    $sesion = $_POST['session'];
    $add = $_POST['adddress'];
}

$mydb = "INSERT INTO `student` (`roll`, `student_name`, `father_name`, `semester`, `branch`, `ession`, `ddress`) VALUE('$roll', '$name', '$fname', '$sem', '$branch', '$sesion', '$add')";
$query = mysqli_query ($con,$mydb);
echo "Hii ","$name ","You are successfully Generate Your Id Card.";
            

?>

