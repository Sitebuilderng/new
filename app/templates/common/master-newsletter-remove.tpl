<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>{$langs.Unsubscribed}</title>
	<style type="text/css" media="screen">
		{literal}
		#outer {
			margin:100px auto;width:300px;font-family:arial,sans-serif;font-size:14px;line-height:20px;color:#666;padding:20px 30px;background:#E2E2E2;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;
		}
		.Button_Medium {
			margin:0;
		}
		.Button_Medium a {
			padding:5px 15px;
			background:#FB0810;
			color:#fff;
			text-decoration:none;
			display:inline-block;
			border-radius:4px;
		}
		label {
			display:block;
		}
		.saved {
			border-radius:4px;
			
			background:#41BE00;
			padding:2px 5px;
			color:#fff;
			display:inline-block;
		}
		{/literal}
	</style>
</head>
<body style="background:#F5F5F5">
	<div id="outer">
	{if $hascats}
		{if $showform}
			<h3>Update your newsletter preferences</h3>
			<p>Choose which categories to subscribe to:</p>
			<form action="" method="post" id="catsform">
				<input type="hidden" name="categories" value="">
				{foreach from=$categories item=category}
				<label><input type="checkbox" name="{$category.id}" value="" {if $category.subscribed}checked="checked"{/if} onchange="document.getElementById('catsform').submit();"> {$category.name}</label>			
				{/foreach}
			</form>
			{if $saved}<p class="saved">Saved</p>{/if}
			<p>Even with all categories unticked you may still receive general newsletters. Click the following button to opt out from <strong>all</strong> lists.</p>
			<p class="Button_Medium"><a href="?key={$smarty.get.key}&id={$smarty.get.id}&optout=1">Unsubscribe from all lists</a></p>

		{/if}
	{else}
		<p>{if $removed}{$langs.You_Have_Been_Unsubscribed_More} <strong>{$removed}</strong>{else}{$langs.No_Email_Address_Found_More}{/if}</p>
	{/if}
	</div>
</body>
</html>
{*
------------------------------------------------------------------------------------
VARIABLES AVAILABLE IN THIS TEMPLATE: 
------------------------------------------------------------------------------------	


{$removed}	<-	The email address that has been removed. Only exists if email was 
				successfully removed.

------------------------------------------------------------------------------------		
*}