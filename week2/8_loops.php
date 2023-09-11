<?php   // LOOPS

    //  1.  foreach loops

    $brands = array("Pepsi", "Coke", "Canada Dry");     //  formed of key value pairs
    var_dump($brands);

    echo "<br><br>";

    $provinces = [  'ON' => 'Ontario',
                    'QC' => 'Quebec',
                    'PE' => 'Prince Edward Island',
                    'NS' => 'Nova Scotia'   ];

    var_dump($provinces);

    die();
    echo "<br><br>";

    foreach ($brands as $brand)
        echo "{$brand} is too sweet for me! <br><br>";


    die();
    echo "<br><br>";

    foreach ($provinces as $prov_key => $province)
        echo "{$prov_key} => {$province} is a great place to visit! <br><br>";



    die();
    echo "<br><br>";

    //  2.  while loops

    $count = 0;

    while ($count < 10) {
        echo $count++;
    }

    die();
    echo "<br><br>";

    //  3.  do..while loops

    $count = 0;

    do {
        echo $count++;
    } while ($count < 10);


    die();
    echo "<br><br>";

    //  4. for loops

    for ($count=0; $count<10; $count += 4) {
        echo $count;
    }

?>