<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:49
         compiled from views/galleries/galleries.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'views/galleries/galleries.tpl', 14, false),)), $this); ?>

<div class="dropzone"><div></div></div>
<span <?php if ($this->_tpl_vars['galleries']): ?>style="display:none;"<?php endif; ?> class='noPages'><?php echo $this->_tpl_vars['SetSeedLangs']['No_Galleries']; ?>
</span>

<?php $_from = $this->_tpl_vars['galleries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['gallery']):
        $this->_foreach['loop1']['iteration']++;
?>
<div class="bpe_menu_sub responsiveListItem galleryItem <?php if ($this->_tpl_vars['gallery']['dynamic'] == 1): ?>dynamic<?php endif; ?>" rel="<?php echo htmlspecialchars($this->_tpl_vars['gallery']['name']); ?>
" id="gal<?php echo $this->_tpl_vars['gallery']['id']; ?>
" gallery-id="<?php echo $this->_tpl_vars['gallery']['id']; ?>
" data-gallery-style="<?php echo ((is_array($_tmp=$this->_tpl_vars['gallery']['style'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-name="<?php echo htmlspecialchars($this->_tpl_vars['gallery']['name']); ?>
" data-images-from-categories="<?php echo $this->_tpl_vars['gallery']['from_image_tags']; ?>
" data-dynamic="<?php echo $this->_tpl_vars['gallery']['dynamic']; ?>
">
				<?php $_from = $this->_tpl_vars['gallery']['from_image_tags_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['grp']):
?> 
					<input type="hidden" id="tagingal<?php echo $this->_tpl_vars['grp']; ?>
" value="<?php echo $this->_tpl_vars['grp']; ?>
"/>
				<?php endforeach; endif; unset($_from); ?>
 		<div class="menu_with_options menu_hidden_extras bpe_menu_sub_item2 <?php if ($this->_tpl_vars['gallery']['show'] == 'yes'): ?>bpe_sub_hilite2<?php endif; ?>">
	<span class="overflowEllipsis" title="<?php echo htmlspecialchars($this->_tpl_vars['gallery']['name']); ?>
"><?php echo htmlspecialchars($this->_tpl_vars['gallery']['name']); ?>
</span></div>
		<div class='galleryImages'>
											<div class="dropzone"><div></div></div>
					
						<?php if (! $this->_tpl_vars['gallery']['images']): ?><span class='noPages'><?php echo $this->_tpl_vars['SetSeedLangs']['No_Images_Added']; ?>
</span><?php endif; ?>
							<?php $_from = $this->_tpl_vars['gallery']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['thumb']):
        $this->_foreach['loop2']['iteration']++;
?>
								<div class="responsiveListItem galleryThumb" id="galleryThumb-<?php echo $this->_tpl_vars['thumb']['id']; ?>
" gallery-image-id="<?php echo $this->_tpl_vars['thumb']['id']; ?>
" title="<?php echo htmlspecialchars($this->_tpl_vars['thumb']['filename']); ?>
" name="<?php echo htmlspecialchars($this->_tpl_vars['thumb']['caption']); ?>
">
																		 <div class="responsiveListItemImage" style="background: url('/images/galleries/thumbs/<?php echo htmlspecialchars($this->_tpl_vars['thumb']['filename']); ?>
?width=100&amp;height=100&amp;shrink=false&d=<?php echo time(); ?>
') 50% 50% no-repeat;background-size:50px 50px;"></div>
									 	<span class="overflowEllipsis"><?php echo htmlspecialchars($this->_tpl_vars['thumb']['caption']); ?>
</span>
									 																	<input type="hidden" name="" value="<?php echo $this->_tpl_vars['gallery']['id']; ?>
" class="galid"/>
								<input type="hidden" name="" value="<?php echo $this->_tpl_vars['thumb']['id']; ?>
" class="thumbid"/>
							</div>
														<div class="dropzone <?php if (!($this->_foreach['loop2']['iteration']+1 % 5)): ?>fifth<?php endif; ?> <?php if (!($this->_foreach['loop2']['iteration']+1 % 4)): ?>fourth<?php endif; ?> <?php if (!($this->_foreach['loop2']['iteration']+1 % 3)): ?>third<?php endif; ?> <?php if (!($this->_foreach['loop2']['iteration']+1 % 2)): ?>second<?php endif; ?>"><div></div></div>
							
						<?php endforeach; endif; unset($_from); ?>
						<?php if ($this->_tpl_vars['gallery']['images']): ?>
												<?php endif; ?>

						
				</div>
			</div>
		</div>
		</div>
<div class="dropzone"><div></div></div>
<?php endforeach; endif; unset($_from); ?>