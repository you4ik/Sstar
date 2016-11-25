<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:23:35
         compiled from "C:\OpenServer\domains\localhost\design\default\html\password_remind.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8111582f7157eae1e6-19646378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f3836bfe1048e4ce6a802148538bffaf1976b9e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\password_remind.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8111582f7157eae1e6-19646378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'translate_id' => 0,
    'email_sent' => 0,
    'email' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f7158015812_10692597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f7158015812_10692597')) {function content_582f7158015812_10692597($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/user/password_remind", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->password_remind_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div class="container">
	
	<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<h1 class="m-b-1">
		<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['password_remind_header'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_header;?>
</span>
	</h1>

	<?php if ($_smarty_tpl->tpl_vars['email_sent']->value) {?>
		
		<div class="col-lg-4 bg-info p-y-1 h5 m-b-2"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_header'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_on;?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
 <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['password_remind_letter_sent'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_letter_sent;?>
</span>.</div>

	<?php } else { ?>
		<form class="col-lg-4 bg-info p-y-1 h5 m-b-2" method="post">
			
			<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
				<div class="p-x-1 p-y-05 m-b-1 text-red">
					<?php if ($_smarty_tpl->tpl_vars['error']->value=='user_not_found') {?>
						<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['password_remind_user_not_found'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_user_not_found;?>
</span>
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

					<?php }?>
				</div>
			<?php }?>
			<div class="form-group">
				
				<label class="m-b-0">
					<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['password_remind_enter_your_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_enter_your_email;?>
</span>
					<input class="form-control m-t-1" type="text" name="email" data-format="email" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_email'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*"/>
				</label>
			</div>
			
			<div class="text-xs-right">
				<input type="submit" class="btn btn-warning" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['password_remind_remember'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->password_remind_remember;?>
"/>
			</div>
		</form>
	<?php }?>
</div><?php }} ?>
