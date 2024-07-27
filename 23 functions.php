<?php
    // 1
    function happy_birthday($name, $age){
        echo "Happy Birthday dear {$name}!<br>";
        echo "Happy Birthday to you!<br>";
        echo "Happy Birthday dear {$name}!<br>";
        echo "You are {$age} years old!<br><br>";
    }

    happy_birthday("Spongebob", 30);
    happy_birthday("Patrick", 35);
    happy_birthday("Squidward", 45);



    // 2
    function is_even($number){
        if($number % 2 == 0){
            return true;
        }
        else{
            return false;
        }
    }
    if(is_even(10)){
        echo "10 is even<br><br>";
    }


    // 3
    function hypotenuse(float $a, float $b){
        $c = sqrt(pow($a, 2) + pow($b, 2));
        return $c;
    }
    echo hypotenuse(5,12);

?>