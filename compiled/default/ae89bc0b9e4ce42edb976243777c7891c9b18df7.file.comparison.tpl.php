<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:14:39
         compiled from "C:\OpenServer\domains\localhost\design\default\html\comparison.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30247582f6f3f600c76-76098509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae89bc0b9e4ce42edb976243777c7891c9b18df7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\comparison.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30247582f6f3f600c76-76098509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'translate_id' => 0,
    'comparison' => 0,
    'id' => 0,
    'cf' => 0,
    'product' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f6f3f6df312_82891115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f6f3f6df312_82891115')) {function content_582f6f3f6df312_82891115($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->comparison_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div class="container m-b-2">
	
	<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<h1 class="m-b-1"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['comparison_header'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_header;?>
</span></h1>

	<?php if ($_smarty_tpl->tpl_vars['comparison']->value->products) {?>
		<div class="row">
			<div class="col-lg-3 p-a-0">
				<div class="p-a-0">
					<div class="fn-product fn-resize border-b-1-primary show-container">
						
						<?php if (count($_smarty_tpl->tpl_vars['comparison']->value->products)>1) {?>
							<ul class="fn-show okaycms nav nav-tabs">
								<li class="nav-item">
									<a href="#show_all" class="nav-link active" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['comparison_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_all;?>
</a>
								</li>
								<li class="nav-item">
									<a href="#show_dif" class="nav-link unique" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['comparison_unique'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_unique;?>
</a>
								</li>
							</ul>
						<?php }?>
					</div>
					
					<div class="cprs_rating p-y-05 p-x-05" data-use="cprs_rating">
						<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_rating'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_rating;?>
</span>
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['comparison']->value->features) {?>
						<?php  $_smarty_tpl->tpl_vars['cf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cf']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comparison']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cf']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cf']->key => $_smarty_tpl->tpl_vars['cf']->value) {
$_smarty_tpl->tpl_vars['cf']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['cf']->key;
 $_smarty_tpl->tpl_vars['cf']->index++;
?>
							<div class="p-y-05 p-x-05 <?php if ($_smarty_tpl->tpl_vars['cf']->index%2==0) {?>bg-info <?php }?>cprs_feature_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 cell<?php if ($_smarty_tpl->tpl_vars['cf']->value->not_unique) {?> not_unique<?php }?>" data-use="cprs_feature_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
								<span data-feature="<?php echo $_smarty_tpl->tpl_vars['cf']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cf']->value->name;?>
</span>
							</div>
						<?php } ?>
					<?php }?>
				</div>
			</div>
			<div class="col-lg-9 row fn-comparison_products okaycms" data-products="3">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comparison']->value->products; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
					<div class="col-lg-4 p-a-0">
						<?php echo $_smarty_tpl->getSubTemplate ("tiny_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						
						<div id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="p-y-05 p-x-05 text-xs-left cprs_rating">
							<span class="rating_starOff">
								<span class="rating_starOn" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value->rating*90/sprintf('%.0f',5);?>
px;"></span>
							</span>
						</div>
						
						<?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->index++;
?>
								<div class="p-y-05 p-x-05 <?php if ($_smarty_tpl->tpl_vars['value']->index%2==0) {?>bg-info <?php }?>cprs_feature_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 cell<?php if ($_smarty_tpl->tpl_vars['comparison']->value->features[$_smarty_tpl->tpl_vars['id']->value]->not_unique) {?> not_unique<?php }?>">
									<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? "&mdash;" : $tmp);?>

								</div>
							<?php } ?>
						<?php }?>
					</div>
				<?php } ?>
			</div>
		</div>
	<?php } else { ?>
		<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['comparison_empty'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_empty;?>
</span>
	<?php }?>
</div><?php }} ?>
