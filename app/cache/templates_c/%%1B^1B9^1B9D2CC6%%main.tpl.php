<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:44
         compiled from admin/layouts/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'admin/layouts/main.tpl', 10, false),array('modifier', 'count', 'admin/layouts/main.tpl', 126, false),array('modifier', 'date_format', 'admin/layouts/main.tpl', 462, false),array('modifier', 'replace', 'admin/layouts/main.tpl', 679, false),array('modifier', 'date', 'admin/layouts/main.tpl', 1123, false),array('modifier', 'in_array', 'admin/layouts/main.tpl', 3714, false),array('modifier', 'urlencode', 'admin/layouts/main.tpl', 4929, false),array('function', 'cycle', 'admin/layouts/main.tpl', 119, false),array('function', 'counter', 'admin/layouts/main.tpl', 5058, false),)), $this); ?>

			<?php if ($this->_tpl_vars['redirectOnExpire']): ?>
			<input type="hidden" id="redirectOnExpire" value="<?php echo $this->_tpl_vars['redirectOnExpire']; ?>
" />
			<?php endif; ?>
			<input type="hidden" name="LangsVarsJson" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangsJson'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" id="LangVarsJson"/>
			<input type="hidden" name="" value="<?php echo $this->_tpl_vars['hidden_tips']; ?>
" id="hiddenTips"/>
			<?php if ($this->_tpl_vars['hide_tips']): ?>
			<input type="hidden" name="" value="1" id="hide_tips"/>
			<?php endif; ?>
			<div style="display:none">
			<div id="galleriesAdmin"></div>
			<div id="calCatsList"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/views/calendar/categories.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
			<div id="blogEntries"></div>
			<div id="formsWrapper"></div>
			</div>
	<div id="bothPanes">
			<div id="livepreviewResize"><div id="resizeHandle">
			<div class="handle1"></div>
			<div class="handle2"></div>
			<div class="handle3"></div>
			</div></div>
			<?php if ($this->_tpl_vars['index']): ?>
			<div id="splash">
				<div id="splashInner">
							<div id="logo" <?php if ($this->_tpl_vars['svgLogo'] == 1): ?>class="svgLogo"<?php endif; ?>><img src="graphics/branding.php?i=l&amp;v=2" /></div>
					<div class="spinner2"></div>
				</div>
			</div>
			<?php endif; ?>
			<div id="livepreviewmask"></div>
			<div id="livepreview">
				<div id="livePreviewHeader" class="draft">
					<?php if (! $this->_tpl_vars['editingSitewideContent'] && ! $this->_tpl_vars['editingSnippet']): ?>
					<div class="subHeaderLeftMenuItem" id="shareMenuPopup">
						<div class="target">
							<?php echo $this->_tpl_vars['SetSeedLangs']['Share']; ?>

						</div>
						<div class="triShadow"></div>
						<ul>
							<li><a href="http://<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>/<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>/<?php echo $this->_tpl_vars['url']; ?>
/" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Open_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>

							<li><a href="#" onclick="window.prompt('<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_Address_Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
','http://<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>/<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>/<?php echo $this->_tpl_vars['url']; ?>
/'); return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_Address'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<div class="bpe_rule"></div>
							<li><a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>%2F<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>%2F<?php echo $this->_tpl_vars['url']; ?>
%2F', 'share', 'width=626,height=436'); return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Share_Facebook'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a href="#" onclick="window.open('https://twitter.com/share?url=http%3A%2F%2F<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>%2F<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>%2F<?php echo $this->_tpl_vars['url']; ?>
%2F', 'share', 'width=626,height=436'); return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Share_Twitter'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a href="#" onclick="window.open('https://plus.google.com/share?url=http%3A%2F%2F<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>%2F<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>%2F<?php echo $this->_tpl_vars['url']; ?>
%2F', 'share', 'width=626,height=436'); return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Share_Google'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<div class="bpe_rule"></div>
							<li><a href="mailto:?subject=<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?><?php echo htmlspecialchars($this->_tpl_vars['title']); ?>
<?php else: ?><?php echo htmlspecialchars($this->_tpl_vars['pagetitle']); ?>
<?php endif; ?>&amp;body=http://<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>/<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>/<?php echo $this->_tpl_vars['url']; ?>
/"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Email_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						</ul>
						<div class="mtri"></div>
					</div>
					<?php endif; ?>
					<div class="subHeaderButton right" id="closeLivePreview">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Close'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>

					<div class="subHeaderButton updateButton <?php if ($this->_tpl_vars['showingLive'] == 'yes'): ?> unavailable<?php endif; ?><?php if ($this->_tpl_vars['master'] || $this->_tpl_vars['priv_pages'] == '1'): ?><?php else: ?> faded<?php endif; ?>" id="saveEditPage" title="<?php if ($this->_tpl_vars['master'] || $this->_tpl_vars['priv_pages'] == '1'): ?><?php if ($this->_tpl_vars['showingLive'] == 'yes'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Publish_No_Changes'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Publish_Editing_Draft'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php endif; ?><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Publish_No_Privileges'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php endif; ?>">

							<?php echo $this->_tpl_vars['SetSeedLangs']['Publish_Changes']; ?>


					</div>
					<div id="previewLive" class="previewHeader">
						<?php if (! $this->_tpl_vars['editingSnippet'] && ! $this->_tpl_vars['editingSitewideContent']): ?>
							<?php echo $this->_tpl_vars['SetSeedLangs']['Your_Updated_Page_Live']; ?>

						<?php else: ?>
							<?php echo $this->_tpl_vars['SetSeedLangs']['Your_Website']; ?>

						<?php endif; ?>
					</div>
					<div id="previewUpdatedOffline" class="previewHeader"><?php echo $this->_tpl_vars['SetSeedLangs']['Your_Updated_Page_Offline']; ?>
</div>
					<div id="previewDraft" class="previewHeader"><?php echo $this->_tpl_vars['SetSeedLangs']['Your_Draft']; ?>
</div>
					<div id="previewSite" class="previewHeader"><?php echo $this->_tpl_vars['SetSeedLangs']['Your_Website']; ?>
</div>
				</div>
				<div id="iframeWrapper">
					<iframe src="<?php if ($this->_tpl_vars['page'] == 'blog_edit' && $this->_tpl_vars['indexUrl'] == ""): ?><?php else: ?><?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>/<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>/<?php echo $this->_tpl_vars['url']; ?>
?<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>previewblog<?php else: ?>preview<?php endif; ?>=<?php echo $this->_tpl_vars['viewVersion']; ?>
&<?php endif; ?><?php if ($this->_tpl_vars['preview_as_email'] & $this->_tpl_vars['page'] != 'blog_edit'): ?>preview_as_email=1<?php endif; ?>" id="iframe1"></iframe>
					<iframe src="<?php if ($this->_tpl_vars['page'] == 'blog_edit' && $this->_tpl_vars['indexUrl'] == ""): ?><?php else: ?><?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>/<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>/<?php echo $this->_tpl_vars['url']; ?>
?<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>previewblog<?php else: ?>preview<?php endif; ?>=<?php echo $this->_tpl_vars['viewVersion']; ?>
&<?php endif; ?><?php if ($this->_tpl_vars['preview_as_email'] & $this->_tpl_vars['page'] != 'blog_edit'): ?>preview_as_email=1<?php endif; ?>" id="iframe2" style="left:-100%"></iframe>
					<div id="blogPreviewUnavailable">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Blog_Preview_Unavailable'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
						<p><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Blog_Preview_Unavailable_More'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>
					</div>
				</div>
			</div>
			<div id="launchPad" class="hidden">
				<div id="lpHeader" class="clearfix">
					<ul id="lpSysMenu">
						<li id="systemMenuLogout"><a ><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Logout'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<?php if ($this->_tpl_vars['master'] && $this->_tpl_vars['DISABLE_STAFF'] == 0): ?>
						<li id="systemMenuStaff"><a id=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Staff'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<?php endif; ?>
						<?php if (! $this->_tpl_vars['ssoAccount']): ?>
						<li id="systemMenuYou"><a id=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['You'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
												<?php endif; ?>
						<?php if ($this->_tpl_vars['CUSTOM_LINK_1_TEXT']): ?>
							<li class="customAdminLink customAdminLink-1"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['CUSTOM_LINK_1_LINK'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['CUSTOM_LINK_1_TEXT'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['CUSTOM_LINK_2_TEXT']): ?>
							<li class="customAdminLink"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['CUSTOM_LINK_2_LINK'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['CUSTOM_LINK_2_TEXT'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<?php endif; ?>
						<li ><a href="/admin/help.php#webpages-overview" target="_help"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Help'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						
					</ul>
										<div class="previewSiteArrowButton" id="showSitePreview">
						<span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['View_Website'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					</div>
					<div class="previewSiteArrow">
						<span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Your_Website'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					</div>


				</div>
				<div id="lpContent">
					<h1><?php echo $this->_tpl_vars['SetSeedLangs']['What_Do_You_Want']; ?>
</h1>
					<div id="lpWebpages" class="lpBoxBig <?php echo smarty_function_cycle(array('name' => 'lpBig','values' => "left,right"), $this);?>
">
						<div class="lpBoxBigInner">
							<div id="lpPagesIcon" class="lbBoxIcon"></div>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Pages'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

						</div>
					</div>

					<?php if (count($this->_tpl_vars['allprivs']) > 3): ?>
						<?php if ($this->_tpl_vars['allprivs']['8'] == 1): ?>
							<?php if ($this->_tpl_vars['DISABLE_BLOG'] == 0): ?><?php $this->assign('blogOk', true); ?><?php endif; ?>
						<?php endif; ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['DISABLE_BLOG'] == 0): ?><?php $this->assign('blogOk', true); ?><?php endif; ?>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['blogOk']): ?>
					<div id="lpBlog" class="lpBoxBig <?php echo smarty_function_cycle(array('name' => 'lpBig','values' => "left,right"), $this);?>
">
						<div class="lpBoxBigInner">
							<div id="lpBlogIcon" class="lbBoxIcon"></div>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Blog'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

						</div>
					</div>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['pinnedSnippetCats']): ?>
						<?php $_from = $this->_tpl_vars['pinnedSnippetCats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pinnedSnippetCat']):
?>
							<div class="lpBoxBig <?php echo smarty_function_cycle(array('name' => 'lpBig','values' => "left,right"), $this);?>
 pinnedSnippetCat" data-snippet-cat="<?php echo $this->_tpl_vars['pinnedSnippetCat']['id']; ?>
">
								<div class="lpBoxBigInner">
									<div id="lpSnippetCatIcon" class="lbBoxIcon"></div>
									<?php echo $this->_tpl_vars['pinnedSnippetCat']['name']; ?>

								</div>
							</div>
						<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
					<?php if (count($this->_tpl_vars['allprivs']) > 3): ?>
						<?php if ($this->_tpl_vars['allprivs']['9'] == 1): ?>
							<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><?php $this->assign('checkoutOk', true); ?><?php endif; ?>
						<?php endif; ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><?php $this->assign('checkoutOk', true); ?><?php endif; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['checkoutOk']): ?>
					<div id="lpCheckout" class="lpBoxBig <?php echo smarty_function_cycle(array('name' => 'lpBig','values' => "left,right"), $this);?>
">
						<div class="lpBoxBigInner">
							<div id="lpCheckoutIcon" class="lbBoxIcon"></div>
							<span id="ordersCounter"></span>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Checkout'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

						</div>
					</div>
					<?php endif; ?>

					<?php if (count($this->_tpl_vars['allprivs']) > 3): ?>
						<?php if ($this->_tpl_vars['allprivs']['13'] == 1): ?>
							<?php if ($this->_tpl_vars['DISABLE_BOOKINGS'] == 0): ?><?php $this->assign('bookingOk', true); ?><?php endif; ?>
						<?php endif; ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['DISABLE_BOOKINGS'] == 0): ?><?php $this->assign('bookingOk', true); ?><?php endif; ?>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['bookingOk']): ?>
					<div id="lpBookings" class="lpBoxBig <?php echo smarty_function_cycle(array('name' => 'lpBig','values' => "left,right"), $this);?>
">
						<div class="lpBoxBigInner">
							<div id="lpBookingsIcon" class="lbBoxIcon"></div>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Bookings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

						</div>
					</div>
					<?php endif; ?>

					<?php if (count($this->_tpl_vars['allprivs']) > 3): ?>
						<?php if ($this->_tpl_vars['allprivs']['11'] == 1): ?>
							<?php $this->assign('settingsOk', true); ?>
						<?php endif; ?>
					<?php else: ?>
						<?php $this->assign('settingsOk', true); ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['settingsOk']): ?>
					<div id="lpSettings" class="lpBoxBig <?php echo smarty_function_cycle(array('name' => 'lpBig','values' => "left,right"), $this);?>
">
						<div class="lpBoxBigInner">
							<div id="lpSettingsIcon" class="lbBoxIcon"></div>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Website_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

						</div>
					</div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['DISABLE_DESIGN'] == 0 || $this->_tpl_vars['ssoAccount']): ?>
					<div id="lpDesign" class="lpBoxBig <?php echo smarty_function_cycle(array('name' => 'lpBig','values' => "left,right"), $this);?>
">
						<div class="lpBoxBigInner">
							<div id="lpDesignIcon" class="lbBoxIcon"></div>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Design'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

						</div>
					</div>
					<?php endif; ?>
					<?php if (count($this->_tpl_vars['allprivs']) > 3): ?> 						<?php if ($this->_tpl_vars['DISABLE_LIVECHAT'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['10'] == 1): ?><?php $this->assign('livechatOk', true); ?><?php endif; ?><?php endif; ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['DISABLE_LIVECHAT'] == 0): ?><?php $this->assign('livechatOk', true); ?><?php endif; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['livechatOk']): ?>
					<div id="lpLivechat" class="lpBoxBig <?php echo smarty_function_cycle(array('name' => 'lpBig','values' => "left,right"), $this);?>
">
						<div class="lpBoxBigInner">
							<div id="lpLivechatIcon" class="lbBoxIcon"></div>
							<span id="livechatCounter"></span>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

						</div>
					</div>
					<?php endif; ?>

					<div id="lpStats" class="lpBoxBig <?php echo smarty_function_cycle(array('name' => 'lpBig','values' => "left,right"), $this);?>
">
						<div class="lpBoxBigInner">
							<div id="lpStatisticsIcon" class="lbBoxIcon"></div>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Statistics'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

						</div>
					</div>
				
					<div class="clear"></div>
					<h2><?php echo $this->_tpl_vars['SetSeedLangs']['Storage_Items']; ?>
</h2>
					<div id="tab2Images" class="lpBoxSmall"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Images'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div>

					<?php if (count($this->_tpl_vars['allprivs']) > 3): ?>
						<?php if ($this->_tpl_vars['DISABLE_GALLERIES'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['1'] == 1): ?><div class="lpBoxSmall" id="tab2Galleries"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Galleries'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
						<div id="tab2Tables" class="lpBoxSmall"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Tables'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div>
						
						<?php if ($this->_tpl_vars['DISABLE_VIDEOS'] == 0): ?><div class="lpBoxSmall" id="tab2Videos"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Videos'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>

						<?php if ($this->_tpl_vars['DISABLE_MAILING_LIST'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['6'] == 1 || $this->_tpl_vars['allprivs']['7'] == 1): ?><div class="lpBoxSmall" id="tab2Newsletter"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Mailing_Lists'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>

						<?php if ($this->_tpl_vars['DISABLE_FORMS'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['2'] == 1): ?><div class="lpBoxSmall" id="tab2Forms"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Contact_forms'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
						<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['3'] == 1): ?><div class="lpBoxSmall" id="tab2Products"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
						<?php if ($this->_tpl_vars['DISABLE_BOOKINGS'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['13'] == 1): ?><div class="lpBoxSmall" id="tab2Booking"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
						<?php if ($this->_tpl_vars['DISABLE_CALENDARS'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['4'] == 1): ?><div class="lpBoxSmall" id="tab2Calendars"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Calendars'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
						<?php if ($this->_tpl_vars['allprivs']['5'] == 1): ?><div class="lpBoxSmall" id="tab2Snippets" <?php if ($this->_tpl_vars['editingSnippet']): ?>class="selected"<?php endif; ?>><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Snippets'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
						<?php if ($this->_tpl_vars['DISABLE_EMBED_CODES'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['12'] == 1): ?><div class="lpBoxSmall" id="tab2EmbedCodes" <?php if ($this->_tpl_vars['editingSnippet']): ?>class="selected"<?php endif; ?>><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Embed_Codes'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
					<?php else: ?>

						<?php if ($this->_tpl_vars['allprivs']['1'] == 1 || $this->_tpl_vars['master']): ?>
						<?php if ($this->_tpl_vars['DISABLE_GALLERIES'] == 0): ?><div class="lpBoxSmall" id="tab2Galleries"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Galleries'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['allprivs']['1'] == 1 || $this->_tpl_vars['master']): ?>

						<?php if ($this->_tpl_vars['DISABLE_VIDEOS'] == 0): ?><div class="lpBoxSmall" id="tab2Videos"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Videos'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
						<div id="tab2Tables" class="lpBoxSmall"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Tables'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div>
						
						<?php if ($this->_tpl_vars['DISABLE_MAILING_LIST'] == 0): ?><div class="lpBoxSmall" id="tab2Newsletter"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Mailing_Lists'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
						<?php if ($this->_tpl_vars['DISABLE_FORMS'] == 0): ?><div class="lpBoxSmall" id="tab2Forms"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Contact_forms'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
						<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><div class="lpBoxSmall" id="tab2Products"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
						<?php if ($this->_tpl_vars['DISABLE_BOOKINGS'] == 0): ?><div class="lpBoxSmall" id="tab2Booking"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>

						<?php if ($this->_tpl_vars['DISABLE_CALENDARS'] == 0): ?><div class="lpBoxSmall" id="tab2Calendars"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Calendars'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
						<?php if ($this->_tpl_vars['DISABLE_SNIPPETS'] == 0): ?>
						<div class="lpBoxSmall" id="tab2Snippets" <?php if ($this->_tpl_vars['editingSnippet']): ?>class="selected"<?php endif; ?>><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Snippets'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['DISABLE_EMBED_CODES'] == 0): ?><div class="lpBoxSmall" id="tab2EmbedCodes"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Embed_Codes'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>

					<div id="tab2Files" class="lpBoxSmall"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Files'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div>
				</div>
			</div>
			<span id="primaryNotify"></span>
			<div id="dragBoundry">

				<?php if ($this->_tpl_vars['page'] == 'edit' || $this->_tpl_vars['page'] == 'blog_edit'): ?>

				<input id="pageStatus" value="<?php if (! $this->_tpl_vars['editingSitewideContent'] && ! $this->_tpl_vars['editingSnippet']): ?><?php echo $this->_tpl_vars['live']; ?>
<?php else: ?>yes<?php endif; ?>" type="hidden" name=""/>
				<div id="rightPane" class="rightPane withTitleBar <?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>editingBlog<?php endif; ?> <?php if ($this->_tpl_vars['editingSnippet']): ?>editingSnippet<?php endif; ?> <?php if ($this->_tpl_vars['editingSitewideContent']): ?>editingSitewideContent<?php endif; ?>" >
					<div class="cleverFilterBar">
						<div id="previewArrow">
							<?php if (! $this->_tpl_vars['editingSitewideContent'] && ! $this->_tpl_vars['editingSnippet']): ?>

							<div class="subHeaderLeftMenuItem" id="shareMenu">
								<div class="target">
									<?php echo $this->_tpl_vars['SetSeedLangs']['Share']; ?>

								</div>
								<div class="triShadow"></div>
								<ul>
									<li><a href="http://<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>/<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>/<?php echo $this->_tpl_vars['url']; ?>
/" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Open_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
									<li><span class="fakea" onclick="window.prompt('<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_Address_Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
','http://<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>/<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>/<?php echo $this->_tpl_vars['url']; ?>
/'); return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_Address'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></li>
									<div class="bpe_rule"></div>
									<li><span class="fakea" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>%2F<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>%2F<?php echo $this->_tpl_vars['url']; ?>
%2F', 'share', 'width=626,height=436'); return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Share_Facebook'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></li>
									<li><span class="fakea" onclick="window.open('https://twitter.com/share?url=http%3A%2F%2F<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>%2F<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>%2F<?php echo $this->_tpl_vars['url']; ?>
%2F', 'share', 'width=626,height=436'); return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Share_Twitter'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></li>
									<li><span class="fakea" onclick="window.open('https://plus.google.com/share?url=http%3A%2F%2F<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>%2F<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>%2F<?php echo $this->_tpl_vars['url']; ?>
%2F', 'share', 'width=626,height=436'); return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Share_Google'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></li>
									<div class="bpe_rule"></div>
									<li><a href="mailto:?subject=<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?><?php echo htmlspecialchars($this->_tpl_vars['title']); ?>
<?php else: ?><?php echo htmlspecialchars($this->_tpl_vars['pagetitle']); ?>
<?php endif; ?>&amp;body=http://<?php echo $this->_tpl_vars['http_host']; ?>
<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>/<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>/<?php echo $this->_tpl_vars['url']; ?>
/"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Email_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
								</ul>
								<div class="mtri"></div>
							</div>
							<?php endif; ?>
							<span id="autosaving"><?php echo $this->_tpl_vars['SetSeedLangs']['Autosaving']; ?>
</span>
							<span id="autosavefail"><?php echo $this->_tpl_vars['SetSeedLangs']['Autosave_Fail']; ?>
 <span><?php echo $this->_tpl_vars['SetSeedLangs']['Retry']; ?>
</span></span>
							<a id="publishInPreview" class="<?php if ($this->_tpl_vars['showingLive'] == 'yes'): ?> unavailable<?php endif; ?><?php if ($this->_tpl_vars['master'] || $this->_tpl_vars['priv_pages'] == '1'): ?><?php else: ?> faded<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Publish_Changes'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
							<span id="previewLiveDouble">
							<?php if (! $this->_tpl_vars['editingSnippet'] && ! $this->_tpl_vars['editingSitewideContent']): ?>
								<?php echo $this->_tpl_vars['SetSeedLangs']['Your_Updated_Page_Live']; ?>

							<?php else: ?>
								<?php echo $this->_tpl_vars['SetSeedLangs']['Your_Website']; ?>

							<?php endif; ?>
							</span>
							<span id="previewUpdatedOfflineDouble"><?php echo $this->_tpl_vars['SetSeedLangs']['Your_Updated_Page_Offline']; ?>
</span>
							<span id="previewDraftDouble"><?php echo $this->_tpl_vars['SetSeedLangs']['Your_Draft']; ?>
</span>
							<span id="previewSiteDouble"><?php echo $this->_tpl_vars['SetSeedLangs']['Your_Website']; ?>
</span>
						</div>
						<div class="subHeaderLeftMenuItem">
							<div class="target" id="editPageContextMenu">
								<?php echo $this->_tpl_vars['SetSeedLangs']['Edit']; ?>

							</div>
							<div class="triShadow"></div>
							<ul class="contextMenu">

								<li><a id="bpe_cut" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['X'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Cut'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
								<li><a id="bpe_copy" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['C'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Copy'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
								<li><a id="bpe_paste" class="greyedOut"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['V'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Paste'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>

								<li class='iconbarRule'></li>
								<li><a id="bpe_select_all"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
								<li><a id="bpe_deselect_all"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							</ul>
							<div class="mtri"></div>
						</div>




						<div class="hideWhenTiny subHeaderLeftMenuItem" style="display:none">
							<div class="target">
								<?php echo $this->_tpl_vars['SetSeedLangs']['Settings']; ?>

							</div>
							<div class="triShadow"></div>
							<ul>
								<li><a id="editMetaTitle<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>Blog<?php endif; ?>" meta-title="<?php echo $this->_tpl_vars['longtitle']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Meta_Title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
								<li><a id="editMetaDescription<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>Blog<?php endif; ?>" meta-description="<?php echo $this->_tpl_vars['summary']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Meta_Description'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
								<li><a id="editMetaKeywords<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>Blog<?php endif; ?>" meta-keywords="<?php echo $this->_tpl_vars['keywords']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Meta_Keywords'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>

								<?php if ($this->_tpl_vars['page'] == 'edit'): ?>
								<li class="iconbarRule"></li>
								<li><a href='' id="enableCaching" <?php if ($this->_tpl_vars['disable_caching'] == '0'): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Settings_Enable_Caching'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
								<li class="iconbarRule"></li>
								<?php endif; ?>
								<?php if (count($this->_tpl_vars['templates']) > 1): ?>
								<li><a href='' class="showSubMenu"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Settings_Template'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</a>
									<ul id="changeTemplate">
										<?php if ($this->_tpl_vars['templates']): ?>

										<?php if ($this->_tpl_vars['templates'] != ""): ?>
										<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
										<li><a href="<?php echo $this->_tpl_vars['item']; ?>
" class="<?php if ($this->_tpl_vars['template'] == $this->_tpl_vars['item']): ?> bpe_current<?php endif; ?>">
											<?php echo $this->_tpl_vars['item']; ?>

										</a></li>
										<?php endforeach; endif; unset($_from); ?>
										<?php endif; ?>

										<?php endif; ?>
									</ul>
								</li>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['page'] == 'edit'): ?>
								<li><a href='' id="cloneSource"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Clone_Content_From_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</a></li>
								<?php endif; ?>
							</ul>
							<div class="mtri"></div>
						</div>

						<a id="showDragInsert" class="subHeaderButton primaryItem">

								<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>


						</a>
						<a id="bpe_undo" class="subHeaderButton greyedOut"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Z'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Undo'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
						<a id="bpe_redo" class="subHeaderButton greyedOut"><span class="key hideIfTouch"><span class="mod"></span><span class="shift"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Z'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Redo'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
						<ul id="versions" style="display:none;">
									<?php if (! $this->_tpl_vars['editingSnippet'] && ! $this->_tpl_vars['editingSitewideContent']): ?>
										<?php if ($this->_tpl_vars['versions'] != ""): ?>
										<?php $_from = $this->_tpl_vars['versions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
										<li><a href="<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>/admin/blogActions.php?blogAction=viewVersion&id<?php else: ?>/admin/pagesEditPage.php?viewVersion<?php endif; ?>=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="returnTrue<?php if ($this->_tpl_vars['viewVersion'] == $this->_tpl_vars['item']['id']): ?> bpe_current<?php endif; ?>">
											<?php if ($this->_tpl_vars['item']['draft'] == '1'): ?>
											<span class="key"><?php echo $this->_tpl_vars['item']['date']; ?>
</span>
											<?php echo $this->_tpl_vars['SetSeedLangs']['Draft']; ?>

											<?php else: ?>
											<span class="key">
											<?php echo $this->_tpl_vars['item']['date']; ?>

											</span>
											<?php echo $this->_tpl_vars['SetSeedLangs']['Published']; ?>

											<?php endif; ?>

										</a></li>
										<?php endforeach; endif; unset($_from); ?>
										<?php endif; ?>
									<?php else: ?>
										<?php if ($this->_tpl_vars['editingSnippet']): ?>
											<?php if ($this->_tpl_vars['versions'] != ""): ?>
												<?php $_from = $this->_tpl_vars['versions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
												<li><a href="/admin/editSnippet.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="returnTrue<?php if ($this->_tpl_vars['draftid'] == $this->_tpl_vars['item']['id']): ?> bpe_current<?php endif; ?>">
													<?php if ($this->_tpl_vars['item']['draft'] == '1'): ?>
													<span class="key"><?php echo $this->_tpl_vars['item']['date']; ?>
</span>
													<?php echo $this->_tpl_vars['SetSeedLangs']['Draft']; ?>

													<?php else: ?>
													<span class="key">
													<?php echo $this->_tpl_vars['item']['date']; ?>

													</span>
													<?php echo $this->_tpl_vars['SetSeedLangs']['Published']; ?>

													<?php endif; ?>

												</a></li>
												<?php endforeach; endif; unset($_from); ?>
											<?php endif; ?>
										<?php endif; ?>
										<?php if ($this->_tpl_vars['editingSitewideContent']): ?>
											<?php if ($this->_tpl_vars['versions'] != ""): ?>
												<?php $_from = $this->_tpl_vars['versions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
												<li><a href="/admin/editSitewideContent.php?viewVersion=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="returnTrue<?php if ($this->_tpl_vars['draftid'] == $this->_tpl_vars['item']['id']): ?> bpe_current<?php endif; ?>">
													<?php if ($this->_tpl_vars['item']['draft'] == '1'): ?>
													<span class="key"><?php echo $this->_tpl_vars['item']['date']; ?>
</span>
													<?php echo $this->_tpl_vars['SetSeedLangs']['Draft']; ?>

													<?php else: ?>
													<span class="key">
													<?php echo $this->_tpl_vars['item']['date']; ?>

													</span>
													<?php echo $this->_tpl_vars['SetSeedLangs']['Published']; ?>

													<?php endif; ?>

												</a></li>
												<?php endforeach; endif; unset($_from); ?>
											<?php endif; ?>
										<?php endif; ?>
									<?php endif; ?>
							</ul>
						<div class="subHeaderLeftMenuItem">
							<div class="target">
								<?php if (! $this->_tpl_vars['editingSnippet'] && ! $this->_tpl_vars['editingSitewideContent']): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

								<?php else: ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Versions'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

								<?php endif; ?>
							</div>
							<div class="triShadow"></div>
							<ul>

								<?php if (! $this->_tpl_vars['editingSnippet'] && ! $this->_tpl_vars['editingSitewideContent']): ?>
									<li class="subHeaderMenuGroup"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
									<li><a id="editMetaTitle<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>Blog<?php endif; ?>Tiny" meta-title="<?php echo $this->_tpl_vars['longtitle']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Meta_Title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
									<li><a id="editMetaDescription<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>Blog<?php endif; ?>Tiny" meta-description="<?php echo $this->_tpl_vars['summary']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Meta_Description'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
									<li><a id="editMetaKeywords<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>Blog<?php endif; ?>Tiny" meta-keywords="<?php echo $this->_tpl_vars['keywords']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Meta_Keywords'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
									<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>
									<li class="iconbarRule"></li>
									<li><a id="editBlogTags" meta-tags="<?php echo $this->_tpl_vars['tags']; ?>
" data-meta-all-tags="<?php echo ((is_array($_tmp=$this->_tpl_vars['alltags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo $this->_tpl_vars['SetSeedLangs']['Tags']; ?>
</a></li>
									<li><a id="editBlogDate" meta-date="<?php echo ((is_array($_tmp=$this->_tpl_vars['timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Published_Date'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>									</li>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['page'] == 'edit'): ?>
									<li class="iconbarRule"></li>
									<li><a href='' id="enableCachingTiny" <?php if ($this->_tpl_vars['disable_caching'] == '0'): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Settings_Enable_Caching'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>

									<li><a href='' id="enablePreviewAsEmail" <?php if ($this->_tpl_vars['preview_as_email'] == '1'): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Preview_as_email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>

									<?php endif; ?>
									<?php if (count($this->_tpl_vars['templates']) > 1): ?>
									<li><a href='' class="showSubMenu"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Settings_Template'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</a>
										<ul id="changeTemplateTiny">
											<?php if ($this->_tpl_vars['templates']): ?>

											<?php if ($this->_tpl_vars['templates'] != ""): ?>
											<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
											<li><a href="<?php echo $this->_tpl_vars['item']; ?>
" class="<?php if ($this->_tpl_vars['template'] == $this->_tpl_vars['item']): ?> bpe_current<?php endif; ?>">
												<?php echo $this->_tpl_vars['item']; ?>

											</a></li>
											<?php endforeach; endif; unset($_from); ?>
											<?php endif; ?>

											<?php endif; ?>
										</ul>
									</li>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['page'] == 'edit'): ?>
																		<li class="iconbarRule"></li>
									<li><a href='' id="cloneSource"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Clone_Content_From_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</a></li>
									<?php endif; ?>
								<?php endif; ?>
								<div id="versionsToHide" <?php if ($this->_tpl_vars['cloneSourceId']): ?>style="display:none"<?php endif; ?>>
									<?php if (! $this->_tpl_vars['editingSnippet'] && ! $this->_tpl_vars['editingSitewideContent']): ?>
									<li class="subHeaderMenuGroup"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Versions'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
									<?php endif; ?>
									<div id="versionsTiny">
									</div>
								</div>

							</ul>
							<div class="mtri"></div>
						</div>


						<a href="<?php if (! $this->_tpl_vars['editingSnippet'] && ! $this->_tpl_vars['editingSitewideContent']): ?><?php if ($this->_tpl_vars['page'] == 'blog_edit' && $this->_tpl_vars['indexUrl'] == ""): ?>noblogset<?php else: ?><?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>/<?php echo $this->_tpl_vars['indexUrl']; ?>
<?php endif; ?>/<?php echo $this->_tpl_vars['url']; ?>
?<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>previewblog<?php else: ?>preview<?php endif; ?>=<?php echo $this->_tpl_vars['viewVersion']; ?>
<?php if ($this->_tpl_vars['preview_as_email'] && $this->_tpl_vars['page'] != 'blogEdit'): ?>&preview_as_email=1<?php endif; ?><?php endif; ?><?php else: ?>refresh<?php endif; ?>" target="_blank" class="right hideWhenTiny- subHeaderButton previewButton  <?php if ($this->_tpl_vars['page'] == 'blog_edit' && $this->_tpl_vars['indexUrl'] == ""): ?>greyedOut<?php endif; ?>" title="<?php if ($this->_tpl_vars['page'] == 'blog_edit' && $this->_tpl_vars['indexUrl'] == ""): ?><?php echo $this->_tpl_vars['SetSeedLangs']['No_Blog_Page_Created_Yet']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Preview_Long'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php endif; ?>" id="previewPage">
								<?php if (! $this->_tpl_vars['editingSnippet'] && ! $this->_tpl_vars['editingSitewideContent']): ?>
								<span class="previewPageText"><?php echo $this->_tpl_vars['SetSeedLangs']['Preview_Page']; ?>
</span>
								<?php else: ?>
								<span class="previewPageText"><?php echo $this->_tpl_vars['SetSeedLangs']['Preview_Site']; ?>
</span>
								<?php endif; ?>
								<span class="previewChangesText"><span class="hideWhenTiny"><?php echo $this->_tpl_vars['SetSeedLangs']['Preview_Changes']; ?>
</span><span class="showWhenTiny"><?php echo $this->_tpl_vars['SetSeedLangs']['Preview']; ?>
</span></span>


						</a>




					</div>

					<div id="editPageTop" class="topBar <?php if ($this->_tpl_vars['editingSitewideContent']): ?>nonEditable<?php endif; ?>">
						<div class="returnToLP"></div>

						<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
						<?php if ($this->_tpl_vars['page'] == 'edit'): ?>
						<?php if (! $this->_tpl_vars['editingSnippet'] && ! $this->_tpl_vars['editingSitewideContent']): ?>
							<div class="topBarButtonBack" id="backToPages">

							</div>
							<?php endif; ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>
							<div class="topBarButtonBack" id="backToBlog">

							</div>
						<?php endif; ?>


						<?php if (! $this->_tpl_vars['editingSitewideContent'] && ! $this->_tpl_vars['editingSnippet']): ?>

						<?php if ($this->_tpl_vars['page'] == 'blog_edit'): ?>
							<div class="topBarTitle renameBlog " id="renameEntry"><div><span><?php echo htmlspecialchars($this->_tpl_vars['title']); ?>
</span></div></div>
						<?php else: ?>
							<div class="topBarTitle renamePage " id="renamePage"><div><span><?php echo htmlspecialchars($this->_tpl_vars['pagetitle']); ?>
</span></div></div>
						<?php endif; ?>

						<form action="pageActions.php" method="post" id="renameEditPageform" class="renamePageForm menuForm menu_with_options" style="display:none">
							<input type="hidden" name="pageAction" value="renamePage"/>
							<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['static_pagesId']; ?>
"/>
							<input type="text" name="title" value="" class="pageMenuInput  greyedOut focus"/></span>
						</form>
						<?php elseif ($this->_tpl_vars['editingSnippet']): ?>

							<div class="topBarButtonBack" id="backToSnippets">

							</div>


							<div class="topBarTitle renameSnippet" id="renameSnippet"><div><span><?php echo htmlspecialchars($this->_tpl_vars['sitewideTitle']); ?>
</span></div></div>
							<form action="snippetsActions.php" method="post" class="menuForm menu_with_options" style="display:none" id="renameSnippetForm">
								<input type="hidden" name="snippetsAction" value="rename"/>
								<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['staticid']; ?>
"/>
								<input type="text" name="name" value="" class="pageMenuInput  greyedOut focus"/></span>
							</form>
						<?php else: ?>
							<div style="display:none" id="editMenu"></div>

							<div class="topBarButtonBack" id="backToSettings">

							</div>
							<h1><?php echo htmlspecialchars($this->_tpl_vars['sitewideTitleDisplay']); ?>
</h1>

						<?php endif; ?>
					<div class="clear"></div>
					</div>
						<div id="dragInsertMask"></div>
						<div id="dragInsert" <?php if ($this->_tpl_vars['cloneSourceId']): ?>style="display:none;"<?php endif; ?>>
							<div id="dragInsertInner">

								<div id="dragInsertIndex"  class="dragInsertTabContents">
									<div class="dragInsertTabHeader">

										<div class="closeDragInsert"></div>
										<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['What_Do_You_Want_To_Add'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
									</div>
									<div class="dragInsertTabContentsMain clearfix">
																				<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
										<?php if ($this->_tpl_vars['columnsList']): ?>
										<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Columns'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
										<?php endif; ?>
										<div class="clear"></div>
										<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h3>
										<div id="tab2Images" class="lpBoxSmall"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Images'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div>



										<?php if (count($this->_tpl_vars['allprivs']) > 3): ?>
											<?php if ($this->_tpl_vars['DISABLE_GALLERIES'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['1'] == 1): ?><div class="lpBoxSmall" id="tab2Galleries"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Galleries'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
											<?php if ($this->_tpl_vars['DISABLE_VIDEOS'] == 0): ?><div class="lpBoxSmall" id="tab2Videos"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Videos'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
																					<div id="tab2Tables" class="lpBoxSmall"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Tables'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div>
											<?php if ($this->_tpl_vars['DISABLE_MAILING_LIST'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['6'] == 1 || $this->_tpl_vars['allprivs']['7'] == 1): ?><div class="lpBoxSmall" id="tab2Newsletter"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Mailing_Lists'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>

											<?php if ($this->_tpl_vars['DISABLE_FORMS'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['2'] == 1): ?><div class="lpBoxSmall" id="tab2Forms"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Contact_forms'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
											<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['3'] == 1): ?><div class="lpBoxSmall" id="tab2Products"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>

											<?php if ($this->_tpl_vars['DISABLE_BOOKINGS'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['13'] == 1): ?><div class="lpBoxSmall" id="tab2Booking"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
											<?php if ($this->_tpl_vars['DISABLE_CALENDARS'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['4'] == 1): ?><div class="lpBoxSmall" id="tab2Calendars"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Calendars'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
											<?php if ($this->_tpl_vars['allprivs']['5'] == 1): ?><div class="lpBoxSmall" id="tab2Snippets" <?php if ($this->_tpl_vars['editingSnippet']): ?>class="selected"<?php endif; ?>><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Snippets'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
											<?php if ($this->_tpl_vars['DISABLE_EMBED_CODES'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['12'] == 1): ?><div class="lpBoxSmall" id="tab2EmbedCodes" <?php if ($this->_tpl_vars['editingSnippet']): ?>class="selected"<?php endif; ?>><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Embed_Codes'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?><?php endif; ?>
										<?php else: ?>

											<?php if ($this->_tpl_vars['allprivs']['1'] == 1 || $this->_tpl_vars['master']): ?>
											<?php if ($this->_tpl_vars['DISABLE_GALLERIES'] == 0): ?><div class="lpBoxSmall" id="tab2Galleries"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Galleries'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
											<?php endif; ?>
											<?php if ($this->_tpl_vars['allprivs']['1'] == 1 || $this->_tpl_vars['master']): ?>

											<?php if ($this->_tpl_vars['DISABLE_VIDEOS'] == 0): ?><div class="lpBoxSmall" id="tab2Videos"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Videos'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
											<div id="tab2Tables" class="lpBoxSmall"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Tables'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div>
											<?php if ($this->_tpl_vars['DISABLE_MAILING_LIST'] == 0): ?><div class="lpBoxSmall" id="tab2Newsletter"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Mailing_Lists'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
											<?php if ($this->_tpl_vars['DISABLE_FORMS'] == 0): ?><div class="lpBoxSmall" id="tab2Forms"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Contact_forms'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
											<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><div class="lpBoxSmall" id="tab2Products"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
											<?php if ($this->_tpl_vars['DISABLE_BOOKINGS'] == 0): ?><div class="lpBoxSmall" id="tab2Booking"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
											<?php if ($this->_tpl_vars['DISABLE_CALENDARS'] == 0): ?><div class="lpBoxSmall" id="tab2Calendars"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Calendars'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
											<?php if ($this->_tpl_vars['DISABLE_SNIPPETS'] == 0): ?>
											<div class="lpBoxSmall" id="tab2Snippets" <?php if ($this->_tpl_vars['editingSnippet']): ?>class="selected"<?php endif; ?>><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Snippets'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div>
											<?php endif; ?>
											<?php if ($this->_tpl_vars['DISABLE_EMBED_CODES'] == 0): ?><div class="lpBoxSmall" id="tab2EmbedCodes"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Embed_Codes'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div><?php endif; ?>
											<?php endif; ?>
										<?php endif; ?>
										<div id="tab2Files" class="lpBoxSmall"><a href=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Files'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></div>
									</div>
								</div>
								<div id="dragInsertTabText" class="dragInsertTabContents">
									<div class="dragInsertTabHeader">
										<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
										<div class="closeDragInsert"></div>
										<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
									</div>
									<div class="dragInsertTabContentsMain clearfix">
										<ul class="clearfix">

												<li id="dragInsertP" class="dragInsertItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Paragraph'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
												<li class='iconbarRule'></li>
												<li id="dragInsertH1" class="dragInsertItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Main_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
												<li id="dragInsertH2" class="dragInsertItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sub_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
												<li id="dragInsertH3" class="dragInsertItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Section_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
												<li id="dragInsertH4" class="dragInsertItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Minor_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
												<li class='iconbarRule'></li>
												<li id="dragInsertUL" class="dragInsertItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Bulleted_List'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
												<li id="dragInsertOL" class="dragInsertItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Numbered_List'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
												<li class='iconbarRule'></li>
												<li id="dragInsertPre" class="dragInsertItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Code'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
												<li id="dragInsertTable" class="dragInsertItem dragInsertTable"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Table'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
										</ul>
									</div>
								</div>

						<div id="dragInsertTabWidgets" class="dragInsertTabContents">
							<div class="dragInsertTabHeader">
								<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
								<div class="closeDragInsert"></div>
								<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
							</div>
							<div class="dragInsertTabContentsMain clearfix">
								<ul>
									<li id="dragInsertSitemap" class="dragInsertItem dragInsertSitemap"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sitemap'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
									<?php if (! $this->_tpl_vars['editingSitewideContent'] && ! $this->_tpl_vars['editingSnippet'] && $this->_tpl_vars['page'] != 'blog_edit'): ?>
									<?php if ($this->_tpl_vars['type'] == 'topLevel' || $this->_tpl_vars['type'] == 'nonLinking'): ?>
									<?php if ($this->_tpl_vars['DISABLE_BLOG'] == 0): ?><li id="dragInsertBlog" class="dragInsertItem dragInsertBlog"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Widget_Blog'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li><?php endif; ?>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><li id="dragInsertCheckout" class="dragInsertItem dragInsertCheckout"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Widget_Checkout'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
									<li id="dragInsertInvoice" class="dragInsertItem dragInsertInvoice"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Invoice_Widget'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li><?php endif; ?>
									<?php endif; ?>

									<?php $_from = $this->_tpl_vars['customList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<?php $this->assign('fn', "Custom_".($this->_tpl_vars['item']['name'])); ?>
										<?php $this->assign('fn', ((is_array($_tmp=$this->_tpl_vars['fn'])) ? $this->_run_mod_handler('replace', true, $_tmp, ".tpl", "") : smarty_modifier_replace($_tmp, ".tpl", ""))); ?>

										<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
										<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
										<?php else: ?>
										<?php $this->assign('friendlyname', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')))) ? $this->_run_mod_handler('replace', true, $_tmp, ".tpl", "") : smarty_modifier_replace($_tmp, ".tpl", "")))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp))); ?>
										<?php endif; ?>
										<li class="dragInsertCustom dragInsertItem" data-tpl="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" zones="<?php $_from = $this->_tpl_vars['item']['zones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['zone']):
?><?php echo $this->_tpl_vars['zone']; ?>
,<?php endforeach; endif; unset($_from); ?>" data-prod-cat-id="<?php echo $this->_tpl_vars['item']['prod_cat_id']; ?>
"><?php echo $this->_tpl_vars['friendlyname']; ?>
</li>
									<?php endforeach; endif; unset($_from); ?>
								</ul>
							</div>
						</div>


						<div id="dragInsertTabLayout" class="dragInsertTabContents">
							<div class="dragInsertTabHeader">
								<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
								<div class="closeDragInsert"></div>
								<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Columns'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
							</div>
							<div class="dragInsertTabContentsMain clearfix">
								<?php if ($this->_tpl_vars['columnsList']): ?>
																<ul>
									<?php $_from = $this->_tpl_vars['columnsList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
									<?php $this->assign('fn', "Custom_".($this->_tpl_vars['item']['name'])); ?>
									<?php $this->assign('fn', ((is_array($_tmp=$this->_tpl_vars['fn'])) ? $this->_run_mod_handler('replace', true, $_tmp, ".tpl", "") : smarty_modifier_replace($_tmp, ".tpl", ""))); ?>
									<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
									<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
									<?php else: ?>
									<?php $this->assign('friendlyname', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')))) ? $this->_run_mod_handler('replace', true, $_tmp, ".tpl", "") : smarty_modifier_replace($_tmp, ".tpl", "")))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp))); ?>
									<?php endif; ?>

									<li class="dragInsertItem dragInsertColumns" data-tpl="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" zones="<?php $_from = $this->_tpl_vars['item']['zones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['zone']):
?><?php echo $this->_tpl_vars['zone']; ?>
,<?php endforeach; endif; unset($_from); ?>"><?php echo $this->_tpl_vars['friendlyname']; ?>
</li>
								<?php endforeach; endif; unset($_from); ?>
								</ul>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['splitClasses']): ?>
																<ul id="dragSectionItems" style="display:none">
								<?php if (! $this->_tpl_vars['editingSitewideContent'] && ! $this->_tpl_vars['editingSnippet']): ?>
									<?php $_from = $this->_tpl_vars['splitClasses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
									<?php if ($this->_tpl_vars['item'] != ""): ?>
										<?php $this->assign('fn', "Custom_".($this->_tpl_vars['item'][0])); ?>
										<?php $this->assign('fn', ((is_array($_tmp=$this->_tpl_vars['fn'])) ? $this->_run_mod_handler('replace', true, $_tmp, ".tpl", "") : smarty_modifier_replace($_tmp, ".tpl", ""))); ?>
									
										<?php $this->assign('fn', "Custom_".($this->_tpl_vars['item'])); ?>
										<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
										<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
										<?php else: ?>
										<?php $this->assign('friendlyname', ((is_array($_tmp=$this->_tpl_vars['item'][1])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp))); ?>
										<?php endif; ?>

									<li class="dragInsertItem dragInsertSection" data-tpl="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][0])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-default="<?php echo $this->_tpl_vars['item'][2]; ?>
"><?php echo $this->_tpl_vars['friendlyname']; ?>
</li>
									<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>
								<?php endif; ?>
								</ul>
								<?php endif; ?>
							</div>
						</div>

					</div>
				</div>
					<div id="dr">

					<div id="contentWrapper">

						<div id="undoStack" style="display:none;"></div>
						<input type="hidden" name="" value="" id="finalRedo"/>

						<?php if ($this->_tpl_vars['viewVersionDate'] != "" && $this->_tpl_vars['draft'] != '1'): ?>
						<div id="showingOnly" style="display:none">Viewing a backup: Showing the version of this page saved on: <?php echo $this->_tpl_vars['viewVersionDate']; ?>
</div>
						<?php endif; ?>
						<div id="imageClasses" style="display:none"><?php echo $this->_tpl_vars['imageClasses']; ?>
</div>
						<div id="blockClasses" style="display:none"><?php echo $this->_tpl_vars['blockClasses']; ?>
</div>
						<div id="splitClasses" style="display:none">
							<?php $_from = $this->_tpl_vars['splitClasses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<?php if ($this->_tpl_vars['item'] != ""): ?>
							<div class="bpe_menu_sub" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><div class="menu_with_options"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')))) ? $this->_run_mod_handler('replace', true, $_tmp, ".tpl", "") : smarty_modifier_replace($_tmp, ".tpl", "")))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div></div>
							<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</div>
						<div id="customList" style="display:none">
						<?php $_from = $this->_tpl_vars['customList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<div class="bpe_menu_sub" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" zones="<?php $_from = $this->_tpl_vars['item']['zones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['zone']):
?><?php echo $this->_tpl_vars['zone']; ?>
,<?php endforeach; endif; unset($_from); ?>"><div class="menu_with_options"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')))) ? $this->_run_mod_handler('replace', true, $_tmp, ".tpl", "") : smarty_modifier_replace($_tmp, ".tpl", "")))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div></div>
						<?php endforeach; endif; unset($_from); ?>
						</div>
						<div id="columnsList" style="display:none">
						<?php $_from = $this->_tpl_vars['columnsList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<div class="bpe_menu_sub" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" zones="<?php $_from = $this->_tpl_vars['item']['zones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['zone']):
?><?php echo $this->_tpl_vars['zone']; ?>
,<?php endforeach; endif; unset($_from); ?>"><div class="menu_with_options"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')))) ? $this->_run_mod_handler('replace', true, $_tmp, ".tpl", "") : smarty_modifier_replace($_tmp, ".tpl", "")))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div></div>
						<?php endforeach; endif; unset($_from); ?>
						</div>
						<select id="bpe_forms" style="display:none">
						<?php if ($this->_tpl_vars['module_forms'] == 'true' && count($this->_tpl_vars['forms']) > 0): ?>
						<?php $_from = $this->_tpl_vars['forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galsloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galsloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['formx']):
        $this->_foreach['galsloop']['iteration']++;
?>
							<option value="<?php echo $this->_tpl_vars['formx']['id']; ?>
"><?php echo htmlspecialchars($this->_tpl_vars['formx']['title']); ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>
						</select>




						<?php if ($this->_tpl_vars['editingSitewideContent'] == 'yes'): ?>
						<form action="/admin/editSitewideContent.php" id="addEntryForm" class="editingSitewide" ethod="post">
							<input type="hidden" name="editing" value="<?php echo $this->_tpl_vars['sitewideTitle']; ?>
" id="editing"/>
							<input type="hidden" name="draftid" value="<?php echo $this->_tpl_vars['draftid']; ?>
"/>
							<input type="hidden" name="pageid" value="<?php echo $this->_tpl_vars['pageid']; ?>
"/>
							<input type="hidden" name="language" value="<?php echo $this->_tpl_vars['sitewideContentLanguage']; ?>
"/>
							<?php if ($this->_tpl_vars['viewVersionDate'] != "" && $this->_tpl_vars['draft'] != '1'): ?>
							<input type="hidden" name="editingBackup" value="<?php echo $this->_tpl_vars['viewVersion']; ?>
"/>
							<?php endif; ?>

							<div class="textEditingArea">
								<div class="textEditingTopEmpty"></div>
								<div class="textEditingAreaInner">
									<div style="margin-top:0" class="clearfix">
										<div id="entryWrapper">
											<input type="hidden" name="entry_editor" value="" id="entryTextAreaValEditor">
											<input type="hidden" name="entry" value="" id="entryTextAreaVal"/><div id="entryTextArea" style="display:none"><?php echo $this->_tpl_vars['sitewideContentContent']; ?>
</div><div id="entry"><?php echo $this->_tpl_vars['sitewideContentContent']; ?>
</div>
											</div>
									</div>
								</div>

								
							</div>
													</form>
						<?php elseif ($this->_tpl_vars['editingSnippet'] == 'yes'): ?>
						<form action="/admin/editSnippet.php" id="addEntryForm" class="editingSnippet" method="post">
							<input type="hidden" name="editing" value="<?php echo $this->_tpl_vars['draftid']; ?>
"/>
							<input type="hidden" name="staticid" value="<?php echo $this->_tpl_vars['staticid']; ?>
" id="editing"/>

							<?php if ($this->_tpl_vars['viewVersionDate'] != "" && $this->_tpl_vars['draft'] != '1'): ?>
							<input type="hidden" name="editingBackup" value="<?php echo $this->_tpl_vars['viewVersion']; ?>
"/>
							<?php endif; ?>

							<div class="textEditingArea">
								<div class="textEditingTopEmpty"></div>
								<div class="textEditingAreaInner">
									<div style="margin-top:0" class="clearfix">
										<div id="entryWrapper">
											<input type="hidden" name="entry_editor" value="" id="entryTextAreaValEditor">
											<input type="hidden" name="entry" value="" id="entryTextAreaVal"/><div id="entryTextArea" style="display:none"><?php echo $this->_tpl_vars['sitewideContentContent']; ?>
</div><div id="entry"><?php echo $this->_tpl_vars['sitewideContentContent']; ?>
</div>
											</div>
									</div>
								</div>

								
							</div>
													</form>
						<?php else: ?>
							<?php if ($this->_tpl_vars['page'] == 'edit'): ?>
								<form action="/admin/pagesEditPage.php" id="addEntryForm" method="post">
									<input type="hidden" name="kbid" value="<?php echo $this->_tpl_vars['static_pagesId']; ?>
" id="kbid"/>
									<?php if ($this->_tpl_vars['viewVersionDate'] != "" && $this->_tpl_vars['draft'] != '1'): ?>
									<input type="hidden" name="editingBackup" value="<?php echo $this->_tpl_vars['viewVersion']; ?>
"/>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['draft'] == '1'): ?>
									<input type="hidden" name="draftId" value="<?php echo $this->_tpl_vars['viewVersion']; ?>
"/>
									<?php endif; ?>
									<div class="textEditingArea">
										<div class="textEditingTopEmpty"></div>
										<div class="textEditingAreaInner">
											<div style="margin-top:0" class="clearfix">
												<div id="entryWrapper" <?php if ($this->_tpl_vars['cloneSourceId']): ?>style="visibility:hidden;"<?php endif; ?>>
													<input type="hidden" name="entry_editor" value="" id="entryTextAreaValEditor">
													<input type="hidden" name="entry" value="" id="entryTextAreaVal"/><div id="entryTextArea" style="display:none"><?php echo $this->_tpl_vars['entrytext']; ?>
</div><div id="entry"><?php echo $this->_tpl_vars['entrytext']; ?>
</div></div>
												<div id="cloning" style="<?php if (! $this->_tpl_vars['cloneSourceId']): ?>display:none;<?php endif; ?>"><p title="<?php echo $this->_tpl_vars['SetSeedLangs']['Clone_Source_URL']; ?>
: <?php echo $this->_tpl_vars['cloneSourceUrl']; ?>
"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Clone_Source'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
: <strong id="cloningPageName"><?php echo $this->_tpl_vars['cloneSourceName']; ?>
</strong></span></p><a id="cloneDelete" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Remove_Clone_Source'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"></a></div>

											</div>
										</div>

								
									</div>
																<br/>

								<input type="hidden" name="url" value="<?php echo $this->_tpl_vars['url']; ?>
" id="urlValue"/>
								<input type="hidden" name="longtitle" value="<?php echo $this->_tpl_vars['longtitle']; ?>
" id="longTitleValue"/>
								<input type="hidden" name="keywords" id="metaKeywords" value="<?php echo $this->_tpl_vars['keywords']; ?>
"/>
								<input type="hidden" name="summary" id="metaSummary" value="<?php echo $this->_tpl_vars['summary']; ?>
"/>
								</form>
							<?php else: ?>

								<form action="/admin/blogActions.php" id="addEntryForm" class="editingBlog" method="post">
									<input type="hidden" name="blogAction" value="saveEntry"/>
									<input type="hidden" name="kbid" value="<?php echo $this->_tpl_vars['blog_entriesId']; ?>
" id="kbid"/>
									<?php if ($this->_tpl_vars['viewVersionDate'] != "" && $this->_tpl_vars['draft'] != '1'): ?>
									<input type="hidden" name="editingBackup" value="<?php echo $this->_tpl_vars['viewVersion']; ?>
"/>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['draft'] == '1'): ?>
									<input type="hidden" name="draftId" value="<?php echo $this->_tpl_vars['viewVersion']; ?>
"/>
									<?php endif; ?>
									<div class="textEditingArea">
										<div class="textEditingTopEmpty"></div>
										<div class="textEditingAreaInner">
											<div style="margin-top:0" class="clearfix">
											<div id="entryWrapper">
												<input type="hidden" name="entry_editor" value="" id="entryTextAreaValEditor">
												<input type="hidden" name="entry" value="" id="entryTextAreaVal"/><div id="entryTextArea" style="display:none"><?php echo $this->_tpl_vars['content']; ?>
</div><div id="entry"><?php echo $this->_tpl_vars['content']; ?>
</div></div>
										</div>
										</div>

								

									</div>
																		<input type="hidden" name="timestamp" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
" maxlength="255"  id="blogMetaTime"/>
									<input type="hidden" name="longtitle" value="<?php echo $this->_tpl_vars['longtitle']; ?>
" id="blogMetaLongTitle"/>
									<input type="hidden" name="keywords" value="<?php echo $this->_tpl_vars['keywords']; ?>
" id="blogMetaKeywords"/>
									<input type="hidden" name="keywords" value="<?php echo $this->_tpl_vars['tags']; ?>
" id="blogMetaTags"/>

									<input type="hidden" name="summary" value="<?php echo $this->_tpl_vars['summary']; ?>
" id="blogMetaSummary"/>

								</form>
							<?php endif; ?>
						<?php endif; ?>


				</div>

				</div>
					<div class="paneTools">
					<div class="disabledMask"></div>
							<div id="nonComponent">
															<div class="paneToolsButtonRow">
									<div class="paneToolsBottomHalf paneToolsDuplicate bpe_duplicate">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Duplicate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

									</div>
									<div class="paneToolsBottomHalf paneToolsDelete bpe_delete">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

									</div>
								</div>
								<div id="stylesMenuText">

									<div class="stylesHeading">
										<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text_styles'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedTextFormat">

										</div>
										<div class="triShadow"></div>
										<ul>
											<li><a id="changeStyleP" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Paragraph'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch">P</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Paragraph'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
											<li class='iconbarRule'></li>
											<li><a id="changeStyleH1" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Main_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['H'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><span id="hspanKeyh1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Main_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
											<li><a id="changeStyleH2" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sub_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['H'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><span id="hspanKeyh2"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sub_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
											<li><a id="changeStyleH3" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Section_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['H'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><span id="hspanKeyh3"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Section_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
											<li><a id="changeStyleH4" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Minor_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['H'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><span id="hspanKeyh4"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Minor_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
											<li class='iconbarRule'></li>
											<li><a id="changeStyleUL" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Bulleted_List'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['B'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Bulleted_List'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
											<li><a id="changeStyleOL" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Numbered_List'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['N'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Numbered_List'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
											<li class='iconbarRule'></li>
											<li><a id="changeStylePre" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Code'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['C'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Code'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
																						<li style="display:none"><a id="changeStyleTable" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Table'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Table'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
										</ul>
										<div class="mtri"></div>
									</div>
									<div class="hiddenTools" id="indentTools">
										<div class="paneToolsPrimary secondaryAction noIcon" id="indentListItem">
											<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Indent_List_Item'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

										</div>
										<div class="paneToolsPrimary secondaryAction noIcon" id="removeIndentListItem">
											<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Remove_Indent'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

										</div>
									</div>
									<div class="stylesHeading">
										<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Advanced'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedTextClass">

										</div>
										<div class="triShadow"></div>
										<ul id="iconbarBlockClasses">
											<li><a rel="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Default'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['S'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><span class="friendlyname"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Default'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
											<li class='iconbarRule'></li>

											<?php $_from = $this->_tpl_vars['blockClassesArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
												<?php $this->assign('fn', "Custom_".($this->_tpl_vars['item'])); ?>
												<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
												<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
												<?php else: ?>
												<?php $this->assign('friendlyname', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp))); ?>
												<?php endif; ?>
												<li><a rel="<?php echo $this->_tpl_vars['item']; ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['S'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><span class="friendlyname"><?php echo $this->_tpl_vars['friendlyname']; ?>
</span></a></li>
											<?php endforeach; endif; unset($_from); ?>
										</ul>
										<div class="mtri"></div>
									</div>
									<div class="stylesHeading">
										<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text_Alignment'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedTextAlignment">

										</div>
										<div class="triShadow"></div>
										<ul id="changeTextAlign">
											<li><a rel="left" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Left'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" id="changeStyleLeft"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Q'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Left'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
											</li>
											<li><a rel="center" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Center'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" id="changeStyleCenter"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['W'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Center'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
											<li><a rel="right" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Right'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" id="changeStyleRight"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['E'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Right'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
											<li><a rel="justify" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Justify'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" id="changeStyleDefault"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Justify'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>

										</ul>
										<div class="mtri"></div>
									</div>
								</div>
								<div id="stylesMenuImage">
									<div class="stylesHeading">
										<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Image_styles'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedImageAlignment">

										</div>
										<div class="triShadow"></div>
										<ul id="iconbarImagePrimary">
											<li><a rel="Image_Default" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Default'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" id="changeStyleDefault"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Default'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
											<li><a rel="Left_Image" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Left'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" id="changeStyleLeft"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Q'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Left'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>						</li>
											<li><a rel="Centered" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Center'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" id="changeStyleCenter"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['W'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Center'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
											<li><a rel="Right_Image" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Right'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" id="changeStyleRight"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['E'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Align_Right'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
										</ul>
										<div class="mtri"></div>
									</div>
									<div class="stylesHeading">
										<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Image_Size'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedImageSize">

										</div>
										<div class="triShadow"></div>
										<ul id="changeImageSize">
											<?php $_from = $this->_tpl_vars['image_sizes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['image_size']):
        $this->_foreach['loop1']['iteration']++;
?>
											<?php $this->assign('fn', ((is_array($_tmp=$this->_tpl_vars['image_size']['name'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_'))); ?>
											<?php $this->assign('fn', "Custom_".($this->_tpl_vars['fn'])); ?>
											<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
											<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
											<?php else: ?>
											<?php $this->assign('friendlyname', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['image_size']['name'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp))); ?>
											<?php endif; ?>
											<li><a class="changeImageSize <?php if ($this->_tpl_vars['image_size']['default'] == 'true'): ?>defaultImageSize<?php endif; ?>" string="width=<?php echo ((is_array($_tmp=$this->_tpl_vars['image_size']['width'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&amp;height=<?php echo ((is_array($_tmp=$this->_tpl_vars['image_size']['height'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&amp;shrink=<?php echo ((is_array($_tmp=$this->_tpl_vars['image_size']['shrink'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang="<?php echo $this->_tpl_vars['friendlyname']; ?>
"><?php echo $this->_tpl_vars['friendlyname']; ?>
</a></li>
											<?php endforeach; endif; unset($_from); ?>
											<li><a class="changeImageSize" string="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Original'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Original'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
										</ul>
										<div class="mtri"></div>
									</div>
									<div class="stylesHeading">
										<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Advanced_Image_Styles'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedImageClass">

										</div>
										<div class="triShadow"></div>
										<ul id="iconbarImageClasses">
											<li><a rel="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Default'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['S'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><span class="friendlyname"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Default'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
											<li class='iconbarRule'></li>
											<?php $_from = $this->_tpl_vars['imageClassesArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
											<?php $this->assign('fn', "Custom_".($this->_tpl_vars['item'])); ?>
											<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
											<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
											<?php else: ?>
											<?php $this->assign('friendlyname', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp))); ?>
											<?php endif; ?>
											<li><a rel="<?php echo $this->_tpl_vars['item']; ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['S'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><span class="friendlyname"><?php echo $this->_tpl_vars['friendlyname']; ?>
</span></a></li>
										<?php endforeach; endif; unset($_from); ?>
										</ul>
										<div class="mtri"></div>
									</div>
								</div>
								
								<?php if (! $this->_tpl_vars['DISABLE_HELP']): ?>
								<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/editor.mp4"><?php echo $this->_tpl_vars['SetSeedLangs']['QuickTour_Editor']; ?>
</div>
								<?php endif; ?>								
							</div>
							<div id="components">
								<div class="paneToolsButtonRow">
									<div class="paneToolsBottomHalf paneToolsDuplicate bpe_duplicate">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Duplicate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

									</div>
									<div class="paneToolsBottomHalf paneToolsDelete bpe_delete">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

									</div>
								</div>
								<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage_Item_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
							</div>
							<div id="cores">
								<div class="paneToolsButtonRow">
									<div class="paneToolsBottomHalf paneToolsDuplicate bpe_duplicate">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Duplicate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

									</div>
									<div class="paneToolsBottomHalf paneToolsDelete bpe_delete">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

									</div>
								</div>
								<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Cores_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
							</div>

					</div>

				</div>
				<?php endif; ?>


				<div id="statfake"></div>
				<div id="statsWrapper" class="rightPane showOnLoadRightPane">
					<div class="paneContents withTitleBar withoutCleverFilterBar">
					<div class="topBar">
						<div class="returnToLP"></div>
						<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
						<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Statistics'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
					</div>

					<div class="pagesScroll">
						<div class="clearfix">

					<?php if (! $this->_tpl_vars['stats']): ?>

					<?php $this->assign('month', ((is_array($_tmp='F')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp))); ?>
					<?php $this->assign('day', ((is_array($_tmp='j')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp))); ?>
					<?php $this->assign('dayending', ((is_array($_tmp='S')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp))); ?>


						<p class="noPages"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Stats_Generating'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>


					<?php endif; ?>
					<?php echo $this->_tpl_vars['stats']; ?>

							<p id="statsNote"><?php echo ((is_array($_tmp=$this->_tpl_vars['statsNote'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>
						</div>
						</div>
					</div>

				</div>



			<div id="downloads" style="display:none">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/views/pages/downloads.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>



<div id="overlay"></div>
<div id="saved"></div>


<div id="savedLog"></div>
<div id="message2"></div>
<div id="messageSound"></div>

<?php if ($this->_tpl_vars['otherUsers']): ?>
<div id="fade"></div>
<div id="otherUsers">
	<div>
	<h1><strong><?php echo $this->_tpl_vars['SetSeedLangs']['Warning']; ?>
:</strong> <?php echo $this->_tpl_vars['SetSeedLangs']['Other_Users_Logged_In']; ?>
</h1>
	<p>
		<?php echo $this->_tpl_vars['SetSeedLangs']['Other_Users_Logged_In_More']; ?>

	</p>
	<ul>
	<?php $_from = $this->_tpl_vars['otherUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
		<li><?php echo $this->_tpl_vars['item']; ?>
</li><?php endforeach; endif; unset($_from); ?>
	</ul>
	<p><?php echo $this->_tpl_vars['SetSeedLangs']['Other_Users_Logged_In_More2']; ?>
</p>


	</p>
	<p style="text-align:right">
		<a href="#" id="dismisOtherUsers">OK</a>
	</p>
	</div>
</div>
<script type="text/javascript" charset="utf-8">
	<?php echo '
	$(document).keypress(function (e) {
      if (e.keyCode == 13) {
		$("#fade,#otherUsers").fadeOut();
      }
    });
	$(document).ready(function(){
		$("#dismisOtherUsers").click(function(){
			$("#fade,#otherUsers").fadeOut();
			return false;
		});
	});
	'; ?>

</script>
<?php endif; ?>

<div id="videoList" style="display:none"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/views/media/playlists.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<div id="bpe_images" style="display:none">

	<div class="dropzone"></div>
	<?php unset($this->_sections['loop1']);
$this->_sections['loop1']['loop'] = is_array($_loop=$this->_tpl_vars['imageList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop1']['name'] = 'loop1';
$this->_sections['loop1']['show'] = true;
$this->_sections['loop1']['max'] = $this->_sections['loop1']['loop'];
$this->_sections['loop1']['step'] = 1;
$this->_sections['loop1']['start'] = $this->_sections['loop1']['step'] > 0 ? 0 : $this->_sections['loop1']['loop']-1;
if ($this->_sections['loop1']['show']) {
    $this->_sections['loop1']['total'] = $this->_sections['loop1']['loop'];
    if ($this->_sections['loop1']['total'] == 0)
        $this->_sections['loop1']['show'] = false;
} else
    $this->_sections['loop1']['total'] = 0;
if ($this->_sections['loop1']['show']):

            for ($this->_sections['loop1']['index'] = $this->_sections['loop1']['start'], $this->_sections['loop1']['iteration'] = 1;
                 $this->_sections['loop1']['iteration'] <= $this->_sections['loop1']['total'];
                 $this->_sections['loop1']['index'] += $this->_sections['loop1']['step'], $this->_sections['loop1']['iteration']++):
$this->_sections['loop1']['rownum'] = $this->_sections['loop1']['iteration'];
$this->_sections['loop1']['index_prev'] = $this->_sections['loop1']['index'] - $this->_sections['loop1']['step'];
$this->_sections['loop1']['index_next'] = $this->_sections['loop1']['index'] + $this->_sections['loop1']['step'];
$this->_sections['loop1']['first']      = ($this->_sections['loop1']['iteration'] == 1);
$this->_sections['loop1']['last']       = ($this->_sections['loop1']['iteration'] == $this->_sections['loop1']['total']);
?>
			<div class="responsiveListItem contentImage" data-filename="<?php echo $this->_tpl_vars['imageList'][$this->_sections['loop1']['index']][0]; ?>
" data-images-categories="<?php echo $this->_tpl_vars['imageList'][$this->_sections['loop1']['index']][4]; ?>
" data-thumb="/images/<?php echo $this->_tpl_vars['imageList'][$this->_sections['loop1']['index']][0]; ?>
?width=220&amp;height=auto" id="<?php echo $this->_tpl_vars['imageList'][$this->_sections['loop1']['index']][3]; ?>
" title="<?php echo $this->_tpl_vars['imageList'][$this->_sections['loop1']['index']][2]; ?>
" data-path="/images/<?php echo $this->_tpl_vars['imageList'][$this->_sections['loop1']['index']][0]; ?>
">
				 <div class="responsiveListItemImage" style="background: url('/images/<?php echo $this->_tpl_vars['imageList'][$this->_sections['loop1']['index']][0]; ?>
?width=100&amp;height=100&amp;shrink=false&i=<?php echo time(); ?>
') 50% 50% no-repeat;background-size:50px 50px;"></div>
 							 	<span class="overflowEllipsis"><?php echo $this->_tpl_vars['imageList'][$this->_sections['loop1']['index']][2]; ?>
</span>
				<?php $_from = $this->_tpl_vars['imageList'][$this->_sections['loop1']['index']][5]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['grp']):
?> 
					<input type="hidden" id="imagescategory<?php echo $this->_tpl_vars['grp']; ?>
" value="<?php echo $this->_tpl_vars['grp']; ?>
"/>
				<?php endforeach; endif; unset($_from); ?>
			</div>
			<div class="dropzone"><div></div></div>
	<?php endfor; endif; ?>
	<?php if (count($this->_tpl_vars['imageList']) == 0): ?>
		<div class="noPages"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['No_Images_Added'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['totalImages'] > 50): ?>
	<div class="clear insertNewImagesBefore"></div>
	<a href="50" class="showMoreImages">Show more images</a>
	<?php endif; ?>
</div>
<div id="rightPanePages" class="rightPane">

	<div id="adminPages" class="notTicking withTitleBar"></div>


</div> <!-- end #rightPanePages -->

<div id="rightPaneImages" class="rightPane assetPane autoRename"
	data-assign-keys="assignImagesKeys"
	data-url="pageActions.php"
	data-data="pageAction=renameImage"
	data-attr-to-update="title"
>
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Images'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</strong> </h1>
	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Images']; ?>
</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	</div>
	<div id="imagesPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="imagesContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllImages"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllImages"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
			
				
				<div class="subHeaderLeftMenuItem right" id="imageSearch">
					<div class="target <?php if ($this->_tpl_vars['searchingImages']): ?>searching<?php endif; ?>">
						<svg class="searchSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
							<path d="M618.852,511.613c17.607,22.912,13.308,55.759-9.604,73.367l0,0c-22.912,17.606-55.76,13.306-73.367-9.606L375.36,366.49
					c-17.607-22.912-13.307-55.759,9.605-73.367l0,0c22.912-17.607,55.759-13.306,73.367,9.606L618.852,511.613z"/>
							<path d="M364.907,17.917C257.967-2.391,154.813,67.838,134.505,174.777s49.921,210.094,156.86,230.401
							c106.939,20.308,210.095-49.92,230.401-156.86C542.075,141.379,471.847,38.225,364.907,17.917z M425.232,229.986
							c-10.184,53.625-61.91,88.841-115.535,78.657c-53.625-10.183-88.841-61.909-78.658-115.534
							c10.184-53.624,61.911-88.841,115.535-78.658C400.199,124.635,435.416,176.362,425.232,229.986z"/>
						</svg>
					</div>
					<div class="triShadow"></div>
					<ul>
						<form action="" method="" class="filterBox">
							<div class="imageContextEditFieldset">
								<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Search'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
								<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="<?php echo $this->_tpl_vars['searchingImagesTerm']; ?>
" /></div>
							</div>
							<div class="sendMe"></div>

							<span <?php if (! $this->_tpl_vars['searchingImages']): ?>style="display:none"<?php endif; ?> class="clearSearch"></span>

							<div class="clear"><!-- --></div>
						</form>
					</ul>
					<div class="mtri"></div>
				</div>
				
				<div class="subHeaderLeftMenuItem right" <?php if (! $this->_tpl_vars['imagesCategories']): ?>style="display:none;"<?php endif; ?> id="filterByImagesCategory">
					<div class="target notTooLong">
						<?php if ($this->_tpl_vars['filterImagesCategoryId'] == ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Images_Cat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php elseif ($this->_tpl_vars['filterImagesCategoryId'] == 'none'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['No_Cats']; ?>
<?php else: ?>
						<?php $_from = $this->_tpl_vars['imagesCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['imagesCatLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['imagesCatLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['imagesCat']):
        $this->_foreach['imagesCatLoop']['iteration']++;
?>
							<?php if ($this->_tpl_vars['filterImagesCategoryId'] == $this->_tpl_vars['imagesCat']['id']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['imagesCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>
					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a href="" class="filterLink <?php if ($this->_tpl_vars['filterImagesCategoryId'] == ""): ?>bpe_current<?php endif; ?>" id="showAllImages" category-id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Images_Cat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo $this->_tpl_vars['SetSeedLangs']['All']; ?>
</span></a></li>
						<li><a href="" class="filterLink <?php if ($this->_tpl_vars['filterImagesCategoryId'] == 'none'): ?>bpe_current<?php endif; ?>" id="showImagesWithoutCat" category-id="none" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['No_Cats'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo $this->_tpl_vars['SetSeedLangs']['No_Cats']; ?>
</span></a></li>
						<li class='iconbarRule'></li>
						<div id="imagesFilterCategories" style="display:inline;">
						<?php $_from = $this->_tpl_vars['imagesCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['imagesCatLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['imagesCatLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['imagesCat']):
        $this->_foreach['imagesCatLoop']['iteration']++;
?>
						<li><a href="#" class="filterBy filterLink <?php if ($this->_tpl_vars['filterImagesCategoryId'] == $this->_tpl_vars['imagesCat']['id']): ?>bpe_current<?php endif; ?>" category-id="<?php echo $this->_tpl_vars['imagesCat']['id']; ?>
" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['imagesCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['imagesCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
						<?php endforeach; endif; unset($_from); ?>
						</div>
					</ul>
					<div class="mtri"></div>
				</div>
				
				<div id="iconbarAddImage" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Image'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>


			</div>
			<div id="imagesPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsRotate" id="iconbarRotateImages">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rotate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteImages">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Image'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				
				<div id="imagesCategoryPaneTools">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
					</div>
					<div class="subHeaderLeftMenuItem" data-test-value="data-images-categories" data-test-type="csv">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<div id="imagesCategoriesList"  <?php if (! $this->_tpl_vars['imagesCategories']): ?>style="display:none"<?php endif; ?>>
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/views/pages/imageGroups.tpl", 'smarty_include_vars' => array('categories' => $this->_tpl_vars['imagesCategories'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
							<li class='iconbarRule' <?php if (! $this->_tpl_vars['imagesCategories']): ?>style="display:none"<?php endif; ?>></li>
							<li><a id='quickAddImagesCategories'><?php echo $this->_tpl_vars['SetSeedLangs']['Quick_Add']; ?>
&hellip;</a></li>
							<li class='iconbarRule'></li>
							<li><a id='manageImagesCategories'><?php echo $this->_tpl_vars['SetSeedLangs']['Manage_Categories']; ?>
&hellip;</a></li>
							<a href="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>
						</ul>
						<div class="mtri"></div>
					</div>
				</div>
				
								
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneImages -->


<div id="rightPaneImagesCategories" class="rightPane assetPane autoRename"
	data-assign-keys="assignImagesCategoriesKeys"
	data-url="pageActions.php"
	data-data="pageAction=renameImagesCategories"
	data-attr-to-update="title"
	data-post-call="renameImagesCategoryCallback"
>

	<div id="imagesCategoriesPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="imagesCategoriesContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllImagesCategories"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllImagesCategories"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddImagesCategory" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Image_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToImagesFromCategories">

				</div>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
			</div>
			<div id="imagesCategoriesPaneInner" class="pagesScroll">
				<div class="responsiveListAddForm addImagesCategory hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Images_Category_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
				<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteImagesCategory">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Image_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneImageCategories -->

<div id="rightPaneVideos" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Videos']; ?>
</strong></h1>
	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Videos']; ?>
</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	</div>
	<div id="videosPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="videoContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">
						<li><a id="iconbarSelectAllVideos"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllVideos"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddVideo" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Video'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
			<div id="videosPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
			<div class="paneToolsButtonRow">
				<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteVideos">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
			</div>
				<div class="paneToolsPrimary changePreview" id="changeVidThumb">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Click_To_Play'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneVideos -->
<div id="rightPaneTables" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Tables']; ?>
</strong></h1>
	</div>
		<div id="tablesPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="videoContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">
						<li><a id="iconbarSelectAllVideos"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllVideos"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddTable" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Table'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
			<div id="tablesPaneInner" class="pagesScroll">
				<div class="addTableForm responsiveListAddForm hideOnReset" style="display:none">

					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Table_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" id="tableTitle" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</div>	
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteTables">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Table_Data'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
			
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Headers'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-table-header">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="tableHeadersJS">
						<li><a data-lang="<?php echo $this->_tpl_vars['SetSeedLangs']['None']; ?>
" data-item-value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a data-lang="<?php echo $this->_tpl_vars['SetSeedLangs']['Top']; ?>
" data-item-value="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Top'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>					
						<li><a data-lang="<?php echo $this->_tpl_vars['SetSeedLangs']['Left']; ?>
" data-item-value="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Left'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a data-lang="<?php echo $this->_tpl_vars['SetSeedLangs']['Both']; ?>
" data-item-value="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Both'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>					
						</div>
					</ul>
					<div class="mtri"></div>
				</div>
				
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Caption'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="" data-test-value="data-caption" data-if-disabled="-"
					data-update-url="tablesActions.php?tablesAction=changeCaption"
					data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Caption_Title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Caption_Title_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-items="#tablesPaneInner .tableItem"
					data-link-builder="false"
				></a>

				
				<?php if (! $this->_tpl_vars['DISABLE_HELP']): ?>
				<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/tables.mp4"><?php echo $this->_tpl_vars['SetSeedLangs']['QuickTour_Tables']; ?>
</div>
				<?php endif; ?>
			
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneTables -->
<div id="rightPaneGalleries" class="rightPane assetPane autoRename"
	data-assign-keys="assignGalleriesKeys"
	data-url="galleriesActions.php"
	data-data="galleriesAction=renameGallery"
	data-attr-to-update="data-name"
>
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Galleries']; ?>
</strong></h1>
	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Galleries']; ?>
</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	</div>
	<div id="galleriesPane">

		<div class="paneContents">
			<div class="cleverFilterBar">


				<div class="subHeaderLeftMenuItem">
					<div class="target" id="galleriesContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllGalleries"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllGalleries"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddGallery" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Gallery'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>

			</div>
			<div id="galleriesPaneInner" class="pagesScroll">

				<form action="/admin/galleriesActions.php" method="post" id="addGalleryForm" class="hideOnReset responsiveListAddForm" style="display:none">

					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Gallery_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

					<input type="hidden" name="galleriesAction" value="addGallery"/>
				</form>
				<div class="clearfix insertTarget"></div>
			</div>

			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteGalleries">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Gallery'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary secondaryAction" id="editGalleryImagesButton">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Gallery_Images'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				
				<div id="galleryShowFromTagPaneTools">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_Images_From_Galleries'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
					</div>
					<div class="subHeaderLeftMenuItem" data-test-value="data-images-from-categories" data-test-type="csv">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<div id="imagesCategoriesListForGals">
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/views/pages/imageGroups.tpl", 'smarty_include_vars' => array('categories' => $this->_tpl_vars['imagesCategories'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
							<a href="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>
						</ul>
						<div class="mtri"></div>
					</div>
				</div>
				
				<?php if ($this->_tpl_vars['gallery_sizes']): ?>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Styles'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-gallery-style">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="stylesMenuGalleriesJS">
						<li><a gal-style="" data-lang="<?php echo $this->_tpl_vars['SetSeedLangs']['Default']; ?>
" data-item-value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Default'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<div class="iconbarRule"></div>
						<?php $_from = $this->_tpl_vars['gallery_sizes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
							<li><a gal-style="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['style_variable_value'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['style_variable_value'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
						</div>
					</ul>
					<div class="mtri"></div>
				</div>
				<?php endif; ?>
				<?php if (! $this->_tpl_vars['DISABLE_HELP']): ?>
				<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/galleries.mp4"><?php echo $this->_tpl_vars['SetSeedLangs']['QuickTour_Galleries']; ?>
</div>
				<?php endif; ?>
			</div>

		</div>
	</div>

</div> <!-- end #rightPaneGalleries -->
<div id="rightPaneGalleryImages" class="rightPane assetPane">

	<div id="galleryImagesPane" class="withTitleBar">


		<div class="paneContents">


			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="galleryImagesContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllGalleryImages"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllGalleryImages"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddGalleryImage" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Gallery_Image'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
			<div class="topBar">

				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToGallery"></div>

				<span class="topBarTitle" id="editGalleryName"></span>
			</div>
			<div id="galleryImagesPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsRotate" id="iconbarRotateGalleryImages">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rotate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteGalleryImages">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Gallery_Image'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneGalleryImages -->
<div id="rightPaneForms" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Contact_forms']; ?>
</strong></h1>


	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Contact_forms']; ?>
</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	</div>
	<div id="formsPane">

		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="formsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllForms"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllForms"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddForm" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Form'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>

			</div>
			<div id="formsPaneInner" class="pagesScroll">


				<form action="/admin/formsActions.php" method="post" id="addFormForm" class="hideOnReset responsiveListAddForm" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Form_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="name" id="formTitle" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

					<input type="hidden" name="formsAction" value="addForm"/>
				</form>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicateForms">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Duplicate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteForms">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Form_Fields'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary secondaryAction renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Form'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary secondaryAction exportFormSubmissions" id="exportFormSubmissions">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Form_Export'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>


				<div class="stylesHeading" id="recipientTooltip">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Recipient'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a id="iconbarFormDestination" title="" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="data-destination"></a>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['AutoResponder'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a id="iconbarFormAutoresponder" title="" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="data-autoresponder-title"></a>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Redirect_On_Send'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a id="iconbarFormRedirectOnSend" title="" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="data-redirect-on-send"></a>
				<?php if (count($this->_tpl_vars['allprivs']) > 3): ?> 					<?php if ($this->_tpl_vars['DISABLE_MAILING_LIST'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['6'] == 1 || $this->_tpl_vars['allprivs']['7'] == 1): ?><?php $this->assign('mailingListOk', true); ?><?php endif; ?><?php endif; ?>
				<?php else: ?>
					<?php if ($this->_tpl_vars['allprivs']['1'] == 1 || $this->_tpl_vars['master']): ?>
					<?php if ($this->_tpl_vars['DISABLE_MAILING_LIST'] == 0): ?><?php $this->assign('mailingListOk', true); ?><?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['mailingListOk']): ?>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_To_Newsletter'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-newsletter-id">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul id="changeFormNewsletterGroup">
						<li><a href="#" data-item-value="0" data-lang="<?php echo $this->_tpl_vars['SetSeedLangs']['None']; ?>
" data-id="0"><?php echo $this->_tpl_vars['SetSeedLangs']['None']; ?>
</a></li>
						<li class='iconbarRule'></li>
						
						<?php $_from = $this->_tpl_vars['emailGroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
							<li><a href="#" data-item-value="<?php echo $this->_tpl_vars['group']['id']; ?>
" data-lang="<?php echo $this->_tpl_vars['group']['name']; ?>
" data-id="<?php echo $this->_tpl_vars['group']['id']; ?>
"><?php echo $this->_tpl_vars['group']['name']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
					<div class="mtri"></div>
				</div>
				<?php endif; ?>


			</div>
		</div>
	</div>

</div> <!-- end #rightPaneForms -->

<div id="rightPaneFormInputs" class="rightPane assetPane">

	<div id="formInputsPane" class="withTitleBar">
		<div class="paneContents ">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="formInputContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllFormInputs"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllFormInputs"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddFormInput" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Form_Input'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
			<div class="topBar">
					<div class="returnToLP"></div>
					<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>

				<div class="topBarButtonBack" id="backToForm">

				</div>

				<span class="topBarTitle" id="editFormName"></span>
			</div>
			<div id="formInputsPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicateFormInputs">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Duplicate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteFormInputs">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary onlyWithOptions">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Field_Options'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary secondaryAction renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Field'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Kind'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>

				<div class="subHeaderLeftMenuItem" data-test-value="data-input-type">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul id="listOfInputTypes">
						<li><a id="changeFieldTypeName" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="name"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="changeFieldTypeEmail" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="email"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="changeFieldTypePhone" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Phone'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="phone"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Phone'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="changeFieldTypeDate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Date'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="date"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Date'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>

						<li class='iconbarRule'></li>
						<li><a id="changeFieldTypeShort" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Short'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="short"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Short'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>

						<li><a id="changeFieldTypeLong" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Long'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="long"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Long'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li class='iconbarRule'></li>
						<li><a id="changeFieldTypeCheckbox" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Checkbox'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="checkbox"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Checkbox'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="changeFieldTypeRadiogroup" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Radio'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="radiogroup"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Radio'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="changeFieldTypeSelect" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Dropdown'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="select"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Dropdown'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li class='iconbarRule'></li>

						<li><a id="changeFieldTypeHeading" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="heading"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Heading'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="changeFieldTypeText" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="text"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<?php if ($this->_tpl_vars['inputWidthSupport']): ?>
						<li><a id="changeFieldTypeNewRow" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_New_Row'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="clear"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_New_Row'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<?php endif; ?>
						<li><a id="changeFieldTypeHR" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_HR'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="hr"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_HR'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>												


						<li class='iconbarRule'></li>

						<li><a id="changeFieldTypeFile" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_File'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="file"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Field_Type_File'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
				
				<?php if ($this->_tpl_vars['inputWidthSupport']): ?>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Input_Width'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>

				<div class="subHeaderLeftMenuItem" data-test-value="data-input-width">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul id='changeInputWidth'>
						<li><a data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Default'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="0"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Default'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						
						<li class='iconbarRule'></li>
						
						<li><a data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['twentyfivepc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="25"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['twentyfivepc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['fiftypc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="50"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['fiftypc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['seventyfivepc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="75"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['seventyfivepc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['onehundredpc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="100"><span class='key hideIfTouch'></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['onehundredpc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				
				<?php endif; ?>
				<a id="changeInputRequired" class="paneToolToggleItem" data-test-value="data-input-required" data-test-value-checked="yes"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Required'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneFormInputs -->

<div id="rightPaneFormInputOptions" class="rightPane assetPane">

	<div id="formInputOptionsPane" class="withTitleBar">
		<div class="paneContents ">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="formInputOptionsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllFormInputOptions"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllFormInputOptions"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddFormInputOption" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Form_Input_Option'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
			<div class="topBar">
						<div class="returnToLP"></div>
						<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>

				<div class="topBarButtonBack" id="backToInputs">

				</div>

				<div class="topBarTitle" id="editInputName"></div>
			</div>
			<div id="formInputOptionsPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteFormInputOptions">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Field_Option'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

			</div>
		</div>

	</div>

</div> <!-- end #rightPaneFormInputOptions -->

<div id="rightPaneProducts" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</strong></h1>


	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Products']; ?>
</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	</div>
	<div id="productsPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="productsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllProducts"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllProducts"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem right">
					<div class="target">
						<svg class="searchSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
							<path d="M618.852,511.613c17.607,22.912,13.308,55.759-9.604,73.367l0,0c-22.912,17.606-55.76,13.306-73.367-9.606L375.36,366.49
					c-17.607-22.912-13.307-55.759,9.605-73.367l0,0c22.912-17.607,55.759-13.306,73.367,9.606L618.852,511.613z"/>
							<path d="M364.907,17.917C257.967-2.391,154.813,67.838,134.505,174.777s49.921,210.094,156.86,230.401
							c106.939,20.308,210.095-49.92,230.401-156.86C542.075,141.379,471.847,38.225,364.907,17.917z M425.232,229.986
							c-10.184,53.625-61.91,88.841-115.535,78.657c-53.625-10.183-88.841-61.909-78.658-115.534
							c10.184-53.624,61.911-88.841,115.535-78.658C400.199,124.635,435.416,176.362,425.232,229.986z"/>
						</svg>
					</div>
					<div class="triShadow"></div>
					<ul>
						<form action="" method="" class="filterBox">
							<div class="imageContextEditFieldset">
								<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Search'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
								<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="" /></div>
							</div>
							<div class="sendMe"></div>

							<span style="display:none" class="clearSearch"></span>

							<div class="clear"><!-- --></div>
						</form>
					</ul>
					<div class="mtri"></div>
				</div>

				<div class="subHeaderLeftMenuItem right" <?php if (! $this->_tpl_vars['productCategories']): ?>style="display:none;"<?php endif; ?> id="filterByProdCat">
					<div class="target notTooLong">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Prod_Cat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a href="" class="filterLink bpe_current" id="showAllProducts" category-id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Prod_Cat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo $this->_tpl_vars['SetSeedLangs']['All']; ?>
</span></a></li>
						<div id="productFilterCategories" style="display:inline;">
						<?php $_from = $this->_tpl_vars['productCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['prodCatLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['prodCatLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['prodCat']):
        $this->_foreach['prodCatLoop']['iteration']++;
?>
						<li><a href="#" class="filterBy filterLink" category-id="<?php echo $this->_tpl_vars['prodCat']['id']; ?>
" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['prodCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['prodCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
						<?php endforeach; endif; unset($_from); ?>
						</div>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem right">
					<div class="target">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sort'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a href="#" id="sortProductsByCreated" class="<?php if ($this->_tpl_vars['productSortBy'] == 'productsid' || $this->_tpl_vars['productSortBy'] == ""): ?>bpe_current<?php endif; ?> productSortOption"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sort_Date_Created'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a href="#" id="sortProductsByName" class="<?php if ($this->_tpl_vars['productSortBy'] == 'name'): ?>bpe_current<?php endif; ?> productSortOption"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sort_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a href="#" id="sortProductsByPrice" class="<?php if ($this->_tpl_vars['productSortBy'] == 'price'): ?>bpe_current<?php endif; ?> productSortOption"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sort_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a href="#" id="sortProductsByStock" class="<?php if ($this->_tpl_vars['productSortBy'] == 'in_stock'): ?>bpe_current<?php endif; ?> productSortOption"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sort_Stock'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<div class="bpe_rule"></div>
						<li><a href="#" id="sortProductsReverse" class="<?php if ($this->_tpl_vars['productSortReverse']): ?>bpe_current<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sort_Reverse'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>

				<div id="iconbarAddProduct" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Product'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>

			<div id="productsPaneInner" class="pagesScroll">


				<form action="/admin/shopActions.php" method="post" id="addProductForm" class="hideOnReset responsiveListAddForm" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="product_name" id="formTitle" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>


				</form>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
				<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicateProducts">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Duplicate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteProducts">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary onlyWithOptions">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Product_Choices'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary secondaryAction renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Product'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Type'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-product-type">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="changeProductTypeSimple" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Simple'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="simple" data-item-value-2="simple_multi"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Simple'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="changeProductTypeGallery" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Gallery'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="gallery" data-item-value-2="gallery_multi" class="showSubMenu"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Gallery'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</a>
							<ul id="chooseGalleriesList" data-test-value="data-gal-id">

							</ul>
						</li>
						<li><a id="changeProductTypeForm" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Form'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="form" data-item-value-2="form_multi" class="showSubMenu"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Form'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</a>
						<ul id="chooseFormsList"  data-test-value="data-form-id"></ul>
						</li>
						<li><a id="changeProductTypeDonation" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Donation'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="donation"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Donation'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="changeProductTypeDigital" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Digital_Delivery'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="digital"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Digital_Delivery'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li class='iconbarRule'></li>
						<li><a id="changeProductTypeMulti" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Choices'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="simple_multi" data-item-value-2="gallery_multi" data-item-value-3="form_multi"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Choices'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>


					</ul>
					<div class="mtri"></div>
				</div>
				<div class="paneToolsPrimary buttonToolToUpdate secondaryAction noIcon onlyWithoutOptions" id="iconbarProductSerialNumbers" data-valid-attr-test="data-product-type" data-valid-test-values="digital">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Serial_Numbers'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary buttonToolToUpdate secondaryAction noIcon onlyWithoutOptions" id="iconbarProductUploadFile" data-valid-attr-test="data-product-type" data-valid-test-values="digital">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Upload_File'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-product-cats" data-test-type="csv">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="productCategoriesList" <?php if (! $this->_tpl_vars['productCategories']): ?>style="display:none"<?php endif; ?>>
							<?php $_from = $this->_tpl_vars['productCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['prodCatLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['prodCatLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['prodCat']):
        $this->_foreach['prodCatLoop']['iteration']++;
?>
							<li><a href="#" product-cat-id="<?php echo $this->_tpl_vars['prodCat']['id']; ?>
" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['prodCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="<?php echo $this->_tpl_vars['prodCat']['id']; ?>
" product-parent-id="<?php echo $this->_tpl_vars['prodCat']['parent_id']; ?>
" class="indent<?php echo $this->_tpl_vars['prodCat']['level']; ?>
 bpe_selection_tool greyedOut"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['prodCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
							<?php endforeach; endif; unset($_from); ?>
						</div>
						<li class='iconbarRule' <?php if (! $this->_tpl_vars['productCategories']): ?>style="display:none"<?php endif; ?>></li>
						<li><a id="manageProductCategories"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Manage_Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</a></li>
						<a href="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>

					</ul>
					<div class="mtri"></div>
				</div>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 <strong id="hasVolumeDiscounts">(1+)</strong></h2>
				</div>
				<a id="iconbarProductPrice" title="<?php echo $this->_tpl_vars['SetSeedLangs']['Keyboard_Shortcut']; ?>
: <?php echo $this->_tpl_vars['SetSeedLangs']['P']; ?>
" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="product-price" data-if-disabled="-" data-valid-attr-test="data-product-type" data-valid-test-values="simple,gallery,form,donation,digital"></a>
				<div class="" id="productVolumeDiscount1Wrap">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 <strong>(<span id="productVolumeDiscount1ThresholdVal"></span>+)</strong></h2>
					</div>
					<a id="productVolumeDiscount1" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-discount-1-price" data-if-disabled="-" data-valid-attr-test="data-product-type" data-valid-test-values="simple,gallery,form,donation"></a>

				</div>
				<div class="" id="productVolumeDiscount2Wrap">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 <strong>(<span id="productVolumeDiscount2ThresholdVal"></span>+)</strong></h2>
					</div>
					<a id="productVolumeDiscount2" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-discount-2-price" data-if-disabled="-" data-valid-attr-test="data-product-type" data-valid-test-values="simple,gallery,form,donation"></a>

				</div>
				<div class="paneToolsPrimary secondaryAction noIcon onlyWithoutOptions" id="addVolumeDiscount">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Quantity_Discount'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary secondaryAction noIcon onlyWithoutOptions" id="addVolumeDiscount2">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Quantity_Discount'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

					
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Shipping_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 <strong id="hasShippingVolumeDiscounts">(1+)</strong></h2>
				</div>
				<a id="iconbarProductShippingPrice" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="product-shipping-price" data-if-disabled="-" data-valid-attr-test="data-product-type" data-valid-test-values="simple,simple_multi,gallery,gallery_multi,form,form_multi"></a>
				<div class="" id="productShippingVolumeDiscount1Wrap">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Shipping_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 <strong>(<span id="productShippingVolumeDiscount1ThresholdVal"></span>+)</strong></h2>
					</div>
					<a id="productShippingVolumeDiscount1" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-shipping-discount-1-price" data-if-disabled="-" data-valid-attr-test="data-product-type" data-valid-test-values="simple,simple_multi,gallery,gallery_multi,form,form_multi"></a>

				</div>
				<div class="" id="productShippingVolumeDiscount2Wrap">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Shipping_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 <strong>(<span id="productShippingVolumeDiscount2ThresholdVal"></span>+)</strong></h2>
					</div>
					<a id="productShippingVolumeDiscount2" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-shipping-discount-2-price" data-if-disabled="-" data-valid-attr-test="data-product-type" data-valid-test-values="simple,simple_multi,gallery,gallery_multi,form,form_multi"></a>

				</div>
				<div class="paneToolsPrimary secondaryAction noIcon" id="addShippingVolumeDiscount">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Quantity_Discount'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary secondaryAction noIcon" id="addShippingVolumeDiscount2">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Quantity_Discount'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>



				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Weight'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a id="productChangeWeight" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="product-weight" data-valid-attr-test="data-product-type" data-valid-test-values="simple,gallery,form"></a>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Number_Stock'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a id="productChangeStock" title="<?php echo $this->_tpl_vars['SetSeedLangs']['Keyboard_Shortcut']; ?>
: <?php echo $this->_tpl_vars['SetSeedLangs']['S']; ?>
" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="product-stock" data-if-disabled="-" data-valid-attr-test="options-separate-stock" data-valid-test-values="no"></a>
				
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SKU'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a id="productChangeSKU" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="" data-test-value="product-sku" data-if-disabled="-" data-valid-attr-test="data-product-type" data-valid-test-values="simple,gallery,form,digital"></a>
				
				
				
				<a id="productChangeSeparateOptionsStock" class="paneToolToggleItem" data-test-value="options-separate-stock" data-test-value-checked="yes" data-valid-attr-test="data-product-type" data-valid-test-values="simple_multi,gallery_multi,form_multi"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Separate_Stock_For_Options'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				<a id="productChangeOnlyOne" class="paneToolToggleItem" data-test-value="only-one" data-test-value-checked="yes"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Only_One'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				<a id="productChangeSellIfInStock" class="paneToolToggleItem" data-test-value="product-sell-only-if-stock" data-test-value-checked="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sell_If_In_Stock'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				
				
				<a class="paneToolToggleItem autoPaneToolToggleItem" data-test-value="data-low-stock-alerts" data-test-value-checked="1"
				data-update-url="shopActions.php?shopAction=changeLowStockAlert"
				data-items="#productsPaneInner .productItemMain"
				><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Notify_Low_Stock'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				
				
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Low_Stock_Threshold'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="0" data-test-value="data-product-low-threshold" data-if-disabled="-"
					data-update-url="shopActions.php?shopAction=changeLowStockThreshold"
					data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Low_Stock_Threshold'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Low_Stock_Threshold_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-items="#productsPaneInner .productItemMain"
					data-link-builder="false"
					data-valid-attr-test="data-low-stock-alerts" 
					data-valid-test-values="1"
				></a>
				
				<a class="paneToolToggleItem autoPaneToolToggleItem" data-test-value="data-tax-exempt" data-test-value-checked="1"
				data-update-url="shopActions.php?shopAction=changeTaxExempt"
				data-items="#productsPaneInner .productItemMain"
				><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Tax_Exempt'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneProducts -->

<div id="rightPaneProductOptions" class="rightPane assetPane">

	<div id="productOptionsPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="productOptionsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllProductOptions"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllProductOptions"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddProductOption" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Product_Option'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToProducts">

				</div>
				<span class="topBarTitle" id="editProductName"></span>
			</div>
			<div id="productOptionsPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteProductOptions">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Product_Choice'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 <strong id="hasVolumeDiscountsOptions">(1+)</strong></h2>
				</div>
				<a id="iconbarProductOptionPrice" title="<?php echo $this->_tpl_vars['SetSeedLangs']['Keyboard_Shortcut']; ?>
: <?php echo $this->_tpl_vars['SetSeedLangs']['P']; ?>
" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-option-price" data-if-disabled="-"></a>
				<div class="" id="productOptionsVolumeDiscount1Wrap">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 <strong>(<span id="productOptionsVolumeDiscount1ThresholdVal"></span>+)</strong></h2>
					</div>
					<a id="productOptionsVolumeDiscount1" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-discount-1-price" data-if-disabled="-"></a>

				</div>
				<div class="" id="productOptionsVolumeDiscount2Wrap">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 <strong>(<span id="productVolumeDiscount2ThresholdVal"></span>+)</strong></h2>
					</div>
					<a id="productOptionsVolumeDiscount2" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-discount-2-price" data-if-disabled="-"></a>

				</div>
				<div class="paneToolsPrimary secondaryAction noIcon" id="addVolumeDiscountOptions">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Quantity_Discount'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary secondaryAction noIcon" id="addVolumeDiscount2Options">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Quantity_Discount'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Number_Stock'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a id="productOptionChangeStock" title="<?php echo $this->_tpl_vars['SetSeedLangs']['Keyboard_Shortcut']; ?>
: <?php echo $this->_tpl_vars['SetSeedLangs']['S']; ?>
" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="product-option-stock" data-if-disabled="-" data-valid-attr-test="data-option-has-stock" data-valid-test-values="yes"></a>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SKU'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a id="productOptionChangeSKU" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="" data-test-value="product-option-sku" data-if-disabled="-"></a>
				
				
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneProductOptions -->


<div id="rightPaneProductCategories" class="rightPane assetPane">

	<div id="productCategoriesPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="productCategoriesContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllProductCategories"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllProductCategories"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddProductCategory" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Product_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToProductsFromCategories">

				</div>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
			</div>
			<div id="productCategoriesPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
			<div class="paneToolsButtonRow">
				<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteProductCategories">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
			</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Product_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneProductCategories -->



<div id="rightPaneBookingProducts" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</strong></h1>


	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Booking_Products']; ?>
</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	</div>
	<div id="bookingProductsPane" data-ajax-update-path="/admin/shopActions.php?shopAction=updateBookingProduct">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="productsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllProducts"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllProducts"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
								<div id="iconbarAddBookingProduct" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Booking_Product'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>

			<div id="bookingProductsPaneInner" class="pagesScroll">


				<form action="/admin/shopActions.php" method="post" id="addBookingProductForm" class="hideOnReset responsiveListAddForm" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Product_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="booking_product_name" id="formTitle" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</form>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools" id="pane-tools-booking-products">
				<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicateBookingProducts">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Duplicate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteBookingProducts">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Availability'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary secondaryAction renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Product'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Type'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem item-tool-properties item-tool-properties-menu" data-test-data="item-type">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Type_Object'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="0"  data-dependents="booking-prod-type-1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Type_Object'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Type_Seats'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="1" data-dependents="booking-prod-type-2" ><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Type_Seats'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Type_Places'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="2" data-dependents="booking-prod-type-3" ><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Type_Places'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<p class="multiple-types-selected">
					<?php echo $this->_tpl_vars['SetSeedLangs']['Multi_Types_Selected']; ?>

				</p>
				<div class="toolset-with-dependency booking-prod-type-1">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Available'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
					</div>
					<a id="" class="paneToolTextItem item-tool-properties item-tool-properties-text" data-test-data="spaces-available" data-text-edit-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Available_Objects_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"></a>
				</div>
				<div class="toolset-with-dependency booking-prod-type-2">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Available'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
					</div>
					<a id="" class="paneToolTextItem item-tool-properties item-tool-properties-text" data-test-data="spaces-available" data-text-edit-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Available'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-text-edit-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Available_Seats_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"></a>
				</div>
				<div class="toolset-with-dependency booking-prod-type-3">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Place_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
					</div>
					<div class="subHeaderLeftMenuItem item-tool-properties item-tool-properties-menu" data-replace-label-string-plural="booking-prod-places-custom-string" data-replace-label-string="booking-prod-min-charge-custom-string,booking-prod-spaces-per-place-custom-string,booking-prod-adult-required-custom-string"  data-test-data="place-name">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Area'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Areas'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Area'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Building'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Buildings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Building'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Caravan'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Caravans'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Caravan'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Chalet'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Chalets'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Chalet'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Cottage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Cottages'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Cottage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Double_Bed'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Double_Beds'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Double_Bed'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Flat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Flats'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="7"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Flat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Floor'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Floors'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="8"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Floor'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Group'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Groups'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="9"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Group'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_House'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Houses'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_House'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Hut'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Huts'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
								 data-test-data-value="11"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Hut'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Office'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Offices'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="12"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Office'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Party'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Parties'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="13"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Party'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Pitch'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Pitches'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="14"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Pitch'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Place'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Places'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="0" class="default-lang-item"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Place'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Tent'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Tents'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="15"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Tent'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Unit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Units'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="16"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Unit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Vehicle'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Vehicles'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="17"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Vehicle'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Yurt'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Yurts'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="18"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Yurt'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Room'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Rooms'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="19"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Room'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Table'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang-plural="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Tables'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data-value="20"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Name_Table'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>

						</ul>
						<div class="mtri"></div>
					</div>

					<div class="stylesHeading">
						<h2 class="booking-prod-places-custom-string" data-original-string="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Places_Available'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Places_Available'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
					</div>
					<a id="" class="paneToolTextItem item-tool-properties item-tool-properties-text" data-test-data="places-available"></a>

					<div class="stylesHeading">
						<h2 class="booking-prod-spaces-per-place-custom-string" data-original-string="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Spaces_Per_Place_Available'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Booking_Prod_Spaces_Per_Place_Available'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
					</div>
					<a id="" class="paneToolTextItem item-tool-properties item-tool-properties-text" data-test-data="spaces-available"></a>
				</div>
				<div class="toolset-with-dependency booking-prod-type-3 booking-prod-type-2">
					<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox" data-test-data="special-separate"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Concessions_Separate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>

					<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox" data-test-data="children-separate" data-dependents="booking-prod-adult-required" ><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Children_Separate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>

				</div>
				<div class="toolset-with-dependency booking-prod-adult-required">
					<div class="toolset-with-dependency booking-prod-type-3">
						<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox booking-prod-adult-required-custom-string" data-original-string="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adult_Required_Per_Place'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data="adult-required"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adult_Required_Per_Place'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
					</div>
					<div class="toolset-with-dependency booking-prod-type-2">
						<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox" data-test-data="adult-required"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adult_Required'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>

					</div>
				</div>

				<div class="toolset-with-dependency booking-prod-type-3">

				<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox booking-prod-min-charge-custom-string" data-original-string="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Min_Charge_Per_Place'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-data="min-charge-per-space" ><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Min_Charge_Per_Place'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				
				<div class="toolset-with-dependency booking-prod-type-3 booking-prod-type-2">

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Child_Custom_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" 
					data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Child'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" 
					data-test-value="data-custom-child" data-if-disabled="-"
					data-update-url="shopActions.php?shopAction=editCustomChild"
					data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Child_Custom_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Child_Custom_Name_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-items="#bookingProductsPaneInner .bookingProductItemMain"
					data-link-builder="false"
					data-valid-attr-test="data-children-separate" data-valid-test-values="1"
				></a>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Child_Custom_Name_Plural'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" 
					data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Children'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" 
					data-test-value="data-custom-children" data-if-disabled="-"
					data-update-url="shopActions.php?shopAction=editCustomChildPlural"
					data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Child_Custom_Name_Plural'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Child_Custom_Name_Plural_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-items="#bookingProductsPaneInner .bookingProductItemMain"
					data-link-builder="false"
					data-valid-attr-test="data-children-separate" data-valid-test-values="1"
				></a>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adult_Custom_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" 
					data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adult'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" 
					data-test-value="data-custom-adult" data-if-disabled="-"
					data-update-url="shopActions.php?shopAction=editCustomAdult"
					data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adult_Custom_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adult_Custom_Name_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-items="#bookingProductsPaneInner .bookingProductItemMain"
					data-link-builder="false"

				></a>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adult_Custom_Name_Plural'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" 
					data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adults'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" 
					data-test-value="data-custom-adults" data-if-disabled="-"
					data-update-url="shopActions.php?shopAction=editCustomAdultPlural"
					data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adult_Custom_Name_Plural'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Adult_Custom_Name_Plural_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-items="#bookingProductsPaneInner .bookingProductItemMain"
					data-link-builder="false"

				></a>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Concession_Custom_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" 
					data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Concession'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" 
					data-test-value="data-custom-concession" data-if-disabled="-"
					data-update-url="shopActions.php?shopAction=editCustomConcession"
					data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Concession_Custom_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Concession_Custom_Name_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-items="#bookingProductsPaneInner .bookingProductItemMain"
					data-link-builder="false"
					data-valid-attr-test="data-special-separate" data-valid-test-values="1"
				></a>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Concession_Custom_Name_Plural'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" 
					data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Concessions'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" 
					data-test-value="data-custom-concessions" data-if-disabled="-"
					data-update-url="shopActions.php?shopAction=editCustomConcessionPlural"
					data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Concession_Custom_Name_Plural'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Concession_Custom_Name_Plural_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-items="#bookingProductsPaneInner .bookingProductItemMain"
					data-link-builder="false"
					data-valid-attr-test="data-special-separate" data-valid-test-values="1"
				></a>
				
				
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Require_Form_Per_Person'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem item-tool-properties-menu item-tool-properties" data-test-data="require-form-person">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul id="changeChooseFormBookingPerson">
						<li><a form-id='0' data-test-data-value='0' data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class='overflowEllipsis'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
						<div id="chooseFormsBookingProductPerson"></div>
					</ul>
					<div class="mtri"></div>
				</div>
				
				</div>
				
				
				
				
								<?php if (! $this->_tpl_vars['DISABLE_HELP']): ?>
				<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/booking.mp4"><?php echo $this->_tpl_vars['SetSeedLangs']['QuickTour_Bookings']; ?>
</div>
				<?php endif; ?>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneBooking -->

<div id="rightPaneCalendars" class="rightPane assetPane">

	<div id="calendarsPane">
		<div class="assetPaneHeader">
			<div class="closeDragInsert"></div>
			<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
			<div class="returnToLP"></div>
			<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Calendars'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</strong></h1>



		</div>
		<div class="dragInsertTabs clearfix">
			<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			<div class="dragInsertTabStorage dragInsertTab current">
				<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Calendars']; ?>
</span></span></span>
			</div>
			<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		</div>
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="calendarsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllCalendars"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllCalendars"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddCalendar" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Calendar'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
			<div id="calendarsPaneInner" class="pagesScroll">


					<form action="" method="post" id="addCalendarForm" class="responsiveListAddForm withFakeFormItem" style="display:none">

						<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Calendar_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="calendar_name" id="calendarTitle" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>
					</form>
				<div class="clearfix insertTarget"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/views/calendar/categories.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
			<div class="paneToolsButtonRow">

				<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteCalendars">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
			</div>
				<div class="paneToolsPrimary">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Calendar_Events'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneCalendars -->

<div id="rightPaneCalendarEvents" class="rightPane assetPane">

	<div id="calendarEventsPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="calendarEventsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">
						<li><a id="eventsCut" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['X'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Cut'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
						<li><a id="eventsCopy" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['C'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Copy'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="eventsPaste" class="greyedOut"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['V'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Paste'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>

						<li class='iconbarRule'></li>

						<li><a id="iconbarSelectAllCalendarEvents"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllCalendarEvents"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddCalendarEvent" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Event'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
				<div class="subHeaderLeftMenuItem">
					<div class="target" id="calendarEventsDateFilterButton"></div>
					<div class="triShadow"></div>
					<ul class="dateFilterCalendar" id="calendarEventsDateFilter">
					</ul>
					<div class="mtri"></div>
				</div>
				
				<div class="subHeaderButton" id="iconbarImportEvents">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Import'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="subHeaderButton" id="iconbarExportEvents">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Export'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				
				
			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToCalendars"></div>
				<span class="topBarTitle" id="editCalendarName"></span>
			</div>
			<div id="calendarEventsPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
			<div class="paneToolsButtonRow">
				<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteCalendarEvents">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
			</div>
				<div class="paneToolsPrimary">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Event'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

				<div id="eventsGroupsPaneTools">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
					</div>
					<div class="subHeaderLeftMenuItem" data-test-value="data-events-groups" data-test-type="csv">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<div id="eventsGroupsList" style="display:none">
							</div>
							<li class='iconbarRule' <?php if (! $this->_tpl_vars['eventsGroups']): ?>style="display:none"<?php endif; ?>></li>
							<li><a id='manageEventsGroups'><?php echo $this->_tpl_vars['SetSeedLangs']['Manage_Categories']; ?>
&hellip;</a></li>
							<a href="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>
						</ul>
						<div class="mtri"></div>
					</div>
				</div>
				
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Link'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="data-event-link" data-if-disabled="-"
					data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=link"
					data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Link_Title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Link_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-items="#calendarEventsPaneInner .eventItem"
					data-link-builder="true"
				></a>
				
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Summary'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="event-summary" data-if-disabled="-"
				data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=summary"
				data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Summary_Title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
				data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Summary_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
				data-items="#calendarEventsPaneInner .eventItem"
				></a>
				
				
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Location'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="event-location" data-if-disabled="-"
					data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=location"
					data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Location_Title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Location_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					data-items="#calendarEventsPaneInner .eventItem"
				></a>
				
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Time'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="event-time" data-if-disabled="-"
				data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=time"
				data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Time_Title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
				data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Time_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
				data-items="#calendarEventsPaneInner .eventItem"
				></a>
				
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Duration'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="event-duration" data-if-disabled="-"
				data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=duration"
				data-dialogue-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Duration_Title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
				data-dialogue-info="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Duration_Info'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
				data-items="#calendarEventsPaneInner .eventItem"
				></a>
				
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Upload_Image'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateImage" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="event-image" data-if-disabled="-"
				data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=image"
				data-items="#calendarEventsPaneInner .eventItem"
				></a>
				
				<div id="eventsCustomFields">
				</div>
				<div class="paneToolsPrimary noIcon secondaryAction" id="addEventCustomField">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Custom_Field'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				
			</div>
		</div>
	</div>


</div> <!-- end #rightPaneCalendarEvents -->


<div id="rightPaneEventsGroups" class="rightPane assetPane">

	<div id="eventsGroupsPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="eventsGroupsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllEventsGroups"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllEventsGroups"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddEventsGroup" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Events_Group'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>

				<div class="topBarButtonBack" id="backToEventsFromCategories">

				</div>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
			</div>
			<div id="eventsGroupsPaneInner" class="pagesScroll">
				<div class="responsiveListAddForm addEventGroup hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Event_Group_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteEventsGroups">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Events_Group'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneEventsGroups -->


<div id="rightPaneSnippets" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="normalSnippetText"><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Snippets']; ?>
</strong></span><span class="pinnedSnippetText"><strong id="pinnedSnippetCatTitle"></strong></span></h1>

	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Snippets']; ?>
</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	</div>
	<div id="snippetsPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="snippetsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllSnippets"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllSnippets"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem right">
					<div class="target">
						<svg class="searchSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
							<path d="M618.852,511.613c17.607,22.912,13.308,55.759-9.604,73.367l0,0c-22.912,17.606-55.76,13.306-73.367-9.606L375.36,366.49
					c-17.607-22.912-13.307-55.759,9.605-73.367l0,0c22.912-17.607,55.759-13.306,73.367,9.606L618.852,511.613z"/>
							<path d="M364.907,17.917C257.967-2.391,154.813,67.838,134.505,174.777s49.921,210.094,156.86,230.401
							c106.939,20.308,210.095-49.92,230.401-156.86C542.075,141.379,471.847,38.225,364.907,17.917z M425.232,229.986
							c-10.184,53.625-61.91,88.841-115.535,78.657c-53.625-10.183-88.841-61.909-78.658-115.534
							c10.184-53.624,61.911-88.841,115.535-78.658C400.199,124.635,435.416,176.362,425.232,229.986z"/>
						</svg>
					</div>
					<div class="triShadow"></div>
					<ul>
						<form action="" method="" class="filterBox">
							<div class="imageContextEditFieldset">
								<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Search'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
								<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="" /></div>
							</div>
							<div class="sendMe"></div>

							<span style="display:none" class="clearSearch"></span>

							<?php if ($this->_tpl_vars['filter']): ?><input type="hidden" name="filter" value="<?php echo $this->_tpl_vars['filter']; ?>
" id="filter"/><?php endif; ?>
							<div class="clear"><!-- --></div>
						</form>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem right" <?php if (! $this->_tpl_vars['snippetCategories']): ?>style="display:none;"<?php endif; ?> id="filterBySnippetCat">
					<div class="target notTooLong">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Snippet_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a href="" class="filterLink bpe_current" id="showAllSnippets" category-id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Snippet_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo $this->_tpl_vars['SetSeedLangs']['All']; ?>
</span></a></li>
						<div id="snippetFilterCategories" style="display:inline;">
						<?php $_from = $this->_tpl_vars['snippetCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['prodCatLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['prodCatLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['snippetCat']):
        $this->_foreach['prodCatLoop']['iteration']++;
?>
						<li><a href="#" class="filterBy filterLink" category-id="<?php echo $this->_tpl_vars['snippetCat']['id']; ?>
" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['snippetCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['snippetCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
						<?php endforeach; endif; unset($_from); ?>
						</div>
					</ul>
					<div class="mtri"></div>
				</div>

				<div id="iconbarAddSnippet" class="subHeaderButton primaryItem"><span class="normalSnippetText"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Snippet'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><span class="pinnedSnippetText"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_New'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>

			</div>
			<div id="snippetsPaneInner" class="pagesScroll">

				<div class="addSnippetForm responsiveListAddForm hideOnReset" style="display:none">

					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Snippet_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" id="snippetTitle" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicateSnippets">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Duplicate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteSnippets">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary">
					<span class="normalSnippetText"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Snippet_Content'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					<span class="pinnedSnippetText"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Content_Generic'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
				</div>

				<div id="snippetCategoryPaneTools">
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-snippet-categories" data-test-type="csv">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="snippetCategoriesList" <?php if (! $this->_tpl_vars['snippetCategories']): ?>style="display:none"<?php endif; ?>>
							<?php $_from = $this->_tpl_vars['snippetCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['snipCatLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['snipCatLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['snipCat']):
        $this->_foreach['snipCatLoop']['iteration']++;
?>
							<li><a href="#" snippet-cat-id="<?php echo $this->_tpl_vars['snipCat']['id']; ?>
" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['snipCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="<?php echo $this->_tpl_vars['snipCat']['id']; ?>
" class="bpe_selection_tool greyedOut" data-pinned="<?php echo $this->_tpl_vars['snipCat']['pinned']; ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['snipCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
							<?php endforeach; endif; unset($_from); ?>
						</div>
						<li class='iconbarRule' <?php if (! $this->_tpl_vars['snippetCategories']): ?>style="display:none"<?php endif; ?>></li>
						<li><a id='manageSnippetCategories'><?php echo $this->_tpl_vars['SetSeedLangs']['Manage_Categories']; ?>
&hellip;</a></li>
						<a href="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>
					</ul>
					<div class="mtri"></div>
				</div>
				</div>
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneSnippets -->
<div id="rightPaneSnippetCategories" class="rightPane assetPane">

	<div id="snippetCategoriesPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="snippetCategoriesContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllSnippetCategories"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllSnippetCategories"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddSnippetCategory" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Snippet_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>

				<div class="topBarButtonBack" id="backToSnippetsFromCategories">

				</div>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
			</div>
			<div id="snippetCategoriesPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteSnippetCategories">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Snippet_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>


				<a id="pinSnippetCat" class="paneToolToggleItem" data-test-value="data-pinned" data-test-value-checked="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Welcome_Screen_Shortcut'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneSnippetCategories -->



<div id="rightPaneFiles" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Files']; ?>
</strong></h1>


	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Files'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Galleries']; ?>
</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	</div>
	<div id="filesPane">
		<div class="paneContents">
			<div id="filesPaneInner">

			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteFiles">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneFiles -->



<div id="rightPaneNewsletter" class="rightPane assetPane <?php if (count($this->_tpl_vars['allprivs']) > 3): ?><?php if ($this->_tpl_vars['allprivs']['6'] == 0 || $this->_tpl_vars['master']): ?>noEditPrivs<?php endif; ?><?php endif; ?>">
	<div id="newsletterPane">

		<div class="assetPaneHeader">
			<div class="closeDragInsert"></div>
			<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
			<div class="returnToLP"></div>
			<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
			<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Mailing_Lists']; ?>
</strong></h1>

		</div>
		<div class="dragInsertTabs clearfix">
			<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			<div class="dragInsertTabStorage dragInsertTab current">
				<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Mailing_Lists']; ?>
</span></span></span>
			</div>
			<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		</div>
		<div class="paneContents">
			<div class="cleverFilterBar">
				<div class="subHeaderButton right" id="showCampaigns">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Campaigns'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="subHeaderLeftMenuItem">
					<div class="target" id="newsletterContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllNewsletter"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllNewsletter"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderButton primaryItem" id="iconbarAddMailingList">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Mailing_List'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
			</div>
			<div id="newsletterPaneInner" class="pagesScroll">
				<form id="addMailingList" class="responsiveListAddForm hideOnReset" action="" method="post" style="display:none">
					<div class="imageContextEditFieldset">
							<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Mailing_List_Title']; ?>
</div>
							<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
						</div>
				</form>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<?php if (count($this->_tpl_vars['allprivs']) <= 3): ?>
						<?php $this->assign('sendOk', true); ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['allprivs']['7'] == 1 || $this->_tpl_vars['master']): ?>
						<?php $this->assign('sendOk', true); ?>
						<?php endif; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['sendOk']): ?>

					<div class="paneToolsBottomHalf paneToolsSend" id="sendListPopup">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Mailing_List_Send_Single'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteNewsletter">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<?php else: ?>
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteNewsletter">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<?php endif; ?>

				</div>
				<div class="paneToolsPrimary">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Manage_Subscribers'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['AutoResponder'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<a id="iconbarMailingListAutoresponder" title="" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="data-autoresponder-title"></a>
				<?php if (! $this->_tpl_vars['DISABLE_HELP']): ?>
				<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/mailing-lists.mp4"><?php echo $this->_tpl_vars['SetSeedLangs']['QuickTour_Newsletter']; ?>
</div>
				<?php endif; ?>


			</div>
		</div>
	</div>

</div> <!-- end #rightPaneNewsletter -->

<div id="campaigns">
		<div id="closeCampaigns"></div>
		<h1><?php echo $this->_tpl_vars['SetSeedLangs']['Campaigns']; ?>
</h2>
		<div id="campaignsInner"></div>
</div>

<div id="rightPaneNewsletterSubscribers" class="rightPane">
	<div id="newsletterSubscribersPane">

		<div class="paneContents withTitleBar">
			<div class="topBar">
				<div class="showLeftPane"></div>
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToMailingLists">

				</div>

				<span class="topBarTitle" id="editNewsletterSubscribersTitle"></span>
			</div>
			<div class="cleverFilterBar clearfix">

				<div id="iconbarAddSubscriber" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Subscriber'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
				<div class="subHeaderButton" id="iconbarImportSubscribers">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Import'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="subHeaderButton" id="iconbarExportSubscribers">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Export'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="subHeaderLeftMenuItem">
					<div class="target" id="newsletterSubscribersContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllNewsletterSubscribers"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllNewsletterSubscribers"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>

				<div class="subHeaderLeftMenuItem right">
					<div class="target">
						<svg class="searchSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
							<path d="M618.852,511.613c17.607,22.912,13.308,55.759-9.604,73.367l0,0c-22.912,17.606-55.76,13.306-73.367-9.606L375.36,366.49
					c-17.607-22.912-13.307-55.759,9.605-73.367l0,0c22.912-17.607,55.759-13.306,73.367,9.606L618.852,511.613z"/>
							<path d="M364.907,17.917C257.967-2.391,154.813,67.838,134.505,174.777s49.921,210.094,156.86,230.401
							c106.939,20.308,210.095-49.92,230.401-156.86C542.075,141.379,471.847,38.225,364.907,17.917z M425.232,229.986
							c-10.184,53.625-61.91,88.841-115.535,78.657c-53.625-10.183-88.841-61.909-78.658-115.534
							c10.184-53.624,61.911-88.841,115.535-78.658C400.199,124.635,435.416,176.362,425.232,229.986z"/>
						</svg>
					</div>
					<div class="triShadow"></div>
					<ul>
						<form action="" method="" class="filterBox">
							<div class="imageContextEditFieldset">
								<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Search'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
								<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="" /></div>
							</div>
							<div class="sendMe"></div>

							<span style="display:none" class="clearSearch"></span>

							<?php if ($this->_tpl_vars['filter']): ?><input type="hidden" name="filter" value="<?php echo $this->_tpl_vars['filter']; ?>
" id="filter"/><?php endif; ?>
							<div class="clear"><!-- --></div>
						</form>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem right">
					<div class="target notTooLong">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Subscriber_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul>
						<div <?php if (! $this->_tpl_vars['subscriberCategories']): ?>style="display:none"<?php endif; ?> id="filterBySubscriberCat">
						<li class="subHeaderMenuGroup"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
						<li><a href="" class="filterLink bpe_current" id="showAllSubscribers" category-id="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Subscriber_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo $this->_tpl_vars['SetSeedLangs']['All']; ?>
</span></a></li>
						<div id="subscriberFilterCategories" style="display:inline;">
						<?php $_from = $this->_tpl_vars['subscriberCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['subCatLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['subCatLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['subscriberCat']):
        $this->_foreach['subCatLoop']['iteration']++;
?>
						<li><a href="#" class="filterBy filterLink" category-id="<?php echo $this->_tpl_vars['subscriberCat']['id']; ?>
" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriberCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriberCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></li>
						<?php endforeach; endif; unset($_from); ?>
						</div>
						<div class="bpe_rule"></div>
						<li><a href="" id="subscriberFilterCategoriesMatchAll"><?php echo $this->_tpl_vars['SetSeedLangs']['Match_All_Selected']; ?>
</a></li>
						<li class="subHeaderMenuGroup"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Status'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</li>
						</div>
						<li><a href="" class="filterLink bpe_current" id="statusShowAnySubscribers" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Subscriber_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Any']; ?>
</span></a></li>
						<li><a href="" class="filterLink" id="statusShowActiveSubscribers" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Active'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Active']; ?>
</span></a></li>
						<li><a href="" class="filterLink" id="statusShowInactiveSubscribers" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Inactive'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Inactive']; ?>
</span></a></li>


					</ul>
					<div class="mtri"></div>
				</div>
			</div>
			<div id="newsletterSubscribersPaneInner" class="pagesScroll">

				<div id="addSubscriber" class="responsiveListAddForm hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Subscriber_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus newSubscriberName clearAfterSend" value=""/></div>
					</div>
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Subscriber_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="newSubscriberEmail clearAfterSend" value=""/></div>
					</div>

					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['groupFilter']; ?>
" id="currentMailingList"/>
				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteNewsletterSubscribers">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Subscriber'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div id="subscriberCategoryPaneTools">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
					</div>
					<div class="subHeaderLeftMenuItem" data-test-value="data-subscriber-categories" data-test-type="csv">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<div id="subscriberCategoriesList" style="display:none">
							</div>
							<li class='iconbarRule' <?php if (! $this->_tpl_vars['subscriberCategories']): ?>style="display:none"<?php endif; ?>></li>
							<li><a id='manageSubscriberCategories'><?php echo $this->_tpl_vars['SetSeedLangs']['Manage_Categories']; ?>
&hellip;</a></li>
							<a href="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>
						</ul>
						<div class="mtri"></div>
					</div>
				</div>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Status'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-subscriber-status">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="subActive" data-item-value="active" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Active'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['L'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Active'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
				<li><a id="subInactive" data-item-value="inactive" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Inactive'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['O'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Inactive'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>

				<div id="subscriberCustomFields">
				</div>
				<div class="paneToolsPrimary noIcon secondaryAction" id="addNewsletterCustomField">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Custom_Field'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
			</div>
		</div>


	</div>

</div> <!-- end #rightPaneNewsletterSubscribers -->

<div id="rightPaneSubscriberCategories" class="rightPane assetPane">

	<div id="subscriberCategoriesPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="subscriberCategoriesContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllSubscriberCategories"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllSubscriberCategories"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddSubscriberCategory" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Subscriber_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>

				<div class="topBarButtonBack" id="backToSubscribersFromCategories">

				</div>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
			</div>
			<div id="subscriberCategoriesPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="paneTools">
				<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteSubscriberCategories">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Subscriber_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				
				<a class="paneToolToggleItem autoPaneToolToggleItem" data-test-value="data-show-on-signup" data-test-value-checked="1"
				data-update-url="newsletterActions.php?newsletterAction=changeCatInSignup"
				data-items="#subscriberCategoriesPaneInner .subscriberCategoryItem"
				><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_In_Signup_Form'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				
				
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneSubscriberCategories -->


<div id="rightPaneBlog" class="rightPane">
	<div id="blogPane" class="withTitleBar">

		<div class="paneContents">
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Blog'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
			</div>
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">

					<div class="target" id="blogContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllBlog"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllBlog"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>

				<div class="subHeaderButton primaryItem" id="iconbarAddBlog">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Blog'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>


			</div>
			<div id="blogPaneInner" class="pagesScroll">

				<div id="addBlogEntry" class="responsiveListAddForm hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Blog_Title']; ?>
</div>
						<div class="imageContextEditInputWrap"><input id="addBlogTitle" type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>
				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteBlog">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Blog'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Status'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-blog-status">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="blogLive" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Live'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="live"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['L'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Live'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="blogOffline" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Offline'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="offline"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['O'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Offline'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Author'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-blog-author">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="blogAuthorsList"></div>
						<li class="iconbarRule"></li>
						<li><a id='manageAuthors'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Manage_Authors'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</a></li>
						<a href="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-blog-categories" data-test-type="csv">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="blogCategoriesList"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['No_Categories'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<li class="iconbarRule"></li>
						<li><a id='manageCategories'><?php echo $this->_tpl_vars['SetSeedLangs']['Manage_Categories']; ?>
&hellip;</a></li>
						<a href="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>
					</ul>
					<div class="mtri"></div>
				</div>
				
				<?php if ($this->_tpl_vars['includedFrontEndLangs']): ?>
				<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Language'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-lang">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul id="addLanguageBlogNew">
						<div id="languagesWrapperBlog">
							<?php if (count($this->_tpl_vars['languages']) > 0): ?>
								<?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['languages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['show'] = true;
$this->_sections['x']['max'] = $this->_sections['x']['loop'];
$this->_sections['x']['step'] = 1;
$this->_sections['x']['start'] = $this->_sections['x']['step'] > 0 ? 0 : $this->_sections['x']['loop']-1;
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = $this->_sections['x']['loop'];
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?>
								<li><a data-lang="<?php echo $this->_tpl_vars['languages'][$this->_sections['x']['index']]['name']; ?>
" data-item-value="<?php echo $this->_tpl_vars['languages'][$this->_sections['x']['index']]['abr']; ?>
" fakehref="<?php echo $this->_tpl_vars['languages'][$this->_sections['x']['index']]['abr']; ?>
" class="changeLanguage dontIncludeInPreview"><?php echo $this->_tpl_vars['languages'][$this->_sections['x']['index']]['name']; ?>
</a></li>
								<?php endfor; endif; ?>
							<?php endif; ?>
						</div>

						<li class="iconbarRule"></li>
						<?php if (((is_array($_tmp='ab')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Abkhazian" fakehref="Abkhazian|ab" data-item-value="ab">Abkhazian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='aa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Afar" fakehref="Afar|aa" data-item-value="aa">Afar</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='af')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Afrikaans" fakehref="Afrikaans|af" data-item-value="af">Afrikaans</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ak')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Akan" fakehref="Akan|ak" data-item-value="ak">Akan</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sq')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Albanian" fakehref="Albanian|sq" data-item-value="sq">Albanian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='am')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Amharic" fakehref="Amharic|am" data-item-value="am">Amharic</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ar')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Arabic" fakehref="Arabic|ar" data-item-value="ar">Arabic</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='an')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Aragonese" fakehref="Aragonese|an" data-item-value="an">Aragonese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='hy')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Armenian" fakehref="Armenian|hy" data-item-value="hy">Armenian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='as')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Assamese" fakehref="Assamese|as" data-item-value="as">Assamese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='av')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Avaric" fakehref="Avaric|av" data-item-value="av">Avaric</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ae')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Avestan" fakehref="Avestan|ae" data-item-value="ae">Avestan</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ay')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Aymara" fakehref="Aymara|ay" data-item-value="ay">Aymara</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='az')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Azerbaijani" fakehref="Azerbaijani|az" data-item-value="az">Azerbaijani</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='bm')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Bambara" fakehref="Bambara|bm" data-item-value="bm">Bambara</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ba')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Bashkir" fakehref="Bashkir|ba" data-item-value="ba">Bashkir</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='eu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Basque" fakehref="Basque|eu" data-item-value="eu">Basque</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='be')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Belarusian" fakehref="Belarusian|be" data-item-value="be">Belarusian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp="")) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Bengali" fakehref="Bengali|bn" data-item-value="bn">Bengali</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='bh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Bihari" fakehref="Bihari|bh" data-item-value="bh">Bihari</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='bi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Bislama" fakehref="Bislama|bi" data-item-value="bi">Bislama</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='nb')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Bokmål, Norwegian; Norwegian Bokmål" fakehref="Bokmål, Norwegian; Norwegian Bokmål|nb" data-item-value="nb">Bokmål, Norwegian; Norwegian Bokmål</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='bs')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Bosnian" fakehref="Bosnian|bs" data-item-value="bs">Bosnian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='br')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Breton" fakehref="Breton|br" data-item-value="br">Breton</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='bg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Bulgarian" fakehref="Bulgarian|bg" data-item-value="bg">Bulgarian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='my')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Burmese" fakehref="Burmese|my" data-item-value="my">Burmese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ca')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Catalan; Valencian" fakehref="Catalan; Valencian|ca" data-item-value="ca">Catalan; Valencian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='km')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Central Khmer" fakehref="Central Khmer|km" data-item-value="km">Central Khmer</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ch')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Chamorro" fakehref="Chamorro|ch" data-item-value="ch">Chamorro</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ce')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Chechen" fakehref="Chechen|ce" data-item-value="ce">Chechen</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ny')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Chichewa; Chewa; Nyanja" fakehref="Chichewa; Chewa; Nyanja|ny" data-item-value="ny">Chichewa; Chewa; Nyanja</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='zh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Chinese" fakehref="Chinese|zh" data-item-value="zh">Chinese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='cu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic" fakehref="Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic|cu" data-item-value="cu">Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='cv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Chuvash" fakehref="Chuvash|cv" data-item-value="cv">Chuvash</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='kw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Cornish" fakehref="Cornish|kw" data-item-value="kw">Cornish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='co')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Corsican" fakehref="Corsican|co" data-item-value="co">Corsican</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='cr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Cree" fakehref="Cree|cr" data-item-value="cr">Cree</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='hr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Croatian" fakehref="Croatian|hr" data-item-value="hr">Croatian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='cs')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Czech" fakehref="Czech|cs" data-item-value="cs">Czech</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='da')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Danish" fakehref="Danish|da" data-item-value="da">Danish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='dv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Divehi; Dhivehi; Maldivian" fakehref="Divehi; Dhivehi; Maldivian|dv" data-item-value="dv">Divehi; Dhivehi; Maldivian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='nl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Dutch; Flemish" fakehref="Dutch; Flemish|nl" data-item-value="nl">Dutch; Flemish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='dz')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Dzongkha" fakehref="Dzongkha|dz" data-item-value="dz">Dzongkha</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='en')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="English" fakehref="English|en" data-item-value="en">English</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='eo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Esperanto" fakehref="Esperanto|eo" data-item-value="eo">Esperanto</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='et')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Estonian" fakehref="Estonian|et" data-item-value="et">Estonian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ee')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Ewe" fakehref="Ewe|ee" data-item-value="ee">Ewe</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='fo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Faroese" fakehref="Faroese|fo" data-item-value="fo">Faroese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='fj')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Fijian" fakehref="Fijian|fj" data-item-value="fj">Fijian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='fi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Finnish" fakehref="Finnish|fi" data-item-value="fi">Finnish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='fr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="French" fakehref="French|fr" data-item-value="fr">French</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ff')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Fulah" fakehref="Fulah|ff" data-item-value="ff">Fulah</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='gd')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Gaelic; Scottish Gaelic" fakehref="Gaelic; Scottish Gaelic|gd" data-item-value="gd">Gaelic; Scottish Gaelic</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='gl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Galician" fakehref="Galician|gl" data-item-value="gl">Galician</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='lg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Ganda" fakehref="Ganda|lg" data-item-value="lg">Ganda</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ka')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Georgian" fakehref="Georgian|ka" data-item-value="ka">Georgian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='de')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="German" fakehref="German|de" data-item-value="de">German</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='el')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Greek, Modern (1453-)" fakehref="Greek, Modern (1453-)|el" data-item-value="el">Greek, Modern (1453-)</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='gn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Guarani" fakehref="Guarani|gn" data-item-value="gn">Guarani</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='gu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Gujarati" fakehref="Gujarati|gu" data-item-value="gu">Gujarati</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ht')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Haitian; Haitian Creole" fakehref="Haitian; Haitian Creole|ht" data-item-value="ht">Haitian; Haitian Creole</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ha')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Hausa" fakehref="Hausa|ha" data-item-value="ha">Hausa</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='he')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Hebrew" fakehref="Hebrew|he" data-item-value="he">Hebrew</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='hz')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Herero" fakehref="Herero|hz" data-item-value="hz">Herero</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='hi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Hindi" fakehref="Hindi|hi" data-item-value="hi">Hindi</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ho')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Hiri Motu" fakehref="Hiri Motu|ho" data-item-value="ho">Hiri Motu</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='hu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Hungarian" fakehref="Hungarian|hu" data-item-value="hu">Hungarian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='is')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Icelandic" fakehref="Icelandic|is" data-item-value="is">Icelandic</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='io')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Ido" fakehref="Ido|io" data-item-value="io">Ido</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ig')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Igbo" fakehref="Igbo|ig" data-item-value="ig">Igbo</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='id')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Indonesian" fakehref="Indonesian|id" data-item-value="id">Indonesian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ia')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Interlingua (International Auxiliary Language Association)" fakehref="Interlingua (International Auxiliary Language Association)|ia" data-item-value="ia">Interlingua (International Auxiliary Language Association)</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ie')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Interlingue" fakehref="Interlingue|ie" data-item-value="ie">Interlingue</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='iu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Inuktitut" fakehref="Inuktitut|iu" data-item-value="iu">Inuktitut</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ik')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Inupiaq" fakehref="Inupiaq|ik" data-item-value="ik">Inupiaq</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ga')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Irish" fakehref="Irish|ga" data-item-value="ga">Irish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='it')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Italian" fakehref="Italian|it" data-item-value="it">Italian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ja')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Japanese" fakehref="Japanese|ja" data-item-value="ja">Japanese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='jv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Javanese" fakehref="Javanese|jv" data-item-value="jv">Javanese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='kl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kalaallisut; Greenlandic" fakehref="Kalaallisut; Greenlandic|kl" data-item-value="kl">Kalaallisut; Greenlandic</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='kn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kannada" fakehref="Kannada|kn" data-item-value="kn">Kannada</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='kr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kanuri" fakehref="Kanuri|kr" data-item-value="kr">Kanuri</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ks')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kashmiri" fakehref="Kashmiri|ks" data-item-value="ks">Kashmiri</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='kk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kazakh" fakehref="Kazakh|kk" data-item-value="kk">Kazakh</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ki')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kikuyu; Gikuyu" fakehref="Kikuyu; Gikuyu|ki" data-item-value="ki">Kikuyu; Gikuyu</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='rw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kinyarwanda" fakehref="Kinyarwanda|rw" data-item-value="rw">Kinyarwanda</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ky')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kirghiz; Kyrgyz" fakehref="Kirghiz; Kyrgyz|ky" data-item-value="ky">Kirghiz; Kyrgyz</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='kv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Komi" fakehref="Komi|kv" data-item-value="kv">Komi</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='kg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kongo" fakehref="Kongo|kg" data-item-value="kg">Kongo</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ko')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Korean" fakehref="Korean|ko" data-item-value="ko">Korean</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='kj')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kuanyama; Kwanyama" fakehref="Kuanyama; Kwanyama|kj" data-item-value="kj">Kuanyama; Kwanyama</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ku')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Kurdish" fakehref="Kurdish|ku" data-item-value="ku">Kurdish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='lo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Lao" fakehref="Lao|lo" data-item-value="lo">Lao</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='la')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Latin" fakehref="Latin|la" data-item-value="la">Latin</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='lv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Latvian" fakehref="Latvian|lv" data-item-value="lv">Latvian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='li')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Limburgan; Limburger; Limburgish" fakehref="Limburgan; Limburger; Limburgish|li" data-item-value="li">Limburgan; Limburger; Limburgish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ln')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Lingala" fakehref="Lingala|ln" data-item-value="ln">Lingala</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='lt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Lithuanian" fakehref="Lithuanian|lt" data-item-value="lt">Lithuanian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='lu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Luba-Katanga" fakehref="Luba-Katanga|lu" data-item-value="lu">Luba-Katanga</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='lb')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Luxembourgish; Letzeburgesch" fakehref="Luxembourgish; Letzeburgesch|lb" data-item-value="lb">Luxembourgish; Letzeburgesch</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='mk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Macedonian" fakehref="Macedonian|mk" data-item-value="mk">Macedonian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='mg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Malagasy" fakehref="Malagasy|mg" data-item-value="mg">Malagasy</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ml')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Malayalam" fakehref="Malayalam|ml" data-item-value="ml">Malayalam</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ms')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Malay" fakehref="Malay|ms" data-item-value="ms">Malay</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='mt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Maltese" fakehref="Maltese|mt" data-item-value="mt">Maltese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='gv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Manx" fakehref="Manx|gv" data-item-value="gv">Manx</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='mi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Maori" fakehref="Maori|mi" data-item-value="mi">Maori</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='mr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Marathi" fakehref="Marathi|mr" data-item-value="mr">Marathi</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='mh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Marshallese" fakehref="Marshallese|mh" data-item-value="mh">Marshallese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='mo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Moldavian" fakehref="Moldavian|mo" data-item-value="mo">Moldavian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='mn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Mongolian" fakehref="Mongolian|mn" data-item-value="mn">Mongolian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='na')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Nauru" fakehref="Nauru|na" data-item-value="na">Nauru</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='nv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Navajo; Navaho" fakehref="Navajo; Navaho|nv" data-item-value="nv">Navajo; Navaho</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='nd')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Ndebele, North; North Ndebele" fakehref="Ndebele, North; North Ndebele|nd" data-item-value="nd">Ndebele, North; North Ndebele</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='nr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Ndebele, South; South Ndebele" fakehref="Ndebele, South; South Ndebele|nr" data-item-value="nr">Ndebele, South; South Ndebele</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ng')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Ndonga" fakehref="Ndonga|ng" data-item-value="ng">Ndonga</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ne')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Nepali" fakehref="Nepali|ne" data-item-value="ne">Nepali</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='se')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Northern Sami" fakehref="Northern Sami|se" data-item-value="se">Northern Sami</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='nn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Norwegian Nynorsk; Nynorsk, Norwegian" fakehref="Norwegian Nynorsk; Nynorsk, Norwegian|nn" data-item-value="nn">Norwegian Nynorsk; Nynorsk, Norwegian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='no')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Norwegian" fakehref="Norwegian|no" data-item-value="no">Norwegian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='oc')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Occitan (post 1500); Provençal" fakehref="Occitan (post 1500); Provençal|oc" data-item-value="oc">Occitan (post 1500); Provençal</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='oj')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Ojibwa" fakehref="Ojibwa|oj" data-item-value="oj">Ojibwa</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='or')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Oriya" fakehref="Oriya|or" data-item-value="or">Oriya</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='om')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Oromo" fakehref="Oromo|om" data-item-value="om">Oromo</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='os')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Ossetian; Ossetic" fakehref="Ossetian; Ossetic|os" data-item-value="os">Ossetian; Ossetic</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='pi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Pali" fakehref="Pali|pi" data-item-value="pi">Pali</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='pa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Panjabi; Punjabi" fakehref="Panjabi; Punjabi|pa" data-item-value="pa">Panjabi; Punjabi</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='fa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Persian" fakehref="Persian|fa" data-item-value="fa">Persian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='pl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Polish" fakehref="Polish|pl" data-item-value="pl">Polish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='pt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Portuguese" fakehref="Portuguese|pt" data-item-value="pt">Portuguese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ps')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Pushto" fakehref="Pushto|ps" data-item-value="ps">Pushto</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='qu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Quechua" fakehref="Quechua|qu" data-item-value="qu">Quechua</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ro')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Romanian" fakehref="Romanian|ro" data-item-value="ro">Romanian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='rm')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Romansh" fakehref="Romansh|rm" data-item-value="rm">Romansh</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='rn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Rundi" fakehref="Rundi|rn" data-item-value="rn">Rundi</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ru')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Russian" fakehref="Russian|ru" data-item-value="ru">Russian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sm')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Samoan" fakehref="Samoan|sm" data-item-value="sm">Samoan</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Sango" fakehref="Sango|sg" data-item-value="sg">Sango</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Sanskrit" fakehref="Sanskrit|sa" data-item-value="sa">Sanskrit</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sc')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Sardinian" fakehref="Sardinian|sc" data-item-value="sc">Sardinian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Serbian" fakehref="Serbian|sr" data-item-value="sr">Serbian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Shona" fakehref="Shona|sn" data-item-value="sn">Shona</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ii')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Sichuan Yi" fakehref="Sichuan Yi|ii" data-item-value="ii">Sichuan Yi</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sd')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Sindhi" fakehref="Sindhi|sd" data-item-value="sd">Sindhi</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='si')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Sinhala; Sinhalese" fakehref="Sinhala; Sinhalese|si" data-item-value="si">Sinhala; Sinhalese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Slovak" fakehref="Slovak|sk" data-item-value="sk">Slovak</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Slovenian" fakehref="Slovenian|sl" data-item-value="sl">Slovenian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='so')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Somali" fakehref="Somali|so" data-item-value="so">Somali</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='st')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Sotho, Southern" fakehref="Sotho, Southern|st" data-item-value="st">Sotho, Southern</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='es')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Spanish; Castilian" fakehref="Spanish; Castilian|es" data-item-value="es">Spanish; Castilian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='su')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Sundanese" fakehref="Sundanese|su" data-item-value="su">Sundanese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Swahili" fakehref="Swahili|sw" data-item-value="sw">Swahili</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ss')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Swati" fakehref="Swati|ss" data-item-value="ss">Swati</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='sv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Swedish" fakehref="Swedish|sv" data-item-value="sv">Swedish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='tl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Tagalog" fakehref="Tagalog|tl" data-item-value="tl">Tagalog</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ty')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Tahitian" fakehref="Tahitian|ty" data-item-value="ty">Tahitian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='tg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Tajik" fakehref="Tajik|tg" data-item-value="tg">Tajik</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ta')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Tamil" fakehref="Tamil|ta" data-item-value="ta">Tamil</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='tt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Tatar" fakehref="Tatar|tt" data-item-value="tt">Tatar</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='te')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Telugu" fakehref="Telugu|te" data-item-value="te">Telugu</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='th')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Thai" fakehref="Thai|th" data-item-value="th">Thai</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='bo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Tibetan" fakehref="Tibetan|bo" data-item-value="bo">Tibetan</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ti')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Tigrinya" fakehref="Tigrinya|ti" data-item-value="ti">Tigrinya</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='to')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Tonga (Tonga Islands)" fakehref="Tonga (Tonga Islands)|to" data-item-value="to">Tonga (Tonga Islands)</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ts')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Tsonga" fakehref="Tsonga|ts" data-item-value="ts">Tsonga</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='tn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Tswana" fakehref="Tswana|tn" data-item-value="tn">Tswana</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='tr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Turkish" fakehref="Turkish|tr" data-item-value="tr">Turkish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='tk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Turkmen" fakehref="Turkmen|tk" data-item-value="tk">Turkmen</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='tw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Twi" fakehref="Twi|tw" data-item-value="tw">Twi</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ug')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Uighur; Uyghur" fakehref="Uighur; Uyghur|ug" data-item-value="ug">Uighur; Uyghur</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='uk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Ukrainian" fakehref="Ukrainian|uk" data-item-value="uk">Ukrainian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ur')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Urdu" fakehref="Urdu|ur" data-item-value="ur">Urdu</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='uz')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Uzbek" fakehref="Uzbek|uz" data-item-value="uz">Uzbek</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='ve')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Venda" fakehref="Venda|ve" data-item-value="ve">Venda</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='vi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Vietnamese" fakehref="Vietnamese|vi" data-item-value="vi">Vietnamese</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='vo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Volapük" fakehref="Volapük|vo" data-item-value="vo">Volapük</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='wa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Walloon" fakehref="Walloon|wa" data-item-value="wa">Walloon</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='cy')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Welsh" fakehref="Welsh|cy" data-item-value="cy">Welsh</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='fy')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Western Frisian" fakehref="Western Frisian|fy" data-item-value="fy">Western Frisian</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='wo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Wolof" fakehref="Wolof|wo" data-item-value="wo">Wolof</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='xh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Xhosa" fakehref="Xhosa|xh" data-item-value="xh">Xhosa</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='yi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Yiddish" fakehref="Yiddish|yi" data-item-value="yi">Yiddish</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='yo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Yoruba" fakehref="Yoruba|yo" data-item-value="yo">Yoruba</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='za')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Zhuang; Chuang" fakehref="Zhuang; Chuang|za" data-item-value="za">Zhuang; Chuang</a></li>
						<?php endif; ?>
						<?php if (((is_array($_tmp='zu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
						<li><a data-lang="Zulu" fakehref="Zulu|zu" data-item-value="zu">Zulu</a></li>
						<?php endif; ?>
					</ul>
					<div class="mtri"></div>
				</div>
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['pinnedSupport']): ?>
					<a id="pinnedArticleToggle" class="paneToolToggleItem" data-test-value="data-pinned" data-test-value-checked="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Pinned'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				<?php endif; ?>
				
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneBlog -->


<div id="rightPaneBlogAuthors" class="rightPane">
	<div id="blogAuthorsPane">

		<div class="paneContents withTitleBar">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="blogAuthorsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllBlogAuthors"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllBlogAuthors"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddBlogAuthor" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Blog_Author'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
			<div class="topBar ">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToBlogFromAuthors"></div>

				<h1><?php echo $this->_tpl_vars['SetSeedLangs']['Authors']; ?>
</h1>
			</div>
			<div id="blogAuthorsPaneInner" class="pagesScroll">

				<div class="responsiveListAddForm addBlogAuthor hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Blog_Author_Name']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus newBlogAuthorName" value=""/></div>
					</div>
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Blog_Author_Bio']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="newBlogAuthorBio" value=""/></div>
					</div>
				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteBlogAuthors">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Blog_Author'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>


			</div>
		</div>
	</div>

</div> <!-- end #rightPaneBlogAuthors -->

<div id="rightPaneBlogCategories" class="rightPane">
	<div id="blogCategoriesPane">

		<div class="paneContents withTitleBar">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="blogCategoriesContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllBlogCategories"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllBlogCategories"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddBlogCategory" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Blog_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
			<div class="topBar ">
				<div class="showLeftPane"></div>
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToBlogFromCategories"></div>

				<h1><?php echo $this->_tpl_vars['SetSeedLangs']['Categories']; ?>
</h1>
			</div>
			<div id="blogCategoriesPaneInner" class="pagesScroll">

				<div class="responsiveListAddForm addBlogCategory hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Category_Name']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus" value=""/></div>
					</div>
				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteBlogCategories">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Blog_Category'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

				<a id="reverseBlogsToggle"  class="paneToolToggleItem" data-test-value="data-reverse-order" data-test-value-checked="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Reverse_Blog_Entries'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneBlogCategories -->



<div id="rightPaneBlogComments" class="rightPane ">
	<div id="blogCommentsPane">
		<div class="paneContents withTitleBar">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="blogCommentsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllBlogComments"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllBlogComments"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>


				<div id="iconbarAddBlogComment" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Blog_Comment'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
		<div class="topBar " id="viewingBlogComments">
			<div class="returnToLP"></div>
			<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
			<div class="topBarButtonBack" id="backToBlogFromComments">
					</svg>
				</div>
			<h1><?php echo $this->_tpl_vars['SetSeedLangs']['Comments']; ?>
</h1>
		</div>
		<div id="blogCommentsPaneInner" class="pagesScroll">

			<div class="responsiveListAddForm addBlogComment hideOnReset" style="display:none">
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Reply_Comment']; ?>
</div>
					<div class="imageContextEditInputWrap"><textarea rows="1" cols="30" class="focus replyComment clearAfterSend" ></textarea></div>
				</div>
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Reply_Name']; ?>
</div>
					<div class="imageContextEditInputWrap"><input type="text" name="" class="replyName clearAfterSend" value=""/></div>
				</div>
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Reply_Email']; ?>
</div>
					<div class="imageContextEditInputWrap"><input type="text" name="" class="replyEmail clearAfterSend" value=""/></div>
				</div>


			</div>
			<div class="clearfix insertTarget"></div>
		</div>
		<div class="paneTools">
		<div class="disabledMask"></div>
			<div class="paneToolsButtonRow">
				<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteBlogComments">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
			</div>
			<div class="stylesHeading">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Status'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-blog-comment-status">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="commentApprove" data-item-value="live" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Approval_Live'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['L'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Approval_Live'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="commentUnapprove" data-item-value="offline" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Approval_Offline'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['O'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Approval_Offline'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>

		</div>
		</div>
	</div>

</div> <!-- end #rightPaneBlogComments -->


<div id="rightPaneCheckout" class="rightPane">
	<div id="checkoutPane" class="withTitleBar">
		<div class="paneContents">
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Checkout'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
			</div>
			<div class="cleverFilterBar">
				<div class="subHeaderLeftMenuItem">
					<div class="target" id="ordersContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllCheckout"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllCheckout"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem">
					<div class="target">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Checkout_CSV_Download'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="downloadCSV" href="shopActions.php?shopAction=downloadCSV&orderType=dispatched"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Export_Dispatched_Orders'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
</li>
						<li><a id="downloadCSVOpen" href="shopActions.php?shopAction=downloadCSV&orderType=open"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Export_Open_Orders'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
</li>
					</ul>
					<div class="mtri"></div>
				</div>


			</div>
			<div id="checkoutPaneInner" class="pagesScroll"><div class="clearfix insertTarget" id="openOrders"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">

					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteCheckout">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_Order_Details'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDispatch" id="iconbarCheckoutDispatch">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Dispatched'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="paneToolsBottomHalf paneToolsArchive" id="iconbarCheckoutArchive">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Archive'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<?php if ($this->_tpl_vars['invoice_page_id'] != 0): ?>
				
				
				<div class="paneToolsPrimary secondaryAction noIcon" id="showInvoice">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_Invoice'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<?php endif; ?>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneCheckout -->


<div id="rightPaneLivechat" class="rightPane">
	<div id="livechatPane" class="withTitleBar withEmptyFilterBar">
		<div class="paneContents">
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
			</div>
			<div class="cleverFilterBar empty">

				<div class="showLeftPane"></div>
				<div class="subHeaderLeftMenuItem">
					<div class="target" id="livechatContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllLivechat"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllLivechat"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>

			</div>
			<div id="livechatPaneInner" class="pagesScroll"><div class="clearfix" id="convos"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteLivechat">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Accept_Chat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

			</div>
		</div>
		<div id="hiddenConvos" style="display:none"></div>
	</div>

</div> <!-- end #rightPaneLivechat -->


<div id="rightPaneStaff" class="rightPane">
	<div id="staffPane">
		<div class="paneContents withTitleBar">
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Staff'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
			</div>
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="staffContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllStaff"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllStaff"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarNewStaff" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Staff_New'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>

			</div>

			<div id="staffPaneInner" class="pagesScroll">

				<div id="addStaff" class="responsiveListAddForm hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Staff_Email']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus newStaffEmail clearAfterSend" value=""/></div>
					</div>
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Staff_Password']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="password" name="" class="newStaffPassword clearAfterSend" value=""/></div>
					</div>
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Staff_Password_Again']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="password" name="" class="newStaffPassword2 clearAfterSend" value=""/></div>
					</div>
				</div>
				<div class="clearfix insertTarget" id="adminList"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteStaff">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Staff'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div class="paneToolsPrimary secondaryAction noIcon" id="resetStaffPassword">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Reset_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>
				<div id="privsMenu">
					<div class="stylesHeading">
						<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Privileges'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
					</div>
					<div class="subHeaderLeftMenuItem" data-test-value="data-privs" data-test-type="csv">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<li><a id="" class="privilegeItem" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Require_Specific_Permissions'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="14"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Require_Specific_Permissions'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							
							<li><a id="allPrivs" data=lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['All_Privileges'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="allTicked"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['All_Privileges'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							
							<li class="iconbarRule"></li>
							<li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Publish_Pages'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Publish_Pages'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<?php if ($this->_tpl_vars['DISABLE_GALLERIES'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Galleries'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Galleries'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li><?php endif; ?>
							<?php if ($this->_tpl_vars['DISABLE_FORMS'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Contact_Forms'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Contact_Forms'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>		</li><?php endif; ?>
							<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Products'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li><?php endif; ?>
							<?php if ($this->_tpl_vars['DISABLE_BOOKINGS'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Bookings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="13"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Bookings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li><?php endif; ?>

							<?php if ($this->_tpl_vars['DISABLE_CALENDARS'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Calendars'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Calendars'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li><?php endif; ?>
							<?php if ($this->_tpl_vars['DISABLE_SNIPPETS'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate " data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Snippets'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Snippets'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li><?php endif; ?>
							<?php if ($this->_tpl_vars['DISABLE_MAILING_LIST'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Mailing_List_Subscribers'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Mailing_List_Subscribers'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Send_Mailing_List_Messages'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="7"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Send_Mailing_List_Messages'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li><?php endif; ?>
							<?php if ($this->_tpl_vars['DISABLE_BLOG'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_The_Blog'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="8"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_The_Blog'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li><?php endif; ?>
							<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Manage_Checkout'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="9"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Manage_Checkout'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li><?php endif; ?>
							<?php if ($this->_tpl_vars['DISABLE_LIVECHAT'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Respond_To_Livechat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Respond_To_Livechat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li><?php endif; ?>
							<li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="11"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							<?php if ($this->_tpl_vars['DISABLE_EMBED_CODES'] == 0): ?><li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Embed_Codes'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="12"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Work_With_Embed_Codes'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li><?php endif; ?>
							<li><a id="" class="privilegeItem allTickCandidate" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Items_To_Permission_Groups'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="15"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Items_To_Permission_Groups'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
							
							
							<a data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>
						</ul>
						<div class="mtri"></div>
					</div>
					
					<div id="staffGroupsPaneTools">
						<div class="stylesHeading">
							<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Permission_Groups'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
						</div>
						<div class="subHeaderLeftMenuItem" data-test-value="data-permission-groups" data-test-type="csv">
							<div class="target">

							</div>
							<div class="triShadow"></div>
							<ul>
								<div id="permissionGroupsList"  <?php if (! $this->_tpl_vars['permissionGroups']): ?>style="display:none"<?php endif; ?>>
									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/views/admin/permissiongroups.tpl", 'smarty_include_vars' => array('groups' => $this->_tpl_vars['permissionGroups'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								</div>
								<li class='iconbarRule' <?php if (! $this->_tpl_vars['permissionGroups']): ?>style="display:none"<?php endif; ?>></li>
																<li><a id='managePermissionGroups'><?php echo $this->_tpl_vars['SetSeedLangs']['Manage_Permission_Groups']; ?>
&hellip;</a></li>
								<a href="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>
							</ul>
							<div class="mtri"></div>
						</div>
					</div>
				
					
					
					
				</div>
				<?php if (! $this->_tpl_vars['DISABLE_HELP']): ?>
				<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/permissions.mp4"><?php echo $this->_tpl_vars['SetSeedLangs']['QuickTour_Perms']; ?>
</div>
				<?php endif; ?>
				
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneStaff -->



<div id="rightPanePermissionGroups" class="rightPane autoRename"
	data-assign-keys="assignPermissionGroupsKeys"
	data-url="adminUsersActions.php"
	data-data="adminUsersAction=renamePermissionGroup"
	data-attr-to-update="title"
	data-post-call="renamePermissionGroupsCallback"
>

	<div id="permissionGroupsPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="permissionGroupsContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllPermissionGroups"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllPermissionGroups"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddPermissionGroup" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Permission_Group'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToStaffFromGroups">

				</div>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Permission_Groups'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
			</div>
			<div id="permissionGroupsPaneInner" class="pagesScroll">
				<div class="responsiveListAddForm addPermissionGroup hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Permission_Group_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
				<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeletePermissionGroups">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				
				<div class="paneToolsPrimary renameAction">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rename_Permission_Group'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPanePermissionGroups -->



<input type="hidden" name="" value="<?php echo $this->_tpl_vars['adminUserSalt']; ?>
" id="adminUserSalt"/>


<div id="rightPaneEmbedCodes" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Storage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
:</span> <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Embed_Codes']; ?>
</strong></h1>


	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span><?php echo $this->_tpl_vars['SetSeedLangs']['Embed_Codes']; ?>
</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Extra'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="dragInsertTabLayout dragInsertTab"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Structure'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	</div>
	<div id="embedCodesPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="embedCodesContextMenu">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllEmbedCodes"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
						<li><a id="iconbarDeselectAllEmbedCodes"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarNewEmbedCodes" class="subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Embed_Code'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
			</div>
			<div id="embedCodesPaneInner" class="pagesScroll">
				<div id="addEmbedCode" class="responsiveListAddForm hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Embed_Code_Name']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus resetAfterSend newEmbedCodeName" value=""/></div>
					</div>
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Embed_Code_Code']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="resetAfterSend newEmbedCodeCode" value=""/></div>
					</div>

					<input type="hidden" name="" value="<?php echo $this->_tpl_vars['groupFilter']; ?>
" id="currentMailingList"/>
				</div>
				<div class="clearfix insertTarget" id="embedCodesList"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/views/embed/embedcodes.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteEmbedCodes">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

					</div>
				</div>
				<div class="paneToolsPrimary">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Embed_Code'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneEmbedCodes -->




<input type="hidden" name="" value="<?php echo $this->_tpl_vars['maxUploadSize']; ?>
" id="maxUploadSize"/>
<div id="bpe_toggler" class="bpe_toggler"></div>

<div id="settingsFlyinMask"></div>
<div id="settingsFlyin">
	<div id="settingsFlyinHeader">
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<div id="backSettingsFlyin" class="topBarButtonBack">

		</div>
		<div id="backSettingsFlyinMain" class="topBarButtonBack">

		</div>
		<h1 id="settingsFlyinHeaderText" original="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Website_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Website_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
		<h1 id="designFlyinHeaderText" original="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Design'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Design'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
	</div>
	<div id="settingsFlyinInner">
		<div class="settingsFlyinPadding">
			<div id="settingsTwoPaneLeft">

			</div>
			<div id="settingsTwoPaneRight">
				<p class="settingsGroupHeading"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['General'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>

				<div class="settingsItem first last">
				<a id="changeHomepage"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Website_Homepage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</a>
				</div>
				
				<div class="settingsItem first ">
				<a id="clearMenuCaches"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Clear_Menu_Caches'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				
				<div class="settingsItem ">
				<a id="clearTemplateCaches"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Clear_Template_Caches'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				
				<div class="settingsItem  last">
				<a id="rebuildSearchIndexes"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Rebuild_Search_Indexes'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				
				<?php if ($this->_tpl_vars['facebook_app_ready']): ?>
				<div class="settingsItem first last " id="fbButton" <?php if ($this->_tpl_vars['facebook_enabled']): ?>style="display:none;"<?php endif; ?>>
				<a id="connectFB"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Connect_FB'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<div class="settingsItem first last statusOnly" id="fbStatus" <?php if (! $this->_tpl_vars['facebook_enabled']): ?>style="display:none;"<?php endif; ?>>
				<a id="connectedFB" class="statusOnly"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Connected_FB'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
: <span id="fbName"><?php echo $this->_tpl_vars['facebook_name']; ?>
</span></a>
				</div>
				
				<?php endif; ?>
				
				<?php if (count($this->_tpl_vars['allprivs']) > 3): ?> 					<?php if (count($this->_tpl_vars['sitewideContent']) > 0): ?>

					<p class="settingsGroupHeading" id="sitewideSettingsHeading"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sitewide_Content'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>
					<div id="primaryLangSitewide">
					<?php $_from = $this->_tpl_vars['sitewideContent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sitewideContentVar']):
        $this->_foreach['loop1']['iteration']++;
?>
						<div class="settingsItem settingsLinkToChoices <?php if (($this->_foreach['loop1']['iteration'] <= 1)): ?>first<?php endif; ?> <?php if (($this->_foreach['loop1']['iteration'] == $this->_foreach['loop1']['total'])): ?>last<?php endif; ?>">
						<a href="editSitewideContent.php?name=<?php echo urlencode($this->_tpl_vars['sitewideContentVar'][0]); ?>
" class="returnTrue"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['sitewideContentVar'][1])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')); ?>
</a>
						</div>
					<?php endforeach; endif; unset($_from); ?>
					</div>
					<div id="otherLangsSitewide">

					</div>


					<?php endif; ?>
				<?php else: ?>
					<?php if ($this->_tpl_vars['allprivs']['2'] == 1 || $this->_tpl_vars['master']): ?>
						<?php if (count($this->_tpl_vars['sitewideContent']) > 0): ?>

						<p class="settingsGroupHeading" id="sitewideSettingsHeading"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sitewide_Content'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>
							<div id="primaryLangSitewide">
							<?php $_from = $this->_tpl_vars['sitewideContent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sitewideContentVar']):
        $this->_foreach['loop1']['iteration']++;
?>
								<div class="settingsItem settingsLinkToChoices <?php if (($this->_foreach['loop1']['iteration'] <= 1)): ?>first<?php endif; ?> <?php if (($this->_foreach['loop1']['iteration'] == $this->_foreach['loop1']['total'])): ?>last<?php endif; ?>">
								<a href="editSitewideContent.php?name=<?php echo urlencode($this->_tpl_vars['sitewideContentVar'][0]); ?>
" class="returnTrue"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['sitewideContentVar'][1])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')); ?>
</a>
								</div>
							<?php endforeach; endif; unset($_from); ?>
							</div>
							<div id="otherLangsSitewide">

							</div>


						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>

				<?php if (count($this->_tpl_vars['allprivs']) > 3): ?> 					<?php if ($this->_tpl_vars['DISABLE_MAILING_LIST'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['6'] == 1 || $this->_tpl_vars['allprivs']['7'] == 1): ?><?php $this->assign('mailingListOk', true); ?><?php endif; ?><?php endif; ?>
					<?php if ($this->_tpl_vars['DISABLE_BLOG'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['8'] == 1): ?><?php $this->assign('blogOk', true); ?><?php endif; ?><?php endif; ?>
					<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['9'] == 1): ?><?php $this->assign('productsOk', true); ?><?php endif; ?><?php endif; ?>
				<?php else: ?>
					<?php if ($this->_tpl_vars['allprivs']['1'] == 1 || $this->_tpl_vars['master']): ?>
					<?php if ($this->_tpl_vars['DISABLE_MAILING_LIST'] == 0): ?><?php $this->assign('mailingListOk', true); ?><?php endif; ?>
					<?php if ($this->_tpl_vars['DISABLE_BLOG'] == '0'): ?><?php $this->assign('blogOk', true); ?><?php endif; ?>
					<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == '0'): ?><?php $this->assign('productsOk', true); ?><?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['mailingListOk']): ?>
				<p class="settingsGroupHeading"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Mailing_Lists'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>
				<div class="settingsItem settingsText first">

				<a id="newsletterFromSetting" mailing-list-from-name="<?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_from_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" mailing-list-from-email="<?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_from_email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" class="">
					<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
					<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_from_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_from_email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
)"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_from_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_from_email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
)</span></span>
					<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>


				</a>
				</div>
				<div class="settingsItem settingsText last">
				<a id="newsletterSMTPSetting" mailing-list-server="<?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_server'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" mailing-list-username="<?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_username'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" mailing-list-password="<?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">

						<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_server'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['newsletter_server'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
							</a>
				</div>
				<div class="settingsItem settingsToggle last first">
				<a id="notifyMeChange" class="<?php if ($this->_tpl_vars['notifyMe']): ?>bpe_current<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Notify_Me'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['blogOk']): ?>
				<p class="settingsGroupHeading"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Blog'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>
				<div class="settingsItem settingsToggle first">
				<a id="newCommentApprovalToggle" <?php if ($this->_tpl_vars['manual_approve'] == 'yes'): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Comments_Approval'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<div class="settingsItem settingsText">
				<a id="changeCommentNotificationEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['comment_email_notification'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">

					<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Comment_Notification_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Comment_Notification_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</span></span>
					<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['comment_email_notification'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['comment_email_notification'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
					<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Comment_Notification_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Comment_Notification_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</span>
							</a>
				</a>
				</div>
				<div class="settingsItem settingsText">
				<a id="changeSecretPass" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['secret_passcode'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">

					<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Author_Reply_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Author_Reply_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</span></span>
					<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['secret_passcode'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['secret_passcode'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
					<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Author_Reply_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Author_Reply_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</span>
				</a>
				</div>
				<div class="settingsItem settingsText last">
				<a id="changeArticlePerPage">
					<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Articles_Per_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Articles_Per_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</span></span>
					<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['items_on_page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['items_on_page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
					<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Articles_Per_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Articles_Per_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</span>
				</a>
				</div>
				<div class="settingsItem settingsToggle first facebook_control" <?php if (! $this->_tpl_vars['facebook_enabled']): ?>style="display:none"<?php endif; ?>>
				<a id="importFromFB" <?php if ($this->_tpl_vars['facebook_import'] == '1'): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['FB_Import_Blog'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<div class="settingsItem settingsText facebook_control"<?php if (! $this->_tpl_vars['facebook_enabled']): ?>style="display:none"<?php endif; ?>>
				<a id="changeFacebookTagging">

					<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['FB_Import_Tags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['FB_Import_Tags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</span></span>
					<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['facebook_import_tags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['facebook_import_tags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
					<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['FB_Import_Tags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['FB_Import_Tags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</span>
				</a>
				</div>
				<div class="settingsItem settingsText last facebook_control"<?php if (! $this->_tpl_vars['facebook_enabled']): ?>style="display:none"<?php endif; ?>>
				<a id="changeFacebookPinning">

					<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Pin_With_Tags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Pin_With_Tags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</span></span>
					<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['facebook_pin_tag'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['facebook_pin_tag'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
					<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Pin_With_Tags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Pin_With_Tags'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</span>
				</a>
				</div>
				
				<?php endif; ?>

				<?php if ($this->_tpl_vars['productsOk']): ?>
				<p class="settingsGroupHeading"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Checkout'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>
				
				<div class="settingsItem settingsText first <?php if ($this->_tpl_vars['gatewaysettings']): ?>last<?php endif; ?>">
					<a id="changePayPalEmail">
						<span class="smallSettings"><span class="overflowEllipsis" title="<?php if ($this->_tpl_vars['gatewaysettings']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Order_Notification_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['PayPal_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['gatewaysettings']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Order_Notification_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['PayPal_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php endif; ?></span></span>
						<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['paypal_email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['paypal_email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="overflowEllipsis largeSettings" title="<?php if ($this->_tpl_vars['gatewaysettings']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Order_Notification_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['PayPal_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['gatewaysettings']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Order_Notification_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['PayPal_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<?php endif; ?></span>
					</a>
				</div>
				
				<?php if ($this->_tpl_vars['gatewaysettings']): ?>
					<?php echo smarty_function_counter(array('name' => 'gateway','assign' => 'gatewaynumber','start' => 0), $this);?>

					<?php $_from = $this->_tpl_vars['gatewaysettings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gw']):
?>
					<?php if ($this->_tpl_vars['gatewaynumber'] <= 2): ?>

						<div class="settingsItem settingsToggle first">
							<a class="enableGateway <?php if ($this->_tpl_vars['credentials'][$this->_tpl_vars['gatewaynumber']][0]): ?>bpe_current<?php endif; ?>" data-gateway="<?php echo $this->_tpl_vars['gatewaynumber']; ?>
" ><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Enable'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
						</div>
					
						<div class="settingsItem settingsText <?php if (! $this->_tpl_vars['gw']['show_credential_2']): ?>last<?php endif; ?>">
							<a class="changeCredential" data-gateway="<?php echo $this->_tpl_vars['gatewaynumber']; ?>
" data-gateway-name="<?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential1_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-credential="1">
								<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential1_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['credential1_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
								<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['credentials'][$this->_tpl_vars['gatewaynumber']][1])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['credentials'][$this->_tpl_vars['gatewaynumber']][1])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
								<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential1_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential1_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
							</a>
						</div>
						<?php if ($this->_tpl_vars['gw']['show_credential_2']): ?>
						<div class="settingsItem settingsText <?php if (! $this->_tpl_vars['gw']['show_credential_3']): ?>last<?php endif; ?>">
							<a  class="changeCredential" data-gateway="<?php echo $this->_tpl_vars['gatewaynumber']; ?>
" data-gateway-name="<?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential2_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-credential="2">
								<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential2_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['credential2_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
								<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['credentials'][$this->_tpl_vars['gatewaynumber']][2])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['credentials'][$this->_tpl_vars['gatewaynumber']][2])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
								<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential2_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential2_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
							</a>
						</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['gw']['show_credential_3']): ?>
						<div class="settingsItem settingsText last">
							<a  class="changeCredential" data-gateway="<?php echo $this->_tpl_vars['gatewaynumber']; ?>
" data-gateway-name="<?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential3_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-credential="3">
								<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential3_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['credential3_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
								<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['credentials'][$this->_tpl_vars['gatewaynumber']][3])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['credentials'][$this->_tpl_vars['gatewaynumber']][3])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
								<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential3_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['gw']['credential3_display_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
							</a>
						</div>
						<?php endif; ?>


					<?php endif; ?>
					<?php echo smarty_function_counter(array('name' => 'gateway'), $this);?>

					<?php endforeach; endif; unset($_from); ?>
					
				<?php else: ?>
					<div class="settingsItem settingsText last">
						<a id="changeMerchantID">
							<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Merchant_ID'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Merchant_ID'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
							<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['merchant_id'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['merchant_id'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
							<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Merchant_ID'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Merchant_ID'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
						</a>
					</div>
					
					
				<?php endif; ?>
				
				
				<div class="settingsItem settingsToggle first">
					<a id="enableCheckoutMessage" <?php if ($this->_tpl_vars['no_note'] == 1): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Checkout_Message'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<div class="settingsItem settingsDropdown last">
					<div class="smallSettings"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Currency'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
					<select name="" id="changeCurrency">
						<option value="AUD" <?php if ($this->_tpl_vars['currencyConfig'] == 'AUD'): ?>selected="selected"<?php endif; ?>>AUD (Australian Dollar)</option>
						<option value="CAD" <?php if ($this->_tpl_vars['currencyConfig'] == 'CAD'): ?>selected="selected"<?php endif; ?>>CAD (Canadian Dollar)</option>
						<option value="EUR" <?php if ($this->_tpl_vars['currencyConfig'] == 'EUR'): ?>selected="selected"<?php endif; ?>>EUR (Euro)</option>
						<option value="GBP" <?php if ($this->_tpl_vars['currencyConfig'] == 'GBP'): ?>selected="selected"<?php endif; ?>>GBP (British Pound)</option>
						<option value="JPY" <?php if ($this->_tpl_vars['currencyConfig'] == 'JPY'): ?>selected="selected"<?php endif; ?>>JPY (Japanese Yen)</option>
						<option value="USD" <?php if ($this->_tpl_vars['currencyConfig'] == 'USD'): ?>selected="selected"<?php endif; ?>>USD (U.S. Dollar)</option>
						<option value="NZD" <?php if ($this->_tpl_vars['currencyConfig'] == 'NZD'): ?>selected="selected"<?php endif; ?>>NZD (New Zealand Dollar)</option>
						<option value="CHF" <?php if ($this->_tpl_vars['currencyConfig'] == 'CHF'): ?>selected="selected"<?php endif; ?>>CHF (Swiss Franc)</option>
						<option value="HKD" <?php if ($this->_tpl_vars['currencyConfig'] == 'HKD'): ?>selected="selected"<?php endif; ?>>HKD (Hong Kong Dollar)</option>
						<option value="SGD" <?php if ($this->_tpl_vars['currencyConfig'] == 'SGD'): ?>selected="selected"<?php endif; ?>>SGD (Singapore Dollar)</option>
						<option value="SEK" <?php if ($this->_tpl_vars['currencyConfig'] == 'SEK'): ?>selected="selected"<?php endif; ?>>SEK (Swedish Krona)</option>
						<option value="DKK" <?php if ($this->_tpl_vars['currencyConfig'] == 'DKK'): ?>selected="selected"<?php endif; ?>>DKK (Danish Krone)</option>
						<option value="PLN" <?php if ($this->_tpl_vars['currencyConfig'] == 'PLN'): ?>selected="selected"<?php endif; ?>>PLN (Polish Zloty)</option>
						<option value="NOK" <?php if ($this->_tpl_vars['currencyConfig'] == 'NOK'): ?>selected="selected"<?php endif; ?>>NOK (Norwegian Krone)</option>
						<option value="HUF" <?php if ($this->_tpl_vars['currencyConfig'] == 'HUF'): ?>selected="selected"<?php endif; ?>>HUF (Hungarian Forint)</option>
						<option value="CZK" <?php if ($this->_tpl_vars['currencyConfig'] == 'CZK'): ?>selected="selected"<?php endif; ?>>CZK (Czech Koruna)</option>
						<option value="ILS" <?php if ($this->_tpl_vars['currencyConfig'] == 'ILS'): ?>selected="selected"<?php endif; ?>>ILS (Israeli New Shekel)</option>
						<option value="MXN" <?php if ($this->_tpl_vars['currencyConfig'] == 'MXN'): ?>selected="selected"<?php endif; ?>>MXN (Mexican Peso)</option>
						<option value="BRL" <?php if ($this->_tpl_vars['currencyConfig'] == 'BRL'): ?>selected="selected"<?php endif; ?>>BRL (Brazilian Real)</option>
						<option value="MYR" <?php if ($this->_tpl_vars['currencyConfig'] == 'MYR'): ?>selected="selected"<?php endif; ?>>MYR (Malaysian Ringgit)</option>
						<option value="PHP" <?php if ($this->_tpl_vars['currencyConfig'] == 'PHP'): ?>selected="selected"<?php endif; ?>>PHP (Philippine Peso)</option>
						<option value="TWD" <?php if ($this->_tpl_vars['currencyConfig'] == 'TWD'): ?>selected="selected"<?php endif; ?>>TWD (New Taiwan Dollar)</option>
						<option value="THB" <?php if ($this->_tpl_vars['currencyConfig'] == 'THB'): ?>selected="selected"<?php endif; ?>>THB (Thai Baht)</option>
						<option value="TRY" <?php if ($this->_tpl_vars['currencyConfig'] == 'TRY'): ?>selected="selected"<?php endif; ?>>TRY (Turkish Lira)</option>
						<?php $_from = $this->_tpl_vars['additionalCurrencies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['ac']):
        $this->_foreach['loop1']['iteration']++;
?>
							<option value="<?php echo $this->_tpl_vars['ac']['code']; ?>
" <?php if ($this->_tpl_vars['currencyConfig'] == 'TRY'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['ac']['full']; ?>
</option>
							
						<?php endforeach; endif; unset($_from); ?>
					</select>
					<div class="largeSettings"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Currency'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>

				</div>
				<div class="settingsItem settingsToggle first">
					<a id="enableTaxCheckout" <?php if ($this->_tpl_vars['checkout_tax'] == 1): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Enable_Checkout_Tax'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<div class="settingsItem settingsToggle">
					<a id="taxIncludedOrExcluded" <?php if ($this->_tpl_vars['add_tax'] == 0): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Tax_Add_Or_Subtract'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<div class="settingsItem settingsText">
					<a id="changeSalesTax">
						<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sales_Tax'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sales_Tax'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="value" title="<?php echo $this->_tpl_vars['sales_tax']; ?>
"><span class="overflowEllipsis"><?php echo $this->_tpl_vars['sales_tax']; ?>
</span></span>
						<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sales_Tax'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sales_Tax'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					</a>
				</div>
				<div class="settingsItem settingsText ">
					<a id="changeSalesTaxName">
						<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sales_Tax_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sales_Tax_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="value" title="<?php echo $this->_tpl_vars['sales_tax_name']; ?>
"><span class="overflowEllipsis"><?php echo $this->_tpl_vars['sales_tax_name']; ?>
</span></span>
						<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sales_Tax_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Sales_Tax_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					</a>
				</div>
				<div class="settingsItem settingsToggle">
					<a id="enableIndicateTaxNet" <?php if ($this->_tpl_vars['indicate_net'] == 1): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Enable_Indicate_Tax'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<div class="settingsItem settingsToggle">
					<a id="enableShippingTax" <?php if ($this->_tpl_vars['tax_on_shipping'] == 1): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Tax_On_Shipping'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<div class="settingsItem settingsToggle last">
					<a id="enableShowTaxInMini" <?php if ($this->_tpl_vars['show_tax_in_mini'] == 1): ?>class="bpe_current"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_Tax_Mini'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				
				<div class="settingsItem settingsText first">
					<a id="checkoutSuccessPage">
						<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Success_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Success_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="value" title="<?php echo $this->_tpl_vars['return_success_text']; ?>
"><span class="overflowEllipsis"><?php echo $this->_tpl_vars['return_success_text']; ?>
</span></span>
						<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Success_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Success_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					</a>
				</div>

				<div class="settingsItem settingsText last">
					<a id="checkoutFailPage">
						<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Fail_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Fail_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="value" title="<?php echo $this->_tpl_vars['return_fail_text']; ?>
"><span class="overflowEllipsis"><?php echo $this->_tpl_vars['return_fail_text']; ?>
</span></span>
						<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Fail_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Fail_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					</a>
				</div>
				<?php if ($this->_tpl_vars['formOnCheckoutSupport']): ?>
				<div class="settingsItem settingsDropdown first last">
					<div class="smallSettings"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_Form_On_Checkout'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
					<select name="" id="formsListSettings" data-current-form-checkout="<?php echo $this->_tpl_vars['form_on_checkout']; ?>
">

					</select>
					<div class="largeSettings"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Show_Form_On_Checkout'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>

				</div>
				<?php endif; ?>
				<div class="settingsItem settingsLinkToChoices first">
					<a id="orderReceivedTemplate"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Order_Received_Template'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<div class="settingsItem settingsLinkToChoices last">
					<a id="orderDispatchedTemplate"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Order_Dispatched_Template'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
				</div>
				<div class="settingsItem settingsText first">
					<a id="checkoutFromSetting" checkout-from-name="<?php echo ((is_array($_tmp=$this->_tpl_vars['from_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" checkout-from-email="<?php echo ((is_array($_tmp=$this->_tpl_vars['from_email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">
						<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['from_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['from_email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
)"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['from_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['from_email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
)</span></span>
						<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					</a>
				</div>
				<div class="settingsItem settingsText last">
					<a id="checkoutSMTPSetting" checkout-server="<?php echo ((is_array($_tmp=$this->_tpl_vars['smtp_server'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" checkout-username="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" checkout-password="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">
						<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['smtp_server'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['smtp_server'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Settings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					</a>
				</div>

				<?php endif; ?>
				<?php if (count($this->_tpl_vars['allprivs']) > 3): ?> 					<?php if ($this->_tpl_vars['DISABLE_LIVECHAT'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['10'] == 1): ?><?php $this->assign('livechatOk', true); ?><?php endif; ?><?php endif; ?>
				<?php else: ?>
				<?php if ($this->_tpl_vars['DISABLE_LIVECHAT'] == 0): ?><?php $this->assign('livechatOk', true); ?><?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['livechatOk']): ?>

				<p class="settingsGroupHeading"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>

				<div class="settingsItem settingsToggle first">

					<a <?php if ($this->_tpl_vars['livechat_status'] == 'on'): ?>class="bpe_current"<?php endif; ?> id="livechatStatus"><?php echo $this->_tpl_vars['SetSeedLangs']['Livechat_Online']; ?>

	</a>
				</div>
				<div class="settingsItem settingsText">
					<a id="livechatMessage">
						<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat_Welcome_Message'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat_Welcome_Message'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['livechat_message'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['livechat_message'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat_Welcome_Message'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat_Welcome_Message'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					</a>
				</div>
				<div class="settingsItem settingsText last">
					<a id="livechatName">

						<span class="smallSettings"><span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat_Display_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat_Display_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="value" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['livechat_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['livechat_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
						<span class="overflowEllipsis largeSettings" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat_Display_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Livechat_Display_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					</a>
				</div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['theme_options']): ?>
				<div id="themeOptions" class="stopAtTheme">
				<?php $_from = $this->_tpl_vars['theme_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['options'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['options']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['option']):
        $this->_foreach['options']['iteration']++;
?>
					<?php if ($this->_tpl_vars['i'] == 0): ?>
					<?php if ($this->_tpl_vars['option']['type'] != 'title'): ?>
												<p class="settingsGroupHeading"><?php echo $this->_tpl_vars['SetSeedLangs']['Theme_Settings']; ?>
</p>
					<?php endif; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['option']['type'] == 'title'): ?>
						<?php $this->assign('banned', false); ?>
					<?php endif; ?>
					<?php if (( $this->_tpl_vars['option']['require'] == 'PRODUCTS' && $this->_tpl_vars['DISABLE_PRODUCTS'] == 1 || $this->_tpl_vars['option']['require'] == 'BOOKING_PRODUCTS' && $this->_tpl_vars['DISABLE_BOOKINGS'] == 1 || $this->_tpl_vars['option']['require'] == 'VIDEOS' && $this->_tpl_vars['DISABLE_VIDEOS'] == 1 || $this->_tpl_vars['option']['require'] == 'FORMS' && $this->_tpl_vars['DISABLE_FORMS'] == 1 || $this->_tpl_vars['option']['require'] == 'CALENDARS' && $this->_tpl_vars['DISABLE_CALENDARS'] == 1 || $this->_tpl_vars['option']['require'] == 'SNIPPETS' && $this->_tpl_vars['DISABLE_SNIPPETS'] == 1 || $this->_tpl_vars['option']['require'] == 'EMBED_CODES' && $this->_tpl_vars['DISABLE_EMBED_CODES'] == 1 || $this->_tpl_vars['option']['require'] == 'LIVECHAT' && $this->_tpl_vars['DISABLE_LIVECHAT'] == 1 || $this->_tpl_vars['option']['require'] == 'MAILING_LIST' && $this->_tpl_vars['DISABLE_MAILING_LIST'] == 1 || $this->_tpl_vars['option']['require'] == 'BLOG' && $this->_tpl_vars['DISABLE_BLOG'] == 1 ) && $this->_tpl_vars['option']['type'] == 'title'): ?>
							<?php $this->assign('banned', true); ?>
					<?php endif; ?>
					<?php if (( ! $this->_tpl_vars['option']['require'] && $this->_tpl_vars['banned'] == false ) || $this->_tpl_vars['option']['require'] == 'PRODUCTS' && $this->_tpl_vars['DISABLE_PRODUCTS'] == 0 || $this->_tpl_vars['option']['require'] == 'BOOKING_PRODUCTS' && $this->_tpl_vars['DISABLE_BOOKINGS'] == 0 || $this->_tpl_vars['option']['require'] == 'VIDEOS' && $this->_tpl_vars['DISABLE_VIDEOS'] == 0 || $this->_tpl_vars['option']['require'] == 'FORMS' && $this->_tpl_vars['DISABLE_FORMS'] == 0 || $this->_tpl_vars['option']['require'] == 'CALENDARS' && $this->_tpl_vars['DISABLE_CALENDARS'] == 0 || $this->_tpl_vars['option']['require'] == 'SNIPPETS' && $this->_tpl_vars['DISABLE_SNIPPETS'] == 0 || $this->_tpl_vars['option']['require'] == 'EMBED_CODES' && $this->_tpl_vars['DISABLE_EMBED_CODES'] == 0 || $this->_tpl_vars['option']['require'] == 'LIVECHAT' && $this->_tpl_vars['DISABLE_LIVECHAT'] == 0 || $this->_tpl_vars['option']['require'] == 'MAILING_LIST' && $this->_tpl_vars['DISABLE_MAILING_LIST'] == 0 || $this->_tpl_vars['option']['require'] == 'BLOG' && $this->_tpl_vars['DISABLE_BLOG'] == 0): ?>
							<?php $this->assign('next', $this->_tpl_vars['i']+1); ?>
							<?php $this->assign('prev', $this->_tpl_vars['i']-1); ?>
							<?php if ($this->_tpl_vars['option']['type'] == 'string'): ?>
							<div class="settingsItem settingsDropdown <?php if ($this->_tpl_vars['theme_options'][$this->_tpl_vars['next']]['type'] == 'rule' || $this->_tpl_vars['theme_options'][$this->_tpl_vars['next']]['type'] == 'title'): ?>last<?php endif; ?> <?php if ($this->_tpl_vars['theme_options'][$this->_tpl_vars['prev']]['type'] == 'rule' || $this->_tpl_vars['theme_options'][$this->_tpl_vars['prev']]['type'] == 'title'): ?>first<?php endif; ?> <?php if (($this->_foreach['options']['iteration'] == $this->_foreach['options']['total'])): ?>last<?php endif; ?> <?php if (($this->_foreach['options']['iteration'] <= 1)): ?>first<?php endif; ?>">
								<div class="smallSettings"><span class="overflowEllipsis">
									<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['variable_name'])); ?>
									<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
									<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
									<?php echo $this->_tpl_vars['friendlyname']; ?>

									<?php else: ?>
									<?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>

									<?php endif; ?>
								</span></div>
								<select name="<?php echo htmlspecialchars($this->_tpl_vars['option']['variable_name']); ?>
">

										<?php $_from = $this->_tpl_vars['option']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option_item']):
?>
											<option value="<?php echo htmlspecialchars($this->_tpl_vars['option_item']['value']); ?>
" <?php if ($this->_tpl_vars['option_item']['selected'] == 'true'): ?>selected="selected"<?php endif; ?>>
												<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option_item']['value'])); ?>
												<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
												<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
												<?php echo $this->_tpl_vars['friendlyname']; ?>

												<?php else: ?>
													<?php echo htmlspecialchars($this->_tpl_vars['option_item']['display_value']); ?>

												<?php endif; ?>
											</option>
										<?php endforeach; endif; unset($_from); ?>

								</select>
								<div class="largeSettings"><span class="overflowEllipsis">
									<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['variable_name'])); ?>
									<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
									<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
									<?php echo $this->_tpl_vars['friendlyname']; ?>

									<?php else: ?>
									<?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>

									<?php endif; ?>
								</span></div>



							</div>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['option']['type'] == 'string_with_image_previews'): ?>
							<div class="settingsItem settingsDropdownImagePreviews <?php if ($this->_tpl_vars['theme_options'][$this->_tpl_vars['next']]['type'] == 'rule' || $this->_tpl_vars['theme_options'][$this->_tpl_vars['next']]['type'] == 'title'): ?>last<?php endif; ?> <?php if ($this->_tpl_vars['theme_options'][$this->_tpl_vars['prev']]['type'] == 'rule' || $this->_tpl_vars['theme_options'][$this->_tpl_vars['prev']]['type'] == 'title'): ?>first<?php endif; ?> <?php if (($this->_foreach['options']['iteration'] == $this->_foreach['options']['total'])): ?>last<?php endif; ?> <?php if (($this->_foreach['options']['iteration'] <= 1)): ?>first<?php endif; ?>" var-name="<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['variable_name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" display-name="<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['variable_name'])); ?><?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?><?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?><?php echo $this->_tpl_vars['friendlyname']; ?>
<?php else: ?><?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>
<?php endif; ?>" var-value="<?php echo htmlspecialchars($this->_tpl_vars['option']['value']); ?>
">

									<?php $_from = $this->_tpl_vars['option']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option_item']):
?>
										<?php if ($this->_tpl_vars['option_item']['selected'] == 'true'): ?>
											<img src="<?php echo htmlspecialchars($this->_tpl_vars['option_item']['preview_image']); ?>
" class="settingsFlyinThumb"/>
										<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>


								<span class="value" style="margin-right:30px" title="<?php $_from = $this->_tpl_vars['option']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['op'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['op']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option_item']):
        $this->_foreach['op']['iteration']++;
?><?php if ($this->_tpl_vars['option_item']['value'] == $this->_tpl_vars['option']['value']): ?><?php $this->assign('fn', "Custom_".($this->_tpl_vars['option_item']['value'])); ?><?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?><?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?><?php echo $this->_tpl_vars['friendlyname']; ?>
<?php else: ?><?php echo htmlspecialchars($this->_tpl_vars['option_item']['display_value']); ?>
<?php endif; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?>"><span class="overflowEllipsis">
									<?php $_from = $this->_tpl_vars['option']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['op'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['op']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option_item']):
        $this->_foreach['op']['iteration']++;
?>
									<?php if ($this->_tpl_vars['option_item']['value'] == $this->_tpl_vars['option']['value']): ?>
									<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option_item']['value'])); ?>
									<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
									<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
									<?php echo $this->_tpl_vars['friendlyname']; ?>

									<?php else: ?>
										<?php echo htmlspecialchars($this->_tpl_vars['option_item']['display_value']); ?>

									<?php endif; ?>
									<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>
								</span></span>

								<span class="overflowEllipsis">
									<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['variable_name'])); ?>
									<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
									<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
									<?php echo $this->_tpl_vars['friendlyname']; ?>

									<?php else: ?>
									<?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>

									<?php endif; ?>
								</span>
								<div class="imageOptions" style="display:none">
									<?php $_from = $this->_tpl_vars['option']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['op'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['op']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option_item']):
        $this->_foreach['op']['iteration']++;
?>
										<div option-value="<?php echo htmlspecialchars($this->_tpl_vars['option_item']['value']); ?>
" option-display-value="<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option_item']['value'])); ?><?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?><?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?><?php echo $this->_tpl_vars['friendlyname']; ?>
<?php else: ?><?php echo htmlspecialchars($this->_tpl_vars['option_item']['display_value']); ?>
<?php endif; ?>" class="settingsImagePreview <?php if ($this->_tpl_vars['option_item']['selected'] == 'true'): ?>current_image_option<?php endif; ?>">
											<div class="settingsImagePreviewWrap"><img src="<?php echo htmlspecialchars($this->_tpl_vars['option_item']['preview_image']); ?>
" /></div>
											<p>
												<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option_item']['value'])); ?>
												<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
												<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
												<?php echo $this->_tpl_vars['friendlyname']; ?>

												<?php else: ?>
													<?php echo htmlspecialchars($this->_tpl_vars['option_item']['display_value']); ?>

												<?php endif; ?>
											</p>
										</div>
										<?php if ($this->_foreach['op']['iteration']%3 == 0): ?><div class="clear"></div><?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>
								</div>


							</div>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['option']['type'] == 'text'): ?>
								<div class="settingsItem settingsText  <?php if ($this->_tpl_vars['theme_options'][$this->_tpl_vars['next']]['type'] == 'rule' || $this->_tpl_vars['theme_options'][$this->_tpl_vars['next']]['type'] == 'title'): ?>last<?php endif; ?> <?php if ($this->_tpl_vars['theme_options'][$this->_tpl_vars['prev']]['type'] == 'rule' || $this->_tpl_vars['theme_options'][$this->_tpl_vars['prev']]['type'] == 'title'): ?>first<?php endif; ?> <?php if (($this->_foreach['options']['iteration'] == $this->_foreach['options']['total'])): ?>last<?php endif; ?> <?php if (($this->_foreach['options']['iteration'] <= 1)): ?>first<?php endif; ?>">

								<a href="" class="themeOptionText" id="theme_text_<?php echo htmlspecialchars($this->_tpl_vars['option']['variable_name']); ?>
" theme-var-value="<?php echo htmlspecialchars($this->_tpl_vars['option']['value']); ?>
" theme-var-name="<?php echo htmlspecialchars($this->_tpl_vars['option']['variable_name']); ?>
" theme-var-info="<?php echo htmlspecialchars($this->_tpl_vars['option']['info']); ?>
" theme-var-display-name="<?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>
">
									<span class="smallSettings"><span class="overflowEllipsis" title="<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['display_name'])); ?><?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?><?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?><?php echo $this->_tpl_vars['friendlyname']; ?>
<?php else: ?><?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>
<?php endif; ?>"><?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['variable_name'])); ?><?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?><?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?><?php echo $this->_tpl_vars['friendlyname']; ?>
<?php else: ?><?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>
<?php endif; ?></span></span>

									<span class="value" title="<?php echo htmlspecialchars($this->_tpl_vars['option']['value']); ?>
"><span class="overflowEllipsis"><?php echo htmlspecialchars($this->_tpl_vars['option']['value']); ?>
</span></span>

									<span class="overflowEllipsis largeSettings" title="<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['display_name'])); ?><?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?><?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?><?php echo $this->_tpl_vars['friendlyname']; ?>
<?php else: ?><?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>
<?php endif; ?>"><?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['variable_name'])); ?><?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?><?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?><?php echo $this->_tpl_vars['friendlyname']; ?>
<?php else: ?><?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>
<?php endif; ?></span>
								</a>
								</div>

							<?php endif; ?>
							<?php if ($this->_tpl_vars['option']['type'] == 'tick'): ?>
								<div class="settingsItem settingsToggle <?php if ($this->_tpl_vars['theme_options'][$this->_tpl_vars['next']]['type'] == 'rule' || $this->_tpl_vars['theme_options'][$this->_tpl_vars['next']]['type'] == 'title'): ?>last<?php endif; ?> <?php if ($this->_tpl_vars['theme_options'][$this->_tpl_vars['prev']]['type'] == 'rule' || $this->_tpl_vars['theme_options'][$this->_tpl_vars['prev']]['type'] == 'title'): ?>first<?php endif; ?> <?php if (($this->_foreach['options']['iteration'] == $this->_foreach['options']['total'])): ?>last<?php endif; ?> <?php if (($this->_foreach['options']['iteration'] <= 1)): ?>first<?php endif; ?>">

								<a href="" class="themeOptionToggle <?php if ($this->_tpl_vars['option']['value'] == '1'): ?>bpe_current<?php endif; ?>" rel="<?php echo $this->_tpl_vars['option']['variable_name']; ?>
" id="theme_text_<?php echo htmlspecialchars($this->_tpl_vars['option']['variable_name']); ?>
"><span class="overflowEllipsis"><?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['variable_name'])); ?><?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?><?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?><?php echo $this->_tpl_vars['friendlyname']; ?>
<?php else: ?><?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>
<?php endif; ?></span></a>
								</div>

							<?php endif; ?>
							<?php if ($this->_tpl_vars['option']['type'] == 'image' || $this->_tpl_vars['option']['type'] == 'video'): ?>
								<div class="settingsItem settingsImage <?php if ($this->_tpl_vars['theme_options'][$this->_tpl_vars['next']]['type'] == 'rule' || $this->_tpl_vars['theme_options'][$this->_tpl_vars['next']]['type'] == 'title'): ?>last<?php endif; ?> <?php if ($this->_tpl_vars['theme_options'][$this->_tpl_vars['prev']]['type'] == 'rule' || $this->_tpl_vars['theme_options'][$this->_tpl_vars['prev']]['type'] == 'title'): ?>first<?php endif; ?> <?php if (($this->_foreach['options']['iteration'] == $this->_foreach['options']['total'])): ?>last<?php endif; ?> <?php if (($this->_foreach['options']['iteration'] <= 1)): ?>first<?php endif; ?>">

							<a class="themeOptionImage <?php if ($this->_tpl_vars['option']['type'] == 'video'): ?>video<?php endif; ?>" rel="<?php echo htmlspecialchars($this->_tpl_vars['option']['variable_name']); ?>
" id="theme_text_<?php echo htmlspecialchars($this->_tpl_vars['option']['variable_name']); ?>
" value="<?php echo htmlspecialchars($this->_tpl_vars['option']['value']); ?>
"><span class="removeThemeImage" <?php if ($this->_tpl_vars['option']['value'] == ""): ?>style="display:none;"<?php endif; ?>></span>
								<?php if ($this->_tpl_vars['option']['type'] != 'video'): ?>									
									<img src="<?php if ($this->_tpl_vars['option']['value']): ?>/images/themegraphics/<?php echo $this->_tpl_vars['option']['value']; ?>
<?php else: ?>/admin/graphics/themeimageplaceholder.png<?php endif; ?>" class="settingsFlyinThumb <?php if ($this->_tpl_vars['option']['value']): ?>withremove<?php endif; ?>"/>
								<?php endif; ?>

								<span class="overflowEllipsis">
									<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['variable_name'])); ?>
									<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
									<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
									<?php echo $this->_tpl_vars['friendlyname']; ?>

									<?php else: ?>
									<?php echo htmlspecialchars($this->_tpl_vars['option']['display_name']); ?>

									<?php endif; ?>
								</span>
							</a>
							</div>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['option']['type'] == 'title'): ?>
								<p class="settingsGroupHeading <?php if ($this->_tpl_vars['option']['design_mode']): ?>design-mode<?php endif; ?>">
									<?php $this->assign('fn', "Custom_".($this->_tpl_vars['option']['lang_value'])); ?>
									<?php if ($this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]): ?>
									<?php $this->assign('friendlyname', $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['fn']]); ?>
									<?php echo $this->_tpl_vars['friendlyname']; ?>

									<?php else: ?>
									<?php echo htmlspecialchars($this->_tpl_vars['option']['value']); ?>

									<?php endif; ?>
								</p>
							<?php endif; ?>
						<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div id="settingsFlyinInner2">
		<div class="settingsFlyinPadding">
		</div>
	</div>
</div>


<div id="loadingPercent">
	<div id="loadingPercentTrack">
		<div id="loadingPercentBar"></div>
	</div>
</div>
<div id="newlivechatplayer"></div>
<div id="null"></div>
<div id="assetPaneMask"></div>
</div>

<div class="subHeaderLeftMenuItem level2SwitcherMenu">
<div class="triShadow"></div>
<div class="mtri"></div>
</div>
<div id="bookingAvailabilityOuter">
	<div id="bookingAvailability">
		<div id="bookingAvailabilityToolbar" class="greyedOut">
			<div id="bookingAvailabilityToolbarInner">
				<div id="manageRates">Manage Rates</div>

												<div class="bookingAvailabilityTool" id="bookAsCompleteBlock">Only bookable as complete block</div>
			</div>
		</div>
		<div id="bookingAvailabilityInner">

		</div>
		<div id="manageBookingAvailabilityRates">
			<div id="addEditRate" class="clearfix">
				<p id="noRatesMessage">
					Before you can set availability you need to create at least one daily rate.
				</p>
				<h3 id="addRate">
					Add rate
				</h3>
				<h3 id="editRate">
					Manage rates
				</h3>

				<div id="chooseRates">
					<h4 id="addOrEdit">Add new or edit existing rate:</h4>
					<h4 id="editOnly">Edit existing rate:</h4>
					<div id="chooseRatesSelect"></div>
					<div class="hr"></div>
				</div>

				<div class="ratesField clearfix">
				<label>Name</label>
				<input type="text" id="availabilityRateName"/>
				<p class="info">Enter a name for this rate (eg. Normal, Off-Peak, Peak etc), this
				will not be shown to your visitors.</p>

				</div>
				<div class="ratesField clearfix">
				<label id="bookingProdTypeSeatOrSpace">Rate per person per day</label>
				<label id="bookingProdTypeObject">Rate per object per day</label>
				<input type="text" id="availabilityRateNormal" />
				</div>
				<div class="ratesField clearfix">
				<label>Rate per person per day (Children)</label>
				<input type="text" id="availabilityRateNormalChildren" />
				</div>
				<div class="ratesField clearfix">
				<label>Rate per person per day (Concessions)</label>
				<input type="text" id="availabilityRateNormalConcessions" />
				</div>
				<div class="ratesField clearfix">
				<label class="replace-with-space-name" data-original-string="Minimum daily price per  <?php echo '{*}'; ?>
"></label>
				<input type="text" id="availabilityRateNormalMinPerSpace" />
				</div>
				<a href="" id="deleteRate"><?php echo $this->_tpl_vars['SetSeedLangs']['Delete_Rate']; ?>
</a>
				<div class="hr"></div>
				<div id="saveEditRate">Done</div>
				<div id="cancelEditRate">Cancel</div>
			</div>
		</div>
	</div>
</div>

<div id="bookingsOuter">
	<div id="bookings">
		<div id="bookingsToolbar" class="greyedOut">

		</div>
		<div id="bookingsInner">

		</div>
	</div>
</div>

<div id="toolTipEnlarge">
	<img src="/admin/graphics/enlarge.svg">
</div>
<div class="toolTip top_left" id="toolTip">
	<div class="toolTipInner">
		<p id="toolTipText"></p>
		<div class="toolTipRule"></div>
		<div class="toolTipDismiss" id="dismissToolTip"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['OK'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
	</div>
</div>
<div id="error"></div>
<div id="message"></div>
<div id="popupDialogue">
	<div id="popupDialogueMask"></div>
	<div id="popupDialogueWrap">
		<div id="popupDialogueInner" class="clearfix">
			<div id="popupDialogueContent"></div>
			<div id="insertInteralLinks">
				<div id='popupInsertLinkToPage'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Link_To_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
				<div id='popupInsertLinkToFile'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Insert_Link_To_File'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
				<div class="mtri"></div>
			</div>
			<div class="clear"></div>
			<div id="popupDialogueField"><textarea rows="1" cols="50"></textarea></div>
			<div id="linkOpensInNewWindow">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Link_Opens_In_New_Window'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

			</div>
			
			<div id="popupDialogueFieldQuickAddImageCategory">
				<div class="dialogueCheckboxes">
					<label><input type="checkbox" id="quickAddImageGallery"/><?php echo $this->_tpl_vars['SetSeedLangs']['Create_Gallery_From_Cat']; ?>
</label>
				</div>
			</div>
			
			<div id="popupDialogueFieldMailingListSend">
				<p id="listSize"><?php echo $this->_tpl_vars['SetSeedLangs']['Mailing_List_Status_Recipients']; ?>
: <span></span></p>
				<div id="mailingListSentToCategories">
					<p><strong><?php echo $this->_tpl_vars['SetSeedLangs']['Only_Send_To_Cats']; ?>
</strong></p>
					<label><input type="checkbox" checked="checked" id="onlySendToCatsAll"/><?php echo $this->_tpl_vars['SetSeedLangs']['All']; ?>
</label>
					<div class="bpe_rule"></div>
					<div id="sendToCategories"></div>
					<div class="bpe_rule"></div>
					<label><input type="checkbox" id="onlySendMatchAll"/><?php echo $this->_tpl_vars['SetSeedLangs']['Match_All_Selected']; ?>
</label>
				</div>
				<div id="sendingToMultipleListsMessage">
				<?php echo $this->_tpl_vars['SetSeedLangs']['Sending_To_Multiple_Lists']; ?>

				</div>
				<div class="imageContextualEdit">
					<div class='imageContextEditFieldset showingLabel' id="sendMailingListSubject">
						<div class='imageContextEditLabel'><span><?php echo htmlspecialchars($this->_tpl_vars['SetSeedLangs']['Mailing_List_Subject']); ?>
</span></div>
						<div class='imageContextEditInputWrap'>
							<textarea title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Mailing_List_Subject'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' name='subject' id="sendMailingListSubjectInput"></textarea>
						</div>
					</div>
				</div>

				<p><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Send_To_Mailing_List_Info_Content'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>


				<a id="changeMailingListPageContent" class="popupDialogueChooser empty"><span id="selectedMailingListPage" page-id=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Choose_page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a>
			</div>
			<div id="popupDialogueChangeFormAutoresponder">

				<div class="imageContextualEdit">
					<div class='imageContextEditFieldset showingLabel' id="sendFormAutoresponderSubject">
						<div class='imageContextEditLabel'><span><?php echo htmlspecialchars($this->_tpl_vars['SetSeedLangs']['Mailing_List_Subject']); ?>
</span></div>
						<div class='imageContextEditInputWrap'>
							<textarea title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Mailing_List_Subject'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' name='subject' id="formAutoresponderSubjectInput"></textarea>
						</div>
					</div>
				</div>

				<p><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Autoresponder_Info_Content'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>


				<a id="changeFormAutoresponderContent" class="popupDialogueChooser empty"><span id="selectedFormAutoresponderPage" page-id=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Choose_page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a>
			</div>
			<div id="popupDialogueChangeMailingListAutoresponder">

				<div class="imageContextualEdit">
					<div class='imageContextEditFieldset showingLabel' id="sendMailingListAutoresponderSubject">
						<div class='imageContextEditLabel'><span><?php echo htmlspecialchars($this->_tpl_vars['SetSeedLangs']['Mailing_List_Subject']); ?>
</span></div>
						<div class='imageContextEditInputWrap'>
							<textarea title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Mailing_List_Subject'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' name='subject' id="mailingListAutoresponderSubjectInput"></textarea>
						</div>
					</div>
				</div>

				<p><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Autoresponder_Info_Content'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>


				<a id="changeMailingListAutoresponderContent" class="popupDialogueChooser empty"><span id="selectedMailingListAutoresponderPage" page-id=""><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Choose_page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a>
			</div>
			<div id="popupDialogueFieldPassword">
				<p><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Email_Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>
				<div class='imageContextualEdit'>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'><span id="accountEmail"><?php echo htmlspecialchars($this->_tpl_vars['account_email']); ?>
</span></div>
						<div class='imageContextEditInputWrap'>
							<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='email' />
						</div>
					</div>
				</div>
				<?php if (count($this->_tpl_vars['allprivs']) > 3): ?>
					<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><?php if ($this->_tpl_vars['allprivs']['3'] == 1): ?><div id="receiveStockAlerts" <?php if ($this->_tpl_vars['receive_stock_alerts']): ?>class="checked"<?php endif; ?>>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Receive_Stock_Alerts'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div><?php endif; ?><?php endif; ?>
					
				<?php else: ?>

					<?php if ($this->_tpl_vars['DISABLE_PRODUCTS'] == 0): ?><div id="receiveStockAlerts" <?php if ($this->_tpl_vars['receive_stock_alerts']): ?>class="checked"<?php endif; ?>>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Receive_Stock_Alerts'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</div><?php endif; ?>
					
				<?php endif; ?>
				
				<p><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Password_Text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</p>
				<div class='imageContextualEdit'>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Current_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class='imageContextEditInputWrap'>
							<input type='password' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Current_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='old_password' />
						</div>
					</div>
				</div>
				<div class='imageContextualEdit'>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class='imageContextEditInputWrap'>
							<input type='password' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='password' />
						</div>
					</div>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Password_Again'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class='imageContextEditInputWrap'>
							<input type='password' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Password_Again'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='password2' />
						</div>
					</div>
				</div>
			</div>
			<div id="popupDialogueFieldPasswordStaff">


				<div class='imageContextualEdit'>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class='imageContextEditInputWrap'>
							<input type='password' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='password' />
						</div>
					</div>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Password_Again'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
						<div class='imageContextEditInputWrap'>
							<input type='password' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Password_Again'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='password2' />
						</div>
					</div>
				</div>
			</div>
				<div id="popupDialogueFrom">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupFromName">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='from_name' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupFromEmail">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['From_Email'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='from_email' />
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueSMTP">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupSMTPServer">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Server'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Server'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='smtp_server' />
							</div>
						</div>
					</div>
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupSMTPUsername">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Username'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Username'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='smtp_username' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupSMTPPassword">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='password' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['SMTP_Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='smtp_password' />
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueSecurity">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupSecurityUsername">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Username'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Username'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='username' />
							</div>
						</div>
					</div>
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupSecurityPass1">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='password' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Password'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='password' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupSecurityPass2">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Password_Again'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='password' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Password_Again'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='password2' />
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueMailTemplate">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupMailTemplateSubject">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Subject'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Subject'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='subject' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupMailTemplateMessage">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Message'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<textarea title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Message'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='message' ></textarea>
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueImportSubscribers">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupImportSubscribersCSV">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Subscribers_CSV'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<textarea title='' class='toggleLabelValue imageContextInput' value='' name='message' ></textarea>
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueImportEvents">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupImportEventsCSV">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Events_CSV'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<textarea title='' class='toggleLabelValue imageContextInput' value='' name='message' ></textarea>
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueProductVolumeDiscount">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupVolumeDiscountPrice">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupVolumeDiscountThreshold">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Quantity_Discount_Threshold'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Quantity_Discount_Threshold'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='' />
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueProductShippingVolumeDiscount">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupShippingVolumeDiscountPrice">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Shipping_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Price'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupShippingVolumeDiscountThreshold">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Quantity_Discount_Threshold'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Quantity_Discount_Threshold'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
' class='toggleLabelValue imageContextInput' value='' name='' />
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueTableData">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupDialogueTableDataCSV">
							<div class='imageContextEditLabel'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Table_CSV'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class='imageContextEditInputWrap'>
								<textarea title='' class='toggleLabelValue imageContextInput' value='' name='message' ></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="popupDialogueContentPrimary"><div></div></div>
			<div id="popupDialogueContentSecondary"><div></div></div>
		</div>
	</div>
</div>
<input type="hidden" name="order_sent_email_subject" value="<?php echo $this->_tpl_vars['order_sent_email_subject']; ?>
" id="order_sent_email_subject"/>
<input type="hidden" name="order_sent_email" value="<?php echo $this->_tpl_vars['order_sent_email']; ?>
" id="order_sent_email"/>
<input type="hidden" name="order_received_email_subject" value="<?php echo $this->_tpl_vars['order_received_email_subject']; ?>
" id="order_received_email_subject" />
<input type="hidden" name="order_received_email" id="order_received_email" value="<?php echo $this->_tpl_vars['order_received_email']; ?>
" />
<textarea id="cutCopyPasteCapture"> </textarea>
<div id="livechatFloater">
	<div id="livechatFloaterHeader">
		<div id="closeLivechatFloater"></div>
	</div>
	<div id="livechatiframewrap">
	<iframe id="livechatiframe"></iframe>
	</div>
</div>
<div id="loadingPNGWrap">
<div class="spinner">
  <div class="dot1"></div>
  <div class="dot2"></div>
</div>
</div> <!-- end #loadingPNGWrap -->
</div>
<div id="videoPlayer">
	<div id="videoPlayerInner">
		<div id="helpVideoPlayer"></div>
	</div>
</div>
<div id="choose_fb_page">
	
	<div id="choose_fb_page_inner">
	<h3><?php echo $this->_tpl_vars['SetSeedLangs']['Choose_Facebook_Account']; ?>
</h3>	
	</div>
</div>
<input type="hidden" id="session" value="<?php echo $this->_tpl_vars['token']; ?>
" />
</body>
</html>