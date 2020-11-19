<?php
require_once ('analize.php');
require_once('tester.php');

echo 'Введите ".", чтобы проанализировать данную папку или введите testing для тестирования программы ';
$input = trim(fgets(STDIN));
if ($input=='testing')
{
	test();
}
else
{
	analize($input);
}


