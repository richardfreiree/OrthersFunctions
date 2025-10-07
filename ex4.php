<?php 
$anos = array(
	array('ano'=>1, 'mes' =>"janeiro"),
	array('ano'=>2 , 'mes'=>'fevereiro'),
	array('ano'=>3, 'mes'=>'março'),
	array('ano'=>4, 'mes' =>'abril'),
	array('ano'=>5, 'mes' =>'maio'),
	array('ano'=>6 , 'mes'=>'junho'),
	array('ano'=>7 , 'mes'=>'julho'),
	array('ano'=>8 , 'mes'=>'agosto' ),
	array('ano'=>9 , 'mes'=>'setembro'),
	array('ano'=>10 , 'mes'=>'outubro'),
	array('ano'=>11 , 'mes'=>'novembro'),
	array('ano'=>12 , 'mes'=>'dezembro')
);

$user = 3;
$escolha = '';	
foreach ($anos as $anos) {
	if($user == $anos['ano']){
		echo $anos['mes'];
	};
};

 ?>