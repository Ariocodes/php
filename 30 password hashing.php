<?php
    // hashing = transforming sensitive data (password)
    //           into letters, numbers, and/or symbols
    //           via a mathematical process. (similar to encryption)
    //           Hides the original data from 3rd parties.

    /*
        $HASHED_PASSWORD = password_hash($PASSWORD, HASH_METHOD);
        password_verify(INPUT, HASHED_PASSWORD) : bool
    
    */


    $password = "pizza123";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash . "<br>";

    if(password_verify("", $hash)){
        echo "You are logged in.";
    }
    else{
        echo "Incorrect password.";
    }
?>