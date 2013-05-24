<?php
require_once('core/session.php');
// Inicia el uso de la clase Usuario
$session1 = new Session();
$session1->regis();

$id = $_REQUEST['id'];
$url = "http://".$_SERVER['SERVER_NAME']."/anuncio/?id=";
$id = $url.$id;

// include BarcodeQR class 
include "core/BarcodeQR.php"; 


$msg = array();
$err = array();

if (!isset($_GET['m'])) {
	//si se recibe ?m sin parametro
} elseif ($_GET['m'] == '2') {
	//si se recibe ?m sin parametro
} elseif ($_GET['m'] == '1') {
	$msg[] = "Anuncio publicado, aprovecha e imprime esta página! para que la escaneen con smartphones";
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
				<h2>Toma un foto de esta imagen para ir al anuncio.</h2>
				<div align="center"><img src="media/qr/qr-code.png" border="0" /></div>
				<h2>O usa el siguiente link:</h2>
				<h2><a href="<?php echo $id; ?>"><?php echo $id; ?></a></h2>
				<?php
				
				// set BarcodeQR object 
				$qr = new BarcodeQR();

				// create URL QR code 
				$qr->url("$id"); 

				// display new QR code image 
				$qr->draw(500, "media/qr/qr-code.png");
				
				?>
				
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