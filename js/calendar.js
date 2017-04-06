// JavaScript Document


(function() {
"use strict";
console.log("Ready to go, boss!");

var table = document.querySelector('.calendar');
var dates = table.querySelectorAll('td');
var links = [document.querySelector('#callink1'), document.querySelector('#callink2')];
var count = 0;
var month = document.querySelector('.month');
var datebg = "#ffed73";
var hours = document.querySelector('.tours');

function changemonth(e){
	
e.preventDefault();
console.log(links[1].classList);
console.log(count);

if(e.target.classList.contains("1")){

count--;	
	
}else if(e.target.classList.contains("2")){

count++;	
	
}

if(count<0){

count = 4;	
	
}else if(count>4){
	
count=0;	
	
}

if(count===0){
for (var i=0; i<dates.length; i++){
dates[i].innerHTML = calendar.May.day[i];
dates[i].style.backgroundColor = "#ffffff";
}
dates[27].style.backgroundColor = datebg;
dates[28].style.backgroundColor = datebg;
month.innerHTML = "May";
hours.innerHTML = "1:00PM and 3:00PM";
}else if(count===1){
for (var i=0; i<dates.length; i++){
dates[i].innerHTML = calendar.June.day[i];
dates[i].style.backgroundColor = "#ffffff";
}
month.innerHTML = "June";
hours.innerHTML = "1:00PM and 3:00PM";
dates[6].style.backgroundColor = datebg;
dates[7].style.backgroundColor = datebg;
dates[13].style.backgroundColor = datebg;
dates[14].style.backgroundColor = datebg;
dates[20].style.backgroundColor = datebg;
dates[21].style.backgroundColor = datebg;
dates[27].style.backgroundColor = datebg;
dates[28].style.backgroundColor = datebg;
} else if(count===2){
for (i=0; i<dates.length; i++){
dates[i].innerHTML = calendar.July.day[i];
dates[i].style.backgroundColor =  datebg;
}
dates[0].style.backgroundColor = "#ffffff";
dates[1].style.backgroundColor = "#ffffff";
dates[2].style.backgroundColor = "#ffffff";
dates[3].style.backgroundColor = "#ffffff";
dates[4].style.backgroundColor = "#ffffff";
dates[5].style.backgroundColor = "#ffffff";
dates[37].style.backgroundColor = "#ffffff";
dates[38].style.backgroundColor = "#ffffff";
dates[39].style.backgroundColor = "#ffffff";
dates[40].style.backgroundColor = "#ffffff";
dates[41].style.backgroundColor = "#ffffff";
month.innerHTML = "July";
hours.innerHTML = "1:00PM and 3:00PM (weekdays), 9:30AM, 1:00PM and 3:00PM (weekends)";
} else if(count===3){
for (i=0; i<dates.length; i++){
dates[i].innerHTML = calendar.August.day[i];
dates[i].style.backgroundColor =  datebg;
}
dates[0].style.backgroundColor = "#ffffff";
dates[1].style.backgroundColor = "#ffffff";
dates[33].style.backgroundColor = "#ffffff";
dates[34].style.backgroundColor = "#ffffff";
dates[35].style.backgroundColor = "#ffffff";
dates[36].style.backgroundColor = "#ffffff";
dates[37].style.backgroundColor = "#ffffff";
dates[38].style.backgroundColor = "#ffffff";
dates[39].style.backgroundColor = "#ffffff";
dates[40].style.backgroundColor = "#ffffff";
dates[41].style.backgroundColor = "#ffffff";
month.innerHTML = "August";
hours.innerHTML = "9:30AM, 1:00PM and 3:00PM";
}else if(count===4){
for (i=0; i<dates.length; i++){
dates[i].innerHTML = calendar.September.day[i];
dates[i].style.backgroundColor = "#ffffff";
} 
month.innerHTML = "September";
hours.innerHTML = "1:00PM and 3:00PM";
dates[5].style.backgroundColor =  datebg;
dates[6].style.backgroundColor =  datebg;
dates[7].style.backgroundColor =  datebg;
dates[8].style.backgroundColor =  datebg;}
	
}

function setdates(){
	
dates[27].style.backgroundColor = datebg;
dates[28].style.backgroundColor = datebg;	
	
}


[].forEach.call(links, function(links) {links.addEventListener('click', changemonth, false);});
window.addEventListener("load", setdates, true);

})();