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
 ?>