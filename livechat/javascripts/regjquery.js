$(document).ready(function(){
/* EXAMPLE SYNTAX
	 $("a").click(function(){
	   alert("Example");
	 });
*/
	$("#scroll").wrap("<div id='scrollwrap'></div>");
	 if(jQuery().jPlayer) {
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
		}
	function stopTyping () {
		id = $("#chatId").val();
		$.ajax({
			type: "POST",
			url: "actions/stopTyping.php",
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
			url: "actions/startTyping.php",
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
	function poll () {
		$("#message").removeClass("loading");
		
		var id = $("#chatId").val();
		divCount = $("div","#chat").length;
		pCount = $("p","#chat").length;
		
		$.ajax({
			type: "POST",
			url: "actions/display.php",
			data: "chatId="+id,
			success: function (msg){
				if (msg!="end"){
					$('#chat').html(msg)


					if (divCount != $("div","#chat").length) {
						if(jQuery().jPlayer) {
							$("#received").jPlayer("play");
						}

						$('#scroll').animate({scrollTop: 50000}, 1000);
						$("p.user").hide();
						$("p.rep").hide();
						if ($("#chat p:last").hasClass("rep")) {
							$("#chat p.user:last").fadeIn('500');

						} 
					} else if (pCount != $("p","#chat").length) {
							$("p.user").hide();
							$("p.rep").hide();
							if ($("#chat p:last").hasClass("rep")) {
								$("#chat p.user:last").fadeIn('500');
							}
					} else {
							$("p.user").hide();
							$("p.rep").hide();
								if ($("#chat p:last").hasClass("rep")) {
									$("#chat p.user:last").show(0);
								}
					}	

				}else {
					clearTimeout(window.poller); 
					$("#message").hide();
					$("#convoend").fadeIn();
				}
			}
		});
		

	}
	$.ajax({
		type: "POST",
		url: "actions/init.php",
		data: "",
		success: function(msg){
			
			var res = msg.split("***||***||");
			if (res[0] != "newconvo") {
				$('#chat').html(res[0]);
				$('#chatId').val(res[1]);
				$('#scroll').animate({scrollTop: 50000}, 0);
				typingcheck();
				poll();
				$("p.user").hide();
				if ($("#chat p:last").hasClass("user")) {
					$("#chat p.user:last").fadeIn('500');
				}
				window.polling = true;
				window.poller = setInterval(onlineFail, 30000);
				poll = setInterval(poll, 3000);
				
				onlineFail();
			} 
			
		}
	});
	function onlineFail() {
		var id = $("#chatId").val();
		$.ajax({
			type: "POST",
			url: "actions/setOnline.php",
			data: "chatId="+id,
			success: function(msg){
			}
		});
	}
	$("#form").submit(function () {
		if ($("#message").val() != "") {
			function submit () {
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
						url: "actions/send.php",
						data: "message="+$("#message").val(),
						success: function(msg){
//							$("#sent").each(function(){
//								this.Play();
//							});
							
							var res = msg.split("***||***||");

							$("#chatId").val(res[1]);
							//
							$("#message").val('');
							$("#message").removeClass("loading");
							$("#chat").html(res[0])
							$("p.user").hide();

							window.typing = false;

							$('#scroll').animate({scrollTop: 50000}, 0);
							$("#message").focus();
							if (!window.polling) { 
								window.poll = setInterval(poll, 3000);
								$('#chat').html(res[0]);
								window.polling = true;
								window.poller = setInterval(onlineFail, 30000);
								onlineFail();

								typingcheck();
							}
		//					$("#loader").fadeOut(50);

						}
					});
			}
			if (window.recentlySent) {
				$("#message").addClass("loading");
				
				setTimeout(submit, 2000);
			} else {
				submit();
			}
		
		} else {
			$("#message").focus();
			
		}
		return false;
	});
	$("#message").each(function(){
		this.focus();
		this.setSelectionRange(0,$(this).val().length);
	});
	
});
if (navigator.appVersion.indexOf('Chrome')>0) {
    window.resizeTo(321, 399);
}