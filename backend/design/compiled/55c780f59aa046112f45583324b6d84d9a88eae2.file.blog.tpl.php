<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:16:08
         compiled from "backend\design\html\blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11953582f6f98767d51-33699686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55c780f59aa046112f45583324b6d84d9a88eae2' => 
    array (
      0 => 'backend\\design\\html\\blog.tpl',
      1 => 1476800152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11953582f6f98767d51-33699686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'keyword' => 0,
    'posts_count' => 0,
    'post' => 0,
    'config' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f6f98854da6_80924899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f6f98854da6_80924899')) {function content_582f6f98854da6_80924899($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<li class="active">
        <a href="index.php?module=BlogAdmin">Блог</a>
    </li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Блог', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<?php if ($_smarty_tpl->tpl_vars['posts']->value||$_smarty_tpl->tpl_vars['keyword']->value) {?>
    <form method="get">
    <div id="search">
        <input type="hidden" name="module" value='BlogAdmin'>
        <input class="search" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
        <input class="search_button" type="submit" value=""/>
    </div>
    </form>
<?php }?>

<div id="header">
	<?php if ($_smarty_tpl->tpl_vars['keyword']->value&&$_smarty_tpl->tpl_vars['posts_count']->value) {?>
	    <h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['posts_count']->value,'Нашлась','Нашлись','Нашлись');?>
 <?php echo $_smarty_tpl->tpl_vars['posts_count']->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['posts_count']->value,'запись','записей','записи');?>
</h1>
	<?php } elseif ($_smarty_tpl->tpl_vars['posts_count']->value) {?>
	    <h1><?php echo $_smarty_tpl->tpl_vars['posts_count']->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['posts_count']->value,'запись','записей','записи');?>
 в блоге</h1>
	<?php } else { ?>
	    <h1>Нет записей</h1>
	<?php }?>
	<a class="add" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PostAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">Добавить запись</a>
</div>

<?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
    <div id="main_list">
        <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <form id="form_list" method="post">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
            <div id="list">
                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <div class="<?php if (!$_smarty_tpl->tpl_vars['post']->value->visible) {?>invisible<?php }?> row">
                        <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->position;?>
">

                        <div class="checkbox cell">
                            <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"/>
                            <label for="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"></label>
                        </div>
                        <div class="image cell">
                            <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PostAdmin','id'=>$_smarty_tpl->tpl_vars['post']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->image, ENT_QUOTES, 'UTF-8', true),35,35,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
"/>
                                </a>
                            <?php } else { ?>
                                <img height="35" width="35" src="design/images/no_image.png"/>
                            <?php }?>
                        </div>
                        <div class="name cell">
                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PostAdmin','id'=>$_smarty_tpl->tpl_vars['post']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <br>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>

                        </div>
                        <div class="icons cell blogs">
                            <a class="preview" title="Предпросмотр в новом окне" href="../<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
" target="_blank"></a>
                            <a class="enable" title="Активна" href="#"></a>
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
                        <option value="enable">Сделать видимыми</option>
                        <option value="disable">Сделать невидимыми</option>
                        <option value="delete">Удалить</option>
                    </select>
                </span>
                <input id="apply_action" class="button_green" type="submit" value="Применить">
            </div>
        </form>
        <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
		$(this).closest("form").find('select[name="action"] option[value=delete]').attr('selected', true);
		$(this).closest("form").submit();
	});
	
	// Скрыт/Видим
	$("a.enable").click(function() {
		var icon        = $(this);
		var line        = icon.closest(".row");
		var id          = line.find('input[type="checkbox"][name*="check"]').val();
		var state       = line.hasClass('invisible')?1:0;
		icon.addClass('loading_icon');
		$.ajax({
			type: 'POST',
			url: 'ajax/update_object.php',
			data: {'object': 'blog', 'id': id, 'values': {'visible': state}, 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
				icon.removeClass('loading_icon');
				if(state)
					line.removeClass('invisible');
				else
					line.addClass('invisible');				
			},
			'json'
		});;
		return false;	
	});
	
	// Подтверждение удаления
	$("form").submit(function() {
		if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
			return false;	
	});
})

</script>
<?php }} ?>
