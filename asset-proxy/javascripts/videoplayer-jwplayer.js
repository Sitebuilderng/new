function makeVideo (obj,width,height,image,video,autostart) {
	if (videoControlBar=="bottom"){
		height=height+24;
	}
	jwplayer(obj).setup({
	flashplayer: "/javascripts/player.swf",
	file: video,
	image: image,
	height: height,
	width: width,
	autostart: autostart,
	controlbar: videoControlBar
	});
}

var videoCounter=0;
$(window).load(function(){
	
	$(".bpe_video:not(.Popup_Video) img").each(function(){

		var img = this;
		var width = $(this).width();
		var height = $(this).height();
		var image = $(this).attr("src");
		var video = $(this).parent().attr("href");
		$(this).parent().parent().hide();
		$(this).parent().parent().after("<div id=\"video"+videoCounter+"\"></div>");
		makeVideo("video"+videoCounter,width,height,image,video,false);
	
	
		videoCounter++;
	});

});