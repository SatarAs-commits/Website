<?php 
    // $username = "SATAR Asfandyari";
    $username = array("Satar", "Asfandyari");
    $phone = "123-456-7890";
    // $username = str_pad($username, 10, "*");
    // $username = strtoupper($username) . "<br>";
    // $username = strtolower($username) . "<br>";
    // $username = trim($username);
    // $phone = str_replace("-", "/", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username, "SATAR");
    // $index = strpos($username, "T");
    // $firstname = substr($username, 0, 4);
    // $lastname = substr($username, 2);
    // $fullname = explode(" ", $username);
    // foreach($fullname as $name){
    //     echo $name . "<br>";
    // }
    $username = implode("-", $username);
    echo $username;

    
    // echo $fullname;
    // echo $firstname;
    // echo $index;
    // echo $equals;
    // echo $phone;
    // echo $username;

?>