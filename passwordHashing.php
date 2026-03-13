<?php
    // hashing = transforming sensitive data (password) into letters,
    //           numbers, and/or symbols
    //           via a mathematical process. 

    // purpose = Hiding the original data from 3rd parties.
    
    $password = "Hallo123";

    // The variable "$hash" is the value that we are storing in our Database Server as an example.
    $hash = password_hash($password, PASSWORD_DEFAULT);


    if(password_verify("blubla135", $hash)){
        echo "You are loggen in.";
    }else{
        echo "Incorrect password <br>";
    }
    echo $hash;
?>