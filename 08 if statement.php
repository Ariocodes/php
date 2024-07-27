<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    $age = 19;
    if($age >= 100){
        echo "You are too old to enter this site.<br>";
    }
    elseif ($age >= 18){
        echo "You may enter this site.<br>";
    }
    elseif($age <= 0){
        echo "That wasn't a valid age.<br>";
    }
    else{
        echo "You must be 18+ to enter.<br>";
    }

    $adult = true;

    if($adult){
        echo "You are an adult.<br>";
    }
    else{
        echo "You must be an adult to enter.<br>";
    }
?>