<?php


function analize($input)
{
	$list =(['folders'=>[],'files'=>[]]);
	$currentDir = opendir($input);
	while ($element = readdir($currentDir)) {
		if (in_array($element, ['.', '..'])) {
			continue;
		}
		if (is_dir($element)) {
			$list['folders'][$element]['is_readable'] =
				(is_readable($element) == true ? 'true' : 'false');
			$list['folders'][$element]['is_writable'] =
				(is_writable($element) == true ? 'true' : 'false');
		}
		if (is_file($element)) {
			$list['files'][$element]['is_readable'] =
				(is_readable($element) == true ? 'true' : 'false');
			$list['files'][$element]['is_writeable'] =
				(is_writeable($element) == true ? 'true' : 'false');
			$list['files'][$element]['filesize'] = filesize($element);
		}
	}
	closedir($currentDir);
	print_r($list);

}