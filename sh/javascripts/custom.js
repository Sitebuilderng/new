function showBrands() {
	$.ajax({
	  url: 'brands.php',
	  data: 'action=show',
	  success: function(data) {
		  $("#currentBrands").html(data);
		  $("#brandChoose option:not(.leave)").remove();
		  $("#currentBrands .brand").each(function(){
			  $("#brandChoose").append("<option value='"+$(this).attr("data-id")+"'>"+$(".brandTitleText",$(this)).text()+"</option>");
		  });
		  $("#currentBrands .applyBrandToAll").click(function(){


		      if (confirm("Are you sure you want all websites to show this brand?") == true) {
				  var i = $(this).parents(".brand").attr("data-id");
			  	$.ajax({
			  	  url: 'brands.php',
			  	  data: 'action=applytoall&id='+i,
			  	  success: function(data) {
					  $(".brand_id").val(i);
			  		}
			  	});
		      }

			  return false;
		  });
		  $("#currentBrands .deleteBrand").click(function(){
			 if (confirm("Are you sure you want remove this brand? Any websites using this brand will revert to default branding.")) {
   			  var i = $(this).parents(".brand").attr("data-id");
   			  	$.ajax({
   			  	  url: 'brands.php',
   			  	  data: 'action=delete&id='+i,
   			  	  success: function(data) {
   					  showBrands();
     					  $(".brand_id[value="+i+"]").val("0");
   			  		}
   			  	});
				 }

			  return false;
		  });
		  $("#currentBrands .editBrand").click(function(){
			  $("#showAddBrand").html("Editing: "+$("p",$(this).parents(".brand")).text());
			  $("#addNewBrand input[name=name]").val($("p",$(this).parents(".brand")).text());
  			  $("#addNewBrand input[name=colour]").val($(this).parents(".brand").attr("data-colour"));
			  $("#addNewBrand .submit").val("Save");
			  $("#showAddBrand").addClass("active");
			  $("#addNewBrandWrap").addClass("showing");
			  $("#editingBrandId").remove();
			  $("#addNewBrand").append("<input type='hidden' id='editingBrandId' name='editing' value='"+$(this).parents(".brand").attr("data-id")+"' />")
			  return false;
		  });

		}
	});
}

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}
$(document).ready(function(){
	$("#dnstest").click(function(){
		if (window.confirm("Running the DNS test can take a while.")) { 

		} else {
			return false;
		}

	});
	showBrands();
	function success(res) {
		if (res=="error") {
			error("An upload error occured");
		}
		if (res=="logo_wrong") {
			error("Please check the size of your logo file");
		}
		if (res=="favicon_wrong") {
			error("Please check the size of your favicon file");
		}
		showBrands();
		$("#addNewBrandWrap").removeClass("showing");
		  $("#editingBrandId").remove();
		  $("#showAddBrand").html("Add new brand");
		  $("#addNewBrand input.required").val("");
		  $("#addNewBrand .submit").val("Add Brand");
		  $("#addNewBrand input.required").val("");
	}
	function check() {
		if ($("#addNewBrand input.required").filter(function() { return $(this).val() == ""; }).length) {
			error("Please fill out all the fields");
			return false;
		}
	}
	var options = {
		beforeSubmit: check,
        success:       success
    };

	$("#addNewBrand").ajaxForm(options);

	$("#brands").click(function(){
		$("#brandsEditor").addClass("showing");
		$(".dialogueMask").show();
		setTimeout(function () {
		$(".dialogueMask").addClass("showing");
		}, 10);
		return false;
	});
	$("#showAddBrand").click(function(){
		if ($("#addNewBrandWrap").hasClass("showing")) {
			$(this).removeClass("active");
			$("#addNewBrandWrap").removeClass("showing");
			  $("#editingBrandId").remove();
			  $("#showAddBrand").html("Add new brand");
	  		  $("#addNewBrand input.required").val("");
  			  $("#addNewBrand .submit").val("Add Brand");

		} else{
			$(this).addClass("active");
			$("#addNewBrandWrap").addClass("showing");
		}
		return false;
	});
	if ($("#activateWrapper").attr("data-active")=="false") {
		$("#activateWrapper").addClass("showing");
		$(".dialogueMask").show();
		setTimeout(function () {
		$(".dialogueMask").addClass("showing");
		}, 10);
		$("#activation_code").focus();
	}
	$(".dismissDialogue,.dismissDialogueCorner").click(function(){
		$(".showing").removeClass("showing");
		setTimeout(function () {
		$(".dialogueMask").hide();
		}, 1000);
		return false;
	});
	$("input[name=reset]").change(function(){
		if ($(this).is(":checked")) {
			$("#passwordFieldset").slideUp();
			$("#loginGo").text("Reset password");
		} else {
			$("#passwordFieldset").slideDown();
			$("#loginGo").text("Login");
		}
		$("input[name=username]").focus();
	});
	$("#login input").keypress(function(e){
		if (e.keyCode==13) {
			$(this).parents("form").submit();
		}
	});
	$(".formButton").click(function(){
		$(this).parents("form").submit();
	});
	$("#newsiteTheme").change(function(){
		createCookie('newsitetheme',$(this).val(),365);
	});
	var newsitetheme = readCookie('newsitetheme');
	if (newsitetheme) {
		$("#newsiteTheme").val(newsitetheme);
	}
	$("#addSiteForm").submit(function(){
		if ($("#addSiteInput").val() != "") {

			var extra = "";
			var contin = true;
			if ($("#manualDB").length) {
				extra = "&dbname="+$("#dbname").val()+"&dbhost="+$("#dbhost").val()+"&dbuser="+$("#dbuser").val()+"&dbpass="+$("#dbpass").val();
				if ($("#dbname").val()=="") {
					$("#dbname").css("background-color","#D20A03").focus();
					contin =false;
				}
				if ($("#dbuser").val()=="") {
					$("#dbuser").css("background-color","#D20A03").focus();
					contin =false;
				}
				if ($("#dbpass").val()=="") {
					$("#dbpass").css("background-color","#D20A03").focus();
					contin =false;
				}
			}
			if (contin==true) {
				$("#addnewsite .bpe_savecancel").hide();

				$("#addnewsite .loadingButton").fadeIn();

				$.ajax({
				  url: 'make.php',
				  data: 'url='+$("#addSiteInput").val()+extra+"&theme="+$("#newsiteTheme").val()+"&import_data="+$('#siteToClone').val(),
				  success: function(data) {
					if (data!="") {
						$("#addnewsite .bpe_savecancel").show();
						$("#addnewsite .loadingButton").fadeOut();
						error(data);
					} else {
						window.location="/sh/";
					}

				  }
				});
			}

		} else {
			$("#addSiteInput").css("background-color","#D20A03").focus();
		}
		return false;
	});
	$("#addSite").click(function(){
		$("#addSiteForm").submit();
		return false;
	});
	$(".editUrl").submit(function(){
		$.ajax({
		  url: 'edit.php',
		  data: 'action=rename&oldUrl='+$(".oldUrl",$(this)).val()+"&newUrl="+$(".newUrl",$(this)).val(),
		  success: function(data) {

			if (data!="") {
				error(data);
				return false;
			}
			window.location="/sh/";
		  }
		});
		return false;
	});

	$("#addLogin").submit(function(){
		$("#notmatch,#notstrong").hide();
		if (testPassword($("input[name=password]",$(this)).val()) > 20) {
			if ($("input[name=password]",$(this)).val()==$("input[name=password2]",$(this)).val()) {
				var pwhash = hex_hmac_sha1($("input[name=password]",$(this)).val(),$("#salt").val());
				$("input[name=password]",$(this)).val("");
				$("input[name=password2]",$(this)).val("");
				$.ajax({
				  url: 'createaccount.php',
				  data: 'username='+encodeURIComponent($("#addUsername").val())+"&passwordhash="+pwhash+"&salt="+$("#salt").val()+"&timestamp="+$("#timestamp").val(),
				  success: function(data) {
					window.location="/sh/";
				  }
				});
			} else {
				$("#notmatch").fadeIn();
			}
		} else {
			$("#notstrong").fadeIn();
		}

		return false;
	});
	$("#addAccount").click(function(){
		$("#addLogin").submit();
		return false;
	});

	$("#changePass").submit(function(){

		$("#notmatch,#notstrong,#currentpasswrong").hide();

		if (testPassword($("input[name=password]",$(this)).val()) > 20) {
			if ($("input[name=password]",$(this)).val()==$("input[name=password2]",$(this)).val()) {
				var pwhash = hex_hmac_sha1($("input[name=password]",$(this)).val(),$("input[name=salt]",$(this)).val());

				var loginpwhash = hex_hmac_sha1(hex_hmac_sha1($("input[name=old_password]",$(this)).val(),$("#salt").val()),$("#timestamp").val());

				$("input[name=old_password]",$(this)).val("");
				$("input[name=password]",$(this)).val("");
				$("input[name=password2]",$(this)).val("");
				var $t= $(this);
				$.ajax({
				  url: 'createaccount.php',
				  data: 'oldpasshash='+loginpwhash+'&username='+$("input[name=username]",$t).val()+"&passwordhash="+pwhash+"&salt="+$("input[name=salt]",$t).val()+"&timestamp="+$("input[name=timestamp]",$t).val(),
				  success: function(data) {
				  	if (data=="oldpassincorrect") {
				  		$("#currentpasswrong").fadeIn();
				  	} else {
				  		$(".bpe_add_popup").fadeOut();
						$(".bpe_mask").fadeOut();
				  	}
					//window.location="/setseed-hub/";
				  }
				});
			} else {
				$("#notmatch").fadeIn();
			}
		} else {
			$("#notstrong").fadeIn();
		}

		return false;
	});
	$("#changePassButton").click(function(){
		$("#changePass").submit();
		return false;
	});


	$("#login").submit(function(){
		pwhash = hex_hmac_sha1(hex_hmac_sha1($("input[name=password]",$(this)).val(),$("#salt").val()),$("#timestamp").val());
		$("#hash").val(pwhash);
		$("input[name=password]",$(this)).val("");
	});
	$("#loginButton").click(function(){
		$("#login").submit();
		return false;
	});
	$("#backup").click(function(){
		$t = $(this);
		$(".buttonSuccess",$t).hide();
		$(".loadingButton",$t).show();
		$.ajax({
		  url: 'dump.php',
		  data: 'db='+$(this).attr("href")+"&folder="+$(this).attr("folder"),
		  success: function(data) {
			if (data!="") {
				error(data);
			}
			$(".loadingButton",$t).hide();
			$(".buttonSuccess",$t).show();
		  }
		});
		return false;
	});
	$("#regenLocalhostKeyStep1").click(function(){

		if ($("#regenKeyMore:visible").length) {
			$("#regenKeyMore").slideUp();
		} else {
			$("#regenKeyMore").slideDown();
		}
		return false;
	});
	$("#regenLocalhostKey").click(function(){
		$t = $(this);
		$(".buttonSuccess",$("#regenLocalhostKeyStep1")).hide();
		$(".loadingButton",$("#regenLocalhostKeyStep1")).show();

		$.ajax({
		  url: 'regenkey.php',
		  data: 'db='+$("#backup").attr("href"),
		  success: function(data) {
			$("#apiKey").val(data);
			$(".api_key",$(".site[title="+$(".newUrl").val()+"]")).val(data);
			$("#regenKeyMore").slideUp();
			$(".loadingButton",$("#regenLocalhostKeyStep1")).hide();
			$(".buttonSuccess",$("#regenLocalhostKeyStep1")).show();
		  }
		});
		return false;
	});

	$(".expand a").click(function(){
		if ($(".moreContent",$(this).parents(".site")).css("display")=="none") {
			$(this).html("Hide");
			$(".moreContent",$(this).parents(".site")).show();
		} else {
			$(this).html("Remove&hellip;");
			$(".moreContent",$(this).parents(".site")).hide();
		}

		return false;
	});
	function keepalive () {
		$.ajax({
		  url: 'logincheck.php',
		  data: 'keepalive=true',
		  success: function(data) {

		  }
		});
		setTimeout(keepalive, 50000);
	}
	setTimeout(keepalive, 50000);
	$("input[type=text]:first").focus();
	$("#mask").css("opacity",0.8).css("height",$(document).height()+"px");
	$("#logo").click(function(){
		var top = $(window).height()-$("#bpe_add_popup").height()-380;
		top = top/2;
		top = top-30;
		$("#about").css("top",top+"px").fadeIn();
		return false;
	});
	$("#addNewSite").click(function(){
		if ($("#activateWrapper").attr("data-active")=="false") {
			$("#activateWrapper").addClass("showing");
			$(".dialogueMask").show();
			setTimeout(function () {
			$(".dialogueMask").addClass("showing");
			}, 10);
			$("#activation_code").focus();
			return false;
		}
		$("#addnewsite").css("display","block");

		assign_help();
		$(".bpe_mask").css("height",$(document).height()+"px").css("opacity","0").css("display","block");
		$(".bpe_mask").fadeTo(0,0.4);
		var windowH = $(window).height();
		windowH = windowH/2;
		var topw =$(window).scrollTop()+windowH;
		var pheight = $("#addnewsite").height()/2;
		topw = topw-pheight;

		//$(".bpe_add_popup").css("top",topw+"px");
		$(".bpe_mask,.bpe_add_popup,.bpe_help_popup").click(function(){
			if ($("#error").css("display")=="block") {
				$("#error").fadeOut();
			} else {
				$(".bpe_help_popup").remove();
			}
			return false;
		});


		$("#addSiteInput").focus();
	});
	$("#closeAPI").click(function(){
		$(this).parents(".bpe_add_popup").fadeOut();
		$(".bpe_mask").fadeOut();
		return false;
	});
	$("#regenServerKeyStep1").click(function(){
		if ($("#regenServerKeyMore:visible").length) {
			$("#regenServerKeyMore").slideUp();
		} else {
			$("#regenServerKeyMore").slideDown();
		}

		return false;
	});
	$("#regenServerKey").click(function(){
		$t = $(this);
		$(".buttonSuccess",$("#regenServerKeyStep1")).hide();
		$(".loadingButton",$("#regenServerKeyStep1")).show();

		$.ajax({
		  url: 'regenserverkey.php',
		  success: function(data) {
			$("#serverApiKey").val(data);
			$("#regenServerKeyMore").slideUp();
			$(".loadingButton",$("#regenServerKeyStep1")).hide();
			$(".buttonSuccess",$("#regenServerKeyStep1")).show();
		  }
		});
		return false;
	});
	$("#serverAPI").click(function(){
		$("#viewAPIKey").css("display","block");

		assign_help();
		$(".bpe_mask").css("height",$(document).height()+"px").css("opacity","0").css("display","block");
		$(".bpe_mask").fadeTo(0,0.4);
		var windowH = $(window).height();
		windowH = windowH/2;
		var topw =$(window).scrollTop()+windowH;
		var pheight = $("#viewAPIKey").height()/2;
		topw = topw-pheight;

//		$(".bpe_add_popup").css("top",topw+"px");
		$(".bpe_mask,.bpe_add_popup,.bpe_help_popup").click(function(){
			if ($("#error").css("display")=="block") {
				$("#error").fadeOut();
			} else {
				$(".bpe_help_popup").remove();
			}
			return false;
		});

		return false;
	});
	$("#settings").click(function(){
		$("#changePass").css("display","block");

		assign_help();
		$(".bpe_mask").css("height",$(document).height()+"px").css("opacity","0").css("display","block");
		$(".bpe_mask").fadeTo(0,0.4);
		var top = $(window).height()-$("#bpe_add_popup").height()-380;
		top = top/2;
		top = top-30;
		//$(".bpe_add_popup").css("top",$(document).scrollTop()+top+"px");
		$(".bpe_mask,.bpe_add_popup,.bpe_help_popup").click(function(){
			if ($("#error").css("display")=="block") {
				$("#error").fadeOut();
			} else {
				$(".bpe_help_popup").remove();
			}
			return false;
		});


		$("#addSiteInput").focus();
	});
	$(".importSite").click(function(){
		$("#import").css("display","block").css("height","auto");
		$("#importInner").html($(".popup",$(this)).html());
		setTimeout(function() {
			var windowH = $(window).height();
			windowH = windowH/2;
			var topw =$(window).scrollTop()+windowH;
			var pheight = $("#import").height()/2;
			topw = topw-pheight-60;

			assign_help();
			$(".bpe_mask").css("height",$(document).height()+"px").css("opacity","0").css("display","block");
			$(".bpe_mask").fadeTo(0,0.4);

			//$("#import").css("top",topw+"px");
			$(".newUrl",$("#import")).focus();
			$("#import #close").unbind().click(function(){
				$("#mask").fadeOut();
				$("#import").fadeOut();
				return false;
			});
			if ($(".manualimport",$(this).parent().parent()).hasClass("show")) {
				$(".manualimport",$(this).parent().parent()).show();
			}
			if ($(".download",$(this).parent().parent()).hasClass("hide")) {
				$(".download",$(this).parent().parent()).hide();
			}
			$("#import .bpe_cancel").click(function(){
				$(this).parents(".bpe_add_popup").fadeOut();
				$("body").removeClass("noscroll");
				$(".bpe_mask").fadeOut();
			});

			$(".mancheckbox").change(function(){
				if (!$(this).is(':checked')) {
					$(".manualimport",$(this).parent().parent()).show();
				} else {
					$(".manualimport",$(this).parent().parent()).hide();
				}
			});
			$("input[name=dbsource]").change(function(){
				if ($(this).val()=="import") {
					$(".importsql",$(this).parents("#import")).show();
					$(".useexisting",$(this).parents("#import")).hide();
					$(".manualimport:not(.show)",$(this).parent().parent()).hide();
				} else {
					$(".manualimport",$(this).parent().parent()).show();
					$(".importsql",$(this).parents("#import")).hide();
					$(".useexisting",$(this).parents("#import")).show();
				}
			});
			$("#import .importNow").click(function(){
				var e = false;

				if ( $(".manualimport:visible").length ) {

					if ( $(".dbname",$(this).parents("#import")).val() == "" ) {
						$(".dbname",$(this).parents("#import")).addClass("error");
						$(".dbname",$(this).parents("#import")).keyup(function(){
							$(this).removeClass("error");
						});
						e = true;
					}
					if ( $(".dbuser",$(this).parents("#import")).val() == "" ) {
						$(".dbuser",$(this).parents("#import")).addClass("error");
						$(".dbuser",$(this).parents("#import")).keyup(function(){
							$(this).removeClass("error");
						});
						e = true;
					}
					if ( $(".dbpass",$(this).parents("#import")).val() == "" ) {
						$(".dbpass",$(this).parents("#import")).addClass("error");
						$(".dbpass",$(this).parents("#import")).keyup(function(){
							$(this).removeClass("error");
						});
						e = true;
					}
					var extra = "&dbuser="+$(".dbuser",$(this).parents("#import")).val()+"&dbpass="+$(".dbpass",$(this).parents("#import")).val()+"&dbname="+$(".dbname",$(this).parents("#import")).val()+"&dbhost="+$(".dbhost",$(this).parents("#import")).val();
				} else {
					var extra = "";
				}
				if ($(".newUrl",$(this).parents("#import")).val() == "") {
					$(".newUrl",$(this).parents("#import")).addClass("error");
					$(".newUrl",$(this).parents("#import")).keyup(function(){
						$(this).removeClass("error");
					});
					e = true;
				}
				if (e==true) {
					return false;
				}
				var loader = $(".loadingButton",$(this).parents("#import"));
				loader.show();
				var buttons = $(".bpe_savecancel",$(this).parents("#import"));
				buttons.hide();
				$.ajax({
				  url: 'make.php',
				  data: 'url='+$(".newUrl",$(this).parents("#import")).val()+"&import="+$(this).attr("href")+"&destination="+$("input[name=dbsource]:checked",$(this).parents("#import")).val()+extra,
				  success: function(data) {
					if (data!="") {
						error(data);
						loader.hide();
						buttons.show();
					} else {
						window.location="/sh/";
					}
				  }
				});
				return false;
			});


		}, 10);
	});

	$(".site:not(.fake,.importSite) .site-settings").click(function(){
		var $site = $(this).parents(".site");
		$(".buttonSuccess",$("#regenLocalhostKeyStep1")).hide();
		$("#popupPreview").attr("src",$(".previewImage",$site).attr("src"));
		$("#lightbox .tip").hide();
		$.ajax({
		  url: 'preview.php',
		  data: 'folder='+$(".folderVal",$site).val()+'&def=',
		  success: function(data) {
		  	if (data=="def") {
				$("#lightbox .tip").fadeIn();
			}
		}
		});
		if ($(".storageVal",$site).val()=="") {
			$.ajax({
			  url: 'getstorage.php',
			  data: 'key='+$(".folderVal",$site).val(),
			  success: function(data) {
				  $(".storageVal",$site).val(data);
				  $(".storage").html($(".storageVal",$site).val()+" MB");
			}
			});
		}

		
		$("#url").html($site.attr("title"));
		$(".oldUrl,.newUrl").val($site.attr("title"));
		$(".newUrlText").html($site.attr("title"));
		if ($(".is_live",$site).val()=="1") {
			$("#loginCMS").attr("href","/sh/sso.php?url="+$site.attr("title"));
		} else {
			$("#loginCMS").attr("href","/sh/sso.php?url="+$site.attr("title")+"."+$("#server").text());			
		}
		
		$(".storage").html($(".storageVal",$site).val()+" MB");
		$("#ui_colour").val($(".ui_colour",$site).val());
		$("#limit_storage").val($(".limit_storage",$site).val());
		$("#limit_pages").val($(".limit_pages",$site).val());
		$("#limit_blogs").val($(".limit_blogs",$site).val());
		$("#limit_staff").val($(".limit_staff",$site).val());
		$("#limit_products").val($(".limit_products",$site).val());

		$("#disabled_frontend_redirect").val($(".disabled_frontend_redirect",$site).val());
		$("#disabled_backend_redirect").val($(".disabled_backend_redirect",$site).val());

		$("#custom_link_1_text").val($(".custom_link_1_text",$site).val());
		$("#custom_link_1_link").val($(".custom_link_1_link",$site).val());
		$("#custom_link_2_text").val($(".custom_link_2_text",$site).val());
		$("#custom_link_2_link").val($(".custom_link_2_link",$site).val());

		$("#license_status").val( $(".license_status",$site).val() );
		$("#site_id").val( $(".site_id",$site).val() );
		

		$("#accessibility_mode").val($(".accessibility_mode",$site).val());
		
		$("#brandChoose option[selected=selected]").removeAttr("selected");
		$("#legacyBranding").remove();
		if ($("#license_status").val()=="1" && $(".brand_id",$site).val()=="0") {
			$("#brandChoose").prepend('<option class="leave" id="legacyBranding" value="0" selected="selected">Branding From Legacy License</option>');
		}  else {
			$("#brandChoose").val($(".brand_id",$site).val());
		}
		if ($(".api_key",$site).val()=="") {
			$("#siteAPIKey").hide();
		} else {
			$("#apiKey").val($(".api_key",$site).val());
			$("#siteAPIKey").show();
		}

		if ($(".disabled_backend",$site).val()=="1") {
			$("#disabled_backend").attr("checked","checked");
		} else {
			$("#disabled_backend").removeAttr("checked");
		}
		if ($(".disabled_frontend",$site).val()=="1") {
			$("#disabled_frontend").attr("checked","checked");
		} else {
			$("#disabled_frontend").removeAttr("checked");
		}

		if ($(".disable_videos",$site).val()=="0") {
			$("#disable_videos").attr("checked","checked");
		} else {
			$("#disable_videos").removeAttr("checked");
		}
		if ($(".disable_galleries",$site).val()=="0") {
			$("#disable_galleries").attr("checked","checked");
		} else {
			$("#disable_galleries").removeAttr("checked");
		}
		if ($(".disable_forms",$site).val()=="0") {
			$("#disable_forms").attr("checked","checked");
		} else {
			$("#disable_forms").removeAttr("checked");
		}
		if ($(".disable_products",$site).val()=="0") {
			$("#disable_products").attr("checked","checked");
		} else {
			$("#disable_products").removeAttr("checked");
		}
		if ($(".disable_calendars",$site).val()=="0") {
			$("#disable_calendars").attr("checked","checked");
		} else {
			$("#disable_calendars").removeAttr("checked");
		}
		if ($(".disable_snippets",$site).val()=="0") {
			$("#disable_snippets").attr("checked","checked");
		} else {
			$("#disable_snippets").removeAttr("checked");
		}
		if ($(".disable_livechat",$site).val()=="0") {
			$("#disable_livechat").attr("checked","checked");
		} else {
			$("#disable_livechat").removeAttr("checked");
		}

		if ($(".disable_embed_codes",$site).val()=="0") {
			$("#disable_embed_codes").attr("checked","checked");
		} else {
			$("#disable_embed_codes").removeAttr("checked");
		}
		if ($(".disable_mailing_list",$site).val()=="0") {
			$("#disable_mailing_list").attr("checked","checked");
		} else {
			$("#disable_mailing_list").removeAttr("checked");
		}
		if ($(".disable_blog",$site).val()=="0") {
			$("#disable_blog").attr("checked","checked");
		} else {
			$("#disable_blog").removeAttr("checked");
		}
		if ($(".disable_staff",$site).val()=="0") {
			$("#disable_staff").attr("checked","checked");
		} else {
			$("#disable_staff").removeAttr("checked");
		}
		if ($(".disable_bookings",$site).val()=="0") {
			$("#disable_bookings").attr("checked","checked");
		} else {
			$("#disable_bookings").removeAttr("checked");
		}
		if ($(".disable_design",$site).val()=="0") {
			$("#disable_design").attr("checked","checked");
		} else {
			$("#disable_design").removeAttr("checked");
		}
		
		if ($(".force_ssl",$site).val()=="1") {
			$("#force_ssl").attr("checked","checked");
		} else {
			$("#force_ssl").removeAttr("checked");
		}
		if ($(".is_live",$site).val()=="1") {
			$("#is_live").attr("checked","checked");
		} else {
			$("#is_live").removeAttr("checked");
		}
		
		
		
		if ($(".disable_help",$site).val()=="0") {
			$("#disable_help").attr("checked","checked");
		} else {
			$("#disable_help").removeAttr("checked");
		}
		
		if ($(".omit_fourth",$site).val()=="1") {
			$("#omit_fourth").attr("checked","checked");
		} else {
			$("#omit_fourth").removeAttr("checked");
		}
		if ($(".disable_cache",$site).val()=="1") {
			$("#disable_cache").attr("checked","checked");
		} else {
			$("#disable_cache").removeAttr("checked");
		}

		checkMode();



		$(".newURLHref").attr("href","http://"+$site.attr("title")+"."+$("#server").html());
		$(".invKey").html($(".folderVal",$site).val());

			$(".clientname").val($(".client_name",$site).val());
			$(".clientphone").val($(".client_phone",$site).val());
			$(".notes").val($(".client_notes",$site).val());
			

				
		$(".foldername").html($("#folderPath").val()+"/sites/<strong>"+$(".folderVal",$site).val())+"</strong>";
		$(".user",$("#lightbox")).html($(".userVal",$site).val());
		$(".db",$("#lightbox")).html($(".dbVal",$site).val());
		$("#lang option[value="+$(".langVal",$site).val()+"]",$("#lightbox")).attr("selected","selected");
		$("#lightbox .theme").html($(".themes",$site).html());
		$("#lightbox #adminLang option[value=\""+$(".admin_lang",$site).val()+"\"]").attr("selected","selected");
		$("#backup").attr("href",$(".dbVal",$site).val());
		$("#backup").attr("folder",$(".folderVal",$site).val());
		$("#removeLink").attr("href","edit.php?url="+$site.attr("title")+"&action=remove");
		$("#lightbox").show();
		$("body").addClass("noscroll");
		var windowH = $(window).height();
		windowH = windowH/2;
		var topw =$(window).scrollTop()+20;

		//$("#lightbox").css("top",topw+"px");
		assign_help();	$(".bpe_mask").css("height",$(document).height()+"px").css("opacity","0").css("display","block");
		$(".bpe_mask").fadeTo(0,0.4);
		function submitEdit () {
			var themeN = $("#lightbox .themesel").val();
			var adminLang = $("#lightbox #adminLang").val();
			
			var newurl = $("#lightbox .newUrl").val();
			var oldUrl = $("#lightbox .oldUrl").val();
			var title = $("#url").html();
			var lang = $("#lang").val();
			var ui_colour = $("#ui_colour").val();

			var limit_storage = $("#limit_storage").val();
			var limit_pages = $("#limit_pages").val();
			var limit_blogs = $("#limit_blogs").val();
			var limit_staff = $("#limit_staff").val();
			var limit_products = $("#limit_products").val();
			var disabled_frontend_redirect = $("#disabled_frontend_redirect").val();
			var disabled_backend_redirect = $("#disabled_backend_redirect").val();
			var custom_link_1_text = $("#custom_link_1_text").val();
			var custom_link_1_link = $("#custom_link_1_link").val();
			var custom_link_2_text = $("#custom_link_2_text").val();
			var custom_link_2_link = $("#custom_link_2_link").val();
			var accessibility_mode = $("#accessibility_mode").val();			
			var client_name = encodeURIComponent($("#lightbox .clientname").val());

			var client_phone = encodeURIComponent($("#lightbox .clientphone").val());
			
			var client_notes = encodeURIComponent(($("#lightbox .notes").val()));
			
			var brand = $("#brandChoose").val();
			var site_id = $("#site_id").val();
			if ($("#disabled_frontend").is(":checked")) {
				var disabled_frontend="1";
			} else {
				var disabled_frontend="0";
			}
			if ($("#disabled_backend").is(":checked")) {
				var disabled_backend="1";
			} else {
				var disabled_backend="0";
			}
			if ($("#disable_videos").is(":checked")) {
				var disable_videos="0";
			} else {
				var disable_videos="1";
			}
			if ($("#disable_galleries").is(":checked")) {
				var disable_galleries="0";
			} else {
				var disable_galleries="1";
			}
			if ($("#disable_forms").is(":checked")) {
				var disable_forms="0";
			} else {
				var disable_forms="1";
			}
			if ($("#disable_products").is(":checked")) {
				var disable_products="0";
			} else {
				var disable_products="1";
			}
			if ($("#disable_calendars").is(":checked")) {
				var disable_calendars="0";
			} else {
				var disable_calendars="1";
			}
			if ($("#disable_snippets").is(":checked")) {
				var disable_snippets="0";
			} else {
				var disable_snippets="1";
			}
			if ($("#disable_livechat").is(":checked")) {
				var disable_livechat="0";
			} else {
				var disable_livechat="1";
			}
			if ($("#disable_embed_codes").is(":checked")) {
				var disable_embed_codes="0";
			} else {
				var disable_embed_codes="1";
			}
			if ($("#disable_mailing_list").is(":checked")) {
				var disable_mailing_list="0";
			} else {
				var disable_mailing_list="1";
			}
			if ($("#disable_blog").is(":checked")) {
				var disable_blog="0";
			} else {
				var disable_blog="1";
			}
			if ($("#disable_staff").is(":checked")) {
				var disable_staff="0";
			} else {
				var disable_staff="1";
			}
			if ($("#disable_bookings").is(":checked")) {
				var disable_bookings="0";
			} else {
				var disable_bookings="1";
			}
			if ($("#disable_design").is(":checked")) {
				var disable_design="0";
			} else {
				var disable_design="1";
			}
			if ($("#force_ssl").is(":checked")) {
				var force_ssl="1";
			} else {
				var force_ssl="0";
			}
			if ($("#is_live").is(":checked")) {
				var is_live="1";
			} else {
				var is_live="0";
			}
			
			if ($("#disable_help").is(":checked")) {
				var disable_help="0";
			} else {
				var disable_help="1";
			}
			if ($("#omit_fourth").is(":checked")) {
				var omit_fourth="1";
			} else {
				var omit_fourth="0";
			}

			if ($("#disable_cache").is(":checked")) {
				var disable_cache="1";
			} else {
				var disable_cache="0";
			}

			$.ajax({
			  url: 'edit.php',
			  type: 'post',
			  data: 'action=edit&oldUrl='+oldUrl+"&theme="+themeN+"&newUrl="+newurl+"&lang="+lang+"&limit_storage="+limit_storage+"&limit_pages="+limit_pages+"&limit_blogs="+limit_blogs+"&limit_staff="+limit_staff+"&limit_products="+limit_products+"&disabled_frontend="+disabled_frontend+"&disabled_frontend_redirect="+disabled_frontend_redirect+"&disabled_backend="+disabled_backend
			  +"&disabled_backend_redirect="+disabled_backend_redirect
			  +"&ui_colour="+ui_colour
			  +"&disable_videos="+disable_videos
			  +"&disable_galleries="+disable_galleries
			  +"&disable_forms="+disable_forms
			  +"&disable_products="+disable_products
			  +"&disable_calendars="+disable_calendars
			  +"&disable_snippets="+disable_snippets
			  +"&disable_livechat="+disable_livechat
			  +"&disable_embed_codes="+disable_embed_codes
			  +"&disable_mailing_list="+disable_mailing_list
			  +"&disable_blog="+disable_blog
  			  +"&disable_staff="+disable_staff
  			  +"&disable_bookings="+disable_bookings
  			  +"&disable_design="+disable_design
  			  +"&force_ssl="+force_ssl
  			  +"&is_live="+is_live
  			  +"&disable_help="+disable_help
			  +"&omit_fourth="+omit_fourth
			  +"&disable_cache="+disable_cache
			  +"&custom_link_1_text="+custom_link_1_text
			  +"&custom_link_1_link="+custom_link_1_link
			  +"&custom_link_2_text="+custom_link_2_text
			  +"&custom_link_2_link="+custom_link_2_link
			  +"&accessibility_mode="+accessibility_mode
			  +"&client_name="+client_name
			  +"&client_phone="+client_phone
			  +"&client_notes="+client_notes
			  +"&brand="+brand
			  +"&admin_lang="+adminLang
			  +"&siteid="+site_id
			  ,
			  success: function(data) {
	  			if (data!="") {
	  				error(data);
	  				return false;
	  			}
					window.location="/sh/";
				}
			});
		}
		$("#lightbox .editUrl").submit(function(){
			submitEdit();
			return false;
		});
		$("#editSite").click(function(){
			submitEdit();

			return false;
		});
	});
	$("#proSeller input").change(function(){
		checkMode();
	});
	$("#proSeller input").keyup(function(){
		checkMode();
	});
	$("#removeSite").click(function(){
		if ($(".removeSiteConfirm:visible",$("#lightbox")).length) {
			$(".removeSiteConfirm",$("#lightbox")).fadeOut();
		} else {
			$(".removeSiteConfirm",$("#lightbox")).fadeIn();
		}

		return false;
	});
	$("#close,#mask").click(function(){
		$("#mask").fadeOut();
		$("body").removeClass("noscroll");
		$("#lightbox").fadeOut();

		$(".moreContent",$("#lightbox")).hide();
		$("#addnewsite").fadeOut();
		$(".loadingButton,.buttonSuccess").hide();
		$("#import").fadeOut();
		return false;
	});
	$(document).keyup(function(e){
		if (e.keyCode == 27) {
			$(".bpe_mask").fadeOut();
			$("body").removeClass("noscroll");
			$("#lightbox").fadeOut();
			$(".moreContent",$("#lightbox")).hide();
			$("#addnewsite").fadeOut();
			$(".loadingButton,.buttonSuccess").hide();
			$("#import").fadeOut();

		 }
	});
	$(".bpe_cancel").click(function(){
		$(this).parents(".bpe_add_popup").fadeOut();
		$("body").removeClass("noscroll");
		$(".bpe_mask").fadeOut();
		return false;
	});
	$(document).click(function(){
		if ($("#about").css("display")=="block") {
			$("#about").fadeOut();
		} else {
			if ($("#error").css("display")=="block") {
				$("#error").fadeOut();
			} else {
				$(".bpe_help_popup").remove();
			}

		}
	});

});
function checkMode() {
	if ($("#license_status").val()=="1") {
		$(".paidMode,.freeMode").hide();
		return false;
	}
	if (
		($("#limit_pages").val()==1 || $("#limit_pages").val()==2 || $("#limit_pages").val()==3)
		&& ($("#limit_blogs").val()==1 || $("#limit_blogs").val()==2 || $("#limit_blogs").val()==3)
		&& $("#limit_staff").val()==1
		&& $("#limit_products").val()==1
		&& !$("#disable_mailing_list").is(":checked")
		&& !$("#disable_livechat").is(":checked")
		&& !$("#disable_calendars").is(":checked")
		&& !$("#disable_forms").is(":checked")
		&& !$("#disable_galleries").is(":checked")
		&& !$("#disable_bookings").is(":checked")
	) {
		$(".paidMode").hide();
		$(".freeMode").show();
	} else {
		$(".paidMode").show();
		$(".freeMode").hide();
	}
}
function assign_help () {
	$(".bpe_help").unbind();
	$(".bpe_help").hoverIntent(function(){
		var left = $(this).offset().left-455;
		var otop = $(this).offset().top-50;
		$("body").append("<div class='bpe_help_popup' style='top:"+otop+"px;left:"+left+"px'><div class='bpe_help_popup_inner'>"+$(this).attr("alt").replace(/\|\|\s/g ,"<div style='height:10px;'></div>")+"</div></div>");

	},function(){

	});

}
function error (msg) {
	$("#overlay").fadeOut(200);
	$("#error").html(msg);
	$("#error").fadeIn(200);
}
