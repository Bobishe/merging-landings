<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>Сервисный центр по ремонту техники ASUS</title>
    <meta name="description"
          content="Сервисный центр по ремонту техники ASUS. Выезд мастера. Скидка 15% при заказе с сайта">
    <meta name="viewport" content="width=320, initial-scale=1">


    <link rel="stylesheet" href="{{ asset('assets/header/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header/my_css.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pc/css/vendors.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pc/css/style.css') }}" media="all">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/pc/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/pc/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/pc/images/favicon/favicon-16x16.png') }}">

    <link rel="mask-icon" href="{{ asset('assets/pc/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href={{ asset('assets/pc/images/favicon/favicon.ico') }}">
    <meta name=" msapplication-TileColor
    " content="#b91d47">
    <meta name="msapplication-TileImage" content="{{ asset('assets/pc/images/favicon/mstile-144x144.png') }}">
    <meta name="msapplication-config" content="{{ asset('assets/pc/images/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">


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



<!-- BEGIN HEADER-->
<header class="header">
    <div class="header__container container">


        <nav class="fixed-top  navbar navbar-expand-lg navbar-light border-bottom d-flex flex-column bg-dark">
            <div class="container justify-content-between w-100 d-flex align-items-center">
                <div class="d-flex">
                    <img src="{{asset('assets/header/logo_white.png')}}" alt="logo">
                    <div class="d-flex flex-column">
                        <p style="font-size: 18px;"><strong>Ремонт бытовой техники</strong></p>
                        <p>Сервисный центр</p>
                    </div>
                </div>
                <button type="button" id="my_btn" class="btn btn-outline-light align-middle"
                        style="height: 60%; display: none"
                        data-toggle="modal" data-target="#callback">
                    <strong>Заказать ремонт</strong></button>
            </div>


            <div class="container-fluid">
                <button class="navbar-toggler" style="margin-left: auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-left: auto; margin-right: auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                                Ремонт бытовой техники
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item link-white" href="/">Ремонт бытовой техники (главная)</a>
                                </li>
                                <li><a class="dropdown-item link-white" href="/tv">Ремонт телевизоров</a></li>
                                <li><a class="dropdown-item link-dark" href="/pc">Ремонт компьютеров и моноблоков</a>
                                </li>
                                <li><a class="dropdown-item link-dark" href="/fridge">Ремонт холодильников</a></li>
                                <li><a class="dropdown-item link-dark" href="/washing_machine">Ремонт стиральных
                                        машин</a></li>
                                <li><a class="dropdown-item link-dark" href="/dishwasher">Ремонт посудомоечных машин</a>
                                </li>
                                <li><a class="dropdown-item link-dark" href="/coffee_machine">Ремонт кофемашин</a></li>
                                <li><a class="dropdown-item link-dark" href="/coffee_machine_2">Ремонт кофемашин</a>
                                </li>
                                <li><a class="dropdown-item link-dark" href="/hob">Ремонт варочных панелей</a></li>
                                <li><a class="dropdown-item link-dark" href="/four">Ремонт духовых шкафов</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/company" style="color: white">Компании</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacts" style="color: white">Контакты</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        <!-- BEGIN MODALS -->
        <div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="callbackLabel"
             aria-hidden="true">
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

                            <form class="sltop__form"
                                  action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">
            <span>
              <input type="hidden" name="formname" value="">
            </span>
                                <span class="form-control-wrap">
              <input type="text" class="form-control" placeholder="Ваше имя" name="fullname">
            </span>
                                <span class="form-control-wrap">
              <input type="tel" class="form-control mask-phone" placeholder="Ваш телефон" name="phone" required>
            </span>
                                <button type="submit" class="btn btn-success align-middle" style="font-size: 20px;">
                                    Оставить заявку
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
                                Заполняя указанное выше поле, я даю <a href="/personal_data">согласие на обработку
                                    персональных данных</a>.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="successLabel"
             aria-hidden="true">
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
                            <button type="submit" class="btn btn-blue" data-dismiss="modal" aria-label="Close">Хорошо
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END MODALS-->
        <div class="header__menu menu is-hidden">
            <div class="menu__default">
                <svg class="svg-sprite-icon icon-menu">
                    <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#menu') }}"/>
                </svg>
            </div>
            <div class="menu__active is-hidden">
                <svg class="svg-sprite-icon icon-menu">
                    <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#menu') }}"/>
                </svg>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER	-->
<!-- BEGIN MAIN-->
<div class="main">
    <div class="main__container container">
        <div class="main__content">
            <div class="main__desc">Ремонтируем технику с 2008 года</div>
            <div class="main__title">Ремонт компьютеров и моноблоков <span>ASUS</span> <br> в сервисном центре
            </div>
            <div class="main__text">Выезд курьера/мастера или доставка до нас в пределах города - бесплатно, в течение
                40 минут
            </div>
            <div class="main__button button" data-toggle="modal" data-target="#callback">Заказать ремонт
                <div class="main__icon">
                    <svg class="svg-sprite-icon icon-arrow-white">
                        <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#arrow-white') }}"/>
                    </svg>
                </div>
            </div>
            <div class="main__list">
                <div class="main__item">Ремонт и настройка 20 минут <br> Срочная диагностика от 30 минут</div>
                <div class="main__item">Гарантия на услуги 5 лет <br> Ремонт гарантийных случаев без очереди</div>
            </div>
        </div>
        <img class="main__image" src="{{ asset('assets/pc/images/main.png') }}" alt="@@">
    </div>
</div>
<!-- END MAIN-->
<!-- BEGIN PRICE-->
<div class="price">
    <div class="price__container container">
        <div class="price__title">Мы ремонтируем компьютеры и моноблоки</div>
        <div class="price__body">
            <div class="price__tabs">
                <div class="price__item is-active" id="tab1"><img class="price__image"
                                                                  src="{{ asset('assets/pc/images/notebooks.png') }}"
                                                                  alt="@@">
                    <div class="price__title">Ноутбуки</div>
                </div>
                <div class="price__item" id="tab2"><img class="price__image"
                                                        src="{{ asset('assets/pc/images/monitors.png') }}" alt="@@">
                    <div class="price__title">Моноблоки</div>
                </div>
                <div class="price__item" id="tab3"><img class="price__image"
                                                        src="{{ asset('assets/pc/images/desktops.png') }}" alt="@@">
                    <div class="price__title">Компьютеры</div>
                </div>
            </div>
            <div class="price__head">
                <div class="price__desc">Прайс на ремонт ноутбуков</div>
                <div class="price__button button" data-toggle="modal" data-target="#callback">Оставить заявку на ремонт
                    <div class="price__icon">
                        <svg class="svg-sprite-icon icon-arrow-white">
                            <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#arrow-white') }}"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="price__content" id="tab1-content">
                <div class="price__column">
                    <div class="price__item">
                        <div class="price__text">Выезд мастера</div>
                        <div class="price__value">Бесплатно</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Дигностика</div>
                        <div class="price__value">Бесплатно</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена дисплея</div>
                        <div class="price__value">от 785 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена HDD</div>
                        <div class="price__value">от 665 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Ремонт клавиатуры</div>
                        <div class="price__value">от 665 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена кулера</div>
                        <div class="price__value">от 780 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена ОЗУ</div>
                        <div class="price__value">655 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена порта USB</div>
                        <div class="price__value">от 665 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена разъема питания</div>
                        <div class="price__value">от 665 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена северного моста</div>
                        <div class="price__value">от 780 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена термопасты</div>
                        <div class="price__value">от 598 ₽</div>
                    </div>
                </div>
                <div class="price__column">
                    <div class="price__item">
                        <div class="price__text">Замена шлейфа</div>
                        <div class="price__value">от 780 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена wi-fi модуля</div>
                        <div class="price__value">от 665 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Лечение вирусов</div>
                        <div class="price__value">от 425 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка корпуса</div>
                        <div class="price__value">от 780 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка и замена матрицы</div>
                        <div class="price__value">от 780 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка и замена разъемов</div>
                        <div class="price__value">от 665 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка материнской платы</div>
                        <div class="price__value">от 780 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка после залития</div>
                        <div class="price__value">от 780 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Установка и настройка Windows</div>
                        <div class="price__value">от 425 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Установка или замена процессора</div>
                        <div class="price__value">от 665 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена звуковой карты</div>
                        <div class="price__value">от 520 ₽</div>
                    </div>
                </div>
            </div>
            <div class="price__content is-hidden" id="tab2-content">
                <div class="price__column">
                    <div class="price__item">
                        <div class="price__text">Выезд мастера</div>
                        <div class="price__value">Бесплатно</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Дигностика</div>
                        <div class="price__value">Бесплатно</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена дисплея</div>
                        <div class="price__value">от 685 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена HDD</div>
                        <div class="price__value">от 570 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Ремонт клавиатуры</div>
                        <div class="price__value">от 570 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена кулера</div>
                        <div class="price__value">от 680 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена ОЗУ</div>
                        <div class="price__value">570 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена порта USB</div>
                        <div class="price__value">от 570 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена разъема питания</div>
                        <div class="price__value">от 570 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена северного моста</div>
                        <div class="price__value">от 680 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена термопасты</div>
                        <div class="price__value">от 520 ₽</div>
                    </div>
                </div>
                <div class="price__column">
                    <div class="price__item">
                        <div class="price__text">Замена шлейфа</div>
                        <div class="price__value">от 680 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена wi-fi модуля</div>
                        <div class="price__value">от 570 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Лечение вирусов</div>
                        <div class="price__value">от 370 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка корпуса</div>
                        <div class="price__value">от 680 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка и замена матрицы</div>
                        <div class="price__value">от 680 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка и замена разъемов</div>
                        <div class="price__value">от 570 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка материнской платы</div>
                        <div class="price__value">от 680 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка после залития</div>
                        <div class="price__value">от 680 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Установка и настройка Windows</div>
                        <div class="price__value">от 370 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Установка или замена процессора</div>
                        <div class="price__value">от 570 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена звуковой карты</div>
                        <div class="price__value">от 450 ₽</div>
                    </div>
                </div>
            </div>
            <div class="price__content is-hidden" id="tab3-content">
                <div class="price__column">
                    <div class="price__item">
                        <div class="price__text">Выезд мастера</div>
                        <div class="price__value">Бесплатно</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Дигностика</div>
                        <div class="price__value">Бесплатно</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена дисплея</div>
                        <div class="price__value">от 595 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена HDD</div>
                        <div class="price__value">от 495 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Ремонт клавиатуры</div>
                        <div class="price__value">от 495 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена кулера</div>
                        <div class="price__value">от 595 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена ОЗУ</div>
                        <div class="price__value">495 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена порта USB</div>
                        <div class="price__value">от 495 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена разъема питания</div>
                        <div class="price__value">от 495 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена северного моста</div>
                        <div class="price__value">от 595 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена термопасты</div>
                        <div class="price__value">от 455 ₽</div>
                    </div>
                </div>
                <div class="price__column">
                    <div class="price__item">
                        <div class="price__text">Замена шлейфа</div>
                        <div class="price__value">от 595 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена wi-fi модуля</div>
                        <div class="price__value">от 495 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Лечение вирусов</div>
                        <div class="price__value">от 325 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка корпуса</div>
                        <div class="price__value">от 595 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка и замена матрицы</div>
                        <div class="price__value">от 595 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка и замена разъемов</div>
                        <div class="price__value">от 495 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка материнской платы</div>
                        <div class="price__value">от 595 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Починка после залития</div>
                        <div class="price__value">от 595 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Установка и настройка Windows</div>
                        <div class="price__value">от 325 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Установка или замена процессора</div>
                        <div class="price__value">от 495 ₽</div>
                    </div>
                    <div class="price__item">
                        <div class="price__text">Замена звуковой карты</div>
                        <div class="price__value">от 395 ₽</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PRICE-->
<!-- BEGIN FEEDBACK-->
<div class="feedback">
    <div class="feedback__container container">
        <div class="feedback__body">
            <div class="feedback__desc">Скидка <br> 15%</div>
            <form class="sltop__form feedback__form form"
                  action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                <div class="feedback__title form__title">Закажите ремонт вашего устройства <br> на сайте и получите
                    скидку 15%
                </div>
                <input class="feedback__input input" type="text" name="fullname" placeholder="Ваше имя">
                <input class="feedback__input input" type="tel" name="phone" placeholder="Ваш телефон" required>
                <button class="feedback__button button" type="submit">Получить скидку
                    <svg class="svg-sprite-icon icon-arrow-white">
                        <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#arrow-white') }}"/>
                    </svg>
                </button>
                <input type="hidden" name="branch_id" value="0">
                <input type="hidden" name="is_pm" value="false">
                <input type="hidden" name="thread_id" value="37892">
                <input type="hidden" name="thread_type" value="3">
                <input type="hidden" name="sub_id1" value="">
                <input type="hidden" name="sub_id2" value="">
                <input type="hidden" name="sub_id3" value="">
                <input type="hidden" name="direction_id" value="2">

                <input type="hidden" name="work" value="на сайте есть акция - Скидка 15%">

            </form>
            <img class="feedback__image" src="{{ asset('assets/pc/images/monoblock.png') }}" alt="@@">
        </div>
    </div>
</div>
<!-- END FEEDBACK-->
<!-- BEGIN STAGES-->
<div class="stages">
    <div class="stages__container container">
        <div class="stages__title">Этапы работ</div>
        <div class="stages__list">
            <div class="stages__item">
                <div class="stages__head">
                    <div class="stages__num">01</div>
                    <div class="stages__icon">
                        <svg class="svg-sprite-icon icon-arrow">
                            <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#arrow') }}"/>
                        </svg>
                    </div>
                </div>
                <div class="stages__title">Заявка</div>
                <div class="stages__text">Вы оставляете заявку, и мастер или курьер выезжает к вам на дом</div>
            </div>
            <div class="stages__item">
                <div class="stages__head">
                    <div class="stages__num">02</div>
                    <div class="stages__icon">
                        <svg class="svg-sprite-icon icon-arrow">
                            <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#arrow') }}"/>
                        </svg>
                    </div>
                </div>
                <div class="stages__title">Диагностика</div>
                <div class="stages__text">Проводится детальная диагностика устройства</div>
            </div>
            <div class="stages__item">
                <div class="stages__head">
                    <div class="stages__num">03</div>
                    <div class="stages__icon">
                        <svg class="svg-sprite-icon icon-arrow">
                            <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#arrow') }}"/>
                        </svg>
                    </div>
                </div>
                <div class="stages__title">Расчет стоимости</div>
                <div class="stages__text">Приступаем к работе только после согласовывания цены</div>
            </div>
            <div class="stages__item">
                <div class="stages__head">
                    <div class="stages__num">04</div>
                    <div class="stages__icon">
                        <svg class="svg-sprite-icon icon-arrow">
                            <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#arrow') }}"/>
                        </svg>
                    </div>
                </div>
                <div class="stages__title">Устройство работает!</div>
                <div class="stages__text">Передаем вам исправное устройство и выписываем гарантию</div>
            </div>
        </div>
    </div>
</div>
<!-- END STAGES-->
<!-- BEGIN WHEREFORE-->
<div class="wherefore">
    <div class="wherefore__container container">
        <div class="wherefore__title">Почему к нам обратились более 9&nbsp;000 клиентов</div>
        <div class="wherefore__list">
            <div class="wherefore__item">
                <div class="wherefore__icon">
                    <svg class="svg-sprite-icon icon-prize">
                        <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#prize') }}"/>
                    </svg>
                </div>
                <div class="wherefore__title">Высокое качество ремонта</div>
                <div class="wherefore__text">У нас работают только квалифицированные мастера, поэтому на услуги мы даем
                    гарантию 5 лет
                </div>
            </div>
            <div class="wherefore__item">
                <div class="wherefore__icon">
                    <svg class="svg-sprite-icon icon-idea">
                        <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#idea') }}"/>
                    </svg>
                </div>
                <div class="wherefore__title">Опыт более 12 лет</div>
                <div class="wherefore__text">Мы успешно работаем с 2008 года и оказали помощь более 5000 клиентов</div>
            </div>
            <div class="wherefore__item">
                <div class="wherefore__icon">
                    <svg class="svg-sprite-icon icon-gift">
                        <use xlink:href="{{ asset('assets/pc/images/sprite/symbol/sprite.svg#gift') }}"/>
                    </svg>
                </div>
                <div class="wherefore__title">Скидки постоянным клиентам</div>
                <div class="wherefore__text">Мы ценим своих клиентов, предлагаем самые выгодные условия и дарим
                    подарки
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WHEREFORE-->
<!-- BEGIN ADDITIONALLY-->
<div class="additionally">
    <div class="additionally__container container">
        <div class="additionally__content">
            <div class="additionally__title">А также Мы</div>
            <div class="additionally__list">
                <div class="additionally__item">Закупаем оригинальные комплектующие у производителя</div>
                <div class="additionally__item">Применяем специальное оборудование и ПО для выявления внутренних
                    поломок
                </div>
                <div class="additionally__item">Бесплатно выполняем диагностику
                </div>
                <div class="additionally__item">Бесплатно привозим ваше устройство в наш сервис, а по окончании ремонта
                    и оформления гарантии доставляем обратно
                </div>
            </div>
        </div>
        <img class="additionally__image" src="{{ asset('assets/pc/images/certificate.jpg') }}">
    </div>
</div>
<!-- END ADDITIONALLY-->
<!-- BEGIN CONTACTS-->
<div class="contacts">
    <div class="contacts__container container">
        <div class="contacts__block">
            <div class="contacts__title">Контакты</div>
            <div class="contacts__text">
                <br> без выходных с 10 до 22
            </div>
        </div>
        <div class="contacts__map map" id="yamap"></div>
    </div>
</div>
<!-- END CONTACTS-->
<!-- BEGIN FOOTER-->
<div class="container">
    <footer class="py-3 my-4">
        <p class="text-center " style="color: white">2023 Ремонт бытовой техники</p>
    </footer>
</div>


<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"
        integrity="sha256-HQCkPjsckBtmO60xeZs560g8/5v04DvOkyEo01zhSpo=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="{{ asset('assets/header/bootstrap.js') }}"></script>
<script src="{{ asset('assets/header/js/script.js') }}"></script>
<script src="{{ asset('assets/header/js/vendor.js') }}"></script>
<script src="{{ asset('assets/header/js/my_script.js') }}"></script>

<!-- END FOOTER-->


<script src="https://lk.newapi.ru/stat/37892/js"></script>
<script src="{{asset('assets/send_lead.js')}}"></script>


<script src="{{ asset('assets/pc/js/scripts.js') }}"></script>


<style>
    #yamap,
    .yamap-psh {
        overflow: hidden;
        min-height: 490px;
    }
</style>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_Ru&amp;apikey=bb24e9c9-1ab7-46d6-8730-b21689b44f86"
        type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>




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
