function validaForm() {
	var erros=document.getElementById("erro");

	var nome=document.getElementById('nome').value;
	if (nome==null || nome=="") {
		erros.innerHTML = ("<p>O campo nome deve ser preenchido!</p>");
		return false;
	}

	var email=document.getElementById('email').value;
	if (email==null || email=="") {
		erros.innerHTML = ("<p>O campo email deve ser preenchido!</p>");
		return false;
	} else {
		var posa=email.indexOf("@");
		var posp=email.lastIndexOf(".");
		if (posa<1 || posp<posa+2 || posp+2>=email.length) {
			erros.innerHTML = ("<p>Preencha um email válido!</p>");
			return false;
		}
	} 

	var senha=document.getElementById('senha').value;
	if (senha==null || senha=="") {
		erros.innerHTML = ("<p>O campo senha deve ser preenchido!</p>");
		return false;
	}



}

function validaFormL() {
	var erros=document.getElementById("errol");
	var email=document.getElementById('emaill').value;
	if (email==null || email=="") {
		erros.innerHTML = ("<p>O campo email deve ser preenchido!</p>");
		return false;
	} else {
		var posa=email.indexOf("@");
		var posp=email.lastIndexOf(".");
		if (posa<1 || posp<posa+2 || posp+2>=email.length) {
			erros.innerHTML = ("<p>Preencha um email válido!</p>");
			return false;
		}
	} 

	var senha=document.getElementById('senhal').value;
	if (senha==null || senha=="") {
		erros.innerHTML = ("<p>O campo senha deve ser preenchido!</p>");
		return false;
	}

	

}

function validaFormLI() {
	var erros=document.getElementById("erroli");
	var email=document.getElementById('emailli').value;
	if (email==null || email=="") {
		erros.innerHTML = ("<p>O campo email deve ser preenchido!</p>");
		return false;
	} else {
		var posa=email.indexOf("@");
		var posp=email.lastIndexOf(".");
		if (posa<1 || posp<posa+2 || posp+2>=email.length) {
			erros.innerHTML = ("<p>Preencha um email válido!</p>");
			return false;
		}
	} 

	var senha=document.getElementById('senhali').value;
	if (senha==null || senha=="") {
		erros.innerHTML = ("<p>O campo senha deve ser preenchido!</p>");
		return false;
	}

	

}