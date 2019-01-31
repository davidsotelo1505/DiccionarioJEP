<?php require_once('conn/connect.php') ?>

<?php 
	$search = '';
	if(isset($_GET['search'])){
		$search = $_GET['search'];
	}

	$id = '';
	if(isset($_GET['id'])){
		$search = $_GET['id'];
	}

	$consulta = "SELECT * FROM definicion WHERE id LIKE '%$search%' ";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);

	?>

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
		<div class="center">
			<br><br>
			<img src="img/diccionario.png" width="100" alt="" title="Diccionario">
			<br><br><br><br><br>
		</div>
		<div class="form center">
			<a href="javascript:history.back(1);">Volver atras</a>
		</div>
		<div id="resultados">

			<h1><?php echo $fila['Nombre'] ?></h1>
			<p><?php echo $fila['Significado'] ?></p>
			
		</div>
		<div class="footer center">
			Copyright™ 2018 - reservdos todos los derechos

		</div>
	</div>
</body>
</html>