<?php

  function CheckNumber($x) {
    if ($x > 0)
      {$message = "Positive number";}
    if ($x == 0)
      {$message = "Zero";}
    if ($x < 0)
      {$message = "Negative number";}
    echo $message."\n";
  }

  CheckNumber(5.5);
  CheckNumber(-10.8);

?>