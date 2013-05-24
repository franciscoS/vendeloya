<?php

	//Inclye la conexion
	require_once("_conn-live.php");

	// Establece la consulta 
	$query = "SELECT c.idclasificado, titulo, precio, m.nombreimagen FROM clasificados c, media m WHERE c.idclasificado = m.idclasificado AND promo=1 ORDER BY idclasificado DESC LIMIT 10";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
	<div id="sidebar">
	<div id="title">Anuncios Promocionados</div>
<?php
// Obtiene los datos del query
	if($result->num_rows > 0) { ?>
		<div id="anunciospromo">
		<div class="viewport">
		<ul class="overview">
		<?php while($datos = $result->fetch_assoc()) { ?>
		<li><a href="<?php echo "http://".$_SERVER['SERVER_NAME']; ?>/anuncio/?id=<?php echo $datos['idclasificado']; ?>"><img src="<?php echo "http://".$_SERVER['SERVER_NAME']; ?>/media/80/<?php echo $datos['nombreimagen']; ?>" class="imgpremium"><h2><?php echo $datos['titulo']; ?> $<?php echo $datos['precio']; ?></h2></a></li>
		<?php } ?>
		</ul>
		</div>
		</div>
	<?php } else {
		echo 'Sin contenido para mostrar';
	} ?>
		</div><!-- #sidebar -->