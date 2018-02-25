<div class="bpe_table">
	<table>
		{if $caption}
		<caption>{$caption}</caption>
		{/if}
		{foreach from=$data item=cells name=rowsloop}
		<tr>
			{if $smarty.foreach.rowsloop.first && ($headers==1||$headers==3)}
				{assign var=rowel value="th"}
			{else}
				{assign var=rowel value="td"}			
			{/if}
			{foreach from=$cells item=cell name=cellsloop}
				{if $smarty.foreach.cellsloop.first && ($headers==2 || $headers==3)}
				{assign var=el value="th"}					
				{else}
				{assign var=el value=$rowel}
				{/if}
				<{$el}>
				{$cell}
				</{$el}>
			{/foreach}
		</tr>
		{/foreach}
	</table>
</div>