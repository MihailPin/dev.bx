<?php
require_once ('test.php');
readTest();
function readFromConsole (string $qestion)
{
 echo $qestion.' : ';
 $input = trim(fgets(STDIN));
 if ($input == 'true')
 {
 	$input= true;
 }
 else if ($input == 'false')
 {
 	$input= false;
 }
 else if (is_numeric($input))
 {
 	$input = +$input;
 }
 else if ($input=='!stop')
 {
	 $input = '';
 }
 else
 {
 	$input = (string)$input;
 }
 return $input;
}

