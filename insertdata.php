<?php
require './dbcon.php';

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];

$sql = "insert into user (firstname, lastname, email, gender) values('$firstname', '$lastname', '$email', '$gender')";
$result=mysqli_query($con, $sql);

/*if($result){ // เช็คขู้อมูลว่าจริงหรือเปล่า
    echo "Record Successfully";
} else {
    echo "Record Failed";
}*/
header("Location: insert.php"); //กลับไปหน้า index.php