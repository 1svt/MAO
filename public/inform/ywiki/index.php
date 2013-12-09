<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Молодежная энциклопедия");
?> <?$APPLICATION->IncludeComponent("bitrix:wiki", ".default", array(
	"IBLOCK_TYPE" => "ywiki",
	"IBLOCK_ID" => "3",
	"ELEMENT_NAME" => $_REQUEST["title"],
	"PATH_TO_USER" => "",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/inform/ywiki/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"SHOW_RATING" => "",
	"RATING_TYPE" => "",
	"NAV_ITEM" => "",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "Y",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"USE_REVIEW" => "N",
	"SEF_URL_TEMPLATES" => array(
		"index" => "index.php",
		"post" => "#wiki_name#/",
		"post_edit" => "#wiki_name#/edit/",
		"categories" => "categories/",
		"discussion" => "#wiki_name#/discussion/",
		"history" => "#wiki_name#/history/",
		"history_diff" => "#wiki_name#/history/diff/",
		"search" => "search/",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>