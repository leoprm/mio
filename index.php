<!DOCTYPE html>
<html>
<head>
	<title>Leo's videos and more</title>
    <link rel="stylesheet" href="css/styles.css">
	<meta charset='utf-8'>
	<?php include ('librerias.php'); ?>
</head>
<body id="home">
	<img class="bg" src="img/Seniors.JPG" />
	<?php include('menu.php') ?>

	<?php
	$oEntrada=new Entrada();

	While($Entradas=$oEntrada->Selecciona()){
	?>
	<div class="Entrada">
	<ul>
		<li><p></p></li><br>
		<li><h1><?php $Entradas->Titulo(); ?></h1></li><br>
		<li><p><?php $Entradas->Cuerpo(); ?></p></li><br>

	</ul>
	</div>
	<?php
	}
	?>
	
	
	
</body>
</html>