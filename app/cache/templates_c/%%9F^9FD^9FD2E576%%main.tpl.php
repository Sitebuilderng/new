<?php /* Smarty version 2.6.18, created on 2018-02-17 15:36:53
         compiled from sites/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'sites/main.tpl', 110, false),array('modifier', 'array_reverse', 'sites/main.tpl', 170, false),array('modifier', 'htmlspecialchars', 'sites/main.tpl', 178, false),array('modifier', 'in_array', 'sites/main.tpl', 318, false),array('modifier', 'ucfirst', 'sites/main.tpl', 882, false),array('modifier', 'replace', 'sites/main.tpl', 882, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title><?php if ($this->_tpl_vars['brand_name']): ?><?php echo $this->_tpl_vars['brand_name']; ?>
<?php else: ?>SetSeed<?php endif; ?> Hub</title>
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" title="Default Style" charset="utf-8"/>
	<link rel="stylesheet" href="css/global.css?v=5" type="text/css" media="screen" title="Default Style" charset="utf-8"/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	<script src="javascripts/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascripts/form.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascripts/jquery.hoverintent.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascripts/sha1-min.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascripts/passwordcheck.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascripts/custom.js?v=6" type="text/javascript" charset="utf-8"></script>
	<link rel="icon" href="graphics/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="graphics/favicon.ico" type="image/x-icon"/>
</head>

<body <?php if (! $this->_tpl_vars['loggedIn'] || $this->_tpl_vars['firstTimeUser']): ?>id="loginbody"<?php else: ?>id="main"<?php endif; ?>>
	<div id="header"><img src="<?php if ($this->_tpl_vars['brand_img']): ?><?php echo $this->_tpl_vars['brand_img']; ?>
<?php else: ?>graphics/logo-light.png<?php endif; ?>" width="220" height="65" alt="<?php if ($this->_tpl_vars['brand_name']): ?><?php echo $this->_tpl_vars['brand_name']; ?>
<?php else: ?>SetSeed<?php endif; ?>" id="logo"/>
	<?php if ($this->_tpl_vars['firstTimeUser'] || ! $this->_tpl_vars['loggedIn']): ?><?php else: ?><a id="logout" href="logout.php" title="Logout">Logout</a><div id="settings" title="Settings">Change email/pass</div><div id="serverAPI" title="View Server API Key">API</div><a href="#" id="brands">Brands</a>
	<a href="export.php" target="_blank" id="export">Export Master Users</a>
	<a href="export.php?allstaff=1" target="_blank" id="exportall">Export All Users</a>
	<a href="#" id="addNewSite">Add new website</a><?php endif; ?>


	<p id="hub">Hub</p>
	<div class="clear"><!-- --></div>
	</div>
	<?php if ($this->_tpl_vars['installExists']): ?>
		<div id="wrapper"><p class="info">Important: As a security precaution please delete the 'install' folder from your Document Root, then refresh this page to continue.</p></div>
	<?php else: ?>

	<div id="wrapper">

		<?php if (! $this->_tpl_vars['loggedIn'] && ! $this->_tpl_vars['firstTimeUser']): ?>
			<?php if ($this->_tpl_vars['loginFail']): ?>
			<p id="loginerror">Your username/email or password is incorrect.</p>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['reset']): ?>
			<p id="loginerror"><strong>Reset password.</strong> If you entered a correct email address you will receive a password reset confirmation email. </p>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['resestok']): ?>
<p id="loginerror">A new password has been emailed to you - please use it to login below.</p>
			<?php endif; ?>
			<form action="/sh/" method="post" id="login">
				<input type="hidden" name="salt" value="<?php echo $this->_tpl_vars['salt']; ?>
" id="salt"/>
				<input type="hidden" name="timestamp" value="<?php echo $this->_tpl_vars['time']; ?>
" id="timestamp"/>
				<input type="hidden" name="hash" value="" id="hash"/>
				<?php if ($this->_tpl_vars['returnUrl'] != ""): ?>
				<input type="hidden" name="returnUrl" value="<?php echo $this->_tpl_vars['returnUrl']; ?>
" id="returnUrl"/>
				<?php endif; ?>
								<input type="text" name="username" value="" id="loginUser" class="permInput" placeholder="<?php if ($this->_tpl_vars['emailAsLogin']): ?>Email<?php else: ?>Username<?php endif; ?>"/>
				<div class="clear"><!-- --></div>
				<div id="passwordFieldset">
								<input type="password" name="password" value="" id="loginPass" class="permInput" placeholder="Password"/>
				<div class="clear"><!-- --></div>
				</div>
				<?php if ($this->_tpl_vars['emailAsLogin']): ?><div class='passwordReset'><input type="checkbox" name='reset' id='resetPass'> <label for='resetPass'>I have forgotten my password</label></div><?php endif; ?>
				<div class='keepLoggedIn'><input type="checkbox" name='persistent' value="yes" id='keep'> <label for='keep'>Keep me logged in on this machine</label></div>

				<div class="clear"><!-- --></div>
				<div class='formButton' id="loginGo">Login</div>

			</form>

		<?php endif; ?>
		<?php if ($this->_tpl_vars['firstTimeUser']): ?>
			<?php if ($_GET['installsuccess']): ?>
			<p class="info success">Installation complete.</p>
			<?php endif; ?>
			<p class="info">Before you can start creating and managing websites with SetSeed, you need to create a login account for your SetSeed Hub.</p>
			<form action="" method="post" id="addLogin">
				<input type="hidden" name="salt" value="<?php echo $this->_tpl_vars['salt']; ?>
" id="salt"/>
				<input type="hidden" name="timestamp" value="<?php echo $this->_tpl_vars['time']; ?>
" id="timestamp"/>

								<input type="text" placeholder="Email" name="username" value="" id="addUsername" class="permInput"/>
				<div class="clear"><!-- --></div>
								<input type="password" placeholder="Password" name="password" value="" id="addPassword1" class="permInput"/>
				<div class="clear"><!-- --></div>
								<input type="password" placeholder="Password (again)" name="password2" value="" id="addPassword2" class="permInput"/>
				<div class="clear"><!-- --></div>
				
				<div class="formButton" id="loginBut">Create Account</div>
			</form>
			<div class="clear"><!-- --></div>
			<p id="notmatch">The passwords don't match!</p>
			<p id="notstrong">Your password isn't secure enough.</p>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['loggedIn']): ?>
			<div class="clearfix"></div>
			<?php if ($this->_tpl_vars['readytoload']): ?>
				<p class="section">You have <?php echo count($this->_tpl_vars['readytoload']); ?>
 site<?php if (count($this->_tpl_vars['readytoload']) > 1): ?>s<?php endif; ?> in your 'sites' folder that <?php if (count($this->_tpl_vars['readytoload']) > 1): ?>aren't<?php else: ?>isn’t<?php endif; ?> imported. They will not be accessible until you have imported them. </p>
				<?php $_from = $this->_tpl_vars['readytoload']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['load']):
        $this->_foreach['loop1']['iteration']++;
?>
					<div class="site clearfix importSite">
												<p class="url"><span class="edit"><?php echo $this->_tpl_vars['load']['folder']; ?>
</span></p>
						<div class="popup">
						<img src='/admin/graphics/bpeditor/help.png' alt='<?php if ($this->_tpl_vars['fullpriv'] == false): ?>Your SetSeed master user doesn’t have sufficient privileges to automate the creation of new MySQL Databases and Users, so please use your web host control panel to create a new database and user to use with this website and enter the connection information. This must be a unique and empty database used only with the website you are creating. It is not the same database/user you used when you installed SetSeed. || You can also use an existing database which already contains a valid SetSeed site database by choosing ‘Use existing database’ and entering the connection information for your existing database. || <?php else: ?>If you want to import this site into SetSeed but use an existing database which you’ve already imported manually, you can choose ‘Use existing database’ and then enter the database connection information for your database. This should be a database that already contains a SetSeed website’s data.<?php endif; ?>' class='bpe_help' />

						<label class="bpe_label">URL:</label>
						<?php if ($this->_tpl_vars['load']['folder'] == 'examplecom'): ?>
						<p class="infoP">This is an example site and must use www.example.com as the URL. You will be able to visit it using the preview domain system at: http://www.example.com.<?php echo $this->_tpl_vars['server']; ?>
/ providing you add that URL as an Addon Domain or Domain Alias in your server control panel.</p>
						<input type="hidden" value="www.example.com" name="newUrl" class="newUrl bpe_input"/>
						<input type="radio" value="import" name="dbsource" style="position:absolute;top:-1000px;" checked="checked"/>
						<?php else: ?>
						<form class="editUrl"><input type="text" value="" name="newUrl" class="newUrl bpe_input"/></form>
						<?php endif; ?>
						
						<label class="bpe_label">Folder:</label>
						<p class="infoP"><?php echo $this->_tpl_vars['sitespath']; ?>
/sites/<?php echo $this->_tpl_vars['load']['folder']; ?>
</p>
						<div class="clear"><!-- --></div>
						<?php if ($this->_tpl_vars['load']['folder'] != 'examplecom'): ?>
						<p class="infoLabel"><input type="radio" value="import" name="dbsource" checked="checked"/></p>
						<p class="infoP">Import data from db.sql file in site's folder</p>
						<div class="clear"><!-- --></div>
						<p class="infoLabel"><input type="radio" value="existing" name="dbsource"/></p>
						<p class="infoP">Use existing database</p>
						<div class="clear"><!-- --></div>
						<?php endif; ?>
						<div class="manualimport clearfix <?php if ($this->_tpl_vars['fullpriv'] == false): ?>show<?php endif; ?>"<?php if ($this->_tpl_vars['fullpriv'] == true): ?>style="display:none"<?php endif; ?>>
							<label class="bpe_label">Database name:</label> <input type="text" name="" value="" id="" class="bpe_input dbname"/>
							<div class="clear"><!-- --></div>
							<label class="bpe_label">Database host:</label> <input type="text" name="" value="<?php echo $this->_tpl_vars['host']; ?>
" id="" class="bpe_input dbhost"/>
							<div class="clear"><!-- --></div>

							<label class="bpe_label">Database user:</label> <input type="text" name="" value="" id="" class="bpe_input dbuser"/>
							<div class="clear"><!-- --></div>

							<label class="bpe_label">Database password:</label> <input type="text" name="" value="" id="" class="bpe_input dbpass"/>
						</div>

						<div class="clear"><!-- --></div>
						<img src="graphics/4-1.gif" class="loadingButton" style="float:right;margin-top:10px;margin-right:25px;"/>
						<div class='bpe_savecancel'>
							<div class="bpe_savecancel_inner">
							<a href='<?php echo $this->_tpl_vars['load']['folder']; ?>
' class='importNow bpe_save <?php if ($this->_tpl_vars['fullpriv'] == false): ?>manDB<?php endif; ?>'><span>Import</span></a><a href='#' class='bpe_cancel'><span>Cancel</span></a>
							<h2>Import site: <?php echo $this->_tpl_vars['load']['folder']; ?>
</h2>
							</div>
						</div>
						</div>
					</div>
				<?php endforeach; endif; unset($_from); ?>
				<div class="clear dotted"><!-- --></div>

			<?php endif; ?>

			<p class="section">The following sites are imported and will be visible on their preview domain or providing the actual domain's DNS is pointing to this server. <?php if ($_GET['dnscheck']): ?><a href="/sh/">Done.</a><?php else: ?><a href="?dnscheck=1" id="dnstest">Test live domains</a> or <a href="?dnscheck=1&settolive=1" id="dnstest">Test live domains and set Live checkboxes for live sites</a><?php endif; ?>.</p>
														<?php $_from = array_reverse($this->_tpl_vars['sites']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['site']):
        $this->_foreach['loop1']['iteration']++;
?>
				<div class="site clearfix <?php if ($this->_tpl_vars['site']['is_live']): ?>islive<?php endif; ?>" title="<?php echo $this->_tpl_vars['site']['url']; ?>
">
										<p class="url">
						<?php if ($_GET['dnscheck'] == 1): ?>
						<span class="dns <?php if ($this->_tpl_vars['site']['dns']): ?>dns-live<?php endif; ?>">DNS</span>
						<?php endif; ?>
						<span class="edit"><?php echo $this->_tpl_vars['site']['url']; ?>
</span>
						<span class="client_name_row"><?php echo ((is_array($_tmp=$this->_tpl_vars['site']['client_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
						<span class="client_phone_row"><?php echo ((is_array($_tmp=$this->_tpl_vars['site']['client_phone'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
						<span class="site-buttons">
							<a class="site-button site-settings">Settings</a>
							<?php if ($this->_tpl_vars['site']['is_live']): ?>
						
							<a target="_blank" class="site-button site-cms" href="/sh/sso.php?url=<?php echo $this->_tpl_vars['site']['url']; ?>
">CMS</a>
							<a target="_blank" class="site-button site-view" href="http://<?php echo $this->_tpl_vars['site']['url']; ?>
/">View Site</a>
							<?php else: ?>
							<a target="_blank" class="site-button site-cms" href="/sh/sso.php?url=<?php echo $this->_tpl_vars['site']['url']; ?>
.<?php echo $this->_tpl_vars['server']; ?>
">CMS</a>
							<a target="_blank" class="site-button site-view" href="http://<?php echo $this->_tpl_vars['site']['url']; ?>
.<?php echo $this->_tpl_vars['server']; ?>
/">View Site</a>
						
							<?php endif; ?>
						</span>
					</p>


					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['invisible_key']; ?>
" class="folderVal"/>
					<?php if ($this->_tpl_vars['site']['dbname'] == ""): ?>
					<input type="hidden" name="" value="setseed_<?php echo $this->_tpl_vars['site']['invisible_key']; ?>
" class="dbVal"/>
					<?php else: ?>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['dbname']; ?>
" class="dbVal"/>
					<?php endif; ?>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['user']; ?>
" class="userVal"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['lang']; ?>
" class="langVal"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['storage']; ?>
" class="storageVal"/>

					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['limit_storage']; ?>
" class="limit_storage"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['limit_pages']; ?>
" class="limit_pages"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['limit_products']; ?>
" class="limit_products"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['limit_blogs']; ?>
" class="limit_blogs"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['limit_staff']; ?>
" class="limit_staff"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disabled_backend']; ?>
" class="disabled_backend"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disabled_frontend']; ?>
" class="disabled_frontend"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disabled_backend_redirect']; ?>
" class="disabled_backend_redirect"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disabled_frontend_redirect']; ?>
" class="disabled_frontend_redirect"/>

					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_videos']; ?>
" class="disable_videos"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_galleries']; ?>
" class="disable_galleries"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_forms']; ?>
" class="disable_forms"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_products']; ?>
" class="disable_products"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_calendars']; ?>
" class="disable_calendars"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_snippets']; ?>
" class="disable_snippets"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_livechat']; ?>
" class="disable_livechat"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_embed_codes']; ?>
" class="disable_embed_codes"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_mailing_list']; ?>
" class="disable_mailing_list"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_blog']; ?>
" class="disable_blog"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_staff']; ?>
" class="disable_staff"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_bookings']; ?>
" class="disable_bookings"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_design']; ?>
" class="disable_design"/>
					<input type="hidden" name="" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['site']['client_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" class="client_name"/>
					<input type="hidden" name="" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['site']['client_phone'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" class="client_phone"/>
					<input type="hidden" name="" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['site']['client_notes'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" class="client_notes"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['force_ssl']; ?>
" class="force_ssl"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['is_live']; ?>
" class="is_live"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_help']; ?>
" class="disable_help"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['custom_link_1_text']; ?>
" class="custom_link_1_text"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['custom_link_1_link']; ?>
" class="custom_link_1_link"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['custom_link_2_text']; ?>
" class="custom_link_2_text"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['custom_link_2_link']; ?>
" class="custom_link_2_link"/>
					<input type="hidden" name="" value="<?php if ($this->_tpl_vars['site']['accessibility_mode'] == ""): ?>a.<?php echo $this->_tpl_vars['site']['url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['site']['accessibility_mode']; ?>
<?php endif; ?>" class="accessibility_mode"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['omit_fourth']; ?>
" class="omit_fourth"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['disable_cache']; ?>
" class="disable_cache"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['ui_colour']; ?>
" class="ui_colour"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['api_key']; ?>
" class="api_key"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['license_status']; ?>
" class="license_status"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['brand']; ?>
" class="brand_id"/>
						<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['admin_language']; ?>
" class="admin_lang"/>
					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['site']['siteid']; ?>
" class="site_id"/>
					<div class="themes" style="display:none">
					<select name="theme" class="themesel">
						<?php if (count($this->_tpl_vars['site']['themes']) >= 1 || count($this->_tpl_vars['site']['global_themes']) >= 1): ?>
							<?php $_from = $this->_tpl_vars['site']['themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['theme']):
        $this->_foreach['loop1']['iteration']++;
?>
							<option value=<?php echo $this->_tpl_vars['theme']; ?>
 <?php if ($this->_tpl_vars['theme'] == $this->_tpl_vars['site']['theme']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['theme']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
							<?php $_from = $this->_tpl_vars['site']['global_themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['theme']):
        $this->_foreach['loop1']['iteration']++;
?>
							<option value=<?php echo $this->_tpl_vars['theme']; ?>
 <?php if ($this->_tpl_vars['theme'] == $this->_tpl_vars['site']['theme']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['theme']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>

						<?php else: ?>
						<option class="dropdown" selected="selected"><?php echo $this->_tpl_vars['site']['theme']; ?>
</option>
						<?php endif; ?>
					</select>
					</div>
				</div>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
			<div class="clear"><!-- --></div>
	</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['loggedIn']): ?>
	<div id="mask"></div>
	<div id="lightbox" class="bpe_add_popup">
		<div id="lightboxInner" class="bpe_add_popup_inner">
		<img src='/admin/graphics/bpeditor/help.png' alt='To remove this site from SetSeed: || Export the database to the db.sql file in the site folder by clicking the "Prepare backup" button. This will then make it simple to re-import the site if you need to later. ||  Make a complete backup of the MySQL database. We recommend using the mysqldump tool to do this. The "Prepare backup" button above may not make an exact copy of the database (in particular it doesn’t save site statistics). || Removing the site from SetSeed by clicking the remove button. This will only remove the reference to this site from the master SetSeed list - it will not remove the MySQL user or database associated with this site. || You can then remove the site’s folder from the ‘sites’ folder on your server. Make a backup first! || Tip: Use your own preview image by adding a JPG image called preview.jpg to this site’s folder' class='bpe_help' />
		<input type="hidden" name="" value="" id="license_status">
		<input type="hidden" name="" value="" id="site_id">
		<form class="editUrl">

		<label class="bpe_label">URL:</label>
<input type="hidden" class="oldUrl" name="oldUrl" value="" /><input type="text" value="" name="newUrl" class="newUrl bpe_input"/>
		<label class="bpe_label">Accesible Version URL:</label>
		<input type="text" value="" name="accessibility_mode" class="bpe_input" id="accessibility_mode"/>
						
		<label class="bpe_label">Force HTTPS:</label>
		<input type="checkbox" class="bpe_checkbox" id="force_ssl"/>
		<label class="bpe_label">Use live domain:</label>
		<input type="checkbox" class="bpe_checkbox" id="is_live"/>

<label class="bpe_label">Preview URL:</label>
<p class="infoP "><a href="" target="_blank" title="<?php echo $this->_tpl_vars['server']; ?>
" class="newURLHref">http://<span class="newUrlText"></span>.<span id="server"><?php echo $this->_tpl_vars['server']; ?>
</span></a></p>
		<p class="bpe_input_info">You'll need to configure your server/DNS to use both the URL and preview URL as aliases for your main SetSeed host ( http://<?php echo $this->_tpl_vars['server']; ?>
/ ).  </p>

		<a href="#" id="loginCMS" class="bpe_popup_button belowInput" target="_blank"><span>Login to CMS</span></a>

		<div class="clear"></div>
		<div style="margin-top:20px;" class="clear visible"></div>
		
				<label class="bpe_label">Client name:</label>
				<input type="text" value="" name="" id="" class=" clientname bpe_input"/>
				<label class="bpe_label">Client phone:</label>
				<input type="text" value="" name="" id="" class="clientphone bpe_input"/>
				
				<label class="bpe_label">Notes:</label>
				<textarea id="" class="notes bpe_textarea"></textarea>
		
		<div style="margin-top:20px;" class="clear visible"></div>
		
		<label class="bpe_label">Theme:</label>
		<p class="theme"></p>
		<div class="clear"></div>
		<label class="bpe_label">Brand:</label>
		<select id="brandChoose">
			<option class="leave" value="0">Default Branding</option>
		</select>
		<div class="clear"></div>
		<label class="bpe_label">Default Page Language:</label>
		<select class="lang" id="lang">
								<option value="en">English</option>
								<option value='-' disabled>---</option>
								<?php if (((is_array($_tmp='ab')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ab">Abkhazian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='aa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="aa">Afar</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp="")) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="af">Afrikaans</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ak')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ak">Akan</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sq')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sq">Albanian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='am')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="am">Amharic</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ar')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ar">Arabic</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='an')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="an">Aragonese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='hy')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="hy">Armenian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='as')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="as">Assamese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='av')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="av">Avaric</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ae')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ae">Avestan</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ay')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ay">Aymara</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='az')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="az">Azerbaijani</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='bm')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="bm">Bambara</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ba')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ba">Bashkir</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='eu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="eu">Basque</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='be')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="be">Belarusian</option>
								<?php endif; ?>
																<?php if (((is_array($_tmp='bh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="bh">Bihari</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='bi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="bi">Bislama</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='nb')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="nb">Bokmål, Norwegian; Norwegian Bokmål</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='bs')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="bs">Bosnian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='br')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="br">Breton</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='bg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="bg">Bulgarian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='my')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="my">Burmese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ca')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ca">Catalan; Valencian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='km')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="km">Central Khmer</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ch')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ch">Chamorro</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ce')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ce">Chechen</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ny')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ny">Chichewa; Chewa; Nyanja</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='zh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="zh">Chinese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='cu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="cu">Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='cv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="cv">Chuvash</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='kw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="kw">Cornish</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='co')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="co">Corsican</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='cr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="cr">Cree</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='hr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="hr">Croatian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='cs')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="cs">Czech</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='da')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="da">Danish</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='dv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="dv">Divehi; Dhivehi; Maldivian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='nl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="nl">Dutch; Flemish</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='dz')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="dz">Dzongkha</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='eo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="eo">Esperanto</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='et')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="et">Estonian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ee')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ee">Ewe</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='fo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="fo">Faroese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='fj')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="fj">Fijian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='fi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="fi">Finnish</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='fr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="fr">French</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ff')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ff">Fulah</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='gd')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="gd">Gaelic; Scottish Gaelic</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='gl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="gl">Galician</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='lg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="lg">Ganda</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ka')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ka">Georgian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='de')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="de">German</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='el')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="el">Greek, Modern (1453-)</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='gn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="gn">Guarani</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='gu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="gu">Gujarati</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ht')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ht">Haitian; Haitian Creole</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ha')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ha">Hausa</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='he')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="he">Hebrew</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='hz')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="hz">Herero</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='hi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="hi">Hindi</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ho')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ho">Hiri Motu</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='hu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="hu">Hungarian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='is')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="is">Icelandic</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='io')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="io">Ido</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ig')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ig">Igbo</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='id')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="id">Indonesian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ia')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ia">Interlingua (International Auxiliary Language Association)</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ie')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ie">Interlingue</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='iu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="iu">Inuktitut</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ik')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ik">Inupiaq</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ga')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ga">Irish</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='it')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="it">Italian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ja')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ja">Japanese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='jv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="jv">Javanese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='kl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="kl">Kalaallisut; Greenlandic</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='kn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="kn">Kannada</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='kr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="kr">Kanuri</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ks')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ks">Kashmiri</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='kk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="kk">Kazakh</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ki')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ki">Kikuyu; Gikuyu</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='rw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="rw">Kinyarwanda</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ky')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ky">Kirghiz; Kyrgyz</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='kv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="kv">Komi</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='kg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="kg">Kongo</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ko')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ko">Korean</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='kj')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="kj">Kuanyama; Kwanyama</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ku')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ku">Kurdish</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='lo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="lo">Lao</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='la')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="la">Latin</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='lv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="lv">Latvian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='li')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="li">Limburgan; Limburger; Limburgish</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ln')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ln">Lingala</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='lt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="lt">Lithuanian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='lu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="lu">Luba-Katanga</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='lb')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="lb">Luxembourgish; Letzeburgesch</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='mk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="mk">Macedonian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='mg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="mg">Malagasy</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ml')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ml">Malayalam</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ms')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ms">Malay</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='mt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="mt">Maltese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='gv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="gv">Manx</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='mi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="mi">Maori</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='mr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="mr">Marathi</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='mh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="mh">Marshallese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='mo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="mo">Moldavian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='mn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="mn">Mongolian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='na')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="na">Nauru</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='nv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="nv">Navajo; Navaho</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='nd')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="nd">Ndebele, North; North Ndebele</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='nr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="nr">Ndebele, South; South Ndebele</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ng')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ng">Ndonga</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ne')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ne">Nepali</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='se')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="se">Northern Sami</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='nn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="nn">Norwegian Nynorsk; Nynorsk, Norwegian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='no')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="no">Norwegian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='oc')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="oc">Occitan (post 1500); Provençal</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='oj')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="oj">Ojibwa</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='or')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="or">Oriya</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='om')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="om">Oromo</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='os')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="os">Ossetian; Ossetic</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='pi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="pi">Pali</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='pa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="pa">Panjabi; Punjabi</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='fa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="fa">Persian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='pl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="pl">Polish</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='pt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="pt">Portuguese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ps')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ps">Pushto</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='qu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="qu">Quechua</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ro')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ro">Romanian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='rm')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="rm">Romansh</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='rn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="rn">Rundi</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ru')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ru">Russian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sm')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sm">Samoan</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sg">Sango</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sa">Sanskrit</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sc')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sc">Sardinian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sr">Serbian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sn">Shona</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ii')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ii">Sichuan Yi</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sd')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sd">Sindhi</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='si')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="si">Sinhala; Sinhalese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sk">Slovak</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sl">Slovenian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='so')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="so">Somali</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='st')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="st">Sotho, Southern</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='es')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="es">Spanish; Castilian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='su')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="su">Sundanese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sw">Swahili</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ss')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ss">Swati</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='sv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="sv">Swedish</option>
								<?php endif; ?>
																<?php if (((is_array($_tmp='ty')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ty">Tahitian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='tg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="tg">Tajik</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ta')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ta">Tamil</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='tt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="tt">Tatar</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='te')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="te">Telugu</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='th')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="th">Thai</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='bo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="bo">Tibetan</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ti')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ti">Tigrinya</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='to')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="to">Tonga (Tonga Islands)</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ts')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ts">Tsonga</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='tn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="tn">Tswana</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='tr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="tr">Turkish</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='tk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="tk">Turkmen</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='tw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="tw">Twi</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ug')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ug">Uighur; Uyghur</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='uk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="uk">Ukrainian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ur')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ur">Urdu</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='uz')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="uz">Uzbek</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='ve')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="ve">Venda</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='vi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="vi">Vietnamese</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='vo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="vo">Volapük</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='wa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="wa">Walloon</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='cy')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="cy">Welsh</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='fy')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="fy">Western Frisian</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='wo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="wo">Wolof</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='xh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="xh">Xhosa</option>
								<?php endif; ?>
																<?php if (((is_array($_tmp='yo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="yo">Yoruba</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='za')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="za">Zhuang; Chuang</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp='zu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
								<option value="zu">Zulu</option>
								<?php endif; ?>


		</select>
		<div class="clear"></div>
		
		<label class="bpe_label">Admin language:</label>
		<select name="admin_lang" id="adminLang">

			<?php $_from = $this->_tpl_vars['admin_langs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin_lang']):
?>
			<option value=<?php if ($this->_tpl_vars['admin_lang'] == "english.json"): ?><?php else: ?><?php echo $this->_tpl_vars['admin_lang']; ?>
<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['admin_lang'])) ? $this->_run_mod_handler('ucfirst', true, $_tmp) : ucfirst($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ".json", "") : smarty_modifier_replace($_tmp, ".json", "")); ?>
</option>
			<?php endforeach; endif; unset($_from); ?>

			
		</select></p>
		
		
		<div class="clear"></div>
		<div id="siteAPIKey">
			<label class="bpe_label">Localhost API Key:</label>
			<textarea id="apiKey" class="bpe_textarea"></textarea>
			<div class="clear"></div>

			<div class="clear"></div>
			<p class="bpe_input_info">This API key only allows access from scripts running on the same server as the SetSeed installation. It's ideal for using in a custom Smarty template, i.e for a payment gateway integration.</p>
			<a href="#" id="regenLocalhostKeyStep1" class="bpe_popup_button belowInput"><span>Replace with new API Key&hellip;<img src="graphics/4-1.gif" class="loadingButton"/><img src="graphics/button-tick.gif" class="buttonSuccess"/></span></a>
			<div class="clear"></div>

			<div class="moreContent" id="regenKeyMore">
				<p>Are you sure you want to replace the current API key with a new one? This will instantly prevent any scripts using the current API key from working until you update those scripts with the new key. <a href="#" id="regenLocalhostKey">Click here</a> to deactivate the current Key and generate a new one. </p>
			<div class="clear"></div>
		</div>

		</div>
		</form>
		<div class="clear visible"><!-- --></div>
	<div id="proSeller">
		<label class="bpe_label">UI Colour Scheme :</label>
		<input type="text" value="" name="" id="ui_colour" class="bpe_input short"/>
		<p class="sideInfo">(HEX Value)</p>

		<div class="clear visible"><!-- --></div>
		<label class="bpe_label">Custom admin link 1 text:</label>
		<input type="text" value="" name="" id="custom_link_1_text" class="bpe_input"/>
		<label class="bpe_label">Custom admin link 1 link:</label>
		<input type="text" value="" name="" id="custom_link_1_link" class="bpe_input"/>
		<div class="clear visible"><!-- --></div>
		<label class="bpe_label">Custom admin link 2 text:</label>
		<input type="text" value="" name="" id="custom_link_2_text" class="bpe_input"/>
		<label class="bpe_label">Custom admin link 2 link:</label>
		<input type="text" value="" name="" id="custom_link_2_link" class="bpe_input"/>

		<div class="clear visible"><!-- --></div>
		<div class="freeMode">This website is running in free mode and won't count against your chargeable sites.</div>
		<div class="paidMode">You will be billed for this website unless it is included in your subscription package.</div>
		<label class="bpe_label">Limit storage space (MB):</label>
		<input type="text" value="" name="" id="limit_storage" class="bpe_input short"/>
		<p class="sideInfo">0 = unlimited</p>
		<label class="bpe_label">Limit number of pages:</label>
		<input type="text" value="" name="" id="limit_pages" class="bpe_input short"/>
		<p class="sideInfo">0 = unlimited</p>
		<label class="bpe_label">Limit number of blogs:</label>
		<input type="text" value="" name="" id="limit_blogs" class="bpe_input short"/>
		<p class="sideInfo">0 = unlimited</p>
		<label class="bpe_label">Limit number of products:</label>
		<input type="text" value="" name="" id="limit_products" class="bpe_input short"/>
		<p class="sideInfo">0 = unlimited</p>
		<label class="bpe_label">Limit number of staff accounts:</label>
		<input type="text" value="" name="" id="limit_staff" class="bpe_input short"/>
		<p class="sideInfo">0 = unlimited</p>

		<label class="bpe_label">Lockout frontend:</label>
		<input type="checkbox" class="bpe_checkbox" id="disabled_frontend"/>

		<label class="bpe_label">Frontend send to URL:</label>
		<input type="text" value="" name="" id="disabled_frontend_redirect" class="bpe_input"/>
		<p class="bpe_input_info">Only operational if 'Lockout frontend' is ticked</p>
		<label class="bpe_label">Lockout backend:</label>
		<input type="checkbox" class="bpe_checkbox"  id="disabled_backend"/>
		<label class="bpe_label">Backend send to URL:</label>
		<input type="text" value="" name="" id="disabled_backend_redirect" class="bpe_input"/>
		<p class="bpe_input_info">Only operational if 'Lockout backend' is ticked</p>
		<div class="featureBlockLeft">
		<label class="bpe_label">Design:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_design"/>
		<label class="bpe_label">Videos:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_videos"/>
		<label class="bpe_label">Galleries:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_galleries"/>
		<label class="bpe_label">Contact forms:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_forms"/>
		<label class="bpe_label">Products:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_products"/>
		<label class="bpe_label">Calendars:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_calendars"/>
		<label class="bpe_label">Staff accounts:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_staff"/>
		</div>
		<div class="featureBlockLeft">
		<label class="bpe_label">Video Help:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_help"/>
		<label class="bpe_label">Snippets:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_snippets"/>
		<label class="bpe_label">Livechat:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_livechat"/>
		<label class="bpe_label">Embed Codes:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_embed_codes"/>
		<label class="bpe_label">Mailing lists:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_mailing_list"/>
		<label class="bpe_label">Blog:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_blog"/>
		<label class="bpe_label">Booking products (beta):</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_bookings"/>
		</div>
		<div class="clear visible"><!-- --></div>
	</div>
		<label class="bpe_label">Disable page caching:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_cache"/>
		<p class="bpe_input_info">Prevent the caching system from being used on the whole site. Only enable when developing themes.</p>
		<label class="bpe_label">Omit fourth level pages:</label>
		<input type="checkbox" class="bpe_checkbox" id="omit_fourth"/>
				<p class="bpe_input_info">Improve performance on sites with many pages by omitting fourth level pages from main menu and sitemap</p>

		<div class="clear visible"><!-- --></div>

		<label class="bpe_label">Folder:</label>
		<p class="infoP foldername"></p>
		<label class="bpe_label">Storage space used:</label>
		<p class="infoP storage"></p>
		<label class="bpe_label">MySQL Database:</label>
		<p class="infoP db"></p>
		<label class="bpe_label">MySQL User:</label>
		<p class="infoP user"></p>
		<div class="clear"><!-- --></div>
		<div class="clear visible"><!-- --></div>
		<a href="#" id="backup" class="bpe_popup_button"><span>Prepare backup <img src="graphics/4-1.gif" class="loadingButton"/><img src="graphics/button-tick.gif" class="buttonSuccess"/></span></a>
		<a href="#" id="removeSite" class="bpe_popup_button"><span>Remove site&hellip;</span></a>
		<div class="clear"><!-- --></div>
		<div class="moreContent removeSiteConfirm">
			<p>Remove the site by clicking <a href="" id="removeLink">here</a> - <span style="color:#f00">This will only remove the reference to this site from the master list - it will not remove the MySQL user ('<span class="user"></span>') or database ('<span class="db"></span>') associated with this site.</span></p>
		</div>
		<div class="clear"><!-- --></div>
		<div class="clear visible"><!-- --></div>
<div class='bpe_savecancel'>
	<div class="bpe_savecancel_inner">
	<a href='#' id="editSite" class='bpe_save <?php if ($this->_tpl_vars['fullpriv'] == false): ?>manDB<?php endif; ?>'><span>Done</span></a><a href='#' class='bpe_cancel'><span>Cancel</span></a>
	<h2>Edit site: <span class="newUrlText"></span></h2>
	</div>
</div>

		</div>
	</div>
	<div id="import" class="bpe_add_popup">
		<div id="importInner" class="bpe_add_popup_inner clearfix">

		</div>
	</div>

	<div class='bpe_mask'></div><div class='bpe_add_popup' id="addnewsite"><div class='bpe_add_popup_inner'><img src='/admin/graphics/bpeditor/help.png' alt='Enter the domain you want to use with your site in the URL field. You will need to change your DNS settings to make sure that the domain points at this server, and also ensure that apache uses this host to serve the site when called from that domain. This is usually done by adding the domain as a Domain Alias (Plesk) or a Parked Domain (cPanel). <?php if ($this->_tpl_vars['fullpriv'] == false): ?>|| Please use your web host control panel to create a new database and user to use with your new website and enter the connection information. This must be a unique and empty database used only with the website you are creating. It is not the same database/user you used when you installed SetSeed. || Please note: SetSeed can automatically create the database for you if you have root access to your server (VPS, dedicated etc) and can grant the following permissions to your master MySQL user (the one you used when you installed SetSeed): ALTER, DROP, CREATE, CREATE USER, SELECT, INSERT, UPDATE, GRANT OPTION<?php endif; ?>' class='bpe_help' /><form action="" method="post" id="addSiteForm" class="clearfix">
		<label class="bpe_label">URL: http://</label>
		<input type="text" name="url" value="" id="addSiteInput" class="bpe_input permInput"/>
		<label class="bpe_label">Theme:</label>
		<p><select name="theme" id="newsiteTheme">

			<?php $_from = $this->_tpl_vars['default_site_themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['theme']):
        $this->_foreach['loop1']['iteration']++;
?>
			<option value=<?php echo $this->_tpl_vars['theme']; ?>
><?php echo $this->_tpl_vars['theme']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['default_site_global_themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['theme']):
        $this->_foreach['loop1']['iteration']++;
?>
			<option value=<?php echo $this->_tpl_vars['theme']; ?>
><?php echo $this->_tpl_vars['theme']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			
		</select></p>
		<div class="clear"><!-- --></div>
		<br/>
		<div class="clear"><!-- --></div>
		<label class="bpe_label">Copy content from:</label>
		<p style="margin-top:0px"><select name="import_data" id="siteToClone">
			<option value=''>Default</default>
			<?php $_from = array_reverse($this->_tpl_vars['sites']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['site']):
        $this->_foreach['loop1']['iteration']++;
?>
				<option value="<?php echo $this->_tpl_vars['site']['invisible_key']; ?>
"><?php echo $this->_tpl_vars['site']['url']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			
		</select></p>
		<p class="infoP" style="margin-left:182px">Database will be copied from db.sql inside the folder belonging to the site above. Click Prepare Backup in Settings for the site to ensure db.sql is up to date.</p>
		
		
		
		
		<?php if ($this->_tpl_vars['fullpriv'] == false): ?>
		<div id="manualDB">
			<div class="manDBForm clearfix">
			<label class="bpe_label">Database name:</label> <input type="text" name="" value="" id="dbname" class="bpe_input"/>
			<div class="clear"><!-- --></div>
			<label class="bpe_label">Database host:</label> <input type="text" name="" value="<?php echo $this->_tpl_vars['host']; ?>
" id="dbhost" class="bpe_input"/>
			<div class="clear"><!-- --></div>

			<label class="bpe_label">Database user:</label> <input type="text" name="" value="" id="dbuser" class="bpe_input"/>
			<div class="clear"><!-- --></div>

			<label class="bpe_label">Database password:</label> <input type="text" name="" value="" id="dbpass" class="bpe_input"/>

			</div>

		</div>
		<?php endif; ?>
	</form><div class='clear'></div><img src="graphics/4-1.gif" class="loadingButton" style="float:right;margin-top:10px;margin-right:25px;"/>
	<div class='bpe_savecancel'>
		<div class="bpe_savecancel_inner">
			<a href='#' id="addSite" class='bpe_save <?php if ($this->_tpl_vars['fullpriv'] == false): ?>manDB<?php endif; ?>'><span>Add site</span></a><a href='#' class='bpe_cancel'><span>Cancel</span></a>
			<h2>Add new site</h2>
		</div>
	</div>
	<div class='clear'></div>
	</div></div>

	<div id="overlay"></div>
	<div id="error"></div>
	<div id="changePass" class="bpe_add_popup">
		<div class="bpe_add_popup_inner">

			<?php if (! $this->_tpl_vars['emailAsLogin']): ?>
			<p class="important">Your account was created using an old version of the SetSeed Hub. You should change your username to your email address to allow password recovery.</p>
			<?php endif; ?>
			<form action="" method="post" id="changePassForm">
				<input type="hidden" name="salt" value="<?php echo $this->_tpl_vars['salt']; ?>
" id="salt"/>
				<input type="hidden" name="timestamp" value="<?php echo $this->_tpl_vars['time']; ?>
" id="timestamp"/>

				<label class="bpe_label">Current password:</label>
				<input type="password" name="old_password" value=""  class="bpe_input"/>
				<div class="clear"><!-- --></div>

				<label class="bpe_label">Email:</label>
				<input type="text" name="username" value="" class="bpe_input"/>
				<div class="clear"><!-- --></div>
				<label class="bpe_label">Password:</label>
				<input type="password" name="password" value=""  class="bpe_input"/>
				<div class="clear"><!-- --></div>
				<label class="bpe_label">Password (again):</label>
				<input type="password" name="password2" value="" class="bpe_input"/>
				<div class="clear"><!-- --></div>
				<div class='bpe_savecancel'>
					<div class='bpe_savecancel_inner'>
					<a href='#' id="changePassButton" class='bpe_save'><span>Change password</span></a><a href='#' class='bpe_cancel'><span>Cancel</span></a>
					<h2>Change Hub email and password</h2>
					</div>
				</div>
			</form>
			<p id="notmatch">The passwords don't match!</p>
			<p id="notstrong">Your password isn't secure enough.</p>
			<p id="currentpasswrong">Current password incorrect.</p>

		</div>
	</div>
	<div id="viewAPIKey" class="bpe_add_popup">
		<div class="bpe_add_popup_inner">

			<label class="bpe_label">Server API Key:</label>
			<textarea id="serverApiKey" class="bpe_textarea"><?php echo $this->_tpl_vars['api_key']; ?>
</textarea>
			<p class="bpe_input_info">This is your Server API key. It allows remote access to SetSeed Hub operations like creating new websites.</p>
			<a href="#" id="regenServerKeyStep1" class="bpe_popup_button belowInput"><span>Replace with new API Key&hellip;<img src="graphics/4-1.gif" class="loadingButton"/><img src="graphics/button-tick.gif" class="buttonSuccess"/></span></a>

			<div class="clear"></div>
			<div class="moreContent" id="regenServerKeyMore">
				<p>Are you sure you want to replace the current API key with a new one? This will instantly prevent any scripts using the current API key from working until you update those scripts with the new key. <a href="#" id="regenServerKey">Click here</a> to deactivate the current Key and generate a new one. </p>
			</div>

			<div class="clear"></div>

			<div class='bpe_savecancel'>
				<div class="bpe_savecancel_inner">
				<a href='#' id="closeAPI" class='bpe_save'><span>Done</span></a>
				<h2>Server API Key</h2>
				</div>
			</div>

		</div>
	</div>
	<div class="dialogueMask"></div>
	<div class="dialogueWrapper" data-active="<?php echo $this->_tpl_vars['active']; ?>
" id="activateWrapper">
		<div class="dialogue" id="activate">
			<h1>SetSeed Activation</h1>
			<p>Please enter your SetSeed Activation Code. This can be found after logging in via your App Direct account and click the 'SetSeed Subscription' app.</p>
			<p><strong>You need to have an active subscription to create new websites with SetSeed.</strong></p>
			<?php if ($this->_tpl_vars['activecode_error'] == 'payment'): ?>
			<p class="dialogueError">Error: Your current subscription payment has failed. Please ensure your billing details are up to date in your AppDirect account.</p>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['activecode_error'] == 'notfound'): ?>
			<p class="dialogueError">Error: Your Activation Code has not been recognised. Please try again.</p>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['activecode_error'] == 'prevented'): ?>
			<p class="dialogueError">Error: Your server is preventing access to the licensing server.</p>
			<?php endif; ?>
			<form action="/sh/" method="post">
				<input type="text" class="big" value="<?php echo $this->_tpl_vars['activecode']; ?>
" placeholder="Activation Code" name="activation_code" id="activation_code" />
				<p><a href="#" class="dismissDialogue">I'll do this later</a></p>
				<input type="submit" name="" value="Activate" class="submit">
			</form>

		</div>
	</div>
	<div class="dialogueWrapper" id="brandsEditor">
		<div class="dialogue" id="activate">
			<div class="dismissDialogueCorner">Close</div>
			<h1>Brands Editor</h1>
			<div id="currentBrands"></div>
			<p class="diaButton clearfix"><a href="#" id="showAddBrand">Add new brand</a></p>
			<div id="addNewBrandWrap">
				<form action="brands.php?action=add" id="addNewBrand" method="post"  enctype="multipart/form-data">
					<label>Brand Title<br/>
						<input type="text" name="name" value="" class="required"/>
					</label>
					<label>Favicon (16x16)<br/>
					<input type="file" name="favicon" value="" id="favicon" class="required"></label>
					<label>Logo<br/>
					<input type="file" name="logo" value="" id="favicon" class="required"></label>
					<p class="labelInfo">@2x artwork up to 440x130px, displays at max size: 220x65</p>
					<label>Theme Colour (HEX)<br/>
					<input type="text" name="colour" value="" id="colour" class="required"></label>
					<input type="submit" name="" value="Add Brand" class="submit">
				</form>
			</div>
		</div>
	</div>

	<div id="about">
		<p><img src="graphics/logo-dark.png" alt="SetSeed" width="144" height="67"/></p>
		<p>SetSeed<br/>© Copyright 2006-2018 Ben Vallack and Chris Parnell. <br/>
			All Rights Reserved</p>
		<p style="text-align:right">Version: 8.2018.2.13<br/>
			<a href="http://setseed.com"><strong>setseed.com</strong></a></p>
	</div>
	<?php else: ?>
	<p id="loginVersion">Version: 8.2018.2.13</p>
	<?php endif; ?>

	<input type="hidden" id="folderPath" value="<?php echo $this->_tpl_vars['sitespath']; ?>
" />
</body>
</html>