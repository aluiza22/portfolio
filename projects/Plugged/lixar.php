<?php 
include('conexao.php');
$scrap = $_GET['scrap'];
$user = $_GET['user'];

$gostou = $baldeScraps->findOne(array('gostou' => $user, '_id' => new MongoId("$scrap")));
if ($gostou) {
	$desgostar = $baldeScraps->update(
	    array('_id' => new MongoId($scrap)),
	    array('$pull' => array('gostou' => $user))
	);
}

$lixar = $baldeScraps->update(
    array('_id' => new MongoId($scrap)),
    array('$addToSet' => array('lixou' => $user))
);


if ($lixar) {
	header("Location: feed.php?lixar=ok");
} else {
	header("Location: feed.php?lixar=erro");
}
?>