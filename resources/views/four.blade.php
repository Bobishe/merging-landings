<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/four/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/four/css/style.css') }}">
    <link rel="preload" href="{{ asset('assets/four/fonts/Montserrat-Regular.ttf') }}" as="font" crossorigin>
    <link rel="preload" href="{{ asset('assets/four/fonts/Montserrat-Medium.ttf') }}" as="font" crossorigin>
    <link rel="preload" href="{{ asset('assets/four/fonts/Montserrat-Bold.ttf') }}" as="font" crossorigin>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/four/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/four/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/four/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/four/images/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/four/images/favicons/safari-pinned-tab.svg') }}" color="#4d6aff">
    <link rel="shortcut icon" href="{{ asset('assets/four/images/favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="/{{ asset('assets/four/images/favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <title>ПРО Ремонт – Ремонт духовых шкафов на дому</title>
    <meta name="description"
          content="Ремонт духовых шкафов на дому! Диагностика неисправности, замена любых деталей">


    <link rel="stylesheet" href="{{ asset('assets/header/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header/my_css.css') }}">

</head>
<body>



{{--Окно благодарности на нативном js--}}

<div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 99999999">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="myModalLabel">Спасибо!</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-envelope-check-fill" viewBox="0 0 16 16" style="color: green; margin-left: auto; margin-right: auto">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                    <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                </svg>
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Ваш запрос успешно обработан, ожидайте звонка.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>



<nav class="fixed-top  navbar navbar-expand-lg navbar-light border-bottom d-flex flex-column bg-light">
    <div class="container justify-content-between w-100 d-flex align-items-center">
        <div class="d-flex">
            <img src="{{asset('assets/header/logo.png')}}" alt="logo">
            <div class="d-flex flex-column">
                <p style="font-size: 18px;"><strong>Ремонт бытовой техники</strong></p>
                <p>Сервисный центр</p>
            </div>
        </div>
        <button type="button" id="my_btn" class="btn btn-outline-success align-middle"
                style="height: 60%; display: none"
                data-toggle="modal" data-target="#callback">
            <strong>Заказать ремонт</strong></button>
    </div>


    <div class="container-fluid">
        <button class="navbar-toggler" style="margin-left: auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-left: auto; margin-right: auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false" style="color: black">
                        Ремонт бытовой техники
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item link-dark" href="/">Ремонт бытовой техники (главная)</a></li>
                        <li><a class="dropdown-item link-dark" href="/tv">Ремонт телевизоров</a></li>
                        <li><a class="dropdown-item link-dark" href="/pc">Ремонт компьютеров и моноблоков</a></li>
                        <li><a class="dropdown-item link-dark" href="/fridge">Ремонт холодильников</a></li>
                        <li><a class="dropdown-item link-dark" href="/washing_machine">Ремонт стиральных машин</a></li>
                        <li><a class="dropdown-item link-dark" href="/dishwasher">Ремонт посудомоечных машин</a></li>
                        <li><a class="dropdown-item link-dark" href="/coffee_machine">Ремонт кофемашин</a></li>
                        <li><a class="dropdown-item link-dark" href="/coffee_machine_2">Ремонт кофемашин</a></li>
                        <li><a class="dropdown-item link-dark" href="/hob">Ремонт варочных панелей</a></li>
                        <li><a class="dropdown-item link-dark" href="/four">Ремонт духовых шкафов</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#prices" style="color: black">Цены</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#reviews" style="color: black">Отзывы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/company" style="color: black">Компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts" style="color: black">Контакты</a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<!-- BEGIN MODALS -->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="callbackLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-wrap">
                <div class="modal-header">
                    <h5 class="modal-title" id="callbackLabel">
                        Оставьте заявку и мы свяжемся
                        с Вами <span class="blue">в течение 3-х минут!</span>
                    </h5>
                </div>
                <div class="modal-body">

                    <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                        <span>
              <input type="hidden" name="formname" value="">
            </span>
                        <span class="form-control-wrap">
              <input type="text" class="form-control" placeholder="Ваше имя" name="fullname">
            </span>
                        <span class="form-control-wrap">
              <input type="tel" class="form-control mask-phone" placeholder="Ваш телефон" name="phone" required>
            </span>
                        <button type="submit" class="btn btn-success align-middle" style="font-size: 20px;">Оставить
                            заявку
                        </button>

                        <input type="hidden" name="branch_id" value="0">
                        <input type="hidden" name="is_pm" value="false">
                        <input type="hidden" name="thread_id" value="37892">
                        <input type="hidden" name="thread_type" value="3">
                        <input type="hidden" name="sub_id1" value="">
                        <input type="hidden" name="sub_id2" value="">
                        <input type="hidden" name="sub_id3" value="">
                        <input type="hidden" name="direction_id" value="2">


                    </form>

                    <small class="form-text">
                        Заполняя указанное выше поле, я даю <a href="/personal_data">согласие на обработку персональных
                            данных</a>.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="successLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-wrap">
                <div class="modal-header">
                    <h5 class="modal-title" id="successLabel">
                        Спасибо
                    </h5>
                    <h6 class="modal-subtitle">
                        Мы перезвоним вам в течение 3 минут
                    </h6>
                </div>
                <div class="modal-body">
                    <button type="submit" class="btn btn-blue" data-dismiss="modal" aria-label="Close">Хорошо</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END MODALS-->


<section class="heroscreen">
    <div class="contenter heroscreen__contenter">
        <h1 class="page-title heroscreen__title">Ремонт духовых шкафов на дому</h1>
        <div class="heroscreen__advantages">
            <article class="heroscreen__advantages-item"><img class="heroscreen__advantages-item-bullet"
                                                              src="{{ asset('assets/four/images/check.svg') }}"><span
                    class="heroscreen__advantages-item-text">Выезд и диагностика - <b>бесплатно</b>, при дальнейшем ремонте у нас</span>
            </article>
            <article class="heroscreen__advantages-item"><img class="heroscreen__advantages-item-bullet"
                                                              src="{{ asset('assets/four/images/check.svg') }}"><span
                    class="heroscreen__advantages-item-text">Гарантия <b>до 2 лет</b> на отдельные виды работ</span>
            </article>
            <article class="heroscreen__advantages-item"><img class="heroscreen__advantages-item-bullet"
                                                              src="{{ asset('assets/four/images/check.svg') }}"><span
                    class="heroscreen__advantages-item-text">Быстро <b>ремонтируем технику на месте</b>, если случай сложный — доставляем в мастерскую</span>
            </article>
            <article class="heroscreen__advantages-item"><img class="heroscreen__advantages-item-bullet"
                                                              src="{{ asset('assets/four/images/check.svg') }}"><span
                    class="heroscreen__advantages-item-text">Используем <b>оригинальные запчасти</b> или их качественные аналоги</span>
            </article>
        </div>
        <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">
            <h3 class="subtitle heroscreen__form-title">Срочный выезд<br> мастера за час</h3>
            <div class="heroscreen__form-fields">
                <input class="input heroscreen__form-input" type="text" name="fullname" placeholder="Имя">
                <input class="input heroscreen__form-input" type="tel" name="phone" placeholder="+7 (___) ___-__-__"
                       data-inputmask="'mask': '+7 (999) 999-99-99'" required>
                <button class="button heroscreen__form-button" type="submit">Вызвать мастера
                </button>
            </div>
            <input type="hidden" name="description" value="Скидка 15% при заказе ремонта через сайт">


            <input type="hidden" name="branch_id" value="0">
            <input type="hidden" name="is_pm" value="false">
            <input type="hidden" name="thread_id" value="37892">
            <input type="hidden" name="thread_type" value="3">
            <input type="hidden" name="sub_id1" value="">
            <input type="hidden" name="sub_id2" value="">
            <input type="hidden" name="sub_id3" value="">
            <input type="hidden" name="direction_id" value="2">

        </form>
    </div>
</section>
<section class="about">
    <div class="contenter about__contenter">
        <h2 class="title about__title">
            <b>Качественный ремонт</b> духовых<br> шкафов любой сложности</h2>
        <div class="about__informer">
            <article class="about__informer-article">Мы&nbsp;гарантируем качественный ремонт при обращении в&nbsp;нашу
                мастерскую. Это возможно потому, что наши специалисты знают все нюансы устройства бытовой техники и&nbsp;владеют
                всеми необходимыми для работы сертификатами. У&nbsp;нас есть оборудованный склад с&nbsp;большим набором
                запчастей, поэтому мы&nbsp;можем выполнить ремонт прямо у&nbsp;вас дома. Если поломка требует особого
                внимания, мы&nbsp;заберем технику в&nbsp;сервисный центр, отремонтируем и&nbsp;дадим гарантию на&nbsp;работы.
            </article>
            <span class="about__informer-text">Умеем работать со всеми популярными и редкими<br> брендами духовых шкафов:</span>
        </div>
        <div class="about__advantages">
            <article class="about__advantages-item">
                <div class="about__advantages-item-icon"><img class="about__advantages-item-image"
                                                              src="{{ asset('assets/four/images/about__advantages-image-1.png') }}">
                </div>
                <span class="about__advantages-item-text">Успешно выполнили <b>более 968 ремонтов</b></span>
            </article>
            <article class="about__advantages-item">
                <div class="about__advantages-item-icon"><img class="about__advantages-item-image"
                                                              src="{{ asset('assets/four/images/about__advantages-image-2.png') }}">
                </div>
                <span class="about__advantages-item-text">У нас работают только <b>опытные мастера</b></span>
            </article>
            <article class="about__advantages-item">
                <div class="about__advantages-item-icon"><img class="about__advantages-item-image"
                                                              src="{{ asset('assets/four/images/about__advantages-image-3.png') }}">
                </div>
                <span class="about__advantages-item-text">В 94% случаев производим <b>ремонт за 1 выезд</b></span>
            </article>
        </div>
        <div class="about__brands"><img class="about__brands-image"
                                        src="{{ asset('assets/four/images/about__brands-image-1.png') }}"><img
                class="about__brands-image" src="{{ asset('assets/four/images/about__brands-image-2.png') }}"><img
                class="about__brands-image" src="{{ asset('assets/four/images/about__brands-image-3.png') }}"><img
                class="about__brands-image" src="{{ asset('assets/four/images/about__brands-image-4.png') }}"><img
                class="about__brands-image" src="{{ asset('assets/four/images/about__brands-image-5.png') }}"></div>
    </div>
</section>
<section class="prices" id="prices">
    <header class="contenter prices__header">
        <h2 class="title"><b>Цены на ремонт </b>духовых шкафов<span class="title__subtitle">Цена ремонта зависит от бренда техники, вида и сложности неисправности. В таблицах ниже приведены минимальные цены работ на частые виды поломок. Диагностика и выезд мастера бесплатный, при условии дальнейшего ремонта у нас.</span>
        </h2>
    </header>
    <div class="contenter prices__contenter">
        <div class="pricelist prices__pricelist">
            <header class="pricelist__header">
                <div class="pricelist__header-item">Услуга</div>
                <div class="pricelist__header-item">Цена</div>
            </header>

            <div class="pricelist__item">
                    <span class="pricelist__item-title">

                    </span>
                <span class="pricelist__item-value">

                    </span>
                <button class="pricelist__item-button" data-toggle="modal" data-target="#callback">
                    Заказать
                </button>
            </div>

        </div>
        <div class="prices__informer">
            <h5 class="prices__informer-title">Принимаем к оплате</h5>
            <article class="prices__informer-item"><img class="prices__informer-item-image"
                                                        src="{{ asset('assets/four/images/prices__informer-image-1.png') }}"><span
                    class="prices__informer-item-text">Наличные</span></article>
            <article class="prices__informer-item"><img class="prices__informer-item-image"
                                                        src="{{ asset('assets/four/images/prices__informer-image-2.pn') }}g"><span
                    class="prices__informer-item-text">VISA</span></article>
            <article class="prices__informer-item"><img class="prices__informer-item-image"
                                                        src="{{ asset('assets/four/images/prices__informer-image-3.png') }}"><span
                    class="prices__informer-item-text">MASTERCARD</span></article>
            <div class="prices__informer-footer">
                Нашли цены дешевле? Дадим скидку!<br class="safe"> Звоните <b><a class="prices__informer-footer-phone"
                                                                                 href=""></a></b>
            </div>
        </div>
        <form class="prices__form sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">
            <h3 class="subtitle prices__form-title">Рассчитать точную стоимость ремонта, а также вызвать мастера или
                получить консультацию можно с помощью формы</h3>
            <div class="prices__form-fields">
                <input class="input prices__form-input" type="text" name="fullname" placeholder="Имя">
                <input class="input prices__form-input" type="tel" name="phone" placeholder="+7 (___) ___-__-__"
                       data-inputmask="'mask': '+7 (999) 999-99-99'" required>
                <button class="button button--accent prices__form-button" type="submit">Вызвать мастера
                </button>
            </div>
            <div class="prices__form-privicy">Отправляя свои данные, вы соглашаетесь с <a
                    href="{{ asset('assets/four/policy.pdf') }}">обработкой
                    персональных данных</a></div>
            <input type="hidden" name="description" value="Скидка 15% при заказе ремонта через сайт">

            <input type="hidden" name="branch_id" value="0">
            <input type="hidden" name="is_pm" value="false">
            <input type="hidden" name="thread_id" value="37892">
            <input type="hidden" name="thread_type" value="3">
            <input type="hidden" name="sub_id1" value="">
            <input type="hidden" name="sub_id2" value="">
            <input type="hidden" name="sub_id3" value="">
            <input type="hidden" name="direction_id" value="2">


        </form>
    </div>
</section>
<section class="advantages" id="advantages">
    <div class="contenter advantages__contenter">
        <h2 class="title advantages__title">Почему стоит <b>обратиться в&nbsp;&laquo;ПРО Ремонт&raquo;&nbsp;&mdash;</b>
            лучший способ починить духовой шкаф.</h2>
        <article class="advantages__article">
            <h3 class="advantages__article-title">Монобрендовый сервис</h3>
            <ul class="advantages__article-list">
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon--unchecked"
                         role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-uncheck') }}"></use>
                    </svg>
                    Работает только с&nbsp;определенным брендом техники
                </li>
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon--unchecked"
                         role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-uncheck') }}"></use>
                    </svg>
                    Нужно доставлять технику в&nbsp;сервис самостоятельно
                </li>
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon--unchecked"
                         role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-uncheck') }}"></use>
                    </svg>
                    Зачастую, цены выше рынка
                </li>
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon" role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-check') }}"></use>
                    </svg>
                    Гарантия по&nbsp;договору
                </li>
            </ul>
        </article>
        <article class="advantages__article advantages__article--accent"><img class="advantages__article-label"
                                                                              src="{{ asset('assets/four/images/advantages__article-label.svg') }}">
            <h3 class="advantages__article-title">ПРО Ремонт</h3>
            <hr class="advantages__article-line">
            <ul class="advantages__article-list">
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon" role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-check') }}"></use>
                    </svg>
                    Мастера умеют работать с&nbsp;широким спектром техники и&nbsp;различными брендами
                </li>
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon" role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-check') }}"></use>
                    </svg>
                    Выезд специалиста за&nbsp;1&nbsp;час
                </li>
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon" role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-check') }}"></use>
                    </svg>
                    Доступные цены
                </li>
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon" role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-check') }}"></use>
                    </svg>
                    Доступные цены
                </li>
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon" role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-check') }}"></use>
                    </svg>
                    Выдаем договор им&nbsp;гарантию
                </li>
            </ul>
            <button class="button advantages__article-button" data-toggle="modal" data-target="#callback">Вызвать
                мастера
            </button>
        </article>
        <article class="advantages__article">
            <h3 class="advantages__article-title">Частный мастер</h3>
            <ul class="advantages__article-list">
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon--unchecked"
                         role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-uncheck') }}"></use>
                    </svg>
                    С&nbsp;какими-то брендами работал, с&nbsp;какими-то&nbsp;&mdash; нет
                </li>
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon--unchecked"
                         role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-uncheck') }}"></use>
                    </svg>
                    Приедет, когда сможет, а&nbsp;не&nbsp;когда удобно вам
                </li>
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon--unchecked"
                         role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-uncheck') }}"></use>
                    </svg>
                    Мелкие запчасти есть, крупные детали будет искать в&nbsp;магазине
                </li>
                <li class="advantages__article-list-item">
                    <svg class="icon advantages__article-list-item-icon advantages__article-list-item-icon--unchecked"
                         role="icon">
                        <use xlink:href="{{ asset('assets/four/images/sprite.svg#bullet-uncheck') }}"></use>
                    </svg>
                    Зачастую, по&nbsp;вопросам гарантии не&nbsp;дозвониться
                </li>
            </ul>
        </article>
    </div>
</section>
<section class="steps" id="steps">
    <header class="contenter steps__header"><img class="steps__header-image"
                                                 src="{{ asset('assets/four/images/steps__header-image.png') }}">
        <h2 class="title steps__title"><b>Как мы работаем</b>
            <spna class="title__subtitle">Качественный ремонт духовых шкафов <b>за 5 шагов</b></spna>
        </h2>
    </header>
    <div class="contenter steps__content">
        <article class="steps__item">
            <div class="steps__item-count">1</div>
            <span class="steps__item-text">Вы оставляете заявку на сайте или по телефону, мы связываемся с вами, называем цену и срок приезда мастера</span>
            <svg class="icon steps__item-pointer" role="icon">
                <use xlink:href="{{ asset('assets/four/images/sprite.svg#pointer-right') }}"></use>
            </svg>
        </article>
        <article class="steps__item">
            <div class="steps__item-count">2</div>
            <span class="steps__item-text">К&nbsp;вам выезжает мастер и&nbsp;проводит диагностику. Это бесплатно, при дальнейшем ремонте у&nbsp;нас</span>
            <svg class="icon steps__item-pointer" role="icon">
                <use xlink:href="{{ asset('assets/four/images/sprite.svg#pointer-right') }}"></use>
            </svg>
        </article>
        <article class="steps__item">
            <div class="steps__item-count">3</div>
            <span
                class="steps__item-text">Мастер производит ремонт у&nbsp;вас дома, используя оригинальные запчасти</span>
            <svg class="icon steps__item-pointer" role="icon">
                <use xlink:href="{{ asset('assets/four/images/sprite.svg#pointer-right') }}"></use>
            </svg>
        </article>
        <article class="steps__item">
            <div class="steps__item-count">4</div>
            <span class="steps__item-text">После завершения ремонта вы принимаете работу, убеждаетесь в устранении неисправности и качестве услуг</span>
            <svg class="icon steps__item-pointer" role="icon">
                <use xlink:href="{{ asset('assets/four/images/sprite.svg#pointer-right') }}"></use>
            </svg>
        </article>
        <article class="steps__item">
            <div class="steps__item-count">5</div>
            <span class="steps__item-text">Оплачиваете работу картой или наличными, мы&nbsp;выдаём чек и&nbsp;гарантию до&nbsp;24&nbsp;месяцев</span>
        </article>
    </div>
</section>
<section class="map">
    <div id="yamap"
         style="background: url(https://img.global.news.samsung.com/ru/wp-content/uploads/2019/02/02_Dual_Cook_Flex_Flexibility_pc_1.jpg) no-repeat center / cover">

    </div>
    <div class="contenter map__contenter">
        <article class="map__article">
            <h3 class="subtitle map__article-title">Починим ваш духовой шкаф уже сегодня!</h3>
            <ul class="map__article-list">
                <li class="map__article-list-item">Выполнено ремонтов за сегодня: <b>24</b></li>
                <li class="map__article-list-item">Мастеров на линии: <b>15</b></li>
                <li class="map__article-list-item">Свободных мастеров: <b>5</b></li>
                <li class="map__article-list-item">Среднее время прибытия мастера: <b>~39 минут</b></li>
            </ul>
            <a class="map__article-phone" href=""></a>
            <button class="button map__article-button" data-toggle="modal" data-target="#callback">Вызвать мастера
            </button>
        </article>
    </div>
</section>
<section class="reviews" id="reviews">
    <header class="contenter reviews__header">
        <h2 class="title reviews__title"><b>Что о&nbsp;нас говорят клиенты</b></h2>
    </header>
    <div class="contenter reviews__content">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <article class="reviews__item">
                    <header class="reviews__item-header">Елена Александрова</header>
                    <div class="reviews__item-content">
                        <div class="reviews__item-type">Неисправность духового шкафа</div>
                        <p class="reviews__item-text">Заказывала здесь ремонт духового шкафа, нужно было прямо срочно.
                            Мастер приехал, диагностику провел, как обещано, бесплатно, все починил и&nbsp;дал гарантию.
                            Спасибо!</p>
                    </div>
                </article>
            </div>
            <div class="swiper-slide">
                <article class="reviews__item">
                    <header class="reviews__item-header">Андрей Кукурев</header>
                    <div class="reviews__item-content">
                        <div class="reviews__item-type">Сломалась духовка</div>
                        <p class="reviews__item-text">Точно буду рекомендовать мастерскую. Вызывал жене мастера, сам не&nbsp;мог
                            духовку починить. Он&nbsp;справился, грамотный специалист и&nbsp;цена адекватная, и&nbsp;гарантию
                            дали. Спасибо за&nbsp;хорошую работу</p>
                    </div>
                </article>
            </div>
            <div class="swiper-slide">
                <article class="reviews__item">
                    <header class="reviews__item-header">Марченко Александр</header>
                    <div class="reviews__item-content">
                        <div class="reviews__item-type">Духовка не включалась</div>
                        <p class="reviews__item-text">Сам решил выполнить ремонт духовки и&nbsp;она престала включаться,
                            даже не&nbsp;смог понять, что произошло. В&nbsp;срочном порядке вызвал отсюда мастера, за&nbsp;час
                            приехал и&nbsp;работу свою выполнил на&nbsp;5+</p>
                    </div>
                </article>
            </div>
            <div class="swiper-slide">
                <article class="reviews__item">
                    <header class="reviews__item-header">Зина К.</header>
                    <div class="reviews__item-content">
                        <div class="reviews__item-type">Замена лампочки духовки</div>
                        <p class="reviews__item-text">Звонила сюда, чтобы вызвать мастера по&nbsp;ремонту духового шкафа
                            на&nbsp;дом. Менял мне перегоревшую лампочку и&nbsp;заодно провел плановую проверку. Все
                            работает хорошо и&nbsp;даже лучше, супер!</p>
                    </div>
                </article>
            </div>
            <div class="swiper-slide">
                <article class="reviews__item">
                    <header class="reviews__item-header">Алена Шукшина</header>
                    <div class="reviews__item-content">
                        <div class="reviews__item-type">Духовка плохо пекла</div>
                        <p class="reviews__item-text">Хочу выразить большую благодарность мастерам сервиса за&nbsp;ремонт
                            духовки Bosh. Работали с&nbsp;элементами нагревания, отлично выполнили работу и&nbsp;дали
                            гарантию на&nbsp;2&nbsp;года. Всем доволен, советую.</p>
                    </div>
                </article>
            </div>
            <div class="swiper-slide">
                <article class="reviews__item">
                    <header class="reviews__item-header">Иванова Анна</header>
                    <div class="reviews__item-content">
                        <div class="reviews__item-type">Сломалась электроника</div>
                        <p class="reviews__item-text">При переезде залили духовку, пришлось обращаться в&nbsp;сервис.
                            Выбирали выездной, потому что она огромная и&nbsp;перевозить долго и&nbsp;неудобно. Мастера
                            здесь быстро и&nbsp;качественно помогли, при этом за&nbsp;нормальные деньги, спасибо.</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="swiper-navigation">
            <button class="swiper-button swiper-button-prev">
                <svg class="icon swiper-button-icon" role="icon">
                    <use xlink:href="{{ asset('assets/four/images/sprite.svg#arrow-left') }}"></use>
                </svg>
            </button>
            <button class="swiper-button swiper-button-next">
                <svg class="icon swiper-button-icon" role="icon">
                    <use xlink:href="{{ asset('assets/four/images/sprite.svg#arrow-right') }}"></use>
                </svg>
            </button>
        </div>
    </div>

</section>
<section class="finally">
    <div class="contenter finally__contenter">
        <form class="finally__form sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">
            <h3 class="subtitle finally__form-title">Скидка 15% при заказе ремонта через сайт</h3><span
                class="finally__form-subtitle">Закажите ремонт духового шкафа сейчас<br> и получите максимальную выгоду!</span>
            <input class="input finally__form-input" type="text" name="fullname" placeholder="Имя">
            <input class="input finally__form-input" type="tel" name="phone" placeholder="+7 (___) ___-__-__"
                   data-inputmask="'mask': '+7 (999) 999-99-99'" required>
            <button class="button button--accent finally__form-button" type="submit">Вызвать мастера
            </button>
            <input type="hidden" name="description" value="Скидка 15% при заказе ремонта через сайт">


            <input type="hidden" name="branch_id" value="0">
            <input type="hidden" name="is_pm" value="false">
            <input type="hidden" name="thread_id" value="37892">
            <input type="hidden" name="thread_type" value="3">
            <input type="hidden" name="sub_id1" value="">
            <input type="hidden" name="sub_id2" value="">
            <input type="hidden" name="sub_id3" value="">
            <input type="hidden" name="direction_id" value="2">


        </form>
        <img class="finally__image" src="{{ asset('assets/four/images/finally__image.png') }}">
    </div>
</section>
<div class="container">
    <footer class="py-3 my-4">
        <p class="text-center text-muted">&copy; 2023 Ремонт бытовой техники</p>
    </footer>
</div>


<script src="https://lk.newapi.ru/stat/37892/js"></script>
<script src="{{asset('assets/send_lead.js')}}"></script>


<script src="{{ asset('assets/four/js/vendor.js') }}"></script>
<script src="{{ asset('assets/four/js/script.js') }}"></script>


<script src="{{ asset('assets/four/node_modules/inputmask/dist/inputmask.min.js') }}"></script>
<script src="{{ asset('assets/four/node_modules/inputmask/dist/bindings/inputmask.binding.js') }}"></script>


<script src="{{ asset('assets/four/lib/lib.js') }}"></script>

<!-- Yandex.Metrika counter -->


<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"
        integrity="sha256-HQCkPjsckBtmO60xeZs560g8/5v04DvOkyEo01zhSpo=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="{{ asset('assets/header/bootstrap.js') }}"></script>
<script src="{{ asset('assets/header/js/script.js') }}"></script>
<script src="{{ asset('assets/header/js/vendor.js') }}"></script>
<script src="{{ asset('assets/header/js/my_script.js') }}"></script>


<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"
        integrity="sha256-HQCkPjsckBtmO60xeZs560g8/5v04DvOkyEo01zhSpo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"
        integrity="sha256-HQCkPjsckBtmO60xeZs560g8/5v04DvOkyEo01zhSpo=" crossorigin="anonymous"></script>

<script>
    var city = {"id": 777, "name": "", "country": ""};
    var thread = {
        "id": 37606,
        "part_id": 25308,
        "hash": null,
        "idp": "d515ed05-cc50-d0a7-48c025ced3bac5ab",
        "title": "\u0420\u0435\u043c\u043e\u043d\u0442 \u0431\u044b\u0442\u043e\u0432\u043e\u0439 \u0442\u0435\u0445\u043d\u0438\u043a\u0438 \u041b\u0435\u043d\u0434 1",
        "type": 2,
        "is_pm": 0,
        "tool_type": 1,
        "tool_id": 5,
        "created_at": "2023-08-03 20:22:15",
        "updated_at": "2023-08-04 14:08:23",
        "archived_at": null,
        "data": {
            "inn": null,
            "tel": null,
            "ogrn": null,
            "fp_id": null,
            "ga_id": null,
            "mg_id": null,
            "tt_id": null,
            "vp_id": null,
            "ym_id": null,
            "zd_id": null,
            "domain": "rem-fast.ru",
            "gtm_id": null,
            "city_id": ["auto"],
            "subid_1": null,
            "subid_2": null,
            "subid_3": null,
            "yuraddr": null,
            "yurname": null,
            "lkVersion": "sl",
            "show_city": "no",
            "direction_id": 2,
            "new_offer_id": 0,
            "trafficSources": "\u042f\u043d\u0434\u0435\u043a\u0441.\u0414\u0438\u0440\u0435\u043a\u0442",
            "use_lead_proxy": "yes",
            "form_add_modals": "0",
            "form_modal_delay": null,
            "form_modal_header": null,
            "form_modal_btn_text": null,
            "form_add_phonemodals": "0",
            "form_modal_subheader": null,
            "form_modalphone_delay": null,
            "form_modalphone_header": null,
            "form_modalphone_btn_text": null,
            "form_modalphone_subheader": null
        },
        "download": true
    };


    var countryName = city.country || 'rus';

    $('[type="tel"]').not('.nomask').each(function () {
        var self = $(this);

        self.inputmask('remove');

        if (countryName === 'rus' || countryName === 'kaz') {
            self.removeAttr('pattern');
            self.inputmask({
                mask: "+7 (999) 999-99-99",
                onBeforePaste: function (pastedValue, opts) {
                    var processedValue = pastedValue;
                    var tel = processedValue.replace(/[^\d]/g, '');

                    if (tel.length === 11 && (tel[0] === '8' || tel[0] === '7')) {
                        processedValue = '+7' + tel.substring(1);
                    }

                    return processedValue;
                },
                "onincomplete": function () {
                    self.addClass('incomplete');
                    self.removeClass('complete');
                },
                "oncomplete": function () {
                    self.removeClass('incomplete');
                    self.addClass('complete');
                }
            });
        } else if (countryName === 'az') {
            if (
                true
                // typeof thread !== 'undefined' &&
                // typeof thread.tool_id === 'number' &&
                // thread.tool_id === 1191 &&
                // typeof thread.id === 'number' &&
                // thread.id === 33490
            ) {
                self.prop('pattern', "\\+?((994\\s*\\(?\\d{2,3}\\)?\\s*\\d{3}-*\\s*\\d{2}-*\\s*\\d{2})|(0\\s*\\(?\\d{2,3}\\)?\\s*\\d{3}-*\\s*\\d{2}-*\\s*\\d{2})|(\\(?\\d{2,3}\\)?\\s*\\d{3}-*\\s*\\d{2}-*\\s*\\d{2}))");
                self.inputmask({
                    "regex": "[\\d\\s\\(\\)\\-\\+]{9,25}",
                    "onincomplete": function () {
                        self.addClass('incomplete');
                        self.removeClass('complete');
                    },
                    "oncomplete": function () {
                        self.removeClass('incomplete');
                        self.addClass('complete');
                    }
                });
            } else {
                self.inputmask("+\\9\\94 99-999-99-99", {
                    "onincomplete": function () {
                        self.addClass('incomplete');
                        self.removeClass('complete');
                    },
                    "oncomplete": function () {
                        self.removeClass('incomplete');
                        self.addClass('complete');
                    }
                });
            }
        }
    })(jQuery);
</script>


</body>
</html>
