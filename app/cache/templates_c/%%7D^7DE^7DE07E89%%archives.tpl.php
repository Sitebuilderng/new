<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:50
         compiled from views/livechat/archives.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'views/livechat/archives.tpl', 2, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['livechatarchives']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
	<a livechat-href="/livechat/chat-save.php?saves=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['filename'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">
	<?php echo $this->_tpl_vars['item']['date']; ?>
 <?php echo $this->_tpl_vars['item']['time']; ?>
 - IP: <?php echo $this->_tpl_vars['item']['ip']; ?>
</a>
<?php endforeach; endif; unset($_from); ?>