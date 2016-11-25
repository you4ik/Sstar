<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:24:02
         compiled from "C:\OpenServer\domains\localhost\design\default\html\brands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21868582f71722f1d14-63926426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '436a2b0a0eb6cc2aa2c67cf81978fc1399bfb548' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\brands.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21868582f71722f1d14-63926426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'brands' => 0,
    'lang_link' => 0,
    'b' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f717238a568_69796538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f717238a568_69796538')) {function content_582f717238a568_69796538($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/brands", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="container">
	
	<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<h1 class="m-b-1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</span></h1>

	
	<?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 text-xs-center m-b-1 m-b-3-md_down brand-list">
					<a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
brands/<?php echo $_smarty_tpl->tpl_vars['b']->value->url;?>
">
						
						<?php if ($_smarty_tpl->tpl_vars['b']->value->image) {?>
							<img class="img-fluid center-block m-b-1" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['b']->value->image,165,90,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
						<?php }?>

						
						<span data-brand="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value->name;?>
</span>
					</a>
				</div>
			<?php } ?>
		</div>
	<?php }?>

    
    <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

</div><?php }} ?>
