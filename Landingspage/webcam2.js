
var canvas;
var effect = 0;
var video;
var texture;
var cam;
var snap = 'incomplete';
var image;
var myImage;


window.addEventListener("DOMContentLoaded", function() {
	// Grab elements, create settings, etc.
		video = document.getElementById("video"),
		videoObj = { "video": true },
		errBack = function(error) {
			console.log("Video capture error: ", error.code); 
		};

	// Put video listeners into place
	if(navigator.getUserMedia) { // Standard
		navigator.getUserMedia(videoObj, function(stream) {
			video.src = stream;
			video.play();
		}, errBack);
	} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
		navigator.webkitGetUserMedia(videoObj, function(stream){
			video.src = window.webkitURL.createObjectURL(stream);
			video.play();
		}, errBack);
	}
	else if(navigator.mozGetUserMedia) { // Firefox-prefixed
		navigator.mozGetUserMedia(videoObj, function(stream){
			video.src = window.URL.createObjectURL(stream);
			video.play();
		}, errBack);
	}
}, false);

var tel = 1;

function effects(effect) {
	console.log(effect);
	console.log(tel);
	tel++;
	console.log(tel);
	var div = document.getElementById("div")

	switch(effect) {
	    case "switch1":
	    	console.log(effect);
		    // window.onload = function(){
		    	console.log(tel);
		    	if(tel < 3){
		    		console.log(tel);
		    		canvas = fx.canvas();
            console.log(canvas);
		    		canvas.setAttribute("id","canvas");
					video = document.getElementById('video');
					texture = canvas.texture(video);
					div.appendChild(canvas); 
					cam = setInterval(function() {
						texture.loadContentsOf(video);
						canvas.draw(texture).bulgePinch(324, 151.5, 200, 0.64).update();
						}, 10);
				}else{
					console.log(tel);
					clearInterval(cam);
					div.removeChild(canvas);
					tel = 1;
					console.log(tel);
				}

			// }
	    break;
	    case "switch2":
			// window.onload = function() {
			if(tel < 3){
				canvas = fx.canvas();
        canvas.setAttribute("id","canvas");
				video = document.getElementById('video');
				texture = canvas.texture(video);
				document.getElementById("div").appendChild(canvas); 
				cam = setInterval(function() {
					texture.loadContentsOf(video);
					canvas.draw(texture).bulgePinch(320, 239.5, 200, 1).update();
				}, 10);
			}else{
					console.log(tel);
					clearInterval(cam);
					div.removeChild(canvas);
					tel = 1;
					console.log(tel);
				}
			// };
	    break;	    
	    case "switch3":
			// window.onload = function() {
			if(tel < 3){
				canvas = fx.canvas();
        canvas.setAttribute("id","canvas");
				video = document.getElementById('video');
				texture = canvas.texture(video);
				document.getElementById("div").appendChild(canvas); 
				cam = setInterval(function() {
					texture.loadContentsOf(video);
					canvas.draw(texture).bulgePinch(320, 239.5, 200, -0.75).update();
				}, 10);
			}else{
					console.log(tel);
					clearInterval(cam);
					div.removeChild(canvas);
					tel = 1;
					console.log(tel);
				}
			// };
	    break;
	    case "switch4":
			// window.onload = function() {
			if(tel < 3){
				canvas = fx.canvas();
        canvas.setAttribute("id","canvas");
				video = document.getElementById('video');
				texture = canvas.texture(video);
				document.getElementById("div").appendChild(canvas); 
				cam = setInterval(function() {
					texture.loadContentsOf(video);
					canvas.draw(texture).bulgePinch(320, 421.5, 216, 1).update();
				}, 10);
				}else{
					console.log(tel);
					clearInterval(cam);
					div.removeChild(canvas);
					tel = 1;
					console.log(tel);
				}
			// };
	    break;
	    case "switch5":
			// window.onload = function() {
			if(tel < 3){
				canvas = fx.canvas();
        canvas.setAttribute("id","canvas");
				video = document.getElementById('video');
				texture = canvas.texture(video);
				document.getElementById("div").appendChild(canvas); 
				cam = setInterval(function() {
					texture.loadContentsOf(video);
					 canvas.draw(texture).bulgePinch(320, 239.5, 200, 0.37).update();
				}, 10);
			}else{
					console.log(tel);
					clearInterval(cam);
					div.removeChild(canvas);
					tel = 1;
					console.log(tel);
				}
			// };
	    break;	    	    
	}
}
// 	console.log(document.getElementById("snap"));
// 	document.getElementById("snap").addEventListener("click", snap);
// 	document.getElementById("opnieuw").addEventListener("click", opnieuw);
// 	document.getElementById("share").addEventListener("click", fbs_click);

// 	console.log(myImage);

	// function snap() {
	//     var can = document.getElementById('can');
	//     var con = can.getContext('2d');
	//     image = con.drawImage(canvas,0,0,1364,1540,0,0,640,480); 
	//     myImage = can.toDataURL("image/png");
	//     console.log(myImage);
	//     snap =  'complete';
 //  	};

 //  	function fbs_click() {
 //  		console.log(myImage);
	//     u=myImage.src;
	//     // t=document.title;
	//     t=myImage.getAttribute('alt');
	//     window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
	// }	

 //  	function opnieuw() {
 //    	window.location.reload();
 //  	};