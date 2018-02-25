$(document).ready(function(){
/* EXAMPLE SYNTAX
	 $("a").click(function(){
	   alert("Example");
	 });
*/
	$("#scroll").wrap("<div id='scrollwrap'></div>");
$("#backToLivechat").click(function(){
	parent.closeChat();
});
$("#message").focus(function(){
	parent.chatting=true;
});
$("#message").blur(function(){
	parent.chatting=false;
});
$("#received").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", {
					oga: "/livechat/javascripts/received.oga",
					mp3: "/livechat/javascripts/received.mp3"
				});
			},
			supplied: "oga, mp3",
			swfPath: "/livechat/javascripts",
			solution: "html,flash"
		});
	$("#message").each(function(){
	this.focus();
	this.setSelectionRange(0,31);
	});

	$("#kill").click(function () {

		var Ids="[";

		Ids+='"'+$("#chatId").val()+'"';					
	
		Ids+="]";
		$.ajax({
			type: "POST",
			url: "/livechat/actions/kill.php",
			data: "&chatIds="+Ids,
			success: function(msg){
				parent.closeChat();
				parent.livechat_init();
				window.opener.livechat_init();
				window.typing = false;
				window.close();

			}
		});
		return false;
	});
	function stopTyping () {
		id = $("#chatId").val();
		$.ajax({
			type: "POST",
			url: "/livechat/actions/stopTypingRep.php",
			data: "chatId="+id,
			success: function(msg){
				window.typing = false;
			}
		});
	}
	function starttyping () {
		var id = $("#chatId").val();
		$.ajax({
			type: "POST",
			url: "/livechat/actions/startTypingRep.php",
			data: "chatId="+id,
			success: function(msg){
				if (!window.stoptypingx){ 
					window.stoptypingx = setTimeout(stopTyping, 2000);
				}
			}
		});
	}
	function typingcheck () {
		$("#message").keypress(function () {
			if (window.typing == true) {
				if (window.stoptypingx){ 
					clearTimeout(window.stoptypingx);
				}
				window.stoptypingx = setTimeout(stopTyping, 2000);
			} else {
				window.typing = true;
				window.starttypingx = setTimeout(starttyping, 2000);
				window.stoptypingx = setTimeout(stopTyping, 4000);
				
			}
				
		});
	}
	$("#form").submit(function () {

			window.recentlySent=true;
			setTimeout(function() {window.recentlySent=false;}, 3000);
			
			if (window.stoptypingx){ 
				clearTimeout(window.stoptypingx);
			}
			if (window.starttypingx){ 
				clearTimeout(window.starttypingx);
			}
			window.typing = false;
			$("#message").addClass("loading");

			$.ajax({
				type: "POST",
				url: "/livechat/actions/sendauthor.php",
				data: "message="+$("#message").val()+"&chatId="+$("#chatId").val(),
				success: function(msg){
//					$("#sent").each(function(){
//						this.Play();
//					});
					$('#chat').html(msg);
					$('#scroll').animate({scrollTop: 50000}, 1000);
					$("p.user").hide();
					$("p.rep").hide();
					if ($("#chat p:last").hasClass("rep")) {
						$("#chat p.rep:last").fadeIn('500');
					}
					$("#message").val('');
					$("#message").removeClass("loading");

					$("#message").focus();
					window.typing=false;

				}
			});
	
	
		return false;
	});
	
	typingcheck();
	function poll () {
		
		$("#message").removeClass("loading");
		
		var id = $("#chatId").val();
		divCount = $("div","#chat").length;
		pCount = $("p","#chat").length;
		$.ajax({
			type: "POST",
			url: "/livechat/actions/display.php",
			data: "chatId="+id,
			success: function(msg){
				$('#chat').html(msg)
				if (msg!=""){
					if (divCount != $("div","#chat").length) {
						$("#received").jPlayer("play");
						$('#scroll').animate({scrollTop: 50000}, 1000);
						$("p.user").hide();
						$("p.rep").hide();
						if ($("#chat p:last").hasClass("rep")) {
							$("#chat p.rep:last").fadeIn('500');

						} 
					} else if (pCount != $("p","#chat").length) {
							$("p.user").hide();
							$("p.rep").hide();
							if ($("#chat p:last").hasClass("rep")) {
								$("#chat p.rep:last").fadeIn('500');
							}
					} else {
							$("p.user").hide();
							$("p.rep").hide();
								if ($("#chat p:last").hasClass("rep")) {
									$("#chat p.rep:last").show(0);
								}
					}
				}else {
					clearTimeout(window.poller); 
				}		
		
			}
		});
		

	}
	$("p.rep").hide();
	if ($("#chat p:last").hasClass("rep")) {
		$("#chat p.rep:last").fadeIn('500');
	}
	poll = setInterval(poll, 3000);
	
	function onlineFail() {
		var id = $("#chatId").val();
		$.ajax({
			type: "POST",
			url: "/livechat/actions/setRepOnline.php",
			data: "chatId="+id,
			success: function(msg){
			}
		});
	}
	onlineFail();
	window.poller = setInterval(onlineFail, 30000);
});