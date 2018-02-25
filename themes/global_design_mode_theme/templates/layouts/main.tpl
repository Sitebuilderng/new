{if $smarty.request.app}
{$content.contentSplit.normal|replace:'src="/':"src=\"http://`$content.http_host`/"|replace:'action="/':"action=\"http://`$content.http_host`/"|replace:'href="/':"href=\"http://`$content.http_host`/"}{else}
{* Define main URL and Title *}
{assign var=siteurl value="http://`$content.http_host`"}
{assign var=metatitleappend value=$theme_vars_meta_title_append}
{assign var=sitetitle value=$theme_vars_site_title}
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="{$content.language}"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="{$content.language}"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="{$content.language}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="{$content.language}"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	{include file=includes/meta_titles.tpl}

	{include file=includes/meta_fb.tpl}

	{include file=includes/meta_twitter.tpl}

	{include file=includes/meta_icons.tpl}

	{if $content.blog=="yes" && $content.showBlog!="yes"}
	<link rel="alternate" type="application/rss+xml" title="RSS" href="{$server_name}/rss/"/>
	{/if}
	{if $content.showBlog=="yes"}
	<link rel="alternate" type="application/rss+xml" title="RSS" href="{$server_name}/rss/{$url}/"/>
	{/if}

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	{if $skipinline}
	<link rel="stylesheet" href="/css/{$css}.css" type="text/css" />
	{else}
	{inline_file location=theme_concat_css type=css}
	
	<link rel="preload" href="/css/{$css}.css" as="style" onload="this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="/css/{$css}.css"></noscript>
	<script>
		{literal}
/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
!function(e){"use strict";var n=function(n,t,o){function i(e){return a.body?e():void setTimeout(function(){i(e)})}function r(){l.addEventListener&&l.removeEventListener("load",r),l.media=o||"all"}var d,a=e.document,l=a.createElement("link");if(t)d=t;else{var s=(a.body||a.getElementsByTagName("head")[0]).childNodes;d=s[s.length-1]}var f=a.styleSheets;l.rel="stylesheet",l.href=n,l.media="only x",i(function(){d.parentNode.insertBefore(l,t?d:d.nextSibling)});var u=function(e){for(var n=l.href,t=f.length;t--;)if(f[t].href===n)return e();setTimeout(function(){u(e)})};return l.addEventListener&&l.addEventListener("load",r),l.onloadcssdefined=u,u(r),l};"undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this);
	/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
	!function(t){if(t.loadCSS){var e=loadCSS.relpreload={};if(e.support=function(){try{return t.document.createElement("link").relList.supports("preload")}catch(e){return!1}},e.poly=function(){for(var e=t.document.getElementsByTagName("link"),r=0;r<e.length;r++){var n=e[r];"preload"===n.rel&&"style"===n.getAttribute("as")&&(t.loadCSS(n.href,n,n.getAttribute("media")),n.rel=null)}},!e.support()){e.poly();var r=t.setInterval(e.poly,300);t.addEventListener&&t.addEventListener("load",function(){e.poly(),t.clearInterval(r)}),t.attachEvent&&t.attachEvent("onload",function(){t.clearInterval(r)})}}}(this);
	{/literal}
	</script>
	
	
	{/if}
		
	<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />

		
 	{if $skipinline}
		<script src="/javascripts/{$js}.js"></script>	
	{/if}

	{if !$skipinline}
		<script type="text/javascript">
		{literal}
		if (typeof loadedalljs == "undefined") { var loadedalljs=true; 
		{/literal}
		{inline_file location=core file=jquery.js type=js raw=true skipmin=true}
		{inline_file location=core file=form.js type=js raw=true skipmin=true}
		{inline_file location=core file=supersleight.js type=js raw=true}
		{inline_file location=core file=sha1-min.js type=js raw=true }
		{inline_file location=core file=color.js type=js raw=true skipmin=true}
		{inline_file location=core file=jquery-ui-1.9.1.custom.min.js type=js raw=true}
		{inline_file location=core file=jquery.jplayer.min.js type=js raw=true }
		{inline_file location=core file=videoplayer-custom.js type=js raw=true }
		{inline_file location=core file=core.js type=js raw=true }
		{inline_file location=theme file=custom.js type=js raw=true}
		{literal}
		}
		{/literal}
		</script>
		<script src="/javascripts/{$js}.js" async></script>
	{/if}

	{* 	Add custom inline javascript like Analytics tracking code inside the 'literal' tags below. Any raw javascript needs to be wrapped in these tags when used in Smarty templates. *}
	{literal}

	{/literal}
	{if $theme_vars_enabled_google_fonts}
	<link href='https://fonts.googleapis.com/css?family={strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Slabo+27px"||$theme_vars_header_bar_2_h1_font=="Slabo+27px"||$theme_vars_header_bar_3_h1_font=="Slabo+27px"||$theme_vars_content_bar_1_h1_font=="Slabo+27px"||$theme_vars_content_bar_2_h1_font=="Slabo+27px"||$theme_vars_content_bar_3_h1_font=="Slabo+27px"||$theme_vars_content_bar_4_h1_font=="Slabo+27px"||$theme_vars_content_bar_5_h1_font=="Slabo+27px"||$theme_vars_content_bar_6_h1_font=="Slabo+27px"||$theme_vars_content_bar_7_h1_font=="Slabo+27px"||$theme_vars_footer_bar_1_h1_font=="Slabo+27px"||$theme_vars_footer_bar_2_1_h1_font=="Slabo+27px"||$theme_vars_footer_bar_3_1_h1_font=="Slabo+27px"||$theme_vars_header_bar_1_h2_font=="Slabo+27px"||$theme_vars_header_bar_2_h2_font=="Slabo+27px"||$theme_vars_header_bar_3_h2_font=="Slabo+27px"||$theme_vars_content_bar_1_h2_font=="Slabo+27px"||$theme_vars_content_bar_2_h2_font=="Slabo+27px"||$theme_vars_content_bar_3_h2_font=="Slabo+27px"||$theme_vars_content_bar_4_h2_font=="Slabo+27px"||$theme_vars_content_bar_5_h2_font=="Slabo+27px"||$theme_vars_content_bar_6_h2_font=="Slabo+27px"||$theme_vars_content_bar_7_h2_font=="Slabo+27px"||$theme_vars_footer_bar_1_h2_font=="Slabo+27px"||$theme_vars_footer_bar_2_1_h2_font=="Slabo+27px"||$theme_vars_footer_bar_3_1_h2_font=="Slabo+27px"||$theme_vars_header_bar_1_h3_font=="Slabo+27px"||$theme_vars_header_bar_2_h3_font=="Slabo+27px"||$theme_vars_header_bar_3_h3_font=="Slabo+27px"||$theme_vars_content_bar_1_h3_font=="Slabo+27px"||$theme_vars_content_bar_2_h3_font=="Slabo+27px"||$theme_vars_content_bar_3_h3_font=="Slabo+27px"||$theme_vars_content_bar_4_h3_font=="Slabo+27px"||$theme_vars_content_bar_5_h3_font=="Slabo+27px"||$theme_vars_content_bar_6_h3_font=="Slabo+27px"||$theme_vars_content_bar_7_h3_font=="Slabo+27px"||$theme_vars_footer_bar_1_h3_font=="Slabo+27px"||$theme_vars_footer_bar_2_1_h3_font=="Slabo+27px"||$theme_vars_footer_bar_3_1_h3_font=="Slabo+27px"||$theme_vars_header_bar_1_h4_font=="Slabo+27px"||$theme_vars_header_bar_2_h4_font=="Slabo+27px"||$theme_vars_header_bar_3_h4_font=="Slabo+27px"||$theme_vars_content_bar_1_h4_font=="Slabo+27px"||$theme_vars_content_bar_2_h4_font=="Slabo+27px"||$theme_vars_content_bar_3_h4_font=="Slabo+27px"||$theme_vars_content_bar_4_h4_font=="Slabo+27px"||$theme_vars_content_bar_5_h4_font=="Slabo+27px"||$theme_vars_content_bar_6_h4_font=="Slabo+27px"||$theme_vars_content_bar_7_h4_font=="Slabo+27px"||$theme_vars_footer_bar_1_h4_font=="Slabo+27px"||$theme_vars_footer_bar_2_1_h4_font=="Slabo+27px"||$theme_vars_footer_bar_3_1_h4_font=="Slabo+27px"||$theme_vars_header_bar_1_p_font=="Slabo+27px"||$theme_vars_header_bar_2_p_font=="Slabo+27px"||$theme_vars_header_bar_3_p_font=="Slabo+27px"||$theme_vars_content_bar_1_p_font=="Slabo+27px"||$theme_vars_content_bar_2_p_font=="Slabo+27px"||$theme_vars_content_bar_3_p_font=="Slabo+27px"||$theme_vars_content_bar_4_p_font=="Slabo+27px"||$theme_vars_content_bar_5_p_font=="Slabo+27px"||$theme_vars_content_bar_6_p_font=="Slabo+27px"||$theme_vars_content_bar_7_p_font=="Slabo+27px"||$theme_vars_footer_bar_1_p_font=="Slabo+27px"||$theme_vars_footer_bar_2_1_p_font=="Slabo+27px"||$theme_vars_footer_bar_3_1_p_font=="Slabo+27px"||$theme_vars_h1_font=="Slabo+27px"||$theme_vars_h2_font=="Slabo+27px"||$theme_vars_h3_font=="Slabo+27px"||$theme_vars_h4_font=="Slabo+27px"||$theme_vars_p_font=="Slabo+27px"}{strip}
{/strip}Slabo+27px%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_2_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_3_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_1_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_2_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_3_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_4_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_5_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_6_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_7_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_1_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_1_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_2_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_3_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_1_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_2_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_3_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_4_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_5_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_6_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_7_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_1_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_1_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_2_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_3_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_1_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_2_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_3_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_4_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_5_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_6_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_7_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_1_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_1_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_2_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_3_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_1_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_2_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_3_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_4_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_5_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_6_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_7_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_1_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_1_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_2_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_header_bar_3_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_1_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_2_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_3_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_4_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_5_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_6_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_content_bar_7_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_1_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_2_1_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_footer_bar_3_1_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_h1_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_h2_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_h3_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_h4_font=="Open+Sans:400,400italic,700,300,300italic,700italic"||$theme_vars_p_font=="Open+Sans:400,400italic,700,300,300italic,700italic"}{strip}
{/strip}Open+Sans:400,400italic,700,300,300italic,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_2_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_3_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_1_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_2_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_3_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_4_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_5_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_6_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_7_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_1_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_2_1_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_3_1_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_1_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_2_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_3_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_1_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_2_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_3_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_4_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_5_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_6_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_7_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_1_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_2_1_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_3_1_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_1_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_2_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_3_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_1_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_2_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_3_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_4_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_5_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_6_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_7_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_1_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_2_1_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_3_1_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_1_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_2_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_3_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_1_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_2_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_3_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_4_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_5_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_6_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_7_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_1_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_2_1_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_3_1_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_1_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_2_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_header_bar_3_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_1_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_2_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_3_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_4_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_5_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_6_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_content_bar_7_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_1_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_2_1_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_footer_bar_3_1_p_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_h1_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_h2_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_h3_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_h4_font=="Roboto:400,400italic,700,700italic,300,300italic"||$theme_vars_p_font=="Roboto:400,400italic,700,700italic,300,300italic"}{strip}
{/strip}Roboto:400,400italic,700,700italic,300,300italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Lato:400,700,400italic"||$theme_vars_header_bar_2_h1_font=="Lato:400,700,400italic"||$theme_vars_header_bar_3_h1_font=="Lato:400,700,400italic"||$theme_vars_content_bar_1_h1_font=="Lato:400,700,400italic"||$theme_vars_content_bar_2_h1_font=="Lato:400,700,400italic"||$theme_vars_content_bar_3_h1_font=="Lato:400,700,400italic"||$theme_vars_content_bar_4_h1_font=="Lato:400,700,400italic"||$theme_vars_content_bar_5_h1_font=="Lato:400,700,400italic"||$theme_vars_content_bar_6_h1_font=="Lato:400,700,400italic"||$theme_vars_content_bar_7_h1_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_1_h1_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_2_1_h1_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_3_1_h1_font=="Lato:400,700,400italic"||$theme_vars_header_bar_1_h2_font=="Lato:400,700,400italic"||$theme_vars_header_bar_2_h2_font=="Lato:400,700,400italic"||$theme_vars_header_bar_3_h2_font=="Lato:400,700,400italic"||$theme_vars_content_bar_1_h2_font=="Lato:400,700,400italic"||$theme_vars_content_bar_2_h2_font=="Lato:400,700,400italic"||$theme_vars_content_bar_3_h2_font=="Lato:400,700,400italic"||$theme_vars_content_bar_4_h2_font=="Lato:400,700,400italic"||$theme_vars_content_bar_5_h2_font=="Lato:400,700,400italic"||$theme_vars_content_bar_6_h2_font=="Lato:400,700,400italic"||$theme_vars_content_bar_7_h2_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_1_h2_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_2_1_h2_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_3_1_h2_font=="Lato:400,700,400italic"||$theme_vars_header_bar_1_h3_font=="Lato:400,700,400italic"||$theme_vars_header_bar_2_h3_font=="Lato:400,700,400italic"||$theme_vars_header_bar_3_h3_font=="Lato:400,700,400italic"||$theme_vars_content_bar_1_h3_font=="Lato:400,700,400italic"||$theme_vars_content_bar_2_h3_font=="Lato:400,700,400italic"||$theme_vars_content_bar_3_h3_font=="Lato:400,700,400italic"||$theme_vars_content_bar_4_h3_font=="Lato:400,700,400italic"||$theme_vars_content_bar_5_h3_font=="Lato:400,700,400italic"||$theme_vars_content_bar_6_h3_font=="Lato:400,700,400italic"||$theme_vars_content_bar_7_h3_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_1_h3_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_2_1_h3_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_3_1_h3_font=="Lato:400,700,400italic"||$theme_vars_header_bar_1_h4_font=="Lato:400,700,400italic"||$theme_vars_header_bar_2_h4_font=="Lato:400,700,400italic"||$theme_vars_header_bar_3_h4_font=="Lato:400,700,400italic"||$theme_vars_content_bar_1_h4_font=="Lato:400,700,400italic"||$theme_vars_content_bar_2_h4_font=="Lato:400,700,400italic"||$theme_vars_content_bar_3_h4_font=="Lato:400,700,400italic"||$theme_vars_content_bar_4_h4_font=="Lato:400,700,400italic"||$theme_vars_content_bar_5_h4_font=="Lato:400,700,400italic"||$theme_vars_content_bar_6_h4_font=="Lato:400,700,400italic"||$theme_vars_content_bar_7_h4_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_1_h4_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_2_1_h4_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_3_1_h4_font=="Lato:400,700,400italic"||$theme_vars_header_bar_1_p_font=="Lato:400,700,400italic"||$theme_vars_header_bar_2_p_font=="Lato:400,700,400italic"||$theme_vars_header_bar_3_p_font=="Lato:400,700,400italic"||$theme_vars_content_bar_1_p_font=="Lato:400,700,400italic"||$theme_vars_content_bar_2_p_font=="Lato:400,700,400italic"||$theme_vars_content_bar_3_p_font=="Lato:400,700,400italic"||$theme_vars_content_bar_4_p_font=="Lato:400,700,400italic"||$theme_vars_content_bar_5_p_font=="Lato:400,700,400italic"||$theme_vars_content_bar_6_p_font=="Lato:400,700,400italic"||$theme_vars_content_bar_7_p_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_1_p_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_2_1_p_font=="Lato:400,700,400italic"||$theme_vars_footer_bar_3_1_p_font=="Lato:400,700,400italic"||$theme_vars_h1_font=="Lato:400,700,400italic"||$theme_vars_h2_font=="Lato:400,700,400italic"||$theme_vars_h3_font=="Lato:400,700,400italic"||$theme_vars_h4_font=="Lato:400,700,400italic"||$theme_vars_p_font=="Lato:400,700,400italic"}{strip}
{/strip}Lato:400,700,400italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Oswald:400,700"||$theme_vars_header_bar_2_h1_font=="Oswald:400,700"||$theme_vars_header_bar_3_h1_font=="Oswald:400,700"||$theme_vars_content_bar_1_h1_font=="Oswald:400,700"||$theme_vars_content_bar_2_h1_font=="Oswald:400,700"||$theme_vars_content_bar_3_h1_font=="Oswald:400,700"||$theme_vars_content_bar_4_h1_font=="Oswald:400,700"||$theme_vars_content_bar_5_h1_font=="Oswald:400,700"||$theme_vars_content_bar_6_h1_font=="Oswald:400,700"||$theme_vars_content_bar_7_h1_font=="Oswald:400,700"||$theme_vars_footer_bar_1_h1_font=="Oswald:400,700"||$theme_vars_footer_bar_2_1_h1_font=="Oswald:400,700"||$theme_vars_footer_bar_3_1_h1_font=="Oswald:400,700"||$theme_vars_header_bar_1_h2_font=="Oswald:400,700"||$theme_vars_header_bar_2_h2_font=="Oswald:400,700"||$theme_vars_header_bar_3_h2_font=="Oswald:400,700"||$theme_vars_content_bar_1_h2_font=="Oswald:400,700"||$theme_vars_content_bar_2_h2_font=="Oswald:400,700"||$theme_vars_content_bar_3_h2_font=="Oswald:400,700"||$theme_vars_content_bar_4_h2_font=="Oswald:400,700"||$theme_vars_content_bar_5_h2_font=="Oswald:400,700"||$theme_vars_content_bar_6_h2_font=="Oswald:400,700"||$theme_vars_content_bar_7_h2_font=="Oswald:400,700"||$theme_vars_footer_bar_1_h2_font=="Oswald:400,700"||$theme_vars_footer_bar_2_1_h2_font=="Oswald:400,700"||$theme_vars_footer_bar_3_1_h2_font=="Oswald:400,700"||$theme_vars_header_bar_1_h3_font=="Oswald:400,700"||$theme_vars_header_bar_2_h3_font=="Oswald:400,700"||$theme_vars_header_bar_3_h3_font=="Oswald:400,700"||$theme_vars_content_bar_1_h3_font=="Oswald:400,700"||$theme_vars_content_bar_2_h3_font=="Oswald:400,700"||$theme_vars_content_bar_3_h3_font=="Oswald:400,700"||$theme_vars_content_bar_4_h3_font=="Oswald:400,700"||$theme_vars_content_bar_5_h3_font=="Oswald:400,700"||$theme_vars_content_bar_6_h3_font=="Oswald:400,700"||$theme_vars_content_bar_7_h3_font=="Oswald:400,700"||$theme_vars_footer_bar_1_h3_font=="Oswald:400,700"||$theme_vars_footer_bar_2_1_h3_font=="Oswald:400,700"||$theme_vars_footer_bar_3_1_h3_font=="Oswald:400,700"||$theme_vars_header_bar_1_h4_font=="Oswald:400,700"||$theme_vars_header_bar_2_h4_font=="Oswald:400,700"||$theme_vars_header_bar_3_h4_font=="Oswald:400,700"||$theme_vars_content_bar_1_h4_font=="Oswald:400,700"||$theme_vars_content_bar_2_h4_font=="Oswald:400,700"||$theme_vars_content_bar_3_h4_font=="Oswald:400,700"||$theme_vars_content_bar_4_h4_font=="Oswald:400,700"||$theme_vars_content_bar_5_h4_font=="Oswald:400,700"||$theme_vars_content_bar_6_h4_font=="Oswald:400,700"||$theme_vars_content_bar_7_h4_font=="Oswald:400,700"||$theme_vars_footer_bar_1_h4_font=="Oswald:400,700"||$theme_vars_footer_bar_2_1_h4_font=="Oswald:400,700"||$theme_vars_footer_bar_3_1_h4_font=="Oswald:400,700"||$theme_vars_header_bar_1_p_font=="Oswald:400,700"||$theme_vars_header_bar_2_p_font=="Oswald:400,700"||$theme_vars_header_bar_3_p_font=="Oswald:400,700"||$theme_vars_content_bar_1_p_font=="Oswald:400,700"||$theme_vars_content_bar_2_p_font=="Oswald:400,700"||$theme_vars_content_bar_3_p_font=="Oswald:400,700"||$theme_vars_content_bar_4_p_font=="Oswald:400,700"||$theme_vars_content_bar_5_p_font=="Oswald:400,700"||$theme_vars_content_bar_6_p_font=="Oswald:400,700"||$theme_vars_content_bar_7_p_font=="Oswald:400,700"||$theme_vars_footer_bar_1_p_font=="Oswald:400,700"||$theme_vars_footer_bar_2_1_p_font=="Oswald:400,700"||$theme_vars_footer_bar_3_1_p_font=="Oswald:400,700"||$theme_vars_h1_font=="Oswald:400,700"||$theme_vars_h2_font=="Oswald:400,700"||$theme_vars_h3_font=="Oswald:400,700"||$theme_vars_h4_font=="Oswald:400,700"||$theme_vars_p_font=="Oswald:400,700"}{strip}
{/strip}Oswald:400,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_2_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_3_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_1_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_2_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_3_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_4_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_5_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_6_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_7_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_1_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_2_1_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_3_1_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_1_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_2_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_3_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_1_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_2_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_3_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_4_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_5_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_6_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_7_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_1_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_2_1_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_3_1_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_1_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_2_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_3_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_1_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_2_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_3_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_4_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_5_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_6_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_7_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_1_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_2_1_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_3_1_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_1_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_2_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_3_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_1_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_2_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_3_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_4_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_5_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_6_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_7_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_1_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_2_1_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_3_1_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_1_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_2_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_header_bar_3_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_1_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_2_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_3_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_4_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_5_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_6_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_content_bar_7_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_1_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_2_1_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_footer_bar_3_1_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_h1_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_h2_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_h3_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_h4_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"||$theme_vars_p_font=="Roboto+Condensed:400,700,400italic,700italic,300,300italic"}{strip}
{/strip}Roboto+Condensed:400,700,400italic,700italic,300,300italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_2_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_3_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_1_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_2_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_3_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_4_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_5_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_6_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_7_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_1_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_2_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_3_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_1_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_2_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_3_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_4_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_5_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_6_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_7_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_1_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_2_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_3_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_1_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_2_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_3_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_4_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_5_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_6_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_7_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_1_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_2_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_3_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_1_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_2_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_3_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_4_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_5_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_6_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_7_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_1_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_2_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_header_bar_3_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_1_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_2_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_3_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_4_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_5_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_6_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_content_bar_7_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_1_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_h1_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_h2_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_h3_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_h4_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"||$theme_vars_p_font=="Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"}{strip}
{/strip}Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Montserrat:400,700"||$theme_vars_header_bar_2_h1_font=="Montserrat:400,700"||$theme_vars_header_bar_3_h1_font=="Montserrat:400,700"||$theme_vars_content_bar_1_h1_font=="Montserrat:400,700"||$theme_vars_content_bar_2_h1_font=="Montserrat:400,700"||$theme_vars_content_bar_3_h1_font=="Montserrat:400,700"||$theme_vars_content_bar_4_h1_font=="Montserrat:400,700"||$theme_vars_content_bar_5_h1_font=="Montserrat:400,700"||$theme_vars_content_bar_6_h1_font=="Montserrat:400,700"||$theme_vars_content_bar_7_h1_font=="Montserrat:400,700"||$theme_vars_footer_bar_1_h1_font=="Montserrat:400,700"||$theme_vars_footer_bar_2_1_h1_font=="Montserrat:400,700"||$theme_vars_footer_bar_3_1_h1_font=="Montserrat:400,700"||$theme_vars_header_bar_1_h2_font=="Montserrat:400,700"||$theme_vars_header_bar_2_h2_font=="Montserrat:400,700"||$theme_vars_header_bar_3_h2_font=="Montserrat:400,700"||$theme_vars_content_bar_1_h2_font=="Montserrat:400,700"||$theme_vars_content_bar_2_h2_font=="Montserrat:400,700"||$theme_vars_content_bar_3_h2_font=="Montserrat:400,700"||$theme_vars_content_bar_4_h2_font=="Montserrat:400,700"||$theme_vars_content_bar_5_h2_font=="Montserrat:400,700"||$theme_vars_content_bar_6_h2_font=="Montserrat:400,700"||$theme_vars_content_bar_7_h2_font=="Montserrat:400,700"||$theme_vars_footer_bar_1_h2_font=="Montserrat:400,700"||$theme_vars_footer_bar_2_1_h2_font=="Montserrat:400,700"||$theme_vars_footer_bar_3_1_h2_font=="Montserrat:400,700"||$theme_vars_header_bar_1_h3_font=="Montserrat:400,700"||$theme_vars_header_bar_2_h3_font=="Montserrat:400,700"||$theme_vars_header_bar_3_h3_font=="Montserrat:400,700"||$theme_vars_content_bar_1_h3_font=="Montserrat:400,700"||$theme_vars_content_bar_2_h3_font=="Montserrat:400,700"||$theme_vars_content_bar_3_h3_font=="Montserrat:400,700"||$theme_vars_content_bar_4_h3_font=="Montserrat:400,700"||$theme_vars_content_bar_5_h3_font=="Montserrat:400,700"||$theme_vars_content_bar_6_h3_font=="Montserrat:400,700"||$theme_vars_content_bar_7_h3_font=="Montserrat:400,700"||$theme_vars_footer_bar_1_h3_font=="Montserrat:400,700"||$theme_vars_footer_bar_2_1_h3_font=="Montserrat:400,700"||$theme_vars_footer_bar_3_1_h3_font=="Montserrat:400,700"||$theme_vars_header_bar_1_h4_font=="Montserrat:400,700"||$theme_vars_header_bar_2_h4_font=="Montserrat:400,700"||$theme_vars_header_bar_3_h4_font=="Montserrat:400,700"||$theme_vars_content_bar_1_h4_font=="Montserrat:400,700"||$theme_vars_content_bar_2_h4_font=="Montserrat:400,700"||$theme_vars_content_bar_3_h4_font=="Montserrat:400,700"||$theme_vars_content_bar_4_h4_font=="Montserrat:400,700"||$theme_vars_content_bar_5_h4_font=="Montserrat:400,700"||$theme_vars_content_bar_6_h4_font=="Montserrat:400,700"||$theme_vars_content_bar_7_h4_font=="Montserrat:400,700"||$theme_vars_footer_bar_1_h4_font=="Montserrat:400,700"||$theme_vars_footer_bar_2_1_h4_font=="Montserrat:400,700"||$theme_vars_footer_bar_3_1_h4_font=="Montserrat:400,700"||$theme_vars_header_bar_1_p_font=="Montserrat:400,700"||$theme_vars_header_bar_2_p_font=="Montserrat:400,700"||$theme_vars_header_bar_3_p_font=="Montserrat:400,700"||$theme_vars_content_bar_1_p_font=="Montserrat:400,700"||$theme_vars_content_bar_2_p_font=="Montserrat:400,700"||$theme_vars_content_bar_3_p_font=="Montserrat:400,700"||$theme_vars_content_bar_4_p_font=="Montserrat:400,700"||$theme_vars_content_bar_5_p_font=="Montserrat:400,700"||$theme_vars_content_bar_6_p_font=="Montserrat:400,700"||$theme_vars_content_bar_7_p_font=="Montserrat:400,700"||$theme_vars_footer_bar_1_p_font=="Montserrat:400,700"||$theme_vars_footer_bar_2_1_p_font=="Montserrat:400,700"||$theme_vars_footer_bar_3_1_p_font=="Montserrat:400,700"||$theme_vars_h1_font=="Montserrat:400,700"||$theme_vars_h2_font=="Montserrat:400,700"||$theme_vars_h3_font=="Montserrat:400,700"||$theme_vars_h4_font=="Montserrat:400,700"||$theme_vars_p_font=="Montserrat:400,700"}{strip}
{/strip}Montserrat:400,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_h1_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_h2_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_h3_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_h4_font=="Raleway:400,200,200italic,400italic,700,700italic"||$theme_vars_p_font=="Raleway:400,200,200italic,400italic,700,700italic"}{strip}
{/strip}Raleway:400,200,200italic,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_h1_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_h2_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_h3_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_h4_font=="PT+Sans:400,400italic,700,700italic"||$theme_vars_p_font=="PT+Sans:400,400italic,700,700italic"}{strip}
{/strip}PT+Sans:400,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Lora:400,400italic,700,700italic"||$theme_vars_h1_font=="Lora:400,400italic,700,700italic"||$theme_vars_h2_font=="Lora:400,400italic,700,700italic"||$theme_vars_h3_font=="Lora:400,400italic,700,700italic"||$theme_vars_h4_font=="Lora:400,400italic,700,700italic"||$theme_vars_p_font=="Lora:400,400italic,700,700italic"}{strip}
{/strip}Lora:400,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_2_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_3_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_1_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_2_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_3_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_4_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_5_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_6_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_7_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_1_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_2_1_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_3_1_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_1_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_2_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_3_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_1_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_2_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_3_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_4_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_5_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_6_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_7_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_1_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_2_1_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_3_1_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_1_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_2_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_3_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_1_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_2_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_3_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_4_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_5_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_6_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_7_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_1_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_2_1_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_3_1_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_1_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_2_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_3_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_1_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_2_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_3_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_4_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_5_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_6_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_7_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_1_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_2_1_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_3_1_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_1_p_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_2_p_font=="Roboto+Slab:400,300,700"||$theme_vars_header_bar_3_p_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_1_p_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_2_p_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_3_p_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_4_p_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_5_p_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_6_p_font=="Roboto+Slab:400,300,700"||$theme_vars_content_bar_7_p_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_1_p_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_2_1_p_font=="Roboto+Slab:400,300,700"||$theme_vars_footer_bar_3_1_p_font=="Roboto+Slab:400,300,700"||$theme_vars_h1_font=="Roboto+Slab:400,300,700"||$theme_vars_h2_font=="Roboto+Slab:400,300,700"||$theme_vars_h3_font=="Roboto+Slab:400,300,700"||$theme_vars_h4_font=="Roboto+Slab:400,300,700"||$theme_vars_p_font=="Roboto+Slab:400,300,700"}{strip}
{/strip}Roboto+Slab:400,300,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_2_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_3_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_1_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_2_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_3_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_4_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_5_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_6_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_7_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_1_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_2_1_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_3_1_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_1_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_2_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_3_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_1_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_2_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_3_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_4_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_5_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_6_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_7_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_1_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_2_1_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_3_1_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_1_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_2_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_3_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_1_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_2_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_3_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_4_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_5_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_6_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_7_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_1_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_2_1_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_3_1_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_1_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_2_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_3_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_1_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_2_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_3_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_4_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_5_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_6_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_7_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_1_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_2_1_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_3_1_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_1_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_2_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_header_bar_3_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_1_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_2_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_3_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_4_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_5_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_6_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_content_bar_7_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_1_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_2_1_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_footer_bar_3_1_p_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_h1_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_h2_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_h3_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_h4_font=="Open+Sans+Condensed:300,300italic,700"||$theme_vars_p_font=="Open+Sans+Condensed:300,300italic,700"}{strip}
{/strip}Open+Sans+Condensed:300,300italic,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Droid+Sans:400,700"||$theme_vars_header_bar_2_h1_font=="Droid+Sans:400,700"||$theme_vars_header_bar_3_h1_font=="Droid+Sans:400,700"||$theme_vars_content_bar_1_h1_font=="Droid+Sans:400,700"||$theme_vars_content_bar_2_h1_font=="Droid+Sans:400,700"||$theme_vars_content_bar_3_h1_font=="Droid+Sans:400,700"||$theme_vars_content_bar_4_h1_font=="Droid+Sans:400,700"||$theme_vars_content_bar_5_h1_font=="Droid+Sans:400,700"||$theme_vars_content_bar_6_h1_font=="Droid+Sans:400,700"||$theme_vars_content_bar_7_h1_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_1_h1_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_2_1_h1_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_3_1_h1_font=="Droid+Sans:400,700"||$theme_vars_header_bar_1_h2_font=="Droid+Sans:400,700"||$theme_vars_header_bar_2_h2_font=="Droid+Sans:400,700"||$theme_vars_header_bar_3_h2_font=="Droid+Sans:400,700"||$theme_vars_content_bar_1_h2_font=="Droid+Sans:400,700"||$theme_vars_content_bar_2_h2_font=="Droid+Sans:400,700"||$theme_vars_content_bar_3_h2_font=="Droid+Sans:400,700"||$theme_vars_content_bar_4_h2_font=="Droid+Sans:400,700"||$theme_vars_content_bar_5_h2_font=="Droid+Sans:400,700"||$theme_vars_content_bar_6_h2_font=="Droid+Sans:400,700"||$theme_vars_content_bar_7_h2_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_1_h2_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_2_1_h2_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_3_1_h2_font=="Droid+Sans:400,700"||$theme_vars_header_bar_1_h3_font=="Droid+Sans:400,700"||$theme_vars_header_bar_2_h3_font=="Droid+Sans:400,700"||$theme_vars_header_bar_3_h3_font=="Droid+Sans:400,700"||$theme_vars_content_bar_1_h3_font=="Droid+Sans:400,700"||$theme_vars_content_bar_2_h3_font=="Droid+Sans:400,700"||$theme_vars_content_bar_3_h3_font=="Droid+Sans:400,700"||$theme_vars_content_bar_4_h3_font=="Droid+Sans:400,700"||$theme_vars_content_bar_5_h3_font=="Droid+Sans:400,700"||$theme_vars_content_bar_6_h3_font=="Droid+Sans:400,700"||$theme_vars_content_bar_7_h3_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_1_h3_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_2_1_h3_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_3_1_h3_font=="Droid+Sans:400,700"||$theme_vars_header_bar_1_h4_font=="Droid+Sans:400,700"||$theme_vars_header_bar_2_h4_font=="Droid+Sans:400,700"||$theme_vars_header_bar_3_h4_font=="Droid+Sans:400,700"||$theme_vars_content_bar_1_h4_font=="Droid+Sans:400,700"||$theme_vars_content_bar_2_h4_font=="Droid+Sans:400,700"||$theme_vars_content_bar_3_h4_font=="Droid+Sans:400,700"||$theme_vars_content_bar_4_h4_font=="Droid+Sans:400,700"||$theme_vars_content_bar_5_h4_font=="Droid+Sans:400,700"||$theme_vars_content_bar_6_h4_font=="Droid+Sans:400,700"||$theme_vars_content_bar_7_h4_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_1_h4_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_2_1_h4_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_3_1_h4_font=="Droid+Sans:400,700"||$theme_vars_header_bar_1_p_font=="Droid+Sans:400,700"||$theme_vars_header_bar_2_p_font=="Droid+Sans:400,700"||$theme_vars_header_bar_3_p_font=="Droid+Sans:400,700"||$theme_vars_content_bar_1_p_font=="Droid+Sans:400,700"||$theme_vars_content_bar_2_p_font=="Droid+Sans:400,700"||$theme_vars_content_bar_3_p_font=="Droid+Sans:400,700"||$theme_vars_content_bar_4_p_font=="Droid+Sans:400,700"||$theme_vars_content_bar_5_p_font=="Droid+Sans:400,700"||$theme_vars_content_bar_6_p_font=="Droid+Sans:400,700"||$theme_vars_content_bar_7_p_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_1_p_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_2_1_p_font=="Droid+Sans:400,700"||$theme_vars_footer_bar_3_1_p_font=="Droid+Sans:400,700"||$theme_vars_h1_font=="Droid+Sans:400,700"||$theme_vars_h2_font=="Droid+Sans:400,700"||$theme_vars_h3_font=="Droid+Sans:400,700"||$theme_vars_h4_font=="Droid+Sans:400,700"||$theme_vars_p_font=="Droid+Sans:400,700"}{strip}
{/strip}Droid+Sans:400,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_h1_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_h2_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_h3_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_h4_font=="Ubuntu:400,400italic,700,700italic"||$theme_vars_p_font=="Ubuntu:400,400italic,700,700italic"}{strip}
{/strip}Ubuntu:400,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_h1_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_h2_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_h3_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_h4_font=="Droid+Serif:400,400italic,700,700italic"||$theme_vars_p_font=="Droid+Serif:400,400italic,700,700italic"}{strip}
{/strip}Droid+Serif:400,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_h1_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_h2_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_h3_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_h4_font=="Merriweather:400,400italic,700,700italic"||$theme_vars_p_font=="Merriweather:400,400italic,700,700italic"}{strip}
{/strip}Merriweather:400,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Arimo:400,400italic,700,700italic"||$theme_vars_h1_font=="Arimo:400,400italic,700,700italic"||$theme_vars_h2_font=="Arimo:400,400italic,700,700italic"||$theme_vars_h3_font=="Arimo:400,400italic,700,700italic"||$theme_vars_h4_font=="Arimo:400,400italic,700,700italic"||$theme_vars_p_font=="Arimo:400,400italic,700,700italic"}{strip}
{/strip}Arimo:400,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_h1_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_h2_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_h3_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_h4_font=="Noto+Sans:400,400italic,700,700italic"||$theme_vars_p_font=="Noto+Sans:400,400italic,700,700italic"}{strip}
{/strip}Noto+Sans:400,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_2_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_3_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_1_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_2_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_3_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_4_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_5_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_6_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_7_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_1_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_2_1_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_3_1_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_1_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_2_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_3_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_1_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_2_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_3_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_4_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_5_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_6_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_7_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_1_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_2_1_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_3_1_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_1_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_2_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_3_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_1_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_2_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_3_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_4_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_5_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_6_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_7_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_1_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_2_1_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_3_1_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_1_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_2_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_3_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_1_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_2_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_3_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_4_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_5_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_6_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_7_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_1_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_2_1_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_3_1_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_1_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_2_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_header_bar_3_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_1_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_2_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_3_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_4_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_5_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_6_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_content_bar_7_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_1_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_2_1_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_footer_bar_3_1_p_font=="PT+Sans+Narrow:400,700"||$theme_vars_h1_font=="PT+Sans+Narrow:400,700"||$theme_vars_h2_font=="PT+Sans+Narrow:400,700"||$theme_vars_h3_font=="PT+Sans+Narrow:400,700"||$theme_vars_h4_font=="PT+Sans+Narrow:400,700"||$theme_vars_p_font=="PT+Sans+Narrow:400,700"}{strip}
{/strip}PT+Sans+Narrow:400,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_2_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_3_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_1_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_2_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_3_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_4_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_5_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_6_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_7_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_1_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_2_1_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_3_1_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_1_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_2_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_3_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_1_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_2_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_3_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_4_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_5_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_6_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_7_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_1_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_2_1_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_3_1_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_1_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_2_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_3_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_1_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_2_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_3_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_4_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_5_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_6_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_7_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_1_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_2_1_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_3_1_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_1_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_2_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_3_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_1_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_2_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_3_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_4_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_5_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_6_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_7_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_1_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_2_1_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_3_1_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_1_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_2_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_header_bar_3_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_1_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_2_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_3_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_4_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_5_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_6_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_content_bar_7_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_1_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_2_1_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_footer_bar_3_1_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_h1_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_h2_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_h3_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_h4_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"||$theme_vars_p_font=="Titillium+Web:400,300,300italic,400italic,700italic,700"}{strip}
{/strip}Titillium+Web:400,300,300italic,400italic,700italic,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_h1_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_h2_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_h3_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_h4_font=="PT+Serif:400,400italic,700,700italic"||$theme_vars_p_font=="PT+Serif:400,400italic,700,700italic"}{strip}
{/strip}PT+Serif:400,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Indie+Flower"||$theme_vars_header_bar_2_h1_font=="Indie+Flower"||$theme_vars_header_bar_3_h1_font=="Indie+Flower"||$theme_vars_content_bar_1_h1_font=="Indie+Flower"||$theme_vars_content_bar_2_h1_font=="Indie+Flower"||$theme_vars_content_bar_3_h1_font=="Indie+Flower"||$theme_vars_content_bar_4_h1_font=="Indie+Flower"||$theme_vars_content_bar_5_h1_font=="Indie+Flower"||$theme_vars_content_bar_6_h1_font=="Indie+Flower"||$theme_vars_content_bar_7_h1_font=="Indie+Flower"||$theme_vars_footer_bar_1_h1_font=="Indie+Flower"||$theme_vars_footer_bar_2_1_h1_font=="Indie+Flower"||$theme_vars_footer_bar_3_1_h1_font=="Indie+Flower"||$theme_vars_header_bar_1_h2_font=="Indie+Flower"||$theme_vars_header_bar_2_h2_font=="Indie+Flower"||$theme_vars_header_bar_3_h2_font=="Indie+Flower"||$theme_vars_content_bar_1_h2_font=="Indie+Flower"||$theme_vars_content_bar_2_h2_font=="Indie+Flower"||$theme_vars_content_bar_3_h2_font=="Indie+Flower"||$theme_vars_content_bar_4_h2_font=="Indie+Flower"||$theme_vars_content_bar_5_h2_font=="Indie+Flower"||$theme_vars_content_bar_6_h2_font=="Indie+Flower"||$theme_vars_content_bar_7_h2_font=="Indie+Flower"||$theme_vars_footer_bar_1_h2_font=="Indie+Flower"||$theme_vars_footer_bar_2_1_h2_font=="Indie+Flower"||$theme_vars_footer_bar_3_1_h2_font=="Indie+Flower"||$theme_vars_header_bar_1_h3_font=="Indie+Flower"||$theme_vars_header_bar_2_h3_font=="Indie+Flower"||$theme_vars_header_bar_3_h3_font=="Indie+Flower"||$theme_vars_content_bar_1_h3_font=="Indie+Flower"||$theme_vars_content_bar_2_h3_font=="Indie+Flower"||$theme_vars_content_bar_3_h3_font=="Indie+Flower"||$theme_vars_content_bar_4_h3_font=="Indie+Flower"||$theme_vars_content_bar_5_h3_font=="Indie+Flower"||$theme_vars_content_bar_6_h3_font=="Indie+Flower"||$theme_vars_content_bar_7_h3_font=="Indie+Flower"||$theme_vars_footer_bar_1_h3_font=="Indie+Flower"||$theme_vars_footer_bar_2_1_h3_font=="Indie+Flower"||$theme_vars_footer_bar_3_1_h3_font=="Indie+Flower"||$theme_vars_header_bar_1_h4_font=="Indie+Flower"||$theme_vars_header_bar_2_h4_font=="Indie+Flower"||$theme_vars_header_bar_3_h4_font=="Indie+Flower"||$theme_vars_content_bar_1_h4_font=="Indie+Flower"||$theme_vars_content_bar_2_h4_font=="Indie+Flower"||$theme_vars_content_bar_3_h4_font=="Indie+Flower"||$theme_vars_content_bar_4_h4_font=="Indie+Flower"||$theme_vars_content_bar_5_h4_font=="Indie+Flower"||$theme_vars_content_bar_6_h4_font=="Indie+Flower"||$theme_vars_content_bar_7_h4_font=="Indie+Flower"||$theme_vars_footer_bar_1_h4_font=="Indie+Flower"||$theme_vars_footer_bar_2_1_h4_font=="Indie+Flower"||$theme_vars_footer_bar_3_1_h4_font=="Indie+Flower"||$theme_vars_header_bar_1_p_font=="Indie+Flower"||$theme_vars_header_bar_2_p_font=="Indie+Flower"||$theme_vars_header_bar_3_p_font=="Indie+Flower"||$theme_vars_content_bar_1_p_font=="Indie+Flower"||$theme_vars_content_bar_2_p_font=="Indie+Flower"||$theme_vars_content_bar_3_p_font=="Indie+Flower"||$theme_vars_content_bar_4_p_font=="Indie+Flower"||$theme_vars_content_bar_5_p_font=="Indie+Flower"||$theme_vars_content_bar_6_p_font=="Indie+Flower"||$theme_vars_content_bar_7_p_font=="Indie+Flower"||$theme_vars_footer_bar_1_p_font=="Indie+Flower"||$theme_vars_footer_bar_2_1_p_font=="Indie+Flower"||$theme_vars_footer_bar_3_1_p_font=="Indie+Flower"||$theme_vars_h1_font=="Indie+Flower"||$theme_vars_h2_font=="Indie+Flower"||$theme_vars_h3_font=="Indie+Flower"||$theme_vars_h4_font=="Indie+Flower"||$theme_vars_p_font=="Indie+Flower"}{strip}
{/strip}Indie+Flower%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_2_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_3_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_1_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_2_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_3_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_4_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_5_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_6_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_7_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_1_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_2_1_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_3_1_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_1_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_2_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_3_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_1_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_2_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_3_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_4_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_5_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_6_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_7_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_1_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_2_1_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_3_1_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_1_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_2_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_3_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_1_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_2_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_3_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_4_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_5_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_6_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_7_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_1_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_2_1_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_3_1_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_1_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_2_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_3_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_1_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_2_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_3_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_4_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_5_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_6_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_7_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_1_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_2_1_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_3_1_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_1_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_2_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_header_bar_3_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_1_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_2_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_3_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_4_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_5_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_6_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_content_bar_7_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_1_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_2_1_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_footer_bar_3_1_p_font=="Muli:400,300italic,300,400italic"||$theme_vars_h1_font=="Muli:400,300italic,300,400italic"||$theme_vars_h2_font=="Muli:400,300italic,300,400italic"||$theme_vars_h3_font=="Muli:400,300italic,300,400italic"||$theme_vars_h4_font=="Muli:400,300italic,300,400italic"||$theme_vars_p_font=="Muli:400,300italic,300,400italic"}{strip}
{/strip}Muli:400,300italic,300,400italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Inconsolata:400,700"||$theme_vars_header_bar_2_h1_font=="Inconsolata:400,700"||$theme_vars_header_bar_3_h1_font=="Inconsolata:400,700"||$theme_vars_content_bar_1_h1_font=="Inconsolata:400,700"||$theme_vars_content_bar_2_h1_font=="Inconsolata:400,700"||$theme_vars_content_bar_3_h1_font=="Inconsolata:400,700"||$theme_vars_content_bar_4_h1_font=="Inconsolata:400,700"||$theme_vars_content_bar_5_h1_font=="Inconsolata:400,700"||$theme_vars_content_bar_6_h1_font=="Inconsolata:400,700"||$theme_vars_content_bar_7_h1_font=="Inconsolata:400,700"||$theme_vars_footer_bar_1_h1_font=="Inconsolata:400,700"||$theme_vars_footer_bar_2_1_h1_font=="Inconsolata:400,700"||$theme_vars_footer_bar_3_1_h1_font=="Inconsolata:400,700"||$theme_vars_header_bar_1_h2_font=="Inconsolata:400,700"||$theme_vars_header_bar_2_h2_font=="Inconsolata:400,700"||$theme_vars_header_bar_3_h2_font=="Inconsolata:400,700"||$theme_vars_content_bar_1_h2_font=="Inconsolata:400,700"||$theme_vars_content_bar_2_h2_font=="Inconsolata:400,700"||$theme_vars_content_bar_3_h2_font=="Inconsolata:400,700"||$theme_vars_content_bar_4_h2_font=="Inconsolata:400,700"||$theme_vars_content_bar_5_h2_font=="Inconsolata:400,700"||$theme_vars_content_bar_6_h2_font=="Inconsolata:400,700"||$theme_vars_content_bar_7_h2_font=="Inconsolata:400,700"||$theme_vars_footer_bar_1_h2_font=="Inconsolata:400,700"||$theme_vars_footer_bar_2_1_h2_font=="Inconsolata:400,700"||$theme_vars_footer_bar_3_1_h2_font=="Inconsolata:400,700"||$theme_vars_header_bar_1_h3_font=="Inconsolata:400,700"||$theme_vars_header_bar_2_h3_font=="Inconsolata:400,700"||$theme_vars_header_bar_3_h3_font=="Inconsolata:400,700"||$theme_vars_content_bar_1_h3_font=="Inconsolata:400,700"||$theme_vars_content_bar_2_h3_font=="Inconsolata:400,700"||$theme_vars_content_bar_3_h3_font=="Inconsolata:400,700"||$theme_vars_content_bar_4_h3_font=="Inconsolata:400,700"||$theme_vars_content_bar_5_h3_font=="Inconsolata:400,700"||$theme_vars_content_bar_6_h3_font=="Inconsolata:400,700"||$theme_vars_content_bar_7_h3_font=="Inconsolata:400,700"||$theme_vars_footer_bar_1_h3_font=="Inconsolata:400,700"||$theme_vars_footer_bar_2_1_h3_font=="Inconsolata:400,700"||$theme_vars_footer_bar_3_1_h3_font=="Inconsolata:400,700"||$theme_vars_header_bar_1_h4_font=="Inconsolata:400,700"||$theme_vars_header_bar_2_h4_font=="Inconsolata:400,700"||$theme_vars_header_bar_3_h4_font=="Inconsolata:400,700"||$theme_vars_content_bar_1_h4_font=="Inconsolata:400,700"||$theme_vars_content_bar_2_h4_font=="Inconsolata:400,700"||$theme_vars_content_bar_3_h4_font=="Inconsolata:400,700"||$theme_vars_content_bar_4_h4_font=="Inconsolata:400,700"||$theme_vars_content_bar_5_h4_font=="Inconsolata:400,700"||$theme_vars_content_bar_6_h4_font=="Inconsolata:400,700"||$theme_vars_content_bar_7_h4_font=="Inconsolata:400,700"||$theme_vars_footer_bar_1_h4_font=="Inconsolata:400,700"||$theme_vars_footer_bar_2_1_h4_font=="Inconsolata:400,700"||$theme_vars_footer_bar_3_1_h4_font=="Inconsolata:400,700"||$theme_vars_header_bar_1_p_font=="Inconsolata:400,700"||$theme_vars_header_bar_2_p_font=="Inconsolata:400,700"||$theme_vars_header_bar_3_p_font=="Inconsolata:400,700"||$theme_vars_content_bar_1_p_font=="Inconsolata:400,700"||$theme_vars_content_bar_2_p_font=="Inconsolata:400,700"||$theme_vars_content_bar_3_p_font=="Inconsolata:400,700"||$theme_vars_content_bar_4_p_font=="Inconsolata:400,700"||$theme_vars_content_bar_5_p_font=="Inconsolata:400,700"||$theme_vars_content_bar_6_p_font=="Inconsolata:400,700"||$theme_vars_content_bar_7_p_font=="Inconsolata:400,700"||$theme_vars_footer_bar_1_p_font=="Inconsolata:400,700"||$theme_vars_footer_bar_2_1_p_font=="Inconsolata:400,700"||$theme_vars_footer_bar_3_1_p_font=="Inconsolata:400,700"||$theme_vars_h1_font=="Inconsolata:400,700"||$theme_vars_h2_font=="Inconsolata:400,700"||$theme_vars_h3_font=="Inconsolata:400,700"||$theme_vars_h4_font=="Inconsolata:400,700"||$theme_vars_p_font=="Inconsolata:400,700"}{strip}
{/strip}Inconsolata:400,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_2_h1_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_3_h1_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_1_h1_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_2_h1_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_3_h1_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_4_h1_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_5_h1_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_6_h1_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_7_h1_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_1_h1_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_2_1_h1_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_3_1_h1_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_1_h2_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_2_h2_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_3_h2_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_1_h2_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_2_h2_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_3_h2_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_4_h2_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_5_h2_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_6_h2_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_7_h2_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_1_h2_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_2_1_h2_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_3_1_h2_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_1_h3_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_2_h3_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_3_h3_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_1_h3_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_2_h3_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_3_h3_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_4_h3_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_5_h3_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_6_h3_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_7_h3_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_1_h3_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_2_1_h3_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_3_1_h3_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_1_h4_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_2_h4_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_3_h4_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_1_h4_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_2_h4_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_3_h4_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_4_h4_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_5_h4_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_6_h4_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_7_h4_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_1_h4_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_2_1_h4_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_3_1_h4_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_1_p_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_2_p_font=="Dosis:400,300,500,700"||$theme_vars_header_bar_3_p_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_1_p_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_2_p_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_3_p_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_4_p_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_5_p_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_6_p_font=="Dosis:400,300,500,700"||$theme_vars_content_bar_7_p_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_1_p_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_2_1_p_font=="Dosis:400,300,500,700"||$theme_vars_footer_bar_3_1_p_font=="Dosis:400,300,500,700"||$theme_vars_h1_font=="Dosis:400,300,500,700"||$theme_vars_h2_font=="Dosis:400,300,500,700"||$theme_vars_h3_font=="Dosis:400,300,500,700"||$theme_vars_h4_font=="Dosis:400,300,500,700"||$theme_vars_p_font=="Dosis:400,300,500,700"}{strip}
{/strip}Dosis:400,300,500,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_2_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_3_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_1_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_2_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_3_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_4_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_5_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_6_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_7_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_1_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_2_1_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_3_1_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_1_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_2_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_3_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_1_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_2_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_3_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_4_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_5_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_6_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_7_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_1_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_2_1_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_3_1_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_1_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_2_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_3_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_1_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_2_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_3_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_4_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_5_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_6_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_7_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_1_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_2_1_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_3_1_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_1_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_2_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_3_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_1_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_2_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_3_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_4_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_5_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_6_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_7_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_1_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_2_1_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_3_1_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_1_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_2_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_header_bar_3_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_1_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_2_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_3_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_4_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_5_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_6_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_content_bar_7_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_1_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_2_1_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_footer_bar_3_1_p_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_h1_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_h2_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_h3_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_h4_font=="Cabin:400,500,700,700italic,500italic"||$theme_vars_p_font=="Cabin:400,500,700,700italic,500italic"}{strip}
{/strip}Cabin:400,500,700,700italic,500italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_h1_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_h2_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_h3_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_h4_font=="Noto+Serif:400,400italic,700,700italic"||$theme_vars_p_font=="Noto+Serif:400,400italic,700,700italic"}{strip}
{/strip}Noto+Serif:400,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Lobster"||$theme_vars_header_bar_2_h1_font=="Lobster"||$theme_vars_header_bar_3_h1_font=="Lobster"||$theme_vars_content_bar_1_h1_font=="Lobster"||$theme_vars_content_bar_2_h1_font=="Lobster"||$theme_vars_content_bar_3_h1_font=="Lobster"||$theme_vars_content_bar_4_h1_font=="Lobster"||$theme_vars_content_bar_5_h1_font=="Lobster"||$theme_vars_content_bar_6_h1_font=="Lobster"||$theme_vars_content_bar_7_h1_font=="Lobster"||$theme_vars_footer_bar_1_h1_font=="Lobster"||$theme_vars_footer_bar_2_1_h1_font=="Lobster"||$theme_vars_footer_bar_3_1_h1_font=="Lobster"||$theme_vars_header_bar_1_h2_font=="Lobster"||$theme_vars_header_bar_2_h2_font=="Lobster"||$theme_vars_header_bar_3_h2_font=="Lobster"||$theme_vars_content_bar_1_h2_font=="Lobster"||$theme_vars_content_bar_2_h2_font=="Lobster"||$theme_vars_content_bar_3_h2_font=="Lobster"||$theme_vars_content_bar_4_h2_font=="Lobster"||$theme_vars_content_bar_5_h2_font=="Lobster"||$theme_vars_content_bar_6_h2_font=="Lobster"||$theme_vars_content_bar_7_h2_font=="Lobster"||$theme_vars_footer_bar_1_h2_font=="Lobster"||$theme_vars_footer_bar_2_1_h2_font=="Lobster"||$theme_vars_footer_bar_3_1_h2_font=="Lobster"||$theme_vars_header_bar_1_h3_font=="Lobster"||$theme_vars_header_bar_2_h3_font=="Lobster"||$theme_vars_header_bar_3_h3_font=="Lobster"||$theme_vars_content_bar_1_h3_font=="Lobster"||$theme_vars_content_bar_2_h3_font=="Lobster"||$theme_vars_content_bar_3_h3_font=="Lobster"||$theme_vars_content_bar_4_h3_font=="Lobster"||$theme_vars_content_bar_5_h3_font=="Lobster"||$theme_vars_content_bar_6_h3_font=="Lobster"||$theme_vars_content_bar_7_h3_font=="Lobster"||$theme_vars_footer_bar_1_h3_font=="Lobster"||$theme_vars_footer_bar_2_1_h3_font=="Lobster"||$theme_vars_footer_bar_3_1_h3_font=="Lobster"||$theme_vars_header_bar_1_h4_font=="Lobster"||$theme_vars_header_bar_2_h4_font=="Lobster"||$theme_vars_header_bar_3_h4_font=="Lobster"||$theme_vars_content_bar_1_h4_font=="Lobster"||$theme_vars_content_bar_2_h4_font=="Lobster"||$theme_vars_content_bar_3_h4_font=="Lobster"||$theme_vars_content_bar_4_h4_font=="Lobster"||$theme_vars_content_bar_5_h4_font=="Lobster"||$theme_vars_content_bar_6_h4_font=="Lobster"||$theme_vars_content_bar_7_h4_font=="Lobster"||$theme_vars_footer_bar_1_h4_font=="Lobster"||$theme_vars_footer_bar_2_1_h4_font=="Lobster"||$theme_vars_footer_bar_3_1_h4_font=="Lobster"||$theme_vars_header_bar_1_p_font=="Lobster"||$theme_vars_header_bar_2_p_font=="Lobster"||$theme_vars_header_bar_3_p_font=="Lobster"||$theme_vars_content_bar_1_p_font=="Lobster"||$theme_vars_content_bar_2_p_font=="Lobster"||$theme_vars_content_bar_3_p_font=="Lobster"||$theme_vars_content_bar_4_p_font=="Lobster"||$theme_vars_content_bar_5_p_font=="Lobster"||$theme_vars_content_bar_6_p_font=="Lobster"||$theme_vars_content_bar_7_p_font=="Lobster"||$theme_vars_footer_bar_1_p_font=="Lobster"||$theme_vars_footer_bar_2_1_p_font=="Lobster"||$theme_vars_footer_bar_3_1_p_font=="Lobster"||$theme_vars_h1_font=="Lobster"||$theme_vars_h2_font=="Lobster"||$theme_vars_h3_font=="Lobster"||$theme_vars_h4_font=="Lobster"||$theme_vars_p_font=="Lobster"}{strip}
{/strip}Lobster%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Passion+One:400,700"||$theme_vars_header_bar_2_h1_font=="Passion+One:400,700"||$theme_vars_header_bar_3_h1_font=="Passion+One:400,700"||$theme_vars_content_bar_1_h1_font=="Passion+One:400,700"||$theme_vars_content_bar_2_h1_font=="Passion+One:400,700"||$theme_vars_content_bar_3_h1_font=="Passion+One:400,700"||$theme_vars_content_bar_4_h1_font=="Passion+One:400,700"||$theme_vars_content_bar_5_h1_font=="Passion+One:400,700"||$theme_vars_content_bar_6_h1_font=="Passion+One:400,700"||$theme_vars_content_bar_7_h1_font=="Passion+One:400,700"||$theme_vars_footer_bar_1_h1_font=="Passion+One:400,700"||$theme_vars_footer_bar_2_1_h1_font=="Passion+One:400,700"||$theme_vars_footer_bar_3_1_h1_font=="Passion+One:400,700"||$theme_vars_header_bar_1_h2_font=="Passion+One:400,700"||$theme_vars_header_bar_2_h2_font=="Passion+One:400,700"||$theme_vars_header_bar_3_h2_font=="Passion+One:400,700"||$theme_vars_content_bar_1_h2_font=="Passion+One:400,700"||$theme_vars_content_bar_2_h2_font=="Passion+One:400,700"||$theme_vars_content_bar_3_h2_font=="Passion+One:400,700"||$theme_vars_content_bar_4_h2_font=="Passion+One:400,700"||$theme_vars_content_bar_5_h2_font=="Passion+One:400,700"||$theme_vars_content_bar_6_h2_font=="Passion+One:400,700"||$theme_vars_content_bar_7_h2_font=="Passion+One:400,700"||$theme_vars_footer_bar_1_h2_font=="Passion+One:400,700"||$theme_vars_footer_bar_2_1_h2_font=="Passion+One:400,700"||$theme_vars_footer_bar_3_1_h2_font=="Passion+One:400,700"||$theme_vars_header_bar_1_h3_font=="Passion+One:400,700"||$theme_vars_header_bar_2_h3_font=="Passion+One:400,700"||$theme_vars_header_bar_3_h3_font=="Passion+One:400,700"||$theme_vars_content_bar_1_h3_font=="Passion+One:400,700"||$theme_vars_content_bar_2_h3_font=="Passion+One:400,700"||$theme_vars_content_bar_3_h3_font=="Passion+One:400,700"||$theme_vars_content_bar_4_h3_font=="Passion+One:400,700"||$theme_vars_content_bar_5_h3_font=="Passion+One:400,700"||$theme_vars_content_bar_6_h3_font=="Passion+One:400,700"||$theme_vars_content_bar_7_h3_font=="Passion+One:400,700"||$theme_vars_footer_bar_1_h3_font=="Passion+One:400,700"||$theme_vars_footer_bar_2_1_h3_font=="Passion+One:400,700"||$theme_vars_footer_bar_3_1_h3_font=="Passion+One:400,700"||$theme_vars_header_bar_1_h4_font=="Passion+One:400,700"||$theme_vars_header_bar_2_h4_font=="Passion+One:400,700"||$theme_vars_header_bar_3_h4_font=="Passion+One:400,700"||$theme_vars_content_bar_1_h4_font=="Passion+One:400,700"||$theme_vars_content_bar_2_h4_font=="Passion+One:400,700"||$theme_vars_content_bar_3_h4_font=="Passion+One:400,700"||$theme_vars_content_bar_4_h4_font=="Passion+One:400,700"||$theme_vars_content_bar_5_h4_font=="Passion+One:400,700"||$theme_vars_content_bar_6_h4_font=="Passion+One:400,700"||$theme_vars_content_bar_7_h4_font=="Passion+One:400,700"||$theme_vars_footer_bar_1_h4_font=="Passion+One:400,700"||$theme_vars_footer_bar_2_1_h4_font=="Passion+One:400,700"||$theme_vars_footer_bar_3_1_h4_font=="Passion+One:400,700"||$theme_vars_header_bar_1_p_font=="Passion+One:400,700"||$theme_vars_header_bar_2_p_font=="Passion+One:400,700"||$theme_vars_header_bar_3_p_font=="Passion+One:400,700"||$theme_vars_content_bar_1_p_font=="Passion+One:400,700"||$theme_vars_content_bar_2_p_font=="Passion+One:400,700"||$theme_vars_content_bar_3_p_font=="Passion+One:400,700"||$theme_vars_content_bar_4_p_font=="Passion+One:400,700"||$theme_vars_content_bar_5_p_font=="Passion+One:400,700"||$theme_vars_content_bar_6_p_font=="Passion+One:400,700"||$theme_vars_content_bar_7_p_font=="Passion+One:400,700"||$theme_vars_footer_bar_1_p_font=="Passion+One:400,700"||$theme_vars_footer_bar_2_1_p_font=="Passion+One:400,700"||$theme_vars_footer_bar_3_1_p_font=="Passion+One:400,700"||$theme_vars_h1_font=="Passion+One:400,700"||$theme_vars_h2_font=="Passion+One:400,700"||$theme_vars_h3_font=="Passion+One:400,700"||$theme_vars_h4_font=="Passion+One:400,700"||$theme_vars_p_font=="Passion+One:400,700"}{strip}
{/strip}Passion+One:400,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Poiret+One"||$theme_vars_header_bar_2_h1_font=="Poiret+One"||$theme_vars_header_bar_3_h1_font=="Poiret+One"||$theme_vars_content_bar_1_h1_font=="Poiret+One"||$theme_vars_content_bar_2_h1_font=="Poiret+One"||$theme_vars_content_bar_3_h1_font=="Poiret+One"||$theme_vars_content_bar_4_h1_font=="Poiret+One"||$theme_vars_content_bar_5_h1_font=="Poiret+One"||$theme_vars_content_bar_6_h1_font=="Poiret+One"||$theme_vars_content_bar_7_h1_font=="Poiret+One"||$theme_vars_footer_bar_1_h1_font=="Poiret+One"||$theme_vars_footer_bar_2_1_h1_font=="Poiret+One"||$theme_vars_footer_bar_3_1_h1_font=="Poiret+One"||$theme_vars_header_bar_1_h2_font=="Poiret+One"||$theme_vars_header_bar_2_h2_font=="Poiret+One"||$theme_vars_header_bar_3_h2_font=="Poiret+One"||$theme_vars_content_bar_1_h2_font=="Poiret+One"||$theme_vars_content_bar_2_h2_font=="Poiret+One"||$theme_vars_content_bar_3_h2_font=="Poiret+One"||$theme_vars_content_bar_4_h2_font=="Poiret+One"||$theme_vars_content_bar_5_h2_font=="Poiret+One"||$theme_vars_content_bar_6_h2_font=="Poiret+One"||$theme_vars_content_bar_7_h2_font=="Poiret+One"||$theme_vars_footer_bar_1_h2_font=="Poiret+One"||$theme_vars_footer_bar_2_1_h2_font=="Poiret+One"||$theme_vars_footer_bar_3_1_h2_font=="Poiret+One"||$theme_vars_header_bar_1_h3_font=="Poiret+One"||$theme_vars_header_bar_2_h3_font=="Poiret+One"||$theme_vars_header_bar_3_h3_font=="Poiret+One"||$theme_vars_content_bar_1_h3_font=="Poiret+One"||$theme_vars_content_bar_2_h3_font=="Poiret+One"||$theme_vars_content_bar_3_h3_font=="Poiret+One"||$theme_vars_content_bar_4_h3_font=="Poiret+One"||$theme_vars_content_bar_5_h3_font=="Poiret+One"||$theme_vars_content_bar_6_h3_font=="Poiret+One"||$theme_vars_content_bar_7_h3_font=="Poiret+One"||$theme_vars_footer_bar_1_h3_font=="Poiret+One"||$theme_vars_footer_bar_2_1_h3_font=="Poiret+One"||$theme_vars_footer_bar_3_1_h3_font=="Poiret+One"||$theme_vars_header_bar_1_h4_font=="Poiret+One"||$theme_vars_header_bar_2_h4_font=="Poiret+One"||$theme_vars_header_bar_3_h4_font=="Poiret+One"||$theme_vars_content_bar_1_h4_font=="Poiret+One"||$theme_vars_content_bar_2_h4_font=="Poiret+One"||$theme_vars_content_bar_3_h4_font=="Poiret+One"||$theme_vars_content_bar_4_h4_font=="Poiret+One"||$theme_vars_content_bar_5_h4_font=="Poiret+One"||$theme_vars_content_bar_6_h4_font=="Poiret+One"||$theme_vars_content_bar_7_h4_font=="Poiret+One"||$theme_vars_footer_bar_1_h4_font=="Poiret+One"||$theme_vars_footer_bar_2_1_h4_font=="Poiret+One"||$theme_vars_footer_bar_3_1_h4_font=="Poiret+One"||$theme_vars_header_bar_1_p_font=="Poiret+One"||$theme_vars_header_bar_2_p_font=="Poiret+One"||$theme_vars_header_bar_3_p_font=="Poiret+One"||$theme_vars_content_bar_1_p_font=="Poiret+One"||$theme_vars_content_bar_2_p_font=="Poiret+One"||$theme_vars_content_bar_3_p_font=="Poiret+One"||$theme_vars_content_bar_4_p_font=="Poiret+One"||$theme_vars_content_bar_5_p_font=="Poiret+One"||$theme_vars_content_bar_6_p_font=="Poiret+One"||$theme_vars_content_bar_7_p_font=="Poiret+One"||$theme_vars_footer_bar_1_p_font=="Poiret+One"||$theme_vars_footer_bar_2_1_p_font=="Poiret+One"||$theme_vars_footer_bar_3_1_p_font=="Poiret+One"||$theme_vars_h1_font=="Poiret+One"||$theme_vars_h2_font=="Poiret+One"||$theme_vars_h3_font=="Poiret+One"||$theme_vars_h4_font=="Poiret+One"||$theme_vars_p_font=="Poiret+One"}{strip}
{/strip}Poiret+One%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_2_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_3_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_1_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_2_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_3_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_4_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_5_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_6_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_7_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_1_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_2_1_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_3_1_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_1_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_2_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_3_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_1_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_2_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_3_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_4_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_5_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_6_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_7_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_1_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_2_1_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_3_1_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_1_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_2_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_3_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_1_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_2_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_3_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_4_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_5_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_6_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_7_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_1_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_2_1_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_3_1_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_1_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_2_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_3_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_1_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_2_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_3_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_4_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_5_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_6_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_7_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_1_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_2_1_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_3_1_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_1_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_2_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_header_bar_3_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_1_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_2_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_3_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_4_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_5_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_6_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_content_bar_7_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_1_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_2_1_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_footer_bar_3_1_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_h1_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_h2_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_h3_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_h4_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"||$theme_vars_p_font=="Merriweather+Sans:400,300,700,700italic,400italic,300italic"}{strip}
{/strip}Merriweather+Sans:400,300,700,700italic,400italic,300italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Abel"||$theme_vars_header_bar_2_h1_font=="Abel"||$theme_vars_header_bar_3_h1_font=="Abel"||$theme_vars_content_bar_1_h1_font=="Abel"||$theme_vars_content_bar_2_h1_font=="Abel"||$theme_vars_content_bar_3_h1_font=="Abel"||$theme_vars_content_bar_4_h1_font=="Abel"||$theme_vars_content_bar_5_h1_font=="Abel"||$theme_vars_content_bar_6_h1_font=="Abel"||$theme_vars_content_bar_7_h1_font=="Abel"||$theme_vars_footer_bar_1_h1_font=="Abel"||$theme_vars_footer_bar_2_1_h1_font=="Abel"||$theme_vars_footer_bar_3_1_h1_font=="Abel"||$theme_vars_header_bar_1_h2_font=="Abel"||$theme_vars_header_bar_2_h2_font=="Abel"||$theme_vars_header_bar_3_h2_font=="Abel"||$theme_vars_content_bar_1_h2_font=="Abel"||$theme_vars_content_bar_2_h2_font=="Abel"||$theme_vars_content_bar_3_h2_font=="Abel"||$theme_vars_content_bar_4_h2_font=="Abel"||$theme_vars_content_bar_5_h2_font=="Abel"||$theme_vars_content_bar_6_h2_font=="Abel"||$theme_vars_content_bar_7_h2_font=="Abel"||$theme_vars_footer_bar_1_h2_font=="Abel"||$theme_vars_footer_bar_2_1_h2_font=="Abel"||$theme_vars_footer_bar_3_1_h2_font=="Abel"||$theme_vars_header_bar_1_h3_font=="Abel"||$theme_vars_header_bar_2_h3_font=="Abel"||$theme_vars_header_bar_3_h3_font=="Abel"||$theme_vars_content_bar_1_h3_font=="Abel"||$theme_vars_content_bar_2_h3_font=="Abel"||$theme_vars_content_bar_3_h3_font=="Abel"||$theme_vars_content_bar_4_h3_font=="Abel"||$theme_vars_content_bar_5_h3_font=="Abel"||$theme_vars_content_bar_6_h3_font=="Abel"||$theme_vars_content_bar_7_h3_font=="Abel"||$theme_vars_footer_bar_1_h3_font=="Abel"||$theme_vars_footer_bar_2_1_h3_font=="Abel"||$theme_vars_footer_bar_3_1_h3_font=="Abel"||$theme_vars_header_bar_1_h4_font=="Abel"||$theme_vars_header_bar_2_h4_font=="Abel"||$theme_vars_header_bar_3_h4_font=="Abel"||$theme_vars_content_bar_1_h4_font=="Abel"||$theme_vars_content_bar_2_h4_font=="Abel"||$theme_vars_content_bar_3_h4_font=="Abel"||$theme_vars_content_bar_4_h4_font=="Abel"||$theme_vars_content_bar_5_h4_font=="Abel"||$theme_vars_content_bar_6_h4_font=="Abel"||$theme_vars_content_bar_7_h4_font=="Abel"||$theme_vars_footer_bar_1_h4_font=="Abel"||$theme_vars_footer_bar_2_1_h4_font=="Abel"||$theme_vars_footer_bar_3_1_h4_font=="Abel"||$theme_vars_header_bar_1_p_font=="Abel"||$theme_vars_header_bar_2_p_font=="Abel"||$theme_vars_header_bar_3_p_font=="Abel"||$theme_vars_content_bar_1_p_font=="Abel"||$theme_vars_content_bar_2_p_font=="Abel"||$theme_vars_content_bar_3_p_font=="Abel"||$theme_vars_content_bar_4_p_font=="Abel"||$theme_vars_content_bar_5_p_font=="Abel"||$theme_vars_content_bar_6_p_font=="Abel"||$theme_vars_content_bar_7_p_font=="Abel"||$theme_vars_footer_bar_1_p_font=="Abel"||$theme_vars_footer_bar_2_1_p_font=="Abel"||$theme_vars_footer_bar_3_1_p_font=="Abel"||$theme_vars_h1_font=="Abel"||$theme_vars_h2_font=="Abel"||$theme_vars_h3_font=="Abel"||$theme_vars_h4_font=="Abel"||$theme_vars_p_font=="Abel"}{strip}
{/strip}Abel%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Pacifico"||$theme_vars_header_bar_2_h1_font=="Pacifico"||$theme_vars_header_bar_3_h1_font=="Pacifico"||$theme_vars_content_bar_1_h1_font=="Pacifico"||$theme_vars_content_bar_2_h1_font=="Pacifico"||$theme_vars_content_bar_3_h1_font=="Pacifico"||$theme_vars_content_bar_4_h1_font=="Pacifico"||$theme_vars_content_bar_5_h1_font=="Pacifico"||$theme_vars_content_bar_6_h1_font=="Pacifico"||$theme_vars_content_bar_7_h1_font=="Pacifico"||$theme_vars_footer_bar_1_h1_font=="Pacifico"||$theme_vars_footer_bar_2_1_h1_font=="Pacifico"||$theme_vars_footer_bar_3_1_h1_font=="Pacifico"||$theme_vars_header_bar_1_h2_font=="Pacifico"||$theme_vars_header_bar_2_h2_font=="Pacifico"||$theme_vars_header_bar_3_h2_font=="Pacifico"||$theme_vars_content_bar_1_h2_font=="Pacifico"||$theme_vars_content_bar_2_h2_font=="Pacifico"||$theme_vars_content_bar_3_h2_font=="Pacifico"||$theme_vars_content_bar_4_h2_font=="Pacifico"||$theme_vars_content_bar_5_h2_font=="Pacifico"||$theme_vars_content_bar_6_h2_font=="Pacifico"||$theme_vars_content_bar_7_h2_font=="Pacifico"||$theme_vars_footer_bar_1_h2_font=="Pacifico"||$theme_vars_footer_bar_2_1_h2_font=="Pacifico"||$theme_vars_footer_bar_3_1_h2_font=="Pacifico"||$theme_vars_header_bar_1_h3_font=="Pacifico"||$theme_vars_header_bar_2_h3_font=="Pacifico"||$theme_vars_header_bar_3_h3_font=="Pacifico"||$theme_vars_content_bar_1_h3_font=="Pacifico"||$theme_vars_content_bar_2_h3_font=="Pacifico"||$theme_vars_content_bar_3_h3_font=="Pacifico"||$theme_vars_content_bar_4_h3_font=="Pacifico"||$theme_vars_content_bar_5_h3_font=="Pacifico"||$theme_vars_content_bar_6_h3_font=="Pacifico"||$theme_vars_content_bar_7_h3_font=="Pacifico"||$theme_vars_footer_bar_1_h3_font=="Pacifico"||$theme_vars_footer_bar_2_1_h3_font=="Pacifico"||$theme_vars_footer_bar_3_1_h3_font=="Pacifico"||$theme_vars_header_bar_1_h4_font=="Pacifico"||$theme_vars_header_bar_2_h4_font=="Pacifico"||$theme_vars_header_bar_3_h4_font=="Pacifico"||$theme_vars_content_bar_1_h4_font=="Pacifico"||$theme_vars_content_bar_2_h4_font=="Pacifico"||$theme_vars_content_bar_3_h4_font=="Pacifico"||$theme_vars_content_bar_4_h4_font=="Pacifico"||$theme_vars_content_bar_5_h4_font=="Pacifico"||$theme_vars_content_bar_6_h4_font=="Pacifico"||$theme_vars_content_bar_7_h4_font=="Pacifico"||$theme_vars_footer_bar_1_h4_font=="Pacifico"||$theme_vars_footer_bar_2_1_h4_font=="Pacifico"||$theme_vars_footer_bar_3_1_h4_font=="Pacifico"||$theme_vars_header_bar_1_p_font=="Pacifico"||$theme_vars_header_bar_2_p_font=="Pacifico"||$theme_vars_header_bar_3_p_font=="Pacifico"||$theme_vars_content_bar_1_p_font=="Pacifico"||$theme_vars_content_bar_2_p_font=="Pacifico"||$theme_vars_content_bar_3_p_font=="Pacifico"||$theme_vars_content_bar_4_p_font=="Pacifico"||$theme_vars_content_bar_5_p_font=="Pacifico"||$theme_vars_content_bar_6_p_font=="Pacifico"||$theme_vars_content_bar_7_p_font=="Pacifico"||$theme_vars_footer_bar_1_p_font=="Pacifico"||$theme_vars_footer_bar_2_1_p_font=="Pacifico"||$theme_vars_footer_bar_3_1_p_font=="Pacifico"||$theme_vars_h1_font=="Pacifico"||$theme_vars_h2_font=="Pacifico"||$theme_vars_h3_font=="Pacifico"||$theme_vars_h4_font=="Pacifico"||$theme_vars_p_font=="Pacifico"}{strip}
{/strip}Pacifico%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Shadows+Into+Light"||$theme_vars_header_bar_2_h1_font=="Shadows+Into+Light"||$theme_vars_header_bar_3_h1_font=="Shadows+Into+Light"||$theme_vars_content_bar_1_h1_font=="Shadows+Into+Light"||$theme_vars_content_bar_2_h1_font=="Shadows+Into+Light"||$theme_vars_content_bar_3_h1_font=="Shadows+Into+Light"||$theme_vars_content_bar_4_h1_font=="Shadows+Into+Light"||$theme_vars_content_bar_5_h1_font=="Shadows+Into+Light"||$theme_vars_content_bar_6_h1_font=="Shadows+Into+Light"||$theme_vars_content_bar_7_h1_font=="Shadows+Into+Light"||$theme_vars_footer_bar_1_h1_font=="Shadows+Into+Light"||$theme_vars_footer_bar_2_1_h1_font=="Shadows+Into+Light"||$theme_vars_footer_bar_3_1_h1_font=="Shadows+Into+Light"||$theme_vars_header_bar_1_h2_font=="Shadows+Into+Light"||$theme_vars_header_bar_2_h2_font=="Shadows+Into+Light"||$theme_vars_header_bar_3_h2_font=="Shadows+Into+Light"||$theme_vars_content_bar_1_h2_font=="Shadows+Into+Light"||$theme_vars_content_bar_2_h2_font=="Shadows+Into+Light"||$theme_vars_content_bar_3_h2_font=="Shadows+Into+Light"||$theme_vars_content_bar_4_h2_font=="Shadows+Into+Light"||$theme_vars_content_bar_5_h2_font=="Shadows+Into+Light"||$theme_vars_content_bar_6_h2_font=="Shadows+Into+Light"||$theme_vars_content_bar_7_h2_font=="Shadows+Into+Light"||$theme_vars_footer_bar_1_h2_font=="Shadows+Into+Light"||$theme_vars_footer_bar_2_1_h2_font=="Shadows+Into+Light"||$theme_vars_footer_bar_3_1_h2_font=="Shadows+Into+Light"||$theme_vars_header_bar_1_h3_font=="Shadows+Into+Light"||$theme_vars_header_bar_2_h3_font=="Shadows+Into+Light"||$theme_vars_header_bar_3_h3_font=="Shadows+Into+Light"||$theme_vars_content_bar_1_h3_font=="Shadows+Into+Light"||$theme_vars_content_bar_2_h3_font=="Shadows+Into+Light"||$theme_vars_content_bar_3_h3_font=="Shadows+Into+Light"||$theme_vars_content_bar_4_h3_font=="Shadows+Into+Light"||$theme_vars_content_bar_5_h3_font=="Shadows+Into+Light"||$theme_vars_content_bar_6_h3_font=="Shadows+Into+Light"||$theme_vars_content_bar_7_h3_font=="Shadows+Into+Light"||$theme_vars_footer_bar_1_h3_font=="Shadows+Into+Light"||$theme_vars_footer_bar_2_1_h3_font=="Shadows+Into+Light"||$theme_vars_footer_bar_3_1_h3_font=="Shadows+Into+Light"||$theme_vars_header_bar_1_h4_font=="Shadows+Into+Light"||$theme_vars_header_bar_2_h4_font=="Shadows+Into+Light"||$theme_vars_header_bar_3_h4_font=="Shadows+Into+Light"||$theme_vars_content_bar_1_h4_font=="Shadows+Into+Light"||$theme_vars_content_bar_2_h4_font=="Shadows+Into+Light"||$theme_vars_content_bar_3_h4_font=="Shadows+Into+Light"||$theme_vars_content_bar_4_h4_font=="Shadows+Into+Light"||$theme_vars_content_bar_5_h4_font=="Shadows+Into+Light"||$theme_vars_content_bar_6_h4_font=="Shadows+Into+Light"||$theme_vars_content_bar_7_h4_font=="Shadows+Into+Light"||$theme_vars_footer_bar_1_h4_font=="Shadows+Into+Light"||$theme_vars_footer_bar_2_1_h4_font=="Shadows+Into+Light"||$theme_vars_footer_bar_3_1_h4_font=="Shadows+Into+Light"||$theme_vars_header_bar_1_p_font=="Shadows+Into+Light"||$theme_vars_header_bar_2_p_font=="Shadows+Into+Light"||$theme_vars_header_bar_3_p_font=="Shadows+Into+Light"||$theme_vars_content_bar_1_p_font=="Shadows+Into+Light"||$theme_vars_content_bar_2_p_font=="Shadows+Into+Light"||$theme_vars_content_bar_3_p_font=="Shadows+Into+Light"||$theme_vars_content_bar_4_p_font=="Shadows+Into+Light"||$theme_vars_content_bar_5_p_font=="Shadows+Into+Light"||$theme_vars_content_bar_6_p_font=="Shadows+Into+Light"||$theme_vars_content_bar_7_p_font=="Shadows+Into+Light"||$theme_vars_footer_bar_1_p_font=="Shadows+Into+Light"||$theme_vars_footer_bar_2_1_p_font=="Shadows+Into+Light"||$theme_vars_footer_bar_3_1_p_font=="Shadows+Into+Light"||$theme_vars_h1_font=="Shadows+Into+Light"||$theme_vars_h2_font=="Shadows+Into+Light"||$theme_vars_h3_font=="Shadows+Into+Light"||$theme_vars_h4_font=="Shadows+Into+Light"||$theme_vars_p_font=="Shadows+Into+Light"}{strip}
{/strip}Shadows+Into+Light%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Orbitron:400,500,700"||$theme_vars_header_bar_2_h1_font=="Orbitron:400,500,700"||$theme_vars_header_bar_3_h1_font=="Orbitron:400,500,700"||$theme_vars_content_bar_1_h1_font=="Orbitron:400,500,700"||$theme_vars_content_bar_2_h1_font=="Orbitron:400,500,700"||$theme_vars_content_bar_3_h1_font=="Orbitron:400,500,700"||$theme_vars_content_bar_4_h1_font=="Orbitron:400,500,700"||$theme_vars_content_bar_5_h1_font=="Orbitron:400,500,700"||$theme_vars_content_bar_6_h1_font=="Orbitron:400,500,700"||$theme_vars_content_bar_7_h1_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_1_h1_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_2_1_h1_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_3_1_h1_font=="Orbitron:400,500,700"||$theme_vars_header_bar_1_h2_font=="Orbitron:400,500,700"||$theme_vars_header_bar_2_h2_font=="Orbitron:400,500,700"||$theme_vars_header_bar_3_h2_font=="Orbitron:400,500,700"||$theme_vars_content_bar_1_h2_font=="Orbitron:400,500,700"||$theme_vars_content_bar_2_h2_font=="Orbitron:400,500,700"||$theme_vars_content_bar_3_h2_font=="Orbitron:400,500,700"||$theme_vars_content_bar_4_h2_font=="Orbitron:400,500,700"||$theme_vars_content_bar_5_h2_font=="Orbitron:400,500,700"||$theme_vars_content_bar_6_h2_font=="Orbitron:400,500,700"||$theme_vars_content_bar_7_h2_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_1_h2_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_2_1_h2_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_3_1_h2_font=="Orbitron:400,500,700"||$theme_vars_header_bar_1_h3_font=="Orbitron:400,500,700"||$theme_vars_header_bar_2_h3_font=="Orbitron:400,500,700"||$theme_vars_header_bar_3_h3_font=="Orbitron:400,500,700"||$theme_vars_content_bar_1_h3_font=="Orbitron:400,500,700"||$theme_vars_content_bar_2_h3_font=="Orbitron:400,500,700"||$theme_vars_content_bar_3_h3_font=="Orbitron:400,500,700"||$theme_vars_content_bar_4_h3_font=="Orbitron:400,500,700"||$theme_vars_content_bar_5_h3_font=="Orbitron:400,500,700"||$theme_vars_content_bar_6_h3_font=="Orbitron:400,500,700"||$theme_vars_content_bar_7_h3_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_1_h3_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_2_1_h3_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_3_1_h3_font=="Orbitron:400,500,700"||$theme_vars_header_bar_1_h4_font=="Orbitron:400,500,700"||$theme_vars_header_bar_2_h4_font=="Orbitron:400,500,700"||$theme_vars_header_bar_3_h4_font=="Orbitron:400,500,700"||$theme_vars_content_bar_1_h4_font=="Orbitron:400,500,700"||$theme_vars_content_bar_2_h4_font=="Orbitron:400,500,700"||$theme_vars_content_bar_3_h4_font=="Orbitron:400,500,700"||$theme_vars_content_bar_4_h4_font=="Orbitron:400,500,700"||$theme_vars_content_bar_5_h4_font=="Orbitron:400,500,700"||$theme_vars_content_bar_6_h4_font=="Orbitron:400,500,700"||$theme_vars_content_bar_7_h4_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_1_h4_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_2_1_h4_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_3_1_h4_font=="Orbitron:400,500,700"||$theme_vars_header_bar_1_p_font=="Orbitron:400,500,700"||$theme_vars_header_bar_2_p_font=="Orbitron:400,500,700"||$theme_vars_header_bar_3_p_font=="Orbitron:400,500,700"||$theme_vars_content_bar_1_p_font=="Orbitron:400,500,700"||$theme_vars_content_bar_2_p_font=="Orbitron:400,500,700"||$theme_vars_content_bar_3_p_font=="Orbitron:400,500,700"||$theme_vars_content_bar_4_p_font=="Orbitron:400,500,700"||$theme_vars_content_bar_5_p_font=="Orbitron:400,500,700"||$theme_vars_content_bar_6_p_font=="Orbitron:400,500,700"||$theme_vars_content_bar_7_p_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_1_p_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_2_1_p_font=="Orbitron:400,500,700"||$theme_vars_footer_bar_3_1_p_font=="Orbitron:400,500,700"||$theme_vars_h1_font=="Orbitron:400,500,700"||$theme_vars_h2_font=="Orbitron:400,500,700"||$theme_vars_h3_font=="Orbitron:400,500,700"||$theme_vars_h4_font=="Orbitron:400,500,700"||$theme_vars_p_font=="Orbitron:400,500,700"}{strip}
{/strip}Orbitron:400,500,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_h1_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_h2_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_h3_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_h4_font=="Exo:400,300,300italic,400italic,700,700italic"||$theme_vars_p_font=="Exo:400,300,300italic,400italic,700,700italic"}{strip}
{/strip}Exo:400,300,300italic,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Dancing+Script:400,700"||$theme_vars_header_bar_2_h1_font=="Dancing+Script:400,700"||$theme_vars_header_bar_3_h1_font=="Dancing+Script:400,700"||$theme_vars_content_bar_1_h1_font=="Dancing+Script:400,700"||$theme_vars_content_bar_2_h1_font=="Dancing+Script:400,700"||$theme_vars_content_bar_3_h1_font=="Dancing+Script:400,700"||$theme_vars_content_bar_4_h1_font=="Dancing+Script:400,700"||$theme_vars_content_bar_5_h1_font=="Dancing+Script:400,700"||$theme_vars_content_bar_6_h1_font=="Dancing+Script:400,700"||$theme_vars_content_bar_7_h1_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_1_h1_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_2_1_h1_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_3_1_h1_font=="Dancing+Script:400,700"||$theme_vars_header_bar_1_h2_font=="Dancing+Script:400,700"||$theme_vars_header_bar_2_h2_font=="Dancing+Script:400,700"||$theme_vars_header_bar_3_h2_font=="Dancing+Script:400,700"||$theme_vars_content_bar_1_h2_font=="Dancing+Script:400,700"||$theme_vars_content_bar_2_h2_font=="Dancing+Script:400,700"||$theme_vars_content_bar_3_h2_font=="Dancing+Script:400,700"||$theme_vars_content_bar_4_h2_font=="Dancing+Script:400,700"||$theme_vars_content_bar_5_h2_font=="Dancing+Script:400,700"||$theme_vars_content_bar_6_h2_font=="Dancing+Script:400,700"||$theme_vars_content_bar_7_h2_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_1_h2_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_2_1_h2_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_3_1_h2_font=="Dancing+Script:400,700"||$theme_vars_header_bar_1_h3_font=="Dancing+Script:400,700"||$theme_vars_header_bar_2_h3_font=="Dancing+Script:400,700"||$theme_vars_header_bar_3_h3_font=="Dancing+Script:400,700"||$theme_vars_content_bar_1_h3_font=="Dancing+Script:400,700"||$theme_vars_content_bar_2_h3_font=="Dancing+Script:400,700"||$theme_vars_content_bar_3_h3_font=="Dancing+Script:400,700"||$theme_vars_content_bar_4_h3_font=="Dancing+Script:400,700"||$theme_vars_content_bar_5_h3_font=="Dancing+Script:400,700"||$theme_vars_content_bar_6_h3_font=="Dancing+Script:400,700"||$theme_vars_content_bar_7_h3_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_1_h3_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_2_1_h3_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_3_1_h3_font=="Dancing+Script:400,700"||$theme_vars_header_bar_1_h4_font=="Dancing+Script:400,700"||$theme_vars_header_bar_2_h4_font=="Dancing+Script:400,700"||$theme_vars_header_bar_3_h4_font=="Dancing+Script:400,700"||$theme_vars_content_bar_1_h4_font=="Dancing+Script:400,700"||$theme_vars_content_bar_2_h4_font=="Dancing+Script:400,700"||$theme_vars_content_bar_3_h4_font=="Dancing+Script:400,700"||$theme_vars_content_bar_4_h4_font=="Dancing+Script:400,700"||$theme_vars_content_bar_5_h4_font=="Dancing+Script:400,700"||$theme_vars_content_bar_6_h4_font=="Dancing+Script:400,700"||$theme_vars_content_bar_7_h4_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_1_h4_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_2_1_h4_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_3_1_h4_font=="Dancing+Script:400,700"||$theme_vars_header_bar_1_p_font=="Dancing+Script:400,700"||$theme_vars_header_bar_2_p_font=="Dancing+Script:400,700"||$theme_vars_header_bar_3_p_font=="Dancing+Script:400,700"||$theme_vars_content_bar_1_p_font=="Dancing+Script:400,700"||$theme_vars_content_bar_2_p_font=="Dancing+Script:400,700"||$theme_vars_content_bar_3_p_font=="Dancing+Script:400,700"||$theme_vars_content_bar_4_p_font=="Dancing+Script:400,700"||$theme_vars_content_bar_5_p_font=="Dancing+Script:400,700"||$theme_vars_content_bar_6_p_font=="Dancing+Script:400,700"||$theme_vars_content_bar_7_p_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_1_p_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_2_1_p_font=="Dancing+Script:400,700"||$theme_vars_footer_bar_3_1_p_font=="Dancing+Script:400,700"||$theme_vars_h1_font=="Dancing+Script:400,700"||$theme_vars_h2_font=="Dancing+Script:400,700"||$theme_vars_h3_font=="Dancing+Script:400,700"||$theme_vars_h4_font=="Dancing+Script:400,700"||$theme_vars_p_font=="Dancing+Script:400,700"}{strip}
{/strip}Dancing+Script:400,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Amatic+SC:400,700"||$theme_vars_header_bar_2_h1_font=="Amatic+SC:400,700"||$theme_vars_header_bar_3_h1_font=="Amatic+SC:400,700"||$theme_vars_content_bar_1_h1_font=="Amatic+SC:400,700"||$theme_vars_content_bar_2_h1_font=="Amatic+SC:400,700"||$theme_vars_content_bar_3_h1_font=="Amatic+SC:400,700"||$theme_vars_content_bar_4_h1_font=="Amatic+SC:400,700"||$theme_vars_content_bar_5_h1_font=="Amatic+SC:400,700"||$theme_vars_content_bar_6_h1_font=="Amatic+SC:400,700"||$theme_vars_content_bar_7_h1_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_1_h1_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_2_1_h1_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_3_1_h1_font=="Amatic+SC:400,700"||$theme_vars_header_bar_1_h2_font=="Amatic+SC:400,700"||$theme_vars_header_bar_2_h2_font=="Amatic+SC:400,700"||$theme_vars_header_bar_3_h2_font=="Amatic+SC:400,700"||$theme_vars_content_bar_1_h2_font=="Amatic+SC:400,700"||$theme_vars_content_bar_2_h2_font=="Amatic+SC:400,700"||$theme_vars_content_bar_3_h2_font=="Amatic+SC:400,700"||$theme_vars_content_bar_4_h2_font=="Amatic+SC:400,700"||$theme_vars_content_bar_5_h2_font=="Amatic+SC:400,700"||$theme_vars_content_bar_6_h2_font=="Amatic+SC:400,700"||$theme_vars_content_bar_7_h2_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_1_h2_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_2_1_h2_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_3_1_h2_font=="Amatic+SC:400,700"||$theme_vars_header_bar_1_h3_font=="Amatic+SC:400,700"||$theme_vars_header_bar_2_h3_font=="Amatic+SC:400,700"||$theme_vars_header_bar_3_h3_font=="Amatic+SC:400,700"||$theme_vars_content_bar_1_h3_font=="Amatic+SC:400,700"||$theme_vars_content_bar_2_h3_font=="Amatic+SC:400,700"||$theme_vars_content_bar_3_h3_font=="Amatic+SC:400,700"||$theme_vars_content_bar_4_h3_font=="Amatic+SC:400,700"||$theme_vars_content_bar_5_h3_font=="Amatic+SC:400,700"||$theme_vars_content_bar_6_h3_font=="Amatic+SC:400,700"||$theme_vars_content_bar_7_h3_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_1_h3_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_2_1_h3_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_3_1_h3_font=="Amatic+SC:400,700"||$theme_vars_header_bar_1_h4_font=="Amatic+SC:400,700"||$theme_vars_header_bar_2_h4_font=="Amatic+SC:400,700"||$theme_vars_header_bar_3_h4_font=="Amatic+SC:400,700"||$theme_vars_content_bar_1_h4_font=="Amatic+SC:400,700"||$theme_vars_content_bar_2_h4_font=="Amatic+SC:400,700"||$theme_vars_content_bar_3_h4_font=="Amatic+SC:400,700"||$theme_vars_content_bar_4_h4_font=="Amatic+SC:400,700"||$theme_vars_content_bar_5_h4_font=="Amatic+SC:400,700"||$theme_vars_content_bar_6_h4_font=="Amatic+SC:400,700"||$theme_vars_content_bar_7_h4_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_1_h4_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_2_1_h4_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_3_1_h4_font=="Amatic+SC:400,700"||$theme_vars_header_bar_1_p_font=="Amatic+SC:400,700"||$theme_vars_header_bar_2_p_font=="Amatic+SC:400,700"||$theme_vars_header_bar_3_p_font=="Amatic+SC:400,700"||$theme_vars_content_bar_1_p_font=="Amatic+SC:400,700"||$theme_vars_content_bar_2_p_font=="Amatic+SC:400,700"||$theme_vars_content_bar_3_p_font=="Amatic+SC:400,700"||$theme_vars_content_bar_4_p_font=="Amatic+SC:400,700"||$theme_vars_content_bar_5_p_font=="Amatic+SC:400,700"||$theme_vars_content_bar_6_p_font=="Amatic+SC:400,700"||$theme_vars_content_bar_7_p_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_1_p_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_2_1_p_font=="Amatic+SC:400,700"||$theme_vars_footer_bar_3_1_p_font=="Amatic+SC:400,700"||$theme_vars_h1_font=="Amatic+SC:400,700"||$theme_vars_h2_font=="Amatic+SC:400,700"||$theme_vars_h3_font=="Amatic+SC:400,700"||$theme_vars_h4_font=="Amatic+SC:400,700"||$theme_vars_p_font=="Amatic+SC:400,700"}{strip}
{/strip}Amatic+SC:400,700%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Gloria+Hallelujah"||$theme_vars_header_bar_2_h1_font=="Gloria+Hallelujah"||$theme_vars_header_bar_3_h1_font=="Gloria+Hallelujah"||$theme_vars_content_bar_1_h1_font=="Gloria+Hallelujah"||$theme_vars_content_bar_2_h1_font=="Gloria+Hallelujah"||$theme_vars_content_bar_3_h1_font=="Gloria+Hallelujah"||$theme_vars_content_bar_4_h1_font=="Gloria+Hallelujah"||$theme_vars_content_bar_5_h1_font=="Gloria+Hallelujah"||$theme_vars_content_bar_6_h1_font=="Gloria+Hallelujah"||$theme_vars_content_bar_7_h1_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_1_h1_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_2_1_h1_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_3_1_h1_font=="Gloria+Hallelujah"||$theme_vars_header_bar_1_h2_font=="Gloria+Hallelujah"||$theme_vars_header_bar_2_h2_font=="Gloria+Hallelujah"||$theme_vars_header_bar_3_h2_font=="Gloria+Hallelujah"||$theme_vars_content_bar_1_h2_font=="Gloria+Hallelujah"||$theme_vars_content_bar_2_h2_font=="Gloria+Hallelujah"||$theme_vars_content_bar_3_h2_font=="Gloria+Hallelujah"||$theme_vars_content_bar_4_h2_font=="Gloria+Hallelujah"||$theme_vars_content_bar_5_h2_font=="Gloria+Hallelujah"||$theme_vars_content_bar_6_h2_font=="Gloria+Hallelujah"||$theme_vars_content_bar_7_h2_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_1_h2_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_2_1_h2_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_3_1_h2_font=="Gloria+Hallelujah"||$theme_vars_header_bar_1_h3_font=="Gloria+Hallelujah"||$theme_vars_header_bar_2_h3_font=="Gloria+Hallelujah"||$theme_vars_header_bar_3_h3_font=="Gloria+Hallelujah"||$theme_vars_content_bar_1_h3_font=="Gloria+Hallelujah"||$theme_vars_content_bar_2_h3_font=="Gloria+Hallelujah"||$theme_vars_content_bar_3_h3_font=="Gloria+Hallelujah"||$theme_vars_content_bar_4_h3_font=="Gloria+Hallelujah"||$theme_vars_content_bar_5_h3_font=="Gloria+Hallelujah"||$theme_vars_content_bar_6_h3_font=="Gloria+Hallelujah"||$theme_vars_content_bar_7_h3_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_1_h3_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_2_1_h3_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_3_1_h3_font=="Gloria+Hallelujah"||$theme_vars_header_bar_1_h4_font=="Gloria+Hallelujah"||$theme_vars_header_bar_2_h4_font=="Gloria+Hallelujah"||$theme_vars_header_bar_3_h4_font=="Gloria+Hallelujah"||$theme_vars_content_bar_1_h4_font=="Gloria+Hallelujah"||$theme_vars_content_bar_2_h4_font=="Gloria+Hallelujah"||$theme_vars_content_bar_3_h4_font=="Gloria+Hallelujah"||$theme_vars_content_bar_4_h4_font=="Gloria+Hallelujah"||$theme_vars_content_bar_5_h4_font=="Gloria+Hallelujah"||$theme_vars_content_bar_6_h4_font=="Gloria+Hallelujah"||$theme_vars_content_bar_7_h4_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_1_h4_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_2_1_h4_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_3_1_h4_font=="Gloria+Hallelujah"||$theme_vars_header_bar_1_p_font=="Gloria+Hallelujah"||$theme_vars_header_bar_2_p_font=="Gloria+Hallelujah"||$theme_vars_header_bar_3_p_font=="Gloria+Hallelujah"||$theme_vars_content_bar_1_p_font=="Gloria+Hallelujah"||$theme_vars_content_bar_2_p_font=="Gloria+Hallelujah"||$theme_vars_content_bar_3_p_font=="Gloria+Hallelujah"||$theme_vars_content_bar_4_p_font=="Gloria+Hallelujah"||$theme_vars_content_bar_5_p_font=="Gloria+Hallelujah"||$theme_vars_content_bar_6_p_font=="Gloria+Hallelujah"||$theme_vars_content_bar_7_p_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_1_p_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_2_1_p_font=="Gloria+Hallelujah"||$theme_vars_footer_bar_3_1_p_font=="Gloria+Hallelujah"||$theme_vars_h1_font=="Gloria+Hallelujah"||$theme_vars_h2_font=="Gloria+Hallelujah"||$theme_vars_h3_font=="Gloria+Hallelujah"||$theme_vars_h4_font=="Gloria+Hallelujah"||$theme_vars_p_font=="Gloria+Hallelujah"}{strip}
{/strip}Gloria+Hallelujah%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_2_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_3_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_1_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_2_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_3_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_4_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_5_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_6_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_7_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_1_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_2_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_3_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_1_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_2_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_3_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_4_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_5_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_6_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_7_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_1_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_2_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_3_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_1_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_2_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_3_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_4_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_5_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_6_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_7_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_1_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_2_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_3_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_1_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_2_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_3_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_4_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_5_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_6_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_7_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_1_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_1_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_2_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_header_bar_3_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_1_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_2_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_3_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_4_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_5_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_6_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_content_bar_7_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_1_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_2_1_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_footer_bar_3_1_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_h1_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_h2_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_h3_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_h4_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"||$theme_vars_p_font=="Josefin+Slab:400,300,300italic,400italic,700,700italic"}{strip}
{/strip}Josefin+Slab:400,300,300italic,400italic,700,700italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Architects+Daughter"||$theme_vars_header_bar_2_h1_font=="Architects+Daughter"||$theme_vars_header_bar_3_h1_font=="Architects+Daughter"||$theme_vars_content_bar_1_h1_font=="Architects+Daughter"||$theme_vars_content_bar_2_h1_font=="Architects+Daughter"||$theme_vars_content_bar_3_h1_font=="Architects+Daughter"||$theme_vars_content_bar_4_h1_font=="Architects+Daughter"||$theme_vars_content_bar_5_h1_font=="Architects+Daughter"||$theme_vars_content_bar_6_h1_font=="Architects+Daughter"||$theme_vars_content_bar_7_h1_font=="Architects+Daughter"||$theme_vars_footer_bar_1_h1_font=="Architects+Daughter"||$theme_vars_footer_bar_2_1_h1_font=="Architects+Daughter"||$theme_vars_footer_bar_3_1_h1_font=="Architects+Daughter"||$theme_vars_header_bar_1_h2_font=="Architects+Daughter"||$theme_vars_header_bar_2_h2_font=="Architects+Daughter"||$theme_vars_header_bar_3_h2_font=="Architects+Daughter"||$theme_vars_content_bar_1_h2_font=="Architects+Daughter"||$theme_vars_content_bar_2_h2_font=="Architects+Daughter"||$theme_vars_content_bar_3_h2_font=="Architects+Daughter"||$theme_vars_content_bar_4_h2_font=="Architects+Daughter"||$theme_vars_content_bar_5_h2_font=="Architects+Daughter"||$theme_vars_content_bar_6_h2_font=="Architects+Daughter"||$theme_vars_content_bar_7_h2_font=="Architects+Daughter"||$theme_vars_footer_bar_1_h2_font=="Architects+Daughter"||$theme_vars_footer_bar_2_1_h2_font=="Architects+Daughter"||$theme_vars_footer_bar_3_1_h2_font=="Architects+Daughter"||$theme_vars_header_bar_1_h3_font=="Architects+Daughter"||$theme_vars_header_bar_2_h3_font=="Architects+Daughter"||$theme_vars_header_bar_3_h3_font=="Architects+Daughter"||$theme_vars_content_bar_1_h3_font=="Architects+Daughter"||$theme_vars_content_bar_2_h3_font=="Architects+Daughter"||$theme_vars_content_bar_3_h3_font=="Architects+Daughter"||$theme_vars_content_bar_4_h3_font=="Architects+Daughter"||$theme_vars_content_bar_5_h3_font=="Architects+Daughter"||$theme_vars_content_bar_6_h3_font=="Architects+Daughter"||$theme_vars_content_bar_7_h3_font=="Architects+Daughter"||$theme_vars_footer_bar_1_h3_font=="Architects+Daughter"||$theme_vars_footer_bar_2_1_h3_font=="Architects+Daughter"||$theme_vars_footer_bar_3_1_h3_font=="Architects+Daughter"||$theme_vars_header_bar_1_h4_font=="Architects+Daughter"||$theme_vars_header_bar_2_h4_font=="Architects+Daughter"||$theme_vars_header_bar_3_h4_font=="Architects+Daughter"||$theme_vars_content_bar_1_h4_font=="Architects+Daughter"||$theme_vars_content_bar_2_h4_font=="Architects+Daughter"||$theme_vars_content_bar_3_h4_font=="Architects+Daughter"||$theme_vars_content_bar_4_h4_font=="Architects+Daughter"||$theme_vars_content_bar_5_h4_font=="Architects+Daughter"||$theme_vars_content_bar_6_h4_font=="Architects+Daughter"||$theme_vars_content_bar_7_h4_font=="Architects+Daughter"||$theme_vars_footer_bar_1_h4_font=="Architects+Daughter"||$theme_vars_footer_bar_2_1_h4_font=="Architects+Daughter"||$theme_vars_footer_bar_3_1_h4_font=="Architects+Daughter"||$theme_vars_header_bar_1_p_font=="Architects+Daughter"||$theme_vars_header_bar_2_p_font=="Architects+Daughter"||$theme_vars_header_bar_3_p_font=="Architects+Daughter"||$theme_vars_content_bar_1_p_font=="Architects+Daughter"||$theme_vars_content_bar_2_p_font=="Architects+Daughter"||$theme_vars_content_bar_3_p_font=="Architects+Daughter"||$theme_vars_content_bar_4_p_font=="Architects+Daughter"||$theme_vars_content_bar_5_p_font=="Architects+Daughter"||$theme_vars_content_bar_6_p_font=="Architects+Daughter"||$theme_vars_content_bar_7_p_font=="Architects+Daughter"||$theme_vars_footer_bar_1_p_font=="Architects+Daughter"||$theme_vars_footer_bar_2_1_p_font=="Architects+Daughter"||$theme_vars_footer_bar_3_1_p_font=="Architects+Daughter"||$theme_vars_h1_font=="Architects+Daughter"||$theme_vars_h2_font=="Architects+Daughter"||$theme_vars_h3_font=="Architects+Daughter"||$theme_vars_h4_font=="Architects+Daughter"||$theme_vars_p_font=="Architects+Daughter"}{strip}
{/strip}Architects+Daughter%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="Sanchez:400,400italic"||$theme_vars_header_bar_2_h1_font=="Sanchez:400,400italic"||$theme_vars_header_bar_3_h1_font=="Sanchez:400,400italic"||$theme_vars_content_bar_1_h1_font=="Sanchez:400,400italic"||$theme_vars_content_bar_2_h1_font=="Sanchez:400,400italic"||$theme_vars_content_bar_3_h1_font=="Sanchez:400,400italic"||$theme_vars_content_bar_4_h1_font=="Sanchez:400,400italic"||$theme_vars_content_bar_5_h1_font=="Sanchez:400,400italic"||$theme_vars_content_bar_6_h1_font=="Sanchez:400,400italic"||$theme_vars_content_bar_7_h1_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_1_h1_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_2_1_h1_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_3_1_h1_font=="Sanchez:400,400italic"||$theme_vars_header_bar_1_h2_font=="Sanchez:400,400italic"||$theme_vars_header_bar_2_h2_font=="Sanchez:400,400italic"||$theme_vars_header_bar_3_h2_font=="Sanchez:400,400italic"||$theme_vars_content_bar_1_h2_font=="Sanchez:400,400italic"||$theme_vars_content_bar_2_h2_font=="Sanchez:400,400italic"||$theme_vars_content_bar_3_h2_font=="Sanchez:400,400italic"||$theme_vars_content_bar_4_h2_font=="Sanchez:400,400italic"||$theme_vars_content_bar_5_h2_font=="Sanchez:400,400italic"||$theme_vars_content_bar_6_h2_font=="Sanchez:400,400italic"||$theme_vars_content_bar_7_h2_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_1_h2_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_2_1_h2_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_3_1_h2_font=="Sanchez:400,400italic"||$theme_vars_header_bar_1_h3_font=="Sanchez:400,400italic"||$theme_vars_header_bar_2_h3_font=="Sanchez:400,400italic"||$theme_vars_header_bar_3_h3_font=="Sanchez:400,400italic"||$theme_vars_content_bar_1_h3_font=="Sanchez:400,400italic"||$theme_vars_content_bar_2_h3_font=="Sanchez:400,400italic"||$theme_vars_content_bar_3_h3_font=="Sanchez:400,400italic"||$theme_vars_content_bar_4_h3_font=="Sanchez:400,400italic"||$theme_vars_content_bar_5_h3_font=="Sanchez:400,400italic"||$theme_vars_content_bar_6_h3_font=="Sanchez:400,400italic"||$theme_vars_content_bar_7_h3_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_1_h3_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_2_1_h3_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_3_1_h3_font=="Sanchez:400,400italic"||$theme_vars_header_bar_1_h4_font=="Sanchez:400,400italic"||$theme_vars_header_bar_2_h4_font=="Sanchez:400,400italic"||$theme_vars_header_bar_3_h4_font=="Sanchez:400,400italic"||$theme_vars_content_bar_1_h4_font=="Sanchez:400,400italic"||$theme_vars_content_bar_2_h4_font=="Sanchez:400,400italic"||$theme_vars_content_bar_3_h4_font=="Sanchez:400,400italic"||$theme_vars_content_bar_4_h4_font=="Sanchez:400,400italic"||$theme_vars_content_bar_5_h4_font=="Sanchez:400,400italic"||$theme_vars_content_bar_6_h4_font=="Sanchez:400,400italic"||$theme_vars_content_bar_7_h4_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_1_h4_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_2_1_h4_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_3_1_h4_font=="Sanchez:400,400italic"||$theme_vars_header_bar_1_p_font=="Sanchez:400,400italic"||$theme_vars_header_bar_2_p_font=="Sanchez:400,400italic"||$theme_vars_header_bar_3_p_font=="Sanchez:400,400italic"||$theme_vars_content_bar_1_p_font=="Sanchez:400,400italic"||$theme_vars_content_bar_2_p_font=="Sanchez:400,400italic"||$theme_vars_content_bar_3_p_font=="Sanchez:400,400italic"||$theme_vars_content_bar_4_p_font=="Sanchez:400,400italic"||$theme_vars_content_bar_5_p_font=="Sanchez:400,400italic"||$theme_vars_content_bar_6_p_font=="Sanchez:400,400italic"||$theme_vars_content_bar_7_p_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_1_p_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_2_1_p_font=="Sanchez:400,400italic"||$theme_vars_footer_bar_3_1_p_font=="Sanchez:400,400italic"||$theme_vars_h1_font=="Sanchez:400,400italic"||$theme_vars_h2_font=="Sanchez:400,400italic"||$theme_vars_h3_font=="Sanchez:400,400italic"||$theme_vars_h4_font=="Sanchez:400,400italic"||$theme_vars_p_font=="Sanchez:400,400italic"}{strip}
{/strip}Sanchez:400,400italic%7C{/if}{strip}
{/strip}{if $theme_vars_header_bar_1_h1_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_2_h1_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_3_h1_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_1_h1_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_2_h1_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_3_h1_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_4_h1_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_5_h1_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_6_h1_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_7_h1_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_1_h1_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_2_1_h1_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_3_1_h1_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_1_h2_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_2_h2_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_3_h2_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_1_h2_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_2_h2_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_3_h2_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_4_h2_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_5_h2_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_6_h2_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_7_h2_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_1_h2_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_2_1_h2_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_3_1_h2_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_1_h3_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_2_h3_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_3_h3_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_1_h3_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_2_h3_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_3_h3_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_4_h3_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_5_h3_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_6_h3_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_7_h3_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_1_h3_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_2_1_h3_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_3_1_h3_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_1_h4_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_2_h4_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_3_h4_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_1_h4_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_2_h4_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_3_h4_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_4_h4_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_5_h4_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_6_h4_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_7_h4_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_1_h4_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_2_1_h4_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_3_1_h4_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_1_p_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_2_p_font=="ABeeZee:400,400italic"||$theme_vars_header_bar_3_p_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_1_p_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_2_p_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_3_p_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_4_p_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_5_p_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_6_p_font=="ABeeZee:400,400italic"||$theme_vars_content_bar_7_p_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_1_p_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_2_1_p_font=="ABeeZee:400,400italic"||$theme_vars_footer_bar_3_1_p_font=="ABeeZee:400,400italic"||$theme_vars_h1_font=="ABeeZee:400,400italic"||$theme_vars_h2_font=="ABeeZee:400,400italic"||$theme_vars_h3_font=="ABeeZee:400,400italic"||$theme_vars_h4_font=="ABeeZee:400,400italic"||$theme_vars_p_font=="ABeeZee:400,400italic"}{strip}
{/strip}ABeeZee:400,400italic{/if}' rel='stylesheet' type='text/css'>
{/if}
<style type="text/css" >
.hr {literal}{{/literal}
	{if $theme_vars_hr_color && $theme_vars_hr_color!="" && $theme_vars_hr_thickness && $theme_vars_hr_thickness !=""}
	border-bottom: {$theme_vars_hr_thickness} solid {$theme_vars_hr_color};
	{/if}
{literal}}{/literal}
.inverted .hr {literal}{{/literal}
	{if $theme_vars_hr_color_inverted && $theme_vars_hr_color!="" && $theme_vars_hr_thickness && $theme_vars_hr_thickness !=""}
	border-bottom: {$theme_vars_hr_thickness} solid {$theme_vars_hr_color_inverted};
	{/if}
{literal}}{/literal}
h1 {literal}{{/literal}
	{include file=includes/font-family.tpl font=$theme_vars_h1_font}
	font-size:{$theme_vars_h1_size};
	font-weight:{$theme_vars_h1_weight};
	color:{$theme_vars_h1_color}
{literal}}{/literal}
#header_bar_1 h1 {literal}{{/literal}
	{if $theme_vars_header_bar_1_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_1_h1_font}
	{/if}
	{if $theme_vars_header_bar_1_h1_size}
		font-size:{$theme_vars_header_bar_1_h1_size};
	{/if}
	{if $theme_vars_header_bar_1_h1_weight}
		font-weight:{$theme_vars_header_bar_1_h1_weight};
	{/if}
	{if $theme_vars_header_bar_1_h1_color!="Inherit"&&$theme_vars_header_bar_1_h1_color!=""}
		color:{$theme_vars_header_bar_1_h1_color};
	{/if}
{literal}}{/literal}
#header_bar_2 h1 {literal}{{/literal}
	{if $theme_vars_header_bar_2_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_2_h1_font}
	{/if}
	{if $theme_vars_header_bar_2_h1_size}
		font-size:{$theme_vars_header_bar_2_h1_size};
	{/if}
	{if $theme_vars_header_bar_2_h1_weight}
		font-weight:{$theme_vars_header_bar_2_h1_weight};
	{/if}
	{if $theme_vars_header_bar_2_h1_color!="Inherit"&&$theme_vars_header_bar_2_h1_color!=""}
		color:{$theme_vars_header_bar_2_h1_color};
	{/if}
{literal}}{/literal}
#header_bar_3 h1 {literal}{{/literal}
	{if $theme_vars_header_bar_3_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_3_h1_font}
	{/if}
	{if $theme_vars_header_bar_3_h1_size}
		font-size:{$theme_vars_header_bar_3_h1_size};
	{/if}
	{if $theme_vars_header_bar_3_h1_weight}
		font-weight:{$theme_vars_header_bar_3_h1_weight};
	{/if}
	{if $theme_vars_header_bar_3_h1_color!="Inherit"&&$theme_vars_header_bar_3_h1_color!=""}
		color:{$theme_vars_header_bar_3_h1_color};
	{/if}
{literal}}{/literal}
#content_bar_1 h1 {literal}{{/literal}
	{if $theme_vars_content_bar_1_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_1_h1_font}
	{/if}
	{if $theme_vars_content_bar_1_h1_size}
		font-size:{$theme_vars_content_bar_1_h1_size};
	{/if}
	{if $theme_vars_content_bar_1_h1_weight}
		font-weight:{$theme_vars_content_bar_1_h1_weight};
	{/if}
	{if $theme_vars_content_bar_1_h1_color!="Inherit"&&$theme_vars_content_bar_1_h1_color!=""}
		color:{$theme_vars_content_bar_1_h1_color};
	{/if}
{literal}}{/literal}
#content_bar_2 h1 {literal}{{/literal}
	{if $theme_vars_content_bar_2_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_2_h1_font}
	{/if}
	{if $theme_vars_content_bar_2_h1_size}
		font-size:{$theme_vars_content_bar_2_h1_size};
	{/if}
	{if $theme_vars_content_bar_2_h1_weight}
		font-weight:{$theme_vars_content_bar_2_h1_weight};
	{/if}
	{if $theme_vars_content_bar_2_h1_color!="Inherit"&&$theme_vars_content_bar_2_h1_color!=""}
		color:{$theme_vars_content_bar_2_h1_color};
	{/if}
{literal}}{/literal}
#content_bar_3 h1 {literal}{{/literal}
	{if $theme_vars_content_bar_3_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_3_h1_font}
	{/if}
	{if $theme_vars_content_bar_3_h1_size}
		font-size:{$theme_vars_content_bar_3_h1_size};
	{/if}
	{if $theme_vars_content_bar_3_h1_weight}
		font-weight:{$theme_vars_content_bar_3_h1_weight};
	{/if}
	{if $theme_vars_content_bar_3_h1_color!="Inherit"&&$theme_vars_content_bar_3_h1_color!=""}
		color:{$theme_vars_content_bar_3_h1_color};
	{/if}
{literal}}{/literal}
#content_bar_4 h1 {literal}{{/literal}
	{if $theme_vars_content_bar_4_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_4_h1_font}
	{/if}
	{if $theme_vars_content_bar_4_h1_size}
		font-size:{$theme_vars_content_bar_4_h1_size};
	{/if}
	{if $theme_vars_content_bar_4_h1_weight}
		font-weight:{$theme_vars_content_bar_4_h1_weight};
	{/if}
	{if $theme_vars_content_bar_4_h1_color!="Inherit"&&$theme_vars_content_bar_4_h1_color!=""}
		color:{$theme_vars_content_bar_4_h1_color};
	{/if}
{literal}}{/literal}
#content_bar_5 h1 {literal}{{/literal}
	{if $theme_vars_content_bar_5_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_5_h1_font}
	{/if}
	{if $theme_vars_content_bar_5_h1_size}
		font-size:{$theme_vars_content_bar_5_h1_size};
	{/if}
	{if $theme_vars_content_bar_5_h1_weight}
		font-weight:{$theme_vars_content_bar_5_h1_weight};
	{/if}
	{if $theme_vars_content_bar_5_h1_color!="Inherit"&&$theme_vars_content_bar_5_h1_color!=""}
		color:{$theme_vars_content_bar_5_h1_color};
	{/if}
{literal}}{/literal}
#content_bar_6 h1 {literal}{{/literal}
	{if $theme_vars_content_bar_6_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_6_h1_font}
	{/if}
	{if $theme_vars_content_bar_6_h1_size}
		font-size:{$theme_vars_content_bar_6_h1_size};
	{/if}
	{if $theme_vars_content_bar_6_h1_weight}
		font-weight:{$theme_vars_content_bar_6_h1_weight};
	{/if}
	{if $theme_vars_content_bar_6_h1_color!="Inherit"&&$theme_vars_content_bar_6_h1_color!=""}
		color:{$theme_vars_content_bar_6_h1_color};
	{/if}
{literal}}{/literal}
#content_bar_7 h1 {literal}{{/literal}
	{if $theme_vars_content_bar_7_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_7_h1_font}
	{/if}
	{if $theme_vars_content_bar_7_h1_size}
		font-size:{$theme_vars_content_bar_7_h1_size};
	{/if}
	{if $theme_vars_content_bar_7_h1_weight}
		font-weight:{$theme_vars_content_bar_7_h1_weight};
	{/if}
	{if $theme_vars_content_bar_7_h1_color!="Inherit"&&$theme_vars_content_bar_7_h1_color!=""}
		color:{$theme_vars_content_bar_7_h1_color};
	{/if}
{literal}}{/literal}
#footer_bar_1 h1 {literal}{{/literal}
	{if $theme_vars_footer_bar_1_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_1_h1_font}
	{/if}
	{if $theme_vars_footer_bar_1_h1_size}
		font-size:{$theme_vars_footer_bar_4_h1_size};
	{/if}
	{if $theme_vars_footer_bar_1_h1_weight}
		font-weight:{$theme_vars_footer_bar_1_h1_weight};
	{/if}
	{if $theme_vars_footer_bar_1_h1_color!="Inherit"&&$theme_vars_footer_bar_1_h1_color!=""}
		color:{$theme_vars_footer_bar_1_h1_color}
	{/if}
{literal}}{/literal}
#footer_bar_2 h1 {literal}{{/literal}
	{if $theme_vars_footer_bar_2_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_2_h1_font}
	{/if}
	{if $theme_vars_footer_bar_2_h1_size}
		font-size:{$theme_vars_footer_bar_2_h1_size};
	{/if}
	{if $theme_vars_footer_bar_2_h1_weight}
		font-weight:{$theme_vars_footer_bar_2_h1_weight};
	{/if}
	{if $theme_vars_footer_bar_2_h1_color!="Inherit"&&$theme_vars_footer_bar_2_h1_color!=""}
		color:{$theme_vars_footer_bar_2_h1_color}
	{/if}
{literal}}{/literal}
#footer_bar_3 h1 {literal}{{/literal}
	{if $theme_vars_footer_bar_3_h1_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_3_h1_font}
	{/if}
	{if $theme_vars_footer_bar_3_h1_size}
		font-size:{$theme_vars_footer_bar_3_h1_size};
	{/if}
	{if $theme_vars_footer_bar_3_h1_weight}
		font-weight:{$theme_vars_footer_bar_3_h1_weight};
	{/if}
	{if $theme_vars_footer_bar_3_h1_color!="Inherit"&&$theme_vars_footer_bar_3_h1_color!=""}
		color:{$theme_vars_footer_bar_3_h1_color}
	{/if}
{literal}}{/literal}


h2 {literal}{{/literal}
	{include file=includes/font-family.tpl font=$theme_vars_h2_font}
	font-size:{$theme_vars_h2_size};
	font-weight:{$theme_vars_h2_weight};
	color:{$theme_vars_h2_color}
{literal}}{/literal}
#header_bar_1 h2 {literal}{{/literal}
	{if $theme_vars_header_bar_1_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_1_h2_font}
	{/if}
	{if $theme_vars_header_bar_1_h2_size}
		font-size:{$theme_vars_header_bar_1_h2_size};
	{/if}
	{if $theme_vars_header_bar_1_h2_weight}
		font-weight:{$theme_vars_header_bar_1_h2_weight};
	{/if}
	{if $theme_vars_header_bar_1_h2_color!="Inherit"&&$theme_vars_header_bar_1_h2_color!=""}
		color:{$theme_vars_header_bar_1_h2_color}
	{/if}
{literal}}{/literal}
#header_bar_2 h2 {literal}{{/literal}
	{if $theme_vars_header_bar_2_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_2_h2_font}
	{/if}
	{if $theme_vars_header_bar_2_h2_size}
		font-size:{$theme_vars_header_bar_2_h2_size};
	{/if}
	{if $theme_vars_header_bar_2_h2_weight}
		font-weight:{$theme_vars_header_bar_2_h2_weight};
	{/if}
	{if $theme_vars_header_bar_2_h2_color!="Inherit"&&$theme_vars_header_bar_2_h2_color!=""}
		color:{$theme_vars_header_bar_2_h2_color}
	{/if}
{literal}}{/literal}
#header_bar_3 h2 {literal}{{/literal}
	{if $theme_vars_header_bar_3_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_3_h2_font}
	{/if}
	{if $theme_vars_header_bar_3_h2_size}
		font-size:{$theme_vars_header_bar_3_h2_size};
	{/if}
	{if $theme_vars_header_bar_3_h2_weight}
		font-weight:{$theme_vars_header_bar_3_h2_weight};
	{/if}
	{if $theme_vars_header_bar_3_h2_color!="Inherit"&&$theme_vars_header_bar_3_h2_color!=""}
		color:{$theme_vars_header_bar_3_h2_color}
	{/if}
{literal}}{/literal}
#content_bar_1 h2 {literal}{{/literal}
	{if $theme_vars_content_bar_1_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_1_h2_font}
	{/if}
	{if $theme_vars_content_bar_1_h2_size}
		font-size:{$theme_vars_content_bar_1_h2_size};
	{/if}
	{if $theme_vars_content_bar_1_h2_weight}
		font-weight:{$theme_vars_content_bar_1_h2_weight};
	{/if}
	{if $theme_vars_content_bar_1_h2_color!="Inherit"&&$theme_vars_content_bar_1_h2_color!=""}
		color:{$theme_vars_content_bar_1_h2_color}
	{/if}
{literal}}{/literal}
#content_bar_2 h2 {literal}{{/literal}
	{if $theme_vars_content_bar_2_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_2_h2_font}
	{/if}
	{if $theme_vars_content_bar_2_h2_size}
		font-size:{$theme_vars_content_bar_2_h2_size};
	{/if}
	{if $theme_vars_content_bar_2_h2_weight}
		font-weight:{$theme_vars_content_bar_2_h2_weight};
	{/if}
	{if $theme_vars_content_bar_2_h2_color!="Inherit"&&$theme_vars_content_bar_2_h2_color!=""}
		color:{$theme_vars_content_bar_2_h2_color}
	{/if}
{literal}}{/literal}
#content_bar_3 h2 {literal}{{/literal}
	{if $theme_vars_content_bar_3_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_3_h2_font}
	{/if}
	{if $theme_vars_content_bar_3_h2_size}
		font-size:{$theme_vars_content_bar_3_h2_size};
	{/if}
	{if $theme_vars_content_bar_3_h2_weight}
		font-weight:{$theme_vars_content_bar_3_h2_weight};
	{/if}
	{if $theme_vars_content_bar_3_h2_color!="Inherit"&&$theme_vars_content_bar_3_h2_color!=""}
		color:{$theme_vars_content_bar_3_h2_color}
	{/if}
{literal}}{/literal}
#content_bar_4 h2 {literal}{{/literal}
	{if $theme_vars_content_bar_4_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_4_h2_font}
	{/if}
	{if $theme_vars_content_bar_4_h2_size}
		font-size:{$theme_vars_content_bar_4_h2_size};
	{/if}
	{if $theme_vars_content_bar_4_h2_weight}
		font-weight:{$theme_vars_content_bar_4_h2_weight};
	{/if}
	{if $theme_vars_content_bar_4_h2_color!="Inherit"&&$theme_vars_content_bar_4_h2_color!=""}
		color:{$theme_vars_content_bar_4_h2_color}
	{/if}
{literal}}{/literal}
#content_bar_5 h2 {literal}{{/literal}
	{if $theme_vars_content_bar_5_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_5_h2_font}
	{/if}
	{if $theme_vars_content_bar_5_h2_size}
		font-size:{$theme_vars_content_bar_5_h2_size};
	{/if}
	{if $theme_vars_content_bar_5_h2_weight}
		font-weight:{$theme_vars_content_bar_5_h2_weight};
	{/if}
	{if $theme_vars_content_bar_5_h2_color!="Inherit"&&$theme_vars_content_bar_5_h2_color!=""}
		color:{$theme_vars_content_bar_5_h2_color}
	{/if}
{literal}}{/literal}
#content_bar_6 h2 {literal}{{/literal}
	{if $theme_vars_content_bar_6_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_6_h2_font}
	{/if}
	{if $theme_vars_content_bar_6_h2_size}
		font-size:{$theme_vars_content_bar_6_h2_size};
	{/if}
	{if $theme_vars_content_bar_6_h2_weight}
		font-weight:{$theme_vars_content_bar_6_h2_weight};
	{/if}
	{if $theme_vars_content_bar_6_h2_color!="Inherit"&&$theme_vars_content_bar_6_h2_color!=""}
		color:{$theme_vars_content_bar_6_h2_color}
	{/if}
{literal}}{/literal}
#content_bar_7 h2 {literal}{{/literal}
	{if $theme_vars_content_bar_7_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_7_h2_font}
	{/if}
	{if $theme_vars_content_bar_7_h2_size}
		font-size:{$theme_vars_content_bar_7_h2_size};
	{/if}
	{if $theme_vars_content_bar_7_h2_weight}
		font-weight:{$theme_vars_content_bar_7_h2_weight};
	{/if}
	{if $theme_vars_content_bar_7_h2_color!="Inherit"&&$theme_vars_content_bar_7_h2_color!=""}
		color:{$theme_vars_content_bar_7_h2_color}
	{/if}
{literal}}{/literal}
#footer_bar_1 h2 {literal}{{/literal}
	{if $theme_vars_footer_bar_1_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_1_h2_font}
	{/if}
	{if $theme_vars_footer_bar_1_h2_size}
		font-size:{$theme_vars_footer_bar_1_h2_size};
	{/if}
	{if $theme_vars_footer_bar_1_h2_weight}
		font-weight:{$theme_vars_footer_bar_1_h2_weight};
	{/if}
	{if $theme_vars_footer_bar_1_h2_color!="Inherit"&&$theme_vars_footer_bar_1_h2_color!=""}
		color:{$theme_vars_footer_bar_1_h2_color}
	{/if}
{literal}}{/literal}
#footer_bar_2 h2 {literal}{{/literal}
	{if $theme_vars_footer_bar_2_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_2_h2_font}
	{/if}
	{if $theme_vars_footer_bar_2_h2_size}
		font-size:{$theme_vars_footer_bar_2_h2_size};
	{/if}
	{if $theme_vars_footer_bar_2_h2_weight}
		font-weight:{$theme_vars_footer_bar_2_h2_weight};
	{/if}
	{if $theme_vars_footer_bar_2_h2_color!="Inherit"&&$theme_vars_footer_bar_2_h2_color!=""}
		color:{$theme_vars_footer_bar_2_h2_color}
	{/if}
{literal}}{/literal}
#footer_bar_3 h2 {literal}{{/literal}
	{if $theme_vars_footer_bar_3_h2_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_3_h2_font}
	{/if}
	{if $theme_vars_footer_bar_3_h2_size}
		font-size:{$theme_vars_footer_bar_3_h2_size};
	{/if}
	{if $theme_vars_footer_bar_3_h2_weight}
		font-weight:{$theme_vars_footer_bar_3_h2_weight};
	{/if}
	{if $theme_vars_footer_bar_3_h2_color!="Inherit"&&$theme_vars_footer_bar_3_h2_color!=""}
		color:{$theme_vars_footer_bar_3_h2_color}
	{/if}
{literal}}{/literal}

h3 {literal}{{/literal}
	{include file=includes/font-family.tpl font=$theme_vars_h3_font}
	font-size:{$theme_vars_h3_size};
	font-weight:{$theme_vars_h3_weight};
	color:{$theme_vars_h3_color}
{literal}}{/literal}
#header_bar_1 h3 {literal}{{/literal}
	{if $theme_vars_header_bar_1_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_1_h3_font}
	{/if}
	{if $theme_vars_header_bar_1_h3_size}
		font-size:{$theme_vars_header_bar_1_h3_size};
	{/if}
	{if $theme_vars_header_bar_1_h3_weight}
		font-weight:{$theme_vars_header_bar_1_h3_weight};
	{/if}
	{if $theme_vars_header_bar_1_h3_color!="Inherit"&&$theme_vars_header_bar_1_h3_color!=""}
		color:{$theme_vars_header_bar_1_h3_color}
	{/if}
{literal}}{/literal}
#header_bar_2 h3 {literal}{{/literal}
	{if $theme_vars_header_bar_2_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_2_h3_font}
	{/if}
	{if $theme_vars_header_bar_2_h3_size}
		font-size:{$theme_vars_header_bar_2_h3_size};
	{/if}
	{if $theme_vars_header_bar_2_h3_weight}
		font-weight:{$theme_vars_header_bar_2_h3_weight};
	{/if}
	{if $theme_vars_header_bar_2_h3_color!="Inherit"&&$theme_vars_header_bar_2_h3_color!=""}
		color:{$theme_vars_header_bar_2_h3_color}
	{/if}
{literal}}{/literal}
#header_bar_3 h3 {literal}{{/literal}
	{if $theme_vars_header_bar_3_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_3_h3_font}
	{/if}
	{if $theme_vars_header_bar_3_h3_size}
		font-size:{$theme_vars_header_bar_3_h3_size};
	{/if}
	{if $theme_vars_header_bar_3_h3_weight}
		font-weight:{$theme_vars_header_bar_3_h3_weight};
	{/if}
	{if $theme_vars_header_bar_3_h3_color!="Inherit"&&$theme_vars_header_bar_3_h3_color!=""}
		color:{$theme_vars_header_bar_3_h3_color}
	{/if}
{literal}}{/literal}
#content_bar_1 h3 {literal}{{/literal}
	{if $theme_vars_content_bar_1_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_1_h3_font}
	{/if}
	{if $theme_vars_content_bar_1_h3_size}
		font-size:{$theme_vars_content_bar_1_h3_size};
	{/if}
	{if $theme_vars_content_bar_1_h3_weight}
		font-weight:{$theme_vars_content_bar_1_h3_weight};
	{/if}
	{if $theme_vars_content_bar_1_h3_color!="Inherit"&&$theme_vars_content_bar_1_h3_color!=""}
		color:{$theme_vars_content_bar_1_h3_color}
	{/if}
{literal}}{/literal}
#content_bar_2 h3 {literal}{{/literal}
	{if $theme_vars_content_bar_2_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_2_h3_font}
	{/if}
	{if $theme_vars_content_bar_2_h3_size}
		font-size:{$theme_vars_content_bar_2_h3_size};
	{/if}
	{if $theme_vars_content_bar_2_h3_weight}
		font-weight:{$theme_vars_content_bar_2_h3_weight};
	{/if}
	{if $theme_vars_content_bar_2_h3_color!="Inherit"&&$theme_vars_content_bar_2_h3_color!=""}
		color:{$theme_vars_content_bar_2_h3_color}
	{/if}
{literal}}{/literal}
#content_bar_3 h3 {literal}{{/literal}
	{if $theme_vars_content_bar_3_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_3_h3_font}
	{/if}
	{if $theme_vars_content_bar_3_h3_size}
		font-size:{$theme_vars_content_bar_3_h3_size};
	{/if}
	{if $theme_vars_content_bar_3_h3_weight}
		font-weight:{$theme_vars_content_bar_3_h3_weight};
	{/if}
	{if $theme_vars_content_bar_3_h3_color!="Inherit"&&$theme_vars_content_bar_3_h3_color!=""}
		color:{$theme_vars_content_bar_3_h3_color}
	{/if}
{literal}}{/literal}
#content_bar_4 h3 {literal}{{/literal}
	{if $theme_vars_content_bar_4_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_4_h3_font}
	{/if}
	{if $theme_vars_content_bar_4_h3_size}
		font-size:{$theme_vars_content_bar_4_h3_size};
	{/if}
	{if $theme_vars_content_bar_4_h3_weight}
		font-weight:{$theme_vars_content_bar_4_h3_weight};
	{/if}
	{if $theme_vars_content_bar_4_h3_color!="Inherit"&&$theme_vars_content_bar_4_h3_color!=""}
		color:{$theme_vars_content_bar_4_h3_color}
	{/if}
{literal}}{/literal}
#content_bar_5 h3 {literal}{{/literal}
	{if $theme_vars_content_bar_5_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_5_h3_font}
	{/if}
	{if $theme_vars_content_bar_5_h3_size}
		font-size:{$theme_vars_content_bar_5_h3_size};
	{/if}
	{if $theme_vars_content_bar_5_h3_weight}
		font-weight:{$theme_vars_content_bar_5_h3_weight};
	{/if}
	{if $theme_vars_content_bar_5_h3_color!="Inherit"&&$theme_vars_content_bar_5_h3_color!=""}
		color:{$theme_vars_content_bar_5_h3_color}
	{/if}
{literal}}{/literal}
#content_bar_6 h3 {literal}{{/literal}
	{if $theme_vars_content_bar_6_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_6_h3_font}
	{/if}
	{if $theme_vars_content_bar_6_h3_size}
		font-size:{$theme_vars_content_bar_6_h3_size};
	{/if}
	{if $theme_vars_content_bar_6_h3_weight}
		font-weight:{$theme_vars_content_bar_6_h3_weight};
	{/if}
	{if $theme_vars_content_bar_6_h3_color!="Inherit"&&$theme_vars_content_bar_6_h3_color!=""}
		color:{$theme_vars_content_bar_6_h3_color}
	{/if}
{literal}}{/literal}
#content_bar_7 h3 {literal}{{/literal}
	{if $theme_vars_content_bar_7_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_7_h3_font}
	{/if}
	{if $theme_vars_content_bar_7_h3_size}
		font-size:{$theme_vars_content_bar_7_h3_size};
	{/if}
	{if $theme_vars_content_bar_7_h3_weight}
		font-weight:{$theme_vars_content_bar_7_h3_weight};
	{/if}
	{if $theme_vars_content_bar_7_h3_color!="Inherit"&&$theme_vars_content_bar_7_h3_color!=""}
		color:{$theme_vars_content_bar_7_h3_color}
	{/if}
{literal}}{/literal}
#footer_bar_1 h3 {literal}{{/literal}
	{if $theme_vars_footer_bar_1_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_1_h3_font}
	{/if}
	{if $theme_vars_footer_bar_1_h3_size}
		font-size:{$theme_vars_footer_bar_1_h3_size};
	{/if}
	{if $theme_vars_footer_bar_1_h3_weight}
		font-weight:{$theme_vars_footer_bar_1_h3_weight};
	{/if}
	{if $theme_vars_footer_bar_1_h3_color!="Inherit"&&$theme_vars_footer_bar_1_h3_color!=""}
		color:{$theme_vars_footer_bar_1_h3_color}
	{/if}
{literal}}{/literal}
#footer_bar_2 h3 {literal}{{/literal}
	{if $theme_vars_footer_bar_2_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_2_h3_font}
	{/if}
	{if $theme_vars_footer_bar_2_h3_size}
		font-size:{$theme_vars_footer_bar_2_h3_size};
	{/if}
	{if $theme_vars_footer_bar_2_h3_weight}
		font-weight:{$theme_vars_footer_bar_2_h3_weight};
	{/if}
	{if $theme_vars_footer_bar_2_h3_color!="Inherit"&&$theme_vars_footer_bar_2_h3_color!=""}
		color:{$theme_vars_footer_bar_2_h3_color}
	{/if}
{literal}}{/literal}
#footer_bar_3 h3 {literal}{{/literal}
	{if $theme_vars_footer_bar_3_h3_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_3_h3_font}
	{/if}
	{if $theme_vars_footer_bar_3_h3_size}
		font-size:{$theme_vars_footer_bar_3_h3_size};
	{/if}
	{if $theme_vars_footer_bar_3_h3_weight}
		font-weight:{$theme_vars_footer_bar_3_h3_weight};
	{/if}
	{if $theme_vars_footer_bar_3_h3_color!="Inherit"&&$theme_vars_footer_bar_3_h3_color!=""}
		color:{$theme_vars_footer_bar_3_h3_color}
	{/if}
{literal}}{/literal}


h4 {literal}{{/literal}
	{include file=includes/font-family.tpl font=$theme_vars_h4_font}
	font-size:{$theme_vars_h4_size};
	font-weight:{$theme_vars_h4_weight};
	color:{$theme_vars_h4_color}
{literal}}{/literal}
#header_bar_1 h4 {literal}{{/literal}
	{if $theme_vars_header_bar_1_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_1_h4_font}
	{/if}
	{if $theme_vars_header_bar_1_h4_size}
		font-size:{$theme_vars_header_bar_1_h4_size};
	{/if}
	{if $theme_vars_header_bar_1_h4_weight}
		font-weight:{$theme_vars_header_bar_1_h4_weight};
	{/if}
	{if $theme_vars_header_bar_1_h4_color!="Inherit"&&$theme_vars_header_bar_1_h4_color!=""}
		color:{$theme_vars_header_bar_1_h4_color}
	{/if}
{literal}}{/literal}
#header_bar_2 h4 {literal}{{/literal}
	{if $theme_vars_header_bar_2_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_2_h4_font}
	{/if}
	{if $theme_vars_header_bar_2_h4_size}
		font-size:{$theme_vars_header_bar_2_h4_size};
	{/if}
	{if $theme_vars_header_bar_2_h4_weight}
		font-weight:{$theme_vars_header_bar_2_h4_weight};
	{/if}
	{if $theme_vars_header_bar_2_h4_color!="Inherit"&&$theme_vars_header_bar_2_h4_color!=""}
		color:{$theme_vars_header_bar_2_h4_color}
	{/if}
{literal}}{/literal}
#header_bar_3 h4 {literal}{{/literal}
	{if $theme_vars_header_bar_3_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_3_h4_font}
	{/if}
	{if $theme_vars_header_bar_3_h4_size}
		font-size:{$theme_vars_header_bar_3_h4_size};
	{/if}
	{if $theme_vars_header_bar_3_h4_weight}
		font-weight:{$theme_vars_header_bar_3_h4_weight};
	{/if}
	{if $theme_vars_header_bar_3_h4_color!="Inherit"&&$theme_vars_header_bar_3_h4_color!=""}
		color:{$theme_vars_header_bar_3_h4_color}
	{/if}
{literal}}{/literal}
#content_bar_1 h4 {literal}{{/literal}
	{if $theme_vars_content_bar_1_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_1_h4_font}
	{/if}
	{if $theme_vars_content_bar_1_h4_size}
		font-size:{$theme_vars_content_bar_1_h4_size};
	{/if}
	{if $theme_vars_content_bar_1_h4_weight}
		font-weight:{$theme_vars_content_bar_1_h4_weight};
	{/if}
	{if $theme_vars_content_bar_1_h4_color!="Inherit"&&$theme_vars_content_bar_1_h4_color!=""}
		color:{$theme_vars_content_bar_1_h4_color}
	{/if}
{literal}}{/literal}
#content_bar_2 h4 {literal}{{/literal}
	{if $theme_vars_content_bar_2_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_2_h4_font}
	{/if}
	{if $theme_vars_content_bar_2_h4_size}
		font-size:{$theme_vars_content_bar_2_h4_size};
	{/if}
	{if $theme_vars_content_bar_2_h4_weight}
		font-weight:{$theme_vars_content_bar_2_h4_weight};
	{/if}
	{if $theme_vars_content_bar_2_h4_color!="Inherit"&&$theme_vars_content_bar_2_h4_color!=""}
		color:{$theme_vars_content_bar_2_h4_color}
	{/if}
{literal}}{/literal}
#content_bar_3 h4 {literal}{{/literal}
	{if $theme_vars_content_bar_3_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_3_h4_font}
	{/if}
	{if $theme_vars_content_bar_3_h4_size}
		font-size:{$theme_vars_content_bar_3_h4_size};
	{/if}
	{if $theme_vars_content_bar_3_h4_weight}
		font-weight:{$theme_vars_content_bar_3_h4_weight};
	{/if}
	{if $theme_vars_content_bar_3_h4_color!="Inherit"&&$theme_vars_content_bar_3_h4_color!=""}
		color:{$theme_vars_content_bar_3_h4_color}
	{/if}
{literal}}{/literal}
#content_bar_4 h4 {literal}{{/literal}
	{if $theme_vars_content_bar_4_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_4_h4_font}
	{/if}
	{if $theme_vars_content_bar_4_h4_size}
		font-size:{$theme_vars_content_bar_4_h4_size};
	{/if}
	{if $theme_vars_content_bar_4_h4_weight}
		font-weight:{$theme_vars_content_bar_4_h4_weight};
	{/if}
	{if $theme_vars_content_bar_4_h4_color!="Inherit"&&$theme_vars_content_bar_4_h4_color!=""}
		color:{$theme_vars_content_bar_4_h4_color}
	{/if}
{literal}}{/literal}
#content_bar_5 h4 {literal}{{/literal}
	{if $theme_vars_content_bar_5_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_5_h4_font}
	{/if}
	{if $theme_vars_content_bar_5_h4_size}
		font-size:{$theme_vars_content_bar_5_h4_size};
	{/if}
	{if $theme_vars_content_bar_5_h4_weight}
		font-weight:{$theme_vars_content_bar_5_h4_weight};
	{/if}
	{if $theme_vars_content_bar_5_h4_color!="Inherit"&&$theme_vars_content_bar_5_h4_color!=""}
		color:{$theme_vars_content_bar_5_h4_color}
	{/if}
{literal}}{/literal}
#content_bar_6 h4 {literal}{{/literal}
	{if $theme_vars_content_bar_6_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_6_h4_font}
	{/if}
	{if $theme_vars_content_bar_6_h4_size}
		font-size:{$theme_vars_content_bar_6_h4_size};
	{/if}
	{if $theme_vars_content_bar_6_h4_weight}
		font-weight:{$theme_vars_content_bar_6_h4_weight};
	{/if}
	{if $theme_vars_content_bar_6_h4_color!="Inherit"&&$theme_vars_content_bar_6_h4_color!=""}
		color:{$theme_vars_content_bar_6_h4_color}
	{/if}
{literal}}{/literal}
#content_bar_7 h4 {literal}{{/literal}
	{if $theme_vars_content_bar_7_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_7_h4_font}
	{/if}
	{if $theme_vars_content_bar_7_h4_size}
		font-size:{$theme_vars_content_bar_7_h4_size};
	{/if}
	{if $theme_vars_content_bar_7_h4_weight}
		font-weight:{$theme_vars_content_bar_7_h4_weight};
	{/if}
	{if $theme_vars_content_bar_7_h4_color!="Inherit"&&$theme_vars_content_bar_7_h4_color!=""}
		color:{$theme_vars_content_bar_7_h4_color}
	{/if}
{literal}}{/literal}
#footer_bar_1 h4 {literal}{{/literal}
	{if $theme_vars_footer_bar_1_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_1_h4_font}
	{/if}
	{if $theme_vars_footer_bar_1_h4_size}
		font-size:{$theme_vars_footer_bar_1_h4_size};
	{/if}
	{if $theme_vars_footer_bar_1_h4_weight}
		font-weight:{$theme_vars_footer_bar_1_h4_weight};
	{/if}
	{if $theme_vars_footer_bar_1_h4_color!="Inherit"&&$theme_vars_footer_bar_1_h4_color!=""}
		color:{$theme_vars_footer_bar_1_h4_color}
	{/if}
{literal}}{/literal}
#footer_bar_2 h4 {literal}{{/literal}
	{if $theme_vars_footer_bar_2_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_2_h4_font}
	{/if}
	{if $theme_vars_footer_bar_2_h4_size}
		font-size:{$theme_vars_footer_bar_2_h4_size};
	{/if}
	{if $theme_vars_footer_bar_2_h4_weight}
		font-weight:{$theme_vars_footer_bar_2_h4_weight};
	{/if}
	{if $theme_vars_footer_bar_2_h4_color!="Inherit"&&$theme_vars_footer_bar_2_h4_color!=""}
		color:{$theme_vars_footer_bar_2_h4_color}
	{/if}
{literal}}{/literal}
#footer_bar_3 h4 {literal}{{/literal}
	{if $theme_vars_footer_bar_3_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_3_h4_font}
	{/if}
	{if $theme_vars_footer_bar_3_h4_size}
		font-size:{$theme_vars_footer_bar_3_h4_size};
	{/if}
	{if $theme_vars_footer_bar_3_h4_weight}
		font-weight:{$theme_vars_footer_bar_3_h4_weight};
	{/if}
	{if $theme_vars_footer_bar_3_h4_color!="Inherit"&&$theme_vars_footer_bar_3_h4_color!=""}
		color:{$theme_vars_footer_bar_3_h4_color}
	{/if}
{literal}}{/literal}


p,td,div,th,label,li,p a,li a {literal}{{/literal}
	{include file=includes/font-family.tpl font=$theme_vars_p_font}
	font-size:{$theme_vars_p_size};
	font-weight:{$theme_vars_p_weight};
	color:{$theme_vars_p_color}
{literal}}{/literal}
#header_bar_1 p,#header_bar_1 td,#header_bar_1 div,#header_bar_1 th,#header_bar_1 label,#header_bar_1 li,#header_bar_1 p a,#header_bar_1 li a {literal}{{/literal}
	{if $theme_vars_header_bar_1_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_1_p_font}
	{/if}
	{if $theme_vars_header_bar_1_p_size}
		font-size:{$theme_vars_header_bar_1_p_size};
	{/if}
	{if $theme_vars_header_bar_1_p_weight}
		font-weight:{$theme_vars_header_bar_1_p_weight};
	{/if}
	{if $theme_vars_header_bar_1_p_color!="Inherit"&&$theme_vars_header_bar_1_p_color!=""}
		color:{$theme_vars_header_bar_1_p_color}
	{/if}
{literal}}{/literal}
#header_bar_2 p,#header_bar_2 td,#header_bar_2 div,#header_bar_2 th,#header_bar_2 label,#header_bar_2 li,#header_bar_2 p a,#header_bar_2 li a {literal}{{/literal}
	{if $theme_vars_header_bar_2_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_2_p_font}
	{/if}
	{if $theme_vars_header_bar_2_p_size}
		font-size:{$theme_vars_header_bar_2_p_size};
	{/if}
	{if $theme_vars_header_bar_2_p_weight}
		font-weight:{$theme_vars_header_bar_2_p_weight};
	{/if}
	{if $theme_vars_header_bar_2_p_color!="Inherit"&&$theme_vars_header_bar_2_p_color!=""}
		color:{$theme_vars_header_bar_2_p_color}
	{/if}
{literal}}{/literal}
#header_bar_3 p,#header_bar_3 td,#header_bar_3 div,#header_bar_3 th,#header_bar_3 label,#header_bar_3 li,#header_bar_3 p a,#header_bar_3 li a {literal}{{/literal}
	{if $theme_vars_header_bar_3_h4_font}
		{include file=includes/font-family.tpl font=$theme_vars_header_bar_3_p_font}
	{/if}
	{if $theme_vars_header_bar_3_p_size}
		font-size:{$theme_vars_header_bar_3_p_size};
	{/if}
	{if $theme_vars_header_bar_3_p_weight}
		font-weight:{$theme_vars_header_bar_3_p_weight};
	{/if}
	{if $theme_vars_header_bar_3_p_color!="Inherit"&&$theme_vars_header_bar_3_p_color!=""}
		color:{$theme_vars_header_bar_3_p_color}
	{/if}
{literal}}{/literal}
#content_bar_1 p,#content_bar_1 td,#content_bar_1 div,#content_bar_1 th,#content_bar_1 label,#content_bar_1 li,#content_bar_1 p a,#content_bar_1 li a{literal}{{/literal}
	{if $theme_vars_content_bar_1_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_1_p_font}
	{/if}
	{if $theme_vars_content_bar_1_p_size}
		font-size:{$theme_vars_content_bar_1_p_size};
	{/if}
	{if $theme_vars_content_bar_1_p_weight}
		font-weight:{$theme_vars_content_bar_1_p_weight};
	{/if}
	{if $theme_vars_content_bar_1_p_color!="Inherit"&&$theme_vars_content_bar_1_p_color!=""}
		color:{$theme_vars_content_bar_1_p_color}
	{/if}
{literal}}{/literal}
#content_bar_2 p,#content_bar_2 td,#content_bar_2 div,#content_bar_2 th,#content_bar_2 label,#content_bar_2 li,#content_bar_2 p a,#content_bar_2 li a {literal}{{/literal}
	{if $theme_vars_content_bar_2_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_2_p_font}
	{/if}
	{if $theme_vars_content_bar_2_p_size}
		font-size:{$theme_vars_content_bar_2_p_size};
	{/if}
	{if $theme_vars_content_bar_2_p_weight}
		font-weight:{$theme_vars_content_bar_2_p_weight};
	{/if}
	{if $theme_vars_content_bar_2_p_color!="Inherit"&&$theme_vars_content_bar_2_p_color!=""}
		color:{$theme_vars_content_bar_2_p_color}
	{/if}
{literal}}{/literal}
#content_bar_3 p,#content_bar_3 td,#content_bar_3 div,#content_bar_3 th,#content_bar_3 label,#content_bar_3 li,#content_bar_3 p a,#content_bar_3 li a {literal}{{/literal}
	{if $theme_vars_content_bar_3_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_3_p_font}
	{/if}
	{if $theme_vars_content_bar_3_p_size}
		font-size:{$theme_vars_content_bar_3_p_size};
	{/if}
	{if $theme_vars_content_bar_3_p_weight}
		font-weight:{$theme_vars_content_bar_3_p_weight};
	{/if}
	{if $theme_vars_content_bar_3_p_color!="Inherit"&&$theme_vars_content_bar_3_p_color!=""}
		color:{$theme_vars_content_bar_3_p_color}
	{/if}
{literal}}{/literal}
#content_bar_4 p,#content_bar_4 td,#content_bar_4 div,#content_bar_4 th,#content_bar_4 label,#content_bar_4 li,#content_bar_4 p a,#content_bar_4 li a {literal}{{/literal}
	{if $theme_vars_content_bar_4_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_4_p_font}
	{/if}
	{if $theme_vars_content_bar_4_p_size}
		font-size:{$theme_vars_content_bar_4_p_size};
	{/if}
	{if $theme_vars_content_bar_4_p_weight}
		font-weight:{$theme_vars_content_bar_4_p_weight};
	{/if}
	{if $theme_vars_content_bar_4_p_color!="Inherit"&&$theme_vars_content_bar_4_p_color!=""}
		color:{$theme_vars_content_bar_4_p_color}
	{/if}
{literal}}{/literal}
#content_bar_5 p,#content_bar_5 td,#content_bar_5 div,#content_bar_5 th,#content_bar_5 label,#content_bar_5 li,#content_bar_5 p a,#content_bar_5 li a {literal}{{/literal}
	{if $theme_vars_content_bar_5_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_5_p_font}
	{/if}
	{if $theme_vars_content_bar_5_p_size}
		font-size:{$theme_vars_content_bar_5_p_size};
	{/if}
	{if $theme_vars_content_bar_5_p_weight}
		font-weight:{$theme_vars_content_bar_5_p_weight};
	{/if}
	{if $theme_vars_content_bar_5_p_color!="Inherit"&&$theme_vars_content_bar_5_p_color!=""}
		color:{$theme_vars_content_bar_5_p_color}
	{/if}
{literal}}{/literal}
#content_bar_6 p,#content_bar_6 td,#content_bar_6 div,#content_bar_6 th,#content_bar_6 label,#content_bar_6 li,#content_bar_6 p a,#content_bar_6 li a {literal}{{/literal}
	{if $theme_vars_content_bar_6_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_6_p_font}
	{/if}
	{if $theme_vars_content_bar_6_p_size}
		font-size:{$theme_vars_content_bar_6_p_size};
	{/if}
	{if $theme_vars_content_bar_6_p_weight}
		font-weight:{$theme_vars_content_bar_6_p_weight};
	{/if}
	{if $theme_vars_content_bar_6_p_color!="Inherit"&&$theme_vars_content_bar_6_p_color!=""}
		color:{$theme_vars_content_bar_6_p_color}
	{/if}
{literal}}{/literal}
#content_bar_7 p,#content_bar_7 td,#content_bar_7 div,#content_bar_7 th,#content_bar_7 label,#content_bar_7 li,#content_bar_7 p a,#content_bar_7 li a {literal}{{/literal}
	{if $theme_vars_content_bar_7_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_content_bar_7_p_font}
	{/if}
	{if $theme_vars_content_bar_7_p_size}
		font-size:{$theme_vars_content_bar_7_p_size};
	{/if}
	{if $theme_vars_content_bar_7_p_weight}
		font-weight:{$theme_vars_content_bar_7_p_weight};
	{/if}
	{if $theme_vars_content_bar_7_p_color!="Inherit"&&$theme_vars_content_bar_7_p_color!=""}
		color:{$theme_vars_content_bar_7_p_color}
	{/if}
{literal}}{/literal}
#footer_bar_1 p,#footer_bar_1 td,#footer_bar_1 div,#footer_bar_1 th,#footer_bar_1 label,#footer_bar_1 li,#footer_bar_1 p a,#footer_bar_1 li a {literal}{{/literal}
	{if $theme_vars_footer_bar_1_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_1_p_font}
	{/if}
	{if $theme_vars_footer_bar_1_p_size}
		font-size:{$theme_vars_footer_bar_1_p_size};
	{/if}
	{if $theme_vars_footer_bar_1_p_weight}
		font-weight:{$theme_vars_footer_bar_1_p_weight};
	{/if}
	{if $theme_vars_footer_bar_1_p_color!="Inherit"&&$theme_vars_footer_bar_1_p_color!=""}
		color:{$theme_vars_footer_bar_1_p_color}
	{/if}
{literal}}{/literal}
#footer_bar_2 p,#footer_bar_2 td,#footer_bar_2 div,#footer_bar_2 th,#footer_bar_2 label,#footer_bar_2 li,#footer_bar_2 p a,#footer_bar_2 li a {literal}{{/literal}
	{if $theme_vars_footer_bar_2_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_2_p_font}
	{/if}
	{if $theme_vars_footer_bar_2_p_size}
		font-size:{$theme_vars_footer_bar_2_p_size};
	{/if}
	{if $theme_vars_footer_bar_2_p_weight}
		font-weight:{$theme_vars_footer_bar_2_p_weight};
	{/if}
	{if $theme_vars_footer_bar_2_p_color!="Inherit"&&$theme_vars_footer_bar_2_p_color!=""}
		color:{$theme_vars_footer_bar_2_p_color}
	{/if}
{literal}}{/literal}
#footer_bar_3 p,#footer_bar_3 td,#footer_bar_3 div,#footer_bar_3 th,#footer_bar_3 label,#footer_bar_3 li,#footer_bar_3 p a,#footer_bar_3 li a {literal}{{/literal}
	{if $theme_vars_footer_bar_3_p_font}
		{include file=includes/font-family.tpl font=$theme_vars_footer_bar_3_p_font}
	{/if}
	{if $theme_vars_footer_bar_3_p_size}
		font-size:{$theme_vars_footer_bar_3_p_size};
	{/if}
	{if $theme_vars_footer_bar_3_p_weight}
		font-weight:{$theme_vars_footer_bar_3_p_weight};
	{/if}
	{if $theme_vars_footer_bar_3_p_color!="Inherit"&&$theme_vars_footer_bar_3_p_color!=""}
		color:{$theme_vars_footer_bar_3_p_color}
	{/if}
{literal}}{/literal}

.nav li ul,.nav > ul > li:hover > a,.nav > ul > li.hover-preview > a {literal}{{/literal}
	background-color:{$theme_vars_p_color_inverted};
	color:{$theme_vars_p_color};
{literal}}{/literal}

#header_bar_1 .nav li ul,#header_bar_1 .nav > ul > li.hover-preview > a {literal}{{/literal}
	{if $theme_vars_header_bar_1_p_color_inverted!="Inherit"&&$theme_vars_header_bar_1_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_header_bar_1_p_color!="Inherit"&&$theme_vars_header_bar_1_p_color!=""}		
		color:{$theme_vars_header_bar_1_p_color};
	{/if}
{literal}}{/literal}
#header_bar_2 .nav > ul > li:hover > a,#header_bar_2 .nav > ul > li.hover-preview > a {literal}{{/literal}
	{if $theme_vars_header_bar_2_p_color_inverted!="Inherit"&&$theme_vars_header_bar_2_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_header_bar_2_p_color!="Inherit"&&$theme_vars_header_bar_2_p_color!=""}		
		color:{$theme_vars_header_bar_2_p_color};
	{/if}
{literal}}{/literal}
#header_bar_3 .nav > ul > li:hover > a,#header_bar_3 .nav > ul > li.hover-preview > a {literal}{{/literal}
	{if $theme_vars_header_bar_3_p_color_inverted!="Inherit"&&$theme_vars_header_bar_3_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_header_bar_3_p_color!="Inherit"&&$theme_vars_header_bar_3_p_color!=""}		
		color:{$theme_vars_header_bar_3_p_color};
	{/if}
{literal}}{/literal}
#content_bar_1 .nav > ul > li:hover > a,#content_bar_1 .nav > ul > li:hover > a{literal}{{/literal}
	{if $theme_vars_content_bar_1_p_color_inverted!="Inherit"&&$theme_vars_content_bar_1_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_content_bar_1_p_color!="Inherit"&&$theme_vars_content_bar_1_p_color!=""}		
		color:{$theme_vars_content_bar_1_p_color};
	{/if}
{literal}}{/literal}
#content_bar_2 .nav > ul > li:hover > a,#content_bar_2 .nav > ul > li:hover > a {literal}{{/literal}
	{if $theme_vars_content_bar_2_p_color_inverted!="Inherit"&&$theme_vars_content_bar_2_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_content_bar_2_p_color!="Inherit"&&$theme_vars_content_bar_2_p_color!=""}		
		color:{$theme_vars_content_bar_2_p_color};
	{/if}
{literal}}{/literal}
#content_bar_3 .nav > ul > li:hover > a,#content_bar_3 .nav > ul > li:hover > a {literal}{{/literal}
	{if $theme_vars_content_bar_3_p_color_inverted!="Inherit"&&$theme_vars_content_bar_3_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_content_bar_3_p_color!="Inherit"&&$theme_vars_content_bar_3_p_color!=""}		
		color:{$theme_vars_content_bar_3_p_color};
	{/if}
{literal}}{/literal}
#content_bar_4 .nav > ul > li:hover > a,#content_bar_4 .nav > ul > li:hover > a {literal}{{/literal}
	{if $theme_vars_content_bar_4_p_color_inverted!="Inherit"&&$theme_vars_content_bar_4_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_content_bar_4_p_color!="Inherit"&&$theme_vars_content_bar_4_p_color!=""}		
		color:{$theme_vars_content_bar_4_p_color};
	{/if}
{literal}}{/literal}
#content_bar_5 .nav > ul > li:hover > a,#content_bar_5 .nav > ul > li:hover > a {literal}{{/literal}
	{if $theme_vars_content_bar_5_p_color_inverted!="Inherit"&&$theme_vars_content_bar_5_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_content_bar_5_p_color!="Inherit"&&$theme_vars_content_bar_5_p_color!=""}		
		color:{$theme_vars_content_bar_5_p_color};
	{/if}
{literal}}{/literal}
#footer_bar_1 .nav > ul > li:hover > a,#footer_bar_1 .nav > ul > li:hover > a {literal}{{/literal}
	{if $theme_vars_footer_bar_1_p_color_inverted!="Inherit"&&$theme_vars_footer_bar_1_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_footer_bar_1_p_color!="Inherit"&&$theme_vars_footer_bar_1_p_color!=""}		
		color:{$theme_vars_footer_bar_1_p_color};
	{/if}
{literal}}{/literal}
#footer_bar_2 .nav > ul > li:hover > a,#footer_bar_2 .nav > ul > li:hover > a {literal}{{/literal}
	{if $theme_vars_footer_bar_2_p_color_inverted!="Inherit"&&$theme_vars_footer_bar_2_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_footer_bar_2_p_color!="Inherit"&&$theme_vars_footer_bar_2_p_color!=""}		
		color:{$theme_vars_footer_bar_2_p_color};
	{/if}
{literal}}{/literal}
#footer_bar_3 .nav > ul > li:hover > a,#footer_bar_3 .nav > ul > li:hover > a {literal}{{/literal}
	{if $theme_vars_footer_bar_3_p_color_inverted!="Inherit"&&$theme_vars_footer_bar_3_p_color_inverted!=""}
		background-color:{$theme_vars_p_color_inverted};
	{/if}
	{if $theme_vars_footer_bar_3_p_color!="Inherit"&&$theme_vars_footer_bar_3_p_color!=""}		
		color:{$theme_vars_footer_bar_3_p_color};
	{/if}
{literal}}{/literal}

.download-event:after  {literal}{{/literal}
	color:{$theme_vars_p_color};
{literal}}{/literal}
.nav li ul li a  {literal}{{/literal}
	color:{$theme_vars_p_color};
{literal}}{/literal}

#header_bar_1 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_header_bar_1_p_color!=""&&$theme_vars_header_bar_1_p_color!="Inherit"}		
		color:{$theme_vars_header_bar_1_p_color};
	{/if}
{literal}}{/literal}
#header_bar_2 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_header_bar_2_p_color!=""&&$theme_vars_header_bar_2_p_color!="Inherit"}		
		color:{$theme_vars_header_bar_2_p_color};
	{/if}
{literal}}{/literal}
#header_bar_3 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_header_bar_3_p_color!=""&&$theme_vars_header_bar_3_p_color!="Inherit"}		
		color:{$theme_vars_header_bar_3_p_color};
	{/if}
{literal}}{/literal}
#content_bar_1 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_content_bar_1_p_color!=""&&$theme_vars_content_bar_1_p_color!="Inherit"}		
		color:{$theme_vars_content_bar_1_p_color};
	{/if}
{literal}}{/literal}
#content_bar_2 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_content_bar_2_p_color!=""&&$theme_vars_content_bar_2_p_color!="Inherit"}		
		color:{$theme_vars_content_bar_2_p_color};
	{/if}
{literal}}{/literal}
#content_bar_3 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_content_bar_3_p_color!=""&&$theme_vars_content_bar_3_p_color!="Inherit"}		
		color:{$theme_vars_content_bar_3_p_color};
	{/if}
{literal}}{/literal}
#content_bar_4 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_content_bar_4_p_color!=""&&$theme_vars_content_bar_4_p_color!="Inherit"}		
		color:{$theme_vars_content_bar_4_p_color};
	{/if}
{literal}}{/literal}
#content_bar_5 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_content_bar_5_p_color!=""&&$theme_vars_content_bar_5_p_color!="Inherit"}		
		color:{$theme_vars_content_bar_5_p_color};
	{/if}
{literal}}{/literal}
#content_bar_6 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_content_bar_6_p_color!=""&&$theme_vars_content_bar_6_p_color!="Inherit"}		
		color:{$theme_vars_content_bar_6_p_color};
	{/if}
{literal}}{/literal}
#content_bar_7 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_content_bar_6_p_color!=""&&$theme_vars_content_bar_6_p_color!="Inherit"}		
		color:{$theme_vars_content_bar_6_p_color};
	{/if}
{literal}}{/literal}
#footer_bar_1 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_footer_bar_1_p_color!=""&&$theme_vars_footer_bar_1_p_color!="Inherit"}		
		color:{$theme_vars_footer_bar_1_p_color};
	{/if}
{literal}}{/literal}
#footer_bar_2 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_footer_bar_2_p_color!=""&&$theme_vars_footer_bar_2_p_color!="Inherit"}		
		color:{$theme_vars_footer_bar_2_p_color};
	{/if}
{literal}}{/literal}
#footer_bar_3 .nav li ul li a {literal}{{/literal}
	{if $theme_vars_footer_bar_3_p_color!=""&&$theme_vars_footer_bar_3_p_color!="Inherit"}		
		color:{$theme_vars_footer_bar_3_p_color};
	{/if}
{literal}}{/literal}

p.button a,p.Button_Small a,p.Button_Medium a,p.Button_Large a,button,input[type="submit"],input[type="reset"],input[type="button"]  {literal}{{/literal}
	color:{$theme_vars_button_color};
	background:{$theme_vars_button_bg_color};
{literal}}{/literal}
.expand-box-title:before {literal}{{/literal}
	color:{$theme_vars_button_bg_color};
{literal}}{/literal}
#header_bar_1 p.button a,#header_bar_1 p.Button_Small a,#header_bar_1 p.Button_Medium a,#header_bar_1 p.Button_Large a,#header_bar_1 button,#header_bar_1 input[type="submit"],#header_bar_1 input[type="reset"],#header_bar_1 input[type="button"] {literal}{{/literal}
	{if $theme_vars_header_bar_1_button_color!=""&&$theme_vars_header_bar_1_button_color!="Inherit"}		
		color:{$theme_vars_header_bar_1_button_color};
	{/if}
	{if $theme_vars_header_bar_1_button_bg_color!=""&&$theme_vars_header_bar_1_button_bg_color!="Inherit"}		
		background:{$theme_vars_header_bar_1_button_bg_color};
	{/if}
		
{literal}}{/literal}
#header_bar_1 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_header_bar_1_button_bg_color!=""&&$theme_vars_header_bar_1_button_bg_color!="Inherit"}		
		color:{$theme_vars_header_bar_1_button_bg_color};
	{/if}
{literal}}{/literal}
#header_bar_2 p.button a,#header_bar_2 p.Button_Small a,#header_bar_2 p.Button_Medium a,#header_bar_2 p.Button_Large a,#header_bar_2 button,#header_bar_2 input[type="submit"],#header_bar_2 input[type="reset"],#header_bar_2 input[type="button"] {literal}{{/literal}
	{if $theme_vars_header_bar_2_button_color!=""&&$theme_vars_header_bar_2_button_color!="Inherit"}		
		color:{$theme_vars_header_bar_2_button_color};
	{/if}
	{if $theme_vars_header_bar_2_button_bg_color!=""&&$theme_vars_header_bar_2_button_bg_color!="Inherit"}		
		background:{$theme_vars_header_bar_2_button_bg_color};
	{/if}
	
{literal}}{/literal}
#header_bar_2 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_header_bar_2_button_bg_color!=""&&$theme_vars_header_bar_2_button_bg_color!="Inherit"}		
		color:{$theme_vars_header_bar_2_button_bg_color};
	{/if}
{literal}}{/literal}
#header_bar_3 p.button a,#header_bar_3 p.Button_Small a,#header_bar_3 p.Button_Medium a,#header_bar_3 p.Button_Large a,#header_bar_3 button,#header_bar_3 input[type="submit"],#header_bar_3 input[type="reset"],#header_bar_3 input[type="button"] {literal}{{/literal}
	{if $theme_vars_header_bar_3_button_color!=""&&$theme_vars_header_bar_3_button_color!="Inherit"}		
		color:{$theme_vars_header_bar_3_button_color};
	{/if}
	{if $theme_vars_header_bar_3_button_bg_color!=""&&$theme_vars_header_bar_3_button_bg_color!="Inherit"}		
		background:{$theme_vars_header_bar_3_button_bg_color};
	{/if}
	
{literal}}{/literal}
#header_bar_3 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_header_bar_3_button_bg_color!=""&&$theme_vars_header_bar_3_button_bg_color!="Inherit"}		
		color:{$theme_vars_header_bar_3_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_1 p.button a,#content_bar_1 p.Button_Small a,#content_bar_1 p.Button_Medium a,#content_bar_1 p.Button_Large a,#content_bar_1 button,#content_bar_1 input[type="submit"],#content_bar_1 input[type="reset"],#content_bar_1 input[type="button"] {literal}{{/literal}
	{if $theme_vars_content_bar_1_button_color!=""&&$theme_vars_content_bar_1_button_color!="Inherit"}		
		color:{$theme_vars_content_bar_1_button_color};
	{/if}
	{if $theme_vars_content_bar_1_button_bg_color!=""&&$theme_vars_content_bar_1_button_bg_color!="Inherit"}		
		background:{$theme_vars_content_bar_1_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_1 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_content_bar_1_button_bg_color!=""&&$theme_vars_content_bar_1_button_bg_color!="Inherit"}		
		color:{$theme_vars_content_bar_1_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_2 p.button a,#content_bar_2 p.Button_Small a,#content_bar_2 p.Button_Medium a,#content_bar_2 p.Button_Large a,#content_bar_2 button,#content_bar_2 input[type="submit"],#content_bar_2 input[type="reset"],#content_bar_2 input[type="button"] {literal}{{/literal}
	{if $theme_vars_content_bar_2_button_color!=""&&$theme_vars_content_bar_2_button_color!="Inherit"}		
		color:{$theme_vars_content_bar_2_button_color};
	{/if}
	{if $theme_vars_content_bar_2_button_bg_color!=""&&$theme_vars_content_bar_2_button_bg_color!="Inherit"}		
		background:{$theme_vars_content_bar_2_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_2 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_content_bar_2_button_bg_color!=""&&$theme_vars_content_bar_2_button_bg_color!="Inherit"}		
		color:{$theme_vars_content_bar_2_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_3 p.button a,#content_bar_3 p.Button_Small a,#content_bar_3 p.Button_Medium a,#content_bar_3 p.Button_Large a,#content_bar_3 button,#content_bar_3 input[type="submit"],#content_bar_3 input[type="reset"],#content_bar_3 input[type="button"] {literal}{{/literal}
	{if $theme_vars_content_bar_3_button_color!=""&&$theme_vars_content_bar_3_button_color!="Inherit"}		
		color:{$theme_vars_content_bar_3_button_color};
	{/if}
	{if $theme_vars_content_bar_3_button_bg_color!=""&&$theme_vars_content_bar_3_button_bg_color!="Inherit"}		
		background:{$theme_vars_content_bar_3_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_3 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_content_bar_3_button_bg_color!=""&&$theme_vars_content_bar_3_button_bg_color!="Inherit"}		
		color:{$theme_vars_content_bar_3_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_4 p.button a,#content_bar_4 p.Button_Small a,#content_bar_4 p.Button_Medium a,#content_bar_4 p.Button_Large a,#content_bar_4 button,#content_bar_4 input[type="submit"],#content_bar_4 input[type="reset"],#content_bar_4 input[type="button"] {literal}{{/literal}
	{if $theme_vars_content_bar_4_button_color!=""&&$theme_vars_content_bar_4_button_color!="Inherit"}		
		color:{$theme_vars_content_bar_4_button_color};
	{/if}
	{if $theme_vars_content_bar_4_button_bg_color!=""&&$theme_vars_content_bar_4_button_bg_color!="Inherit"}		
		background:{$theme_vars_content_bar_4_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_4 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_content_bar_4_button_bg_color!=""&&$theme_vars_content_bar_4_button_bg_color!="Inherit"}		
		color:{$theme_vars_content_bar_4_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_5 p.button a,#content_bar_5 p.Button_Small a,#content_bar_5 p.Button_Medium a,#content_bar_5 p.Button_Large a,#content_bar_5 button,#content_bar_5 input[type="submit"],#content_bar_5 input[type="reset"],#content_bar_5 input[type="button"] {literal}{{/literal}
	{if $theme_vars_content_bar_5_button_color!=""&&$theme_vars_content_bar_5_button_color!="Inherit"}		
		color:{$theme_vars_content_bar_5_button_color};
	{/if}
	{if $theme_vars_content_bar_5_button_bg_color!=""&&$theme_vars_content_bar_5_button_bg_color!="Inherit"}		
		background:{$theme_vars_content_bar_5_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_5 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_content_bar_5_button_bg_color!=""&&$theme_vars_content_bar_5_button_bg_color!="Inherit"}		
		color:{$theme_vars_content_bar_5_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_6 p.button a,#content_bar_6 p.Button_Small a,#content_bar_6 p.Button_Medium a,#content_bar_6 p.Button_Large a,#content_bar_6 button,#content_bar_6 input[type="submit"],#content_bar_6 input[type="reset"],#content_bar_6 input[type="button"] {literal}{{/literal}
	{if $theme_vars_content_bar_6_button_color!=""&&$theme_vars_content_bar_6_button_color!="Inherit"}		
		color:{$theme_vars_content_bar_6_button_color};
	{/if}
	{if $theme_vars_content_bar_6_button_bg_color!=""&&$theme_vars_content_bar_6_button_bg_color!="Inherit"}		
		background:{$theme_vars_content_bar_6_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_6 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_content_bar_6_button_bg_color!=""&&$theme_vars_content_bar_6_button_bg_color!="Inherit"}		
		color:{$theme_vars_content_bar_6_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_7 p.button a,#content_bar_7 p.Button_Small a,#content_bar_7 p.Button_Medium a,#content_bar_7 p.Button_Large a,#content_bar_7 button,#content_bar_7 input[type="submit"],#content_bar_7 input[type="reset"],#content_bar_7 input[type="button"] {literal}{{/literal}
	{if $theme_vars_content_bar_7_button_color!=""&&$theme_vars_content_bar_7_button_color!="Inherit"}		
		color:{$theme_vars_content_bar_7_button_color};
	{/if}
	{if $theme_vars_content_bar_7_button_bg_color!=""&&$theme_vars_content_bar_7_button_bg_color!="Inherit"}		
		background:{$theme_vars_content_bar_7_button_bg_color};
	{/if}
{literal}}{/literal}
#content_bar_7 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_content_bar_7_button_bg_color!=""&&$theme_vars_content_bar_7_button_bg_color!="Inherit"}		
		color:{$theme_vars_content_bar_7_button_bg_color};
	{/if}
{literal}}{/literal}
#footer_bar_1 p.button a,#footer_bar_1 p.Button_Small a,#footer_bar_1 p.Button_Medium a,#footer_bar_1 p.Button_Large a,#footer_bar_1 button,#footer_bar_1 input[type="submit"],#footer_bar_1 input[type="reset"],#footer_bar_1 input[type="button"] {literal}{{/literal}
	{if $theme_vars_footer_bar_1_button_color!=""&&$theme_vars_footer_bar_1_button_color!="Inherit"}		
		color:{$theme_vars_footer_bar_1_button_color};
	{/if}
	{if $theme_vars_footer_bar_1_button_bg_color!=""&&$theme_vars_footer_bar_1_button_bg_color!="Inherit"}		
		background:{$theme_vars_footer_bar_1_button_bg_color};
	{/if}
{literal}}{/literal}
#footer_bar_1 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_footer_bar_1_button_bg_color!=""&&$theme_vars_footer_bar_1_button_bg_color!="Inherit"}		
		color:{$theme_vars_footer_bar_1_button_bg_color};
	{/if}
{literal}}{/literal}
#footer_bar_2 p.button a,#footer_bar_2 p.Button_Small a,#footer_bar_2 p.Button_Medium a,#footer_bar_2 p.Button_Large a,#footer_bar_2 button,#footer_bar_2 input[type="submit"],#footer_bar_2 input[type="reset"],#footer_bar_2 input[type="button"] {literal}{{/literal}
	{if $theme_vars_footer_bar_2_button_color!=""&&$theme_vars_footer_bar_2_button_color!="Inherit"}		
		color:{$theme_vars_footer_bar_2_button_color};
	{/if}
	{if $theme_vars_footer_bar_2_button_bg_color!=""&&$theme_vars_footer_bar_2_button_bg_color!="Inherit"}		
		background:{$theme_vars_footer_bar_2_button_bg_color};
	{/if}
{literal}}{/literal}
#footer_bar_2 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_footer_bar_2_button_bg_color!=""&&$theme_vars_footer_bar_2_button_bg_color!="Inherit"}		
		color:{$theme_vars_footer_bar_2_button_bg_color};
	{/if}
{literal}}{/literal}
#footer_bar_3 p.button a,#footer_bar_3 p.Button_Small a,#footer_bar_3 p.Button_Medium a,#footer_bar_3 p.Button_Large a,#footer_bar_3 button,#footer_bar_3 input[type="submit"],#footer_bar_3 input[type="reset"],#footer_bar_3 input[type="button"] {literal}{{/literal}
	{if $theme_vars_footer_bar_3_button_color!=""&&$theme_vars_footer_bar_3_button_color!="Inherit"}		
		color:{$theme_vars_footer_bar_3_button_color};
	{/if}
	{if $theme_vars_footer_bar_3_button_bg_color!=""&&$theme_vars_footer_bar_3_button_bg_color!="Inherit"}		
		background:{$theme_vars_footer_bar_3_button_bg_color};
	{/if}
{literal}}{/literal}
#footer_bar_3 .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_footer_bar_3_button_bg_color!=""&&$theme_vars_footer_bar_3_button_bg_color!="Inherit"}		
		color:{$theme_vars_footer_bar_3_button_bg_color};
	{/if}
{literal}}{/literal}


.inverted h1 {literal}{{/literal}
	color:{$theme_vars_h1_color_inverted}
{literal}}{/literal}

.inverted h2 {literal}{{/literal}
	color:{$theme_vars_h2_color_inverted}
{literal}}{/literal}


.inverted h3 {literal}{{/literal}
	color:{$theme_vars_h3_color_inverted}
{literal}}{/literal}


.inverted h4 {literal}{{/literal}
	color:{$theme_vars_h4_color_inverted}
{literal}}{/literal}


.inverted p,.inverted td,.inverted div,.inverted th,.inverted label,.inverted.content li,.inverted li,.inverted p a,.inverted.content li a,.inverted li a {literal}{{/literal}
	color:{$theme_vars_p_color_inverted}
{literal}}{/literal}
#header_bar_1.inverted p,#header_bar_1.inverted td,#header_bar_1.inverted div,#header_bar_1.inverted th,#header_bar_1.inverted label,#header_bar_1.inverted.content li,#header_bar_1.inverted li,#header_bar_1.inverted p a,#header_bar_1.inverted.content li a,#header_bar_1.inverted li a {literal}{{/literal}
{if $theme_vars_header_bar_1_p_color_inverted!=""&&$theme_vars_header_bar_1_p_color_inverted!="Inherit"}		
	color:{$theme_vars_header_bar_1_p_color_inverted};
{/if}
{literal}}{/literal}
#header_bar_2.inverted p,#header_bar_2.inverted td,#header_bar_2.inverted div,#header_bar_2.inverted th,#header_bar_2.inverted label,#header_bar_2.inverted.content li,#header_bar_2.inverted li,#header_bar_2.inverted p a,#header_bar_2.inverted.content li a,#header_bar_2.inverted li a {literal}{{/literal}
{if $theme_vars_header_bar_2_p_color_inverted!=""&&$theme_vars_header_bar_2_p_color_inverted!="Inherit"}		
	color:{$theme_vars_header_bar_2_p_color_inverted};
{/if}
{literal}}{/literal}
#header_bar_3.inverted p,#header_bar_3.inverted td,#header_bar_3.inverted div,#header_bar_3.inverted th,#header_bar_3.inverted label,#header_bar_3.inverted.content li,#header_bar_3.inverted li,#header_bar_3.inverted p a,#header_bar_3.inverted.content li a,#header_bar_3.inverted li a {literal}{{/literal}
{if $theme_vars_header_bar_3_p_color_inverted!=""&&$theme_vars_header_bar_3_p_color_inverted!="Inherit"}		
	color:{$theme_vars_header_bar_3_p_color_inverted};
{/if}
{literal}}{/literal}
#content_bar_1.inverted p,#content_bar_1.inverted td,#content_bar_1.inverted div,#content_bar_1.inverted th,#content_bar_1.inverted label,#content_bar_1.inverted.content li,#content_bar_1.inverted li,#content_bar_1.inverted p a,#content_bar_1.inverted.content li a,#content_bar_1.inverted li a {literal}{{/literal}
{if $theme_vars_content_bar_1_p_color_inverted!=""&&$theme_vars_content_bar_1_p_color_inverted!="Inherit"}		
	color:{$theme_vars_content_bar_1_p_color_inverted};
{/if}
{literal}}{/literal}
#content_bar_2.inverted p,#content_bar_2.inverted td,#content_bar_2.inverted div,#content_bar_2.inverted th,#content_bar_2.inverted label,#content_bar_2.inverted.content li,#content_bar_2.inverted li,#content_bar_2.inverted p a,#content_bar_2.inverted.content li a,#content_bar_2.inverted li a {literal}{{/literal}
{if $theme_vars_content_bar_2_p_color_inverted!=""&&$theme_vars_content_bar_2_p_color_inverted!="Inherit"}		
	color:{$theme_vars_content_bar_2_p_color_inverted};
{/if}
{literal}}{/literal}
#content_bar_3.inverted p,#content_bar_3.inverted td,#content_bar_3.inverted div,#content_bar_3.inverted th,#content_bar_3.inverted label,#content_bar_3.inverted.content li,#content_bar_3.inverted li,#content_bar_3.inverted p a,#content_bar_3.inverted.content li a,#content_bar_3.inverted li a {literal}{{/literal}
{if $theme_vars_content_bar_3_p_color_inverted!=""&&$theme_vars_content_bar_3_p_color_inverted!="Inherit"}		
	color:{$theme_vars_content_bar_3_p_color_inverted};
{/if}
{literal}}{/literal}
#content_bar_4.inverted p,#content_bar_4.inverted td,#content_bar_4.inverted div,#content_bar_4.inverted th,#content_bar_4.inverted label,#content_bar_4.inverted.content li,#content_bar_4.inverted li,#content_bar_4.inverted p a,#content_bar_4.inverted.content li a,#content_bar_4.inverted li a {literal}{{/literal}
{if $theme_vars_content_bar_4_p_color_inverted!=""&&$theme_vars_content_bar_4_p_color_inverted!="Inherit"}		
	color:{$theme_vars_content_bar_4_p_color_inverted};
{/if}
{literal}}{/literal}
#content_bar_5.inverted p,#content_bar_5.inverted td,#content_bar_5.inverted div,#content_bar_5.inverted th,#content_bar_5.inverted label,#content_bar_5.inverted.content li,#content_bar_5.inverted li,#content_bar_5.inverted p a,#content_bar_5.inverted.content li a,#content_bar_5.inverted li a {literal}{{/literal}
{if $theme_vars_content_bar_5_p_color_inverted!=""&&$theme_vars_content_bar_5_p_color_inverted!="Inherit"}		
	color:{$theme_vars_content_bar_5_p_color_inverted};
{/if}
{literal}}{/literal}
#content_bar_6.inverted p,#content_bar_6.inverted td,#content_bar_6.inverted div,#content_bar_6.inverted th,#content_bar_6.inverted label,#content_bar_6.inverted.content li,#content_bar_6.inverted li,#content_bar_6.inverted p a,#content_bar_6.inverted.content li a,#content_bar_6.inverted li a {literal}{{/literal}
{if $theme_vars_content_bar_6_p_color_inverted!=""&&$theme_vars_content_bar_6_p_color_inverted!="Inherit"}		
	color:{$theme_vars_content_bar_6_p_color_inverted};
{/if}
{literal}}{/literal}
#content_bar_7.inverted p,#content_bar_7.inverted td,#content_bar_7.inverted div,#content_bar_7.inverted th,#content_bar_7.inverted label,#content_bar_7.inverted.content li,#content_bar_7.inverted li,#content_bar_7.inverted p a,#content_bar_7.inverted.content li a,#content_bar_7.inverted li a {literal}{{/literal}
{if $theme_vars_content_bar_7_p_color_inverted!=""&&$theme_vars_content_bar_7_p_color_inverted!="Inherit"}		
	color:{$theme_vars_content_bar_7_p_color_inverted};
{/if}
{literal}}{/literal}
#footer_bar_1.inverted p,#footer_bar_1.inverted td,#footer_bar_1.inverted div,#footer_bar_1.inverted th,#footer_bar_1.inverted label,#footer_bar_1.inverted.content li,#footer_bar_1.inverted li,#footer_bar_1.inverted p a,#footer_bar_1.inverted.content li a,#footer_bar_1.inverted li a {literal}{{/literal}
{if $theme_vars_footer_bar_1_p_color_inverted!=""&&$theme_vars_footer_bar_1_p_color_inverted!="Inherit"}		
	color:{$theme_vars_footer_bar_1_p_color_inverted};
{/if}
{literal}}{/literal}
#footer_bar_2.inverted p,#footer_bar_2.inverted td,#footer_bar_2.inverted div,#footer_bar_2.inverted th,#footer_bar_2.inverted label,#footer_bar_2.inverted.content li,#footer_bar_2.inverted li,#footer_bar_2.inverted p a,#footer_bar_2.inverted.content li a,#footer_bar_2.inverted li a {literal}{{/literal}
{if $theme_vars_footer_bar_2_p_color_inverted!=""&&$theme_vars_footer_bar_2_p_color_inverted!="Inherit"}		
	color:{$theme_vars_footer_bar_2_p_color_inverted};
{/if}
{literal}}{/literal}
#footer_bar_3.inverted p,#footer_bar_3.inverted td,#footer_bar_3.inverted div,#footer_bar_3.inverted th,#footer_bar_3.inverted label,#footer_bar_3.inverted.content li,#footer_bar_3.inverted li,#footer_bar_3.inverted p a,#footer_bar_3.inverted.content li a,#footer_bar_3.inverted li a {literal}{{/literal}
{if $theme_vars_footer_bar_3_p_color_inverted!=""&&$theme_vars_footer_bar_3_p_color_inverted!="Inherit"}		
	color:{$theme_vars_footer_bar_3_p_color_inverted};
{/if}
{literal}}{/literal}


.inverted p.button a,.inverted p.Button_Small a,.inverted p.Button_Medium a,.inverted p.Button_Large a {literal}{{/literal}
	{if $theme_vars_button_color!=""&&$theme_vars_button_color!="Inherit"}		
		background:{$theme_vars_button_color};	
	{/if}
	{if $theme_vars_button_bg_color!=""&&$theme_vars_button_bg_color!="Inherit"}		
		color:{$theme_vars_button_bg_color};		

	{/if}
{literal}}{/literal}
.inverted .expand-box-title:before {literal}{{/literal}
	{if $theme_vars_button_color!=""&&$theme_vars_button_color!="Inherit"}		
		color:{$theme_vars_button_color};
	{/if}
{literal}}{/literal}
.inverted .expand-box  {literal}{{/literal}
	border-top:1px solid rgba(255,255,255,0.2);
	border-bottom:1px solid rgba(255,255,255,0.2);
{literal}}{/literal}



#content_bar_1 .disclosure-reveal {literal}{{/literal}
	background-color:{$theme_vars_content_bar_1_disclosure_color};
{literal}}{/literal}
#content_bar_2 .disclosure-reveal {literal}{{/literal}
	background-color:{$theme_vars_content_bar_2_disclosure_color};
{literal}}{/literal}
#content_bar_3 .disclosure-reveal {literal}{{/literal}
	background-color:{$theme_vars_content_bar_3_disclosure_color};
{literal}}{/literal}
#content_bar_4 .disclosure-reveal {literal}{{/literal}
	background-color:{$theme_vars_content_bar_4_disclosure_color};
{literal}}{/literal}
#content_bar_5 .disclosure-reveal {literal}{{/literal}
	background-color:{$theme_vars_content_bar_5_disclosure_color};
{literal}}{/literal}
#content_bar_6 .disclosure-reveal {literal}{{/literal}
	background-color:{$theme_vars_content_bar_6_disclosure_color};
{literal}}{/literal}
#content_bar_7 .disclosure-reveal {literal}{{/literal}
	background-color:{$theme_vars_content_bar_7_disclosure_color};
{literal}}{/literal}
{$theme_vars_custom_styles}
</style>
{$theme_vars_head_code}
{if !$searching_by}
<link rel="canonical" href="{$content.protocol}{$content.http_host}{include file=includes/canonical.tpl}" />
{/if}
{if $content.noindex}
<meta name="robots" content="noindex">
{else}
{if $content.blogMonth||$searching_by}
<meta name="robots" content="noindex,follow">
{/if}
{/if}
</head>
{if $theme_vars_header_bar_1}{assign var=bodybg value=$theme_vars_header_bar_1_bg_color}{/if}
{if $theme_vars_header_bar_2}{assign var=bodybg value=$theme_vars_header_bar_2_bg_color}{/if}
{if $theme_vars_header_bar_3}{assign var=bodybg value=$theme_vars_header_bar_3_bg_color}{/if}
{if $theme_vars_content_bar_1}{assign var=bodybg value=$theme_vars_content_bar_1_bg_color}{/if}
{if $templateSections.normal}{assign var=bodybg value=$theme_vars_content_bar_2_bg_color}{/if}
{if $theme_vars_content_bar_3}{assign var=bodybg value=$theme_vars_content_bar_3_bg_color}{/if}
{if $theme_vars_content_bar_4}{assign var=bodybg value=$theme_vars_content_bar_4_bg_color}{/if}
{if $theme_vars_content_bar_5}{assign var=bodybg value=$theme_vars_content_bar_5_bg_color}{/if}
{if $theme_vars_footer_bar_1}{assign var=bodybg value=$theme_vars_footer_bar_1_bg_color}{/if}
{if $theme_vars_footer_bar_2}{assign var=bodybg value=$theme_vars_footer_bar_2_bg_color}{/if}
{if $theme_vars_footer_bar_3}{assign var=bodybg value=$theme_vars_footer_bar_3_bg_color}{/if}
{if $theme_vars_all_footers_bg_enabled}{assign var=bodybg value=$theme_vars_all_footers_bg_color}{/if}

<body {if $theme_vars_match_parallax_zoom}data-parallax-tallest="0"{/if} class="{if $theme_vars_match_parallax_zoom}match-parallax-zoom{/if} {if $theme_vars_month_at_a_time==2}booking-just-available-dates{/if} {if $theme_vars_month_at_a_time}booking-month-at-time{/if}{if $theme_vars_fixed_header=="1"||$theme_vars_fixed_header=="skippadding"}{if $theme_vars_fixed_header=="skippadding"}skip-padding{/if} with-fixed-header{/if} {if $theme_vars_fixed_header=="noheight"}header-no-height{/if}  {if $content.homepage}homepage{/if} page_{$content.url} parent_{$content.parent} top_parent_{$content.topParent} page_id_{$content.id} {if $theme_vars_fixed_header_skip_padding}skip-padding{/if}" data-page-id="{$content.id}">
<script type="text/javascript">
	document.body.className += " jsLoading";
</script>
	{if $theme_vars_all_headers_bg_enabled}
		<div class="all_bg" id="all_headers_bg"
				{if $theme_vars_all_headers_bg_mode!="tile" && (($theme_vars_all_headers_background_video==""&&!$theme_vars_all_headers_bg_video_sitewide)||($sitewideContent.All_Headers_Background_Video==""&&$theme_vars_all_headers_bg_video_sitewide))}
					{if $theme_vars_all_headers_bg_sitewide&&$sitewideContent.All_Headers_Backgrounds}
						data-backgrounds="{$sitewideContent.All_Headers_Backgrounds|images_to_json:true|htmlspecialchars}"
					{else}
						{if $theme_vars_all_headers_background1}
							data-backgrounds="[&quot;/images/themegraphics/{$theme_vars_all_headers_background1}&quot;{if $theme_vars_all_headers_background2},&quot;/images/themegraphics/{$theme_vars_all_headers_background2}&quot;{/if}{if $theme_vars_all_headers_background3},&quot;/images/themegraphics/{$theme_vars_all_headers_background3}&quot;{/if}{if $theme_vars_all_headers_background4},&quot;/images/themegraphics/{$theme_vars_all_headers_background4}&quot;{/if}{if $theme_vars_all_headers_background5},&quot;/images/themegraphics/{$theme_vars_all_headers_background5}&quot;{/if}]"
						{/if}
					{/if}
				{/if}
				data-background-align="{$theme_vars_all_headers_bg_align}"
				data-background-fade="1000"
				data-background-panzoom="{$theme_vars_all_headers_panzoom}"
				data-background-duration="5000"
				data-background-color="{$theme_vars_all_headers_bg_color}"
				data-background-opacity="{$theme_vars_all_headers_bg_opacity}"
				{if $theme_vars_all_headers_bg_mode=="parallax_slow"}
				data-scroll-decay="0.1"
				{/if}
				{if $theme_vars_all_headers_bg_mode=="parallax_norm"}
				data-scroll-decay="0.5"
				{/if}
				{if $theme_vars_all_headers_bg_mode=="parallax_fast"}
				data-scroll-decay="0.9"
				{/if}
				{if $theme_vars_all_headers_bg_mode=="parallax_infini"}
				data-scroll-decay="1"
				{/if}
				{if $theme_vars_all_headers_bg_mode=="parallax_combined"}
				data-parallax-combined="1"
				{/if}
				style="background-color:{$theme_vars_all_headers_bg_color};{if $theme_vars_all_headers_bg_mode=="tile"}background-image:url(/images/themegraphics/{$theme_vars_all_headers_background1});background-repeat:repeat;{/if}"
				{if $theme_vars_all_headers_background_video&&$sitewideContent.All_Headers_Background_Video!=""}
					{assign var=videostr value="href=\"/media"|explode:$sitewideContent.All_Headers_Background_Video}
					{assign var=videostr2 value="\""|explode:$videostr[1]}
					{if !$theme_vars_all_headers_bg_sitewide||!$sitewideContent.All_Headers_Backgrounds}
						{assign var=imgstr value="src=\""|explode:$sitewideContent.All_Headers_Background_Video}
						{assign var=imgstr2 value="\""|explode:$imgstr[1]}
						{assign var=imgstr3 value=$imgstr2[0]}
					{else}
						{assign var=imgstr value="src=\""|explode:$sitewideContent.All_Headers_Backgrounds}
						{assign var=imgstr2 value="\""|explode:$imgstr[1]}
						{assign var=imgstr3t value="?"|explode:$imgstr2[0]}
						{assign var=imgstr3 value=$imgstr3t[0]}
					{/if}
					data-vide-bg="mp4: /media{$videostr2[0]}, poster: {$imgstr3}"
					data-vide-options="loop: true, muted: {if $theme_vars_mute_bg_video}true{else}false{/if}, position: 50% 50%, opacity: {$theme_vars_all_headers_bg_opacity}"
				{elseif $theme_vars_all_headers_background_video}
					data-vide-bg="mp4: /media/{$theme_vars_all_headers_background_video}, poster: /images/themegraphics/{$theme_vars_all_headers_background1}"
					data-vide-options="loop: true, muted: {if $theme_vars_mute_bg_video}true{else}false{/if}, position: 50% 50%, opacity: {$theme_vars_all_headers_bg_opacity}"
				{/if}
			>
	{/if}
	<div id="header">

	{if $theme_vars_header_bar_1}
		
		{include file=includes/mega_row.tpl
			mr_id=header_bar_1
			bg_enabled=$theme_vars_header_bar_1_bg_sitewide
			show_in_fixed=$theme_vars_header_bar_1_show_in_fixed
			Backgrounds=$sitewideContent.Header_Bar_1_Backgrounds
			background1=$theme_vars_header_bar_1_background1
			background2=$theme_vars_header_bar_1_background2
			background3=$theme_vars_header_bar_1_background3
			background4=$theme_vars_header_bar_1_background4
			background5=$theme_vars_header_bar_1_background5
			panzoom=$theme_vars_header_bar_1_panzoom
			background_video=$theme_vars_header_bar_1_background_video
			background_video_sw_enabled=$theme_vars_header_bar_1_bg_video_sitewide
			background_video_sw=$sitewideContent.Header_Bar_1_Background_Video
			bg_color=$theme_vars_header_bar_1_bg_color
			bg_opacity=$theme_vars_header_bar_1_bg_opacity
			bg_mode=$theme_vars_header_bar_1_bg_mode
			bg_align=$theme_vars_header_bar_1_bg_align
			height=$theme_vars_header_bar_1_height
			scale_prop=$theme_vars_header_bar_1_scale_proportionally
			centered=$theme_vars_header_bar_1_centered
			right=$theme_vars_header_bar_1_right
			left=$theme_vars_header_bar_1_left
			nav_style=$theme_vars_header_bar_1_nav_style
			search=$theme_vars_header_bar_1_search
			basket=$theme_vars_header_bar_1_basket
			logo_file=$theme_vars_header_bar_1_logo
			logo_retina=$theme_vars_header_bar_1_logo_retina
			logo_file_fixed=$theme_vars_header_bar_1_logo_fixed
			logo_link=$theme_vars_header_bar_1_logo_link
			logo2=$theme_vars_header_bar_1_logo2
			logo2_retina=$theme_vars_header_bar_1_logo2_retina
			logo2_fixed=$theme_vars_header_bar_1_logo2_fixed
			logo2_link=$theme_vars_header_bar_1_logo2_link
			logo3=$theme_vars_header_bar_1_logo3
			logo3_retina=$theme_vars_header_bar_1_logo3_retina
			logo3_fixed=$theme_vars_header_bar_1_logo3_fixed
			logo3_link=$theme_vars_header_bar_1_logo3_link
			Left=$sitewideContent.Header_Bar_1_Left
			Left_Secondary=$sitewideContent.Header_Bar_1_Left_Secondary
			left_2=$theme_vars_header_bar_1_left_2
			Right=$sitewideContent.Header_Bar_1_Right
			Right_Secondary=$sitewideContent.Header_Bar_1_Right_Secondary
			right_2=$theme_vars_header_bar_1_right_2
			Centered=$sitewideContent.Header_Bar_1_Centered
			left_valign=$theme_vars_header_bar_1_left_valign
			right_valign=$theme_vars_header_bar_1_right_valign
			inverted=$theme_vars_header_bar_1_inverted
			full_top_enabled=$theme_vars_header_bar_1_fullwidth_top
			full_top_content=$sitewideContent.Header_Bar_1_Full_Width_Top
			full_bottom_enabled=$theme_vars_header_bar_1_fullwidth_bottom
			full_bottom_content=$sitewideContent.Header_Bar_1_Full_Width_Bottom
		}
		
	{/if}


	{if $theme_vars_header_bar_2}

		{include file=includes/mega_row.tpl
			mr_id=header_bar_2
			bg_enabled=$theme_vars_header_bar_2_bg_sitewide
			show_in_fixed=$theme_vars_header_bar_2_show_in_fixed
			Backgrounds=$sitewideContent.Header_Bar_2_Backgrounds
			background1=$theme_vars_header_bar_2_background1
			background2=$theme_vars_header_bar_2_background2
			background3=$theme_vars_header_bar_2_background3
			background4=$theme_vars_header_bar_2_background4
			background5=$theme_vars_header_bar_2_background5
			panzoom=$theme_vars_header_bar_2_panzoom
			background_video=$theme_vars_header_bar_2_background_video
			background_video_sw_enabled=$theme_vars_header_bar_2_bg_video_sitewide
			background_video_sw=$sitewideContent.Header_Bar_2_Background_Video
			bg_color=$theme_vars_header_bar_2_bg_color
			bg_opacity=$theme_vars_header_bar_2_bg_opacity
			bg_mode=$theme_vars_header_bar_2_bg_mode
			bg_align=$theme_vars_header_bar_2_bg_align
			height=$theme_vars_header_bar_2_height
			scale_prop=$theme_vars_header_bar_2_scale_proportionally
			centered=$theme_vars_header_bar_2_centered
			right=$theme_vars_header_bar_2_right
			left=$theme_vars_header_bar_2_left
			nav_style=$theme_vars_header_bar_2_nav_style
			search=$theme_vars_header_bar_2_search
			basket=$theme_vars_header_bar_2_basket
			logo_file=$theme_vars_header_bar_2_logo
			logo_retina=$theme_vars_header_bar_2_logo_retina
			logo_file_fixed=$theme_vars_header_bar_2_logo_fixed
			logo_link=$theme_vars_header_bar_2_logo_link
			logo2=$theme_vars_header_bar_2_logo2
			logo2_retina=$theme_vars_header_bar_2_logo2_retina
			logo2_fixed=$theme_vars_header_bar_2_logo2_fixed
			logo2_link=$theme_vars_header_bar_2_logo2_link
			logo3=$theme_vars_header_bar_2_logo3
			logo3_retina=$theme_vars_header_bar_2_logo3_retina
			logo3_fixed=$theme_vars_header_bar_2_logo3_fixed
			logo3_link=$theme_vars_header_bar_2_logo3_link
			Left=$sitewideContent.Header_Bar_2_Left
			Left_Secondary=$sitewideContent.Header_Bar_2_Left_Secondary
			left_2=$theme_vars_header_bar_2_left_2
			Right=$sitewideContent.Header_Bar_2_Right
			Right_Secondary=$sitewideContent.Header_Bar_2_Right_Secondary
			right_2=$theme_vars_header_bar_2_right_2
			Centered=$sitewideContent.Header_Bar_2_Centered
			left_valign=$theme_vars_header_bar_2_left_valign
			right_valign=$theme_vars_header_bar_2_right_valign
			inverted=$theme_vars_header_bar_2_inverted
			full_top_enabled=$theme_vars_header_bar_2_fullwidth_top
			full_top_content=$sitewideContent.Header_Bar_2_Full_Width_Top
			full_bottom_enabled=$theme_vars_header_bar_2_fullwidth_bottom
			full_bottom_content=$sitewideContent.Header_Bar_2_Full_Width_Bottom
		}
		
	{/if}



	{if $theme_vars_header_bar_3}

		{include file=includes/mega_row.tpl
			mr_id=header_bar_3
			bg_enabled=$theme_vars_header_bar_3_bg_sitewide
			show_in_fixed=$theme_vars_header_bar_3_show_in_fixed
			Backgrounds=$sitewideContent.Header_Bar_3_Backgrounds
			background1=$theme_vars_header_bar_3_background1
			background2=$theme_vars_header_bar_3_background2
			background3=$theme_vars_header_bar_3_background3
			background4=$theme_vars_header_bar_3_background4
			background5=$theme_vars_header_bar_3_background5
			panzoom=$theme_vars_header_bar_3_panzoom
			background_video=$theme_vars_header_bar_3_background_video	
			background_video_sw_enabled=$theme_vars_header_bar_3_bg_video_sitewide	
			background_video_sw=$sitewideContent.Header_Bar_3_Background_Video
			bg_color=$theme_vars_header_bar_3_bg_color
			bg_opacity=$theme_vars_header_bar_3_bg_opacity
			bg_mode=$theme_vars_header_bar_3_bg_mode
			bg_align=$theme_vars_header_bar_3_bg_align
			height=$theme_vars_header_bar_3_height
			scale_prop=$theme_vars_header_bar_3_scale_proportionally
			centered=$theme_vars_header_bar_3_centered
			right=$theme_vars_header_bar_3_right
			left=$theme_vars_header_bar_3_left
			nav_style=$theme_vars_header_bar_3_nav_style
			search=$theme_vars_header_bar_3_search
			basket=$theme_vars_header_bar_3_basket
			logo_file=$theme_vars_header_bar_3_logo
			logo_retina=$theme_vars_header_bar_3_logo_retina
			logo_file_fixed=$theme_vars_header_bar_3_logo_fixed
			logo_link=$theme_vars_header_bar_3_logo_link
			logo2=$theme_vars_header_bar_3_logo2
			logo2_retina=$theme_vars_header_bar_3_logo2_retina
			logo2_fixed=$theme_vars_header_bar_3_logo2_fixed
			logo2_link=$theme_vars_header_bar_3_logo2_link
			logo3=$theme_vars_header_bar_3_logo3
			logo3_retina=$theme_vars_header_bar_3_logo3_retina
			logo3_fixed=$theme_vars_header_bar_3_logo3_fixed
			logo3_link=$theme_vars_header_bar_3_logo3_link
			Left=$sitewideContent.Header_Bar_3_Left
			Left_Secondary=$sitewideContent.Header_Bar_3_Left_Secondary
			left_2=$theme_vars_header_bar_3_left_2
			Right=$sitewideContent.Header_Bar_3_Right
			Right_Secondary=$sitewideContent.Header_Bar_3_Right_Secondary
			right_2=$theme_vars_header_bar_3_right_2
			Centered=$sitewideContent.Header_Bar_3_Centered
			left_valign=$theme_vars_header_bar_3_left_valign
			right_valign=$theme_vars_header_bar_3_right_valign
			inverted=$theme_vars_header_bar_3_inverted
			full_top_enabled=$theme_vars_header_bar_3_fullwidth_top
			full_top_content=$sitewideContent.Header_Bar_3_Full_Width_Top
			full_bottom_enabled=$theme_vars_header_bar_3_fullwidth_bottom
			full_bottom_content=$sitewideContent.Header_Bar_3_Full_Width_Bottom
		}
		
	{/if}
	
	</div>
	

	{if $theme_vars_all_headers_bg_enabled}
	</div>
	{/if}

	<main id="main" tabindex="-1">

	{if $theme_vars_content_bar_1_banner_enabled && !$security && $templateSections.Content_Bar_1_Banner}
		{if $theme_vars_content_bar_1_banner_type=="slideshow"||$theme_vars_content_bar_1_banner_type=="bannerwidgets"}
			{if $theme_vars_content_bar_1_banner_type=="bannerwidgets"}
				{assign var=bannerheight value=$theme_vars_content_bar_1_banner_height}
				{assign var=bannerwidgetsbool value=true}
			{else}
				{assign var=bannerheight value="auto"}
				{assign var=bannerwidgetsbool value=false}
			{/if}
			
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_1_banner_slideshow
				content=$templateSections.Content_Bar_1_Banner
				slideshow_speed=$theme_vars_content_bar_1_banner_slideshow_speed
				slideshow_style=$theme_vars_content_bar_1_banner_slideshow_style
				bg_color=$theme_vars_content_bar_1_banner_bg_color
				height=$bannerheight
				fill=1
				widgets=$bannerwidgetsbool
			}
		{else}
			{assign var=tcontent value=""}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_1_banner
				bg_mode=$theme_vars_content_bar_1_banner_type
				bg_align=$theme_vars_content_banner_1_bg_align
				bg_enabled="1"
				Backgrounds=$templateSections.Content_Bar_1_Banner
				bg_color=$theme_vars_content_bar_1_banner_bg_color
				bg_opacity=1
				height=$theme_vars_content_bar_1_banner_height
				scale_prop=$theme_vars_banner_1_scale_proportionally
				content=$tcontent
			}
		{/if}
		
		
	{/if}
	
					
	{if $theme_vars_content_bar_1 && !$security && ($templateSections.Content_Bar_1 || ($theme_vars_content_bar_1_backgrounds_enabled && ($theme_vars_content_bar_1_background1 || $templateSections.Content_Bar_1_Backgrounds)))}
		{assign var=tcontent value=$templateSections.Content_Bar_1}
		{include file=includes/mega_row_content.tpl
			mrc_id=content_bar_1
			bgmode=$theme_vars_content_bar_1_bg_mode
			bg_enabled=$theme_vars_content_bar_1_backgrounds_enabled
			Backgrounds=$templateSections.Content_Bar_1_Backgrounds
			disclosure=$theme_vars_content_bar_1_disclosure
			background1=$theme_vars_content_bar_1_background1
			background2=$theme_vars_content_bar_1_background2
			background3=$theme_vars_content_bar_1_background3
			background4=$theme_vars_content_bar_1_background4
			background5=$theme_vars_content_bar_1_background5
			panzoom=$theme_vars_content_bar_1_panzoom
			background_video=$theme_vars_content_bar_1_background_video
			background_video_ts_enabled=$theme_vars_content_bar_1_background_video_enabled
			background_video_ts=$templateSections.Content_Bar_1_Background_Video
			bg_color=$theme_vars_content_bar_1_bg_color
			bg_opacity=$theme_vars_content_bar_1_bg_opacity
			bg_mode=$theme_vars_content_bar_1_bg_mode
			bg_align=$theme_vars_content_bar_1_bg_align
			height=$theme_vars_content_bar_1_height
			scale_prop=$theme_vars_content_bar_1_scale_proportionally
			content=$tcontent
			inverted=$theme_vars_content_bar_1_inverted
		}
	{/if}	

	
	{if $theme_vars_content_bar_2_banner_enabled && !$security && $templateSections.Content_Bar_2_Banner}
		{if $theme_vars_content_bar_2_banner_type=="slideshow"||$theme_vars_content_bar_2_banner_type=="bannerwidgets"}
			{if $theme_vars_content_bar_2_banner_type=="bannerwidgets"}
				{assign var=bannerheight value=$theme_vars_content_bar_2_banner_height}
				{assign var=bannerwidgetsbool value=true}
			{else}
				{assign var=bannerheight value="auto"}
				{assign var=bannerwidgetsbool value=false}
			{/if}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_2_banner_slideshow
				content=$templateSections.Content_Bar_2_Banner
				slideshow_speed=$theme_vars_content_bar_2_banner_slideshow_speed
				slideshow_style=$theme_vars_content_bar_2_banner_slideshow_style
				bg_color=$theme_vars_content_bar_2_banner_bg_color
				height=$bannerheight
				fill=1
				widgets=$bannerwidgetsbool
			}
		{else}
			{assign var=tcontent value=""}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_2_banner
				bg_mode=$theme_vars_content_bar_2_banner_type
				bg_align=$theme_vars_content_banner_2_bg_align
				bg_enabled="1"
				Backgrounds=$templateSections.Content_Bar_2_Banner
				bg_color=$theme_vars_content_bar_2_banner_bg_color
				bg_opacity=1
				height=$theme_vars_content_bar_2_banner_height
				scale_prop=$theme_vars_banner_2_scale_proportionally
				content=$tcontent
			}
		{/if}
		
		
	{/if}
	
	{if $theme_vars_content_bar_2 && !$security && ($templateSections.Content_Bar_2 || ($theme_vars_content_bar_2_backgrounds_enabled && ($theme_vars_content_bar_2_background1 || $templateSections.Content_Bar_2_Backgrounds)))}
		{assign var=tcontent value=$templateSections.Content_Bar_2}
		{include file=includes/mega_row_content.tpl
			mrc_id=content_bar_2
			bgmode=$theme_vars_content_bar_2_bg_mode
			bg_enabled=$theme_vars_content_bar_2_backgrounds_enabled
			Backgrounds=$templateSections.Content_Bar_2_Backgrounds
			disclosure=$theme_vars_content_bar_2_disclosure
			background1=$theme_vars_content_bar_2_background1
			background2=$theme_vars_content_bar_2_background2
			background3=$theme_vars_content_bar_2_background3
			background4=$theme_vars_content_bar_2_background4
			background5=$theme_vars_content_bar_2_background5
			panzoom=$theme_vars_content_bar_2_panzoom
			background_video=$theme_vars_content_bar_2_background_video
			background_video_ts_enabled=$theme_vars_content_bar_2_background_video_enabled
			background_video_ts=$templateSections.Content_Bar_2_Background_Video
			bg_color=$theme_vars_content_bar_2_bg_color
			bg_opacity=$theme_vars_content_bar_2_bg_opacity
			bg_mode=$theme_vars_content_bar_2_bg_mode
			bg_align=$theme_vars_content_bar_2_bg_align
			height=$theme_vars_content_bar_2_height
			scale_prop=$theme_vars_content_bar_2_scale_proportionally
			content=$tcontent
			inverted=$theme_vars_content_bar_2_inverted
		}
	{/if}

	
	

	{if $theme_vars_content_bar_3_banner_enabled && !$security && $templateSections.Main_Content_Banner}
		{if $theme_vars_content_bar_3_banner_type=="slideshow"||$theme_vars_content_bar_3_banner_type=="bannerwidgets"}
			{if $theme_vars_content_bar_3_banner_type=="bannerwidgets"}
				{assign var=bannerheight value=$theme_vars_content_bar_3_banner_height}
				{assign var=bannerwidgetsbool value=true}
			{else}
				{assign var=bannerheight value="auto"}
				{assign var=bannerwidgetsbool value=false}
			{/if}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_3_banner_slideshow
				content=$templateSections.Main_Content_Banner
				slideshow_speed=$theme_vars_content_bar_3_banner_slideshow_speed
				slideshow_style=$theme_vars_content_bar_3_banner_slideshow_style
				bg_color=$theme_vars_content_bar_3_banner_bg_color
				height=$bannerheight
				fill=1
				widgets=$bannerwidgetsbool
			}
		{else}
			{assign var=tcontent value=""}
			{include file=includes/mega_row_content.tpl
				id=content_bar_3_banner
				bg_mode=$theme_vars_content_bar_3_banner_type
				bg_align=$theme_vars_content_bar_3_bg_align
				bg_enabled="1"
				Backgrounds=$templateSections.Main_Content_Banner
				bg_color=$theme_vars_content_bar_3_banner_bg_color
				bg_opacity=1
				height=$theme_vars_content_bar_3_banner_height
				scale_prop=$theme_vars_banner_3_scale_proportionally
				content=$tcontent
			}
		{/if}
		
		
	{/if}
	{if $templateSections.normal||$search_all||$security}
		{if !$security}
			{if $templateSections.Content_Bar_3||$templateSections.normal||$search_all}
				{capture assign=tempcontent}
					{if $search_all}
						<h1>{$langs.Search_Results}</h1>
						{include file=includes/search_results.tpl}
					{/if}
					{$templateSections.normal}
					{$templateSections.Content_Bar_3}
				{/capture}
			{/if}
		{else}
			{include file=includes/login.tpl assign=tempcontent}
		{/if}
		
		
		{include file=includes/mega_row_content.tpl
			mrc_id=content_bar_3
			bgmode=$theme_vars_content_bar_3_bg_mode
			bg_enabled=$theme_vars_content_bar_3_backgrounds_enabled
			Backgrounds=$templateSections.Main_Content_Backgrounds
			disclosure=$theme_vars_content_bar_3_disclosure
			background1=$theme_vars_content_bar_3_background1
			background2=$theme_vars_content_bar_3_background2
			background3=$theme_vars_content_bar_3_background3
			background4=$theme_vars_content_bar_3_background4
			background5=$theme_vars_content_bar_3_background5
			panzoom=$theme_vars_content_bar_3_panzoom
			background_video=$theme_vars_content_bar_3_background_video			
			background_video_ts_enabled=$theme_vars_content_bar_3_background_video_enabled
			background_video_ts=$templateSections.Content_Bar_3_Background_Video
			bg_color=$theme_vars_content_bar_3_bg_color
			bg_opacity=$theme_vars_content_bar_3_bg_opacity
			bg_mode=$theme_vars_content_bar_3_bg_mode
			bg_align=$theme_vars_content_bar_3_bg_align
			height=$theme_vars_content_bar_3_height
			scale_prop=$theme_vars_banner_3_scale_proportionally
			content=$tempcontent
			inverted=$theme_vars_content_bar_3_inverted
		}
	{/if}
	
	{if $theme_vars_content_bar_4_banner_enabled && !$security && $templateSections.Content_Bar_4_Banner}
		{if $theme_vars_content_bar_4_banner_type=="slideshow"||$theme_vars_content_bar_4_banner_type=="bannerwidgets"}
			{if $theme_vars_content_bar_4_banner_type=="bannerwidgets"}
				{assign var=bannerheight value=$theme_vars_content_bar_4_banner_height}
				{assign var=bannerwidgetsbool value=true}
			{else}
				{assign var=bannerheight value="auto"}
				{assign var=bannerwidgetsbool value=false}
			{/if}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_4_banner_slideshow
				content=$templateSections.Content_Bar_4_Banner
				slideshow_speed=$theme_vars_content_bar_4_banner_slideshow_speed
				slideshow_style=$theme_vars_content_bar_4_banner_slideshow_style
				bg_color=$theme_vars_content_bar_4_banner_bg_color
				height=$bannerheight
				fill=1
				widgets=$bannerwidgetsbool
			}
		{else}
			{assign var=tcontent value=""}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_4_banner
				bg_mode=$theme_vars_content_bar_4_banner_type
				bg_align=$theme_vars_content_banner_4_bg_align
				bg_enabled="1"
				Backgrounds=$templateSections.Content_Bar_4_Banner
				bg_color=$theme_vars_content_bar_4_banner_bg_color
				bg_opacity=1
				height=$theme_vars_content_bar_4_banner_height
				scale_prop=$theme_vars_banner_4_scale_proportionally
				content=$tcontent
			}
		{/if}
		
		
	{/if}
	{if $theme_vars_content_bar_4 && !$security && ($templateSections.Content_Bar_4 || ($theme_vars_content_bar_4_backgrounds_enabled && ($theme_vars_content_bar_4_background1 || $templateSections.Content_Bar_4_Backgrounds)))}
		{assign var=tcontent value=$templateSections.Content_Bar_4}
		{include file=includes/mega_row_content.tpl
			mrc_id=content_bar_4
			bgmode=$theme_vars_content_bar_4_bg_mode
			bg_enabled=$theme_vars_content_bar_4_backgrounds_enabled
			Backgrounds=$templateSections.Content_Bar_4_Backgrounds
			disclosure=$theme_vars_content_bar_4_disclosure
			background1=$theme_vars_content_bar_4_background1
			background2=$theme_vars_content_bar_4_background2
			background3=$theme_vars_content_bar_4_background3
			background4=$theme_vars_content_bar_4_background4
			background5=$theme_vars_content_bar_4_background5
			panzoom=$theme_vars_content_bar_4_panzoom
			background_video=$theme_vars_content_bar_4_background_video
			background_video_ts_enabled=$theme_vars_content_bar_4_background_video_enabled
			background_video_ts=$templateSections.Content_Bar_4_Background_Video
			bg_color=$theme_vars_content_bar_4_bg_color
			bg_opacity=$theme_vars_content_bar_4_bg_opacity
			bg_mode=$theme_vars_content_bar_4_bg_mode
			bg_align=$theme_vars_content_bar_4_bg_align
			height=$theme_vars_content_bar_4_height
			scale_prop=$theme_vars_content_bar_4_scale_proportionally
			content=$tcontent
			inverted=$theme_vars_content_bar_4_inverted
		}
	{/if}

	{if $theme_vars_content_bar_5_banner_enabled && !$security && $templateSections.Content_Bar_5_Banner}
		{if $theme_vars_content_bar_5_banner_type=="slideshow"||$theme_vars_content_bar_5_banner_type=="bannerwidgets"}
			{if $theme_vars_content_bar_5_banner_type=="bannerwidgets"}
				{assign var=bannerheight value=$theme_vars_content_bar_5_banner_height}
				{assign var=bannerwidgetsbool value=true}
			{else}
				{assign var=bannerheight value="auto"}
				{assign var=bannerwidgetsbool value=false}
			{/if}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_5_banner_slideshow
				content=$templateSections.Content_Bar_5_Banner
				slideshow_speed=$theme_vars_content_bar_5_banner_slideshow_speed
				slideshow_style=$theme_vars_content_bar_5_banner_slideshow_style
				bg_color=$theme_vars_content_bar_5_banner_bg_color
				height=$bannerheight
				fill=1
				widgets=$bannerwidgetsbool
			}
		{else}
			{assign var=tcontent value=""}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_5_banner
				bg_mode=$theme_vars_content_bar_5_banner_type
				bg_align=$theme_vars_content_banner_5_bg_align
				bg_enabled="1"
				Backgrounds=$templateSections.Content_Bar_5_Banner
				bg_color=$theme_vars_content_bar_5_banner_bg_color
				bg_opacity=1
				height=$theme_vars_content_bar_5_banner_height
				scale_prop=$theme_vars_banner_5_scale_proportionally
				content=$tcontent
			}
		{/if}
		
		
	{/if}
	{if $theme_vars_content_bar_5 && !$security && ($templateSections.Content_Bar_5 || ($theme_vars_content_bar_5_backgrounds_enabled && ($theme_vars_content_bar_5_background1 || $templateSections.Content_Bar_5_Backgrounds)))}
		{assign var=tcontent value=$templateSections.Content_Bar_5}
		{include file=includes/mega_row_content.tpl
			mrc_id=content_bar_5
			bgmode=$theme_vars_content_bar_5_bg_mode
			bg_enabled=$theme_vars_content_bar_5_backgrounds_enabled
			Backgrounds=$templateSections.Content_Bar_5_Backgrounds
			disclosure=$theme_vars_content_bar_5_disclosure
			background1=$theme_vars_content_bar_5_background1
			background2=$theme_vars_content_bar_5_background2
			background3=$theme_vars_content_bar_5_background3
			background4=$theme_vars_content_bar_5_background4
			background5=$theme_vars_content_bar_5_background5
			panzoom=$theme_vars_content_bar_5_panzoom
			background_video=$theme_vars_content_bar_5_background_video
			background_video_ts_enabled=$theme_vars_content_bar_5_background_video_enabled
			background_video_ts=$templateSections.Content_Bar_5_Background_Video
			bg_color=$theme_vars_content_bar_5_bg_color
			bg_opacity=$theme_vars_content_bar_5_bg_opacity
			bg_mode=$theme_vars_content_bar_5_bg_mode
			bg_align=$theme_vars_content_bar_5_bg_align
			height=$theme_vars_content_bar_5_height
			scale_prop=$theme_vars_content_bar_5_scale_proportionally
			content=$tcontent
			inverted=$theme_vars_content_bar_5_inverted
		}
	{/if}
	
	
	{if $theme_vars_content_bar_6_banner_enabled && !$security && $templateSections.Content_Bar_6_Banner}
		{if $theme_vars_content_bar_6_banner_type=="slideshow"||$theme_vars_content_bar_6_banner_type=="bannerwidgets"}
			{if $theme_vars_content_bar_6_banner_type=="bannerwidgets"}
				{assign var=bannerheight value=$theme_vars_content_bar_6_banner_height}
				{assign var=bannerwidgetsbool value=true}
			{else}
				{assign var=bannerheight value="auto"}
				{assign var=bannerwidgetsbool value=false}
			{/if}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_6_banner_slideshow
				content=$templateSections.Content_Bar_6_Banner
				slideshow_speed=$theme_vars_content_bar_6_banner_slideshow_speed
				slideshow_style=$theme_vars_content_bar_6_banner_slideshow_style
				bg_color=$theme_vars_content_bar_6_banner_bg_color
				height=$bannerheight
				fill=1
				widgets=$bannerwidgetsbool
			}
		{else}
			{assign var=tcontent value=""}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_6_banner
				bg_mode=$theme_vars_content_bar_6_banner_type
				bg_align=$theme_vars_content_banner_6_bg_align
				bg_enabled="1"
				Backgrounds=$templateSections.Content_Bar_6_Banner
				bg_color=$theme_vars_content_bar_6_banner_bg_color
				bg_opacity=1
				height=$theme_vars_content_bar_6_banner_height
				scale_prop=$theme_vars_banner_6_scale_proportionally
				content=$tcontent
			}
		{/if}
		
		
	{/if}
	{if $theme_vars_content_bar_6 && !$security && ($templateSections.Content_Bar_6 || ($theme_vars_content_bar_6_backgrounds_enabled && ($theme_vars_content_bar_6_background1 || $templateSections.Content_Bar_6_Backgrounds)))}
		{assign var=tcontent value=$templateSections.Content_Bar_6}
		{include file=includes/mega_row_content.tpl
			mrc_id=content_bar_6
			bgmode=$theme_vars_content_bar_6_bg_mode
			bg_enabled=$theme_vars_content_bar_6_backgrounds_enabled
			Backgrounds=$templateSections.Content_Bar_6_Backgrounds
			disclosure=$theme_vars_content_bar_6_disclosure
			background1=$theme_vars_content_bar_6_background1
			background2=$theme_vars_content_bar_6_background2
			background3=$theme_vars_content_bar_6_background3
			background4=$theme_vars_content_bar_6_background4
			background5=$theme_vars_content_bar_6_background5
			panzoom=$theme_vars_content_bar_6_panzoom
			background_video=$theme_vars_content_bar_6_background_video
			background_video_ts_enabled=$theme_vars_content_bar_6_background_video_enabled
			background_video_ts=$templateSections.Content_Bar_6_Background_Video
			bg_color=$theme_vars_content_bar_6_bg_color
			bg_opacity=$theme_vars_content_bar_6_bg_opacity
			bg_mode=$theme_vars_content_bar_6_bg_mode
			bg_align=$theme_vars_content_bar_6_bg_align
			height=$theme_vars_content_bar_6_height
			scale_prop=$theme_vars_content_bar_6_scale_proportionally
			content=$tcontent
			inverted=$theme_vars_content_bar_6_inverted
		}
	{/if}
	
	
	{if $theme_vars_content_bar_7_banner_enabled && !$security && $templateSections.Content_Bar_7_Banner}
		{if $theme_vars_content_bar_7_banner_type=="slideshow"||$theme_vars_content_bar_7_banner_type=="bannerwidgets"}
			{if $theme_vars_content_bar_7_banner_type=="bannerwidgets"}
				{assign var=bannerheight value=$theme_vars_content_bar_7_banner_height}
				{assign var=bannerwidgetsbool value=true}
			{else}
				{assign var=bannerheight value="auto"}
				{assign var=bannerwidgetsbool value=false}
			{/if}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_7_banner_slideshow
				content=$templateSections.Content_Bar_7_Banner
				slideshow_speed=$theme_vars_content_bar_7_banner_slideshow_speed
				slideshow_style=$theme_vars_content_bar_7_banner_slideshow_style
				bg_color=$theme_vars_content_bar_7_banner_bg_color
				height=$bannerheight
				fill=1
				widgets=$bannerwidgetsbool
			}
		{else}
			{assign var=tcontent value=""}
			{include file=includes/mega_row_content.tpl
				mrc_id=content_bar_7_banner
				bg_mode=$theme_vars_content_bar_7_banner_type
				bg_align=$theme_vars_content_banner_7_bg_align
				bg_enabled="1"
				Backgrounds=$templateSections.Content_Bar_7_Banner
				bg_color=$theme_vars_content_bar_7_banner_bg_color
				bg_opacity=1
				height=$theme_vars_content_bar_7_banner_height
				scale_prop=$theme_vars_banner_7_scale_proportionally
				content=$tcontent
			}
		{/if}
		
		
	{/if}
	{if $theme_vars_content_bar_7 && !$security && ($templateSections.Content_Bar_7 || ($theme_vars_content_bar_7_backgrounds_enabled && ($theme_vars_content_bar_7_background1 || $templateSections.Content_Bar_7_Backgrounds)))}
		{assign var=content value=$templateSections.Content_Bar_7}
		{include file=includes/mega_row_content.tpl
			mrc_id=content_bar_7
			bgmode=$theme_vars_content_bar_7_bg_mode
			bg_enabled=$theme_vars_content_bar_7_backgrounds_enabled
			Backgrounds=$templateSections.Content_Bar_7_Backgrounds
			disclosure=$theme_vars_content_bar_7_disclosure
			background1=$theme_vars_content_bar_7_background1
			background2=$theme_vars_content_bar_7_background2
			background3=$theme_vars_content_bar_7_background3
			background4=$theme_vars_content_bar_7_background4
			background5=$theme_vars_content_bar_7_background5
			panzoom=$theme_vars_content_bar_7_panzoom
			background_video=$theme_vars_content_bar_7_background_video
			background_video_ts_enabled=$theme_vars_content_bar_7_background_video_enabled
			background_video_ts=$templateSections.Content_Bar_7_Background_Video
			bg_color=$theme_vars_content_bar_7_bg_color
			bg_opacity=$theme_vars_content_bar_7_bg_opacity
			bg_mode=$theme_vars_content_bar_7_bg_mode
			bg_align=$theme_vars_content_bar_7_bg_align
			height=$theme_vars_content_bar_7_height
			scale_prop=$theme_vars_content_bar_7_scale_proportionally
			content=$content
			inverted=$theme_vars_content_bar_7_inverted
		}
	{/if}

	
	</main>

	{if $theme_vars_all_footers_bg_enabled}
		<div class="all_bg" id="all_footers_bg"
				{if $theme_vars_all_footers_bg_mode!="tile" && (($theme_vars_all_footers_background_video==""&&!$theme_vars_all_footers_bg_video_sitewide)||($sitewideContent.All_Footers_Background_Video==""&&$theme_vars_all_footers_bg_video_sitewide))}
					{if $theme_vars_all_footers_bg_sitewide&&$sitewideContent.All_Footers_Backgrounds}
						data-backgrounds="{$sitewideContent.All_Footers_Backgrounds|images_to_json:true|htmlspecialchars}"
					{else}
						{if $theme_vars_all_footers_background1}
							data-backgrounds="[&quot;/images/themegraphics/{$theme_vars_all_footers_background1}&quot;{if $theme_vars_all_footers_background2},&quot;/images/themegraphics/{$theme_vars_all_footers_background2}&quot;{/if}{if $theme_vars_all_footers_background3},&quot;/images/themegraphics/{$theme_vars_all_footers_background3}&quot;{/if}{if $theme_vars_all_footers_background4},&quot;/images/themegraphics/{$theme_vars_all_footers_background4}&quot;{/if}{if $theme_vars_all_footers_background5},&quot;/images/themegraphics/{$theme_vars_all_footers_background5}&quot;{/if}]"
						{/if}
					{/if}
				{/if}
				data-background-align="{$theme_vars_all_footers_bg_align}"
				data-background-fade="1000"
				data-background-panzoom="{$theme_vars_all_footers_panzoom}"
				data-background-duration="5000"
				data-background-color="{$theme_vars_all_footers_bg_color}"
				data-background-opacity="{$theme_vars_all_footers_bg_opacity}"
				{if $theme_vars_all_footers_bg_mode=="parallax_slow"}
				data-scroll-decay="0.1"
				{/if}
				{if $theme_vars_all_footers_bg_mode=="parallax_norm"}
				data-scroll-decay="0.5"
				{/if}
				{if $theme_vars_all_footers_bg_mode=="parallax_fast"}
				data-scroll-decay="0.9"
				{/if}
				{if $theme_vars_all_footers_bg_mode=="parallax_infini"}
				data-scroll-decay="1"
				{/if}
				{if $theme_vars_all_footers_bg_mode=="parallax_combined"}
				data-parallax-combined="1"
				{/if}
				style="background-color:{$theme_vars_all_footers_bg_color};{if $theme_vars_all_footers_bg_mode=="tile"}background-image:url(/images/themegraphics/{$theme_vars_all_footers_background1});background-repeat:repeat;{/if}"
				{if $theme_vars_all_footers_background_video&&$sitewideContent.All_Footers_Background_Video!=""}
					{assign var=videostr value="href=\"/media"|explode:$sitewideContent.All_Footers_Background_Video}
					{assign var=videostr2 value="\""|explode:$videostr[1]}
					{if !$theme_vars_all_footers_bg_sitewide||!$sitewideContent.All_Footers_Backgrounds}
						{assign var=imgstr value="src=\""|explode:$sitewideContent.All_Footers_Background_Video}
						{assign var=imgstr2 value="\""|explode:$imgstr[1]}
						{assign var=imgstr3 value=$imgstr2[0]}
					{else}
						{assign var=imgstr value="src=\""|explode:$sitewideContent.All_Footers_Backgrounds}
						{assign var=imgstr2 value="\""|explode:$imgstr[1]}
						{assign var=imgstr3t value="?"|explode:$imgstr2[0]}
						{assign var=imgstr3 value=$imgstr3t[0]}
					{/if}
					data-vide-bg="mp4: /media{$videostr2[0]}, poster: {$imgstr3}"
					data-vide-options="loop: true, muted: {if $theme_vars_mute_bg_video}true{else}false{/if}, position: 50% 50%, opacity: {$theme_vars_all_footers_bg_opacity}"
				{elseif $theme_vars_all_footers_background_video}
					data-vide-bg="mp4: /media/{$theme_vars_all_footers_background_video}, poster: /images/themegraphics/{$theme_vars_all_footers_background1}"
					data-vide-options="loop: true, muted: {if $theme_vars_mute_bg_video}true{else}false{/if}, position: 50% 50%, opacity: {$theme_vars_all_footers_bg_opacity}"
				{/if}
			>
	{/if}

	
	<div id="footer">
	{if $theme_vars_footer_bar_1}

		{include file=includes/mega_row.tpl
			mr_id=footer_bar_1
			bg_enabled=$theme_vars_footer_bar_1_bg_sitewide
			Backgrounds=$sitewideContent.Footer_Bar_1_Backgrounds
			background1=$theme_vars_footer_bar_1_background1
			background2=$theme_vars_footer_bar_1_background2
			background3=$theme_vars_footer_bar_1_background3
			background4=$theme_vars_footer_bar_1_background4
			background5=$theme_vars_footer_bar_1_background5
			panzoom=$theme_vars_footer_bar_1_panzoom
			background_video=$theme_vars_footer_bar_1_background_video
			background_video_sw_enabled=$theme_vars_footer_bar_1_bg_video_sitewide
			background_video_sw=$sitewideContent.Footer_Bar_1_Background_Video
			bg_color=$theme_vars_footer_bar_1_bg_color
			bg_opacity=$theme_vars_footer_bar_1_bg_opacity
			bg_mode=$theme_vars_footer_bar_1_bg_mode
			bg_align=$theme_vars_footer_bar_1_bg_align
			height=$theme_vars_footer_bar_1_height
			scale_prop=$theme_vars_footer_bar_1_scale_proportionally
			centered=$theme_vars_footer_bar_1_centered
			right=$theme_vars_footer_bar_1_right
			left=$theme_vars_footer_bar_1_left
			nav_style=$theme_vars_footer_bar_1_nav_style
			search=$theme_vars_footer_bar_1_search
			basket=$theme_vars_footer_bar_1_basket
			logo_file=$theme_vars_footer_bar_1_logo
			logo_retina=$theme_vars_footer_bar_1_logo_retina
			logo_link=$theme_vars_footer_bar_1_logo_link
			logo2=$theme_vars_footer_bar_1_logo2
			logo2_retina=$theme_vars_footer_bar_1_logo2_retina
			logo2_link=$theme_vars_footer_bar_1_logo2_link
			logo3=$theme_vars_footer_bar_1_logo3
			logo3_retina=$theme_vars_footer_bar_1_logo3_retina
			logo3_link=$theme_vars_footer_bar_1_logo3_link
			Left=$sitewideContent.Footer_Bar_1_Left
			Left_Secondary=$sitewideContent.Footer_Bar_1_Left_Secondary
			left_2=$theme_vars_footer_bar_1_left_2
			Right=$sitewideContent.Footer_Bar_1_Right
			Right_Secondary=$sitewideContent.Footer_Bar_Right_1_Secondary
			right_2=$theme_vars_footer_bar_1_right_2
			Centered=$sitewideContent.Footer_Bar_1_Centered
			left_valign=$theme_vars_footer_bar_1_left_valign
			right_valign=$theme_vars_footer_bar_1_right_valign
			inverted=$theme_vars_footer_bar_1_inverted
			full_top_enabled=$theme_vars_footer_bar_1_fullwidth_top
			full_top_content=$sitewideContent.Footer_Bar_1_Full_Width_Top
			full_bottom_enabled=$theme_vars_footer_bar_1_fullwidth_bottom
			full_bottom_content=$sitewideContent.Footer_Bar_1_Full_Width_Bottom
		}
		
	{/if}


	{if $theme_vars_footer_bar_2}

		{include file=includes/mega_row.tpl
			mr_id=footer_bar_2
			bg_enabled=$theme_vars_footer_bar_2_bg_sitewide
			Backgrounds=$sitewideContent.Footer_Bar_2_Backgrounds
			background1=$theme_vars_footer_bar_2_background1
			background2=$theme_vars_footer_bar_2_background2
			background3=$theme_vars_footer_bar_2_background3
			background4=$theme_vars_footer_bar_2_background4
			background5=$theme_vars_footer_bar_2_background5
			panzoom=$theme_vars_footer_bar_2_panzoom
			background_video=$theme_vars_footer_bar_2_background_video
			background_video_sw_enabled=$theme_vars_footer_bar_2_bg_video_sitewide			
			background_video_sw=$sitewideContent.Footer_Bar_2_Background_Video			
			bg_color=$theme_vars_footer_bar_2_bg_color
			bg_opacity=$theme_vars_footer_bar_2_bg_opacity
			bg_mode=$theme_vars_footer_bar_2_bg_mode
			bg_align=$theme_vars_footer_bar_2_bg_align
			height=$theme_vars_footer_bar_2_height
			scale_prop=$theme_vars_footer_bar_2_scale_proportionally
			centered=$theme_vars_footer_bar_2_centered
			right=$theme_vars_footer_bar_2_right
			left=$theme_vars_footer_bar_2_left
			nav_style=$theme_vars_footer_bar_2_nav_style
			search=$theme_vars_footer_bar_2_search
			basket=$theme_vars_footer_bar_2_basket
			logo_file=$theme_vars_footer_bar_2_logo
			logo_retina=$theme_vars_footer_bar_2_logo_retina
			logo_link=$theme_vars_footer_bar_2_logo_link
			logo2=$theme_vars_footer_bar_2_logo2
			logo2_retina=$theme_vars_footer_bar_2_logo2_retina
			logo2_link=$theme_vars_footer_bar_2_logo2_link
			logo3=$theme_vars_footer_bar_2_logo3
			logo3_retina=$theme_vars_footer_bar_2_logo3_retina
			logo3_link=$theme_vars_footer_bar_2_logo3_link
			Left=$sitewideContent.Footer_Bar_2_Left
			Left_Secondary=$sitewideContent.Footer_Bar_2_Left_Secondary
			left_2=$theme_vars_footer_bar_2_left_2
			Right=$sitewideContent.Footer_Bar_2_Right
			Right_Secondary=$sitewideContent.Footer_Bar_2_Right_Secondary
			right_2=$theme_vars_footer_bar_2_right_2
			Centered=$sitewideContent.Footer_Bar_2_Centered
			left_valign=$theme_vars_footer_bar_2_left_valign
			right_valign=$theme_vars_footer_bar_2_right_valign
			inverted=$theme_vars_footer_bar_2_inverted
			full_top_enabled=$theme_vars_footer_bar_2_fullwidth_top
			full_top_content=$sitewideContent.Footer_Bar_2_Full_Width_Top
			full_bottom_enabled=$theme_vars_footer_bar_2_fullwidth_bottom
			full_bottom_content=$sitewideContent.Footer_Bar_2_Full_Width_Bottom
		}
		
	{/if}



	{if $theme_vars_footer_bar_3}

		{include file=includes/mega_row.tpl
			mr_id=footer_bar_3
			bg_enabled=$theme_vars_footer_bar_3_bg_sitewide
			Backgrounds=$sitewideContent.Footer_Bar_3_Backgrounds
			background1=$theme_vars_footer_bar_3_background1
			background2=$theme_vars_footer_bar_3_background2
			background3=$theme_vars_footer_bar_3_background3
			background4=$theme_vars_footer_bar_3_background4
			background5=$theme_vars_footer_bar_3_background5
			panzoom=$theme_vars_footer_bar_3_panzoom
			background_video=$theme_vars_footer_bar_3_background_video
			background_video_sw_enabled=$theme_vars_footer_bar_3_bg_video_sitewide
			background_video_sw=$sitewideContent.Footer_Bar_3_Background_Video
			bg_color=$theme_vars_footer_bar_3_bg_color
			bg_opacity=$theme_vars_footer_bar_3_bg_opacity
			bg_mode=$theme_vars_footer_bar_3_bg_mode
			bg_align=$theme_vars_footer_bar_3_bg_align
			height=$theme_vars_footer_bar_3_height
			scale_prop=$theme_vars_footer_bar_3_scale_proportionally
			centered=$theme_vars_footer_bar_3_centered
			right=$theme_vars_footer_bar_3_right
			left=$theme_vars_footer_bar_3_left
			nav_style=$theme_vars_footer_bar_3_nav_style
			search=$theme_vars_footer_bar_3_search
			basket=$theme_vars_footer_bar_3_basket
			logo_file=$theme_vars_footer_bar_3_logo
			logo_retina=$theme_vars_footer_bar_3_logo_retina
			logo_link=$theme_vars_footer_bar_3_logo_link
			logo2=$theme_vars_footer_bar_3_logo2
			logo2_retina=$theme_vars_footer_bar_3_logo2_retina
			logo2_link=$theme_vars_footer_bar_3_logo2_link
			logo3=$theme_vars_footer_bar_3_logo3
			logo3_retina=$theme_vars_footer_bar_3_logo3_retina
			logo3_link=$theme_vars_footer_bar_3_logo3_link
			Left=$sitewideContent.Footer_Bar_3_Left
			Left_Secondary=$sitewideContent.Footer_Bar_3_Left_Secondary
			left_2=$theme_vars_footer_bar_3_left_2
			Right=$sitewideContent.Footer_Bar_3_Right
			Right_Secondary=$sitewideContent.Footer_Bar_3_Right_Secondary
			right_2=$theme_vars_footer_bar_3_right_2
			Centered=$sitewideContent.Footer_Bar_3_Centered
			left_valign=$theme_vars_footer_bar_3_left_valign
			right_valign=$theme_vars_footer_bar_3_right_valign
			inverted=$theme_vars_footer_bar_3_inverted
			full_top_enabled=$theme_vars_footer_bar_3_fullwidth_top
			full_top_content=$sitewideContent.Footer_Bar_3_Full_Width_Top
			full_bottom_enabled=$theme_vars_footer_bar_3_fullwidth_bottom
			full_bottom_content=$sitewideContent.Footer_Bar_3_Full_Width_Bottom
		}
		
	{/if}
	</div>
	{if $theme_vars_all_footers_bg_enabled}
	</div>
	{/if}
	<div id="search-form-popdown">
		<div class="tri"></div>
		<form action="/actions/SearchForward/" method="post" id="searchFormSmall">
			<input type="hidden" name="language" value="{$content.language}"/>
			<input id="navSearch" type="search" maxlength="60" title="{$langs.Search}" name="string" value="" required="true" placeholder="{$langs.Search}" />
			<input type="submit" value="{$langs.Search}" class="search-form-hide-with-js"/>
			<p id="search-form-popdown-button" class="submit_form"><a href="#">{$langs.Search}</a></p>
		</form>
	</div>
	


	
	
	{if $skipinline}
	<script src="/javascripts/jquery.vide.js?v=2"></script>
	<script src="/javascripts/owl.carousel.min.js"></script>
	<script src="/javascripts/backstretch.js?v=10"></script>
	<script src="/javascripts/doubletaptogo.js"></script>
	<script src="/javascripts/overlaps.js"></script>
	<script src="/javascripts/countdown.js"></script>
	{else}
	
	{inline_file location=theme file=jquery.vide.js type=js}
	{inline_file location=theme file=owl.carousel.min.js type=js}
	{inline_file location=theme file=backstretch.js type=js}
	{inline_file location=theme file=doubletaptogo.js type=js}
	{inline_file location=theme file=overlaps.js type=js}
	{inline_file location=theme file=countdown.js type=js}
	<script src="/javascripts/jquery.vide.js?v=2" async></script>
	<script src="/javascripts/owl.carousel.min.js" async></script>
	<script src="/javascripts/backstretch.js?v=9" async></script>
	<script src="/javascripts/doubletaptogo.js" async></script>
	<script src="/javascripts/overlaps.js" async></script>
	<script src="/javascripts/countdown.js" async></script>
	{/if}
	
	<div id="mp_lightbox_outer">
		<div id="mp_lightbox_outer_outer">
			<div id="mp_lightbox_inner">
				<div id="mp_lighbox_content"></div>
				<div id="closeMP"><a href="#">Close</a></div>
			</div>			
		</div>
	</div>
	<style type="text/css">body {literal}{{/literal} background-color:{$bodybg}; {literal}}{/literal}</style>
	{$theme_vars_body_code}
</body>
</html>
{/if}