<?php
    session_start();
    // and session_destroy(); to end the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the home page<br>
    <form action="28.1 home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>
<?php
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])){{
        session_destroy();
        header("Location: 28 session.php");
    }}
?>