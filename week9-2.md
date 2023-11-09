# Week 9 - Database access using PDO

## Last day
- reviewed object oriented programming concepts
- used phpMyAdmin to access MySQL and create database and table
- used PDO to access this table and get out the user

```
<?php

try {
    $dbh = new PDO("mysql:host=localhost;dbname=comp10260", "root", "");
 } catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
 }

$command = "SELECT Firstname, Lastname, age FROM person WHERE Lastname = :name";
$sth = $dbh->prepare($command);
$success = $sth->execute(['name' => 'Lovie']);

   /* Exercise PDOStatement::fetch styles */
   print("PDO::FETCH_ASSOC: ");
   print("Return next row as an array indexed by column name<br>");
   $result = $sth->fetch(PDO::FETCH_ASSOC);
   print_r($result);
   print("<BR>");

?>
```

## Weather application using files/JSON
```
<?php

$city = filter_input( INPUT_GET, "city", FILTER_SANITIZE_SPECIAL_CHARS );
$temp = filter_input( INPUT_GET, "temp", FILTER_VALIDATE_INT );

if ( $city === null || $city === false ) {
    echo "invalid city detected";
} elseif ( $temp === null || $temp === false ) {
    echo "invalid temp detected";
} else {
    echo weather( $city, $temp );
}

function weather( string $city, int $temp ) {

$cityfound = FALSE;

$fp = fopen( "weather.json", "r" ) ;
$data = fgets( $fp );
fclose( $fp );
$datajson = json_decode( $data, true );

foreach ( $datajson as &$item ) {
    if( $item['city'] == $city ) {
        $cityfound = TRUE;
        $oldtemp = $item['temp'];
        $item['temp'] = $temp;
        break;
    } 
}

if( $cityfound !== TRUE ) {
    $item['city'] = $city;
    $item['temp'] = $temp;
    $datajson[] = $item;
    $output = "$city was added with temperature $temp\n";
} else {
    $output = "$city temperature updated from $oldtemp to $temp\n";
}

// update the temperature for a found city
$fpout = fopen( "weather.json", "w" );
fwrite( $fpout, json_encode($datajson) );
fclose( $fpout );

return $output;

}
?>
```

## today mission - rewrite the weather application to use a database
