<?php 
    $foods = array("apple", "orange", "banana", "cocunut");

    // echo $foods[0];

    // $foods[0] = "pineapple";

    // array_push($foods, "pineapple", "kiwi");
    // array_pop($foods);
    // array_shift($foods);
    $foods = array_reverse($foods);
    echo count($foods) . "<br>";
    foreach($foods as $food){
        echo $food . "<br>";
    }
?>