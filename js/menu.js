var timeout = 500;
var closetimer = 0;
var selected = 0;

function mopen(id){
	mcancelclosetime();

if(selected) selected.style.visibility='hidden';

selected = document.getElementById(id);
selected.style.visibility = 'visible';
}

function mclose(){if(selected) selected.style.visibility='hidden';}

function mclosetime(){closetimer = window.setTimeout(mclose,timeout);}

function mcancelclosetime(){
	if(closetimer){
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

document.onclick = mclose;