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
$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<ul class="pagination__list">

<?if($arResult["bDescPageNumbering"] === true):?>

	<?//=$arResult["NavFirstRecordShow"]?>
    <?//=GetMessage("nav_to")?>
    <?//=$arResult["NavLastRecordShow"]?>
    <?//=GetMessage("nav_of")?>
    <?//=$arResult["NavRecordCount"]?><br />


	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
            <li class="pagination__item">
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"
                   class="pagination__link">
                    <?=GetMessage("nav_begin")?>
                </a>
            </li>
		<?else:?>
            <li class="pagination__item">
			    <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"
                   class="pagination__link">
                    <?=GetMessage("nav_begin")?>
                </a>
            </li>
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
			<?else:?>
			<?endif?>
		<?endif?>
	<?else:?>
        <li class="pagination__item">
            <a href="" class="pagination__link">
                <?=GetMessage("nav_begin")?>&nbsp;
            </a>
        </li>
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <li class="pagination__item">
                <a href="" class="pagination__link active">
                    <?=$NavRecordGroupPrint?>
                </a>
            </li>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
            <li class="pagination__item">
			    <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"
                   class="pagination__link"><?=$NavRecordGroupPrint?></a>
            </li>
		<?else:?>
            <li class="pagination__item">
			    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"
                   class="pagination__link">
                    <?=$NavRecordGroupPrint?>
                </a>
            </li>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>



	<?if ($arResult["NavPageNomer"] > 1):?>
        <li class="pagination__item">
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"
           class="pagination__link"><?=GetMessage("nav_end")?></a>
        </li>
	<?else:?>
        <li class="pagination__item">
            <a href="" class="pagination__link">
                <?=GetMessage("nav_end")?>
            </a>
        </li>
	<?endif?>

<?else:?>

	<?//=$arResult["NavFirstRecordShow"]?>
    <?//=GetMessage("nav_to")?>
    <?//=$arResult["NavLastRecordShow"]?>
    <?//=GetMessage("nav_of")?>
    <?//=$arResult["NavRecordCount"]?><br />


	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
            <li class="pagination__item">
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"
                   class="pagination__link"><?=GetMessage("nav_begin")?></a>
            </li>
		<?else:?>
            <li class="pagination__item">
			    <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"
                   class="pagination__link"><?=GetMessage("nav_begin")?></a>
            </li>
			<?if ($arResult["NavPageNomer"] > 2):?>
			<?else:?>
			<?endif?>
		<?endif?>

	<?else:?>
        <li class="pagination__item">
            <a href="" class="pagination__link">
                <?=GetMessage("nav_begin")?>
            </a>
        </li>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <li class="pagination__item">
                <a href="" class="pagination__link active">
                    <?=$arResult["nStartPage"]?>
                </a>
            </li>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
            <li class="pagination__item">
			    <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"
                   class="pagination__link"><?=$arResult["nStartPage"]?></a>
            </li>
		<?else:?>
            <li class="pagination__item">
			    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"
                   class="pagination__link">
                    <?=$arResult["nStartPage"]?>
                </a>
            </li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>


	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
        <?if($arResult["NavPageCount"] > 1):?>
            ...
            <li class="pagination__item">
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"
                   class="pagination__link">
                    <?=$arResult["NavPageCount"]?>
                </a>
            </li>
        <?endif?>
        <li class="pagination__item">
            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"
               class="pagination__link">
                <?=GetMessage("nav_end")?>
            </a>
        </li>
	<?else:?>
        <li class="pagination__item">
            <a href="" class="pagination__link">
                &nbsp;<?=GetMessage("nav_end")?>
            </a>
        </li>
	<?endif?>

<?endif?>


<?if ($arResult["bShowAll"]):?>
<noindex>
	<?if ($arResult["NavShowAll"]):?>
        <li class="pagination__item">
            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0" rel="nofollow"
               class="pagination__link">
                <?=GetMessage("nav_paged")?>
            </a>
        </li>
	<?else:?>
        <li class="pagination__item">
            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1" rel="nofollow"
               class="pagination__link">
                <?=GetMessage("nav_all")?>
            </a>
        </li>
	<?endif?>
</noindex>
<?endif?>

</ul>