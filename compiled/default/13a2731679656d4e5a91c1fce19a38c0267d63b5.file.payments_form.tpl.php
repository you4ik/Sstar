<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:24:59
         compiled from "design\default\html\payments_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23365582f71abe06c66-14698870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a2731679656d4e5a91c1fce19a38c0267d63b5' => 
    array (
      0 => 'design\\default\\html\\payments_form.tpl',
      1 => 1474626120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23365582f71abe06c66-14698870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_module' => 0,
    'settings_pay' => 0,
    'order' => 0,
    'payment_currency' => 0,
    'price' => 0,
    'desc' => 0,
    'success_url' => 0,
    'callback_url' => 0,
    'lang' => 0,
    'public_key' => 0,
    'liqpay_order_id' => 0,
    'result_url' => 0,
    'server_url' => 0,
    'sign' => 0,
    'currency' => 0,
    'return_url' => 0,
    'xml_encoded' => 0,
    'sign_encoded' => 0,
    'url' => 0,
    'payment_system' => 0,
    'payment_settings' => 0,
    'currency_code' => 0,
    'signature' => 0,
    'fail_url' => 0,
    'paypal_url' => 0,
    'ipn_url' => 0,
    'coupon_discount' => 0,
    'purchases' => 0,
    'purchase' => 0,
    'payment_method' => 0,
    'i' => 0,
    'delivery_price' => 0,
    'data' => 0,
    'login' => 0,
    'inv_id' => 0,
    'inv_desc' => 0,
    'phone' => 0,
    'message' => 0,
    'amount' => 0,
    'mrh_login' => 0,
    'crc' => 0,
    'in_curr' => 0,
    'culture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f71ac1b2fb3_70023564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f71ac1b2fb3_70023564')) {function content_582f71ac1b2fb3_70023564($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['payment_module']->value=="Interkassa") {?>
    
    <div class="row">
	    <form class="col-lg-7 m-b-2" name="payment" method="post" action="https://sci.interkassa.com/" accept-charset="UTF-8">
		    <input type="hidden" name="ik_co_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_pay']->value['ik_co_id'], ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="ik_pm_no" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="ik_cur"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="ik_am"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="ik_desc"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="ik_suc_u" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="ik_ia_u"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="submit" name="process"  value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
" class="btn btn-warning btn-block">
	    </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Liqpay") {?>
    
    <div class="row">
	    <form class="col-lg-7 m-b-2" method="post" action="https://www.liqpay.com/api/pay">
		    <input type="hidden" name="public_key"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['public_key']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="amount"      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="currency"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="description" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="order_id"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['liqpay_order_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="result_url"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="server_url"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="type"        value="buy"/>
		    <input type="hidden" name="signature"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sign']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="submit" class="btn btn-warning btn-block" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
	    </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="OKPay") {?>
    
    <div class="row">
	    <form class="col-lg-7 m-b-2" action="https://www.okpay.com/process.html" method="post">
		    <input type="hidden" name="ok_receiver"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_pay']->value['okpay_reciever'], ENT_QUOTES, 'UTF-8', true);?>
" />
		    <input type="hidden" name="ok_invoice"        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" />
		    <input type="hidden" name="ok_item_1_name"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		    <input type="hidden" name="ok_item_1_price"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		    <input type="hidden" name="ok_currency"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
" />
		    <input type="hidden" name="ok_return_success" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		    <input type="hidden" name="ok_return_fail"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		    <input type="submit" class="btn btn-warning btn-block" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
	    </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Pay2Pay") {?>
    
    <div class="row">
	    <form class="col-lg-7 m-b-2" action="https://merchant.pay2pay.com/?page=init" method="post">
		    <input type="hidden" name="xml"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xml_encoded']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="sign" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sign_encoded']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="submit" class="btn btn-warning btn-block" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
	    </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Payanyway") {?>
	
    <div class="row">
	    <form class="col-lg-7 m-b-2" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">
		    <input type="hidden" name="payment_system"     value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_system']->value[0], ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="MNT_ID"             value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['MNT_ID'], ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="MNT_TRANSACTION_ID" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="MNT_AMOUNT"         value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="MNT_CURRENCY_CODE"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="MNT_SIGNATURE"      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['signature']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="MNT_SUCCESS_URL"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="hidden" name="MNT_FAIL_URL"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fail_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		    <input type="submit" class="btn btn-warning btn-block" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
	    </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Paypal") {?>
    
    <form class="m-b-2" method="post" action="<?php echo $_smarty_tpl->tpl_vars['paypal_url']->value;?>
">
        <input type="hidden" name="charset"       value="utf-8">
        <input type="hidden" name="currency_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="invoice"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="business"      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['business'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="cmd"           value="_cart">
        <input type="hidden" name="upload"        value="1">
        <input type="hidden" name="rm"            value="2">
        <input type="hidden" name="notify_url"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ipn_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="return"        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="cancel_return" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fail_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	    <?php if ($_smarty_tpl->tpl_vars['order']->value->discount>0) {?>
	        <input type="hidden" name="discount_rate_cart"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->discount, ENT_QUOTES, 'UTF-8', true);?>
">
	    <?php }?>
	    <?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount>0) {?>
	        <input type="hidden" name="discount_amount_cart" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['coupon_discount']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	    <?php }?>
        <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(1, null, 0);?>
	    <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
	        <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['purchase']->value->price,$_smarty_tpl->tpl_vars['payment_method']->value->currency_id,false), null, 0);?>
	        <input type="hidden" name="item_name_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
">
	        <input type="hidden" name="amount_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"    value="<?php echo number_format($_smarty_tpl->tpl_vars['price']->value,2,'.','');?>
">
	        <input type="hidden" name="quantity_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->amount, ENT_QUOTES, 'UTF-8', true);?>
">
	        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
	    <?php } ?>
    <?php $_smarty_tpl->tpl_vars['delivery_price'] = new Smarty_variable(0, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_id&&!$_smarty_tpl->tpl_vars['order']->value->separate_delivery&&$_smarty_tpl->tpl_vars['order']->value->delivery_price>0) {?>
        <?php $_smarty_tpl->tpl_vars['delivery_price'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->delivery_price,$_smarty_tpl->tpl_vars['payment_method']->value->currency_id,false), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['delivery_price'] = new Smarty_variable(number_format($_smarty_tpl->tpl_vars['delivery_price']->value,2,'.',''), null, 0);?>
        <input type="hidden" name="shipping_1" value="<?php echo $_smarty_tpl->tpl_vars['delivery_price']->value;?>
">
    <?php }?>
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_xpressCheckout.gif" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
    </form>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Platon") {?>
    
    <div class="row">
	    <form class="col-lg-7 m-b-2" action="https://secure.platononline.com/webpaygw/pcc.php?a=auth" method="post">
		    <input type="hidden" name="key"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_pay']->value['platon_key'], ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="data"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="url"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="hidden" name="sign"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sign']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		    <input type="submit" class="btn btn-warning btn-block" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
	    </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Qiwi") {?>
    
    <form class="p-t-1 bg-info m-b-2 clearfix" action='https://w.qiwi.com/order/external/create.action'>
        <input type="hidden" name="from"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['login']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="summ"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="txn_id"     value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inv_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="currency"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="comm"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inv_desc']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="successUrl" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="failUrl"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fail_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <div class="form-group col-xs-12">
	        <input class="form-control" type="text" name="to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
"/>
        </div>
	    <div class="form-group col-lg-7">
		    <input type="submit" class="btn btn-warning btn-block" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
	    </div>
    </form>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Receipt") {?>
    
    <form class="bg-info col-lg-7 p-y-1 m-b-2" action="payment/Receipt/callback.php" method="post">
        <input type="hidden" name="recipient"             value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['recipient'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="inn"                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['inn'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="account"               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['account'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="bank"                  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['bank'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="bik"                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['bik'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="correspondent_account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['correspondent_account'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="banknote"              value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['banknote'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="pence"                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['pense'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="order_id"              value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="amount"                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	    <div class="form-group">
		    <input class="form-control" type="text" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
"    name="name"    value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*">
	    </div>
	    <div class="form-group">
		    <input class="form-control" type="text" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_address;?>
" name="address" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
*">
	    </div>
        <input class="btn btn-warning btn-block" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_generate_receipt;?>
">
    </form>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Robokassa") {?>
    
    <div class="row">
	    <form class="col-lg-7 m-b-2" accept-charset="cp1251" action="https://merchant.roboxchange.com/Index.aspx" method="post">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mrh_login']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="MrchLogin">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
"     name="OutSum">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inv_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"    name="InvId">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inv_desc']->value, ENT_QUOTES, 'UTF-8', true);?>
"  name="Desc">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['crc']->value, ENT_QUOTES, 'UTF-8', true);?>
"       name="SignatureValue">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['in_curr']->value, ENT_QUOTES, 'UTF-8', true);?>
"   name="IncCurrLabel">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['culture']->value, ENT_QUOTES, 'UTF-8', true);?>
"   name="Culture">
		    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
" class="btn btn-warning btn-block">
	    </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Webmoney") {?>
    
    <div class="row m-b-2">
	    <form class="col-lg-7" accept-charset="cp1251" method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8', true);?>
"                                name="LMI_PAYMENT_AMOUNT">
		    <input type="hidden" value="<?php echo base64_encode("Оплата заказа "+$_smarty_tpl->tpl_vars['order']->value->id+'');?>
" name="LMI_PAYMENT_DESC_BASE64">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"                             name="LMI_PAYMENT_NO">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['purse'], ENT_QUOTES, 'UTF-8', true);?>
"             name="LMI_PAYEE_PURSE">
		    <input type="hidden" value="0"                                               name="LMI_SIM_MODE">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"                           name="LMI_SUCCESS_URL">
		    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fail_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"                              name="LMI_FAIL_URL">
		    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
" class="btn btn-warning btn-block"/>
	    </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Yandex") {?>
    
    <div class="row">
	    <form class="col-lg-7 m-b-2" method="post" action="https://money.yandex.ru/quickpay/confirm.xml">
            <input name="receiver" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['settings_pay']->value['yandex_id'];?>
">
            <input name="formcomment" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="short-dest"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input name="targets" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="comment"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="quickpay-form" value="shop">
            <input type="hidden" name="sum"           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-type="number">
            <input type="hidden" name="label"         value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
            <input name="paymentType" type="hidden" value="PC">
            <input type="submit" name="submit-button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
" class="btn btn-warning btn-block">
	    </form>
    </div>
<?php }?><?php }} ?>
