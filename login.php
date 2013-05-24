<?php

$err = array();

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['login']=='Iniciar')) {

	$usr_eml = $_POST['nickmail'];
	$pwd = $_POST['password'];

	// Incluye el archivo donde se declara la clase
	require_once('core/session.php');
	// Inicia el uso de la clase Usuario
	$session1 = new Session();
	
	$new_session_data = array(
    'usr_eml'=>$usr_eml
	);
	
	$session1->set($new_session_data);
	
	//print_r($session1); //Para Debug
	$usr_id = $session1->idusuario;
	$usr_nick = $session1->nickname;
	$usr_pwd = $session1->password;
	$usr_nvl = $session1->nivel;
	//exit();
	
	if ( $usr_id != 0 ) {
		//Comprueba contrasena
		if ($usr_pwd == md5($pwd)) {
			if(empty($err)){
			// Llama a la sesion y la inicia
			   session_start();
			   session_regenerate_id (true); //prevent against session fixation attacks.

			   // this sets variables in the session 
				$_SESSION['usr_id'] = $usr_id;  
				$_SESSION['usr_nick'] = $usr_nick;
				$_SESSION['usr_nvl'] = $usr_nvl;
				
				header("Location: http://".$_SERVER['SERVER_NAME']."/inicio.php");
			}
		}else{
			//Error porque la contrasena con coincide
			$err[] = "Inicio de sesi&oacute;n inv&aacute;lido. Intenta de nuevo con la contrase&ntilde;a correcta.";
		}
	}else{
		//Error porque no se encuentra al usuario
		$err[] = "Error - Inicio de sesi&oacute;n inv&aacute;lido. El usuario ingresado no existe";
	}		
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>Vendelo Ya - Clasificados para todos! </title>
<?php include('inc/head.php'); ?>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div class="center">
			<div id="logo"><img src="media/template/vendeloyalogo.png"></div>
			<div id="banners"><img src="media/b468x120.gif"></div>
		</div><!-- .center -->

	</div><!-- #header -->
	
	<div id="roof">
		
			<div id="menu">
				<a href="index.html">INICIO</a>
				<a href="#">AUTOS Y MOTOS</a>
				<a href="#">BIENES RA&Iacute;CES</a>
				<a href="#">ELECTR&Oacute;NICA</a>
				<a href="#">TODAS LAS CATEGOR&Iacute;AS</a>
				<a href="#">SERVICIOS</a>
				<a href="#">CONTACTO</a>
			</div> <!-- #menu -->
		
	</div>
	
	<div id="clear"></div>
	
	<div id="container">
		<div id="center_container">
			<div id="content">
			<?php
				if(!empty($err)){
					echo "<div class=\"error midfont\" id=\"error\">";
					foreach ($err as $e) {
						echo "$e";
					}
					echo "</div>";
				}
			?>
				<h2>Contenido del sitio web</h2>				
				<p>En esta parte van los anuncios u otro contenido</p>
				
				<p>
				<form action="login.php" method="POST" name="login" id="login" class="midfont">
				Nombre de Usuario / Correo Electr&oacute;nico:<br>
				<input name="nickmail" type="text" size="25" class="bigfont"><br><br>
				Contrase&ntilde;a:<br>
				<input name="password" type="password" size="25" class="bigfont"><br>
				<input name="login" type="submit" id="login" value="Iniciar" class="bigfont">
				</form>
				</p>					
			</div> <!-- #content -->
			<div id="sidebar">
			<div id="title">&iquest;Qu&eacute; buscas?</div>
				<input type="text" class="round bigtext" size="10"><input type="submit" value="Buscar!" class="round bigtext">
			</div> <!-- #sidebar -->
			<div id="sidebar">
			<div id="title">Barra Lateral</div>
				<div id="list">
					<ul>
						<li><b>Hipervinculo</b> Descripci&oacute;n<a href="#">[mas]</a></li>
					</ul>
				</div> <!-- #list -->
				<p>En esta parte van los anuncios u otro contenido</p>
			</div> <!-- #sidebar -->
		</div> <!-- #center_conatiner -->
	</div> <!-- #container -->
	
			<div id="clear"></div>	
	
	<div id="footer">
		<div id="center_footer">
			<div id="left_footer"><b>Encuentranos en</b>
				<ul>
					<li><a href="#"><img src="media/template/facebook.png" alt="Facebook" ></a></li>
					<li><a href="#"><img src="media/template/twitter.png" alt="Twitter" ></a></li>
					<li><a href="#"><img src="media/template/youtube.png" alt="YouTube" ></a></li>
				</ul>
			</div> <!-- #left_footer -->
			
			<div id="right_footer">
				<a href="#">CLASIFICADO PREMIUM</a><a href="#">CLASIFICADO ASISTIDO</a><br>
				<a href="#">PUBLICIDAD</a><a href="#">MAS SERVICIOS</a><br>
				<a href="index.html">INICIO</a><a href="#">ACERCA DE</a><a href="#">CONTACTO</a>				
			</div> <!-- #right_footer -->
			<span>VendeloYa.Net &copy; Derechos Reservados 2013</span>
		</div> <!-- #center_footer -->
	</div> <!-- #footer -->

</div> <!-- #wrapper -->
</body>
</html>