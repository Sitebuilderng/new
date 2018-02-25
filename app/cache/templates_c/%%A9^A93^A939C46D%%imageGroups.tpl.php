<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:45
         compiled from admin/views/pages/imageGroups.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'admin/views/pages/imageGroups.tpl', 2, false),array('modifier', 'htmlentities', 'admin/views/pages/imageGroups.tpl', 2, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['subCatLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['subCatLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['subCat']):
        $this->_foreach['subCatLoop']['iteration']++;
?>
<li><a href="#" images-category-id="<?php echo $this->_tpl_vars['subCat']['id']; ?>
" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['subCat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="<?php echo $this->_tpl_vars['subCat']['id']; ?>
" class="bpe_selection_tool greyedOut"><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['subCat']['name'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</span></a></li>
<?php endforeach; endif; unset($_from); ?>