<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	if ($arParams["ID"] <= 0)
		$arParams["ID"] = 10;

if ($this->StartResultCache())
{
	$arr = array();
	$id = 1;
	while (CGroup::GetByID($id)->Fetch()){
		array_push($arr, CGroup::GetByID($id)->Fetch());
		$id += 1;
	} 

	// $arResult['GROUPS'] = CGroup::GetList()->Fetch();
	$arResult['GROUPS'] = $arr;
	$this->IncludeComponentTemplate();
}
?>