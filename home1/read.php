<?php
function readFromConsole(string $qestion)
{
 echo $qestion.': ';
 $input = trim(fgets(STDIN));
 if ($input == 'true' || $input == 'false')
 {
 	$input= (bool)$input;
 }
 else if (is_numeric($input))
 {
 	$input = +$input;
 }
 else
 {
 	$input = (string)$input;
 }
 return $input;
}