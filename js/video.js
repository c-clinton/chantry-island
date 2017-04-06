// JavaScript Document

(function() {
"use strict";

var videocon = document.querySelector('#videocon');
var video = document.querySelector('#video');
var header = document.querySelector("#header");
var vidphp = document.querySelector("#vidphp");
var skip = document.querySelector("#skip");
var tag = document.querySelector("#tag");

	
function checkscreen(){

if (window.innerWidth > 574)  {

video.innerHTML= vidphp.innerHTML;	
header.style.display = "none";

	
} else if (window.innerWidth <574){


videocon.innerHTML = "";
header.style.display = "block";	
	
}
}

function showheader(e){

e.preventDefault();
videocon.innerHTML = "";
header.style.display="block";	
	
}

video.addEventListener("ended", showheader, false);
skip.addEventListener("click", showheader, false);
window.addEventListener("load", checkscreen, false);
window.addEventListener("resize", checkscreen, false);

})();




