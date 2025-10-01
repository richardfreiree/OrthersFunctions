<?php 

$aluno = array(
	array('no' =>"richard", "n" => 10),
	array('no' =>'mauricio',"n" => 7),
	array('no' =>'marcos',"n" => 4),
	array('no' =>'pedro', "n" =>8),
	array('no' =>'ricardo', "n" =>4),
	array('no' =>'arthur', "n" =>9),
	array('no' =>'marlon',"n" => 2),
	array('no' =>'kaio', "n" =>7),
	array('no' =>'lucas', "n" =>8),
	array('no' =>'mano' ,"n" =>3)
);
$soma = 0;
$media = 0;
$i = 0;
$maior = 0;
$maiorr  = '';


foreach ($aluno as  $alu) { 
		$soma = $soma + $alu["n"];
		if($alu["n"] > $maior){
			$maior = $alu["n"];
			$maiorr = $alu["no"];
		}

};
		$media = $soma / 10;
echo("A média da turma foi de $media e a maior nota foi $maiorr");


 ?>