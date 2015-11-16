<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
					</div>
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