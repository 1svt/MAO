<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Группы");
?> <?$APPLICATION->IncludeComponent("bitrix:socialnetwork_group", ".default", array(
	"ITEM_DETAIL_COUNT" => "32",
	"ITEM_MAIN_COUNT" => "6",
	"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
	"NAME_TEMPLATE" => "",
	"SHOW_LOGIN" => "Y",
	"CAN_OWNER_EDIT_DESKTOP" => "Y",
	"GROUP_USE_KEYWORDS" => "Y",
	"GROUP_THUMBNAIL_SIZE" => "",
	"LOG_THUMBNAIL_SIZE" => "",
	"LOG_COMMENT_THUMBNAIL_SIZE" => "",
	"LOG_NEW_TEMPLATE" => "N",
	"SM_THEME" => "grey",
	"USE_MAIN_MENU" => "N",
	"SHOW_RATING" => "",
	"RATING_ID" => array(
	),
	"RATING_TYPE" => "",
	"PATH_TO_USER" => "",
	"PATH_TO_SUBSCRIBE" => "",
	"PATH_TO_GROUP_CREATE" => "",
	"PATH_TO_SEARCH_EXTERNAL" => "",
	"PATH_TO_MESSAGES_CHAT" => "/company/personal/messages/chat/#user_id#/",
	"PATH_TO_USER_CALENDAR" => "/company/personal/user/#user_id#/calendar/",
	"PATH_TO_MESSAGE_FORM_MESS" => "/company/personal/messages/form/#user_id#/#message_id#/",
	"PATH_TO_USER_LOG" => "/company/personal/log/",
	"PATH_TO_USER_TASKS_TEMPLATES" => "user/#user_id#/tasks/templates/",
	"PATH_TO_USER_TEMPLATES_TEMPLATE" => "user/#user_id#/tasks/templates/template/#action#/#template_id#/",
	"PATH_TO_BIZPROC_TASK_LIST" => "/company/personal/user/#user_id#/bizproc/",
	"PATH_TO_BIZPROC_TASK" => "/company/personal/user/#user_id#/bizproc/#id#/",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/social/groups/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_TIME_LONG" => "604800",
	"PATH_TO_SMILE" => "/bitrix/images/socialnetwork/smile/",
	"PATH_TO_BLOG_SMILE" => "/bitrix/images/blog/smile/",
	"PATH_TO_FORUM_SMILE" => "/bitrix/images/forum/smile/",
	"SONET_PATH_TO_FORUM_ICON" => "/bitrix/images/forum/icon/",
	"SET_TITLE" => "Y",
	"SET_NAV_CHAIN" => "Y",
	"LOG_SUBSCRIBE_ONLY" => "N",
	"LOG_RSS_TTL" => "60",
	"SHOW_YEAR" => "Y",
	"USER_PROPERTY_MAIN" => array(
	),
	"USER_PROPERTY_CONTACT" => array(
	),
	"USER_PROPERTY_PERSONAL" => array(
	),
	"GROUP_PROPERTY" => array(
	),
	"GROUP_USE_BAN" => "Y",
	"BLOG_GROUP_ID" => "1",
	"ALLOW_POST_MOVE" => "N",
	"PATH_TO_USER_BLOG_POST" => "",
	"PATH_TO_USER_BLOG_POST_EDIT" => "",
	"BLOG_IMAGE_MAX_WIDTH" => "800",
	"BLOG_IMAGE_MAX_HEIGHT" => "800",
	"BLOG_COMMENT_AJAX_POST" => "N",
	"BLOG_COMMENT_ALLOW_VIDEO" => "N",
	"BLOG_COMMENT_ALLOW_IMAGE_UPLOAD" => "A",
	"BLOG_SHOW_SPAM" => "N",
	"BLOG_NO_URL_IN_COMMENTS" => "",
	"BLOG_NO_URL_IN_COMMENTS_AUTHORITY" => "",
	"BLOG_ALLOW_POST_CODE" => "Y",
	"BLOG_USE_GOOGLE_CODE" => "Y",
	"BLOG_USE_CUT" => "N",
	"FORUM_ID" => "2",
	"FORUM_THEME" => "blue",
	"SHOW_VOTE" => "N",
	"FORUM_AJAX_POST" => "N",
	"PHOTO_GROUP_IBLOCK_TYPE" => "news",
	"PHOTO_GROUP_IBLOCK_ID" => "2",
	"PHOTO_MODERATION" => "N",
	"PHOTO_SECTION_PAGE_ELEMENTS" => "15",
	"PHOTO_ELEMENTS_PAGE_ELEMENTS" => "50",
	"PHOTO_ALBUM_PHOTO_THUMBS_SIZE" => "120",
	"PHOTO_THUMBNAIL_SIZE" => "100",
	"PHOTO_ORIGINAL_SIZE" => "1280",
	"PHOTO_UPLOADER_TYPE" => "applet",
	"PHOTO_WATERMARK_MIN_PICTURE_SIZE" => "400",
	"PHOTO_PATH_TO_FONT" => "",
	"PHOTO_SHOW_WATERMARK" => "Y",
	"PHOTO_WATERMARK_RULES" => "USER",
	"PHOTO_UPLOAD_MAX_FILESIZE" => "10",
	"PHOTO_USE_RATING" => "N",
	"PHOTO_USE_COMMENTS" => "N",
	"LOG_PHOTO_COUNT" => "6",
	"LOG_PHOTO_THUMBNAIL_SIZE" => "48",
	"SEARCH_DEFAULT_SORT" => "rank",
	"SEARCH_PAGE_RESULT_COUNT" => "10",
	"SEARCH_TAGS_PAGE_ELEMENTS" => "100",
	"SEARCH_TAGS_PERIOD" => "",
	"SEARCH_TAGS_FONT_MAX" => "50",
	"SEARCH_TAGS_FONT_MIN" => "10",
	"SEARCH_TAGS_COLOR_NEW" => "3E74E6",
	"SEARCH_TAGS_COLOR_OLD" => "C0C0C0",
	"SEARCH_FILTER_NAME" => "sonet_search_filter",
	"SEARCH_FILTER_DATE_NAME" => "sonet_search_filter_date",
	"PHOTO_APPLET_LAYOUT" => "extended",
	"VARIABLE_ALIASES" => array(
		"user_id" => "user_id",
		"page" => "page",
		"group_id" => "group_id",
		"message_id" => "message_id",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>