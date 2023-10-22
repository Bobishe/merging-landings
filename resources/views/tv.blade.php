<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">




    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/tv/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/tv/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/tv/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/tv/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/tv/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('assets/tv/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#2b7197">
    <meta name="msapplication-config" content="{{ asset('assets/tv/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">

    <title>Ремонт телевизоров </title>
    <meta name="description"
          content=" Ремонт телевизоров . Бесплатный выезд мастера. Стоимость от 500 руб. Свой склад комплектующих. Скидка 15%. ">
    <link href="{{ asset('assets/tv/css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/tv/css/style.css') }}" rel="stylesheet">

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
        <button type="button" id="my_btn" class="btn btn-outline-success align-middle" style="height: 60%; display: none"
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
                    <a class="nav-link" aria-current="page" href="#advantages" style="color: black">Преимущества</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#certs" style="color: black">Сертификаты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#contacts" style="color: black">Контакты</a>
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
                        <button type="submit" class="btn btn-success align-middle" style="font-size: 20px;">Оставить заявку</button>

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
                        Заполняя указанное выше поле, я даю <a href="/personal_data">согласие на обработку персональных данных</a>.
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


    <div class="header__offer" style="margin-top: 250px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <h2 class="header__offer-title">
                        Ремонт <span class="blue">телевизоров</span>
                        на дому                     </h2>

                    <div class="header__offer-tagline">
                        С гарантией <b class="bold">до 12 месяцев</b>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__offer-img">
            <img src="{{ asset('assets/tv/img/tv.png') }}" alt="">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="header__features">
                    <div class="header__features-item">
                        <div class="header__features-item-icon"><img src="{{ asset('assets/tv/img/icons/jeep.svg') }}"
                                                                     alt=""></div>
                        <div class="header__features-item-title">
                            Бесплатный выезд мастера
                        </div>
                    </div>
                    <div class="header__features-item">
                        <div class="header__features-item-icon"><img src="{{ asset('assets/tv/img/icons/brands.svg') }}"
                                                                     alt=""></div>
                        <div class="header__features-item-title">
                            Ремонтируем любые бренды
                        </div>
                    </div>
                    <div class="header__features-item">
                        <div class="header__features-item-icon"><img src="{{ asset('assets/tv/img/icons/chip.svg') }}"
                                                                     alt=""></div>
                        <div class="header__features-item-title">
                            Свой склад комплектующих
                        </div>
                    </div>
                    <div class="header__features-item">
                        <div class="header__features-item-icon"><img src="{{ asset('assets/tv/img/icons/money.svg') }}"
                                                                     alt=""></div>
                        <div class="header__features-item-title">
                            Стоимость от 500 руб
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="header__calc">
                    <div class="header__calc-title">
                        Узнайте стоимость ремонта телевизора, ответив всего на <span class="blue">5 вопросов</span>
                    </div>

                    <div class="header__calc-subtitle">
                        После теста, получите скидку <span class="blue bold">15% на ремонт</span>
                    </div>

                    <a href="#constructor__wrap" class="btn btn-blue">Рассчитать стоимость</a>

                    <div class="header__calc-img">
                        <img src="{{ asset('assets/tv/img/gift.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- END HEADER -->

<!-- BEGIN FEATURES -->
<div class="features" id="advantages">
    <div class="container">
        <h2 class="block-title">Почему клиенты обращаются именно к нам?</h2>

        <div class="features__list">
            <div class="features__list-item">
                <div class="features__list-item-icon"><img src="{{ asset('assets/tv/img/icons/skrew.svg') }}" alt="">
                </div>
                <div class="features__list-item-title">Оперативный выезд</div>
                <div class="features__list-item-desc">
                    Мастер будет на объекте в течение часа с момента оформления заявки
                </div>
            </div>
            <div class="features__list-item">
                <div class="features__list-item-icon"><img src="{{ asset('assets/tv/img/icons/handshake.svg') }}"
                                                           alt=""></div>
                <div class="features__list-item-title">Уважение к клиенту</div>
                <div class="features__list-item-desc">
                    Подбираем выгодные условия и предлагаем десятки филиалов по всему городу
                </div>
            </div>
            <div class="features__list-item">
                <div class="features__list-item-icon"><img src="{{ asset('assets/tv/img/icons/survey.svg') }}" alt="">
                </div>
                <div class="features__list-item-title">Опытные мастера</div>
                <div class="features__list-item-desc">
                    Каждый мастер прошел спецобучение и имеет профильное образование
                </div>
            </div>
            <div class="features__list-item">
                <div class="features__list-item-icon"><img src="{{ asset('assets/tv/img/icons/monitor.svg') }}" alt="">
                </div>
                <div class="features__list-item-title">Чиним телевизоры</div>
                <div class="features__list-item-desc">
                    Беремся за ремонт любых моделей ТВ независимо от бренда и года выпуска
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END FEATURES -->

<!-- BEGIN CONTACTS-US -->
<div class="contact-us" style="background-image: url('{{ asset('assets/tv/img/remote.jpg') }}');">
    <div class="container">
        <h2 class="block-title block-title--center block-title--no-line">
            Свяжитесь с нами
            <small>Заполните форму и мы вам перезвоним в ближайшее время</small>
        </h2>

        <div class="contact-us__features">
            <div class="contact-us__features-item">
                <div class="contact-us__features-item-icon"><img src="{{ asset('assets/tv/img/icons/check.svg') }}"
                                                                 alt=""></div>
                <div class="contact-us__features-item-title">Бесплатный выезд</div>
            </div>
            <div class="contact-us__features-item">
                <div class="contact-us__features-item-icon"><img src="{{ asset('assets/tv/img/icons/check.svg') }}"
                                                                 alt=""></div>
                <div class="contact-us__features-item-title">Выполнение заказа в день обращения</div>
            </div>
            <div class="contact-us__features-item">
                <div class="contact-us__features-item-icon"><img src="{{ asset('assets/tv/img/icons/check.svg') }}"
                                                                 alt=""></div>
                <div class="contact-us__features-item-title">Гарантия 1 год</div>
            </div>
        </div>


        <form class="sltop__form form-inline" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

            <input type="hidden" name="formname" value="Свяжитесь с нами">

            <div class="form-control-wrap">
                <input type="text" class="form-control" name="fullname" placeholder="Ваше имя" required>
            </div>

            <div class="form-control-wrap">
                <input type="tel" class="form-control" name="phone" placeholder="Ваш телефон" required>
            </div>

            <button class="btn btn-blue" type="submit">Оставить заявку</button>

            <div class="form-text">Нажимая кнопку “Оставить заявку”, я даю согласие на обработку персональных данных
            </div>


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
</div>

<!-- END CONTACTS-US -->

<!-- BEGIN STEPS -->
<div class="steps">
    <div class="container">
        <h2 class="block-title block-title--center block-title--line-bottom">
            Как заказать ремонт телевизора
        </h2>

        <div class="steps__list">
            <div class="steps__list-item">
                <div class="steps__list-item-number">01</div>
                <div class="steps__list-item-title">Заявка</div>
                <div class="steps__list-item-desc">
                    Сначала надо оформить заявку через соответствующее поле на нашем сайте или позвонить по телефону
                    компании.
                </div>
            </div>

            <div class="steps__list-item steps__list-item--tv">
                <img src="{{ asset('assets/tv/img/tv-2.png') }}" alt="">
            </div>

            <div class="steps__list-item">
                <div class="steps__list-item-number">02</div>
                <div class="steps__list-item-title">Диагностика</div>
                <div class="steps__list-item-desc">
                    Наш сотрудник отправится на вызов сразу после оформления заявки и проведет качественную диагностику
                    на дому.
                </div>
            </div>
            <div class="steps__list-item">
                <div class="steps__list-item-number">03</div>
                <div class="steps__list-item-title">Ремонт</div>
                <div class="steps__list-item-desc">
                    Затем специалист приступит к ремонту. После выполнения всех назначенных работ, мастер проверит
                    телевизор.
                </div>
            </div>
            <div class="steps__list-item">
                <div class="steps__list-item-number">04</div>
                <div class="steps__list-item-title">Гарантия</div>
                <div class="steps__list-item-desc">
                    После ремонта сотрудник выдаст вам чеки на использованные детали и предложит гарантийный талон.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END STEPS -->

<!-- BEGIN CONSTRUCTOR -->
<div class="constructor" id="constructor">
    <div class="container">
        <h2 class="block-title block-title--center block-title--no-line">
            Ответьте всего на <span class="blue"><span id="__constructor-header-max">5</span> вопросов</span>
            <small>и получите <span class="bold">скидку 15%</span></small>
        </h2>

        <div class="constructor__wrap" id="constructor__wrap">
            <div class="constructor__current">
                Вопрос <span id="constructor-current">1</span> из <span id="__constructor-max">5</span>
            </div>

            <div class="constructor__question">Какая у вас модель телевизора?</div>


            <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                <div class="constructor__answers-list-item constructor__answers-list-item--active">
                    <label class="radio radio--img radio--quarter">
                        <input type="radio" name="deviceType" value="samsung">
                        <div class="radio-title">
                            <img src="{{ asset('assets/tv/img/logos/samsung.png') }}" alt="">
                        </div>
                    </label>

                    <label class="radio radio--img radio--quarter">
                        <input type="radio" name="deviceType" value="lg">
                        <div class="radio-title">
                            <img src="{{ asset('assets/tv/img/logos/lg.png') }}" alt="">
                        </div>
                    </label>

                    <label class="radio radio--img radio--quarter">
                        <input type="radio" name="deviceType" value="sony">
                        <div class="radio-title">
                            <img src="{{ asset('assets/tv/img/logos/sony.png') }}" alt="">
                        </div>
                    </label>

                    <label class="radio radio--img radio--quarter">
                        <input type="radio" name="deviceType" value="philips">
                        <div class="radio-title">
                            <img src="{{ asset('assets/tv/img/logos/philips.png') }}" alt="">
                        </div>
                    </label>

                    <label class="radio radio--img radio--quarter">
                        <input type="radio" name="deviceType" value="panasonic">
                        <div class="radio-title">
                            <img src="{{ asset('assets/tv/img/logos/panasonic.png') }}" alt="">
                        </div>
                    </label>

                    <label class="radio radio--img radio--quarter">
                        <input type="radio" name="deviceType" value="bbk">
                        <div class="radio-title">
                            <img src="{{ asset('assets/tv/img/logos/bbk.png') }}" alt="">
                        </div>
                    </label>

                    <label class="radio radio--img radio--quarter">
                        <input type="radio" name="deviceType" value="xiaomi">
                        <div class="radio-title">
                            <img src="{{ asset('assets/tv/img/logos/xiaomi.png') }}" alt="">
                        </div>
                    </label>

                    <label class="radio radio--img radio--quarter">
                        <input type="radio" name="deviceType" value="hisense">
                        <div class="radio-title">
                            <img src="{{ asset('assets/tv/img/logos/hisense.png') }}" alt="">
                        </div>
                    </label>

                    <label class="radio radio--quarter">
                        <input type="radio" name="deviceType" value="Другая">
                        <div class="radio-title">
                            Другая
                        </div>
                    </label>
                </div>

                <div class="constructor__answers-list-item">
                    <label class="radio">
                        <input type="radio" name="troubleType" value="Не включается">
                        <div class="radio-title">Не включается</div>
                    </label>

                    <label class="radio">
                        <input type="radio" name="troubleType" value="Не переключает каналы">
                        <div class="radio-title">Не переключает каналы</div>
                    </label>

                    <label class="radio">
                        <input type="radio" name="troubleType" value="Нет сигнала">
                        <div class="radio-title">Нет сигнала</div>
                    </label>

                    <label class="radio">
                        <input type="radio" name="troubleType" value="Не показывает">
                        <div class="radio-title">Не показывает</div>
                    </label>

                    <label class="radio">
                        <input type="radio" name="troubleType" value="Нет звука">
                        <div class="radio-title">Нет звука</div>
                    </label>

                    <label class="radio">
                        <input type="radio" name="troubleType" value="Другое">
                        <div class="radio-title">Другое</div>
                    </label>
                </div>

                <div class="constructor__answers-list-item">
          <span class="form-control-wrap form-control-wrap--no-margin">
            <input type="text" class="form-control" placeholder="Диагональ" name="diagonal">
          </span>
                </div>

                <div class="constructor__answers-list-item">
                    <label class="radio">
                        <input type="radio" name="repairedPreviously" value="Да">
                        <div class="radio-title">Да</div>
                    </label>

                    <label class="radio">
                        <input type="radio" name="repairedPreviously" value="Нет">
                        <div class="radio-title">Нет</div>
                    </label>
                </div>

                <div class="constructor__answers-list-item">
                    <label class="radio">
                        <input type="radio" name="oparatingTime" value="До 2-х лет">
                        <div class="radio-title">До 2-х лет</div>
                    </label>

                    <label class="radio">
                        <input type="radio" name="oparatingTime" value="От 2 до 5 лет">
                        <div class="radio-title">От 2 до 5 лет</div>
                    </label>

                    <label class="radio">
                        <input type="radio" name="oparatingTime" value="Более 5 лет">
                        <div class="radio-title">Более 5 лет</div>
                    </label>
                </div>

                <div class="constructor__answers-list-item">
                    <div class="result-form">
                        <div class="form-offer">
                            Заполните поля, чтобы мы могли сообщить Вам стоимость ремонта и зафиксировать скидку 15%.
                        </div>
                        <span class="form-control-wrap">
              <input name="fullname" type="text" class="form-control" placeholder="Ваше имя" required>
            </span>

                        <span class="form-control-wrap">
              <input name="phone" type="tel" class="form-control mask-phone" placeholder="Ваш телефон" required>
            </span>

                        <button type="submit" class="btn btn-blue">Отправить</button>

                        <div class="form-text">
                            Нажимая кнопку “Отправить”, я даю согласие на обработку персональных данных
                        </div>
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



            </form>

            <div class="constructor__thanks">
                <div class="constructor__thanks-img">
                    <img src="{{ asset('assets/tv/img/thanks.jpg') }}" alt="">
                </div>
                <div class="constructor__thanks-content">
                    <div class="constructor__thanks-title">Спасибо</div>
                    <div class="constructor__thanks-desc">
                        Ваша заявка отправлена.<br>
                        Мы перезвоним вам в течение<br>
                        <span class="bold">3-х минут</span>!
                    </div>

                    <div class="constructor__thanks-discount">
                        Ваш <span class="bold">бонус</span> за
                        прохождение теста

                        <div class="constructor__thanks-discount-img">
                            <img src="{{ asset('assets/tv/img/discount.png') }}" alt="">
                        </div>
                    </div>

                    <button class="btn btn-blue">Готово</button>
                </div>
            </div>

            <div class="constructor__footer">
                <div class="constructor__actions-prev btn btn-blue-bordered">
                    Назад
                </div>

                <div class="constructor__progress">
                    <!--
                      Here will be added node elements by JS.
                    -->

                </div>

                <div class="constructor__actions-next">
                    Следующий шаг
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END CONSTRUCTOR -->

<!-- BEGIN FAQ -->
<div class="faq" style="background-image: url('{{ asset('assets/tv/img/faq.jpg') }}');">
    <div class="container">
        <h2 class="block-title block-title--line-bottom">Часто задаваемые вопроcы</h2>

        <div class="accordion" id="faq-acc">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <div class="mb-0">
                        <div class="btn btn-link btn-block text-left" role="button" data-toggle="collapse"
                             data-target="#collapseOne" aria-expanded="true">
                            <div class="faq__item">
                                <div class="faq__item-number">
                                    1
                                </div>

                                <div class="faq__item-title">
                                    Работаете ли вы в выходные?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faq-acc">
                    <div class="card-body">
                        Да. Мы знаем, что многим клиентам совсем неудобно ждать мастера в будние дни. Поэтому предлагаем
                        свои услуги даже в выходные. Приедем в любое удобное время.
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header" id="headingTwo">
                    <div class="mb-0">
                        <div class="btn btn-link btn-block text-left collapsed" role="button" data-toggle="collapse"
                             data-target="#collapseTwo" aria-expanded="true">
                            <div class="faq__item">
                                <div class="faq__item-number">
                                    2
                                </div>

                                <div class="faq__item-title">
                                    В какие сроки выполняется ремонт телевизора?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq-acc">
                    <div class="card-body">
                        Все зависит от сложности ремонта. 90% работ выполняем в течение часа после начала ремонта. В
                        крайнем случае забираем телевизор в мастерскую и чиним его в срок до 3-х дней.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <div class="mb-0">
                        <div class="btn btn-link btn-block text-left collapsed" role="button" data-toggle="collapse"
                             data-target="#collapseThree" aria-expanded="true">
                            <div class="faq__item">
                                <div class="faq__item-number">
                                    3
                                </div>
                                <div class="faq__item-title">
                                    В чем ваше отличие от других компаний?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq-acc">
                    <div class="card-body">
                        Мы ставим во главу угла клиента и его потребности. Поэтому предлагаем выгодные цены, всегда
                        приезжаем в срок, чиним на совесть и используем оригинальные запчасти.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                    <div class="mb-0">
                        <div class="btn btn-link btn-block text-left collapsed" role="button" data-toggle="collapse"
                             data-target="#collapseFour" aria-expanded="true">
                            <div class="faq__item">
                                <div class="faq__item-number">
                                    4
                                </div>

                                <div class="faq__item-title">
                                    Как долго надо ждать мастера?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faq-acc">
                    <div class="card-body">
                        Мы стараемся отправлять мастеров на выезд в течение нескольких минут после оформления заявки. Но
                        если свободных специалистов нет, этот срок может продлиться до часа.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- END FAQ -->

<!-- BEGIN CERTS -->
<section class="certs" id="certs">
    <section class="container">
        <h2 class="block-title block-title--line-bottom block-title--center">Сертификаты</h2>

        <div class="certs__container">
            <div id="certs-slider" class="swiper-container">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="certs__item">
                            <div class="certs__item-img">
                                <img src="{{ asset('assets/tv/img/certs/1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="certs__item">
                            <div class="certs__item-img">
                                <img src="{{ asset('assets/tv/img/certs/2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-button-prev-unique">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                     y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;"
                     xml:space="preserve"><g>
                        <g>
                            <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"/>
                        </g>
                    </g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g></svg>
            </div>
            <div class="swiper-button-next-unique">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                     y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;"
                     xml:space="preserve"><g>
                        <g>
                            <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"/>
                        </g>
                    </g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g></svg>
            </div>

        </div>
    </section>
</section>

<!-- END CERTS -->

<!-- BEGIN CONTACTS -->
<div class="contacts" id="contacts">
    <div class="contacts__tv">
        <img src="{{ asset('assets/tv/img/tv-3.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="block-title block-title--line-bottom">Контакты</h2>


                <div class="contacts__item">
                    <div class="contacts__item-title">Консультации по телефону</div>
                    <div class="contacts__item-desc">Круглосуточно</div>
                </div>

                <div class="contacts__item">
                    <div class="contacts__item-title">Выезд на дом</div>
                    <div class="contacts__item-desc">Пн-Вс: с 10:00 до 22:00</div>
                </div>
            </div>

            <div class="col-md-6">
                <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                    <div class="form-title">Остались вопросы?</div>
                    <div class="form-offer">Заполните форму и мы проконсультируем вас по любому вопросу!</div>

                    <div class="form-control-wrap">
                        <input type="text" class="form-control" name="fullname" placeholder="Ваше имя" required>
                    </div>

                    <div class="form-control-wrap mb-4">
                        <input type="tel" class="form-control" name="phone" placeholder="Ваш телефон" required>
                    </div>

                    <button type="submit" class="btn btn-white" style="color: white">Перезвоните мне</button>

                    <div class="form-text">
                        Нажимая кнопку “Перезвоните мне”, я даю <a href="/personal_data" style="color: white">согласие на обработку персональных данных</a>.
                    </div>

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
        </div>
    </div>
</div>

<!-- END CONTACTS -->

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

<script src="{{ asset('assets/tv/js/vendor.js') }}"></script>
<script src="{{ asset('assets/tv/js/script.js') }}"></script>

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
                var $city = window.detectedBranchData || {"id":777,"name":"","country":""};
                var $thread = {"id":37605,"part_id":25308,"hash":null,"idp":"d515ed05-cc50-d0a7-48c025ced3bac5ab","title":"\u0420\u0435\u043c\u043e\u043d\u0442 \u0422\u0435\u043b\u0435\u0432\u0438\u0437\u043e\u0440\u043e\u0432 \u041b\u0435\u043d\u0434 1","type":8,"is_pm":0,"tool_type":1,"tool_id":1009,"created_at":"2023-08-03 20:20:58","updated_at":"2023-08-03 20:21:29","archived_at":null,"data":{"inn":null,"tel":null,"ogrn":null,"fp_id":null,"ga_id":null,"mg_id":null,"tt_id":null,"vp_id":null,"ym_id":null,"zd_id":null,"domain":"homeremtv.ru","gtm_id":null,"city_id":["auto"],"subid_1":null,"subid_2":null,"subid_3":null,"yuraddr":null,"yurname":null,"lkVersion":"sl","show_city":"no","direction_id":8,"new_offer_id":10,"trafficSources":"\u042f\u043d\u0434\u0435\u043a\u0441.\u0414\u0438\u0440\u0435\u043a\u0442","use_lead_proxy":"yes","form_add_modals":"0","form_modal_delay":null,"form_modal_header":null,"form_modal_btn_text":null,"form_add_phonemodals":"0","form_modal_subheader":null,"form_modalphone_delay":null,"form_modalphone_header":null,"form_modalphone_btn_text":null,"form_modalphone_subheader":null},"download":true};
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
    var thread = {"id":37605,"part_id":25308,"hash":null,"idp":"d515ed05-cc50-d0a7-48c025ced3bac5ab","title":"\u0420\u0435\u043c\u043e\u043d\u0442 \u0422\u0435\u043b\u0435\u0432\u0438\u0437\u043e\u0440\u043e\u0432 \u041b\u0435\u043d\u0434 1","type":8,"is_pm":0,"tool_type":1,"tool_id":1009,"created_at":"2023-08-03 20:20:58","updated_at":"2023-08-03 20:21:29","archived_at":null,"data":{"inn":null,"tel":null,"ogrn":null,"fp_id":null,"ga_id":null,"mg_id":null,"tt_id":null,"vp_id":null,"ym_id":null,"zd_id":null,"domain":"homeremtv.ru","gtm_id":null,"city_id":["auto"],"subid_1":null,"subid_2":null,"subid_3":null,"yuraddr":null,"yurname":null,"lkVersion":"sl","show_city":"no","direction_id":8,"new_offer_id":10,"trafficSources":"\u042f\u043d\u0434\u0435\u043a\u0441.\u0414\u0438\u0440\u0435\u043a\u0442","use_lead_proxy":"yes","form_add_modals":"0","form_modal_delay":null,"form_modal_header":null,"form_modal_btn_text":null,"form_add_phonemodals":"0","form_modal_subheader":null,"form_modalphone_delay":null,"form_modalphone_header":null,"form_modalphone_btn_text":null,"form_modalphone_subheader":null},"download":true};
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
    var city = {"id":777,"name":"","country":""};
    var thread = {"id":37605,"part_id":25308,"hash":null,"idp":"d515ed05-cc50-d0a7-48c025ced3bac5ab","title":"\u0420\u0435\u043c\u043e\u043d\u0442 \u0422\u0435\u043b\u0435\u0432\u0438\u0437\u043e\u0440\u043e\u0432 \u041b\u0435\u043d\u0434 1","type":8,"is_pm":0,"tool_type":1,"tool_id":1009,"created_at":"2023-08-03 20:20:58","updated_at":"2023-08-03 20:21:29","archived_at":null,"data":{"inn":null,"tel":null,"ogrn":null,"fp_id":null,"ga_id":null,"mg_id":null,"tt_id":null,"vp_id":null,"ym_id":null,"zd_id":null,"domain":"homeremtv.ru","gtm_id":null,"city_id":["auto"],"subid_1":null,"subid_2":null,"subid_3":null,"yuraddr":null,"yurname":null,"lkVersion":"sl","show_city":"no","direction_id":8,"new_offer_id":10,"trafficSources":"\u042f\u043d\u0434\u0435\u043a\u0441.\u0414\u0438\u0440\u0435\u043a\u0442","use_lead_proxy":"yes","form_add_modals":"0","form_modal_delay":null,"form_modal_header":null,"form_modal_btn_text":null,"form_add_phonemodals":"0","form_modal_subheader":null,"form_modalphone_delay":null,"form_modalphone_header":null,"form_modalphone_btn_text":null,"form_modalphone_subheader":null},"download":true};





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
        } else if (countryName === 'bel') {
            self.removeAttr('pattern');
            self.inputmask("+375 99-999-99-99", {
                "onincomplete": function () {
                    self.addClass('incomplete');
                    self.removeClass('complete');
                },
                "oncomplete": function () {
                    self.removeClass('incomplete');
                    self.addClass('complete');
                }
            });
        } else if (countryName === 'ua') {
            self.removeAttr('pattern');
            self.inputmask("+380 99-999-99-99", {
                "onincomplete": function () {
                    self.addClass('incomplete');
                    self.removeClass('complete');
                },
                "oncomplete": function () {
                    self.removeClass('incomplete');
                    self.addClass('complete');
                }
            });
        } else if (countryName === 'tur') {
            self.removeAttr('pattern');
            self.inputmask("0 (999) 999-99-99", {
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
    });

    (function ($) {
        $(function () {

            if (window.location.hostname.endsWith('.ua')) {
                countryName = 'ua';
            }
            if (window.location.hostname.endsWith('.by')) {
                countryName = 'bel';
            }
            if (window.location.hostname.endsWith('.kz')) {
                countryName = 'kaz';
            }
            if (window.location.hostname.endsWith('.tr')) {
                countryName = 'tur';
            }

            window.convertPrices = function () {
                if (
                    countryName == 'bel' ||
                    countryName == 'ua' ||
                    countryName == 'kaz' ||
                    countryName == 'az'
                ) {
                    if (countryName == 'bel') {
                        var currName = 'Бел.руб.';
                        var currDelim = 32;
                    }

                    if (countryName == 'ua') {
                        var currName = 'грн.';
                        var currDelim = 2.67;
                    }

                    if (countryName == 'kaz') {
                        var currName = 'тг';
                        var currDelim = 0.125;
                    }

                    if (countryName == 'az') {
                        var currName = 'AZN';
                        var currDelim = 35.74;
                    }

                    var regex = /(\d+)\s?((₽)|(ру?б?\.?)|(Ру?б?\.?))/gmi;

                    var pretext = function (priceStr) {
                        if (priceStr.includes('от')) {
                            if (countryName == 'az') {
                                priceStr = priceStr.replace('от', '').trim();
                                priceStr = priceStr.replace(currName, currName + '-dən');
                            }
                        }

                        return priceStr;
                    }

                    var convert = function (m, m1, m2, offset, s) {
                        var price = Math.ceil(m1 / currDelim);

                        if (
                            countryName == 'kaz'
                            // ||
                            // countryName == 'az'
                        ) {
                            if (price >= 100) {
                                price = Math.round(price / 100) * 100;
                            } else {
                                price = Math.round(price / 10) * 10;
                            }
                        }

                        var res = price + ' ' + currName;

                        return res;
                    }

                    jQuery(":contains(Руб),:contains(руб),:contains(р.),:contains(₽)").not('script,style,link').each(function () {
                        var self = jQuery(this);

                        if (self.children().length !== 0) {
                            return;
                        }

                        var text = self.text();

                        if (regex.test(text)) {
                            // console.log(text);
                            text = text.replace(regex, convert);
                            // console.log(text);

                            text = pretext(text);

                            self.text(text);
                        }
                    });
                }
            }

            // document.addEventListener("DOMContentLoaded", convertPrices);
            convertPrices();

            function insertParam(key, value) {
                key = encodeURI(key);
                value = encodeURI(value);
                var kvp = document.location.search.substr(1).split('&');
                var i = kvp.length;
                var x;
                while (i--) {
                    x = kvp[i].split('=');

                    if (x[0] == key) {
                        x[1] = value;
                        kvp[i] = x.join('=');
                        break;
                    }
                }
                if (i < 0) {
                    kvp[kvp.length] = [key, value].join('=');
                }
                document.location.search = kvp.join('&');
            }


            $('#city, .city-change').change(function (e) {
                if ($(this).parents('.not-city-select').length !== 0) {
                    return;
                }
                e.preventDefault();
                insertParam('city_id', $(this).val());
            });

            $('.select__list li, .header-city a.dropdown-item, .nice-select li').click(function () {
                if ($(this).parents('.not-city-select').length !== 0) {
                    return;
                }
                //e.preventDefault();
                insertParam('city_id', $(this).data('value'));
            });

        });
    })(jQuery);

    function urlencodeFormData(fd) {
        if (typeof URLSearchParams === 'function') {
            var params = new URLSearchParams();
            for (var pair of fd.entries()) {
                typeof pair[1] == 'string' && params.append(pair[0], pair[1]);
            }
            return params.toString();
        } else {
            var s = '';

            function encode(s) {
                return encodeURIComponent(s).replace(/%20/g, '+');
            }

            for (var pair of fd.entries()) {
                if (typeof pair[1] == 'string') {
                    s += (s ? '&' : '') + encode(pair[0]) + '=' + encode(pair[1]);
                }
            }
            return s;
        }
    }

    (function ($) {
        $(function () {
            //  находим справочные поля типа
            //  <input type="hidden" name="work" value="на сайте есть акция - Скидка до 15%">
            var saleInfoFields = $('input[name="work"]');

            saleInfoFields.each(function () {
                var self = $(this);
                var formEl = self.parents('form');
                var commentEl = formEl.find('textarea[name="work"]');

                //  если в форме есть textarea[name="work"] - переименовываем
                //  input[name="work"] в input[name="work2"]
                if (commentEl.length !== 0) {
                    self.prop('name', 'work2');
                }
            });

        });
    })(jQuery);
</script>

<div class="site-policy-line">
    <div class="site-policy-line-inner">
        Информация на данном ресурсе не является публичной офертой.
        <a href="politika-obrabotki-personalnyh-dannyh.html" target="_blank">
            Политика конфиденциальности
        </a>
    </div>
</div>

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
