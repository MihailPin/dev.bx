<?php

function test()
{
	$currentDir = opendir('.');
	while ($element = readdir($currentDir)) {
		if (in_array($element, ['.', '..'])) {
			continue;
		}
		if (is_dir($element)) {
			echo PHP_EOL. PHP_EOL. 'Результат проверки папки: '.$element . PHP_EOL;
			echo $element. ' Проверка на папку';
			echo (is_dir($element) === true ? ' passed' : ' failed') . PHP_EOL;
			echo $element. ' Проверка на чтение';
			echo (is_writable($element) === true ? ' passed' : ' failed') . PHP_EOL;
			echo $element. ' Проверка на запись';
			echo (is_readable($element) === true ? ' passed' : ' failed') . PHP_EOL;
		}
		if (is_file($element)) {
			echo PHP_EOL. PHP_EOL. 'Результат проверки файла: '.$element . PHP_EOL;
			echo $element. ' Проверка на файл';
			echo (is_file($element) === true ? ' passed' : ' failed') . PHP_EOL;
			echo $element. ' Проверка на чтение';
			echo (is_writable($element) === true ? ' passed' : ' failed') . PHP_EOL;
			echo $element. ' Проверка на запись';
			echo (is_readable($element) === true ? ' passed' : ' failed') . PHP_EOL;
			echo $element. ' Проверка на размера файла';
			echo (filesize($element) > 0 ? ' passed' : ' failed') . PHP_EOL;
		}
	}
	closedir($currentDir);

}



