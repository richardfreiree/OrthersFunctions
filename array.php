<?php 

$alunos = array("Maria", "João", "Carlos");
$alunos[0] = "Carlos";
$alunos[] = "Maria";

echo($alunos[3] . "</br>");
echo($alunos[2] . "</br>");

$email = array(
	array(
		"email" => "richard@gmail.com",
		"nome" => "richard",
		"idade" => 18
	),
	array(
		"email" => "carlos@gmail.com",
		"nome" => "carlos",
		"idade" => 20
	)
);

echo ("</br>");
echo ("<pre>");
print_r($email[0]);
echo ("</br>");
echo ("<pre>");
print_r($email[1]);
echo ("</br>");
echo ("<pre>");
var_dump($email[1]);	

 
  $num = array(1,2,3,4,5,6,7);
  for($i=0;$i<6;$i++){
  	$num[$i] = 12;

  }

  for($i=0;$i<8;$i++){
  	echo "O valor do vetor: " . $num[$i];

  }
 ?>