<?php

  $command = "ruby gatewaybal.rb";
  $output = shell_exec("ruby gatewaybal.rb");//executes the command, receives an array and integer for the return values
  echo "<pre>$output</pre>";

?>
