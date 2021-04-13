<?php
include "database.php";
$sql = "SELECT * FROM `user`";
$result = mysqli_query($conn, $sql);
$rowcount=mysqli_num_rows($result);
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
    <h1>
    <?php 
        if ($rowcount == 0){
            echo "No Data found";
        } else {
    ?></h1>
    <table>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Age</th>
            <th>Username</th>
        </tr>
        <?php
            while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><a href="update_data.php?id=<?php echo $row['no']; ?>"><?php echo $row['name']; ?></a></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
        </tr>
        <?php }
        ?>
    </table>

    <?php }
    ?>           
    
</body>
</html>