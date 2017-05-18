<?php 
include('conexao.php');

if (isset($_POST['comentario'])) {

	$scrap = $_POST['scrap'];
	$user = $_POST['user'];
	$comentario = $_POST['comentario'];


	$comentario = array(
		"scrap"=>$scrap,
		"comentario"=>$comentario,
		"user"=>$user
	);

	$salva = $baldeComentarios->save($comentario);
	if ($salva) {
		header("Location: ".$_POST['url'].".php?scrap=ok");
	} else {
		header("Location: ".$_POST['url'].".php?scrap=erro");
	}

} else {

	header("Location: ".$_POST['url'].".php?scrap=erro");

}
?>