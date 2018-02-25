{if $nocookie=="true"}
<p class="Icon_Alert" id="status">
	{$langs.Cookie_Error}
</p>
{/if}
{if $empty}
<p class="Icon_Alert" id="status">
	{$langs.Basket_Empty}
</p>
{/if}
{if $smarty.get.stocklimited}
<p class="Icon_Alert" id="status">
	{$langs.Stock_Limited}
</p>
{/if}
{*
{if $smarty.get.ngan_luong_pay}
{checkout_ngan_luong action="checkout" url="https://www.nganluong.vn/checkout.php" merchant_pass=$theme_vars_merchant_pass merchant_id=$merchant_id receiver=$paypal_email order_code=$buyerId cancel_url=$return_fail return_url="`$basket_link`/?ngan_luong_success=1" total=$smarty.post.total discount=$smarty.post.discount shipping=$smarty.post.shipping name=$smarty.post.name email=$smarty.post.email phone=$smarty.post.phone}
{/if}
{if $smarty.get.ngan_luong_success}
	{checkout_ngan_luong action="success" merchant_pass=$theme_vars_merchant_pass merchant_id=$merchant_id }
	{if $ngan_luong_success}
		{internal_api 
			path="/api/ordernotify/"
			api_key=$localhost_api_key
			name="result"
			method="PUT"
			domain="127.0.0.1"
			body="buyerId=`$smarty.get.order_code`&item_name=&item_number=&payment_status=&mc_gross=`$smarty.get.price`&mc_currency=vnd&txn_id=`$smarty.get.payment_id`&parent_txn_id=-&receiver_email=`$paypal_email`&first_name=&last_name=&address_city=&address_country=&address_state=&address_street=&address_zip=&payer_business_name=&payer_email=&payer_id="
		}
	{else}
	<h1>An error has occurred</h1>
	{/if}
{/if}*}
	
{if $smarty.post.admin_place_order && $admin_logged_in}
	{internal_api 
		path="/api/invoicelink/`$buyerId`/"
		api_key=$localhost_api_key
		name="result"
		method="GET"
		domain="127.0.0.1"
		output="output"
	}
	{internal_api 
		path="/api/ordernotify/"
		api_key=$localhost_api_key
		name="result"
		method="PUT"
		domain="127.0.0.1"
		body="buyerId=`$buyerId`&item_name=&item_number=&payment_status=ADMIN_PLACED_ORDER&mc_gross=0.00&mc_currency=`$currency_code`&txn_id=`$smarty.now`&parent_txn_id=-&receiver_email=-&contact_phone=`$smarty.post.admin_order_phone`&first_name=`$smarty.post.admin_order_first_name`&last_name=`$smarty.post.admin_order_last_name`&address_city=`$smarty.post.admin_order_city`&address_country=`$smarty.post.admin_order_country`&address_state=`$smarty.post.admin_order_state`&address_street=`$smarty.post.admin_order_street` `$smarty.post.admin_order_address2`&address_zip=`$smarty.post.admin_order_zip`&payer_business_name=&payer_email=`$smarty.post.admin_order_email`&payer_id="
	}
	
	<h4>{$admin_langs.Order_Saved}</h4>
	{if $output.invoice_link}
	<p class="Button_Medium"><a href="{$output.invoice_link}">{$admin_langs.Show_Invoice}</a></p>
	{/if}
	
{/if}
{if $smarty.post.gatewaypost=="paylater"}
	{internal_api 
		path="/api/invoicelink/`$buyerId`/"
		api_key=$localhost_api_key
		name="result"
		method="GET"
		domain="127.0.0.1"
		output="output"
	}
	{internal_api 
		path="/api/ordernotify/"
		api_key=$localhost_api_key
		name="result"
		method="PUT"
		domain="127.0.0.1"
		body="buyerId=`$buyerId`&item_name=&item_number=&payment_status=PAYLATER&mc_gross=0.00&mc_currency=`$currency_code`&txn_id=`$smarty.now`&parent_txn_id=-&receiver_email=-&contact_phone=`$smarty.post.admin_order_phone`&first_name=`$smarty.post.admin_order_first_name`&last_name=`$smarty.post.admin_order_last_name`&address_city=`$smarty.post.admin_order_city`&address_country=`$smarty.post.admin_order_country`&address_state=`$smarty.post.admin_order_state`&address_street=`$smarty.post.admin_order_street` `$smarty.post.admin_order_address2`&address_zip=`$smarty.post.admin_order_zip`&payer_business_name=&payer_email=`$smarty.post.admin_order_email`&payer_id="
	}
	
	<h4>{$merchant3_3}</h4>
	{*{if $output.invoice_link && $merchant3_2!=""}
	<p class="Button_Medium"><a href="{$output.invoice_link}">{$admin_langs.Show_Invoice}</a></p>
	{/if}*}
	
{/if}
{if $smarty.post.gatewaypost=="authnet"}
	{checkout_authorizenet 
		apilogin=$merchant2_1 
		transkey=$merchant2_2
		card=$smarty.post.cardnumber
		cardname=$smarty.post.nameoncard
		expire=$smarty.post.expirydate
		ccv=$smarty.post.ccv
		total=$smarty.post.total
		discount=$smarty.post.discount
		shipping=$smarty.post.shipping
		shipping=$smarty.post.tax
		address=$smarty.post.street
		address2=$smarty.post.town
		city=$smarty.post.city
		state=$smarty.post.state
		zip=$smarty.post.zip
		country=$smarty.post.country
		email=$smarty.post.email
		userid=$buyerId
		sandbox=false
	}
	{if $authnetfail} 
		<h2>{$langs.Gateway_Error}</h2>
		<p class="Icon_Alert">{$authnetfail}</p>
		<p>{$langs.Gateway_Error_More}</p>
	{else}
		{internal_api 
			path="/api/invoicelink/`$buyerId`/"
			api_key=$localhost_api_key
			name="result"
			method="GET"
			domain="127.0.0.1"
			output="output"
		}
		{internal_api 
			path="/api/ordernotify/"
			api_key=$localhost_api_key
			name="result"
			method="PUT"
			domain="127.0.0.1"
			body="buyerId=`$buyerId`&item_name=&item_number=&payment_status=AUTHORIZE.NET&mc_gross=`$authnetcharge`&mc_currency=`$currency_code`&txn_id=`$authnetid`&parent_txn_id=-&receiver_email=-&contact_phone=`$smarty.post.phone`&first_name=`$authnetfirst_name`&last_name=`$authnetlast_name`&address_city=`$smarty.post.city`&address_country=`$smarty.post.country`&address_state=`$smarty.post.state`&address_street=`$smarty.post.street` `$smarty.post.town`&address_zip=`$smarty.post.zip`&payer_business_name=&payer_email=`$smarty.post.email`&payer_id="
		}
		<h4>{$admin_langs.Order_Saved}</h4>
		{if $output.invoice_link}
		<p class="Button_Medium"><a href="{$output.invoice_link}">{$admin_langs.Show_Invoice}</a></p>
		{/if}
	{/if}
{/if}
{if $orders}
{if !$smarty.post.admin_place_order && !$smarty.post.gatewaypost}
{assign var=showqtys value=false}
{foreach from=$orders item=order key=key name=loop1}
	{if $order.allow_one=="no"}
	{assign var=showqtys value=true}
	{/if}
{/foreach}
<div id="basketWrapper">
	<form action="/actions/UpdateQuantities/" method="post" id="quantityForm">
		<div class="checkoutPsudoTable header">
			<div class="basketName checkoutTableCell">
				{$langs.Product_Name}
			</div>
			<div class="basketQuantity checkoutTableCell">
				{if $showqtys}{$langs.Quantity}{/if}
			</div>
			<div class="basketPrice checkoutTableCell">
				{$langs.Price}
			</div>
		</div>
		{assign var=ototalsgross value=$totals}
		{assign var=ototals value=$net_totals}
		{if $theme_vars_enabled_coupons}
		
			{assign var=discount value=0}
			{if $smarty.request.coupon}

				{assign var=found value=false}
				{assign var=discounttotals value=$net_totals}
			
				{* Code 1 *}
				{assign var=codes value=","|explode:$theme_vars_discount_1_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.request.coupon && ($theme_vars_coupon_1_expire==""||$theme_vars_coupon_1_expire!="" && $theme_vars_coupon_1_expire|strtotime > $smarty.now-86400 )}
						{assign var=discount_1_restrict_to_cats value=","|explode:$theme_vars_percentage_1_restrict}
						{assign var=discount_1_restrict_pc value=$theme_vars_percentage_1_discount}
						{assign var=discount_1_restrict_fixed value=$theme_vars_fixed_1_discount}						
						{assign var=found value=true}
					{/if}
				{/foreach}
			
				{* Code 2 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_2_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.request.coupon && ($theme_vars_coupon_2_expire==""||$theme_vars_coupon_2_expire!="" && $theme_vars_coupon_2_expire|strtotime > $smarty.now-86400 )}
						{assign var=discount_2_restrict_to_cats value=","|explode:$theme_vars_percentage_2_restrict}
						{assign var=discount_2_restrict_pc value=$theme_vars_percentage_2_discount}
						{assign var=discount_2_restrict_fixed value=$theme_vars_fixed_2_discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
			
				{* Code 3 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_3_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.request.coupon && ($theme_vars_coupon_3_expire==""||$theme_vars_coupon_3_expire!="" && $theme_vars_coupon_3_expire|strtotime > $smarty.now-86400 )}

						
						{assign var=discount_3_restrict_to_cats value=","|explode:$theme_vars_percentage_3_restrict}
						{assign var=discount_3_restrict_pc value=$theme_vars_percentage_3_discount}
						{assign var=discount_3_restrict_fixed value=$theme_vars_fixed_3_discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
			
				{* Code 4 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_4_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.request.coupon && ($theme_vars_coupon_4_expire==""||$theme_vars_coupon_4_expire!="" && $theme_vars_coupon_4_expire|strtotime > $smarty.now-86400 )}

						
						
						{assign var=discount_4_restrict_to_cats value=","|explode:$theme_vars_percentage_4_restrict}
						{assign var=discount_4_restrict_pc value=$theme_vars_percentage_4_discount}
						{assign var=discount_4_restrict_fixed value=$theme_vars_fixed_4_discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
			
				{* Code 5 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_5_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.request.coupon && ($theme_vars_coupon_5_expire==""||$theme_vars_coupon_5_expire!="" && $theme_vars_coupon_5_expire|strtotime > $smarty.now-86400 )}
						
						
						{assign var=discount_5_restrict_to_cats value=","|explode:$theme_vars_percentage_5_restrict}
						{assign var=discount_5_restrict_pc value=$theme_vars_percentage_5_discount}
						{assign var=discount_5_restrict_fixed value=$theme_vars_fixed_5_discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
				
				{* Code 6 *}
				{assign var=codes value=","|explode:$theme_vars_discount_6_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.request.coupon && ($theme_vars_coupon_6_expire==""||$theme_vars_coupon_6_expire!="" && $theme_vars_coupon_6_expire|strtotime > $smarty.now-86400 )}
						{assign var=discount_6_restrict_to_cats value=","|explode:$theme_vars_percentage_6_restrict}
						{assign var=discount_6_restrict_pc value=$theme_vars_percentage_6_discount}
						{assign var=discount_6_restrict_fixed value=$theme_vars_fixed_6_discount}						
						{assign var=found value=true}
					{/if}
				{/foreach}
			
				{* Code 7 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_7_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.request.coupon && ($theme_vars_coupon_7_expire==""||$theme_vars_coupon_7_expire!="" && $theme_vars_coupon_7_expire|strtotime > $smarty.now-86400 )}
						{assign var=discount_7_restrict_to_cats value=","|explode:$theme_vars_percentage_7_restrict}
						{assign var=discount_7_restrict_pc value=$theme_vars_percentage_7_discount}
						{assign var=discount_7_restrict_fixed value=$theme_vars_fixed_7_discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
			
				{* Code 8 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_8_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.request.coupon && ($theme_vars_coupon_8_expire==""||$theme_vars_coupon_8_expire!="" && $theme_vars_coupon_8_expire|strtotime > $smarty.now-86400 )}

						
						{assign var=discount_8_restrict_to_cats value=","|explode:$theme_vars_percentage_8_restrict}
						{assign var=discount_8_restrict_pc value=$theme_vars_percentage_8_discount}
						{assign var=discount_8_restrict_fixed value=$theme_vars_fixed_8_discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
			
				{* Code 9 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_9_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.request.coupon && ($theme_vars_coupon_9_expire==""||$theme_vars_coupon_9_expire!="" && $theme_vars_coupon_9_expire|strtotime > $smarty.now-86900 )}

						
						
						{assign var=discount_9_restrict_to_cats value=","|explode:$theme_vars_percentage_9_restrict}
						{assign var=discount_9_restrict_pc value=$theme_vars_percentage_9_discount}
						{assign var=discount_9_restrict_fixed value=$theme_vars_fixed_9_discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
			
				{* Code 10 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_10_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.request.coupon && ($theme_vars_coupon_10_expire==""||$theme_vars_coupon_10_expire!="" && $theme_vars_coupon_10_expire|strtotime > $smarty.now-86400 )}
						
						
						{assign var=discount_10_restrict_to_cats value=","|explode:$theme_vars_percentage_10_restrict}
						{assign var=discount_10_restrict_pc value=$theme_vars_percentage_10_discount}
						{assign var=discount_10_restrict_fixed value=$theme_vars_fixed_10_discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
				
			
			

			{/if}
		{/if}
		{assign var=elligableonlydiscounts value=0}
		{assign var=taxableafterdiscounts value=0}
		
		{foreach from=$orders item=item key=key name=loop1}
		{if $item.product_code!="TAX"&&$item.product_code!="SHIPPING"}
		
		<div class="checkoutPsudoTable">
			<div class="basketName checkoutTableCell">
				{if $item.pic_url}
				{if $item.url_str}<a href="{$item.url_str}">{/if}
				<img src="{$item.pic_url}?width=60&height=60&shrink=false" class="basketThumb" />
				{if $item.url_str}</a>{/if}
				{/if}
				{if $item.url_str}<a href="{$item.url_str}">{/if}<strong>{$item.name}</strong>{if $item.url_str}</a>{/if}<br/>
				{if $item.variant!=""}{$item.variant}<br/>{/if}
				{if $item.dates}
				<div class="clearfix">{foreach from=$item.dates item=date key=key name=loop1}
							<div class="checkoutBookingProductDate" style="padding:2px 5px;border:2px solid #ccc;float:left;margin:0 5px 5px 0;background:#fff;border-radius:4px;">{$date|date_format}</div>
				{/foreach}</div>

				{foreach from=$item.people item=person}
					<div class="checkoutBookingPerson">
						{foreach from=$person item=field}
							<strong>{$field.0}</strong> {$field.1}<br/>
						{/foreach}
					</div>
				{/foreach}
				{/if}
			</div>
			<div class="basketQuantity checkoutTableCell">
				{if $item.allow_one=="no"}<span class="narrowQty">{$langs.Quantity}:</span><span class="quantityWrapper"><input type="text" name="{$item.id}" value="{$item.quantity}" class="quantity" /></span>{/if}
			</div>
			<div class="basketPrice checkoutTableCell">
				{if $found}

					{assign var=elligblefordiscount value=false}
					{assign var=elligblefordiscountfixed value=false}
					
					{foreach from=$discount_1_restrict_to_cats item=restrictcat}
						{foreach from=$item.product_in_categories item=incat}
							{if $product_categories[$incat].name==$restrictcat|trim || $restrictcat|trim==""}
								{if $discount_1_restrict_fixed!=0}
									{assign var=elligblefordiscountfixed value=$discount_1_restrict_fixed}
								{else}
									{assign var=elligblefordiscount value=$discount_1_restrict_pc}
								{/if}
							{/if}
						{/foreach}
						{if $item.product_in_categories|@count==0}
							{if $discount_1_restrict_fixed!=0}
								{assign var=elligblefordiscountfixed value=$discount_1_restrict_fixed}
							{else}
								{assign var=elligblefordiscount value=$discount_1_restrict_pc}
							{/if}
						{/if}
					{/foreach}
					{foreach from=$discount_2_restrict_to_cats item=restrictcat}
						{foreach from=$item.product_in_categories item=incat}
							{if $product_categories[$incat].name==$restrictcat|trim || $restrictcat|trim==""}
								{if $discount_2_restrict_fixed!=0}
									{assign var=elligblefordiscountfixed value=$discount_2_restrict_fixed}
								{else}
									{assign var=elligblefordiscount value=$discount_2_restrict_pc}
								{/if}
							{/if}
						{/foreach}
						{if $item.product_in_categories|@count==0}
							{if $discount_2_restrict_fixed!=0}
								{assign var=elligblefordiscountfixed value=$discount_2_restrict_fixed}
							{else}
								{assign var=elligblefordiscount value=$discount_2_restrict_pc}
							{/if}
						{/if}
					{/foreach}
					{foreach from=$discount_3_restrict_to_cats item=restrictcat}
						{foreach from=$item.product_in_categories item=incat}
							{if $product_categories[$incat].name==$restrictcat|trim || $restrictcat|trim==""}
								{if $discount_3_restrict_fixed!=0}
									{assign var=elligblefordiscountfixed value=$discount_3_restrict_fixed}
								{else}
									{assign var=elligblefordiscount value=$discount_3_restrict_pc}
								{/if}
							{/if}
						{/foreach}
						{if $item.product_in_categories|@count==0}
							{if $discount_3_restrict_fixed!=0}
								{assign var=elligblefordiscountfixed value=$discount_3_restrict_fixed}
							{else}
								{assign var=elligblefordiscount value=$discount_3_restrict_pc}
							{/if}
						{/if}
					{/foreach}
					{foreach from=$discount_4_restrict_to_cats item=restrictcat}
						{foreach from=$item.product_in_categories item=incat}
							{if $product_categories[$incat].name==$restrictcat|trim || $restrictcat|trim==""}
								{if $discount_4_restrict_fixed!=0}
									{assign var=elligblefordiscountfixed value=$discount_4_restrict_fixed}
								{else}
									{assign var=elligblefordiscount value=$discount_4_restrict_pc}
								{/if}
							{/if}
						{/foreach}
						
						{if $item.product_in_categories|@count==0}
							{if $discount_4_restrict_fixed!=0}
								{assign var=elligblefordiscountfixed value=$discount_4_restrict_fixed}
							{else}
								{assign var=elligblefordiscount value=$discount_4_restrict_pc}
							{/if}
						{/if}
					{/foreach}
					{foreach from=$discount_5_restrict_to_cats item=restrictcat}
						{foreach from=$item.product_in_categories item=incat}
							{if $product_categories[$incat].name==$restrictcat|trim || $restrictcat|trim==""}
								{if $discount_5_restrict_fixed!=0}
									{assign var=elligblefordiscountfixed value=$discount_5_restrict_fixed}
								{else}
									{assign var=elligblefordiscount value=$discount_5_restrict_pc}
								{/if}
							{/if}
						{/foreach}	
						{if $item.product_in_categories|@count==0}
							{if $discount_5_restrict_fixed!=0}
								{assign var=elligblefordiscountfixed value=$discount_5_restrict_fixed}
							{else}
								{assign var=elligblefordiscount value=$discount_5_restrict_pc}
							{/if}
						{/if}
					{/foreach}
					{foreach from=$discount_6_restrict_to_cats item=restrictcat}
						{foreach from=$item.product_in_categories item=incat}
							{if $product_categories[$incat].name==$restrictcat|trim || $restrictcat|trim==""}
								{if $discount_6_restrict_fixed!=0}
									{assign var=elligblefordiscountfixed value=$discount_6_restrict_fixed}
								{else}
									{assign var=elligblefordiscount value=$discount_6_restrict_pc}
								{/if}
							{/if}
						{/foreach}
						{if $item.product_in_categories|@count==0}
							{if $discount_6_restrict_fixed!=0}
								{assign var=elligblefordiscountfixed value=$discount_6_restrict_fixed}
							{else}
								{assign var=elligblefordiscount value=$discount_6_restrict_pc}
							{/if}
						{/if}
					{/foreach}
					{foreach from=$discount_7_restrict_to_cats item=restrictcat}
						{foreach from=$item.product_in_categories item=incat}
							{if $product_categories[$incat].name==$restrictcat|trim || $restrictcat|trim==""}
								{if $discount_7_restrict_fixed!=0}
									{assign var=elligblefordiscountfixed value=$discount_7_restrict_fixed}
								{else}
									{assign var=elligblefordiscount value=$discount_7_restrict_pc}
								{/if}
							{/if}
						{/foreach}
						{if $item.product_in_categories|@count==0}
							{if $discount_7_restrict_fixed!=0}
								{assign var=elligblefordiscountfixed value=$discount_7_restrict_fixed}
							{else}
								{assign var=elligblefordiscount value=$discount_7_restrict_pc}
							{/if}
						{/if}
					{/foreach}
					{foreach from=$discount_8_restrict_to_cats item=restrictcat}
						{foreach from=$item.product_in_categories item=incat}
							{if $product_categories[$incat].name==$restrictcat|trim || $restrictcat|trim==""}
								{if $discount_8_restrict_fixed!=0}
									{assign var=elligblefordiscountfixed value=$discount_8_restrict_fixed}
								{else}
									{assign var=elligblefordiscount value=$discount_8_restrict_pc}
								{/if}
							{/if}
						{/foreach}
						{if $item.product_in_categories|@count==0}
							{if $discount_8_restrict_fixed!=0}
								{assign var=elligblefordiscountfixed value=$discount_8_restrict_fixed}
							{else}
								{assign var=elligblefordiscount value=$discount_8_restrict_pc}
							{/if}
						{/if}
					{/foreach}
					{foreach from=$discount_9_restrict_to_cats item=restrictcat}
						{foreach from=$item.product_in_categories item=incat}
							{if $product_categories[$incat].name==$restrictcat|trim || $restrictcat|trim==""}
								{if $discount_9_restrict_fixed!=0}
									{assign var=elligblefordiscountfixed value=$discount_9_restrict_fixed}
								{else}
									{assign var=elligblefordiscount value=$discount_9_restrict_pc}
								{/if}
							{/if}
						{/foreach}
						{if $item.product_in_categories|@count==0}
							{if $discount_9_restrict_fixed!=0}
								{assign var=elligblefordiscountfixed value=$discount_9_restrict_fixed}
							{else}
								{assign var=elligblefordiscount value=$discount_9_restrict_pc}
							{/if}
						{/if}
					{/foreach}
					{foreach from=$discount_10_restrict_to_cats item=restrictcat}
						{foreach from=$item.product_in_categories item=incat}
							{if $product_categories[$incat].name==$restrictcat|trim || $restrictcat|trim==""}
								{if $discount_10_restrict_fixed!=0}
									{assign var=elligblefordiscountfixed value=$discount_10_restrict_fixed}
								{else}
									{assign var=elligblefordiscount value=$discount_10_restrict_pc}
								{/if}
							{/if}
						{/foreach}	
						{if $item.product_in_categories|@count==0}
							{if $discount_10_restrict_fixed!=0}
								{assign var=elligblefordiscountfixed value=$discount_10_restrict_fixed}
							{else}
								{assign var=elligblefordiscount value=$discount_10_restrict_pc}
							{/if}
						{/if}
					{/foreach}
					{if $elligblefordiscount}
						{math assign="discount" equation="p * d / 100" p=$elligblefordiscount d=$item.price}
						{math assign=elligableonlydiscounts equation="x+y*z" x=$elligableonlydiscounts y=$discount z=$item.quantity}
						{assign var=price value=$item.price-$discount}
						<span class="narrowPrice">{$langs.Price}:</span> <strike>{$currency_sym}{$item.price}</strike> {$currency_sym}{"%i"|money_format:$price}
						{if $item.tax_exempt==0}
							{math assign=taxableafterdiscounts equation="x+(b-y)*z" x=$taxableafterdiscounts y=$discount b=$item.price z=$item.quantity}
						{/if}
					{elseif $elligblefordiscountfixed}
						<span class="narrowPrice">{$langs.Price}:</span> {$currency_sym}{$item.price}
						{if $item.tax_exempt==0}
							{math assign=taxableafterdiscounts equation="x+(b-y)*z" x=$taxableafterdiscounts y=$elligblefordiscountfixed b=$item.price z=$item.quantity}
						{/if}
					{else}
						<span class="narrowPrice">{$langs.Price}:</span>{$currency_sym}{$item.price}				
						{if $item.tax_exempt==0}
							{math assign=taxableafterdiscounts equation="x+b*z" x=$taxableafterdiscounts b=$item.price z=$item.quantity}
						{/if}
					{/if}
				
				
				
				{else}
				<span class="narrowPrice">{$langs.Price}:</span>{$currency_sym}{$item.price}	
				{if $item.tax_exempt==0}
					{math assign=taxableafterdiscounts equation="x+b*z" x=$taxableafterdiscounts b=$item.price z=$item.quantity}
				{/if}			
				{/if}

			</div>
			<div class="basketRemove checkoutTableCell">
				<a href="/actions/removeFromBasket/?ordersId={$item.id}" title="{$langs.Remove_From_Basket}"></a>
			</div>
		</div>
		{/if}
		{/foreach}
		{if $elligableonlydiscounts}
			{assign var=discount value=$elligableonlydiscounts}
		{/if}
		{if $elligblefordiscountfixed}
			{assign var=discount value=$elligblefordiscountfixed}
		{/if}
		{if $showqtys}
		<noscript><input type="submit" value="{$langs.Update_Quantities}"/></noscript>
		{/if}
	</form>
	<div class="checkoutPsudoTable">
		<div class="basketName checkoutTableCell">
			
			{if $theme_vars_enabled_coupons}	
			<div id="discountCode" class="clearfix">
				
		
			{if $smarty.request.coupon}
			
				{if $theme_vars_enable_shipping=="1"}
				
					{assign var=freetier1option1 value=false}
					{assign var=freetier1option2 value=false}
					{assign var=freetier1option3 value=false}
					{assign var=freetier1option4 value=false}
					{assign var=freetier1option5 value=false}
					{assign var=freetier1option6 value=false}
					{assign var=freetier1option7 value=false}
					{assign var=freetier1option8 value=false}
					{assign var=freetier1option9 value=false}
					{assign var=freetier1option10 value=false}
					
					{assign var=freetier2option1 value=false}
					{assign var=freetier2option2 value=false}
					{assign var=freetier2option3 value=false}
					{assign var=freetier2option4 value=false}
					{assign var=freetier2option5 value=false}
					{assign var=freetier2option6 value=false}
					{assign var=freetier2option7 value=false}
					{assign var=freetier2option8 value=false}
					{assign var=freetier2option9 value=false}
					{assign var=freetier2option10 value=false}
					
					{assign var=freetier3option1 value=false}
					{assign var=freetier3option2 value=false}
					{assign var=freetier3option3 value=false}
					{assign var=freetier3option4 value=false}
					{assign var=freetier3option5 value=false}
					{assign var=freetier3option6 value=false}
					{assign var=freetier3option7 value=false}
					{assign var=freetier3option8 value=false}
					{assign var=freetier3option9 value=false}
					{assign var=freetier3option10 value=false}
					
					{assign var=freetier4option1 value=false}
					{assign var=freetier4option2 value=false}
					{assign var=freetier4option3 value=false}
					{assign var=freetier4option4 value=false}
					{assign var=freetier4option5 value=false}
					{assign var=freetier4option6 value=false}
					{assign var=freetier4option7 value=false}
					{assign var=freetier4option8 value=false}
					{assign var=freetier4option9 value=false}
					{assign var=freetier4option10 value=false}
					
					{assign var=freetier5option1 value=false}
					{assign var=freetier5option2 value=false}
					{assign var=freetier5option3 value=false}
					{assign var=freetier5option4 value=false}
					{assign var=freetier5option5 value=false}
					{assign var=freetier5option6 value=false}
					{assign var=freetier5option7 value=false}
					{assign var=freetier5option8 value=false}
					{assign var=freetier5option9 value=false}
					{assign var=freetier5option10 value=false}
					
					{assign var=foundfreeshipping value=false}
									
					{if $smarty.request.coupon==$theme_vars_shipping_tier_1_option_1_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier1option1 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_1_option_2_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier1option2 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_1_option_3_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier1option3 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_1_option_4_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier1option4 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_1_option_5_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier1option5 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_1_option_6_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier1option6 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_1_option_7_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier1option7 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_1_option_8_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier1option8 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_1_option_9_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier1option9 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_1_option_10_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier1option10 value=true}
					{/if}
					
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_1_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier2option1 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_2_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier2option2 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_3_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier2option3 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_4_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier2option4 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_5_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier2option5 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_6_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier2option6 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_7_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier2option7 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_8_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier2option8 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_9_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier2option9 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_10_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier2option10 value=true}
					{/if}
					
					{if $smarty.request.coupon==$theme_vars_shipping_tier_3_option_1_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier3option1 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_3_option_2_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier3option2 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_3_option_3_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier3option3 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_4_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier3option4 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_3_option_5_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier3option5 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_3_option_6_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier3option6 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_3_option_7_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier3option7 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_3_option_8_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier3option8 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_3_option_9_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier3option9 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_3_option_10_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier3option10 value=true}
					{/if}
					
					{if $smarty.request.coupon==$theme_vars_shipping_tier_4_option_1_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier4option1 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_4_option_2_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier4option2 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_4_option_3_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier4option3 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_4_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier4option4 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_4_option_5_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier4option5 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_4_option_6_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier4option6 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_4_option_7_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier4option7 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_4_option_8_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier4option8 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_4_option_9_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier4option9 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_4_option_10_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier4option10 value=true}
					{/if}
					
					{if $smarty.request.coupon==$theme_vars_shipping_tier_5_option_1_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier5option1 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_5_option_2_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier5option2 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_5_option_3_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier5option3 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_2_option_4_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier5option4 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_5_option_5_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier5option5 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_5_option_6_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier5option6 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_5_option_7_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier5option7 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_5_option_8_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier5option8 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_5_option_9_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier5option9 value=true}
					{/if}
					{if $smarty.request.coupon==$theme_vars_shipping_tier_5_option_10_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freetier5option10 value=true}
					{/if}
				{/if}
				
				{if !$found && !$foundfreeshipping}
					<p class="Icon_Alert">Your coupon code is invalid.</p>
					<p><a href="#" id="showCouponCode">Try another code?</a></p>
					
				{else}
					{if $foundfreeshipping}
					<p class="Icon_Tick">Success. You have enabled a free shipping coupon.</p>
					{else}
					<p class="Icon_Tick">Success. A discount has been applied to eligible items in your order.</p>
					{/if}
				{/if}
			{else}
			<p><a href="#" id="showCouponCode">Have a coupon code?</a></p>
			{/if}

			</div>

			<form action="" method="request" id="couponForm" style="display:none;">
				<input type='hidden' name='chb_sh' value="{$smarty.request.chb_sh}"/>
				<input type="hidden" name="region" value="{$smarty.request.region}"/>
				<div class="formSection" style="float:left;">
				<label class="label">Coupon code:</label>
				<input type="text" name="coupon" class="input" style="width:120px;margin-bottom:0" value="{$smarty.request.coupon}"/>
				</div>
				<div class="formSection formSectionType_submit" style="margin:0px 0 0 0px;">
					<p class="Button_Medium submit_form hide_if_no_js" style="margin:0;clear:both;">
						<a href="#" class='' style="font-size:14px;padding:3px 6px;">Apply code</a>
					</p>
					<noscript><input type="submit" value="Apply code"/></noscript>
				</div>
			</form>
			{else}
			&nbsp;
			{/if}
		</div>
		<div class="basketQuantity checkoutTableCell">
			{if $showqtys}<p class="Button_Small" id="updateQuantitiesP"><a href="#" id="updateQuantities">{$langs.Update_Quantities}</a></p>{/if}
		</div>
		<div class="basketPrice checkoutTableCell">

			{assign var=shipping value=0.00}
			{assign var=totaltax value=0.00}
			{assign var=omit_tax value=false}
			{if $theme_vars_enable_shipping=="1"}
				{if $basket_tax_enabled}
					{if $basket_tax_add}

						{math assign=shipping_tier_1_option_1_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_1_option_1_price pc=$basket_tax_amount}
						{assign var=shipping_tier_1_option_1_net value=$theme_vars_shipping_tier_1_option_1_price+$cms_shipping_total}

						{math assign=shipping_tier_1_option_2_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_1_option_2_price pc=$basket_tax_amount}
						{assign var=shipping_tier_1_option_2_net value=$theme_vars_shipping_tier_1_option_2_price+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_3_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_1_option_3_price pc=$basket_tax_amount}
						{assign var=shipping_tier_1_option_3_net value=$theme_vars_shipping_tier_1_option_3_price+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_4_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_1_option_4_price pc=$basket_tax_amount}
						{assign var=shipping_tier_1_option_4_net value=$theme_vars_shipping_tier_1_option_4_price+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_5_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_1_option_5_price pc=$basket_tax_amount}
						{assign var=shipping_tier_1_option_5_net value=$theme_vars_shipping_tier_1_option_5_price+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_6_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_1_option_6_price pc=$basket_tax_amount}
						{assign var=shipping_tier_1_option_6_net value=$theme_vars_shipping_tier_1_option_6_price+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_7_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_1_option_7_price pc=$basket_tax_amount}
						{assign var=shipping_tier_1_option_7_net value=$theme_vars_shipping_tier_1_option_7_price+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_8_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_1_option_8_price pc=$basket_tax_amount}
						{assign var=shipping_tier_1_option_8_net value=$theme_vars_shipping_tier_1_option_8_price+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_9_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_1_option_9_price pc=$basket_tax_amount}
						{assign var=shipping_tier_1_option_9_net value=$theme_vars_shipping_tier_1_option_9_price+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_10_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_1_option_10_price pc=$basket_tax_amount}
						{assign var=shipping_tier_1_option_10_net value=$theme_vars_shipping_tier_1_option_10_price+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_1_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_2_option_1_price pc=$basket_tax_amount}
						{assign var=shipping_tier_2_option_1_net value=$theme_vars_shipping_tier_2_option_1_price+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_2_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_2_option_2_price pc=$basket_tax_amount}
						{assign var=shipping_tier_2_option_2_net value=$theme_vars_shipping_tier_2_option_2_price+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_3_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_2_option_3_price pc=$basket_tax_amount}
						{assign var=shipping_tier_2_option_3_net value=$theme_vars_shipping_tier_2_option_3_price+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_4_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_2_option_4_price pc=$basket_tax_amount}
						{assign var=shipping_tier_2_option_4_net value=$theme_vars_shipping_tier_2_option_4_price+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_5_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_2_option_5_price pc=$basket_tax_amount}
						{assign var=shipping_tier_2_option_5_net value=$theme_vars_shipping_tier_2_option_5_price+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_6_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_2_option_6_price pc=$basket_tax_amount}
						{assign var=shipping_tier_2_option_6_net value=$theme_vars_shipping_tier_2_option_6_price+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_7_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_2_option_7_price pc=$basket_tax_amount}
						{assign var=shipping_tier_2_option_7_net value=$theme_vars_shipping_tier_2_option_7_price+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_8_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_2_option_8_price pc=$basket_tax_amount}
						{assign var=shipping_tier_2_option_8_net value=$theme_vars_shipping_tier_2_option_8_price+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_9_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_2_option_9_price pc=$basket_tax_amount}
						{assign var=shipping_tier_2_option_9_net value=$theme_vars_shipping_tier_2_option_9_price+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_10_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_2_option_10_price pc=$basket_tax_amount}
						{assign var=shipping_tier_2_option_10_net value=$theme_vars_shipping_tier_2_option_10_price+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_1_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_3_option_1_price pc=$basket_tax_amount}
						{assign var=shipping_tier_3_option_1_net value=$theme_vars_shipping_tier_3_option_1_price+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_2_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_3_option_2_price pc=$basket_tax_amount}
						{assign var=shipping_tier_3_option_2_net value=$theme_vars_shipping_tier_3_option_2_price+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_3_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_3_option_3_price pc=$basket_tax_amount}
						{assign var=shipping_tier_3_option_3_net value=$theme_vars_shipping_tier_3_option_3_price+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_4_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_3_option_4_price pc=$basket_tax_amount}
						{assign var=shipping_tier_3_option_4_net value=$theme_vars_shipping_tier_3_option_4_price+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_5_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_3_option_5_price pc=$basket_tax_amount}
						{assign var=shipping_tier_3_option_5_net value=$theme_vars_shipping_tier_3_option_5_price+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_6_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_3_option_6_price pc=$basket_tax_amount}
						{assign var=shipping_tier_3_option_6_net value=$theme_vars_shipping_tier_3_option_6_price+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_7_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_3_option_7_price pc=$basket_tax_amount}
						{assign var=shipping_tier_3_option_7_net value=$theme_vars_shipping_tier_3_option_7_price+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_8_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_3_option_8_price pc=$basket_tax_amount}
						{assign var=shipping_tier_3_option_8_net value=$theme_vars_shipping_tier_3_option_8_price+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_9_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_3_option_9_price pc=$basket_tax_amount}
						{assign var=shipping_tier_3_option_9_net value=$theme_vars_shipping_tier_3_option_9_price+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_10_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_3_option_10_price pc=$basket_tax_amount}
						{assign var=shipping_tier_3_option_10_net value=$theme_vars_shipping_tier_3_option_10_price+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_1_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_4_option_1_price pc=$basket_tax_amount}
						{assign var=shipping_tier_4_option_1_net value=$theme_vars_shipping_tier_4_option_1_price+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_2_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_4_option_2_price pc=$basket_tax_amount}
						{assign var=shipping_tier_4_option_2_net value=$theme_vars_shipping_tier_4_option_2_price+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_3_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_4_option_3_price pc=$basket_tax_amount}
						{assign var=shipping_tier_4_option_3_net value=$theme_vars_shipping_tier_4_option_3_price+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_4_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_4_option_4_price pc=$basket_tax_amount}
						{assign var=shipping_tier_4_option_4_net value=$theme_vars_shipping_tier_4_option_4_price+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_5_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_4_option_5_price pc=$basket_tax_amount}
						{assign var=shipping_tier_4_option_5_net value=$theme_vars_shipping_tier_4_option_5_price+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_6_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_4_option_6_price pc=$basket_tax_amount}
						{assign var=shipping_tier_4_option_6_net value=$theme_vars_shipping_tier_4_option_6_price+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_7_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_4_option_7_price pc=$basket_tax_amount}
						{assign var=shipping_tier_4_option_7_net value=$theme_vars_shipping_tier_4_option_7_price+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_8_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_4_option_8_price pc=$basket_tax_amount}
						{assign var=shipping_tier_4_option_8_net value=$theme_vars_shipping_tier_4_option_8_price+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_9_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_4_option_9_price pc=$basket_tax_amount}
						{assign var=shipping_tier_4_option_9_net value=$theme_vars_shipping_tier_4_option_9_price+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_10_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_4_option_10_price pc=$basket_tax_amount}
						{assign var=shipping_tier_4_option_10_net value=$theme_vars_shipping_tier_4_option_10_price+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_1_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_5_option_1_price pc=$basket_tax_amount}
						{assign var=shipping_tier_5_option_1_net value=$theme_vars_shipping_tier_5_option_1_price+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_2_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_5_option_2_price pc=$basket_tax_amount}
						{assign var=shipping_tier_5_option_2_net value=$theme_vars_shipping_tier_5_option_2_price+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_3_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_5_option_3_price pc=$basket_tax_amount}
						{assign var=shipping_tier_5_option_3_net value=$theme_vars_shipping_tier_5_option_3_price+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_4_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_5_option_4_price pc=$basket_tax_amount}
						{assign var=shipping_tier_5_option_4_net value=$theme_vars_shipping_tier_5_option_4_price+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_5_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_5_option_5_price pc=$basket_tax_amount}
						{assign var=shipping_tier_5_option_5_net value=$theme_vars_shipping_tier_5_option_5_price+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_6_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_5_option_6_price pc=$basket_tax_amount}
						{assign var=shipping_tier_5_option_6_net value=$theme_vars_shipping_tier_5_option_6_price+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_7_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_5_option_7_price pc=$basket_tax_amount}
						{assign var=shipping_tier_5_option_7_net value=$theme_vars_shipping_tier_5_option_7_price+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_8_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_5_option_8_price pc=$basket_tax_amount}
						{assign var=shipping_tier_5_option_8_net value=$theme_vars_shipping_tier_5_option_8_price+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_9_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_5_option_9_price pc=$basket_tax_amount}
						{assign var=shipping_tier_5_option_9_net value=$theme_vars_shipping_tier_5_option_9_price+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_10_tax equation="((pc/100) * p)" p=$theme_vars_shipping_tier_5_option_10_price pc=$basket_tax_amount}
						{assign var=shipping_tier_5_option_10_net value=$theme_vars_shipping_tier_5_option_10_price+$cms_shipping_total}
					
					{else}
						{math assign=basket_tax_amount_m equation="t / 100" t=$basket_tax_amount}

						{assign var=fac value=$basket_tax_amount_m+1}

						{math assign=shipping_tier_1_option_1_net equation="p / f" p=$theme_vars_shipping_tier_1_option_1_price f=$fac}
						{math assign=shipping_tier_1_option_1_tax equation="p - t" p=$theme_vars_shipping_tier_1_option_1_price t=$shipping_tier_1_option_1_net}
						{assign var=shipping_tier_1_option_1_net value=$shipping_tier_1_option_1_net+$cms_shipping_total}

						{math assign=shipping_tier_1_option_2_net equation="p / f" p=$theme_vars_shipping_tier_1_option_2_price f=$fac}
						{math assign=shipping_tier_1_option_2_tax equation="p - t" p=$theme_vars_shipping_tier_1_option_2_price t=$shipping_tier_1_option_2_net}
						{assign var=shipping_tier_1_option_2_net value=$shipping_tier_1_option_2_net+$cms_shipping_total}
						
						
						{math assign=shipping_tier_1_option_3_net equation="p / f" p=$theme_vars_shipping_tier_1_option_3_price f=$fac}
						{math assign=shipping_tier_1_option_3_tax equation="p - t" p=$theme_vars_shipping_tier_1_option_3_price t=$shipping_tier_1_option_3_net}
						{assign var=shipping_tier_1_option_3_net value=$shipping_tier_1_option_3_net+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_4_net equation="p / f" p=$theme_vars_shipping_tier_1_option_4_price f=$fac}
						{math assign=shipping_tier_1_option_4_tax equation="p - t" p=$theme_vars_shipping_tier_1_option_4_price t=$shipping_tier_1_option_4_net}
						{assign var=shipping_tier_1_option_4_net value=$shipping_tier_1_option_4_net+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_5_net equation="p / f" p=$theme_vars_shipping_tier_1_option_5_price f=$fac}
						{math assign=shipping_tier_1_option_5_tax equation="p - t" p=$theme_vars_shipping_tier_1_option_5_price t=$shipping_tier_1_option_5_net}
						{assign var=shipping_tier_1_option_5_net value=$shipping_tier_1_option_5_net+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_6_net equation="p / f" p=$theme_vars_shipping_tier_1_option_6_price f=$fac}
						{math assign=shipping_tier_1_option_6_tax equation="p - t" p=$theme_vars_shipping_tier_1_option_6_price t=$shipping_tier_1_option_6_net}
						{assign var=shipping_tier_1_option_6_net value=$shipping_tier_1_option_6_net+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_7_net equation="p / f" p=$theme_vars_shipping_tier_1_option_7_price f=$fac}
						{math assign=shipping_tier_1_option_7_tax equation="p - t" p=$theme_vars_shipping_tier_1_option_7_price t=$shipping_tier_1_option_7_net}
						{assign var=shipping_tier_1_option_7_net value=$shipping_tier_1_option_7_net+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_8_net equation="p / f" p=$theme_vars_shipping_tier_1_option_8_price f=$fac}
						{math assign=shipping_tier_1_option_8_tax equation="p - t" p=$theme_vars_shipping_tier_1_option_8_price t=$shipping_tier_1_option_8_net}
						{assign var=shipping_tier_1_option_8_net value=$shipping_tier_1_option_8_net+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_9_net equation="p / f" p=$theme_vars_shipping_tier_1_option_9_price f=$fac}
						{math assign=shipping_tier_1_option_9_tax equation="p - t" p=$theme_vars_shipping_tier_1_option_9_price t=$shipping_tier_1_option_9_net}
						{assign var=shipping_tier_1_option_9_net value=$shipping_tier_1_option_9_net+$cms_shipping_total}
						
						{math assign=shipping_tier_1_option_10_net equation="p / f" p=$theme_vars_shipping_tier_1_option_4_price f=$fac}
						{math assign=shipping_tier_1_option_10_tax equation="p - t" p=$theme_vars_shipping_tier_1_option_4_price t=$shipping_tier_1_option_10_net}
						{assign var=shipping_tier_1_option_10_net value=$shipping_tier_1_option_10_net+$cms_shipping_total}

						
						{math assign=shipping_tier_2_option_1_net equation="p / f" p=$theme_vars_shipping_tier_2_option_1_price f=$fac}
						{math assign=shipping_tier_2_option_1_tax equation="p - t" p=$theme_vars_shipping_tier_2_option_1_price t=$shipping_tier_2_option_1_net}
						{assign var=shipping_tier_2_option_1_net value=$shipping_tier_2_option_1_net+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_2_net equation="p / f" p=$theme_vars_shipping_tier_2_option_2_price f=$fac}
						{math assign=shipping_tier_2_option_2_tax equation="p - t" p=$theme_vars_shipping_tier_2_option_2_price t=$shipping_tier_2_option_2_net}
						{assign var=shipping_tier_2_option_2_net value=$shipping_tier_2_option_2_net+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_3_net equation="p / f" p=$theme_vars_shipping_tier_2_option_3_price f=$fac}
						{math assign=shipping_tier_2_option_3_tax equation="p - t" p=$theme_vars_shipping_tier_2_option_3_price t=$shipping_tier_2_option_3_net}
						{assign var=shipping_tier_2_option_3_net value=$shipping_tier_2_option_3_net+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_4_net equation="p / f" p=$theme_vars_shipping_tier_2_option_4_price f=$fac}
						{math assign=shipping_tier_2_option_4_tax equation="p - t" p=$theme_vars_shipping_tier_2_option_4_price t=$shipping_tier_2_option_4_net}
						{assign var=shipping_tier_2_option_4_net value=$shipping_tier_2_option_4_net+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_5_net equation="p / f" p=$theme_vars_shipping_tier_2_option_5_price f=$fac}
						{math assign=shipping_tier_2_option_5_tax equation="p - t" p=$theme_vars_shipping_tier_2_option_5_price t=$shipping_tier_2_option_5_net}
						{assign var=shipping_tier_2_option_5_net value=$shipping_tier_2_option_5_net+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_6_net equation="p / f" p=$theme_vars_shipping_tier_2_option_6_price f=$fac}
						{math assign=shipping_tier_2_option_6_tax equation="p - t" p=$theme_vars_shipping_tier_2_option_6_price t=$shipping_tier_2_option_6_net}
						{assign var=shipping_tier_2_option_6_net value=$shipping_tier_2_option_6_net+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_7_net equation="p / f" p=$theme_vars_shipping_tier_2_option_7_price f=$fac}
						{math assign=shipping_tier_2_option_7_tax equation="p - t" p=$theme_vars_shipping_tier_2_option_7_price t=$shipping_tier_2_option_7_net}
						{assign var=shipping_tier_2_option_7_net value=$shipping_tier_2_option_7_net+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_8_net equation="p / f" p=$theme_vars_shipping_tier_2_option_8_price f=$fac}
						{math assign=shipping_tier_2_option_8_tax equation="p - t" p=$theme_vars_shipping_tier_2_option_8_price t=$shipping_tier_2_option_8_net}
						{assign var=shipping_tier_2_option_8_net value=$shipping_tier_2_option_8_net+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_9_net equation="p / f" p=$theme_vars_shipping_tier_2_option_9_price f=$fac}
						{math assign=shipping_tier_2_option_9_tax equation="p - t" p=$theme_vars_shipping_tier_2_option_9_price t=$shipping_tier_2_option_9_net}
						{assign var=shipping_tier_2_option_9_net value=$shipping_tier_2_option_9_net+$cms_shipping_total}
						
						{math assign=shipping_tier_2_option_10_net equation="p / f" p=$theme_vars_shipping_tier_2_option_10_price f=$fac}
						{math assign=shipping_tier_2_option_10_tax equation="p - t" p=$theme_vars_shipping_tier_2_option_10_price t=$shipping_tier_2_option_10_net}
						{assign var=shipping_tier_2_option_10_net value=$shipping_tier_2_option_10_net+$cms_shipping_total}
						
						
						{math assign=shipping_tier_3_option_1_net equation="p / f" p=$theme_vars_shipping_tier_3_option_1_price f=$fac}
						{math assign=shipping_tier_3_option_1_tax equation="p - t" p=$theme_vars_shipping_tier_3_option_1_price t=$shipping_tier_3_option_1_net}
						{assign var=shipping_tier_3_option_1_net value=$shipping_tier_3_option_1_net+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_2_net equation="p / f" p=$theme_vars_shipping_tier_3_option_2_price f=$fac}
						{math assign=shipping_tier_3_option_2_tax equation="p - t" p=$theme_vars_shipping_tier_3_option_2_price t=$shipping_tier_3_option_2_net}
						{assign var=shipping_tier_3_option_2_net value=$shipping_tier_3_option_2_net+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_3_net equation="p / f" p=$theme_vars_shipping_tier_3_option_3_price f=$fac}
						{math assign=shipping_tier_3_option_3_tax equation="p - t" p=$theme_vars_shipping_tier_3_option_3_price t=$shipping_tier_3_option_3_net}
						{assign var=shipping_tier_3_option_3_net value=$shipping_tier_3_option_3_net+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_4_net equation="p / f" p=$theme_vars_shipping_tier_3_option_4_price f=$fac}
						{math assign=shipping_tier_3_option_4_tax equation="p - t" p=$theme_vars_shipping_tier_3_option_4_price t=$shipping_tier_3_option_4_net}
						{assign var=shipping_tier_3_option_4_net value=$shipping_tier_3_option_4_net+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_5_net equation="p / f" p=$theme_vars_shipping_tier_3_option_5_price f=$fac}
						{math assign=shipping_tier_3_option_5_tax equation="p - t" p=$theme_vars_shipping_tier_3_option_5_price t=$shipping_tier_3_option_5_net}
						{assign var=shipping_tier_3_option_5_net value=$shipping_tier_3_option_5_net+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_6_net equation="p / f" p=$theme_vars_shipping_tier_3_option_6_price f=$fac}
						{math assign=shipping_tier_3_option_6_tax equation="p - t" p=$theme_vars_shipping_tier_3_option_6_price t=$shipping_tier_3_option_6_net}
						{assign var=shipping_tier_3_option_6_net value=$shipping_tier_3_option_6_net+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_7_net equation="p / f" p=$theme_vars_shipping_tier_3_option_7_price f=$fac}
						{math assign=shipping_tier_3_option_7_tax equation="p - t" p=$theme_vars_shipping_tier_3_option_7_price t=$shipping_tier_3_option_7_net}
						{assign var=shipping_tier_3_option_7_net value=$shipping_tier_3_option_7_net+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_8_net equation="p / f" p=$theme_vars_shipping_tier_3_option_8_price f=$fac}
						{math assign=shipping_tier_3_option_8_tax equation="p - t" p=$theme_vars_shipping_tier_3_option_8_price t=$shipping_tier_3_option_8_net}
						{assign var=shipping_tier_3_option_8_net value=$shipping_tier_3_option_8_net+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_9_net equation="p / f" p=$theme_vars_shipping_tier_3_option_9_price f=$fac}
						{math assign=shipping_tier_3_option_9_tax equation="p - t" p=$theme_vars_shipping_tier_3_option_9_price t=$shipping_tier_3_option_9_net}
						{assign var=shipping_tier_3_option_9_net value=$shipping_tier_3_option_9_net+$cms_shipping_total}
						
						{math assign=shipping_tier_3_option_10_net equation="p / f" p=$theme_vars_shipping_tier_3_option_10_price f=$fac}
						{math assign=shipping_tier_3_option_10_tax equation="p - t" p=$theme_vars_shipping_tier_3_option_10_price t=$shipping_tier_3_option_10_net}
						{assign var=shipping_tier_3_option_10_net value=$shipping_tier_3_option_10_net+$cms_shipping_total}
						
						
						{math assign=shipping_tier_4_option_1_net equation="p / f" p=$theme_vars_shipping_tier_4_option_1_price f=$fac}
						{math assign=shipping_tier_4_option_1_tax equation="p - t" p=$theme_vars_shipping_tier_4_option_1_price t=$shipping_tier_4_option_1_net}
						{assign var=shipping_tier_4_option_1_net value=$shipping_tier_4_option_1_net+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_2_net equation="p / f" p=$theme_vars_shipping_tier_4_option_2_price f=$fac}
						{math assign=shipping_tier_4_option_2_tax equation="p - t" p=$theme_vars_shipping_tier_4_option_2_price t=$shipping_tier_4_option_2_net}
						{assign var=shipping_tier_4_option_2_net value=$shipping_tier_4_option_2_net+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_3_net equation="p / f" p=$theme_vars_shipping_tier_4_option_3_price f=$fac}
						{math assign=shipping_tier_4_option_3_tax equation="p - t" p=$theme_vars_shipping_tier_4_option_3_price t=$shipping_tier_4_option_3_net}
						{assign var=shipping_tier_4_option_3_net value=$shipping_tier_4_option_3_net+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_4_net equation="p / f" p=$theme_vars_shipping_tier_4_option_4_price f=$fac}
						{math assign=shipping_tier_4_option_4_tax equation="p - t" p=$theme_vars_shipping_tier_4_option_4_price t=$shipping_tier_4_option_4_net}
						{assign var=shipping_tier_4_option_4_net value=$shipping_tier_4_option_4_net+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_5_net equation="p / f" p=$theme_vars_shipping_tier_4_option_5_price f=$fac}
						{math assign=shipping_tier_4_option_5_tax equation="p - t" p=$theme_vars_shipping_tier_4_option_5_price t=$shipping_tier_4_option_5_net}
						{assign var=shipping_tier_4_option_5_net value=$shipping_tier_4_option_5_net+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_6_net equation="p / f" p=$theme_vars_shipping_tier_4_option_6_price f=$fac}
						{math assign=shipping_tier_4_option_6_tax equation="p - t" p=$theme_vars_shipping_tier_4_option_6_price t=$shipping_tier_4_option_6_net}
						{assign var=shipping_tier_4_option_6_net value=$shipping_tier_4_option_6_net+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_7_net equation="p / f" p=$theme_vars_shipping_tier_4_option_7_price f=$fac}
						{math assign=shipping_tier_4_option_7_tax equation="p - t" p=$theme_vars_shipping_tier_4_option_7_price t=$shipping_tier_4_option_7_net}
						{assign var=shipping_tier_4_option_7_net value=$shipping_tier_4_option_7_net+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_8_net equation="p / f" p=$theme_vars_shipping_tier_4_option_8_price f=$fac}
						{math assign=shipping_tier_4_option_8_tax equation="p - t" p=$theme_vars_shipping_tier_4_option_8_price t=$shipping_tier_4_option_8_net}
						{assign var=shipping_tier_4_option_8_net value=$shipping_tier_4_option_8_net+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_9_net equation="p / f" p=$theme_vars_shipping_tier_4_option_9_price f=$fac}
						{math assign=shipping_tier_4_option_9_tax equation="p - t" p=$theme_vars_shipping_tier_4_option_9_price t=$shipping_tier_4_option_9_net}
						{assign var=shipping_tier_4_option_9_net value=$shipping_tier_4_option_9_net+$cms_shipping_total}
						
						{math assign=shipping_tier_4_option_10_net equation="p / f" p=$theme_vars_shipping_tier_4_option_10_price f=$fac}
						{math assign=shipping_tier_4_option_10_tax equation="p - t" p=$theme_vars_shipping_tier_4_option_10_price t=$shipping_tier_4_option_10_net}
						{assign var=shipping_tier_4_option_10_net value=$shipping_tier_4_option_10_net+$cms_shipping_total}
						
						
						{math assign=shipping_tier_5_option_1_net equation="p / f" p=$theme_vars_shipping_tier_5_option_1_price f=$fac}
						{math assign=shipping_tier_5_option_1_tax equation="p - t" p=$theme_vars_shipping_tier_5_option_1_price t=$shipping_tier_5_option_1_net}
						{assign var=shipping_tier_5_option_1_net value=$shipping_tier_5_option_1_net+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_2_net equation="p / f" p=$theme_vars_shipping_tier_5_option_2_price f=$fac}
						{math assign=shipping_tier_5_option_2_tax equation="p - t" p=$theme_vars_shipping_tier_5_option_2_price t=$shipping_tier_5_option_2_net}
						{assign var=shipping_tier_5_option_2_net value=$shipping_tier_5_option_2_net+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_3_net equation="p / f" p=$theme_vars_shipping_tier_5_option_3_price f=$fac}
						{math assign=shipping_tier_5_option_3_tax equation="p - t" p=$theme_vars_shipping_tier_5_option_3_price t=$shipping_tier_5_option_3_net}
						{assign var=shipping_tier_5_option_3_net value=$shipping_tier_5_option_3_net+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_4_net equation="p / f" p=$theme_vars_shipping_tier_5_option_4_price f=$fac}
						{math assign=shipping_tier_5_option_4_tax equation="p - t" p=$theme_vars_shipping_tier_5_option_4_price t=$shipping_tier_5_option_4_net}
						{assign var=shipping_tier_5_option_4_net value=$shipping_tier_5_option_4_net+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_5_net equation="p / f" p=$theme_vars_shipping_tier_5_option_5_price f=$fac}
						{math assign=shipping_tier_5_option_5_tax equation="p - t" p=$theme_vars_shipping_tier_5_option_5_price t=$shipping_tier_5_option_5_net}
						{assign var=shipping_tier_5_option_5_net value=$shipping_tier_5_option_5_net+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_6_net equation="p / f" p=$theme_vars_shipping_tier_5_option_6_price f=$fac}
						{math assign=shipping_tier_5_option_6_tax equation="p - t" p=$theme_vars_shipping_tier_5_option_6_price t=$shipping_tier_5_option_6_net}
						{assign var=shipping_tier_5_option_6_net value=$shipping_tier_5_option_6_net+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_7_net equation="p / f" p=$theme_vars_shipping_tier_5_option_7_price f=$fac}
						{math assign=shipping_tier_5_option_7_tax equation="p - t" p=$theme_vars_shipping_tier_5_option_7_price t=$shipping_tier_5_option_7_net}
						{assign var=shipping_tier_5_option_7_net value=$shipping_tier_5_option_7_net+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_8_net equation="p / f" p=$theme_vars_shipping_tier_5_option_8_price f=$fac}
						{math assign=shipping_tier_5_option_8_tax equation="p - t" p=$theme_vars_shipping_tier_5_option_8_price t=$shipping_tier_5_option_8_net}
						{assign var=shipping_tier_5_option_8_net value=$shipping_tier_5_option_8_net+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_9_net equation="p / f" p=$theme_vars_shipping_tier_5_option_9_price f=$fac}
						{math assign=shipping_tier_5_option_9_tax equation="p - t" p=$theme_vars_shipping_tier_5_option_9_price t=$shipping_tier_5_option_9_net}
						{assign var=shipping_tier_5_option_9_net value=$shipping_tier_5_option_9_net+$cms_shipping_total}
						
						{math assign=shipping_tier_5_option_10_net equation="p / f" p=$theme_vars_shipping_tier_5_option_10_price f=$fac}
						{math assign=shipping_tier_5_option_10_tax equation="p - t" p=$theme_vars_shipping_tier_5_option_10_price t=$shipping_tier_5_option_10_net}
						{assign var=shipping_tier_5_option_10_net value=$shipping_tier_5_option_10_net+$cms_shipping_total}
						
						

					{/if}
				{else}
					{assign var=shipping_tier_1_option_1_net value=$theme_vars_shipping_tier_1_option_1_price+$cms_shipping_total}
					{assign var=shipping_tier_1_option_2_net value=$theme_vars_shipping_tier_1_option_2_price+$cms_shipping_total}
					{assign var=shipping_tier_1_option_3_net value=$theme_vars_shipping_tier_1_option_3_price+$cms_shipping_total}
					{assign var=shipping_tier_1_option_4_net value=$theme_vars_shipping_tier_1_option_4_price+$cms_shipping_total}
					{assign var=shipping_tier_1_option_5_net value=$theme_vars_shipping_tier_1_option_5_price+$cms_shipping_total}
					{assign var=shipping_tier_1_option_6_net value=$theme_vars_shipping_tier_1_option_6_price+$cms_shipping_total}
					{assign var=shipping_tier_1_option_7_net value=$theme_vars_shipping_tier_1_option_7_price+$cms_shipping_total}
					{assign var=shipping_tier_1_option_8_net value=$theme_vars_shipping_tier_1_option_8_price+$cms_shipping_total}
					{assign var=shipping_tier_1_option_9_net value=$theme_vars_shipping_tier_1_option_9_price+$cms_shipping_total}
					{assign var=shipping_tier_1_option_10_net value=$theme_vars_shipping_tier_1_option_10_price+$cms_shipping_total}
				
					{assign var=shipping_tier_2_option_1_net value=$theme_vars_shipping_tier_2_option_1_price+$cms_shipping_total}
					{assign var=shipping_tier_2_option_2_net value=$theme_vars_shipping_tier_2_option_2_price+$cms_shipping_total}
					{assign var=shipping_tier_2_option_3_net value=$theme_vars_shipping_tier_2_option_3_price+$cms_shipping_total}
					{assign var=shipping_tier_2_option_4_net value=$theme_vars_shipping_tier_2_option_4_price+$cms_shipping_total}
					{assign var=shipping_tier_2_option_5_net value=$theme_vars_shipping_tier_2_option_5_price+$cms_shipping_total}
					{assign var=shipping_tier_2_option_6_net value=$theme_vars_shipping_tier_2_option_6_price+$cms_shipping_total}
					{assign var=shipping_tier_2_option_7_net value=$theme_vars_shipping_tier_2_option_7_price+$cms_shipping_total}
					{assign var=shipping_tier_2_option_8_net value=$theme_vars_shipping_tier_2_option_8_price+$cms_shipping_total}
					{assign var=shipping_tier_2_option_9_net value=$theme_vars_shipping_tier_2_option_9_price+$cms_shipping_total}
					{assign var=shipping_tier_2_option_10_net value=$theme_vars_shipping_tier_2_option_10_price+$cms_shipping_total}
					
				
					{assign var=shipping_tier_3_option_1_net value=$theme_vars_shipping_tier_3_option_1_price+$cms_shipping_total}
					{assign var=shipping_tier_3_option_2_net value=$theme_vars_shipping_tier_3_option_2_price+$cms_shipping_total}
					{assign var=shipping_tier_3_option_3_net value=$theme_vars_shipping_tier_3_option_3_price+$cms_shipping_total}
					{assign var=shipping_tier_3_option_4_net value=$theme_vars_shipping_tier_3_option_4_price+$cms_shipping_total}
					{assign var=shipping_tier_3_option_5_net value=$theme_vars_shipping_tier_3_option_5_price+$cms_shipping_total}
					{assign var=shipping_tier_3_option_6_net value=$theme_vars_shipping_tier_3_option_6_price+$cms_shipping_total}
					{assign var=shipping_tier_3_option_7_net value=$theme_vars_shipping_tier_3_option_7_price+$cms_shipping_total}
					{assign var=shipping_tier_3_option_8_net value=$theme_vars_shipping_tier_3_option_8_price+$cms_shipping_total}
					{assign var=shipping_tier_3_option_9_net value=$theme_vars_shipping_tier_3_option_9_price+$cms_shipping_total}
					{assign var=shipping_tier_3_option_10_net value=$theme_vars_shipping_tier_3_option_10_price+$cms_shipping_total}
					
					{assign var=shipping_tier_4_option_1_net value=$theme_vars_shipping_tier_4_option_1_price+$cms_shipping_total}
					{assign var=shipping_tier_4_option_2_net value=$theme_vars_shipping_tier_4_option_2_price+$cms_shipping_total}
					{assign var=shipping_tier_4_option_3_net value=$theme_vars_shipping_tier_4_option_3_price+$cms_shipping_total}
					{assign var=shipping_tier_4_option_4_net value=$theme_vars_shipping_tier_4_option_4_price+$cms_shipping_total}
					{assign var=shipping_tier_4_option_5_net value=$theme_vars_shipping_tier_4_option_5_price+$cms_shipping_total}
					{assign var=shipping_tier_4_option_6_net value=$theme_vars_shipping_tier_4_option_6_price+$cms_shipping_total}
					{assign var=shipping_tier_4_option_7_net value=$theme_vars_shipping_tier_4_option_7_price+$cms_shipping_total}
					{assign var=shipping_tier_4_option_8_net value=$theme_vars_shipping_tier_4_option_8_price+$cms_shipping_total}
					{assign var=shipping_tier_4_option_9_net value=$theme_vars_shipping_tier_4_option_9_price+$cms_shipping_total}
					{assign var=shipping_tier_4_option_10_net value=$theme_vars_shipping_tier_4_option_10_price+$cms_shipping_total}
					
					{assign var=shipping_tier_5_option_1_net value=$theme_vars_shipping_tier_5_option_1_price+$cms_shipping_total}
					{assign var=shipping_tier_5_option_2_net value=$theme_vars_shipping_tier_5_option_2_price+$cms_shipping_total}
					{assign var=shipping_tier_5_option_3_net value=$theme_vars_shipping_tier_5_option_3_price+$cms_shipping_total}
					{assign var=shipping_tier_5_option_4_net value=$theme_vars_shipping_tier_5_option_4_price+$cms_shipping_total}
					{assign var=shipping_tier_5_option_5_net value=$theme_vars_shipping_tier_5_option_5_price+$cms_shipping_total}
					{assign var=shipping_tier_5_option_6_net value=$theme_vars_shipping_tier_5_option_6_price+$cms_shipping_total}
					{assign var=shipping_tier_5_option_7_net value=$theme_vars_shipping_tier_5_option_7_price+$cms_shipping_total}
					{assign var=shipping_tier_5_option_8_net value=$theme_vars_shipping_tier_5_option_8_price+$cms_shipping_total}
					{assign var=shipping_tier_5_option_9_net value=$theme_vars_shipping_tier_5_option_9_price+$cms_shipping_total}
					{assign var=shipping_tier_5_option_10_net value=$theme_vars_shipping_tier_5_option_10_price+$cms_shipping_total}
					
					
					{assign var=shipping_tier_1_option_1_tax value=0.00}
					{assign var=shipping_tier_1_option_2_tax value=0.00}
					{assign var=shipping_tier_1_option_3_tax value=0.00}
					{assign var=shipping_tier_1_option_4_tax value=0.00}
					{assign var=shipping_tier_1_option_5_tax value=0.00}
					{assign var=shipping_tier_1_option_6_tax value=0.00}
					{assign var=shipping_tier_1_option_7_tax value=0.00}
					{assign var=shipping_tier_1_option_8_tax value=0.00}
					{assign var=shipping_tier_1_option_9_tax value=0.00}
					{assign var=shipping_tier_1_option_10_tax value=0.00}
					
				
					{assign var=shipping_tier_2_option_1_tax value=0.00}
					{assign var=shipping_tier_2_option_2_tax value=0.00}
					{assign var=shipping_tier_2_option_3_tax value=0.00}
					{assign var=shipping_tier_2_option_4_tax value=0.00}
					{assign var=shipping_tier_2_option_5_tax value=0.00}
					{assign var=shipping_tier_2_option_6_tax value=0.00}
					{assign var=shipping_tier_2_option_7_tax value=0.00}
					{assign var=shipping_tier_2_option_8_tax value=0.00}
					{assign var=shipping_tier_2_option_9_tax value=0.00}
					{assign var=shipping_tier_2_option_10_tax value=0.00}
				
					{assign var=shipping_tier_3_option_1_tax value=0.00}
					{assign var=shipping_tier_3_option_2_tax value=0.00}
					{assign var=shipping_tier_3_option_3_tax value=0.00}
					{assign var=shipping_tier_3_option_4_tax value=0.00}
					{assign var=shipping_tier_3_option_5_tax value=0.00}
					{assign var=shipping_tier_3_option_6_tax value=0.00}
					{assign var=shipping_tier_3_option_7_tax value=0.00}
					{assign var=shipping_tier_3_option_8_tax value=0.00}
					{assign var=shipping_tier_3_option_9_tax value=0.00}
					{assign var=shipping_tier_3_option_10_tax value=0.00}
					
					{assign var=shipping_tier_4_option_1_tax value=0.00}
					{assign var=shipping_tier_4_option_2_tax value=0.00}
					{assign var=shipping_tier_4_option_3_tax value=0.00}
					{assign var=shipping_tier_4_option_4_tax value=0.00}
					{assign var=shipping_tier_4_option_5_tax value=0.00}
					{assign var=shipping_tier_4_option_6_tax value=0.00}
					{assign var=shipping_tier_4_option_7_tax value=0.00}
					{assign var=shipping_tier_4_option_8_tax value=0.00}
					{assign var=shipping_tier_4_option_9_tax value=0.00}
					{assign var=shipping_tier_4_option_10_tax value=0.00}
					
					{assign var=shipping_tier_4_option_1_tax value=0.00}
					{assign var=shipping_tier_4_option_2_tax value=0.00}
					{assign var=shipping_tier_4_option_3_tax value=0.00}
					{assign var=shipping_tier_4_option_4_tax value=0.00}
					{assign var=shipping_tier_4_option_5_tax value=0.00}
					{assign var=shipping_tier_4_option_6_tax value=0.00}
					{assign var=shipping_tier_4_option_7_tax value=0.00}
					{assign var=shipping_tier_4_option_8_tax value=0.00}
					{assign var=shipping_tier_4_option_9_tax value=0.00}
					{assign var=shipping_tier_4_option_10_tax value=0.00}
				{/if}
				{*
				{if $elligableonlydiscounts}

				<p><strong>{$langs.Sub_Total}:</strong> {if $elligableonlydiscounts > 0}<strike>{$currency_sym}{$ototals}</strike>{/if} {$currency_sym}{"%i"|money_format:$net_totals}</p>
				{else}	
				<p><strong>{$langs.Sub_Total}:</strong> {if $ototals != $net_totals && $ototals!=""}<strike>{$currency_sym}{$ototals}</strike>{/if} {$currency_sym}{"%i"|money_format:$net_totals}</p>
				{/if}*}
				
				<p><strong>{$theme_vars_shipping_name}:</strong></p>

				{if $theme_vars_enable_shipping_tier_5 && $net_totals>=$theme_vars_shipping_tier_5_threshold}
					
					{if $freetier5option1}
						{assign var=shipping value=0.00}
						{assign var=shipping_tax value=0.00}
					{else}
						{assign var=shipping value="%i"|money_format:$shipping_tier_5_option_1_net}
						{assign var=shipping_tax value="%i"|money_format:$shipping_tier_5_option_1_tax}
					{/if}
					{if !$theme_vars_enable_shipping_tier_5_option_1_sales_tax}
						{assign var=omit_tax value=true}
					{/if}
					
					{if $smarty.request.chb_sh=="5_2"}
						{if $freetier5option2}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_5_option_2_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_5_option_2_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_5_option_2_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					
					{/if}
					{if $smarty.request.chb_sh=="5_3"}
						{if $freetier5option3}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_5_option_3_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_5_option_3_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_5_option_3_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="5_4"}
						{if $freetier5option4}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_5_option_4_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_5_option_4_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_5_option_4_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="5_5"}
						{if $freetier5option5}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_5_option_5_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_5_option_5_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_5_option_5_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="5_6"}
						{if $freetier5option6}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_5_option_6_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_5_option_6_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_5_option_6_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="5_7"}
						{if $freetier5option7}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_5_option_7_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_5_option_7_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_5_option_7_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="5_8"}
						{if $freetier5option8}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_5_option_8_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_5_option_8_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_5_option_8_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="5_9"}
						{if $freetier5option9}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_5_option_9_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_5_option_9_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_5_option_9_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="5_10"}
						{if $freetier5option10}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_5_option_10_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_5_option_10_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_5_option_10_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					
					{if $theme_vars_shipping_tier_5_option_2_name!=""}
						<form action="" method="get">
						<input type="hidden" name="coupon" value="{$smarty.request.coupon}">
						<select name="chb_sh">

							<option value="5_1">{$theme_vars_shipping_tier_5_option_1_name} ({if $theme_vars_shipping_tier_5_option_1_price=="0" || $freetier5option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_1_net}{/if})</option>
							<option value="5_2" {if $smarty.request.chb_sh=="5_2"}selected="selected"{/if}>{$theme_vars_shipping_tier_5_option_2_name} ({if $theme_vars_shipping_tier_5_option_2_price=="0" || $freetier5option2}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_2_net}{/if})</option>
							{if $theme_vars_shipping_tier_5_option_3_name!=""}
							<option value="5_3" {if $smarty.request.chb_sh=="5_3"}selected="selected"{/if}>{$theme_vars_shipping_tier_5_option_3_name} ({if $theme_vars_shipping_tier_5_option_3_price=="0" || $freetier5option3}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_3_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_5_option_4_name!=""}
							<option value="5_4" {if $smarty.request.chb_sh=="5_4"}selected="selected"{/if}>{$theme_vars_shipping_tier_5_option_4_name} ({if $theme_vars_shipping_tier_5_option_4_price=="0" || $freetier5option4}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_4_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_5_option_5_name!=""}
							<option value="5_5" {if $smarty.request.chb_sh=="5_5"}selected="selected"{/if}>{$theme_vars_shipping_tier_5_option_5_name} ({if $theme_vars_shipping_tier_5_option_5_price=="0" || $freetier5option5}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_5_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_5_option_6_name!=""}
							<option value="5_6" {if $smarty.request.chb_sh=="5_6"}selected="selected"{/if}>{$theme_vars_shipping_tier_5_option_6_name} ({if $theme_vars_shipping_tier_5_option_6_price=="0" || $freetier5option6}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_6_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_5_option_7_name!=""}
							<option value="5_7" {if $smarty.request.chb_sh=="5_7"}selected="selected"{/if}>{$theme_vars_shipping_tier_5_option_7_name} ({if $theme_vars_shipping_tier_5_option_7_price=="0" || $freetier5option7}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_7_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_5_option_8_name!=""}
							<option value="5_8" {if $smarty.request.chb_sh=="5_8"}selected="selected"{/if}>{$theme_vars_shipping_tier_5_option_8_name} ({if $theme_vars_shipping_tier_5_option_8_price=="0" || $freetier5option8}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_8_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_5_option_9_name!=""}
							<option value="5_9" {if $smarty.request.chb_sh=="5_9"}selected="selected"{/if}>{$theme_vars_shipping_tier_5_option_9_name} ({if $theme_vars_shipping_tier_5_option_9_price=="0" || $freetier5option9}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_9_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_5_option_10_name!=""}
							<option value="5_10" {if $smarty.request.chb_sh=="5_10"}selected="selected"{/if}>{$theme_vars_shipping_tier_5_option_10_name} ({if $theme_vars_shipping_tier_5_option_10_price=="0" || $freetier5option10}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_10_net}{/if})</option>
							{/if}
						</select>
						<noscript><input type='submit' value="Update shipping"></noscript>
						</form>
					{else}
						<p>{if $theme_vars_shipping_tier_5_option_1_price=="0" || $freetier5option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_5_option_1_net}{/if}</p>
					{/if}
				{elseif $theme_vars_enable_shipping_tier_4 && $net_totals>=$theme_vars_shipping_tier_4_threshold}
					
					{if $freetier4option1}
						{assign var=shipping value=0.00}
						{assign var=shipping_tax value=0.00}
					{else}
						{assign var=shipping value="%i"|money_format:$shipping_tier_4_option_1_net}
						{assign var=shipping_tax value="%i"|money_format:$shipping_tier_4_option_1_tax}
					{/if}
					{if !$theme_vars_enable_shipping_tier_4_option_1_sales_tax}
						{assign var=omit_tax value=true}
					{/if}
					
					{if $smarty.request.chb_sh=="4_2"}
						{if $freetier4option2}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_4_option_2_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_4_option_2_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_4_option_2_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					
					{/if}
					{if $smarty.request.chb_sh=="4_3"}
						{if $freetier4option3}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_4_option_3_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_4_option_3_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_4_option_3_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="4_4"}
						{if $freetier4option4}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_4_option_4_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_4_option_4_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_4_option_4_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="4_5"}
						{if $freetier4option5}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_4_option_5_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_4_option_5_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_4_option_5_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="4_6"}
						{if $freetier4option6}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_4_option_6_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_4_option_6_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_4_option_6_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="4_7"}
						{if $freetier4option7}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_4_option_7_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_4_option_7_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_4_option_7_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="4_8"}
						{if $freetier4option8}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_4_option_8_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_4_option_8_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_4_option_8_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="4_9"}
						{if $freetier4option9}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_4_option_9_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_4_option_9_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_4_option_9_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="4_10"}
						{if $freetier4option10}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_4_option_10_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_4_option_10_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_4_option_10_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					
					{if $theme_vars_shipping_tier_4_option_2_name!=""}
						<form action="" method="get">
						<input type="hidden" name="coupon" value="{$smarty.request.coupon}">
						<select name="chb_sh">

							<option value="4_1">{$theme_vars_shipping_tier_4_option_1_name} ({if $theme_vars_shipping_tier_4_option_1_price=="0" || $freetier4option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_1_net}{/if})</option>
							<option value="4_2" {if $smarty.request.chb_sh=="4_2"}selected="selected"{/if}>{$theme_vars_shipping_tier_4_option_2_name} ({if $theme_vars_shipping_tier_4_option_2_price=="0" || $freetier4option2}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_2_net}{/if})</option>
							{if $theme_vars_shipping_tier_4_option_3_name!=""}
							<option value="4_3" {if $smarty.request.chb_sh=="4_3"}selected="selected"{/if}>{$theme_vars_shipping_tier_4_option_3_name} ({if $theme_vars_shipping_tier_4_option_3_price=="0" || $freetier4option3}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_3_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_4_option_4_name!=""}
							<option value="4_4" {if $smarty.request.chb_sh=="4_4"}selected="selected"{/if}>{$theme_vars_shipping_tier_4_option_4_name} ({if $theme_vars_shipping_tier_4_option_4_price=="0" || $freetier4option4}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_4_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_4_option_5_name!=""}
							<option value="4_5" {if $smarty.request.chb_sh=="4_5"}selected="selected"{/if}>{$theme_vars_shipping_tier_4_option_5_name} ({if $theme_vars_shipping_tier_4_option_5_price=="0" || $freetier4option5}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_5_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_4_option_6_name!=""}
							<option value="4_6" {if $smarty.request.chb_sh=="4_6"}selected="selected"{/if}>{$theme_vars_shipping_tier_4_option_6_name} ({if $theme_vars_shipping_tier_4_option_6_price=="0" || $freetier4option6}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_6_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_4_option_7_name!=""}
							<option value="4_7" {if $smarty.request.chb_sh=="4_7"}selected="selected"{/if}>{$theme_vars_shipping_tier_4_option_7_name} ({if $theme_vars_shipping_tier_4_option_7_price=="0" || $freetier4option7}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_7_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_4_option_8_name!=""}
							<option value="4_8" {if $smarty.request.chb_sh=="4_8"}selected="selected"{/if}>{$theme_vars_shipping_tier_4_option_8_name} ({if $theme_vars_shipping_tier_4_option_8_price=="0" || $freetier4option8}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_8_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_4_option_9_name!=""}
							<option value="4_9" {if $smarty.request.chb_sh=="4_9"}selected="selected"{/if}>{$theme_vars_shipping_tier_4_option_9_name} ({if $theme_vars_shipping_tier_4_option_9_price=="0" || $freetier4option9}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_9_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_4_option_10_name!=""}
							<option value="4_10" {if $smarty.request.chb_sh=="4_10"}selected="selected"{/if}>{$theme_vars_shipping_tier_4_option_10_name} ({if $theme_vars_shipping_tier_4_option_10_price=="0" || $freetier4option10}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_10_net}{/if})</option>
							{/if}
						</select>
						<noscript><input type='submit' value="Update shipping"></noscript>
						</form>
					{else}
						<p>{if $theme_vars_shipping_tier_4_option_1_price=="0" || $freetier4option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_4_option_1_net}{/if}</p>
					{/if}
				{elseif $theme_vars_enable_shipping_tier_3 && $net_totals>=$theme_vars_shipping_tier_3_threshold}
					
					{if $freetier3option1}
						{assign var=shipping value=0.00}
						{assign var=shipping_tax value=0.00}
					{else}
						{assign var=shipping value="%i"|money_format:$shipping_tier_3_option_1_net}
						{assign var=shipping_tax value="%i"|money_format:$shipping_tier_3_option_1_tax}
					{/if}
					{if !$theme_vars_enable_shipping_tier_3_option_1_sales_tax}
						{assign var=omit_tax value=true}
					{/if}
					
					{if $smarty.request.chb_sh=="3_2"}
						{if $freetier3option2}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_3_option_2_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_3_option_2_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_3_option_2_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					
					{/if}
					{if $smarty.request.chb_sh=="3_3"}
						{if $freetier3option3}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_3_option_3_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_3_option_3_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_3_option_3_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="3_4"}
						{if $freetier3option4}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_3_option_4_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_3_option_4_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_3_option_4_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="3_5"}
						{if $freetier3option5}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_3_option_5_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_3_option_5_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_3_option_5_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="3_6"}
						{if $freetier3option6}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_3_option_6_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_3_option_6_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_3_option_6_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="3_7"}
						{if $freetier3option7}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_3_option_7_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_3_option_7_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_3_option_7_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="3_8"}
						{if $freetier3option8}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_3_option_8_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_3_option_8_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_3_option_8_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="3_9"}
						{if $freetier3option9}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_3_option_9_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_3_option_9_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_3_option_9_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="3_10"}
						{if $freetier3option10}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_3_option_10_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_3_option_10_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_3_option_10_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					
					{if $theme_vars_shipping_tier_3_option_2_name!=""}
						<form action="" method="get">
						<input type="hidden" name="coupon" value="{$smarty.request.coupon}">
						<select name="chb_sh">

							<option value="3_1">{$theme_vars_shipping_tier_3_option_1_name} ({if $theme_vars_shipping_tier_3_option_1_price=="0" || $freetier3option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_1_net}{/if})</option>
							<option value="3_2" {if $smarty.request.chb_sh=="3_2"}selected="selected"{/if}>{$theme_vars_shipping_tier_3_option_2_name} ({if $theme_vars_shipping_tier_3_option_2_price=="0" || $freetier3option2}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_2_net}{/if})</option>
							{if $theme_vars_shipping_tier_3_option_3_name!=""}
							<option value="3_3" {if $smarty.request.chb_sh=="3_3"}selected="selected"{/if}>{$theme_vars_shipping_tier_3_option_3_name} ({if $theme_vars_shipping_tier_3_option_3_price=="0" || $freetier3option3}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_3_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_3_option_4_name!=""}
							<option value="3_4" {if $smarty.request.chb_sh=="3_4"}selected="selected"{/if}>{$theme_vars_shipping_tier_3_option_4_name} ({if $theme_vars_shipping_tier_3_option_4_price=="0" || $freetier3option4}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_4_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_3_option_5_name!=""}
							<option value="3_5" {if $smarty.request.chb_sh=="3_5"}selected="selected"{/if}>{$theme_vars_shipping_tier_3_option_5_name} ({if $theme_vars_shipping_tier_3_option_5_price=="0" || $freetier3option5}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_5_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_3_option_6_name!=""}
							<option value="3_6" {if $smarty.request.chb_sh=="3_6"}selected="selected"{/if}>{$theme_vars_shipping_tier_3_option_6_name} ({if $theme_vars_shipping_tier_3_option_6_price=="0" || $freetier3option6}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_6_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_3_option_7_name!=""}
							<option value="3_7" {if $smarty.request.chb_sh=="3_7"}selected="selected"{/if}>{$theme_vars_shipping_tier_3_option_7_name} ({if $theme_vars_shipping_tier_3_option_7_price=="0" || $freetier3option7}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_7_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_3_option_8_name!=""}
							<option value="3_8" {if $smarty.request.chb_sh=="3_8"}selected="selected"{/if}>{$theme_vars_shipping_tier_3_option_8_name} ({if $theme_vars_shipping_tier_3_option_8_price=="0" || $freetier3option8}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_8_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_3_option_9_name!=""}
							<option value="3_9" {if $smarty.request.chb_sh=="3_9"}selected="selected"{/if}>{$theme_vars_shipping_tier_3_option_9_name} ({if $theme_vars_shipping_tier_3_option_9_price=="0" || $freetier3option9}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_9_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_3_option_10_name!=""}
							<option value="3_10" {if $smarty.request.chb_sh=="3_10"}selected="selected"{/if}>{$theme_vars_shipping_tier_3_option_10_name} ({if $theme_vars_shipping_tier_3_option_10_price=="0" || $freetier3option10}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_10_net}{/if})</option>
							{/if}
						</select>
						<noscript><input type='submit' value="Update shipping"></noscript>
						</form>
					{else}
						<p>{if $theme_vars_shipping_tier_3_option_1_price=="0" || $freetier3option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_3_option_1_net}{/if}</p>
					{/if}
				{elseif $theme_vars_enable_shipping_tier_2 && $net_totals>=$theme_vars_shipping_tier_2_threshold}
					
					{if $freetier2option1}
						{assign var=shipping value=0.00}
						{assign var=shipping_tax value=0.00}
					{else}
						{assign var=shipping value="%i"|money_format:$shipping_tier_2_option_1_net}
						{assign var=shipping_tax value="%i"|money_format:$shipping_tier_2_option_1_tax}
					{/if}
					{if !$theme_vars_enable_shipping_tier_2_option_1_sales_tax}
						{assign var=omit_tax value=true}
					{/if}
					
					{if $smarty.request.chb_sh=="2_2"}
						{if $freetier2option2}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_2_option_2_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_2_option_2_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_2_option_2_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					
					{/if}
					{if $smarty.request.chb_sh=="2_3"}
						{if $freetier2option3}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_2_option_3_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_2_option_3_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_2_option_3_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="2_4"}
						{if $freetier2option4}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_2_option_4_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_2_option_4_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_2_option_4_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="2_5"}
						{if $freetier2option5}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_2_option_5_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_2_option_5_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_2_option_5_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="2_6"}
						{if $freetier2option6}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_2_option_6_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_2_option_6_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_2_option_6_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="2_7"}
						{if $freetier2option7}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_2_option_7_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_2_option_7_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_2_option_7_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="2_8"}
						{if $freetier2option8}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_2_option_8_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_2_option_8_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_2_option_8_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="2_9"}
						{if $freetier2option9}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_2_option_9_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_2_option_9_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_2_option_9_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="2_10"}
						{if $freetier2option10}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_2_option_10_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_2_option_10_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_2_option_10_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					
					{if $theme_vars_shipping_tier_2_option_2_name!=""}
						<form action="" method="get">
						<input type="hidden" name="coupon" value="{$smarty.request.coupon}">
						<select name="chb_sh">

							<option value="2_1">{$theme_vars_shipping_tier_2_option_1_name} ({if $theme_vars_shipping_tier_2_option_1_price=="0" || $freetier2option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_1_net}{/if})</option>
							<option value="2_2" {if $smarty.request.chb_sh=="2_2"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_2_name} ({if $theme_vars_shipping_tier_2_option_2_price=="0" || $freetier2option2}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_2_net}{/if})</option>
							{if $theme_vars_shipping_tier_2_option_3_name!=""}
							<option value="2_3" {if $smarty.request.chb_sh=="2_3"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_3_name} ({if $theme_vars_shipping_tier_2_option_3_price=="0" || $freetier2option3}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_3_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_2_option_4_name!=""}
							<option value="2_4" {if $smarty.request.chb_sh=="2_4"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_4_name} ({if $theme_vars_shipping_tier_2_option_4_price=="0" || $freetier2option4}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_4_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_2_option_5_name!=""}
							<option value="2_5" {if $smarty.request.chb_sh=="2_5"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_5_name} ({if $theme_vars_shipping_tier_2_option_5_price=="0" || $freetier2option5}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_5_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_2_option_6_name!=""}
							<option value="2_6" {if $smarty.request.chb_sh=="2_6"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_6_name} ({if $theme_vars_shipping_tier_2_option_6_price=="0" || $freetier2option6}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_6_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_2_option_7_name!=""}
							<option value="2_7" {if $smarty.request.chb_sh=="2_7"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_7_name} ({if $theme_vars_shipping_tier_2_option_7_price=="0" || $freetier2option7}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_7_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_2_option_8_name!=""}
							<option value="2_8" {if $smarty.request.chb_sh=="2_8"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_8_name} ({if $theme_vars_shipping_tier_2_option_8_price=="0" || $freetier2option8}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_8_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_2_option_9_name!=""}
							<option value="2_9" {if $smarty.request.chb_sh=="2_9"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_9_name} ({if $theme_vars_shipping_tier_2_option_9_price=="0" || $freetier2option9}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_9_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_2_option_10_name!=""}
							<option value="2_10" {if $smarty.request.chb_sh=="2_10"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_10_name} ({if $theme_vars_shipping_tier_2_option_10_price=="0" || $freetier2option10}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_10_net}{/if})</option>
							{/if}
						</select>
						<noscript><input type='submit' value="Update shipping"></noscript>
						</form>
					{else}
						<p>{if $theme_vars_shipping_tier_2_option_1_price=="0" || $freetier2option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_2_option_1_net}{/if}</p>
					{/if}
				{else}
					{if $freetier1option1}
						{assign var=shipping value=0.00}
						{assign var=shipping_tax value=0.00}
					{else}
						{assign var=shipping value="%i"|money_format:$shipping_tier_1_option_1_net}
						{assign var=shipping_tax value="%i"|money_format:$shipping_tier_1_option_1_tax}
					{/if}

					{if !$theme_vars_enable_shipping_tier_1_option_1_sales_tax}
						{assign var=omit_tax value=true}
					{/if}
					
					{if $smarty.request.chb_sh=="1_2"}
						{if $freetier1option2}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}							
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_1_option_2_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_1_option_2_tax}
						{/if}		
						
						{if !$theme_vars_enable_shipping_tier_1_option_2_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="1_3"}
						{if $freetier1option3}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_1_option_3_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_1_option_3_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_1_option_3_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="1_4"}
						{if $freetier1option4}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_1_option_4_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_1_option_4_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_1_option_4_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="1_5"}
						{if $freetier1option5}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_1_option_5_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_1_option_5_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_1_option_5_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="1_6"}
						{if $freetier1option6}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_1_option_6_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_1_option_6_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_1_option_6_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="1_7"}
						{if $freetier1option7}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_1_option_7_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_1_option_7_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_1_option_7_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="1_8"}
						{if $freetier1option8}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_1_option_8_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_1_option_8_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_1_option_8_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="1_9"}
						{if $freetier1option9}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_1_option_9_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_1_option_9_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_1_option_9_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $smarty.request.chb_sh=="1_10"}
						{if $freetier1option10}
							{assign var=shipping value=0.00}
							{assign var=shipping_tax value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$shipping_tier_1_option_10_net}
							{assign var=shipping_tax value="%i"|money_format:$shipping_tier_1_option_10_tax}
						{/if}
						{if !$theme_vars_enable_shipping_tier_1_option_10_sales_tax}
							{assign var=omit_tax value=true}
						{else}
							{assign var=omit_tax value=false}
						{/if}			
					{/if}
					{if $theme_vars_shipping_tier_1_option_2_name!=""}
						<form action="" method="get">
						<input type="hidden" name="coupon" value="{$smarty.request.coupon}">
						<select name="chb_sh">
							<option value="1_1">{$theme_vars_shipping_tier_1_option_1_name} ({if $theme_vars_shipping_tier_1_option_1_price=="0" || $freetier1option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_1_net}{/if})</option>
							<option value="1_2" {if $smarty.request.chb_sh=="1_2"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_2_name} ({if $theme_vars_shipping_tier_1_option_2_price=="0" || $freetier1option2}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_2_net}{/if})</option>
							{if $theme_vars_shipping_tier_1_option_3_name!=""}
							<option value="1_3" {if $smarty.request.chb_sh=="1_3"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_3_name} ({if $theme_vars_shipping_tier_1_option_3_price=="0" || $freetier1option3}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_3_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_1_option_4_name!=""}
							<option value="1_4" {if $smarty.request.chb_sh=="1_4"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_4_name} ({if $theme_vars_shipping_tier_1_option_4_price=="0" || $freetier1option4}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_4_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_1_option_5_name!=""}
							<option value="1_5" {if $smarty.request.chb_sh=="1_5"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_5_name} ({if $theme_vars_shipping_tier_1_option_5_price=="0" || $freetier1option5}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_5_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_1_option_6_name!=""}
							<option value="1_6" {if $smarty.request.chb_sh=="1_6"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_6_name} ({if $theme_vars_shipping_tier_1_option_6_price=="0" || $freetier1option6}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_6_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_1_option_7_name!=""}
							<option value="1_7" {if $smarty.request.chb_sh=="1_7"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_7_name} ({if $theme_vars_shipping_tier_1_option_7_price=="0" || $freetier1option7}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_7_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_1_option_8_name!=""}
							<option value="1_8" {if $smarty.request.chb_sh=="1_8"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_8_name} ({if $theme_vars_shipping_tier_1_option_8_price=="0" || $freetier1option8}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_8_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_1_option_9_name!=""}
							<option value="1_9" {if $smarty.request.chb_sh=="1_9"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_9_name} ({if $theme_vars_shipping_tier_1_option_9_price=="0" || $freetier1option9}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_9_net}{/if})</option>
							{/if}
							{if $theme_vars_shipping_tier_1_option_10_name!=""}
							<option value="1_10" {if $smarty.request.chb_sh=="1_10"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_10_name} ({if $theme_vars_shipping_tier_1_option_10_price=="0" || $freetier1option10}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_10_net}{/if})</option>
							{/if}
						</select>
						<noscript><input type='submit' value="Update shipping"></noscript>
						</form>
					{else}
						<p>{if $theme_vars_shipping_tier_1_option_1_price=="0" || $freetier1option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$shipping_tier_1_option_1_net}{/if}</p>
					{/if}
					{if $tax_on_shipping==0}
						{assign var=shipping_tax value=0.00}
					{/if}
				{/if}
				{*
				{if $basket_tax_enabled && !$omit_tax}

				{math assign=netplusshipping equation="x+z" x=$net_totals z=$shipping}
				{math assign=netminusdiscount equation="x-y" x=$net_totals y=$discount}
				{math assign=netpsminusdiscount equation="x-y" x=$netplusshipping y=$discount}

				{math assign=new_basket_tax equation="((pc/100) * p)" p=$netminusdiscount pc=$basket_tax_amount}

				{math assign=totaltax equation="b + s + c" b=$new_basket_tax s=$shipping_tax c=$cms_shipping_tax}

				<p><strong>{$basket_tax_name}:</strong>{$currency_sym}{"%i"|money_format:$totaltax}</p>
				{/if}
				{if $elligblefordiscountfixed}
					<p><strong>Discount:</strong>{$currency_sym}-{"%i"|money_format:$discount}</p>
				{/if}
				{if $omit_tax}
				{assign var=dtotals value=$net_totals+$shipping}
				{assign var=shipping_tax value=0}
				{assign var=totals value=$ototals}	
				{else}
				{assign var=dtotals value=$net_totals+$shipping+$totaltax}
				
				{/if}
				<p><strong>{$langs.Total}:</strong>{$currency_sym}{"%i"|money_format:$dtotals}</p>
				*}
			{else}
				{* SHIPPING DISABLED IN THEME VARS -  still include per-product shipping *}
				{if $basket_tax_enabled}
					{*
					{if $cms_shipping_total>0}
						<p><strong>{$theme_vars_shipping_name}:</strong>{$currency_sym}{$cms_shipping_total}</p>
						{assign var=shipping value=$cms_shipping_total}
					{/if}
					{if $discount}
						<p><strong>Discount:</strong>{$currency_sym}-{"%i"|money_format:$discount}</p>
					{/if}
				


					{math assign=netplusshipping equation="x+z" x=$net_totals z=$cms_shipping_total}
					{math assign=netpsminusdiscount equation="x-y" x=$netplusshipping y=$discount}
					<p><strong>{$langs.Sub_Total}:</strong> {if $discount}<strike>{$currency_sym}{"%i"|money_format:$netplusshipping}</strike>{/if} {$currency_sym}{"%i"|money_format:$netpsminusdiscount}</p>
				

					{math assign=new_basket_tax equation="((pc/100) * p)" p=$netminusdiscount pc=$basket_tax_amount}


					{assign var=newtaxplusshiptax value=$new_basket_tax+$cms_shipping_tax}
					{assign var=totaltax value=$newtaxplusshiptax}
					
					<p><strong>{$basket_tax_name}:</strong>{$currency_sym}{"%i"|money_format:$newtaxplusshiptax}</p>
					{math assign=grossminusdiscount equation="(x-y) + z + a" x=$net_totals y=$discount z=$newtaxplusshiptax a=$cms_shipping_total}

					<p><strong>{$langs.Total}:</strong> {$currency_sym}{"%i"|money_format:$grossminusdiscount}</p>
					*}
				{else}
					{* No tax enabled *}
					{*
					{math assign=grossminusdiscount equation="x-y" x=$totals y=$discount }
					{if $cms_shipping_total>0}
						<p><strong>{$theme_vars_shipping_name}:</strong>{$currency_sym}{$cms_shipping_total}</p>
						{assign var=shipping value=$cms_shipping_total}
					
					{/if}
					{math assign=oplusship equation="x+y" x=$ototals y=$cms_shipping_total}
					<p><strong>{$langs.Total}:</strong> {if $ototals}<strike>{$currency_sym}{"%i"|money_format:$oplusship}</strike>{/if} {$currency_sym}{"%i"|money_format:$grossminusdiscount}</p>
					*}
				{/if}

			{/if}

				{if !$theme_vars_enable_shipping}
					{if $cms_shipping_total>0}
						<p><strong>{if $theme_vars_shipping_name}{$theme_vars_shipping_name}{else}{$langs.Shipping}{/if}:</strong>{$currency_sym}{$cms_shipping_total}</p>
						{assign var=shipping value=$cms_shipping_total}
				
					{/if}
				{/if}
				{if $elligblefordiscountfixed}
					<p><strong>Discount:</strong>{$currency_sym}-{"%i"|money_format:$discount}</p>
				{/if}
				{if $discount==""}
				{assign var=discount value=0}
				{/if}
				{math assign=netminusdiscount equation="x-y+s" x=$net_totals y=$discount s=$shipping}

				{math assign=netplusshipping equation="x+z" x=$net_totals z=$shipping}
				{if !$omit_tax && $basket_tax_enabled}
				<p><strong>{$langs.Sub_Total}:</strong> {if $discount}<strike>{$currency_sym}{"%i"|money_format:$netplusshipping}</strike>{/if} {$currency_sym}{"%i"|money_format:$netminusdiscount}</p>
				{/if}
				{if $omit_tax || !$basket_tax_enabled}
				{assign var=totaltax value=0}
				{else}


					{assign var=netminusdiscount value=$taxableafterdiscounts }



				{if $netminusdiscount<0} 
				{assign var=netminusdiscount value=0}
				{/if}

				
				{math assign=new_basket_tax equation="((pc/100) * p)" p=$netminusdiscount pc=$basket_tax_amount}
				{assign var=newtaxplusshiptax value=$new_basket_tax+$cms_shipping_tax+$shipping_tax}
				{assign var=totaltax value=$newtaxplusshiptax|round:2}

				{assign var=newtaxplusshiptax value=$newtaxplusshiptax|round:2}

				<p><strong>{$basket_tax_name}:</strong>{$currency_sym}{"%i"|money_format:$newtaxplusshiptax}</p>
				{/if}
				{math assign=grand equation="(x-y) + z + a" x=$net_totals y=$discount z=$totaltax a=$shipping}
				<p><strong>{$langs.Total}:</strong> {$currency_sym}{"%i"|money_format:$grand}</p>

			{if $merchant2_enabled||$merchant3_enabled}
				<p><strong>Pay with:</strong></p>
				<form action="" method="post">
					<input type="hidden" name="coupon" value="{$smarty.request.coupon}">
					<input type="hidden" name="chb_sh" value="{$smarty.request.chb_sh}">
					<label><input type="radio" name="gateway" value="paypal" {if $smarty.request.gateway!="authnet"}checked="checked"{/if} class="gatewaychange"> PayPal</label>
					<label><input type="radio" name="gateway" value="authnet" {if $smarty.request.gateway=="authnet"}checked="checked"{/if} class="gatewaychange"> Pay by Credit Card</label>
					{if $merchant3_enabled}
						<label><input type="radio" name="gateway" value="paylater" {if $smarty.request.gateway=="paylater"}checked="checked"{/if} class="gatewaychange"> {$merchant3_1}</label>
					{/if}
					<noscript><input type='submit' value="Update shipping"></noscript>
				</form>
			{/if}
			
			
		</div>
	</div>
</div>
{$formOnCheckout}
{/if}

{* Debug: 
Authnet: {$ototals}<br/>
PayPal: {$totaltax} + {$shipping} - {$discount}
*}
<!-- If you are integrating a custom gateway please ensure the form that goes to the gateway has the id of paymentGatewayForm to ensure contact forms added to the checkout are submitted before the gateway form -->

{* PAYPAL *}


{if $admin_logged_in}

	{if !$smarty.post.admin_place_order}
		<div class="styleBox clearfix">
		<h4>{$admin_langs.Welcome_Admin}</h4>
		<p>{$admin_langs.Complete_Checkout}<p>
			<form action="" method="post" id="paymentGatewayForm">
				<input type="hidden" name="admin_place_order" value="1" />
				
				<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
					<label class="">{$admin_langs.First_Name}</label>
					<input type="text" maxlength="256" name="admin_order_first_name" class="input" />
				</div>
				<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
					<label class="">{$admin_langs.Last_Name}</label>
					<input type="text" maxlength="256" name="admin_order_last_name" class="input" />
				</div>
				<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
					<label class="">{$admin_langs.Email}</label>
					<input type="text" maxlength="256" name="admin_order_email" class="input" />
				</div>
				<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
					<label class="">{$admin_langs.Phone}</label>
					<input type="text" maxlength="256" name="admin_order_phone" class="input" />
				</div>
				<div class="clear"></div>
				<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
					<label class="">{$admin_langs.Street}</label>
					<input type="text" maxlength="256" name="admin_order_street" class="input" />
				</div>
				<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
					<label class="">{$admin_langs.City}</label>
					<input type="text" maxlength="256" name="admin_order_city" class="input" />
				</div>
				<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
					<label class="">{$admin_langs.State}</label>
					<input type="text" maxlength="256" name="admin_order_state" class="input" />
				</div>
				<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
					<label class="">{$admin_langs.Zip}</label>
					<input type="text" maxlength="256" name="admin_order_zip" class="input" />
				</div>
				<p class="button submit_form hide_if_no_js">
					<a href="#" class=''>{$langs.Submit}</a>
				</p>
		
				<input type="submit" value="{$langs.Submit}" class="contact-form-hide-with-js"/>
			</form>
		</div>
	{/if}
	
{else}

	{*paypal form*}
	{if (!$smarty.post.gateway || $smarty.post.gateway=="paypal") && !$smarty.post.gatewaypost}
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float:right;" id="paymentGatewayForm">
		<input type="hidden" name="cmd" value="_cart" />
		<input type="hidden" name="upload" value="1" />
		<input type="hidden" name="business" value="{$merchant1_1}" />
		<input type="hidden" name="notify_url" value="{$ipn}" />
		<input type="hidden" name="custom" value="{$buyerId}" />
		<input type="hidden" name="rm" value="2" />
		<input type="hidden" name="return" value="{$return}" />
		<input type="hidden" name="cancel_return" value="{$return_fail}" />
		<input type="hidden" name="no_note" value="{$no_note}" />
		<input type="hidden" name="currency_code" value="{$currency_code}" />
		<input type="hidden" name="weight_unit" value="kgs" />
		<input type="hidden" name="bn" value="SSCMS_SP" />
		{if $found}
		<input type="hidden" name="discount_amount_cart" value="{"%i"|money_format:$discount}" />
		{/if}
		{if $shipping}
			<input type="hidden" name="handling_cart" value="{$shipping}" />		
		{/if}
		{if !$omit_tax}
		<input type="hidden" name="tax_cart" value="{"%i"|money_format:$totaltax}" />		
		{/if}
		
		{foreach from=$orders item=order name=ordersLoop}
		{if $order.product_code!="TAX"}
		<input type="hidden" name="item_name_{$smarty.foreach.ordersLoop.iteration}" value="{$order.name|@htmlspecialchars} - {$order.variant|strip_tags|@htmlspecialchars}" />
		<input type="hidden" name="amount_{$smarty.foreach.ordersLoop.iteration}" value="{$order.price}" />
		<input type="hidden" name="quantity_{$smarty.foreach.ordersLoop.iteration}" value="{$order.quantity}" />
		<input type="hidden" name="weight_{$smarty.foreach.ordersLoop.iteration}" value="{$order.weight}" />
		{/if}
		{/foreach}
		<input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" name="" value="{$langs.Checkout_Through_PayPal}"/>
	</form>
	{/if}
	
	{* Authent *}

	
	{if $smarty.post.gateway=="authnet"}
	<form action="" method="post" id="paymentGatewayForm" class="form">
		<input type="hidden" name="gatewaypost" value="authnet" />
		<input type="hidden" name="total" value="{$ototals}">	
		<input type="hidden" name="discount" value="{$discount}">
		<input type="hidden" name="shipping" value="{$shipping}">
		<input type="hidden" name="tax" value="{"%i"|money_format:$totaltax}">
		<h2>{$langs.Contact_Details}</h2>
		<div class="styleBox clearfix">
			<div class="input-wrapper input-wrapper-width-50 input-wrapper-type-short" >
				<label class="">{$langs.Email}</label>
				<input type="text" maxlength="256" name="email" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="">{$langs.Phone}</label>
				<input type="text" maxlength="256" name="phone" class="input" />
			</div>
		</div>

		<h2>{$langs.Card_Details}</h2>
		<div class="styleBox clearfix">
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="" for="card">{$langs.Name_On_Card}</label>
				<input id="card" type="text" maxlength="19" placeholder="{$langs.First_Name} {$langs.Last_Name}" name="nameoncard" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="" for="cardnumber">{$langs.Card_Number}</label>
				<input id="cardnumber" type="text" maxlength="19" placeholder="XXXX XXXX XXXX XXXX" name="cardnumber" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="" for="expiry">{$langs.Card_Expiry}</label>
				<input id="expiry" type="text" maxlength="7" data-required-format="####-##" placeholder="YYYY-MM" name="expirydate" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="" for="ccv">{$langs.CCV}</label>
				<input id="ccv" type="text" maxlength="4" placeholder="3 or 4 digit code" data-required-format="###*" name="ccv" class="input required" />
			</div>
		</div>
		
		<h2>{$langs.Billing_Address}</h2>
		<div class="styleBox clearfix">
			
			<div class="input-wrapper input-wrapper-width-50 input-wrapper-type-short" >
				<label class="">{$langs.Street}</label>
				<input type="text" maxlength="256" name="street" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-50 input-wrapper-type-short" >
				<label class="">{$langs.Town}</label>
				<input type="text" maxlength="256" name="town" class="input required" />
			</div>
			
			<div class="clear"></div>

			
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="">{$langs.City}</label>
				<input type="text" maxlength="256" name="city" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="">{$langs.State}</label>
				<input type="text" maxlength="256" name="state" class="input required" />
			</div>
			
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="">{$langs.Zip}</label>
				<input type="text" maxlength="256" name="zip" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="" for="country">{$langs.Country}</label>
				<select name="country" class="required select" id="country" >
						
						<option value="AFG">Afghanistan</option>
						<option value="ALA">Åland Islands</option>
						<option value="ALB">Albania</option>
						<option value="DZA">Algeria</option>
						<option value="ASM">American Samoa</option>
						<option value="AND">Andorra</option>
						<option value="AGO">Angola</option>
						<option value="AIA">Anguilla</option>
						<option value="ATA">Antarctica</option>
						<option value="ATG">Antigua and Barbuda</option>
						<option value="ARG">Argentina</option>
						<option value="ARM">Armenia</option>
						<option value="ABW">Aruba</option>
						<option value="AUS">Australia</option>
						<option value="AUT">Austria</option>
						<option value="AZE">Azerbaijan</option>
						<option value="BHS">Bahamas</option>
						<option value="BHR">Bahrain</option>
						<option value="BGD">Bangladesh</option>
						<option value="BRB">Barbados</option>
						<option value="BLR">Belarus</option>
						<option value="BEL">Belgium</option>
						<option value="BLZ">Belize</option>
						<option value="BEN">Benin</option>
						<option value="BMU">Bermuda</option>
						<option value="BTN">Bhutan</option>
						<option value="BOL">Bolivia, Plurinational State of</option>
						<option value="BES">Bonaire, Sint Eustatius and Saba</option>
						<option value="BIH">Bosnia and Herzegovina</option>
						<option value="BWA">Botswana</option>
						<option value="BVT">Bouvet Island</option>
						<option value="BRA">Brazil</option>
						<option value="IOT">British Indian Ocean Territory</option>
						<option value="BRN">Brunei Darussalam</option>
						<option value="BGR">Bulgaria</option>
						<option value="BFA">Burkina Faso</option>
						<option value="BDI">Burundi</option>
						<option value="KHM">Cambodia</option>
						<option value="CMR">Cameroon</option>
						<option value="CAN">Canada</option>
						<option value="CPV">Cape Verde</option>
						<option value="CYM">Cayman Islands</option>
						<option value="CAF">Central African Republic</option>
						<option value="TCD">Chad</option>
						<option value="CHL">Chile</option>
						<option value="CHN">China</option>
						<option value="CXR">Christmas Island</option>
						<option value="CCK">Cocos (Keeling) Islands</option>
						<option value="COL">Colombia</option>
						<option value="COM">Comoros</option>
						<option value="COG">Congo</option>
						<option value="COD">Congo, the Democratic Republic of the</option>
						<option value="COK">Cook Islands</option>
						<option value="CRI">Costa Rica</option>
						<option value="CIV">Côte d'Ivoire</option>
						<option value="HRV">Croatia</option>
						<option value="CUB">Cuba</option>
						<option value="CUW">Curaçao</option>
						<option value="CYP">Cyprus</option>
						<option value="CZE">Czech Republic</option>
						<option value="DNK">Denmark</option>
						<option value="DJI">Djibouti</option>
						<option value="DMA">Dominica</option>
						<option value="DOM">Dominican Republic</option>
						<option value="ECU">Ecuador</option>
						<option value="EGY">Egypt</option>
						<option value="SLV">El Salvador</option>
						<option value="GNQ">Equatorial Guinea</option>
						<option value="ERI">Eritrea</option>
						<option value="EST">Estonia</option>
						<option value="ETH">Ethiopia</option>
						<option value="FLK">Falkland Islands (Malvinas)</option>
						<option value="FRO">Faroe Islands</option>
						<option value="FJI">Fiji</option>
						<option value="FIN">Finland</option>
						<option value="FRA">France</option>
						<option value="GUF">French Guiana</option>
						<option value="PYF">French Polynesia</option>
						<option value="ATF">French Southern Territories</option>
						<option value="GAB">Gabon</option>
						<option value="GMB">Gambia</option>
						<option value="GEO">Georgia</option>
						<option value="DEU">Germany</option>
						<option value="GHA">Ghana</option>
						<option value="GIB">Gibraltar</option>
						<option value="GRC">Greece</option>
						<option value="GRL">Greenland</option>
						<option value="GRD">Grenada</option>
						<option value="GLP">Guadeloupe</option>
						<option value="GUM">Guam</option>
						<option value="GTM">Guatemala</option>
						<option value="GGY">Guernsey</option>
						<option value="GIN">Guinea</option>
						<option value="GNB">Guinea-Bissau</option>
						<option value="GUY">Guyana</option>
						<option value="HTI">Haiti</option>
						<option value="HMD">Heard Island and McDonald Islands</option>
						<option value="VAT">Holy See (Vatican City State)</option>
						<option value="HND">Honduras</option>
						<option value="HKG">Hong Kong</option>
						<option value="HUN">Hungary</option>
						<option value="ISL">Iceland</option>
						<option value="IND">India</option>
						<option value="IDN">Indonesia</option>
						<option value="IRN">Iran, Islamic Republic of</option>
						<option value="IRQ">Iraq</option>
						<option value="IRL">Ireland</option>
						<option value="IMN">Isle of Man</option>
						<option value="ISR">Israel</option>
						<option value="ITA">Italy</option>
						<option value="JAM">Jamaica</option>
						<option value="JPN">Japan</option>
						<option value="JEY">Jersey</option>
						<option value="JOR">Jordan</option>
						<option value="KAZ">Kazakhstan</option>
						<option value="KEN">Kenya</option>
						<option value="KIR">Kiribati</option>
						<option value="PRK">Korea, Democratic People's Republic of</option>
						<option value="KOR">Korea, Republic of</option>
						<option value="KWT">Kuwait</option>
						<option value="KGZ">Kyrgyzstan</option>
						<option value="LAO">Lao People's Democratic Republic</option>
						<option value="LVA">Latvia</option>
						<option value="LBN">Lebanon</option>
						<option value="LSO">Lesotho</option>
						<option value="LBR">Liberia</option>
						<option value="LBY">Libya</option>
						<option value="LIE">Liechtenstein</option>
						<option value="LTU">Lithuania</option>
						<option value="LUX">Luxembourg</option>
						<option value="MAC">Macao</option>
						<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
						<option value="MDG">Madagascar</option>
						<option value="MWI">Malawi</option>
						<option value="MYS">Malaysia</option>
						<option value="MDV">Maldives</option>
						<option value="MLI">Mali</option>
						<option value="MLT">Malta</option>
						<option value="MHL">Marshall Islands</option>
						<option value="MTQ">Martinique</option>
						<option value="MRT">Mauritania</option>
						<option value="MUS">Mauritius</option>
						<option value="MYT">Mayotte</option>
						<option value="MEX">Mexico</option>
						<option value="FSM">Micronesia, Federated States of</option>
						<option value="MDA">Moldova, Republic of</option>
						<option value="MCO">Monaco</option>
						<option value="MNG">Mongolia</option>
						<option value="MNE">Montenegro</option>
						<option value="MSR">Montserrat</option>
						<option value="MAR">Morocco</option>
						<option value="MOZ">Mozambique</option>
						<option value="MMR">Myanmar</option>
						<option value="NAM">Namibia</option>
						<option value="NRU">Nauru</option>
						<option value="NPL">Nepal</option>
						<option value="NLD">Netherlands</option>
						<option value="NCL">New Caledonia</option>
						<option value="NZL">New Zealand</option>
						<option value="NIC">Nicaragua</option>
						<option value="NER">Niger</option>
						<option value="NGA">Nigeria</option>
						<option value="NIU">Niue</option>
						<option value="NFK">Norfolk Island</option>
						<option value="MNP">Northern Mariana Islands</option>
						<option value="NOR">Norway</option>
						<option value="OMN">Oman</option>
						<option value="PAK">Pakistan</option>
						<option value="PLW">Palau</option>
						<option value="PSE">Palestinian Territory, Occupied</option>
						<option value="PAN">Panama</option>
						<option value="PNG">Papua New Guinea</option>
						<option value="PRY">Paraguay</option>
						<option value="PER">Peru</option>
						<option value="PHL">Philippines</option>
						<option value="PCN">Pitcairn</option>
						<option value="POL">Poland</option>
						<option value="PRT">Portugal</option>
						<option value="PRI">Puerto Rico</option>
						<option value="QAT">Qatar</option>
						<option value="REU">Réunion</option>
						<option value="ROU">Romania</option>
						<option value="RUS">Russian Federation</option>
						<option value="RWA">Rwanda</option>
						<option value="BLM">Saint Barthélemy</option>
						<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
						<option value="KNA">Saint Kitts and Nevis</option>
						<option value="LCA">Saint Lucia</option>
						<option value="MAF">Saint Martin (French part)</option>
						<option value="SPM">Saint Pierre and Miquelon</option>
						<option value="VCT">Saint Vincent and the Grenadines</option>
						<option value="WSM">Samoa</option>
						<option value="SMR">San Marino</option>
						<option value="STP">Sao Tome and Principe</option>
						<option value="SAU">Saudi Arabia</option>
						<option value="SEN">Senegal</option>
						<option value="SRB">Serbia</option>
						<option value="SYC">Seychelles</option>
						<option value="SLE">Sierra Leone</option>
						<option value="SGP">Singapore</option>
						<option value="SXM">Sint Maarten (Dutch part)</option>
						<option value="SVK">Slovakia</option>
						<option value="SVN">Slovenia</option>
						<option value="SLB">Solomon Islands</option>
						<option value="SOM">Somalia</option>
						<option value="ZAF">South Africa</option>
						<option value="SGS">South Georgia and the South Sandwich Islands</option>
						<option value="SSD">South Sudan</option>
						<option value="ESP">Spain</option>
						<option value="LKA">Sri Lanka</option>
						<option value="SDN">Sudan</option>
						<option value="SUR">Suriname</option>
						<option value="SJM">Svalbard and Jan Mayen</option>
						<option value="SWZ">Swaziland</option>
						<option value="SWE">Sweden</option>
						<option value="CHE">Switzerland</option>
						<option value="SYR">Syrian Arab Republic</option>
						<option value="TWN">Taiwan, Province of China</option>
						<option value="TJK">Tajikistan</option>
						<option value="TZA">Tanzania, United Republic of</option>
						<option value="THA">Thailand</option>
						<option value="TLS">Timor-Leste</option>
						<option value="TGO">Togo</option>
						<option value="TKL">Tokelau</option>
						<option value="TON">Tonga</option>
						<option value="TTO">Trinidad and Tobago</option>
						<option value="TUN">Tunisia</option>
						<option value="TUR">Turkey</option>
						<option value="TKM">Turkmenistan</option>
						<option value="TCA">Turks and Caicos Islands</option>
						<option value="TUV">Tuvalu</option>
						<option value="UGA">Uganda</option>
						<option value="UKR">Ukraine</option>
						<option value="ARE">United Arab Emirates</option>
						<option value="GBR">United Kingdom</option>
						<option value="USA" selected>United States</option>
						<option value="UMI">United States Minor Outlying Islands</option>
						<option value="URY">Uruguay</option>
						<option value="UZB">Uzbekistan</option>
						<option value="VUT">Vanuatu</option>
						<option value="VEN">Venezuela, Bolivarian Republic of</option>
						<option value="VNM">Viet Nam</option>
						<option value="VGB">Virgin Islands, British</option>
						<option value="VIR">Virgin Islands, U.S.</option>
						<option value="WLF">Wallis and Futuna</option>
						<option value="ESH">Western Sahara</option>
						<option value="YEM">Yemen</option>
						<option value="ZMB">Zambia</option>
						<option value="ZWE">Zimbabwe</option>
				</select>
			</div>
			
		</div>
		
		
		<p class="button submit_form hide_if_no_js">
			<a href="#" class=''>{$langs.Checkout}</a>
		</p>

		<input type="submit" value="{$langs.Checkout}" class="contact-form-hide-with-js"/>
	</form>
	{/if}
	
	
	{* Later *}

	
	{if $smarty.post.gateway=="paylater"}
	<form action="" method="post" id="paymentGatewayForm" class="form">
		<input type="hidden" name="gatewaypost" value="paylater" />
		<input type="hidden" name="total" value="{$ototals}">	
		<input type="hidden" name="discount" value="{$discount}">
		<input type="hidden" name="shipping" value="{$shipping}">
		<input type="hidden" name="tax" value="{"%i"|money_format:$totaltax}">
		<h2>{$langs.Contact_Details}</h2>
		<div class="styleBox clearfix">
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="">{$langs.First_Name}</label>
				<input type="text" maxlength="256" name="admin_order_first_name" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="">{$langs.Last_Name}</label>
				<input type="text" maxlength="256" name="admin_order_last_name" class="input" />
			</div>
			<div class="clear"></div>
					
			<div class="input-wrapper input-wrapper-width-50 input-wrapper-type-short" >
				<label class="">{$langs.Email}</label>
				<input type="text" maxlength="256" name="admin_order_email" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="">{$langs.Phone}</label>
				<input type="text" maxlength="256" name="admin_order_phone" class="input" />
			</div>
		</div>

		<h2>{$langs.Address}</h2>
		<div class="styleBox clearfix">
			
			<div class="input-wrapper input-wrapper-width-50 input-wrapper-type-short" >
				<label class="">{$langs.Street}</label>
				<input type="text" maxlength="256" name="admin_order_street" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-50 input-wrapper-type-short" >
				<label class="">{$langs.Town}</label>
				<input type="text" maxlength="256" name="admin_order_town" class="input required" />
			</div>
			
			<div class="clear"></div>

			
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="">{$langs.City}</label>
				<input type="text" maxlength="256" name="admin_order_city" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="">{$langs.State}</label>
				<input type="text" maxlength="256" name="admin_order_state" class="input required" />
			</div>
			
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="">{$langs.Zip}</label>
				<input type="text" maxlength="256" name="admin_order_zip" class="input required" />
			</div>
			<div class="input-wrapper input-wrapper-width-25 input-wrapper-type-short" >
				<label class="" for="country">{$langs.Country}</label>
				<select name="admin_order_country" class="required select" id="country" >
						
						<option value="AFG">Afghanistan</option>
						<option value="ALA">Åland Islands</option>
						<option value="ALB">Albania</option>
						<option value="DZA">Algeria</option>
						<option value="ASM">American Samoa</option>
						<option value="AND">Andorra</option>
						<option value="AGO">Angola</option>
						<option value="AIA">Anguilla</option>
						<option value="ATA">Antarctica</option>
						<option value="ATG">Antigua and Barbuda</option>
						<option value="ARG">Argentina</option>
						<option value="ARM">Armenia</option>
						<option value="ABW">Aruba</option>
						<option value="AUS">Australia</option>
						<option value="AUT">Austria</option>
						<option value="AZE">Azerbaijan</option>
						<option value="BHS">Bahamas</option>
						<option value="BHR">Bahrain</option>
						<option value="BGD">Bangladesh</option>
						<option value="BRB">Barbados</option>
						<option value="BLR">Belarus</option>
						<option value="BEL">Belgium</option>
						<option value="BLZ">Belize</option>
						<option value="BEN">Benin</option>
						<option value="BMU">Bermuda</option>
						<option value="BTN">Bhutan</option>
						<option value="BOL">Bolivia, Plurinational State of</option>
						<option value="BES">Bonaire, Sint Eustatius and Saba</option>
						<option value="BIH">Bosnia and Herzegovina</option>
						<option value="BWA">Botswana</option>
						<option value="BVT">Bouvet Island</option>
						<option value="BRA">Brazil</option>
						<option value="IOT">British Indian Ocean Territory</option>
						<option value="BRN">Brunei Darussalam</option>
						<option value="BGR">Bulgaria</option>
						<option value="BFA">Burkina Faso</option>
						<option value="BDI">Burundi</option>
						<option value="KHM">Cambodia</option>
						<option value="CMR">Cameroon</option>
						<option value="CAN">Canada</option>
						<option value="CPV">Cape Verde</option>
						<option value="CYM">Cayman Islands</option>
						<option value="CAF">Central African Republic</option>
						<option value="TCD">Chad</option>
						<option value="CHL">Chile</option>
						<option value="CHN">China</option>
						<option value="CXR">Christmas Island</option>
						<option value="CCK">Cocos (Keeling) Islands</option>
						<option value="COL">Colombia</option>
						<option value="COM">Comoros</option>
						<option value="COG">Congo</option>
						<option value="COD">Congo, the Democratic Republic of the</option>
						<option value="COK">Cook Islands</option>
						<option value="CRI">Costa Rica</option>
						<option value="CIV">Côte d'Ivoire</option>
						<option value="HRV">Croatia</option>
						<option value="CUB">Cuba</option>
						<option value="CUW">Curaçao</option>
						<option value="CYP">Cyprus</option>
						<option value="CZE">Czech Republic</option>
						<option value="DNK">Denmark</option>
						<option value="DJI">Djibouti</option>
						<option value="DMA">Dominica</option>
						<option value="DOM">Dominican Republic</option>
						<option value="ECU">Ecuador</option>
						<option value="EGY">Egypt</option>
						<option value="SLV">El Salvador</option>
						<option value="GNQ">Equatorial Guinea</option>
						<option value="ERI">Eritrea</option>
						<option value="EST">Estonia</option>
						<option value="ETH">Ethiopia</option>
						<option value="FLK">Falkland Islands (Malvinas)</option>
						<option value="FRO">Faroe Islands</option>
						<option value="FJI">Fiji</option>
						<option value="FIN">Finland</option>
						<option value="FRA">France</option>
						<option value="GUF">French Guiana</option>
						<option value="PYF">French Polynesia</option>
						<option value="ATF">French Southern Territories</option>
						<option value="GAB">Gabon</option>
						<option value="GMB">Gambia</option>
						<option value="GEO">Georgia</option>
						<option value="DEU">Germany</option>
						<option value="GHA">Ghana</option>
						<option value="GIB">Gibraltar</option>
						<option value="GRC">Greece</option>
						<option value="GRL">Greenland</option>
						<option value="GRD">Grenada</option>
						<option value="GLP">Guadeloupe</option>
						<option value="GUM">Guam</option>
						<option value="GTM">Guatemala</option>
						<option value="GGY">Guernsey</option>
						<option value="GIN">Guinea</option>
						<option value="GNB">Guinea-Bissau</option>
						<option value="GUY">Guyana</option>
						<option value="HTI">Haiti</option>
						<option value="HMD">Heard Island and McDonald Islands</option>
						<option value="VAT">Holy See (Vatican City State)</option>
						<option value="HND">Honduras</option>
						<option value="HKG">Hong Kong</option>
						<option value="HUN">Hungary</option>
						<option value="ISL">Iceland</option>
						<option value="IND">India</option>
						<option value="IDN">Indonesia</option>
						<option value="IRN">Iran, Islamic Republic of</option>
						<option value="IRQ">Iraq</option>
						<option value="IRL">Ireland</option>
						<option value="IMN">Isle of Man</option>
						<option value="ISR">Israel</option>
						<option value="ITA">Italy</option>
						<option value="JAM">Jamaica</option>
						<option value="JPN">Japan</option>
						<option value="JEY">Jersey</option>
						<option value="JOR">Jordan</option>
						<option value="KAZ">Kazakhstan</option>
						<option value="KEN">Kenya</option>
						<option value="KIR">Kiribati</option>
						<option value="PRK">Korea, Democratic People's Republic of</option>
						<option value="KOR">Korea, Republic of</option>
						<option value="KWT">Kuwait</option>
						<option value="KGZ">Kyrgyzstan</option>
						<option value="LAO">Lao People's Democratic Republic</option>
						<option value="LVA">Latvia</option>
						<option value="LBN">Lebanon</option>
						<option value="LSO">Lesotho</option>
						<option value="LBR">Liberia</option>
						<option value="LBY">Libya</option>
						<option value="LIE">Liechtenstein</option>
						<option value="LTU">Lithuania</option>
						<option value="LUX">Luxembourg</option>
						<option value="MAC">Macao</option>
						<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
						<option value="MDG">Madagascar</option>
						<option value="MWI">Malawi</option>
						<option value="MYS">Malaysia</option>
						<option value="MDV">Maldives</option>
						<option value="MLI">Mali</option>
						<option value="MLT">Malta</option>
						<option value="MHL">Marshall Islands</option>
						<option value="MTQ">Martinique</option>
						<option value="MRT">Mauritania</option>
						<option value="MUS">Mauritius</option>
						<option value="MYT">Mayotte</option>
						<option value="MEX">Mexico</option>
						<option value="FSM">Micronesia, Federated States of</option>
						<option value="MDA">Moldova, Republic of</option>
						<option value="MCO">Monaco</option>
						<option value="MNG">Mongolia</option>
						<option value="MNE">Montenegro</option>
						<option value="MSR">Montserrat</option>
						<option value="MAR">Morocco</option>
						<option value="MOZ">Mozambique</option>
						<option value="MMR">Myanmar</option>
						<option value="NAM">Namibia</option>
						<option value="NRU">Nauru</option>
						<option value="NPL">Nepal</option>
						<option value="NLD">Netherlands</option>
						<option value="NCL">New Caledonia</option>
						<option value="NZL">New Zealand</option>
						<option value="NIC">Nicaragua</option>
						<option value="NER">Niger</option>
						<option value="NGA">Nigeria</option>
						<option value="NIU">Niue</option>
						<option value="NFK">Norfolk Island</option>
						<option value="MNP">Northern Mariana Islands</option>
						<option value="NOR">Norway</option>
						<option value="OMN">Oman</option>
						<option value="PAK">Pakistan</option>
						<option value="PLW">Palau</option>
						<option value="PSE">Palestinian Territory, Occupied</option>
						<option value="PAN">Panama</option>
						<option value="PNG">Papua New Guinea</option>
						<option value="PRY">Paraguay</option>
						<option value="PER">Peru</option>
						<option value="PHL">Philippines</option>
						<option value="PCN">Pitcairn</option>
						<option value="POL">Poland</option>
						<option value="PRT">Portugal</option>
						<option value="PRI">Puerto Rico</option>
						<option value="QAT">Qatar</option>
						<option value="REU">Réunion</option>
						<option value="ROU">Romania</option>
						<option value="RUS">Russian Federation</option>
						<option value="RWA">Rwanda</option>
						<option value="BLM">Saint Barthélemy</option>
						<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
						<option value="KNA">Saint Kitts and Nevis</option>
						<option value="LCA">Saint Lucia</option>
						<option value="MAF">Saint Martin (French part)</option>
						<option value="SPM">Saint Pierre and Miquelon</option>
						<option value="VCT">Saint Vincent and the Grenadines</option>
						<option value="WSM">Samoa</option>
						<option value="SMR">San Marino</option>
						<option value="STP">Sao Tome and Principe</option>
						<option value="SAU">Saudi Arabia</option>
						<option value="SEN">Senegal</option>
						<option value="SRB">Serbia</option>
						<option value="SYC">Seychelles</option>
						<option value="SLE">Sierra Leone</option>
						<option value="SGP">Singapore</option>
						<option value="SXM">Sint Maarten (Dutch part)</option>
						<option value="SVK">Slovakia</option>
						<option value="SVN">Slovenia</option>
						<option value="SLB">Solomon Islands</option>
						<option value="SOM">Somalia</option>
						<option value="ZAF">South Africa</option>
						<option value="SGS">South Georgia and the South Sandwich Islands</option>
						<option value="SSD">South Sudan</option>
						<option value="ESP">Spain</option>
						<option value="LKA">Sri Lanka</option>
						<option value="SDN">Sudan</option>
						<option value="SUR">Suriname</option>
						<option value="SJM">Svalbard and Jan Mayen</option>
						<option value="SWZ">Swaziland</option>
						<option value="SWE">Sweden</option>
						<option value="CHE">Switzerland</option>
						<option value="SYR">Syrian Arab Republic</option>
						<option value="TWN">Taiwan, Province of China</option>
						<option value="TJK">Tajikistan</option>
						<option value="TZA">Tanzania, United Republic of</option>
						<option value="THA">Thailand</option>
						<option value="TLS">Timor-Leste</option>
						<option value="TGO">Togo</option>
						<option value="TKL">Tokelau</option>
						<option value="TON">Tonga</option>
						<option value="TTO">Trinidad and Tobago</option>
						<option value="TUN">Tunisia</option>
						<option value="TUR">Turkey</option>
						<option value="TKM">Turkmenistan</option>
						<option value="TCA">Turks and Caicos Islands</option>
						<option value="TUV">Tuvalu</option>
						<option value="UGA">Uganda</option>
						<option value="UKR">Ukraine</option>
						<option value="ARE">United Arab Emirates</option>
						<option value="GBR">United Kingdom</option>
						<option value="USA" selected>United States</option>
						<option value="UMI">United States Minor Outlying Islands</option>
						<option value="URY">Uruguay</option>
						<option value="UZB">Uzbekistan</option>
						<option value="VUT">Vanuatu</option>
						<option value="VEN">Venezuela, Bolivarian Republic of</option>
						<option value="VNM">Viet Nam</option>
						<option value="VGB">Virgin Islands, British</option>
						<option value="VIR">Virgin Islands, U.S.</option>
						<option value="WLF">Wallis and Futuna</option>
						<option value="ESH">Western Sahara</option>
						<option value="YEM">Yemen</option>
						<option value="ZMB">Zambia</option>
						<option value="ZWE">Zimbabwe</option>
				</select>
			</div>
			
		</div>
		
		
		<p class="button submit_form hide_if_no_js">
			<a href="#" class=''>{$langs.Send_order}</a>
		</p>

		<input type="submit" value="{$langs.Send_order}" class="contact-form-hide-with-js"/>
	</form>
	{/if}
	
	
{/if}
	

{* Ngan Luong *}
	{*
	{if $found}
	{assign var=dc value=$ototals-$totals}
	{assign var=discount value="%i"|money_format:$dc}
	{else}
	{assign var=discount value=0}
	{/if}
	{if $shipping}
		{assign var=shipping value=$shipping}	
	{else}
		{assign var=shipping value=0}	
	{/if}
<form method='post' action="?ngan_luong_pay=1" id="paymentGatewayForm">
	<input type="hidden" name="total" value="{$totals}">	
	<input type="hidden" name="discount" value="{$discount}">
	<input type="hidden" name="shipping" value="{$shipping}">
	<label for="your_name">Your Name</label><input type="text" name="name" value="" id="your_name">
	<label for="your_email">Your email</label><input type="text" name="email" value="" id="your_email">
	<label for="your_phone">Your phone</label><input type="text" name="phone" value="" id="your_phone">
	<input type="submit" value="Checkout">
	
</form>
*}
<div class="clear"><!-- --></div>
{/if}
