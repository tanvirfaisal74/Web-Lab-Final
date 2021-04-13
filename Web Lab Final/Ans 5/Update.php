<?php
    include "database.php";
    $user_id =  $_GET['id'];
    $sql = "SELECT * FROM `user` WHERE `no` = $user_id";
    $result = mysqli_query($conn, $sql);
    $rowcount=mysqli_num_rows($result);
    $data = $result->fetch_assoc() 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="update_successful.php" method="post">
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="name" value="<?php echo $data['name'] ?>"><br>
  <label for="lname">ID:</label><br>
  <input type="text" id="lname" name="id" value="<?php echo $data['id'] ?>"><br><br>
  <label for="lname">Age:</label><br>
  <input type="number" id="lname" name="age" value="<?php echo $data['age'] ?>"><br><br>
  <label for="lname">Username:</label><br>
  <input type="text" id="lname" name="username" value="<?php echo $data['user_name'] ?>"><br><br>
  <input type="hidden" id="lname" name="no" value="<?php echo $data['no'] ?>"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>