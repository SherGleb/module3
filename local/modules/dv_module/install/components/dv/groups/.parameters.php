<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"PARAMETERS" => array(
        "SEF_MODE" => array(
            "list" => array(
                "NAME" => "list",
                "DEFAULT" => "",
                "VARIABLES" => array(),
            ),
            
            "detail" => array(
                "NAME" => "detail",
                "DEFAULT" => "#GROUP_ID#/",
                "VARIABLES" => array(),
            )
        ),
        "CACHE_TIME" => array("DEFAULT" => 3600),
	)
);

