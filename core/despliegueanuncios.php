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
class DespliegueAnuncios extends DBAbstractModel {
public $idclasificado;
function __construct() {
$this->db_name = 'vendeloya';
}
public function regis() {
$this->query = "
 SELECT idclasificado 
 FROM clasificados 
 ORDER BY idclasificado 
 DESC LIMIT 1
 ";
$this->get_results_from_query();
if(count($this->rows) == 1):
foreach ($this->rows[0] as $propiedad=>$valor):
$this->$propiedad = $valor;
endforeach;
endif;
}
public function getmedia() {
}
public function setmedia() {
}
public function get() {
}
public function set() {
}
public function edit() {
}
public function delete() {
}
function __destruct() {
unset($this);
}
}
?>