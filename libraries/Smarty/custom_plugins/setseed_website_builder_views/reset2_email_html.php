<?php include "html_email_header.php"; ?>


<h1 style="margin: 2em 0 1em;font-size:20px;font-family:arial,sans-serif;text-align:center;">Your new password</h1>

<p style="margin: 1em 0;font-size:14px;line-height:18px;font-family:arial,sans-serif;text-align:center;">Your password has successfully been reset. Your new password is:</p>

<p style="margin: 1em 0;font-size:14px;line-height:18px;font-family:arial,sans-serif;text-align:center;"><strong><?php echo $pass; ?></strong></p>

<p style="margin: 1em 0;font-size:14px;line-height:18px;font-family:arial,sans-serif;text-align:center;">You can now use it to <a href="<?php echo $link; ?>">login</a>. Once you login you can change your password to something else if you wish.</p>


<?php include "html_email_footer.php"; ?>