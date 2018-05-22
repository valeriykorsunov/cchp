            <?if ($_SERVER["SCRIPT_NAME"] != "/index.php"): ?>
                            </article>
                        </div>
                        <div class="col-xs-12 col-lg-12 hidden-lg-up">
                            <div class="aside-nav">
                                <?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu", Array(
                                    "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                                        "ROOT_MENU_TYPE" => "aside",  // Тип меню для первого уровня
                                        "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                                        "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                                        "MAX_LEVEL" => "2", // Уровень вложенности меню
                                        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                                        "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                                        "DELAY" => "N", // Откладывать выполнение шаблона меню
                                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                                    ),
                                    false
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
            <? endif ?>
        </main><!-- /.content -->
    </div>

    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="footer__item col-xs-12 col-lg-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <ul class="footer__nav">
                                    <li class="footer__nav-item"><a href="/bolnitsa/o-bolnitse/" class="footer__nav-link">О больнице</a></li>
                                    <li class="footer__nav-item"><a href="/poliklinika/o-poliklinike/" class="footer__nav-link">О поликлинике</a></li>
                                    <li class="footer__nav-item">
                                        <noindex>
                                            <a rel="nofollow" target="_blank" href="http://dentalckb.ru" class="footer__nav-link">Стоматология</a>
                                        </noindex>
                                    </li>
                                    <li class="footer__nav-item"><a href="/bolnitsa/centri-i-otdeleniya/laboratornaya-sluzhba/" class="footer__nav-link">Лаборатория</a></li>
                                    <li class="footer__nav-item">
                                        <noindex>
                                            <a rel="nofollow" target="_blank" href="http://roddomckb.ru" class="footer__nav-link">Роддом ЦКБ</a>
                                        </noindex>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer__item col-xs-12 col-lg-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <ul class="footer__nav">
                                    <li class="footer__nav-item"><a href="/patsientam/ekstrennaya-gospitalizatsiya/" class="footer__nav-link">Экстренная госпитализация</a></li>
                                    <li class="footer__nav-item"><a href="/patsientam/planovaya-gospitalizatsiya/" class="footer__nav-link">Плановая госпитализация</a></li>
                                    <li class="footer__nav-item"><a href="/patsientam/skoraya-neotlozhnaya-pomoshch/" class="footer__nav-link">Скорая помощь</a></li>
                                    <li class="footer__nav-item"><a href="/patsientam/uslugi-i-stoimost-v-poliklinike/" class="footer__nav-link">Платные услуги</a></li>
                                    <li class="footer__nav-item"><a href="/informatsiya/nashi-vakansii/" class="footer__nav-link">Наши вакансии</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer__item col-xs-12 col-sm-6 col-lg-3">
                        <div class="phone">
                            <i class="phone__icon ficon ficon_phone"></i>
                            <a href="tel:+74955300111" class="phone__number">+7 (495) 530 01 11</a>
                            <span class="phone__note">Контактный центр</span>
                        </div>
                        <div class="phone">
                            <i class="phone__icon ficon ficon_phone"></i>
                            <a href="tel:+74954150905" class="phone__number">+7 (495) 530 00 88</a>
                            <span class="phone__note">Скорая помощь</span>
                        </div>
                    </div>
                    <div class="footer__item col-xs-12 col-sm-6 col-lg-3">
                        <div class="footer__contacts">
                            <p>
                                121359, г. Москва,<br>
                                ул. Маршала Тимошенко, 15
                            </p>
                            <p>
                                <noindex>
                                    <a rel="nofollow" target="_blank" href="http://cchp.medikey.ru/main">
                                        Записаться на прием
                                    </a>
                                </noindex>
                                <br>
                                <a href="/kontakty/bolnitsa/">Больница. Контактная информация</a>
                                <br>
                                <a href="/kontakty/poliklinika/">Поликлиника. Контактная информация</a>
                            </p>
                            <p>
                                <a href="#appointment-form" class="button button_primary js-make-appointment-toggle">
                                    Обратный звонок
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="footer__item col-xs-12 col-lg-6">
                        2012—2017 &copy; Центральная клиническая больница с поликлиникой.<br>
                        Управление делами Президента Российской Федерации 
                    </div><!-- /.col -->

                    <div class="footer__item col-xs-12 col-lg-4">
                        <a href="/informatsiya/politika-konfedentsialnosti/">Политика конфеденциальности</a> 
                        <br>
                        <a href="/informatsiya/protivodeystvie-korruptsii/">Противодействие коррупции</a>
                    </div><!-- /.col -->

                    <div class="footer__item col-xs-12 col-lg-2">
                        <div class="footer__social social">
                            <ul class="social__list">
                                <li class="social__item">
                                    <noindex>
                                        <a target="_blank" rel="noindex" href="https://www.facebook.com/CCHPRU" class="social__link ficon ficon_fb" title="Facebook"></a>
                                    </noindex>
                                </li>
                                <li class="social__item">
                                    <noindex>
                                        <a target="_blank" rel="nofollow" href="https://vk.com/cchp_moscow" class="social__link ficon ficon_vk" title="Вконтакте"></a>
                                    </noindex>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </footer><!-- /.footer -->

    <form id="appointment-form" class="modal mfp-hide">
        <h2 class="modal__title h1">Заявка на контакт</h2>
        <p class="modal__text">Наш оператор обработает заявку максимально быстро и перезвонит Вам.</p>
        <div id="appointment-form-result"></div>
        <div id="appointment-form-content">
            <div class="form__group">
                <label for="name" class="form__label">Ваше имя</label>
                <input id="name" name="name" placeholder="Ваше имя" required="" type="text" class="form__control">
            </div>
            <div class="form__group">
                <label for="phone" class="form__label">Телефон для связи</label>
                <input id="phone" name="phone" placeholder="Телефон для связи" required="" type="phone" class="form__control">
            </div>
            <div class="form__group">
                <label for="mail" class="form__label">Ваш e-mail для связи</label>
                <input id="mail" name="email" placeholder="Ваш e-mail" required="" type="email" class="form__control">
            </div>
            <div class="form__group">
                <textarea id="comment" name="comment" placeholder="Комментарий" class="form__control form__control__textarea"></textarea>
            </div>
            <div class="form__group">
                <input id="private" name="private" required="required" type="checkbox">
                <label for="private"> - согласие на обработку персональных данных</label>
            </div>
            <div class="form__group form__group_submit">
                <button type="submit" class="button button_primary button_lg button_block">
                    Отправить
                </button>
            </div>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="/js/vendor/slick.min.js"></script>
    <script src="/js/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/js/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/js/vendor/simplebar/simplebar.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/kvv_conference.js"></script>

    <?if ($_SERVER["SCRIPT_NAME"] == "/index.php"): ?>
        <script>
            ymaps.ready(function () {
                var myMap = new ymaps.Map('map', {
                    center: [55.749637, 37.389828],
                    zoom: 15
                }),

                MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                ),

                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                    hintContent: 'Центральная клиническая больница',
                    balloonContent: 'Центральная клиническая больница с поликлиникой Управления делами Президента Российской Федерации'
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: '/i/marker.svg',
                    iconImageSize: [28, 40],
                    iconImageOffset: [-5, -38]
                }),

                myPlacemarkWithContent = new ymaps.Placemark([55.745438, 37.392886], {
                    hintContent: 'Центральная клиническая больница Управления Делами Президента РФ, Поликлиника',
                    balloonContent: 'Центральная клиническая больница Управления Делами Президента РФ, Поликлиника',
                    iconContent: ''
                }, {
                    iconLayout: 'default#imageWithContent',
                    iconImageHref: '/i/marker.svg',
                    iconImageSize: [28, 40],
                    iconImageOffset: [-5, -38],
                    iconContentLayout: MyIconContentLayout
                });

                myMap.geoObjects
                    .add(myPlacemark)
                    .add(myPlacemarkWithContent);
                myMap.behaviors.disable("scrollZoom");
                if(isMobile.any()){
                    myMap.behaviors.disable("drag");
                }
            });
        </script>
    <? endif ?>
    <?if ($_SERVER["SCRIPT_NAME"] == "/kontakty/poliklinika/index.php"): ?>
        <script>
            ymaps.ready(init);
            function init () {
                var pointA = "Москва, метро Молодежная",
                pointB = "Россия, Москва, улица Маршала Тимошенко, 11к2",
                pointC = "Москва, метро Крылатское",
                pointD = [55.72334184778842,37.38327557342275],
                /**
                * Создаем мультимаршрут.
                * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRoute.xml
                */
                pedestrianRoute = new ymaps.multiRouter.MultiRoute({
                    referencePoints: [
                        pointA,
                        pointD
                    ],
                    params: {
                        //Тип маршрутизации - пешеходная маршрутизация.
                        routingMode: 'pedestrian',
                        // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
                        results: 1
                    }
                }, {
                    // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
                    boundsAutoApply: true
                });

                masstransitRoute = new ymaps.multiRouter.MultiRoute({
                    referencePoints: [
                        pointA,
                        pointB
                    ],
                    params: {
                        //Тип маршрутизации - пешеходная маршрутизация.
                        routingMode: 'masstransit',
                        // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
                        results: 1
                    }
                }, {
                    routeStrokeWidth: 2,
                    routeStrokeColor: "#000088",
                    routeActiveStrokeWidth: 6,
                    routeActiveStrokeColor: "#E63E92",

                    // Внешний вид линии пешеходного маршрута.
                    routeActivePedestrianSegmentStrokeStyle: "solid",
                    routeActivePedestrianSegmentStrokeColor: "#00CDCD",          
                    // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
                    boundsAutoApply: true
                });

                masstransitRoute2 = new ymaps.multiRouter.MultiRoute({
                    referencePoints: [
                        pointC,
                        pointB
                    ],
                    params: {
                        routingMode: 'masstransit',
                        results: 1
                    }
                }, {
                    routeStrokeWidth: 2,
                    routeStrokeColor: "#000088",
                    routeActiveStrokeWidth: 6,
                    routeActiveStrokeColor: "#E63E92",

                    routeActivePedestrianSegmentStrokeStyle: "solid",
                    routeActivePedestrianSegmentStrokeColor: "#00CDCD",          
                    boundsAutoApply: true
                });

                autoRoute = new ymaps.multiRouter.MultiRoute({
                    referencePoints: [
                        pointD,
                        pointB
                    ],
                    params: {
                        //Тип маршрутизации - пешеходная маршрутизация.
                        routingMode: 'auto',
                        // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
                        results: 1
                    }
                }, {
                    // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
                    boundsAutoApply: true
                });

                // Создаем карту с добавленной на нее кнопкой.
                var myMap = new ymaps.Map('map', {
                    center: [55.739625, 37.54120],
                    zoom: 12
                }, {
                    buttonMaxWidth: 300
                });
                
                var placemark = new ymaps.Placemark(pointB, 
                {
                    hintContent: 'Москва, Красная площадь'
                }, 
                {
                    iconLayout: 'default#image',
                    iconImageHref: '/i/marker-logo.png',
                    iconImageSize: [38, 49],
                    iconImageOffset: [-14, -54]
                });
                myMap.geoObjects.add(placemark);
                
                // Добавляем мультимаршрут на карту.
                myMap.geoObjects.add(autoRoute);
       
                $('.js-route-public-transport').click(function () {
                    //myMap.geoObjects.add(pedestrianRoute);
                    myMap.geoObjects.add(masstransitRoute);
                    myMap.geoObjects.add(masstransitRoute2);
                    myMap.geoObjects.remove(autoRoute);
                });
                $('.js-route-auto').click(function () {
                    myMap.geoObjects.add(autoRoute);
                    //myMap.geoObjects.remove(pedestrianRoute);
                    myMap.geoObjects.remove(masstransitRoute);
                    myMap.geoObjects.remove(masstransitRoute2);
                });
            }
        </script>
    <? elseif ($_SERVER["SCRIPT_NAME"] == "/kontakty/bolnitsa/index.php"): ?>
        <script>
            ymaps.ready(init);
            function init () {
                var pointA = "Москва, метро Молодежная",
                pointB = [55.74978838447954,37.3898816865081],
                pointC = "Москва, метро Крылатское",
                pointD = [55.76567630060483,37.37314854660068],
                /**
                * Создаем мультимаршрут.
                * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRoute.xml
                */
                pedestrianRoute = new ymaps.multiRouter.MultiRoute({
                    referencePoints: [
                        pointB,
                        pointD
                    ],
                    params: {
                        //Тип маршрутизации - пешеходная маршрутизация.
                        routingMode: 'pedestrian',
                        // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
                        results: 1
                    }
                }, {
                    // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
                    boundsAutoApply: true
                });

                masstransitRoute = new ymaps.multiRouter.MultiRoute({
                    referencePoints: [
                        pointA,
                        pointB
                    ],
                    params: {
                        //Тип маршрутизации - пешеходная маршрутизация.
                        routingMode: 'masstransit',
                        // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
                        results: 1
                    }
                }, {
                    routeStrokeWidth: 2,
                    routeStrokeColor: "#000088",
                    routeActiveStrokeWidth: 6,
                    routeActiveStrokeColor: "#E63E92",

                    // Внешний вид линии пешеходного маршрута.
                    routeActivePedestrianSegmentStrokeStyle: "solid",
                    routeActivePedestrianSegmentStrokeColor: "#00CDCD",          
                    // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
                    boundsAutoApply: true
                });

                masstransitRoute2 = new ymaps.multiRouter.MultiRoute({
                    referencePoints: [
                        pointC,
                        pointB
                    ],
                    params: {
                        routingMode: 'masstransit',
                        results: 1
                    }
                }, {
                    routeStrokeWidth: 2,
                    routeStrokeColor: "#000088",
                    routeActiveStrokeWidth: 6,
                    routeActiveStrokeColor: "#E63E92",

                    routeActivePedestrianSegmentStrokeStyle: "solid",
                    routeActivePedestrianSegmentStrokeColor: "#00CDCD",          
                    boundsAutoApply: true
                });

                autoRoute = new ymaps.multiRouter.MultiRoute({
                    referencePoints: [
                        pointD,
                        pointB
                    ],
                    params: {
                        //Тип маршрутизации - пешеходная маршрутизация.
                        routingMode: 'auto',
                        // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
                        results: 1
                    }
                }, {
                    // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
                    boundsAutoApply: true
                });

                // Создаем карту с добавленной на нее кнопкой.
                var myMap = new ymaps.Map('map', {
                    center: [55.739625, 37.54120],
                    zoom: 12
                }, {
                    buttonMaxWidth: 300
                });
                
                var placemark = new ymaps.Placemark(pointB, 
                {
                    hintContent: 'Москва, Красная площадь'
                }, 
                {
                    iconLayout: 'default#image',
                    iconImageHref: '/i/marker-logo.png',
                    iconImageSize: [38, 49],
                    iconImageOffset: [-14, -54]
                });
                myMap.geoObjects.add(placemark);
                
                // Добавляем мультимаршрут на карту.
                myMap.geoObjects.add(autoRoute);
       
                $('.js-route-public-transport').click(function () {
                    //myMap.geoObjects.add(pedestrianRoute);
                    myMap.geoObjects.add(masstransitRoute);
                    myMap.geoObjects.add(masstransitRoute2);
                    myMap.geoObjects.remove(autoRoute);
                });
                $('.js-route-auto').click(function () {
                    myMap.geoObjects.add(autoRoute);
                    //myMap.geoObjects.remove(pedestrianRoute);
                    myMap.geoObjects.remove(masstransitRoute);
                    myMap.geoObjects.remove(masstransitRoute2);
                });
            }
        </script>
    <? elseif ($_SERVER["SCRIPT_NAME"] == "/kontakty/skoraya-pomoshch/index.php"): ?>
    <? endif ?>
  </body>
</html>