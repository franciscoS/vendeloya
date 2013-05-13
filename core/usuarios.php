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
require_once('db_abstract_model.php');
class Usuario extends DBAbstractModel {
public $nickname;
public $password;
public $nombre;
public $apellidos;
public $fechanacimiento;
public $email;
public $telefono;
public $celular;
private $clave;
protected $idusuario;
function __construct() {
$this->db_name = 'vendeloya';
}
public function get($user_val='') {
if($user_val != ''):
$this->query = " 
 SELECT idusuario, nickname, password, nombre, apellidos, fechanacimiento, email, telefono, celular 
 FROM usuarios 
 WHERE nickname = '$user_val' 
 ";
$this->get_results_from_query();
endif;
if(count($this->rows) == 1):
foreach ($this->rows[0] as $propiedad=>$valor):
$this->$propiedad = $valor;
endforeach;
endif;
}
public function set($user_data=array()) {
if(array_key_exists('nickname', $user_data)):
$this->get($user_data['nickname']);
//$temporal = $this->
if($user_data['nickname'] != $this->nickname):
foreach ($user_data as $campo=>$valor):
$$campo = $valor;
endforeach;
$this->query = " 
 INSERT INTO usuarios 
 (nickname, password, nombre, apellidos, fechanacimiento, email, telefono, celular) 
 VALUES 
 ('$nickname', '$password', '$nombre', '$apellidos', '$fechanacimiento', '$email', '$telefono', '$celular') 
 ";
$this->execute_single_query();
endif;
endif;
}
public function edit($user_data=array()) {
foreach ($user_data as $campo=>$valor):
$$campo = $valor;
endforeach;
$this->query = " 
 UPDATE usuarios SET nickname='$nickname', password='$password', nombre='$nombre', apellidos='$apellidos', fechanacimiento='$fechanacimiento', email='$email', telefono='$telefono', celular='$celular'
     WHERE nickname = '$nickname' 
 ";
$this->execute_single_query();
}
public function delete($user_val='') {
$this->query = " 
 DELETE FROM usuarios 
 WHERE nickname = '$user_val' 
 ";
$this->execute_single_query();
}
public function setmedia() {
}	
public function getmedia(){	
}
public function regis(){	
}
function __destruct() {
unset($this);
}
}
?>
