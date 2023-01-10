


function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}






var password = document.getElementById("pwd")
  , confirm_password = document.getElementById("cnfrmpwd");

function checkPassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity("sucess!!");
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


function enableButton(){
	if(document.getElementById("checkBox").checked){
		document.getElementById("submitbtn").disabled=false;
	}
	  else{
		  document.getElementById("submitbtn").disabled=true;
	  }
}








function myFunction() {
  document.getElementById("demo").style.fontSize = "25px"; 
  document.getElementById("demo").style.color = "red";
  document.getElementById("demo").style.backgroundColor = "yellow";        
}


 	




		  

