<html>
<head></head>  
<body>

<?php 
if( isset($_GET['some1']) && $_GET['some1'] != "" ) {
  echo "some1 filled out<br>";
  echo $_GET['some1'] ;
}

?>

<form action="5_xss.php">
    <label for="some1">Some Text:</label><br>
    <textarea rows="5" cols="50" id="some1" name="some1" value=""></textarea><br>
    <input type="submit" value="Submit">
  </form> 
</body>
</html>
















<?php

  // <script> alert("hello"); </script>
  // <img src=x onerror="alert('hello');"></img>
?>
