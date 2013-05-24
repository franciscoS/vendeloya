<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$nickname = $_REQUEST['nickname'];
		$password = $_REQUEST['password'];
		$password = md5($password);
		$nombre = $_REQUEST['nombre'];
		$apellidos = $_REQUEST['apellidos'];
		$fechanacimiento = $_REQUEST['fechanacimiento'];
		$email = $_REQUEST['email'];
		$telefono = $_REQUEST['telefono'];
		$celular = $_REQUEST['celular'];
		
		// Se crea el array donde se ponen los diferentes parámetros
		// El campo telefono aunque está vacío se tiene que declarar, de lo contrario la API arroja un error 
		$new_user_data = array(
			'nickname'=>"$nickname", 'password'=>"$password", 'nombre'=>"$nombre", 'apellidos'=>"$apellidos", 'fechanacimiento'=>"$fechanacimiento", 'email'=>"$email", 'telefono'=>"$telefono", 'celular'=>"$celular"
		);
		// Incluye la clase usuario para que pueda ser implementada
		require_once('../core/usuarios.php');
		// Crea un objeto llamado usuario3 de la clase Usuario
		$usuario3 = new Usuario();
		// Ejecuta la funcion set para el usuario3
		// Los parametros los pasa por el arreglo '$new_user_data' declarado al inicio
		$usuario3->set($new_user_data);

		header( "Location: http://".$_SERVER['SERVER_NAME']."/?m=1" );
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Vendelo Ya - Clasificados para todos! </title>
<?php include('../inc/head.php'); ?>
</head>
<body>
<div id="wrapper">
	<?php include('../inc/header.php'); ?>
	
	<div id="container">
		<div id="center_container">
			<div id="content">
				<h2>Reg&iacute;strate!</h2>
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="registro" id="registro">
				<table width="660" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td>Nombre de usuario</td>
					<td><input type="text" name="nickname" id="nickname" class="round mediumtext required" size="55"></td>
				  </tr>
				  <tr>
					<td>Contraseña</td>
					<td><input type="password" name="password" id="password" class="round mediumtext required" size="55"></td>
				  </tr>
				  <tr>
					<td>Nombre</td>
					<td><input type="text" name="nombre" id="nombre" class="round mediumtext required"></td>
				  </tr>
				  <tr>
					<td>Apellidos</td>
					<td><input type="text" name="apellidos" id="apellidos" class="round mediumtext required"></td>
				  </tr>
				  <tr>
					<td>Fecha de Nacimiento</td>
					<td><input type="text" name="fechanacimiento" id="fechanacimiento" class="round mediumtext trioDate"></td>
				  </tr>
				  <tr>
					<td>Correo Electrónico</td>
					<td><input type="text" name="email" id="email" class="round mediumtext required"></td>
				  </tr>
				  <tr>
					<td>Teléfono</td>
					<td><input type="text" name="telefono" id="telefono" class="round mediumtext required"></td>
				  </tr>
				  <tr>
					<td>Celular</td>
					<td><input type="text" name="celular" id="celular" class="round mediumtext required"></td>
				  </tr>
				  <tr>
					<td colspan="2"><input type="checkbox" name="acepto" value=""><a href="terminos.php">Acepto haber leído los términos y condiciones de VendeloYa.net</a></td>
				  </tr> 
				  <tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="Registrarse" id="registrar" name="registrar" class="round mediumtext"></td>
				  </tr>
				</table>
				</form>
				
			</div> <!-- #content -->
			<?php include('../inc/sidebar.php'); ?>
		</div> <!-- #center_conatiner -->
	</div> <!-- #container -->
	
	<div id="clear"></div>	
	
	<div id="footer">
		<div id="center_footer">
			<?php include('../inc/footer.php'); ?>
		</div> <!-- #center_footer -->
	</div> <!-- #footer -->

</div> <!-- #wrapper -->
</body>
</html>