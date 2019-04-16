
// Hours of Service 

function showdowntownhours() {	
	document.getElementById("downtowncampus-library").style.display = 'block';		
	document.getElementById("northcampus-library").style.display = "none";	
	document.getElementById("southcampus-library").style.display = "none";
	document.getElementById("talambancampus-library").style.display = "none";
}

function shownorthhours() {
	document.getElementById("northcampus-library").style.display = "block";
	document.getElementById("downtowncampus-library").style.display = "none";	
	document.getElementById("southcampus-library").style.display = "none";
	document.getElementById("talambancampus-library").style.display = "none";
}

function showsouthhours() {
	document.getElementById("southcampus-library").style.display = "block";
	document.getElementById("northcampus-library").style.display = "none";
	document.getElementById("downtowncampus-library").style.display = "none";	
	document.getElementById("talambancampus-library").style.display = "none";
}

function showtalambanhours() {
	document.getElementById("talambancampus-library").style.display = "block";
	document.getElementById("northcampus-library").style.display = "none";
	document.getElementById("downtowncampus-library").style.display = "none";	
	document.getElementById("southcampus-library").style.display = "none";
	
}