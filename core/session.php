<?php 

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarios_model
 *
 * @author Ali
 */

define ("ADMIN", 5);
define ("USUARIO", 1);
define ("VISITANTE", 0);
 
require_once('db_abstract_model.php');
class Session extends DBAbstractModel {
public $nickname;
public $password;
public $nombre;
public $apellidos;
public $fechanacimiento;
public $email;
public $telefono;
public $celular;
private $clave;
public $idusuario;
public $nivel;
public $nvlusuario;

function __construct() {
$this->db_name = 'vendeloya';
}
public function get() {
}
public function set($user_data=array()) {
	if(array_key_exists('usr_eml', $user_data)){
	foreach ($user_data as $campo=>$valor):
	$$campo = $valor;
	endforeach;
	if (strpos($usr_eml,'@') !== false) {
		$user_cond = "email = '$usr_eml'";
	} else{
		$user_cond = "nickname = '$usr_eml'";
	}
	$this->query = "
		SELECT idusuario, password, nickname, nivel FROM usuarios WHERE $user_cond
		";
		$this->get_results_from_query();
		if(count($this->rows) == 1){
		foreach ($this->rows[0] as $propiedad=>$valor):
		$this->$propiedad = $valor;
		endforeach;
		}
	}
}
public function edit($user_data=array()) {
}
public function delete() {
global $db;
session_start();			

//Borra la sesion
unset($_SESSION['usr_id']);
unset($_SESSION['usr_nick']);
unset($_SESSION['usr_nvl']);

session_unset();
session_destroy();

header("Location: http://".$_SERVER['SERVER_NAME']."/vendeloya/login.php");
}
public function setmedia() {
}
public function getmedia(){
}
public function regis(){
	session_start();

	global $db;
	//protege la sesion
	if (isset($_SESSION['usr_id']) && isset($_SESSION['usr_nick']) ){
	 	//session_regenerate_id(); //against session fixation attacks.
		//Ejecuta el query
		$this->query = "
		SELECT nivel FROM usuarios WHERE idusuario='$_SESSION[usr_id]'
		";
		$this->get_results_from_query();
		if(count($this->rows) == 1):
		foreach ($this->rows[0] as $propiedad=>$valor):
		$this->$propiedad = $valor;
		endforeach;
		list($nivel) = $this->nivel;
		$nvlusuario = $nivel;
		endif;		
	} elseif($_SESSION['usr_nvl'] = $nivel) {
	} else{
		header("Location: http://".$_SERVER['SERVER_NAME']."/vendeloya/login.php");
		exit();
	}
}

function checkAdmin() {
	if($_SESSION['usr_nvl'] == ADMIN) {
		return 1;
	} else {
	return 0;
	}
}

function checkUser() {
	if($_SESSION['usr_nvl'] == USUARIO) {
		return 1;
	} else {
		return 0;
	}
}

function __destruct() {
unset($this);
}

}
?>
