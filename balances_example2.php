<?php

  $command = "ruby gatewaybal2.rb";
  $output = shell_exec("ruby gatewaybal2.rb");//executes the command, receives an array and integer for the return values
  echo "<pre>$output</pre>";

  /* This Regular Expression
  \"obligations\" : {\n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\"
  
  Will match the obligation field of an account with a signle obligation line in the format of:
  "obligations" : {
         "CAD" : "35.20001488240064",
         
  If you have more (obligations, add a comma to the end of the regex then add \n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\",
  Note that the last returned field will not have a comma
  
  The code below should return an array such as:
  "CAD" : "9704.431336587773"
  */
  
  preg_match("/\"obligations\" : {\n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\"/",$output,$matches);
  echo $matches[0];

?>
