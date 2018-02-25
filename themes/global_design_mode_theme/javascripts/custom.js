
/*
waitForImages plugin

Copyright (c) 2014 Alex Dickson

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

*/
/*! waitForImages jQuery Plugin 2016-01-04 */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){var b="waitForImages";a.waitForImages={hasImageProperties:["backgroundImage","listStyleImage","borderImage","borderCornerImage","cursor"],hasImageAttributes:["srcset"]},a.expr[":"]["has-src"]=function(b){return a(b).is('img[src][src!=""]')},a.expr[":"].uncached=function(b){return a(b).is(":has-src")?!b.complete:!1},a.fn.waitForImages=function(){var c,d,e,f=0,g=0,h=a.Deferred();if(a.isPlainObject(arguments[0])?(e=arguments[0].waitForAll,d=arguments[0].each,c=arguments[0].finished):1===arguments.length&&"boolean"===a.type(arguments[0])?e=arguments[0]:(c=arguments[0],d=arguments[1],e=arguments[2]),c=c||a.noop,d=d||a.noop,e=!!e,!a.isFunction(c)||!a.isFunction(d))throw new TypeError("An invalid callback was supplied.");return this.each(function(){var i=a(this),j=[],k=a.waitForImages.hasImageProperties||[],l=a.waitForImages.hasImageAttributes||[],m=/url\(\s*(['"]?)(.*?)\1\s*\)/g;e?i.find("*").addBack().each(function(){var b=a(this);b.is("img:has-src")&&!b.is("[srcset]")&&j.push({src:b.attr("src"),element:b[0]}),a.each(k,function(a,c){var d,e=b.css(c);if(!e)return!0;for(;d=m.exec(e);)j.push({src:d[2],element:b[0]})}),a.each(l,function(a,c){var d=b.attr(c);return d?void j.push({src:b.attr("src"),srcset:b.attr("srcset"),element:b[0]}):!0})}):i.find("img:has-src").each(function(){j.push({src:this.src,element:this})}),f=j.length,g=0,0===f&&(c.call(i[0]),h.resolveWith(i[0])),a.each(j,function(e,j){var k=new Image,l="load."+b+" error."+b;a(k).one(l,function m(b){var e=[g,f,"load"==b.type];return g++,d.apply(j.element,e),h.notifyWith(j.element,e),a(this).off(l,m),g==f?(c.call(i[0]),h.resolveWith(i[0]),!1):void 0}),j.srcset&&(k.srcset=j.srcset),k.src=j.src})}),h.promise()}});

/*
End waitForImages plugin
*/

/*!
 * jQuery UI Touch Punch 0.2.3
 *
 * Copyright 2011–2014, Dave Furfero
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * Depends:
 *  jquery.ui.widget.js
 *  jquery.ui.mouse.js
 */
!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);



/*

	Starting Blocks Theme Custom jQuery File

	======
	Contents:
	------
	#Popup Video
	#Expand Collapse Widgets
	#Popdown widgets
	#Basic init setup
	#'Default' Gallery Style (Lightbox with thumbs) - including support for prodcuts based on this gallery style
	#'Montage' Gallery Style - including support for prodcuts based on this gallery style
	#'Slideshow' Gallery Styles (single and multi) - including support for prodcuts based on these gallery styles
	#'Gallery with thumbs' Gallery Style - including support for prodcuts based on these gallery styles
	#'Carousel Slide' Widget
	#'Live Shopping Basket' Widget
	# Livechat Status Widget
	# Searchable Subpage Index
	# Searchable Preview Based Subpage Index
	#Responsive video helper for jPlayer
	#Responsive video helper for JWPlayer
	#Responsive Calendar
	#Full width banner
	#Blog Loop
	#Countdown


*/
/* Popup Message */

$(document).ready(function(){
	
	if($('#popupMessageBox').length && !$("body").hasClass("accessible-mode")) {
		var hash = hex_sha1($('#popupMessageBox').html()+"");

		if (!readCookie('seenPopupMessage'+hash)) {
			$('body').append('<div id="popupMessageBoxPopup" title="Important Information"><div id="popupMessageBoxPopupCenter"><div id="popupMessageBoxPopupBox"><div id="closePopupBox"></div><div>'+$('#popupMessageBox').html()+'</div></div></div></div>');
			
		}
	}
	$("body").on("click","#closePopupBox",function(){
		var hash = hex_sha1($('#popupMessageBox').html()+"");
		
		createCookie('seenPopupMessage'+hash,"true",0);
		
		$("#popupMessageBoxPopup").fadeOut();
	});
});
/* Filter subpage index
*/
$(document).ready(function(){
	$("#subPageIndexProducts").each(function(){
		var attributes = {};
		$(".productMeta",$(this)).each(function(){
			var $product = $(this).parent();

			var metaString = $(this).text().split(",");

			for (var i = metaString.length - 1; i >= 0; i--){
				var metaName = metaString[i].split(":")[0].trim();
				var metaVal = metaString[i].split(":")[1].trim().split("||");
				

				if (metaName in attributes) {

					for (var y = 0; y < metaVal.length; y++) {
						$product.addClass("attr_"+metaName.replace(/[^a-zA-Z0-9]+/g,'')+"_"+metaVal[y].replace(/[^a-zA-Z0-9]+/g,''));
						if ($.inArray(metaVal[y], attributes[metaName])===-1) {
							attributes[metaName].push(metaVal[y]);
						}
					}
				

				} else {

					attributes[metaName] = new Array();		
					for (var y = 0; y < metaVal.length; y++) {
						$product.addClass("attr_"+metaName.replace(/[^a-zA-Z0-9]+/g,'')+"_"+metaVal[y].replace(/[^a-zA-Z0-9]+/g,''));
						attributes[metaName].push(metaVal[y]);
					}

				}
			}
		
			
		});
		
		for (var property in attributes) {

			var filter = "<div><strong>"+property+"</strong><br/><select name='"+property.replace(/[^a-zA-Z0-9]+/g,'')+"' class='filterMenu'><option value=''>All</option>";

			for (var i=0; i < attributes[property].length; i++) {
				filter += "<option value='"+attributes[property][i].replace(/[^a-zA-Z0-9]+/g,'')+"'>"+attributes[property][i]+"</option>";
			};
			
			filter += "</select></div>";
			
			$("#subPageIndexProducts #filterBox").prepend(filter);
			
		}
		$(".filterMenu").change(function(){
			var needsClasses = "";
			$(".subPageProducts").hide();
			$(".filterMenu").each(function(){
				if ($(this).val()!="") {
					needsClasses += ".attr_"+$(this).attr("name")+"_"+$(this).val();
				}				
			});
			
			if (needsClasses=="") {
				$(".subPageProducts").show();
			} else {
				$(needsClasses).show();				
			}

		});
	});
	setTimeout(function () {
		if (window.location.href){
			if (window.location.hash.indexOf("#filter")===0) {
				var preselect = window.location.hash.split("#filter-");
				var string = preselect[1].split(":");
				var option = string[0];
				var value = string[1]
				if (option && value) {
					$(".filterMenu[name=\""+option+"\"]").val(value).trigger("change");
					$("#filterBox .filterRadio[name=\""+option+"\"][value=\""+value+"\"]").prop("checked",true);
				
				}
			}
		}
	}, 590);

});
/*
	Floating Sub Menu
*/	
	function checkFloatingSub() {
		if ($("#dmt-floating-sub-menu").length==0) {
			return false;
		}
		var $el = $("#dmt-floating-sub-menu:not(.fixed)");
		$el.removeClass('mobile');
		if ($("#dmt-floating-sub-menu:not(.fixed) a").length > 2 && $(window).width()<480) {
			$el.addClass('mobile');
		}
		if ($("#dmt-floating-sub-menu:not(.fixed) a").length > 3 && $(window).width()<540) {
			$el.addClass('mobile');
		}
		if ($("#dmt-floating-sub-menu:not(.fixed) a").length > 4 && $(window).width()<600) {
			$el.addClass('mobile');
		}
		if ($("#dmt-floating-sub-menu:not(.fixed) a").length > 5 && $(window).width()<700) {
			$el.addClass('mobile');
		}
		if ($("#dmt-floating-sub-menu:not(.fixed) a").length > 6 && $(window).width()<750) {
			$el.addClass('mobile');
		}
		if ($("#dmt-floating-sub-menu:not(.fixed) a").length > 7 && $(window).width()<800) {
			$el.addClass('mobile');
		}
		if ($el.offset().top + $el.outerHeight() < window.pageYOffset) {
			if (!$("#dmt-floating-sub-menu.fixed").length) {
				var l = $el.offset().left;
				$("body").append($el.clone(true).addClass("fixed").css("left",l+"px"));
				if ($el.hasClass('mobile')) {
					$("#submenu").remove();
					$el.prepend("<div id='submenu'></div>")
					$("#dmt-floating-sub-menu.fixed a").remove();
					$("#dmt-floating-sub-menu.fixed").append("<div class='mobile-menu'><p><a href=\"#submenu\">Menu</a></p></div>");
				} else {
					$("#dmt-floating-sub-menu.fixed .dmt-floating-sub-menu-link").each(function(){
						if (typeof $(this).data("move-dist")!="undefined") {
							$(this).css("top","-"+$(this).data("move-dist")+'px').css("margin-bottom","-"+$(this).data("move-dist")+'px');
						}
					});
					$("#dmt-floating-sub-menu.fixed .dmt-floating-sub-menu-link").hover(function(){
						$(this).css("top","0px");
					},function(){
						$(this).css("top","-"+$(this).data("move-dist")+'px');
					});
					
				}
				
				$('a[href*="#"]:not([href="#"],[href="#navSearch"])',$('#dmt-floating-sub-menu.fixed')).unbind('click').click(function() {

				    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				      if (target.length) {

				       
							if (typeof $(this).data("move-dist") != "undefined") {
								 $('html, body').animate({
						          scrollTop: target.offset().top - $(this).outerHeight() + $(this).data("move-dist")
								  }, 1500);
							} else {
								 $('html, body').animate({
						          scrollTop: target.offset().top - $(this).outerHeight()
								 }, 1500);
							}

				       
				        return false;
				      }
				    }
				  });
				  
				setTimeout(function () {
				$("#dmt-floating-sub-menu.fixed").addClass("visible");				
				}, 10);
			}
		
		} 
		if ($el.offset().top  > window.pageYOffset -$el.outerHeight()) {
			$("#dmt-floating-sub-menu.fixed").removeClass("visible");
			setTimeout(function () {
				$("#dmt-floating-sub-menu.fixed").remove();
			}, 500);
			
		}
		

	}	
	$(document).scroll(function(){
		if ($("#dmt-floating-sub-menu:not(.fixed)").length) {
			checkFloatingSub();
		}
	});
	$(document).ready(function(){
		var $el = $("#dmt-floating-sub-menu:not(.fixed)");
		$el.css("width",$el.width());
	});
	$(window).resize(function(){
		$("#dmt-floating-sub-menu.fixed").remove();
		
		var $el = $("#dmt-floating-sub-menu:not(.fixed)");
		$el.removeAttr('style');
		$el.css("width",$el.outerWidth());
		checkFloatingSub();
		addFloatingSubHeights();
	});
	function addFloatingSubHeights() {
		var $el = $("#dmt-floating-sub-menu:not(.fixed)");
		$(".dmt-floating-sub-menu-link",$el).each(function(){
			if ($(".bpe_image",$(this)).length) {

				var h = $(".bpe_image",$(this)).outerHeight();

				$(this).data('move-dist',h);
			}
		});
	}
	$(window).load(function(){
		addFloatingSubHeights();
		
	});
/*
	Product images
*/
	$(document).ready(function(){
		if ($("#main .bpe_image").length) {
			var pagepic = $("#main .bpe_image:first").find("img").attr('src');			
		} else {
			var pagepic=false;
		}

		
		$(".addToBasketForm").each(function(){
			if (pagepic) {
				if (!$("input[name=pic_url]",$(this)).length) {
					$(this).append('<input type="hidden" name="pic_url" value="'+pagepic+'"/>');
				}				
			}
			if (!$("input[name=url_str]",$(this)).length) {
				$(this).append('<input type="hidden" name="url_str" value="'+window.location.pathname+'"/>');
			}
		});
		$(".addToBasketLink").each(function(){
			if (pagepic) {
				if ($(this).attr('href').indexOf("pic_url")==-1) {
					$(this).attr('href',$(this).attr('href')+'&pic_url='+encodeURIComponent(pagepic));
				}
				
			}
			if ($(this).attr('href').indexOf("url_str")==-1) {
				$(this).attr('href',$(this).attr('href')+'&url_str='+encodeURIComponent(window.location.pathname));
			}
		});
		$(".column_row").each(function(){
			if ($("input[name=pic_url]",$(this)).length==1 && $("img",$(this)).length) {
				$("input[name=pic_url]",$(this)).val($("img",$(this)).first().attr('src'));
			}
			if ($(".addToBasketLink",$(this)).length==1 && $("img",$(this)).length) {
				var urlparts = $(".addToBasketLink",$(this)).attr('href').split("?");

				var query_parts = urlparts[1].split('&');
				var newquery="";
				for (var i = 0; i < query_parts.length; i++) {
					if (newquery!="") {
						newquery+="&";
					}
					if (query_parts[i].indexOf("pic_url=")===0) {
						var imgurl = $("img",$(this)).first().attr('src').split("?");
						newquery+="pic_url="+imgurl[0];
					} else {
						newquery+=query_parts[i];
					}

				}

				$(".addToBasketLink",$(this)).attr('href',urlparts[0]+"?"+newquery);
			}
			
		});
		$(".column").each(function(){
			if ($("input[name=pic_url]",$(this)).length==1 && $("img",$(this)).length) {
				$("input[name=pic_url]",$(this)).val($("img",$(this)).first().attr('src'));
			}
			if ($(".addToBasketLink",$(this)).length==1 && $("img",$(this)).length) {
				var urlparts = $(".addToBasketLink",$(this)).attr('href').split("?");

				var query_parts = urlparts[1].split('&');
				var newquery="";
				for (var i = 0; i < query_parts.length; i++) {
					if (newquery!="") {
						newquery+="&";
					}
					if (query_parts[i].indexOf("pic_url=")===0) {
						var imgurl = $("img",$(this)).first().attr('src').split("?");
						newquery+="pic_url="+imgurl[0];
					} else {
						newquery+=query_parts[i];
					}

				}

				$(".addToBasketLink",$(this)).attr('href',urlparts[0]+"?"+newquery);
			}
			
		});
	});
/*
	Icon text
*/
	function fixIconLinks(c) {
		$("."+c).each(function(){		
			if ($(">a",$(this)).length) {
				if ($(">a",$(this)).text()==$(this).text()) {
					$(">a",$(this)).addClass(c);
					$(this).removeClass(c);
				}
			}
		});
	}
	$(document).ready(function(){
		var icons = new Array();
		icons.push("Icon_Phone");
		icons.push("Icon_Tick");
		icons.push("Icon_Info");
		icons.push("Icon_Question");
		icons.push("Icon_Alert");
		icons.push("Icon_Email");
		icons.push("Icon_Home");
		icons.push("Icon_Livechat");
		
		for (var i = 0; i < icons.length; i++) {
			fixIconLinks(icons[i]);
		}
	});
/*
	Hover Image
*/
	$(document).ready(function(){
		$(".Hover_Image_Button").each(function(){
			$("a",$(this)).append("<div class='cms_hover_image_hover'><img src='"+$(this).data('hover-src')+"'/></div>");
		});
	});
/*

	#Popup Video

*/
	function showMPPopup(src,desc) {
		$("#mp_lightbox_outer").removeClass("ytvidmp");
		
		$("#mp_lightbox_inner,#mp_lightbox_outer_outer").removeAttr("style");
		if (src.substr(src.length - 4).toLowerCase()==".png"
			|| src.substr(src.length - 4).toLowerCase()==".jpg"
			|| src.substr(src.length - 5).toLowerCase()==".jpeg"
			|| src.substr(src.length - 4).toLowerCase()==".gif"
			|| src.substr(src.length - 5).toLowerCase()==".apng"
		) {
			
			var img = new Image();
			img.onload = function() {
				$("#mp_lightbox_outer").fadeIn();
				
				var r = this.height/this.width*100;
				$("#mp_lightbox_inner").css("padding-bottom",r+"%");
				$("#mp_lighbox_content").data("ratio",r);
				$("#mp_lightbox_outer_outer").data("maxw",this.width).css("width",this.width+"px");
				if ($("#mp_lighbox_content").height()+100>$(window).height()) {
					var nw = ($(window).height()-100) / (r/100);
					$("#mp_lightbox_outer_outer").css("width",nw+"px");
				}
				
				$("#mp_lighbox_content").html("<img src='"+src+"' style=\"width:100%\"/>");
				if (desc!="") {
				$("#mp_lighbox_content").append('<div class="mpPopupDescOuter"><div class="mpPopupDesc">'+desc+'</div></div>');					
				}

			}
			img.src = src;
		}
		if (src.substr(src.length - 4).toLowerCase()==".mp4") {
			
			$("#mp_lightbox_outer").fadeIn();
			
			$("#mp_lightbox_inner").css("padding-bottom","56.25%");
			$("#mp_lightbox_outer_outer").css("width","1800px");
			if ($("#mp_lighbox_content").height()+100>$(window).height()) {
				var nw = ($(window).height()-100) / (56.25/100);
				$("#mp_lightbox_outer_outer").css("width",nw+"px");
			}
			
			
			var width = $("#mp_lighbox_content").width();
			var height = $("#mp_lighbox_content").height();
			var video = src;
			$("#mp_lighbox_content").html("<div id=\"videoMPPopup\" class='jplayerInit' data-poster='/graphics/play.jpg' data-vid='"+video+"'>"+playerHTML+"</div>");
			makeVideo("videoMPPopup",width,height,"/graphics/play.jpg",video,true,false);			
		}

		if (src.substr(0,23)=="https://www.youtube.com" || src.substr(0,22)=="http://www.youtube.com") {
			src = src.replace("/watch?v=","/embed/");
			src = src.split("/embed/");
			src = src[1];
			$("#mp_lightbox_outer").fadeIn().addClass("ytvidmp");
			
			$("#mp_lightbox_inner").css("padding-bottom","56.25%");
			$("#mp_lightbox_outer_outer").css("width","1800px");
			if ($("#mp_lighbox_content").height()+100>$(window).height()) {
				var nw = ($(window).height()-100) / (56.25/100);
				$("#mp_lightbox_outer_outer").css("width",nw+"px");
			}
			
			
			var width = $("#mp_lighbox_content").width();
			var height = $("#mp_lighbox_content").height();
			$("#mp_lighbox_content").html("<div id='mppopupytplayer'></div>");
			
			mpytplayer = new YT.Player('mppopupytplayer', {
			          height: "100%",
			          width: "100%",
			          videoId: src,
					playerVars: {autoplay:1,rel:0}
			        });
			
		}

	}
	$(window).resize(function(){
		if ($("#mp_lightbox_outer:visible").length && $("#mp_lighbox_content img").length) {
			
			var r =	$("#mp_lighbox_content").data("ratio");
			if ($("#mp_lighbox_content").height()+100>$(window).height()) {
				var nw = ($(window).height()-100) / (r/100);
				$("#mp_lightbox_outer_outer").css("width",nw+"px");
			} else {
				$("#mp_lightbox_outer_outer").css("width",$("#mp_lightbox_outer_outer").data("maxw")+'px');
			}
		}
		if ($("#mp_lightbox_outer:visible").length && $("#mp_lightbox_outer").hasClass("ytvidmp")) {
			
			$("#mp_lightbox_inner").css("padding-bottom","56.25%");
			$("#mp_lightbox_outer_outer").data("maxw",this.width).css("width",this.width+"px");
			if ($("#mp_lighbox_content").height()+100>$(window).height()) {
				var nw = ($(window).height()-100) / (56.25/100);
				$("#mp_lightbox_outer_outer").css("width",nw+"px");
			} else {
				$("#mp_lightbox_outer_outer").css("width","1800px");
			}
		}
	});
	var mpplayer_tag = document.createElement('script');
	mpplayer_tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(mpplayer_tag, firstScriptTag);
	var mpytplayer;
	$(document).ready(function(){
		$("#showCouponCode").click(function(){
			$("#couponForm").slideDown();
			return false;
		});
		if (!$('body').hasClass("accessible-mode")){
			$(".Popup_Link a").click(function(){
				var desc = "";
				if (typeof $(this).find("img").attr("alt") != "undefined" && $(this).find("img").attr("alt")!="") {
					desc = $(this).find("img").attr("alt");
				}
				showMPPopup($(this).attr("href"),desc);
				return false;
			});
			$("#closeMP").click(function(){
				$("#mp_lightbox_outer").fadeOut();
				if ($("#videoMPPopup .jplayer").hasClass("playing")) {
					$("#videoMPPopup .jplayer").jPlayer("stop");
				}
				if (mpytplayer) {
				mpytplayer.stopVideo();				
				}
				return false;

			});
		}
	});
/*

	#Expand Collapse Widgets

*/
	$(document).ready(function(){
		if (!$('body').hasClass("accessible-mode")){
			$(".expand-box-content").slideUp(300,function(){
						moduleHeights();
					});
			$(".expand-box-title").click(function(){
				if ($(this).parent().hasClass("showing")) {
					$(this).parent().removeClass("showing").find(".expand-box-content").slideUp(300,function(){
						moduleHeights();
					});
				} else {
					$(".showing .expand-box-content").slideUp(295).parent().removeClass("showing");
					$(this).parent().addClass("showing");
					$(".expand-box-content",$(this).parent()).slideDown(300,function(){
						moduleHeights();
					});				
				}
				return false;
			});

		}
	});
/*

	#Popdown widgets

*/
	function hideSearchPopdown() {
		$("#search-form-popdown").removeClass("visible");
		setTimeout(function () {
			$("#search-form-popdown").removeClass("animate").removeAttr("style");
		}, 300);
		$(".display-popdown-widget a.active").removeClass("active");

	}
	$(document).ready(function(){
		$("html").click(function(e){
			if (e.target.nodeName.toLowerCase()!="input") {
			hideSearchPopdown();				
			}

		});
		$("body").on("click",".display-popdown-widget a",function(e){
			if ($(this).hasClass("active")) {
				$(this).removeClass("active");
				hideSearchPopdown(e);
			} else {
				$(this).addClass("active");
				var $pd = $("#"+$(this).data("target"));

				var lh = $(this).outerWidth() / 2;
				var ol = $(this).offset().left + lh;
				var t = $(this).offset().top + $(this).outerHeight() + 3;
				var pl = 160;
				ol = ol - pl;
				$(".tri",$pd).css("margin-left","-6px");
				if (ol + 320 > $(window).width()-20) {
					var diff = ol + 320 - $(window).width() + 10;
					ol = ol - diff;
					diff = diff-6;
					$(".tri",$pd).css("margin-left",diff+"px");
				}
				$pd.css("left",ol+"px").css("top",t+"px");
				setTimeout(function () {
					$pd.addClass("animate");
					$pd.addClass("visible");
				}, 1);
				$("input",$pd).focus();
			}

			return false;
		});
	});
/*

	#Basic init setup

*/

	var scrolling = false;
	var scrollingTimer;
	var scroll = window.requestAnimationFrame ||
						 window.webkitRequestAnimationFrame ||
						 window.mozRequestAnimationFrame ||
						 window.msRequestAnimationFrame ||
						 window.oRequestAnimationFrame ||
						 function(callback){ window.setTimeout(callback, 1000/60) };

		 if(navigator.userAgent.indexOf('AppleWebKit') != -1){
				var isWebKit = true;
		 } else {
				var isWebKit = false;
		 }



	function parallaxScroll(timestamp) {
		$("*[data-scroll-decay]").each(function(){
			//var st = $(document).scrollTop();
			var st = window.pageYOffset;
			var ot = $(this).offset().top;
			var th = $(this).outerHeight();
			var wh = $(window).height();

			var decay = 0.5;
			if (typeof $(this).data("scroll-decay") != 'undefined') {
				decay = $(this).data("scroll-decay");
			}
			if (st<0) {
				st=0;
			}
			
			if (isWebKit) {
				$("body").addClass("supports-pos-fixed");
				decay = 1-decay;
				move = ot-st;
				move = move*decay;

			} else {
				move = ot-st;
				move = -move*decay;
			}

				$("> .backstretch img:last",$(this))
				.css("-moz-transform","translate3d(0,"+move+"px,0)")
				.css("-webkit-transform","translate3d(0,"+move+"px,0)")
				.css("-o-transform","translate3d(0,"+move+"px,0)")
				.css("transform","translate3d(0,"+move+"px,0)");


		});
	 	scroll(parallaxScroll);

	}
	
	$(document).scroll(function(){
		scrolling = true;
		clearTimeout(scrollingTimer);
		scrollingTimer = setTimeout(function () {
			scrolling = false;
		}, 100);

		$("#backToTop").show().css("opacity","0");
		if ($(document).scrollTop()>200) {
			$("#backToTop").css("opacity","1");
		} else {
			$("#backToTop").css("opacity","0");
		}

	});
	$(window).load(function(){
		
		setRecentBlogWidths();
		if ($("#logo img").width()<$("#logo").width()) {
			$("#logo").css("width",$("#logo img").width()+"px");
		}
		imageMarginHelper();
		flexiBreak();
		backstretches();

		setTimeout(function () {
			$(window).trigger("resize");
			$("body").addClass("loaded");
		}, 50);

	});
	$(window).resize(function(){
		if (!scrolling){
			var st = $(document).scrollTop();
			$("#mobile-menu-auto").addClass("hidden");
			imageMarginHelper();
			hideSearchPopdown();
			flexiBreak();
			setRecentBlogWidths();
			$("body,html").scrollTop(st);
		}
		if ($('body').hasClass("match-parallax-zoom")) {
			backstretches();
		}
	});
	var hidingPagePreview;
	$(document).ready(function(){
		$("select[name=chb_sh]").change(function(){
			$(this).parent().submit();
		});
		$("input[name=gateway]").change(function(){
			$(this).parents("form").submit();
		});
		
		$("#header .row,#footer .row").each(function(){
			$(this).waitForImages(function(){
				flexiBreak();
				var $t = $(this);
				setTimeout(function () {
				$t.addClass('jsLoaded');					
				}, 100);
			});
		});
		$(".nav li").mouseleave(function(){
			clearTimeout(hidingPagePreview);

			hidingPagePreview = setTimeout(function () {
				$(".hover-preview").removeClass('hover-preview');
				$(".page-preview").fadeOut(100);				
			}, 50);

		});
		$(".nav li").mouseover(function(){
			clearTimeout(hidingPagePreview);
			if ($(this).hasClass('show-preview')) {
				$(this).addClass('hover-preview');
				if ($(".page-preview:visible").length) {
					$(".page-preview").hide();
					$("#page-preview-id-"+$(this).data('page-id')).show();				
				} else {
					$("#page-preview-id-"+$(this).data('page-id')).fadeIn(100);									
				}

			} else {
				$(".hover-preview").removeClass('hover-preview');
				$(".nav li.hover-preview").removeClass("hover-preview");
				$(".page-preview").fadeOut(100);				
			}
		});

		$(".page-preview").mouseleave(function(){
			$(".hover-preview").removeClass('hover-preview');
			$(this).fadeOut(100);
		});

		$(".page-preview").mouseover(function(){
			clearTimeout(hidingPagePreview);
		});
		
		$(".Smaller").wrapInner("<span class=\"smallerWrap\"></span>")
		if (!$('body').hasClass("accessible-mode")){
			$('a[href*="#"]:not([href="#"],[href="#navSearch"])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {

					  if ($('#dmt-floating-sub-menu:not(.fixed)').length) {
						  if (typeof  $('#dmt-floating-sub-menu:not(.fixed) .dmt-floating-sub-menu-link:first').data('move-dist') !='undefined'){
								var extra = $('#dmt-floating-sub-menu:not(.fixed) .dmt-floating-sub-menu-link:first').outerHeight() - $('#dmt-floating-sub-menu:not(.fixed) .dmt-floating-sub-menu-link:first').data('move-dist');
						  } else {
						  		var extra = $('#dmt-floating-sub-menu:not(.fixed) .dmt-floating-sub-menu-link:first').outerHeight();					  	
						  }

					  } else {
						 var extra = 0;
					  }
				  
			        $('html, body').animate({
			          scrollTop: target.offset().top - extra
			        }, 1500,function(){
					  if ($('#dmt-floating-sub-menu:not(.fixed)').length) {
						  checkFloatingSub();
					  }
										  
			        });
			        return false;
			      }
			    }
			  });
		}

		parallaxScroll();
		$("body").addClass("js");
		$("body").addClass("prepping");

		flexiBreak();

		$("body").removeClass("prepping");

		$(".column").each(function(){
			if ($(this).text().trim()==""&&!$(this).children().length) {
				$(this).addClass("empty-column");
			}
		});

		$(".mobile-menu a").click(function(){
			var i = $(this).parents(".flexibreak-small").attr("id");
			var $orig = $("*[data-flexibreak-small=\""+i+"\"]");
			if (!$(this).parents(".mobile-menu").hasClass("style") || $(this).parents(".mobile-menu").hasClass("style-append")) {
				if (!$("#mobile-menu-auto").length) {
					$(this).parents(".row").after('<section class="row mobile-menu-row"><ul id="mobile-menu-auto" class="hidden"></ul></section>');
					var $target = $("#mobile-menu-auto");
					$(".nav > ul",$orig).children(":not(#nav-logo,#nav-search)").each(function(){
						$target.append($(this).clone());
					});
					if ($(".nav > ul #nav-search.nav-search-first",$orig).length) {
						$target.prepend($("#search-form-popdown form").clone());
					}
					if ($(".nav > ul #nav-search.nav-search-last",$orig).length) {
						$target.append($("#search-form-popdown form").clone());						
					}
					$target.find("> li > a").removeAttr("style");
				} else {
					var $target = $("#mobile-menu-auto");
				}
				setTimeout(function () {
					if ($target.hasClass("hidden")) {
						$target.removeClass("hidden");
					} else {
						$target.addClass("hidden");
					}
				}, 0);
			}
			if ($(this).parents(".mobile-menu").hasClass("style-reveal-left")||$(this).parents(".mobile-menu").hasClass("style-reveal-right")) {
				var revealDirection = ($(this).parents(".mobile-menu").hasClass("style-reveal-left")?"left":"right");
				if (!$("#mobile-menu-behind").length) {
					$("body").addClass("mobile-menu-position-"+revealDirection);
					$("body").wrapInner('<div id="mobile-menu-page-wrap"></div>');
					$("#mobile-menu-page-wrap").click(function(){
						$("body").removeClass("mobile-menu-revealing-left mobile-menu-revealing-right");
						setTimeout(function () {
							$("body").removeClass("mobile-menu-animating-"+revealDirection);
						}, 700);
					});
					checkMobileMenuHeights();
					$("body").prepend('<div id="mobile-menu-behind"><ul></ul></section>');
					var $target = $("#mobile-menu-behind ul");
					$(".nav > ul",$orig).children(":not(#nav-logo,#nav-search)").each(function(){
						$target.append($(this).clone());
					});
					if ($(".nav > ul #nav-search.nav-search-first",$orig).length) {
						$target.prepend($("#search-form-popdown form").clone());
					}
					if ($(".nav > ul #nav-search.nav-search-last",$orig).length) {
						$target.append($("#search-form-popdown form").clone());
					}
					
					$target.find("> li > a").removeAttr("style");
				}
				setTimeout(function () {

					$("body").addClass("mobile-menu-animating-"+revealDirection+" mobile-menu-revealing-"+revealDirection);

				}, 10);
			}
			return false;
		});

		$("*[data-scroll-decay]").each(function(){
			$(this).addClass("parallax");
		});
		// Fix for image margins when floated before headings
		$("div.Right_Image,div.Left_Image").each(function(){
			if ($(this).prev().length && $(this).next().length) {
				if ($(this).prev()[0].tagName.toLowerCase()=="p"&&$(this).next()[0].tagName.toLowerCase()=="h1") {
					$(this).css("margin-top","30px");
				}
				if (
					$(this).prev()[0].tagName.toLowerCase()=="p"&&
					(
						$(this).next()[0].tagName.toLowerCase()=="h2"
						||$(this).next()[0].tagName.toLowerCase()=="h3"
						||$(this).next()[0].tagName.toLowerCase()=="h4"
					)
				) {
					$(this).css("margin-top","18px");
				}
			}

		});
		// Small bit of code to enable 'warning' class to be added to stock level based on 'Warning stock level' theme variable.
		$(".separateOptionStock").change(function(){
			if (parseInt($("option:selected",$(this)).attr("data-stock"))<parseInt($(".stockAndPrice",$(this).parent()).attr("data-warning-threshold"))) {
				$(".stockAndPrice .stock",$(this).parent()).addClass("warning");
			} else {
				$(".stockAndPrice .stock",$(this).parent()).removeClass("warning");
			}
		});
		imageMarginHelper();

		$(".submit_form a").click(function(){
			$(this).parents("form").submit();
			return false;
		});
		$(".bpe_image").each(function(){
			if (typeof $("img",$(this)).attr("alt") != 'undefined') {
				if (typeof $("img",$(this)).attr("title") == 'undefined') {
					$("img",$(this)).attr("title",$("img",$(this)).attr("alt"));
				}
			}
		});
		$(".Circular.bpe_image").wrapInner('<span class="circularwrap"></span>');
		$(".Caption,.Heavy_Border_Caption,.Light_Border_Caption").each(function(){
			if (typeof $("img",$(this)).attr("alt") != 'undefined') {
				var text = $("img",$(this)).attr("alt").split("||");
				var newString = "";
				for (var i=0; i < text.length; i++) {
					if (i==0) {
						newString = "<strong>"+text[i]+"</strong>";
					} else {
						newString = newString+"<br/>"+text[i];
					}
				};
				$(this).addClass("clearfix");
				if ($("a",$(this)).length) {
					$("a",$(this)).wrapInner("<div class='captionWrap'></div>");
				} else {
					$(this).wrapInner("<div class='captionWrap'></div>");
				}
				$(".captionWrap",$(this)).append('<span class="caption">'+newString+'</span>');
			}
		});
		$("body").addClass("js");

		$(".focusSwapWrap input[type=text]").focus(function(){
			$(this).parent('.focusSwapWrap').addClass("focus");
		});
		$(".focusSwapWrap input[type=text]").blur(function(){
			if ($(this).val().replace(/ /g,'')=="") {
				$(this).val("");
				$(this).parent('.focusSwapWrap').removeClass("focus");
			}
		});
		$( '#nav li:has(ul)' ).doubleTapToGo();
		$("#updateQuantitiesP").click(function(){
			$("#quantityForm").submit();
			return false;
		});


	});

	function backstretches() {

		$("*[data-backgrounds]").each(function(){
			var duration = 4000;
			var fade = 1000;
			var opacity = 1;
			var colour = "transparent";
			var align = "center";
			if (typeof $(this).data("background-align") != 'undefined') {
				align = $(this).data("background-align");
			}			
			if (typeof $(this).data("background-color") != 'undefined') {
				colour = $(this).data("background-color");
			}
			if (typeof $(this).data("background-opacity") != 'undefined') {
				opacity = $(this).data("background-opacity");
			}
			if (typeof $(this).data("background-duration") != 'undefined') {
				duration = $(this).data("background-duration");
			}
			if (typeof $(this).data("background-fade") != 'undefined') {
				fade = $(this).data("background-fade");
			}
			if ($(this).data('parallax-combined')) {
				$(".combined-parallax-bg-wrap",$(this)).remove();
				var c = 9;

				for (var i = 0; i < $(this).data("backgrounds").length; i++) {
					
					$(this).append("<div class='combined-parallax-bg-wrap' data-scroll-decay='0."+c+"'></div>")
					$(this).find(".combined-parallax-bg-wrap:last").backstretch($(this).data("backgrounds")[i], {duration: duration, fade: fade, parallax: true,align:align});
					
					c--;

				}

			} else {
				
				if (typeof $(this).data("scroll-decay") != "undefined") {
					if ($(this).data("background-panzoom")==1) { 
						$(this).backstretch($(this).data("backgrounds"), {duration: duration, fade: fade, parallax: true, panzoom: true,align:align});
					} else {
						$(this).backstretch($(this).data("backgrounds"), {duration: duration, fade: fade, parallax: true,align:align});					
					}

				} else {
					if ($(this).data("background-panzoom")==1) { 
						$(this).backstretch($(this).data("backgrounds"), {duration: duration, fade: fade, panzoom: true,align:align});					
					} else {
						$(this).backstretch($(this).data("backgrounds"), {duration: duration, fade: fade,align:align});
					}				

				}
				if ($(this).data("background-panzoom")==1) {
					$(this).addClass('panzoom');
				}
				$(".backstretch",$(this)).css("opacity",opacity);
			}

			$(this).css("background-color",colour);
		});
	}
	function moduleHeights () {

		$(".widget-banner-window-height").each(function(){
			var wh = $(window).height();
		
			$('.banner-feature',$(this)).css('min-height',wh+"px");
		});
		$(".vertical-align .column").css("padding-top","0px");
		$(".vertical-align").each(function(){
			var tallest = 0;
			$(".column",$(this)).each(function(){
				if ($(this).height()>tallest) {
					tallest = $(this).height();
				}
			});
			$(".column",$(this)).each(function(){
				if ($(this).height()<tallest) {
					var pt = tallest - $(this).height();
					pt = pt / 2;
					$(this).css('padding-top',pt+'px');
				}
			});
			
		});
		$(".row:visible:not(.mobile-menu-row)").each(function(){
			// calculate row height
			var rowhl = 0;
			var rowhr = 0;
			var subrowh=0;
			var firstrow=true;
			var wrapperspace = 0;
			if ($("> *:not(.module)",$(this)).length) {
				wrapperspace =
				parseFloat($("> *:not(.module)",$(this)).css("padding-top"))
				+ parseFloat($("> *:not(.module)",$(this)).css("margin-top"))
				+ parseFloat($("> *:not(.module)",$(this)).css("border-top-width"))
				+ parseFloat($("> *:not(.module)",$(this)).css("padding-bottom"))
				+ parseFloat($("> *:not(.module)",$(this)).css("margin-bottom"))
				+ parseFloat($("> *:not(.module)",$(this)).css("border-bottom-width"))
				;
				rowhl = wrapperspace;
			}
			$(".module",$(this)).each(function(){
				if ($(this).outerHeight(true)>rowhl) {
					rowhl = $(this).outerHeight(true);
				}
			});
			rowhl = rowhl+subrowh;

			$(".align-left:not(.valign),.align-:not(.valign)",$(this)).each(function(){
				if ($(this).hasClass("clear-left") || firstrow) {
					firstrow = false;
					subrowh = subrowh+$(this).outerHeight(true);

				} else {
					if ($(this).outerHeight(true)>subrowh) {
						subrowh=$(this).outerHeight(true);
					}
				}
			});
			if (subrowh>rowhl) {
				rowhl = subrowh;
			}
			subrowh=0;
			firstrow=true;
			$(".align-right:not(.valign)",$(this)).each(function(){

				if ($(this).hasClass("clear-right") || firstrow) {
					firstrow=false
					subrowh = subrowh+$(this).outerHeight(true);
				} else {
					if ($(this).outerHeight(true)>subrowh) {
						subrowh=$(this).outerHeight(true);
					}
				}

				rowhr = rowhr+subrowh;

			});

			subrowh=0;
			firstrow=true;
			$(".align-center",$(this)).each(function(){
				if (!$(this).next().length&&!$(this).prev().length) {
					subrowh = $(this).outerHeight(true);
				}
				rowhr = rowhr+subrowh;
				if ($(this).outerHeight(true)>rowhr) {
					rowhr=$(this).outerHeight(true);
				}

			});


			$(".align-justify",$(this)).each(function(){

				if (!$(this).hasClass("clear-right")) {
					if ($(this).prev().hasClass("align-right")) {
						if ($(this).prev().hasClass("clear-right")) {
							var oldrow = $(this).prev().outerHeight(true);
						} else {
							var oldrow = 0;
							$(this).prevUntil(".clear-right",".align-right").each(function(){
								if ($(this).outerHeight(true)>oldrow) {
									oldrow = $(this).outerHeight(true);
								}
							});
						}
						if ($(this).outerHeight(true) > oldrow) {
							rowhr = rowhr-oldrow;
							rowhr = rowhr+$(this).outerHeight(true);
						}
					}
					if (!$(this).next().length&&!$(this).prev().length) {
						rowhr = rowhr+$(this).outerHeight(true);
					}
				}


				if (!$(this).hasClass("clear-left")) {
					if ($(this).prev().hasClass("align-left")) {
						if ($(this).prev().hasClass("clear-left")) {
							var oldrow = $(this).prev().outerHeight(true);
						} else {
							var oldrow = 0;
							$(this).prevUntil(".clear-left",".align-left").each(function(){
								if ($(this).outerHeight(true)>oldrow) {
									oldrow = $(this).outerHeight(true);
								}
							});
						}
						if ($(this).outerHeight(true) > oldrow) {
							rowhl = rowhl-oldrow;
							rowhl = rowhl+$(this).outerHeight(true);
						}
					}
				}


			});


			var wh = 0;
			$(".width",$(this)).each(function(){
				if ($(this).hasClass("width-valign-middle")||$(this).hasClass("width-valign-bottom")) {
					if ($(this).find("> div").outerHeight(true)>wh) {
						wh=$(this).find("> div").outerHeight(true);
					}

				} else {
					if ($(this).outerHeight(true)>wh) {
						wh=$(this).outerHeight(true);
					}

				}
			});
			$(".width",$(this)).css("height",wh+"px");



			if (rowhl>rowhr) {
				var r = rowhl;
			} else {
				var r = rowhr;
			}

			if (wh > r) {
				r = wh;
			}

			$(this).css("height",r+"px");				


			if (typeof $(this).data("min-height")!='undefined') {
				$(this).css('height','auto');
				
				if ($(this).data("min-height")=="window") {
					var wh = $(window).height();
				} else {
					var wh = parseFloat($(this).data("min-height"));
					if ($(this).data("scale-prop")) {
						var ratio = 1000 / wh;
						wh = $(window).width() / ratio;
					}
				}

				var p = wh / 2;
				var pt = p - r/2;
				var pb = p - r/2;
				var deduct = parseFloat($(this).parent(".container").css("padding-top")) + parseFloat($(this).parent(".container").css("border-top-width")) + parseFloat($(this).css("margin-top"));

				pt = pt - deduct;
				pb = pb - deduct;
				if (pt>0&&pb>0) {
					//if (pb>r) {
						$(this).css("padding-top",pt+"px").css("padding-bottom",pb+"px");
					//} else {
					//	$(this).css("padding-top","0px").css("padding-bottom","0px");
					//}

				} else {
					$(this).css("padding-top","0px").css("padding-bottom","0px");
				}
			}

			$(".width-valign-middle").each(function(){
				var t = $(this).find("> div,> ul").height() / 2;
				$(this).find("> *").css("margin-bottom","-"+t+'px');
			});

		});
		
		
	}
	function setFixedHeader() {
		if ($("body").hasClass("with-fixed-header")) { 
			if ($("#all_headers_bg").length) {
				var $header = $("#all_headers_bg");
			} else {
				var $header = $("#header");				
			}
		
			$("body").css("padding-top","0px");
			$header.css({position:"relative"});
			var targeth = $header.height()*1.2;
			if ($(window).height()>targeth) {
				$header.css({top:"0px",left:"0px",right:"0px",position:"fixed"});
				toscroll = 1;
				if (!$("body").hasClass("skip-padding")) {	
			
					$("#header .container.hide-in-fixed").each(function(){
						$(this).addClass("no-animate");
						$(this).css("max-height","2000px");
						$(this).css("max-height",$(this).outerHeight()+"px");
						$(this).removeClass("no-animate");
						toscroll = toscroll + $(this).outerHeight();
					});
					$("#header .container:not(.hide-in-fixed)").each(function(){
						if ($(".logo-module.with-fixed-logo-version",$(this)).length) {
							toscroll = toscroll + $(this).outerHeight()/2;					
						}
					});
					var headerHeight = $header.outerHeight();
				
						$("body").css("padding-top",headerHeight+"px");
				
				}
			}
		}
		if ($("body").hasClass("header-no-height")) {
			if ($("#all_headers_bg").length) {
				var $header = $("#all_headers_bg");
			} else {
				var $header = $("#header");				
			}
			var headerHeight = $("#header").outerHeight();
			$header.css("margin-bottom","-"+headerHeight+"px");
		}
	}
	var toscroll = 1;
	function fixedHeaderScroll() {
		if ($("#all_headers_bg").length) {
			var $header = $("#all_headers_bg");
		} else {
			var $header = $("#header");				
		}
	
		var targeth = $header.height()*1.2;
					
		if ($("body").hasClass("with-fixed-header") && $(window).height()>targeth) {
			var t = $(document).scrollTop();
			if (t > toscroll) {
				$("body").addClass("showing-fixed-header");
				setTimeout(function () {
					$(".backstretch").each(function(){
						var instance = $(this).parent().data("backstretch");
						instance.resize();
					});
				}, 650);
				$(".logo-module.with-fixed-logo-version").each(function(){
					$("img",$(this)).attr("src",$(this).data("logo-fixed-img"));
				});
			} else {
				$("body").removeClass("showing-fixed-header");
				setTimeout(function () {
					$(".backstretch").each(function(){
						var instance = $(this).parent().data("backstretch");
						instance.resize();
					});
				}, 650);
				$(".logo-module.with-fixed-logo-version").each(function(){
					$("img",$(this)).attr("src",$(this).data("logo-normal-img"));
				});
			}
			if ($(".logo-module.with-fixed-logo-version").length) {
				moduleHeights();
			}
		};
	}
	function checkMobileMenuHeights() {
		if ($("#mobile-menu-page-wrap").length) {
			if ($("#mobile-menu-page-wrap").height()<$(window).height()) {
				$("#mobile-menu-page-wrap").css("min-height",$(window).height()+"px").css("padding-top",$("body").css("padding-top"));
			}
			if ($("#mobile-menu-behind").height()<$(window).height()) {
				$("#mobile-menu-behind").css("min-height",$(window).height()+"px").css("padding-top",$("body").css("padding-top"));
			}
		}
	}
	function modules() {

		$(".align-center:visible:not(.width)").each(function(){
			var $t = $(this);
			var l = $t.css("left");
			var r = $t.css("right");
			$t.css({opacity:0,float:"left",width:"auto",right:"auto",left:"auto"});
			var w = $t.outerWidth() + 1;
			$t.css({width:w+"px",float:"none",opacity:1,left:l,right:r});
		});
		$(".valign-middle:not(.width,.align-center)").each(function(){
			var t = $(this).height() / 2;
			$(this).css("margin-bottom","-"+t+'px');
		});
		$(".align-center.valign-middle.nav").each(function(){
			var t = $(this).find("li:first").height() / 2;
			$(this).find("li:not(#nav-logo)").css("margin-top","-"+t+'px');
		});

		$(".row:visible").each(function(){

			var $row = $(this);
			$row.css("height","auto");
			$(".width",$(this)).css("height","auto");

			// Loop through all valign-bottom align-right clear-right items and adjust the bottom position so they stack.
			var offset =0
			var $els = $($(".valign-bottom.clear-right",$(this)).get().reverse());
			$els.each(function(){
				$(this).css("bottom",offset+"px");
				offset=offset+$(this).outerHeight(true);
			});
			if ($els.last().hasClass("valign-bottom")) {
				$els.last().prevUntil(":not(.align-right,.align-justify),.clear-right",".valign-bottom.align-right").css("bottom",offset+"px");
			}

			// Loop through all valign-bottom align-left clear-left items and adjust the bottom position so they stack.
			var offset =0
			var $els = $($(".valign-bottom.clear-left",$(this)).get().reverse());
			$els.each(function(){
				$(this).css("bottom",offset+"px");
				offset=offset+$(this).outerHeight(true);
			});
			if ($els.last().prev().hasClass("valign-bottom")) {
				$els.last().prevUntil(":not(.align-left,.align-justify),.clear-left",".valign-bottom.align-left").css("bottom",offset+"px");
			}

			// Loop through all valign-top align-right clear-right items and adjust the top position so they stack.
		var offset =0
		var $els = $($(".valign-top.clear-right",$(this)).get());
		$els.each(function(){
			$(this).css("top",offset+"px");
			offset=offset+$(this).outerHeight(true);
		});
		if ($els.last().hasClass("valign-top")) {
			$els.last().prevUntil(":not(.align-right,.align-justify),.clear-right",".valign-top.align-right").css("top",offset+"px");
		}

		// Loop through all valign-top align-left clear-left items and adjust the top position so they stack.
		var offset =0
		var $els = $($(".valign-top.clear-left",$(this)).get());
		$els.each(function(){
			$(this).css("top",offset+"px");
			offset=offset+$(this).outerHeight(true);
		});
		if ($els.last().prev().hasClass("valign-top")) {
			$els.last().prevUntil(":not(.align-left,.align-justify),.clear-left",".valign-top.align-left").css("top",offset+"px");
		}




			// Go through valign-top align-right items and adjust right position so they sit on the same row
			var widths = parseFloat($(".valign-top.align-right",$(this)).css("right"));
			$(".valign-top.align-right",$(this)).each(function(){
				widths = widths+$(this).outerWidth(true);
				if (!$(this).next().hasClass("clear-right") && $(this).next(".valign-top.align-right").length) {
					$(this).next().css("right",widths+"px");
				}

			});

			// Go through valign-middle align-right items and adjust right position so they sit on the same row
			var widths = parseFloat($(".valign-middle.align-right",$(this)).css("right"));
			$(".valign-middle.align-right",$(this)).each(function(){
				widths = widths+$(this).outerWidth(true);
				if (!$(this).next().hasClass("clear-right") && $(this).next(".valign-middle.align-right").length) {
					$(this).next().css("right",widths+"px");
				}

			});

			// Go through valign-bottom align-right items and adjust right position so they sit on the same row
			var widths = parseFloat($(".valign-bottom.align-right",$(this)).css("right"));
			$(".valign-bottom.align-right",$(this)).each(function(){
				widths = widths+$(this).outerWidth(true);
				if (!$(this).next().hasClass("clear-right") && $(this).next(".valign-bottom.align-right").length) {
					$(this).next().css("right",widths+"px");
				}

			});

			// Go through valign-bottom align-left items and adjust right position so they sit on the same row
			var widths = parseFloat($(".valign-bottom.align-left",$(this)).css("left"));
			$(".valign-bottom.align-left",$(this)).each(function(){
				widths = widths+$(this).outerWidth(true);
				if (!$(this).next().hasClass("clear-left") && $(this).next(".valign-bottom.align-left").length) {
					$(this).next().css("left",widths+"px");
				}

			});

			// Go through valign-middle align-left items and adjust right position so they sit on the same row
			var widths = parseFloat($(".valign-middle.align-left",$(this)).css("left"));
			$(".valign-middle.align-left",$(this)).each(function(){
				widths = widths+$(this).outerWidth(true);
				if (!$(this).next().hasClass("clear-left") && $(this).next(".valign-middle.align-left").length) {
					$(this).next().css("left",widths+"px");
				}

			});

			// Go through valign-middle align-right items and adjust right position so they sit on the same row
			var widths = parseFloat($(".valign-middle.align-right",$(this)).css("right"));
			$(".valign-middle.align-right",$(this)).each(function(){
				widths = widths+$(this).outerWidth(true);
				if (!$(this).next().hasClass("clear-right") && $(this).next(".valign-middle.align-right").length) {
					$(this).next().css("right",widths+"px");
				}
			});


			// Go through valign-top align-left items and adjust right position so they sit on the same row
			var widths = parseFloat($(".valign-top.align-left",$(this)).css("left"));
			$(".valign-top.align-left",$(this)).each(function(){
				widths = widths+$(this).outerWidth(true);
				if (!$(this).next().hasClass("clear-left") && $(this).next(".valign-top.align-left").length) {
					$(this).next().css("left",widths+"px");
				}

			});


			// Go through valign-top align-right items and adjust right position so they sit on the same row
			var widths = parseFloat($(".valign-top.align-right",$(this)).css("right"));
			$(".valign-top.align-right",$(this)).each(function(){
				widths = widths+$(this).outerWidth(true);
				if (!$(this).next().hasClass("clear-right") && $(this).next(".valign-top.align-right").length) {
					$(this).next().css("right",widths+"px");
				}

			});

			// Check any valign-middle or valign-bottom justify items to make sure they they don't overlap left aligned items.
			var leftedge = 20;
			$(".align-left,.align-",$(this)).each(function(){
				var rightedge = $(this).outerWidth(true) + $(this).position().left;
				if (rightedge>leftedge) {
					leftedge =rightedge;
				}
			});
			$(".valign-bottom.align-justify,.valign-middle.align-justify,.valign-top.align-justify",$(this)).each(function(){
				$(this).css("left",leftedge+"px");
			});



		});

		$(".module.align-justify.style-equal").each(function(){
			var $lis = $("> * > *",$(this));
			var n = $lis.length;
			var space = n * 10 - 10;
			var width = ($(this).width() - space) / n;
			width = Math.floor(width);
			$lis.css("width",width+"px");
		});
		$(".module.align-justify:not(.style-equal,.style-space)").each(function(){
			var w = $(this).innerWidth();
			var ews = 0;
			var $m = $(this);
			$("> * >*",$(this)).each(function(){
				if ($("> a",$(this)).length) {
					var $el = $(">a",$(this));
					var incOuter = true;
				} else {
					var $el = $(this);
					var incOuter = false;
				}
				if (typeof $m.attr("padding-left") == 'undefined') {
					$m.attr("padding-left",$el.css("padding-left"));
					$m.attr("padding-right",$el.css("padding-right"));
				}

				$el.css("padding-left","0px").css("padding-right","0px");
				if (incOuter) {
					 var ew = $el.parent().outerWidth(true);
				} else {
					 var ew = $el.outerWidth(true);
				}

				ews = ews+ew;
			});
			var d = w - ews - 2;
			var c = $("> * > *",$(this)).length;
			var p = d/c;
			p = p/2;

			$("> * > *",$(this)).each(function(){
				if ($("> a",$(this)).length) {
					var $el = $(">a",$(this));
				} else {
					var $el = $(this);
				}

				if (p<parseFloat($m.attr("padding-right"))) {
					$el.css({"padding-left":$m.attr("padding-left"),"padding-right":$m.attr("padding-right")});
				} else {
					$el.css({"padding-left":p+"px","padding-right":p+"px"});
				}
			});
		});
		$(".nav.valign-bottom.logo-first,.nav.valign-middle.logo-first,.nav.valign-bottom.logo-last,.nav.valign-middle.logo-last,.nav.with-middle-logo").each(function(){
			$(">ul>li:not(#nav-logo)",$(this)).css("margin-top","0px");
			var th = $("> ul > li#nav-logo",$(this)).outerHeight();
			var $t = $(this);
			$(">ul>li:not(#nav-logo)",$(this)).each(function(){
				var h = $(">a,>form",$(this)).outerHeight();
				var mt = th-h;
				if ($t.hasClass("valign-middle")||$t.hasClass("with-middle-logo")) {
					mt = mt/2;
				}
				$(this).css("margin-top",mt+"px");
			});

		});



	}
	function testFlexiBreak($container) {

		var offset = 0;
		var ok = true;
		if ($container.hasClass("contains-text")) {
			var offset = $("> li",$container).offset().top;

			$("> li:not(#nav-logo)",$container).each(function(){
				if ($(this).offset().top!=offset) {
					ok = false;
				}
			});
		}
		
		if ($container.parent().hasClass("align-justify") && $container.parent().hasClass("style-equal")) {
			$(".tfb").contents().unwrap();
		
			$("> li > a",$container).wrapInner("<span class='tfb'>");
		
			$('.tfb').each(function(){
				var outer = $(this).parent().width() - (parseInt($(this).parent().css("padding-left"))+parseInt($(this).parent().css("padding-right")));

				if ($(this).width()>outer) {
					ok = false;
				}
			});
			
		}

		if (!$container.hasClass("allow-line-breaks")) {
			var h = $("> li:not(#nav-search,#nav-basket,#nav-logo) > a",$container).first().height();
			$("> li:gt(0):not(#nav-search,#nav-basket,#nav-logo) > a",$container).each(function(){
				if ($(this).height()!=h) {
					ok=false;
				}
			});
		}
		return ok;
	}
	function flexiBreak() {


		$(".flexibreak-big").each(function(){
			var ok = true;
			var fb = false;
			if ($(".flexibreak-container",$(this)).length) {
				var $container = $(".flexibreak-container",$(this));
				$container.removeClass("flexibreak1 flexibreak2 flexibreak3");
				fb=true;
			}
			var $row = $(this);
			$row.removeClass("rowscale1 rowscale2 rowscale3");

			$row.show();
			$("#"+$row.data("flexibreak-small")).hide();


			modules();

			if (fb) {
				if (!testFlexiBreak($container)) {
					$container.addClass("flexibreak1");
					if (!testFlexiBreak($container)) {
						$container.removeClass("flexibreak1 flexibreak2 flexibreak3");
						$container.addClass("flexibreak2");
						if (!testFlexiBreak($container)) {
							$container.removeClass("flexibreak1 flexibreak2 flexibreak3");
							$container.addClass("flexibreak3");
							if (!testFlexiBreak($container)) {
								ok = false;
							}
						}
					}
				}
			}

			var $modules = $(".module:not(.width)",$row);
			if ($modules.overlaps($(".module:not(.width)",$row)).length) {
				$row.addClass("rowscale1");
				if ($modules.overlaps($modules).length) {
					$row.addClass("rowscale2");
					if ($modules.overlaps($modules).length) {
						$row.addClass("rowscale3");
						if ($modules.overlaps($modules).length) {

							ok = false;
						}
					}
				}
			}

			if (!ok) {

				$row.hide();
				if (!$row.parent().children(":not(.flexibreak-big)").length) {
					$row.parent().hide().addClass("flex-wrap-hidden");
				}
				$("#"+$row.data("flexibreak-small")).show();
			}


		});

		modules();
		moduleHeights();
		setFixedHeader();

	}


	function setRecentBlogWidths () {
		$(".recent_blog_articles").each(function(){
			if ($(this).width()<287) {
				$(this).addClass("narrow");
			} else {
				$(this).removeClass("narrow");
			}
		});
	}
	function imageMarginHelper () {
		$(".Right_Image:not(.align-left .Right_Image, .align-right .Right_Image, .align-center .Right_Image),.Left_Image:not(.align-right .Left_Image,.align-left .Left_Image,.align-center .Left_Image)").each(function(){
			if ($(this).next().length) {
				$(this).removeClass("enoughSpaceForText").removeClass("notEnoughSpaceForText");
				var avail = $(this).parent().innerWidth();
				var thisW = $("img",$(this)).width();
				var space = avail-thisW;
				if (space>140) {
					$(this).addClass("enoughSpaceForText");
				} else {
					$(this).addClass("notEnoughSpaceForText");
				}				
			}
		});
	}


/*
	#'Default' Gallery Style (Lightbox with thumbs) - including support for prodcuts based on this gallery style

*/
	$(window).resize(function(){
		if ($("#lightboxContainer").length) {
			$('<img src="'+$("#lightboxInner img").attr("src")+'" style="display:none;max-width:10000px !important;width:auto;"/>').appendTo("html").load(function(){
				var originalWidth = $(this).width();
				var originalHeight = $(this).height();
				var ratio = originalWidth/originalHeight;
				var newMaxWidth = $(window).width()-60;
				var newHeight = newMaxWidth/ratio;
				if (originalWidth>newMaxWidth) {
					var w = newMaxWidth;
					var h = newHeight;
				} else {
					var w = originalWidth;
					var h = originalHeight;
				}
				$("#lightboxContainer").stop(false,true).animate({
		        	width: w,
		        	height: h
		        },300);
		        $("#lightboxStuff").stop(false,true).animate({
		        	width: w
		        },300);
		 	});
		}
	});
	$(document).scroll(function(){
		fixedHeaderScroll();
	});
	$(document).ready(function(){
		$(".responsive_lightbox").click(function(){
			var clicked = $(this);
			var parentsId = $(this).parents(".galleryWrapper").attr("id");
			$(".lightboxCurrent").removeClass("lightboxCurrent");
			clicked.addClass("lightboxCurrent");
			$('embed, object, select',"#wrapper").css({ 'visibility' : 'hidden' });
			var formName = $(this).parents(".galleryWrapper").attr("id").replace(/gallery/, "");
			$('body').append("<div id='lightboxOverlay'></div><div id='lightboxOuter'><div id='lightboxContainer'><div id='lightboxExtra1'><div id='lightboxExtra2'><div id='lightboxExtra3'><div id='lightboxClose'>x</div><div id='lightboxPrev'>&lt;</div><div id='lightboxNext'>&gt;</div><div id='lightboxInner'></div></div></div></div></div><div id='lightboxStuff'><div id='lightboxShop'></div><div id='lightboxCaption'></div></div></div>");
			$(".shopGalleryVariant[name="+formName+"]").appendTo("#lightboxShop").fadeIn();
			$("#lightboxShop form").append("<input type='hidden' name='pic_url' value='' />");
			$("#lightboxOverlay").css("height",$(document).height()+"px");
			$("#lightboxOuter").css("top",$(document).scrollTop()+100+"px");

			$("#lightboxContainer").css({
				opacity: 0,
				display: "block"
			});
			$("#lightboxContainer").animate({
				opacity: 1
			});
			function showImage (href,title) {
				function cont4 () {
					function cont3 () {
						showNav();
						$("."+formName+"input").val(title);
						$("input[name=pic_url]",$("#lightboxShop form")).val(href);
						$("#lightboxCaption").html("<p>"+title+"</p>");
						$("#lightboxInner").html('<img src="'+href+'" alt="'+title+'" style="display:none"/>');
						$("#lightboxInner img").css({
							opacity: 0,
							display: "block"
						});
						$("#lightboxInner img").animate({
							opacity: 1
						},300);
					}
					$('<img src="'+href+'" style="display:none;max-width:1000px !important;"/>').appendTo("body").load(function(){
					        var originalWidth = $(this).width();
							var originalHeight = $(this).height();
							var ratio = originalWidth/originalHeight;
							var newMaxWidth = $(window).width()-60;
							var newHeight = newMaxWidth/ratio;
							if (originalWidth>newMaxWidth) {
								var w = newMaxWidth;
								var h = newHeight;
							} else {
								var w = originalWidth;
								var h = originalHeight;
							}
							$("#lightboxContainer").stop(false,true).animate({
					        	width: w,
					        	height: h
					        },300,cont3);
					        $("#lightboxStuff").stop(false,true).animate({
					        	width: w
					        },300);
					 });
				}
				$("#lightboxNext,#lightboxPrev,#lightboxClose").fadeOut(300);
				$("#lightboxInner img").fadeOut(300,cont4);



			}
			function showNav () {
				$("#lightboxClose").fadeIn();
				$("#lightboxClose").unbind().click(function(){
					function cont2 () {
						$("#lightboxOverlay,#lightboxOuter").remove();
						$('embed, object, select',"#wrapper").css({ 'visibility' : 'visible' });
					}
					$("#lightboxOuter,#lightboxOverlay").fadeOut(300,cont2);

					$(".shopGalleryVariant[name="+formName+"]").appendTo("body").hide();
				});
				var totalEls = $("#"+parentsId+" .responsive_lightbox").length-1;
				var clickedEl = 0;
				var currentEl = 0;
				$("#"+parentsId+" .responsive_lightbox").each(function(){
					if ($(this).hasClass("lightboxCurrent")) {
						clickedEl = currentEl;
					}
					currentEl++;
				});
				if (clickedEl!=totalEls) {
					$("#lightboxNext").fadeIn();
					$("#lightboxNext").unbind().click(function(){
						var stop = 0;
						var stop2 = 0;
						$("#"+parentsId+" .responsive_lightbox").each(function(){
							stop++;
							if ($(this).hasClass("lightboxCurrent")) {
								stop2 = stop;
							}
						});
						var stop3 = 0;
						$("#"+parentsId+" .responsive_lightbox").each(function(){
							if (stop3 == stop2) {
								$(".lightboxCurrent").removeClass("lightboxCurrent");
								$(this).addClass("lightboxCurrent");
								var href = $(this).attr("href");
								var title = $(this).attr("title");
								showImage(href,title);
							}
							stop3++;
						});
					});
				}
				if (clickedEl!=0) {
					$("#lightboxPrev").fadeIn();
					$("#lightboxPrev").unbind().click(function(){
						var prev = 0;
						var clicked = 0;
						$("#"+parentsId+" .responsive_lightbox").each(function(){
							if ($(this).hasClass("lightboxCurrent")) {
								current = prev;
							}
							prev++;
						});
						var prev = 0;
						$("#"+parentsId+" .responsive_lightbox").each(function(){
							if (prev==current-1) {
								$(".lightboxCurrent").removeClass("lightboxCurrent");
								$(this).addClass("lightboxCurrent");
								var href = $(this).attr("href");
								var title = $(this).attr("title");
								showImage(href,title);
							}
							prev++;
						});
					});
				}
			}
			function cont () {
				$("."+formName+"input").val(clicked.attr("title"));
				$("input[name=pic_url]",$("#lightboxShop form")).val(clicked.attr("href"));
				$("#lightboxCaption").html("<p>"+clicked.attr("title")+"</p>");
				$("#lightboxStuff").fadeIn();
				$("#lightboxInner").html('<img src="'+clicked.attr("href")+'" alt="'+clicked.attr("title")+'" style="display:none"/>');
				$("#lightboxInner img").css({
					opacity: 0,
					display: "block"
				});
				$("#lightboxInner img").animate({
					opacity: 1
				},300);

				showNav();

			}

			var preloader = new Image();

			preloader.onload = function() {
				var originalWidth = preloader.width;
				var originalHeight = preloader.height;
				var ratio = originalWidth/originalHeight;
				var newMaxWidth = $(window).width()-60;
				var newHeight = newMaxWidth/ratio;
				if (originalWidth>newMaxWidth) {
					var w = newMaxWidth;
					var h = newHeight;
				} else {
					var w = originalWidth;
					var h = originalHeight;
				}

				$("#lightboxStuff").css("width",w+"px");
				$("#lightboxContainer").stop(false,true).animate({
		        	width: w,
		        	height: h
		        },300,cont);


			};
			preloader.src = clicked.attr("href");
			return false;
		});
	});



/*
	#'Montage' Gallery Style - including support for prodcuts based on this gallery style

*/
	$(window).load(function(){
		setMontageMargin();
		$(".montageSlideshow").hide().css("width","0");
		setTimeout(function() {
			$(".montageSlideshow").css("width","100%").show();
		}, 1);
	});
	$(document).ready(function(){
		$(".montageSlideshow").each(function(){
			var formId = $(this).attr("id").replace("gallery","");
			if ($("form[name="+formId+"]").length) {
				$(this).after("<div class='montageProductWrapper'></div>");
				var $wrapper = $(this).next();
				$wrapper.append($(this));
				$wrapper.append($("form[name="+formId+"]").show().addClass("montageProductForm"));
				var $form = $("form",$wrapper);
				$(".montage-pic",$wrapper).append('<span class="montageCheckbox"></span>');
				$(".montage-pic:first",$wrapper).addClass("selected");
				$(".montageSlideshow",$wrapper).addClass("with-product");
				$form.append("<input type='hidden' name='pic_url' value='' />");
				$("."+formId+"input",$form).val($("img:first",$wrapper).attr("alt"));
				var href = $("img:first",$wrapper).attr("src").split("?");
				$("input[name=pic_url]",$form).val(href[0]);
			}
		});
		$(".with-product .montage-pic").click(function(){
			$montage = $(this).parents(".with-product");
			$(".selected",$montage).removeClass("selected");
			$(this).addClass("selected");
			var $form = $(this).parents(".with-product").next();
			var formId = $(this).parents(".with-product").attr("id").replace("gallery","");
			$("."+formId+"input",$form).val($("img",$(this)).attr("alt"));
			var href = $("img",$(this)).attr("src").split("?");
			$("input[name=pic_url]",$form).val(href[0]);
		});
	});
	$(window).resize(function(){
		setMontageMargin();
	});
	function setMontageMargin () {
		$(".imagesInMontage4").each(function(){
			var w = $(this).width();
			var p = $(".item1",$(this)).width()+$(".item2",$(this)).width();
			var g = w-p;
			$(".for-margin",$(this)).css("margin-top",g+"px");
		});
	}


/*
	#'Slideshow' Gallery Styles (single and multi) - including support for prodcuts based on these gallery styles
*/

	$(document).ready(function(){
		if (!$('body').hasClass("accessible-mode")){
			$(".banner-feature:not(#content_bar_1_banner_slideshow .banner-feature,#content_bar_2_banner_slideshow .banner-feature,#content_bar_3_banner_slideshow .banner-feature,#content_bar_4_banner_slideshow .banner-feature,#content_bar_5_banner_slideshow .banner-feature,#content_bar_6_banner_slideshow .banner-feature,#content_bar_7_banner_slideshow .banner-feature)").each(function(){
				if (!$(this).prev().hasClass("banner-feature")) {
					$(this).before("<div class='banner-feature-wrap'></div>");
				}
			});
			$(".banner-feature-wrap").each(function(){
				$wrapper = $(this);
				$(this).nextAll().each(function(){
					if (!$(this).hasClass("banner-feature")) {
						return false;
					} else {
						$(this).appendTo($wrapper);
					}
				});
			});
			$(".banner-feature-wrap").each(function(){
				$(this).owlCarousel({
					navigation : true,
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true,
					navigationText : ["&lt;","&gt;"],
					afterAction: function(el){
						this.$owlItems.removeClass('activebanner');
						this.$owlItems.eq(this.currentItem).addClass('activebanner');
					    } 
				});
			});
	
	
			$("#content_bar_1_banner_slideshow,#content_bar_2_banner_slideshow,#content_bar_3_banner_slideshow,#content_bar_4_banner_slideshow,#content_bar_5_banner_slideshow,#content_bar_6_banner_slideshow,#content_bar_7_banner_slideshow").each(function(){
				var speed = $(this).data("slideshow-speed");
				var transstyle = $(this).data("slideshow-style");
				$(" > div > div",$(this)).owlCarousel({
					navigation : true,
					pagination:false,
					autoPlay : speed,
				    singleItem : true,
					slideSpeed:500,
					afterMove: function(){
						setTimeout(function () {
						moduleHeights();						
						}, 350);

					},
				    autoHeight : false,
				    transitionStyle:transstyle,
					navigationText : ["&lt;","&gt;"],
					afterAction: function(el){
						this.$owlItems.removeClass('activebanner');
						this.$owlItems.eq(this.currentItem).addClass('activebanner');
					    } 
				});
			});

			$(".owl-slideshow-single").each(function(){
				$(this).owlCarousel({
					navigation : true,
					slideSpeed : 300,
					autoPlay : 3000,
		    		stopOnHover : true,
					paginationSpeed : 400,
					goToFirstSpeed : 2000,
				    singleItem : true,
				    autoHeight : true,
					afterMove: function(){
						setTimeout(function () {
						moduleHeights();						
						}, 350);

					},
				    transitionStyle:"fade",
					navigationText : ["&lt;","&gt;"]
				});
			});
			$(".owl-slideshow-multi").each(function(){
				$(this).owlCarousel({
					items : 4,
					slideSpeed : 300,
					autoPlay : 3000,
		    		stopOnHover : true,
					paginationSpeed : 400,
					goToFirstSpeed : 2000,
					navigationText : ["&lt;","&gt;"]
				});
			});

			$(".owl-slideshow-multi,.owl-slideshow-single").each(function(){
				var formId = $(this).attr("id").replace("gallery","");
				if ($("form[name="+formId+"]").length) {
					$(this).after("<div class='slideshowProductWrapper'></div>");
					var $wrapper = $(this).next();
					$wrapper.append($(this));
					$wrapper.append($("form[name="+formId+"]").show().addClass("slideshowProductForm"));
					var $form = $("form",$wrapper);
					$(".item",$wrapper).append('<span class="slideshowCheckbox"></span>');
					$(".item:first",$wrapper).addClass("current");

					$(".owl-slideshow-multi,.owl-slideshow-single",$wrapper).addClass("with-product");
					$form.append("<input type='hidden' name='pic_url' value='' />");
					$("."+formId+"input",$form).val($(".item:first img",$wrapper).attr("alt"));
					var href = $("img:first",$wrapper).attr("src").split("?");
					$("input[name=pic_url]",$form).val(href[0]);
				}
			});
			$(".owl-slideshow-multi.with-product .item,.owl-slideshow-single.with-product .item").click(function(){

				var $galThumbs = $(this).parents(".with-product");
				$(".current",$galThumbs).removeClass("current");
				$(this).addClass("current");

				var $form = $(this).parents(".with-product").next();
				var formId = $(this).parents(".with-product").attr("id").replace("gallery","");
				$("."+formId+"input",$form).val($("img",$(this)).attr("alt"));
				var href = $("img",$(this)).attr("src").split("?");
				$("input[name=pic_url]",$form).val(href[0]);
			});
		}

	});

/*
	#'Gallery with thumbs' Gallery Style - including support for prodcuts based on these gallery styles

*/
	$(window).resize(function(){
		$(".enlarge img").fadeOut();
		clearTimeout(afterResizingGallery);
		afterResizingGallery = setTimeout(function () {
			afterResizeGallery();
		}, 400);
	});
	var afterResizingGallery;
	function afterResizeGallery () {
		$(".galleryWithThumbs").each(function(){
			var $e = $(".enlarge",$(this));
			$e.css("height","auto");
			var $t = $(this);
			var $a = $("a.current",$t);
			showPic($a,$e);
		});
	}
	$(document).ready(function(){
		$(".owl-gallery-thumbs").each(function(){
			$(this).owlCarousel({
				items : 10,
				slideSpeed : 300,
				paginationSpeed : 400,
				navigationText : ["&lt;","&gt;"],
				itemsDesktop : [1000,8],
				itemsDesktopSmall : [768,6],
				itemsTablet: [480,5],
				itemsMobile : false
			});
		});

		$(".galleryWithThumbs").each(function(){

			var $e = $(".enlarge",$(this));
			var $t = $(this);
			var $a = $("a:first",$t);
			showPic($a,$e);

			$("a",$t).click(function(){
				$(".current",$t).removeClass("current");
				showPic($(this),$e);
				return false;
			});
		});
		$(".galleryWithThumbs").each(function(){
			var formId = $(this).attr("id").replace("gallery","");
			if ($("form[name="+formId+"]").length) {
				$(this).after("<div class='galleryThumbsProductWrapper'></div>");
				var $wrapper = $(this).next();
				$wrapper.append($(this));
				$wrapper.append($("form[name="+formId+"]").show().addClass("galleryThumbsProductForm"));
				var $form = $("form",$wrapper);
				$(".galleryWithThumbs",$wrapper).addClass("with-product");
				$form.append("<input type='hidden' name='pic_url' value='' />");
				$("."+formId+"input",$form).val($(".owl-gallery-thumbs img:first",$wrapper).attr("alt"));
				var href = $("img:first",$wrapper).attr("src").split("?");
				$("input[name=pic_url]",$form).val(href[0]);
			}
		});
		$(".galleryWithThumbs.with-product .owl-gallery-thumbs a").click(function(){
			var $galThumbs = $(this).parents(".with-product");
			var $form = $(this).parents(".with-product").next();
			var formId = $(this).parents(".with-product").attr("id").replace("gallery","");
			$("."+formId+"input",$form).val($("img",$(this)).attr("alt"));
			var href = $("img",$(this)).attr("src").split("?");
			$("input[name=pic_url]",$form).val(href[0]);
		});
	});
	function showPic ($a,$e) {
		$a.addClass("current");
		$(".captionWrap,.caption,img",$e).fadeOut().remove();

		var $img = $("<img src='"+$a.attr("href")+"' style='display:none;'/>");
		if ($("img",$a).attr("alt")!="") {
			var $i = $("<span class='captionWrap'><span class='caption'>"+$("img",$a).attr("alt")+"</span></span>");
			$img.prependTo($i);
		} else {
			var $i = $img;
		}

		$e.append($i);

		$img.one('load', function() {
		  $e.css("height",$(this).height()+"px");
		  $img.fadeIn();
			setTimeout(function () {
			moduleHeights();
			setFixedHeader();
			}, 500);
		}).each(function() {
		  if(this.complete) $(this).load();
		});
	}


/*
	#'Carousel Slide' Widget
*/

	$(document).ready(function(){
		if (!$('body').hasClass("accessible-mode")){
			$(".carousel_slide").each(function(){
				if (!$(this).prev().hasClass("carousel_slide")) {
					if ($(this).hasClass("carousel_slide_autoscroll")) {
						$(this).before("<div class='owl-carousel owl-carousel-autoscroll'></div>");
					} else {
						$(this).before("<div class='owl-carousel'></div>");
					}
				}
			});
			$(".owl-carousel").each(function(){
				$wrapper = $(this);
				$(this).nextAll().each(function(){
					if (!$(this).hasClass("carousel_slide")) {
						return false;
					} else {
						$(this).appendTo($wrapper);
					}
				});
			});
			$(".owl-carousel").each(function(){
				if ($(this).hasClass("owl-carousel-autoscroll")) {
					$(this).owlCarousel({
						navigation : true,
						slideSpeed : 300,
						autoPlay : 8000,
						paginationSpeed : 400,
						singleItem:true,
						navigationText : ["&lt;","&gt;"]
					});
				}else{
					$(this).owlCarousel({
						navigation : true,
						slideSpeed : 300,
						paginationSpeed : 400,
						singleItem:true,
						navigationText : ["&lt;","&gt;"]
					});
				}
			
			});
			
		}
	});


/*
	#'Live Shopping Basket' Widget
*/

function bindMiniBasket () {
	var options = {
			success: function(){
			$("#miniBasket2").load("/actions/ShowMiniBasket/"+lang,function(){
				bindMiniBasket();
				$("#loading").stop(true,false).fadeOut();
				moduleHeights();
				setFixedHeader();				
			});


		}  // post-submit callback
	};
	$("#miniBasket2 #updateQuantities").click(function(){
		$("#miniBasketForm").submit();
		return false;
	});
	$("#miniBasket2 .quantity").blur(function(e){
		if ($(e.target).attr("id")!="updateQuantities") {
			$("#miniBasketForm").submit();
		}
	});
	$("#miniBasket2 #miniBasketForm").submit(function(){
		$("#loading").fadeIn();

		$("#miniBasketForm").ajaxSubmit(options);
		return false;
	});
	$("#miniBasket2 .removeCell a").click(function(){
		$("#loading").fadeIn();
		$.ajax({ url: $(this).attr("href"), success: function(){
			$("#miniBasket2").load("/actions/ShowMiniBasket/"+lang,function(){
			bindMiniBasket();
			$("#loading").stop(true,false).fadeOut();
			moduleHeights();
			setFixedHeader();
			});
		}});
		return false;
	});
}
	$(document).ready(function(){
		if (!$('body').hasClass('accessible-mode')) {
			$(".form .submit_form").before("<img src=\"/graphics/form-load.gif\" alt=\"\" id=\"loader\"/>");
		}
		if ($('.formUsedInCheckout').length) {
			$("#paymentGatewayForm").css("float","none");
		}
		$("#miniBasket2").load("/actions/ShowMiniBasket/"+lang,function(){
			bindMiniBasket();
			moduleHeights();
			setFixedHeader();
		});
		if ($("#miniBasket2").length) {
			$(".addToBasketLink").click(function(){
				$("#loading").fadeIn();
				$.ajax({ url: $(this).attr("href"), success: function(){
					$("#miniBasket2").load("/actions/ShowMiniBasket/"+lang,function(){
					bindMiniBasket();
					$("#loading").stop(true,false).fadeOut();
					moduleHeights();
					setFixedHeader();
					});

				}});
				return false;
			});
			$(".addToBasketForm").ajaxForm(function(){
				$("#loading").fadeIn();
				$("#miniBasket2").load("/actions/ShowMiniBasket/"+lang,function(){
					bindMiniBasket();
					$("#loading").stop(true,false).fadeOut();
					$("#loader:visible").fadeOut();
					moduleHeights();
					setFixedHeader();
				});
			});
		}
	});
	
	/*
	
	# Searchable Subpage Index

	*/

	$(document).ready(function(){
		$("#kbSearchInput").keyup(function(){
			$("#contactform textarea").val($(this).val());
			if ($(this).val()!="") {
				$("#kbIndex").addClass("searching");
			} else {
				$("#kbIndex").removeClass("searching");
			}
			
			$(".searchShow,.searchShowTemp").removeClass("searchShow");
			$(".revealH3").removeClass("revealH3");
			$(".revealUL").removeClass("revealUL");
			$(".revealMore").removeClass("revealMore");
			
			var words = $(this).val().split(" ");
			var $i;
			$(".kbItem1,.kbItem2").attr("data-count","0");
			var highestCount=0;
			for (var i = words.length - 1; i >= 0; i--) {
				$i=$(".kbItem1[data-keywords*="+words[i].toLowerCase().replace('$','\\$').replace('.','\\.')+"],.kbItem2[data-keywords*="+words[i].toLowerCase().replace('$','\\$').replace('.','\\.')+"]");
				if ($i.length) {
					$i.addClass("searchShowTemp");
					$i.each(function(){
						var count = parseInt($(this).attr("data-count"))+1;
						if (count>highestCount) {
							highestCount=count;
						}
						$(this).attr("data-count",count);
					});
				}
			};
			$(".searchShowTemp").filter(function(){
				return (parseInt($(this).attr("data-count"))<highestCount);
			}).removeClass("searchShowTemp");
			$(".searchShowTemp").removeClass("searchShowTemp").addClass("searchShow");
			$(".searchShow").parents(".kbItem").addClass("revealH3");
			$(".searchShow").parents(".kbItem1").addClass("revealUL");
			$(".searchShow.hidden").parent().addClass("revealMore");

		});
		$(".kbItem1.hasSubs > a").click(function(){
			if ($(this).parent().hasClass("showingSubUL")) {
				$(this).parent().removeClass("showingSubUL");
			} else {
				$(this).parent().addClass("showingSubUL");
			}
			
			return false;
		});
		$(".kbAll a").click(function(){
			if ($(this).parents("ul").hasClass("revealHidden")) {
				$(this).parents("ul").removeClass("revealHidden");
				$(this).html($(this).attr("data-lang-open"));
			} else {
				$(this).parents("ul").addClass("revealHidden");	
				$(this).html($(this).attr("data-lang-close"));
			}
			return false;
		});

       if (window.self == window.top) {
		$("#kbSearchInput").focus();	       	
       }

		$("#clearKBSearch").click(function(){
			$("#kbSearchInput").val("").trigger("keyup");
		});
		$("#contactSupport a").click(function(){
			$("#hideWhenContact").hide();
			$(this).parent().hide();
			$(this).parent().next().addClass("revealed");
			return false;
		});
	});
	/*
	
	# Searchable Preview Based Subpage Index

	*/

	$(document).ready(function(){
		$("#pbSearchInput").keyup(function(){
			
			if ($(this).val()!="") {
				$("#pbIndex").addClass("searching");
			} else {
				$("#pbIndex").removeClass("searching");
			}
			
			$(".searchShow,.searchShowTemp").removeClass("searchShow");
			
			
			var words = $(this).val().split(" ");
			var $i;
			$(".pbItem").attr("data-count","0");
			var highestCount=0;
			for (var i = words.length - 1; i >= 0; i--) {
				$i=$(".pbItem[data-keywords*="+words[i].toLowerCase().replace('$','\\$').replace('.','\\.')+"]");
				if ($i.length) {
					$i.addClass("searchShowTemp");
					$i.each(function(){
						var count = parseInt($(this).attr("data-count"))+1;
						if (count>highestCount) {
							highestCount=count;
						}
						$(this).attr("data-count",count);
					});
				}
			};
			$(".searchShowTemp").filter(function(){
				return (parseInt($(this).attr("data-count"))<highestCount);
			}).removeClass("searchShowTemp");
			$(".searchShowTemp").removeClass("searchShowTemp").addClass("searchShow");
		});
		$(".kbItem1.hasSubs > a").click(function(){
			if ($(this).parent().hasClass("showingSubUL")) {
				$(this).parent().removeClass("showingSubUL");
			} else {
				$(this).parent().addClass("showingSubUL");
			}
			
			return false;
		});

       if (window.self == window.top) {
		$("#pbSearchInput").focus();	       	
       }

		$("#clearPBSearch").click(function(){
			$("#pbSearchInput").val("").trigger("keyup");
		});
		
		
	});
	

/*

	#Livechat Status Widget
*/


	$(document).ready(function(){
		if(typeof sDMT=='undefined') {
			function checkLivechat () {

				$.ajax({
					type: "GET",
					url: "/actions/LivechatStatus/",
					success: function(msg){
						if (msg=="online") {
							$(".livechatWidgetOffline").hide();
							$(".livechatWidgetOnline").show();
						} else {
							$(".livechatWidgetOffline").show();
							$(".livechatWidgetOnline").hide();
						}
					}
				});
				setTimeout(checkLivechat, 10000);
			
			}
			checkLivechat();
		}

		$(".startConvo").click(function () {
			href = this.href;
			var popup = window.open(href,'','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=311,height=349');
			return false;
		});

	});

/*
	#Responsive video helper for jPlayer

*/

	var afterResizing;
	var windowwidth;
	$(document).ready(function(){
		windowwidth=$(window).width();
	});
	$(window).resize(function(){
		if ($(window).width()!=windowwidth) {
			windowwidth=$(window).width();			
				
			if (!$(".jplayerInit .jplayer").hasClass("playing")) {
				if ($("#videoMPPopup .jplayer").length) {
					$("#mp_lightbox_outer").fadeOut();
					if ($("#videoMPPopup .jplayer").hasClass("playing")) {
						$("#videoMPPopup .jplayer").jPlayer("stop");
					}
					
				}
				clearTimeout(afterResizing);
				if (!$(".jp-video-full").length) {

					afterResizing = setTimeout(function () {
						if ($(".jplayerInit").length && !$(".jp-video-full").length) {

							$(".jplayerInit .jplayer").jPlayer("destroy");
							$(".jplayerInit").each(function(){
								var img = $(this).attr("data-poster");
								var vid = $(this).attr("data-vid");
								var $t = $(this).parent();
								$(this).remove();
								$t.html("<a href='"+vid+"'><img src='"+img+"' /></a>");
							});

						}
						afterResize();
					}, 1000);
				}
			}
		}
	});
	function afterResize() {
		var jplayerVideoCounter=0;
		$(".bpe_video:not(.Popup_Video) img").each(function(){
			if (!$(".jplayerInit",$(this).parents(".bpe_video")).length) {

			var width = $(this).width();
			var height = $(this).height();
			var image = $(this).attr("src");
			var video = $(this).parent().attr("href");
			$(this).parent().after("<div id=\"video"+jplayerVideoCounter+"\" class='jplayerInit' data-poster='"+image+"' data-vid='"+video+"'>"+playerHTML+"</div>");
			$(this).parent().remove();

			makeVideo("video"+jplayerVideoCounter,width,height,image,video,false,false);

			jplayerVideoCounter++;
			}
		});
	}
/*
	#Responsive video helper for JWPlayer

*/

	var afterResizingJW;
	$(window).resize(function(){
		if (window.jwplayer) {
			var i = 0;
			while (true) {
			    var player = jwplayer("video"+i);
			    if (!player)
			        break;
					player.remove();
			    i++;
			}
			$(".bpe_video:not(.Popup_Video)").show();

			clearTimeout(afterResizingJW);
			afterResizingJW = setTimeout(function () {
				afterResizeJW();
			}, 1000);
		}

	});
	function afterResizeJW() {
		var JWPlayerVideoCounter=0;
		$(".bpe_video:not(.Popup_Video) img").each(function(){

			var img = this;
			var width = $(this).width();
			var height = $(this).height();
			var image = $(this).attr("src");
			var video = $(this).parent().attr("href");
			$(this).parent().parent().hide();
			$(this).parent().parent().after("<div id=\"video"+JWPlayerVideoCounter+"\"></div>");
			makeVideo("video"+JWPlayerVideoCounter,width,height,image,video,false);


			JWPlayerVideoCounter++;
		});
	}

/*

 	#Responsive Calendar

*/
	$(document).ready(function(){
		$(".calendar").click(function(e){
			if ($(e.target).hasClass("hasEvents") || $(e.target).parents(".hasEvents").length) {
				if ($(e.target).hasClass("hasEvents")) {
					var $t = $(e.target);
				} else {
					var $t = $(e.target).parents(".hasEvents");
				}
				if ($(window).width()<=768) {
					$("body").append("<div id='eventPopupWrapper'><div id='eventPopup'><div id='closeEventPopup'>x</div><div id='eventInfo'></div></div></div>");

					$("#eventInfo").append("<h4>"+$t.attr("data-full-date")+"</h4>");
					$(".event",$t).clone().appendTo($("#eventInfo"));

					var h = $("#eventPopup").outerHeight() / 2;
					$("#eventPopup").css("margin-top","-"+h+"px");

					$("#closeEventPopup").click(function(){
						$("#eventPopupWrapper").remove();
					});
				}
			}
		});

	});

/*
	#Full width banner + Disclosures

*/
	$(document).ready(function(){
		if ($("#fullWidthBanner").length) {
			if ($("#fullWidthBannerBG img").length) {
				var src = $("#fullWidthBannerBG img").attr("src");
				src = src.split("?");
				src = src[0]+"?width=1920&height=auto";
			} else {
				var src="/graphics/full-width-bg.jpg"
			}
			$("#fullWidthBanner").backstretch(src);
			$("h1,h2,h3,h4,p,li","#fullWidthBanner").filter(":not(.Button_Small,.Button_Medium,.Button_Large)").wrapInner("<span></span>");
		}
		$("h1,h2,h3,h4,p,li",".disclose").filter(":not(.Button_Small,.Button_Medium,.Button_Large)").wrapInner("<span class=\"disclosure-reveal\"></span>");
	});

/*

 	#Blog Loop

*/
	/*
	$(document).ready(function(){
		$(".blogItemLoop").each(function(){
			if (typeof $(this).attr("data-pic") != 'undefined') {
				$(this).backstretch($(this).attr("data-pic"));
			}
			$("h1,h2,h3,h4,p,li",$(this)).filter(":not(.Button_Small,.Button_Medium,.Button_Large,.blogDate)").wrapInner("<span></span>");
		});
	});
	*/

/*
	#Countdown

*/
	$(document).ready(function(){
		$('.countdownclock').each(function(){
			var time = $(this).data("time");
			$(this).countdown({
			    date: time,
			    offset: +2,
			    day: 'Day',
			    days: 'Days'
			}, function () {
			    
			});
		
		});
			
		
	});
	
		


// If you add JWPlayer to your installation you can set some basic config for the player here.
var videoControlBar = "over";
var videoScreenColor = "#FFFFFF";
