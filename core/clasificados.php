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
class Clasificado extends DBAbstractModel {
public $idclasificado;
public $titulo;
public $precio;
public $preciodiv;
public $detalles;
public $marca;
public $modelo;
public $estado;
protected $idusuario;
public $creado;
public $actualizado;
public $nombreimagen;
public $temporal;
private $clave;
function __construct() {
$this->db_name = 'vendeloya';
}
public function regis() {
$this->query = " 
 INSERT INTO clasificados 
 (precio, creado) 
 VALUES 
 ('0', NOW()) 
 ";
$this->execute_single_query();
$this->query = " 
 SELECT idclasificado 
 FROM clasificados 
 ORDER BY idclasificado 
 DESC LIMIT 1
 ";
$this->get_results_from_query();
if(count($this->rows) != 0):
foreach ($this->rows[0] as $propiedad=>$valor):
$this->$propiedad = $valor;
endforeach;
endif;
}
public function getmedia($user_data='') {
if($user_data != ''):
$this->query = "
 SELECT nombreimagen, c.idclasificado 
 FROM media m, clasificados c 
 WHERE c.idclasificado = m.idclasificado AND m.idclasificado = '$user_data'
 ";
$this->get_results_from_query();
endif;
if(count($this->rows) != 0):
foreach ($this->rows[0] as $propiedad=>$valor):
$this->$propiedad = $valor;
endforeach;
endif;
}
public function setmedia($user_data=array()) {
if(array_key_exists('idclasificado', $user_data)):
$this->get($user_data['idclasificado']);
if($user_data['idclasificado'] == $this->idclasificado):
foreach ($user_data as $campo=>$valor):
$$campo = $valor;
endforeach;
$this->query = " 
 INSERT INTO media 
 (idclasificado, nombreimagen) 
 VALUES 
 ('$idclasificado', '$nombreimagen') 
 ";
$this->execute_single_query();
endif;
endif;
}
public function get($user_data='') {
if($user_data != ''):
$this->query = "
 SELECT c.idclasificado, titulo, precio, preciodiv, detalles, marca, modelo, estado, c.idusuario, creado, actualizado, m.nombreimagen, nickname, email, telefono, celular
 FROM clasificados c, media m, usuarios u 
 WHERE c.idusuario = u.idusuario
 AND c.idclasificado = m.idclasificado
 AND c.idclasificado = '$user_data'
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
if(array_key_exists('nombreimagen', $user_data)){
$this->regis();
$temporal = $this->idclasificado;
$media_user_data = array(
    'nombreimagen'=>$user_data['nombreimagen'], 'idclasificado'=>$temporal    
);
$this->setmedia($media_user_data);
foreach ($user_data as $campo=>$valor):
$$campo = $valor;
endforeach;
$this->query = "
 UPDATE clasificados 
 SET titulo='$titulo', precio='$precio', preciodiv='$preciodiv', detalles='$detalles', marca='$marca', modelo='$modelo', estado='$estado', idusuario='$idusuario'
 WHERE idclasificado = $temporal
 ";
$this->execute_single_query();
}else{
foreach ($user_data as $campo=>$valor):
$$campo = $valor;
endforeach;
$this->query = "
 INSERT INTO clasificados
 (titulo, precio, preciodiv, detalles, marca, modelo, estado, idusuario, creado)
 VALUES
 ('$titulo', '$precio', '$preciodiv', '$detalles', '$marca', '$modelo', '$estado', '$idusuario', NOW())
 ";
$this->execute_single_query();
}
}
/*public function set($user_data=array()) {
if(array_key_exists('idclasificado', $user_data)):
$this->get($user_data['idclasificado']);
if($user_data['idclasificado'] != $this->idclasificado):
foreach ($user_data as $campo=>$valor):
$$campo = $valor;
endforeach;
$this->query = " 
 UPDATE clasificados SET titulo='$titulo', precio='$precio', detalles='$detalles', marca='$marca', modelo='$modelo', estado='$estado', actualizado=NOW(), nombreimagen='$nombreimagen'
 ";
$this->execute_single_query();
endif;
endif;
}*/
public function edit($user_data=array()) {
if(array_key_exists('idclasificado', $user_data)):
$this->get($user_data['idclasificado']);
$temporal = $this->idclasificado;
if($this->idusuario != ''):
foreach ($user_data as $campo=>$valor):
$$campo = $valor;
endforeach;
$this->query = " 
 UPDATE clasificados SET titulo='$titulo', precio='$precio', preciodiv='$preciodiv', detalles='$detalles', marca='$marca', modelo='$modelo', estado='$estado' 
 WHERE idclasificado = '$temporal' 
 ";
$this->execute_single_query();
endif;
endif;
}
public function delete($user_data='') {
$this->query = " 
 DELETE FROM clasificados 
 WHERE idclasificado = '$user_data' 
 ";
$this->execute_single_query();
$this->query = " 
 DELETE FROM media 
 WHERE idclasificado = '$user_data' 
 ";
$this->execute_single_query();
}
function __destruct() {
unset($this);
}
}
?>