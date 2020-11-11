<?php

require_once ('read.php');

/*
 * readFromConsole('', 'true') - true;
 * readFromConsole('', 'false') - false;
 * readFromConsole('', '!stop') - null;
 * readFromConsole('', '1.3') - 1.3;
 * readFromConsole('', '1') - 1;
 * readFromConsole('', 'test') = 'test;
 */

function readTest()
{
	$result = readFromConsole('Введите true', true);
	echo 'Результат теста ' .var_export($result,true). ($result === true ? ' passed '.PHP_EOL : ' failed '.PHP_EOL);
}
{
	$result = readFromConsole('Введите false', false);
	echo 'Результат теста ' .var_export($result,true). ($result === false ? ' passed'.PHP_EOL : ' failed'.PHP_EOL);
}
{
	$result = readFromConsole('Введите !stop', '');
	echo 'Результат теста ' .var_export($result,true). ($result === '' ? ' passed'.PHP_EOL : ' failed'.PHP_EOL);
}
{
	$result = readFromConsole('Введите 1.3', 1.3);
	echo 'Результат теста ' .var_export($result,true). ($result === 1.3 ? ' passed'.PHP_EOL : ' failed'.PHP_EOL);
}
{
	$result = readFromConsole('Введите 1', 1);
	echo 'Результат теста ' .var_export($result,true). ($result === 1 ? ' passed'.PHP_EOL : ' failed'.PHP_EOL);
}
{
	$result = readFromConsole('Введите test', 'test');
	echo 'Результат теста ' .var_export($result,true). ($result === 'test' ? ' passed'.PHP_EOL : ' failed'.PHP_EOL);
}
