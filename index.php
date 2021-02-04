<?php

require_once("config.php");

//Carrega um usuário
/*$root = new Usuario();
$root->loadbyId(3);
echo $root;*/
//---------------------------------------------
//Carrega lista de usuários
$lista = Usuario::getList();

echo json_encode($lista);

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROm tb_usuarios");

echo json_encode($usuarios);*/

?>