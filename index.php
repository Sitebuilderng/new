<?php
if (isset($_REQUEST['maintenance'])) {
	// Prevents access to the admin and pages while update in progress. 
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Briefly down for maintenance</title>
	</head>
	<body style="background:#F5F5F5">
		<p style="margin:100px auto;width:300px;font-family:arial,sans-serif;font-size:14px;line-height:20px;color:#666;padding:20px 30px;background:#E2E2E2;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;">We're performing <strong>scheduled maintenance</strong> on our website right now. It should be back online within a few moments. <br/><br/>Please reload again soon.</p>

	</body>
	</html>
	<?php
} else {
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Installation not complete</title>
	</head>
	<body style="background:#F5F5F5">
		<p style="margin:100px auto;width:300px;font-family:arial,sans-serif;font-size:14px;line-height:20px;color:#666;padding:20px 30px;background:#E2E2E2;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;">Installation of SetSeed is not complete - please visit the installer at <a href="/install">/install</a>.</p>

	</body>
	</html>
	<?php
}
?>