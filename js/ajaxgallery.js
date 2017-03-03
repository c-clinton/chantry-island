// JavaScript Document

(function() {

	
	console.log("Ready to go, boss!");
	
	var thumbs = document.querySelectorAll('.thumbnail');
	//var imagetitle = document.querySelector('.imagetitle');
	var galleryimage = document.querySelector('#galimg');
	var gallerydesc = document.querySelector('#galoverlay');
	var gallerytitle = document.querySelector('.imagetitle');
	//var imagedesc = document.querySelector('.imagedesc');
	var httpRequest;

	

function request(){

httpRequest = new XMLHttpRequest();

if(!httpRequest){

gallerydesc.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}

httpRequest.onreadystatechange = swapimage;
httpRequest.open('GET', 'admin/scripts/get_image.php' + '?galleryimg_id=' + this.id);
console.log(this.id);
httpRequest.send();

}

function swapimage(){

if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
console.log(httpRequest.responseText);
var imagedata = JSON.parse(httpRequest.responseText);
galleryimage.src="gallery/" + imagedata.galleryimg_path + ".jpg";
gallerydesc.innerHTML = imagedata.galleryimg_desc;
gallerytitle.innerHTML = imagedata.galleryimg_desc;
console.log("update working");

}

}


[].forEach.call(thumbs, function(img) {
	//console.log("listener working");
	img.addEventListener('click', request, false);
});



})();