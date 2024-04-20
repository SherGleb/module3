<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arDefaultUrlTemplates404 = array(
    "list" => "",
    "detail" => "#GROUP_ID#/",
);

$arDefaultVariableAliases404 = array();

$arDefaultVariableAliases = array();

$arComponentVariables = array(
    "GROUP_ID",
    "ELEMENT_CODE",
);

if ($arParams["SEF_MODE"] == "Y")
{
    $arVariables = array();
    $arUrlTemplates = CComponentEngine::makeComponentUrlTemplates($arDefaultUrlTemplates404, $arParams["SEF_URL_TEMPLATES"]);

    $arVariableAliases = CComponentEngine::makeComponentVariableAliases($arDefaultVariableAliases404, $arParams["VARIABLE_ALIASES"]);
   
    $componentPage = CComponentEngine::ParseComponentPath($arParams["SEF_FOLDER"], $arUrlTemplates, $arVariables);

    if (!$componentPage)
    {
        $componentPage = "list";
    }

    CComponentEngine::initComponentVariables($componentPage, $arComponentVariables, $arVariableAliases, $arVariables);

    $arResult = array(
        "FOLDER" => $arParams["SEF_FOLDER"],
        "URL_TEMPLATES" => $arUrlTemplates,
        "VARIABLES" => $arVariables,
        "ALIASES" => $arVariableAliases,
    );
}
else
{
    $arVariableAliases = CComponentEngine::makeComponentVariableAliases($arDefaultVariableAliases, $arParams["VARIABLE_ALIASES"]);
    CComponentEngine::initComponentVariables(false, $arComponentVariables, $arVariableAliases, $arVariables);

    $componentPage = "";

    if (isset($arVariables["ELEMENT_ID"]) && intval($arVariables["ELEMENT_ID"]) > 0)
        $componentPage = "detail";
    if(isset($arVariables["ELEMENT_CODE"]) && strlen($arVariables["ELEMENT_CODE"] > 0))
        $componentPage = "detail";
    else
        $componentPage = "list";

    $arResult = array(
        "FOLDER" => "",
        "URL_TEMPLATES" => array(
            "list" => htmlspecialcharsbx($APPLICATION->GetCurPage()),
            "detail" => htmlspecialcharsbx($APPLICATION->GetCurPage() . "?" . $arVariableAliases["ELEMENT_ID"] . "=#ELEMENT_ID#"),
        ),
        "VARIABLES" => $arVariables,
        "ALIASES" => $arVariableAliases
    );
}

$this -> includeComponentTemplate($componentPage);