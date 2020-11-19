<?php

function analize($input)
{
	$list = ['dirs'=>[],'files'=>[]];
	$currentDir = opendir($input);
	while ($element = readdir($currentDir)) {
		if (in_array($element, ['.', '..'])) {
			continue;
		}

		if (is_dir($element)) {
			$list['dirs'][$element][] = 'is folder';

			if (is_readable($element)) {
				$list['dirs'][$element][] = 'is readable true';
			} else {
				$list['dirs'][$element][] = 'is readable false';
			}
			if (is_writable($element)) {
				$list['dirs'][$element][] = 'is writable true';
			} else {
				$list['dirs'][$element][] = 'is readable false';
			}
		}
		if (is_file($element)) {
			$list['files'][$element][] = 'is file';

			if (is_readable($element)) {
				$list['files'][$element][] = 'is readable true';
			} else {
				$list['files'][$element][] = 'is readable false';
			}
			if (is_writable($element)) {
				$list['files'][$element][] = 'is writable true';
			} else {
				$list['files'][$element][] = 'is readable false';
			}
			$size = filesize($element);
			$list['files'][$element][] = $size;
		}
	}
	closedir($currentDir);

	print_r($list);
}