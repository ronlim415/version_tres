<?php
$id = $_GET ['id'];
$name = $_GET ['user_name'];
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
<body>
<div class = "content">
are you sure to delete <?php echo "$name"?>?

<form action = "deleteusers_confirm.php?id=<?php echo $id?>" method = "POST">
<input type ="submit" name = "submit" value = "YES">
<form action = "users_list.php?id=<?php echo $id?>" method = "POST">
<input type ="submit" name = "submit" value = "NO">
</div>
</body>
</form>
</body>
</html>
