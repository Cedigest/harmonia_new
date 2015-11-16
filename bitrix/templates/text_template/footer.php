<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</div>
<?if ($curPage == "/news/index.php" || $curPage == "/topics/index.php"):?>

	<div class="topic_section col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
	<?if ($curPage == "/news/index.php"):?>
		<span class="l_title">Статьи</span>
		<?$APPLICATION->IncludeComponent(
	"own:news.block", 
	"table", 
	array(
		"COMPONENT_TEMPLATE" => "table",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "7",
		"NEWS_COUNT" => "5",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arTech",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);?>
	<?elseif ($curPage == "/topics/index.php"):?>
		<span class="l_title">Новости</span>
		<?$APPLICATION->IncludeComponent(
				"own:news.block",
				"table",
				array(
						"COMPONENT_TEMPLATE" => "table",
						"IBLOCK_TYPE" => "news",
						"IBLOCK_ID" => $_REQUEST["ID"],
						"NEWS_COUNT" => "5",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_ORDER1" => "DESC",
						"SORT_BY2" => "SORT",
						"SORT_ORDER2" => "ASC",
						"FILTER_NAME" => "arTech",
						"FIELD_CODE" => array(
								0 => "",
								1 => "",
						),
						"PROPERTY_CODE" => array(
								0 => "",
								1 => "",
						),
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "36000000",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"PREVIEW_TRUNCATE_LEN" => "",
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"SET_TITLE" => "N",
						"SET_BROWSER_TITLE" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_LAST_MODIFIED" => "N",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"ADD_SECTIONS_CHAIN" => "N",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"INCLUDE_SUBSECTIONS" => "Y",
						"DISPLAY_DATE" => "N",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "N",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"PAGER_TEMPLATE" => ".default",
						"DISPLAY_TOP_PAGER" => "N",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"PAGER_TITLE" => "Новости",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"SET_STATUS_404" => "N",
						"SHOW_404" => "N",
						"MESSAGE_404" => "",
						"TEMPLATE_THEME" => "blue",
						"MEDIA_PROPERTY" => "",
						"SLIDER_PROPERTY" => "",
						"SEARCH_PAGE" => "/search/",
						"USE_RATING" => "N",
						"USE_SHARE" => "N"
				),
				false
		);?>
	<?endif;?>
	</div><?endif;?>
				</div><!--//row-->
			</div><!--//container bx-content-seection-->
		</div>
		</div><!--//workarea-->
<div class="row">
<div class="footer_bottom_line">
	<div class="footer_bottom_line_container">
		<?$APPLICATION->IncludeComponent(
	"own:subscribe.form", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"USE_PERSONALIZATION" => "N",
		"SHOW_HIDDEN" => "N",
		"PAGE" => "#SITE_DIR#personal/subscribe/subscr_edit.php",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	),
	false
);?>
	</div>
</div>
<div class="underfooter_line">
	<div class="underfooter_line_container">
		<div class="about_section col-md-3 col-lg-3 col-sm-6">
			<span class="bottom_title">О компании</span>
			<?$APPLICATION->IncludeComponent("bitrix:menu", "new_bottom_nemu", Array(
				"COMPONENT_TEMPLATE" => "bottom_menu",
					"ROOT_MENU_TYPE" => "about",	// Тип меню для первого уровня
					"MENU_CACHE_TYPE" => "N",	// Тип кеширования
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
					"MAX_LEVEL" => "1",	// Уровень вложенности меню
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
				),
				false
			);?>
		</div>
		<div class="services_section col-md-3 col-lg-3 col-sm-6">
			<span class="bottom_title">Услуги</span>
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"new_bottom_nemu", 
	array(
		"COMPONENT_TEMPLATE" => "new_bottom_nemu",
		"ROOT_MENU_TYPE" => "services",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
		</div>
		<div class="topics_section col-md-3 col-lg-3 col-sm-6">
			<span class="bottom_title">Статьи</span>
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"new_bottom_nemu",
				array(
					"COMPONENT_TEMPLATE" => "new_bottom_nemu",
					"ROOT_MENU_TYPE" => "topics",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "N",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N"
				),
				false
			);?>
		</div>
		<div class="contacs_section col-md-3 col-lg-3 col-sm-6">
			<span class="bottom_title">Контакты</span>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				array(
					"COMPONENT_TEMPLATE" => ".default",
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => "/contacts_section.php"
				),
				false
			);?>
		</div>
	</div>
</div>
</div>
<div class="copyright_block">
	<div class="copyright_block_container">
		<div class="copyright col-md-3 col-lg-3">© АНО УСЦ «Гармония». 2015</div>
		<div class="col-md-7 col-lg-7"></div>
		<div class="social_block col-md-2 col-lg-2">
				<div class="fb col-md-3 col-lg-3"></div>
				<div class="od col-md-3 col-md-offset-1 col-lg-3"></div>
				<div class="vk col-md-3 col-md-offset-1 col-lg-3"></div>
		</div>
	</div>
</div>
		<div class="col-xs-12 hidden-lg hidden-md hidden-sm">
			<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "", array(
					"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
					"PATH_TO_PERSONAL" => SITE_DIR."personal/",
					"SHOW_PERSONAL_LINK" => "N",
					"SHOW_NUM_PRODUCTS" => "Y",
					"SHOW_TOTAL_PRICE" => "Y",
					"SHOW_PRODUCTS" => "N",
					"POSITION_FIXED" =>"Y",
					"POSITION_HORIZONTAL" => "center",
					"POSITION_VERTICAL" => "bottom",
					"SHOW_AUTHOR" => "Y",
					"PATH_TO_REGISTER" => SITE_DIR."login/",
					"PATH_TO_PROFILE" => SITE_DIR."personal/"
				),
				false,
				array()
			);?>
		</div>
	</div> <!-- //bx-wrapper -->
<script type="text/javascript">
	function openMap()
	{
		var authPopup = BX.PopupWindowManager.create("openMap", null, {
			autoHide: true,
			//	zIndex: 0,
			offsetLeft: 0,
			offsetTop: 0,
			overlay : true,
			draggable: {restrict:true},
			closeByEsc: true,
			closeIcon: { right : "12px", top : "10px"},
			content: '<div style="width:600px;height:450px; text-align: center;"><span style="position:absolute;left:50%; top:50%"></span></div>',
			events: {
				onAfterPopupShow: function()
				{
					this.setContent(BX("bx_auth_popup_map"));
				}
			}
		});

		authPopup.show();
	}
	function openCallback()
	{
		var authPopup = BX.PopupWindowManager.create("CallbackPopup", null, {
			autoHide: true,
			//	zIndex: 0,
			offsetLeft: 0,
			offsetTop: 0,
			overlay : true,
			draggable: {restrict:true},
			closeByEsc: true,
			closeIcon: { right : "12px", top : "10px"},
			content: '<div style="width:40px;height:20px; text-align: center;"><span style="position:absolute;left:50%; top:50%"></span></div>',
			events: {
				onAfterPopupShow: function()
				{
					this.setContent(BX("bx_auth_popup_callback"));
				}
			}
		});

		authPopup.show();
	}
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.spoiler_links').click(function(){
			$(this).parent().children('div.spoiler_body').toggle('normal');
			return false;
		});
	});
</script>
<script>
	BX.ready(function(){
		var upButton = document.querySelector('[data-role="eshopUpButton"]');
		BX.bind(upButton, "click", function(){
			var windowScroll = BX.GetWindowScrollPos();
			(new BX.easing({
				duration : 500,
				start : { scroll : windowScroll.scrollTop },
				finish : { scroll : 0 },
				transition : BX.easing.makeEaseOut(BX.easing.transitions.quart),
				step : function(state){
					window.scrollTo(0, state.scroll);
				},
				complete: function() {
				}
			})).animate();
		})
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").mouseover(function() {
			$(this).find(".zoom-ico").fadeIn(300);
		});
		$(".fancybox").mouseout(function() {
			$( ".zoom-ico" ).hide();
		});
	});
</script>
</body>
</html>