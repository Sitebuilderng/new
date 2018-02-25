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
            d.documentElement.className = 'lt-ie9'; var l = a.length; while(l--){ d.createElement(a[l]); }
        }(document, ['HEADER', 'NAV', 'SECTION', 'FOOTER', 'ARTICLE', 'MAIN', 'FIGCAPTION', 'FIGURE', 'ASIDE']));
		{/literal}
    </script>
    <![endif]-->

	<link rel="stylesheet" href="/css/{$css}.css" type="text/css" />

</head>
<body>
    <header role="banner" class="site-header">

        <!-- Quick menu (skipnav) to directly jump to specific sections: http://www.jimthatcher.com/skipnav.htm -->
        <nav class="site-header-quick-menu">
            <p>Quick menu</p>
            <ul class="flat-list">
                <li><a class="menu-link" href="#content">Jump to content</a></li>
                <li><a class="menu-link" href="#main-menu">Jump to main menu</a></li>
                <li><a class="menu-link" href="#search">Jump to search</a></li>
            </ul>
        </nav>

        <!-- Mark search controls for enhanced a11y: http://www.w3.org/TR/wai-aria/roles#search -->
        <div role="search" class="search-menu">
      	  	<p>Search<p>
			<form action="/actions/SearchForward/" method="post" id="search">
				<input type="hidden" name="language" value="{$content.language}"/>
				<input id="navSearch" type="text" maxlength="60" title="{$langs.Search}" name="string" value="" required="true" placeholder="{$langs.Search}" />
				<input type="submit" value="{$langs.Search}" class="search-form-hide-with-js"/>
				<p id="search-form-popdown-button" class="submit_form"><a href="#">{$langs.Search}</a></p>
			</form>
        </div>

    </header>

    <main id="content" role="main" tabindex="-1">

		{$content.contentSplit.normal}
		
    </main>

    <footer role="contentinfo" class="site-footer">
        
		
    </footer>
</body>
</html>