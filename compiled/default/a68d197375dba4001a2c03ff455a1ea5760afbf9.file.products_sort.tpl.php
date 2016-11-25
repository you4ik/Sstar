<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:14:44
         compiled from "C:\OpenServer\domains\localhost\design\default\html\products_sort.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8394582f6f449c78d3-66672190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a68d197375dba4001a2c03ff455a1ea5760afbf9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\products_sort.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8394582f6f449c78d3-66672190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'ajax' => 0,
    'translate_id' => 0,
    'lang' => 0,
    'sort' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f6f44a1ba04_10401880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f6f44a1ba04_10401880')) {function content_582f6f44a1ba04_10401880($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
    <div class="sort<?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?> is_ajax<?php }?>">
        <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['products_sort_by'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_sort_by;?>
</span>:
        <a <?php if ($_smarty_tpl->tpl_vars['sort']->value=='position') {?> class="active_up"<?php }?> href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'position','page'=>null),$_smarty_tpl);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['products_by_default'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_default;?>
</a>
        <a <?php if ($_smarty_tpl->tpl_vars['sort']->value=='price') {?> class="active_up" <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='price_desc') {?>class="active_down"<?php }?> <?php if ($_smarty_tpl->tpl_vars['sort']->value=='price') {?>href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'price_desc','page'=>null),$_smarty_tpl);?>
" <?php } else { ?>href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'price','page'=>null),$_smarty_tpl);?>
"<?php }?> data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['products_by_price'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_price;?>
</a>
        <a <?php if ($_smarty_tpl->tpl_vars['sort']->value=='name') {?> class="active_up" <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='name_desc') {?>class="active_down"<?php }?> <?php if ($_smarty_tpl->tpl_vars['sort']->value=='name') {?>href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'name_desc','page'=>null),$_smarty_tpl);?>
" <?php } else { ?>href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'name','page'=>null),$_smarty_tpl);?>
<?php }?>" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['products_by_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_name;?>
</a>
    </div>
<?php }?><?php }} ?>
