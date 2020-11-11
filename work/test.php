<?php

require_once ('read.php');


function calculate($a, $b, $action)
{
	if (!in_array($action, ['+','-','/','*']))
	{
		return false;
	}

	if ($action === '+')
	{
		return $a + $b;
	}

	if ($action === '-')
	{
		return $a - $b;
	}
	if ($action === '/')
	{
		return $a / $b;
	}
	if ($action === '*')
	{
		return $a * $b;
	}
}


/*
 * @test 1+2 = 3
 * @test 3-2 = 1
 * @test 2*2 = 4
 * @test 2/2 = 1
 * @test 2/0 = false
 * @test 1 r 2 = false
 */

function calculateTest()
{
	$result = calculate(1,2, '+');
	echo 'Результат 1+2='.$result. ($result === 3 ? ' passed '.PHP_EOL : ' failed '.PHP_EOL);
}
{
	$result = calculate(3,2, '-');
	echo 'Результат 3-2='.$result. ($result === 1 ? ' passed'.PHP_EOL : ' failed'.PHP_EOL);
}
{
	$result = calculate(2,2, '*');
	echo 'Результат 2*2='.$result. ($result === 4 ? ' passed'.PHP_EOL : ' failed'.PHP_EOL);
}
{
	$result = calculate(2,2, '/');
	echo 'Результат 2/2='.$result. ($result === 1 ? ' passed'.PHP_EOL : ' failed'.PHP_EOL);
}

calculateTest();