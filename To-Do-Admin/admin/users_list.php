<?php
$conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"file-management");
$sql = "SELECT * FROM students";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));


if(isset($_POST['search']))
	$search = $_POST['search'];
if(isset($search))
	$sql = "SELECT * FROM students WHERE user_name LIKE '%$search%' ";
else 
	$sql = "SELECT * FROM students";
	
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/sidebar.css">
</head>
<body>
    <!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="index.php">Home</a>
  <a href="users_list.php">Users</a>
  <a href="files.php">Files</a>
   <a href="logout.php">Logout</a>
</div>

<!-- Page content -->
<div id="content">
  <br>
  <br>
<form method="POST" action="users_list.php">
  SEARCH USER:<input type="text" name="search">
  <input type="submit" name="submit" value="Search">  
</form>
<div class = "option">
	<a href="addusers.php"> Add Student</a>
	</div>

<table id="table">
	
	<tr>
    <th>username</th>
	</tr>
	
<?php
	while($r = mysqli_fetch_assoc($q))
	{
	?> 
	
	<tr>
    <td><?php echo $r['user_name'];?></td>
		<?php $id = $r['id']?>
		<td> 
		<a href = "deleteusers.php?id=<?php echo $r['id'];?>&user_name=<?php echo $r['user_name'];?>"> DELETE </a>
		</td>
		<td> 
		<a href = "editusers.php?id=<?php echo $r['id'];?>"> UPDATE </a>
		</td>
	</tr>
<?php 
	}
	?>
	
	</table>
</div>
</body>
</html>