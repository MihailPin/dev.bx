<?php

	echo "Введите первое число \n";
	$a = trim(fgets(STDIN));
	echo "Введите второе число \n";
	$b = trim(fgets(STDIN));
	echo "Введите операцию число \n";
	$c = trim(fgets(STDIN));

if($c=="+") {
	echo "Ответ a+b= ", $a+$b;
}
elseif ($c=="-"){
	echo "Ответ a-b= ", $a-$b;
}
elseif ($c=="*"){
	echo "Ответ a*b= ", $a*$b;
}
elseif ($c=="/"&& $b!=0){
	echo "Ответ a/b= ", $a/$b;
}
else{
	echo "На 0 делить нельзя";
}