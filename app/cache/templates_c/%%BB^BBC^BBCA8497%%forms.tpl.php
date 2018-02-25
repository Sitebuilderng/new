<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:49
         compiled from views/forms/forms.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'views/forms/forms.tpl', 10, false),array('modifier', 'htmlspecialchars', 'views/forms/forms.tpl', 13, false),)), $this); ?>

<span class='noPages' <?php if ($this->_tpl_vars['forms']): ?>style='display:none'<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['No_Forms_Added']; ?>
</span>
<?php if (count($this->_tpl_vars['forms']) > 0): ?>
<div class="dropzone"><div></div></div>
<?php $_from = $this->_tpl_vars['forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['formloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['formloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['form']):
        $this->_foreach['formloop']['iteration']++;
?>
<div class="bpe_menu_sub responsiveListItem formItem dropship_component_item"  rel="<?php echo htmlspecialchars($this->_tpl_vars['form']['name']); ?>
" id="form<?php echo $this->_tpl_vars['form']['id']; ?>
" form-id="<?php echo $this->_tpl_vars['form']['id']; ?>
" data-destination="<?php echo htmlspecialchars($this->_tpl_vars['form']['destination']); ?>
" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-autoresponder-id="<?php echo $this->_tpl_vars['form']['autoresponder_id']; ?>
" data-autoresponder-title="<?php echo $this->_tpl_vars['form']['autoresponder_page_title']; ?>
" data-autoresponder-subject="<?php echo $this->_tpl_vars['form']['autoresponder_subject']; ?>
" data-redirect-on-send="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['redirect_on_send'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-newsletter-id="<?php echo $this->_tpl_vars['form']['add_to_newsletter_id']; ?>
">
	<div class="menu_with_options menu_hidden_extras bpe_menu_sub_item2 <?php if ($this->_tpl_vars['form']['show'] == 'yes'): ?>bpe_sub_hilite2<?php endif; ?>">
		<span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
	<div class='bpe_menu_sub_items2 bpe_wide menuScroll'>
		<div class='bpe_menu_top'>
			<div class='bpe_menu_bottom'>				
				<div class="formInputs">
					
					<?php if (! $this->_tpl_vars['form']['inputs']): ?><span class='noPages'><?php echo $this->_tpl_vars['SetSeedLangs']['No_Fields_Added']; ?>
</span><?php endif; ?>
						<div class="sortable" id="formFields-<?php echo $this->_tpl_vars['form']['id']; ?>
">
							<div class="dropzone"><div></div></div>
							
						<?php $_from = $this->_tpl_vars['form']['inputs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>

							<div class="responsiveListItem formInputItem <?php if ($this->_tpl_vars['item']['type'] == 'radiogroup' || $this->_tpl_vars['item']['type'] == 'select'): ?>withOptions<?php endif; ?>" id="input-<?php echo $this->_tpl_vars['item']['id']; ?>
" input-id="<?php echo $this->_tpl_vars['item']['id']; ?>
" rel="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['label'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-input-type="<?php if ($this->_tpl_vars['item']['date']): ?>date<?php else: ?><?php echo $this->_tpl_vars['item']['type']; ?>
<?php endif; ?>" data-input-required="<?php echo $this->_tpl_vars['item']['required']; ?>
" data-input-width="<?php echo $this->_tpl_vars['item']['width']; ?>
">
										<span class="itemTag">
										<?php if ($this->_tpl_vars['item']['type'] == 'name'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Name']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'hr'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_HR']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'clear'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_New_Row']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'email'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Email']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'phone'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Phone']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['date']): ?>
										<?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Date']; ?>

										<?php else: ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'short'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Short']; ?>
<?php endif; ?>
										<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'long'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Long']; ?>
<?php endif; ?>

										<?php if ($this->_tpl_vars['item']['type'] == 'checkbox'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Checkbox']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'select'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Dropdown']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'radiogroup'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Radio']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'heading'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Heading']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'text'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Text']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['item']['type'] == 'file'): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_File']; ?>
<?php endif; ?>
										</span>
																<div class="inputOptions">
									
									<div class="optionSortable" id="options-<?php echo $this->_tpl_vars['item']['id']; ?>
">
										<?php if (! $this->_tpl_vars['item']['options']): ?><span class="noPages"><?php echo $this->_tpl_vars['SetSeedLangs']['No_Field_Options_Added']; ?>
</span><?php endif; ?>
										<div class="dropzone"><div></div></div>
										
										<?php $_from = $this->_tpl_vars['item']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
											<div class="responsiveListItem optionItem" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">												
												<span class='overflowEllipsis'><?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
											</div>
											<div class="dropzone"><div></div></div>
										<?php endforeach; endif; unset($_from); ?>
									</div>
									<div class="hideOnReset addOptionForm responsiveListAddForm showAtBottom" action="" method="post" id="<?php echo $this->_tpl_vars['item']['id']; ?>
" style="display:none">
										<div class="imageContextEditFieldset">
											<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Option_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
											<div class="imageContextEditInputWrap"><textarea type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""></textarea></div>
										</div>
										<input type="hidden" name="formid" value="<?php echo $this->_tpl_vars['form']['id']; ?>
" class="formid"/>
										
									</div>
								</div>
																
								
								<span class='overflowEllipsis'><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['label'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<span <?php if ($this->_tpl_vars['item']['required'] != 'yes'): ?>style="display:none;"<?php endif; ?> class="responsiveListItemInfo asterix">*</span></span>


								
						</div>
						
						<div class="responsiveListAddForm inline renameFieldForm" id="renameFieldForm<?php echo $this->_tpl_vars['form']['id']; ?>
<?php echo $this->_tpl_vars['item']['id']; ?>
form" action="" method="post" rel="<?php echo $this->_tpl_vars['item']['id']; ?>
" style="display:none">
							<input type="hidden" name="formid" value="<?php echo $this->_tpl_vars['form']['id']; ?>
" class="formid"/>
							<input type="text" name="" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['label'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" class="renameFieldInput focus"	/>
						</div>

						<div class="dropzone"><div></div></div>
						
					<?php endforeach; endif; unset($_from); ?>
					<form action="/admin/formsActions.php" method="post" style="display:none" class="hideOnReset addInputForm responsiveListAddForm showAtBottom" id="addInputForm<?php echo $this->_tpl_vars['form']['id']; ?>
form">
						<div class="imageContextEditFieldset">
							<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Input_Label'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
							<div class="imageContextEditInputWrap"><input type="text" name="label" id="selectOption<?php echo $this->_tpl_vars['form']['id']; ?>
label" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
						</div>
						<input type="hidden" name="formsAction" value="addInput"/>
						<input type="hidden" name="order" value="<?php if ($this->_tpl_vars['form']['inputs']): ?><?php echo $this->_tpl_vars['item']['order']+10; ?>
<?php else: ?>10<?php endif; ?>" style="width:40px"/>
						<input type="hidden" name="belongs_to_form" value="<?php echo $this->_tpl_vars['form']['id']; ?>
" class="selectedForm"/>
					</form>
					<?php if ($this->_tpl_vars['form']['inputs']): ?>
										<?php endif; ?>
					</div>

					
				</div>
					<div class="bpe_rule"></div>
				<a href="" class="toggleChangeDestinationForm" id="changeDestination-<?php echo $this->_tpl_vars['form']['id']; ?>
"><span class="key" style="max-width:280px;text-align:right;"><?php if ($this->_tpl_vars['form']['destination'] != ""): ?><?php echo $this->_tpl_vars['form']['destination']; ?>
<?php else: ?>No recipient specified yet<?php endif; ?></span>Email recipient</a>	
							</div>
		</div>
	</div>
	</div>
<div class="dropzone"><div></div></div>

<?php endforeach; endif; unset($_from); ?>

<?php endif; ?>