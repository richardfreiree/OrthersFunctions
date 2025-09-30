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

for($a=0;$a<3;$a++){
	for($b=0;$b<3;$b++){
		$arr3[$a][$b] = $arr1[$a][$b] + $arr2[$a][$b];
	}
};
echo "<pre>";
print_r($arr3);
echo "<pre>";

 ?>