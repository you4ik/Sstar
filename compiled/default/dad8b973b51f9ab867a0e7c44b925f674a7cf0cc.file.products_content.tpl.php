<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:14:44
         compiled from "C:\OpenServer\domains\localhost\design\default\html\products_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12859582f6f44a3fb79-31453488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dad8b973b51f9ab867a0e7c44b925f674a7cf0cc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\products_content.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12859582f6f44a3fb79-31453488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'translate_id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f6f44a59812_83109440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f6f44a59812_83109440')) {function content_582f6f44a59812_83109440($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
?>
		<div class="col-md-4 col-lg-6 col-xl-4">
			<?php echo $_smarty_tpl->getSubTemplate ("tiny_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['product']->iteration%3==0) {?><div class="col-xs-12 hidden-sm-down"></div><?php }?>
	<?php } ?>
<?php } else { ?>
	<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['products_not_found'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_not_found;?>
</span>
<?php }?><?php }} ?>
