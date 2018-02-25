<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:45
         compiled from admin/views/media/playlists.tpl */ ?>
	
<?php $_from = $this->_tpl_vars['playlists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ply'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ply']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['playlist']):
        $this->_foreach['ply']['iteration']++;
?>
	<div class="dropzone"></div>
	<?php $_from = $this->_tpl_vars['playlist']['media_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['media_item']):
?>
		<div class="addVideoItem responsiveListItem" id="<?php echo $this->_tpl_vars['media_item']['filename']; ?>
||**||<?php echo $this->_tpl_vars['media_item']['thumbnail']; ?>
" media-id="<?php echo $this->_tpl_vars['media_item']['id']; ?>
" playlist-id="<?php echo $this->_tpl_vars['playlist']['id']; ?>
" data-src="<?php echo $this->_tpl_vars['media_item']['filename']; ?>
" data-thumb="<?php if ($this->_tpl_vars['media_item']['thumbnail'] == ""): ?>/graphics/play.jpg<?php else: ?><?php echo $this->_tpl_vars['media_item']['thumbnail']; ?>
<?php endif; ?>">
						<?php if ($this->_tpl_vars['media_item']['thumbnail'] == ""): ?> 
						 <div class="responsiveListItemImage" style="background: url('/graphics/play.jpg') 50% 50% no-repeat;background-size:70px;"></div>


			<?php else: ?>
						 <div class="responsiveListItemImage" style="background: url('<?php echo $this->_tpl_vars['media_item']['thumbnail']; ?>
?width=100&amp;height=100&amp;shrink=false') 50% 50% no-repeat;background-size:50px 50px;"></div>
			<?php endif; ?>
			<span class="overflowEllipsis"><?php echo $this->_tpl_vars['media_item']['title']; ?>
</span>

		</div>
	<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<span class='noPages' <?php if ($this->_tpl_vars['playlists']): ?>style="display:none"<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['No_Videos_Added']; ?>
</span>