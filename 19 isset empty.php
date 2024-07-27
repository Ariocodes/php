<?php
    // isset() = returns true if a variable is declared and not null
    // empty() = returns tru if a variable is not declared, false, null, ""

    $username = "BroCode";
    echo isset($username) . "<br>";
    $username = null;
    echo isset($username) . "<br>";
    
    if(isset($username)){
        echo "This variable is set<br>";
    }
    else{
        echo "This variable is NOT set<br>";
    }

    $username = "BroCode";
    if(empty($username)){
        echo "This variale is empty<br>";
    }
    else{
        echo "This variable is NOT empty<br>";
    }
?>