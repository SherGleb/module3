<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$ELEMENT_ID = $arParams["ELEMENT_ID"];
$rsElement = CGroup::GetByID($ELEMENT_ID)->Fetch();
$arResult['ID'] = $rsElement['ID'];
$arResult['NAME'] = $rsElement['NAME'];
$arResult['DESCRIPTION'] = $rsElement['DESCRIPTION'];
$this->IncludeComponentTemplate();
