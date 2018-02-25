<?php /* Smarty version 2.6.18, created on 2018-02-17 15:49:24
         compiled from views/pages/pages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'views/pages/pages.tpl', 86, false),array('modifier', 'htmlspecialchars', 'views/pages/pages.tpl', 88, false),array('function', 'counter', 'views/pages/pages.tpl', 158, false),)), $this); ?>

<?php if ($this->_tpl_vars['showingMore']): ?>
	<?php if ($this->_tpl_vars['type'] == 'nonLinking'): ?>
		<?php unset($this->_sections['nonLinker']);
$this->_sections['nonLinker']['name'] = 'nonLinker';
$this->_sections['nonLinker']['loop'] = is_array($_loop=$this->_tpl_vars['nonLinkers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nonLinker']['show'] = true;
$this->_sections['nonLinker']['max'] = $this->_sections['nonLinker']['loop'];
$this->_sections['nonLinker']['step'] = 1;
$this->_sections['nonLinker']['start'] = $this->_sections['nonLinker']['step'] > 0 ? 0 : $this->_sections['nonLinker']['loop']-1;
if ($this->_sections['nonLinker']['show']) {
    $this->_sections['nonLinker']['total'] = $this->_sections['nonLinker']['loop'];
    if ($this->_sections['nonLinker']['total'] == 0)
        $this->_sections['nonLinker']['show'] = false;
} else
    $this->_sections['nonLinker']['total'] = 0;
if ($this->_sections['nonLinker']['show']):

            for ($this->_sections['nonLinker']['index'] = $this->_sections['nonLinker']['start'], $this->_sections['nonLinker']['iteration'] = 1;
                 $this->_sections['nonLinker']['iteration'] <= $this->_sections['nonLinker']['total'];
                 $this->_sections['nonLinker']['index'] += $this->_sections['nonLinker']['step'], $this->_sections['nonLinker']['iteration']++):
$this->_sections['nonLinker']['rownum'] = $this->_sections['nonLinker']['iteration'];
$this->_sections['nonLinker']['index_prev'] = $this->_sections['nonLinker']['index'] - $this->_sections['nonLinker']['step'];
$this->_sections['nonLinker']['index_next'] = $this->_sections['nonLinker']['index'] + $this->_sections['nonLinker']['step'];
$this->_sections['nonLinker']['first']      = ($this->_sections['nonLinker']['iteration'] == 1);
$this->_sections['nonLinker']['last']       = ($this->_sections['nonLinker']['iteration'] == $this->_sections['nonLinker']['total']);
?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/pageRow.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['nonLinkers'][$this->_sections['nonLinker']['index']],'type' => 'nonlinker','languages' => $this->_tpl_vars['languages'],'iteration' => $this->_sections['nonLinker']['iteration'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endfor; endif; ?>
	<?php else: ?>		
		<?php $this->assign('dragBelow', false); ?>
		<?php unset($this->_sections['pages']);
$this->_sections['pages']['name'] = 'pages';
$this->_sections['pages']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pages']['show'] = true;
$this->_sections['pages']['max'] = $this->_sections['pages']['loop'];
$this->_sections['pages']['step'] = 1;
$this->_sections['pages']['start'] = $this->_sections['pages']['step'] > 0 ? 0 : $this->_sections['pages']['loop']-1;
if ($this->_sections['pages']['show']) {
    $this->_sections['pages']['total'] = $this->_sections['pages']['loop'];
    if ($this->_sections['pages']['total'] == 0)
        $this->_sections['pages']['show'] = false;
} else
    $this->_sections['pages']['total'] = 0;
if ($this->_sections['pages']['show']):

            for ($this->_sections['pages']['index'] = $this->_sections['pages']['start'], $this->_sections['pages']['iteration'] = 1;
                 $this->_sections['pages']['iteration'] <= $this->_sections['pages']['total'];
                 $this->_sections['pages']['index'] += $this->_sections['pages']['step'], $this->_sections['pages']['iteration']++):
$this->_sections['pages']['rownum'] = $this->_sections['pages']['iteration'];
$this->_sections['pages']['index_prev'] = $this->_sections['pages']['index'] - $this->_sections['pages']['step'];
$this->_sections['pages']['index_next'] = $this->_sections['pages']['index'] + $this->_sections['pages']['step'];
$this->_sections['pages']['first']      = ($this->_sections['pages']['iteration'] == 1);
$this->_sections['pages']['last']       = ($this->_sections['pages']['iteration'] == $this->_sections['pages']['total']);
?>
	
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/pageRow.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['pages'][$this->_sections['pages']['index']],'type' => 'main','languages' => $this->_tpl_vars['languages'],'iteration' => $this->_sections['pages']['iteration'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endfor; endif; ?>
			<?php endif; ?>
<?php else: ?>

		
	<?php if ($this->_tpl_vars['type'] != 'nonLinking'): ?>
	
	
	<div id="mainMenuPagesMain" class="paneContents">
		
		
		<div class="topLevelSortable" rel="<?php echo $this->_tpl_vars['pages'][0]['order']; ?>
">
			
			
			
			
			
			<?php if ($this->_tpl_vars['type'] != 'nonLinking'): ?>
			<div class="movePageDestinaiton" id="<?php echo $this->_tpl_vars['type']; ?>
|<?php echo $this->_tpl_vars['viewingSubs']; ?>
">
				<div></div>
			</div>
			<div class="copyPageDestinaiton" id="<?php echo $this->_tpl_vars['type']; ?>
|<?php echo $this->_tpl_vars['viewingSubs']; ?>
">
				<div></div>
			</div>
			
			
			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/pagesFilter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

			<div class="pagesScroll ">
				

				
				

				<div class="insertTarget">	
				<?php if ($this->_tpl_vars['type'] == 'subLevel'): ?>
				<div class="fakeDropzone"></div>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/pageRow.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['parent'],'type' => 'main','languages' => $this->_tpl_vars['languages'],'iteration' => 1,'breadcrumb' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['type'] == 'subSubLevel'): ?>
				<div class="fakeDropzone"></div>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/pageRow.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['top_parent'],'type' => 'main','languages' => $this->_tpl_vars['languages'],'iteration' => 1,'breadcrumb' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<div class="fakeDropzone"></div>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/pageRow.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['parent'],'type' => 'main','languages' => $this->_tpl_vars['languages'],'iteration' => 1,'breadcrumb' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['type'] == 'subSubSubLevel'): ?>
					<div class="fakeDropzone"></div>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/pageRow.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['top_parent'],'type' => 'main','languages' => $this->_tpl_vars['languages'],'iteration' => 1,'breadcrumb' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<div class="fakeDropzone"></div>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/pageRow.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['sub_parent'],'type' => 'main','languages' => $this->_tpl_vars['languages'],'iteration' => 1,'breadcrumb' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<div class="fakeDropzone"></div>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/pageRow.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['parent'],'type' => 'main','languages' => $this->_tpl_vars['languages'],'iteration' => 1,'breadcrumb' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
				<?php if (count($this->_tpl_vars['pages']) == 0): ?>
				<?php if ($this->_tpl_vars['filterSearch']): ?>
					<span class='noPages type_<?php echo $this->_tpl_vars['type']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['No_Pages_Found_Searching'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
				<?php else: ?>
					<?php if ($this->_tpl_vars['type'] == ""): ?>
					<span class='noPages type_<?php echo $this->_tpl_vars['type']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['No_Pages_Found'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
					<?php endif; ?>
				<?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['type'] == 'subLevel'): ?>
				<form action="pageActions.php" method="post" id="subPage-<?php echo $this->_tpl_vars['viewingSubs']; ?>
form"
				 class="hideInLight hideOnReset subPageForm responsiveListAddForm type_<?php echo $this->_tpl_vars['type']; ?>
" style="display:none;margin-top:22px;" >
					<div class="hideInLight">
						<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Page_Title']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>
					<input type="hidden" name="pageAction" value="addPage"/>
					<input type="hidden" name="type" value="subLevel"/>
					<input type="hidden" name="parent" value="<?php echo $this->_tpl_vars['viewingSubs']; ?>
"/>

					</div>
				</form>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['type'] == 'subSubLevel'): ?>
				<form action="pageActions.php" method="post" id="subSubPage-<?php echo $this->_tpl_vars['viewingSubs']; ?>
form" class="hideInLight type_<?php echo $this->_tpl_vars['type']; ?>
 subSubPageForm responsiveListAddForm hideOnReset" style="display:none;margin-top:22px;">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Page_Title']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

					<input type="hidden" name="pageAction" value="addPage"/>
					<input type="hidden" name="type" value="subSubLevel"/>
					<input type="hidden" name="parent" value="<?php echo $this->_tpl_vars['viewingSubs']; ?>
"/>

				</form>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['type'] == 'subSubSubLevel'): ?>
				
				<form action="pageActions.php" method="post" id="subSubSubPage-<?php echo $this->_tpl_vars['viewingSubs']; ?>
form"  class="hideInLight subSubSubPageForm responsiveListAddForm type_<?php echo $this->_tpl_vars['type']; ?>
 hideOnReset" style="display:none;margin-top:22px;">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Page_Title']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

					<input type="hidden" name="pageAction" value="addPage"/>
					<input type="hidden" name="type" value="subSubSubLevel"/>
					<input type="hidden" name="parent" value="<?php echo $this->_tpl_vars['viewingSubs']; ?>
"/>
					

				</form>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['type'] == ""): ?>
				<form action="pageActions.php" method="post" id="addTopLevelForm" class="hideInLight responsiveListAddForm hideOnReset" style="display:none">
					
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Page_Title']; ?>
</div>
						<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

					 <input type="hidden" name="pageAction" value="addPage"/>
					<input type="hidden" name="type" value="topLevel"/>
					<?php if ($this->_tpl_vars['filter']): ?>
					<input type="hidden" name="language" value="<?php echo $this->_tpl_vars['filter']; ?>
"/>
					<?php endif; ?>
				</form>
				<?php endif; ?>



				<div class="dropzone"><div></div></div>
				<?php $this->assign('dragBelow', false); ?>
				<?php echo smarty_function_counter(array('assign' => 'includedItems'), $this);?>

				<?php unset($this->_sections['pages']);
$this->_sections['pages']['name'] = 'pages';
$this->_sections['pages']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pages']['show'] = true;
$this->_sections['pages']['max'] = $this->_sections['pages']['loop'];
$this->_sections['pages']['step'] = 1;
$this->_sections['pages']['start'] = $this->_sections['pages']['step'] > 0 ? 0 : $this->_sections['pages']['loop']-1;
if ($this->_sections['pages']['show']) {
    $this->_sections['pages']['total'] = $this->_sections['pages']['loop'];
    if ($this->_sections['pages']['total'] == 0)
        $this->_sections['pages']['show'] = false;
} else
    $this->_sections['pages']['total'] = 0;
if ($this->_sections['pages']['show']):

            for ($this->_sections['pages']['index'] = $this->_sections['pages']['start'], $this->_sections['pages']['iteration'] = 1;
                 $this->_sections['pages']['iteration'] <= $this->_sections['pages']['total'];
                 $this->_sections['pages']['index'] += $this->_sections['pages']['step'], $this->_sections['pages']['iteration']++):
$this->_sections['pages']['rownum'] = $this->_sections['pages']['iteration'];
$this->_sections['pages']['index_prev'] = $this->_sections['pages']['index'] - $this->_sections['pages']['step'];
$this->_sections['pages']['index_next'] = $this->_sections['pages']['index'] + $this->_sections['pages']['step'];
$this->_sections['pages']['first']      = ($this->_sections['pages']['iteration'] == 1);
$this->_sections['pages']['last']       = ($this->_sections['pages']['iteration'] == $this->_sections['pages']['total']);
?>
				<?php if ($this->_tpl_vars['pages'][$this->_sections['pages']['index']]['exclude'] == '1' && $this->_tpl_vars['dragBelow'] == false): ?>
					<?php if ($this->_tpl_vars['includedItems'] == 0): ?>
					<div class="dropzone hideInLight"><div></div></div>
					<?php endif; ?>
					<?php $this->assign('dragBelow', true); ?>
									<?php endif; ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/pageRow.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['pages'][$this->_sections['pages']['index']],'type' => 'main','languages' => $this->_tpl_vars['languages'],'iteration' => $this->_sections['pages']['iteration'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php echo smarty_function_counter(array(), $this);?>

				<?php endfor; endif; ?>
				<?php if ($this->_tpl_vars['dragBelow'] == false): ?>
				<?php if ($this->_tpl_vars['type'] == ""): ?>
				<?php if (count($this->_tpl_vars['pages']) != 0): ?>
								<?php endif; ?>
				<?php endif; ?>
				<?php endif; ?>
							<div class="clear insertNewItemsBefore"></div>
							<a href="50" class="showMoreItems"></a>

					
							
					
				</div>
			</div>
			<div class="fakePagesScroll"></div>
		</div>
	
	<div class="paneTools">
		
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/pages/paneTools.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<div class="disabledMask"></div>
	</div>
	</div>
	<?php endif; ?>
	
<?php endif; ?>
