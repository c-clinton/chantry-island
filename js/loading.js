// JavaScript Document
(function() {
"use strict";

//this was supposed to give it a fancy loading spinner but PHP seems to want to take over when the button is clicked...

var loading = document.querySelector("#toload");
var loadme = document.querySelector("#loadme");

function loadthing(){
	
loading.innerHTML = "<p><img class=\"spinner\" src=\"../images/spinner.gif\" alt=\"loading\">&nbsp;&nbsp;Uploading...</p>";
	
}


loadme.addEventListener("click", loadthing, false);

})();
