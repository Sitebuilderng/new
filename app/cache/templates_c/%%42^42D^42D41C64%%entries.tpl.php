<?php /* Smarty version 2.6.18, created on 2018-02-18 17:01:25
         compiled from views/blog/entries.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'views/blog/entries.tpl', 10, false),array('modifier', 'array_reverse', 'views/blog/entries.tpl', 30, false),array('modifier', 'count', 'views/blog/entries.tpl', 155, false),)), $this); ?>
<?php if (! $this->_tpl_vars['ajax']): ?>
<div id="tagsListLoad" style="display:none">
<?php if ($this->_tpl_vars['tags']): ?>
<?php $_from = $this->_tpl_vars['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['tag']):
        $this->_foreach['loop1']['iteration']++;
?>
	<a tag-name="<?php echo htmlspecialchars($this->_tpl_vars['tag']['name']); ?>
"><span class="overflowEllipsis"><?php echo htmlspecialchars($this->_tpl_vars['tag']['name']); ?>
</span></a>
<?php endforeach; endif; unset($_from); ?>
<div class='iconbarRule'></div>
<?php endif; ?>
</div>
						<div id="authorsMenuList" style="display:none">
							
														<?php if ($this->_tpl_vars['authors']): ?>
							<?php $_from = array_reverse($this->_tpl_vars['authors']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['author']):
        $this->_foreach['loop1']['iteration']++;
?>
								<li><a blog-author-id="<?php echo $this->_tpl_vars['author']['id']; ?>
" blog-author-bio="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['details'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-lang="<?php echo htmlspecialchars($this->_tpl_vars['author']['name']); ?>
" data-item-value="<?php echo $this->_tpl_vars['author']['id']; ?>
" class="authorItem">
																	<?php echo htmlspecialchars($this->_tpl_vars['author']['name']); ?>

								</a></li>							<?php endforeach; endif; unset($_from); ?>
							<div class='iconbarRule'></div>
							<?php endif; ?>
						</div>
												<div id="catsMenuList" style="display:none">
							<?php if ($this->_tpl_vars['cats']): ?>
							<?php $_from = $this->_tpl_vars['cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['cat']):
        $this->_foreach['loop1']['iteration']++;
?>
								<li><a blog-category-id="<?php echo $this->_tpl_vars['cat']['id']; ?>
" data-lang="<?php echo htmlspecialchars($this->_tpl_vars['cat']['name']); ?>
" data-item-value="<?php echo $this->_tpl_vars['cat']['id']; ?>
" data-reverse-order="<?php echo $this->_tpl_vars['cat']['reverse_order']; ?>
"><?php echo htmlspecialchars($this->_tpl_vars['cat']['name']); ?>
</a></li>							<?php endforeach; endif; unset($_from); ?>	
							<div class='iconbarRule'></div>
							<?php endif; ?>
							</div>	
		
		<div class="subHeaderLeftMenuItem right blogSearchMenu">
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
						<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus blogFilterSearch" value="<?php if ($this->_tpl_vars['filterSearch']): ?><?php echo $this->_tpl_vars['filterSearch']; ?>
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
		<div class="subHeaderLeftMenuItem langFilterMenu right" <?php if (count($this->_tpl_vars['languages']) == 0): ?>style="display:none;"<?php endif; ?>>
			<div class="target notTooLong">
				<?php if (! $this->_tpl_vars['blog_filter_lang']): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Language'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				<?php else: ?>
				<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
				<?php if ($this->_tpl_vars['blog_filter_lang'] == $this->_tpl_vars['item']['abr']): ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			</div>
			<div class="triShadow"></div>
			<ul id="blogFilter">
				<li><a href="" class="blogFilterLink filterLink <?php if (! $this->_tpl_vars['blog_filter_lang']): ?>bpe_current<?php endif; ?>" id="" data-item-value=""><?php echo $this->_tpl_vars['SetSeedLangs']['All']; ?>
</a></li>
				<div id="blogFilterToUpdate">
				<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
				<li><a href="" class="blogFilterLink filterLink <?php if ($this->_tpl_vars['blog_filter_lang'] == $this->_tpl_vars['item']['abr']): ?>bpe_current<?php endif; ?>" id="<?php echo $this->_tpl_vars['item']['abr']; ?>
" data-item-value="<?php echo $this->_tpl_vars['item']['abr']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a>	</li>
				<?php endforeach; endif; unset($_from); ?>
				</div>
			</ul> 
			<div class="mtri"></div>
		</div>
		<div class="subHeaderLeftMenuItem right" <?php if (count($this->_tpl_vars['cats']) == 0): ?>style="display:none;"<?php endif; ?> id="blogCategoryFilterMenu">
			<div class="target notTooLong">
				<?php if (! $this->_tpl_vars['blog_filter_category']): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Filter_By_Blog_Cat'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				<?php else: ?>
				<?php $_from = $this->_tpl_vars['cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
				<?php if ($this->_tpl_vars['blog_filter_category'] == $this->_tpl_vars['item']['id']): ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			</div>
			<div class="triShadow"></div>
			<ul id="blogFilterCat">
				<li><a href="" class="<?php if (! $this->_tpl_vars['blog_filter_category']): ?>bpe_current<?php endif; ?>" id="" blog-category-id="" data-item-value=""><?php echo $this->_tpl_vars['SetSeedLangs']['All']; ?>
</a></li>
				<div id="blogFilterCategoriesToUpdate">
					
					<?php $_from = $this->_tpl_vars['cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['cat']):
        $this->_foreach['loop1']['iteration']++;
?>
						<li><a blog-category-id="<?php echo $this->_tpl_vars['cat']['id']; ?>
" data-lang="<?php echo htmlspecialchars($this->_tpl_vars['cat']['name']); ?>
" data-item-value="<?php echo $this->_tpl_vars['cat']['id']; ?>
" data-reverse-order="<?php echo $this->_tpl_vars['cat']['reverse_order']; ?>
" class="<?php if ($this->_tpl_vars['blog_filter_category'] == $this->_tpl_vars['cat']['id']): ?>bpe_current<?php endif; ?>"><?php echo htmlspecialchars($this->_tpl_vars['cat']['name']); ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
					
					
				</div>
			</ul> 
			<div class="mtri"></div>
		</div>			
			
						<?php if ($this->_tpl_vars['blog_filter_lang']): ?><input type="hidden" name="filter" value="<?php echo $this->_tpl_vars['blog_filter_lang']; ?>
" id="filter"/><?php endif; ?>
					</div>
	
	<div class="dropzone"><div></div></div>
	
<?php endif; ?>
<?php if (! $this->_tpl_vars['entries'] && ! $this->_tpl_vars['ajax']): ?><span class='noPages'><?php echo $this->_tpl_vars['SetSeedLangs']['No_Blogs']; ?>
</span><?php endif; ?>
<?php $_from = $this->_tpl_vars['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['entry']):
        $this->_foreach['loop1']['iteration']++;
?>

		<div class="responsiveListItem editBlogBar<?php if ($this->_tpl_vars['entry']['live'] != 'yes'): ?> offline<?php endif; ?><?php if ($this->_tpl_vars['entry']['comments']): ?> withComments<?php endif; ?>" id="<?php echo $this->_tpl_vars['entry']['draftId']; ?>
" blog-categories="<?php echo $this->_tpl_vars['entry']['in_categories']; ?>
" blog-author="<?php echo $this->_tpl_vars['entry']['author']; ?>
" blog-id="<?php echo $this->_tpl_vars['entry']['id']; ?>
" blog-language="<?php echo $this->_tpl_vars['entry']['language']; ?>
" data-lang="<?php echo $this->_tpl_vars['entry']['language']; ?>
" data-pinned="<?php echo $this->_tpl_vars['entry']['pinned']; ?>
" data-blog-status="<?php if ($this->_tpl_vars['entry']['live'] == 'yes'): ?>live<?php else: ?>offline<?php endif; ?>" data-blog-author="<?php echo $this->_tpl_vars['entry']['author']; ?>
" data-blog-categories="<?php echo $this->_tpl_vars['entry']['in_categories']; ?>
">
	

			<?php if ($this->_tpl_vars['entry']['comments']): ?>
			<div class="showSubPages" id="<?php echo $this->_tpl_vars['entry']['id']; ?>
" title="<?php echo $this->_tpl_vars['SetSeedLangs']['View_Comments']; ?>
">
				
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
<path d="M537.184,177.402H256.083c-15.729,0-28.479,14.409-28.479,32.186v129.485
	c0,17.776,12.75,32.184,28.479,32.184h129.678l13.407,18.294l31.596,43.108l31.596-43.108l13.407-18.294h61.417
	c15.729,0,28.479-14.407,28.479-32.184V209.587C565.662,191.811,552.912,177.402,537.184,177.402z M503.875,313.771H287.026v-27.919
	h216.849V313.771z M503.875,251.325H287.026v-27.919h216.849V251.325z"/>
</svg>

				<span class="responsiveListItemInfo numberApproved <?php if ($this->_tpl_vars['entry']['number_not_approved'] == 0): ?>byitself<?php endif; ?> <?php if ($this->_tpl_vars['entry']['number_approved'] == 0): ?>hidden<?php endif; ?>"><?php echo $this->_tpl_vars['entry']['number_approved']; ?>
</span>
			
			<span class="responsiveListItemInfo numberNotApproved <?php if ($this->_tpl_vars['entry']['number_approved'] == 0): ?>byitself<?php endif; ?> <?php if ($this->_tpl_vars['entry']['number_not_approved'] == 0): ?>hidden<?php endif; ?>"><?php echo $this->_tpl_vars['entry']['number_not_approved']; ?>
</span>


			</div>
			
			
						<div class='commentsList' id="commentsList<?php echo $this->_tpl_vars['entry']['id']; ?>
" style="display:none">
						<div class="dropzone"><div></div></div>
						<?php $_from = array_reverse($this->_tpl_vars['entry']['comments']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['comment']):
        $this->_foreach['loop2']['iteration']++;
?>
							<div class="blogComment responsiveListItem <?php if ($this->_tpl_vars['comment']['approved'] == 'no'): ?>offline<?php endif; ?>" blog-comment-id="<?php echo $this->_tpl_vars['comment']['id']; ?>
" data-blog-comment-status="<?php if ($this->_tpl_vars['comment']['approved'] == 'no'): ?>offline<?php else: ?>live<?php endif; ?>">
								<div class="responsiveListItemImage" <?php if ($this->_tpl_vars['comment']['email'] != ""): ?>style="background: url('http://www.gravatar.com/avatar/<?php echo $this->_tpl_vars['comment']['md5_email']; ?>
?s=50') 50% 50%;"<?php endif; ?>></div>
																<strong><a href="mailto:<?php echo htmlspecialchars($this->_tpl_vars['comment']['email']); ?>
"><?php echo htmlspecialchars($this->_tpl_vars['comment']['author']); ?>
</a>:</strong> <?php if ($this->_tpl_vars['comment']['website'] != "" && $this->_tpl_vars['comment']['website'] != 'asdjkfhkjh212jkhhjk3478duh239s09s2k3'): ?>(<a href="http://<?php echo htmlspecialchars($this->_tpl_vars['comment']['website']); ?>
" target="_blank" class="returnTrue">http://<?php echo htmlspecialchars($this->_tpl_vars['comment']['website']); ?>
</a>)<?php endif; ?> <?php echo $this->_tpl_vars['comment']['content']; ?>

								</div>
								<div class="dropzone"><div></div></div>
						<?php endforeach; endif; unset($_from); ?>
						
						<?php if (count($this->_tpl_vars['entry']['comments']) == 0): ?>
						<div class="noPages"><?php echo $this->_tpl_vars['SetSeedLangs']['No_Comments']; ?>
</div>
						<?php endif; ?>
					
			</div>
			<?php endif; ?>
													<span class="responsiveListItemInfo blogOffline" style="<?php if ($this->_tpl_vars['entry']['live'] == 'yes'): ?>visibility:hidden;<?php endif; ?>"><span class='overflowEllipsis' title="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Offline'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Offline'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></span>
				
				<span class="overflowEllipsis" title="<?php echo htmlspecialchars($this->_tpl_vars['entry']['title']); ?>
">
						<?php echo htmlspecialchars($this->_tpl_vars['entry']['title']); ?>

				</span>
		
		</div>
		<div class="dropzone"><div></div></div>
	<?php endforeach; endif; unset($_from); ?>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['searching'] || $this->_tpl_vars['initPane']): ?>
	<div class="clear insertNewItemsBefore"></div>
	<a href="50" class="showMoreItems">Show more images</a>
	<?php endif; ?>
<?php if ($this->_tpl_vars['entries']): ?><?php endif; ?>