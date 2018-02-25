<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:49
         compiled from admin/views/stats/stats.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date', 'admin/views/stats/stats.tpl', 6, false),array('modifier', 'htmlspecialchars', 'admin/views/stats/stats.tpl', 14, false),array('function', 'cycle', 'admin/views/stats/stats.tpl', 263, false),)), $this); ?>
<?php $this->assign('month', ((is_array($_tmp='F')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp))); ?>
<?php $this->assign('day', ((is_array($_tmp='j')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp))); ?>
<?php $this->assign('dayending', ((is_array($_tmp='S')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp))); ?>



	<div class="clearfix">
		<div id="stats" class="v2">
			<h2 id="statsHeading"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Statistics_For_1'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
<sup><?php echo $this->_tpl_vars['SetSeedLangs']['st']; ?>
</sup> - <?php echo $this->_tpl_vars['day']; ?>
<sup><?php echo $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['dayending']]; ?>
</sup> <?php echo $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['month']]; ?>
</strong><br/><?php echo $this->_tpl_vars['SetSeedLangs']['Comparisons_Taken']; ?>
</h2>
			<div class="statsBox fullWidth">
				<p id="hitsSparksTitle"><strong><?php echo $this->_tpl_vars['SetSeedLangs']['Hits_Visitors_Day']; ?>
</strong></p>
				<div id="hitsSparksFlot"><div style="width:100%;height:120px"></div></div>
				<div id="hitsSparksFlotLegend"></div>
			</div>
			<div class="statsColFifth">
				<div class="statsBox clearfix">			
					<p id="totalHitsTitle"><?php echo $this->_tpl_vars['SetSeedLangs']['Total']; ?>
 <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Hits']; ?>
</strong></p>
					<p id="totalHits" class="statsNumbers"><span class="statNumbersLeft"><strong><?php echo $this->_tpl_vars['stats']['curMonthHits']; ?>
</strong><br/><?php echo $this->_tpl_vars['stats']['lastMonthHits']; ?>
</span> <span class="statTrend <?php echo $this->_tpl_vars['stats']['hitsTrendDirection']; ?>
"><?php echo $this->_tpl_vars['stats']['hitsTrend']; ?>
%</span></p>
				</div>
			</div>
			<div class="statsColFifth lastIfHalf">
				<div class="statsBox clearfix">			
					<p id="totalVisitorsTitle"><?php echo $this->_tpl_vars['SetSeedLangs']['Total']; ?>
 <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Visitors']; ?>
</strong></p>
					<p id="totalVisitors" class="statsNumbers"><span class="statNumbersLeft"><strong><?php echo $this->_tpl_vars['stats']['curMonthVisitors']; ?>
</strong><br/><?php echo $this->_tpl_vars['stats']['lastMonthVisitors']; ?>
</span> <span class="statTrend <?php echo $this->_tpl_vars['stats']['visitorsTrendDirection']; ?>
"><?php echo $this->_tpl_vars['stats']['visitorsTrend']; ?>
%</span></p>
				</div>
			</div>
			<div class="statsColFifth">
				<div class="statsBox clearfix">			
					<p id="totalHitsDayTitle"><?php echo $this->_tpl_vars['SetSeedLangs']['Avg']; ?>
 <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Hits_Day']; ?>
</strong></p>
					<p id="totalHitsDay" class="statsNumbers"><span class="statNumbersLeft"><strong><?php echo $this->_tpl_vars['stats']['curHitsDay']; ?>
</strong><br/><?php echo $this->_tpl_vars['stats']['lastHitsDay']; ?>
</span> <span class="statTrend <?php echo $this->_tpl_vars['stats']['hitsDayTrendDirection']; ?>
"><?php echo $this->_tpl_vars['stats']['hitsDayTrend']; ?>
%</span></p>
				</div>
			</div>
			<div class="statsColFifth lastIfHalf">
				<div class="statsBox clearfix">	
					<p id="totalVisitorsDayTitle"><?php echo $this->_tpl_vars['SetSeedLangs']['Avg']; ?>
 <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Visitors_Day']; ?>
</strong></p>
					<p id="totalVisitorsDay" class="statsNumbers"><span class="statNumbersLeft"><strong><?php echo $this->_tpl_vars['stats']['curVisitorsDay']; ?>
</strong><br/><?php echo $this->_tpl_vars['stats']['lastVisitorsDay']; ?>
</span> <span class="statTrend <?php echo $this->_tpl_vars['stats']['visitorsDayTrendDirection']; ?>
"><?php echo $this->_tpl_vars['stats']['visitorsDayTrend']; ?>
%</span></p>
				</div>
			</div>
			<div class="statsColFifth last">
				<div class="statsBox clearfix">	
					<p id="totalHitsVisitorsTitle"><?php echo $this->_tpl_vars['SetSeedLangs']['Hits']; ?>
 <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Per_Visitor']; ?>
</strong></p>
					<p id="hitsPerVisitorDay" class="statsNumbers"><span class="statNumbersLeft"><strong><?php echo $this->_tpl_vars['stats']['curHitsPerVisitorDay']; ?>
</strong><br/><?php echo $this->_tpl_vars['stats']['lastHitsPerVisitorDay']; ?>
</span> <span class="statTrend <?php echo $this->_tpl_vars['stats']['hitsPerVisitorTrendDirection']; ?>
"><?php echo $this->_tpl_vars['stats']['hitsPerVisitorTrend']; ?>
%</span></p>								
				</div>
			</div>
			<script type="text/javascript">
			<?php echo '
			$(function () {

			    var thisMonthHits = {
				    label: "'; ?>
<?php echo $this->_tpl_vars['SetSeedLangs']['Hits']; ?>
<?php echo '",
				    data: ['; ?>
<?php $_from = $this->_tpl_vars['stats']['dayByDayThisMonth']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['day']):
        $this->_foreach['loop1']['iteration']++;
?>[<?php echo $this->_foreach['loop1']['iteration']; ?>
,<?php echo $this->_tpl_vars['day']['hits']; ?>
]<?php if (! ($this->_foreach['loop1']['iteration'] == $this->_foreach['loop1']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php echo ']
					,color:"rgb(255,148,148)"
					,shadowSize:1
				  };
	
				var thisMonthVisits = {
				    label: "'; ?>
<?php echo $this->_tpl_vars['SetSeedLangs']['Visitors']; ?>
<?php echo '",
				    data: ['; ?>
<?php $_from = $this->_tpl_vars['stats']['dayByDayThisMonth']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['day']):
        $this->_foreach['loop1']['iteration']++;
?>[<?php echo $this->_foreach['loop1']['iteration']; ?>
,<?php echo $this->_tpl_vars['day']['visitors']; ?>
]<?php if (! ($this->_foreach['loop1']['iteration'] == $this->_foreach['loop1']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php echo ']
					,color:"rgb(110,209,255)"
					,shadowSize:1
				  };
	
				var lastMonthHits = {
				    data: ['; ?>
<?php $_from = $this->_tpl_vars['stats']['dayByDayLastMonth']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['day']):
        $this->_foreach['loop1']['iteration']++;
?>[<?php echo $this->_foreach['loop1']['iteration']; ?>
,<?php echo $this->_tpl_vars['day']['hits']; ?>
]<?php if (! ($this->_foreach['loop1']['iteration'] == $this->_foreach['loop1']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php echo ']
					,color:"rgba(255,148,148,0.3)"
					,shadowSize:0
				  };
	
				var lastMonthVisits = {
				    data: ['; ?>
<?php $_from = $this->_tpl_vars['stats']['dayByDayLastMonth']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['day']):
        $this->_foreach['loop1']['iteration']++;
?>[<?php echo $this->_foreach['loop1']['iteration']; ?>
,<?php echo $this->_tpl_vars['day']['visitors']; ?>
]<?php if (! ($this->_foreach['loop1']['iteration'] == $this->_foreach['loop1']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php echo ']
					,color:"rgba(110,209,255,0.3)"
					,shadowSize:0
				  };

			    $.plot($("#hitsSparksFlot div"), [ lastMonthVisits, lastMonthHits, thisMonthVisits, thisMonthHits ], {
					grid: {
					    show: true
					    ,color: "#ABABAB"
					    ,backgroundColor: null
					    ,borderWidth: 0
		
					}
					,yaxis: {
					    show: true
						,min:0
					}
					,xaxis: {
					    show: true
						,ticks:'; ?>
<?php echo $this->_tpl_vars['stats']['showDays']; ?>
<?php echo '
						,tickDecimals:0
					  }
					,legend: {
					    show: true
					    ,noColumns: 4
					    ,backgroundOpacity: 0
						,container: $("#hitsSparksFlotLegend")
					  }
		
				});
			});
			'; ?>

			</script>

			<div class="clear"></div>
			<div class="statsColQuart">
				<div class="statsBox clearfix">
					<p id="browserTitle"><?php echo $this->_tpl_vars['SetSeedLangs']['Top_5']; ?>
 <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Browsers']; ?>
</strong></p>
					<div id="top5Browsers"></div>
					<div id="top5browsersLegend"></div> <!-- end #top5browsersLegend -->
					<script type="text/javascript">
					var pieColour = new Array();
					pieColour[1] = "#ffd234";
					pieColour[2] = "#6ed1ff";
					pieColour[3] = "#ff9494";
					pieColour[4] = "#9fff75";
					pieColour[5] = "#cf8bff";
					<?php echo '
					$(function () {

						var top5Browsers = [
						'; ?>
<?php $_from = $this->_tpl_vars['stats']['browsersArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['browser']):
        $this->_foreach['loop1']['iteration']++;
?>
						<?php echo '{'; ?>
 
						label: "<?php echo $this->_tpl_vars['browser']['browser']; ?>
"
						, data: <?php echo $this->_tpl_vars['browser']['count']; ?>

						,color:pieColour[<?php echo $this->_foreach['loop1']['iteration']; ?>
]
						<?php echo '}'; ?>
<?php if (! ($this->_foreach['loop1']['iteration'] == $this->_foreach['loop1']['total'])): ?>,<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php echo '
						  ];
					    $.plot($("#top5Browsers"), top5Browsers, {
							series: {
							     pie: { 
					                show: true
					                ,innerRadius: 0.8
					            }
					        }
						 	,legend: {
						        show: true
								,backgroundOpacity: 0
								,container:$("#top5browsersLegend")
						    }

						});
					});
					'; ?>

					</script>
				</div>
			</div>
			<div class="statsColQuart lastIfHalf">
				<div class="statsBox clearfix">
	
					<p id="osTitle"><strong><?php echo $this->_tpl_vars['SetSeedLangs']['Operating_System']; ?>
</strong></p>
					<div id="osChart"></div>
					<div id="osChartLegend"></div> <!-- end #top5browsersLegend -->
					<script type="text/javascript">
					<?php echo '
					$(function () {

						var osChart = [
						'; ?>
<?php $_from = $this->_tpl_vars['stats']['osArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['browser']):
        $this->_foreach['loop1']['iteration']++;
?>
						<?php echo '{'; ?>
 label: "<?php echo $this->_tpl_vars['browser']['os']; ?>
", data: <?php echo $this->_tpl_vars['browser']['count']; ?>
,color:pieColour[<?php echo $this->_foreach['loop1']['iteration']; ?>
]<?php echo '}'; ?>
<?php if (! ($this->_foreach['loop1']['iteration'] == $this->_foreach['loop1']['total'])): ?>,<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php echo '
						  ];
					    $.plot($("#osChart"), osChart, {
							series: {
							     pie: { 
					                show: true
					                ,innerRadius: 0.8
					            }
					        }
						 	,legend: {
						        show: true
								,backgroundOpacity: 0
								,container:$("#osChartLegend")
						    }

						});
					});
					'; ?>

					</script>

				</div>
			</div>

			<div class="statsColQuart">
				<div class="statsBox clearfix">

					<p id="sourceTitle"><strong><?php echo $this->_tpl_vars['SetSeedLangs']['Visit_Source']; ?>
</strong></p>
						<div id="sourceChart"></div>
						<div id="sourceChartLegend"></div>
						<script type="text/javascript">
						<?php echo '
						$(function () {

							var sourceChart = [
							'; ?>
<?php $_from = $this->_tpl_vars['stats']['sourceArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['browser']):
        $this->_foreach['loop1']['iteration']++;
?>
							<?php echo '{'; ?>
 label: "<?php echo $this->_tpl_vars['browser']['type']; ?>
", data: <?php echo $this->_tpl_vars['browser']['count']; ?>
,color:pieColour[<?php echo $this->_foreach['loop1']['iteration']; ?>
]<?php echo '}'; ?>
<?php if (! ($this->_foreach['loop1']['iteration'] == $this->_foreach['loop1']['total'])): ?>,<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?><?php echo '
							  ];
						    $.plot($("#sourceChart"), sourceChart, {
								series: {
								     pie: { 
						                show: true
						                ,innerRadius: 0.8
						            }
						        }
							 	,legend: {
							        show: true
									,backgroundOpacity: 0
									,container:$("#sourceChartLegend")
							    }

							});
						});
						'; ?>

						</script>
				</div>
			</div>
			<div class="statsColQuart last lastIfQuart">
				<div class="statsBox clearfix">
					<p id="engineTitle"><?php echo $this->_tpl_vars['SetSeedLangs']['Top_5']; ?>
 <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Search_Engines']; ?>
</strong></p>
					<div id="engineChart"></div>
					<div id="engineChartLegend"></div>
					<script type="text/javascript">
					<?php echo '
					$(function () {

						var engineChart = [
						'; ?>
<?php $_from = $this->_tpl_vars['stats']['searchArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['browser']):
        $this->_foreach['loop1']['iteration']++;
?>
						<?php echo '{'; ?>
 label: "<?php echo $this->_tpl_vars['browser']['engine']; ?>
", data: <?php echo $this->_tpl_vars['browser']['count']; ?>
,color:pieColour[<?php echo $this->_foreach['loop1']['iteration']; ?>
]<?php echo '}'; ?>
<?php if (! ($this->_foreach['loop1']['iteration'] == $this->_foreach['loop1']['total'])): ?>,<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php echo '
						  ];
					    $.plot($("#engineChart"), engineChart, {
							series: {
							     pie: { 
					                show: true
					                ,innerRadius: 0.8
					            }
					        }
						 	,legend: {
						        show: true
								,backgroundOpacity: 0
								,container:$("#engineChartLegend")
						    }

						});
					});
					'; ?>

					</script>
				</div>
			</div>
			<div class="clear"></div>
			<div class="statsColHalf">
				<div class="statsBox clearfix">
					<p id="topPagesTitle"><?php echo $this->_tpl_vars['SetSeedLangs']['Top']; ?>
 <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Pages']; ?>
</strong></p>
					<div id="topPagesList">
						<?php $_from = $this->_tpl_vars['stats']['topPagesList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['toppage']):
        $this->_foreach['loop1']['iteration']++;
?>
						<?php if ($this->_tpl_vars['toppage']['pagename']): ?>
						<p class="<?php echo smarty_function_cycle(array('values' => ",alt",'name' => '1'), $this);?>
"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['toppage']['url'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['toppage']['pagename'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><span class="pageListNumber"><?php echo $this->_tpl_vars['toppage']['count']; ?>
</span><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['toppage']['pagename'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span></a></p>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
					</div>
				</div>
			</div>
			<div class="statsColHalf last">
				<div class="statsBox clearfix">
	
					<p id="topReferrersTitle"><?php echo $this->_tpl_vars['SetSeedLangs']['Top']; ?>
 <strong><?php echo $this->_tpl_vars['SetSeedLangs']['Referrers']; ?>
</strong></p>
					<div id="topReferrersList">
						<?php $_from = $this->_tpl_vars['stats']['topReferrersList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['topref']):
        $this->_foreach['loop1']['iteration']++;
?>
						<p class="<?php echo smarty_function_cycle(array('values' => ",alt",'name' => '2'), $this);?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['topref']['referrer'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php if (((is_array($_tmp=$this->_tpl_vars['topref']['url'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp))): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['topref']['url'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['topref']['referrer'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php else: ?><span class="fakeA" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['topref']['referrer'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php endif; ?><span class="pageListNumber"><?php echo $this->_tpl_vars['topref']['count']; ?>
</span><span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['topref']['referrer'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span><?php if ($this->_tpl_vars['topref']['url']): ?></a><?php else: ?></span><?php endif; ?></p>
						<?php endforeach; endif; unset($_from); ?>
					</div>
				</div>
			</div>
		</div>
	</div>