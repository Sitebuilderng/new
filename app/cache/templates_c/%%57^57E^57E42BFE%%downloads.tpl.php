<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:45
         compiled from admin/views/pages/downloads.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'admin/views/pages/downloads.tpl', 21, false),array('modifier', 'rawurlencode', 'admin/views/pages/downloads.tpl', 74, false),array('modifier', 'count', 'admin/views/pages/downloads.tpl', 82, false),)), $this); ?>
<?php if (! $this->_tpl_vars['ajax']): ?>
<div class="cleverFilterBar">
		
		<div class="subHeaderLeftMenuItem hideInLight">
			<div class="target filesContextMenu">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

			</div>
			<div class="triShadow"></div>
			<ul class="contextMenu">
								<li><a class="iconbarSelectAllFiles"><span class="key hideIfTouch"><span class="mod"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['A'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Select_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
				<li><a class="iconbarDeselectAllFiles"><span class='key hideIfTouch'><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Esc'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Deselect_All'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
			</ul> 
			<div class="mtri"></div>
		</div>


		<div class="subHeaderLeftMenuItem right ">
			<div class="target">
				<svg class="searchSVG <?php if ($this->_tpl_vars['searchDownloads']): ?>searching<?php endif; ?>" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
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
						<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="<?php if ($this->_tpl_vars['searchDownloads']): ?><?php echo $this->_tpl_vars['searchDownloads']; ?>
<?php endif; ?>" alt="pageActions.php?pageAction=showMoreFiles&start=0&search=" target="downloads"/></div>
					</div>
					<div class="sendMe"></div>
					
					<span class="clearSearch" href="pageActions.php?pageAction=showMoreFiles&search=&start=0" style="<?php if (! $this->_tpl_vars['searchDownloads']): ?>display:none<?php endif; ?>"></span>
					
					<div class="clear"><!-- --></div>
				</form>
			</ul> 
			<div class="mtri"></div>
		</div>	
		<div class="uploadFile subHeaderButton primaryItem"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Upload_New_File'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		
	
</div>
<div class="pagesScroll">
	<div class="insertTarget">
	<div class="dropzone"><div></div></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['firstSearch']): ?>
<div class="dropzone"><div></div></div>
<?php endif; ?>
<?php unset($this->_sections['loop1']);
$this->_sections['loop1']['loop'] = is_array($_loop=$this->_tpl_vars['fileList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop1']['name'] = 'loop1';
$this->_sections['loop1']['show'] = true;
$this->_sections['loop1']['max'] = $this->_sections['loop1']['loop'];
$this->_sections['loop1']['step'] = 1;
$this->_sections['loop1']['start'] = $this->_sections['loop1']['step'] > 0 ? 0 : $this->_sections['loop1']['loop']-1;
if ($this->_sections['loop1']['show']) {
    $this->_sections['loop1']['total'] = $this->_sections['loop1']['loop'];
    if ($this->_sections['loop1']['total'] == 0)
        $this->_sections['loop1']['show'] = false;
} else
    $this->_sections['loop1']['total'] = 0;
if ($this->_sections['loop1']['show']):

            for ($this->_sections['loop1']['index'] = $this->_sections['loop1']['start'], $this->_sections['loop1']['iteration'] = 1;
                 $this->_sections['loop1']['iteration'] <= $this->_sections['loop1']['total'];
                 $this->_sections['loop1']['index'] += $this->_sections['loop1']['step'], $this->_sections['loop1']['iteration']++):
$this->_sections['loop1']['rownum'] = $this->_sections['loop1']['iteration'];
$this->_sections['loop1']['index_prev'] = $this->_sections['loop1']['index'] - $this->_sections['loop1']['step'];
$this->_sections['loop1']['index_next'] = $this->_sections['loop1']['index'] + $this->_sections['loop1']['step'];
$this->_sections['loop1']['first']      = ($this->_sections['loop1']['iteration'] == 1);
$this->_sections['loop1']['last']       = ($this->_sections['loop1']['iteration'] == $this->_sections['loop1']['total']);
?>
	<div alt="/downloads/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fileList'][$this->_sections['loop1']['index']][0])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('rawurlencode', true, $_tmp) : rawurlencode($_tmp)); ?>
" class="responsiveListItem menu_hidden_extras menu_with_options downloadableFile" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['fileList'][$this->_sections['loop1']['index']][0])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-url="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fileList'][$this->_sections['loop1']['index']][0])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('rawurlencode', true, $_tmp) : rawurlencode($_tmp)); ?>
">
				<span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['fileList'][$this->_sections['loop1']['index']][0])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></div>
	<div class="dropzone"><div></div></div>
	
<?php endfor; endif; ?>
<?php if (count($this->_tpl_vars['fileList']) == 0): ?>
<?php if (! $this->_tpl_vars['ajax']): ?>
<div class="noPages"><?php echo $this->_tpl_vars['SetSeedLangs']['No_Files_Added']; ?>
</div>
<?php endif; ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['searchDownloads']): ?>
<div class="clear insertNewItemsBefore"></div>

<a alt="pageActions.php?pageAction=showMoreFiles&search=<?php echo $this->_tpl_vars['searchDownloads']; ?>
&start=" id="50" class="showMoreItems" href="50"></a>

</div>
<?php endif; ?>
<?php if (! $this->_tpl_vars['ajax']): ?>
</div>
<?php endif; ?>