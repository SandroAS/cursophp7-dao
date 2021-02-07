<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(2);
//echo $root;
//---------------------------------------------
//Carrega lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);
//---------------------------------------------
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);
//---------------------------------------------
//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);
//---------------------------------------------
//Carrega um usuário usando o login e senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
//echo $usuario;
//---------------------------------------------
//Criando um novo usuário
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;
//---------------------------------------------
//Alterar um usuário
//$usuario = new Usuario();
//$usuario->loadById(12);
//$usuario->update("professor", "!@#$%¨&*");
//echo $usuario;
//---------------------------------------------
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;
?>