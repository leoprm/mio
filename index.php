<!DOCTYPE html>
<html>
<head>
	<title>Leo's videos and more</title>
    <link rel="stylesheet" href="css/styles.css">
	<meta charset='utf8_bin'>
	<?php include ('librerias.php'); ?>
</head>
<body id="home">
	<img class="bg" src="img/bg_index.JPG" />
	<?php include('menu.php') ?>

	<?php
	$oEntrada=new Entrada();

	While($Entradas=$oEntrada->Selecciona()){
	?>
	<div class="Entrada">
	
		
		<a  href="#"><?php echo($Entradas->Titulo()); ?></a>
		<p><?php echo($Entradas->Fecha()); ?></p>
		<img  src="img/Seniors.JPG"><br>

	
	</div>
	<?php
	}
	?>
	
	
	
</body>
</html>