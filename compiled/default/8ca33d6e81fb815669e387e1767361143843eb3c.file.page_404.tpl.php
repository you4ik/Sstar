<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 01:53:36
         compiled from "C:\OpenServer\domains\localhost\design\default\html\page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10124582f8670e085b2-53760032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca33d6e81fb815669e387e1767361143843eb3c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\page_404.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10124582f8670e085b2-53760032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f8670e6b609_95643743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f8670e6b609_95643743')) {function content_582f8670e6b609_95643743($_smarty_tpl) {?>
<div class="container">
    
    <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
    <h1 class="m-b-1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>

    
    <div>
        <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

    </div>
</div><?php }} ?>
