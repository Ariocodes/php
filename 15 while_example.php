<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="15 while_example.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>
<?php
    $seconds = 0;
    $running = true;
    while($running){
        
        if($_POST["stop"]){
            $running = false;
        }
        else{
            $seconds++;
            echo $seconds . "<br>";
        }
    }
?>