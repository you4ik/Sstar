<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:26:36
         compiled from "backend\design\html\deliveries.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15122582f720cdd9145-52584255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e49b9dd31f7435634f468921e03afee98f40dd98' => 
    array (
      0 => 'backend\\design\\html\\deliveries.tpl',
      1 => 1476800152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15122582f720cdd9145-52584255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'deliveries' => 0,
    'delivery' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f720cec0f91_88996152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f720cec0f91_88996152')) {function content_582f720cec0f91_88996152($_smarty_tpl) {?>
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
    <li class="active">
        <a href="index.php?module=DeliveriesAdmin">Доставка</a>
    </li>
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


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Доставка', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div id="header">
	<h1>Доставка</h1>
	<a class="add" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'DeliveryAdmin'),$_smarty_tpl);?>
">Добавить способ доставки</a>
</div>

<div id="main_list">
    <form id="list_form" method="post">
        <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
        <div id="list">
            <?php  $_smarty_tpl->tpl_vars['delivery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->key => $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->_loop = true;
?>
                <div class="<?php if (!$_smarty_tpl->tpl_vars['delivery']->value->enabled) {?>invisible<?php }?> row">
                    <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->position;?>
">
                    <div class="move cell">
                        <div class="move_zone"></div>
                    </div>
                    <div class="checkbox cell">
                        <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"/>
                        <label for="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"></label>
                    </div>
                    <div class="image cell">
                        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->image) {?>
                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'DeliveryAdmin','id'=>$_smarty_tpl->tpl_vars['delivery']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier(htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->image, ENT_QUOTES, 'UTF-8', true),35,35,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir);?>
"/>
                            </a>
                        <?php } else { ?>
                            <img height="35" width="35" src="design/images/no_image.png"/>
                        <?php }?>
                    </div>
                    <div class="name cell">
                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'DeliveryAdmin','id'=>$_smarty_tpl->tpl_vars['delivery']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                    <div class="icons cell delivery">
                        <a class="enable" title="Активен" href="#"></a>
                        <a class="delete" title="Удалить" href="#"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            <?php } ?>
        </div>

        <div id="action">
            <label id="check_all" class='dash_link'>Выбрать все</label>
            <span id="select">
                <select name="action">
                    <option value="enable">Включить</option>
                    <option value="disable">Выключить</option>
                    <option value="delete">Удалить</option>
                </select>
            </span>
            <input id="apply_action" class="button_green" type="submit" value="Применить">
        </div>
    </form>
</div>


<script>
$(function() {

	// Сортировка списка
	$("#list").sortable({
		items:             ".row",
		tolerance:         "pointer",
		handle:            ".move_zone",
		scrollSensitivity: 40,
		opacity:           0.7, 
		forcePlaceholderSize: true,
		axis: 'y',
		
		helper: function(event, ui){		
			if($('input[type="checkbox"][name*="check"]:checked').size()<1) return ui;
			var helper = $('<div/>');
			$('input[type="checkbox"][name*="check"]:checked').each(function(){
				var item = $(this).closest('.row');
				helper.height(helper.height()+item.innerHeight());
				if(item[0]!=ui[0]) {
					helper.append(item.clone());
					$(this).closest('.row').remove();
				}
				else {
					helper.append(ui.clone());
					item.find('input[type="checkbox"][name*="check"]').attr('checked', false);
				}
			});
			return helper;			
		},	
 		start: function(event, ui) {
  			if(ui.helper.children('.row').size()>0)
				$('.ui-sortable-placeholder').height(ui.helper.height());
		},
		beforeStop:function(event, ui){
			if(ui.helper.children('.row').size()>0){
				ui.helper.children('.row').each(function(){
					$(this).insertBefore(ui.item);
				});
				ui.item.remove();
			}
		},
		update:function(event, ui)
		{
			$("#list_form input[name*='check']").attr('checked', false);
			$("#list_form").ajaxSubmit(function() {
				colorize();
			});
		}
	});
	
 
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
			data: {'object': 'delivery', 'id': id, 'values': {'enabled': state}, 'session_id': '<?php echo $_SESSION['id'];?>
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
	
	$("form").submit(function() {
		if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
			return false;	
	});
})

</script>

<?php }} ?>
