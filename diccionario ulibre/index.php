<?php require_once('conn/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Diccionario</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<script type= "text/javascript" src="js/jquery.js" ></script>
	<script type= "text/javascript" src="js/ajax.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	
	<div class="container">
		<div class="center" id="logo">
			<br><br>
			<img src="img/unilibre.png" width="100" alt="" title="Diccionario"> <br>
			<h1>ABREVIATURAS</h1>
			<h2>Categorías gramaticales usadas en el corpus </h2>
			<p>Saberes y voces de la memoria que incorporó registros producidos entre 2010 a 2018 en Colombia. <br>

			Existen nueve grandes categorías en el Español: <br>

			Sustantivos: (s.). Designan cosas que tienen existencia; seres animados o inanimado e ideas. <br>

			Adjetivos: (adj.). Acompañan a un sustantivo y concretan alguna circunstancia cualidad o accidente de este. <br>

			Verbos: (v.). Expresan acciones, estados o procesos en un tiempo concreto. Es decir, indican una acción proceso. <br>

			Adverbios: (adv.). Acompañan y modifican al verbo y al propio adverbio; y lo caracterizan en algún aspecto. <br>

			Preposiciones: (prep.). Su función es la de unir palabras con sus complementos. <br>

			Conjunciones: (conj.). Nexos que relacionan palabras u oraciones entre sí. <br>

			Interjecciones: (intrej.). Expresan sentimientos de pena, sorpresa e ilusión. <br>

			Determinantes: (det.). Cuyo objetivo es concretar y delimitar el significado del sustantivo al que acompañan. <br>

			Pronombres: (pron.). Remplazan a los sustantivos y llevan a cabo las mismas funciones sintácticas que estos.</p>
			<br><br><br><br><br>
		</div>
		<div class="form center">
			<form action="" method="post" name="search_form" id="search_form">
				<input type="text" name="search" id="search">
			</form>
		</div>
		<div id="resultados"></div>
		<div class="footer center">
			Copyright™ 2018 - reservdos todos los derechos -David Sotelo

		</div>
	</div>
</body>
</html>