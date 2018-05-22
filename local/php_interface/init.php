<?php
include 'PHPDebug.php';

AddEventHandler('main', 'OnEpilog', '_Check404Error', 1);

function _Check404Error()
{
    if (defined('ERROR_404') && ERROR_404 == 'Y') {
        global $APPLICATION;

        $APPLICATION->RestartBuffer();
        CHTTP::SetStatus('404 Not Found');
        include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/404.php';
        include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/footer.php';
    }
}

function showLinkDetail($name, $number) 
{ 
            $rsElem = CIBlockElement::GetById($number); 
            $arRes = $rsElem->GetNextElement();
            $arProps = $arRes->GetProperties();
            echo "<a href='".$arProps['LINK']['VALUE']."'>".$name."</a>";
}

function showLinkCentre($name, $number) 
{ 
            $res = CIBlockSection::GetById($number); 
            if($ar_res = $res->GetNext())
              if ($ar_res["IBLOCK_SECTION_ID"]==6)
                echo "<a href='/bolnitsa/centri-i-otdeleniya/".$ar_res["CODE"]."/'>".$name."</a>";
              else
                echo "<a href='/poliklinika/centri-i-otdeleniya/".$ar_res["CODE"]."/'>".$name."</a>";
}

function showGallery($elementId)
{
    global $APPLICATION;

    $APPLICATION->IncludeComponent("bitrix:news.detail", "gallery",
        array(
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "ELEMENT_ID"    => $elementId,
            "IBLOCK_TYPE"   => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "PROPERTY_CODE" => array(0 => "MORE_PHOTO",),
            "SET_TITLE"     => "N",
            "SET_BROWSER_TITLE" => "N",
        ),
        false
    );
}

function showDocs($elementId)
{
    global $APPLICATION;

    $APPLICATION->IncludeComponent("bitrix:news.detail", "docs",
        array(
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "ELEMENT_ID"    => $elementId,
            "IBLOCK_TYPE"   => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "PROPERTY_CODE" => array(0 => "MORE_PHOTO",),
            "SET_TITLE"     => "N",
            "SET_BROWSER_TITLE" => "N",
        ),
        false
    );
}

function showDetail($elementId)
{
    global $APPLICATION;

    $APPLICATION->IncludeComponent("bitrix:news.detail", "detail",
        array(
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "ELEMENT_ID"    => $elementId,
            "FIELD_CODE" => array(0 => "PREVIEW_PICTURE"),
            "IBLOCK_TYPE"   => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "PROPERTY_CODE" => array("","LINK"),
            "SET_TITLE"     => "N",
            "SET_BROWSER_TITLE" => "N",
        ),
        false
    );
}

function showCentre($elementId)
{
    global $APPLICATION;

    $APPLICATION->IncludeComponent("bitrix:catalog.section", "center_detail", 
        Array(
            "IBLOCK_ID" => "4", // Инфоблок
            "SECTION_ID" => "$elementId",   // ID раздела
            "SECTION_USER_FIELDS" => array("UF_TEXT"),
            "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SET_TITLE" => "N", // Устанавливать заголовок страницы
        ),
        false
    );
}

function showButton($name)
{
    if($name)
        return 
            "<a class=\"preview__button button button_outline_primary js-make-appointment-toggle\" href=\"#appointment-form\">{$name}</a>";
    else
        return 
            "<a class=\"preview__button button button_outline_primary js-make-appointment-toggle\" href=\"#appointment-form\">Записаться на прием</a>";
}

function showLink($name)
{
    if($name)
        return 
            "<a class=\"js-make-appointment-toggle\" href=\"#appointment-form\">{$name}</a>";
    else
        return 
            "<a class=\"js-make-appointment-toggle\" href=\"#appointment-form\">Записаться на прием</a>";
}

function templateEngine($text)
{
    preg_match_all('/\[\%(?:\s*|\&nbsp\;)(showDetail|showGallery|showCentre|showLinkDetail|showLinkCentre|showButton|showLink)(?:\s+|\&nbsp\;)(.*)(?:\s*|\&nbsp\;)\%\]/', $text, $matches, PREG_SET_ORDER);

    foreach ($matches as $match) {
        if (count($match) > 2) {
            switch ($match[1]) {
                case 'showDetail':
                    $match[2] = trim($match[2]);
                    ob_start();
                    showDetail($match[2]);
                    $content = ob_get_contents();
                    ob_end_clean();
                    $text = str_replace($match[0], $content, $text);

                    break;

                case 'showGallery':
                    $match[2] = trim($match[2]);
                    ob_start();
                    showGallery($match[2]);
                    $content = ob_get_contents();
                    ob_end_clean();
                    $text = str_replace($match[0], $content, $text);

                    break;

                case 'showCentre':
                    $match[2] = trim($match[2]);
                    ob_start();
                    showCentre($match[2]);
                    $content = ob_get_contents();
                    ob_end_clean();
                    $text = str_replace($match[0], $content, $text);

                    break;

                case 'showButton':
                    $match[2] = trim($match[2]);
                    ob_start();
                    showButton($match[2]);
                    $content = showButton($match[2]);
                    ob_end_clean();
                    $text = str_replace($match[0], $content, $text);

                    break;

                case 'showLink':
                    $match[2] = trim($match[2]);
                    ob_start();
                    showLink($match[2]);
                    $content = showLink($match[2]);
                    ob_end_clean();
                    $text = str_replace($match[0], $content, $text);

                    break;

                case 'showLinkDetail':
                    $match[2] = trim($match[2]);
                    $n=strrpos($match[2],' ');
                    $var1=substr($match[2],0,$n);
                    $var2=substr($match[2],$n);
                    ob_start();
                    showLinkDetail($var1,$var2);
                    $content = ob_get_contents();
                    ob_end_clean();
                    $text = str_replace($match[0], $content, $text);

                    break;

                case 'showLinkCentre':
                    $match[2] = trim($match[2]);
                    $n=strrpos($match[2],' ');
                    $var1=substr($match[2],0,$n);
                    $var2=substr($match[2],$n);
                    ob_start();
                    showLinkCentre($var1,$var2);
                    $content = ob_get_contents();
                    ob_end_clean();
                    $text = str_replace($match[0], $content, $text);

                    break;

                default:
                    $text = str_replace($match[0], '', $text);
            }
        }
    }

    return $text;
}