<?php

if (!empty($_GET)) {
    echo "<br>";
    foreach( $_GET as $idx => $val) {
        echo "<br> get key: {$idx} => {$val}";
    }
}

?>

<form action="3_calculator.php">
  <label for="number1">First number:</label><br>
  <input type="text" id="num1" name="num1" value=""><br>
  <label for="number2">Second number:</label><br>
  <input type="text" id="num2" name="num2" value=""><br><br>
  <input type="radio" id="add" name="operation" value="addition"><label for="add">addition</label><br>
  <input type="radio" id="sub" name="operation" value="subtraction"><label for="sub">subtraction</label><br>
  <input type="radio" id="mul" name="operation" value="multiplication"><label for="mul">multiplication</label><br>
  <input type="radio" id="div" name="operation" value="division"><label for="div">division</label><br>
  <input type="radio" id="mod" name="operation" value="modulus"><label for="mod">modulus</label><br>
  <input type="submit" value="Submit">
</form> 
