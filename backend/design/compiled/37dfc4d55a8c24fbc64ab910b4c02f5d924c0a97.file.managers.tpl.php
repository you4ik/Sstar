<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:26:56
         compiled from "backend\design\html\managers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9440582f7220a94cc7-16261974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37dfc4d55a8c24fbc64ab910b4c02f5d924c0a97' => 
    array (
      0 => 'backend\\design\\html\\managers.tpl',
      1 => 1476800152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9440582f7220a94cc7-16261974',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'managers_count' => 0,
    'message_error' => 0,
    'managers' => 0,
    'm' => 0,
    'user' => 0,
    'groups' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f7220b784e8_97364829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f7220b784e8_97364829')) {function content_582f7220b784e8_97364829($_smarty_tpl) {?>
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


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Менеджеры', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div id="header">
	<h1><?php echo $_smarty_tpl->tpl_vars['managers_count']->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['managers_count']->value,'менеджер','менеджеров','менеджера');?>
</h1> 	
	<a class="add" href="index.php?module=ManagerAdmin">Добавить менеджера</a>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="message message_error">
        <span class="text">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

        </span>
        <a class="button" href="">Вернуться</a>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['managers']->value) {?>
    <div id="main_list">
        <form id="form_list" method="post">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
            <div id="list">
                <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['managers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                    <div class="row">
                        <div class="checkbox cell">
                            <input type="checkbox" id="manager_<?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['manager']->value->id==$_smarty_tpl->tpl_vars['m']->value->id) {?>disabled<?php }?>/>
                            <label  for="manager_<?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
">
                        </div>
                        <div class="user_name cell">
                            <a href="index.php?module=ManagerAdmin&id=<?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value->login;?>
</a>
                        </div>
                        <div class="user_email cell">
                            <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);?>
>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </div>
                        <div class="user_group cell">
                            <?php echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['user']->value->group_id]->name;?>

                        </div>
                        <div class="icons cell">
                            <?php if ($_smarty_tpl->tpl_vars['manager']->value->id!=$_smarty_tpl->tpl_vars['m']->value->id) {?>
                                <a class="delete" title="Удалить" href="#"></a>
                            <?php }?>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php } ?>
            </div>
            <div id="action">
                <label id="check_all" class="dash_link">Выбрать все</label>
                <span id=select>
                    <select name="action">
                        <option value="delete">Удалить</option>
                    </select>
                </span>
                <input id="apply_action" class="button_green" type="submit" value="Применить">
            </div>
        </form>
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
		$('#list input[type="checkbox"][name*="check"]:not(:disabled)').attr('checked', $('#list input[type="checkbox"][name*="check"]:not(:disabled):not(:checked)').length>0);
	});	

	// Удалить 
	$("a.delete").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
		$(this).closest(".row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
		$(this).closest("form").find('select[name="action"] option[value=delete]').attr('selected', true);
		$(this).closest("form").submit();
	});
	
	// Подтверждение удаления
	$("form").submit(function() {
		if($('#list input[type="checkbox"][name*="check"]:checked').length>0)
			if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
				return false;	
	});
});

</script>

<?php }} ?>
