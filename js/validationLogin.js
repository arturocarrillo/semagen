function validationLogin() {
  var user, password;
  user = document.getElementById( "user" ).value;
  password = document.getElementById( "password" ).value;
  if(user === " " || password === " "){
  	alert("Campos vacios");
  	return false;
  }
}