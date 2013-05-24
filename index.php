<?php

$msg = array();
$err = array();

if (!isset($_GET['m'])) {
	//si se recibe ?m sin parametro
} elseif ($_GET['m'] == '2') {
	//si se recibe ?m sin parametro
} elseif ($_GET['m'] == '1') {
	$msg[] = "Usuario agregado, ahora puedes iniciar sesión!";
} else {
	//Se ejecuta por default
	//No hace nada pero evita inyecciones de codigo
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Vendelo Ya - Clasificados para todos! </title>
<?php include('inc/head.php'); ?>
</head>
<body>
<div id="wrapper">
	<?php include('inc/header.php'); ?>
	
	<div id="container">
		<div id="center_container">
			<div id="content">
			
			<?php
			if(!empty($msg)){
			echo "<div class=\"msg midfont\" id=\"msg\">";
				foreach ($msg as $m) {
				echo "$m";
				}
			echo "</div>";
			}
			if(!empty($err)){
			echo "<div class=\"error midfont\" id=\"error\">";
				foreach ($err as $e) {
				echo "$e";
				}
			echo "</div>";
			}
			?>
			
				<h2>Bienvenido a VendeloYa</h2>
				<form action="login.php" method="POST" name="login" id="login" class="mediumtext">
				Nombre de Usuario / Correo Electr&oacute;nico:<br>
				<input name="nickmail" type="text" size="25" class="bigtext"><br><br>
				Contrase&ntilde;a:<br>
				<input name="password" type="password" size="25" class="bigtext"><br>
				<input name="login" type="submit" id="login" value="Iniciar" class="bigtext">
				</form>
			</div> <!-- #content -->
			<?php include('inc/sidebar.php'); ?>
		</div> <!-- #center_conatiner -->
	</div> <!-- #container -->
	
	<div id="clear"></div>	
	
	<div id="footer">
		<div id="center_footer">
			<?php include('inc/footer.php'); ?>
		</div> <!-- #center_footer -->
	</div> <!-- #footer -->

</div> <!-- #wrapper -->
</body>
</html>