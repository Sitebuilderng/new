<?php /* Smarty version 2.6.18, created on 2018-02-17 15:39:49
         compiled from views/shop/orders.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'views/shop/orders.tpl', 23, false),)), $this); ?>
<?php if ($this->_tpl_vars['openOrders']): ?>
<div class="dropzone"><div></div></div>
	<?php $_from = $this->_tpl_vars['openOrders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
	<div class="responsiveListItem" buyer-id="<?php echo $this->_tpl_vars['item']['id']; ?>
" data-invoice-address="<?php echo $this->_tpl_vars['invoicepage']; ?>
?key=<?php echo $this->_tpl_vars['item']['key']; ?>
&buyerid=<?php echo $this->_tpl_vars['item']['id']; ?>
">
		<span class="responsiveListItemInfo productPrice"><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['item']['mc_gross']; ?>
</span>
		<strong><?php echo $this->_tpl_vars['item']['first_name']; ?>
 <?php echo $this->_tpl_vars['item']['last_name']; ?>
</strong>, <?php echo $this->_tpl_vars['item']['address_city']; ?>

		<div class="darkSubMenuOuter">
			<div class="darkSubMenu">
				<div class="darkSubMenuInner orderDetails">
					<div>
										<?php if ($this->_tpl_vars['item']['timestamp']): ?>
					
					<span class="darkMenuMessage"><?php echo $this->_tpl_vars['SetSeedLangs']['Order_Date']; ?>
</span>
					<div class="order">
						<div class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y %I:%M %p") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y %I:%M %p")); ?>
</div>
					</div>
					<?php endif; ?>
					<div class="darkRule"></div>
					<span class="darkMenuMessage"><?php echo $this->_tpl_vars['SetSeedLangs']['Order_Details']; ?>
</span>
					
					<div class="order">

						<?php $_from = $this->_tpl_vars['item']['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item2']):
        $this->_foreach['loop1']['iteration']++;
?>
						
						<div class="orderProductItem clearfix">
						<?php if ($this->_tpl_vars['item2']['img'] != ""): ?>
						<img src="<?php echo $this->_tpl_vars['item2']['img']; ?>
" class="orderPic"/>
						<?php endif; ?>
						<div class="orderProductTitle"><?php echo $this->_tpl_vars['item2']['name']; ?>
 <?php echo $this->_tpl_vars['item2']['sku']; ?>
</div>
						<div class="variants"><?php echo $this->_tpl_vars['item2']['variant']; ?>
</div>
						<div class="pricesItem pricesItemRight"><?php echo $this->_tpl_vars['SetSeedLangs']['Items_Total']; ?>
: <span class="pricesPrice"><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['item2']['sumPrice']; ?>
</span></div>
						
						<?php if ($this->_tpl_vars['item2']['dates']): ?>
						<div class="booking_dates clearfix">
							<?php $_from = $this->_tpl_vars['item2']['dates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['date']):
        $this->_foreach['loop1']['iteration']++;
?>
								<div class="checkoutBookingProductDate"><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</div>
							<?php endforeach; endif; unset($_from); ?>
						</div>						
						<?php endif; ?>
						<?php if (! $this->_tpl_vars['item2']['dates']): ?>
						<div class="pricesItem"><?php echo $this->_tpl_vars['SetSeedLangs']['Unit_Price']; ?>
: <span class="pricesPrice"><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['item2']['price']; ?>
</span></div>
						<div class="pricesItem"><?php echo $this->_tpl_vars['SetSeedLangs']['Quantity']; ?>
: <span class="pricesPrice"><?php echo $this->_tpl_vars['item2']['quantity']; ?>
</span></div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['item2']['people']): ?>
						<h2><?php echo $this->_tpl_vars['SetSeedLangs']['Attendees']; ?>
</h2>
							<?php $_from = $this->_tpl_vars['item2']['people']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['person']):
?>
								<div class="checkoutBookingPerson">
									<?php $_from = $this->_tpl_vars['person']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
										<strong><?php echo $this->_tpl_vars['field']['0']; ?>
:</strong> <?php echo $this->_tpl_vars['field']['1']; ?>
<br/>
									<?php endforeach; endif; unset($_from); ?>
								</div>
							<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>

						</div>
						<?php endforeach; endif; unset($_from); ?>
						
					</div>
					
					<div class="darkRule"></div>
					<span class="orderInfo"><span class="orderInfoLeft"><?php echo $this->_tpl_vars['SetSeedLangs']['Order_Total']; ?>
</span> <strong><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['item']['order_total']; ?>
</strong></span>
					<span class="orderInfo"><span class="orderInfoLeft"><?php echo $this->_tpl_vars['SetSeedLangs']['Amount_From_PayPal']; ?>
</span> <?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['item']['mc_gross']; ?>
</span>
					<span class="orderInfo"><span class="orderInfoLeft"><?php echo $this->_tpl_vars['SetSeedLangs']['PayPal_Status']; ?>
</span> <?php echo $this->_tpl_vars['item']['status']; ?>
</span>
					<?php if ($this->_tpl_vars['item']['form_in_checkout'] != ""): ?>
					<div class="darkRule"></div>
					<span class="darkMenuMessage"><?php echo $this->_tpl_vars['SetSeedLangs']['Form_Results']; ?>
</span>
					<div class="checkoutFormResults">
						<?php echo $this->_tpl_vars['item']['form_in_checkout']; ?>

					</div>
					<?php endif; ?>
					<div class="darkRule"></div>
					<span class="darkMenuMessage"><?php if ($this->_tpl_vars['item']['alt_billing_address1']): ?><?php echo $this->_tpl_vars['SetSeedLangs']['Billing_Address']; ?>
 <?php if ($this->_tpl_vars['item']['address_status']): ?>(<?php echo $this->_tpl_vars['item']['address_status']; ?>
)<?php endif; ?><?php else: ?><?php echo $this->_tpl_vars['SetSeedLangs']['Shipping_Address']; ?>
<?php endif; ?> </span>
					<p class="order"><?php echo $this->_tpl_vars['item']['first_name']; ?>
 <?php echo $this->_tpl_vars['item']['last_name']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['address_street']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['address_city']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['address_state']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['address_zip']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['address_country']; ?>
</p>
					<?php if ($this->_tpl_vars['item']['alt_billing_address1']): ?>
					<span class="darkMenuMessage"><?php echo $this->_tpl_vars['SetSeedLangs']['Shipping_Address']; ?>
</span>
					<p class="order"><?php echo $this->_tpl_vars['item']['alt_billing_first_name']; ?>
 <?php echo $this->_tpl_vars['item']['alt_billing_last_name']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['alt_billing_address1']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['alt_billing_address2']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['alt_billing_address_city']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['alt_billing_address_state']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['alt_billing_address_zip']; ?>
<br/>
<?php echo $this->_tpl_vars['item']['alt_billing_address_country']; ?>
</p>
					<?php endif; ?>
					<div class="darkRule"></div>
					
					<span class="darkMenuMessage"><?php echo $this->_tpl_vars['SetSeedLangs']['PayPal_Email']; ?>
</span>
					<div class="order">
						<div class="title">
					<a href="mailto:<?php echo $this->_tpl_vars['item']['payer_email']; ?>
" class="orderEmail"><?php echo $this->_tpl_vars['item']['payer_email']; ?>
</a>
						</div>
					</div>
					<div class="darkRule"></div>
					
					<span class="darkMenuMessage"><?php echo $this->_tpl_vars['SetSeedLangs']['Field_Type_Phone']; ?>
</span>
					<div class="order">
						<div class="title">
							<?php echo $this->_tpl_vars['item']['phone']; ?>

						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="dropzone"><div></div></div>
	<?php endforeach; endif; unset($_from); ?>
	
<?php else: ?>
<span class="noPages"><?php echo $this->_tpl_vars['SetSeedLangs']['No_Orders']; ?>
</span>
<?php endif; ?>