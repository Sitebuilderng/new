<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:45
         compiled from admin/views/calendar/categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'array_reverse', 'admin/views/calendar/categories.tpl', 10, false),array('modifier', 'htmlspecialchars', 'admin/views/calendar/categories.tpl', 11, false),)), $this); ?>

<div class="dropzone"><div></div></div>

<?php if ($this->_tpl_vars['calCats']): ?>
<?php $_from = array_reverse($this->_tpl_vars['calCats']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['calCat']):
        $this->_foreach['loop1']['iteration']++;
?>
	<div class="dropship_component_item responsiveListItem calendarItem" id="calCat-<?php echo $this->_tpl_vars['calCat']['id']; ?>
" rel="<?php echo $this->_tpl_vars['calCat']['id']; ?>
" title="<?php echo htmlspecialchars($this->_tpl_vars['calCat']['name']); ?>
">
		<span class="overflowEllipsis"><?php echo htmlspecialchars($this->_tpl_vars['calCat']['name']); ?>
</span>
	</div>
<div class="dropzone"><div></div></div>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>



<div class="noPages" <?php if ($this->_tpl_vars['calCats']): ?>style="display:none;"<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['No_Calendars']; ?>
</div>
