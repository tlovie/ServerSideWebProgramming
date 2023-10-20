<?php

    function my_reverse( string $in ) {
        // function to reverse a string from back to front

        $out = '';

        // using a do..while loop
        // need extra guard clause if $in is empty

        if (strlen($in) == 0)
            return $out;

        $c = strlen($in);

        do {
            $out .= $in[--$c];
        } while ( $c > 0 ) ;

        return $out;
    }

    function isprime( int $n ) {
        // function to return true if the number is prime, otherwise false

        $prime = true;  // assume the number is prime

        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                $prime = false;
            }
        }

        return $prime;
    }

    function mult_table( int $r, int $c ) {
        // function to return a multiplication table $r rows x $c columns

        $out = "<table>";
        
        for ($row = 1; $row <= $r; $row++) {
            $out .= "<tr>";
            for ($col = 1; $col <= $c; $col++) {
                $out .= "<td>" . $row * $col . "</td>";
            }
            $out .= "</tr>";
        }

        $out .= "</table>";

        return $out;
    }

    echo my_reverse("hello world!"), "<br>";

    echo isprime(6 * 44 + 7) ? "its Prime!" : "composite", "<br>";

    echo mult_table(6, 5);

?>
