Securify
==========

version 0.1.1  Created by [Amir Hoseinian](https://www.amirhoseinian.com)


Introduction
-----------------

this small class is built for 

- secure php password from something like "php password" to "P#p P@$$\/\/0Rd"

this is a automatic password generator but instead of creating something meaningless it make meaningful hash like strings. so users can remember their password easily and password is secure enough.

Usage
-----

	<?php
	require_once("Securify.php");
	$str = "php password";
	$securify = new Securify;
	$securedString = $securify($str,100);//second param is lvl of securifieng (1-100) in other word it`s the chance that words of the string change to something else

	echo $securedString; // somthing like "P#p P@$$\/\/0Rd" , "P#p PA$sW0R|)" or in lower lvls "Php Pas$woRd"
				
			