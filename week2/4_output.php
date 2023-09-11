<?php

    $name = "Tom Lovie";    // $name is a string data type
    $age = 52;              // $age is an integer
    $shoeSize = 9.5;        // $shoeSize is a floating point
     
    var_dump( $name );      // why do we use var_dump?

    echo "<br><br>";

    print_r( $name );       // print_r has a simpler output with less information.

    echo "<br><br>";

    print( "is significantly slower than echo." );  // php.net is a good resource

    echo $name . " is my name.";    // echo is a language contruct not a function call
                                    // what does that mean?
                                    // . is the string concatenation operator
                                    // more on operators later.
    echo "<br><br>";

    echo "{$name} is my name.";     // another way to write the above - with a direct 

    echo "<br><br>";



?>