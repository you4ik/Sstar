<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:21:49
         compiled from "backend\design\html\subscribe_mailing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22713582f70ed33a757-34494647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd70cbbfe2db2b8ea56e4703b7faf991932f4ea0b' => 
    array (
      0 => 'backend\\design\\html\\subscribe_mailing.tpl',
      1 => 1476800152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22713582f70ed33a757-34494647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'keyword' => 0,
    'subscribes_count' => 0,
    'subscribes' => 0,
    'subscribe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f70ed40d029_97538084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f70ed40d029_97538084')) {function content_582f70ed40d029_97538084($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
    <?php if (in_array('users',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=UsersAdmin">Пользователи</a>
        </li>
    <?php }?>
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
    <li class="active">
        <a href="index.php?module=SubscribeMailingAdmin">Подписчики</a>
    </li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Подписчики', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div id="header">
	<?php if ($_smarty_tpl->tpl_vars['keyword']->value&&$_smarty_tpl->tpl_vars['subscribes_count']->value>0) {?>
        <h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['subscribes_count']->value,'Нашелся','Нашлось','Нашлись');?>
 <?php echo $_smarty_tpl->tpl_vars['subscribes_count']->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['subscribes_count']->value,'подписчик','подписчика','подписчиков');?>
</h1>
	<?php } elseif ($_smarty_tpl->tpl_vars['subscribes_count']->value>0) {?>
        <h1><?php echo $_smarty_tpl->tpl_vars['subscribes_count']->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['subscribes_count']->value,'подписчик','подписчика','подписчиков');?>
</h1> 	
	<?php } else { ?>
        <h1>Нет подписчиков</h1> 	
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['subscribes_count']->value>0) {?>
        <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'SubscribeMailingAdmin'),$_smarty_tpl);?>
" target="_blank">
        <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
"/>
        <input type="hidden" name="is_export" value="1" />
        <input type="image" src="./design/images/export_excel.png" name="export" title="Экспортировать этих подписчиков"/>
        </form>
	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['subscribes']->value) {?>
    <div id="main_list" class="brands">
        <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <form id="list_form" method="post">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
"/>
            <div id="list" class="brands">
                <?php  $_smarty_tpl->tpl_vars['subscribe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subscribe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subscribes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subscribe']->key => $_smarty_tpl->tpl_vars['subscribe']->value) {
$_smarty_tpl->tpl_vars['subscribe']->_loop = true;
?>
                    <div class="row">
                        <div class="checkbox cell">
                            <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['subscribe']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['subscribe']->value->id;?>
"/>
                            <label for="<?php echo $_smarty_tpl->tpl_vars['subscribe']->value->id;?>
"></label>
                        </div>
                        <div class="cell">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subscribe']->value->email, ENT_QUOTES, 'UTF-8', true);?>

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
			<span id="select">
			<select name="action">
                <option value="delete">Удалить</option>
            </select>
			</span>
                <input id="apply_action" class="button_green" type="submit" value="Применить"/>
            </div>
        </form>
        <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php } else { ?>
    Нет подписчиков
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
		$(this).closest("div.row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
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
