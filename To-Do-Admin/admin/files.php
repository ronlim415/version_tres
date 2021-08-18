<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/sidebar.css">
  <title>Download files</title>
</head>
<body>
        <!-- The sidebar -->
        <div class="sidebar">
       <a class="active" href="index.php">Home</a>
       <a href="users_list.php">Users</a>
       <a href="files.php">Files</a>
       <a href="logout.php">Logout</a>
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
      <td><a href="files.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>