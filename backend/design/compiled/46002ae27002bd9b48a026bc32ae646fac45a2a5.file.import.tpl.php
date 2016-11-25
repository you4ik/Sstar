<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:21:17
         compiled from "backend\design\html\import.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31670582f70cd97e8c7-82429648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46002ae27002bd9b48a026bc32ae646fac45a2a5' => 
    array (
      0 => 'backend\\design\\html\\import.tpl',
      1 => 1476976702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31670582f70cd97e8c7-82429648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'config' => 0,
    'filename' => 0,
    'message_error' => 0,
    'import_files_dir' => 0,
    'locale' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f70cda553c1_64429167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f70cda553c1_64429167')) {function content_582f70cda553c1_64429167($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('tabs', null, null); ob_start(); ?>
	<li class="active">
        <a href="index.php?module=ImportAdmin">Импорт</a>
    </li>
	<?php if (in_array('export',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=ExportAdmin">Экспорт</a>
        </li>
    <?php }?>
    <?php if (in_array('import',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=MultiImportAdmin">Импорт переводов</a>
        </li>
    <?php }?>
    <?php if (in_array('export',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
        <li>
            <a href="index.php?module=MultiExportAdmin">Экспорт переводов</a>
        </li>
    <?php }?>
    <li>
        <a href="index.php?module=ImportLogAdmin">Лог импорта</a>
    </li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Импорт товаров', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/backend/design/js/piecon/piecon.js"></script>
<script>
<?php if ($_smarty_tpl->tpl_vars['filename']->value) {?>
    
        // On document load
        $(function(){
            Piecon.setOptions({fallback: 'force'});
            Piecon.setProgress(0);
            $("#progressbar").progressbar({ value: 1 });
            do_import();
        });

        function do_import(from)
        {
            from = typeof(from) != 'undefined' ? from : 0;
            $.ajax({
                 url: "ajax/import.php",
                    data: {from:from},
                    dataType: 'json',
                    success: function(data){
                        if (data.error) {
                            var error = '';
                            if (data.missing_fields) {
                                error = '<span>В файле импорта отсутствуют необходимые столбцы: </span><b>';
                                for (var i in data.missing_fields) {
                                    error += data.missing_fields[i] + ', ';
                                }
                                error = error.substring(0, error.length-2);
                                error += '</b>';
                            }

                            $("#progressbar").hide('fast');
                            $('#import_error').html(error);
                            $('#import_error').show();
                        } else {
                            Piecon.setProgress(Math.round(100 * data.from / data.totalsize));
                            $("#progressbar").progressbar({value: 100 * data.from / data.totalsize});

                            if (data != false && !data.end) {
                                do_import(data.from);
                            } else {
                                Piecon.setProgress(100);
                                $("#progressbar").hide('fast');
                                $("#import_result").show();
                            }
                        }
                    },
                    error: function(xhr, status, errorThrown) {
                        alert(errorThrown+'\n'+xhr.responseText);
                    }
            });

        }
    
<?php }?>
</script>

<style>
	.ui-progressbar-value { background-color:#b4defc; background-image: url(design/images/progress.gif); background-position:left; border-color: #009ae2;}
	#progressbar{ clear: both; height:29px;}
	#result{ clear: both; width:100%;}
</style>

<div id="import_error" class="message message_error" style="display: none;"></div>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <!-- Системное сообщение -->
    <div class="message message_error">
        <span class="text">
            <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='no_permission') {?>
                Установите права на запись в папку <?php echo $_smarty_tpl->tpl_vars['import_files_dir']->value;?>

            <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='convert_error') {?>
                Не получилось сконвертировать файл в кодировку UTF8
            <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='locale_error') {?>
                На сервере не установлена локаль <?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
, импорт может работать некорректно
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['message_error']->value;?>

            <?php }?>
        </span>
    </div>
    <!-- Системное сообщение (The End)-->
<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['message_error']->value!='no_permission') {?>
        <?php if ($_smarty_tpl->tpl_vars['filename']->value) {?>
        <div>
            <h1>Импорт <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filename']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
        </div>
        <div id='progressbar'></div>
        <div id='import_result' style="display: none; clear: left;">
            <a href="index.php?module=ImportLogAdmin" target="_blank">Лог последнего импорта</a>
        </div>
        <?php } else { ?>

            <h1>Импорт товаров</h1>

            <div class="block">
            <form method=post id=product enctype="multipart/form-data">
                <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
                <input name="file" class="import_file" type="file" value="" />
                <input class="button_green" type="submit" name="" value="Загрузить" />
                <p>
                    (максимальный размер файла &mdash; <?php if ($_smarty_tpl->tpl_vars['config']->value->max_upload_filesize>1024*1024) {?><?php echo $_smarty_tpl->tpl_vars['config']->value->max_upload_filesize/1024/round(1024,'2');?>
 МБ<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['config']->value->max_upload_filesize/round(1024,'2');?>
 КБ<?php }?>)
                </p>


            </form>
            </div>

            <div class="block block_help">
            <p>
                Создайте бекап на случай неудачного импорта.
            </p>
            <p>
                Сохраните таблицу в формате CSV
            </p>
            <p>
                В первой строке таблицы должны быть указаны названия колонок в таком формате:
                <ul>
                    <li><label>Товар</label> название товара</li>
                    <li><label>Категория</label> категория товара</li>
                    <li><label>Бренд</label> бренд товара</li>
                    <li><label>Вариант</label> название варианта</li>
                    <li><label>Цена</label> цена товара</li>
                    <li><label>ID валюты</label>ID валюты в системе</li>
                    <li><label>Старая цена</label> старая цена товара</li>
                    <li><label>Склад</label> количество товара на складе</li>
                    <li><label>Артикул</label> артикул товара</li>
                    <li><label>Видим</label> отображение товара на сайте (0 или 1)</li>
                    <li><label>Рекомендуемый</label> является ли товар рекомендуемым (0 или 1)</li>
                    <li><label>Аннотация</label> краткое описание товара</li>
                    <li><label>Адрес</label> адрес страницы товара</li>
                    <li><label>Описание</label> полное описание товара</li>
                    <li><label>Изображения</label> имена локальных файлов или url изображений в интернете, через запятую</li>
                    <li><label>Заголовок страницы</label> заголовок страницы товара (Meta title)</li>
                    <li><label>Ключевые слова</label> ключевые слова (Meta keywords)</li>
                    <li><label>Описание страницы</label> описание страницы товара (Meta description)</li>
                </ul>
            </p>
            <p>
                Любое другое название колонки трактуется как название свойства товара
            </p>
            <p>
                <a href='files/import/example.csv'>Скачать пример файла</a>
            </p>
            </div>
        <?php }?>
    <?php }?><?php }} ?>
