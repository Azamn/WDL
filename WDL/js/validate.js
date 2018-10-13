
function checkEmail(e){
	var element=e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value)){
		alert("email is not valid only char from a-z A-Z 0-9 @ . _");
		element.value="";
		return false;
	}

	if(!/[a-zA-Z]/.test(element.value)){
		alert("email is not valid a-z or A-Z is must");
		element.value="";
		return false;
	}
	if(!/[@]/.test(element.value)){
		alert("email is not valid @ is must");
		element.value="";
		return false;
	}
	if(!/[.]/.test(element.value)){
		alert("email is not valid . is must");
		element.value="";
		return false;
	}
	if(!/^\w+@[a-zA-Z]+?\.[a-zA-Z]{2,3}$/.test(element.value)){
		alert("email is not valid. followed by @,followed by string, followed by a period and must end with a string between 2to 3 character only");
		element.value="";
		return false;
	}
return true;
}

function checkSubject(e){
	var element=e.target;
	if(!/[a-zA-Z\s]/.test(element.value)){
		alert("subject must have alphabets");
		element.value="";
		return false;
	}
	if(!/[a-zA-Z]/.test(element.value)){
		alert("subject cant contain only spaces");
		element.value="";
	return false;
	}
	if(!/([a-zA-Z]).{7,30}/.test(element.value)){
		alert("subject must contain atleast 8 character and max 30 charcater");
		element.value="";
		return false;
	}
return true;
}

function submitForm(e){
	e.preventDefault();
	if(document.getElementById('user-email').value!="" && document.getElementById('subject').value!="" && document.getElementById('message').value!=""){
		var contact=document.getElementsByClassName('contact-form');
		contact[0].innerHTML = "<h3>Thank You for Feedback. I'll get to you shortly</h3>";	
	}
}

var email=document.getElementById('email');
email.addEventListener('blur',checkEmail,false);
var sub=document.getElementById('sub');
sub.addEventListener('change',checkSubject,false);






