function  validationForm(){
	var name, email, phone, subject,dateTime, time, expression;

	name = document.getElementById("name").value;
	email = document.getElementById("email").value;
	phone = document.getElementById("phone").value;
	subject = document.getElementById("subject").value;
	dateTime = document.getElementById("dateTime").value;
	time = document.getElementById("time").value;
	expression =/\w+@\w+\.+[a-z]/;

	if (name === " " || email === " " || phone === " " || subject === " "|| dateTime === " " || time === " ") {
		alert("Todos los campos son requeridos");
		return false;
	}
	else if (name.length > 60) {
		alert("El nombre es muy largo, se recomienda menos de 60 caracteres");
		return false;
	}
	else if (email.length > 40) {
		alert("El correo es muy largo, se recomienda un correo de 40 caracteres");
		return false;
	}
	else if (!expression.test(email)) {
	 	alert("Ingresa un correo valido");
	 	return false; 
	}
	else if (phone.length > 15) {
		alert("El teléfono es muy largo, se recomienda un numero telefonico menor a 15 caracteres incluyendo el codigo de país");
		return false;
	}
	else if (isNaN(phone)) {
		alert("El campo teléfono, solo permite números");
		return false;
	}
	else if (subject.length > 50) {
		alert("El asuto es muy largo, se recomienda poner menos de 50 caracteres");
		return false;
	}

}