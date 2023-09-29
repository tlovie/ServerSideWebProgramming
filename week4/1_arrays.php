<?php


$brands = array("Pepsi", "Coke", "Canada Dry");     //  formed of key value pairs
var_dump($brands);
echo "<br>";


$provinces = [  'ON' => 'Ontario',                  //  different demonstration array
                'QC' => 'Quebec',
                'PE' => 'Prince Eward Island',
                'NS' => 'Nova Scotia'   ];

var_dump($provinces);
echo "<br>";

foreach ($brands as $idx => $brand) {               // how to access all elemts of the brand
    echo "<br>", $idx, " ", $brand;                 // and their array indexes (key) 
}

echo "<br>";

foreach ($provinces as $key => $prov) {             // example of an associative array
    echo "<br> {$key}  =>  {$prov}";                // named keys
}
echo "<br>";

$j = json_encode($provinces);           // json encode
var_dump($j);   
echo "<br>";


// var_dump($_SERVER);

foreach( $_SERVER as $idx => $val) {
    echo "<br> key: {$idx} <-=-> {$val}";
}

echo "<br>";
foreach( $_GET as $idx => $val) {
    echo "<br> get key: {$idx} => {$val}";
}

// PHP SUPERGLOBALS     
    // REST API

// $_GET        - form get variables
// $_POST       - form post variables
// $_REQUEST    -   $_GET + $_POST + $_COOKIE

// $GLOBALS     - global symbol table

// $_SERVER     - variables related to the request or server configuration

// $_FILES      - special variable used in file uploads via HTTP POST

// $_COOKIE     - variables that are stored in cookies - setcookie()

// $_SESSION    - special PHP variable that is often setup using a cookie and allows for the script
//                  to keep track of set of variables

// $_ENV        - variables passed to the script via the script's environment
//              - somewhat like $_SERVER
//              - more related to running php from a standalone shell.



?>
