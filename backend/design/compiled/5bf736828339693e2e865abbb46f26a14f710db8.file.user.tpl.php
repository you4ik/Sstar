<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:27:36
         compiled from "backend\design\html\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12280582f724809c543-93473101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bf736828339693e2e865abbb46f26a14f710db8' => 
    array (
      0 => 'backend\\design\\html\\user.tpl',
      1 => 1476800152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12280582f724809c543-93473101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'user' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'groups' => 0,
    'g' => 0,
    'orders' => 0,
    'order' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f72481bbef0_34857935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f72481bbef0_34857935')) {function content_582f72481bbef0_34857935($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<li class="active">
        <a href="index.php?module=UsersAdmin">Пользователи</a>
    </li>
	<?php if (in_array('groups',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=GroupsAdmin">Группы</a>
        </li>
    <?php }?>
	<?php if (in_array('coupons',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=CouponsAdmin">Купоны</a>
        </li>
    <?php }?>
    <?php if (in_array('users',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=SubscribeMailingAdmin">Подписчики</a>
        </li>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['user']->value->id) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <!-- Системное сообщение -->
    <div class="message message_success">
        <span class="text"><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>Пользователь отредактирован<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
        <?php if ($_GET['return']) {?>
        <a class="button" href="<?php echo $_GET['return'];?>
">Вернуться</a>
        <?php }?>
    </div>
    <!-- Системное сообщение (The End)-->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <!-- Системное сообщение -->
    <div class="message message_error">
        <span class="text"><?php if ($_smarty_tpl->tpl_vars['message_error']->value=='login_exists') {?>Пользователь с таким email уже зарегистрирован
        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_name') {?>Введите имя пользователя
        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_email') {?>Введите email пользователя
        <?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
        <?php if ($_GET['return']) {?>
        <a class="button" href="<?php echo $_GET['return'];?>
">Вернуться</a>
        <?php }?>
    </div>
    <!-- Системное сообщение (The End)-->
<?php }?>



<!-- Основная форма -->
<form method=post id=product>
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		<input class="name" name=name type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/> 
		<input name=id type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/> 
		<div class="checkbox">
			<input name="enabled" value='1' type="checkbox" id="active_checkbox" <?php if ($_smarty_tpl->tpl_vars['user']->value->enabled) {?>checked<?php }?>/> <label class="visible_icon" for="active_checkbox">Активен</label>
		</div>
	</div> 
	

<div id=column_left>
	<!-- Левая колонка свойств товара -->
		<!-- Параметры страницы -->
		<div class="block">
			<ul>
				<?php if ($_smarty_tpl->tpl_vars['groups']->value) {?>
				<li>
					<label class=property>Группа</label>
					<select name="group_id">
						<option value='0'>Не входит в группу</option>
				   		<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
				        	<option value='<?php echo $_smarty_tpl->tpl_vars['g']->value->id;?>
' <?php if ($_smarty_tpl->tpl_vars['user']->value->group_id==$_smarty_tpl->tpl_vars['g']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
				    	<?php } ?>
					</select>
				</li>
				<?php }?>
				<li><label class=property>Email</label><input name="email" class="okay_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
                <li><label class=property>Телефон</label><input name="phone" class="okay_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
                <li><label class=property>Адрес</label><input name="address" class="okay_inp" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->address, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
				<li><label class=property>Дата регистрации</label><input name="email" class="okay_inp" type="text" disabled value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['user']->value->created);?>
" /></li>
				<li><label class=property>Последний IP</label><input name="email" class="okay_inp" type="text" disabled value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->last_ip, ENT_QUOTES, 'UTF-8', true);?>
" /></li>
			</ul>
		</div>
		<!-- Параметры страницы (The End)-->
	<input class="button_green button_save" type="submit" name="user_info" value="Сохранить" />
</div>
	<!-- Левая колонка свойств товара (The End)-->
</form>
<!-- Основная форма (The End) -->
 

<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
<div class="block" id=column_left>
<form id="list" method="post">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<h2>Заказы пользователя</h2>

	<div>		
		<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
		<div class="<?php if ($_smarty_tpl->tpl_vars['order']->value->paid) {?>green<?php }?> row">
	 		<div class="checkbox cell">
				<input type="checkbox" name="check[]" id="user_order_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" />
                <label for="user_order_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"></label>
			</div>
			<div class="order_date cell">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>

			</div>
			<div class="name cell">
				<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrderAdmin','id'=>$_smarty_tpl->tpl_vars['order']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">Заказ №<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
			</div>
			<div class="name cell">
				<?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

			</div>
			<div class="icons cell">
				<?php if ($_smarty_tpl->tpl_vars['order']->value->paid) {?>
                    <img src='design/images/moneybox_paid.png' height="16px" alt='Оплачен' title='Оплачен'>
                <?php } else { ?>
                    <img src='design/images/moneybox.png' height="16px" alt='Не оплачен' title='Не оплачен'>
                <?php }?>	
			</div>
			<div class="icons cell">
				<a href='#' class=delete></a>		 	
			</div>
			<div class="clear"></div>
		</div>
		<?php } ?>
	</div>

	<div id="action">
	<label id='check_all' class='dash_link'>Выбрать все</label>

	<span id=select>
        <select name="action">
            <option value="delete">Удалить</option>
        </select>
	</span>
	<input id="apply_action" class="button_green" name="user_orders" type="submit" value="Применить">
	</form>
	</div>
</div>
<?php }?>



<script>
$(function() {

	// Раскраска строк
	function colorize()
	{
		$("#list div.row:even").addClass('even');
		$("#list div.row:odd").removeClass('even');
	}
	// Раскрасить строки сразу
	colorize();

	// Выделить все
	$("#check_all").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', $('#list input[type="checkbox"][name*="check"]:not(:checked)').length>0);
	});	

	// Удалить 
	$("a.delete").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
		$(this).closest(".row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
		$(this).closest("form#list").find('select[name="action"] option[value=delete]').attr('selected', true);
		$(this).closest("form#list").submit();
	});

	// Подтверждение удаления
	$("#list").submit(function() {
		if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
			return false;	
	});
});

</script>

<?php }} ?>
