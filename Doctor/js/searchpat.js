function searchmydata()
{

	var name = document.getElementById("searchdata").value;
	var xttp = new XMLHttpRequest();
	xttp.onreadystatechange = function(){


		if(this.readyState == 4 && this.status == 200){


			document.getElementById("show").innerHTML = this.responseText;
		}
	};

	xttp.open("POST",  "/Doctor/control/searchpatientck.php",  true);
	xttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xttp.send("name="+name);
}

function deletedata2()
{

	var phone = document.getElementById("deletedata").value;
	var xttp = new XMLHttpRequest();
	xttp.onreadystatechange = function(){


		if(this.readyState == 4 && this.status == 200){


			document.getElementById("show").innerHTML = this.responseText;
		}
	};

	xttp.open("POST",  "/Doctor/control/deletepatientck.php",  true);
	xttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xttp.send("phone="+phone);
}
