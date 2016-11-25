<?php /* Smarty version Smarty-3.1.18, created on 2016-11-18 23:38:38
         compiled from "C:\OpenServer\domains\localhost\design\default\html\scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19465582f66cec2d558-14052971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ffae9e18453a23f2099dad45f2bb6565470ce33' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\scripts.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19465582f66cec2d558-14052971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'error' => 0,
    'call_sent' => 0,
    'subscribe_success' => 0,
    'subscribe_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f66cec71170_36712368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f66cec71170_36712368')) {function content_582f66cec71170_36712368($_smarty_tpl) {?><script>
	/* Глобальный обьект */
	/* все глобальные переменные добавляем в оъект и работаем с ним!!! */
	var okay = {};
	
	okay.is_preorder = <?php echo $_smarty_tpl->tpl_vars['settings']->value->is_preorder;?>
;
	
	<?php if ($_GET['module']=='BlogView'&&$_smarty_tpl->tpl_vars['error']->value) {?>
		
		$( window ).load( function() {
			location.href = location.href + '#fn-blog_comment';
			$( '#fn-blog_comment' ).trigger( 'submit' );
		} );
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
		$( function() {
			$.fancybox( {
				href: '#fn-callback-sent',
				padding: 0,
				minHeight: 0
			} );
		} );
	<?php }?>
	
	<?php if ($_GET['module']=='ProductView'&&$_smarty_tpl->tpl_vars['error']->value) {?>
		$( window ).load( function() {
			$( 'a[href="#comments"]' ).tab( 'show' );
			location.href = location.href + '#comments';
		} );
	
	<?php } elseif ($_GET['module']=='ProductView') {?>
		$( window ).load( function() {
			if( location.hash.search('comment') !=-1 ) {
				$( 'a[href="#comments"]' ).tab( 'show' );
			}
		} );
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['subscribe_success']->value) {?>
		$( function() {
			$.fancybox( {
				href: '#fn-subscribe-sent',
				padding: 0,
				minHeight: 0,
                closeBtn: false
			} );
		} );
	<?php } elseif ($_smarty_tpl->tpl_vars['subscribe_error']->value) {?>
		$( window ).load( function() {
			location.href = location.href + '#subscribe_error';
		} );
	<?php }?>
    <?php if ($_GET['module']=="MainView"||$_GET['module']=="ProductsView"||$_GET['module']=="ProductView"||$_GET['module']=="ComparisonView"||$_GET['module']=="WishlistView") {?>
        $(document).ready(function(){
            $('select[name=variant]').each(function(){
                var first_in_stock = $(this).find('option[data-stock!="0"]').first();
                first_in_stock.attr('selected',true);
                first_in_stock.trigger('change');
            });
        });
    <?php }?>
</script><?php }} ?>
