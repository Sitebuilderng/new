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
function setPersonalNames($product) {

	function setFormNames(form,qty,$product) {
		var titles = new Array();
		
		$(".cms-booking-product-"+qty+"-qty",$product).each(function(){

			var i = 1;
			var t = parseInt($("input",$(this)).val());
		
			var label = $(".booking-price-label",$(this)).data("singular");
			for (var i = 1; i <= t; i++) {
				titles.push(label+" "+i+"/"+t);
			}

		});
		var x = 0;
		$(".personal-details-forms .personal-details-form."+form,$product).each(function(){
			$(".booking-person-title",$(this)).text(titles[x]);
			x++;
		});
	}
	setFormNames("personal-details-form-norm","normal",$product);
	setFormNames("personal-details-form-children","children",$product);
	setFormNames("personal-details-form-special","special",$product);

}
function urlencode( str ) {
    // http://kevin.vanzonneveld.net
    // +   original by: Philip Peterson
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +      input by: AJ
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // %          note: info on what encoding functions to use from: http://xkr.us/articles/javascript/encode-compare/
    // *     example 1: urlencode('Kevin van Zonneveld!');
    // *     returns 1: 'Kevin+van+Zonneveld%21'
    // *     example 2: urlencode('http://kevin.vanzonneveld.net/');
    // *     returns 2: 'http%3A%2F%2Fkevin.vanzonneveld.net%2F'
    // *     example 3: urlencode('http://www.google.nl/search?q=php.js&ie=utf-8&oe=utf-8&aq=t&rls=com.ubuntu:en-US:unofficial&client=firefox-a');
    // *     returns 3: 'http%3A%2F%2Fwww.google.nl%2Fsearch%3Fq%3Dphp.js%26ie%3Dutf-8%26oe%3Dutf-8%26aq%3Dt%26rls%3Dcom.ubuntu%3Aen-US%3Aunofficial%26client%3Dfirefox-a'

    var histogram = {}, histogram_r = {}, code = 0, tmp_arr = [];
    var ret = str.toString();

    // The histogram is identical to the one in urldecode.
    histogram['!']   = '%21';
    histogram['%20'] = '+';

    // Begin with encodeURIComponent, which most resembles PHP's encoding functions
    ret = encodeURIComponent(ret);

    for (search in histogram) {
        replace = histogram[search];
        tmp_arr = ret.split(search); // Custom replace
        ret = tmp_arr.join(replace);
    }

    // Uppercase for full PHP compatibility
    return ret.replace(/(\%([a-z0-9]{2}))/g, function(full, m1, m2) {
        return "%"+m2.toUpperCase();
    });

    return ret;
}
var lang="";
var langAppend="";
var sDMT=true;
function updateCMSText(html) {
	$("#CMSLIVEUPDATE").html(html);
}
function cmsBookingReapply() {

		$(".cms-booking-product-form.cms-booking-combined-dates").each(function(){
			$(".cms-booking-product-selected:not(.cms-master-days .cms-booking-product-selected)",$(this)).removeClass("cms-booking-product-selected");
			$(".cms-master-days .cms-booking-product-date.cms-booking-product-selected.cms-booking-product-available",$(this)).each(function(){
				$(this).trigger("click",true);
			});
		});
}
var firstShow = true;
function cmsUpdateBookingPrices () {

	$(".cms-booking-product-form").each(function(){

		var total = 0;
		var surcharge = 0;
		var $form = $(this);
		if ($form.hasClass("cms-booking-combined-dates")) {
			$(".cms-master-days",$form).hide();
			$(".cms-booking-product-select-product",$form).show();
			$(".cms-booking-product-legend",$form).hide();
			$(".cms-master-days .cms-booking-product-date:not(.cms-booking-product-history,.cms-booking-filler)",$form).addClass("cms-booking-product-available");
		}

		$(".cms-booking-product",$form).each(function(){
			var $prod = $(this);
			var use_min_charge = $(this).data("use-minimum-price");

			var qty_adults = parseInt($(".cms-booking-product-normal-qty input",$prod).val());
			var qty_special = parseInt($(".cms-booking-product-special-qty input",$prod).val());
			var qty_children = parseInt($(".cms-booking-product-children-qty input",$prod).val());

			if (isNaN(qty_adults)) {
				qty_adults = 0;
			}
			if (isNaN(qty_special)) {
				qty_special = 0;
			}
			if (isNaN(qty_children)) {
				qty_children = 0;
			}

			if ($prod.data("adult-required")===1 && qty_children>0) {
				if (qty_special+qty_adults === 0) {
					setTimeout(function () {
						$(".cms-booking-product-require-adult",$prod).slideDown(300,function(){
							if (typeof moduleHeights == 'function') {
								moduleHeights();
							}
						});						
					}, 10);
					$(".cms-booking-product-children-qty input",$prod).val("0");
					qty_children=0;
				} else {
					$(".cms-booking-product-require-adult",$prod).slideUp(300,function(){});
				}
			}
			
			var t = qty_adults+qty_special+qty_children;
			$(this).removeClass("cms-booking-zero-qty");
			if (t===0) {
				$(this).addClass("cms-booking-zero-qty");
			}
			if (t>0&&$form.hasClass("cms-booking-combined-dates")) {
				$(".cms-master-days",$form).show();

				if (firstShow) {
					$(".cms-master-days:first").each(function(){
						if ($(".cms-booking-product-date:not(.cms-booking-product-history):first",$(this)).length) {
							var ol = $(".cms-booking-product-date:not(.cms-booking-product-history):first",$(this)).position().left;
						  $(".cms-booking-product-dates-inner",$(this)).animate({scrollLeft:ol},500);
							
						}
					});
					firstShow=false;
				}
				$(".cms-booking-product-select-product",$form).hide();
				$(".cms-booking-product-legend",$form).show();

			}



			$(".cms-booking-product-toomany",$prod).removeClass("cms-booking-product-toomany");
			$(".cms-booking-product-date",$prod).each(function(){
				var $date = $(this);
				if ($form.hasClass("cms-booking-combined-dates")) {
					if (t>0 && !$date.hasClass("cms-booking-product-available")) {
						$(".cms-master-days .cms-booking-product-date[data-date='"+$date.attr("data-date")+"']",$form).removeClass("cms-booking-product-available");
					}
				}
				if (t > $date.data("available")) {
					$date.addClass("cms-booking-product-toomany");
					if ($form.hasClass("cms-booking-combined-dates")) {
						$(".cms-master-days .cms-booking-product-date[data-date='"+$date.attr("data-date")+"']",$form).removeClass("cms-booking-product-available");
					}
					var addOrRemove = true;
					if ($date.hasClass("block-start")) {
						$date.nextUntil($(".block-end")).each(function(){
							$date.toggleClass("cms-booking-product-toomany",addOrRemove);
						}).next().toggleClass("cms-booking-product-toomany",addOrRemove);
					}
					if ($date.hasClass("block-middle")) {
						$date.nextUntil($(".block-end")).each(function(){
							$date.toggleClass("cms-booking-product-toomany",addOrRemove);
						}).next().toggleClass("cms-booking-product-toomany",addOrRemove);
						if ($date.next().hasClass("block-end")) {
							$date.next().toggleClass("cms-booking-product-toomany",addOrRemove);
						}
						$date.prevUntil($(".block-start")).each(function(){
							$date.toggleClass("cms-booking-product-toomany",addOrRemove);
						}).prev().toggleClass("cms-booking-product-toomany",addOrRemove);
						if ($date.prev().hasClass("block-start")) {
							$date.prev().toggleClass("cms-booking-product-toomany",addOrRemove);
						}
					}
					if ($date.hasClass("block-end")) {
						$date.prevUntil($(".block-start")).each(function(){
							$date.toggleClass("cms-booking-product-toomany",addOrRemove);
						}).prev().toggleClass("cms-booking-product-toomany",addOrRemove);
					}
				}
			});

			var days = "[";
			$(".cms-booking-product-selected:not(.cms-booking-product-toomany)",$prod).each(function(){

				var price_normal = parseFloat($(this).data("price-normal"));
				var price_special = parseFloat($(this).data("price-special"));
				var price_children = parseFloat($(this).data("price-children"));
				var min_price = parseFloat($(this).data("minimum-price-per-place"));

				var normal = price_normal * qty_adults;
				var special = price_special * qty_special;
				var children = price_children * qty_children;

				var subtotal = normal+special+children;
				var subsurcharge=0;
				if (subtotal < min_price && use_min_charge) {
					var subsurcharge = min_price-subtotal;
					surcharge = surcharge+subsurcharge;
				}
				total = total+subtotal+subsurcharge;

				if (days!="[") {
					days = days+',';
				}
				days = days+'"'+$(this).data("date")+'"';
			});
			days = days+"]";
			$(".cms-booking-product-days-input",$(this)).val(days);
			
			if ($(".persondetailsmaseter",$(this)).length) {
				function addBPForms(qty,c,$this) {
					$(".personal-details-forms .personal-details-form.personal-details-form-"+c,$this).hide();
					var a = 1;
					var t = qty;

					while (a <= t) {

						if ($(".personal-details-forms .personal-details-form.personal-details-form-"+c+":hidden",$this).length) {
							$(".personal-details-forms .personal-details-form.personal-details-form-"+c+":hidden:first",$this).show();
						} else {
							if ($('.personal-details-forms .personal-details-form-'+c+":visible",$this).length) {
								$('.personal-details-forms .personal-details-form-'+c+":visible:last",$this).after($(".persondetailsmaseter > *",$this).clone().addClass('personal-details-form-'+c));
							} else {
								$(".personal-details-forms",$this).append($(".persondetailsmaseter > *",$this).clone().addClass('personal-details-form-'+c));								
							}

						}
						a++;
					}
				
				}
				addBPForms(qty_adults,"norm",$(this));
				addBPForms(qty_children,"children",$(this));
				addBPForms(qty_special,"special",$(this));
				setPersonalNames($(this));
			}
			

		});

		if (surcharge>0) {
			$(".cms-booking-product-total-surcharge",$(this)).show();
			$(".cms-booking-product-total-surcharge span",$(this)).text(surcharge.toFixed(2));
		} else {
			$(".cms-booking-product-total-surcharge",$(this)).hide();
		}
		$(".cms-booking-product-total-price span",$(this)).text(total.toFixed(2));



		if ($form.hasClass("cms-booking-combined-dates")) {

			cmsBookingProdTestEachDay($form);

			$(".cms-booking-product-not-available-for-days",$form).removeClass("cms-booking-product-not-available-for-days")

			$(".cms-booking-zero-qty",$form).each(function(){

				var $zeroProd = $(this);
				setTimeout(function () {
					$(".cms-master-days .cms-booking-product-date.cms-booking-product-selected",$form).each(function(){
						var d = $(this).data("date");
						if (!$(".cms-booking-product-date[data-date='"+d+"']",$zeroProd).hasClass("cms-booking-product-available")) {
							$zeroProd.addClass("cms-booking-product-not-available-for-days");
						}
					});
				}, 10);


			});
		}
	});
	if (typeof moduleHeights == 'function') {
	moduleHeights();
	}
}
function cmsBookingProdTestEachDay($form) {
	$(".cms-master-days .cms-booking-product-available",$form).each(function(){
		var $day = $(this);
		var d = $(this).data("date");
		$(".cms-booking-product",$form).each(function(){

			var $prod = $(this);

			var qty_adults = parseInt($(".cms-booking-product-normal-qty input",$prod).val());
			var qty_special = parseInt($(".cms-booking-product-special-qty input",$prod).val());
			var qty_children = parseInt($(".cms-booking-product-children-qty input",$prod).val());

			if (isNaN(qty_adults)) {
				qty_adults = 0;
			}
			if (isNaN(qty_special)) {
				qty_special = 0;
			}
			if (isNaN(qty_children)) {
				qty_children = 0;
			}
			var t = qty_adults+qty_special+qty_children;

			$(".cms-booking-product-test",$prod).removeClass("cms-booking-product-test");

			$(".cms-booking-product-date[data-date='"+d+"']",$prod).each(function(){

				var addOrRemove = true;
				var c = "cms-booking-product-test";

				if ($(this).hasClass("block-start")) {
					$(this).nextUntil($(".block-end")).each(function(){
						$(this).toggleClass(c,addOrRemove);
					}).next().toggleClass(c,addOrRemove);
					if ($(this).next().hasClass("block-end")) {
						$(this).next().toggleClass(c,addOrRemove);
					}
				}
				if ($(this).hasClass("block-middle")) {
					$(this).nextUntil($(".block-end")).each(function(){
						$(this).toggleClass(c,addOrRemove);
					}).next().toggleClass(c,addOrRemove);
					if ($(this).next().hasClass("block-end")) {
						$(this).next().toggleClass(c,addOrRemove);
					}
					$(this).prevUntil($(".block-start")).each(function(){
						$(this).toggleClass(c,addOrRemove);
					}).prev().toggleClass(c,addOrRemove);
					if ($(this).prev().hasClass("block-start")) {
						$(this).prev().toggleClass(c,addOrRemove);
					}
				}
				if ($(this).hasClass("block-end")) {
					$(this).prevUntil($(".block-start")).each(function(){
						$(this).toggleClass(c,addOrRemove);
					}).prev().toggleClass(c,addOrRemove);
					if ($(this).prev().hasClass("block-start")) {
						$(this).prev().toggleClass(c,addOrRemove);
					}
				}

				$(this).toggleClass(c,addOrRemove);

			});
		});
		$(".cms-booking-product-test",$form).each(function(){
			var addD = $(this).data("date");
			$(".cms-master-days .cms-booking-product-date[data-date='"+addD+"']",$form).each(function(){
				if (!$(this).hasClass("cms-booking-product-available")) {
					$(".cms-master-days .cms-booking-product-date[data-date='"+d+"']",$form).removeClass("cms-booking-product-available");
				}
			});
		});
	});
	$(".cms-booking-product-test",$form).removeClass("cms-booking-product-test");
}
function setSSCalendarGroupFilter() {
	$(".ss_calendar_group_filter").each(function(){
		$(".event.ss-filter-group-id-"+$(this).data("group-id"),$(".calendar")).hide();
	});
	$(".ss_calendar_group_filter:checked").each(function(){
		$(".event.ss-filter-group-id-"+$(this).data("group-id"),$(".calendar")).show();
	});
}
function loadBookingProdForms() {
	if (!$(".personal-details-forms").length) {
		return false;
	}
	var str = readCookie('bookingData'+$('body').data('page-id'));
	var bookingproducts = JSON.parse(str);
	if (bookingproducts && $(".cms-booking-product").length) {

		var count = 0;
		$(".cms-booking-product").each(function(){
			var adults = bookingproducts[count].adults;
			var children = bookingproducts[count].children;
			var special = bookingproducts[count].special;
			var formdata= bookingproducts[count].forms;
			$(this).find('.cms-booking-product-normal-qty input').val(adults);
			if ($(this).find('.cms-booking-product-children-qty input').length) {
				$(this).find('.cms-booking-product-children-qty input').val(children);
			}
			if ($(this).find('.cms-booking-product-special-qty input').length) {
				$(this).find('.cms-booking-product-special-qty input').val(special);
			}
			cmsUpdateBookingPrices();
			cmsBookingReapply();
			var formcount=0;
			$(".personal-details-forms .personal-details-form",$(this)).each(function(){
				var formd = formdata[formcount];
				for (var i = 0; i < formd.length; i++) {
					if (formd[i].value=="checkedPROP") {
						$("#"+formd[i].id,$(this)).prop('checked',true);
					} else {
						$("#"+formd[i].id,$(this)).val(formd[i].value);
					}
				}
				formcount++;
			});
			
			count++;
		});
		
		setTimeout(function () {
			cmsUpdateBookingPrices();
		}, 10);
		$(".cms-booking-combined-dates:first").before('<p class="Icon_Info">'+$(".cms-booking-combined-dates:first").data("retrieved-msg").replace("(","<a href='' class='resetBooking'>").replace(")","</a>")+'</p>');
		$('.resetBooking').click(function(){
			eraseCookie('bookingData'+$('body').data('page-id'));
			window.location.reload();
			return false;
		});
	}
}
function saveBookingProdState() {
	var bookingproducts = [];
	$(".cms-booking-product").each(function(){
		var forms = [];
		$(".personal-details-forms .personal-details-form",$(this)).each(function(){
			var formdata = [];
			$(".input,.select",$(this)).each(function(){

				formdata.push({id:$(this).attr('id'),value:$(this).val()})
			});
			$(".radio:checked,.checkbox:checked",$(this)).each(function(){
				formdata.push({id:$(this).attr('id'),value:"checkedPROP"})
			});
			forms.push(formdata);
		});
		bookingproducts.push({
			name:$(this).find(".cms-boooking-product-quantities h3").text()
			,adults:$(this).find('.cms-booking-product-normal-qty input').val()
			,children:$(this).find('.cms-booking-product-children-qty input').val()
			,special:$(this).find('.cms-booking-product-special-qty input').val()
			,forms:forms
		});
	});
	
	createCookie('bookingData'+$('body').data('page-id'),JSON.stringify(bookingproducts));
}
if (window.performance && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) {
    loadBookingProdForms();
}
function makeCombinedDays() {
	$(".cms-booking-combined-dates").each(function(){
		$(".cms-master-days",$(this)).remove();
		$(".cms-booking-product-total",$(this)).before('<div class="cms-master-days clearfix"></div>');
		var $days= $("<div class=\"cms-booking-product-dates clearfix\"></div>");
		var added= new Array();
		$(".cms-booking-product-dates").each(function(){
			if (!$("h4",$days).length) {
				$("h4",$(this)).clone().appendTo($days);

			}
			if (!$(".cms-booking-product-dates-inner",$days).length) {
				$(".cms-booking-product-dates-inner",$(this)).clone().empty().appendTo($days);				
			}
			if ($(".cms-booking-product-nav",$(this)).length && !$(".cms-booking-product-nav",$days).length) {
				$(".cms-booking-product-cur-month",$(this)).clone().prependTo($days);
				$(".cms-booking-product-nav",$(this)).clone().prependTo($days);
			}
			

			$(".cms-booking-product-date",$(this)).each(function(){
				var d = $(this).data("date");
				if ($.inArray(d, added)===-1){

					$days.find(".cms-booking-product-dates-inner").append($(this).clone());
					added.push(d);					
				}

			})
		});
		$(".cms-master-days",$(this)).html($days);
		$(".block-start,.block-middle,.block-end",$(".cms-master-days",$(this))).removeClass("block-start block-middle block-end");
		var $form = $(this);
		$(".cms-booking-product-date.cms-booking-product-selected:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)",$(this)).each(function(){
			var d = $(this).data('date');
			$(".cms-master-days .cms-booking-product-date[data-date='"+d+"']",$form).addClass("cms-booking-product-selected");
		});
		cmsUpdateBookingPrices();

	});
}
$(document).ready(function(){
	
	$(".cms-booking-product").on("change",".personal-details-form input,.personal-details-form select",function(){
		saveBookingProdState();
	});
	if (typeof cmshookBeforeBookingProducts != 'undefined') {
		cmshookBeforeBookingProducts();
	}

	
	$(".ss_calendar_group_filter").change(function(){
	setSSCalendarGroupFilter();		
	});

	if ($(".cms-booking-product-form").length>1) {
		$(".cms-booking-product-form").each(function(){
			$(".cms-booking-product-select-product",$(this)).hide();
			$(".cms-booking-product-legend",$(this)).show();
							
			if ($(this).prev().length && $(this).prev()[0].tagName.toLowerCase()=="script") {
				var $prev = $(this).prev().prev();
			} else {
				var $prev = $(this).prev();
			}
			if (!$prev.hasClass("cms-booking-product-form")) {
				$(this).addClass("cms-booking-product-first")
			}
		});
		var $f;
		$(".cms-booking-product-form").each(function(){
			if ($(this).hasClass("cms-booking-product-first")) {
				$f = $(this);
			}
			if ($(this).next().length && $(this).next()[0].tagName.toLowerCase()=="script") {
				var $next = $(this).next().next();
			} else {
				var $next = $(this).next();
			}
			if ($next.hasClass("cms-booking-product-form")) {
				$(".cms-booking-product",$next).insertBefore($f.find(".cms-booking-product-total"));
				$next.addClass("toremove");
			} else {
				return false;
			}
		});
		$(".toremove").remove();
	}
	makeCombinedDays();

	$(".cms-booking-product-form").submit(function(){
		var $form=$(this);
		var fail=false;
		$(".personal-details-form:visible .required:visible",$(this)).each(function(){
			if ($(this).val()=="") {
				fail = true;
			}
		});
		if (fail) {
				alert($form.data('fail-msg'));
				return false;
		}
		$(".personal-details-form:hidden").remove();
		var days = 0;
		$(".cms-booking-product-days-input",$(this)).each(function(){
			days = days+JSON.parse($(this).val()).length;
		});
		if (days==0) {
			$(".cms-booking-product-select-day",$(this)).slideDown();
			return false;
		}
	})
	$(".cms-booking-combined-dates").on("click",".cms-master-days .cms-booking-product-date",function(e,reapply){
		var $form = $(this).parents(".cms-booking-product-form");
		var $clicked = $(this);
		var d = $(this).data("date");
		$(".cms-booking-product-select-day").hide();
		$(".cms-booking-product",$form).each(function(){
			var $prod = $(this);

			var qty_adults = parseInt($(".cms-booking-product-normal-qty input",$prod).val());
			var qty_special = parseInt($(".cms-booking-product-special-qty input",$prod).val());
			var qty_children = parseInt($(".cms-booking-product-children-qty input",$prod).val());

			if (isNaN(qty_adults)) {
				qty_adults = 0;
			}
			if (isNaN(qty_special)) {
				qty_special = 0;
			}
			if (isNaN(qty_children)) {
				qty_children = 0;
			}
			var t = qty_adults+qty_special+qty_children;
			if (t>0) {

				if ($clicked.hasClass("cms-booking-product-selected") && typeof reapply === 'undefined') {
					$(".cms-booking-product-date[data-date='"+d+"']",$prod).trigger("click",false);
				} else {
					$(".cms-booking-product-date[data-date='"+d+"']",$prod).trigger("click",true);
				}

			}
		});
		$(".cms-master-days .cms-booking-product-selected",$form).removeClass("cms-booking-product-selected");
		$(".cms-booking-product-date.cms-booking-product-selected:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)",$form).each(function(){
			var d = $(this).data('date');
			$(".cms-master-days .cms-booking-product-date[data-date='"+d+"']",$form).addClass("cms-booking-product-selected");
		});
	});
	$(".cms-booking-product-dates:not(.cms-master-days .cms-booking-product-dates)").hide();
	

	$(".cms-booking-product-qty input").change(function(){

		cmsUpdateBookingPrices();
		cmsBookingReapply();
		setTimeout(function () {
		cmsUpdateBookingPrices();
		}, 10);

	});
	$(".cms-booking-product-qty input").keyup(function(){
		cmsUpdateBookingPrices();
		cmsBookingReapply();
		setTimeout(function () {
			cmsUpdateBookingPrices();
		}, 10);
		saveBookingProdState();
	});
	$(".cms-booking-qty-plus").click(function(){
		/*
		if ($(".persondetailsmaseter",$(this).parents('.cms-booking-product')).length) {
			if ($(".personal-details-forms .personal-details-form:hidden",$(this).parents('.cms-booking-product')).length) {
				
				$(".personal-details-forms .personal-details-form:hidden:first",$(this).parents('.cms-booking-product ')).show();
			} else {
				$(".personal-details-forms",$(this).parents('.cms-booking-product')).append($(".persondetailsmaseter > *",$(this).parents('.cms-booking-product')).clone());
			}
		}
		*/
		var val = parseInt($("input",$(this).parent()).val());
		val = val+1;
		$("input",$(this).parent()).val(val);
	
		cmsUpdateBookingPrices();
		cmsBookingReapply();
//		setPersonalNames($(this).parents('.cms-booking-product'));
		
		setTimeout(function () {
			cmsUpdateBookingPrices();
		}, 10);
		saveBookingProdState();
	});
	$(".cms-booking-qty-minus").click(function(){
		
		var val = parseInt($("input",$(this).parent()).val());
		if (val>0) {
			//if ($(".persondetailsmaseter",$(this).parents('.cms-booking-product')).length) {
			//	$(".personal-details-forms .personal-details-form:visible:last",$(this).parents('.cms-booking-product')).hide();
			//}
			
		}
		val = val-1;
		if (val<0) {
			val=0;
		}
		
		$("input",$(this).parent()).val(val);
		cmsUpdateBookingPrices();
		cmsBookingReapply();
		//setPersonalNames($(this).parents('.cms-booking-product'));
		
		setTimeout(function () {
			cmsUpdateBookingPrices();
		}, 10);
		saveBookingProdState();
	});
	loadBookingProdForms();
	$(".cms-booking-product-dates-inner").on("scroll",function(){
		if (!$(this).parents("form").hasClass("cms-booking-combined-dates")) {
			var sl = $(this).scrollLeft();
			$(".cms-booking-product-dates-inner").scrollLeft(sl);
		}

	}).on("click",".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date)",function(e,addOverride){
		var $form = $(this).parents(".cms-booking-product-form");
		var combined = ($(this).parents(".cms-booking-combined-dates").length?true:false);
		if ($(this).hasClass("cms-booking-product-available") && !$(this).hasClass("cms-booking-product-history")) {
			if ($(this).hasClass("cms-booking-product-selected")) {
				var addOrRemove = false;
			}  else {
				var addOrRemove = true;
			}
			if (typeof addOverride !== 'undefined') {
				if (addOverride) {
					addOrRemove=true;
				} else {
					addOrRemove=false;
				}
			}
			if ($(this).hasClass("block-start")) {
				$(this).nextUntil($(".block-end")).each(function(){
					$(this).toggleClass("cms-booking-product-selected",addOrRemove);
					if (combined) {
						$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
					}

				}).next().toggleClass("cms-booking-product-selected",addOrRemove);

				if (combined) {
					$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).nextUntil($(".block-end")).next().data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
				}

				if ($(this).next().hasClass("block-end")) {
					$(this).next().toggleClass("cms-booking-product-selected",addOrRemove);
					if (combined) {
						$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).next().data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
					}
				}
			}
			if ($(this).hasClass("block-middle")) {
				$(this).nextUntil($(".block-end")).each(function(){
					$(this).toggleClass("cms-booking-product-selected",addOrRemove);
					if (combined) {
						$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
					}

				}).next().toggleClass("cms-booking-product-selected",addOrRemove);

				if (combined) {
					$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).nextUntil($(".block-end")).next().data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
				}

				if ($(this).next().hasClass("block-end")) {
					$(this).next().toggleClass("cms-booking-product-selected",addOrRemove);
					if (combined) {
						$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).next().data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
					}
				}
				$(this).prevUntil($(".block-start")).each(function(){
					$(this).toggleClass("cms-booking-product-selected",addOrRemove);
					if (combined) {
						$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
					}
				}).prev().toggleClass("cms-booking-product-selected",addOrRemove);

				if (combined) {
					$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).prevUntil($(".block-start")).prev().data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
				}


				if ($(this).prev().hasClass("block-start")) {
					$(this).prev().toggleClass("cms-booking-product-selected",addOrRemove);
					if (combined) {
						$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).prev().data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
					}
				}
			}
			if ($(this).hasClass("block-end")) {
				$(this).prevUntil($(".block-start")).each(function(){
					$(this).toggleClass("cms-booking-product-selected",addOrRemove);
					if (combined) {
						$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
					}

				}).prev().toggleClass("cms-booking-product-selected",addOrRemove);

				if (combined) {
					$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).prevUntil($(".block-start")).prev().data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
				}


				if ($(this).prev().hasClass("block-start")) {
					$(this).prev().toggleClass("cms-booking-product-selected",addOrRemove);
					if (combined) {
						$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).data("date")+"']",$form).prev().toggleClass("cms-booking-product-selected",addOrRemove);
					}
				}
			}

			$(this).toggleClass("cms-booking-product-selected",addOrRemove);
			if (combined) {
				$(".cms-booking-product-date:not(.cms-master-days .cms-booking-product-date,.cms-booking-zero-qty .cms-booking-product-date)[data-date='"+$(this).data("date")+"']",$form).toggleClass("cms-booking-product-selected",addOrRemove);
			}
		}
		cmsUpdateBookingPrices();
	});
	function loadCMSBookingProdMonth(month,year,id,$target) {
		
		$.getJSON( "/actions/ShowBookingProdMonth/", "month="+month+"&year="+year+"&id="+id, function( data ) {

			$target.parents(".cms-booking-product-dates").data("month",month);
			if (month==$target.parents(".cms-booking-product-dates").data("load-month")) {
				$target.parents(".cms-booking-product-dates").find(".cms-booking-product-prev-month").css("visibility","hidden");

			} else {
				$target.parents(".cms-booking-product-dates").find(".cms-booking-product-prev-month").css("visibility","visible");
			}
			$target.parents(".cms-booking-product-dates").data("next-month",data['next_month']);
			$target.parents(".cms-booking-product-dates").data("next-month-year",data['next_month_year']);
			$target.parents(".cms-booking-product-dates").data("prev-month",data['prev_month']);
			$target.parents(".cms-booking-product-dates").data("prev-month-year",data['prev_month_year']);
			$target.parents(".cms-booking-product-dates").find("h3").html(month+" "+year);
			$target.parents(".cms-booking-product-dates").find(".cms-booking-product-next-month").html(data['next_month']+" &rarr;");
			$target.parents(".cms-booking-product-dates").find(".cms-booking-product-prev-month").html("&larr; "+data['prev_month']);
			var type = $target.parents(".cms-booking-product-dates").data("product-type");
			var spaces = $target.parents(".cms-booking-product-dates").data("product-spaces");
			var modules = $target.parents(".cms-booking-product-dates").data("product-modules");

		  var items = [];
		  var $p = $target.parents(".cms-booking-product-dates");
		  $(".cms-booking-product-date",$p).hide();
		  if ($(".date-month-"+month+"-"+year,$p).length) {
			  if($('body').hasClass('booking-month-at-time')) {
				  $(".date-month-"+month+"-"+year,$p).show();
			  } else {
				  $(".date-month-"+month+"-"+year+":not(.cms-booking-filler)",$p).show();
			  }
		  } else {
			  $.each( data['days'], function( key, val ) {
				  	var notavailable=false;

					if (val[3]=="prevMonth"||val[3]=="nextMonth") {
			items.push( "<div class=\"cms-booking-product-date cms-booking-filler cms-booking-product-history date-month-"+month+"-"+year+"\">"
							+"<span class=\"cms-booking-product-date-weekday\">"+val[8]+"</span>"
							+"<span class=\"cms-booking-product-date-day\">"+val[5]+"</span>"
						+"</div>" );
					}
						
					if (
					  val[3]!="prevMonth"
					  && val[3]!="nextMonth"
					  && (
						(
							val[6]==$target.parents(".cms-booking-product-dates").data("load-month")
							&& val[7]==$target.parents(".cms-booking-product-dates").data("load-year")
							&& val[5]>=$target.parents(".cms-booking-product-dates").data("load-day")
						)
						||
						(
							val[6]!=$target.parents(".cms-booking-product-dates").data("load-month")
							|| val[7]!=$target.parents(".cms-booking-product-dates").data("load-year")
						)
					   )
					)
					{
						var d = "";
						if (type==2) {
							var available_modules = modules - val[4]['booked_modules'];

							if (available_modules>0) {
								d = d+" data-available=\""+spaces+"\"";
							} else {
								d = d+" data-available=\"0\"";
								notavailable =true;
							}
						} else {
							var available = spaces - val[4]['booked_individuals'];
							d = d+" data-available=\""+available+"\"";
							if (available<=0) {
								notavailable = true;
							}
						}
						var c = "";
						if (val[8]=="Mon") {
							c = c+" cms-booking-date-mon";
						}
						if (val[4]['price_normal']!=0 && notavailable===false) {
							c = c+" cms-booking-product-available";
						}
						if (val[4].block_start!=0) {
							c = c+" block-start";
						}
						if (val[4].block_middle!=0) {
							c = c+" block-middle";
						}
						if (val[4].block_end!=0) {
							c = c+" block-end";
						}


						d = d+" data-minimum-price-per-place=\""+val[4]['minimum_price_per_place']+"\"";
						d = d+" data-price-normal=\""+val[4]['price_normal']+"\"";
						d = d+" data-price-special=\""+val[4]['price_special']+"\"";
						d = d+" data-price-children=\""+val[4]['price_children']+"\"";
						d = d+" data-date=\""+val[1]+"\"";

					items.push( "<div class=\"cms-booking-product-date date-month-"+val[6]+"-"+val[7]+" "+c+"\" "+d+"><span class=\"cms-booking-product-date-weekday\">"+val[8]+"</span>"
								+"<span class=\"cms-booking-product-date-day\">"+val[5]+" </span></div>" );
					}
			  });
			  $target.append(items.join( "" ));
		  }
		  $target.scrollLeft(0);
			if (month==$target.parents(".cms-booking-product-dates").data("load-month")) {
				var ol = $(".cms-booking-product-date:not(.cms-booking-product-history):first",$target).position().left;
			  $target.animate({scrollLeft:ol},500);
			}
		  makeCombinedDays();
		  cmsUpdateBookingPrices();
		  
		});
	}
	$(".cms-booking-combined-dates").on("click",".cms-booking-product-prev-month",function(){
			$(".cms-booking-product-prev-month:not(.cms-master-days .cms-booking-product-prev-month)").each(function(){
				var $p = $(this).parents(".cms-booking-product-dates");
				var month = $p.data("prev-month");
				var year = $p.data("prev-month-year");
				var id = $p.data("product-id");
				loadCMSBookingProdMonth(month,year,id,$(".cms-booking-product-dates-inner",$p));
			});
		return false;
	});
	$(".cms-booking-combined-dates").on("click",".cms-booking-product-next-month",function(){
		$(".cms-booking-product-next-month:not(.cms-master-days .cms-booking-product-next-month)").each(function(){
			var $p = $(this).parents(".cms-booking-product-dates");
			var month = $p.data("next-month");
			var year = $p.data("next-month-year");
			var id = $p.data("product-id");
			loadCMSBookingProdMonth(month,year,id,$(".cms-booking-product-dates-inner",$p));
		});
		return false;
	});
	if ($(".formUsedInCheckout").length && $("#paymentGatewayForm").length) {
		$("#paymentGatewayForm").submit(function(){
			if (typeof ga === 'function') {
				ga('send', 'event', 'Checkout', 'Gone to Payment Gateway', $(this).attr("action"));
			}
			$(".form.formUsedInCheckout").submit();
			return false;
		});
	}
	if (!$(".formUsedInCheckout").length && $("#paymentGatewayForm").length) {
		$("#paymentGatewayForm").submit(function(){
			if (typeof ga === 'function') {
				ga('send', 'event', 'Checkout', 'Gone to Payment Gateway', $(this).attr("action"));
			}
		});
	}
	$("body").click(function(e){
		if (!$(e.target).parents("#defaultDatepicker").length && !$(e.target).hasClass("default_datepicker")) {
			$("#defaultDatepicker").remove();
			$("body").removeClass("showingDefaultDatepicker");
			$(".default_datepicker_target").removeClass("default_datepicker_target");
		}
	});
	$(".default_datepicker").click(function(){
		$(this).addClass("default_datepicker_target");
		$("body").addClass("showingDefaultDatepicker");
		$("#defaultDatepicker").remove();
		var $dp = $("<div id='defaultDatepicker'></div>");
		var ot = $(this).offset().top + $(this).outerHeight() + 3;
		var ol = $(this).offset().left;
		$dp.css({
			top:ot+"px"
			,left:ol+"px"
			,background:"white"
			,padding:"5px"
			,position:"absolute"
			,zIndex:3000
			,border:"1px solid #ddd"
			,borderRadius:"5px"
			,maxWidth:"250px"
		});
		$dp.appendTo($("body"));
		if ($(this).hasClass("prevent_past")) {
			var more = "?cutoff="+$(this).data('cutoff')+"&timezone="+$(this).data("timezone");
		} else {
			var more = "";
		}
		$("#defaultDatepicker").load("/actions/DefaultDatepicker/"+more,function(){
			assignDatepickerCal();
		});
	});
	$(".separateOptionStock").change(function(){
		var code = $(this).attr("data-product-code");
		var stock = $("option",$(this)).filter(":selected").attr("data-stock");
		$("#updateWithOptionStock"+code).text(stock);
	});
if ($("html").attr("lang")!="") {
	lang = "?language="+$("html").attr("lang");
	langAppend = "&language="+$("html").attr("lang");
}
$(".lightbox").click(function(){
	var clicked = $(this);
	var parentsId = $(this).parents(".galleryWrapper").attr("id");
	$(".lightboxCurrent").removeClass("lightboxCurrent");
	clicked.addClass("lightboxCurrent");
	$('embed, object, select',"#wrapper").css({ 'visibility' : 'hidden' });
	var formName = $(this).parents(".galleryWrapper").attr("id").replace(/gallery/, "");
	$('body').append("<div id='lightboxOverlay'></div><div id='lightboxOuter'><div id='lightboxContainer'><div id='lightboxExtra1'><div id='lightboxExtra2'><div id='lightboxExtra3'><div id='lightboxClose'></div><div id='lightboxPrev'></div><div id='lightboxNext'></div><div id='lightboxInner'></div></div></div></div></div><div id='lightboxStuff'><div id='lightboxShop'></div><div id='lightboxCaption'></div></div></div>");
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
			$('<img src="'+href+'" style="display:none;"/>').appendTo("body").load(function(){
			        $("#lightboxContainer").animate({
			        	width: $(this).width(),
			        	height: $(this).height()
			        },300,cont3);
			        $("#lightboxStuff").animate({
			        	width: $(this).width()
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
			$("#lightboxOverlay,#lightboxOuter").fadeOut(300,cont2);
			$(".shopGalleryVariant[name="+formName+"]").appendTo("body").hide();
		});
		var totalEls = $("#"+parentsId+" .lightbox").length-1;
		var clickedEl = 0;
		var currentEl = 0;
		$("#"+parentsId+" .lightbox").each(function(){
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
				$("#"+parentsId+" .lightbox").each(function(){
					stop++;
					if ($(this).hasClass("lightboxCurrent")) {
						stop2 = stop;
					}
				});
				var stop3 = 0;
				$("#"+parentsId+" .lightbox").each(function(){
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
				$("#"+parentsId+" .lightbox").each(function(){
					if ($(this).hasClass("lightboxCurrent")) {
						current = prev;
					}
					prev++;
				});
				var prev = 0;
				$("#"+parentsId+" .lightbox").each(function(){
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
		$("#lightboxStuff").css("width",preloader.width+"px");
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
		$("#lightboxContainer").animate({
			width: preloader.width,
			height: preloader.height
		},300,cont);
	};
	preloader.src = clicked.attr("href");
	return false;
});
function assignDatepickerCal () {
	$("#defaultDatepicker td:not(.unavailable)").click(function(){
		$(".default_datepicker_target").val($(this).attr("data-date")).change();
		$("#defaultDatepicker").remove();
		$("body").removeClass("showingDefaultDatepicker");
		$(".default_datepicker_target").removeClass("default_datepicker_target");
	});
	$("#datepicker_next_month").click(function(){
		month = $("#datepicker_next_month_val").val();
		year = $("#datepicker_next_month_year").val();
		
		if ($(".default_datepicker_target").hasClass("prevent_past")) {
			var more = "&cutoff="+$(".default_datepicker_target").data('cutoff')+"&timezone="+$(".default_datepicker_target").data("timezone");
		} else {
			var more = "";
		}

		$("#defaultDatepicker").load("/actions/DefaultDatepicker/?month="+month+"&year="+year+langAppend+more,function(){
			assignDatepickerCal();
		});
		return false;
	});
	$("#datepicker_prev_month").click(function(){
		month = $("#datepicker_prev_month_val").val();
		year = $("#datepicker_prev_month_year").val();

		if ($(".default_datepicker_target").hasClass("prevent_past")) {
			var more = "&cutoff="+$(".default_datepicker_target").data('cutoff')+"&timezone="+$(".default_datepicker_target").data("timezone");
		} else {
			var more = "";
		}
		
		
		$("#defaultDatepicker").load("/actions/DefaultDatepicker/?month="+month+"&year="+year+langAppend+more,function(){
			assignDatepickerCal();
		});
		return false;
	});
}
function assignBlogCal() {
	$("#blog_next_month").click(function(){
		month = $("#blog_next_month_val").val();
		year = $("#blog_next_month_year").val();

		$("#blogCal").load("/actions/BlogCal/?month="+month+"&year="+year+langAppend+"&"+catAppend,function(){
			assignBlogCal();
		});
		return false;
	});
	$("#blog_prev_month").click(function(){
		month = $("#blog_prev_month_val").val();
		year = $("#blog_prev_month_year").val();

		$("#blogCal").load("/actions/BlogCal/?month="+month+"&year="+year+langAppend+"&"+catAppend,function(){
			assignBlogCal();
		});
		return false;
	});
}
var url = window.location.href;
url = url.split("/");
if (lang=="") {
	var catPrepend="?";
} else {
	var catPrepend="&";
}
var catAppend="";
if (url[4]=="category"&&url[5]!="") {
	var catAppend="cat="+url[5];
}
if (url[7]=="category"&&url[8]!="") {
	var catAppend="cat="+url[8];
}
if (url[8]=="category"&&url[9]!="") {
	var catAppend="cat="+url[9];
}
$("#blogCal").load("/actions/BlogCal/"+lang+catPrepend+catAppend,function(){
	assignBlogCal();
});

$("#commentForm").load("/actions/ShowCommentForm/"+lang, function(){
	if (typeof moduleHeights == 'function') {
		moduleHeights();
	}
	$("#commentFormForm a.submitForm").click(function(){
		$(this).parent().submit();
		return false;
	});
	$("#commentFormForm").submit(function(){
		$("#loader").fadeIn(300);


		if ($("#name").val() == "") {
				$("#name").addClass("error");
				$("#name").animate({
					left: +10
				}, 20, function(){
					$("#name").animate({
						left: -20
					}, 40, function(){
						$("#name").animate({
							left: +20
						}, 40, function(){
							$("#name").animate({
								left: 0
							}, 20, function(){
								$("#name").removeClass("error");
								$("#name").focus();
								$("#loader").fadeOut(200);
							});
						});
					});
				});

				return false;


		} else if ($("#email").val() == "") {
			$("#email").addClass('error');
			$("#email").animate({
				left: +10
			}, 20, function(){
				$("#email").animate({
					left: -20
				}, 40 ,function(){
					$("#email").animate({
						left: +20
					}, 40 ,function(){
						$("#email").animate({
							left: -0
						}, 20 ,function(){
							$("#email").removeClass('error');
							$("#email").focus();

						});
					});
				});
			});
			$("#loader").fadeOut(200);

			return false;

		} else if ($("#comment").val() == "") {
			$("#comment").addClass('error');
			$("#comment").animate({
				left: +10
			}, 20 ,function(){
				$("#comment").animate({
					left: -20
				}, 40 ,function(){
					$("#comment").animate({
						left: +20
					}, 40 ,function(){
						$("#comment").animate({
							left: -0
						}, 20 ,function(){
							$("#comment").removeClass('error');
							$("#comment").focus();

						});
					});
				});
			});
			$("#loader").fadeOut(200);

			return false;
		} else  {
			function urlencode( str ) {
			    // http://kevin.vanzonneveld.net
			    // +   original by: Philip Peterson
			    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
			    // *     example 1: urlencode('Kevin van Zonneveld!');
			    // *     returns 1: 'Kevin+van+Zonneveld%21'

			    var ret = str;

			    ret = ret.toString();
			    ret = encodeURIComponent(ret);
			    ret = ret.replace(/%20/g, '+');

			    return ret;
			}
			function htmlentities( s ){
			    // http://kevin.vanzonneveld.net
			    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
			    // *     example 1: htmlentities('Kevin & van Zonneveld');
			    // *     returns 1: 'Kevin &amp; van Zonneveld'

			    var div = document.createElement('div');
			    var text = document.createTextNode(s);
			    div.appendChild(text);
			    return div.innerHTML;
			}
			$.ajax({
				type: "GET",
				url: "/actions/CheckEmail/",
				data: "email="+$("#email").val(),
				success: function(msg){
					if (msg == "ok") {
						var validEmail = true;
					} else {
						var validEmail = false;
					}
					if (validEmail == false) {
						$("#emailIncorrect").css("display","block");
						$("#email").addClass('error');
						$("#email").animate({
							left: +10
						}, 20 ,function(){
							$("#email").animate({
								left: -20
							}, 40 ,function(){
								$("#email").animate({
									left: +20
								}, 40 ,function(){
									$("#email").animate({
										left: -0
									}, 20 ,function(){
										$("#email").removeClass('error');
										$("#email").focus();
									});
								});
							});
						});
						$("#loader").fadeOut(200);

						return false;

					} else {
						$("#emailIncorrect").css("display","none");
						$.ajax({
							type: "GET",
							url: "/actions/AddComment/"+lang,
							data: "name="+$("#name").val()+"&email="+$("#email").val()+"&website="+urlencode($("#website").val())+"&comment="+urlencode($("#comment").val())+"&blogId="+$("#blogId").val(),
							success: function(msg){
								$('#commentsList').html(msg);
								if (typeof moduleHeights == 'function') {
									moduleHeights();
								}
								$('#name').val("");
								$('#email').val("");
								$('#website').val("");
								$('#comment').val("");
								$("#loader").fadeOut(200);

							}
						});

						return false;

					}
				}
			});
			return false;

		}
		return false;
	});
});

$("#loginForm").submit(function(){
	pwhash = hex_hmac_sha1(hex_hmac_sha1($("input[name=password]",$(this)).val(),$("#saltInput").val()),$("#timestampInput").val());
	$("#hashInput").val(pwhash);
	$("input[name=password]",$(this)).val("")

});

if ($(".form").length>0) {
	$(".email1").css({
		"position":"absolute"
		,"top":"-4000px"
		,"left":"-1000px"
	});
	$(".fakeemail").hide();
	$(".form:not(.accessible-mode .form)").each(function(){
	$(this).append("<input type='hidden' name='ajax' value='yes'/>");
	});
}
$(".form:not(.accessible-mode .form)").submit(function(){
	if (!$("#addToBasketId",$(this)).length)  {
		var ajaxSend = true;
	} else {
		var ajaxSend = false;
		if ($(this).hasClass("oktosend")) {
			return true;
		}
	}
	if ($(this).attr("id")=="paymentGatewayForm") {
		var ajaxSend = false;
		if ($(this).hasClass("oktosend")) {
			return true;
		}
	}
	var loader = $("#loader",$(this));
	$("#loader",$(this)).fadeIn(300);
	$(this).addClass("validating");
	$("#success",$(this)).hide();
	$(".cf_contains_errors",toSend).hide();
	$(".cf_error").removeClass("cf_error");
	var toSend = $(this);
	function showResponseForm (responseText, statusText) {
	
		if (responseText=="error: duplicate") {
			loader.fadeOut(200);
			alert("Error: You've already sent this form");
			return false;
		}
		if (responseText=="error: flood") {
			loader.fadeOut(200);
			alert("Error: Please wait 15 seconds between sending forms.");
			return false;
		}
		if (responseText=="formInCheckout") {
			$("#paymentGatewayForm").unbind().submit();
		} else {
			if (responseText.substring(0,9)=="redirect:") {
				window.location.href=responseText.substring(9,responseText.length);
			}
			loader.fadeOut(200);
			$("#success",toSend).fadeIn(200,function(){
				if (typeof moduleHeights == 'function') {
					moduleHeights();
				}				
			});
			if (typeof ga === 'function') {
				ga('send', 'event', 'Contact Forms', 'Send', 'ID: '+$("input[name=formId]",toSend).val());
			}
			$(".input",toSend).val("");
			$(".textarea",toSend).val("");
			
		}

	}

	var optionsForm = {
	    success: showResponseForm  // post-submit callback
	};
	if ($("textarea.required,select.required,input.required[type!='checkbox'], .required[type='checkbox']:not(:checked)",$(this)).filter(function() {
		if (typeof $(this).attr('placeholder') !='undefined') {
			if ($(this).val()!=$(this).attr('placeholder') && $(this).val()!='') {
				if ($(this).data("required-format")) {
					
					for (var i = 0; i < $(this).data("required-format").length; i++) {
						if ($(this).data("required-format")[i]=="#"){
							if (isNaN($(this).val()[i])) {
								return true;
							}
						}
						if ($(this).data("required-format")[i]==" "){
							if ($(this).val()[i]!=" ") {
								return true;
							}
						}
						if ($(this).data("required-format")[i]=="-"){
							if ($(this).val()[i]!="-") {
								return true;
							}
						}
					}
				} else {
					return false;					
				}
			} else {
				return true;
			}
		} else {
			return $(this).val() == "";
		}
	 }).length > 0) {
		$("textarea.required,select.required,input.required[type!='checkbox'], .required[type='checkbox']:not(:checked)",$(this)).filter(function() {
			if (typeof $(this).attr('placeholder') !='undefined') {
				if ($(this).val()!=$(this).attr('placeholder') && $(this).val()!='') {
					if ($(this).data("required-format")) {
						
						for (var i = 0; i < $(this).data("required-format").length; i++) {
							if ($(this).data("required-format")[i]=="#"){
								if (isNaN($(this).val()[i])) {
									return true;
								}
							}
							if ($(this).data("required-format")[i]==" "){
								if ($(this).val()[i]!=" ") {
									return true;
								}
							}
							if ($(this).data("required-format")[i]=="-"){
								if ($(this).val()[i]!="-") {
									return true;
								}
							}
						}
					} else {
						return false;					
					}
				} else {
					return true;
				}
			} else {
				return $(this).val() == "";
			}
		 }).addClass('cf_error').first().each(function(){
			$(this).focus();
			loader.fadeOut(200);
			return false;
		});
		$(".cf_contains_errors",toSend).slideDown(300,function(){
			if (typeof moduleHeights == 'function') {
				moduleHeights();
			}
		});
		return false;

	} else {
		if ( $("#emailInput",$(this)).length > 0 ) {
			if ($("#emailInput",$(this)).hasClass("required")) {
				$.ajax({
					type: "GET",
					url: "/actions/CheckEmail/",
					data: "email="+$("#emailInput",toSend).val(),
					success: function(msg){
						if (msg == "ok") {
							var validEmail = true;
						} else {
							var validEmail = false;
						}
						if (validEmail == false) {
							$("#emailIncorrect",toSend).css("display","block");
							$("#emailInput",toSend).addClass('cf_error');
							$("#emailInput",toSend).focus();
							$(".cf_contains_errors",toSend).slideDown();
							loader.fadeOut(200);
							return false;

						} else {
							$("#emailIncorrect",toSend).css("display","none");
							if (ajaxSend==true) {
								$(toSend).ajaxSubmit(optionsForm);
								return false;
							}
							toSend.removeClass("validating").addClass("oktosend");
							toSend.submit();
						}
					}
				});
				//if (ajaxSend==true) {
					//return false;
				//}
			} else {
				if ($("#emailInput",toSend).val()!="") {
					$.ajax({
						type: "GET",
						url: "/actions/CheckEmail/",
						data: "email="+$("#emailInput",toSend).val(),
						success: function(msg){
							if (msg == "ok") {
								var validEmail = true;
							} else {
								var validEmail = false;
							}
							if (validEmail == false) {
								$("#emailIncorrect",toSend).css("display","block");
								$("#emailInput",toSend).addClass('cf_error');
								$("#emailInput",toSend).focus();
								$(".cf_contains_errors",toSend).slideDown();
								loader.fadeOut(200);
								return false;

							} else {
								if (ajaxSend==true) {
								$("#emailIncorrect",toSend).css("display","none");
								$(toSend).ajaxSubmit(optionsForm);
								return false;
								}
								toSend.removeClass("validating").addClass("oktosend");
								toSend.submit();
							}
						}
					});
				} else {
					if (ajaxSend==true) {
					$("#emailIncorrect",toSend).css("display","none");
					$(toSend).ajaxSubmit(optionsForm);
					return false;

					}
					toSend.removeClass("validating");
					return true;
				}
			}

		} else {
				if (ajaxSend==true) {
				$("#emailIncorrect",toSend).css("display","none");
				$(toSend).ajaxSubmit(optionsForm);
				return false;
				}
				toSend.removeClass("validating");
				return true;
		}
	}

	//if (ajaxSend==true) {
		return false;
	//}

});

function checkLivechat () {
	
		$.ajax({
			type: "GET",
			url: "/actions/LivechatStatus/",
			success: function(msg){
				if (msg=="online") {
					$("#livechat").show();
					if (typeof moduleHeights == 'function') {
						moduleHeights();
					}
					$(".livechatWidgetOffline").hide();
					$(".livechatWidgetOnline").show();
				} else {
					$("#livechat").hide();
					if (typeof moduleHeights == 'function') {
						moduleHeights();
					}
					$(".livechatWidgetOffline").show();
					$(".livechatWidgetOnline").hide();
				}
			}
		});
		setTimeout(checkLivechat, 10000);
	

}
checkLivechat();

$("#miniBasket").load("/actions/ShowMiniBasket/"+lang);

$("#startConvo").click(function () {
	href = this.href;
	var popup = window.open(href,'','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=311,height=349');
	return false;
})
$(".shopOptions").change(function(){
	href = $("#"+$(this).attr("id")+"button").attr("href");
	href = href.split("&variant=");
	newHref = href[0]+"&variant="+urlencode($(this).val());
	$("#"+$(this).attr("id")+"button").attr("href",newHref);
});
if ($(".shopGalleryVariant").length>0) {
	$(".shopGalleryVariant").each(function(){

		if ($("#"+$(this).attr("name")+"gallery").length>0) {
			$("."+$(this).attr("name")+"title").show();
			$(this).appendTo('body');
			$(this).hide();
		}

	});
}
$.ajax({
	type: "GET",
	url: "/actions/LogStats/?title="+document.title+"&referrer="+document.referrer+"&url="+document.location.href
	}
);

});
