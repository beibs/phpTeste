<?php

require_once("vendor/autoload.php");
require_once("config.php");

	$app = new \Slim\Slim();
	$app->get('/:nome/:cpf/:email/:senha', function ($nome, $cpf, $email, $senha) {
	$sqlConnection = new SqlConnection();
	$user = new Usuario();
	$user->setNome($nome);
	$user->setCpf($cpf);
	$user->setEmail($email);
	$user->setSenha($senha);
	
	$sqlConnection->query("INSERT INTO tb_usuario (nome,cpf,email,senha) VALUES(:NOME,:CPF,:EMAIL,:SENHA)",$user->arrayConstruct());

	echo $user;
	});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();

//phpinfo();
//echo "oi";
/*$sqlConnection = new SqlConnection();

$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run()


$array = array(
":NOME"=>"valor",
":CNPJ"=>"valor2",
":EMAIL"=>"valor3",
":SENHA"=>"valor4");

$sqlConnection->query("INSERT INTO tb_usuario (nome,cnpj,email,senha) VALUES(:NOME,:CNPJ,:EMAIL,:SENHA)",$array);

$usuarios = $sqlConnection->select("SELECT * FROM tb_usuario");


echo json_encode($usuarios);*/
?>