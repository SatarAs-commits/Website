<?php 
    // cookie = Information about a user stored in a user's web-browser
    //          targeted advertisments, browsing preferences, and other
    //          non-sensitive data.

    // To delete a cookie:
    setcookie("fav_food", "pizza", time() -0, "/");
    setcookie("fav_drink", "coffe", time() - 0, "/");
    setcookie("fav_dessert", "ice cream", time() - 0, "/");


    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "coffe", time() + (86400 * 2), "/");
    setcookie("fav_dessert", "ice cream", time() + (86400 * 2), "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]} !!!";
    }else{
        echo "I dont know your fav food";
    }
?>