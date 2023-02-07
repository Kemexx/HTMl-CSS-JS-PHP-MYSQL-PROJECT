funcArray =  [mejlcek, passwordcheck, passwordvalidation];

function mejlcek () {
	
    var majl = document.getElementById("mail").value;
	var b = document.getElementById("button_1");

	var mejl = /^[^]+@[^]+\.[a-z]{2,3}$/;

	if(majl.match(mejl)) {
		

	} else alert ('Morate unijeti ispravan e-mail!!')
	return false;

}


/*
function passwordcheck() {
	var password = document.getElementById("pass").value;

     if(password.length > 8 ) {
		

	} else alert ('Vaš password mora sadržavati više od 8 slova ili karaktera!')
	return false;
}

*/


function passwordvalidation () {
	var validate = document.getElementById("pass1").value;
	var validate2 = document.getElementById("pass").value;

	if(validate != validate2) {
		alert('Password i ponovni password vam se ne poklapaju!')
	} 
    return false;
}

function usernamevalidation1 () {
	var usvalidate = document.getElementById("username").value;
	var usvalidate2= document.getElementById("password").value;

	if( usvalidate == "admin" && usvalidate2 == "admin12" ) {
		alert('ADMINISTRATOR USPJEŠNO LOGOVAN NA SISTEM!')
		
	} else {
		alert('Username ili password nisu ispravno unešeni');
	}


	return false;
}


function passwordvalidation2 () {
	var validate = document.getElementById("pass1").value;
	var validate2 = document.getElementById("pass").value;

	if(validate != validate2) {
		alert('Novi password i ponovni password vam se ne poklapaju!')
	} 
    return false;
}














function newFunction() {
	"' ";
}
/* function klik () {
	if(document.getElementById("mail").value ) {
		alert('Please enter your email')
		return false;
		var mejl = /^[^]+@[^]+\.[a-z]{2,3}$/;
}  */ 
