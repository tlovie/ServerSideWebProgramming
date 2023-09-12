<?php
    // operators

    // 1. arithmetic operators
    $apples = 7;
    $oranges = 5;
    $grapes = 35;

    $fruits = $apples + $oranges;

    echo $fruits;

    //  + - * / % **
    // php.net  https://www.php.net/manual/en/language.operators.arithmetic.php

    die();
    echo "<br><br>";

    //  2. assignment operators

    $fruits = $apples + $oranges;

    $fruits = $fruits + $grapes;
    //  $fruits += $grapes;

    echo $fruits . "<br><br>";

    $spoiled_grapes = 6;
    //  $fruits -= $spoiled_grapes

    echo $fruits;

    die();
    echo "<br><br>";

    //  3. comparison operators

    if ($grapes == $apples * $oranges) {
        echo "there is as many grapes as the product of apples and oranges";
    } else {
        echo "the quantities are not equal";
    }
    
    echo "<br><br>";

    if ($spoiled_grapes >= $apples * $oranges) {
        echo "there are many spoiled fruits";
    } else {
        echo "there is plenty of fruit available";
    }
    
    // https://www.php.net/manual/en/language.operators.comparison.php

    die();
    echo "<br><br>";

    //  3.1 advanced comparison operators

    $spoilage = "6";

    var_dump ($spoilage === $spoiled_grapes);

    //  4. logical operators

    $username = "tomlovie";
    $password = "qwerty";

    var_dump ($username == "tomlovie" && $password == "qwerty");

    die();
    echo "<br><br>";

    if ($username == "tomlovie" && $password == "qwerty") {
        echo "password success";
    } else {
        echo "password failure";
    }

    // https://www.php.net/manual/en/language.operators.logical.php


    die();
    echo "<br><br>";

    //  5. operator precedence

    // this defines in what order these operators are processed (in absence of brackets)

    //  use brackets to define the order to be something else.

    var_dump ($apples + $oranges * $grapes);

    //  https://www.php.net/manual/en/language.operators.precedence.php
?>
