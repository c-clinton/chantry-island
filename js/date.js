// JavaScript Document

(function() {
	
	"use strict";
	
	var greeting = document.querySelector('#greeting');
		
	var now = new Date();
	var time = now.getHours();

	if (time >  0){ 
	greeting.innerHTML = "Good morning, "; 
	}
	if (time >  6){ 
	greeting.innerHTML = "Good morning, ";    
	}
	if (time > 12){ 
	greeting.innerHTML = "Good afternoon, ";   
	}
	if (time > 17){ 
	greeting.innerHTML = "Good evening, ";    
	} 
	if (time > 20){ 
	greeting.innerHTML = "Good night, ";
	}
})();