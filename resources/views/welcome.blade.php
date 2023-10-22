<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">

    <title>Срочный выездной ремонт крупной бытовой техники с выездом на дом от 300 руб.</title>
    <link rel="stylesheet" href="{{ asset('assets/welcome/style/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/welcome/style/min.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/welcome/icon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/welcome/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/welcome/icon/favicon-16x16.png') }}">
    <link rel="mask-icon" href="{{ asset('assets/welcome/icon/safari-pinned-tab.svg') }}" color="#5bbad5">


    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    <meta name="description"
          content="Ремонт холодильников, посудомоечных и стиральных машин популярных производителей. Выезд в течение часа. Ремонт в день обращения. Профессионалы с опытом от 6 лет.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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


{{--Навбар--}}
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
                style="height: 60%; display: none" data-toggle="modal" data-target="#callback"><strong>Заказать
                ремонт</strong></button>
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
                        <a class="dropdown-item link-dark" href="/">Ремонт бытовой техники (главная)</a></li>
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
                    <a class="nav-link" aria-current="page" href="#about" style="color: black">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#problems" style="color: black">Частые
                        неисправности</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#prices" style="color: black">Цены</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#brands" style="color: black">Бренды</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#reviews" style="color: black">Отзывы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#sale" style="color: black">Скидки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#contacts" style="color: black">Контакты</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: black">Компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: black">Контакты</a>
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
                        @csrf



            <span>
              <input type="hidden" name="formname" value="">
            </span>
                        <span class="form-control-wrap">
              <input type="text" class="form-control" placeholder="Ваше имя" name="fullname">
            </span>
                        <span class="form-control-wrap">
              <input type="tel" class="form-control mask-phone" placeholder="Ваш телефон" name="phone" required>
            </span>
                        <button type="submit" class="btn btn-success align-middle" style="font-size: 20px;" >Оставить
                            заявку
                        </button>

                        <input type="hidden" name="branch_id" value="0">
                        <input type="hidden" name="is_pm" value="false">
                        <input type="hidden" name="thread_id" value="37892">
                        <input type="hidden" name="thread_type" value="3">
                        <input type="hidden" name="sub_id1" value="">
                        <input type="hidden" name="sub_id2" value="">
                        <input type="hidden" name="sub_id3" value="">
                        <input type="hidden" name="direction_id" value=
                            "2">


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




<main>
    <div class="section-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 col-xl-6">
                    <div class="with-h1">
                        <h1>Срочный ремонт<br>
                            бытовой техники<br>
                            <span class="rotate-text" style="
                                                                white-space: nowrap;
                                                            ">
                                    <b class="is-hidden animated flipInX">на дому</b>
                                    <b class="is-visible animated">от 300р.</b>
                            </span>
                        </h1>
                    </div>

                    <div class="list-adantages">
                        <div class="one-adv">
                            <div class="for-icon">
                                <svg>
                                    <use
                                        xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-Выезд') }}"></use>
                                </svg>
                            </div>
                            <p class="title-avd">Ремонт на выезде<br/>за 30 минут</p>
                        </div>
                        <div class="one-adv">
                            <div class="for-icon">
                                <svg>
                                    <use
                                        xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-диагностика') }}"></use>
                                </svg>
                            </div>
                            <p class="title-avd">
                                Бесплатная диагностика
                            </p>
                        </div>
                        <div class="one-adv">
                            <div class="for-icon">
                                <svg>
                                    <use
                                        xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-гарантия') }}"></use>
                                </svg>
                            </div>
                            <p class="title-avd">Гарантия до 3-х лет <br/>на все работы</p>
                        </div>
                        <div class="one-adv">
                            <div class="for-icon">
                                <svg>
                                    <use
                                        xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-время приезда') }}"></use>
                                </svg>
                            </div>
                            <p class="title-avd">27 мин. - среднее время приезда мастера</p>
                        </div>
                    </div>
                    <div class="banner--form">
                        <p class="title-banner--form">Бесплатный выезд мастера</p>
                        <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">



                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <input type="tel" name="phone" class="phone inputs" placeholder="Ваш телефон"
                                           required>
                                    <input type="hidden" name="city" value="" class="city-input">
                                    <input type="hidden" name="reg" value="" class="city-id">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <button type="submit" class="button-blue">Вызвать мастера
                                        <svg>
                                            <use
                                                xlink:href="_files/assets/images/icons/sprite.svg#icon-стрелка">
                                            </use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <input type="hidden" name="fullname" value="без имени">

                            <input type="hidden" name="branch_id" value="0">
                            <input type="hidden" name="is_pm" value="false">
                            <input type="hidden" name="thread_id" value="37892">
                            <input type="hidden" name="thread_type" value="3">
                            <input type="hidden" name="sub_id1" value="">
                            <input type="hidden" name="sub_id2" value="">
                            <input type="hidden" name="sub_id3" value="">
                            <input type="hidden" name="direction_id" value=
                                "2">

                        </form>


                        <p class="mini-text-banner--form">
                            Нажимая на кнопку “Вызвать мастера” - вы даете согласие на
                            обработку Ваших
                            персональных данных.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-5 col-xl-6 cont-brands-mashines">
                    <div class="brands-mashines"
                         style="background-image: url('{{ asset('assets/welcome/images/main.png') }}')"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-us" id="about-us">
        <div class="container" id="about">

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-section-a">Наши специалисты — лучшие в своем деле</h2>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-7 img-baout-us">
                            <img src="{{ asset('assets/welcome/images/about-us.png') }}" alt="о нашем сервисном центре"
                                 title="работники мастера" class="img-fluid ">
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-5 -seo-text-about">
                            <p>
                                Наш сервисный центр объединяет мастеров, специализирующихся на ремонте крупной бытовой
                                техники.
                                <br>Мы принимаем в свои ряды только специалистов с подтвержденными навыками и опытом и
                                гарантируем отличный результат ремонта при минимальных затратах.
                                <br>Сотрудники компании восстанавливают холодильники, посудомоечные и стиральные машины
                                популярных производителей.
                                <br>Мы специализируемся на выездном обслуживании, а это значит, что необходимые
                                ремонтные работы
                                выполняются на дому у заказчика, что избавляет от необходимости самостоятельного
                                демонтажа и
                                транспортировки вышедшей из строя техники в мастерскую.
                                <br>Использование оригинальных запасных частей и расходных материалов позволяет нам
                                давать долгосрочную гарантию на все виды ремонта.
                                <br>Наши мастера аккуратны, вежливы и внимательны к пожеланиям клиента,
                                способны быстро определить проблему в ходе бесплатной
                                экспресс-диагностики и
                                готовы приступить к ее решению немедленно.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section-garant container margin-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont-g">
                    <div class="cat"
                         style="background-image: url('{{ asset('assets/welcome/images/cat.png') }}')"></div>
                    <p class="title-g">Ремонт бытовой техники</p>
                    <div class="green-promo">
                        <div class="for-icon">
                            <svg>
                                <use
                                    xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-гарантия') }}"></use>
                            </svg>
                        </div>
                        <p>В день обращения с гарантией до 3-х лет!</p>
                    </div>
                    <div class="banner--form row">
                        <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <input type="tel" name="phone" class="phone inputs" placeholder="Ваш телефон"
                                           required>
                                    <input type="hidden" name="city" value="" class="city-input">
                                    <input type="hidden" name="reg" value="" class="city-id">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <button type="submit" class="button-blue">Вызвать мастера
                                        <svg>
                                            <use
                                                xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-стрелка') }}">
                                            </use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <input type="hidden" name="fullname" value="без имени">

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
                        <p class="mini-text-banner--form col-lg-12">
                            Нажимая на кнопку “Вызвать мастера” - вы даете
                            согласие на
                            обработку Ваших
                            персональных данных.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-problems" id="problems">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="title-section-a">Частые неисправности</p>
                </div>
                <div class="col-lg-9">
                    <div class="list-problems">
                        <a href="#"
                           title="Ваша техника не включается? Оставьте заявку, мастер бесплатно
                                                               приедет и продиагностирует поломку."
                           class="one-problem open-modal">
                            <span>Не включается</span>
                        </a>
                        <a href="#"
                           title="Ваша техника бьет током? Оставьте заявку, мастер бесплатно
                                                               приедет и продиагностирует поломку."
                           class="one-problem open-modal">
                            <span>Бьет током</span>
                        </a>
                        <a href="#"
                           title="Ваша техника протекает? Оставьте заявку, мастер бесплатно
                                                               приедет и продиагностирует поломку."
                           class="one-problem open-modal">
                            <span>Протекает</span>
                        </a>
                        <a href="#"
                           title="Ваша техника шумит? Оставьте заявку, мастер бесплатно
                                                               приедет и продиагностирует поломку."
                           class="one-problem open-modal">
                            <span>Шумит</span>
                        </a>
                        <a href="#"
                           title="Ваша техника не греет воду? Оставьте заявку, мастер бесплатно
                                                               приедет и продиагностирует поломку."
                           class="one-problem open-modal">
                            <span>Не греет воду</span>
                        </a>
                        <a href="#"
                           title="Ваша техника не сушит? Оставьте заявку, мастер бесплатно
                                                               приедет и продиагностирует поломку."
                           class="one-problem open-modal">
                            <span>Не сушит</span>
                        </a>
                        <a href="#"
                           title="Ваша техника сразу выключается? Оставьте заявку, мастер бесплатно
                                                               приедет и продиагностирует поломку."
                           class="one-problem open-modal">
                            <span>Сразу выключается</span>
                        </a>
                        <a href="#"
                           title="Ваша техника не морозит? Оставьте заявку, мастер бесплатно
                                                               приедет и продиагностирует поломку."
                           class="one-problem open-modal">
                            <span>Не морозит</span>
                        </a>
                        <a href="#"
                           title="Ваша техника не открывается? Оставьте заявку, мастер бесплатно
                                                               приедет и продиагностирует поломку."
                           class="one-problem open-modal">
                            <span>Не открывается</span>
                        </a>
                        <a href="#"
                           title="Не знаете что сломалось? Оставьте заявку, мастер бесплатно
                                                               приедет и продиагностирует поломку."
                           class="one-problem open-modal">
                            <span>Не знаю</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul class="mini-list-avd">
                        <li>
                            <svg>
                                <use
                                    xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-все виды работ') }}"></use>
                            </svg>
                            <span>Выполняем все виды работ</span>
                        </li>
                        <li>
                            <svg>
                                <use
                                    xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-Выезд') }}"></use>
                            </svg>
                            <span>Бесплатный выезд</span>
                        </li>
                        <li>
                            <svg>
                                <use
                                    xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-время приезда') }}"></use>
                            </svg>
                            <span>Срочный ремонт за <br/>30 минут</span>
                        </li>
                        <li>
                            <svg>
                                <use
                                    xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-гарантия') }}"></use>
                            </svg>
                            <span>До 3-х лет расширенной гарантии</span>
                        </li>
                        <li>
                            <svg>
                                <use
                                    xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-оригинальные запчасти') }}"></use>
                            </svg>
                            <span>Оригинальные запчасти и программы</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section-table-price container margin-section" id="prices">
        <div class="row">
            <div class="col-12">
                <p class="title-section-a">Платите за ремонт <br/><span>меньше, чем соседи</span></p>
            </div>
            <div class="col-lg-10">
                <div class="list-types list-group" role="tablist">
                    <div class="with-arrow wow bounceIn" data-wow-duration="1s">Выберите технику</div>
                    <a href="#hol-price" class="one-type list-group-item list-group-item-action active hol-b"
                       data-toggle="list">
                        <div class="type-img">
                            <svg>
                                <use
                                    xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-холодильник') }}"></use>
                            </svg>
                        </div>
                        <p class="title-type">Холодильники</p>
                    </a>
                    <a href="#stir-price" class="one-type list-group-item list-group-item-action stir-b"
                       data-toggle="list">
                        <div class="type-img">
                            <svg>
                                <use
                                    xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-стиральная машина') }}"></use>
                            </svg>
                        </div>
                        <p class="title-type">Стиральные машины</p>
                    </a>
                    <a href="#posud-price" class="one-type list-group-item list-group-item-action posud-b"
                       data-toggle="list">
                        <div class="type-img">
                            <svg>
                                <use
                                    xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-посудомоечная машина') }}"></use>
                            </svg>
                        </div>
                        <p class="title-type">Посудомойки</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="tab-content">
                    <div class="tab-pane active" id="hol-price" role="tabpanel">
                        <div class="table-price-container">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Услуга</th>
                                    <th>Цена</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                <tr>
                                    <td>Вызов мастера и диагностика</td>
                                    <td>
                                        бесплатно
                                    </td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Вызов мастера и диагностика"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена фильтра-осушителя</td>
                                    <td>от 380 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена фильтра-осушителя"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ремонт электросхемы</td>
                                    <td>от 900 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Ремонт электросхемы"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена терморегулятора</td>
                                    <td>от 830 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена терморегулятора"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ремонт соленоидного клапана</td>
                                    <td>от 730 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Ремонт соленоидного клапана"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена таймера</td>
                                    <td>от 1200 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена таймера "><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена уплотнителя</td>
                                    <td>от 1200 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена уплотнителя"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Прочистка дренажной системы</td>
                                    <td>от 350 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Прочистка дренажной системы"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Заправка холодильного агрегата</td>
                                    <td>от 1600 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Заправка холодильного агрегата"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена нагревателя испарителя</td>
                                    <td>от 1500 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена нагревателя испарителя"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена трубопровода теплообменника</td>
                                    <td>от 1950 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена трубопровода теплообменника"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ремонт электронного блока управления</td>
                                    <td>от 950 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Ремонт электронного блока управления"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена электронного блока управления</td>
                                    <td>от 2000 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена электронного блока управления"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена компрессора</td>
                                    <td>от 2400 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена компрессора "><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ремонт компрессора</td>
                                    <td>от 1450 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Ремонт компрессора"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ремонт пускозащитного реле</td>
                                    <td>от 370 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Ремонт пускозащитного реле"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ремонт вентилятора</td>
                                    <td>от 450 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Ремонт вентилятора"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Прочистка капиллярной трубки газовой системы</td>
                                    <td>от 850 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Прочистка капиллярной трубки газовой системы"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="watch-all">
                                <svg>
                                    <use
                                        xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-смотреть еще') }}"></use>
                                </svg>
                                Показать все
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="stir-price" role="tabpanel">
                        <div class="table-price-container">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Услуга</th>
                                    <th>Цена</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Вызов мастера и диагностика</td>
                                    <td>
                                        бесплатно
                                    </td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Вызов мастера и диагностика"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Устранение засора</td>
                                    <td>от 450 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Устранение засора"><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена насоса</td>
                                    <td>от 650 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена насоса"><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена датчика уровня воды</td>
                                    <td>от 750 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена датчика уровня воды"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Чистка системы слива</td>
                                    <td>от 450 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Чистка системы слива"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена ремня привода</td>
                                    <td>от 550 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена ремня привода"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена электронного модуля</td>
                                    <td>от 750 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена электронного модуля"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ремонт двигателя</td>
                                    <td>от 850 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Ремонт двигателя"><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена сетевого шнура</td>
                                    <td>от 300 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена сетевого шнура"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена ТЭНа</td>
                                    <td>от 650 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена ТЭНа"><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена амортизаторов</td>
                                    <td>от 750 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена амортизаторов"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ремонт платы</td>
                                    <td>от 850 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Ремонт платы"><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена фильтра насоса</td>
                                    <td>от 650 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена фильтра насоса"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена устройства блокировки люка</td>
                                    <td>от 750 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена устройства блокировки люка"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена ручек, петель</td>
                                    <td>от 350 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена ручек, петель"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена заливного клапана</td>
                                    <td>от 350 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена заливного клапана"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Удаление посторонних предметов</td>
                                    <td>от 700 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Удаление посторонних предметов"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена фильтра залива воды</td>
                                    <td>от 450 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена фильтра залива воды"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="watch-all">
                                <svg>
                                    <use
                                        xlink:href="_files/assets/images/icons/sprite.svg#icon-смотреть еще"></use>
                                </svg>
                                Показать все
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="posud-price" role="tabpanel">
                        <div class="table-price-container">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Услуга</th>
                                    <th>Цена</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Вызов мастера и диагностика</td>
                                    <td>
                                        бесплатно
                                    </td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Вызов мастера и диагностика"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена ручек</td>
                                    <td>от 1200 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена ручек"><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена сетевой кнопки</td>
                                    <td>от 1200 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена сетевой кнопки"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Чистка и замена фильтров</td>
                                    <td>от 600 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Чистка и замена фильтров "><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Прочистка засора</td>
                                    <td>от 1200 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Прочистка засора"><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена клапанов</td>
                                    <td>от 1000 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена клапанов "><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена насоса</td>
                                    <td>от 1500 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена насоса "><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена ТЭНа</td>
                                    <td>от 1500 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена ТЭНа"><span>Заказать</span></a></td>
                                </tr>
                                <tr>
                                    <td>Замена конденсатора</td>
                                    <td>от 1500 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена конденсатора"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ремонт электроцепи</td>
                                    <td>от 2000 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Ремонт электроцепи "><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Удаление посторонних предметов</td>
                                    <td>от 1200 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Удаление посторонних предметов "><span>Заказать</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Замена заливного шланга</td>
                                    <td>от 500 руб.</td>
                                    <td><a href="#" title="Оставьте заявку и наш менеджер свяжется с Вами"
                                           class="button-price open-modal"
                                           data-problemprice="Замена заливного шланга"><span>Заказать</span></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="watch-all">
                                <svg>
                                    <use
                                        xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-смотреть еще') }}"></use>
                                </svg>
                                Показать все
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="money-block">
                    <p class="title-money">Возможность
                        безналичной оплаты</p>
                    <img src="{{ asset('assets/welcome/images/icons/png-sprites/money.png') }}"
                         class="img-fluid money-img"
                         alt="VISA MasterCard YandexMoney" title="VISA MasterCard YandexMoney">
                </div>
            </div>
        </div>
    </div>

    <div class="section-promo-man margin-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="titile-promo"><span>Большой штат<br/> опытных специалистов</span><br/>
                        с высоким уровнем квалификации</p>
                    <div class="banner--form row">
                        <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <input type="tel" name="phone" class="phone inputs" placeholder="Ваш телефон"
                                           required>
                                    <input type="hidden" name="city" value="" class="city-input">
                                    <input type="hidden" name="reg" value="" class="city-id">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <button type="submit" class="button-green">Вызвать мастера
                                        <svg>
                                            <use
                                                xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-стрелка') }}">
                                            </use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <input type="hidden" name="fullname" value="без имени">

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
                        <p class="mini-text-banner--form col-lg-12">
                            Нажимая на кнопку “Вызвать мастера” - вы даете
                            согласие на
                            обработку Ваших
                            персональных данных.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-brands margin-section container" id="brands">
        <div class="row">
            <div class="col-lg-12">
                <p class="title-section-a">Отремонтируем бытовую технику <span>любого бренда</span></p>
                <div class="list-brands">
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт BOSCH и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand "
                         title="Оставьте заявку на ремонт Miele и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/2.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand "
                         title="Оставьте заявку на ремонт AEG и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/3.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand "
                         title="Оставьте заявку на ремонт Siemens и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/4.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand "
                         title="Оставьте заявку на ремонт NEFF и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/5.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand "
                         title="Оставьте заявку на ремонт Kuppersberg и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/6.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand "
                         title="Оставьте заявку на ремонт Bauknecht и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/7.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт SMEG и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/8.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт LG и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/9.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Samsung и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/10.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Philips и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/11.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Panasonic и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/12.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Sharp и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/13.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Toshiba и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/14.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Brother и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/15.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Indesit и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/16.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Бирюса и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/17.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Candy и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/18.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Beko и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/19.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Electrolux и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/20.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Hansa и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/21.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Zanussi и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/22.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Gorenje и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/23.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="one-brand"
                         title="Оставьте заявку на ремонт Wistmart и наш менеджер свяжется с Вами">
                        <img src="{{ asset('assets/welcome/images/brands/24.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-inst container margin-section" id="reviews">
        <div class="row">
            <div class="col-lg-12">
                <p class="title-section-a">Вы точно <span>останетесь довольны</span></p>
                <div class="ins-block">
                    <p class="inst-title">
                        <svg>
                            <use xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-инстак') }}"></use>
                        </svg>
                        instagram лента
                    </p>
                    <div class="list-photos">
                        <div class="one-photo">
                            <img src="{{ asset('assets/welcome/images/inst/1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="one-photo">
                            <img src="{{ asset('assets/welcome/images/inst/2.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="one-photo">
                            <img src="{{ asset('assets/welcome/images/inst/3.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="one-photo">
                            <img src="{{ asset('assets/welcome/images/inst/4.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="one-photo">
                            <img src="{{ asset('assets/welcome/images/inst/5.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="one-photo">
                            <img src="{{ asset('assets/welcome/images/inst/6.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="one-photo">
                            <img src="{{ asset('assets/welcome/images/inst/7.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="one-photo">
                            <img src="{{ asset('assets/welcome/images/inst/8.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="one-photo">
                            <img src="{{ asset('assets/welcome/images/inst/9.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="one-photo">
                            <img src="{{ asset('assets/welcome/images/inst/10.png') }}" alt="" class="img-fluid">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-sale container" id="sale">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont-sale">
                    <p class="for-title-s">Оставьте заявку и получите</p>
                    <p class="title-sale"><span>Скидку 15%</span> на все услуги</p>
                    <div class="banner--form row">
                        <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                            <div class="row">
                                <div class="col-md-6 col-lg-7">
                                    <input type="tel" name="phone" class="phone inputs" placeholder="Ваш телефон"
                                           required>
                                    <input type="hidden" name="city" value="" class="city-input">
                                    <input type="hidden" name="reg" value="" class="city-id">
                                </div>
                                <div class="col-md-6 col-lg-5">
                                    <button type="submit" class="button-blue">Получить скидку
                                        <svg>
                                            <use
                                                xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-стрелка') }}">
                                            </use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <input type="hidden" name="fullname" value="без имени">

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
                        <p class="mini-text-banner--form col-lg-12">
                            Нажимая на кнопку “Получить скидку” - вы даете
                            согласие на
                            обработку Ваших
                            персональных данных.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contacts-block" id="contacts">
                    <p class="title-c-c">Бесплатный выезд по городу

                    </p>
                    <div class="green-promo">
                        <div class="for-icon">
                            <svg>
                                <use
                                    xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-режим работы') }}"></use>
                            </svg>
                        </div>
                        <p>с 10:00 до 22:00 без выходных</p>
                    </div>
                    <p class="time-mast">Наш мастер будет у Вас уже в течение <br/>
                        <span>60 минут</span> или в другое удобное для Вас время</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        #yamap {
            width: 150%;
            height: 627px;
            margin-right: -50%;
        }

        @media screen and (max-width: 991px) {
            #yamap {
                width: 100%;
                height: 250px;
                margin: 0;
            }
        }

    </style>

    <div class="section-map margin-section" id="contacts">
        <div class="bg-map"></div>
        <div id="yamap"></div>
    </div>

    <div class="section-last-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="title-l-f">Остались вопросы?</p>
                    <p class="under-t-l-f">Задайте их нам! Вы получите профессиональный ответ
                        <span>в течение 60 секунд.</span></p>
                    <div class="banner--form row">
                        <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="tel" name="phone" class="phone inputs" placeholder="Ваш телефон"
                                           required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="fullname" class="inputs" placeholder="Ваше имя">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="work2" placeholder="Ваш вопрос:"></textarea>
                                    <input type="hidden" name="city" value="" class="city-input">
                                    <input type="hidden" name="reg" value="" class="city-id">
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="button-green">Получить ответ
                                        <svg>
                                            <use
                                                xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-стрелка') }}">
                                            </use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

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
                        <p class="mini-text-banner--form col-lg-12">
                            Нажимая на кнопку “Получить ответ” - вы даете
                            согласие на
                            обработку Ваших
                            персональных данных.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal fade modal-my" id="modal-application" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="blur-bg"></div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close sltop__form_close" data-dismiss="modal" aria-label="Close"></button>
            <div class="form-application-modal">
                <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                    <p class="title-application">Оставьте заявку и наш менеджер свяжется с Вами</p>
                    <div class="one-line">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="tel" name="phone" class="phone" placeholder="Телефон" required>
                                <input type="hidden" name="city" value="" class="city-input">
                                <input type="hidden" name="reg" value="" class="city-id">
                                <input type="hidden" name="problems" value="" class="problems">
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="button-blue">
                                    Оставить заявку
                                    <svg>
                                        <use
                                            xlink:href="{{ asset('assets/welcome/images/icons/sprite.svg#icon-стрелка') }}">
                                        </use>
                                    </svg>
                                </button>
                            </div>
                            <div class="col-lg-12">
                                <p class="mini-text">
                                    Нажимая кнопку “Оставить заявку”, вы даете согласие на
                                    обрабортку
                                    ваших
                                    персональных данных
                                </p>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="fullname" value="без имени">

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
            </div>
        </div>
    </div>
</div>

<div class="container">
    <footer class="py-3 my-4">

        <p class="text-center text-muted">&copy; 2023 Ремонт бытовой техники</p>
    </footer>
</div>







<script src="https://lk.newapi.ru/stat/37892/js"></script>
<script src="{{asset('assets/send_lead.js')}}"></script>






<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"
        integrity="sha256-HQCkPjsckBtmO60xeZs560g8/5v04DvOkyEo01zhSpo=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="{{ asset('assets/header/bootstrap.js') }}"></script>
<script src="{{ asset('assets/header/js/script.js') }}"></script>
<script src="{{ asset('assets/header/js/vendor.js') }}"></script>
<script src="{{ asset('assets/header/js/my_script.js') }}"></script>


<script src="{{ asset('assets/welcome/js/vendor.min.js') }}"></script>
<script>
    new WOW().init();

    $(function () {
        setInterval(function () {
            $('.rotate-text b:nth-child(1)').toggleClass('is-hidden is-visible').toggleClass(
                'flipInX')
            $('.rotate-text b:nth-child(2)').toggleClass('is-visible is-hidden').toggleClass(
                'flipInX')
        }, 2500);


        $("#burger").click(function () {
            $("#burger").toggleClass("is-active");
        });
        $(".open-modal").click(function (a) {
            var title = $(this).attr("title");
            $('.title-application').text($(this).attr("title"));
            $('.service-input').attr('value', title);
            $('#modal-application').modal('show');
            return false;
            e.preventDefault();
        });

        $(".top-info .with-button")
            .mouseover(function () {
                $('.hover-number').css({
                    'opacity': '1',
                    'transform': 'scaleY(1)'
                });
            })
            .mouseout(function () {
                $('.hover-number').css({
                    'opacity': '0',
                    'transform': 'scaleY(0)'
                });
            });

        $(".hover-number")
            .mouseover(function () {
                $('.hover-number').css({
                    'opacity': '1',
                    'transform': 'scaleY(1)'
                });
            })
            .mouseout(function () {
                $('.hover-number').css({
                    'opacity': '0',
                    'transform': 'scaleY(0)'
                });
            });
        if ($(window).width() <= 991) {
            $(window).scroll(function () {
                var top = $(document).scrollTop();
                if (top < 50) {
                    $('.logo').css({
                        display: 'flex'
                    });
                    $('.hidden-fixed-phone').css({
                        display: 'none'
                    });
                } else {
                    $('.logo').css({
                        display: 'none'
                    });
                    $('.hidden-fixed-phone').css({
                        display: 'block'
                    });
                }
            });
        }


        if ($(window).width() >= 992) {
            $(window).scroll(function () {
                var top = $(document).scrollTop();
                if (top < 100) {
                    $(".main-header").removeClass('fixed-menu');
                } else {
                    $(".main-header").addClass('fixed-menu');
                }
            });
        }


        $('.list-navigations a[href^="#"]').on('click', function (event) {
            event.preventDefault();
            var sc = $(this).attr("href"),
                dn = $(sc).offset().top - 160;
            $('html, body').animate({
                scrollTop: dn
            }, 1000);
        });

        //table price

        $('.table-price-container .watch-all').on('click', function () {
            var ps = $(this).parent('.table-price-container');
            $(ps).find('tbody > tr:nth-of-type(n+9)').show('slow');
            $(this).css({
                display: 'none'
            });
        });


        $('.city-input').attr('value', 'Санкт-Петербург');
        $('.city-id').attr('value', '0');

        let hrefpage = (document.location.href);
        /* if(hrefpage.indexOf('#') > 0){
             var hrefpage3 = hrefpage.substr(0, window.location.href.indexOf('#'));
             var hrefpage2 = hrefpage3.substr(0, hrefpage3.length - 1);
         }*/
        if (hrefpage.indexOf('?') > 0) {
            var hrefpage4 = window.location.href.split('?')[0];
            var hrefpage2 = hrefpage4.substr(0, hrefpage4.length - 1);

        } else {
            var hrefpage2 = hrefpage.substring(0, hrefpage.length - 1);
        }


        if (window.location.path = hrefpage2) {

            var putcity = '.select-option li a[href="' + hrefpage2 + '"]';

            $('.city-wp').text($(putcity).data("city"));
            $('.adress-wp').text($(putcity).data("adress"));
            $('.section-map').append($(putcity).data("mapp"));
            $('.city-input').attr('value', ($(putcity).data("city")));
            $('.city-id').attr('value', ($(putcity).data("idd")));
            $('.select-option').removeClass('show');
            $('.mobilemin').attr('href', 'tel:' + ($(putcity).data("mobilemin")));
            $('.number-wp').append($(putcity).data("mobile"));

        } else {
            var putcitydefault = '/';

            $('.city-wp').text($(putcitydefault).data("city"));
            $('.adress-wp').text($(putcitydefault).data("adress"));
            $('.section-map').append($(putcity).data("mapp"));
            $('.city-input').attr('value', ($(putcitydefault).data("city")));
            $('.city-id').attr('value', ($(putcity).data("idd")));
            $('.select-option').removeClass('show');
            $('.mobilemin').attr('href', 'tel:' + ($(putcitydefault).data("mobilemin")));
            $('.number-wp').append($(putcity).data("mobile"));
        }


        if (window.location.hash == '#stir-price') {
            $('.section-table-price .tab-content .tab-pane, .section-table-price .list-types .one-type')
                .removeClass('active').removeClass('show');
            $('#stir-price').addClass('active').addClass('show');
            $('html, body').animate({
                scrollTop: $("#prices").offset().top - 200
            }, 1000);

            $('.section-table-price .list-types .stir-b').addClass('active');

        }
        if (window.location.hash == '#posud-price') {
            $('.section-table-price .tab-content .tab-pane, .section-table-price .list-types .one-type')
                .removeClass('active').removeClass('show');
            $('#posud-price').addClass('active').addClass('show');
            $('html, body').animate({
                scrollTop: $("#prices").offset().top - 200
            }, 1000);
            $('.section-table-price .list-types .posud-b').addClass('active');
        }

        $('.section-table-price .button-price').on('click', function () {
            var probleprice = ($('.section-table-price .one-type.active').attr('title')) + ' ' + ($(
                this).data('problemprice'));
            $('.problems').attr('value', probleprice);
        })
    });
</script>

<div class="oferta" style="
    display: none;
    padding: 5px 0;
    text-align: center;
    background: #f5f8fa;
    color: #9a9a9a;
  ">
    Информация на данном ресурсе не является публичной офертой
</div>

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

<script>
    function getRandom(min, max) {
        return Math.random() * (max - min) + min;
    }

    function getRandomArray(arr, n) {
        var len = arr.length;

        if (n > len) {
            n = len;
        }

        var result = new Array(n),
            taken = new Array(len);

        while (n--) {
            var x = Math.floor(Math.random() * len);

            result[n] = arr[x in taken ? taken[x] : x];
            taken[x] = --len in taken ? taken[len] : len;
        }

        return result;
    }

    (function () {

        if (typeof ymaps !== 'undefined') {
            ymaps.ready(init);

            function renderMap(map, points) {
            }

            function init() {
                var $city = window.detectedBranchData || {"id": 777, "name": "", "country": ""};
                var $thread = {
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
                // console.log($city);
                // console.log($thread);

                if (parseInt($city.id) === 777) {
                    ymaps.geolocation.get({
                        // Выставляем опцию для определения положения по ip
                        provider: 'yandex',
                        // Карта автоматически отцентрируется по положению пользователя.
                        mapStateAutoApply: true
                    }).then(function (result) {
                        var mapElements = document.querySelectorAll('#yamap');

                        if (mapElements.length > 1) {
                            for (var iii = 0; iii < mapElements.length; iii++) {
                                mapElements[iii].id = 'yamap'.concat(iii);
                            }
                        }

                        var yaMaps = [];

                        for (var iii = 0; iii < mapElements.length; iii++) {
                            // var myMap = new ymaps.Map('yamap', {
                            var myMap = new ymaps.Map(mapElements[iii].id, {
                                center: result.geoObjects.get(0).geometry.getCoordinates(),
                                zoom: 9
                            });
                            yaMaps.push(myMap);

                            myMap.geoObjects.add(result.geoObjects);

                            // Масштабируем карту на область видимости геообъекта.
                            myMap.setBounds(bounds, {
                                // Проверяем наличие тайлов на данном масштабе.
                                checkZoomRange: true
                            });
                        }
                    });
                } else {
                    // Поиск координат центра
                    ymaps.geocode($city.name ? $city.name : 'Россия', {
                        results: 1
                    }).then(function (res) {
                        // Выбираем первый результат геокодирования.
                        var firstGeoObject = res.geoObjects.get(0),
                            // Координаты геообъекта.
                            coords = firstGeoObject.geometry.getCoordinates(),
                            // Область видимости геообъекта.
                            bounds = firstGeoObject.properties.get('boundedBy');

                        var mapElements = document.querySelectorAll('#yamap');

                        if (mapElements.length > 1) {
                            for (var iii = 0; iii < mapElements.length; iii++) {
                                mapElements[iii].id = 'yamap'.concat(iii);
                            }
                        }

                        var yaMaps = [];


                        for (var iii = 0; iii < mapElements.length; iii++) {
                            // var myMap = new ymaps.Map('yamap', {
                            var myMap = new ymaps.Map(mapElements[iii].id, {
                                center: coords,
                                zoom: 7
                            });
                            myMap.behaviors.disable('scrollZoom');
                            var isMobile = {
                                Android: function () {
                                    return navigator.userAgent.match(/Android/i);
                                },
                                BlackBerry: function () {
                                    return navigator.userAgent.match(/BlackBerry/i);
                                },
                                iOS: function () {
                                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                                },
                                Opera: function () {
                                    return navigator.userAgent.match(/Opera Mini/i);
                                },
                                Windows: function () {
                                    return navigator.userAgent.match(/IEMobile/i);
                                },
                                any: function () {
                                    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                                }
                            }
                            if (isMobile.any()) {
                                myMap.behaviors.disable('drag');
                            }

                            yaMaps.push(myMap);

                            // Масштабируем карту на область видимости геообъекта.
                            myMap.setBounds(bounds, {
                                // Проверяем наличие тайлов на данном масштабе.
                                checkZoomRange: true
                            });
                        }
                        // if (parseInt($('body').data('ls_type')) === 5) {
                        if (parseInt($thread.type) === 5) {
                            var points = [firstGeoObject.geometry.getCoordinates()];
                        } else {
                            var points = Cookies.getJSON($city.id + '-points');
                        }

                        if (points === undefined) {
                            $.ajax({
                                dataType: "json",
                                url: 'data.json',
                                data: '',
                                success: function (data) {
                                    var pointsAll = data[$city.name];
                                    var points = [];

                                    if (pointsAll !== undefined) {
                                        points = getRandomArray(pointsAll, 20);
                                    } else {
                                        points = [];

                                        for (var prop in data) {
                                            if (data.hasOwnProperty(prop)) {
                                                points = points.concat(getRandomArray(data[prop], 5));
                                            }
                                        }
                                    }

                                    var points2 = [];

                                    points.forEach((item) => {
                                        item = [
                                            item[1] + item[1] / getRandom(50000, 100000),
                                            item[0] + item[0] / getRandom(50000, 100000)
                                        ];
                                        points2.push(item);

                                        var myPlacemark = new ymaps.Placemark(item, {});

                                        for (var iii = 0; iii < yaMaps.length; iii++) {
                                            yaMaps[iii].geoObjects.add(myPlacemark);
                                        }
                                    });

                                    Cookies.set($city.id + '-points', points2, {expires: 1 / 24});
                                }
                            });
                        } else {
                            points.forEach((item) => {
                                var myPlacemark = new ymaps.Placemark(item, {});

                                for (var iii = 0; iii < yaMaps.length; iii++) {
                                    yaMaps[iii].geoObjects.add(myPlacemark);
                                }
                            });
                        }
                    });
                }
            }
        }

    })();


</script>
<script>
    // var telLinks = document.querySelectorAll('[href^="tel:"]:not(.zphone)');
    // var telClasses = 'zphone phone-marker'.split(' ');
    var telClasses = 'zphone phone-marker'.split(' ');
    var telLinks = document.querySelectorAll('[href^="tel:"]');

    for (var i = 0; i < telLinks.length; i++) {
        for (var j = 0; j < telClasses.length; j++) {
            if (telClasses[j] !== '') {
                telLinks[i].classList.add(telClasses[j]);
            }
        }
    }
</script>

<script>
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
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"
        integrity="sha256-HQCkPjsckBtmO60xeZs560g8/5v04DvOkyEo01zhSpo=" crossorigin="anonymous"></script>



<script>
    /*
     * Микролиба для получения gaid и yaid
    */
    var SLGodObject = window.SLGodObject || {
        helpers: {},
        data: {
            counters: {}
        }
    };
    SLGodObject.helpers.setYaCliendID = function () {
        //  ХЗ к какому событию можно приципиться, поэтому дёргаем раз в 1 секунду до победного
        var timerId = setInterval(function () {
            if (SLGodObject.data.counters.yaClienId) {
                clearInterval(timerId);
            } else {
                for (var i in window) {
                    if (/^yaCounter\d+/.test(i)) {
                        try {
                            SLGodObject.data.counters.yaClienId = window[i].getClientID();
                            // console.log('yaid: ' + SLGodObject.data.counters.yaClienId);
                        } catch (e) {
                        }
                    }
                }
            }
        }, 1000);
    };
    SLGodObject.helpers.setGaCliendID = function () {
        //  ХЗ к какому событию можно приципиться, поэтому дёргаем раз в 1 секунду до победного
        var timerId = setInterval(function () {
            if (SLGodObject.data.counters.gaClienId) {
                clearInterval(timerId);
            } else {
                try {
                    SLGodObject.data.counters.gaClienId = ga.getAll()[0].get('clientId');
                    // console.log('gaid: ' + SLGodObject.data.counters.gaClienId);
                } catch (e) {
                }
            }
        }, 1000);
    };
    SLGodObject.helpers.getYaCliendID = function () {   //  Чисто для наглядности, но можно взять прямо из data
        return SLGodObject.data.counters.yaClienId || null;
    };
    SLGodObject.helpers.getGaCliendID = function () {   //  Чисто для наглядности, но можно взять прямо из data
        return SLGodObject.data.counters.gaClienId || null;
    };
    SLGodObject.helpers.setAllCliendID = function () {  //  Получаем id со всех счётчиков (может ещё что добавиться)
        SLGodObject.helpers.setYaCliendID();
        SLGodObject.helpers.setGaCliendID();
    };

    SLGodObject.helpers.setAllCliendID();
</script>

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


<style>
    .site-policy-line {
        padding: 3px 10px;
        background: #eee;
        border-top: 1px solid #ccc;
    }

    .site-policy-line .site-policy-line-inner {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
        font-size: 12px;
        line-height: 18px;
        color: #333;
    }

    .site-policy-line .site-policy-line-inner a {
        color: #0036d0;
        text-decoration: underline;
    }
</style>




<script>
    window.hcaptcha2 = {
        reset: function () {
        }
    };
</script>

</body>
</html>
