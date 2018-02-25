<style>
{literal}
	#datepicker_prev_month {
		float: left;
		width: 14px;
		height: 14px;
		border:none;
		position: relative;
		font-size: 22px;
		font-weight: bold;
		text-decoration: none;
	}
	
	#datepicker_next_month {
		float: right;
		width: 14px;
		height: 14px;
		border:none;
		position: relative;
		font-weight: bold;
		font-size: 22px;
		text-decoration: none;
	}
	#datepickerCalMonth {
		text-align:center;
		font-size:14px;
		font-weight: bold; 
		color:#999;
		line-height:16px;
		margin:5px 0px 10px;
	}
	.calTableDatepicker {
		width: 100%;
		border-collapse: collapse;
	}
	.calTableDatepicker th {
		text-align: center;
		font-weight:bold;
		color: #999;
	}
	.calTableDatepicker td {
		border:2px solid #F3F3F3;
		background:#fff;
		text-align: center;
		padding:1px 3px;
		cursor: pointer;
	}
	.calTableDatepicker td:hover {
		background:#ccc;
	}
	.calTableDatepicker .fade,.calTableDatepicker .unavailable {
		color: #999;
	}
	.calTableDatepicker td.unavailable:hover,.calTableDatepicker td.unavailable {
		background:#E3E4E3;
	}
	.calTableDatepicker .unavailable {
		cursor:default;
	}
{/literal}
</style>


<input type="hidden" name="" value="{$prev_month_year}" id="datepicker_prev_month_year"/>
<input type="hidden" name="" value="{$prev_month}" id="datepicker_prev_month_val"/>
<input type="hidden" name="" value="{$next_month}" id="datepicker_next_month_val"/>
<input type="hidden" name="" value="{$next_month_year}" id="datepicker_next_month_year"/>
<input type="hidden" name="" value="{$month}" id="datepicker_current_month"/>
<input type="hidden" name="" value="{$year}" id="datepicker_current_year"/>
{assign var=monthyear value="$month $year"}

<p id="datepickerCalMonth"><a href="" id="datepicker_prev_month">&lsaquo;</a>  <a href="" id="datepicker_next_month">&rsaquo;</a>{$month|date_format_locale:"%B":$language} {$monthyear|date_format_locale:"%Y":$language}</p>

<table class="calTableDatepicker">
	<tr>
		<th>{"Monday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
		<th>{"Tuesday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
		<th>{"Wednesday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
		<th>{"Thursday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
		<th>{"Friday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
		<th>{"Saturday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
		<th>{"Sunday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
	</tr>
	<tr>
	{foreach from=$dates item=item key=key name=loop1}
		<td class="{if $smarty.now|date_format:"%Y"==$year and $smarty.now|date_format:"%B"==$month and $smarty.now|date_format:"%d"==$item[0]}current{/if} {if $item[4]==false}unavailable{/if}" data-date="{$item[3]|date_format_locale:"%d %B %Y":$language}">
			{$item[0]}
		</td>
	{if $smarty.foreach.loop1.iteration is div by 7}
	</tr>
	<tr>
	{/if}
	{/foreach}
	</tr>
</table>