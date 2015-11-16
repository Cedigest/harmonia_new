<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);
?>
<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
	<?$APPLICATION->ShowHead();?>
	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/colors.css");
	$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");
	$APPLICATION->SetAdditionalCSS("/bitrix/css/main/font-awesome.css");
	?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<?CUtil::InitJSCore( array('ajax' , 'popup' ));?>
</head>
<body class="bx-background-image bx-<?=$theme?>" <?=$APPLICATION->ShowProperty("backgroundImage")?>>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<?$APPLICATION->IncludeComponent("bitrix:eshop.banner", "", array());?>
<div class="bx-wrapper" id="bx_eshop_wrap">
	<header class="bx-header">
		<div class="row green_bg">
			<div class="green_line">
				<div class="green_line_ins col-md-12 col-sm-12 col-xs-12 col-lg-12">
					<div class="green_line_text">Центр специальной оценки условий труда</div>
				</div>
			</div>
		</div>
		<div class="bx-header-section container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="bx-logo">
						<a class="bx-logo-block hidden-xs" href="<?=SITE_DIR?>">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_logo.php"), false);?>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="bx-inc-orginfo">
						<div>
							<span class="bx-inc-orginfo-phone"> <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/telephone.php"), false);?></span>
						</div>
						<div class="social_block col-md-7 col-lg-7">
							<div class="fb col-md-3 col-lg-3"></div>
							<div class="od col-md-3 col-md-offset-1 col-lg-3"></div>
							<div class="vk col-md-3 col-md-offset-1 col-lg-3"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="bx-worktime">
						<div class="bx-worktime-prop">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/schedule.php"), false);?>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."/phones.php"), false);?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 hidden-xs">
					<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"horizontal",
							array(
									"ROOT_MENU_TYPE" => "top",
									"MENU_CACHE_TYPE" => "A",
									"MENU_CACHE_TIME" => "36000000",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_THEME" => "site",
									"CACHE_SELECTED_ITEMS" => "N",
									"MENU_CACHE_GET_VARS" => array(
									),
									"MAX_LEVEL" => "1",
									"CHILD_MENU_TYPE" => "left",
									"USE_EXT" => "Y",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N",
									"COMPONENT_TEMPLATE" => "horizontal"
							),
							false
					);?>
				</div>
			</div>
			<div id="bx_auth_popup_map" style="display:none;" class="bx_login_popup_form">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2241.2154428352846!2d37.494740166103476!3d55.82421974394881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54822d4d18479%3A0xfc6b68dbb9d9df20!2z0JvQtdC90LjQvdCz0YDQsNC00YHQutC-0LUg0YguLCAxNiwg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEyNTE3MQ!5e0!3m2!1sru!2sua!4v1447580878485" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div id="bx_auth_popup_callback" style="display:none;" class="bx_login_popup_form">
				callback
			</div>
		</div>
	</header>
	<div class="workarea">
		<div class="container bx-content-seection">
			<!--<h1 class="bx-title dbg_title"><?=$APPLICATION->ShowTitle(false);?></h1>-->
			<div class="row">
				<?if (!strpos($curPage,'personal')):?>
				<div class="left_catalog_menu col-md-3 col-lg-3">
					<span class="cat_title">Каталог товаров</span>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_menu", Array(
							"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "catalog_m",	// Тип меню для остальных уровней
							"COMPONENT_TEMPLATE" => "tree",
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "2",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "catalog_m",	// Тип меню для первого уровня
							"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					),
							false
					);?>
				</div>
				<?endif;?>
				<?$isCatalogPage = preg_match("~^".SITE_DIR."catalog/~", $curPage);?>
				<div class="bx-content <?if (!strpos($curPage,'personal')):?>col-md-9 col-lg-9<?else:?>col-md-12 col-lg-12 <?endif;?>">
					<div class="row">
						<div class="col-md-10 col-lg-10" id="navigation">
							<?$APPLICATION->IncludeComponent("own:breadcrumb", "", array(
									"START_FROM" => "0",
									"PATH" => "",
									"SITE_ID" => "-"
							),
									false,
									Array('HIDE_ICONS' => 'Y')
							);?>
						</div>
						<div class="cart_block col-md-2 col-lg-2">
							<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "new_cart", Array(
									"COMPONENT_TEMPLATE" => ".default",
									"PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
									"PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
									"PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
									"PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
									"POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
									"SHOW_AUTHOR" => "N",	// Добавить возможность авторизации
									"SHOW_EMPTY_VALUES" => "Y",	// Выводить нулевые значения в пустой корзине
									"SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
									"SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
									"SHOW_PRODUCTS" => "N",	// Показывать список товаров
									"SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
							),
									false
							);?>
						</div>
					</div>