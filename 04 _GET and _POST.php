<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WITH $_GET:</h1>
    <form action="04 _GET and _POST.php" method="get">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="log in">
    </form>
</body>
</html>
<?php
    // $_GET is like an array
    // NOT SECURE
    // char limit
    // Bookmark is possible
    // GET requests can be cached
    // Better for a search page

    // It's not secure (the sensitive data is dependant to URL. The username and password are in the url)
    // example: http://localhost/website/04%20_GET%20and%20_POST.php?username=Ario&password=1234
    echo $_GET["username"] . "<br>";
    echo $_GET["password"] . "<br>";
    echo "<br><br><br>"

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WITH $_POST:</h1>
    <form action="04 _GET and _POST.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="log in">
    </form>
</body>
</html>
<?php
    // $_POST = Data is packaged inside the body of the HTTP request
    //          MORE SECURE
    //          No data limit
    //          Cannot bookmark
    //          GET requests are not cached
    //          Better for submitting credentials
    echo $_POST["username"] . "<br>";
    echo $_POST["password"] . "<br>";
?>