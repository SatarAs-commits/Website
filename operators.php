<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Arithmetic operators
// + - * / ** %
    $x = 10;
    $y = 2;
    $z = null;

    $z = $x + $y;
    echo "$z <br>";

    $z = $x - $y;
    echo "$z <br>";

    $z = $x * $y;
    echo "$z <br>";

    $z = $x / $y;
    echo "$z <br>";

    $z = $x ** $y;
    echo "$z <br>"; 

    $z = $x % $y;
    echo "$z <br>";

?>
    <hr>

<?php
// Increment/Decrement operators
    $counter = 10;

    $counter++;
    $counter--;

    $counter-=3;
    echo "$counter <br>";
?>

<hr>

<?php
// Operator Precedence 
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo "$total <br>";
?>
</body>
</html>
