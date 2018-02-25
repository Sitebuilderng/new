<?php /* Smarty version 2.6.18, created on 2018-02-17 15:49:24
         compiled from views/pages/pageRow.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'views/pages/pageRow.tpl', 6, false),)), $this); ?>
<div class="responsiveListItem clearfix <?php if (! $this->_tpl_vars['page']['okperms']): ?>notokperms<?php endif; ?> <?php if ($this->_tpl_vars['breadcrumb']): ?>notDraggable breadcrumbPage<?php endif; ?> menu_with_options editPageBar menu_hidden_extras<?php if ($this->_tpl_vars['page']['live'] != 'yes'): ?> offline<?php endif; ?> <?php if (! $this->_tpl_vars['master'] && $this->_tpl_vars['priv_pages'] == '0' && $this->_tpl_vars['page']['live'] == 'yes'): ?>notEditable<?php endif; ?> <?php if ($this->_tpl_vars['page']['subs'] != ""): ?>hasSubs<?php else: ?>noSubs<?php endif; ?> <?php if ($this->_tpl_vars['page']['security'] != ""): ?>hasSecurity<?php endif; ?> type_<?php echo $this->_tpl_vars['page']['type']; ?>
 <?php if ($this->_tpl_vars['page']['exclude'] == '1'): ?>excluded<?php endif; ?>" data-redirect-first="<?php echo $this->_tpl_vars['page']['redirect_first']; ?>
" data-excluded="<?php echo $this->_tpl_vars['page']['exclude']; ?>
" id="<?php echo $this->_tpl_vars['page']['draftId']; ?>
" data-static-pages-versions-id="<?php echo $this->_tpl_vars['page']['static_pages_versions_id']; ?>
" rel="<?php echo $this->_tpl_vars['page']['id']; ?>
" title="<?php echo htmlspecialchars($this->_tpl_vars['page']['pagetitle']); ?>
" alt="<?php echo $this->_tpl_vars['page']['fullURL']; ?>
" data-security="<?php if ($this->_tpl_vars['page']['security'] == ""): ?>public<?php else: ?><?php echo $this->_tpl_vars['page']['security']; ?>
<?php endif; ?>" data-pane-status="<?php if ($this->_tpl_vars['page']['live'] == 'yes'): ?>live<?php else: ?>offline<?php endif; ?>" data-lang="<?php echo $this->_tpl_vars['page']['language']; ?>
" data-view-sub-data="<?php if ($this->_tpl_vars['page']['type'] == 'topLevel'): ?><?php echo $this->_tpl_vars['page']['id']; ?>
|subLevel<?php endif; ?><?php if ($this->_tpl_vars['page']['type'] == 'subLevel'): ?><?php echo $this->_tpl_vars['page']['id']; ?>
|subSubLevel<?php endif; ?><?php if ($this->_tpl_vars['page']['type'] == 'subSubLevel'): ?><?php echo $this->_tpl_vars['page']['id']; ?>
|subSubSubLevel<?php endif; ?>" data-redirect-url="<?php echo $this->_tpl_vars['page']['redirect_url']; ?>
" data-page-redirect-to="<?php if ($this->_tpl_vars['page']['redirect_url'] != ''): ?>yes<?php endif; ?>" data-new-window="<?php echo $this->_tpl_vars['page']['new_window']; ?>
" data-permissions="<?php echo $this->_tpl_vars['page']['permissions_csv']; ?>
" data-ok-perms="<?php echo $this->_tpl_vars['page']['okperms']; ?>
" data-noindex="<?php echo $this->_tpl_vars['page']['noindex']; ?>
">
	
	<span class="responsiveListItemPadlock" style="<?php if ($this->_tpl_vars['page']['security'] != ""): ?>display:block;<?php else: ?>display:none;<?php endif; ?>"></span>
	<?php $this->assign('svgDown', "<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
	 viewBox=\"0 0 800 600\" enable-background=\"new 0 0 800 600\" xml:space=\"preserve\">
<circle cx=\"292.079\" cy=\"201.479\" r=\"36.612\"/>
<circle cx=\"292.079\" cy=\"287.479\" r=\"36.612\"/>
<circle cx=\"292.079\" cy=\"373.288\" r=\"36.612\"/>
<circle cx=\"381.079\" cy=\"373.288\" r=\"36.612\"/>
<polygon points=\"544.538,373.094 438.229,434.73 438.006,311.845 \"/>
</svg>
"); ?>
	
	<?php $this->assign('svgUp', "<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 800 600\" enable-background=\"new 0 0 800 600\" xml:space=\"preserve\">
<circle cx=\"507.926\" cy=\"398.118\" r=\"36.612\"/>
<circle cx=\"507.926\" cy=\"312.118\" r=\"36.612\"/>
<circle cx=\"507.926\" cy=\"226.309\" r=\"36.612\"/>
<circle cx=\"418.926\" cy=\"226.309\" r=\"36.612\"/>
<polygon points=\"255.467,226.503 361.777,164.866 362,287.752 \"/>
</svg>
"); ?>
		

		<?php if ($this->_tpl_vars['breadcrumb']): ?>
		<?php if ($this->_tpl_vars['page']['type'] == 'topLevel'): ?>
		<div class="showSubPages backToMainPages upLevel" id="<?php echo $this->_tpl_vars['page']['id']; ?>
|" title="<?php echo $this->_tpl_vars['SetSeedLangs']['Back']; ?>
"><?php echo $this->_tpl_vars['svgUp']; ?>
</div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['page']['type'] == 'subLevel'): ?>
		<div class="showSubPages upLevel" id="<?php echo $this->_tpl_vars['page']['parent']; ?>
|subLevel" title="<?php echo $this->_tpl_vars['SetSeedLangs']['Back']; ?>
"><?php echo $this->_tpl_vars['svgUp']; ?>
</div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['page']['type'] == 'subSubLevel'): ?>
		<div class="showSubPages upLevel" id="<?php echo $this->_tpl_vars['page']['parent']; ?>
|subSubLevel" title="<?php echo $this->_tpl_vars['SetSeedLangs']['Back']; ?>
"><?php echo $this->_tpl_vars['svgUp']; ?>
</div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['page']['type'] == 'subSubSubLevel'): ?>
		<div class="showSubPages upLevel" id="<?php echo $this->_tpl_vars['page']['parent']; ?>
|subSubSubLevel" title="<?php echo $this->_tpl_vars['SetSeedLangs']['Back']; ?>
"><?php echo $this->_tpl_vars['svgUp']; ?>
</div>
		<?php endif; ?>
	<?php else: ?>

		<?php if ($this->_tpl_vars['page']['type'] == 'topLevel' && $this->_tpl_vars['page']['subs'] != 0): ?>
		<div class="showSubPages<?php if ($this->_tpl_vars['page']['subs'] == ""): ?> hideInLight<?php endif; ?>" id="<?php echo $this->_tpl_vars['page']['id']; ?>
|subLevel" title="<?php echo $this->_tpl_vars['SetSeedLangs']['View_Add_Subpages']; ?>
"><?php echo $this->_tpl_vars['svgDown']; ?>
<?php if ($this->_tpl_vars['page']['subs'] != ""): ?>
	<span class="responsiveListItemInfo"><?php echo $this->_tpl_vars['page']['subs']; ?>
</span>
	<?php endif; ?></div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['page']['type'] == 'subLevel' && $this->_tpl_vars['page']['subs'] != 0): ?>
		<div class="showSubPages<?php if ($this->_tpl_vars['page']['subs'] == ""): ?> hideInLight<?php endif; ?>" id="<?php echo $this->_tpl_vars['page']['id']; ?>
|subSubLevel" title="<?php echo $this->_tpl_vars['SetSeedLangs']['View_Add_Subpages']; ?>
"><?php echo $this->_tpl_vars['svgDown']; ?>
<?php if ($this->_tpl_vars['page']['subs'] != ""): ?>
	<span class="responsiveListItemInfo"><?php echo $this->_tpl_vars['page']['subs']; ?>
</span>
	<?php endif; ?></div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['page']['type'] == 'subSubLevel' && $this->_tpl_vars['page']['subs'] != 0): ?>
		<div class="showSubPages<?php if ($this->_tpl_vars['page']['subs'] == ""): ?> hideInLight<?php endif; ?>" id="<?php echo $this->_tpl_vars['page']['id']; ?>
|subSubSubLevel" title="<?php echo $this->_tpl_vars['SetSeedLangs']['View_Add_Subpages']; ?>
"><?php echo $this->_tpl_vars['svgDown']; ?>
<?php if ($this->_tpl_vars['page']['subs'] != ""): ?>
	<span class="responsiveListItemInfo"><?php echo $this->_tpl_vars['page']['subs']; ?>
</span>
	<?php endif; ?></div>
		<?php endif; ?>
	<?php endif; ?>
		<?php if ($this->_tpl_vars['page']['homepage'] == 'yes'): ?>
		<div class="homepage"></div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['page']['live'] != 'yes'): ?><span class='responsiveListItemInfo offlineLabel'><?php echo $this->_tpl_vars['SetSeedLangs']['Offline']; ?>
</span><?php endif; ?>
		
										<?php if ($this->_tpl_vars['page']['picUrl'] != ""): ?>
		<div class="responsiveListItemImage" <?php if ($this->_tpl_vars['page']['picUrl'] != ""): ?>style="background: url('<?php echo $this->_tpl_vars['page']['picUrl']; ?>
?width=100&amp;height=100&amp;shrink=false') 50% 50% no-repeat;background-size:50px 50px;"<?php endif; ?>>
			<?php if ($this->_tpl_vars['page']['picUrl'] == ""): ?>
			<?php if ($this->_tpl_vars['type'] == 'main'): ?><span class="pagesIcon"></span><?php endif; ?>
			<?php if ($this->_tpl_vars['type'] == 'sub'): ?><span class="pagesIcon"></span><?php endif; ?>
			<?php if ($this->_tpl_vars['type'] == 'subSubLevel'): ?><span class="pagesIcon"></span><?php endif; ?>
			<?php if ($this->_tpl_vars['type'] == 'nonlinker'): ?><span class="separatePagesIcon"></span><?php endif; ?>
			<?php endif; ?>
			</div>
		<?php endif; ?>
									<span class="overflowEllipsis"><?php echo htmlspecialchars($this->_tpl_vars['page']['pagetitle']); ?>
</span>
			<?php $_from = $this->_tpl_vars['page']['permissions_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['grp']):
?> 
				<input type="hidden" id="pagepermissiongroup<?php echo $this->_tpl_vars['grp']; ?>
" value="<?php echo $this->_tpl_vars['grp']; ?>
"/>
			<?php endforeach; endif; unset($_from); ?>
		

</div>
<?php if (! $this->_tpl_vars['breadcrumb']): ?>
<div class="dropzone"><div></div></div>
<?php endif; ?>