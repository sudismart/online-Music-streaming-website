 window.onload = function() {
var mytrack= document.getElementById('mytrack');
var playbtn= document.getElementById('playbtn');
var indication= document.getElementById('indication');
var curr_time=document.getElementById('current_time');
var full_time=document.getElementById('full_time');
var forward=document.getElementById('forward');
var backward=document.getElementById('backward');

var poster_width=document.getElementById('poster_img').offsetWidth;
var playorpause_width=document.getElementById('play_pause').offsetWidth;
var curr_time_width=document.getElementById('current_time').offsetWidth;
var padding= document.getElementById('indication').style.paddingLeft;

forward.addEventListener('click',forward_time);
backward.addEventListener('click',backward_time);





var barSize = 580;
var bar= document.getElementById('defaultbar');
var pbar= document.getElementById('progressbar');
if(bar){
	bar.addEventListener('click',clickBar,false);
}

 
var minutes=parseInt(mytrack.duration/60);
var seconds=parseInt(mytrack.duration%60);
if(minutes.toString()=='NaN'){
	minutes="00";
	seconds="00";
}
full_time.innerHTML=  minutes + ":" + seconds;
if(playbtn){
	playbtn.addEventListener('click',playorpause,false);	
}
function playorpause(){
	if(!mytrack.paused && !mytrack.ended){
		mytrack.pause();
		playbtn.className='glyphicon glyphicon-play';
		window.clearInterval(updateTime);
	}
	else{
		mytrack.play();
		playbtn.className="glyphicon glyphicon-pause";
		updateTime= setInterval(update,500);
	}
}

 function update(){
 	if(!mytrack.ended){
 		var curr_mins= parseInt(mytrack.currentTime/60);
 		var curr_secs= parseInt(mytrack.currentTime%60);
 		curr_time.innerHTML= curr_mins+":"+curr_secs;

 		var size= parseInt(mytrack.currentTime*barSize/mytrack.duration);
 		pbar.style.width= size + "px";
 	}
 	else{
 		current_time.innerHTML =  "00:00";
 	}	
 }


  function	clickBar(e){
  	if(!mytrack.ended){
  		var width_minus= poster_width + playorpause_width + curr_time_width+ padding;
  		var mouseX = e.pageX - width_minus;
  		var newtime = parseInt(mouseX*mytrack.duration/barSize);

  		mytrack.currentTime= newtime;
  		pbar.style.width= mouseX+"px";
  	  	}
  }

  function forward_time(){
	mytrack.currentTime += 30;
	var size= parseInt(mytrack.currentTime*barSize/ mytrack.duration);
	pbar.style.width= size + "px";
}
 
  function backward_time(){
	mytrack.currentTime -= 30;
	var size= parseInt(mytrack.currentTime*barSize/ mytrack.duration);
	pbar.style.width= size + "px";
}
  mytrack.onended = function(){
	playbtn.className="glyphicon glyphicon-play";
}
  };
