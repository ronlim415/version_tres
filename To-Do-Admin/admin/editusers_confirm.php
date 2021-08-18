<?php
$id = $_GET['id'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];

include ("dbconnect.php");

$sql = "UPDATE students SET user_name= '$user_name', password = '$password' WHERE id = $id"; 

$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));
header ("location:users_list.php");
?>		