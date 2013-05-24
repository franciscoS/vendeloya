<?php

	//Inclye la conexion
	require_once("_conn-live.php");

	// Establece la consulta 
	$query = "SELECT c.idclasificado, titulo, precio, m.nombreimagen FROM clasificados c, media m WHERE c.idclasificado = m.idclasificado AND precio < 500000 ORDER BY idclasificado DESC";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
<?php
// Obtiene los datos del query
	if($result->num_rows > 0) { ?>
		<ul>
		<?php while($datos = $result->fetch_assoc()) { ?>
		<li><a href="<?php echo "http://".$_SERVER['SERVER_NAME']; ?>/anuncio/?id=<?php echo $datos['idclasificado']; ?>"><img src="<?php echo "http://".$_SERVER['SERVER_NAME']; ?>/media/80/<?php echo $datos['nombreimagen']; ?>" align="left" style="margin:4px 10px 0 0;width:60px;"><h1><?php echo $datos['titulo']; ?> $<?php echo $datos['precio']; ?></h1></a></li>
		<hr style="clear:both;">
		<?php } ?>
		</ul>
	<?php } else {
		echo 'Sin contenido para mostrar';
	} ?>