<script>
{literal}
if (typeof bookingProdLoaded =='undefined') {
var bookingProdLoaded=true;
$(document).ready(function(){
		$("head").append("<style type=\"text/css\" media=\"screen\">\
\
			.cms-boooking-product-quantities {\
				float:left;\
				width:25%;\
				border-right:1px solid #eee;\
				margin-right:-1px;\
				padding-bottom:15px;\
			}\
			.cms-boooking-product-quantities h3 {\
				margin:0 15px 5px 0;\
				font-size:20px;\
				line-height:24px;\
				font-weight:bold;\
				float:left;\
			}\
\
		.cms-booking-combined-dates .cms-boooking-product-quantities {\
			float:none;width:100%;border:none;padding-bottom:0;\
		}\
		.cms-booking-combined-dates .cms-booking-products-qtys {\
			float:right;\
		}\
			.cms-booking-product-dates {\
				float:left;\
				width:75%;\
				height:90px;\
				padding-top:8px;\
				padding-left:30px;\
				box-sizing:border-box;\
				border-left:1px solid #eee;\
			}\
			.booking-month-at-time .cms-booking-product-dates {\
				height:auto;\
			}\
			.cms-booking-combined-dates .cms-booking-product-dates {\
				padding-left:0;\
				width:100%;\
				float:none;\
				margin-bottom:10px;\
			}\
			.cms-master-days .cms-booking-product-dates {\
				float:none\
				width:auto;\
				border:none\
			}\
			.cms-booking-product-dates h3 {\
				margin:0;text-align:center;\
				font-size:14px;line-height:20px;\
				font-weight:700;\
				padding-bottom:10px;\
				text-transform:uppercase;\
			}\
			.cms-booking-combined-dates .cms-boooking-product-quantities h3 {\
				margin-top:8px;\
			}\
			.cms-booking-product-next-month {\
				float:right;\
			}\
			.cms-booking-product-prev-month {\
				float:left;\
			}\
			.cms-booking-product-nav  {\
				text-transform:uppercase;\
				font-size:14px;line-height:20px;\
			}\
			.cms-booking-product-dates-inner {\
				white-space:nowrap;\
				 display:inline-block;\
				height:70px;\
				overflow:auto;\
				-webkit-overflow-scrolling: touch;\
				width:100%;\
				position:relative;\
			}\
\
			.cms-booking-product-dates-inner::-webkit-scrollbar {\
			    -webkit-appearance: none;\
			}\
\
			.cms-booking-product-dates-inner::-webkit-scrollbar:horizontal {\
			    height: 14px;\
			}\
\
			.cms-booking-product-dates-inner::-webkit-scrollbar-thumb:horizontal {\
			    border-radius: 8px;\
			    border: 2px solid white; /* should match background, can't be transparent */\
			    background-color: rgba(0, 0, 0, .3);\
			}\
\
			.cms-booking-product-dates-inner::-webkit-scrollbar-track:horizontal {\
			    background-color: #fff;\
			    border-radius: 8px;\
			}\
\
			.cms-booking-product-not-available-for-days {\
				position:relative;\
			}\
			.cms-booking-product-not-available-for-days:before {\
				z-index:2;\
				visibility:visible;\
				width:100%;height: 100%;\
				content:\"\";\
				text-align:center;\
				position:absolute;\
				top:0;\
				left:0;\
				right:0;\
				bottom:0;\
				background:rgba(255,255,255,0.5);\
			}\
			.cms-booking-product-date {\
				height:50px;\
				width:50px;\
				text-align:left;\
				font-size:20px;\
				line-height:24px;\
				display:inline-block;\
				border:2px solid #ccc;\
				border-radius:4px;\
				-moz-border-radius:4px;\
				-webkit-border-radius:4px;\
				background:#C4C4C4;\
				color:#FFF;\
				position:relative;\
				overflow:hidden;\
				cursor:default;\
				margin:0 2px 0 0;\
				-webkit-user-select: none;\
				    -khtml-user-select: none;\
				    -moz-user-select: none;\
				    -ms-user-select: none;\
				    user-select: none;\
			}\
			.cms-booking-dates-all .cms-booking-product-date {\
				padding:6px 10px;\
				height:auto;\
				text-align:center;\
			}\
			.cms-booking-product-date.cms-booking-filler {\
			display:none;\
			opacity:0.3;\
			background:#ccc;\
			color:#333;\
			}\
			.cms-booking-product-date.cms-booking-filler  span {\
			display:none\
			}\
			.cms-booking-product-legend {\
				display:none;\
				margin-top:20px;\
			}\
			.booking-month-at-time .cms-booking-filler {\
					display:block\
			}\
			.booking-month-at-time .cms-booking-product-dates-inner {\
				height:auto;\
			}\
			.booking-month-at-time .cms-booking-product-date {\
				float:left;\
				width:14%;\
				margin:0 0.28% 0 0;\
				box-sizing:border-box;\
				margin-bottom:4px;\
			}\
			.booking-month-at-time.booking-just-available-dates .cms-booking-product-date {\
				width:auto;\
			}\
			.booking-month-at-time .cms-booking-product-date.cms-booking-date-mon {\
			clear:left;\
			}\
			.cms-booking-product-date.cms-booking-product-available.cms-booking-product-toomany\
			,.cms-booking-product-date.cms-booking-product-available.cms-booking-product-toomany.cms-booking-product-selected {\
				background:#C4C4C4;\
				border:2px solid #ccc;\
				color:#FFF;\
			}\
			.cms-booking-legend-item { \
				display:block;\
			}\
			.cms-booking-legend-unavailable {\
				border:2px solid #ccc;\
				border-radius:4px;\
				-moz-border-radius:4px;\
				-webkit-border-radius:4px;\
				background:#C4C4C4;\
				width:15px;\
				height:15px;\
				display:inline-block;\
			}\
			.cms-booking-legend-available {\
				border-radius:4px;\
				-moz-border-radius:4px;\
				-webkit-border-radius:4px;\
				background:#FFF;\
				color:#000;\
				border:2px solid #555;\
				width:15px;\
				height:15px;\
				display:inline-block;\
			}\
			.cms-booking-legend-selection {\
				background:#0093EF;\
				color:#fff;\
				border:2px solid #0093EF;\
				border-radius:4px;\
				-moz-border-radius:4px;\
				-webkit-border-radius:4px;\
				width:15px;\
				height:15px;\
				display:inline-block;\
			}\
			.cms-booking-product-date.cms-booking-product-available {\
				background:#FFF;\
				color:#000;\
				border:2px solid #555;\
				cursor:pointer;\
			}\
			.cms-booking-product-date.cms-booking-product-history,	.cms-booking-product-date.cms-booking-product-history.cms-booking-product-available {\
				opacity:0.3;\
				background:#ccc;\
				color:#333;\
			}\
			.cms-booking-product-date.cms-booking-product-available.cms-booking-product-selected {\
				background:#0093EF;\
				color:#fff;\
				border:2px solid #0093EF;\
				cursor:pointer;\
			}\
			.cms-booking-product-date-weekday {\
				position:absolute;\
				top:3px;\
				left:3px;\
				font-size:11px;\
				line-height:11px;\
				text-transform:uppercase;\
			}\
			.cms-booking-product-date-day {\
				position:absolute;\
				bottom:3px;\
				left:3px;\
				text-transform:uppercase;\
			}\
			.cms-booking-product-qty {\
				float:left;\
				width:50%;\
				padding-right:10px;\
				box-sizing:border-box;\
				font-size:13px;\
				line-height:16px;\
				margin-bottom:4px;\
				margin-top:10px;\
\
			}\
			.cms-booking-combined-dates .cms-booking-product-qty {\
				width:120px;\
				clear:none;\
			}\
\
			.cms-booking-product-qty.cms-booking-qty-last-of-three {\
				margin-top:10px;\
			}\
\
				@media (max-width:1000px) {\
					.cms-booking-product-qty {\
						width:100%;\
					}\
				}\
			.cms-booking-product-input-button {\
				width:100%;\
				padding:0 30px;\
				position:relative;\
				border:1px solid #ccc;\
				border-radius:4px;overflow:hidden;\
				-moz-box-sizing:border-box;\
				-webkit-box-sizing:border-box;\
				box-sizing:border-box;\
			}\
			.cms-booking-qty-button {\
				-webkit-user-select: none;\
				    -khtml-user-select: none;\
				    -moz-user-select: none;\
				    -ms-user-select: none;\
				    user-select: none;\
				position:absolute;\
				top:0px;\
				left:0px;\
				botttom:0px;\
				width:30px;\
				height:30px;\
				background:#ccc;\
				color:#fff;\
				text-align:center;\
				font-size:30px;\
				line-height:23px;\
				cursor:pointer;\
			}\
			.cms-booking-qty-button:hover {\
				background:#888;\
			}\
			.cms-booking-qty-plus {\
				right:0px;\
				left:auto;\
			}\
			.cms-booking-product-qty input {\
				width:100%;\
				box-sizing:border-box;\
				font-size:14px;\
				line-height:30px;\
				margin:0;\
				padding:0px 10px;\
				text-align:center;\
				height:30px;\
				border-radius:4px;\
				outline:0;\
				border:none;\
			}\
			.cms-booking-product-qty input:focus {\
				border:none;\
				outline:0;\
				box-shadow:none;\
			}\
			.cms-booking-product-total {\
				float:right;\
				clear:both;\
				padding:20px 0 0\
			}\
			.cms-booking-combined-dates .cms-booking-product-total {\
				width:20%;\
				text-align:right;\
				padding-top:15px;\
			}\
			.cms-booking-product-total-surcharge {\
				display:none;\
			}\
			.cms-booking-product {\
				padding:10px 0;\
				border-bottom:1px solid #ccc;\
			}\
			.cms-booking-product:first-child {\
				border-top:1px solid #ccc;\
			}\
			.cms-booking-product-total-price {\
				font-size:22px;\
			}\
\
			@media (max-width:480px) {\
				.cms-boooking-product-quantities {\
					float:none;\
					width:100%;\
					border:none;\
				}\
				.cms-booking-product-dates {\
					float:none;\
					width:100%;\
					border:none;\
					padding-left:0\
				}\
				.cms-booking-product {\
					padding-bottom:30px;\
					margin-bottom:20px;\
				}\
				.cms-booking-combined-dates .cms-booking-products-qtys {\
					float:left;\
				}\
				.cms-booking-product-dates-inner.cms-booking-dates-all {\
					display:block;\
				}\
				.cms-booking-dates-all .cms-booking-product-date {\
					width:auto;\
					margin-right:0;\
					display:block;\
					float:none;\
				}\
				.cms-booking-combined-dates .cms-booking-product-total {\
					float:none;\
					clear:both;\
					width:auto;\
				}\
			}\
\
\
		</style>");
});
}
{/literal}

</script>
<form action="/actions/AddToBasket/" method="post" class="cms-booking-combined-dates cms-booking-product-form" data-fail-msg="Please fill out all required fields" data-retrieved-msg="This page has recovered your previously entered information. (Click here to reset and start again).">
	<input type="hidden" name="language" value="{$language}" >
	<div class="cms-booking-product clearfix" 
		data-use-minimum-price="{if $type==2}{$use_minimum_charge_per_place}{else}0{/if}" 
		data-adult-name="{if $adult_name}{$adult_name}{else}{$langs.Adult}{/if}" 
		data-adults-name="{if $adults_name}{$adults_name}{else}{$langs.Adults}{/if}" 
		data-child-name="{if $child_name}{$child_name}{else}{$langs.Child}{/if}" 
		data-children-name="{if $children_name}{$children_name}{else}{$langs.Children}{/if}" 
		data-concession-name="{if $concession_name}{$concession_name}{else}{$langs.Concession}{/if}" 
		data-children-name="{if $concessions_name}{$concessions_name}{else}{$langs.Concessions}{/if}"
		data-adult-required="{$adult_required}"
		data-product-type="{$type}"
		>
		<div class="cms-boooking-product-quantities clearfix">
		<h3>{$name}</h3>

			<input type="hidden" name="booking_productsid[]" value="{$id}">
			<input type="hidden" name="days[]" value="" class="cms-booking-product-days-input">
		<div class="cms-booking-products-qtys">
			<div class="cms-booking-product-qty cms-booking-product-normal-qty">
				<div class="cms-booking-product-input-button">
					<input name="number[]" type="text" value="0">
					<span class="cms-booking-qty-button cms-booking-qty-plus">+</span>
					<span class="cms-booking-qty-button cms-booking-qty-minus">-</span>
				</div>
				<span class='booking-price-label' data-singular="{if $different_price_special||$different_price_children}
							{if $adult_name}{$adult_name}{else}{$langs.Adult}{/if}
							{else}
							{if $type==0}
							Individual
							{else}
							Individual
							{/if}
							{/if}">{if $different_price_special||$different_price_children}
							{if $adults_name}{$adults_name}{else}{$langs.Adults}{/if}
							{else}
							{if $type==0}
							Quantity
							{else}
							Quantity
							{/if}
							{/if}</span>

			</div>
			{if $different_price_special}
			<div class="cms-booking-product-qty cms-booking-product-special-qty">

			<div class="cms-booking-product-input-button"><input name="special[]" type="text" value="0">
			<span class="cms-booking-qty-button cms-booking-qty-plus">+</span>
			<span class="cms-booking-qty-button cms-booking-qty-minus">-</span>
			</div>
			<span class='booking-price-label' data-singular="{if $concession_name}{$concession_name}{else}{$langs.Concession}{/if}">{if $concessions_name}{$concessions_name}{else}{$langs.Concessions}{/if}</span>
			</div>
			{/if}
			{if $different_price_children}
			<div class="cms-booking-product-qty cms-booking-product-children-qty {if $different_price_special}cms-booking-qty-last-of-three{/if}">

			<div class="cms-booking-product-input-button"><input name="children[]" type="text" value="0">
			<span class="cms-booking-qty-button cms-booking-qty-plus">+</span>
			<span class="cms-booking-qty-button cms-booking-qty-minus">-</span>
			</div>
			<span class='booking-price-label' data-singular="{if $child_name}{$child_name}{else}{$langs.Child}{/if}">{if $children_name}{$children_name}{else}{$langs.Children}{/if}</span>
			</div>
			{/if}
			
		</div>
		{if $adult_name}{assign var=adult_name_str value=$adult_name|strtolower}{else}{assign var=adult_name_str value=$langs.Adult|strtolower}{/if}
		{if $children_name}{assign var=children_name_str value=$children_name|strtolower}{else}{assign var=children_name_str value=$langs.Children|strtolower}{/if}
		<p style="display:none;clear:both;text-align:right;" class="Icon_Alert cms-booking-product-require-adult">{$langs.Adult_Per_Booking|replace:"***ADULT***":$adult_name_str|replace:"***CHILDREN***":$children_name_str}</p>
		
		</div>
		{if $bookingProdForm}
		<div class="persondetailsmaseter" style="display:none">{$bookingProdForm}</div>
		<div class='personal-details-forms'></div>
		{/if}
		{if $theme_vars_month_at_a_time==2} 
			<div class="cms-booking-product-dates clearfix" data-product-id="{$id}" data-product-type="{$type}" data-product-spaces={$spaces} data-product-modules={$modules}>
				<h4>Please select the day or days you'd like to book:</h4>
				<div class="cms-booking-product-dates-inner cms-booking-dates-all">
			{foreach from=$allDates item=item}
			
			{if
				(
					$item.date|date_format:"%B"==$smarty.now|date_format:"%B"
					&& $item.date|date_format:"%Y"==$smarty.now|date_format:"%Y"
					&& $item.date|date_format:"%d">=$smarty.now|date_format:"%d"
				)
				||
				(
					$item.date|date_format:"%B"!=$smarty.now|date_format:"%B"
					|| $item.date|date_format:"%Y"!=$smarty.now|date_format:"%Y"
				)
			   }
				<div 
				{assign var=notavailable value=false}
				{if $type==2}
					{math equation="x - y" x=$modules y=$item.booked_modules assign=available_modules}
					{if $available_modules>0}
						data-available="{$spaces}"
					{else}
						data-available="0"
						{assign var=notavailable value=true}
					{/if}
				{else}
					{math equation="x - y" x=$spaces y=$item.booked_individuals assign=available}
					data-available="{$available}"
					{if $available<=0}
					{assign var=notavailable value=true}
					{/if}

				{/if}

				class="cms-booking-product-date
				
			
				 
				date-month-{$item.date|date_format:"%m"}-{$item.date|date_format:"%Y"}
				{if $item.price_normal!=0 && !$notavailable}cms-booking-product-available{/if}
				{if $item.block_start!=0}block-start{/if}
				{if $item.block_middle!=0}block-middle{/if}
				{if $item.block_end!=0}block-end{/if}
				
				"

				data-minimum-price-per-place="{$item.minimum_price_per_place}"
				data-price-normal="{$item.price_normal}"
				data-price-special="{$item.price_special}"
				data-price-children="{$item.price_children}"
				data-date="{$item.date|date_format:"%Y"}-{$item.date|date_format:"%m"}-{$item.date|date_format:"%d"}"
				
				> {$item.date|date_format}</div>
			  
			  {/if}
			{/foreach}
				</div>
			</div>
		{else}
		<div class="cms-booking-product-dates clearfix" data-product-id="{$id}" data-month="{$month}" data-load-day="{$smarty.now|date_format:"%d"}" data-load-month="{$month}" data-load-year="{$smarty.now|date_format:"%Y"}" data-next-month="{$nextMonth}" data-prev-month="{$prevMonth}" data-next-month-year="{$nextMonthYear}" data-prev-month-year="{$prevMonthYear}" data-product-type="{$type}" data-product-spaces={$spaces} data-product-modules={$modules}>
			<a href="#" class="cms-booking-product-nav cms-booking-product-prev-month" style="visibility:hidden;">&larr; {$prevMonth}</a>
			<a href="#" class="cms-booking-product-nav cms-booking-product-next-month">{$nextMonth} &rarr;</a>
			<h3 class="cms-booking-product-cur-month">{$month} {$smarty.now|date_format:"%Y"}</h3>
			{assign var=actualM value=$month}
			<div class="cms-booking-product-dates-inner">{strip}
				{/strip}{foreach from=$months item=month name=months key=keym name=loop2}{strip}
					{/strip}{foreach from=$month item=item key=key name=loop1}{strip}
						{/strip}
						{if $item[3]=="prevMonth"||$item[3]=="nextMonth"}
							<div class="cms-booking-product-date cms-booking-filler cms-booking-product-history	date-month-{$actualM}-{$year}" data-date="{$item[7]}-{$item[6]|date_format:"%m"}-{$item[5]}">
								<span class="cms-booking-product-date-weekday">{$item[8]}</span>
								<span class="cms-booking-product-date-day">{$item[5]}</span>
							</div>
						{/if}{if
							$item[3]!="prevMonth"
							&& $item[3]!="nextMonth"

							}{strip}
							{/strip}<div
							{assign var=notavailable value=false}
							{if $type==2}
								{math equation="x - y" x=$modules y=$item[4].booked_modules assign=available_modules}
								{if $available_modules>0}
									data-available="{$spaces}"
								{else}
									data-available="0"
									{assign var=notavailable value=true}
								{/if}
							{else}
								{math equation="x - y" x=$spaces y=$item[4].booked_individuals assign=available}
								data-available="{$available}"
								{if $available<=0}
								{assign var=notavailable value=true}
								{/if}

							{/if}

							class="cms-booking-product-date
							{if $item[1]|date_format:"%u"=="1"}
							cms-booking-date-mon
							{/if}
							{if
								(
									$item[6]==$smarty.now|date_format:"%B"
									&& $item[7]==$smarty.now|date_format:"%Y"
									&& $item[5]>=$smarty.now|date_format:"%d"
								)
								||
								(
									$item[6]!=$smarty.now|date_format:"%B"
									|| $item[7]!=$smarty.now|date_format:"%Y"
								)
							   }{else}
							   cms-booking-product-history
							  {/if}
							date-month-{$item[6]}-{$item[7]}
							{if $item[4].price_normal!=0 && !$notavailable}cms-booking-product-available{/if}
							{if $item[4].block_start!=0}block-start{/if}
							{if $item[4].block_middle!=0}block-middle{/if}
							{if $item[4].block_end!=0}block-end{/if}
							
							"

							data-minimum-price-per-place="{$item[4].minimum_price_per_place}"
							data-price-normal="{$item[4].price_normal}"
							data-price-special="{$item[4].price_special}"
							data-price-children="{$item[4].price_children}"
							data-date="{$item[7]}-{$item[6]|date_format:"%m"}-{$item[5]}"


							>
								<span class="cms-booking-product-date-weekday">{$item[8]}</span>
								<span class="cms-booking-product-date-day">{$item[5]}</span>
							</div>{strip}
						{/strip}{/if}{strip}
					{/strip}{/foreach}{strip}
				{/strip}{/foreach}{strip}
			{/strip}</div>
		</div>
		{/if}
		
	</div>
	<div class="cms-booking-product-total">
		<p class="cms-booking-product-total-price">{$curSym}<span>0.00</span></p>
		<p class="cms-booking-product-total-surcharge">Including {$curSym}<span>0.00</span> under-capacity surcharge</p>
		<p class="submit_form Button_Medium"><a href="" class="cms-booking-product-add-to-basket">Add to Basket</a></p>
	</div>
	<p class="cms-booking-product-select-product">Please enter quantity for at least one item to show availability.</p>
	<p class="cms-booking-product-legend">
		<span class="cms-booking-legend-item"><span class="cms-booking-legend-unavailable"></span> Unavailable</span>
		<span class="cms-booking-legend-item"><span class="cms-booking-legend-available"></span> Available</span>
		<span class="cms-booking-legend-item"><span class="cms-booking-legend-selection"></span> Your selected days</span>
		
	</p>
	<p style="float:right;clear:right;display:none" class="Icon_Alert cms-booking-product-select-day">Please select at least one day before continuing.</p>

</form>