<?php 
    // $VARIABLE_NAME = ANYTHING;
    // Strings
    $name = "Ario Bashiri";
    $food = "Pizza";
    $email = "ariobashiri@gmail.com";

    // Integer
    $age = 19;
    $users = 2;
    $quantity = 3;

    // Floats
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    // Booleans
    // false will output blank, while true will output "1"
    $online = false;
    $employed = true; 
    $for_sale = true;


    echo "Hello, {$name}<br>";
    echo "You like {$food}.<br>";
    echo "Your email is: {$email}<br>";
    echo "You are {$age} years old.<br>";
    echo "There are {$users} users online.<br>";
    echo "You would like to buy {$quantity} items.<br>";
    echo "Your gpa is {$gpa}.<br>";
    echo "Your pizza is \${$price}.<br>";
    echo "The sales tax rate is: {$tax_rate}%<br>";
    echo "Online status: {$online}<br>";
    echo "<br><br>";

    $total = null;
    echo "You have ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";
?>