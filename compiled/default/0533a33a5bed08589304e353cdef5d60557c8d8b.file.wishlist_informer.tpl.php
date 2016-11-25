<?php /* Smarty version Smarty-3.1.18, created on 2016-11-18 23:38:38
         compiled from "C:\OpenServer\domains\localhost\design\default\html\wishlist_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12335582f66cecd9b37-35570873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0533a33a5bed08589304e353cdef5d60557c8d8b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\wishlist_informer.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12335582f66cecd9b37-35570873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wished_products' => 0,
    'lang_link' => 0,
    'translate_id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f66cecf7a85_42400823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f66cecf7a85_42400823')) {function content_582f66cecf7a85_42400823($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['wished_products']->value)>0) {?>
	<a class="nav-link link-black i-favorites" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
wishlist">
		<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_favorites'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_favorites;?>
 (<?php echo count($_smarty_tpl->tpl_vars['wished_products']->value);?>
)</span>
	</a>
<?php } else { ?>
	<span class="nav-link i-favorites"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_favorites'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_favorites;?>
</span></span>
<?php }?><?php }} ?>
