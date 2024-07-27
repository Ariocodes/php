<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="18 associative_example.php" method="post">
        <label>Enter the name of a country: </label>
        <input type="text" name="country">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
    $capitals = array("USA"=>"Washington D.C.",
                        "Japan"=>"Kyoto",
                        "South Korea"=>"Seoul",
                        "India"=>"New Delhi");
    
    $capital = $capitals[$_POST["country"]];
    echo "The capital city of {$_POST["country"]} is {$capital}";
    
?>