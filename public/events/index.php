<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Афиша");
?> <?$APPLICATION->IncludeComponent(
	"bitrix:calendar.grid",
	"",
	Array(
		"CALENDAR_TYPE" => "events"
	)
);?>
<br />

<br />
<?$APPLICATION->IncludeComponent("bitrix:calendar.events.list", ".default", array(
	"CALENDAR_TYPE" => "events",
	"CALENDAR_SECTION_ID" => "0",
	"INIT_DATE" => "--текущая дата--",
	"FUTURE_MONTH_COUNT" => "2",
	"DETAIL_URL" => "",
	"EVENTS_COUNT" => "5",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>