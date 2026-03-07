<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize-validateInput.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["login"])){
        // $username = $_POST["username"];
        // <script>alert(<ou have a virus!)</script>
        $username = filter_input(INPUT_POST, "username",
                                FILTER_SANITIZE_SPECIAL_CHARS);

        echo "Hello {$username} <br>";

        $age = filter_input(INPUT_POST, "age",
                                FILTER_SANITIZE_NUMBER_INT);

        echo "You are {$age} years old. <br>";

        $email = filter_input(INPUT_POST, "email",
                                FILTER_SANITIZE_EMAIL);

        echo "Yout email is: {$email} <br>";

        $age = filter_input(INPUT_POST, "age",
                                FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email",
                                FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            echo "that email wasnt valid <br>";
        }else{
            echo "Your email is: {$email}. <br>";
        }
        // if(empty($age)){
        //     echo "that number wasnt valid";
        // }else{
        //     echo "Yout are $age years old.";
        // }

    }

?>