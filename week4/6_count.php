<?php

if (!empty($_GET)) {

  $start = filter_input(INPUT_GET, 'start', FILTER_VALIDATE_INT);
  $end   = filter_input(INPUT_GET, 'end', FILTER_VALIDATE_INT);
  $step  = filter_input(INPUT_GET, 'step', FILTER_VALIDATE_INT);

  if( $start === false || $end === false || $step === false ) 
    echo "Invalid inputs - try again";
  elseif( $start == $end )
    echo "start must be different from end";
  elseif( $step == 0 )
    echo "non-zero step is required";

    
}

?>

<form action="6_count.php">
  <label for="number1">Start:</label><br>
  <input type="text" id="start" name="start" value=""><br>
  <label for="number2">End:</label><br>
  <input type="text" id="end" name="end" value=""><br>
  <label for="number3">Step:</label><br>
  <input type="text" id="step" name="step" value=""><br><br>
  <input type="submit" value="Submit">
</form> 



















<!--


elseif( $start < $end && $step < 0 )
    echo "step must be positive when start is less than end";
  elseif( $start > $end && $step > 0 )
    echo "step must be negative when start is greater than end";
  elseif( abs(($start - $end)/$step) >= 100 )
    echo "too many numbers required - max 99";

  else {
    for( $n = 0, $c = $start; (($start < $end) && $c <= $end) || (($start > $end) && $c >= $end); $c += $step ) {
       $out[$n++] = $c;
    }
    echo json_encode($out);
  }
-->