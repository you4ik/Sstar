<?php /* Smarty version Smarty-3.1.18, created on 2016-11-18 23:38:38
         compiled from "C:\OpenServer\domains\localhost\design\default\html\comparison_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19982582f66cec98579-93195723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f2e81c63c021349167ecc379b047f059f8c8e5c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\comparison_informer.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19982582f66cec98579-93195723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparison' => 0,
    'lang_link' => 0,
    'translate_id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f66cecb5cc0_56374412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f66cecb5cc0_56374412')) {function content_582f66cecb5cc0_56374412($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['comparison']->value->products)>0) {?>
	<a class="nav-link link-black i-comparison" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
comparison">
		<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_comparison'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_comparison;?>
 (<?php echo count($_smarty_tpl->tpl_vars['comparison']->value->products);?>
)</span>
	</a>
<?php } else { ?>
	<span class="nav-link i-comparison">
		<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_comparison'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_comparison;?>
</span>
	</span>
<?php }?><?php }} ?>
