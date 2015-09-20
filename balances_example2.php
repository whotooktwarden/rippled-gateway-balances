<?php

  $command = "ruby gatewaybal2.rb";
  $output = shell_exec("ruby gatewaybal2.rb");//executes the command, receives an array and integer for the return values
  //echo "<pre>$output</pre>";

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

  echo "The Obligations for the ~Rippleunion issuing account, excluding the ~Twarden hot-wallet, include the following currency and amounts:";
  preg_match("/\"obligations\" : {\n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\"/",$output,$matches);
  echo $matches[0];

  echo "<br /><br />";
  preg_match("/\"CAD\" : \"[0-9]{1,}\.[0-9]{1,}\"/",$matches[0],$CAD);
  //echo $CAD[0];
  //print_r($CAD);
  preg_match("/[0-9]{1,}\.[0-9]{1,}/",$CAD[0],$cad);
  echo "CAD: $cad[0]";
  //print_r($cad);

  echo "<br /><br />Full Raw Data: <br />";
  echo "<pre>$output</pre>";
?>
