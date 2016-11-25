<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:24:03
         compiled from "C:\OpenServer\domains\localhost\design\default\html\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30517582f71730837e0-60951692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd505b6f26609a363ea48bf2966f950a74b14f082' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\page.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30517582f71730837e0-60951692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f71730fbf62_75007226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f71730fbf62_75007226')) {function content_582f71730fbf62_75007226($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value->url=='404') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('page_404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    
    
    <div class="container">
        
        <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        
        <h1 class="m-b-1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>

        
        <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

    </div>
<?php }?>
<?php }} ?>
