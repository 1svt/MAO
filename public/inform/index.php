<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Информация");
?> <?$APPLICATION->IncludeComponent("bitrix:blog", ".default", array(
	"MESSAGE_COUNT" => "25",
	"PERIOD_DAYS" => "30",
	"MESSAGE_COUNT_MAIN" => "6",
	"BLOG_COUNT_MAIN" => "6",
	"MESSAGE_LENGTH" => "100",
	"BLOG_COUNT" => "20",
	"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
	"NAV_TEMPLATE" => "",
	"SMILES_COUNT" => "4",
	"IMAGE_MAX_WIDTH" => "800",
	"IMAGE_MAX_HEIGHT" => "800",
	"EDITOR_RESIZABLE" => "Y",
	"EDITOR_DEFAULT_HEIGHT" => "300",
	"EDITOR_CODE_DEFAULT" => "N",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/inform/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_TIME_LONG" => "604800",
	"PATH_TO_SMILE" => "/bitrix/images/blog/smile/",
	"SET_TITLE" => "Y",
	"SET_NAV_CHAIN" => "Y",
	"USER_PROPERTY" => array(
	),
	"BLOG_PROPERTY" => array(
	),
	"BLOG_PROPERTY_LIST" => array(
	),
	"POST_PROPERTY" => array(
	),
	"POST_PROPERTY_LIST" => array(
	),
	"COMMENT_PROPERTY" => array(
	),
	"USE_ASC_PAGING" => "N",
	"SHOW_RATING" => "",
	"RATING_TYPE" => "",
	"ALLOW_POST_CODE" => "Y",
	"USE_GOOGLE_CODE" => "Y",
	"COMMENTS_COUNT" => "25",
	"NOT_USE_COMMENT_TITLE" => "N",
	"AJAX_POST" => "N",
	"COMMENT_EDITOR_RESIZABLE" => "Y",
	"COMMENT_EDITOR_DEFAULT_HEIGHT" => "200",
	"COMMENT_EDITOR_CODE_DEFAULT" => "N",
	"COMMENT_ALLOW_VIDEO" => "Y",
	"COMMENT_ALLOW_IMAGE_UPLOAD" => "A",
	"SHOW_SPAM" => "N",
	"NO_URL_IN_COMMENTS" => "",
	"NO_URL_IN_COMMENTS_AUTHORITY" => "",
	"THEME" => "blue",
	"GROUP_ID" => array(
		0 => "2",
		1 => "",
	),
	"SHOW_NAVIGATION" => "Y",
	"USER_PROPERTY_NAME" => "",
	"PERIOD_NEW_TAGS" => "",
	"PERIOD" => "",
	"COLOR_TYPE" => "Y",
	"WIDTH" => "100%",
	"SEO_USER" => "N",
	"NAME_TEMPLATE" => "#NOBR##LAST_NAME# #NAME##/NOBR#",
	"SHOW_LOGIN" => "Y",
	"USE_SHARE" => "N",
	"PATH_TO_SONET_USER_PROFILE" => "/club/user/#user_id#/",
	"PATH_TO_MESSAGES_CHAT" => "/club/messages/chat/#user_id#/",
	"ALLOW_POST_MOVE" => "N",
	"VARIABLE_ALIASES" => array(
		"blog" => "blog",
		"post_id" => "post_id",
		"user_id" => "user_id",
		"page" => "page",
		"group_id" => "group_id",
	)
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>