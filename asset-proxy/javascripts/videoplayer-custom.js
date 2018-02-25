
var playerHTML = "<div class='videoPlayerWrapper jplayerThemePlayer'><div class=\"jplayer jp-jplayer\"></div><div class=\"videoloading\"></div><div class=\"jp-play-btn large\"></div><div class=\"videoplayer\"><div class=\"videoplayer_inner\"><div class=\"times\"><span class=\"jp-current-time\"></span><span class=\"time-sep\">/</span><span class=\"jp-duration\"></span></div><div class=\"jp-play\"></div><div class=\"jp-pause\"></div><div class=\"jp-progress\"><div class=\"jp-seek-bar\"><div class=\"jp-play-bar\"></div><span class=\"handle\"></span></div></div><div class='volume med'></div><div class=\"jp-full-screen\"></div><div class=\"jp-restore-screen\"></div></div></div></div>";
/*if(document.createStyleSheet) {
  document.createStyleSheet('/javascripts/jplayertheme/jplayer.css?v=1');
}
else {
  
  $("head").append("<link rel='stylesheet' href='/javascripts/jplayertheme/jplayer.css?v=1' />");
}*/
var css = "<style>#fulljPlayerVideo{position:fixed;top:0;left:0;width:100%;height:100%;z-index:1000}.jplayerThemePlayer.videoPlayerWrapper{position:relative;background:#333;margin:0 auto;overflow:hidden}.jplayerThemePlayer.videoPlayerWrapper .jplayer{position:absolute;top:0;left:0;background:#000}.jplayerThemePlayer.videoPlayerWrapper .videoplayer{position:absolute;bottom:0;right:0;left:0;margin:0;background:#000;background:rgba(0,0,0,.5);-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s}.jplayerThemePlayer.videoPlayerWrapper .videoplayer.hidden{-moz-transform:translateY(48px);-webkit-transform:translateY(48px);transform:translateY(48px)}.jplayerThemePlayer .videoplayer{margin-right:20px;margin-bottom:20px;padding-right:6px}.jplayerThemePlayer .jp-full-screen,.jplayerThemePlayer .jp-restore-screen{width:21px;height:19px;cursor:pointer;background:url(/javascripts/jplayertheme/full-screen-video.png?v=3);background-size:21px 19px;position:absolute;bottom:15px;right:43px}.jplayerThemePlayer .jp-restore-screen,.jplayerThemePlayer.jp-video-full .jp-full-screen{display:none}.jplayerThemePlayer.jp-video-full .jp-restore-screen{display:block}.jplayerThemePlayer .jp-restore-screen{background:url(/javascripts/jplayertheme/full-screen-video-close.png?v=3);background-size:21px 19px}.jplayerThemePlayer .videoplayer .videoplayer_inner{height:48px;padding:1px;position:relative}.jplayerThemePlayer .videoplayer .jp-pause,.jplayerThemePlayer .videoplayer .jp-play{float:left;width:25px;height:25px;cursor:pointer;background:url(/javascripts/jplayertheme/audio-player-slim-play.png?v=2);background-size:25px 25px;margin:10px 9px 0 11px}.jplayerThemePlayer .hq{position:absolute;top:11px;width:25px;height:17px;left:35px;cursor:pointer;background:url(/javascripts/jplayertheme/hq.png) 2px 0 no-repeat}.jplayerThemePlayer .hq.enabled{background:url(/javascripts/jplayertheme/hq.png) -21px 0 no-repeat}.jplayerThemePlayer .jp-play-btn.large{position:absolute;top:0;left:0;right:0;bottom:0;cursor:pointer;background:url(/javascripts/jplayertheme/play-large.png?v=1) 50% 50% no-repeat;background-size:105px 105px;box-shadow:inset 0 0 100px rgba(0,0,0,.5);-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s;opacity:1}.jplayerThemePlayer .jp-play-btn.large.hidden{opacity:0}.jplayerThemePlayer .videoplayer .jp-pause{background:url(/javascripts/jplayertheme/audio-player-slim-pause.png?v=2);background-size:25px 25px}.jplayerThemePlayer .videoplayer .jp-progress{position:absolute;bottom:19px;left:55px;height:11px;border:1px solid #fff;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.jplayerThemePlayer .volume{width:23px;height:20px;background:url(/javascripts/jplayertheme/volume.png?v=4) no-repeat;background-size:22px 62px;position:absolute;right:8px;bottom:16px;cursor:pointer}.jplayerThemePlayer .volume.low{background-position:0 0;background-size:22px 62px}.jplayerThemePlayer .volume.med{background-position:0 -21px;background-size:22px 62px}.jplayerThemePlayer .volume.high{background-position:0 -42px;background-size:22px 62px}.jplayerThemePlayer .videoplayer .jp-progress{right:160px}.jplayerThemePlayer .times{margin-right:0;position:absolute;bottom:16px;right:80px;color:#fff;font-size:11px;line-height:16px;font-family:arial,sans-serif}@media (max-width:600px){.jplayerThemePlayer .videoplayer .jp-progress{right:50px}.jplayerThemePlayer .times{display:none}}.jplayerThemePlayer .jp-seek-bar{height:100%;position:relative;width:0;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.jplayerThemePlayer .jp-play-bar{height:100%;width:0;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;position:relative;background:#ccc}.jplayerThemePlayer .jp-seek-bar .handle{width:17px;height:17px;background:#ccc;border:1px solid #fff;position:absolute;top:-4px;border-radius:10px;-webkit-border-radius:10px;-moz-border-radius:10px;margin:0 -5px;left:0;cursor:pointer}div.jp-video-full.videoPlayerWrapper{width:480px;height:270px;position:static!important;position:relative}div.jp-video-full div.jplayer{top:0;left:0;position:fixed!important;position:relative;overflow:hidden}div.jp-video-full div.jp-gui{position:fixed!important;position:static;top:0;left:0;width:100%;height:100%;z-index:1001}div.jp-video-full div.jp-interface{position:absolute!important;position:relative;bottom:0;left:0}</style>";
$('head').append(css);
var jplayerdragging=false;

function makeVideo (obj,width,height,image,video,autostart,fullscreen) {

	var ext = video.split('.').pop();

	if (videoControlBar=="bottom"){
		height=height+24;
	}
	if (fullscreen) { 
		$("#"+obj+" .videoPlayerWrapper").css("width","100%").css("height","100%");
	} else {
		$("#"+obj+" .videoPlayerWrapper").css("width",width+"px").css("height",height+"px");	
	}
	$("#"+obj+" .videoPlayerWrapper").hover(function(){
		$(".videoplayer",$(this)).removeClass("hidden");
	},function(){
		if ($(".jplayer",$(this)).hasClass("playing")) {
			$(".videoplayer",$(this)).addClass("hidden");		
		}
	});
	$(".jp-play-btn",$("#"+obj)).click(function(){
		var playerid = $(this).parents(".jplayerInit").attr("id");
				if ($("#"+playerid+" .jplayer").hasClass("playing")) {
					$("#"+playerid+" .jplayer").jPlayer("pause");
				} else {
					$("#"+playerid+" .jplayer").jPlayer("play");					
				}

	});
	$(".volume",$("#"+obj)).click(function(){
		var playerid = $(this).parents(".jplayerInit").attr("id");
		if ($(this).hasClass("low")) {
			$("#"+playerid+" .jplayer").jPlayer("option","volume",0.5);
			$(this).removeClass("low").addClass("med");
			jplayervolume = 0.5;
		} else if ($(this).hasClass("med")) {
			$("#"+playerid+" .jplayer").jPlayer("option","volume",1);
			$(this).removeClass("med").addClass("high");
			jplayervolume = 1;
		} else if ($(this).hasClass("high")) {
			$("#"+playerid+" .jplayer").jPlayer("option","volume",0.1);
			$(this).removeClass("high").addClass("low");
			jplayervolume = 0.1;
		}
		createCookie("volume",jplayervolume);
	});
	$(".handle",$("#"+obj)).draggable({
		containment:"parent"
		,drag: function(event, ui) { 
	        var pos = $(this).position().left;	
			var pwidth = $(this).parent().width();
			var percent = pos / pwidth;
			if (percent!=0) {
				percent = percent*100;				
			}
			$(".jp-play-bar",$(this).parent()).css("width",percent+"%");
			if ($(this).parents(".videoPlayerWrapper").length) {
				var playerid = $(".jplayer",$(this).parents(".videoPlayerWrapper")).attr("id");
			}
			if ($(this).parents(".videoPlayerWrapper").length) {
				var playerid = $(".jplayer",$(this).parents(".videoPlayerWrapper")).attr("id");
			} else {
				var playerid = $(this).parents(".audioplayer").prev().attr("id");
			}
			$("#"+playerid).jPlayer("playHead",percent);
		 }
		,start: function(event,ui) {
			jplayerdragging=true;
		}
		,stop:function(event,ui) {
			jplayerdragging=false;
		}
		,axis:"x"
	});
	if (ext=="m4v") {
		var supplied="m4v";
	}
	if (ext=="mp3") {
		var supplied="mp3";
	}
	if (ext=="mp4") {
		var supplied="m4v";
	}
	if (ext=="mov") {
		var supplied="m4v";
	}
	if (ext=="m4a") {
		var supplied="m4a";
	}
	if (ext=="ogv") {
		var supplied="ogv";
	}
	if (ext=="oga") {
		var supplied="oga";
	}
	if (ext=="ogg") {
		var supplied="oga";
	}
	if (ext=="wav") {
		var supplied="wav";
	}
	if (ext=="webm") {
		var supplied="webmv";
	}
	if (ext=="webma") {
		var supplied="webma";
	}
	if (ext=="webmv") {
		var supplied="webmv";
	}
	$("#"+obj+" .jplayer").jPlayer({
		ready: function () {
			
			if (ext=="m4v") {
				$(this).jPlayer("setMedia", {
	        		m4v: video
	        		,poster: image
	        	});	
			}
			if (ext=="mp3") {
				$(this).jPlayer("setMedia", {
	        		m4v: video
	        		,poster: image
	        	});	
			}
			if (ext=="mp4") {
				$(this).jPlayer("setMedia", {
	        		m4v: video
	        		,poster: image
	        	});
			}
			if (ext=="mov") {
				$(this).jPlayer("setMedia", {
	        		m4v: video
	        		,poster: image
	        	});
			}
			if (ext=="m4a") {
				$(this).jPlayer("setMedia", {
	        		m4a: video
	        		,poster: image
	        	});
			}
			if (ext=="ogv") {
				$(this).jPlayer("setMedia", {
	        		ogv: video
	        		,poster: image
	        	});
			}
			if (ext=="oga") {
				$(this).jPlayer("setMedia", {
	        		oga: video
	        		,poster: image
	        	});
			}
			if (ext=="ogg") {
				$(this).jPlayer("setMedia", {
	        		oga: video
	        		,poster: image
	        	});
			}
			if (ext=="wav") {
				$(this).jPlayer("setMedia", {
	        		wav: video
	        		,poster: image
	        	});
			}
			if (ext=="webm") {
				$(this).jPlayer("setMedia", {
	        		webm: video
	        		,poster: image
	        	});
			}
			if (ext=="webma") {
				$(this).jPlayer("setMedia", {
	        		webma: video
	        		,poster: image
	        	});
			}
			if (ext=="webmv") {
				$(this).jPlayer("setMedia", {
	        		webmv: video
	        		,poster: image
	        	});
			}
			if (autostart) {
				$(this).jPlayer("play");
			}
    	},
    	supplied: supplied,
		swfPath: "/javascripts", 
		size: {
			width: width,
			height: height
		},
		volume: jplayervolume,
		fullScreen:fullscreen,
		cssSelectorAncestor: "#"+obj+" .videoPlayerWrapper"
		,play: function(event) {
			setTimeout(function() {
				$(".videoplayer",$(event.jPlayer.options['cssSelectorAncestor'])).addClass("hidden");
			}, 1000);
			$(this).addClass("playing");
			$(".videoloading,.jp-play-btn.large",$(event.jPlayer.options['cssSelectorAncestor'])).addClass("hidden");
		},
		pause: function(event) {
			$(".videoloading,.jp-play-btn.large",$(event.jPlayer.options['cssSelectorAncestor'])).removeClass("hidden");
			$(".videoplayer",$(event.jPlayer.options['cssSelectorAncestor'])).removeClass("hidden");		
			
			$(this).removeClass("playing");
		},
		timeupdate: function(event) {
			if (!jplayerdragging) {
				$(".handle",$(event.jPlayer.options['cssSelectorAncestor'])).css("left",$(".jp-play-bar",$(event.jPlayer.options['cssSelectorAncestor'])).width());			
			}
		}
	}); 
	
}
var jplayerVideoCounter=0;
var jplayervolume = 0.5;
$(window).load(function(){
	if (readCookie("volume")) {
		jplayervolume = readCookie("volume");
	}

	$(".bpe_video:not(.Popup_Video) img").each(function(){

		var img = this;
		var width = $(this).width();
		var height = $(this).height();
		var image = $(this).attr("src");
		var video = $(this).parent().attr("href");
		$(this).parent().after("<div id=\"video"+jplayerVideoCounter+"\" class='jplayerInit' data-poster='"+image+"' data-vid='"+video+"'>"+playerHTML+"</div>");
		$(this).parent().remove();
		
		makeVideo("video"+jplayerVideoCounter,width,height,image,video,false,false);

		jplayerVideoCounter++;
	});


});