<?php /* Smarty version 2.6.18, created on 2018-02-17 15:49:24
         compiled from views/pages/pagesFilter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'views/pages/pagesFilter.tpl', 4, false),array('modifier', 'count', 'views/pages/pagesFilter.tpl', 60, false),)), $this); ?>
<div class="topBar">
	<div class="returnToLP"></div>
	<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
	<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Pages'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h1>
</div>
<div class="cleverFilterBar clearfix">
	

	<div class="subHeaderLeftMenuItem hideInLight">
			<div class="target" id="pagesContextMenu">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

			</div>
			<div class="triShadow"></div>
			<ul class="contextMenu">
				<li><a id="iconbarCutPages" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['X'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Cut'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>		</li>
		<li><a id="iconbarCopyPages" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['C'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Copy'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
		<li><a id="iconbarPastePages" class="<?php if (! $this->_tpl_vars['pagesInClipboard']): ?>greyedOut <?php endif; ?>"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['V'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Paste'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
				<li class='iconbarRule'></li>
		<li><a id="iconbarSelectAllPages"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
		<li><a id="iconbarDeselectAllPages"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
			</ul> 
			<div class="mtri"></div>
		</div>	
	
	<div class="subHeaderLeftMenuItem right">
		<div class="target">
			<svg class="searchSVG <?php if ($this->_tpl_vars['filterSearch']): ?>searching<?php endif; ?>" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
				<path d="M618.852,511.613c17.607,22.912,13.308,55.759-9.604,73.367l0,0c-22.912,17.606-55.76,13.306-73.367-9.606L375.36,366.49
		c-17.607-22.912-13.307-55.759,9.605-73.367l0,0c22.912-17.607,55.759-13.306,73.367,9.606L618.852,511.613z"/>
				<path d="M364.907,17.917C257.967-2.391,154.813,67.838,134.505,174.777s49.921,210.094,156.86,230.401
				c106.939,20.308,210.095-49.92,230.401-156.86C542.075,141.379,471.847,38.225,364.907,17.917z M425.232,229.986
				c-10.184,53.625-61.91,88.841-115.535,78.657c-53.625-10.183-88.841-61.909-78.658-115.534
				c10.184-53.624,61.911-88.841,115.535-78.658C400.199,124.635,435.416,176.362,425.232,229.986z"/>
			</svg>
		</div>
		<div class="triShadow"></div>
		<ul>
			<form action="" method="" class="filterBox">
				
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Search'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
					<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus pageFilterSearch" value="<?php if ($this->_tpl_vars['filterSearch']): ?><?php echo $this->_tpl_vars['filterSearch']; ?>
<?php endif; ?>" /></div>
				</div>
				<div class="sendMe"></div>
				<?php if ($this->_tpl_vars['filterSearch']): ?>
				<span class="clearSearch"></span>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['filter']): ?><input type="hidden" name="filter" value="<?php echo $this->_tpl_vars['filter']; ?>
" id="filter"/><?php endif; ?>
				<div class="clear"><!-- --></div>
			</form>
		</ul> 
		<div class="mtri"></div>
	</div>	

	<?php if ($this->_tpl_vars['type'] == ""): ?>
		
		<div class="subHeaderLeftMenuItem right " id="adminPagesLangFilter" <?php if (count($this->_tpl_vars['languages']) == 1): ?>style="display:none"<?php endif; ?>>
			<div class="target notTooLong">
				<?php if (! $this->_tpl_vars['filter']): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Language'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				<?php else: ?>
				<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
				<?php if ($this->_tpl_vars['filter'] == $this->_tpl_vars['item']['abr']): ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			</div>
			<div class="triShadow"></div>
			<ul id="pagesFilter">
				<li><a href="" class="filterLink <?php if (! $this->_tpl_vars['filter']): ?>bpe_current<?php endif; ?> showAll" id="" data-item-value=""><span><?php echo $this->_tpl_vars['SetSeedLangs']['All']; ?>
</span></a></li>
				<div id="pagesFilterToUpdate">
				<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
				<li><a href="" class="filterBy filterLink <?php if ($this->_tpl_vars['filter'] == $this->_tpl_vars['item']['abr']): ?>bpe_current<?php endif; ?>" data-item-value="<?php echo $this->_tpl_vars['item']['abr']; ?>
" id="<?php echo $this->_tpl_vars['item']['abr']; ?>
"><span><?php echo $this->_tpl_vars['item']['name']; ?>
</span></a>	</li>
				<?php endforeach; endif; unset($_from); ?>
				</div>
			</ul> 
			<div class="mtri"></div>
		</div>	


	<?php endif; ?>
	<?php if ($this->_tpl_vars['deletedPages']): ?>
	<div class="subHeaderLeftMenuItem right hideInLight">
			<div class="target">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Trash'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

			</div>
			<div class="triShadow"></div>
			
		<ul id="deletedPages">	
		<?php if ($this->_tpl_vars['deletedPages']): ?>
		<?php $_from = $this->_tpl_vars['deletedPages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['deletedPage']):
        $this->_foreach['loop1']['iteration']++;
?>
			<li><a href="<?php echo $this->_tpl_vars['deletedPage']['id']; ?>
"><span class="overflowEllipsis"><?php echo htmlspecialchars($this->_tpl_vars['deletedPage']['pagetitle']); ?>
</span>  </a></li>
		<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
		<li><a class="greyedOut"><?php echo $this->_tpl_vars['SetSeedLangs']['Not_Deleted_Pages']; ?>
</a></li>
		<?php endif; ?>


	
			</ul>
		
			<div class="mtri"></div>
		</div>	
<?php endif; ?>

		
		<div class="subHeaderButton primaryItem hideInLight" id="iconbarAddPage">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['New_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

		</div>


		
	</div>