<?php

$base_url="http://anadev.com.br/portfolio/projects/Connuntius/";

function conectaBanco() {

   
   $conexao = pg_connect("host=200.169.53.253 port=5432 dbname=ana_aula user=ana_user password=senha01ana_user");

   if (!$conexao) {

       die("<p>Não foi possivel conectar ao banco de dados!</p>");

   }

   return($conexao);

   

}


function listaCats() {
	$conecta = conectaBanco();
	$rs = pg_query($conecta, "SELECT * FROM connuntius.categorias");

   if (!$rs) {

       return "<p>Falha ao realizar a consulta</p>";

   }else{

       while($array = pg_fetch_array($rs)){

               echo "<a class='cat".$array["id"]."' title='".$array["nome"]."' href='".$base_url."categoria.php?cat=".$array["id"]."&catn=".$array["nome"]."'>".$array["nome"]."</a>";

    	}

	}
}


function listaForns($cat, $catn) {
	echo("<div class='title icons'><a class='cat".$cat."' href='".$base_url."categoria.php?cat=".$cat."'></a> <h2>".$catn."</h2></div><div class='clear'></div>");
	$conecta = conectaBanco();
	$rs = pg_query($conecta, "SELECT * FROM connuntius.fornecedores WHERE categoria='$cat'");

   if (!$rs) {

       return "<p>Falha ao realizar a consulta</p>";

   }else{
   		$cont = pg_num_rows($rs);
       if ($cont > 0 ) {
	       while($array = pg_fetch_array($rs)){

	               echo "<a href='".$base_url."fornecedores.php?forn=".$array["id"]."'>".$array["nome"]."</a>";

	    	}
	    } else {
	    	echo "<h2>Desculpe! Não há nenhum cadastro nesta categoria ):</h2>";
	    }

	}
}

function listaLatest() {
	$conecta = conectaBanco();
	$rs = pg_query($conecta, "SELECT * FROM connuntius.categorias");

   if (!$rs) {

       return "<p>Falha ao realizar a consulta</p>";

   }else{

       while($array = pg_fetch_array($rs)){

               echo "<li><a href='".$base_url."categoria.php?cat=".$array["id"]."'><h3>".$array["nome"]."</h3></a>";
               latestNew($array["id"]);
               echo "</li>";
    	}

	}
}

function latestNew($cat) {
	$conecta = conectaBanco();
	$rs = pg_query($conecta, "SELECT * FROM connuntius.fornecedores WHERE id=$cat");

	if (!$rs) {

       return "<p>Falha ao realizar a consulta</p>";

   }else{

       while($array = pg_fetch_array($rs)){

               mostraLatestNew($cat, $array["feed"]);
    	}

	}
}

function mostraLatestNew($cat, $feed) {
	$xml = simplexml_load_file($feed);
	echo "<div class='new'>";
		echo "<a href='" . $xml->channel->item[0]->link . "' target='blank' ><h4>" . substr($xml->channel->item[0]->title,0)  . "</h4></a>";
		echo "<div class='n-info'><a href='" . $base_url . "fornecedores.php?cat=" . $cat . "' target='blank' >" . $xml->channel->title  . "</a> | " . $xml->channel->item[0]->pubDate ."</div>";
		echo "<div class='n-desc'>" . substr($xml->channel->item[0]->description,0,200) ."...</div>";		
	echo "</div>";
}

function listaNews($forn) {
	$conecta = conectaBanco();
	$rs = pg_query($conecta, "SELECT * FROM connuntius.fornecedores WHERE id=$forn");
	if (!$rs) {

       return "<p>Falha ao realizar a consulta</p>";

   }else{

       	$array = pg_fetch_array($rs);
		$feed=$array["feed"];
		$nome=$array["nome"];
   

	}
	echo "<h2>".$nome."</h2>";
	$xml = simplexml_load_file($feed);
	foreach ($xml->channel->item as $item) {	
		echo "<div class='new'>";
			echo "<a href='" . $item->link . "' target='blank' ><h4>" . $item->title . "</h4></a>";
			echo "<div class='n-desc'>" . $item->description ."</div>";		
		echo "</div>";
	}
}

function cadastraUser() {

	 $nome = $_POST['nome'];
	 $email = $_POST['email'];
	 $senha = $_POST['senha'];

	$conecta = conectaBanco();
	$rs = pg_query($conecta, "INSERT INTO connuntius.usuarios (nome, email, senha) VALUES ('".$nome."', '".$email."', '".$senha."')");
	if (!$rs) {

       header("Location: index.php?cadastrou=no");

   }else{

       header("Location: index.php?cadastrou=yes");

	}
}

function logaUser() {
	if (isset($_COOKIE['logado'])) {
		header("Location: index.php?login=ja");
	} else {

		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$conecta = conectaBanco();
		$rs = pg_query($conecta, "SELECT * FROM connuntius.usuarios WHERE email='$email' and senha='$senha'");

	   if (!$rs) {

	       return "<p>Falha ao realizar a consulta</p>";

	   } else {

	        if (pg_num_rows($rs) == 0) {
   				header("Location: index.php?login=no");
  			} else {
	            setcookie("logado", $email);
	       		header("Location: index.php?login=yes");           			
	        }
	    }
		
	}  
}     


function logado() {
	if (isset($_COOKIE['logado'])) {
		return(true);
	} else {
		return(false);
	}
}

function logout() {
	setcookie("logado", '', time() - 3600);
	header("Location: index.php");
}

/*function addCat($catId) {
	$conecta = conectaBanco();
	$rs = pg_query($conecta, " INSERT INTO connuntius.usuarios ('categoria') WHERE ('')");

   if (!$rs) {

       return "<p>Falha ao realizar a consulta</p>";

   } else {

   }
}*/

/*function listaCatsCad() {
	$conecta = conectaBanco();
	$rs = pg_query($conecta, "SELECT * FROM connuntius.categorias");

   if (!$rs) {

       return "<p>Falha ao realizar a consulta</p>";

   }else{

       while($array = pg_fetch_array($rs)){

               echo "<input type='checkbox' name='categorias' value='".$array["id"]."'/>".$array["nome"];

    	}

	}
}*/

?>