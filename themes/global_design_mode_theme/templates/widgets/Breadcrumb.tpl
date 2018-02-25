<p id="breadcrumb">
{strip}
	{$editable.Intro_Text|strip_tags}{if $editable.Intro_Text|strip_tags!=""}&nbsp;{/if}
{if $content.homepage=="yes"}
	<a href="/" class="breadcrumbHomepage">{$content.title}</a>
{else}
{*
	show homepage link
*}
	{foreach from=$mainNavIncExcluded item=item key=key name=loop1} 
		{if $item.homepage == "yes"}
			<a href="/" class="breadcrumbHomepage">{$item.title}</a>
		{/if}
	{/foreach}
	
	
	{*
		if its second level page, show parent and then page title
	*}
	{if $content.type=="subLevel"}
		{foreach from=$mainNavIncExcluded item=topLevelPage}
			{if $content.parent == $topLevelPage.id}
				<a href="/{$topLevelPage.url}/" class="breadcrumbTopLevel">{$topLevelPage.title}</a> &nbsp;>&nbsp;
			{/if}
		{/foreach}		
		 <span class="breadcrumbCurrent">{$content.title}</span>
	{/if}
{*
		if its third level page, show parents and then page title
	*}
	{if $content.type=="subSubLevel"}
		{foreach from=$mainNavIncExcluded item=topLevelPage}
			{foreach from=$topLevelPage.subs item=subLevelPage}
				{foreach from=$subLevelPage.subSubs item=subSubLevelPage}
					{if $subSubLevelPage.parent == $subLevelPage.id && $content.id==$subSubLevelPage.id}
						<a href="/{$topLevelPage.url}/" class="breacrumbTopLevel">{$topLevelPage.title}</a>
						<a href="/{$topLevelPage.url}/{$subLevelPage.url}/" class="breadcrumbSubLevel">{$subLevelPage.pagetitle}</a>
					{/if}
				{/foreach}
			{/foreach}
		{/foreach}		
		<span class="breadcrumbCurrent">{$content.title}</span>
	{/if}
	
	{if $content.type=="subSubSubLevel"}
		{foreach from=$mainNavIncExcluded item=topLevelPage}
			{foreach from=$topLevelPage.subs item=subLevelPage}
				{foreach from=$subLevelPage.subSubs item=subSubLevelPage}
					{foreach from=$subSubLevelPage.subSubSubs item=subSubSubLevelPage}
						{if $content.id == $subSubSubLevelPage.id}
							<a href="/{$topLevelPage.url}/" class="breacrumbTopLevel">{$topLevelPage.title}</a>
							<a href="/{$topLevelPage.url}/{$subLevelPage.url}/" class="breacrumbTopLevel">{$subLevelPage.title}</a>
							<a href="/{$topLevelPage.url}/{$subLevelPage.url}/{$subSubLevelPage.url}/" class="breadcrumbSubLevel">{$subSubLevelPage.pagetitle}</a>
						{/if}
					{/foreach}
				{/foreach}
			{/foreach}
		{/foreach}		
		<span class="breadcrumbCurrent">{$content.title}</span>
	{/if}


	{if $content.parent=="" && !$show_blog}
		{$content.title}
	{/if}

	{if $show_blog}
		{foreach from=$mainNavIncExcluded item=item key=key name=loop1}
			{if $item.blog == "yes"}
				<a href="/{$item.url}/" class="breadcrumbTopLevel breadcrumbBlog">{$item.title}</a> 
			{/if}
		{/foreach}
		&nbsp;&rArr;&nbsp; <span class="breadcrumbCurrent breadcrumbCurrentBlog">{$title}</span>
	{/if}
{/if}
{/strip}
</p>