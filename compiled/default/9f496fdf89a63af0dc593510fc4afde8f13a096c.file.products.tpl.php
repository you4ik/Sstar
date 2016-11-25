<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:14:44
         compiled from "C:\OpenServer\domains\localhost\design\default\html\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30316582f6f446059c2-03732220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f496fdf89a63af0dc593510fc4afde8f13a096c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\products.tpl',
      1 => 1474626120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30316582f6f446059c2-03732220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'set_canonical' => 0,
    'category' => 0,
    'brand' => 0,
    'page' => 0,
    'keyword' => 0,
    'translate_id' => 0,
    'lang' => 0,
    'filter_meta' => 0,
    'current_page_num' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f6f446b4304_76325812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f6f446b4304_76325812')) {function content_582f6f446b4304_76325812($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['set_canonical']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
		<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/catalog/".((string)$_smarty_tpl->tpl_vars['category']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
	<?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
		<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/brands/".((string)$_smarty_tpl->tpl_vars['brand']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->url=='discounted') {?>
        <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/discounted", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->url=='bestsellers') {?>
        <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/bestsellers", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
	<?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
		<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/all-products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/all-products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
	<?php }?>
<?php }?>

<div class="container">
	<div class="row">
		
		<div class="col-lg-3">
			<?php echo $_smarty_tpl->getSubTemplate ("features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>

		<div class="col-lg-9">
			
			<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


			
			<?php if ($_smarty_tpl->tpl_vars['keyword']->value) {?>
				<h1><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['products_search'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_search;?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			<?php } elseif ($_smarty_tpl->tpl_vars['page']->value) {?>
				<h1>
					<span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
				</h1>
			<?php } else { ?>
				<h1><span data-category="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->h1, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
				
				<?php echo $_smarty_tpl->tpl_vars['category']->value->annotation;?>


				
				<?php echo $_smarty_tpl->tpl_vars['brand']->value->annotation;?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
				
				<div id="fn-products_sort">
					<?php echo $_smarty_tpl->getSubTemplate ("products_sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			<?php }?>
				
				<div id="fn-products_content" class="row">
					<?php echo $_smarty_tpl->getSubTemplate ("products_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>

			<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
				
				<div class="shpu_pagination">
					<?php echo $_smarty_tpl->getSubTemplate ('chpu_pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			<?php }?>
			
			<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>


			<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1&&(!$_smarty_tpl->tpl_vars['category']->value||!$_smarty_tpl->tpl_vars['brand']->value)) {?>
				
				<?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>


				
				<?php echo $_smarty_tpl->tpl_vars['brand']->value->description;?>

			<?php }?>
		</div>
	</div>
</div><?php }} ?>
