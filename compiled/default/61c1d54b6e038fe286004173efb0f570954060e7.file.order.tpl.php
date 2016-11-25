<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:24:31
         compiled from "C:\OpenServer\domains\localhost\design\default\html\order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32700582f718fd9d156-66412773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c1d54b6e038fe286004173efb0f570954060e7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\order.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32700582f718fd9d156-66412773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'order' => 0,
    'translate_id' => 0,
    'purchases' => 0,
    'purchase' => 0,
    'image' => 0,
    'lang_link' => 0,
    'currency' => 0,
    'payment_methods' => 0,
    'payment_method' => 0,
    'delivery' => 0,
    'config' => 0,
    'cart' => 0,
    'all_currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f71900a8d47_75216147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f71900a8d47_75216147')) {function content_582f71900a8d47_75216147($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['lang']->value->order_title)." ".((string)$_smarty_tpl->tpl_vars['order']->value->id), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div class="container">
	
	<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<div class="h1 m-b-1"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_header'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_header;?>
</span> <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</div>
	<div class="purchase-list h6">
		<div class="purchase-row purchase-main bg-info hidden-md-down">
			
			<div class="purchase-img hidden-md-down text-lg-center">
				<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_head_img'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_img;?>
</span>
			</div>

			
			<div class="purchase-name">
				<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_head_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_name;?>
</span>
			</div>

			
			<div class="purchase-price hidden-md-down">
				<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_head_price'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_price;?>
</span>
			</div>

			<div class="purchase-column">
				<div class="purchase-list">
					<div class="purchase-row">
						
						<div class="purchase-amount text-lg-center">
							<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_head_amoun'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_amoun;?>
</span>
						</div>

						
						<div class="purchase-full-price">
							<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_head_total'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_total;?>
</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
			<div class="purchase-row purchase-main">
				
				<div class="purchase-img hidden-md-down">
					<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->tpl_vars['purchase']->value->product->images), null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
">
							<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,50,50);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
">
						</a>
					<?php }?>
				</div>

				
				<div class="purchase-name">
					<a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>

                    <?php if ($_smarty_tpl->tpl_vars['order']->value->paid&&$_smarty_tpl->tpl_vars['purchase']->value->variant->attachment) {?>
                        <a class="download_attachment" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->attachment;?>
">скачать файл</a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock==0) {?>
                        <label class="btn-warning cart_preorder">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>

                        </label>
                    <?php }?>
				</div>

				
				<div class="purchase-price hidden-md-down">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->variant->price));?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

				</div>

				<div class="purchase-column">
					<div class="purchase-list">
						<div class="purchase-row">
							
							<div class="purchase-amount">
								<div class="fn-product-amount fn-is_stock okaycms text-xs-center">
									
									<input disabled class="form-control" type="text" data-id="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant_id;?>
" name="amounts[<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant_id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
">
								</div>
							</div>

							
							<div class="purchase-full-price">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->price*$_smarty_tpl->tpl_vars['purchase']->value->amount));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->discount>0) {?>
		<div class="purchase-list p-t-1-md_down border-t-1-info_md-down">
			<div class="purchase-row purchase-main">
				<div class="purchase-img hidden-md-down"></div>
				<div class="purchase-name hidden-md-down"></div>
				<div class="purchase-price hidden-md-down"></div>
				<div class="purchase-column">
					<div class="purchase-list">
						<div class="purchase-row">
							<div class="purchase-amount text-xs-center">
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_discount'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_discount;?>
</span>:
							</div>
							
							<div class="purchase-full-price"><?php echo $_smarty_tpl->tpl_vars['order']->value->discount;?>
%</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount>0) {?>
		<div class="purchase-list p-t-1-md_down border-t-1-info_md-down">
			<div class="purchase-row purchase-main">
				<div class="purchase-img hidden-md-down"></div>
				<div class="purchase-name hidden-md-down"></div>
				<div class="purchase-price hidden-md-down"></div>
				<div class="purchase-column">
					<div class="purchase-list">
						<div class="purchase-row">
							<div class="purchase-amount text-xs-center">
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_coupon'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
</span>:
							</div>
							
							<div class="purchase-full-price">-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->coupon_discount);?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['order']->value->separate_delivery&&$_smarty_tpl->tpl_vars['order']->value->delivery_price>0) {?>
		<div class="purchase-list p-t-1-md_down border-t-1-info_md-down">
			<div class="purchase-row purchase-main">
				<div class="purchase-img hidden-md-down"></div>
				<div class="purchase-name hidden-md-down"></div>
				<div class="purchase-price hidden-md-down"></div>
				<div class="purchase-column">
					<div class="purchase-list">
						<div class="purchase-row">
							<div class="purchase-amount text-xs-center">
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_delivery'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_delivery;?>
</span>:
							</div>
							
							<div class="purchase-full-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->delivery_price);?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->separate_delivery) {?>
        <div class="purchase-list p-t-1-md_down border-t-1-info_md-down">
            <div class="purchase-row purchase-main">
                <div class="purchase-img hidden-md-down"></div>
                <div class="purchase-name hidden-md-down"></div>
                <div class="purchase-price hidden-md-down"></div>
                <div class="purchase-column">
                    <div class="purchase-list">
                        <div class="purchase-row">
                            <div class="purchase-amount text-xs-center">
                                <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_delivery'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_delivery;?>
</span>:
                            </div>
                            
                            <div class="purchase-full-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->delivery_price);?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
	<div class="purchase-list p-t-1-md_down border-t-1-info_md-down m-b-1">
		<div class="purchase-row purchase-main">
			<div class="purchase-img hidden-md-down"></div>
			<div class="purchase-name hidden-md-down"></div>
			<div class="purchase-price hidden-md-down"></div>
			<div class="purchase-column">
				<div class="purchase-list">
					<div class="purchase-row">
						<div class="purchase-amount text-xs-center">
							<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_total_price'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_total_price;?>
</span>:
						</div>
						
						<div class="purchase-full-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price);?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="h5 m-b-1">
				<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_details'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_details;?>
</span>
			</div>
			
			<table class="table table-striped">
				<tr>
					<td>
						<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_status'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_status;?>
</span>
					</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['order']->value->status==0) {?><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['status_accepted'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->status_accepted;?>
</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['order']->value->status==1) {?><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['status_pending'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->status_pending;?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==2) {?><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['status_made'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->status_made;?>
</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['order']->value->paid==1) {?>, <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['status_paid'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->status_paid;?>
</span><?php } else { ?><?php }?>
					</td>
				</tr>
				<tr>
					<td>
						<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_date;?>
</span>
					</td>
					<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
 <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_time'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_time;?>
</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
</td>
				</tr>
				<tr>
					<td>
						<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_name;?>
</span>
					</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
				</tr>
				<tr>
					<td>
						<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_email;?>
</span>
					</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['order']->value->phone) {?>
					<tr>
						<td>
							<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_phone;?>
</span>
						</td>
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value->address) {?>
					<tr>
						<td>
							<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_address'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_address;?>
</span>
						</td>
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value->comment) {?>
					<tr>
						<td>
							<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_comment'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_comment;?>
</span>
						</td>
						<td><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true));?>
</td>
					</tr>
				<?php }?>
			</table>
		</div>
		<?php if (!$_smarty_tpl->tpl_vars['order']->value->paid) {?>
			<div class="col-lg-6">
				
				<div class="h5 m-b-1">
					<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_payment_details'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_payment_details;?>
</span>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['payment_methods']->value&&!$_smarty_tpl->tpl_vars['payment_method']->value&&$_smarty_tpl->tpl_vars['order']->value->total_price>0) {?>
					<form method="post">
						<?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['payment_method']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
 $_smarty_tpl->tpl_vars['payment_method']->index++;
 $_smarty_tpl->tpl_vars['payment_method']->first = $_smarty_tpl->tpl_vars['payment_method']->index === 0;
?>
							<div class="m-l-2<?php if ($_smarty_tpl->tpl_vars['payment_method']->first) {?> active<?php }?>">
								<label class="font-weight-bold">
									<input type="radio" name="payment_method_id" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['delivery']->first&&$_smarty_tpl->tpl_vars['payment_method']->first) {?> checked<?php }?> id="payment_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"/>
                                    <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?>
                                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['payment_method']->value->image,50,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir);?>
"/>
                                    <?php }?>
                                    <?php $_smarty_tpl->tpl_vars['total_price_with_delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->total_price, null, 0);?>
									<?php if (!$_smarty_tpl->tpl_vars['delivery']->value->separate_payment&&$_smarty_tpl->tpl_vars['cart']->value->total_price<$_smarty_tpl->tpl_vars['delivery']->value->free_from) {?>
										<?php $_smarty_tpl->tpl_vars['total_price_with_delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->total_price+$_smarty_tpl->tpl_vars['delivery']->value->price, null, 0);?>
									<?php }?>
									<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_deliveries_to_pay;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['payment_method']->value->currency_id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['all_currencies']->value[$_smarty_tpl->tpl_vars['payment_method']->value->currency_id]->sign;?>

								</label>
								<div class="m-l-2 payment-description">
									<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->description;?>

								</div>
							</div>
						<?php } ?>
						<div class="text-xs-right m-b-1">
							<input type="submit" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_checkout'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_checkout;?>
" name="checkout" class="btn btn-warning">
						</div>
					</form>
				
				<?php } elseif ($_smarty_tpl->tpl_vars['payment_method']->value) {?>
					<table class="table table-striped m-b-2">
						<tr>
							<td>
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_payment'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_payment;?>
</span>
							</td>
							<td><?php echo $_smarty_tpl->tpl_vars['payment_method']->value->name;?>
</td>
						</tr>
						<tr>
							<td class="text-xs-right reset-payment" colspan="2">
								<form method="post">
									<input class="btn btn-success btn-sm" type=submit name='reset_payment_method' data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['order_change_payment'];?>
" value='<?php echo $_smarty_tpl->tpl_vars['lang']->value->order_change_payment;?>
'/>
								</form>
							</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['payment_method']->value->description) {?>
							<tr>
								<td colspan="2" class="clear-in"><?php echo $_smarty_tpl->tpl_vars['payment_method']->value->description;?>
</td>
							</tr>
						<?php }?>
					</table>
					
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkout_form'][0][0]->checkout_form(array('order_id'=>$_smarty_tpl->tpl_vars['order']->value->id,'module'=>$_smarty_tpl->tpl_vars['payment_method']->value->module),$_smarty_tpl);?>

				<?php }?>
			</div>
		<?php }?>
	</div>
</div><?php }} ?>
