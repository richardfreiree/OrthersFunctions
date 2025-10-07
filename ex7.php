<?php 

$num = array(1,23,234,523,32,12,123,124,345,123);

$mult = 3;
$multi = 0;
$tudo = 0;
for($i=0;$i<10;$i++){
	$tudo = $tudo  + $multi;
	$multi = $num[$i] * $mult; 
};
echo "A multiplicação dos 10 números por $multi ficou $tudo";
 ?>
