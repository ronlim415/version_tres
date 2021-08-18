<?php 
session_start();

	include("connection.user.php");
	include("functions.user.php");
  $user_data = check_login($con);
?>
<?php include 'filesLogic.user.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/sidebars.css">
  <title>Download files</title>
</head>
<body>
        <!-- The sidebar -->
        <div class="sidebar">
       <a class="active" href="index.php">Home</a>
       <a href="profile.php">profile</a>
       <a href="logout.php">Logout</a>
    </div>
    <div class="container">
          <br>
	          Hello, <?php echo $user_data['user_name']; ?>
          <br>
    <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in kb)</th>
    <th>Downloads</th>
    <th>Date</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><?php echo $file['date']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>