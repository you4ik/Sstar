<?php /* Smarty version Smarty-3.1.18, created on 2016-11-18 23:38:38
         compiled from "C:\OpenServer\domains\localhost\design\default\html\callback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8133582f66cee76f89-51189761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1436eca77f1479a58f4bb7038e800c2c241bd669' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\callback.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8133582f66cee76f89-51189761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'translate_id' => 0,
    'lang' => 0,
    'user' => 0,
    'name' => 0,
    'phone' => 0,
    'call_sent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f66ceeba350_01504707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f66ceeba350_01504707')) {function content_582f66ceeba350_01504707($_smarty_tpl) {?>
<div class="hidden-xs-up">
	<form id="fn-callback" class="bg-info p-a-1" method="post">
		
		<div class="h3 m-b-1 text-xs-center" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['callback_header'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_header;?>
</div>

		
		<div class="form-group">
			<input class="form-control" type="text" name="name" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
" value="<?php if ($_smarty_tpl->tpl_vars['user']->value->name) {?><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*"/>
		</div>

		
		<div class="form-group">
			<input class="form-control" type="text" name="phone" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_phone;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_phone'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
*"/>
		</div>

        <div class="form-group">
            <textarea class="form-control" rows="3" name="message" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_message'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
*"></textarea>
        </div>

		
		<div class="text-xs-center">
			<input class="btn btn-warning" type="submit" name="callback" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['callback_order'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_order;?>
"/>
		</div>

	</form>
</div>

<?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
	<div class="hidden-xs-up">
		<div id="fn-callback-sent" class="bg-info p-a-1">
			<div class="h4 m-b-1 text-xs-center" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['callback_sent_header'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_sent_header;?>
</div>
			<div data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['callback_sent_text'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_sent_text;?>
</div>
		</div>
	</div>
<?php }?>
<?php }} ?>
