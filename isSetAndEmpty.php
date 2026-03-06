
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isSetAndEmpty.php" method="post">
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="log in"><br>
        
    </form>
    <hr>    
</body>
</html>
<?php
    foreach($_POST as $key => $value){
       echo "{$key} = {$value} <br>"; 
    }

    if(isset($_POST["login"])){
        // echo "You tried the login.";
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Username is missing.";
        }elseif(empty($password)){
            echo "Password is missing.";
        }else{
            echo "Hello {$username}";
        }
    }

    //isset() return TRUE if a variable is declared and not null.
    //empty() returns TRUE if a variable is not declared, false, null, ""
    // $username = "Satar";
    // echo isset($username) . "<br>";
    // // return 1

    // $username = "";
    // if(isset($username)){
    //     echo "This variable is set. <br>";
    // }else{
    //     echo "This variable is NOT set. <br>";
    // }

    // $username = "false";
    // if(empty($username)){
    //     echo "This variable is empty <br>";
    // }else{
    //     echo "This variable is NOT empty. <br>";
    // }

    
?>