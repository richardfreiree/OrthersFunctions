<?php 
$num = array(1,-23,234,523,-32,12,-123,124,345,-123);
$neg = 0;
$pos = 0;
$pares = 0;
$impar = 0;
for($i=0;$i<9;$i++){
	if($num[$i] < 0){
	$neg++;
	} else{
		$pos++;
	};
	if($num[$i] % 2 == 0){
		$pares++;
	} else{
		$neg++;
	};
};

 ?>