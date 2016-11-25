<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:21:42
         compiled from "backend\design\html\groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28594582f70e605c7a3-58248285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae411e5c70aa1502278d43d6ef04a2a6c790a743' => 
    array (
      0 => 'backend\\design\\html\\groups.tpl',
      1 => 1476800152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28594582f70e605c7a3-58248285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f70e60f5756_77370091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f70e60f5756_77370091')) {function content_582f70e60f5756_77370091($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
    <?php if (in_array('users',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=UsersAdmin">Пользователи</a>
        </li>
    <?php }?>
    <li class="active">
        <a href="index.php?module=GroupsAdmin">Группы</a>
    </li>
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


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Группы пользователей', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div id="header">
	<h1>Группы пользователей</h1> 
	<a class="add" href="index.php?module=GroupAdmin">Добавить группу</a>
</div>

<div id="main_list">
    <form id="list_form" method="post">
        <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
        <div id="list" class="groups">
            <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                <div class="row">
                    <div class="checkbox cell">
                        <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"/>
                        <label for="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"></label>
                    </div>
                    <div class="group_name cell">
                        <a href="index.php?module=GroupAdmin&id=<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</a>
                    </div>
                    <div class="group_discount cell">
                        <?php echo $_smarty_tpl->tpl_vars['group']->value->discount;?>
 %
                    </div>
                    <div class="icons cell">
                        <a class="delete" title="Удалить" href="#"></a>
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
