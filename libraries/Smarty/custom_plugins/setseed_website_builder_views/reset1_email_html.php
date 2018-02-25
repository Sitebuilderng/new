<?php include "html_email_header.php"; ?>


<h1 style="margin: 2em 0 1em;font-size:20px;font-family:arial,sans-serif;text-align:center;">Reset password confirmation</h1>

<p style="margin: 1em 0;font-size:14px;line-height:18px;font-family:arial,sans-serif;text-align:center;">You’ve requested to reset your password.</p>

<p style="margin: 1em 0;font-size:14px;line-height:18px;font-family:arial,sans-serif;text-align:center;">Click the link below to reset your password. If you didn‘t ask to reset your password please ignore this email. Nothing will change.</p>

<p style="margin: 2em 0 1em;font-size:14px;font-family:arial,sans-serif;text-align:center;" class="Button_Large"><a style="text-decoration:none; color: #FFF; background-color: #17C3FF; padding:14px 26px; font-weight:bold; margin-right:10px; text-align:center; cursor:pointer; display: inline-block; border-radius: 3px; font-size: 18px; box-shadow: 1px 1px 2px rgba(0,0,0,0.5);" href="<?php echo $link; ?>">Reset my password</a></p>


<?php include "html_email_footer.php"; ?>