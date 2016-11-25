<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 03:44:43
         compiled from "C:\OpenServer\domains\localhost\design\default\html\wishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15008582fa07bf10396-79737881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b704ac3024f57ba42ffda18e4e101ed881d46a7a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\wishlist.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15008582fa07bf10396-79737881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'translate_id' => 0,
    'page' => 0,
    'wished_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582fa07c0cbb92_78023841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582fa07c0cbb92_78023841')) {function content_582fa07c0cbb92_78023841($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->wishlist_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div class="container">
	
	<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	
	<h1 class="m-b-1">
		<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['wishlist_header'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span>
	</h1>
	
	
	<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

	
	<?php if (count($_smarty_tpl->tpl_vars['wished_products']->value)) {?>
		<div class="row fn-wishlist-page">
			
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wished_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<div class="col-md-4 col-lg-3">
					<?php echo $_smarty_tpl->getSubTemplate ("tiny_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			<?php } ?>
			
		</div>
	<?php } else { ?>
		<div class="m-b-1">
			<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['wishlist_empty'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_empty;?>
</span>
		</div>
	<?php }?>
</div><?php }} ?>
