<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:24:11
         compiled from "C:\OpenServer\domains\localhost\design\default\html\cart_deliveries.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3777582f717b56ff52-73278082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98525a9e041bf3e925cde255f623bb0c38bcb004' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\cart_deliveries.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3777582f717b56ff52-73278082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'deliveries' => 0,
    'translate_id' => 0,
    'lang' => 0,
    'delivery' => 0,
    'delivery_id' => 0,
    'config' => 0,
    'cart' => 0,
    'currency' => 0,
    'payment_method' => 0,
    'total_price_with_delivery' => 0,
    'all_currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f717b78e3e6_76871363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f717b78e3e6_76871363')) {function content_582f717b78e3e6_76871363($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['deliveries']->value) {?>
	
    <div class="border-a-1-info p-a-1 m-b-2">
        <div class="h5 i-delivery m-b-1"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_delivery'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_delivery;?>
</span></div>
        <?php  $_smarty_tpl->tpl_vars['delivery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['delivery']->iteration=0;
 $_smarty_tpl->tpl_vars['delivery']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->key => $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->_loop = true;
 $_smarty_tpl->tpl_vars['delivery']->iteration++;
 $_smarty_tpl->tpl_vars['delivery']->index++;
 $_smarty_tpl->tpl_vars['delivery']->first = $_smarty_tpl->tpl_vars['delivery']->index === 0;
?>
            <div class="m-l-2">
                <label class="font-weight-bold<?php if ($_smarty_tpl->tpl_vars['delivery']->first) {?> active<?php }?>">
	                <input onclick="change_payment_method(<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
)" type="radio" name="delivery_id" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['delivery_id']->value==$_smarty_tpl->tpl_vars['delivery']->value->id||$_smarty_tpl->tpl_vars['delivery']->first) {?> checked<?php }?> id="deliveries_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"/>
                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value->image) {?>
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['delivery']->value->image,50,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir);?>
"/>
                    <?php }?>
	                <?php echo $_smarty_tpl->tpl_vars['delivery']->value->name;?>

	                <?php if ($_smarty_tpl->tpl_vars['cart']->value->total_price<$_smarty_tpl->tpl_vars['delivery']->value->free_from&&$_smarty_tpl->tpl_vars['delivery']->value->price>0) {?>
	                    (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['delivery']->value->price);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
)
	                <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value->total_price>=$_smarty_tpl->tpl_vars['delivery']->value->free_from) {?>
	                    <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_free'];?>
">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_free;?>
)</span>
	                <?php }?>
                </label>
                <div class="m-l-2 delivery-description">
                    <?php echo $_smarty_tpl->tpl_vars['delivery']->value->description;?>

                </div>
            </div>
        <?php } ?>
    </div>

	
	<?php  $_smarty_tpl->tpl_vars['delivery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['delivery']->iteration=0;
 $_smarty_tpl->tpl_vars['delivery']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->key => $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->_loop = true;
 $_smarty_tpl->tpl_vars['delivery']->iteration++;
 $_smarty_tpl->tpl_vars['delivery']->index++;
 $_smarty_tpl->tpl_vars['delivery']->first = $_smarty_tpl->tpl_vars['delivery']->index === 0;
?>
		<?php if ($_smarty_tpl->tpl_vars['delivery']->value->payment_methods) {?>
			<div class="fn-delivery_payment border-a-1-info p-a-1" id="fn-delivery_payment_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['delivery']->iteration!=1) {?> style="display:none"<?php }?>>
				<div class="h5 i-payment m-b-1"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_payment'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_payment;?>
</span></div>
				<?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['delivery']->value->payment_methods; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['payment_method']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
 $_smarty_tpl->tpl_vars['payment_method']->index++;
 $_smarty_tpl->tpl_vars['payment_method']->first = $_smarty_tpl->tpl_vars['payment_method']->index === 0;
?>
					<div class="m-l-2">
						<label class="font-weight-bold<?php if ($_smarty_tpl->tpl_vars['payment_method']->first) {?> active<?php }?>">
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
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['total_price_with_delivery']->value,$_smarty_tpl->tpl_vars['payment_method']->value->currency_id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['all_currencies']->value[$_smarty_tpl->tpl_vars['payment_method']->value->currency_id]->sign;?>

						</label>
						<div class="m-l-2 payment-description">
							<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->description;?>

						</div>
					</div>
				<?php } ?>
			</div>
		<?php }?>
	<?php } ?>
<?php }?><?php }} ?>
