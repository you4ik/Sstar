<?php /* Smarty version Smarty-3.1.18, created on 2016-11-20 16:24:11
         compiled from "C:\OpenServer\domains\localhost\design\default\html\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26896582f66ce78c675-59009762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b5c9d490c88ab88b6a44fd74667f9847e37d095' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\design\\default\\html\\index.tpl',
      1 => 1479648247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26896582f66ce78c675-59009762',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_582f66cebfaee5_23119360',
  'variables' => 
  array (
    'language' => 0,
    'config' => 0,
    'meta_title' => 0,
    'filter_meta' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'module' => 0,
    'set_canonical' => 0,
    'settings' => 0,
    'rel_prev_next' => 0,
    'lang_link' => 0,
    'canonical' => 0,
    'product' => 0,
    'image' => 0,
    'post' => 0,
    'sort_canonical' => 0,
    'languages' => 0,
    'l' => 0,
    'categories' => 0,
    'c' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f66cebfaee5_23119360')) {function content_582f66cebfaee5_23119360($_smarty_tpl) {?>
<!DOCTYPE html>
<html <?php if ($_smarty_tpl->tpl_vars['language']->value->label) {?>lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->label, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
<head>

	
	<base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/"/>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->title, ENT_QUOTES, 'UTF-8', true);?>
</title>
	<?php if ((!empty($_smarty_tpl->tpl_vars['meta_description']->value)||!empty($_smarty_tpl->tpl_vars['meta_keywords']->value)||!empty($_smarty_tpl->tpl_vars['filter_meta']->value->description)||!empty($_smarty_tpl->tpl_vars['filter_meta']->value->keywords))&&!$_GET['page']) {?>
		<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->description, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->keywords, ENT_QUOTES, 'UTF-8', true);?>
"/>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductsView') {?>
		<?php if ($_smarty_tpl->tpl_vars['set_canonical']->value) {?>
			<meta name="robots" content="noindex,nofollow"/>
		<?php } elseif ($_GET['page']||$_GET['sort']) {?>
			<meta name="robots" content="noindex,follow"/>
		<?php } elseif (isset($_GET['keyword'])) {?>
			<meta name="robots" content="noindex,follow"/>
		<?php } else { ?>
			<meta name="robots" content="index,follow"/>
		<?php }?>
	<?php } elseif ($_GET['module']=="RegisterView"||$_GET['module']=="LoginView"||$_GET['module']=="UserView"||$_GET['module']=="CartView") {?>
		<meta name="robots" content="noindex,follow"/>
	<?php } elseif ($_GET['module']=="OrderView") {?>
		<meta name="robots" content="noindex,nofollow"/>
	<?php } else { ?>
		<meta name="robots" content="index,follow"/>
	<?php }?>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<meta name="generator" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->version;?>
"/>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value->g_webmaster) {?>
		<meta name="google-site-verification" content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->g_webmaster;?>
" />
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value->y_webmaster) {?>
		<meta name='yandex-verification' content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->y_webmaster;?>
" />
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['rel_prev_next']->value;?>


	
	<?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductView') {?>
		<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/>
		<meta property="og:type" content="article"/>
		<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<meta property="og:description" content='<?php echo $_smarty_tpl->tpl_vars['product']->value->annotation;?>
'/>
		<?php if ($_smarty_tpl->tpl_vars['product']->value->images) {?>
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->images; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
				
				<link rel="image_src" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,330,300);?>
"/>
				
				<meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,330,300);?>
"/>
			<?php } ?>
		<?php }?>
		<meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
"/>
		<link rel="image_src" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
"/>
		
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
		<meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['product']->value->annotation;?>
">
		<meta name="twitter:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
">
	<?php } elseif ($_smarty_tpl->tpl_vars['module']->value=='BlogView') {?>
		<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/>
		<meta property="og:type" content="article"/>
		<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
			<meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
"/>
			<link rel="image_src" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
"/>
		<?php } else { ?>
			<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/logo_ru.png" />
			<meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/logo_ru.png">
		<?php }?>
		<meta property="og:description" content='<?php echo $_smarty_tpl->tpl_vars['post']->value->annotation;?>
'/>

		
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
		<meta name="twitter:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->annotation, ENT_QUOTES, 'UTF-8', true);?>
">
		<meta name="twitter:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
">
	<?php } else { ?>
		<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
" />
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
"/>
		<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/logo_ru.png" />
		<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
"/>
		<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<link rel="image_src" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/logo_ru.png"/>
		
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
">
		<meta name="twitter:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		<meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/logo_ru.png">
	<?php }?>

	
	<?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/>
	<?php } elseif ($_GET['sort']) {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sort_canonical']->value;?>
"/>
	<?php }?>

	
	<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
			<link rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['l']->value->label;?>
" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['l']->value->url;?>
"/>
		<?php }?>
	<?php } ?>

	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-2.1.4.min.js"></script>

	
	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-ui.min.js"></script>

	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.fancybox.min.js"></script>

	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.autocomplete-min.js"></script>

	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/slick.min.js"></script>

	
	<?php if ($_GET['module']=='ProductView'||$_GET['module']=="BlogView") {?>
		<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
		<script type="text/javascript" src="//yastatic.net/share2/share.js"></script>
	<?php }?>

	
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/bootstrap.css" rel="stylesheet"/>
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/style.css" type="text/css" data-template-style="true" rel="stylesheet">
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/bootstrap.min.js"></script>

	
	<?php echo $_smarty_tpl->getSubTemplate ("scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/okay.js"></script>

	
	<?php if ($_SESSION['admin']) {?>
		<script src ="backend/design/js/admintooltip/admintooltip.js"></script>
		<link href="backend/design/js/admintooltip/styles/admin.css" rel="stylesheet"/>
	<?php }?>

	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/baloon.js"></script>

	<?php if ($_smarty_tpl->tpl_vars['settings']->value->g_analytics) {?>
	
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php echo $_smarty_tpl->tpl_vars['settings']->value->g_analytics;?>
', 'auto');
			ga('send', 'pageview');
		</script>
	
	<?php }?>

	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="http://delivery.bdvision.ru/bitrix/templates/bd_sushi_shop_default/vendor/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="http://delivery.bdvision.ru/bitrix/templates/bd_sushi_shop_default/animate.css">
</head>

<body>

<div class="wrapper">
	<header class="header ">
		<div class="wrap top_wrap">
			<span class="logo">Sushi Star <span>Riga</span></span>            <a href="#" class="cart_btn cart_full">

				<span>400</span>
				<i class="rouble rouble_padding">i</i>
			</a>
			<div class="head_center">
				<div class="head_center">
					<ul>
						<li class="mobile"><a id="mobmenu" href="#">Меню</a></li>
						<li><a href="/menu/sushi/">Меню</a></li>
						<li><a href="/delivery/">Доставка</a></li>
						<li><a href="/news/">Новости</a></li>
						<li><a href="/sale/">Акции</a></li>
						<li><a href="/surprise/">Розыгрыш</a></li>
					</ul>
					<div class="phone" id="headphone">
						+371 <span>22-41-8383</span></div>
				</div>            </div>


		</div>
	</header><!-- .header-->
	<main class="content ">
		<div class="slider">
			<div class="slider_item_first"  id="bx_3218110189_638">
				<div class="slider_item_child" style="background: #00000a url() no-repeat center;   background-size: cover;">
					<div class="slide_item_bd">
						<img
								src="http://delivery.bdvision.ru/upload/iblock/c55/c5511fd4a483ab71df0e0eae2a4a5148.jpg"
								alt="Samurai set"
								title="Samurai set"
						/>
					</div>
				</div>
			</div>

		</div>
		<div class="info_line">
			<div class="wrap">
				<div class="phone_box">
					<div class="phone"><span>(383)</span> 120-00-00</div>
					<div class="dostavka">Доставка с 9.00 до 22.00</div>
				</div>
				<div class="inf_box if_1">
					<div class="title">Быстро</div>
					<p>Время доставки заказ за 45 минут.</p>                </div>
				<div class="inf_box if_2">
					<div class="title">Вкусно</div>
					<p>Мы готовим только из свежих продуктов.</p>                </div>
				<div class="inf_box if_3">
					<div class="title">Бесплатная доставка</div>
					<p>Минимальный заказ 300 рублей</p>
				</div>
			</div>
		</div><!-- .info_line -->

		<div class="main_tovar_box">
			<div class="wrap">


				
				<?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
				<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
				<div class="togmenu">
					<div class="title">Меню</div>
					<span class="close"></span>
					<ul class="sec_menu">
						<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                                <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories&&$_smarty_tpl->tpl_vars['level']->value==1) {?>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" data-target="#<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value->url==$_GET['category']) {?>class="active"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
						<?php }?>
						<?php }?>
						<?php } ?>
					</ul>
				</div>
				<?php }?>
				<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


				<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1));?>



			</div>
			<div class="for_poplavok">
				<div class="wrap">
























					<div class="tovar_box">
						<div
								class="tovar animate"
								id="bx_651765591_524"
								data-price="60"
								data-old-price="120"
								data-id="524"
								data-category-id="18"
								>
							<div class="pic">
								<img
										src="http://delivery.bdvision.ru/upload/resize_cache/iblock/e2c/220_172_1/e2cf91cb5386dce5e5152a645dc1c57f.jpg"
										alt="Эби макси"
										title="Эби макси"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>
							<div class="label" style="background-color: #a74ebd">Рекомендуем</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/sushi/ebi-maksi/">Эби макси</a></div>
								<p>Королевская креветка, рис, васаби</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="old_price"><b><span>120</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>60</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">60 гр / 1 шт</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/e2c/467_361_1/e2cf91cb5386dce5e5152a645dc1c57f.jpg"
											alt="Эби макси"
											title="Эби макси"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="label" style="background-color: #a74ebd">Рекомендуем</div>
								<div class="about">
									<div class="title">Эби макси</div>
									<p>Королевская креветка, рис, васаби<br />
										Белки: 6,9.&nbsp;&nbsp;Жиры: 10,3.&nbsp;&nbsp;Углеводы: 60,3.&nbsp;&nbsp;Калорийность: 170,39/100 </p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="old_price"><b><span>120</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>60</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">60 гр / 1 шт</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>37</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_592"
								data-price="500"
								data-old-price="1000"
								data-id="592"
								data-category-id="18"
						>
							<div class="pic">
								<img src="/bitrix/templates/bd_sushi_shop_default/images/no_photo.jpg" width="220" height="172">
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>
							<div class="label" style="background-color: #ff6a39">Хит сезона</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/sushi/tovar-bez-foto3150/">Товар без фото</a></div>
								<p>Возможное и невозможное описание, которое поможет раскрыть смысл бытия.</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="old_price"><b><span>1000</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>500</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">150 гр / 8 шт</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img src="/bitrix/templates/bd_sushi_shop_default/images/no_photo.jpg">
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="label" style="background-color: #ff6a39">Хит сезона</div>
								<div class="about">
									<div class="title">Товар без фото</div>
									<p>Можно расширить текст дополнительной информацией. Что является очень полезной функцией.</p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="old_price"><b><span>1000</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>500</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">150 гр / 8 шт</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>24</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_520"
								data-price="290"
								data-old-price="350"
								data-id="520"
								data-category-id="22"
						>
							<div class="pic">
								<img
										src="/upload/resize_cache/iblock/99f/220_172_1/99f48feadee7c47de2e3789898b5cd46.jpg"
										alt="Соба Йоуши"
										title="Соба Йоуши"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/korobochki/soba-youshi/">Соба Йоуши</a></div>
								<p>Соба, говядина, болгарский перец, соевый соус, кунжут</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="old_price"><b><span>350</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>290</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">500 гр</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/99f/467_361_1/99f48feadee7c47de2e3789898b5cd46.jpg"
											alt="Соба Йоуши"
											title="Соба Йоуши"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="about">
									<div class="title">Соба Йоуши</div>
									<p>Соба, говядина, болгарский перец, соевый соус, кунжут</p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="old_price"><b><span>350</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>290</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">500 гр</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>120</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_589"
								data-price="1090"
								data-old-price="1200"
								data-id="589"
								data-category-id="19"
						>
							<div class="pic">
								<img
										src="/upload/resize_cache/iblock/57a/220_172_1/57ad187727ddd1529af38ed7d2625df7.jpg"
										alt="Канадский"
										title="Канадский"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>
							<div class="label" style="background-color: #000000">Любой текст</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/rolly/kanadskiy/">Канадский</a></div>
								<p>Креветка тигровая, рис, соус с икрой тобико</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="old_price"><b><span>1200</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>1090</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">270 гр / 8 шт</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/57a/467_361_1/57ad187727ddd1529af38ed7d2625df7.jpg"
											alt="Канадский"
											title="Канадский"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="label" style="background-color: #000000">Любой текст</div>
								<div class="about">
									<div class="title">Канадский</div>
									<p>Креветка тигровая, рис, соус с икрой тобико</p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="old_price"><b><span>1200</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>1090</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">270 гр / 8 шт</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>48</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_499"
								data-price="490"
								data-old-price="500"
								data-id="499"
								data-category-id="23"
						>
							<div class="pic">
								<img
										src="/upload/resize_cache/iblock/93a/220_172_1/93a7838279f3e78eb780311c1f8039ad.jpg"
										alt="Торт Моцарт"
										title="Торт Моцарт"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/deserty/tort-motsart/">Торт Моцарт</a></div>
								<p>Сладкое тесто с корицей, сливки, карамель, шоколадная глазурь</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="old_price"><b><span>500</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>490</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">100 гр</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/93a/467_361_1/93a7838279f3e78eb780311c1f8039ad.jpg"
											alt="Торт Моцарт"
											title="Торт Моцарт"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="about">
									<div class="title">Торт Моцарт</div>
									<p>Сладкое тесто с корицей, сливки, карамель, шоколадная глазурь</p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="old_price"><b><span>500</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>490</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">100 гр</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>31</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_523"
								data-price="120"
								data-old-price=""
								data-id="523"
								data-category-id="18"
						>
							<div class="pic">
								<img
										src="/upload/resize_cache/iblock/a1e/220_172_1/a1e2d86f1342433dbd34ecccb7017905.jpg"
										alt="Эби"
										title="Эби"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/sushi/ebi/">Эби</a></div>
								<p>Тигровая креветка, рис, вассаби</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="price"><span>120</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">30 гр / 1 шт</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/a1e/467_361_1/a1e2d86f1342433dbd34ecccb7017905.jpg"
											alt="Эби"
											title="Эби"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="about">
									<div class="title">Эби</div>
									<p>Тигровая креветка, рис, вассаби<br />
										Белки: 10,3.&nbsp;&nbsp;Жиры: 9,5.&nbsp;&nbsp;Углеводы: 32,5.&nbsp;&nbsp;Калорийность: 230,45/100</p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="price"><span>120</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">30 гр / 1 шт</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>28</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_527"
								data-price="110"
								data-old-price="140"
								data-id="527"
								data-category-id="18"
						>
							<div class="pic">
								<img
										src="/upload/resize_cache/iblock/af3/220_172_1/af3c124f908486837f4ce8f0c1f50e8b.jpg"
										alt="Унаги"
										title="Унаги"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>
							<div class="label" style="background-color: #ff6a39">Хит сезона</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/sushi/unagi/">Унаги</a></div>
								<p>Копченый угорь, рис</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="old_price"><b><span>140</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>110</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">33 г / 1 шт</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/af3/467_361_1/af3c124f908486837f4ce8f0c1f50e8b.jpg"
											alt="Унаги"
											title="Унаги"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="label" style="background-color: #ff6a39">Хит сезона</div>
								<div class="about">
									<div class="title">Унаги</div>
									<p>Копченый угорь, рис<br />
										Белки: 8,6.&nbsp;&nbsp;Жиры: 4,8.&nbsp;&nbsp;Углеводы: 28,93.&nbsp;&nbsp;Калорийность: 186,83/100 </p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="old_price"><b><span>140</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>110</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">33 г / 1 шт</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>23</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_526"
								data-price="60"
								data-old-price="110"
								data-id="526"
								data-category-id="18"
						>
							<div class="pic">
								<img
										src="/upload/resize_cache/iblock/edf/220_172_1/edfe94075e087e7d495e06ebf517ceea.jpg"
										alt="Сяке"
										title="Сяке"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>
							<div class="label" style="background-color: #000000">Любой текст</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/sushi/syake/">Сяке</a></div>
								<p>Лосось, вассаби, рис</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="old_price"><b><span>110</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>60</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">50 гр / 1 шт</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/edf/467_361_1/edfe94075e087e7d495e06ebf517ceea.jpg"
											alt="Сяке"
											title="Сяке"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="label" style="background-color: #000000">Любой текст</div>
								<div class="about">
									<div class="title">Сяке</div>
									<p>Лосось, вассаби, рис</p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="old_price"><b><span>110</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>60</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">50 гр / 1 шт</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>21</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_521"
								data-price="270"
								data-old-price=""
								data-id="521"
								data-category-id="22"
						>
							<div class="pic">
								<img
										src="/upload/resize_cache/iblock/d48/220_172_1/d482243a63072ce9883ef3ee53eadf2a.jpg"
										alt="Сои Заби"
										title="Сои Заби"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/korobochki/soi-zabi/">Сои Заби</a></div>
								<p>Говядина, ростки сои, болгарский перец, лук, кунжут, соевый соус</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="price"><span>270</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">450 гр</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/d48/467_361_1/d482243a63072ce9883ef3ee53eadf2a.jpg"
											alt="Сои Заби"
											title="Сои Заби"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="about">
									<div class="title">Сои Заби</div>
									<p>Говядина, ростки сои, болгарский перец, лук, кунжут, соевый соус</p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="price"><span>270</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">450 гр</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>10</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_547"
								data-price="170"
								data-old-price=""
								data-id="547"
								data-category-id="20"
						>
							<div class="pic">
								<img
										src="/upload/resize_cache/iblock/812/220_172_1/8129c6d859c5922b68d442a36c345e4f.jpg"
										alt="Салат с клубникой и козьим сыром"
										title="Салат с клубникой и козьим сыром"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/salaty/salat-s-klubnikoy-i-kozim-syrom/">Салат с клубникой и козьим сыром</a></div>
								<p>Листья салата, клубника, козий сыр, грецкий орех, оливковое масло</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="price"><span>170</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">120 гр</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/812/467_361_1/8129c6d859c5922b68d442a36c345e4f.jpg"
											alt="Салат с клубникой и козьим сыром"
											title="Салат с клубникой и козьим сыром"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="about">
									<div class="title">Салат с клубникой и козьим сыром</div>
									<p>Листья салата, клубника, козий сыр, грецкий орех, оливковое масло</p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="price"><span>170</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">120 гр</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>8</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_518"
								data-price="400"
								data-old-price="500"
								data-id="518"
								data-category-id="22"
						>
							<div class="pic">
								<img
										src="/upload/resize_cache/iblock/03b/220_172_1/03b829bd6c3e95f6794934a6d9e1e240.jpg"
										alt="Удон Хиаши"
										title="Удон Хиаши"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/korobochki/udon-khiashi/">Удон Хиаши</a></div>
								<p>Курица тереяки, удон, перец болгарский, броколли, кунжут, соус тереяки</p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="old_price"><b><span>500</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>400</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">300 гр</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/03b/467_361_1/03b829bd6c3e95f6794934a6d9e1e240.jpg"
											alt="Удон Хиаши"
											title="Удон Хиаши"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="about">
									<div class="title">Удон Хиаши</div>
									<p>Курица тереяки, удон, перец болгарский, броколли, кунжут, соус тереяки</p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="old_price"><b><span>500</span></b> <i class="rouble rouble_padding">i</i></span>                                <span class="price"><span>400</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">300 гр</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>6</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->
						<div
								class="tovar animate"
								id="bx_651765591_514"
								data-price="60"
								data-old-price=""
								data-id="514"
								data-category-id="25"
						>
							<div class="pic">
								<img
										src="/upload/resize_cache/iblock/2f6/220_172_1/2f66f5732a8c0b3ccdcd7af678ef6c26.jpg"
										alt="Соус «Горчичный»"
										title="Соус «Горчичный»"
										height="172"
								/>
								<div class="mask"></div>
								<div class="zoom"></div>
							</div>

							<div class="about">
								<div class="title"><a class="title" onclick="return false;" href="/menu/sousy/sous-gorchichnyy/">Соус «Горчичный»</a></div>
								<p></p>
							</div>
							<div class="down">
								<div class="tovar_info">
									<span class="price"><span>60</span> <i class="rouble rouble_padding">i</i></span>
									<span class="gramm">25 гр</span>                            </div>
								<div class="tovar_cost">
									<div class="colich_tov">
										<input type="button" value="-" class="minus_tov" />
										<input type="text" value="1" class="txt_col_tov" />
										<input type="button" value="+" class="plus_tov" />
									</div>
									<input type="button" class="addtocart" value="">
								</div>
							</div>
							<div class="tovar_zoom">
								<div class="pic">
									<img
											src="/upload/resize_cache/iblock/2f6/467_361_1/2f66f5732a8c0b3ccdcd7af678ef6c26.jpg"
											alt="Соус «Горчичный»"
											title="Соус «Горчичный»"
									/>
									<div class="mask"></div>
									<div class="zoom"></div>
								</div>
								<div class="about">
									<div class="title">Соус «Горчичный»</div>
									<p></p>
								</div>
								<div class="down">
									<div class="tovar_info">
										<span class="price"><span>60</span> <i class="rouble rouble_padding">i</i></span>
										<span class="gramm">25 гр</span>                            </div>
									<div class="tovar_cost">
										<div class="colich_tov">
											<input type="button" value="-" class="minus_tov" />
											<input type="text" value="1" class="txt_col_tov" />
											<input type="button" value="+" class="plus_tov" />
										</div>
										<input type="button" class="addtocart" value="">
										<div class="recomend">
											<p>Рекомендую</p>
											<a class="like  you_not_like_bitch" href="#"><span>6</span></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .tovar -->


					</div>
					<div class="clear"></div>
					<div class="poplavok">
						<div class="podarki_box podarki_close" style="display:block;">
							<span class="open"><i>Подарки</i></span>
							<div class="shkala">
								<div class="obertka"><div class="delenija"></div></div>
							</div>
						</div><!-- .podarki_close -->
						<div class="podarki_box podarki_open" style="display:none;">
							<span class="close"></span>
							<div class="bd">
								<div class="title">Получи подарок!</div>
								<p class="opis">При заказе на суммы выше 1000 <i class="rouble">i</i> <br>вы получаете возможность выбрать вкусный подарок</p>
								<div class="intr">
									<div class="shkala">
										<div class="obertka"><div class="delenija"></div></div>
									</div>

									<div class="pandochki" id="pandochki-cs">
										<!--'start_frame_cache_pandochki-cs'-->                                        <div class="free_panda hot">
											<div class="for_pod"> 3000 <i class="rouble">i</i></div>
											<a href="/menu/gifts/" class="zabr">Забрать</a>
										</div>
										<div class="free_panda mid">
											<div class="for_pod"> 2000 <i class="rouble">i</i></div>
											<a href="/menu/gifts/" class="zabr">Забрать</a>
										</div>
										<div class="free_panda lit">
											<div class="for_pod"> 1000 <i class="rouble">i</i></div>
											<a href="/menu/gifts/" class="zabr">Забрать</a>
										</div>
										<!--'end_frame_cache_pandochki-cs'-->                </div>
								</div>
							</div>
						</div><!-- .podarki_open -->
					</div>


				</div>
			</div>

		</div>
		<div class="wrap">
			<div id='tab-container'>
				<div class="os"></div>

				<div class="tab-content">
					<div class="tab">Оплата при получении</div>
					<div class="tabscontent">
						<div class="pic">
							<img
									src="/upload/iblock/f52/f52fdca13dfde13c26e2667cb644bc80.png"
									alt="Оплата при получении"
									title="Оплата при получении"
							/>
						</div>
						<div class="opis">
							Оплата посылки в почтовом отделении осуществляется наложенным платежом при получении, при этом к стоимости заказа добавляется почтовый сбор за наложенный платеж согласно тарифам Почты России, составляющий 2&#37; от стоимости заказа, но не менее 50 рублей.<br />
							При доставке курьером оплата осуществляется наличными курьеру.<br />
							В Пунктах Выдачи Заказов стоимость посылки оплачивается наличными сотруднику Пункта Выдачи Заказов при получении посылки. В некоторых Пунктах Выдачи Заказов оплата может быть произведена с помощью пластиковых карт.<br />
							При оплате посылки курьеру или в Пункте Выдачи Заказов дополнительные платежи на взимаются.                        	</div>
					</div>
				</div>
				<div class="tab-content">
					<div class="tab">Оплата кредитной картой</div>
					<div class="tabscontent">
						<div class="pic">
							<img
									src="/upload/iblock/57b/57b9d516d118e4f0264769215a200f85.png"
									alt="Оплата кредитной картой"
									title="Оплата кредитной картой"
							/>
						</div>
						<div class="opis">
							<p>Для оплаты товара кредитной картой на соответствующей странице сайта в процессе заказа необходимо выбрать пункт "Оплата картой". Обратите внимание, что при оплате кредитной картой Вы не можете использовать в счет оплаты заказа сумму, находящуюся на Вашем персональном счете в ОТТО. Для использования суммы со счета клиента в ОТТО, пожалуйста, выбирайте тип оплаты "при получении заказа". Кроме того, после сохранения заказа Вы не сможете добавить изменить товар в Вашем заказе. Возможна только отмена товара.</p>
							<div class="tit">Безопасность передаваемой информации</div>
							<p>Для защиты информации от несанкционированного доступа на этапе передачи от клиента на сервер системы ASSIST используется протокол SSL 3.0, сертификат сервера (128 bit) выдан компанией Thawte - признанным центром выдачи цифровых сертификатов.</p>
							<div class="tit">При аннулировании заказа</div>
							<p>При аннулировании позиций из оплаченного заказа (или при аннулировании заказа целиком)<br> Вы можете вернуть сумму на карту, позвонив в наш сервисный центр:  (000) 000-00-00.</p>                         	</div>
					</div>
				</div>
				<div class="tab-content">
					<div class="tab">Доставка</div>
					<div class="tabscontent">
						<div class="pic">
							<img
									src="/upload/iblock/333/3335a564d0d5fbc559668f8d0b3f1a22.png"
									alt="Доставка"
									title="Доставка"
							/>
						</div>
						<div class="opis">
							<div class="tit">Забрать самому:</div>
							<p>Самовывоз из офиса интернет-магазина<br>
								Минимальная сумма заказа отсутствует. Эта услуга бесплатна.&nbsp;<br>
								Cвой заказ можно получить в офисе интернет-магазина каждый день с с 9:00 до 21:00.<br>
								по адресу: Челюскинцев ул, дом 15 <a href="#">на карте</a></p>
							<div class="tit">Курьером:</div>
							<p>Доставка курьерской службой<br>
								Наш курьер доставит заказ по указанному адресу с 10:00 до 21:00. После предварительного звонка оператора курьер дополнительно свяжется для предупреждения о выезде по адресу доставки (ориентировочно за 1 час).<br> Стоимость доставки 200 руб. при сумме заказа менее 2000 руб. <br> При сумме заказа более 2000 руб. доставка осуществляется бесплатно.</p>
							<div class="tit">Срочная доставка</div>
							<p>Мы можем предложить доставку в день заказа или в любой последующий день с 10:00 до 21:00. Срочная доставка может быть осуществлена в любое удобное время в интервале 1 час, но не ранее, чем через 3 часа после оформления заказа. В случае опоздания курьера - доставка за наш счет!</p>                        	</div>
					</div>
				</div>
				<div class="tab-content">
					<div class="tab">Компания</div>
					<div class="tabscontent">
						<div class="pic">
							<img
									src="/upload/iblock/229/229a383d5cdd5aea082010169948e1b0.png"
									alt="Компания"
									title="Компания"
							/>
						</div>
						<div class="opis">
							МЫ — агентство интернет-маркетинга &quot;Больше денег&quot;, в приоритет ставим увеличение продаж, качество выполняемой работы и сервис. Создаем индивидуальные решения и отвечаем за результат. Выступаем квалифицированным заказчиком. Привлекаем различных специалистов для реализации задач проекта. МЫ — агентство интернет-маркетинга &quot;Больше денег&quot;, в приоритет ставим увеличение продаж, качество выполняемой работы и сервис. Создаем индивидуальные решения и отвечаем за результат. Выступаем квалифицированным заказчиком. Привлекаем различных специалистов для реализации задач проекта. МЫ — агентство интернет-маркетинга &quot;Больше денег&quot;, в приоритет ставим увеличение продаж, качество выполняемой работы и сервис. Создаем индивидуальные решения и отвечаем за результат. Выступаем квалифицированным заказчиком. Привлекаем различных специалистов для реализации задач проекта. МЫ — агентство интернет-маркетинга &quot;Больше денег&quot;, в приоритет ставим увеличение продаж, качество выполняемой работы и сервис. Создаем индивидуальные решения и отвечаем за результат. Выступаем квалифицированным заказчиком. Привлекаем различных специалистов для реализации задач проекта.                        	</div>
					</div>
				</div>




			</div>




		</div>



	</main><!-- .content -->
</div><!-- .wrapper -->
<footer class="footer">
	<div class="wrap">
		<div class="foot_name">Название компании (с) 2015</div>
		<div class="foot_right">
			<div class="bitrix_logo" id="bx-composite-banner"></div>
			<!-- Удаление копирайтов является нарушением лицензионного соглашения. -->
			<div class="developer"><span>BD</span> <a href="http://bdlab.pro" title="Разработка сайта - &laquo;Больше денег&raquo;">created by humans</a></div>
		</div>
		<ul class="social">

			<li><a id="bx_3485106786_643" href="http://vk.com/supbd" class="instagram" target="_blank"></a></li>

			<li><a id="bx_3485106786_642" href="http://vk.com/supbd" class="fb" target="_blank"></a></li>

			<li><a id="bx_3485106786_641" href="http://vk.com/supbd" class="vk" target="_blank"></a></li>

		</ul>
	</div>
</footer><!-- .footer -->

</body>
</html><?php }} ?>
