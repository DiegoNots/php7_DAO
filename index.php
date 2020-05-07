<?php 

require_once("config.php");

//Carrega um usuario
//$root = new Usuarios();
//$root->loadById(3);
//echo $root;


//Carrega uma lista de usuarios
//$lista = Usuarios::getList(); 
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuarios::search("jo");
//echo json_encode($search);


//Carrega um usuario usando o login e senha
//$usuario = new Usuarios();
//$usuario->login("jose","123");
//echo $usuario;


/*Criando um novo usuario
$aluno = new Usuarios("aluno","1234");
$aluno->insert();
echo $aluno;
*/

/* UPDATE
$usuario = new Usuarios();
$usuario->loadById(8);
$usuario->update("professor","123444");
echo $usuario;
*/

/*DELETE */

$usuario = new Usuarios();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

 ?>