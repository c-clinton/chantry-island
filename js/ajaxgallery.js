// JavaScript Document
(function() {

	
	console.log("Ready to go, boss!");
	
	var thumbs = document.querySelectorAll('.thumbnail');
	//var imagetitle = document.querySelector('.imagetitle');
	var galleryimage = document.querySelectorAll('.galimg');
	var gallerydesc = document.querySelectorAll('.imagedesc');
	var gallerytitle = document.querySelector('.imagetitle');
	//var imagedesc = document.querySelector('.imagedesc');
	var httpRequest;
	var closebut = document.querySelector('#close');
	var zoombut = document.querySelector('#zoombut');
		
var overlay = document.querySelector('#overlaybig');

	

function request(){

httpRequest = new XMLHttpRequest();

if(!httpRequest){

gallerydesc.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}

httpRequest.onreadystatechange = swapimage;
httpRequest.open('GET', 'admin/phpscripts/get_image.php' + '?galleryimg_id=' + this.id);
console.log(this.id);
httpRequest.send();

}

function swapimage(){

if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
console.log(httpRequest.responseText);
var imagedata = JSON.parse(httpRequest.responseText);
for (var i = 0; i < galleryimage.length; i++) { 
galleryimage[i].src="gallery/" + imagedata.galleryimg_path;
}
for (i = 0; i < gallerydesc.length; i++) { 
gallerydesc[i].innerHTML = imagedata.galleryimg_desc;
}
gallerytitle.innerHTML = imagedata.galleryimg_title;
console.log("update working");

}

}

function closezoom(){

overlay.classList.remove('show');	
overlay.classList.add('hidden');	
	
}

function openzoom(){

overlay.classList.remove('hidden');
overlay.classList.add('show');	
	
}

(function($){
        $(window).load(function(){
            $("#thumbnails-list").mThumbnailScroller({
			type: "click-80",
			contentTouchScroll: 25,
              axis:"x", //change to "y" for vertical scroller
            });
        });
    })(jQuery);
	
	
zoombut.addEventListener("click", openzoom, false);
closebut.addEventListener("click", closezoom, false);
[].forEach.call(thumbs, function(img) {
	//console.log("listener working");
	img.addEventListener('click', request, false);
	img.addEventListener('touchstart', request, false);
});


})();