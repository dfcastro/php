<?php
require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("select * from tb_usuarios");

//echo json_encode($usuarios);

//$root = new Usuario();

//$root->loadById(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();

//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login

//$search = Usuario::search("jo");

//echo json_encode($search);

//login
//$usuario = new Usuario();
//$usuario->login("root","432145");

//echo $usuario;

//$usuario = new Usuario();
//$usuario->setDeslogin("pedrinho");
//$usuario->setDessenha("@aaaaa");

//$usuario->insert();

//echo $usuario;

//atualiza usuario
//$usuario = new Usuario();

//$usuario->loadById(8);

//$usuario->update("professor","123456");

//echo $usuario;

//delete usuario
$usuario = new Usuario();

$usuario->loadById(3);
$usuario->delete();
echo $usuario."foi deletado";
?>