{if $type=="simple"}
<div class='bpe_image'><a href="/actions/AddToBasket/?id={$code}{if $pic_url!=""}&amp;pic_url={$pic_url}{/if}{if $url_str!=""}&amp;url_str={$url_str}{/if}" class='addToBasketLink'><img src="/graphics/addToBasket.gif" alt="{$langs.Add_To_Basket}"/></a></div>
{/if}
{if $type=="simple_multi"}
<form action="/actions/AddToBasket/" method="post" class="addToBasketForm">
	{if $pic_url!=""}
	<input type="hidden" name="pic_url" value="{$pic_url}" />
	{/if}
	{if $url_str!=""}
	<input type="hidden" name="url_str" value="{$url_str}" />
	{/if}
	<select name="variant_price" {if $separate_stock_for_options}class="separateOptionStock" data-product-code="{$code}"{/if}>
{foreach from=$variants item=variant key=key name=loop1}
	<option value="{$variant.name|htmlspecialchars}" {if $separate_stock_for_options}data-stock="{$variant.stock}"{/if}>{$variant.name} ({$curSym}{$variant.price})</option>
{/foreach}
</select><input type="hidden" name="id" value="{$code}"/> <input type="image" src="/graphics/addToBasket.gif"/>
{if $in_stock<1000}
<p class="stockAndPrice"><span class="stock">{$langs.In_Stock}: <strong class="updateWithOptionStock" id="updateWithOptionStock{$code}">{if $separate_stock_for_options}{$variants[0].stock}{else}{$in_stock}{/if}</strong></span></p>
{/if}
</form>
{/if}
{if $type=="donation"}
<form action="/actions/AddToBasket/" method="post" class="addToBasketForm">
	{if $pic_url!=""}
	<input type="hidden" name="pic_url" value="{$pic_url}" />
	{/if}
	{if $url_str!=""}
	<input type="hidden" name="url_str" value="{$url_str}" />
	{/if}
	<input type='text' name='donation_price' value='{$curSym}{$price}'/>
	<input type="hidden" name="id" value="{$code}"/> <input type="image" src="/graphics/addToBasket.gif"/></form>
{/if}
{if $type=="gallery"}
<form action="/actions/AddToBasket/" method="post" class="shopGalleryVariant addToBasketForm" name="galId{$gal_id}"><span class="galId{$gal_id}title" style="display:none;"></span>&nbsp;<input type="hidden" class="galId{$gal_id}input" name="variant"/><input type="hidden" name="id" value="{$code}"/> <input type="image" src="/graphics/addToBasket.gif"/><noscript>{$langs.Javascript_Warning}</noscript></form>
{/if}
{if $type=="gallery_multi"}
<form action="/actions/AddToBasket/" method="post" class="shopGalleryVariant addToBasketForm" name="galId{$gal_id}"><span class="galId{$gal_id}title" style="display:none;"></span>&nbsp;<input type="hidden" class="galId{$gal_id}input" name="variant"/><input type="hidden" name="id" value="{$code}"/> <select name="variant_price">{foreach from=$variants item=variant key=key name=loop1}
	<option value="{$variant.name|htmlspecialchars}">{$variant.name} ({$curSym}{$variant.price})</option>
{/foreach}</select><input type="image" src="/graphics/addToBasket.gif"/><noscript>{$langs.Javascript_Warning}</noscript></form>
{/if}
{*
------------------------------------------------------------------------------------
VARIABLES AVAILABLE IN THIS TEMPLATE:
------------------------------------------------------------------------------------


{$curSym}	<-	Currency symbol of site's currency
{$name}		<-	Name of the product
{$price}	<-	Price of the product, without current symbol
{$only_one}	<-	Contains 'yes' if product is specified to only allow one quantity in
				basket. Empty or 'no' if multiple quantities are allowed.
{$weight}	<-	Weight of product in kgs
{$in_stock}	<-	The number remaining in stock
{$code}		<-	Unique code generated by SetSeed for the product
{$variants}	<-	Array of variations for the product. Contains the following keys:
				name	<-	Name of variation
				price	<-	Price of variation
{$type}		<-	Type of product, either 'simple', 'simple_multi', 'gallery' or
				'gallery_multi' - 'multi' suffix indicates variations.
{$gal_id}	<-	ID of image gallery when product is based on gallery

------------------------------------------------------------------------------------
*}
