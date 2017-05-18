<?php 
include('conexao.php');
$scrap = $_GET['scrap'];
$user = $_GET['user'];

$lixou = $baldeScraps->findOne(array('lixou' => $user, '_id' => new MongoId("$scrap")));
if ($lixou) {
	$desgostar = $baldeScraps->update(
	    array('_id' => new MongoId($scrap)),
	    array('$pull' => array('lixou' => $user))
	);
}

$gostar = $baldeScraps->update(
    array('_id' => new MongoId($scrap)),
    array('$addToSet' => array('gostou' => $user))
);


if ($gostar) {
	header("Location: feed.php?gostar=ok");
} else {
	header("Location: feed.php?gostar=erro");
}
?>