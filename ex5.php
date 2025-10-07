<?php 

$pessoas = array(
	array('nome'=> 'Pedro', 'idade'=>'14', 'cidade' =>'São Paulo', 'sexo'=>'Masculino'),
	array('nome'=> 'Marcia', 'idade'=>'20', 'cidade' =>'São Paulo', 'sexo'=>'Feminino'),
	array('nome'=> 'Marcos', 'idade'=>'13', 'cidade' =>'Santos', 'sexo'=>'Masculino'),
	array('nome'=> 'arthur', 'idade'=>'16', 'cidade' =>'São Paulo', 'sexo'=>'Masculino'),
	array('nome'=> 'Sabrina', 'idade'=>'26', 'cidade' =>'Santos', 'sexo'=>'Feminino'),
	array('nome'=> 'Kaio', 'idade'=>'43', 'cidade' =>' São Paulo', 'sexo'=>'Masculino'),
	array('nome'=> 'Sandra', 'idade'=>'12', 'cidade' =>'Santos', 'sexo'=>'Feminino'),
	array('nome'=> 'Alessandra', 'idade'=>'54', 'cidade' =>'Santos', 'sexo'=>'Feminino'),
	array('nome'=> 'Richard', 'idade'=>'43', 'cidade' =>'Peruíbe', 'sexo'=>'Masculino'),
	array('nome'=> 'Vinicius', 'idade'=>'23', 'cidade' =>'Santos', 'sexo'=>'Masculino'),
	array('nome'=> 'Laércio', 'idade'=>'12', 'cidade' =>'São Paulo', 'sexo'=>'Masculino')
);

$contS= 0;

foreach ($pessoas as $pessoa) {
	echo $pessoa['nome'] . ",". $pessoa['idade'] . "</br>";
}
foreach($pessoas as $pessoa){
	if($pessoa['cidade'] == 'Santos'){
	echo($pessoa['nome'].' mora em ' .$pessoa['cidade'] . '</br>');
};
};
foreach($pessoas as $pessoa){
	if($pessoa['idade'] > '18'){
	echo($pessoa['nome'].', idade  ' .$pessoa['idade'] . '</br>');
};
};
foreach($pessoas as $pessoa){
	if($pessoa['sexo'] == 'Masculino'){
		$contS++;
};
};
	echo("$contS são do sexo Masculino");
 ?>