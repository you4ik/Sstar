<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:24:31
         compiled from "C:\OpenServer\domains\localhost\backend\design\html\email_order_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10593582f718f953003-32793256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6652c16cef6e3cde90566a39881ed3785e3a7d2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\backend\\design\\html\\email_order_admin.tpl',
      1 => 1476800152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10593582f718f953003-32793256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'config' => 0,
    'main_currency' => 0,
    'user' => 0,
    'purchases' => 0,
    'purchase' => 0,
    'lang_link' => 0,
    'image' => 0,
    'settings' => 0,
    'currency' => 0,
    'delivery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f718fa5e787_03259543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f718fa5e787_03259543')) {function content_582f718fa5e787_03259543($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['order']->value->paid) {?>
<?php $_smarty_tpl->tpl_vars['subject'] = new Smarty_variable("Заказ №".((string)$_smarty_tpl->tpl_vars['order']->value->id)." оплачен", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['subject'] = clone $_smarty_tpl->tpl_vars['subject'];?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['subject'] = new Smarty_variable("Новый заказ №".((string)$_smarty_tpl->tpl_vars['order']->value->id), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['subject'] = clone $_smarty_tpl->tpl_vars['subject'];?>
<?php }?>
<h1 style="text-align: center;font: 18px;background: #41ade2;color: #fff;padding: 5px; width: 800px;">
	<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/backend/index.php?module=OrderAdmin&id=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">Заказ №<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
	на сумму <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['main_currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['main_currency']->value->sign;?>

	<?php if ($_smarty_tpl->tpl_vars['order']->value->paid==1) {?>
        оплачен
    <?php } else { ?>
        еще не оплачен
    <?php }?>,
	<?php if ($_smarty_tpl->tpl_vars['order']->value->status==0) {?>
        ждет обработки
    <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==1) {?>
        в обработке
    <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==2) {?>
        выполнен
    <?php }?>
</h1>

<table cellpadding="6" cellspacing="0" style="border-collapse: collapse; border: 2px solid #41ade2;">
    <tr style="border-bottom: 2px solid #41ade2;">
        <td style=" width:300px;float: left;;padding: 5px;">
            Статус
        </td>
        <td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
            <?php if ($_smarty_tpl->tpl_vars['order']->value->status==0) {?>
                ждет обработки
            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==1) {?>
                в обработке
            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==2) {?>
                выполнен
            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==3) {?>
                отменен
            <?php }?>
        </td>
    </tr>
    <tr style="border-bottom: 2px solid #41ade2;">
        <td style=" width:300px;float: left;;padding: 5px;">
            Оплата
        </td>
        <td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
            <?php if ($_smarty_tpl->tpl_vars['order']->value->paid==1) {?>
                <span style="color: green;">оплачен</span>
            <?php } else { ?>
                не оплачен
            <?php }?>
        </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->name) {?>
        <tr style="border-bottom: 2px solid #41ade2;">
            <td style=" width:300px;float: left;;padding: 5px;">
                Имя, фамилия
            </td>
            <td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                (<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/backend/index.php?module=UserAdmin&id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
                    зарегистрированный пользователь
                </a>)
                <?php }?>

            </td>
        </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->email) {?>
        <tr style="border-bottom: 2px solid #41ade2;">
            <td style=" width:300px;float: left;;padding: 5px;">
                Email
            </td>
            <td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>

            </td>
        </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->phone) {?>
        <tr style="border-bottom: 2px solid #41ade2;">
            <td style=" width:300px;float: left;;padding: 5px;">
                Телефон
            </td>
            <td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>

            </td>
        </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->address) {?>
        <tr style="border-bottom: 2px solid #41ade2;">
            <td style=" width:300px;float: left;;padding: 5px;">
                Адрес доставки
            </td>
            <td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>

            </td>
        </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->comment) {?>
        <tr style="border-bottom: 2px solid #41ade2;">
            <td style=" width:300px;float: left;;padding: 5px;">
                Комментарий
            </td>
            <td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
                <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true));?>

            </td>
        </tr>
    <?php }?>
    <tr style="border-bottom: 2px solid #41ade2;">
        <td style=" width:300px;float: left;;padding: 5px;">
            Дата
        </td>
        <td style=" width:300px;float: left;;padding: 5px;border-left: 1px solid #41ade2;">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>

        </td>
    </tr>
</table>

<h1 style="float: left;font: 18px;background: #41ade2;color: #fff;padding: 5px;margin-top: 15px;width: 800px;">Заказ покупателя:</h1>

<table cellpadding="6" cellspacing="0" style="border-collapse: collapse; border: 2px solid #2c6f95">

    <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
        <tr style="border-bottom:2px solid #2c6f95">
            <td align="center" style="padding:6px; width:100px; background-color:#ffffff; ;font-family:arial;">
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
                        <span style="color: green;">Скачать <?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->attachment;?>
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
                Скидка
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
                Купон <?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_code;?>

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
            Итого
        </td>
        <td align="right" style="padding:6px; text-align:right; width:150px; background-color:#ffffff; ;font-family:arial;font-weight:bold;">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

        </td>
    </tr>
</table>

<div style="float: left;width: 800px; border: 2px dashed #41ade2; text-align: center;margin-top: 10px;padding: 5px">
    Приятной работы с <a href='http://okay-cms.com'>Okay</a>!
</div><?php }} ?>
