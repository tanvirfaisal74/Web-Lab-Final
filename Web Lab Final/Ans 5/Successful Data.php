<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       include "database.php";
       if($_SERVER['REQUEST_METHOD'] === 'POST'){
           $name = $_REQUEST['name'];
           $id = $_REQUEST['id'];
           $age = $_REQUEST['age'];
           $username = $_REQUEST['username'];
           $no = $_REQUEST['no'];
           $sql = "UPDATE `user` SET `name`='$name', `id`='$id', `age`=$age, `user_name`='$username' WHERE `no`=$no";
       } 
    ?>
    <h1>
       <?php 
        if(mysqli_query($conn, $sql)){
            echo "You successfully update your info.";
        }
        else{
            echo "Something wrong in your data.";
        }
       ?>
       <p>Return to <a href="show_data.php">Home</a></p>
    </h1>
</body>
</html>