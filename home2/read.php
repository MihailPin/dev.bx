<?php
require_once ('test.php');
$test=readFromConsole('Если хотите заустить тестирование введите test');
function readFromConsole (string $qestion)
{
 echo $qestion.' : ';
 $input = trim(fgets(STDIN));
 if ($input=='test')
 {
	readTest();
 }
 else if ($input == 'true')
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
	 $input = null;
 }
 else
 {
 	$input = (string)$input;
 }



 return $input;
}
