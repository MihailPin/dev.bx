<?php

require_once 'analize.php';
function test()
{
	$result = analize('./test/');

	echo 'Запуск автоматического тестирования' . PHP_EOL;

	$expectedResult = [
		'dirs' => [
			'0' =>
				[
					'is_readable' => 'true',
					'is_writable' => 'true'
				]
		],
		'files' => [
			'testFile(inTest).php' => [
				'is_readable' => 'true',
				'is_writeable' => 'true',
				'filesize' => 17
			],
			'testFile(noWritable).php' => [
				'is_readable' => 'true',
				'is_writeable' => 'false',
				'filesize' => 2
			]
		]
	];
	var_export($result == $expectedResult);
}


