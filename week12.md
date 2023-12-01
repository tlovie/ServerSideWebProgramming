# Exam Review

## Last day
  - basic php syntax
      - comments
      - variables
      - data types
      - output
      - constants
      - operators
      - conditionals
      - loops
      - functions
  - Arrays
      - associative arrays
      - Superglobals $_GET, $_POST, $_SERVER
  - XSS
      - what is it?
      - how to mitigate
  - Working with files
      - how to open, read/write/append, close
      - uploading files - comes via special form POST to FILES superglabal
      - dynamic page generation
      - one page apps

## Post Midterm review
  - COOKIES
      - review canvas material
  - SESSION
      - generally leverages cookie, but keeps data serverside
      - security implications
  - OOP
      - understanding object oriented programming practices in PHP
      - to use PDO for database access
  - PDO database access
      - review canvas notes for database access
   
## ChatGPT exam like questions


<?php

try {
    $dbh = new PDO("mysql:host=localhost;dbname=lovie","root", "");
 } catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}"); 
    // using die should be avoided in production code
 }

 $query = "SELECT quotes.quote_id, quotes.quote_text, authors.author_name
 FROM quotes JOIN authors ON quotes.author_id = authors.author_id
 order by quotes.quote_id
 LIMIT :lim OFFSET 0";

$stmt = $dbh->prepare($query);
$success = $stmt->execute(['lim' => 5]);

if( $success ){

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($data);
}


?>
