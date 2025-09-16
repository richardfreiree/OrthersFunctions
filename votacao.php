<?php 

include("header.php");

$idade = 19;

if($idade < 16){
	include("votacao_min.php");
}
elseif ($idade < 18) {
		include("votacao_16.php");
}

else {
		include("votacao_max.php");
}

include("footer.php");

 ?>