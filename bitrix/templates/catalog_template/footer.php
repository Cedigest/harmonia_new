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
		<div class="about_section col-md-3 col-lg-3 col-sm-3 col-xs-12">
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
		<div class="services_section col-md-3 col-lg-3 col-sm-3 col-xs-12">
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
		<div class="topics_section col-md-3 col-lg-3 col-sm-3 col-xs-12">
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
		<div class="contacs_section col-md-3 col-lg-3 col-sm-3 col-xs-12">
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
<div id="bx_auth_popup_map" style="display:none;" class="bx_login_popup_form">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2241.2154428352846!2d37.494740166103476!3d55.82421974394881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54822d4d18479%3A0xfc6b68dbb9d9df20!2z0JvQtdC90LjQvdCz0YDQsNC00YHQutC-0LUg0YguLCAxNiwg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEyNTE3MQ!5e0!3m2!1sru!2sua!4v1447580878485" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div id="bx_auth_popup_callback" style="display:none;" class="bx_login_popup_form">
	<?$APPLICATION->IncludeComponent(
			"own:ext.feedback.form",
			".default",
			array(
					"COMPONENT_TEMPLATE" => ".default",
					"SEND_MESSAGE" => "N",
					"USER_SEND_MESSAGE" => "N",
					"USER_EMAIL_FROM_PROP" => "",
					"USER_EVENT_MESSAGE_ID" => "",
					"IBLOCK_TYPE" => "feedback",
					"IBLOCK_ID" => "9",
					"IBLOCK_ELEMENT_ID" => "",
					"SAVE_TO_IB" => "Y",
					"COMPONENT_ID" => "2",
					"FORM_CODE" => "",
					"USER_MESSAGE_ADD" => "Спасибо за оформление заявки, мы свяжемся с Вами в ближайшее время.",
					"RESIZE_IMAGES" => "N",
					"DEFAULT_INPUT_SIZE" => "30",
					"MAX_FILE_SIZE" => "0",
					"INPUT_AS_PASSWORD" => "",
					"INPUT_AS_PASSWORD_CONFIRM" => "N",
					"USE_CAPTCHA" => "N",
					"USE_CAPTCHA_REFRESH" => "Y",
					"PROPERTY_CODES" => array(
							0 => "NAME",
							1 => "PROP_PHONE",
							2 => "PROP_MESSAGE",
					),
					"PROPERTY_CODES_REQUIRED" => array(
							0 => "NAME",
							1 => "PROP_PHONE",
							2 => "PROP_MESSAGE",
					),
					"GROUPS" => array(
							0 => "2",
					),
					"ELEMENT_ASSOC" => "CREATED_BY",
					"MAX_LEVELS" => "100000",
					"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
					"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
					"USE_TEXT_FOR_HTML" => array(
					),
					"AJAX_MODE" => "Y",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"FIELD_SELF_NAMES" => "Y",
					"FIELD_ORDER" => "Y",
					"ORDER_NAME" => "100",
					"ORDER_TAGS" => "500",
					"ORDER_DATE_ACTIVE_FROM" => "500",
					"ORDER_DATE_ACTIVE_TO" => "500",
					"ORDER_IBLOCK_SECTION" => "500",
					"ORDER_PREVIEW_TEXT" => "500",
					"ORDER_PREVIEW_PICTURE" => "500",
					"ORDER_DETAIL_TEXT" => "500",
					"ORDER_DETAIL_PICTURE" => "500",
					"ORDER_PROP_PHONE" => "200",
					"ORDER_PROP_NAME" => "500",
					"ORDER_PROP_MESSAGE" => "400",
					"FIELD_VALID" => "N",
					"FIELD_ERRMSG" => "N",
					"FIELD_PREDEF" => "Y",
					"NEED_JQUERY" => "ORION_JQUERY",
					"FORM_NAME" => "Обратный звонок",
					"EFBF_FORM_WIDTH" => "400",
					"DATA-TABLE-WIDTH" => "100%",
					"DATA-TABLE-COL1-WIDTH" => "40%",
					"DATA-TABLE-COL2-WIDTH" => "60%",
					"DATA-TABLE-LABEL-ALIGN-H" => "c-align",
					"DATA-TABLE-LABEL-ALIGN-V" => "c-valign",
					"FIELD_ERROR_POSITION" => "Y",
					"ERROR_MESSAGES_POSITION" => "UNDER",
					"PREDEFINED_NAME" => "Ваше имя",
					"PREDEFINED_TAGS" => "",
					"PREDEFINED_DATE_ACTIVE_FROM" => "",
					"PREDEFINED_DATE_ACTIVE_TO" => "",
					"PREDEFINED_IBLOCK_SECTION" => "",
					"PREDEFINED_PREVIEW_TEXT" => "",
					"PREDEFINED_PREVIEW_PICTURE" => "",
					"PREDEFINED_DETAIL_TEXT" => "",
					"PREDEFINED_DETAIL_PICTURE" => "",
					"PREDEFINED_PROP_PHONE" => "Ваш номер телефона",
					"PREDEFINED_PROP_NAME" => "",
					"PREDEFINED_PROP_MESSAGE" => "Сообщение",
					"CUSTOM_TITLE_NAME" => "Ваше имя",
					"CUSTOM_TITLE_TAGS" => "",
					"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
					"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
					"CUSTOM_TITLE_IBLOCK_SECTION" => "",
					"CUSTOM_TITLE_PREVIEW_TEXT" => "",
					"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
					"CUSTOM_TITLE_DETAIL_TEXT" => "",
					"CUSTOM_TITLE_DETAIL_PICTURE" => "",
					"CUSTOM_TITLE_PROP_PHONE" => "",
					"CUSTOM_TITLE_PROP_NAME" => "",
					"CUSTOM_TITLE_PROP_MESSAGE" => "",
					"CUSTOM_TITLE_CAPTCHA" => "",
					"CUSTOM_TITLE_CAPTCHA_INPUT" => "",
					"LIST_NOT_ESTABLISHED_PROP_SERVICE" => "Y",
					"CUSTOM_TITLE_PROP_EMAIL" => "",
					"CUSTOM_TITLE_PROP_SERVICE" => "",
					"ORDER_PROP_EMAIL" => "200",
					"ORDER_PROP_SERVICE" => "300",
					"PREDEFINED_PROP_EMAIL" => "Ваш e-mail",
					"PREDEFINED_PROP_SERVICE" => "17"
			),
			false
	);?>
</div>
<div id="bx_auth_popup_services" style="display:none;" class="bx_login_popup_form">
	<?$APPLICATION->IncludeComponent(
			"own:ext.feedback.form",
			".default",
			array(
					"COMPONENT_TEMPLATE" => ".default",
					"SEND_MESSAGE" => "N",
					"USER_SEND_MESSAGE" => "N",
					"USER_EMAIL_FROM_PROP" => "",
					"USER_EVENT_MESSAGE_ID" => "",
					"IBLOCK_TYPE" => "feedback",
					"IBLOCK_ID" => "10",
					"IBLOCK_ELEMENT_ID" => "",
					"SAVE_TO_IB" => "Y",
					"COMPONENT_ID" => "2",
					"FORM_CODE" => "",
					"USER_MESSAGE_ADD" => "Спасибо за оформление заявки, мы свяжемся с Вами в ближайшее время.",
					"RESIZE_IMAGES" => "N",
					"DEFAULT_INPUT_SIZE" => "30",
					"MAX_FILE_SIZE" => "0",
					"INPUT_AS_PASSWORD" => "",
					"INPUT_AS_PASSWORD_CONFIRM" => "N",
					"USE_CAPTCHA" => "N",
					"USE_CAPTCHA_REFRESH" => "Y",
					"PROPERTY_CODES" => array(
							0 => "NAME",
							1 => "PROP_EMAIL",
							2 => "PROP_SERVICE",
							3 => "PROP_MESSAGE",
					),
					"PROPERTY_CODES_REQUIRED" => array(
							0 => "NAME",
							1 => "PROP_EMAIL",
							2 => "PROP_SERVICE",
							3 => "PROP_MESSAGE",
					),
					"GROUPS" => array(
							0 => "2",
					),
					"ELEMENT_ASSOC" => "CREATED_BY",
					"MAX_LEVELS" => "100000",
					"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
					"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
					"USE_TEXT_FOR_HTML" => array(
					),
					"AJAX_MODE" => "Y",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"FIELD_SELF_NAMES" => "Y",
					"FIELD_ORDER" => "Y",
					"ORDER_NAME" => "100",
					"ORDER_TAGS" => "500",
					"ORDER_DATE_ACTIVE_FROM" => "500",
					"ORDER_DATE_ACTIVE_TO" => "500",
					"ORDER_IBLOCK_SECTION" => "500",
					"ORDER_PREVIEW_TEXT" => "500",
					"ORDER_PREVIEW_PICTURE" => "500",
					"ORDER_DETAIL_TEXT" => "500",
					"ORDER_DETAIL_PICTURE" => "500",
					"ORDER_PROP_PHONE" => "200",
					"ORDER_PROP_NAME" => "500",
					"ORDER_PROP_MESSAGE" => "400",
					"FIELD_VALID" => "Y",
					"FIELD_ERRMSG" => "N",
					"FIELD_PREDEF" => "Y",
					"NEED_JQUERY" => "ORION_JQUERY",
					"FORM_NAME" => "Заказать услугу",
					"EFBF_FORM_WIDTH" => "400",
					"DATA-TABLE-WIDTH" => "100%",
					"DATA-TABLE-COL1-WIDTH" => "40%",
					"DATA-TABLE-COL2-WIDTH" => "60%",
					"DATA-TABLE-LABEL-ALIGN-H" => "c-align",
					"DATA-TABLE-LABEL-ALIGN-V" => "c-valign",
					"FIELD_ERROR_POSITION" => "Y",
					"ERROR_MESSAGES_POSITION" => "UNDER",
					"PREDEFINED_NAME" => "Ваше имя",
					"PREDEFINED_TAGS" => "",
					"PREDEFINED_DATE_ACTIVE_FROM" => "",
					"PREDEFINED_DATE_ACTIVE_TO" => "",
					"PREDEFINED_IBLOCK_SECTION" => "",
					"PREDEFINED_PREVIEW_TEXT" => "",
					"PREDEFINED_PREVIEW_PICTURE" => "",
					"PREDEFINED_DETAIL_TEXT" => "",
					"PREDEFINED_DETAIL_PICTURE" => "",
					"PREDEFINED_PROP_PHONE" => "Ваш номер телефона",
					"PREDEFINED_PROP_NAME" => "",
					"PREDEFINED_PROP_MESSAGE" => "Сообщение",
					"CUSTOM_TITLE_NAME" => "Ваше имя",
					"CUSTOM_TITLE_TAGS" => "",
					"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
					"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
					"CUSTOM_TITLE_IBLOCK_SECTION" => "",
					"CUSTOM_TITLE_PREVIEW_TEXT" => "",
					"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
					"CUSTOM_TITLE_DETAIL_TEXT" => "",
					"CUSTOM_TITLE_DETAIL_PICTURE" => "",
					"CUSTOM_TITLE_PROP_PHONE" => "",
					"CUSTOM_TITLE_PROP_NAME" => "",
					"CUSTOM_TITLE_PROP_MESSAGE" => "",
					"CUSTOM_TITLE_CAPTCHA" => "",
					"CUSTOM_TITLE_CAPTCHA_INPUT" => "",
					"LIST_NOT_ESTABLISHED_PROP_SERVICE" => "Y",
					"CUSTOM_TITLE_PROP_EMAIL" => "",
					"CUSTOM_TITLE_PROP_SERVICE" => "",
					"ORDER_PROP_EMAIL" => "200",
					"ORDER_PROP_SERVICE" => "300",
					"PREDEFINED_PROP_EMAIL" => "Ваш e-mail",
					"PREDEFINED_PROP_SERVICE" => "17",
					"VALID_NAME" => "",
					"VALID_TAGS" => "",
					"VALID_DATE_ACTIVE_FROM" => "",
					"VALID_DATE_ACTIVE_TO" => "",
					"VALID_IBLOCK_SECTION" => "",
					"VALID_PREVIEW_TEXT" => "",
					"VALID_PREVIEW_PICTURE" => "",
					"VALID_DETAIL_TEXT" => "",
					"VALID_DETAIL_PICTURE" => "",
					"VALID_PROP_EMAIL" => "^[0-9a-zA-Z_\\.-]+@[0-9a-zA-Z\\.-]+\$",
					"VALID_PROP_MESSAGE" => ""
			),
			false
	);?>
</div>

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
			content: '<div style="width:250px;height:200px; text-align: center;"><span style="position:absolute;left:50%; top:50%"></span></div>',
			events: {
				onAfterPopupShow: function()
				{
					this.setContent(BX("bx_auth_popup_callback"));
				}
			}
		});

		authPopup.show();
	}
	function openService()
	{
		var authPopup = BX.PopupWindowManager.create("openService", null, {
			autoHide: true,
			//	zIndex: 0,
			offsetLeft: 0,
			offsetTop: 0,
			overlay : true,
			draggable: {restrict:true},
			closeByEsc: true,
			closeIcon: { right : "12px", top : "10px"},
			content: '<div style="width:250px;height:200px; text-align: center;"><span style="position:absolute;left:50%; top:50%"></span></div>',
			events: {
				onAfterPopupShow: function()
				{
					this.setContent(BX("bx_auth_popup_services"));
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