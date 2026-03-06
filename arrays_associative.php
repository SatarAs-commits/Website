<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arrays_associative.php" method="post">
        <label>Enter a Country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php
    $capitals = array("USA" => "Washington D.C",
                     "Japan" => "Kyoto", 
                     "South Korea" => "Seoul", 
                     "India" => "New Delhi");

    // $capitals = $_POST["country"];
    $capital = $capitals[$_POST["country"]];
    echo $capital;
    // $capitals["USA"] = "Las Vegas";
    // $capitals["China"] = "Beijing";
    // array_pop($capitals);
    // array_shift($capitals);

    // $keys = array_keys($capitals);
    // $values = array_values($capitals);

    // $capitals = array_flip($capitals);

    // $capitals = array_reverse($capitals);

    // echo count($capitals);
    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }
    // foreach($values as $value){
    //     echo "{$value} <br>";
    // }
    // foreach($keys as $key){
    //     echo "{$key} <br>";
    // }
    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }
?>