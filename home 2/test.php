
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
	$result=readFromConsole('true');
	echo '1) Результат функции: '.var_export($result, true).
		PHP_EOL.' Ожидаемый результат: true'.PHP_EOL;
	echo ($result === true ? ' passed' : ' failed').PHP_EOL;

	$result=readFromConsole('false');
	echo '2) Результат функции: '.var_export($result, true).
		PHP_EOL.' Ожидаемый результат: false'.PHP_EOL;
	echo ($result === false ? ' passed' : ' failed').PHP_EOL;

	$result=readFromConsole('!stop');
	echo '3) Результат функции: '.$result.PHP_EOL.' Ожидаемый результат: null'.PHP_EOL;
	echo ($result === 'null' ? ' passed' : ' failed').PHP_EOL;

	$result=readFromConsole('1.3');
	echo '4) Результат функции: '.$result.PHP_EOL.' Ожидаемый результат: 1.3'.PHP_EOL;
	echo ($result === 1.3 ? ' passed' : ' failed').PHP_EOL;

	$result=readFromConsole('1');
	echo '5) Результат функции: '.$result.PHP_EOL.' Ожидаемый результат: 1'.PHP_EOL;
	echo ($result === 1 ? ' passed' : ' failed').PHP_EOL;;

	$result=readFromConsole('test');
	echo '6) Результат функции: '.$result.PHP_EOL.' Ожидаемый результат: test'.PHP_EOL;
	echo ($result === 'test' ? ' passed' : ' failed').PHP_EOL;
}
