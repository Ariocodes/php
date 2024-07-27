<?php
    $foods = array("apple", "orange", "banana", "coconut");
    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";
    echo "<br>";

    $foods[0] = "pineapple";    // replacing the first element

    array_push($foods, "berry", "kiwi"); // pushing a new value into the array

    array_pop($foods);  // removes the last element in the array

    array_shift($foods);  // removes the first element and shifts all elements by one

    $reverse_foods = array_reverse($foods); // it return a new reversed array

    echo count($foods) . " items in the \"\$foods\" array.<br><br>";

    foreach($foods as $food){
        echo $food . "<br>";
    }
    echo "<br>";

    foreach($reverse_foods as $food){
        echo $food . "<br>";
    }
?>