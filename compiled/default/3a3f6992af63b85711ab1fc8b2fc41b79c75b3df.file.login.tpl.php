<?php /* Smarty version Smarty-3.1.18, created on 2016-11-18 23:38:44
         compiled from "C:\OpenServer\domains\localhost\design\default\html\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15438582f66d449bff9-24035645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a3f6992af63b85711ab1fc8b2fc41b79c75b3df' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\login.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15438582f66d449bff9-24035645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'translate_id' => 0,
    'error' => 0,
    'email' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f66d45575a3_26195885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f66d45575a3_26195885')) {function content_582f66d45575a3_26195885($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/user/login", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->login_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div class="container">
	
	<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<h1 class="m-b-1"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['login_enter'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_enter;?>
</span></h1>

	<div class="col-lg-4 p-y-1 bg-info m-b-2">
		
		<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
			<div class="p-x-1 p-y-05 text-red m-b-1">
				<?php if ($_smarty_tpl->tpl_vars['error']->value=='login_incorrect') {?>
					<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['login_error_pass'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_error_pass;?>
</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='user_disabled') {?>
					<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['login_pass_not_active'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_pass_not_active;?>
</span>
				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

				<?php }?>
			</div>
		<?php }?>
		
		<form method="post">
			
			<div class="form-group">
				<input class="form-control" type="text" name="email" data-format="email" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_email'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*"/>
			</div>

			<div class="form-group input-group">
				
				<input class="form-control" type="password" name="password" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
" value="" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_password'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_password;?>
*"/>

				
				<div class="input-group-btn">
					<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/password_remind" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['login_remind'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_remind;?>
</a>
				</div>
			</div>
			
			<div class="clearfix">
				<a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/register" class="btn btn-success" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['login_registration'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_registration;?>
</a>
				<input type="submit" class="btn btn-warning pull-xs-right" name="login" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['login_sign_in'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->login_sign_in;?>
">
			</div>
		</form>
	</div>
</div><?php }} ?>
