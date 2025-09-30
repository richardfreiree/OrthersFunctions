<?php 


$array = array(
	array(1, "Maria", 3000),
	array(2, "Cassio", 4000),
	array(3, "Karen", 5000)
);

for($linha = 0;$linha<3;$linha++){
	for($coluna=0;$coluna<3;$coluna++){
		var_dump($array[$linha][$coluna]." ");
	}
	echo("</br>");
}


$arr = array('v' => 'Vermelho', 'v' => 'Verde', 'a' =>
	array('azul', 'marrom', 'preto'));

var_dump($arr);

$arr2 = array(1,2,3,4);
echo json_encode($arr2);

foreach($arr2 as $va){
	echo("$va ". "");
}

$ar = array('v' => "Verder", 'e' => 'Verde', 'z' => 'Azul');

foreach ($ar as $key=>$value){
	echo($key . "=>" . $value . "\n");
}

 ?>