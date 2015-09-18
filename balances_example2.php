<?php

  $command = "ruby gatewaybal2.rb";
  $output = shell_exec("ruby gatewaybal2.rb");//executes the command, receives an array and integer for the return values
  echo "<pre>$output</pre>";

?>
