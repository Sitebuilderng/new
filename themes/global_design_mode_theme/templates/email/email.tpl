<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Email</title>

<link rel="stylesheet" type="text/css" href="http://{$url}/css/email.css" />
{literal}
<style media="screen">
	@media only screen and (max-width: 600px) {

		p[class="Button_Large"] a { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

		div[class="column"] { width: auto!important; float:none!important;}

		.colblock tr,.colblock td {
			display:block;
		}
		.colblock {
			margin-bottom:20px;
		}
		.colblock td.colblock-divider {
			display:none;
		}

		.mw,.container {
			width:auto!important;
			}

		h1 { font-size: 44px !important; color:#4A4A4A;}
		h2 { font-size: 27px !important; color:#4A4A4A; }
		h3 { font-size: 17px !important; color:#4A4A4A; }
		h4 { font-size: 13px !important; color:#4A4A4A; }
		h5 { font-size: 14px !important; color:#4A4A4A; }
		h6 { font-size: 14px; text-transform: uppercase; color:#444;}
		.cols .Button_Small a,.cols .Button_Medium a,.cols .Button_Large a {
			font-size:10px !important;
			line-height:12px !important;
			padding:3px 1px !important;
			font-weight:normal !important;
		}
		.collapse { margin:0!important;}

		p, ul {
			margin-bottom: 20px;
			font-weight: normal;
			font-size:14px !important;
			line-height:1.6;
			color:#4A4A4A;
			margin-top: 0;
		}

	}
	{/literal}
	{$theme_vars_newsletter_css}
	{literal}
</style>
{/literal}
</head>

<body bgcolor="#FFFFFF">
{if !$form_autoresponse && !$mailinglist_autoresponse}
<p id="webversion" class="hide_in_webversion">Can't see this properly? <a href="***WEBVERSION***">Click here</a></p>
{/if}

<table class="head-wrap" bgcolor="#e9e9e9">
	<tr>
		<td></td>
		<td class="header container" >

				<div class="content">
				<table bgcolor="#e9e9e9">
					<tr>
						<td><img src="http://{$url}/images/themegraphics/{if $theme_vars_main_newsletter_logo}{$theme_vars_main_newsletter_logo}{else}{$theme_vars_newsletter_logo}{/if}" width="200" height="56" /></td>
						<td align="right"><h6 class="collapse">{$smarty.now|date_format}</h6></td>
					</tr>
				</table>
				</div>

		</td>
		<td></td>
	</tr>
</table>

<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">

			<div class="content">
			<table>
				<tr>
					<td>

						{$contentSplit.normal}
						{if $theme_vars_newsletter_contact || $theme_vars_main_newsletter_contact}
						<table class="social" width="100%">
							<tr>
								<td>

									<table align="left" class="column">
										<tr>
											<td>

												<h5 class="">Connect with Us:</h5>
												<p class="">{if $theme_vars_facebook_link}<a href="{$theme_vars_facebook_link}" class="soc-btn fb">Facebook</a>{/if} {if $theme_vars_twitter_link}<a href="{$theme_vars_twitter_link}" class="soc-btn tw">Twitter</a>{/if} {if $theme_vars_gplus_link}<a href="{$theme_vars_gplus_link}" class="soc-btn gp">Google+</a>{/if}</p>


											</td>
										</tr>
									</table>
									<table align="left" class="column">
										<tr>
											<td>

												<h5 class="">Contact Info:</h5>
												<p>{if $theme_vars_newsletter_phone || $theme_vars_phone_number}Phone: <strong>{if $theme_vars_newsletter_phone}{$theme_vars_newsletter_phone}{else}{$theme_vars_phone_number}{/if}</strong><br/>{/if}
													{if $theme_vars_newsletter_email || $theme_vars_email_link}Email: <strong><a href="mailto:{if $theme_vars_newsletter_email}{$theme_vars_newsletter_email}{else}{$theme_vars_email_link}{/if}">{if $theme_vars_newsletter_email}{$theme_vars_newsletter_email}{else}{$theme_vars_email_link}{/if}</a></strong>{/if}</p>

											</td>
										</tr>
									</table>

									<span class="clear"></span>

								</td>
							</tr>
						</table>
						{/if}
					</td>
				</tr>
			</table>
			</div>
		</td>
		<td></td>
	</tr>
</table>
<table class="footer-wrap">
	<tr>
		<td></td>
		<td class="container">

				<!-- content -->
				<div class="content">
				<table>
				<tr>
					<td align="center">
						{if !$form_autoresponse}
						<p id="unsub" class="hide_in_webversion">To unsubscribe from this newsletter <a href="http://{$url}/newsletter_remove.php?id=***ID***&email=***EMAIL***">click here</a>.</p>
						{/if}
					</td>
				</tr>
			</table>
				</div>
		</td>
		<td></td>
	</tr>
</table>
</body>
</html>
