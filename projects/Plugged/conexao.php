<?php /*
$logado = false;
$bg = "ffffff";
$conexao = new MongoClient("mongodb://plugged:pluggedpass@ds145790.mlab.com:45790/plugged");
$db = $conexao->plugged;
$baldeUsuarios = $db->usuarios;
$baldeScraps = $db->scraps;
$baldeComentarios = $db->comentarios;

if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
	$logado = true;
	$userID = $_SESSION["id"];
	$user = $baldeUsuarios->findOne(array('_id' => new MongoId($userID)));
	$bg = "#".$user['bg'];
}*/
?>
<p>hi</p>