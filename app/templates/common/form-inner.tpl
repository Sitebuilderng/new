{if $basketForm}
<input type="hidden" name="addToBasketId" value="{$basketForm}" id="addToBasketId"/>
{/if}
<input type="hidden" name="formId" value="{$formId}"/>
<label for="email1" class="fakeemail">{$langs.Are_You_Human}<br/>
 	{$langs.Are_You_Human_Instructions}
</label>
<input type="text" name="email1" value="" class="email1 input"/>

{foreach from=$inputs item=input key=key name=loop1}
	{assign var=x value=$smarty.foreach.loop1.iteration}
<div class="formSection_{$input.label|replace:" ":"_"} formSectionId_{$input.id} formSectionType_{$input.type} formSection clearfix">
{if $input.type == "checkbox"||$input.type=="heading"||$input.type=="text"||$input.type=="hidden"}
{else}
	<label class="label label_{$input.label|replace:" ":"_"}">{$input.label}{if $input.required=="yes"}<span style="color:#f00">*</span>{/if}</label>
	{/if}
	{if $input.type=="heading"}
		<h2 class="formHeading_{$input.label|replace:" ":"_"}">{$input.label}</h2>
	{/if}
	{if $input.type=="text"}
		<p class="formText_{$input.label|replace:" ":"_"}">{$input.label}</p>
	{/if}
	{if $input.type == "short"||$input.type == "phone"||$input.type == "name"}
		<input type="text" name="{$input.id}" class="input {if $input.date}default_datepicker{/if} input_{$input.label|replace:" ":"_"}{if $input.required=="yes"} required{/if}" value="{$input.value}{if $smarty.foreach.loop1.iteration==$inputpop}{$val}{/if}{$prepops.$x}"/>
	{/if}
	{if $input.type == "email"}
		<input type="text" name="{$input.id}" class="input input_{$input.label|replace:" ":"_"}{if $input.required=="yes"} required{/if}" id="emailInput" value="{if $smarty.foreach.loop1.iteration==$inputpop}{$val}{/if}{$input.value}{$prepops.$x}"/>
		<p id="emailIncorrect" style="display:none;">Please check your email address for errors</p>
	{/if}
	{if $input.type == "hidden"}
		<input type="hidden" name="{$input.id}" class="input input_{$input.label|replace:" ":"_"}" value="{$input.value}"/>
	{/if}
	{if $input.type == "long"}
		<textarea rows="5" cols="40" name="{$input.id}" class="textarea textarea_{$input.label|replace:" ":"_"}{if $input.required=="yes"} required{/if}">{if $smarty.foreach.loop1.iteration==$inputpop}{$val}{/if}{$input.value}{$prepops.$x}</textarea>

	{/if}
	{if $input.type == "file"}
		<input type="file" name="{$input.id}" value="" class="inputFile inputFile_{$input.label|replace:" ":"_"}{if $input.required=="yes"} required{/if}"/>
	{/if}
	{if $input.type == "checkbox"}
		<input type="checkbox" name="{$input.id}" class="checkbox checkbox_{$input.label|replace:" ":"_"}{if $input.required=="yes"} required{/if}" value="{$input.value}{$prepops.$x}" {if $smarty.foreach.loop1.iteration==$inputpop}checked="checked"{/if} {if $prepops.$x}{if $prepops.$x==$input.value}checked="checked"{/if}checked="checked"{/if} id="cb_{$formId}_{$input.id}"> <label class="label" for="cb_{$formId}_{$input.id}">{$input.label}</label>

	{/if}
	{if $input.type == "select"}
		{assign var=options value="**!!**"|explode:$input.options}
		<select name="{$input.id}" class="select select_{$input.label|replace:" ":"_"} {if $input.required=="yes"} required{/if}">
			{foreach from=$options item=option name=optionsList}
			<option value="{$option}" {if $smarty.foreach.loop1.iteration==$inputpop &&  $smarty.foreach.optionsList.iteration==$val}selected="selected"{/if} {if $prepops.$x}{if $prepops.$x==$option}selected="selected"{/if}{/if}>{$option}</option>
			{/foreach}
		</select>
	{/if}
	{if $input.type == "radiogroup"}
		<div class="radioGroup">	
		{assign var=options value="**!!**"|explode:$input.options}
		{if $input.required=="yes"}
			{foreach from=$options item=option name=optionsloop key=loop1}
			<input type="radio" name="{$input.id}" value="{$option}" class="radio radio_{$input.label|replace:" ":"_"}" {if $smarty.foreach.optionsloop.iteration=="1"} checked="checked"{/if} {if $prepops.$x}{if $prepops.$x==$option}checked="checked"{/if}{/if}/> {$option}<br/>
			{/foreach}
			<div class="clear"><!-- --></div>
		{else}
			{foreach from=$options item=option name="option"}
			<input type="radio" name="{$input.id}" id="radio{$option|replace:" ":"_"}{$input.id}{$smarty.foreach.option.iteration}" value="{$option}" class="radio radio_{$option|replace:" ":"_"}" {if $prepops.$x}{if $prepops.$x==$option}checked="checked"{/if}{/if} /> <label for="radio{$option|replace:" ":"_"}{$input.id}{$smarty.foreach.option.iteration}" class="radioLabel">{$option}</label><br/>
			{/foreach}
			<div class="clear"><!-- --></div>

		{/if}
		</div>
	{/if}
</div>
{/foreach}
