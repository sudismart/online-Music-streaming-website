$('input#play_btn').on('click',function(){

//  chanhing play button//
	var playorpause= document.getElementById('playbtn')
			playorpause.className='glyphicon glyphicon-play';
	var name = $('input#input').val();
	if ($.trim(name)!=''){
		$.post('music_play.php',{name:name},function(data){
			var song=  data.substring(54,data.length-2);
			var ch= song.charAt(5);

			var song_modified= song.replace(ch, "");
			$("#mytrack").attr("src",song_modified);
			//$("#mytrack").trigger('play');
			
		});
		$.post('poster.php',{name:name},function(data){
			var poster=  data.substring(2,data.length-2);
			var ch= poster.charAt(7);

			var poster_modified= poster.replace(ch, "");
			$("#poster").attr("src", poster_modified);
		});
		 $.post('duration.php',{name:name},function(data){
		 	var dur= data.substring(2,data.length-2);
		 	var minutes=parseInt(dur/60);
            var seconds=parseInt(dur%60);
			var full_time=document.getElementById('full_time');
			full_time.innerHTML=  minutes + ":" + seconds;
		});
	}
});




