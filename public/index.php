<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Записи");
?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "carousel", array(
	"IBLOCK_TYPE" => "news",
	"IBLOCK_ID" => "8",
	"NEWS_COUNT" => "3",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FILTER_NAME" => "",
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
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"INCLUDE_SUBSECTIONS" => "N",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Новости",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"DISPLAY_DATE" => "N",
	"DISPLAY_NAME" => "Y",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

	<ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Свежие новости</a></li>
        <li><a href="#profile" data-toggle="tab">Популярные новости</a></li>
	</ul>
	<div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="home">
			<?$APPLICATION->IncludeComponent("bitrix:blog.new_posts.list", "mainpageblogs", array(
	"GROUP_ID" => "1",
	"BLOG_URL" => "",
	"MESSAGE_PER_PAGE" => "6",
	"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
	"NAV_TEMPLATE" => "",
	"IMAGE_MAX_WIDTH" => "600",
	"IMAGE_MAX_HEIGHT" => "600",
	"PATH_TO_BLOG" => "",
	"PATH_TO_POST" => "",
	"PATH_TO_USER" => "",
	"PATH_TO_GROUP_BLOG_POST" => "",
	"PATH_TO_BLOG_CATEGORY" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "86400",
	"PATH_TO_SMILE" => "",
	"SET_TITLE" => "Y",
	"POST_PROPERTY_LIST" => array(
	),
	"SHOW_RATING" => "",
	"RATING_TYPE" => "",
	"NAME_TEMPLATE" => "#NOBR##NAME# #LAST_NAME##/NOBR#",
	"SHOW_LOGIN" => "Y",
	"BLOG_VAR" => "",
	"POST_VAR" => "",
	"USER_VAR" => "",
	"PAGE_VAR" => "",
	"SEO_USER" => "N"
	),
	false
);?>  
        </div>
        <div class="tab-pane fade" id="profile">
<?$APPLICATION->IncludeComponent("bitrix:blog.popular_posts", ".default", array(
	"GROUP_ID" => "2",
	"BLOG_URL" => "",
	"SORT_BY1" => "VIEWS",
	"MESSAGE_COUNT" => "6",
	"PERIOD_DAYS" => "30",
	"MESSAGE_LENGTH" => "100",
	"PREVIEW_WIDTH" => "100",
	"PREVIEW_HEIGHT" => "100",
	"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
	"PATH_TO_BLOG" => "",
	"PATH_TO_POST" => "",
	"PATH_TO_USER" => "",
	"PATH_TO_GROUP_BLOG_POST" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "86400",
	"PATH_TO_SMILE" => "",
	"BLOG_VAR" => "",
	"POST_VAR" => "",
	"USER_VAR" => "",
	"PAGE_VAR" => "",
	"SEO_USER" => "N"
	),
	false
);?>          
        </div>
	</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>