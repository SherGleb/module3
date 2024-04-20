<?
require ($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?><div id="panel">
	 <? $APPLICATION->ShowPanel(); ?>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?>
<h1>Задание 1</h1>
 <?$APPLICATION->IncludeComponent(
	"dv:groups.list", 
	".default", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "Y",
		"SET_TITLE" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
 <br>
<h1></h1><? require ($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>