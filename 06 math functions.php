<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="06 math functions.php" method="post">
        <label>x: </label>
        <input type="text" name="x"><br>
        <label>y: </label>
        <input type="text" name="y"><br>
        <label>z: </label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    $total = abs($x);           // absolute value
    $total = round($x);         // rounded
    $total = floor($x);         // rounded down
    $total = ceil($x);          // rounded up
    $total = sqrt($x);          // square root

    $total = pow($x, $y);       // x raised by y
    $total = max($x, $y, $z);   // gives the highest number
    $total = min($x, $y, $z);   // gives the lowest nubmer
    $total = pi();              // gives the pi number
    $total = rand();            // gives a random number
    $total = rand(1, 6);        // generates a random number between 1 and 6
    

    echo $total;
?>