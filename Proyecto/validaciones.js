function Validacion(){
	var user = document.getElementById('user').value;
	var pwd = document.getElementById('pwd').value;
	document.getElementById('user').style.border="1px solid grey";
	document.getElementById('pwd').style.border="1px solid grey";
	if (user =="" && pwd ==""){
		document.getElementById('user').style.border="1px solid red";
		document.getElementById('pwd').style.border="1px solid red";
		document.getElementById("mensaje").innerHTML="Los campos usuario y contraseña son obligatorios";
		document.getElementById('mensaje').style.display="block";
		return false;
	}else{
		if (user=="") {
			document.getElementById('user').style.border="1px solid red";
			document.getElementById("mensaje").innerHTML="El campo usuario es obligatorio";
			document.getElementById('mensaje').style.display="block";
			return false;
		}
		if (pwd=="") {
			document.getElementById('pwd').style.border="1px solid red";
			document.getElementById("mensaje").innerHTML="El campo contraseña es obligatorio";
			document.getElementById('mensaje').style.display="block";
			return false;
		}
	}
	return true;
}


function Validacioni(){
	var user1 = document.getElementById('user1').value;
	var pwd1 = document.getElementById('pwd1').value;
	document.getElementById('user1').style.border="1px solid grey";
	document.getElementById('pwd1').style.border="1px solid grey";
	if (user1 =="" && pwd1 ==""){
		document.getElementById('user1').style.border="1px solid red";
		document.getElementById('pwd1').style.border="1px solid red";
		document.getElementById("mensaje1").innerHTML="Los campos usuario y contraseña son obligatorios";
		document.getElementById('mensaje1').style.display="block";
		return false;
	}else{
		if (user1=="") {
			document.getElementById('user1').style.border="1px solid red";
			document.getElementById("mensaje1").innerHTML="El campo usuario es obligatorio";
			document.getElementById('mensaje1').style.display="block";
			return false;
		}
		if (pwd1=="") {
			document.getElementById('pwd1').style.border="1px solid red";
			document.getElementById("mensaje1").innerHTML="El campo contraseña es obligatorio";
			document.getElementById('mensaje1').style.display="block";
			return false;
		}
	}
	return true;
}


 function ValidacionInserts() {
	var titulo = document.getElementById('titulo').value;
	var imagen = document.getElementById('imagen').value;
	document.getElementById('titulo').style.border="1px solid grey";
	document.getElementById('imagen').style.border="1px solid grey";
	if (titulo =="" && imagen =="") {
		document.getElementById('titulo').style.border="1px solid red";
		document.getElementById('imagen').style.border="1px solid red";
		document.getElementById("mensaje2").innerHTML="Los campos Titulo y Imagen son obligatorios";
		document.getElementById('mensaje2').style.display="block";
		return false;
	}else{
		if (titulo == "") {
			document.getElementById('titulo').style.border="1px solid red";
			document.getElementById("mensaje2").innerHTML="El campo titulo es obligatorio";
			document.getElementById('mensaje2').style.display="block";
			return false;
		}
		if (imagen == "") {
			document.getElementById('imagen').style.border="1px solid red";
			document.getElementById("mensaje2").innerHTML="El campo imagen es obligatorio";
			document.getElementById('mensaje2').style.display="block";
			return false;
		}
	}
	return true;
}