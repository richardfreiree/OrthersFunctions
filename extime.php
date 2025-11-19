<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Escolha de Time</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Escolha o melhor time do Mundo</h1>
		<form method="get" action="extime2.php">
		<div class="escolha">
		<input type="radio" id="corinthians" name="time" value="corinthians"></input>
		<label for="corinthians">Corinthians</label>


			<div class="palmeiras">
				<input type="radio" id="palmeiras" name="time" value="palmeiras"></input>
		<label for="Palmeiras">Palmeiras</label>
		<img src="img/palmeiras.png">
		</div>

				<input type="radio" id="paulo" name="time" value="paulo"></input>
		<label for="paulo">São Paulo</label>


				<input type="radio" id="boca" name="time" value="boca"></input>
		<label for="boca">Boca Juniors</label>

				<input type="radio" id="river" name="time" value="river"></input>
				<div/>
		<label for="river">River Plate</label>
		<br>
		<br>
		<button type="submit">Enviar</button>
		<br>
	</form>


</body>
</html>