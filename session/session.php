<?php 
    // session = is a Super global variable (SGB) used to store informations on a user
    //           to be used across multiple pages.
    //           A user is assigned a session-id ex. login credentials.

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the login page.
    <a href="home.php"> This goes to the homepage.</a>

</body>
</html>

<?php
    $_SESSION["username"] = "Satar";
    $_SESSION["password"] = "abc123";

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";

?>