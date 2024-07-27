<?php
    // if (condition1 && condition2)

    // &&   = True if both conditions are true.
    // ||   = True if one condition is true.
    // !    = True if false. False if true. (opposite)

    $temp = 25;
    $cloudy = true;

    if($cloudy){
        echo "It's cloudy.<br>";
    }
    else{
        echo "It's sunny.<br>";
    }

    if(!$cloudy){
        echo "It's sunny.<br>";
    }
    else{
        echo "It's cloudy.<br>";
    }


    if($temp >= 0 && $temp <= 30){
        echo "The weather is good.<br>";
    }
    else{
        echo "The weather is bad.<br>";
    }


    if($temp < 0 || $temp > 30){
        echo "The weather is bad.<br>";
    }
    else{
        echo "The weather is good.<br>";
    }
?>