<?php 
include('conexao.php');

if (isset($_POST['scrap']) && isset($_POST['user'])) {

	$scrap = $_POST['scrap'];
	$user = $_POST['user'];
	$date = time();

	$scrap = array(
		"scrap"=>$scrap,
		"user"=>$user,
		"date"=>$date,
		"gostou"=> array(),
		"lixou"=> array()
	);

	$salva = $baldeScraps->save($scrap);
	if ($salva) {
		header("Location: ".$_POST['url'].".php?scrap=ok");
	} else {
		header("Location: ".$_POST['url'].".php?scrap=erro");
	}

} else {

	header("Location: ".$_POST['url'].".php?scrap=erro");

}
?>