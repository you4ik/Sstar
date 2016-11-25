<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:24:06
         compiled from "C:\OpenServer\domains\localhost\design\default\html\blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6090582f7176c170d1-53486446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eb06549fef58daf759852ea4dced4079bec30fc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\blog.tpl',
      1 => 1476976820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6090582f7176c170d1-53486446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'posts' => 0,
    'lang_link' => 0,
    'post' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f7176cc06d2_64348900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f7176cc06d2_64348900')) {function content_582f7176cc06d2_64348900($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/blog", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="container">
	
	<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<h1 class="m-b-1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</span></h1>

	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
            <div class="col-md-12 p-y-1 row">
                <div class="col-xs-12 col-md-1 m-b-1 hidden-md-down">
                    <a class="blog-img" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
">
                        
                        <div class="blog-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
</div>

                        
                        <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
                            <img class="img-fluid" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,162,77,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
" />
                        <?php }?>
                    </a>
                </div>
                <div class="col-xs-12 col-lg-11 m-b-1">
                    
                    <div class="h5 font-weight-bold">
                        <a class="link-black" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>

                    
                    <?php if ($_smarty_tpl->tpl_vars['post']->value->annotation) {?>
                        <div>
                            <?php echo $_smarty_tpl->tpl_vars['post']->value->annotation;?>

                        </div>
                    <?php }?>
                </div>
            </div>
		<?php } ?>
	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
