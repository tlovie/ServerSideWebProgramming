<?php
    if (!empty($_GET)) {
        echo "<br>";
        $name = $_GET['name'];
        var_dump($name);
    }
?>

<form action="4_form_array.php">

<?php 
for ($c=0; $c < 8; $c++)
    echo "<label for=\"l1\">field {$c}:</label><br>",
        "<input type=\"text\" id=\"name[{$c}]\" name=\"name[{$c}]\" value=\"\"><br>";
?>

<input type="submit" value="Submit">
</form> 
