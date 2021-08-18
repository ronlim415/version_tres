<?php
$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];

include ("dbconnect.php");

$sql = "INSERT INTO students (user_id,user_name,password) values ('$user_id','$user_name','$password')";

$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));
header ("location:users_list.php");
?>		
