<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
<?php
    include 'connection.php';
    echo "<br>";
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    echo $num;
    echo "<br>";
    while($row=mysqli_fetch_assoc($result)){
        echo var_dump($row);
        echo "<br>";
    }
?>
</body>
</html>
