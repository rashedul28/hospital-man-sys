function checkpass(){

	var pass = document.getElementById("pass").value;
	document.getElementById('passerror').innerHTML="0/8"
	if(pass.length<8){
		// alert("Password length must at least 8");
		if(pass.length == 1) document.getElementById("passerror").innerHTML="1/8";
		if(pass.length == 2) document.getElementById("passerror").innerHTML="2/8";
		if(pass.length == 3) document.getElementById("passerror").innerHTML="3/8";
		if(pass.length == 4) document.getElementById("passerror").innerHTML="4/8";
		if(pass.length == 5) document.getElementById("passerror").innerHTML="5/8";
		if(pass.length == 6) document.getElementById("passerror").innerHTML="6/8";
		if(pass.length == 7) document.getElementById("passerror").innerHTML="7/8";
		if(pass.length == 8) document.getElementById("passerror").innerHTML="8/8";

		// document.getElementById("passerror").innerHTML="Not Okay";
		return false;
	}
	else{
		document.getElementById("passerror").innerHTML="Okay";
		return true;
	}
}

function ws() {
	var s = document.getElementById("uname").value;
  if(s.indexOf(' ') >= 0)
  {
  	alert("Please avoide white-spaces");
  	return false;

  }
  else	
  {
  	return true;
  }
}