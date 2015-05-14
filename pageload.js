function pageLoad(ime_stranice) {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function () {
		if(ajax.readyState == 4 && ajax.status == 200) {
			document.getElementById("wrapper").innerHTML = ajax.responseText;
		}
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("wrapper").innerHTML = "Desired URL is not working!";
	}
	
	ajax.open("GET", ime_stranice, true);
	ajax.send();
}