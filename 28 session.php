<?php
    /*
        session = super global variable (SGB) used to 
                  store information on a user to be 
                  used across multiple pages.
                  A user is assigned a session-id
                  ex. login credentials

        
        session_start(); to start the session
        session_destroy(); to end the session
        header("location: SMTH.PHP") will redirect to a given page
    */
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the login page<br>
    <form action="28 session.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
    <a href="28.1 home.php">This goes to the home page</a><br>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            header("Location: 28.1 home.php"); // this will redirect to the given page
        }
        else{
            echo "Missing username/password.<br>";
        }
    }
?>