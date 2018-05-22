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
//PHPDebug::dump($arResult);
//PHPDebug::log($arResult);
?>

<h1>
    <?=$arResult['NAME']?>
</h1>
<div class="event">
    <div class="event__header">
        <div class="event__header-img-placeholder">
            <img src="<?=$arResult['PICTURE']['SRC']?>" alt="<?=$arResult['PICTURE']['ALT']?>" class="event__header-img">
        </div>
        <div class="event__header-content">
            <?=$arResult['DESCRIPTION']?>
        </div>
    </div>
    <?if($arResult['UF_REG_CONF'] == 1):?>

        <div class="event__form-placeholder box box_shadow" id="formConfer">
            <form action="" class="event__form form form_inline" id="my_form_conference">
                <input type="hidden" name="ID_SECTION" value="<?=$arResult['ID']?>" />
                <input type="hidden" name="IBLOCK_ID" value="<?=$arResult['IBLOCK_ID']?>" />
                <h2 class="form__title">Регистрация на конференцию</h2>
                <div class="form__group form__group_requered">
                    <label for="name" class="form__label">ФИО</label>
                    <div class="form__group-content">
                        <input id="name" name="name" required="" type="text" class="form__control form__control_md">
                    </div>
                </div>
                <div class="form__group">
                    <label for="degree" class="form__label">Ученая степень</label>
                    <div class="form__group-content">
                        <select name="degree" id="degree" class="js-form-select">
                            <option selected>Без степени</option>
                            <option>Cтепень 1</option>
                            <option>Cтепень 2</option>
                            <option>Cтепень 3</option>
                        </select>
                    </div>
                </div>
                <div class="form__group form__group_requered">
                    <label for="company_name" class="form__label">Компания</label>
                    <div class="form__group-content">
                        <input id="company_name" name="company_name" required="" type="text" class="form__control form__control_md">
                    </div>
                </div>
                <div class="form__group form__group_requered">
                    <label for="company_url" class="form__label">Сайт компании</label>
                    <div class="form__group-content">
                        <input id="company_url" name="company_url" required="" type="text" class="form__control form__control_md">
                    </div>
                </div>
                <div class="form__group">
                    <label for="company_info" class="form__label">Информация о компании</label>
                    <div class="form__group-content">
                        <textarea id="company_info" name="company_info" class="form__control form__control_md" rows="8"></textarea>
                    </div>
                </div>
                <div class="form__group form__group_requered">
                    <label for="position" class="form__label">Должность</label>
                    <div class="form__group-content">
                        <input id="position" name="position" required="" type="text" class="form__control form__control_md">
                    </div>
                </div>
                <div class="form__group form__group_requered">
                    <label for="visit_pupose" class="form__label">Цель посещения</label>
                    <div class="form__group-content">
                        <textarea id="visit_pupose" name="visit_pupose" required="" class="form__control form__control_md" rows="8"></textarea>
                    </div>
                </div>
                <div class="form__group form__group_requered">
                    <label for="location" class="form__label">Город/Регион</label>
                    <div class="form__group-content">
                        <input id="location" name="location" required="" type="text" class="form__control form__control_md">
                    </div>
                </div>
                <div class="form__group form__group_requered">
                    <label for="email" class="form__label">Email</label>
                    <div class="form__group-content">
                        <input id="email" name="email" required="" type="text" class="form__control form__control_md">
                    </div>
                </div>
                <div class="form__group form__group_requered">
                    <label for="phone" class="form__label">Номер телефона</label>
                    <div class="form__group-content">
                        <input id="phone" name="phone" required="" type="text" class="form__control form__control_md">
                    </div>
                </div>
                <div class="form__group form__group_requered">
                    <label for="captcha" class="form__label form__label_captcha">
                        <input type="hidden" name="captcha_sid" value="<?=$code;?>" />
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$code;?>" alt="CAPTCHA" />
    <!--                    <img src="../temp/captcha.jpg" alt="">-->
                    </label>
                    <div class="form__group-content">
                        <input id="captcha" name="captcha_word" required="" placeholder="Введите буквы и цифры" type="text" class="form__control form__control_md">
                    </div>
                </div>
                <div class="form__group form__group_submit">
                    <button name="submit" type="submit" class="button button_primary button_lg button_block">
                        Зарегистрироватся
                    </button>
                    <div class="form__note"><span class="text-primary">*</span> — Обязательные поля для заполнения</div>
                </div>
            </form>
        </div>

        <div class="event__alert alert box box_shadow hidden" id="formConferSPS">
            <div class="alert__content">
                <i class="alert__icon ficon_ok"></i>
                <h2 class="alert__title">Спасибо за регистрацию!</h2>
                <div class="alert__text">Подтверждение регистрации и дополнительная информация придет вам на электронную почту в ближайшее время.</div>
                <div class="alert__action">
                    <a href="/informatsiya/conference/" class="alert__button button button_outline_primary button_lg button_block">
                        Вернуться к конференциям
                    </a>
                </div>
            </div>
        </div>

    <?endif;?>
</div>
