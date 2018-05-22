<?php
// подключение служебной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');

//PHPDebug::dump($_POST);

$boolCapcha = CMain::CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_sid"]);

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
        "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
        "IBLOCK_ID"      => $_POST["IBLOCK_ID"],
        "NAME"           =>$_POST['name'],
        "ACTIVE"         => "N",            // активен
        "PREVIEW_TEXT"   => $_POST['feedback'],
        "DETAIL_TEXT"    => $_POST['email']
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
