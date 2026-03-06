<?php
    $grade = "A";

    switch($grade){
        case "A":
            echo "You did great <br>";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did okay";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "You did failed";
            break;
        default:
            echo "{$grade} is not valid.";
            break;
    }
    $date = date("2");

    $date = "Tuesday";

    switch($date){
        case "Monday":
            echo "I hate Mondays.";
            break;
        case "Tuesday":
            echo "It's Tuesday.";
            break;
        case "Wednesday":
            echo "It' Wednesday.";
            break;
        case "Thursday":
            echo "It's Thursday.";
            break;
        case "Friday":
            echo "It's Friday.";
            break;
        case "Saturday":
            echo "I hate Mondays.";
            break;
        case "Sunday":
            echo "I hate Mondays.";
            break;
        
    }
?>