<?php
    // associative array = an array made of key=>value pairs
    $capitals = array("USA"=>"Washington D.C.",
                    "Japan"=>"Kyyoto",
                    "South Korea"=>"Seoul",
                    "India"=>"New Delhi");

    $capitals["USA"] = "Las Vegas"; // changing value
    $capitals["China"] = "Beijing"; // adding a new key value pair
    array_pop($capitals); // pops the last element
    array_shift($capitals); // removes the first element and moves all elements by one
    $keys = array_keys($capitals); // returns the keys as an array
    $values = array_values($capitals); // returns the values as an array
    $flipped_capitals = array_flip($capitals);  // keys and values are flipped. Returns a new array.
    $reversed_array = array_reverse($capitals); // returns a reversed array.

    echo count($capitals) . "<br><br>";

    foreach($capitals as $key => $value){
        echo "The capital city of {$key} is {$value}<br>";
    }
    echo "<br>";


    foreach($keys as $key){
        echo "{$key}<br>";
    }
    echo "<br>";


    foreach($values as $value){
        echo "{$value}<br>";
    }
    echo "<br>";
    

    foreach($flipped_capitals as $key => $value){
        echo "{$key} is the capital city of {$value}<br>";
    }
    echo "<br>";


    foreach($reversed_array as $key => $value){
        echo "The capital city of {$key} is {$value}<br>";
    }
?>