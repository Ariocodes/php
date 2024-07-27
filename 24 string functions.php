<?php

    /* 
        strtolower()
        strtoupper()
        trim()
        str_pad()
        str_replace()
        strrev()
        str_shuffle()
        strcmp()
        strlen()
        strpos()
        substr()
        explode()
        implode()
    
    */

    $username = "Ario Bashiri";

    $username = strtolower($username); // to lowercase
    echo $username . "<br>";
    $username = strtoupper($username); // to uppercase
    echo $username . "<br>";

    $username = "       Ario Bashiri       ";
    $username = trim($username); // trims off the sides
    echo $username . "<br>";


    $username = str_pad($username, 20, "0"); // fills it up to 20 chars with "0"
    echo $username . "<br>";

    $phone = "123-456-7890";
    $phone = str_replace("-", "/", $phone); // replaces the first arg with the second arg
    echo $phone . "<br>";

    $username = "Ario Bashiri";
    $username = strrev($username); // reverses the string
    echo $username . "<br>";

    $username = "Ario Bashiri";
    $username = str_shuffle($username); // shuffles the characters in the string
    echo $username . "<br>";

    $username = "Ario Bashiri";
    $equals = strcmp($username, "Ario Bashiri"); // compares the two given strings (returns 0 or false)
    echo $equals . "<br>";

    $count = strlen($username); // the length of a string
    echo $count . "<br>";

    $position = strpos($username, " "); // the index which the character " " is at. (The first occurance)
    echo $position . "<br>";

    $firstname = substr($username, 0, 4); // from the 0th index to 4th (4th not included)
    $lastname = substr($username, 5);
    echo $firstname . "<br>";
    echo $lastname . "<br>";

    $username = "Ario The Bashiri Lol";
    $fullname = explode(" ", $username); // separates the sections separated by a blank and makes an array holding all of the sections
    foreach($fullname as $name){
        echo $name . "<br>";
    }
    
    $username_array = array("Ario", "The", "Bashiri", "Lol");
    $imploded_username = implode("-", $username_array); // takes an array and prints a single string out of it with "-" between each element
    echo $imploded_username . "<br>";

?>