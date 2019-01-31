<?php
	require_once('../conn/connect.php');

	sleep(1);

	
	$search = '';
	if(isset($_POST['search'])){
		$search = $_POST['search'];
	}

	$consulta = "SELECT * FROM definicion WHERE Nombre LIKE '".$search."%'";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);



  ?>

  <?php if ($total>0 && $search!= '') {?>
  		<h2>Resultados de la busqueda</h2>
  		<?php do { ?>
  			<div class="art "> 

  				<a href="articulo.php?id=<?php echo $fila['id'] ?>&search=<?php echo $search ?>$">
  				<span class= "titulo"><?php echo str_replace($search, '<strong>'.$search.'</strong>',$fila['Nombre'])  ?></span><br>
				</a>

				
			</div>
  		<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
  	<?php } 
  		elseif($total>0 && $search=='') echo '<h2>Ingrese un parametro de busqueda</h2> <p>Ingrese letra o palabra que desea buscar </p>';
  		else echo '<h2>No se han encontrado resultados</h2> <p>Intenta realizar tu busqueda con palabras mas especificas</p>';
  	?>