<?php 
$arr1 = array(
	array(25,12,35),
	array(85,47,98),
	array(32,38,105)
);

$arr2 = array(
	array(98,65,35),
	array(5,27,8),
	array(74,14,3)
);

$arr3 = array(
	array(),
	array(),
	array()
);
$soma1 = 0;
$soma2 = 0;
$soma3 = 0;

for($a=0;$a<3;$a++){
	for($b=0;$b<3;$b++){
		$arr3[$a][$b] = $arr1[$a][$b] + $arr2[$a][$b];
	}
};

for($a=0;$a<3;$a++){
	for($b=0;$b<3;$b++){
		$soma1 = $soma1 + $arr1[$a][$b];
		$soma2 = $soma2 + $arr2[$a][$b];
		$soma3 = $soma3 + $arr3[$a][$b];
	}
};



echo "<pre>";
echo "A soma de cada array é: \nMatriz 1: $soma1 \nMatriz 2: $soma2 \nMatriz 3: $soma3";
echo "<pre>";

 ?>