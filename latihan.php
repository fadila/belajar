<?php

class HelloWorld { 
	function myPrint() { 
		print "Hello, world."; 
	} 
	function apaKabarDunia() { 
		print "apa Kabar Dunia"; 
	} 
} 

$myHelloWorld = new HelloWorld(); 
$myHelloWorld->myPrint(); 
echo"<br/>";
$x = new HelloWorld(); 
$x->apaKabarDunia(); 


?> 