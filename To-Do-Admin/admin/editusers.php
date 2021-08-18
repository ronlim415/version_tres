<?php
$id = $_GET ['id'];
  
$conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"db_PB");

$sql = "SELECT * FROM tbl_user WHERE id = $id";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));

$r = mysqli_fetch_assoc($q); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/sidebar.css">
</head>
<form method="Post" action="editusers_confirm.php?id=<?php echo $id?>">
<body>
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="index.php">Home</a>
  <a href="users_list.php">Users</a>
  <a href="files.php">Files</a>
</div>

<!-- Page content -->
<div id="content">
<!-- Edit -->
<h1> EDIT USER HERE!</h1>
Username: <br> <input type="text"  placeholder="Enter username" name="user_name"> <br><br>
 Password: <br> <input type="password"  placeholder="Enter password" name="password"> <br><br>
 <input type="Submit" name="submit" value="Update">
 </div>
 </div>
 
 </form>
</body>
</html>

	