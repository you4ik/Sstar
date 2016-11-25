<?php /* Smarty version Smarty-3.1.18, created on 2016-11-19 00:14:36
         compiled from "C:\OpenServer\domains\localhost\design\default\html\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6339582f6f3c2dc512-40650230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b6291a58107fcc43710287cea2b8bea8f97963f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\product.tpl',
      1 => 1476976820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6339582f6f3c2dc512-40650230',
  'function' => 
  array (
    'comments_tree' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'product' => 0,
    'image' => 0,
    'settings' => 0,
    'lang_link' => 0,
    'currency' => 0,
    'translate_id' => 0,
    'lang' => 0,
    'v' => 0,
    'comparison' => 0,
    'wished_products' => 0,
    'f' => 0,
    'comments' => 0,
    'comment' => 0,
    'level' => 0,
    'children' => 0,
    'error' => 0,
    'comment_name' => 0,
    'comment_email' => 0,
    'comment_text' => 0,
    'prev_product' => 0,
    'next_product' => 0,
    'related_products' => 0,
    'p' => 0,
    'related_posts' => 0,
    'r_p' => 0,
    'config' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f6f3c7034f2_09183325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f6f3c7034f2_09183325')) {function content_582f6f3c7034f2_09183325($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\OpenServer\\domains\\localhost\\Smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\localhost\\Smarty\\libs\\plugins\\modifier.date_format.php';
?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products/".((string)$_smarty_tpl->tpl_vars['product']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="border-b-1-info">
	<div class="container" itemscope itemtype="http://schema.org/Product">
		
		<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		
		<h1 class="m-b-1">
			<span data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)==1&&!empty($_smarty_tpl->tpl_vars['product']->value->variant->name)) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variant->name, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></span>
		</h1>

		<div class="row fn-transfer">
			<?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
				<div class="col-lg-5">
					<a class="fn-zoom okaycms btn-block relative border-a-1-info text-xs-center" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,800,600,'w');?>
" rel="group">
						
						<?php if ($_smarty_tpl->tpl_vars['product']->value->special) {?>
							<img class="card-spec" alt='<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
' title="<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
"  src='files/special/<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
'/>
						<?php }?>

						
						<img itemprop="image" class="fn-img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,300,300);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
					</a>
					
					<?php if (count($_smarty_tpl->tpl_vars['product']->value->images)>1) {?>
						<div class="row m-y-2 fn-slick-images okaycms">
							
							<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['cut'][0][0]->cut_modifier($_smarty_tpl->tpl_vars['product']->value->images); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
								<div class="col-xs-4 col-lg-3">
									<a class="fn-zoom okaycms btn-block border-a-1-info text-xs-center product-images" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,800,600,'w');?>
" rel="group">
										<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,87,72);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
									</a>
								</div>
							<?php } ?>
						</div>
					<?php }?>
				</div>
            <?php } else { ?>
                <div class="col-lg-5">
                    <a class="fn-zoom okaycms btn-block relative border-a-1-info text-xs-center" href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" rel="group">
                        
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->special) {?>
                            <img class="card-spec" alt='<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
' title='<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
'  src='files/special/<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
'/>
                        <?php }?>
                        
                        <img class="fn-img" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" height="300" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                    </a>
                </div>
			<?php }?>
			<div class="col-lg-7 fn-product" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
				<form class="fn-variants okaycms row" action="/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart">
					<div class="col-lg-6">
						
						<div class="h4 font-weight-bold">
							<span class="fn-price" itemprop="price" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price,'',false);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price);?>
</span>
                            <span itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </div>

						
						<div class="text-line-through text-red<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> hidden-xs-up<?php }?>">
							<span class="fn-old_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->compare_price);?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

						</div>

						
						<div id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="product_rating"<?php if ($_smarty_tpl->tpl_vars['product']->value->rating>0) {?> itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"<?php }?>>
							<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_rating'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_rating;?>
</span>:
							<span class="rating_starOff">
								<span class="rating_starOn" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value->rating*90/sprintf('%.0f',5);?>
px;"></span>
							</span>
                            
                            <?php if ($_smarty_tpl->tpl_vars['product']->value->rating>0) {?>
                                <span itemprop="reviewCount" style="display: none;"><?php echo sprintf("%.0f",$_smarty_tpl->tpl_vars['product']->value->votes);?>
</span>
                                <span itemprop="ratingValue">(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['product']->value->rating);?>
)</span>
                                
                                <span itemprop="bestRating" style="display:none;">5</span>
                            <?php } else { ?>
                                <span>(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['product']->value->rating);?>
)</span>
                            <?php }?>
                        </div>

						
						<div<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->sku) {?> class="hidden-xs-up"<?php }?>><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_sku'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_sku;?>
</span>: <span class="fn-sku"><?php echo $_smarty_tpl->tpl_vars['product']->value->variant->sku;?>
</span></div>
						
						<select name="variant" class="fn-variant okaycms form-control c-select m-t-1 m-b-1-md_down<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?> hidden-xs-up<?php }?>">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
" data-stock="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?> data-cprice="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value->sku) {?> data-sku="<?php echo $_smarty_tpl->tpl_vars['v']->value->sku;?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-lg-6">
						<?php if (!$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>
							
							<div class="fn-not_preorder form-group<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden-xs-up<?php }?>">
								<button class="btn btn-danger-outline btn-block disabled h5" type="button" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_out_of_stock'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_out_of_stock;?>
</button>
							</div>
						<?php } else { ?>
							
							<div class="fn-is_preorder form-group<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden-xs-up<?php }?>">
								<button class="btn btn-warning-outline btn-block i-preorder" type="submit" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_pre_order'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</button>
							</div>
						<?php }?>
						<div class="fn-product-amount fn-is_stock okaycms text-xs-center text-md-left<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden-xs-up<?php }?>">
							
							<span class="minus">&minus;</span>
							<input class="form-control" type="text" name="amount" value="1" data-max="<?php echo $_smarty_tpl->tpl_vars['product']->value->variant->stock;?>
">
							<span class="plus">&plus;</span>

							
							<button class="fn-is_stock btn btn-warning i-add-cart<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden-xs-up<?php }?>" type="submit" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_add_cart'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_cart;?>
</button>
						</div>
						
						<div class="form-group m-t-1 text-xs-center text-md-left hidden-md-down">
							<?php if (!in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['comparison']->value->ids)) {?>
								<a class="i-comparison fn-comparison okaycms" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_comparison;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_add_comparison'];?>
"></a>
							<?php } else { ?>
								<a class="i-comparison fn-comparison okaycms selected" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_comparison;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_remove_comparison'];?>
"></a>
							<?php }?>
						</div>
						
						<div class="form-group text-xs-center text-md-left m-t-1">
							<?php if (in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['wished_products']->value)) {?>
								<a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="i-favorites fn-wishlist okaycms selected" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_favorite;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_remove_favorite'];?>
"></a>
							<?php } else { ?>
								<a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="i-favorites fn-wishlist okaycms" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_favorite;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_add_favorite'];?>
"></a>
							<?php }?>
						</div>
					</div>
				</form>
				<div class="row">
					
					<div class="col-lg-6">
						<div class="bg-info p-a-1 m-y-1">
							<div class="h5 i-delivery">
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_delivery'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery;?>
</span>
							</div>
							<ul class="m-b-0">
								<li>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_delivery_1'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_1;?>
</span>
								</li>
								<li>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_delivery_2'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_2;?>
</span>
								</li>
								<li>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_delivery_3'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_3;?>
</span>
								</li>
								<li>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_delivery_4'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_4;?>
</span>
								</li>
							</ul>
						</div>
					</div>

					
					<div class="col-lg-6">
						<div class="bg-pink p-a-1 m-y-1">
							<div class="h5 i-payment">
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_payment'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment;?>
</span>
							</div>
							<ul class="m-b-0">
								<li>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_payment_1'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_1;?>
</span>
								</li>
								<li>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_payment_2'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_2;?>
</span>
								</li>
								<li>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_payment_3'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_3;?>
</span>
								</li>
								<li>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_payment_4'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_4;?>
</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="p-y-05 text-xs-center text-md-left">
					<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_share'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_share;?>
</span>:
				</div>
				<div class="ya-share2 m-b-2 text-xs-center text-md-left" data-services="vkontakte,facebook,twitter"></div>
			</div>
		</div>
		
		<ul class="nav nav-tabs hidden-md-down" role="tablist">
			
			<?php if ($_smarty_tpl->tpl_vars['product']->value->body) {?>
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#annotation" role="tab" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_description'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_description;?>
</a>
				</li>
			<?php }?>

			
			<?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
				<li class="nav-item">
					<a class="nav-link <?php if (!$_smarty_tpl->tpl_vars['product']->value->body) {?> active<?php }?>" data-toggle="tab" href="#features" role="tab" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_features'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_features;?>
</a>
				</li>
			<?php }?>

			
			<li class="nav-item">
				<a class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value->features&&!$_smarty_tpl->tpl_vars['product']->value->body) {?> active<?php }?>" data-toggle="tab" href="#comments" role="tab" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_comments'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_comments;?>
</a>
			</li>
		</ul>
		
		
		<div class="tab-content p-y-2">
			
			<?php if ($_smarty_tpl->tpl_vars['product']->value->body) {?>
				<button class="btn btn-block btn-link border-a-1-info m-b-1 hidden-lg-up" type="button" data-toggle="collapse" data-target="#annotation" aria-expanded="false" aria-controls="annotation"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_description;?>
</button>
				<div class="tab-pane collapse active" id="annotation" role="tabpanel" itemprop="description">
					<?php echo $_smarty_tpl->tpl_vars['product']->value->body;?>

				</div>
            <?php } else { ?>
                <span style="display: none;" itemprop="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
			<?php }?>

			
			<?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
				<button class="btn btn-block btn-link border-a-1-info m-b-1 hidden-lg-up" type="button" data-toggle="collapse" data-target="#features" aria-expanded="false" aria-controls="features"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_features;?>
</button>
				<div class="tab-pane collapse <?php if (!$_smarty_tpl->tpl_vars['product']->value->body) {?> active<?php }?>" id="features" role="tabpanel">
					<div class="row">
						<div class="col-lg-7">
							<table class="table table-striped">
								<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['f']->value->value;?>
</td>
									</tr>
								<?php } ?>
							</table>
						</div>
					</div>
				</div>
			<?php }?>

			
			<button class="btn btn-block btn-link border-a-1-info hidden-lg-up" type="button" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_comments;?>
</button>
			<div class="tab-pane collapse<?php if (!$_smarty_tpl->tpl_vars['product']->value->features&&!$_smarty_tpl->tpl_vars['product']->value->body) {?> active<?php }?>" id="comments" role="tabpanel">
				<div class="row">
					
					<div class="col-lg-7">
						<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                            <?php if (!function_exists('smarty_template_function_comments_tree')) {
    function smarty_template_function_comments_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['comments_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                                    
                                    
                                    <a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>

                                    <div class="m-b-1 <?php if ($_smarty_tpl->tpl_vars['level']->value>0) {?>admin_note<?php }?>" style="margin-left:<?php echo $_smarty_tpl->tpl_vars['level']->value*20;?>
px">
                                        
                                        <div>
                                            <span class="h5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </div>
                                        <div class="p-y-05">
                                            
                                            <span class="blog-data static"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
, <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
</span>

                                            
                                            <?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?>
                                                <span class="font-weight-bold text-muted" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['post_comment_status'];?>
">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comment_status;?>
)</span>
                                            <?php }?>

                                        </div>
                                        
                                        <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['children']->value[$_smarty_tpl->tpl_vars['comment']->value->id])) {?>
                                            <?php smarty_template_function_comments_tree($_smarty_tpl,array('comments'=>$_smarty_tpl->tpl_vars['children']->value[$_smarty_tpl->tpl_vars['comment']->value->id],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                        <?php }?>
                                    </div>
                                <?php } ?>
                            <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                            <?php smarty_template_function_comments_tree($_smarty_tpl,array('comments'=>$_smarty_tpl->tpl_vars['comments']->value));?>

						<?php } else { ?>
							<div class="text-muted m-b-1">
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_no_comments'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_no_comments;?>
</span>
							</div>
						<?php }?>
					</div>
					
					<div class="col-lg-5 bg-info p-y-1">
						<!--Форма отправления комментария-->
						<form class="form comment_form" method="post">
							<div class="h3 text-xs-center">
								<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_write_comment'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_write_comment;?>
</span>
							</div>
							
							<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
								<div class="p-x-1 p-y-05 m-b-1 text-red">
									<?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
										<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_error_captcha'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
									<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
										<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
									<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_comment') {?>
										<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_comment'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
</span>
									<?php }?>
								</div>
							<?php }?>

							<div class="row m-b-1">
								
								<div class="col-lg-6 form-group">
									<input class="form-control" type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*"/>
								</div>
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_email'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
"/>
                                </div>

							</div>
							
							<div class="form-group">
								<textarea class="form-control" rows="3" name="text" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_comment'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
*"><?php echo $_smarty_tpl->tpl_vars['comment_text']->value;?>
</textarea>
							</div>

                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_product) {?>
                                <div class="col-xs-12 col-lg-7 form-inline m-b-1-md_down p-l-0">
                                    
                                    <div class="form-group">
                                        <img class="brad-3" src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
" alt='captcha'/>
                                    </div>

                                    
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="captcha_code" value="" data-format="\d\d\d\d\d" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_captcha'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*"/>
                                    </div>
                                </div>
                            <?php }?>
							
							<div class="text-xs-right">
								<input class="btn btn-warning" type="submit" name="comment" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_send'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
"/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		
		<?php if ($_smarty_tpl->tpl_vars['prev_product']->value||$_smarty_tpl->tpl_vars['next_product']->value) {?>
			<nav>
				<ol class="pager">
					<li>
						<?php if ($_smarty_tpl->tpl_vars['prev_product']->value) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['prev_product']->value->url;?>
">← <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
						<?php }?>
					</li>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['next_product']->value) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['next_product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 →</a>
						<?php }?>
					</li>
				</ol>
			</nav>
		<?php }?>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['related_products']->value) {?>
<div class="p-y-2">
	<div class="container">
		<div class="h1 m-b-1">
			<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_recommended_products'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_recommended_products;?>
</span>
		</div>
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['p']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->iteration++;
?>
				<div class="col-md-4 col-xl-3<?php if ($_smarty_tpl->tpl_vars['p']->iteration==4) {?> hidden-lg<?php }?>">
					<?php echo $_smarty_tpl->getSubTemplate ("tiny_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['p']->value), 0);?>

				</div>
				<?php if ($_smarty_tpl->tpl_vars['p']->iteration%4==0) {?><div class="col-xs-12 hidden-sm-down"></div><?php }?>
			<?php } ?>
		</div>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['related_posts']->value) {?>
    <div class="p-y-2">
        <div class="container">
            <div class="h1 m-b-1">
                <span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['product_related_post'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_related_post;?>
</span>
            </div>
            <div class="row">
                <?php  $_smarty_tpl->tpl_vars['r_p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r_p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['r_p']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['r_p']->key => $_smarty_tpl->tpl_vars['r_p']->value) {
$_smarty_tpl->tpl_vars['r_p']->_loop = true;
 $_smarty_tpl->tpl_vars['r_p']->iteration++;
?>
                    <div class="col-md-4 col-xl-3<?php if ($_smarty_tpl->tpl_vars['p']->iteration==4) {?> hidden-lg<?php }?>">
                        <div class="text-center">
                            <a class="blog-img" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['r_p']->value->url;?>
">
                                
                                <div class="blog-data m-l-3 hidden-md-down"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['r_p']->value->date);?>
</div>

                                
                                <?php if ($_smarty_tpl->tpl_vars['r_p']->value->image) {?>
                                    <img class="hidden-sm-down" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['r_p']->value->image,150,150,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
" />
                                <?php }?>
                            </a>
                            <div class="h5 font-weight-bold">
                                <a class="link-black" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['r_p']->value->url;?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['r_p']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r_p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['r_p']->iteration%4==0) {?><div class="col-xs-12 hidden-sm-down"></div><?php }?>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }?>



<script type="application/ld+json">
{
"@context": "http://schema.org/",
"@type": "Product",
"name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
",
"image": "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
",
"description": "<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->annotation);?>
",
"mpn": "<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->sku) {?><?php echo $_smarty_tpl->tpl_vars['product']->value->variant->sku;?>
<?php } else { ?>Не указано<?php }?>",

<?php if ($_smarty_tpl->tpl_vars['brand']->value->name) {?>

"brand": {
"@type": "Brand",
"name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
},

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->rating>0) {?>

"aggregateRating": {
"@type": "AggregateRating",
"ratingValue": "<?php echo sprintf('%.1f',$_smarty_tpl->tpl_vars['product']->value->rating);?>
",
"ratingCount": "<?php echo sprintf('%.0f',$_smarty_tpl->tpl_vars['product']->value->votes);?>
"
},

<?php }?>

"offers": {
"@type": "Offer",
"priceCurrency": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
",
"price": "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price,'',false);?>
",
"priceValidUntil": "<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
",
"itemCondition": "http://schema.org/UsedCondition",
"availability": "http://schema.org/InStock",
"seller": {
"@type": "Organization",
"name": "<?php echo $_smarty_tpl->tpl_vars['settings']->value->company_name;?>
"
}
}
}
</script>
<?php }} ?>
