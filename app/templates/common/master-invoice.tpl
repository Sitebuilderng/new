{if $nocookie=="true"}
<p id="status">
	{$langs.Cookie_Error}
</p>
{/if}
{if $empty}
<p id="status">
	{$langs.Basket_Empty}
</p>
{/if}
{if $orders}
{if $amountReceived>0}<p class="Icon_Tick">{$langs.Paid_With_Thanks}</p>{/if}
<div style="float:right">
<p style="text-align:right">{$langs.Order_ID}: {$buyerOrderID}<br/>
{$date|date_format}</p>
</div>
<p>
	{if $buyerBusinessName!=""}{$buyerBusinessName}<br/>{/if}
	{if $buyerFirstName!=""}{$buyerFirstName} {$buyerLastName}<br/>{/if}
	{if $buyerAddressStreet!=""}{$buyerAddressStreet}<br/>{/if}
	{if $buyerAddressCity!=""}{$buyerAddressCity}<br/>{/if}
	{if $buyerAddressState!=""}{$buyerAddressState}<br/>{/if}
	{if $buyerAddressCountry!=""}{$buyerAddressCountry}<br/>{/if}
	{if $buyerAddressZip!=""}{$buyerAddressZip}{/if}
	
</p>
<p>
	{if $buyerEmail!=""}{$buyerEmail}<br/>{/if}
	{if $buyerPhone!=""}{$buyerPhone}<br/>{/if}
	{if $buyerMobile!=""}{$buyerMobile}{/if}
</p>


	
<div id="basketWrapper">

		<div class="checkoutPsudoTable header">
			<div class="basketName checkoutTableCell">
				{$langs.Product_Name}
			</div>
			<div class="basketQuantity checkoutTableCell">
				{$langs.Quantity}
			</div>
			<div class="basketPrice checkoutTableCell">
				{$langs.Price}
			</div>
		</div>
		{foreach from=$orders item=item key=key name=loop1}
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
				{foreach from=$item.dates item=date key=key name=loop1}
					<div class="checkoutBookingProductDate" style="padding:2px 5px;border:2px solid #ccc;float:left;margin:0 5px 5px 0;background:#fff;border-radius:4px;">{$date|date_format}</div>
				{/foreach}
				{/if}
			</div>
			<div class="basketQuantity checkoutTableCell">
				{if $item.allow_one=="no"}<span class="narrowQty">{$langs.Quantity}:</span><span class="quantityWrapper">{$item.quantity}</span>{/if}
			</div>
			<div class="basketPrice checkoutTableCell">
				<span class="narrowPrice">{$langs.Price}:</span>{$currency_sym}{$item.price}
			</div>
			<div class="basketRemove checkoutTableCell">

			</div>
		</div>
		{/foreach}
		
		<div class="checkoutPsudoTable">
			<div class="basketName checkoutTableCell">
				&nbsp;
			</div>
			<div class="basketQuantity checkoutTableCell">
				&nbsp;
			</div>
			<div class="basketPrice checkoutTableCell">
			
				<p><strong>{$langs.Total}:</strong> {$currency_sym}{"%i"|money_format:$totals}</p>
			
			
			</div>
		</div>
		

	
</div>

{/if}
