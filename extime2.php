<?php 
session_start();


$voto = $_GET['time'];

if(!isset($_COOKIE['time'])){

	setcookie("time", $voto.time()+3600*24*31);

	$msg = "Obrigado por votar!!!";
}else{

	$msg = "Você já votou uma vez.";
};

echo $msg;


 ?>