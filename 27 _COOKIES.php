<?php
    /*
        cookie = Information about a user stored in a user's web-browser 
                targeted advertisements, browsing preferences, and 
                other non-sensitive data
    */
    //          name,    data,    time to live (seconds), filepath
    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    //                              86400*2 = 2 days   , default location

    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

    // you can see the saved cookies in the browser by opnening the 
    // inspect menu and headig to the "storage/cookies" section 


    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value}<br>";
    }
    if(isset($_COOKIE["fav_food"])){
        echo strtoupper("buy some {$_COOKIE["fav_food"]} !!!<br>");
    }
    else{
        echo "I don't know your favorite food.<br>";
    }
?>