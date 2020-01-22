<!doctype html>
<html class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Тестовый сайт</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <!-- This make sence for mobile browsers. It means, that content has been optimized for mobile browsers -->
    <meta name="HandheldFriendly" content="true">

    <!-- Stylesheet -->
    <link href="static/css/main.css" rel="stylesheet" type="text/css">
    <link href="static/css/separate-css/custom.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lf-z88UAAAAACDiIGK3avEuacChA06-h1xRrNCY"></script>

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="favicon.png">

    <script>
        (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>
    <!--[if lt IE 9 ]>
    <script src="static/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script>
    <script src="static/js/separate-js/respond.min.js" type="text/javascript"></script>
    <meta content="no" http-equiv="imagetoolbar">
    <![endif]-->
</head>
<body>

    <!-- Header Begin -->
    <header class="header">
        <div class="container header__container">
            <a href="/" class="logo" title="9oweb"></a>
            <div class="header__right">
                <div class="header__slogan">Интернет-агентство
                    <br>полного цикла</div>
                <div class="header__info">
                    <a href="tel:+77081037485" class="header__contacts">+7 708 103 74 85</a>
                    <a href="mailto:info@9oweb.kz" class="header__contacts">info@9oweb.kz</a>
                </div>
                <a href="#" onclick="changeMZ('Форма: Оставить заявку')" class="button -default header__button" data-target="#modal-cta" data-toggle="modal">Оставить заявку</a>
            </div>
        </div>
    </header><!--/. Header end -->

    <!-- Entry Begin -->
    <section class="entry" style="background-image: url('static/img/content/entry-bg.jpg')">
        <div class="entry__container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="entry__content">
                            <div class="entry__title">SMM-ПРОДВИЖЕНИЕ
                                <br><span>для Вашего бизнеса</span>
                            </div>
                            <div class="entry__subtitle">Получайте лояльных клиентов и подписчиков из социальных сетей Facebook, Instagram, Вконтакте, Telegram</div>
                            <form class="entry__form">
                                <div class="row" data-gutter="15">
                                    <div class="col-md-6">
                                        <div class="control">
                                            <input type="text" class="control__input" id="contname2" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="control">
                                            <input type="text" class="control__input" id="contphone2" oninput="proverkaPress(document.getElementById('contphone2'), document.getElementById('but2'))" placeholder="Номер телефона">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" id="but2" onclick="changeMZ('Форма: ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ'); getAjax(document.getElementById('contname2').value, document.getElementById('contphone2').value, mazay)" class="button -default entry__button" data-target="#modal-success" data-toggle="modal" disabled>ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
                                    </div>
                                </div>
                            </form>
                            <a href="#"  onclick="changeMZ('Форма: ПОЛУЧИТЬ Консультацию')" data-target="#modal-cta" data-toggle="modal"  class="button -default entry__mobile-button">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="entry__social">
                            <div class="entry__social-icon">
                                <img src="static/img/general/icon-instagram.svg" alt="">
                            </div>
                            <div class="entry__social-icon">
                                <img src="static/img/general/icon-facebook.svg" alt="">
                            </div>
                            <div class="entry__social-icon">
                                <img src="static/img/general/icon-vk.svg" alt="">
                            </div>
                            <div class="entry__social-icon">
                                <img src="static/img/general/icon-telegram.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/. Entry End -->

    <!-- Features Begin -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <div class="section-header__title">SMM-ПРОДВИЖЕНИЕ, КОТОРОЕ РАБОТАЕТ</div>
            </div>
            <div class="features__slider">
                <div class="swiper-container jsFeaturesSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="features__item">
                                <img src="static/img/general/ic-features-1.svg" alt="">
                                <div class="features__text">
                                    Мы определяем <span>smm-стратегию</span>, формируем концепцию продвижения. В этом случае мы точно знаем, что и для кого публикуем. Откуда стартуем и куда направляемся
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="features__item">
                                <img src="static/img/general/ic-features-2.svg" alt="">
                                <div class="features__text">
                                    Создаем действительно <span>правильный контент</span>. А также генерируем идеи акций, конкурсов, мероприятий, опросов. Даем аудитории то, что ей интересно
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="features__item">
                                <img src="static/img/general/ic-features-3.svg" alt="">
                                <div class="features__text">
                                    Увеличиваем <span>приток новых пользователей</span> и лояльность старых. Работаем с отзывами, формируем репутацию бренда. Приводим клиентов в Ваш бизнес!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination jsFeaturesPagination"></div>
                <div class="features__controls">
                    <button type="button" class="features__control -prev jsFeaturesSliderPrev">Назад</button>
                    <button type="button" class="features__control -next jsFeaturesSliderNext">Вперед</button>
                </div>
            </div>
            <div class="features__items row" vertical-gutter="60">
                <div class="col-md-4">
                    <div class="features__item">
                        <img src="static/img/general/ic-features-1.svg" alt="">
                        <div class="features__text">
                            Мы определяем <span>smm-стратегию</span>, формируем концепцию продвижения. В этом случае мы точно знаем, что и для кого публикуем. Откуда стартуем и куда направляемся
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features__item">
                        <img src="static/img/general/ic-features-2.svg" alt="">
                        <div class="features__text">
                            Создаем действительно <span>правильный контент</span>. А также генерируем идеи акций, конкурсов, мероприятий, опросов. Даем аудитории то, что ей интересно
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features__item">
                        <img src="static/img/general/ic-features-3.svg" alt="">
                        <div class="features__text">
                            Увеличиваем <span>приток новых пользователей</span> и лояльность старых. Работаем с отзывами, формируем репутацию бренда. Приводим клиентов в Ваш бизнес!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/. Features End -->

    <!-- Features Begin -->
    <section class="smm">
        <div class="container">
            <div class="section-header">
                <div class="section-header__title">КАКОВЫ ОСОБЕННОСТИ ПРОДВИЖЕНИЯ В СОЦИАЛЬНЫХ СЕТЯХ?</div>
            </div>
            <div class="row" vertical-gutter="30">
                <div class="col-md-6">
                    <div class="smm__item">
                        <div class="smm__icon">
                            <img src="static/img/general/ic-checkbox.svg" alt="">
                        </div>
                        <div class="smm__text">
                            Это - <span>интерактивно</span>. SMM дает возможность не просто информировать клиентов, а общаться с ними, оперативно реагировать на запросы и отзывы
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smm__item">
                        <div class="smm__icon">
                            <img src="static/img/general/ic-checkbox.svg" alt="">
                        </div>
                        <div class="smm__text">
                            Это - <span>прозрачно</span>. Социальные сети помогают отслеживать, что клиенты пишут о вас, каковы их потребности, вкусы и интересы.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smm__item">
                        <div class="smm__icon">
                            <img src="static/img/general/ic-checkbox.svg" alt="">
                        </div>
                        <div class="smm__text">
                            Это - <span>комфортно</span>. В социальных сетях компании общаются с людьми на комфортной для них площадке, тем самым не только привлекая новых клиентов, но и поддерживая связь со старыми.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smm__item">
                        <div class="smm__icon">
                            <img src="static/img/general/ic-checkbox.svg" alt="">
                        </div>
                        <div class="smm__text">
                            Это - <span>эффективно</span>. Грамотно спланированное SMM продвижение позволяет повысить узнаваемость бренда и лояльность клиентов, а также увеличить число продаж.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/. Features End -->

    <!-- Audit Begin -->
    <section class="audit" style="background-image: url('static/img/content/audit-bg.jpg')">
        <div class="container">
            <div class="audit__title">Получите бесплатный аудит ваших аккаунтов в социальных сетях</div>
            <div class="audit__text">
                Социальные сети – один из самых быстрорастущих и перспективных каналов.
                <br>И если делать все правильно, то из них можно успешно генерировать поток клиентов
            </div>
            <a href="#" onclick="changeMZ('Форма: ПОЛУЧИТЬ БЕСПЛАТНЫЙ АУДИТ')" data-target="#modal-cta" data-toggle="modal" class="button -default audit__button">ПОЛУЧИТЬ БЕСПЛАТНЫЙ АУДИТ</a>
        </div>
    </section><!--/. Audit End -->

    <!-- Smm Begin -->
    <section class="smm">
        <div class="container">
            <div class="section-header">
                <div class="section-header__title">4 ПРИЧИНrЫ, ПО КОТОРЫМ МЫ УВЕЛИЧИВАЕМ ПОТОК КЛИЕНТОВ И ГЕНЕРИРУЕМ ЛОЯЛЬНУЮ АУДИТОРИЮ</div>
            </div>
            <div class="row" vertical-gutter="30">
                <div class="col-md-6">
                    <div class="smm__item -bordered">
                        <div class="smm__icon">
                            <img src="static/img/general/ic-checkbox.svg" alt="">
                        </div>
                        <div class="smm__text">
                            Огромный опыт на рынке интернет-рекламы. Агентство 9 O’WEB помогает бизнесу развиваться с 2015 года.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smm__item -bordered">
                        <div class="smm__icon">
                            <img src="static/img/general/ic-checkbox.svg" alt="">
                        </div>
                        <div class="smm__text">
                            Никогда не даём пустых гарантий – каждый бизнес индивидуален и требует тестирования ниши, офферов, креативов и посадочных страниц.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smm__item -bordered">
                        <div class="smm__icon">
                            <img src="static/img/general/ic-checkbox.svg" alt="">
                        </div>
                        <div class="smm__text">
                            Перед началом работы проводим анализ рынка, конкурентный анализ, помогаем настроить аналитику, подготавливаем рекомендации для дальнейшего роста и развития.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smm__item -bordered">
                        <div class="smm__icon">
                            <img src="static/img/general/ic-checkbox.svg" alt="">
                        </div>
                        <div class="smm__text">
                            Мы боремся за пустые лайки, а за лояльную и отзывчивую аудиторию. Делаем не просто красиво, но и с умом.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/. Smm End -->

    <!-- Why Begin -->
    <section class="why" style="background-image: url('static/img/content/why-bg.jpg')">
        <div class="container">
            <div class="section-header">
                <div class="section-header__title">ПРИЧИНЫ ПО КОТОРЫМ НУЖНО РАБОТАТЬ С НАМИ? ПРИМЕРЫ НАШИХ РАБОТ</div>
            </div>
            <div class="why__desktop">
                <div class="why__card">
                    <ul class="nav why__tabs">
                        <li class="why__tabs-item">
                            <a class="why__tabs-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                            </a>
                        </li>
                        <li class="why__tabs-item">
                            <a class="why__tabs-link" data-toggle="tab" href="#tabs-2" role="tab">
                                <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                            </a>
                        </li>
                        <li class="why__tabs-item">
                            <a class="why__tabs-link" data-toggle="tab" href="#tabs-3" role="tab">
                                <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                            </a>
                        </li>
                        <li class="why__tabs-item">
                            <a class="why__tabs-link" data-toggle="tab" href="#tabs-4" role="tab">
                                <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                            </a>
                        </li>
                        <li class="why__tabs-item">
                            <a class="why__tabs-link" data-toggle="tab" href="#tabs-5" role="tab">
                                <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                            </a>
                        </li>
                        <li class="why__tabs-item">
                            <a class="why__tabs-link" data-toggle="tab" href="#tabs-6" role="tab">
                                <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                            </a>
                        </li>
                        <li class="why__tabs-item">
                            <a class="why__tabs-link" data-toggle="tab" href="#tabs-7" role="tab">
                                <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                            </a>
                        </li>
                        <li class="why__tabs-item">
                            <a class="why__tabs-link" data-toggle="tab" href="#tabs-8" role="tab">
                                <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                            </a>
                        </li>
                        <li class="why__tabs-item">
                            <a class="why__tabs-link" data-toggle="tab" href="#tabs-9" role="tab">
                                <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                    <div class="why__content tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="why__center">
                                <div class="why__text">
                                    <h2>Продвижение магазина спортивной обуви</h2>
                                    <h3>Цель:</h3>
                                    <div class="why__text-content">
                                        <p>С помощью SMM сделать <b>sneakerzzz</b> лидером среди магазинов спортивной обуви, несмотря на большую конкуренцию. При этом нам нужно было выполнить поставленный KPI по охвату и вовлеченности.</p>
                                        <h3>Решение:</h3>
                                        <ul>
                                            <li>фотосессия ассортимента</li>
                                            <li>запуск конкурсов</li>
                                            <li>прямые трансляции</li>
                                            <li>настройка рекламных кампаний</li>
                                            <li>подготовка баннеров и промо-материалов</li>
                                        </ul>
                                        <h3>Результат:</h3>
                                        <p>
                                            <strong style="color: #D46575">69 327</strong>
                                            <br>охват
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">683 035</strong>
                                            <br>показ
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">20 903</strong>
                                            <br>кликов
                                        </p>
                                    </div>
                                    <a href="#" onclick="changeMZ('Форма: СТАТЬ НАШИМ КЛИЕНТОМ')" data-target="#modal-cta" data-toggle="modal" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                </div>
                                <img src="static/img/content/insta.png" class="why__iphone">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="why__center">
                                <div class="why__text">
                                    <h2>Продвижение туристической компании “Smart tour”</h2>
                                    <h3>Цель:</h3>
                                    <div class="why__text-content">
                                        <p>С помощью Instagram донести до конечного потребителя мысль о том, что компания не только реализует горящие туры,  но и предоставляет максимальный уровень сервиса для клиентов.</p>
                                        <h3>Решение:</h3>
                                        <ul>
                                            <li>наполнение контентом по тематическим рубрикам</li>
                                            <li>проведение конкурсных механик</li>
                                            <li>отрабка клиентских возражении (CERM)</li>
                                            <li>сезонные акции для прогрева клиента</li>
                                            <li>разработка стратегии продвижения и настройка рекламных кампаний</li>
                                        </ul>
                                        <h3>Результат:</h3>
                                        <p>
                                            <strong style="color: #D46575">6 000</strong>
                                            <br> органической аудитории в месяц
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">2076</strong>
                                            <br>заявок
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">до 10%</strong>
                                            <br> рост конверсии
                                        </p>
                                    </div>
                                    <a href="#" onclick="changeMZ('Форма: СТАТЬ НАШИМ КЛИЕНТОМ')" data-target="#modal-cta" data-toggle="modal" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                </div>
                                <img src="static/img/content/insta.png" class="why__iphone">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="why__center">
                                <div class="why__text">
                                    <h2>Продвижение строительной компании “Novec”</h2>
                                    <h3>Цель:</h3>
                                    <div class="why__text-content">
                                        <p>Обновить визуальный ряд в корпоративном Instagram-аккаунте, наполнить интересным и информативным содержанием, и обеспечить приток вовлеченной аудитории.  </p>
                                        <h3>Решение:</h3>
                                        <ul>
                                            <li>работа с контентом</li>
                                            <li>обновление визуального ряда</li>
                                            <li>создание единого стиля публикаций</li>
                                            <li>внедрение чат-бота</li>
                                            <li>настройка и запуск таргетированной рекламы</li>
                                        </ul>
                                        <h3>Результат:</h3>
                                        <p>
                                            <strong style="color: #D46575"> 559 332</strong>
                                            <br>охват
                                        </p>
                                        <p>
                                            <strong style="color: #D46575"> 783 056</strong>
                                            <br>показ
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">23 903</strong>
                                            <br>кликов
                                        </p>
                                        <p>
                                            <strong style="color: #D46575"> 2,4 руб= 11 тг </strong>
                                            <br>тг/ клик
                                        </p>
                                    </div>
                                    <a href="#" onclick="changeMZ('Форма: СТАТЬ НАШИМ КЛИЕНТОМ')" data-target="#modal-cta" data-toggle="modal" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                </div>
                                <img src="static/img/content/insta.png" class="why__iphone">
                            </div>
                        </div>


                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="why__center">
                                <div class="why__text">
                                    <h2>Обновление визуального ряда онлайн-магазина оригинального парфюма “Parfume.kz”</h2>
                                    <h3>Цель:</h3>
                                    <div class="why__text-content">
                                        <p>В условиях перенасыщенного рынка парфюмерных онлайн-магазинов создать яркую и выделяющуюся страницу Instagram.</p>
                                        <h3>Решение:</h3>
                                        <ul>
                                            <li>разработка графических вижуалов</li>
                                            <li>поведение тематической фотосессии</li>
                                            <li>обработка фотографий товаров</li>
                                            <li>описание товарной линейки</li>
                                        </ul>
                                        <h3>Результат:</h3>
                                        <p>
                                            Приятный глазу визуальный стиль корпоративного профиля Instagram, наполненный ассортиментом товара и тематического контента, подчеркивающий его престижность и оригинальность.
                                        </p>
                                    </div>
                                    <a href="#" onclick="changeMZ('Форма: СТАТЬ НАШИМ КЛИЕНТОМ')" data-target="#modal-cta" data-toggle="modal" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                </div>
                                <img src="static/img/content/insta.png" class="why__iphone">
                            </div>
                        </div>

                        <div class="tab-pane" id="tabs-5" role="tabpanel">
                            <div class="why__center">
                                <div class="why__text">
                                    <h2>Продвижение логистической компании КРОМА ТРАНС</h2>
                                    <h3>Цель:</h3>
                                    <div class="why__text-content">
                                        <p> Упаковать корпоративный профиль Intagram и повысить узнаваемость компании на рынке РК и СНГ.</p>
                                        <h3>Решение:</h3>
                                        <ul>
                                            <li>добавлены тематические рубрики</li>
                                            <li>фотопродакшн</li>
                                            <li>настройка таргетированной рекламы</li>
                                            <li>работа с базой подписчиков</li>
                                        </ul>
                                        <h3>Результат:</h3>
                                        <p>
                                            Яркий и информативный профиль Instagram c тематическим содержанием и активной аудиторией.
                                        </p>
                                    </div>
                                    <a href="#" onclick="changeMZ('Форма: СТАТЬ НАШИМ КЛИЕНТОМ')" data-target="#modal-cta" data-toggle="modal" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                </div>
                                <img src="static/img/content/insta.png" class="why__iphone">
                            </div>
                        </div>

                        <div class="tab-pane" id="tabs-6" role="tabpanel">
                            <div class="why__center">
                                <div class="why__text">
                                    <h2>Продвижение танцевальной студии “Next step”</h2>
                                    <h3>Цель:</h3>
                                    <div class="why__text-content">
                                        <p>Увеличить количество подписчиков, привлечь потенциальных клиентов на уроки танцев в студию.</p>
                                        <h3>Решение:</h3>
                                        <ul>
                                            <li>фото и видеосъемка уроков</li>
                                            <li>настройка и запуск таргетированной рекламы</li>
                                            <li>постоянное взаимодействие с подписчиками</li>
                                            <li>организация конкурсных механик</li>
                                        </ul>
                                        <h3>Результат:</h3>
                                        <p>
                                            <strong style="color: #D46575">12 000 </strong>
                                            <br>активной аудитории
                                        </p>
                                        <p>
                                            <strong style="color: #D46575"> 229</strong>
                                            <br>Заявок в Директ
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">360 000</strong>
                                            <br>охват
                                        </p>
                                    </div>
                                    <a href="#" onclick="changeMZ('Форма: СТАТЬ НАШИМ КЛИЕНТОМ')" data-target="#modal-cta" data-toggle="modal" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                </div>
                                <img src="static/img/content/insta.png" class="why__iphone">
                            </div>
                        </div>

                        <div class="tab-pane" id="tabs-7" role="tabpanel">
                            <div class="why__center">
                                <div class="why__text">
                                    <h2>Продвижение магазина авторской детской одежды “baby.dress.ala” в Instagram</h2>
                                    <h3>Цель:</h3>
                                    <div class="why__text-content">
                                        <p>Увеличить продажи и привлечь живую аудиторию, рассказать про ассортимент магазина и вовлечь в наш контент.</p>
                                        <h3>Решение:</h3>
                                        <ul>
                                            <li>поработали над внешним видом профиля</li>
                                            <li>провели живые фотосессии</li>
                                            <li>проведение конкурсов</li>
                                            <li>определение ЦА</li>
                                            <li>настройка и запуск таргетированной рекламы</li>
                                        </ul>
                                        <h3>Результат:</h3>
                                        <p>
                                            <strong style="color: #D46575">2000</strong>
                                            <br>подписчиков за месяц
                                        </p>
                                        <p>
                                            <strong style="color: #D46575"> 113% </strong>
                                            <br> сохранении публикации
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">в 2 раза</strong>
                                            <br>увеличили объем продаж
                                        </p>
                                    </div>
                                    <a href="#" onclick="changeMZ('Форма: СТАТЬ НАШИМ КЛИЕНТОМ')" data-target="#modal-cta" data-toggle="modal" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                </div>
                                <img src="static/img/content/insta.png" class="why__iphone">
                            </div>
                        </div>

                        <div class="tab-pane" id="tabs-8" role="tabpanel">
                            <div class="why__center">
                                <div class="why__text">
                                    <h2>Продвижение фестиваля электронной музыки “Hype DJ fest”</h2>
                                    <h3>Цель:</h3>
                                    <div class="why__text-content">
                                        <p>Продвижение мероприятия на площадке Instagram, привлечение заинтересованных пользователь с целью приобрести билет на концерт.</p>
                                        <h3>Решение:</h3>
                                        <ul>
                                            <li>упаковка профиля Instagram</li>
                                            <li>разработка медийной и промо-кампаний</li>
                                            <li>определение целевой аудитории для таргетированной рекламы</li>
                                            <li>подготовка креативов для рекламной кампании</li>
                                            <li>настройка и запуск таргетированной рекламы</li>
                                        </ul>
                                        <h3>Результат:</h3>
                                        <p>
                                            <strong style="color: #D46575">80.000</strong>
                                            <br>охват
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">2500</strong>
                                            <br>Посетило
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">304 261</strong>
                                            <br>Показы рекламы
                                        </p>
                                    </div>
                                    <a href="#" onclick="changeMZ('Форма: СТАТЬ НАШИМ КЛИЕНТОМ')" data-target="#modal-cta" data-toggle="modal" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                </div>
                                <img src="static/img/content/insta.png" class="why__iphone">
                            </div>
                        </div>

                        <div class="tab-pane" id="tabs-9" role="tabpanel">
                            <div class="why__center">
                                <div class="why__text">
                                    <h2>Продвижение магазина брендовых джинсовых курток “youniq” </h2>
                                    <h3>Цель:</h3>
                                    <div class="why__text-content">
                                        <p>С помощью SMM сделать <b>sneakerzzz</b> лидером среди магазинов спортивной обуви, несмотря на большую конкуренцию. При этом нам нужно было выполнить поставленный KPI по охвату и вовлеченности.</p>
                                        <h3>Решение:</h3>
                                        <ul>
                                            <li>фотосессия ассортимента</li>
                                            <li>запуск конкурсов</li>
                                            <li>прямые трансляции</li>
                                            <li>настройка рекламных кампаний</li>
                                            <li>подготовка баннеров и промо-материалов</li>
                                        </ul>
                                        <h3>Результат:</h3>
                                        <p>
                                            <strong style="color: #D46575">69 327</strong>
                                            <br>охват
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">683 035</strong>
                                            <br>показ
                                        </p>
                                        <p>
                                            <strong style="color: #D46575">20 903</strong>
                                            <br>кликов
                                        </p>
                                    </div>
                                    <a href="#" onclick="changeMZ('Форма: СТАТЬ НАШИМ КЛИЕНТОМ')" data-target="#modal-cta" data-toggle="modal" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                </div>
                                <img src="static/img/content/insta.png" class="why__iphone">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="why__mobile">
                <div class="why__card">
                    <div class="why__slider">
                        <div class="swiper-container jsWhySlider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="why__logo">
                                        <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                                    </a>
                                    <div class="why__content">
                                        <h2>Проект по SMM #1</h2>
                                        <h3>Полное SMM продвижение “под ключ” в социальной сети Instagram</h3>
                                        <div class="why__text">
                                            <div class="why__text-content">
                                                <ul>
                                                    <li>Создание уникального контента и интерактивных публикаций;</li>
                                                    <li>Разработка графических вижуалов/обработка фото;</li>
                                                    <li>Съемка видео роликов и написание сценариев к ним;</li>
                                                    <li>Постоянно взаимодействие с подписчиками.</li>
                                                </ul>
                                                <p>
                                                    <strong style="color: #D46575">+6000</strong>
                                                    <br>Органической аудитории в месяц
                                                </p>
                                                <p>
                                                    <strong style="color: #D46575">+6000</strong>
                                                    <br>Заявок
                                                </p>
                                                <p>
                                                    <strong style="color: #D46575">до 10%</strong>
                                                    <br>Рост конверсии
                                                </p>
                                            </div>
                                            <img src="static/img/content/insta.png" class="why__iphone">
                                        </div>
                                        <a href="#" onclick="changeMZ('Форма: СТАТЬ НАШИМ КЛИЕНТОМ')" data-target="#modal-cta" data-toggle="modal" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="why__logo">
                                        <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                                    </a>
                                    <div class="why__content">
                                        <h2>Проект по SMM #1</h2>
                                        <h3>Полное SMM продвижение “под ключ” в социальной сети Instagram</h3>
                                        <div class="why__text">
                                            <div class="why__text-content">
                                                <ul>
                                                    <li>Создание уникального контента и интерактивных публикаций;</li>
                                                    <li>Разработка графических вижуалов/обработка фото;</li>
                                                    <li>Съемка видео роликов и написание сценариев к ним;</li>
                                                    <li>Постоянно взаимодействие с подписчиками.</li>
                                                </ul>
                                                <p>
                                                    <strong style="color: #D46575">+6000</strong>
                                                    <br>Органической аудитории в месяц
                                                </p>
                                                <p>
                                                    <strong style="color: #D46575">+6000</strong>
                                                    <br>Заявок
                                                </p>
                                                <p>
                                                    <strong style="color: #D46575">до 10%</strong>
                                                    <br>Рост конверсии
                                                </p>
                                            </div>
                                            <img src="static/img/content/insta.png" class="why__iphone">
                                        </div>
                                        <a href="#" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="why__logo">
                                        <img src="static/img/content/BVb3Wzn9orDR8mwVnhrSyd.jpg" alt="">
                                    </a>
                                    <div class="why__content">
                                        <h2>Проект по SMM #1</h2>
                                        <h3>Полное SMM продвижение “под ключ” в социальной сети Instagram</h3>
                                        <div class="why__text">
                                            <div class="why__text-content">
                                                <ul>
                                                    <li>Создание уникального контента и интерактивных публикаций;</li>
                                                    <li>Разработка графических вижуалов/обработка фото;</li>
                                                    <li>Съемка видео роликов и написание сценариев к ним;</li>
                                                    <li>Постоянно взаимодействие с подписчиками.</li>
                                                </ul>
                                                <p>
                                                    <strong style="color: #D46575">+6000</strong>
                                                    <br>Органической аудитории в месяц
                                                </p>
                                                <p>
                                                    <strong style="color: #D46575">+6000</strong>
                                                    <br>Заявок
                                                </p>
                                                <p>
                                                    <strong style="color: #D46575">до 10%</strong>
                                                    <br>Рост конверсии
                                                </p>
                                            </div>
                                            <img src="static/img/content/insta.png" class="why__iphone">
                                        </div>
                                        <a href="#" class="button -default mt-3">СТАТЬ НАШИМ КЛИЕНТОМ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="why__controls">
                            <button type="button" class="why__control -prev jsWhySliderPrev">Назад</button>
                            <div class="swiper-pagination jsWhyPagination"></div>
                            <button type="button" class="why__control -next jsWhySliderNext">Вперед</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/. Why End -->

    <!-- Plans Begin -->
    <section class="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-header__title">МЫ ПОДБЕРЕМ ОПТИМАЛЬНОЕ РЕШЕНИЕ ДЛЯ ВАШЕГО БИЗНЕСА В ЗАВИСИМОСТИ ОТ НИШИ</div>
            </div>
            <div class="row" vertical-gutter="30">
                <div class="col-lg-4">
                    <div class="plans__item">
                        <div class="plans__header">
                            <div class="plans__header-title">КОРПОРАТИВНЫЙ</div>
                            <div class="plans__header-price">149 000</div>
                            <div class="plans__header-subtitle">тенге в месяц</div>
                        </div>
                        <ul class="plans__list">
                            <li class="plans__list-item">Разработка стратегии</li>
                            <li class="plans__list-item">Брендирование и оформление</li>
                            <li class="plans__list-item">Контент-планирование</li>
                            <li class="plans__list-item">Модерация и работа с подписчиками</li>
                            <li class="plans__list-item"><strong>До 500 живых подписчиков</strong>
                            </li>
                            <li class="plans__list-item"><strong>Публикация до 12 постов и 12 stories (фото, видео)</strong>
                            </li>
                            <li class="plans__list-item"><strong>Дизайнер + Копирайтер + Менеджер проекта</strong>
                            </li>
                            <li class="plans__list-item -gift"><strong>1 анимационный ролик в подарок</strong>
                            </li>
                            <li class="plans__list-item -disabled"><strong>Настройка и запуск таргетированной рекламы</strong>
                            </li>
                            <li class="plans__list-item -disabled"><strong>Подбор и работа с блогерами</strong>
                            </li>
                            <li class="plans__list-item -disabled"><strong>Профессиональная фото- и видеосьемка</strong>
                            </li>
                        </ul>
                        <div class="plans__bottom">
                            <a href="#" onclick="changeMZ('Форма: ЗАКАЗАТЬ УСЛУГУ - КОРПОРАТИВНЫЙ')" data-target="#modal-cta" data-toggle="modal" class="button -default plans__button">ЗАКАЗАТЬ УСЛУГУ</a>
                            <p>скидка 50% на 3-й месяц ведения
                                <br>(при оплате за 3 месяца)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="plans__item">
                        <div class="plans__header">
                            <div class="plans__header-title">ПРОДВИНУТЫЙ</div>
                            <div class="plans__header-price">198 000</div>
                            <div class="plans__header-subtitle">тенге в месяц</div>
                        </div>
                        <ul class="plans__list">
                            <li class="plans__list-item">Разработка стратегии</li>
                            <li class="plans__list-item">Брендирование и оформление</li>
                            <li class="plans__list-item">Контент-планирование</li>
                            <li class="plans__list-item">Модерация и работа с подписчиками</li>
                            <li class="plans__list-item"><strong>До 1000 живых подписчиков</strong>
                            </li>
                            <li class="plans__list-item"><strong>Публикация до 20 постов и 20  stories (фото, видео)</strong>
                            </li>
                            <li class="plans__list-item"><strong>Дизайнер + Копирайтер + Менеджер проекта + Таргетолог</strong>
                            </li>
                            <li class="plans__list-item -gift"><strong>3 анимационных ролика в подарок</strong>
                            </li>
                            <li class="plans__list-item"><strong>Настройка и запуск таргетированной рекламы</strong>
                            </li>
                            <li class="plans__list-item -disabled"><strong>Подбор и работа с блогерами</strong>
                            </li>
                            <li class="plans__list-item -disabled"><strong>Профессиональная фото- и видеосьемка</strong>
                            </li>
                        </ul>
                        <div class="plans__bottom">
                            <a href="#" onclick="changeMZ('Форма: ЗАКАЗАТЬ УСЛУГУ - ПРОДВИНУТЫЙ')" data-target="#modal-cta" data-toggle="modal" class="button -default plans__button">ЗАКАЗАТЬ УСЛУГУ</a>
                            <p>скидка 50% на 3-й месяц ведения
                                <br>(при оплате за 3 месяца)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="plans__item">
                        <div class="plans__header">
                            <div class="plans__header-title">ИНСТАШОП</div>
                            <div class="plans__header-price">245 000</div>
                            <div class="plans__header-subtitle">тенге в месяц</div>
                        </div>
                        <ul class="plans__list">
                            <li class="plans__list-item">Разработка стратегии</li>
                            <li class="plans__list-item">Брендирование и оформление</li>
                            <li class="plans__list-item">Контент-планирование</li>
                            <li class="plans__list-item">Модерация и работа с подписчиками</li>
                            <li class="plans__list-item"><strong>До 1500 живых подписчиков</strong>
                            </li>
                            <li class="plans__list-item"><strong>Публикация до 30 постов и 30 stories (фото, видео)</strong>
                            </li>
                            <li class="plans__list-item"><strong>Дизайнер + Копирайтер + Менеджер проекта + Таргетолог + Фотограф</strong>
                            </li>
                            <li class="plans__list-item -gift"><strong>5 анимационных роликов в подарок</strong>
                            </li>
                            <li class="plans__list-item"><strong>Настройка и запуск таргетированной рекламы</strong>
                            </li>
                            <li class="plans__list-item"><strong>Подбор и работа с блогерами</strong>
                            </li>
                            <li class="plans__list-item"><strong>Профессиональная фото- и видеосьемка</strong>
                            </li>
                        </ul>
                        <div class="plans__bottom">
                            <a href="#" onclick="changeMZ('Форма: ЗАКАЗАТЬ УСЛУГУ - ИНСТАШОП')" data-target="#modal-cta" data-toggle="modal" class="button -default plans__button">ЗАКАЗАТЬ УСЛУГУ</a>
                            <p>скидка 50% на 3-й месяц ведения
                                <br>(при оплате за 3 месяца)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/. Plans End -->

    <!-- Audit Begin -->
    <section class="audit" style="background-image: url('static/img/content/audit-bg.jpg')">
        <div class="container">
            <div class="audit__title">Также, у нас есть персонально предложение для тех, кто хочет развивать личный бренд</div>
            <a href="#" onclick="changeMZ('Форма: ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ')" data-target="#modal-cta" data-toggle="modal" class="button -default audit__button">ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ</a>
        </div>
    </section><!--/. Audit End -->

    <!-- How It Works Begin -->
    <section class="hiw">
        <div class="container">
            <div class="section-header">
                <div class="section-header__title">КАК МЫ РАБОТАЕМ?</div>
            </div>
            <div class="hiw__list">
                <div class="hiw__item">
                    <div class="hiw__order">1</div>
                    <div class="hiw__content">
                        <div class="hiw__title">Заполнение брифа вместе с персональным менеджером</div>
                        <div class="hiw__text">На личной встрече знакомимся со спецификой вашего бизнеса, определяем цели и задачи, которые должны решаться с помощью социальных сетей, обсуждаем конкурентные преимущества.</div>
                    </div>
                </div>
                <div class="hiw__item">
                    <div class="hiw__order">2</div>
                    <div class="hiw__content">
                        <div class="hiw__title">Проводим исследование и разрабатываем стратегию продвижения в социальных сетях</div>
                        <div class="hiw__text">Мы внимательно изучаем ваших конкурентов, находя их слабые и сильные стороны, анализируем целевую аудиторию и подготавливаем подробную контент-стратегию.</div>
                    </div>
                </div>
                <div class="hiw__item">
                    <div class="hiw__order">3</div>
                    <div class="hiw__content">
                        <div class="hiw__title">Персональный куратор проекта</div>
                        <div class="hiw__text">После утверждения стратегии, ваш личный менеджер становится куратором проекта: он контролирует работу дизайнера, контент-менеджера, копирайтера, коммьюнити-менеджера (специалиста, который общается с подписчиками).</div>
                    </div>
                </div>
                <div class="hiw__item">
                    <div class="hiw__order">4</div>
                    <div class="hiw__content">
                        <div class="hiw__title">Создание и согласование конента</div>
                        <div class="hiw__text">Наши специалисты начинают создавать уникальный контент для ваших социальных сетей, разрабатывают вижуалы (креативы), пишут тексты. Каждый этап работ проходит согласование: сначала вы утверждаете оформление аккаунтов, затем
                            - каждую партию контента.</div>
                    </div>
                </div>
                <div class="hiw__item">
                    <div class="hiw__order">5</div>
                    <div class="hiw__content">
                        <div class="hiw__title">Сбор данных и составление отчета</div>
                        <div class="hiw__text">Вы регулярно получаете отчеты о проделанной работе и достигнутых KPI.</div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/. How It Works End -->

    <!-- Footer Begin -->
    <footer class="footer">
        <div class="section-header">
            <div class="section-header__title">ДАВАЙТЕ СОТРУДНИЧАТЬ</div>
        </div>
        <div class="footer__inner">
            <div class="container footer__container">
                <form class="footer__form">
                    <div class="control">
                        <input type="text" id="contname3" class="control__input" placeholder="Имя">
                    </div>
                    <div class="control">
                        <input type="text" oninput="proverkaPress(document.getElementById('contphone3'), document.getElementById('but3'))" class="control__input" id="contphone3" placeholder="+7 (***) ***-**-**">
                    </div>
                    <button type="button" id="but3" onclick="changeMZ('Форма: ДАВАЙТЕ СОТРУДНИЧАТЬ'); getAjax(document.getElementById('contname3').value, document.getElementById('contphone3').value, mazay)" class="button -default footer__button" disabled>Отправить</button>
                    <div class="footer__contacts">
                        г. Алматы, улица
                        <br>+7 (727) 2222222
                        <br>info@9oweb.kz
                    </div>
                    <div class="footer__social">
                        <a href="#" class="footer__social-link">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </form>
            </div>
            <div class="footer__map" id="map"></div>
            <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
            <script type="text/javascript">
                var map;

                DG.then(function () {
                    map = DG.map('map', {
                        center: [43.240533, 76.890699],
                        zoom: 14
                    });

                    DG.marker([43.238324, 76.907346]).addTo(map).bindPopup("9'Oweb 4 этаж 407 кабинет");;
                });
            </script>
        </div>
    </footer><!--/. Footer End -->

    <!-------------------------------- CONTENT ENDS HERE -------------------------------->

    <!-- Modals Begin -->
    <noindex>
        <script>var mazay="Форма: Оставить заявку";
            var emailpattern = /^[a-z0-9._-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
            var phonepatern = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;
            var telPress=0;

            function ff(value) {
                var OK = emailpattern.exec(value);
                if (!OK) { return 0; } else { return 1; }
            }

            function changeMZ(newstr) {
                mazay=newstr;
            }

            function ph(value) {
                var OK = phonepatern.exec(value);
                if (!OK) { return 0; }
                else { return 1; }
            }

            function nm(value) {
                if (value != '') return 1; else return 0;
            }

            function proverkaPress(element, element2) {
                telPress=ph(element.value);
                if(telPress==1) element2.disabled = false; else element2.disabled = true;
            }

            function getAjax(name, phone, formax, idform="#form1") {
                event.preventDefault();
                grecaptcha.ready(function() {
                    grecaptcha.execute('6Lf-z88UAAAAACDiIGK3avEuacChA06-h1xRrNCY', {action: 'create_comment'}).then(function(token) {
                        // add token to form
                        $(idform).prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                        $.post("/contact.php",{'name': name, 'phone': phone, 'formax': formax, 'token': token}, function(result) {
                            console.log(result);
                            if(result.success) {
                               // alert('Thanks for posting comment.')
                            } else {
                               // alert('You are spammer ! Get the @$%K out.')
                            }
                        });
                    });;
                });
            }
        </script>
        <!-- Modal Cta Begin -->
        <div id="modal-cta" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&#10005;</span>
                    </button>
                    <form class="form" id="form1">
                        <h2 class="form__title">ОСТАВЬТЕ ЗАЯВКУ</h2>
                        <div class="control">
                            <input type="text" name="name" id="contname1" class="control__input js-name is-required" placeholder="Имя">
                        </div>
                        <div class="control">
                            <input type="text" name="phone" id="contphone1" oninput="proverkaPress(document.getElementById('contphone1'), document.getElementById('but1'))" class="control__input js-phone is-required" placeholder="Телефон">
                        </div>
                        <button type="button" id="but1" onclick="getAjax(document.getElementById('contname1').value, document.getElementById('contphone1').value, mazay)" class="button form__button" data-dismiss="modal" data-target="#modal-success" data-toggle="modal" disabled>Оставить заявку</button>
                    </form>
                </div>
            </div>
        </div>
        <!--/. Modal Cta End -->

        <!-- Modal Success Begin -->
        <div id="modal-success" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&#10005;</span>
                    </button>
                    <div class="modal__success">
                        <h2 class="modal__title">Спасибо!</h2>
                        <div class="modal__subtitle">Наш менеджер перезвонит Вам!</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/. Modal Success End -->

        <!-- Video Bodal Begin -->
        <div class="video-modal">

            <!-- Modal Content Wrapper -->
            <div id="video-modal-content" class="video-modal-content">

                <!-- iframe -->
                <iframe id="youtube" width="100%" height="100%" frameborder="0" allowfullscreen src=></iframe>
                <a href="#" class="close-video-modal">

                    <!-- X close video icon -->
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 32 32" xml:space="preserve" width="24" height="24">
                        <g id="icon-x-close">
                            <path fill="#ffffff" d="M30.3448276,31.4576271 C29.9059965,31.4572473 29.4852797,31.2855701 29.1751724,30.980339 L0.485517241,2.77694915 C-0.122171278,2.13584324 -0.104240278,1.13679247 0.52607603,0.517159487 C1.15639234,-0.102473494 2.17266813,-0.120100579 2.82482759,0.477288136 L31.5144828,28.680678 C31.9872448,29.1460053 32.1285698,29.8453523 31.8726333,30.4529866 C31.6166968,31.0606209 31.0138299,31.4570487 30.3448276,31.4576271 Z"
                            id="Shape"></path>
                            <path fill="#ffffff" d="M1.65517241,31.4576271 C0.986170142,31.4570487 0.383303157,31.0606209 0.127366673,30.4529866 C-0.12856981,29.8453523 0.0127551942,29.1460053 0.485517241,28.680678 L29.1751724,0.477288136 C29.8273319,-0.120100579 30.8436077,-0.102473494 31.473924,0.517159487 C32.1042403,1.13679247 32.1221713,2.13584324 31.5144828,2.77694915 L2.82482759,30.980339 C2.51472031,31.2855701 2.09400353,31.4572473 1.65517241,31.4576271 Z"
                            id="Shape"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <!-- end modal content wrapper -->

            <!-- clickable overlay element -->
            <div class="overlay"></div>

        </div>
        <!--/. Video Modal End -->

    </noindex>
    <!--/. Modals End -->

    <!-- Main scripts. You can replace it, but I recommend you to leave it here -->
    <script src="static/js/main.js"></script>
    <script src="static/js/separate-js/scripts.js"></script>

</body>
</html>
