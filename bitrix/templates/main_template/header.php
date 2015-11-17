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
							"MENU_THEME" => "black",
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
			<?if ($curPage != SITE_DIR."index.php"):?>
			<div class="row">
				<div class="col-lg-12" id="navigation">
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
							"START_FROM" => "0",
							"PATH" => "",
							"SITE_ID" => "-"
						),
						false,
						Array('HIDE_ICONS' => 'Y')
					);?>
				</div>
			</div>
			<h1 class="bx-title dbg_title"><?=$APPLICATION->ShowTitle(false);?></h1>
			<?endif?>
		</div>
	</header>
	<div class="banner_block">
		<?$APPLICATION->IncludeComponent(
				"own:owlslider",
				"",
				Array(
						"AUTO_HEIGHT" => "Y",
						"AUTO_PLAY" => "Y",
						"AUTO_PLAY_SPEED" => "5000",
						"CACHE_TIME" => "3600",
						"CACHE_TYPE" => "A",
						"COMPONENT_TEMPLATE" => ".default",
						"COMPOSITE" => "Y",
						"COUNT" => "3",
						"DISABLE_LINK_DEV" => "N",
						"DRAG_BEFORE_ANIM_FINISH" => "Y",
						"ENABLE_JQUERY" => "N",
						"ENABLE_OWL_CSS_AND_JS" => "Y",
						"HEIGHT_RESIZE" => "500",
						"IBLOCK_ID" => "8",
						"IBLOCK_TYPE" => "banner",
						"IMAGE_CENTER" => "Y",
						"INCLUDE_SUBSECTIONS" => "Y",
						"IS_PROPORTIONAL" => "Y",
						"ITEMS_SCALE_UP" => "N",
						"LINK_URL_PROPERTY_ID" => "0",
						"MAIN_TYPE" => "iblock",
						"MOUSE_DRAG" => "Y",
						"NAVIGATION" => "Y",
						"NAVIGATION_TYPE" => "arrows",
						"PAGINATION" => "Y",
						"PAGINATION_NUMBERS" => "N",
						"PAGINATION_SPEED" => "800",
						"RANDOM" => "N",
						"RANDOM_TRANSITION" => "N",
						"RESPONSIVE" => "Y",
						"REWIND_SPEED" => "1000",
						"SCROLL_COUNT" => "1",
						"SECTION_ID" => "0",
						"SHOW_DESCRIPTION_BLOCK" => "N",
						"SLIDE_SPEED" => "200",
						"SORT_DIR_1" => "asc",
						"SORT_DIR_2" => "asc",
						"SORT_FIELD_1" => "id",
						"SORT_FIELD_2" => "",
						"SPECIAL_CODE" => "unic",
						"STOP_ON_HOVER" => "Y",
						"TEXT_PROPERTY_ID" => "0",
						"TOUCH_DRAG" => "Y",
						"TRANSITION_TYPE_FOR_ONE_ITEM" => "default",
						"WIDTH_RESIZE" => ""
				)
		);?>
	</div>
	<div class="workarea">
		<div class="container bx-content-seection">
			<div class="row">
			<?$isCatalogPage = preg_match("~^".SITE_DIR."catalog/~", $curPage);?>
				<div class="bx-content <?=($isCatalogPage ? "col-xs-12" : "col-md-12 col-sm-12")?>">