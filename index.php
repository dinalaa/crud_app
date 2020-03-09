<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $query = "INSERT INTO `items` (`name`, `password`) VALUES ('$name', '$password')";
    $res = $conn -> exec($query);
    if($res){
        echo "yes";
    } else {
        echo "no";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ='stylesheet' href="css/style.css">
</head>
<body>
    <div class="container">
        <form method='post'>
            <input type="text" name="name" placeholder="Type your name">
            <input type="text" name="password" placeholder="Type your password"> 
            <input type="submit" value="send" name="submit">
        </form>
    </div>
</body>
</html>