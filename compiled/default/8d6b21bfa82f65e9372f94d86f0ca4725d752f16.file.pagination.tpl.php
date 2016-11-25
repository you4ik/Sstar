<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:24:06
         compiled from "C:\OpenServer\domains\localhost\design\default\html\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23867582f7176d01714-04897674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d6b21bfa82f65e9372f94d86f0ca4725d752f16' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\pagination.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23867582f7176d01714-04897674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_pages_num' => 0,
    'ajax' => 0,
    'current_page_num' => 0,
    'visible_pages' => 0,
    'page_from' => 0,
    'lang' => 0,
    'page_to' => 0,
    'p' => 0,
    'translate_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f7176deddf7_78280221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f7176deddf7_78280221')) {function content_582f7176deddf7_78280221($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['total_pages_num']->value>1) {?>
	<ul class="pagination<?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?> is_ajax<?php }?>">
		
		<?php $_smarty_tpl->tpl_vars['visible_pages'] = new Smarty_variable(5, null, 0);?>
		
		<?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(1, null, 0);?>
		
		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value>floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
			<?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(max(1,$_smarty_tpl->tpl_vars['current_page_num']->value-floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)-1), null, 0);?>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value>$_smarty_tpl->tpl_vars['total_pages_num']->value-ceil($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
			<?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(max(1,$_smarty_tpl->tpl_vars['total_pages_num']->value-$_smarty_tpl->tpl_vars['visible_pages']->value-1), null, 0);?>
		<?php }?>
		
		<?php $_smarty_tpl->tpl_vars['page_to'] = new Smarty_variable(min($_smarty_tpl->tpl_vars['page_from']->value+$_smarty_tpl->tpl_vars['visible_pages']->value,$_smarty_tpl->tpl_vars['total_pages_num']->value-1), null, 0);?>
		
		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value>1) {?>
			<li class="page-item">
				<a class="page-link" href="<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
<?php }?>" aria-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_prev;?>
">
					<span aria-hidden="true">&laquo;</span>
					<span><?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_prev;?>
</span>
				</a>
			</li>
		<?php } else { ?>
			<li class="page-item disabled">
				<span class="page-link" aria-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_prev;?>
">
					<span aria-hidden="true">&laquo;</span>
					<span><?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_prev;?>
</span>
				</span>
			</li>
		<?php }?>
		
		
		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
			<li class="page-item active">
				<span class="page-link">1</span>
			</li>
		<?php } else { ?>
			<li class="page-item">
				<a class="page-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
">1</a>
			</li>
		<?php }?>
		
		
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['page_to']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int) $_smarty_tpl->tpl_vars['page_from']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total']);
?>
			
			<?php $_smarty_tpl->tpl_vars['p'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']+1, null, 0);?>
			
			<?php if (($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page_from']->value+1&&$_smarty_tpl->tpl_vars['p']->value!=2)||($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page_to']->value&&$_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['total_pages_num']->value-1)) {?>
				<li class="page-item">
					<a class="page-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl);?>
">...</a>
				</li>
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['current_page_num']->value) {?>
				<li class="page-item<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['current_page_num']->value) {?> active<?php }?>">
					<span class="page-link"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</span>
				</li>
			<?php } else { ?>
				<li class="page-item">
					<a class="page-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
				</li>
			<?php }?>
		<?php endfor; endif; ?>
		
		
		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==$_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
			<li class="page-item active">
				<span class="page-link"><?php echo $_smarty_tpl->tpl_vars['total_pages_num']->value;?>
</span>
			</li>
		<?php } else { ?>
			<li class="page-item">
				<a class="page-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['total_pages_num']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['total_pages_num']->value;?>
</a>
			</li>
		<?php }?>
		
		
		<li class="page-item">
			<a class="page-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>'all'),$_smarty_tpl);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['pagination_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_all;?>
</a>
		</li>
		
		
		<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value<$_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
			<li class="page-item">
				<a class="page-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl);?>
" aria-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_next;?>
">
					<span aria-hidden="true">&raquo;</span>
					<span><?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_next;?>
</span>
				</a>
			</li>
		<?php } else { ?>
			<li class="page-item disabled">
				<span class="page-link" aria-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_next;?>
">
					<span aria-hidden="true">&raquo;</span>
					<span><?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_next;?>
</span>
				</span>
			</li>
		<?php }?>
		
	</ul>
<?php }?><?php }} ?>
