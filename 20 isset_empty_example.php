<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="20 isset_empty_example.php" method="post">
        <label>Enter username:</label>
        <input type="text" name="username"><br>
        <label>Enter password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="log in">
    </form>
</body>
</html>
<?php
    foreach($_POST as $key => $value){
        echo "{$key} = {$value}<br>";
    }

    if(isset($_POST["login"])){
        echo "You tried to log in<br>";

        $username = $_POST["username"];
        $password = $_POST["password"];


        if(empty($username)){
            echo "Username is missing.<br>";
        }
        elseif(empty($password)){
            echo "Password is missing.<br>";
        }
        else{
            echo "Welcome, {$username}";
        }
    }
    
?>