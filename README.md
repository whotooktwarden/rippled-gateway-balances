# rippled-gateway-balances
A package for retrieving a Ripple Gateway's balances and obligations for display on their web site.

>Many thanks to JoelKatz for his help with the JSON syntax!!

This packageis provided AS-IS and WITHOUT WARRANTY.

>I, TAYLOR WARDEN, HEREBY CLAIM NO RESPONSIBILITY THEREIN FOR ANY INDIVIDUAL, 
>INDIVIDUALS, ENTITY, OR ENTITIES THAT MAY RECEIVE LEGAL ACTION, DIRECTLY OR INDIRECTLY,
>FOR THE USAGE OF THIS OR ANY PORTION OF THESE DOCUMENTS, IN PART OR IN FULL.  

>IN THE CASE OF A CIVIL LAWSUIT BEING ISSUED REGARDING THE USAGE OF THESE MATERIALS,
>THE RESULTING LAWSUIT WILL BE HEARD FROM WITHIN A COURT OF ONTARIO, CANADA.


* Purpose

This package is for Ripple Gateways to allow their clients to audit their balances and their obligations over the network.  This is accomplished by specifying an issuer and a hot wallet to ignore within the gatewaybal1.rb and/or gatewaybal2.rb files.  The PHP file requires a call to this ruby script via shell_exec(), which will fetch the balances from the rippled node on your server for display to the user.

* Command-line Usage

>ruby gatewaybal1.rb


or

>ruby gatewaybal2.rb


* Reference Materials

[Fetching Gateway's Balance from their Web site](https://forum.ripple.com/viewtopic.php?f=2&t=15656)

* Donations


Please consider donating a small amount of XRP or Bitcoin to: https://www.bountysource.com/teams/qgk


for the continued support/development of this resource if it was was helpful for starting your Ripple-based or Cryptocurrency Exchange business.


*  Join the Ripple Community!


Join us at the official Ripple forums! https://forum.ripple.com/
