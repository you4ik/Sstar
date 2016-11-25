<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:26:57
         compiled from "backend\design\html\manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9113582f7221ae3052-83458535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66db6f81a81aeb8b4c0a09899283bef3c9e7e493' => 
    array (
      0 => 'backend\\design\\html\\manager.tpl',
      1 => 1479503484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9113582f7221ae3052-83458535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'm' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'perms' => 0,
    'p' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f7221c25602_97404259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f7221c25602_97404259')) {function content_582f7221c25602_97404259($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<?php if (in_array('settings',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=SettingsAdmin">Настройки</a>
        </li>
    <?php }?>
	<?php if (in_array('currency',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=CurrencyAdmin">Валюты</a>
        </li>
    <?php }?>
	<?php if (in_array('delivery',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=DeliveriesAdmin">Доставка</a>
        </li>
    <?php }?>
	<?php if (in_array('payment',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=PaymentMethodsAdmin">Оплата</a>
        </li>
    <?php }?>
	<li class="active">
        <a href="index.php?module=ManagersAdmin">Менеджеры</a>
    </li>
    <?php if (in_array('languages',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=LanguagesAdmin">Языки</a>
        </li>
    <?php }?>
    <?php if (in_array('languages',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=TranslationsAdmin">Переводы</a>
        </li>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['m']->value->login) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['m']->value->login, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новый менеджер', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<script>

$(function() {
	// Выделить все
	$("#check_all").click(function() {
		$('input[type="checkbox"][name*="permissions"]:not(:disabled)').attr('checked', $('input[type="checkbox"][name*="permissions"]:not(:disabled):not(:checked)').length>0);
	});

	<?php if ($_smarty_tpl->tpl_vars['m']->value->id) {?>$('#password_input').hide();<?php }?>
	$('#change_password').click(function() {
		$('#password_input').show();
	});
		
});

</script>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <!-- Системное сообщение -->
    <div class="message message_success">
        <span class="text"><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>Менеджер добавлен<?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>Менеджер обновлен<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>
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
        <span class="text">
            <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='login_exists') {?>
                Менеджер с таким логином уже существует
            <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_login') {?>
                Введите логин
            <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='not_writable') {?>
                Установите права на запись для файла /backend/.passwd
            <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

            <?php }?>
        </span>
        <a class="button" href="">Вернуться</a>
    </div>
    <!-- Системное сообщение (The End)-->
<?php }?>


<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
<input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
	<div id="name">
		Логин:
		<input class="name" name="login" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->login, ENT_QUOTES, 'UTF-8', true);?>
" maxlength="32"/>
		<input name=id type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
		Пароль:
		<?php if ($_smarty_tpl->tpl_vars['m']->value->id) {?><a class="dash_link"id="change_password">изменить</a><?php }?>
		<input id="password_input" class="name" name="password" type="password" value=""/> 
	</div>

	<!-- Левая колонка -->
	<div id="column_left">
		
		<h2>Права доступа: </h2>
		<div class="block"><label id="check_all" class="dash_link">Выбрать все</label></div>

		<!-- Параметры  -->
		<div class="block">
			<ul>
				<?php $_smarty_tpl->tpl_vars['perms'] = new Smarty_variable(array('products'=>'Товары','categories'=>'Категории','brands'=>'Бренды','features'=>'Свойства товаров','orders'=>'Заказы','labels'=>'Метки заказов','users'=>'Покупатели','groups'=>'Группы покупателей','coupons'=>'Купоны','pages'=>'Страницы','blog'=>'Блог','comments'=>'Комментарии','feedbacks'=>'Обратная связь','import'=>'Импорт','export'=>'Экспорт','stats'=>'Статистика','design'=>'Шаблоны','settings'=>'Настройки','currency'=>'Валюты','delivery'=>'Способы доставки','payment'=>'Способы оплаты','managers'=>'Менеджеры','languages'=>'Языки','banners'=>'Управление баннерами','callbacks'=>'Заказ обратного звонка','special'=>'Промо-изображения','topvisor'=>'Топвизор','yametrika'=>'Яндекс Метрика','robots'=>'Файл robots.txt'), null, 0);?>
				
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
				    <li>
                        <label class=property for="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</label>
				    <input id="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
" name="permissions[]" class="okay_inp" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['m']->value->permissions&&in_array($_smarty_tpl->tpl_vars['p']->value,$_smarty_tpl->tpl_vars['m']->value->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['m']->value->id==$_smarty_tpl->tpl_vars['manager']->value->id) {?>disabled<?php }?>/>
                    </li>
				<?php } ?>
			</ul>
			
		</div>
		<!-- Параметры (The End)-->
	</div>
	<!-- Левая колонка (The End)-->
	<input class="button_green button_save" type="submit" name="" value="Сохранить" />
	<?php if ($_smarty_tpl->tpl_vars['m']->value->cnt_try>=10) {?>
		<input class="button_green button_save" type="submit" name="unlock_manager" value="Разблокировать" />
	<?php }?>
	
</form>
<!-- Основная форма (The End) -->
<?php }} ?>
