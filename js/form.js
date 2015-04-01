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