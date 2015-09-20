<?php

  $command = "ruby gatewaybal.rb";
  $output = shell_exec("ruby gatewaybal.rb");//executes the command, receives an array and integer for the return values
  //echo "<pre>$output</pre>";
  //echo $output;
  echo "The Obligations for the ~Xagate issuing account, excluding the ~Twarden hot-wallet, include the following currencies and amounts:";
//$pattern = /\"obligations\" : { \"[A-Z]{3}\" : \"[0-9]{1,}\.[0-9]{1,}\"/;

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
//echo $matches[0];

echo "<br /><br />";
preg_match("/\"AGT\" : \"[0-9]{1,}\.[0-9]{1,}\"/",$matches[0],$AGT);
//echo $AGT[0];
//print_r($AGT);
preg_match("/[0-9]{1,}\.[0-9]{1,}/",$AGT[0],$agt);
echo "AGT: $agt[0]";
//print_r($agt);

echo "<br /><br />";
preg_match("/\"BTC\" : \"[0-9]{1,}\.[0-9]{1,}\"/",$matches[0],$BTC);
//print_r($BTC);
preg_match("/[0-9]{1,}\.[0-9]{1,}/",$BTC[0],$btc);
//print_r($btc);
echo "BTC: $btc[0]";

echo "<br /><br />";
preg_match("/\"NXT\" : \"[0-9]{1,}\.[0-9]{1,}\"/",$matches[0],$NXT);
preg_match("/[0-9]{1,}\.[0-9]{1,}/",$NXT[0],$nxt);
//print_r($nxt);
//print_r($NXT);
echo "NXT: $nxt[0]";

echo "<br /><br />";
preg_match("/\"XAG\" : \"[0-9]{1,}\.[0-9]{1,}\"/",$matches[0],$XAG);
preg_match("/[0-9]{1,}\.[0-9]{1,}/",$XAG[0],$xag);
//print_r($xag);
//print_r($XAG);
echo "XAG: $xag[0]";

echo "<br /><br />Full Raw Data: <br />";
echo "<pre>$output</pre>";

?>
