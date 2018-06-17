<?php
require './dbcon.php';
$idSelect=$_GET['id'];
$sql = "delete from user where id=$idSelect";
$result = mysqli_query($con, $sql);

header("Location: ShowRecord.php");
