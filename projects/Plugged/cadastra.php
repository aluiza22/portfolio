<?php 
include('conexao.php');

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$usuario = array(
		"nome"=>$nome,
		"email"=>$email,
		"senha"=>$senha
	);

	$salva = $baldeUsuarios->save($usuario);
	if ($salva) {
		header("Location: feed.php?cadastrou=ok");
	} else {
		header("Location: feed.php?cadastrou=erro");
	}

} else {

	header("Location: feed.php?cadastrou=invalido");

}
?>