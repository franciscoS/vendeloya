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
class ClasificadoPublicado extends DBAbstractModel {
public $idclasificado;
function __construct() {
$this->db_name = 'vendeloya';
}
public function regis() {
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