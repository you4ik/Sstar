<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:14:44
         compiled from "C:\OpenServer\domains\localhost\design\default\html\features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1077582f6f446d89b1-79386338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36494eadc81dec36969ffe172f920b0c49423444' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\features.tpl',
      1 => 1470915078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077582f6f446d89b1-79386338',
  'function' => 
  array (
    'catalog_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'categories' => 0,
    'level' => 0,
    'translate_id' => 0,
    'lang' => 0,
    'parent_id' => 0,
    'collapse_trigger' => 0,
    'c' => 0,
    'category' => 0,
    'lang_link' => 0,
    'collapse' => 0,
    'prices' => 0,
    'products' => 0,
    'brand' => 0,
    'b' => 0,
    'features' => 0,
    'f' => 0,
    'key' => 0,
    'o' => 0,
    'browsed_products' => 0,
    'browsed_product' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f6f4491a8c2_69565633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f6f4491a8c2_69565633')) {function content_582f6f4491a8c2_69565633($_smarty_tpl) {?>

<?php if (!function_exists('smarty_template_function_catalog_tree')) {
    function smarty_template_function_catalog_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['catalog_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
		
		<?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?>
			
			<div class="h5 bg-info p-x-1 p-y-05">
				<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['features_categories'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_categories;?>
</span>
			</div>
			<div class="nav-catalog p-x-05 m-b-2">
		
		<?php } else { ?>
			<div id="cat_<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
" class="collapse<?php if ($_smarty_tpl->tpl_vars['collapse_trigger']->value==true) {?> in<?php }?>">
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
				
				<?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories&&$_smarty_tpl->tpl_vars['c']->value->has_children_visible) {?>
					<div class="nav-item">
						
						<button class="btn-catalog-collapse <?php if ($_smarty_tpl->tpl_vars['category']->value->id!=$_smarty_tpl->tpl_vars['c']->value->id) {?> collapsed<?php }?>" type="button" data-toggle="collapse" data-target="#cat_<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['category']->value->id!=$_smarty_tpl->tpl_vars['c']->value->id) {?>true<?php } else { ?>false<?php }?>" aria-controls="cat_<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"></button>

						
						<a class="nav-link<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> link-red fn-collapsed<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>

						
						<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?>
							<?php $_smarty_tpl->tpl_vars['collapse'] = new Smarty_variable(true, null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['collapse'] = new Smarty_variable(false, null, 0);?>
						<?php }?>
						<?php if (count($_smarty_tpl->tpl_vars['c']->value->subcategories)>1) {?>
							<?php smarty_template_function_catalog_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1,'parent_id'=>$_smarty_tpl->tpl_vars['c']->value->id,'two_col'=>true,'collapse_trigger'=>$_smarty_tpl->tpl_vars['collapse']->value));?>

						<?php } else { ?>
							<?php smarty_template_function_catalog_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1,'parent_id'=>$_smarty_tpl->tpl_vars['c']->value->id,'collapse_trigger'=>$_smarty_tpl->tpl_vars['collapse']->value));?>

						<?php }?>
					</div>
				
				<?php } else { ?>
					
					<div class="nav-item">
						<a class="nav-link<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> link-red fn-collapsed<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
					</div>
				<?php }?>
			<?php }?>
		<?php } ?>
		
		<?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?>
			</div>
		
		<?php } else { ?>
			</div>
		<?php }?>
	<?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php smarty_template_function_catalog_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1));?>



<?php if ($_smarty_tpl->tpl_vars['prices']->value&&count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
	
	<div class="h5 bg-info p-x-1 p-y-05">
		<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['features_price'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_price;?>
</span>
	</div>
	<div class="m-b-2">
		<div class="row m-y-1 p-x-05">
			
			<div class="col-xs-6">
				<input id="fn-slider-min" name="p[min]" value="<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['prices']->value->current->min)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prices']->value->range->min : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['prices']->value->range->min;?>
" type="text" class="form-control">
			</div>

			
			<div class="col-xs-6">
				<input id="fn-slider-max" name="p[max]" value="<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['prices']->value->current->max)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prices']->value->range->max : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['prices']->value->range->max;?>
" type="text" class="form-control">
			</div>
		</div>
		
		<div id="fn-slider-price" class="okaycms"></div>
	</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['category']->value->brands) {?>
    
    <div class="h5 bg-info p-x-1 p-y-05">
        <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['features_manufacturer'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_manufacturer;?>
</span>
    </div>
    <div class="m-b-2 p-x-05">
        
        <div>
            <label class="c-input c-checkbox">
                <input onchange="window.location.href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array('brand'=>null,'page'=>null)),$_smarty_tpl);?>
'" type="checkbox"<?php if (!$_smarty_tpl->tpl_vars['brand']->value->id&&!$_GET['b']) {?> checked<?php }?>/>
                <span class="c-indicator"></span>
                <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['features_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
            </label>
        </div>
        
        <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->brands; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
            <div>
                <label class="c-input c-checkbox" data-brand="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
">
                    <input onchange="window.location.href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array('brand'=>$_smarty_tpl->tpl_vars['b']->value->url,'page'=>null)),$_smarty_tpl);?>
'" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['brand']->value->id==$_smarty_tpl->tpl_vars['b']->value->id||$_GET['b']&&in_array($_smarty_tpl->tpl_vars['b']->value->id,$_GET['b'])) {?> checked<?php }?>/>
                    <span class="c-indicator"></span>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                </label>
            </div>
        <?php } ?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
	    
	    <div class="h5 bg-info p-x-1 p-y-05" data-feature="<?php echo $_smarty_tpl->tpl_vars['f']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</div>
        <div class="m-b-2 p-x-05">
	        
	        <div>
		        <label class="c-input c-checkbox">
			        <input onchange="window.location.href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>null,'page'=>null)),$_smarty_tpl);?>
'" type="checkbox"<?php if (!$_GET[$_smarty_tpl->tpl_vars['key']->value]) {?> checked<?php }?>/>
			        <span class="c-indicator"></span>
			        <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['features_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
		        </label>
	        </div>
	        
            <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f']->value->options; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
?>
	            <div>
		            <label class="c-input c-checkbox">
			            <input onchange="window.location.href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>$_smarty_tpl->tpl_vars['o']->value->translit,'page'=>null)),$_smarty_tpl);?>
'" type="checkbox"<?php if ($_GET[$_smarty_tpl->tpl_vars['f']->key]&&in_array($_smarty_tpl->tpl_vars['o']->value->translit,$_GET[$_smarty_tpl->tpl_vars['f']->key])) {?> checked<?php }?>/>
			            <span class="c-indicator"></span>
			            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value->value, ENT_QUOTES, 'UTF-8', true);?>

		            </label>
	            </div>
            <?php } ?>
        </div>
    <?php } ?>
<?php }?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_browsed_products'][0][0]->get_browsed_products(array('var'=>'browsed_products','limit'=>20),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['browsed_products']->value) {?>
	<div class="h5 bg-info p-x-1 p-y-05 hidden-md-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_browsed;?>
</div>
	<div class="m-b-2 clearfix hidden-md-down">
		<?php  $_smarty_tpl->tpl_vars['browsed_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['browsed_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browsed_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['browsed_product']->key => $_smarty_tpl->tpl_vars['browsed_product']->value) {
$_smarty_tpl->tpl_vars['browsed_product']->_loop = true;
?>
			<div class="browsed-item">
				<a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['browsed_product']->value->url;?>
">
					<?php if ($_smarty_tpl->tpl_vars['browsed_product']->value->image->filename) {?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['browsed_product']->value->image->filename,50,50);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
					<?php } else { ?>
						<img width="50" height="50" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
					<?php }?>
				</a>
			</div>
		<?php } ?>
	</div>
<?php }?><?php }} ?>
