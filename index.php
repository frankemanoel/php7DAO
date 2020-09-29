<?php 


	require_once("config.php");

//	$sql = new Sql();
//	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//	echo json_encode($usuarios);

	// carrega apenas um usuario
	//$root = new Usuario();
	//$root->loadByID(8);
	//echo $root;

	//carrega uma lista de usuarios
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//carrega uma lista de usuarios buscando pelo login
	//$search =  Usuario::search("ro");
	//echo json_encode($search);

	//carrega um usuario usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("root", "Hoje");
	//echo $usuario;

	//criando um novo usuario
	//$aluno = new Usuario("aluno", "senha");
	//$aluno->insert();
	//echo $aluno;

	$usuario = new Usuario();

	$usuario->loadByID(8);

	$usuario->update("professor", "159753");

	echo $usuario;

	echo "Dados alterados com sucesso!";


		?>