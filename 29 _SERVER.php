<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        username:<br>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="login"><br><br>
    </form>
</body>
</html>
<?php
    /*
        $_SERVER = super global variable (SGB) that contains headers, paths,
                   and script locations. The entries in this array are created
                   by the web server. Shows nearly everything you need to know
                   about the current web page env.
    */

    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value}<br>";
        // REQUEST_METHOD ("GET" by default, if a "POST" form is submitted then it'll change to "POST")
        // and PHP_SELF (location of this page) are the ones which come most handy.

        /* for example, changing the name this file would ruin the "<form action="FILENAME.PHP" ..." section,
           and using "<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" ..."
           the "htmlspecialchars()" method is to avoid any cross-site scripts
        */
    }

    // if(isset($_POST["submit"])){}
    // There are ways to submit a form without using the submit button in older browsers.
    // A more reliable way is to use:
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Hello";
    }
?>