{if !$usedInBookingProd}	
{assign var=hide_stock_threshold value=1000}
{if $form_sent!="true"}{else}
<h2>{$langs.Form_Sent}</h2>
{/if}
{if $formSpam!="true"}{else}
<h2>{$langs.Form_Error}</h2>
{/if}

{if $formId=="newsletter"}
<form action="/actions/NewsletterAdd/" method="post" class="form signupForm" enctype="multipart/form-data" >
{else}
<form action="{if $usedInCheckout}/actions/BuyerCheckoutForm/{else}/actions/FormSend/{/if}" method="post" class="form {if $basketForm}formProduct addToBasketForm{/if} {if $usedInCheckout}formUsedInCheckout{/if}" enctype="multipart/form-data" >
{/if}
{else}
<h3 class='booking-person-title'></h3>
{/if}
{if $basketForm}
	<div class="productInner">		
{/if}
	
{if $basketForm}
<input type="hidden" name="addToBasketId" value="{$basketForm}" id="addToBasketId"/>
{/if}
{if !$usedInBookingProd}	
<input type="hidden" name="formId" value="{$formId}"/>

<label for="email1" class="fakeemail">{$langs.Are_You_Human}<br/>
 	{$langs.Are_You_Human_Instructions}
</label>
<input type="text" maxlength="256" id="email1" name="email1" value="" class="email1 input"/>
{/if}
{foreach from=$inputs item=input key=key name=loop1}
{assign var=x value=$smarty.foreach.loop1.iteration}
<div class="input-wrapper input-wrapper-width-{$input.width} input-wrapper-type-{$input.type} input-wrapper-label-{$input.label|css_safe} input-wrapper-number-{$x} {if $input.required=="yes"}input-wrapper-required{else}input-wrapper-not-required{/if}" >

{if $input.type != "checkbox"&&$input.type != "radiogroup"&&$input.type!="heading"&&$input.type!="text"&&$input.type!="hidden"&&$input.type!="hr"&&$input.type!="clear"}
<label class="label_{$input.label|css_safe} {if $input.required=="yes"}required_label{/if}" for="f_{$formId}_i_{$input.id|css_safe}">{$input.label}</label>
{/if}
	{if $input.type=="hr"}
		<div class='hr'></div>
	{/if}
	{if $input.type=="clear"}
		<div class='clear'></div>
	{/if}
	{if $input.type=="heading"}
		<h2 class="formHeading_{$input.label|css_safe}">{$input.label}</h2>
	{/if}
	{if $input.type=="text"}
		<p class="formText_{$input.label|css_safe}">{$input.label}</p>
	{/if}
	{if $input.type == "phone"}
		<input {if $input.required=="yes"}required{/if}  id="f_{$formId}_i_{$input.id|css_safe}" type="tel" maxlength="256" title="{$input.label}" name="{$input.id}" class="input input_{$input.label|css_safe}{if $input.required=="yes"} required{/if}" value="{$input.value}{if $smarty.foreach.loop1.iteration==$inputpop}{$val}{/if}{$prepops.$x}"/>
	{/if}
	{if $input.type == "short"||$input.type == "name"}
		<input {if $input.required=="yes"}required{/if}  id="f_{$formId}_i_{$input.id|css_safe}" type="{if $input.date}date{else}text{/if}" maxlength="256" title="{$input.label}" name="{$input.id}" class="input {if $input.date}default_datepicker{/if} input_{$input.label|css_safe}{if $input.required=="yes"} required{/if}" value="{$input.value}{if $smarty.foreach.loop1.iteration==$inputpop}{$val}{/if}{$prepops.$x}"/>
	{/if}
	{if $input.type == "email"}
		<input {if $input.required=="yes"}required{/if}  id="f_{$formId}_i_{$input.id|css_safe}" type="email" maxlength="256" title="{$input.label}" name="{$input.id}" class="input input_{$input.label|css_safe}{if $input.required=="yes"} required{/if}" id="emailInput" value="{if $smarty.foreach.loop1.iteration==$inputpop}{$val}{/if}{$input.value}{$prepops.$x}"/>
		<p id="emailIncorrect">Please check your email address for errors</p>
	{/if}
	{if $input.type == "hidden"}
		<input id="f_{$formId}_i_{$input.id|css_safe}" type="hidden" name="{$input.id}" class="input input_{$input.label|css_safe}" value="{$input.value}"/>
	{/if}
	{if $input.type == "long"}
		<textarea {if $input.required=="yes"}required{/if} id="f_{$formId}_i_{$input.id|css_safe}" rows="5" title="{$input.label}" cols="40" name="{$input.id}" class="textarea textarea_{$input.label|css_safe}{if $input.required=="yes"} required{/if}" maxlength="2000">{if $smarty.foreach.loop1.iteration==$inputpop}{$val}{/if}{$input.value}{$prepops.$x}</textarea>

	{/if}
	{if $input.type == "file"}
		<input {if $input.required=="yes"}required{/if} id="f_{$formId}_i_{$input.id|css_safe}" accept="*/*" type="file" title="{$input.label}" name="{$input.id}" value="" class="inputFile inputFile_{$input.label|css_safe}{if $input.required=="yes"} required{/if}"/>
	{/if}
	{if $input.type == "checkbox"}


		<input type="checkbox" {if $input.required=="yes"}required{/if} title="{$input.label}" name="{$input.id}" class="checkbox checkbox_{$input.label|css_safe}{if $input.required=="yes"} required{/if}" value="{$input.value}{$prepops.$x}{if $input.value==""&&$prepops.$x==""}true{/if}" {if $smarty.foreach.loop1.iteration==$inputpop}checked="checked"{/if} {if $prepops.$x}{if $prepops.$x==$input.value}checked="checked"{/if}checked="checked"{/if} id="cb_{$formId}_{$input.id|css_safe}"> 
				<label for="cb_{$formId}_{$input.id|css_safe}"><span>{$input.label}</span></label>

	{/if}
	{if $input.type == "select"}
		{assign var=options value="**!!**"|explode:$input.options}
		<select id="f_{$formId}_i_{$input.id|css_safe}" name="{$input.id}" {if $input.required=="yes"}required{/if} class="select select_{$input.label|css_safe} {if $input.required=="yes"} required{/if}">
			{if $input.required=="yes"}<option value=""></option>{/if}
			{foreach from=$options item=option name=optionsList}
			<option value="{$option|htmlspecialchars}" {if $smarty.foreach.loop1.iteration==$inputpop &&  $smarty.foreach.optionsList.iteration==$val}selected="selected"{/if} {if $prepops.$x}{if $prepops.$x==$option}selected="selected"{/if}{/if}>{$option}</option>
			{/foreach}
		</select>
	{/if}
	{if $input.type == "radiogroup"}
		<fieldset>	
			<p for="" class="label_{$input.label|css_safe} {if $input.required=="yes"}required_label{/if}">{$input.label}</p>
			{assign var=options value="**!!**"|explode:$input.options}
			{if $input.required=="yes"}
				{foreach from=$options item=option name=optionsloop key=loop1}
				
				<input {if $input.required=="yes"}required{/if} type="radio" id="radio{$option|css_safe}{$input.id|css_safe}{$smarty.foreach.option.iteration}" name="{$input.id}" value="{$option}" class="radio radio_{$input.label|css_safe}" {if $smarty.foreach.optionsloop.iteration=="1"} checked="checked"{/if} {if $prepops.$x}{if $prepops.$x==$option}checked="checked"{/if}{/if}/> 
				<label for="radio{$option|css_safe}{$input.id|css_safe}{$smarty.foreach.option.iteration}"><span>{$option}</span></label>
				{/foreach}
			{else}
				{foreach from=$options item=option name="option"}
				
				<input {if $input.required=="yes"}required{/if} type="radio" name="{$input.id}" id="radio{$option|css_safe}{$input.id|css_safe}{$smarty.foreach.option.iteration}" value="{$option}" class="radio radio_{$option|css_safe}" {if $prepops.$x}{if $prepops.$x==$option}checked="checked"{/if}{/if} /> 
				<label for="radio{$option|css_safe}{$input.id|css_safe}{$smarty.foreach.option.iteration}"><span>{$option}</span></label>
				{/foreach}

			{/if}
		</fieldset>
	{/if}
	
	
	</div>
	

{/foreach}



	<div class="clear"></div>

	
	{if !$variants}
	{if $price}
<p class="stockAndPrice">
	<span class="price">{$curSym}{$price}</span>
	{if $in_stock<$hide_stock_threshold}
	<span class="stock {if $in_stock<$warning_stock_threshold}warning{/if}">{$langs.In_Stock}: <strong>{$in_stock}</strong></span>
	{/if}
	</p>
	{/if}
	{/if}
		{if $variants}
		<select name="variant_price">
		{foreach from=$variants item=variant key=key name=loop1}
			<option value="{$variant.name|htmlspecialchars}">{$variant.name} ({$curSym}{$variant.price})</option>
		{/foreach}
		</select>
		<div class="clear"></div>
		{/if}
{if !$usedInBookingProd}	
		{if !$usedInCheckout}
				<p class="Icon_Alert cf_contains_errors" >* Please fill out all required fields</p>
				
			<p class="button submit_form hide_if_no_js">
				<a href="#" class=''>{if $basketForm}{$langs.Add_To_Basket}{else}{$langs.Submit}{/if}</a>
			</p>
		
			<input type="submit" value="{if $basketForm}{$langs.Add_To_Basket}{else}{$langs.Submit}{/if}" class="contact-form-hide-with-js"/>
			{/if}

	<p id="success" class="Icon_Tick {if $form_sent!="true"}hidden{/if}">{$langs.Form_Sent}</p>
	{if $basketForm}
		
	</div>
	{/if}
	</form>
{/if}
