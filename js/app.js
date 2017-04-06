$(document).foundation();

// JavaScript Document

(function() {
"use strict";
console.log("Ready to go, boss!");

var headercon = document.querySelector('#fetchheader');

var headerimg = document.querySelector('#header');

function loadHeader(){
	
headerimg.style.background = "url(images/"+headercon.innerHTML+")";
headerimg.style.backgroundRepeat = "no-repeat";
headerimg.style.backgroundSize = "cover";
headerimg.style.paddingBottom= "20%";
	
}

window.addEventListener("load", loadHeader, false);

	
})();