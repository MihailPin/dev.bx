<?php
require_once 'test.php';
require_once 'figure.php';
test();


echo 'Хотите провести собственные тесты?(y/n)'.PHP_EOL;
$answer = trim(fgets(STDIN));
if($answer == 'y') {
	echo 'Укажите через пробел начальную позицию и проверяемую позицию' . PHP_EOL;
	$string = trim(fgets(STDIN));
	$positions = explode(" ", $string);
	$rook = new Pincher\Rook($positions[0], $positions[1]);
	$queen = new Pincher\Queen($positions[0], $positions[1]);
	echo 'Ладья ' . ($rook->checkAttack($positions[2], $positions[3]) == 'ДА' ? '' : 'не ') . 'сможет попасть' . PHP_EOL;
	echo 'Ферзь ' . ($queen->checkAttack($positions[2], $positions[3]) == 'ДА' ? '' : 'не ') . 'сможет попасть' . PHP_EOL;
}