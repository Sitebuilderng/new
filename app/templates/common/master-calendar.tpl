<input type="hidden" name="" value="{$prev_month_year}" id="prev_month_year" class="prev_month_year"/>
<input type="hidden" name="" value="{$prev_month}" id="prev_month_val" class="prev_month_val"/>
<input type="hidden" name="" value="{$next_month}" id="next_month_val" class="next_month_val"/>
<input type="hidden" name="" value="{$next_month_year}" id="next_month_year" class="next_month_year"/>
<input type="hidden" name="" value="{$month}" id="current_month" class="current_month"/>
<input type="hidden" name="" value="{$year}" id="current_year" class="current_year"/>
{assign var=monthyear value="$month $year"}

<h1 class="calMonth"><a href="" id="prev_month" class="prev_month"></a>  <a href="" id="next_month" class="next_month"></a>{$month|date_format_locale:"%B":$language} {$monthyear|date_format_locale:"%Y":$language}</h1>
<table class="calTable">
	<tr>
		<th>{"Monday"|date_format_locale:"%A":$language}</th>
		<th>{"Tuesday"|date_format_locale:"%A":$language}</th>
		<th>{"Wednesday"|date_format_locale:"%A":$language}</th>
		<th>{"Thursday"|date_format_locale:"%A":$language}</th>
		<th>{"Friday"|date_format_locale:"%A":$language}</th>
		<th class="weekend">{"Saturday"|date_format_locale:"%A":$language}</th>
		<th class="weekend">{"Sunday"|date_format_locale:"%A":$language}</th>
	</tr>
	<tr>
	{foreach from=$dates item=item key=key name=loop1}
		<td class="{if $smarty.now|date_format:"%Y"==$year and $smarty.now|date_format:"%B"==$month and $smarty.now|date_format:"%d"==$item[0]} current{/if} {if $smarty.foreach.loop1.iteration % 7 == 6 || $smarty.foreach.loop1.iteration % 7 == 0}weekend{/if} {$item[4]}">
			{$item[0]}
			{if $item[1]|@count>0}
			{foreach from=$item[1] item=item1 key=key2 name=loop2}
				<div class="event {foreach from=$item1[10] item=group}ss-filter-group-id-{$group} {/foreach}" id="{$item1[1]}">{if $item1[2]!=""}<a href="{if $item1[3]!="External Website"}{/if}{$item1[2]}{if $item1[3]!="External Website"}{/if}">{/if}{$item1[0]}{if $item1[2]!=""}</a>{/if}</div>
			{/foreach}
			{/if}
		</td>
	{if $smarty.foreach.loop1.iteration is div by 7}
	</tr>
	<tr>
	{/if}
	{/foreach}
	</tr>
</table>
