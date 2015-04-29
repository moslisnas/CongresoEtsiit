function showForm(){
	var form = document.getElementById("form");
	if(form.style.display == "inline"){
		form.style.display = "none";
		form.style.margin = "0%";
	}
	else{
		form.style.display = "inline";
		form.style.margin = "5%";
	}
}

function verificarFormulario(){
	//Elementos HTML a consultar:
	var user = document.getElementById("usuario");
	var password = document.getElementById("contrasenia");
	var name = document.getElementById("nombre");
	var surnames = document.getElementById("apellidos");
	var email = document.getElementById("correoElectronico");
	//Elementos HTML a editar:
	var errorDiv = document.getElementById("errorDiv");
	var errorText = document.getElementById("errorMessage");

	if(user.value.length < 3){
		errorText.textContent = "El nombre de usuario no es suficientemente largo.";
		errorDiv.style.display = "inline";
	}
	else if(password.value.length < 3){
		errorText.textContent = "La contraseña no es suficientemente larga.";
		errorDiv.style.display = "inline";
	}
	else if(name.value.length == 0){
		errorText.textContent = "Es necesario que insertes tu nombre.";
		errorDiv.style.display = "inline";
	}
	else if(apellidos.value.length == 0){
		errorText.textContent = "Es necesario que insertes tus apellidos.";
		errorDiv.style.display = "inline";
	}
	else if(!comprobarEmail(email)){
		errorText.textContent = "La dirección de correo electrónico no es válida.";
		errorDiv.style.display = "inline";
	}
	else{
		errorDiv.style.display = "none";
		alert("El registro se ha completado satisfactoriamente.");
	}
}

function comprobarEmail(email){
	var resultado = false;
	var textEmail = email.value;
	var emailRegex = new RegExp("[A-Za-z0-9_.-]+@[A-Za-z0-9]+\\.[A-Za-z]+");
	
	if(emailRegex.test(textEmail))
		resultado = true;

	return resultado;
}