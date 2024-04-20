<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задание2");
?><?$APPLICATION->ShowPanel();?><?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	".default",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => ".default",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
<h1>Задание 2</h1>
 <?$APPLICATION->IncludeComponent(
	"dv:groups",
	".default",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"SEF_FOLDER" => "/zadanie2/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("list"=>"","detail"=>"#GROUP_ID#/",)
	)
);?><br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>