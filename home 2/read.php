<?php
 require_once ('test.php');
function readFromConsole($input = '')
{
	if($input == '')
	{
		$input = trim(fgets(STDIN));
	}
	switch ($input)
	{
		case 'true':
			return true;
		case 'false':
			return false;
		case '!stop':
			return 'null';
		case is_numeric($input):
			return +$input;
		default:
			return (string)$input;
	}
}
