<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */



?>
<div class="news__list row">

<?foreach ($arResult['_SECTIONS'] as $arItem):?>
    <?
    $this->AddEditAction(
        $arElement['ID'],
        $arElement['EDIT_LINK'],
        CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction(
        $arElement['ID'],
        $arElement['DELETE_LINK'],
        CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"),
        array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="news__item col-xs-12 col-sm-6 col-md-4" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
            <a href="<?=$arItem['SECTION_PAGE_URL']?>" class="news__link">
                <img class="news__img" src="<?=$arItem['PICTURE']['SRC']?>" alt="<?=$arItem['PICTURE']['ALT']?>">
                <div class="news__content">
                    <div class="news__date">
                        <?
                          $db_list = CIBlockSection::GetList(
                                  Array(SORT=>"ASC"),
                                  $arFilter = Array(
                                          "IBLOCK_ID"=>$arItem["IBLOCK_ID"],
                                          "ID"=>$arItem["ID"]
                                  ),
                                  true,
                                  $arSelect=Array("UF_*"));
                        while($ar_result = $db_list->GetNext())
                        {
                                    echo $ar_result["UF_DATE"]; 
                        }
                        ?> 
                    </div>
                    <h5 class="news__title">
                        <?=$arItem['NAME']?>
                        <?//= '<pre>'; print_r($arItem); '</pre>' ?>
                    </h5>
                </div>
            </a>
    </div>
    
<?endforeach;?>

</div>
<div class="news__pagination pagination">
<? echo $arResult["NAV_STRING"]; ?>
</div>

