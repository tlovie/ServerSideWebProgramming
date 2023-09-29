<?php
    if (!empty($_GET)) {
        echo "<br>";
        foreach( $_GET as $idx => $val) {
            echo "<br> get key: {$idx} => {$val}";
        }
        // filter_input
        $fname = filter_input( INPUT_GET, "fname", FILTER_DEFAULT );
        // what is filter_input  https://www.php.net/manual/en/function.filter-input.php
    }
?>


<form action="2_forms.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 
