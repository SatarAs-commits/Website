<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 
    // you need functions, when you want
    // to reuse the code.
    // type () after function name to invoke
    // ex. add() subtract() multiply() divide()

    function hypotenuse(int $a, int $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }
    echo hypotenuse(3, 4);

    function is_even($number){
        return $number % 2;
    }

    // echo is_even(10);

    function happy_birthday($first_name, $age){
        echo "happy Birthday dear {$first_name}! <br>";
        echo "You are {$age} years old! <br>";
    }

    // happy_birthday("Patrick", 35);
    // happy_birthday("Tom", 90);
    // happy_birthday("Spongebob", 18);


?>