<?php

    $name = "Tom Lovie";    // $name is a string data type
    $string = 'you can also use single quotes to define strings, but there is a catch.';

    $age = 52;              // $age is an integer
                            // typically 32 bits    -2,147,483,647 to 2,147,483,647

    $shoeSize = 9.5;        // $shoeSize is a floating point
                            // how does this differ from an integer?

    $height = "184";        // what data type is $height?

    $isStudent = false;     // $isStudent is a boolean
                            // what are booleans used for?

    $myLunch = "2 samosas";
    
    echo $age + $myLunch;
    //  in a production environment - you would likely turn off the display of Warnings
    //  so would this work?

    //  echo "\n\n";
    //echo "<br><br>";

    $brands = array("Pepsi", "Coke", "Canada Dry");     //  formed of key value pairs
    //  var_dump($brands);


    $provinces = [  'ON' => 'Ontario',
                    'QC' => 'Quebec',
                    'PE' => 'Prince Edward Island',
                    'NS' => 'Nova Scotia'   ];

    //  var_dump($provinces);

    $isEmpty = NULL;

    // two more data types
    // Objects  - to be covered at a later date
    // Resources - to be covered at a much later date


?>