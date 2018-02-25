<!doctype html>
<html class="no-js" lang="{$content.language}">
<head prefix="og: http://ogp.me/ns#">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	{assign var=h1 value="<h1"|explode:$content.content|strip_tags_exclude:"<h1>"}
	{assign var=h1 value=">"|explode:$h1[1]}
	{assign var=h1 value="</h1"|explode:$h1[1]}
	{assign var=h1 value=$h1[0]}
	{assign var=h2 value="<h2"|explode:$content.content|strip_tags_exclude:"<h2>"}
	{assign var=h2 value=">"|explode:$h2[1]}
	{assign var=h2 value="</h2"|explode:$h2[1]}
	{assign var=h2 value=$h2[0]}
	{assign var=p value="<p"|explode:$content.content|strip_tags_exclude:"<p>"}
	{assign var=p value=">"|explode:$p[1]}
	{assign var=p value="</p"|explode:$p[1]}
	{assign var=p value=$p[0]}
	{assign var=li value="<li"|explode:$content.content|strip_tags_exclude:"<li>"}
	{assign var=li value=">"|explode:$li[1]}
	{assign var=li value="</li"|explode:$li[1]}
	{assign var=li value=$li[0]}
	{assign var=img value="img src=\""|explode:$content.content|strip_tags_exclude:"<img>"}
	{assign var=img value="\""|explode:$img[1]}
	{assign var=img value=$img[0]}
	<title>{if $content.longtitle!=""&&$content.longtitle!=$content.title}{$content.longtitle}{else}{if $h1==""}{$h2}{else}{$h1}{/if}{if $h1!=""||$h2!=""} - {/if}{$metatitleappend}{/if}</title>
		<meta name="description" content="{if $content.description!=""}{$content.description}{else}{$h1}{if $h2!=""} - {$h2}{/if}{if $h2==""} - {$p}{/if}{if $p==""} - {$li}{/if}{/if}"/>
		
	
	<meta property="og:title" content="{if $h1==""}{$h2}{else}{$h1}{/if}" />
		<meta property="og:type" content="article" />
		{if $content.imgUrl!=""}<meta property="og:image" content="{$siteurl}{$content.imgUrl}" />
		{else}<meta property="og:image" content="{$img}" />{/if}
		<meta property="og:description" content="{if $content.description!=""}{$content.description}{else}{$h1}{if $h2!=""} - {$h2}{/if}{if $h2==""} - {$p}{/if}{if $p==""} - {$li}{/if}{/if}" />
		<meta property="og:site_name" content="{$sitetitle}"/>
	
	
    <meta name="viewport" content="width=device-width, initial-scale=1">

	{* 
		ICO file should contain 16x16, 32x32 and 48x48 sizes in a ICO wrapper - create from PNGS here: http://icoconvert.com/Multi_Image_to_one_icon/ 
		touch-icon-iphone.png should be 60x60
	*}
	{if $theme_vars_favicon}
	<link rel="shortcut icon" href="/favicon.ico"> {* Needs .htaccess in place to server from images/themegraphics/ *}
	{/if}
	{if $theme_vars_touch_icon_57}
	<link rel="apple-touch-icon" href="/images/themegraphics/{$theme_vars_touch_icon_57}">
	{/if}
	{if $theme_vars_touch_icon_76}
	<link rel="apple-touch-icon" sizes="76x76" href="/images/themegraphics/{$theme_vars_touch_icon_76}">
	{/if}
	{if $theme_vars_touch_icon_120}
	<link rel="apple-touch-icon" sizes="120x120" href="/images/themegraphics/{$theme_vars_touch_icon_120}">
	{/if}
	{if $theme_vars_touch_icon_152}
	<link rel="apple-touch-icon" sizes="152x152" href="/images/themegraphics/{$theme_vars_touch_icon_152}">
	{/if}
	
    <!-- Enable styling of HTML5 sectioning elements in legacy browsers. Simplified inline version of HTML5Shiv (https://github.com/aFarkas/html5shiv) for enhanced performance -->
    <!--[if lt IE 9]>
    <script>
		{literal}
        (function (d, a) {
            d.documentElement.className = 'lt-ie9'; 
			for (var i = 0, len = a.length; i < len; i++) {
				d.createElement(a[i]);
			}
        }(document, ['HEADER', 'NAV', 'SECTION', 'FOOTER', 'ARTICLE', 'MAIN', 'FIGCAPTION', 'FIGURE', 'ASIDE']));
		{/literal}
    </script>
    <![endif]-->
		<link href="https://fonts.googleapis.com/css?family=Lato%7CUbuntu" rel="stylesheet">
	<script src="/javascripts/{$js}.js"></script>

	<link rel="stylesheet" href="/css/{$css}.css" type="text/css" />

</head>
<body class="accessible-mode">
    <header class="clearfix">
        <nav id="quick-menu" title="Quick menu">
            <p>Quick menu:</p>
            <ul>
                <li><a class="menu-link" href="#content">Go to content</a></li>
                <li><a class="menu-link" href="#main-menu">Go to main menu</a></li>
                <li><a class="menu-link" href="#search">Go to search</a></li>
            </ul>
        </nav>
		
		<img src="{if $theme_vars_accessible_logo}/images/themegraphics/{$theme_vars_accessible_logo}{else}/graphics/logo.png{/if}" id="branding" alt="{$site_title} Logo" />
        
		
        <div id="search-menu">
      	  	<p>Search</p>
			<form action="/actions/SearchForward/" method="post" id="search">
				<input type="hidden" name="language" value="{$content.language}"/>
				<input type="text" maxlength="60" title="{$langs.Search}" name="string" value="" required placeholder="{$langs.Search}" id="search-field"/>
				<input type="submit" value="{$langs.Search}" />
			</form>
        </div>
		
       
		

    </header>
	{if $content.blog!="yes"}
    <main id="content" tabindex="-1">
	{/if}
	

    	{$sitewideContent.Accessible_Mode_Header|replace:'style="text-align:left"':""|replace:'style="text-align:center"':""|replace:'style="text-align:right"':""|replace:"/ />":"/>"}
	

	
		{if $theme_vars_content_bar_1}{$templateSections.Content_Bar_1|replace:'style="text-align:left"':""|replace:'style="text-align:center"':""|replace:'style="text-align:right"':""|replace:"/ />":"/>"}{/if}
		{if $theme_vars_content_bar_2}{$templateSections.Content_Bar_2|replace:'style="text-align:left"':""|replace:'style="text-align:center"':""|replace:'style="text-align:right"':""|replace:"/ />":"/>"}{/if}
		{$templateSections.normal|replace:'style="text-align:left"':""|replace:'style="text-align:center"':""|replace:'style="text-align:right"':""|replace:"/ />":"/>"}
		{if $theme_vars_content_bar_4}{$templateSections.Content_Bar_4|replace:'style="text-align:left"':""|replace:'style="text-align:center"':""|replace:'style="text-align:right"':""|replace:"/ />":"/>"}{/if}
		{if $theme_vars_content_bar_5}{$templateSections.Content_Bar_5|replace:'style="text-align:left"':""|replace:'style="text-align:center"':""|replace:'style="text-align:right"':""|replace:"/ />":"/>"}{/if}
		{if $theme_vars_content_bar_6}{$templateSections.Content_Bar_6|replace:'style="text-align:left"':""|replace:'style="text-align:center"':""|replace:'style="text-align:right"':""|replace:"/ />":"/>"}{/if}
		{if $theme_vars_content_bar_7}{$templateSections.Content_Bar_7|replace:'style="text-align:left"':""|replace:'style="text-align:center"':""|replace:'style="text-align:right"':""|replace:"/ />":"/>"}{/if}
	{if $content.blog!="yes"}
    </main>
	{/if}
	
    <nav class="site-header-quick-menu" id="main-menu" title="Main menu" >
        <p>Main menu</p>
        <ul>
			{foreach from=$mainNav item=item key=key name=loop1}
			<li class="{if $item.url == $content.url || $item.id == $content.parent || $item.id == $content.topParent}current{assign var=current value="true"}{/if} {if $item.subs}has-subs{/if}" data-page-id="{$item.id}"><a href="{if $item.homepage == "yes"}/{else}/{$item.url}/{/if}" {if $item.newWindow}target="_blank" title="{$item.title|replace:"Media Page":"Media"} (Opens new window)"{else}title="{$item.title|replace:"Media Page":"Media"}"{/if}>{if $item.subs}<span>{/if}{$item.title|replace:"Media Page":"Media"}{if $item.subs}</span>{/if}</a>
				{include file="nav/drop-down-menu.tpl" subs=$item.subs}</li>
			{/foreach}
		</ul>
    </nav>

    <footer >
		{$sitewideContent.Accessible_Mode_Footer|replace:'style="text-align:left"':""|replace:'style="text-align:center"':""|replace:'style="text-align:right"':""|replace:"/ />":"/>"}
    </footer>
	<script src="/javascripts/owl.carousel.min.js"></script>
	<script src="/javascripts/backstretch.js"></script>
	<script src="/javascripts/doubletaptogo.js"></script>
	<script src="/javascripts/overlaps.js"></script>
	<script src="/javascripts/countdown.js"></script>
	
</body>
</html>