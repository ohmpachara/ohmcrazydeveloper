<?php
require './dbcon.php';
$id = $_POST['txtid'];
$sql = "delete from user where id=$id";
$result=mysqli_query($con, $sql);

header("location:ShowRecord.php");


