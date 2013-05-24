<?php
require_once('core/session.php');
// Inicia el uso de la clase Usuario
$session1 = new Session();
$session1->regis();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Vendelo Ya - Clasificados para todos!</title>
<?php include('inc/head.php'); ?>
</head>
<body>
<div id="wrapper">
	<?php include('inc/header.php'); ?>
	
	<div id="container">
		<div id="center_container">
			<div id="content">
				<?php
					if(!empty($err)){
						echo "<div class=\"error mediumtext\" id=\"error\">";
						foreach ($err as $e) {
							echo "$e";
						}
						echo "</div>";
					}
				?>
				<h2>Titulo</h2>
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
