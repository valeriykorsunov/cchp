<?php
// подключение служебной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');

$boolCapcha = CMain::CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_sid"]);

$previewText = $_POST['degree'].'<br>'
    .$_POST['company_name'].'<br>'
    .$_POST['company_url'].'<br>'
    .$_POST['company_info'].'<br>'
    .$_POST['position'].'<br>'
    .$_POST['visit_pupose'].'<br>'
    .$_POST['location'].'<br>'
    .$_POST['email'].'<br>'
    .$_POST['phone'].'<br>';
if ($boolCapcha === false)
{
    echo 'captchaN';
}
if ($boolCapcha === true)
{
    add_ement_block($previewText);
}


function add_ement_block($PREVIEW_TEXT){

    // добавить элемент ИБ (записать сообщение)
    $el = new CIBlockElement;
    $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => $_POST['ID_SECTION'],          // элемент лежит в корне раздела
        "IBLOCK_ID"      => $_POST["IBLOCK_ID"],
        "NAME"           =>$_POST['name'],
        "ACTIVE"         => "Y",            // активен
        "PREVIEW_TEXT"   => $PREVIEW_TEXT,
        "DETAIL_TEXT"    => ""
    );
    $PRODUCT_ID = $el->Add($arLoadProductArray);
    if(!$PRODUCT_ID) {
        echo 'Error: '.$el->LAST_ERROR.'<br>';
        return false;
    }
    else
        {
            echo 'ElementAdd';
        }

}
