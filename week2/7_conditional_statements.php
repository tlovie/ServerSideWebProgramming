<?php

    //  1. if...elseif...else
    // say these were passed into php - more on that later - getting data in.
    $username = "tomlovie";
    $password = "qwerty";

    if ($username == "tomlovie" && $password == "qwerty") {
        echo "password success";
    } elseif ($username != "tomlovie") {
        echo "user not found?";
    } else {
        echo "password failure";
    }

    if (strlen($password) < 10)
        echo "Password is too short!";

    die();
    echo "<br><br>";

    //  2. switch statement

    $fruits = "grapes";

    switch($fruits) {
        case "apples":
            echo "fruit is apples";
            break;
        case "oranges":
            echo "fruit is oranges";
            break;
        case "grapes":
            echo "fruit is grapes";
            break;
        case strlen($fruits) > 10:
            echo "fruit is tooooo looooong!";
        default:
            echo "fruit is unknown";
        }


        die();
        echo "<br><br>";

        //  3. ternery operator

        echo strlen($fruits) > 10 ? "greater than 10" : "10 or less" ;


        // general syntax (condition) ? (result if true) : (result if false) ;

        

?>