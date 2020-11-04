<?php
require 'read.php';
$i=false;
$f=false;
$d=false;
while ($i!=true) {

	$quantity = readFromConsole('Введите количество цифр в последовательности');
	if (is_numeric($quantity)){
		$i=true;
	} else {
		echo "Ошибка введенные данные не являются числом\n";
	}

}

while ($f!=true){
$input = readFromConsole('Введите последовательность(с не нулевыми значениями, содержащую только цифры)');
$elem= explode(" ",$input);
	for ($i=0; $i<=$quantity-1; $i++){
		if(is_numeric($elem[$i])){
		$qan1=$qan1+1;
		}
	}
	if($qan1==$quantity){
		$d=true;
	}
	if($elem[$quantity-1]>0 && $d==true|| $elem[$quantity-1]<0 && $d==true ){
		$f=true;
	}
	else {
	echo"Повторите ввод последовательности\n";
}
}


for ($i=0; $i<=$quantity-1; $i++)
{
	$sum=$sum+$elem[$i];
}
echo "Сумма введенных элементов ", ($sum) ;