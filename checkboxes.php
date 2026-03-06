<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdot<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])){
        $foods = $_POST["foods"];
        // echo $foods[2];
        foreach($foods as $food){
            echo $food . "<br>";
        }
    }

    // if(isset($_POST["submit"])){
    //     if(isset($_POST["pizza"])){
    //         echo ">ou like Pizza. <br>";
    //     }
    //     if(isset($_POST["hamburger"])){
    //         echo ">ou like hamburgers. <br>";
    //     }
    //     if(isset($_POST["hotdog"])){
    //         echo ">ou like hotdogs. <br>";
    //     }
    //     if(isset($_POST["taco"])){
    //         echo ">ou like tacos.<br>";
    //     }

    //     if(empty($_POST["pizza"])){
    //         echo ">ou dont like Pizza. <br>";
    //     }
    //     if(empty($_POST["hamburger"])){
    //         echo ">ou dont like hamburgers. <br>";
    //     }
    //     if(empty($_POST["hotdog"])){
    //         echo ">ou dont like hotdogs. <br>";
    //     }
    //     if(empty($_POST["taco"])){
    //         echo ">ou dont like tacos.<br>";
    //     }
    // }

    
?>