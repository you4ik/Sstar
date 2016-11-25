<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:27:09
         compiled from "backend\design\html\language.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14911582f722d29f8f0-48407804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f4ceff694ab78e3a12fda6613045914ab8022cf' => 
    array (
      0 => 'backend\\design\\html\\language.tpl',
      1 => 1476800152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14911582f722d29f8f0-48407804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'language' => 0,
    'current_language' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'lang_list' => 0,
    'lang' => 0,
    'languages' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f722d388348_30226297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f722d388348_30226297')) {function content_582f722d388348_30226297($_smarty_tpl) {?>
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
	<?php if (in_array('managers',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=ManagersAdmin">Менеджеры</a>
        </li>
    <?php }?>
    <li class="active">
        <a href="index.php?module=LanguagesAdmin">Языки</a>
    </li>
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

<?php if ($_smarty_tpl->tpl_vars['language']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->{('name_').($_smarty_tpl->tpl_vars['current_language']->value->label)}, ENT_QUOTES, 'UTF-8', true), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Новый язык', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <!-- Системное сообщение -->
    <div class="message message_success">
        <span><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>Язык добавлен<?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>Язык обновлен<?php }?></span>
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
        <span>
        <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='label_empty') {?>Метка пуста<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='label_exists') {?>Метка уже используется<?php }?>
        </span>
        <a class="button" href="">Вернуться</a>
    </div>
    <!-- Системное сообщение (The End)-->
<?php }?>


<!-- Основная форма -->
<form method=post id=product enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input name=id type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->id;?>
"/>
    <div id="name">
        <div class="checkbox">
            <input name="enabled" value="1" type="checkbox" id="active_checkbox" <?php if ($_smarty_tpl->tpl_vars['language']->value->enabled) {?>checked=""<?php }?>/>
            <label class="visible_icon" for="active_checkbox">Активен</label>
        </div>
    </div>

    <div id="column_left">
        <div class="block layer">
            <?php if (!$_smarty_tpl->tpl_vars['language']->value->id) {?>
                <h2>Выберите из списка</h2>
                <ul>
                    <li>
                        <label class=property>Язык</label>
                        <select name="lang" size="1">
                            <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lang_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?><option value='<?php echo $_smarty_tpl->tpl_vars['lang']->value->label;?>
'><?php echo $_smarty_tpl->tpl_vars['lang']->value->name;?>
</option><?php } ?>
                        </select>
                    </li>
                </ul>
            <?php } else { ?>
                <h2>Переводы</h2>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                        <li>
                            <label class=property><?php echo $_smarty_tpl->tpl_vars['l']->value->name;?>
</label>
                            <input type="text" name="name_<?php echo $_smarty_tpl->tpl_vars['l']->value->label;?>
" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->{'name_'.$_smarty_tpl->tpl_vars['l']->value->label};?>
" class="okay_inp"/>
                        </li>
                    <?php } ?>
                </ul>
            <?php }?>
        </div>
        <input class="button" type="submit" name="" value="Сохранить" />
    </div>
</form>
<!-- Основная форма (The End) -->

<?php }} ?>
