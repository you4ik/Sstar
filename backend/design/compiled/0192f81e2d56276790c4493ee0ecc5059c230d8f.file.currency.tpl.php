<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:26:32
         compiled from "backend\design\html\currency.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31389582f7208698169-50475566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0192f81e2d56276790c4493ee0ecc5059c230d8f' => 
    array (
      0 => 'backend\\design\\html\\currency.tpl',
      1 => 1476800152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31389582f7208698169-50475566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'languages' => 0,
    'lang_id' => 0,
    'currencies' => 0,
    'c' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f720879d2b3_09601980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f720879d2b3_09601980')) {function content_582f720879d2b3_09601980($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
    <?php if (in_array('settings',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=SettingsAdmin">Настройки</a>
        </li>
    <?php }?>
    <li class="active">
        <a href="index.php?module=CurrencyAdmin">Валюты</a>
    </li>
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

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Валюты', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>




<script>
$(function() {

	// Сортировка списка
	$("#currencies_block").sortable({ items: 'ul.sortable' , axis: 'y',  cancel: '#header', handle: '.move_zone' });

	// Добавление валюты
	var curr = $('#new_currency').clone(true);
	$('#new_currency').remove().removeAttr('id');
	$('a#add_currency').click(function() {
		$(curr).clone(true).appendTo('#currencies').fadeIn('slow').find("input[name*=currency][name*=name]").focus();
		return false;		
	});	
 

	// Скрыт/Видим
	$("a.enable").click(function() {
		var icon        = $(this);
		var line        = icon.closest("ul");
		var id          = line.find('input[name*="currency[id]"]').val();
		var state       = line.hasClass('invisible')?1:0;
		icon.addClass('loading_icon');
		$.ajax({
			type: 'POST',
			url: 'ajax/update_object.php',
			data: {'object': 'currency', 'id': id, 'values': {'enabled': state}, 'session_id': '<?php echo $_SESSION['id'];?>
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
	
	// Центы
	$("a.cents").click(function() {
		var icon        = $(this);
		var line        = icon.closest("ul");
		var id          = line.find('input[name*="currency[id]"]').val();
		var state       = line.hasClass('cents')?0:2;
		icon.addClass('loading_icon');

		$.ajax({
			type: 'POST',
			url: 'ajax/update_object.php',
			data: {'object': 'currency', 'id': id, 'values': {'cents': state}, 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
				icon.removeClass('loading_icon');
				if(!state)
					line.removeClass('cents');
				else
					line.addClass('cents');				
			},
			error: function (xhr, ajaxOptions, thrownError){
                    alert(xhr.status);
                    alert(thrownError);
            },
			'json'
		});;
		return false;

})

// Показать центы
	$("a.delete").click(function() {
		$('input[type="hidden"][name="action"]').val('delete');
		$('input[type="hidden"][name="action_id"]').val($(this).closest("ul").find('input[type="hidden"][name*="currency[id]"]').val());
		$(this).closest("form").submit();
	});
	
	// Запоминаем id первой валюты, чтобы определить изменение базовой валюты
	var base_currency_id = $('input[name*="currency[id]"]').val();
	
	$("form").submit(function() {
		if($('input[type="hidden"][name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
			return false;	
		if(base_currency_id != $('input[name*="currency[id]"]:first').val() && confirm('Пересчитать все цены в '+$('input[name*="name"]:first').val()+' по текущему курсу?', 'msgBox Title'))
			$('input[name="recalculate"]').val(1);
	});


})

</script>


<?php if ($_smarty_tpl->tpl_vars['languages']->value) {?><?php echo $_smarty_tpl->getSubTemplate ('include_languages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
	<div id="header">
		<h1>Валюты</h1>
		<a class="add" id="add_currency" href="#">Добавить</a>
	</div>

<form method=post>
    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />
    <div id="currencies_block">
        <ul id="header">
            <li class="move"></li>
            <li class="id_currency">ID Валюты</li>
            <li class="name">Название валюты</li>
            <li class="icons"></li>
            <li class="sign">Знак</li>
            <li class="iso">Код ISO</li>
        </ul>
        <div id="currencies">
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['c']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c']->index++;
 $_smarty_tpl->tpl_vars['c']->first = $_smarty_tpl->tpl_vars['c']->index === 0;
?>
                <ul class="sortable <?php if (!$_smarty_tpl->tpl_vars['c']->value->enabled) {?>invisible<?php }?> <?php if ($_smarty_tpl->tpl_vars['c']->value->cents==2) {?>cents<?php }?>">
                    <li class="move">
                        <div class="move_zone"></div>
                    </li>
                    <li class="id_currency">
                        <input type="text" disabled value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                    </li>
                    <li class="name <?php if ($_smarty_tpl->tpl_vars['c']->first) {?>main_curr<?php }?>">
                        <input name="currency[id][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        <input name="currency[name][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        <?php if ($_smarty_tpl->tpl_vars['c']->first) {?>
                            <span class="main_curr_icon">Основная</span>
                        <?php }?>
                    </li>
                    <li class="icons currency">
                        <a class="cents" href="#" title="Отображать копейки"></a>
                        <a class="enable" href="#" title="Показывать на сайте"></a>
                    </li>
                    <li class="sign"><input name="currency[sign][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
"/></li>
                    <li class="iso"><input name="currency[code][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->code, ENT_QUOTES, 'UTF-8', true);?>
"/></li>
                    <li class="rate">
                        <?php if (!$_smarty_tpl->tpl_vars['c']->first) {?>
                            <div class=rate_from>
                                <input name="currency[rate_from][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_from, ENT_QUOTES, 'UTF-8', true);?>
"/> <?php echo $_smarty_tpl->tpl_vars['c']->value->sign;?>

                            </div>
                            <div class=rate_to>=
                                <input name="currency[rate_to][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_to, ENT_QUOTES, 'UTF-8', true);?>
"/> <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

                            </div>
                        <?php } else { ?>
                            <input name="currency[rate_from][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_from, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="currency[rate_to][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_to, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        <?php }?>
                    </li>
                    <li class="icons">
                        <?php if (!$_smarty_tpl->tpl_vars['c']->first) {?>
                            <a class="delete" href="#" title="Удалить"></a>
                        <?php }?>
                    </li>
                </ul>
            <?php } ?>
            <ul id="new_currency" style='display:none;'>
                <li class="move">
                    <div class="move_zone"></div>
                </li>
                <li class="name"><input name="currency[id][]" type="hidden" value=""/><input name="currency[name][]" type="" value=""/></li>
                <li class="icons"></li>
                <li class="sign"><input name="currency[sign][]" type="" value=""/></li>
                <li class="iso"><input name="currency[code][]" type="" value=""/></li>
                <li class="rate">
                    <div class=rate_from><input name="currency[rate_from][]" type="text" value="1"/></div>
                    <div class=rate_to>= <input name="currency[rate_to][]" type="text" value="1"/> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
                </li>
                <li class="icons">
                </li>
            </ul>
        </div>
    </div>
    <div id="action">
        <input type=hidden name=recalculate value='0'>
        <input type=hidden name=action value=''>
        <input type=hidden name=action_id value=''>

        <span class="curr_info">
            Количество десятичных знаков дробной части цены влияет только на ОТОБРАЖЕНИЕ цен. Все расчеты ведутся с неокругленными данными. Это может привести к визуальным ошибкам при конвертации валют и применении скидок. В качестве примера рассмотрим такую ситуацию. Стоимость товара 98,10 руб. Если задать количество десятичных знаков равным 0, цена будет показана как 98 руб. Однако стоимость 10 единиц в корзине будет показана как 981 руб.
        </span>
        <input id='apply_action' class="button_green" type=submit value="Применить">
    </div>
</form>
	
 
<?php }} ?>
