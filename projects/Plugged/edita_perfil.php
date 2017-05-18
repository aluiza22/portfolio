<?php 
include('conexao.php');

$nome = "";
$email = "";
$descricao = "";
$idade = "";
$relacionamento = "";
$imagem = "";

if (isset($_POST['nome']) && isset($_POST['email'])) {

	$id = $_POST['id'];
	$imagem = $_POST['imagem'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$descricao = $_POST['descricao'];
	$idade = $_POST['idade'];
	$relacionamento = $_POST['relacionamento'];
	$bg = $_POST['bg'];

	$usuario = array(
		"nome"=>$nome,
		"imagem"=>$imagem,
		"email"=>$email,
		"descricao"=>$descricao,
		"idade"=>$idade,
		"relacionamento"=>$relacionamento,
		"bg"=>$bg
	);

	$salva = $baldeUsuarios->update(array('_id' => new MongoId($id)),array('$set' => $usuario));
	if ($salva) {
		header("Location: perfil.php?editou=ok");
	} else {
		header("Location: perfil.php?editou=erro");
	}

} else {
	header("Location: perfil.php?editou=invalido");

}
?>