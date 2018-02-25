<script type="text/javascript" charset="utf-8">
<!--
{literal}

$(document).ready(function(){
function assignCal() {
	if (typeof moduleHeights == 'function') {
		moduleHeights();
	}
	if (typeof setSSCalendarGroupFilter === "function") {
	setSSCalendarGroupFilter();
	}
	
	$("#cal{/literal}{strip}
	{if $showCat}
	{$showCat}
	{/if}
	{/strip}{literal} .next_month").click(function(){
		month = $("#cal{/literal}{strip}
		{if $showCat}
		{$showCat}
		{/if}
		{/strip}{literal} .next_month_val").val();
		year = $("#cal{/literal}{strip}
		{if $showCat}
		{$showCat}
		{/if}
		{/strip}{literal} .next_month_year").val();

		$("#cal{/literal}{strip}
		{if $showCat}
		{$showCat}
		{/if}
		{/strip}{literal}").load("/actions/ShowCal/?{/literal}{strip}
		{if $showCat}
		showCat={$showCat}&
		{/if}
		{/strip}{literal}month="+month+"&year="+year+langAppend,function(){
			assignCal();
		});
		return false;
	});
	$("#cal{/literal}{strip}
	{if $showCat}
	{$showCat}
	{/if}
	{/strip}{literal} .prev_month").click(function(){
		month = $("#cal{/literal}{strip}
		{if $showCat}
		{$showCat}
		{/if}
		{/strip}{literal} .prev_month_val").val();
		year = $("#cal{/literal}{strip}
		{if $showCat}
		{$showCat}
		{/if}
		{/strip}{literal} .prev_month_year").val();

		$("#cal{/literal}{strip}
		{if $showCat}
		{$showCat}
		{/if}
		{/strip}{literal}").load("/actions/ShowCal/?{/literal}{strip}
		{if $showCat}
		showCat={$showCat}&
		{/if}
		{/strip}{literal}month="+month+"&year="+year+langAppend,function(){
			assignCal();
		});
		return false;
	});

}
$("#cal{/literal}{strip}
{if $showCat}
{$showCat}
{/if}
{/strip}{literal}").load("/actions/ShowCal/{/literal}{strip}
{if $showCat}
?showCat={$showCat}
{/if}
{/strip}{literal}"{/literal}{if $showCat}+langAppend{else}+lang{/if}{literal},function(){
	assignCal();
});
// -->
});
{/literal}

</script>
{if $categories}
<div class="column_row">
<div class='column threeCol first'>
<div id="cal{if $showCat}{$showCat}{/if}" class="calendar"></div>
</div>
<div class='column quartCol last'>
	<p>
	{foreach from=$categories item=category key=key name=loop1}
		<input type="checkbox" class="ss_calendar_group_filter" {if $smarty.foreach.loop1.first}checked="checked"{/if} value="{$category.id}" name="grp{$category.id}" data-group-id="{$category.id}"/> {$category.name}<br/>
	{/foreach}
	</p>
</div>
</div>


{else}
<div id="cal{if $showCat}{$showCat}{/if}" class="calendar"></div>
{/if}
