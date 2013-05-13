<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		/*
require_once('core/usuarios.php');
# Traer los datos de un usuario 
$usuario1 = new Usuario();
//$usuario1->get('elbarto');
//print $usuario1->nombre . ' ' . $usuario1->apellidos . ' existe<br>';

# Crear un nuevo usuario 
$new_user_data = array(
    'nickname'=>'melissa', 'password'=>'987654', 'nombre'=>'Melissa', 'apellidos'=>'Ayala Solorio', 'fechanacimiento'=>'1990-03-09', 'email'=>'meli@gmail.com', 'telefono'=>'', 'celular'=>'6461232323'
);
$usuario2 = new Usuario();
$usuario2->set($new_user_data);
$usuario2->get($new_user_data['nickname']);
print $usuario2->nombre . ' ' . $usuario2->apellidos . ' ha sido creado<br>';

# Editar los datos de un usuario existente 
$edit_user_data = array(
    'nickname'=>'melissa', 'password'=>'121212', 'nombre'=>'Mely', 'apellidos'=>'Ayala', 'fechanacimiento'=>'1990-08-15', 'email'=>'meli@outlook.com', 'telefono'=>'', 'celular'=>''
);
$usuario3 = new Usuario();
$usuario3->edit($edit_user_data);
$usuario3->get($edit_user_data['nickname']);
print $usuario3->nombre . ' ' . $usuario3->apellidos . ' ha sido editado<br>';

# Eliminar un usuario
$usuario4 = new Usuario();
$usuario4->get($new_user_data['nickname']);
$usuario4->delete($new_user_data['nickname']);
print $usuario4->nombre . ' ' . $usuario4->apellidos . ' ha sido eliminado';
*/

require_once('core/clasificados.php');
/*
$clasificado1 = new Clasificado();
$clasificado1->getmedia('1');
//print_r($clasificado1);
echo "$clasificado1->nombreimagen";
echo "<br>";
*/

/*
$new_media_data = array(
	'idclasificado' => '1', 'nombreimagen' => '77-Ford-MustangCobra.jpg' 
	);
$clasificado2 = new Clasificado();
$clasificado2->setmedia($new_media_data);
$clasificado2->getmedia($new_media_data['idclasificado']);
//print_r($clasificado2);
echo "$clasificado2->nombreimagen";
echo "<br>";
*/

/*
# Crear un nuevo clasificado 
$new_clasificado_data = array(
    'titulo'=>'Mustang', 'precio'=>'36000', 'preciodiv'=>'1', 'detalles'=>'Excelente auto restaurado y en perfectas condiciones Mustang 64 Cobra todo un clasico', 'marca'=>'Ford', 'modelo'=>'Mustang', 'estado'=>'1964', 'idusuario'=>'3', 'nombreimagen'=>'mustang64.jpg'
);
$clasificado3 = new Clasificado();
$clasificado3->set($new_clasificado_data);
*/

/*
# Editar un clasificado existente 
$edit_clasificado_data = array(
    'idclasificado'=>'2', 'titulo'=>'Mustang Cobra 64 Clásico', 'precio'=>'30000', 'preciodiv'=>'0', 'detalles'=>'Excelente opción restaurado y en perfectas condiciones Mustang 64 Cobra todo un clasico', 'marca'=>'Ford', 'modelo'=>'Mustang Cobra', 'estado'=>'1964'
);
$clasificado4 = new Clasificado();
$clasificado4->edit($edit_clasificado_data);
*/

/*
$clasificado5 = new Clasificado();
$clasificado5->get(2);
print_r($clasificado5);

$clasificado6 = new Clasificado();
$clasificado6->delete(2);
*/

?>
    </body>
</html>
