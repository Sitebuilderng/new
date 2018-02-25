<?php /* Smarty version 2.6.18, created on 2018-02-17 15:49:24
         compiled from views/pages/paneTools.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'views/pages/paneTools.tpl', 3, false),array('modifier', 'count', 'views/pages/paneTools.tpl', 74, false),array('modifier', 'in_array', 'views/pages/paneTools.tpl', 81, false),)), $this); ?>
<div class="paneToolsButtonRow">
	<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicatePages">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Duplicate'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

	</div>
	<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeletePages">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Delete'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

	</div>
</div>
<div class="paneToolsPrimary">
	<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Edit_Content'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

</div>
<div class="paneToolsPrimary secondaryAction addSubpagePT">
	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
<circle cx="292.079" cy="201.479" r="36.612"/>
<circle cx="292.079" cy="287.479" r="36.612"/>
<circle cx="292.079" cy="373.288" r="36.612"/>
<circle cx="381.079" cy="373.288" r="36.612"/>
<polygon points="544.538,373.094 438.229,434.73 438.006,311.845 "/>
</svg>
	<span id="addSubpageText">
	<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Subpage'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

	</span>
	<span id="viewAddSubpageText" style="display:none">
	<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['View_Add_Subpages'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

	</span>
</div>

<?php if ($this->_tpl_vars['allprivs']['0'] == 1 || $this->_tpl_vars['master']): ?>
<div class="stylesHeading">
	<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Status'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
</div>			
<div class="subHeaderLeftMenuItem" data-test-value="data-pane-status">
	<div class="target">
		
	</div>
	<div class="triShadow"></div>
	<ul>
		<li><a id="makeOnline" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Live'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="live"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['L'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Live'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
		<li><a id="makeOffline" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Offline'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="offline"><span class="key hideIfTouch"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['O'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Offline'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
	</ul> 
	<div class="mtri"></div>
</div>	
<?php endif; ?>
<div class="stylesHeading">
	<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Security'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
</div>
<div class="subHeaderLeftMenuItem" data-test-value="data-security" data-test-type="csv">
	<div class="target">
		
	</div>
	<div class="triShadow"></div>
	<ul>
		<li><a id="public" rel="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Public'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="public"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Public'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a></li>
		<div id="groupList"></div>
		<li class="iconbarRule"></li>
		<li><a id="addAccessGroup" href="<?php echo $this->_tpl_vars['accessGroupSalt']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Add_Access_Groups'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
&hellip;</a></li>

	</ul> 
	<div class="mtri"></div>
</div>	
<?php if ($this->_tpl_vars['type'] == ""): ?>
<?php if ($this->_tpl_vars['includedFrontEndLangs']): ?>
<div class="stylesHeading">
	<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Language'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
</div>			
<div class="subHeaderLeftMenuItem" data-test-value="data-lang">
	<div class="target">
		
	</div>
	<div class="triShadow"></div>
	<ul id="changeAddLanguage">
		<div id="languagesWrapper">
		<?php if (count($this->_tpl_vars['languages']) > 0): ?>
		<?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['languages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['show'] = true;
$this->_sections['x']['max'] = $this->_sections['x']['loop'];
$this->_sections['x']['step'] = 1;
$this->_sections['x']['start'] = $this->_sections['x']['step'] > 0 ? 0 : $this->_sections['x']['loop']-1;
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = $this->_sections['x']['loop'];
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?>
		<li><a data-lang="<?php echo $this->_tpl_vars['languages'][$this->_sections['x']['index']]['name']; ?>
" data-item-value="<?php echo $this->_tpl_vars['languages'][$this->_sections['x']['index']]['abr']; ?>
" fakehref="<?php echo $this->_tpl_vars['languages'][$this->_sections['x']['index']]['abr']; ?>
" class="changeLanguage dontIncludeInPreview"><?php echo $this->_tpl_vars['languages'][$this->_sections['x']['index']]['name']; ?>
</a></li>
		<?php endfor; endif; ?>
		<?php endif; ?>
		</div>
		<li class="iconbarRule"></li>
		<?php if (((is_array($_tmp='ab')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Abkhazian" fakehref="Abkhazian|ab" data-item-value="ab">Abkhazian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='aa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Afar" fakehref="Afar|aa" data-item-value="aa">Afar</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='af')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Afrikaans" fakehref="Afrikaans|af" data-item-value="af">Afrikaans</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ak')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Akan" fakehref="Akan|ak" data-item-value="ak">Akan</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sq')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Albanian" fakehref="Albanian|sq" data-item-value="sq">Albanian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='am')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Amharic" fakehref="Amharic|am" data-item-value="am">Amharic</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ar')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Arabic" fakehref="Arabic|ar" data-item-value="ar">Arabic</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='an')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Aragonese" fakehref="Aragonese|an" data-item-value="an">Aragonese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='hy')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Armenian" fakehref="Armenian|hy" data-item-value="hy">Armenian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='as')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Assamese" fakehref="Assamese|as" data-item-value="as">Assamese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='av')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Avaric" fakehref="Avaric|av" data-item-value="av">Avaric</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ae')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Avestan" fakehref="Avestan|ae" data-item-value="ae">Avestan</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ay')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Aymara" fakehref="Aymara|ay" data-item-value="ay">Aymara</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='az')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Azerbaijani" fakehref="Azerbaijani|az" data-item-value="az">Azerbaijani</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='bm')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Bambara" fakehref="Bambara|bm" data-item-value="bm">Bambara</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ba')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Bashkir" fakehref="Bashkir|ba" data-item-value="ba">Bashkir</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='eu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Basque" fakehref="Basque|eu" data-item-value="eu">Basque</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='be')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Belarusian" fakehref="Belarusian|be" data-item-value="be">Belarusian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp="")) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Bengali" fakehref="Bengali|bn" data-item-value="bn">Bengali</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='bh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Bihari" fakehref="Bihari|bh" data-item-value="bh">Bihari</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='bi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Bislama" fakehref="Bislama|bi" data-item-value="bi">Bislama</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='nb')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Bokmål, Norwegian; Norwegian Bokmål" fakehref="Bokmål, Norwegian; Norwegian Bokmål|nb" data-item-value="nb">Bokmål, Norwegian; Norwegian Bokmål</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='bs')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Bosnian" fakehref="Bosnian|bs" data-item-value="bs">Bosnian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='br')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Breton" fakehref="Breton|br" data-item-value="br">Breton</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='bg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Bulgarian" fakehref="Bulgarian|bg" data-item-value="bg">Bulgarian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='my')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Burmese" fakehref="Burmese|my" data-item-value="my">Burmese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ca')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Catalan; Valencian" fakehref="Catalan; Valencian|ca" data-item-value="ca">Catalan; Valencian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='km')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Central Khmer" fakehref="Central Khmer|km" data-item-value="km">Central Khmer</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ch')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Chamorro" fakehref="Chamorro|ch" data-item-value="ch">Chamorro</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ce')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Chechen" fakehref="Chechen|ce" data-item-value="ce">Chechen</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ny')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Chichewa; Chewa; Nyanja" fakehref="Chichewa; Chewa; Nyanja|ny" data-item-value="ny">Chichewa; Chewa; Nyanja</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='zh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Chinese" fakehref="Chinese|zh" data-item-value="zh">Chinese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='cu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic" fakehref="Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic|cu" data-item-value="cu">Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='cv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Chuvash" fakehref="Chuvash|cv" data-item-value="cv">Chuvash</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='kw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Cornish" fakehref="Cornish|kw" data-item-value="kw">Cornish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='co')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Corsican" fakehref="Corsican|co" data-item-value="co">Corsican</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='cr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Cree" fakehref="Cree|cr" data-item-value="cr">Cree</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='hr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Croatian" fakehref="Croatian|hr" data-item-value="hr">Croatian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='cs')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Czech" fakehref="Czech|cs" data-item-value="cs">Czech</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='da')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Danish" fakehref="Danish|da" data-item-value="da">Danish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='dv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Divehi; Dhivehi; Maldivian" fakehref="Divehi; Dhivehi; Maldivian|dv" data-item-value="dv">Divehi; Dhivehi; Maldivian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='nl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Dutch; Flemish" fakehref="Dutch; Flemish|nl" data-item-value="nl">Dutch; Flemish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='dz')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Dzongkha" fakehref="Dzongkha|dz" data-item-value="dz">Dzongkha</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='en')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="English" fakehref="English|en" data-item-value="en">English</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='eo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Esperanto" fakehref="Esperanto|eo" data-item-value="eo">Esperanto</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='et')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Estonian" fakehref="Estonian|et" data-item-value="et">Estonian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ee')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Ewe" fakehref="Ewe|ee" data-item-value="ee">Ewe</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='fo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Faroese" fakehref="Faroese|fo" data-item-value="fo">Faroese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='fj')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Fijian" fakehref="Fijian|fj" data-item-value="fj">Fijian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='fi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Finnish" fakehref="Finnish|fi" data-item-value="fi">Finnish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='fr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="French" fakehref="French|fr" data-item-value="fr">French</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ff')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Fulah" fakehref="Fulah|ff" data-item-value="ff">Fulah</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='gd')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Gaelic; Scottish Gaelic" fakehref="Gaelic; Scottish Gaelic|gd" data-item-value="gd">Gaelic; Scottish Gaelic</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='gl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Galician" fakehref="Galician|gl" data-item-value="gl">Galician</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='lg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Ganda" fakehref="Ganda|lg" data-item-value="lg">Ganda</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ka')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Georgian" fakehref="Georgian|ka" data-item-value="ka">Georgian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='de')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="German" fakehref="German|de" data-item-value="de">German</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='el')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Greek, Modern (1453-)" fakehref="Greek, Modern (1453-)|el" data-item-value="el">Greek, Modern (1453-)</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='gn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Guarani" fakehref="Guarani|gn" data-item-value="gn">Guarani</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='gu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Gujarati" fakehref="Gujarati|gu" data-item-value="gu">Gujarati</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ht')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Haitian; Haitian Creole" fakehref="Haitian; Haitian Creole|ht" data-item-value="ht">Haitian; Haitian Creole</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ha')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Hausa" fakehref="Hausa|ha" data-item-value="ha">Hausa</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='he')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Hebrew" fakehref="Hebrew|he" data-item-value="he">Hebrew</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='hz')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Herero" fakehref="Herero|hz" data-item-value="hz">Herero</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='hi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Hindi" fakehref="Hindi|hi" data-item-value="hi">Hindi</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ho')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Hiri Motu" fakehref="Hiri Motu|ho" data-item-value="ho">Hiri Motu</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='hu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Hungarian" fakehref="Hungarian|hu" data-item-value="hu">Hungarian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='is')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Icelandic" fakehref="Icelandic|is" data-item-value="is">Icelandic</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='io')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Ido" fakehref="Ido|io" data-item-value="io">Ido</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ig')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Igbo" fakehref="Igbo|ig" data-item-value="ig">Igbo</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='id')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Indonesian" fakehref="Indonesian|id" data-item-value="id">Indonesian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ia')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Interlingua (International Auxiliary Language Association)" fakehref="Interlingua (International Auxiliary Language Association)|ia" data-item-value="ia">Interlingua (International Auxiliary Language Association)</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ie')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Interlingue" fakehref="Interlingue|ie" data-item-value="ie">Interlingue</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='iu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Inuktitut" fakehref="Inuktitut|iu" data-item-value="iu">Inuktitut</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ik')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Inupiaq" fakehref="Inupiaq|ik" data-item-value="ik">Inupiaq</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ga')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Irish" fakehref="Irish|ga" data-item-value="ga">Irish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='it')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Italian" fakehref="Italian|it" data-item-value="it">Italian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ja')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Japanese" fakehref="Japanese|ja" data-item-value="ja">Japanese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='jv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Javanese" fakehref="Javanese|jv" data-item-value="jv">Javanese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='kl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kalaallisut; Greenlandic" fakehref="Kalaallisut; Greenlandic|kl" data-item-value="kl">Kalaallisut; Greenlandic</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='kn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kannada" fakehref="Kannada|kn" data-item-value="kn">Kannada</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='kr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kanuri" fakehref="Kanuri|kr" data-item-value="kr">Kanuri</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ks')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kashmiri" fakehref="Kashmiri|ks" data-item-value="ks">Kashmiri</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='kk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kazakh" fakehref="Kazakh|kk" data-item-value="kk">Kazakh</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ki')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kikuyu; Gikuyu" fakehref="Kikuyu; Gikuyu|ki" data-item-value="ki">Kikuyu; Gikuyu</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='rw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kinyarwanda" fakehref="Kinyarwanda|rw" data-item-value="rw">Kinyarwanda</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ky')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kirghiz; Kyrgyz" fakehref="Kirghiz; Kyrgyz|ky" data-item-value="ky">Kirghiz; Kyrgyz</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='kv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Komi" fakehref="Komi|kv" data-item-value="kv">Komi</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='kg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kongo" fakehref="Kongo|kg" data-item-value="kg">Kongo</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ko')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Korean" fakehref="Korean|ko" data-item-value="ko">Korean</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='kj')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kuanyama; Kwanyama" fakehref="Kuanyama; Kwanyama|kj" data-item-value="kj">Kuanyama; Kwanyama</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ku')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Kurdish" fakehref="Kurdish|ku" data-item-value="ku">Kurdish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='lo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Lao" fakehref="Lao|lo" data-item-value="lo">Lao</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='la')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Latin" fakehref="Latin|la" data-item-value="la">Latin</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='lv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Latvian" fakehref="Latvian|lv" data-item-value="lv">Latvian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='li')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Limburgan; Limburger; Limburgish" fakehref="Limburgan; Limburger; Limburgish|li" data-item-value="li">Limburgan; Limburger; Limburgish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ln')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Lingala" fakehref="Lingala|ln" data-item-value="ln">Lingala</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='lt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Lithuanian" fakehref="Lithuanian|lt" data-item-value="lt">Lithuanian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='lu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Luba-Katanga" fakehref="Luba-Katanga|lu" data-item-value="lu">Luba-Katanga</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='lb')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Luxembourgish; Letzeburgesch" fakehref="Luxembourgish; Letzeburgesch|lb" data-item-value="lb">Luxembourgish; Letzeburgesch</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='mk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Macedonian" fakehref="Macedonian|mk" data-item-value="mk">Macedonian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='mg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Malagasy" fakehref="Malagasy|mg" data-item-value="mg">Malagasy</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ml')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Malayalam" fakehref="Malayalam|ml" data-item-value="ml">Malayalam</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ms')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Malay" fakehref="Malay|ms" data-item-value="ms">Malay</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='mt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Maltese" fakehref="Maltese|mt" data-item-value="mt">Maltese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='gv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Manx" fakehref="Manx|gv" data-item-value="gv">Manx</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='mi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Maori" fakehref="Maori|mi" data-item-value="mi">Maori</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='mr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Marathi" fakehref="Marathi|mr" data-item-value="mr">Marathi</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='mh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Marshallese" fakehref="Marshallese|mh" data-item-value="mh">Marshallese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='mo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Moldavian" fakehref="Moldavian|mo" data-item-value="mo">Moldavian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='mn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Mongolian" fakehref="Mongolian|mn" data-item-value="mn">Mongolian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='na')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Nauru" fakehref="Nauru|na" data-item-value="na">Nauru</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='nv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Navajo; Navaho" fakehref="Navajo; Navaho|nv" data-item-value="nv">Navajo; Navaho</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='nd')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Ndebele, North; North Ndebele" fakehref="Ndebele, North; North Ndebele|nd" data-item-value="nd">Ndebele, North; North Ndebele</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='nr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Ndebele, South; South Ndebele" fakehref="Ndebele, South; South Ndebele|nr" data-item-value="nr">Ndebele, South; South Ndebele</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ng')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Ndonga" fakehref="Ndonga|ng" data-item-value="ng">Ndonga</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ne')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Nepali" fakehref="Nepali|ne" data-item-value="ne">Nepali</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='se')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Northern Sami" fakehref="Northern Sami|se" data-item-value="se">Northern Sami</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='nn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Norwegian Nynorsk; Nynorsk, Norwegian" fakehref="Norwegian Nynorsk; Nynorsk, Norwegian|nn" data-item-value="nn">Norwegian Nynorsk; Nynorsk, Norwegian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='no')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Norwegian" fakehref="Norwegian|no" data-item-value="no">Norwegian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='oc')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Occitan (post 1500); Provençal" fakehref="Occitan (post 1500); Provençal|oc" data-item-value="oc">Occitan (post 1500); Provençal</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='oj')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Ojibwa" fakehref="Ojibwa|oj" data-item-value="oj">Ojibwa</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='or')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Oriya" fakehref="Oriya|or" data-item-value="or">Oriya</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='om')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Oromo" fakehref="Oromo|om" data-item-value="om">Oromo</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='os')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Ossetian; Ossetic" fakehref="Ossetian; Ossetic|os" data-item-value="os">Ossetian; Ossetic</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='pi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Pali" fakehref="Pali|pi" data-item-value="pi">Pali</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='pa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Panjabi; Punjabi" fakehref="Panjabi; Punjabi|pa" data-item-value="pa">Panjabi; Punjabi</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='fa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Persian" fakehref="Persian|fa" data-item-value="fa">Persian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='pl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Polish" fakehref="Polish|pl" data-item-value="pl">Polish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='pt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Portuguese" fakehref="Portuguese|pt" data-item-value="pt">Portuguese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ps')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Pushto" fakehref="Pushto|ps" data-item-value="ps">Pushto</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='qu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Quechua" fakehref="Quechua|qu" data-item-value="qu">Quechua</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ro')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Romanian" fakehref="Romanian|ro" data-item-value="ro">Romanian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='rm')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Romansh" fakehref="Romansh|rm" data-item-value="rm">Romansh</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='rn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Rundi" fakehref="Rundi|rn" data-item-value="rn">Rundi</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ru')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Russian" fakehref="Russian|ru" data-item-value="ru">Russian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sm')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Samoan" fakehref="Samoan|sm" data-item-value="sm">Samoan</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Sango" fakehref="Sango|sg" data-item-value="sg">Sango</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Sanskrit" fakehref="Sanskrit|sa" data-item-value="sa">Sanskrit</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sc')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Sardinian" fakehref="Sardinian|sc" data-item-value="sc">Sardinian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Serbian" fakehref="Serbian|sr" data-item-value="sr">Serbian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Shona" fakehref="Shona|sn" data-item-value="sn">Shona</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ii')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Sichuan Yi" fakehref="Sichuan Yi|ii" data-item-value="ii">Sichuan Yi</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sd')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Sindhi" fakehref="Sindhi|sd" data-item-value="sd">Sindhi</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='si')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Sinhala; Sinhalese" fakehref="Sinhala; Sinhalese|si" data-item-value="si">Sinhala; Sinhalese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Slovak" fakehref="Slovak|sk" data-item-value="sk">Slovak</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Slovenian" fakehref="Slovenian|sl" data-item-value="sl">Slovenian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='so')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Somali" fakehref="Somali|so" data-item-value="so">Somali</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='st')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Sotho, Southern" fakehref="Sotho, Southern|st" data-item-value="st">Sotho, Southern</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='es')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Spanish; Castilian" fakehref="Spanish; Castilian|es" data-item-value="es">Spanish; Castilian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='su')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Sundanese" fakehref="Sundanese|su" data-item-value="su">Sundanese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Swahili" fakehref="Swahili|sw" data-item-value="sw">Swahili</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ss')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Swati" fakehref="Swati|ss" data-item-value="ss">Swati</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='sv')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Swedish" fakehref="Swedish|sv" data-item-value="sv">Swedish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='tl')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Tagalog" fakehref="Tagalog|tl" data-item-value="tl">Tagalog</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ty')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Tahitian" fakehref="Tahitian|ty" data-item-value="ty">Tahitian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='tg')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Tajik" fakehref="Tajik|tg" data-item-value="tg">Tajik</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ta')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Tamil" fakehref="Tamil|ta" data-item-value="ta">Tamil</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='tt')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Tatar" fakehref="Tatar|tt" data-item-value="tt">Tatar</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='te')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Telugu" fakehref="Telugu|te" data-item-value="te">Telugu</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='th')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Thai" fakehref="Thai|th" data-item-value="th">Thai</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='bo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Tibetan" fakehref="Tibetan|bo" data-item-value="bo">Tibetan</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ti')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Tigrinya" fakehref="Tigrinya|ti" data-item-value="ti">Tigrinya</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='to')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Tonga (Tonga Islands)" fakehref="Tonga (Tonga Islands)|to" data-item-value="to">Tonga (Tonga Islands)</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ts')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Tsonga" fakehref="Tsonga|ts" data-item-value="ts">Tsonga</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='tn')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Tswana" fakehref="Tswana|tn" data-item-value="tn">Tswana</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='tr')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Turkish" fakehref="Turkish|tr" data-item-value="tr">Turkish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='tk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Turkmen" fakehref="Turkmen|tk" data-item-value="tk">Turkmen</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='tw')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Twi" fakehref="Twi|tw" data-item-value="tw">Twi</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ug')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Uighur; Uyghur" fakehref="Uighur; Uyghur|ug" data-item-value="ug">Uighur; Uyghur</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='uk')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Ukrainian" fakehref="Ukrainian|uk" data-item-value="uk">Ukrainian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ur')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Urdu" fakehref="Urdu|ur" data-item-value="ur">Urdu</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='uz')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Uzbek" fakehref="Uzbek|uz" data-item-value="uz">Uzbek</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='ve')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Venda" fakehref="Venda|ve" data-item-value="ve">Venda</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='vi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Vietnamese" fakehref="Vietnamese|vi" data-item-value="vi">Vietnamese</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='vo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Volapük" fakehref="Volapük|vo" data-item-value="vo">Volapük</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='wa')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Walloon" fakehref="Walloon|wa" data-item-value="wa">Walloon</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='cy')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Welsh" fakehref="Welsh|cy" data-item-value="cy">Welsh</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='fy')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Western Frisian" fakehref="Western Frisian|fy" data-item-value="fy">Western Frisian</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='wo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Wolof" fakehref="Wolof|wo" data-item-value="wo">Wolof</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='xh')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Xhosa" fakehref="Xhosa|xh" data-item-value="xh">Xhosa</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='yi')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Yiddish" fakehref="Yiddish|yi" data-item-value="yi">Yiddish</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='yo')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Yoruba" fakehref="Yoruba|yo" data-item-value="yo">Yoruba</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='za')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Zhuang; Chuang" fakehref="Zhuang; Chuang|za" data-item-value="za">Zhuang; Chuang</a></li>
		<?php endif; ?>
		<?php if (((is_array($_tmp='zu')) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['includedFrontEndLangs']) : in_array($_tmp, $this->_tpl_vars['includedFrontEndLangs']))): ?>
		<li><a data-lang="Zulu" fakehref="Zulu|zu" data-item-value="zu">Zulu</a></li>
		<?php endif; ?>
	</ul> 
	<div class="mtri"></div>
</div>	
<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['allprivs']['15'] == 1 || $this->_tpl_vars['master']): ?>
<?php if ($this->_tpl_vars['permissionGroups']): ?>
<div class="stylesHeading">
	<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Permission_Groups'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
</div>
<div class="subHeaderLeftMenuItem autoCSVItem" 
	
	data-test-value="data-permissions" 
	data-test-type="csv"
	
	data-auto-csv-clicked-id="permission-group-id" 
	data-auto-csv-scope="#adminPages"
	data-auto-csv-list-item-id="rel"
	data-auto-csv-ajax-page="pageActions.php"
	data-auto-csv-query-start="pageAction=changePageInPermissionGroup"
	data-auto-csv-hidden-input-prefix="pagepermissiongroup"
	data-auto-csv-attr-to-update="data-permissions"
	
	>
	<div class="target">
		
	</div>
	<div class="triShadow"></div>
	<ul>
		<div class="permissions-list"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "views/admin/permissiongroups.tpl", 'smarty_include_vars' => array('groups' => $this->_tpl_vars['permissionGroups'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
		<a href="" data-lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-item-value="" class="empty" style="display:none"></a>
	</ul> 
	<div class="mtri"></div>
</div>	
<?php endif; ?>
<?php endif; ?>
<a id="redirectingPageToggle" class="paneToolToggleItem paneToolsOnlyOne" data-test-value="data-page-redirect-to" data-test-value-checked="yes"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Redirecting_Page'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>

<a id="exludedPageToggle" class="paneToolToggleItem" data-test-value="data-excluded" data-test-value-checked="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Hide_From_Menus'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>

<a id="redirectFirstSubPageToggle" class="withSubPagesOnly paneToolToggleItem" data-test-value="data-redirect-first" data-test-value-checked="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Redirect_To_Sub'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>

<a id="newWindowToggle" class="paneToolToggleItem" data-test-value="data-new-window" data-test-value-checked="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Open_In_New'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
<?php if ($this->_tpl_vars['noindexready']): ?>
<a id="noindexToggle" class="paneToolToggleItem" data-test-value="data-noindex" data-test-value-checked="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Exclude_Search_Engines'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>
<?php endif; ?>