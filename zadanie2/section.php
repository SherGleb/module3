<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("element");
?><?$APPLICATION->ShowPanel();?> Text here.... <br>
 <?$APPLICATION->IncludeComponent(
	"dv:groups",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"SET_TITLE" => "Y"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>