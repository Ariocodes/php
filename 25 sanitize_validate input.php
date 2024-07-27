<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="25 sanitize_validate input.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">

    </form>
</body>
</html>

<?php
    // sanitization will strip the input to be the way it should be
    // validation, if it doesn't pass it'd just return an empty string

    if(isset($_POST["login"])){
        // The input can be a malicious code. To prevent that, we use the "filter_input" method.
        // "INPUT_POST" is used since we are using "POST" method for the form. for "GET" we can use "INPUT_GET".
        // for sanitizing special characters like "<>" we use "FILTER_SANITIZE_SPECIAL_CHARS".
        // it takes the name of the <input> tag to filter and save it into a variable
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        echo "Hello {$username}<br>";
        echo "You are {$age} years old<br>";
        echo "Your email is {$email}<br><br><br>";



        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if(empty($age)){
            echo "That number wasn't valid.<br>";
        }
        else{
            echo "You are {$age} years old.<br>";
        }
        if(empty($email)){
            echo "That email wasn't valid.<br>";
        }
        else{
            echo "Your email is {$email}<br>";
        }
    }
?>