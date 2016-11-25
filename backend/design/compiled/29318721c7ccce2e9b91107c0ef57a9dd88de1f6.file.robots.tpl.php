<?php /* Smarty version Smarty-3.1.18, created on 2016-11-18 23:40:40
         compiled from "backend\design\html\robots.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23837582f6748482669-22815565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29318721c7ccce2e9b91107c0ef57a9dd88de1f6' => 
    array (
      0 => 'backend\\design\\html\\robots.tpl',
      1 => 1476800152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23837582f6748482669-22815565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message_error' => 0,
    'message_success' => 0,
    'robots_txt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f674850cc71_71327007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f674850cc71_71327007')) {function content_582f674850cc71_71327007($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
    <li>
        <a href="index.php?module=ThemeAdmin">Тема</a>
    </li>
    <li>
        <a href="index.php?module=TemplatesAdmin">Шаблоны</a>
    </li>
    <li>
        <a href="index.php?module=StylesAdmin">Стили</a>
    </li>
    <li>
        <a href="index.php?module=ScriptsAdmin">Скрипты</a>
    </li>
    <li>
        <a href="index.php?module=ImagesAdmin">Изображения</a>
    </li>
    <li class="active">
        <a href="index.php?module=RobotsAdmin">Robots.txt</a>
    </li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Robots.txt ".((string)$_smarty_tpl->tpl_vars['style_file']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <!-- Системное сообщение -->
    <div class="message message_error">
        <span class="text">
        <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='write_error') {?>
            Установите права на запись файла robots.txt
        <?php }?>
        </span>
    </div>
    <!-- Системное сообщение (The End)-->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <!-- Системное сообщение -->
    <div class="message message_success">
        <span class="text"><?php if ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>Robots обновлен<?php }?></span>
    </div>
    <!-- Системное сообщение (The End)-->
<?php }?>

<form method="post">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <div class="block layer">
        <h2>Файл robots.txt</h2>
        <div>
            <textarea class="settings_robots_area" name="robots"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['robots_txt']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </div>
    </div>
    <input class="button_green button_save" type="submit" name="save" value="Сохранить" />
</form>
<?php }} ?>
