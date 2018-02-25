<?php /* Smarty version 2.6.18, created on 2018-02-17 16:32:16
         compiled from admin/layouts/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'admin/layouts/login.tpl', 22, false),)), $this); ?>
			<div id="dragBoundry">
				<div id="loginWrapper" <?php if ($this->_tpl_vars['create']): ?>class="create"<?php endif; ?>>
					<div id="loginWrapperInner" class="clearfix">
					<div id="loginHeader">
						<span id="logo" <?php if ($this->_tpl_vars['svgLogo'] == 1): ?>class="svgLogo"<?php endif; ?>><img src="graphics/branding.php?i=l" alt="" /></span>
					</div>
					<?php if ($this->_tpl_vars['create']): ?>
					<div id="createAccountInstructions">
							<?php echo $this->_tpl_vars['SetSeedLangs']['Create_Account_Instructions']; ?>

					</div>
					<form id="CreateForm" action="adminUsersActions.php" method="post">

						<div class='imageContextualEdit'>
							<div class='imageContextEditFieldset showingLabel' id="usernameFieldset">
								<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
								<div class='imageContextEditInputWrap'>
									<input type='text' class='usr toggleLabelValue imageContextInput' value='' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' name='username' />
								</div>
							</div>
							<div class='imageContextEditFieldset showingLabel' id="passwordFieldset">
								<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
								<div class='imageContextEditInputWrap'>
									<input type='password' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='password' />
								</div>
							</div>
							<div class='imageContextEditFieldset showingLabel' id="passwordFieldset">
								<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Password_Again'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
								<div class='imageContextEditInputWrap'>
									<input type='password' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Password_Again'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='password2' />
								</div>
							</div>
						</div>
						<div id="createButton"><?php echo $this->_tpl_vars['SetSeedLangs']['Create_Account']; ?>
</div>

						<input type="hidden" name="adminUsersAction" value="addNew" />
						<input type="hidden" name="salt" value="<?php echo $this->_tpl_vars['createSalt']; ?>
" id="saltInput" />
						<input type="hidden" name="hash" value="" id="hashInput" />

					</form>

					<?php else: ?>
					<div style="display:none" id="timedOut"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Error_Reloading']; ?>
</div>
					<form id="LoginForm" action="login.php" method="post">

						<div class='imageContextualEdit'>
							<div class='imageContextEditFieldset showingLabel' id="usernameFieldset">
								<div class='imageContextEditLabel'><?php if ($this->_tpl_vars['accountTypes'] == 'email'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Email']; ?>
<?php endif; ?>
									<?php if ($this->_tpl_vars['accountTypes'] == 'username'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Login']; ?>
<?php endif; ?>
									<?php if ($this->_tpl_vars['accountTypes'] == 'both'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Email']; ?>
<?php endif; ?>

								</div>
								<div class='imageContextEditInputWrap'>
									<input type='<?php if ($this->_tpl_vars['accountTypes'] == 'email'): ?>email<?php else: ?>text<?php endif; ?>' class='usr toggleLabelValue imageContextInput withLoginButton' value='' title='<?php echo $this->_tpl_vars['SetSeedLangs']['Login']; ?>
' name='username' id="usernameInput"/>

								</div>
							</div>
							<div class='imageContextEditFieldset showingLabel' id="passwordFieldset">
								<div class='imageContextEditLabel'><?php echo $this->_tpl_vars['SetSeedLangs']['Password']; ?>
</div>
								<div class='imageContextEditInputWrap'>
									<input type='password' title='<?php echo $this->_tpl_vars['SetSeedLangs']['Password']; ?>
' class='toggleLabelValue imageContextInput withLoginButton' value='' name='password' id="passwordInput"/>
								</div>
							</div>
						</div>
						<?php if ($this->_tpl_vars['accountTypes'] != 'username'): ?>
						<p id="loginButtonEmailOnly"><?php echo $this->_tpl_vars['SetSeedLangs']['Forgotten_Password']; ?>
</p>
						<?php endif; ?>
						
						<div id="loginButton"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Button']; ?>
</div>
						<div id="keepLoggedIn" class="checked"><?php echo $this->_tpl_vars['SetSeedLangs']['Keep_Me_Logged_In']; ?>
</div>

						<input type="hidden" value="yes" name="persistent" value="yes" id="persistentLogin" />
						<input type="hidden" name="timestamp" value="<?php echo $this->_tpl_vars['securityTime']; ?>
" id="timestampInput"/>
						<input type="hidden" name="salt" value="<?php echo $this->_tpl_vars['securitySalt']; ?>
" id="saltInput"/>
						<input type="hidden" name="hash" value="" id="hashInput"/>
						<input type="hidden" name="reset" value="no" id="resetInput"/>

					</form>
					<?php endif; ?>

				</div>
				<p id="vendorLogin"><a href="http://<?php echo $this->_tpl_vars['primaryDomain']; ?>
/sh/sso.php?url=<?php echo $this->_tpl_vars['ssourl']; ?>
"><?php echo $this->_tpl_vars['SetSeedLangs']['Support_Login']; ?>
</a></p>

			</div>
		<div id="error">
			<span class="messageText" id="error1"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Error_Inactivity']; ?>
</span>
			<span class="messageText" id="error2"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Error_Other_Computer']; ?>
</span>
			<span class="messageText" id="error3"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Error_Inactivity']; ?>
</span>
			<span class="messageText" id="error4"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Error_Wrong_Email']; ?>
</span>
			<span class="messageText" id="error5"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Error_Wrong_Pass']; ?>
</span>
			<span class="messageText" id="error6"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Error_Window']; ?>
</span>
			<span class="messageText" id="error9"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Error_Empty']; ?>
</span>
			<span class="messageText" id="error10"><?php echo $this->_tpl_vars['SetSeedLangs']['Passwords_Not_Match']; ?>
</span>
		</div>
		<div id="success">
			<span id="success7" class="messageText"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Error_Reset1']; ?>
</span>
			<span id="success8" class="messageText"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Error_Reset2']; ?>
</span>
			<span id="success11" class="messageText"><?php echo $this->_tpl_vars['SetSeedLangs']['Login_Account_Created']; ?>
</span>
		</div>
		</div>
		<div id="livepreviewResize"><div id="resizeHandle">
		<div class="handle1"></div>
		<div class="handle2"></div>
		<div class="handle3"></div>
		</div></div>
		<div id="livepreviewmask"></div>

		<div id="livepreview">
			<div id="iframeWrapper">
				<iframe src="/" ></iframe>
			</div>
		</div>
		<noscript><div id="loginMessage">
		<div id="loginMessageInner">
			Error - you need to have Javascript enabled in your browser to login.
		</div>
	</div></noscript>

</body>
</html>