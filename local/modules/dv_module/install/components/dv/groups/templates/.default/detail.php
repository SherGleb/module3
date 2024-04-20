<?
$APPLICATION ->IncludeComponent(
    "dv:group.detail",
    "",
    array(
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "ELEMENT_ID" => $arResult["VARIABLES"]["GROUP_ID"],
    ),
    $component
);
