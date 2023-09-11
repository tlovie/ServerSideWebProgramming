<?php


    // 1.   simple functions
    echo "this is on the first line";
    two_br();
    echo "this is on the third line";
    two_br_die();
    echo "this doesn't even run";
    two_br();

    // 2.   functions that take a parameter and return a value

    $celcius = 21;
    $farenheit = celcius_to_farenheit($celcius);

    echo "{$celcius} is equivalent to {$farenheit}";

    two_br_die();

    $str = "can you kindly convert this to camel case";
    echo camel_case($str);


    //  3.  built in functions
    //  
    //  https://www.php.net/manual/en/funcref.php
    //  there are literally hundreds of functions that exist in php
    //  string functions, math functions, data functions (zip/image/crypto)
    //  database functions/objects
    

    function two_br() {
        echo "<br><br>";
    }

    function two_br_die() {
        echo "<br><br>";
        die();
    }

    function celcius_to_farenheit( float $celcius ) {
        $farenheit = $celcius * 9 / 5 + 32;
        return $farenheit;
    }

    function camel_case( string $s ) {
        $s = strtolower($s);

        $prev_char = 'a';
        $curr_char = '';
        $new_s = '';
        for ($count = 0; $count < strlen($s); $count++) {
            $curr_char = $s[$count];
            if ($curr_char != ' ')
                $new_s .= $prev_char == ' ' ? strtoupper($curr_char) : $curr_char;
            $prev_char = $curr_char;
        }
        return $new_s;

    }




?>