<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:24:31
         compiled from "C:\OpenServer\domains\localhost\design\default\html\email_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1224582f718f22ce03-76269461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e44fdc5398cf54e9b318d9e6804b627802117782' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\email_order.tpl',
      1 => 1474626120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1224582f718f22ce03-76269461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'order' => 0,
    'config' => 0,
    'lang_link' => 0,
    'currency' => 0,
    'purchases' => 0,
    'purchase' => 0,
    'image' => 0,
    'settings' => 0,
    'delivery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f718f3e0aa0_06847406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f718f3e0aa0_06847406')) {function content_582f718f3e0aa0_06847406($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['subject'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['lang']->value->email_order_order)." №".((string)$_smarty_tpl->tpl_vars['order']->value->id), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['subject'] = clone $_smarty_tpl->tpl_vars['subject'];?>
<h1 style="text-align: center;font: 18px;background: #41ade2;color: #fff;padding: 5px; width: 800px;">
    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
" style="color: #fff!important;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_title;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
    <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_on_total;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

    <?php if ($_smarty_tpl->tpl_vars['order']->value->paid==1) {?>
    <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_paid;?>

    <?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_not_paid;?>

    <?php }?>,
    <?php if ($_smarty_tpl->tpl_vars['order']->value->status==0) {?>
        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_status_0;?>

    <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==1) {?>
        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_status_1;?>

    <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==2) {?>
        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_status_2;?>

    <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==3) {?>
        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_status_3;?>

    <?php }?>
</h1>
<table cellpadding="6" cellspacing="0" style="border-collapse: collapse; border: 2px solid #41ade2; width: 100%">
	<tr style="border-bottom: 2px solid #41ade2;">
		<td style=" width:300px;float: left;;padding: 5px;">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_status;?>

		</td>
		<td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
            <?php if ($_smarty_tpl->tpl_vars['order']->value->status==0) {?>
                <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_status_0;?>

            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==1) {?>
                <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_status_1;?>

            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==2) {?>
                <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_status_2;?>

            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==3) {?>
                <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_status_3;?>

            <?php }?>
		</td>
	</tr>
	<tr style="border-bottom: 2px solid #41ade2;">
		<td style=" width:300px;float: left;;padding: 5px;">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_payment;?>

		</td>
		<td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
			<?php if ($_smarty_tpl->tpl_vars['order']->value->paid==1) {?>
			<span style="color: green;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_paid;?>
</span>
			<?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_not_paid;?>

			<?php }?>
		</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->name) {?>
	<tr style="border-bottom: 2px solid #41ade2;">
		<td style=" width:300px;float: left;;padding: 5px;">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_name;?>

		</td>
		<td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>

		</td>
	</tr>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->email) {?>
	<tr style="border-bottom: 2px solid #41ade2;">
		<td style=" width:300px;float: left;;padding: 5px;">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_email;?>

		</td>
		<td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>

		</td>
	</tr>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->phone) {?>
	<tr style="border-bottom: 2px solid #41ade2;">
		<td style=" width:300px;float: left;;padding: 5px;">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_phone;?>

		</td>
		<td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>

		</td>
	</tr>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->address) {?>
	<tr style="border-bottom: 2px solid #41ade2;">
		<td style=" width:300px;float: left;;padding: 5px;">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_address;?>

		</td>
		<td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>

		</td>
	</tr>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->comment) {?>
	<tr style="border-bottom: 2px solid #41ade2;">
		<td style=" width:300px;float: left;;padding: 5px;">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_comment;?>

		</td>
		<td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
			<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true));?>

		</td>
	</tr>
	<?php }?>
	<tr style="border-bottom: 2px solid #41ade2;">
		<td style=" width:300px;float: left;;padding: 5px;">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_date;?>

		</td>
		<td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>

		</td>
	</tr>
</table>

<h1 style="font: 18px;background: #41ade2;color: #fff;padding: 5px;margin-top: 15px;width: 100%;clear: both"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_purchases;?>
</h1>

<table cellpadding="6" cellspacing="0" style="border-collapse: collapse; border: 2px solid #2c6f95;width: 100%">

	<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
	<tr style="border-bottom:2px solid #2c6f95">
		<td align="center" style="padding:6px; width:100px; background-color:#ffffff;font-family:arial;">
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['purchase']->value->product->images[0], null, 0);?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
">
                <img border="0" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,50,50);?>
">
            </a>
		</td>
		<td style="padding:6px; width:300px; padding:6px; background-color:#41ade2; ;font-family:arial;">
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
" style="color: #fff!important;">
                <?php echo $_smarty_tpl->tpl_vars['purchase']->value->product_name;?>

            </a>
			<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant_name;?>

			<?php if ($_smarty_tpl->tpl_vars['order']->value->paid&&$_smarty_tpl->tpl_vars['purchase']->value->variant->attachment) {?>
			<br>
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->attachment;?>
" style="color: #fff!important;">
                <span style="color: green;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_download;?>
 <?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->attachment;?>
</span>
            </a>
			<?php }?>
		</td>
		<td align=left style="padding:6px; text-align:right; width:150px; background-color:#ffffff; ;font-family:arial;">
			<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
 <?php echo $_smarty_tpl->tpl_vars['settings']->value->units;?>
 &times; <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['purchase']->value->price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

		</td>
	</tr>
	<?php } ?>
	
	<?php if ($_smarty_tpl->tpl_vars['order']->value->discount) {?>
	<tr>
		<td style="padding:6px; width:100px;background-color:#ffffff; ;font-family:arial;"></td>
		<td style="padding:6px; background-color:#41ade2; ;font-family:arial;">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_discount;?>

		</td>
		<td align=left style="padding:6px; text-align:right; width:150px; background-color:#ffffff; ;font-family:arial;">
			<?php echo $_smarty_tpl->tpl_vars['order']->value->discount;?>
&nbsp;%
		</td>
	</tr>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount>0) {?>
	<tr>
		<td style="padding:6px; width:100px; background-color:#ffffff; ;font-family:arial;"></td>
		<td style="padding:6px; background-color:#41ade2; ;font-family:arial;">
		    <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_coupon;?>
	<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_code;?>

		</td>
		<td align=left style="padding:6px; text-align:right; width:150px; background-color:#ffffff; ;font-family:arial;">
			&minus;<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_discount;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

		</td>
	</tr>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['delivery']->value&&!$_smarty_tpl->tpl_vars['order']->value->separate_delivery) {?>
	<tr>
		<td style="padding:6px; width:100px; background-color:#ffffff; ;font-family:arial;"></td>
		<td style="padding:6px; background-color:#41ade2; ;font-family:arial;">
			<?php echo $_smarty_tpl->tpl_vars['delivery']->value->name;?>

		</td>
		<td align="right" style="padding:6px; text-align:right; width:150px; background-color:#ffffff; ;font-family:arial;">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->delivery_price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

		</td>
	</tr>
	<?php }?>
	
	<tr>
		<td style="padding:6px; width:100px; background-color:#ffffff; ;font-family:arial;"></td>
		<td style="padding:6px; background-color:#41ade2; ;font-family:arial;font-weight:bold;">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_total;?>

		</td>
		<td align="right" style="padding:6px; text-align:right; width:150px; background-color:#ffffff; ;font-family:arial;font-weight:bold;">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

		</td>
	</tr>
</table>

<div style="float: left;width: 800px; border: 2px dashed #41ade2; text-align: center;margin-top: 10px;padding: 5px">
    <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_info;?>
<br>
    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
">
        <?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>

    </a>
</div><?php }} ?>
