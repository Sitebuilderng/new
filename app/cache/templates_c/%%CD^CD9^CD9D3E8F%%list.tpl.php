<?php /* Smarty version 2.6.18, created on 2018-02-20 08:27:17
         compiled from admin/views/snippets/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'admin/views/snippets/list.tpl', 72, false),)), $this); ?>
<?php if (! $this->_tpl_vars['snippetsInPane']): ?>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['init']): ?>
<div class="filterBox clearfix dropshipToolbar">
	<div class="toolbarFilter clearfix">

	<input type="text" class="searchList" value="<?php if ($this->_tpl_vars['snippetsFilterSearch']): ?><?php echo $this->_tpl_vars['snippetsFilterSearch']; ?>
<?php else: ?>Search<?php endif; ?>" target="snippetsWrapper" alt="snippetsActions.php?snippetsAction=search&string="/>

	<?php if ($this->_tpl_vars['snippetsFilterSearch']): ?>
	<img src="/admin/graphics/bpeditor/remove_menu_item_off.png" class="clearSearch" id='clearSearch'/>
	<?php endif; ?>

		</div>
		</div>
<?php endif; ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['searching']): ?>
<div class="dropzone"><div></div></div>
<?php endif; ?>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['searching']): ?>
<div class="noPages" <?php if ($this->_tpl_vars['snippets']): ?>style="display:none"<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['No_Snippets']; ?>
</div>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['snippets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
	<div class="snippetItem responsiveListItem dropship_component_item" id="<?php echo $this->_tpl_vars['item']['draftId']; ?>
" alt="<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-snippet-categories="<?php echo $this->_tpl_vars['item']['snippetCatsCSV']; ?>
" snippet-id="<?php echo $this->_tpl_vars['item']['id']; ?>
">
				<span class="overflowEllipsis" title="<?php echo htmlspecialchars($this->_tpl_vars['item']['name']); ?>
"><?php echo htmlspecialchars($this->_tpl_vars['item']['name']); ?>
</span>
		<?php $_from = $this->_tpl_vars['item']['snippetCats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
?>
			<input type="hidden" id="snipcat<?php echo $this->_tpl_vars['cat']; ?>
" value="<?php echo $this->_tpl_vars['cat']; ?>
"/>
		<?php endforeach; endif; unset($_from); ?>
	</div>
<div class="dropzone"><div></div></div>
<?php endforeach; endif; unset($_from); ?>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['searching']): ?>
<div class="clear insertNewItemsBefore"></div>
<a href="50" class="showMoreItems">Show more images</a>
<?php endif; ?>
<?php if ($this->_tpl_vars['snippets']): ?><?php endif; ?>
<?php if (! $this->_tpl_vars['ajax']): ?>
<div id="snippetCatsMenuList" style="display:none">
		<div class="responsiveListAddForm addSnippetCategory hideOnReset" style="display:none">
	<div class="imageContextEditFieldset">
		<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Snippet_Category_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
	</div>

	</div>
</div>
<?php endif; ?>