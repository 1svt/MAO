<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопрос-ответ");
?> <?$APPLICATION->IncludeComponent("bitrix:form", ".default", array(
	"START_PAGE" => "new",
	"SHOW_LIST_PAGE" => "Y",
	"SHOW_EDIT_PAGE" => "Y",
	"SHOW_VIEW_PAGE" => "Y",
	"SUCCESS_URL" => "",
	"WEB_FORM_ID" => "1",
	"RESULT_ID" => $_REQUEST[RESULT_ID],
	"SHOW_ANSWER_VALUE" => "N",
	"SHOW_ADDITIONAL" => "N",
	"SHOW_STATUS" => "Y",
	"EDIT_ADDITIONAL" => "N",
	"EDIT_STATUS" => "Y",
	"NOT_SHOW_FILTER" => array(
		0 => "",
		1 => "",
	),
	"NOT_SHOW_TABLE" => array(
		0 => "",
		1 => "",
	),
	"IGNORE_CUSTOM_TEMPLATE" => "N",
	"USE_EXTENDED_ERRORS" => "N",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/ministry/qa/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CHAIN_ITEM_TEXT" => "",
	"CHAIN_ITEM_LINK" => "",
	"AJAX_OPTION_ADDITIONAL" => "",
	"VARIABLE_ALIASES" => array(
		"action" => "action",
	)
	),
	false
);?>
<br />
 
<br />
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>