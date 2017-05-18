<?php 
session_start();
include('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$logou = $baldeUsuarios->findOne(array('email' => $email, 'senha' => md5($senha)));
	
	if ($logou) {
		$user = $logou;	

		$_SESSION["id"]=  $user['_id'];
		$_SESSION["email"]=$user['email'];
		$_SESSION["nome"]=$user['nome'];
		$_SESSION["loggedIn"]=true;
		
		header("Location: feed.php");
	} else {
		header("Location: feed.php?login=erro");
	}

} else {

	header("Location: feed.php?login=invalido");

}
?>