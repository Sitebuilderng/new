<meta property="og:title" content="{if $h1==""}{$h2}{else}{$h1}{/if}" />
	<meta property="og:type" content="article" />
	<meta property="og:description" content="{if $content.description!=""}{$content.description}{else}{$h1}{if $h2!=""} - {$h2}{/if}{if $h2==""} - {$p}{/if}{if $p==""} - {$li}{/if}{/if}" />
	<meta property="og:site_name" content="{$sitetitle}"/>
{if $templateSections.Poster_Image!=""}
	{assign var=images value=$templateSections.Poster_Image|images_from_content:true:$siteurl}
	{foreach from=$images item=image key=key name=loop1}
	<meta property="og:image" content="{$image}" />		
	{/foreach}

{else}
	{if $content.imgUrl!=""}<meta property="og:image" content="{$siteurl}{$content.imgUrl}" />
	{else}<meta property="og:image" content="{$img}" />{/if}
{/if}