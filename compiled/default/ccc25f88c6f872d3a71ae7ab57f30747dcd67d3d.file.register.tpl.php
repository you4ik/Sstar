<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 03:44:46
         compiled from "C:\OpenServer\domains\localhost\design\default\html\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26201582fa07e7d4c37-74921116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccc25f88c6f872d3a71ae7ab57f30747dcd67d3d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\register.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26201582fa07e7d4c37-74921116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'translate_id' => 0,
    'error' => 0,
    'name' => 0,
    'email' => 0,
    'phone' => 0,
    'address' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582fa07e9e4cf4_06137537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582fa07e9e4cf4_06137537')) {function content_582fa07e9e4cf4_06137537($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\OpenServer\\domains\\localhost\\Smarty\\libs\\plugins\\function.math.php';
?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/user/register", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->register_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div class="container">
	
	<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<h1 class="m-b-1">
		<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['register_header'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->register_header;?>
</span>
	</h1>

	<div class="col-lg-4 p-y-1 bg-info m-b-2">
		
		<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
			<div class="p-x-1 p-y-05 text-red m-b-1">
				<?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
					<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
					<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_password') {?>
					<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_password'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='user_exists') {?>
					<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['register_user_registered'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->register_user_registered;?>
</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
					<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_error_captcha'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

				<?php }?>
			</div>
		<?php }?>
		<form method="post">
			
			<div class="form-group">
				<input class="form-control" type="text" name="name" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*"/>
			</div>
			
			<div class="form-group">
				<input class="form-control" type="text" name="email" data-format="email" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_email'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*"/>
			</div>

            <div class="form-group">
                <input class="form-control" type="text" name="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_phone'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
"/>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_address'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
"/>
            </div>

			
			<div class="form-group">
				<input class="form-control" type="password" name="password" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
" value="" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_password'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_password;?>
*"/>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_register) {?>
				<div class="row">
					<div class="col-xs-12 col-lg-9 form-inline m-b-1">
						
						<div class="form-group">
							<input class="form-control" type="text" name="captcha_code" value="" data-format="\d\d\d\d\d" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_captcha'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*"/>
						</div>

						
						<div class="form-group">
							<img class="brad-3" src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
" alt="captcha"/>
						</div>
					</div>
				</div>
			<?php }?>
			
			<div>
				<input type="submit" class="btn btn-warning" name="register" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['register_create_account'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->register_create_account;?>
">
			</div>
		</form>
	</div>
</div><?php }} ?>
