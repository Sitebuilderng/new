{if !$usedInBookingProd}	
	<div class="formWrapper">
		{if $formSent!="true"}{else}
		<h2>{$langs.Form_Sent}</h2>
		{/if}
		{if $formSpam!="true"}{else}
		<h2>{$langs.Form_Error}</h2>
		{/if}

		{if $formId=="newsletter"}
		<form action="/actions/NewsletterAdd/" method="post" class="form" enctype="multipart/form-data" >
		{else}
		<form action="/actions/FormSend/" method="post" class="form" enctype="multipart/form-data" >
		{/if}
{/if}
		{include file=form-inner.tpl}
{if !$usedInBookingProd}	
		<div class="clear"><!-- --></div>
		<p id="success" style="display:{if $form_sent!="true"}none{else}block{/if}";>Thank you - your form has been sent.</p>
		<div style="padding:18px 0">
		{if $variants}
			<div class="formSection clearfix">
			<select name="variant_price" {if $separate_stock_for_options}class="separateOptionStock" data-product-code="{$code}"{/if}>
			{foreach from=$variants item=variant key=key name=loop1}
				<option value="{$variant.name|htmlspecialchars}" {if $separate_stock_for_options}data-stock="{$variant.stock}"{/if}>{$variant.name} ({$curSym}{$variant.price})</option>
			{/foreach}
			</select>
			</div>
			{if $in_stock<1000}
				<p class="stockAndPrice"><span class="stock">{$langs.In_Stock}: <strong class="updateWithOptionStock" id="updateWithOptionStock{$code}">{if $separate_stock_for_options}{$variants[0].stock}{else}{$in_stock}{/if}</strong></span></p>
			{/if}
		{/if}
			<input type="submit" value="{if $basketForm}{$langs.Add_To_Basket}{else}{$langs.Submit}{/if}"/>
		<img src="/graphics/lightbox-ico-loading.gif" alt="" id="loader" style="display:none;margin-top:-18px;margin-bottom:-13px;"/></div>
		</form>

		
	</div>
{/if}
