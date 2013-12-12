<!DOCTYPE html>
<html lang="ru">
		<head>
			<?$APPLICATION->ShowHead()?>
			<title><?$APPLICATION->ShowTitle()?></title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta charset="utf-8">
			<!-- Bootstrap -->
			<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
			<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">

		</head>
		<body>
			<?$APPLICATION->ShowPanel();?>
			<div id="wrap">
			<header class="header_wide">
				<div class="topline">
					<div class="container">

						<div class="row">
							<div class="span12">
								<div class="pull-right">
					<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth_mao", array(
	"REGISTER_URL" => SITE_DIR."auth/",
	"FORGOT_PASSWORD_URL" => "",
	"PROFILE_URL" => SITE_DIR."people/user/",
	"SHOW_ERRORS" => "N",
	"PATH_TO_BLOG" => "blogs/#blog#/",
	"PATH_TO_NEW_BLOG" => "blogs/new/blog_edit.php",
	"BLOG_GROUP_ID" => array(
		0 => "",
		1 => "",
	),
	"PATH_TO_SONET_MESSAGES" => "club/messages/"
	),
	false
);?>										
								</div>
							</div>	
						</div>	
					</div>	
				</div>	
	
				<div class="container">

					<div class="row">
						<div class="span4">						
							<div id="logo">
								<a href="/" title="Молодежь Архангельской области" rel="home">
									<span></span>
								</a>
							</div>							
						</div>
						<div class="span8 menu_top">
							<div class="row">
								<div class="span5">
									<?$APPLICATION->IncludeComponent("bitrix:menu", "topmenumao", array(
										"ROOT_MENU_TYPE" => "top",
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
								<div class="span3 hidden-tablet">
								<div class="menu_top_search">	

											<div><?$APPLICATION->IncludeComponent("bitrix:search.form", "searchmao", Array(
	
	),
	false
);?></div>

									<br/>
									<br/>
								</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</header>


				<div class="container ">
					<div class="row">
						<div class="span4">
								  <?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
									"ROOT_MENU_TYPE" => "left",
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

 <?$APPLICATION->IncludeComponent("bitrix:news.list", "herooftheday", array(
	"IBLOCK_TYPE" => "news",
	"IBLOCK_ID" => "6",
	"NEWS_COUNT" => "1",
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

							

 <?$APPLICATION->IncludeComponent("bitrix:news.list", "partners", array(
	"IBLOCK_TYPE" => "news",
	"IBLOCK_ID" => "9",
	"NEWS_COUNT" => "1",
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
	"DETAIL_URL" => "#CODE#",
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


						</div>
						<div class="span8 content_section">
							<div class="breadcrumbs">
								<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbsmao", Array(
	"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
	"SITE_ID" => "-",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
	),
	false
);?>
							</div>
							