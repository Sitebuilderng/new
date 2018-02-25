<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:45
         compiled from admin/views/embed/embedcodes.tpl */ ?>
<div class="dropzone"><div></div></div>
<?php $_from = $this->_tpl_vars['embedCodes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['embedCode']):
        $this->_foreach['loop1']['iteration']++;
?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/views/embed/embedcodeitem.tpl", 'smarty_include_vars' => array('embedCode' => $this->_tpl_vars['embedCode'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; endif; unset($_from); ?>
<div class="noPages"<?php if ($this->_tpl_vars['embedCodes']): ?> style="display:none;"<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['No_Embed_Codes']; ?>
</div>
<?php if ($this->_tpl_vars['embedCodes']): ?>
<?php endif; ?>