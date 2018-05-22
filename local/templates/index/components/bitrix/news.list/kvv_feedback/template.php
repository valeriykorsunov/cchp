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
$code = htmlspecialchars($APPLICATION->CaptchaGetCode());
//PHPDebug::log($arResult);
?>
<div class="feedback">
    <div class="feedback__form-placeholder box box_shadow js-form-with-toggle">
        <a href="" class="feedback__form-toggle js-form-toggle">
            <span class="feedback__form-toggle-text link-pseudo js-form-toggle-text" data-default-text="Написать отзыв" data-active-text="Скрыть форму">Написать отзыв</span>
            <i class="feedback__form-toggle-icon ficon_caret-down-thin js-form-toggle-icon" data-default-icon="ficon_caret-down-thin" data-active-icon="ficon_close"></i>
        </a>
        <form action="" class="feedback__form form form_inline js-form-with-toggle-body" id="my_form_feedback">
            <input type="hidden" name="IBLOCK_ID" value="<?=$arResult['ID']?>" />
            <h2 class="form__title">Написать отзыв</h2>
            <div class="form__group form__group_requered">
                <label for="name" class="form__label">Ваше имя</label>
                <div class="form__group-content">
                    <input id="name" name="name" required="" type="text" class="form__control form__control_md">
                </div>
            </div>
            <div class="form__group form__group_requered">
                <label for="email" class="form__label">E-mail</label>
                <div class="form__group-content">
                    <input id="email" name="email" required="" type="text" class="form__control form__control_md">
                </div>
            </div>
            <div class="form__group form__group_requered">
                <label for="feedback" class="form__label">Ваш отзыв</label>
                <div class="form__group-content">
                    <textarea id="feedback" name="feedback" required="" class="form__control form__control_md" rows="8"></textarea>
                </div>
            </div>
            <div class="form__group form__group_requered">
                <label for="captcha" class="form__label form__label_captcha">
                    <input type="hidden" name="captcha_sid" value="<?=$code;?>" />
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$code;?>" alt="CAPTCHA" />
<!--                    <img src="../temp/captcha.jpg" alt="">-->
                </label>
                <div class="form__group-content">
                    <input id="captcha"
                           name="captcha_word"
                           required=""
                           placeholder="Введите буквы и цифры"
                           type="text"
                           class="form__control form__control_md">
                </div>
            </div>
            <div class="form__group form__group_submit">
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control__input" name="agreement" value="1" required="">
                    <div class="custom-control__indicator"></div>
                    Я согласен с <a href="">Политикой обработки и защиты персональных данных</a>
                </label>
                <button name="submit" type="submit" class="button button_primary button_lg button_block">
                    Зарегистрироватся
                </button>
                <div class="form__note"><span class="text-primary">*</span> — Обязательные поля для заполнения</div>
            </div>
        </form>
    </div>
    
    <div class="event__alert alert box box_shadow" style="display: none;">
        <div class="alert__content">
            <i class="alert__icon ficon_ok"></i>
            <h2 class="alert__title">Спасибо за отзыв!</h2>
            <div class="alert__text">После проверки модератором отзыв будет доступен всем пользователям.</div>
            <div class="alert__action">
                <a href="" class="alert__button button button_outline_primary button_lg button_block">
                    Вернуться к форме отзыва
                </a>
            </div>
        </div>
    </div>

    <div class="feedback__list">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="feedback__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="feedback__item-header">
                <span class="feedback__item-author">
                    <?echo $arItem["NAME"]?>
                </span>
                <time class="feedback__item-date">
                    <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                        <?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
                    <?endif?>
                </time>
            </div>
            <div class="feedback__item-body">
                <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                    <?echo $arItem["PREVIEW_TEXT"];?>
                <?endif;?>
            </div>
        </div>
    <?endforeach;?>
    </div>

    <div class="feedback__pagination pagination">
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <br /><?=$arResult["NAV_STRING"]?>
        <?endif;?>
    </div>
</div>
