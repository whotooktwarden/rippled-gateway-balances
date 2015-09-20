<?php

  $command = "ruby gatewaybal.rb";
  $output = shell_exec("ruby gatewaybal.rb");//executes the command, receives an array and integer for the return values
  echo "<pre>$output</pre>";
  
  /* This Regular Expression
  \"obligations\" : {\n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\",\n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\",
  
  Will match the obligation lines in the format of:
  "obligations" : {
         "AGT" : "35.20001488240064",
         "BTC" : "0.001490675097157683",
         
  If you have more (or less) obligations, add or remove \n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\",
  Note that the last returned field will not have a comma
  
  The code below should return an array such as:
  "obligations" : { "AGT" : "35.20001488240064", "BTC" : "0.001490675097157683", 
  */
  
  preg_match("/\"obligations\" : {\n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\",\n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\",\n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\",\n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\",\n?\s{1,}\"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\"/",$output,$matches);
  echo $matches[0];
  
?>
