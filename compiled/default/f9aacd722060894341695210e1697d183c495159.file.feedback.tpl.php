<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:14:40
         compiled from "C:\OpenServer\domains\localhost\design\default\html\feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24788582f6f405db809-91819272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9aacd722060894341695210e1697d183c495159' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\feedback.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24788582f6f405db809-91819272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'translate_id' => 0,
    'lang' => 0,
    'error' => 0,
    'user' => 0,
    'name' => 0,
    'email' => 0,
    'message' => 0,
    'settings' => 0,
    'message_sent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f6f406d4bb0_85852581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f6f406d4bb0_85852581')) {function content_582f6f406d4bb0_85852581($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\OpenServer\\domains\\localhost\\Smarty\\libs\\plugins\\function.math.php';
?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="container">
	
	<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<h1 class="m-b-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>

	<div class="row">
		
		<?php if ($_smarty_tpl->tpl_vars['page']->value->body) {?>
			<div class="col-lg-6">
				<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

			</div>
		<?php }?>

		
		<div class="col-lg-6 m-b-2">
				<form class="bg-info p-a-1" method="post">
					
					<div class="h3 text-xs-center" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['feedback_feedback'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->feedback_feedback;?>
</div>

					
					<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
						<div class="p-x-1 p-y-05 m-b-1 text-red">
							<?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_error_captcha'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['vvedite_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->vvedite_email;?>
</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_text') {?>
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['vvedite_soobschenie'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->vvedite_soobschenie;?>
</span>
							<?php }?>
						</div>
					<?php }?>

					<div class="row">
						
						<div class="col-lg-6 form-group">
							<input class="form-control" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
" value="<?php if ($_smarty_tpl->tpl_vars['user']->value->name) {?><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" name="name" type="text" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*"/>
						</div>

						
						<div class="col-lg-6 form-group">
							<input class="form-control" data-format="email" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
" value="<?php if ($_smarty_tpl->tpl_vars['user']->value->email) {?><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" name="email" type="text" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_email'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*"/>
						</div>

					</div>
					
					<div class="form-group">
						<textarea class="form-control" rows="3" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
" name="message" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_message'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
*"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
					</div>
					<div class="row">
						<?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_feedback) {?>
							<div class="col-xs-12 col-lg-6 form-inline m-b-1-md_down">
								
								<div class="form-group">
									<img class="brad-3" src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
" alt="captcha" title="captcha"/>
								</div>

								
								<div class="form-group">
									<input class="form-control" type="text" name="captcha_code" value="" data-format="\d\d\d\d\d" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_captcha'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*"/>
								</div>
							</div>
						<?php }?>
						
						<div class="col-xs-12 col-lg-6 text-xs-right">
							<input class="btn btn-warning" type="submit" name="feedback" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_send'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
"/>
						</div>
					</div>
				</form>
		</div>
	</div>
    <?php if ($_smarty_tpl->tpl_vars['message_sent']->value) {?>
        <div class="h3 m-b-1 text-success text-center clearfix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
, <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['feedback_message_sent'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->feedback_message_sent;?>
</span>.</div>
    <?php }?>

	
	<div id="fn-map" class="m-b-2">
        <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=33OLs0Ell3u6mHqRQPSPPzVoGoVJGLmo&width=100%&height=400&lang=<?php echo $_smarty_tpl->tpl_vars['lang']->value->yandex_map_lang;?>
&sourceType=constructor"></script>
    </div>
</div><?php }} ?>
