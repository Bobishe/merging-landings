<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кофемаш-сервис | Профессиональный ремонт кофемашин</title>
    <link rel="stylesheet" href="{{ asset('assets/coffee_machine/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/coffee_machine/css/style.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/coffee_machine/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/coffee_machine/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/coffee_machine/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/coffee_machine/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/coffee_machine/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
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
                    <a class="nav-link" aria-current="page" href="#advantages" style="color: black">Преимущества</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#work" style="color: black">Схема работы</a>
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


<section class="block-1" style="margin-top: 100px;">
    <div class="content-wrap">
        <div class="block-1__title">Ремонт <span>кофемашин</span> на дому</div>
        <div class="block-1__items">
            <div class="block-1__item">
                <div class="block-1__item-icon"><img
                        src="{{ asset('assets/coffee_machine/images/block-1__icon-1.svg') }}" alt></div>
                <div class="block-1__item-text">Выезд и диагностика - <span>бесплатно</span>, при дальнейшем ремонте у&nbsp;нас
                </div>
            </div>
            <div class="block-1__item">
                <div class="block-1__item-icon"><img
                        src="{{ asset('assets/coffee_machine/images/block-1__icon-2.svg') }}" alt></div>
                <div class="block-1__item-text">Гарантия <span>до 2 лет</span> на отдельные виды работ</div>
            </div>
            <div class="block-1__item">
                <div class="block-1__item-icon"><img
                        src="{{ asset('assets/coffee_machine/images/block-1__icon-3.svg') }}" alt></div>
                <div class="block-1__item-text">Ремонт <span>быстро</span>, на месте, сложные случаи доставляем в сервис
                </div>
            </div>
            <div class="block-1__item">
                <div class="block-1__item-icon"><img
                        src="{{ asset('assets/coffee_machine/images/block-1__icon-4.svg') }}" alt></div>
                <div class="block-1__item-text">Оригинальные запчасти и <span>качественные</span> аналоги</div>
            </div>
        </div>
        <form class="block-1__form sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

        <svg class="hide-sm" width="420" height="480" viewBox="0 0 420 480" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="419" height="479" rx="19.5" stroke="white" stroke-dasharray="4 4"></rect>
            </svg>
            <div class="block-1__form-title">Срочный выезд мастера за час!</div>
            <div class="block-1__form-input">
                <input type="text" placeholder="Имя" name="fullname">
            </div>
            <div class="block-1__form-input">
                <input type="tel" placeholder="Телефон" name="phone" data-inputmask="'mask': '+7 (999) 999-99-99'"
                       required>
            </div>
            <div style="text-align: center; ">
                Заполняя указанное выше поле, я даю <a href="/personal_data" style="color: black">согласие на обработку
                    персональных данных</a>.
            </div>
            <button class="button block-1__form-btn alt" type="submit">Вызвать мастера
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
        <img class="block-1__ellipse first" src="{{ asset('assets/coffee_machine/images/block-1__ellipse-1.svg') }}"
             alt><img
            class="block-1__ellipse second" src="{{ asset('assets/coffee_machine/images/block-1__ellipse-2.svg') }}"
            alt><img class="block-1__img"
                     src="{{ asset('assets/coffee_machine/images/block-1__img.png') }}"
                     alt>
        <div class="block-1__quality"><img class="block-1__quality-ellipse"
                                           src="{{ asset('assets/coffee_machine/images/block-1__ellipse-3.svg') }}"
                                           alt>
            <div class="block-1__quality-text"><span>100%</span><br> качество</div>
        </div>
    </div>
</section>
<section class="block-2">
    <div class="content-wrap">
        <div class="section-title">Качественный ремонт кофемашин любой сложности</div>
        <div class="block-2__flex-wrap">
            <div class="block-2__text">Обращаясь за ремонтом к нам вы можете быть уверены в качестве, ведь наши мастера
                знают как устроена техника современных брендов, а собственный склад оригинальных запчастей позволяет
                произвести ремонт прямо на дому. В случае, если технике потребуется сложный ремонт мы готовы отвезти её
                в собственный сервисный центр и вернуть по окончанию работ. И конечно же предоставить гарантию на
                работы.
            </div>
            <div class="block-2__items">
                <div class="block-2__item">
                    <div class="block-2__item-icon"><img
                            src="{{ asset('assets/coffee_machine/images/block-2__icon-1.svg') }}" alt></div>
                    <div class="block-2__item-text">Успешно выполнили более <span>968 ремонтов</span></div>
                </div>
                <div class="block-2__item">
                    <div class="block-2__item-icon"><img
                            src="{{ asset('assets/coffee_machine/images/block-2__icon-2.svg') }}" alt></div>
                    <div class="block-2__item-text">Никаких студентов - только мастера с <span>опытом работы</span>
                    </div>
                </div>
                <div class="block-2__item">
                    <div class="block-2__item-icon"><img
                            src="{{ asset('assets/coffee_machine/images/block-2__icon-3.svg') }}" alt></div>
                    <div class="block-2__item-text">Решаем проблему за один выезд в <span>94% случаев</span></div>
                </div>
            </div>
        </div>
        <div class="block-2__slider-wrap">
            <div class="block-2__slider-text">Умеем работать со всеми <span>популярными и редкими брендами</span>
                кофемашин
            </div>
            <div class="block-2__slider">
                <div class="swiper brands">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/coffee_machine/images/block-2__brand-1.svg') }}"></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/coffee_machine/images/block-2__brand-2.svg') }}"></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/coffee_machine/images/block-2__brand-3.svg') }}"></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/coffee_machine/images/block-2__brand-4.svg') }}"></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/coffee_machine/images/block-2__brand-5.svg') }}"></div>
                    </div>
                </div>
                <div class="block-2__slider-arrow l">
                    <svg class="icon chevron-l">
                        <use xlink:href="{{ asset('assets/coffee_machine/images/sprite.svg#chevron-l') }}"></use>
                    </svg>
                </div>
                <div class="block-2__slider-arrow r">
                    <svg class="icon chevron-l">
                        <use xlink:href="{{ asset('assets/coffee_machine/images/sprite.svg#chevron-l') }}"></use>
                    </svg>
                </div>
            </div>
        </div>
        <img class="block-2__ellipse" src="{{ asset('assets/coffee_machine/images/block-2__ellipse.svg') }}" alt>
    </div>
</section>
<section class="block-3" id="prices">
    <div class="content-wrap">
        <div class="section-title">Цены на&nbsp;ремонт кофемашин</div>
        <div class="block-3__flex-wrap">
            <div class="block-3__table">
                <div class="block-3__table-head">
                    <div class="block-3__head-cell">Услуга</div>
                    <div class="block-3__head-cell">Цена</div>
                </div>
                <div class="block-3__table-body">

                    <div class="block-3__table-row">
                        <div class="block-3__table-cell"></div>
                        <div class="block-3__table-cell"></div>
                        <div class="block-3__table-cell"><a class="block-3__table-link" href="#"
                                                            data-popup="request">Заказать</a></div>
                    </div>

                </div>

            </div>
            <div class="block-3__payment">
                <div class="block-3__payment-text">Цена ремонта зависит от бренда техники, вида и сложности
                    неисправности. В таблицах ниже приведены минимальные цены работ на частые виды поломок. Диагностика
                    и выезд мастера бесплатный, при условии дальнейшего ремонта у нас.
                </div>
                <div class="block-3__payment-subtitle">Принимаем к оплате:</div>
                <div class="block-3__payment-items">
                    <div class="block-3__payment-item"><img
                            src="{{ asset('assets/coffee_machine/images/block-3__icon-1.png') }}" alt>
                        <div class="block-3__payment-title">Наличные</div>
                    </div>
                    <div class="block-3__payment-item"><img
                            src="{{ asset('assets/coffee_machine/images/block-3__icon-2.png') }}" alt>
                        <div class="block-3__payment-title">VISA</div>
                    </div>
                    <div class="block-3__payment-item"><img
                            src="{{ asset('assets/coffee_machine/images/block-3__icon-3.png') }}" alt>
                        <div class="block-3__payment-title">Mastercard</div>
                    </div>
                </div>
                <div class="block-3__payment-text">Нашли цены дешевле? Дадим скидку!<br> Звоните
                    <span></span></div>
            </div>
        </div>
        <form class="block-3__form sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">


        <svg class="hide-md" width="1380" height="306" viewBox="0 0 1380 306" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="1379" height="305" rx="19.5" stroke="white" stroke-dasharray="4 4"></rect>
            </svg>
            <svg class="hide-lg show-md hide-sm" width="688" height="400" viewBox="0 0 688 400" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="687" height="399" rx="19.5" stroke="white" stroke-dasharray="4 4"></rect>
            </svg>
            <div class="block-3__form-title">Рассчитать точную стоимость ремонта, а также вызвать мастера<br> или
                получить консультацию можно с помощью формы
            </div>
            <div class="block-3__form-flex">
                <div class="block-3__form-input">
                    <input type="text" placeholder="Имя" name="fullname">
                </div>
                <div class="block-3__form-input">
                    <input type="tel" placeholder="Телефон" name="phone" data-inputmask="'mask': '+7 (999) 999-99-99'"
                           required>
                </div>
                <button class="button block-3__form-btn alt" type="submit">Вызвать мастера
                </button>
            </div>
            <div class="block-3__form-text">Заполняя указанное выше поле, я даю <a href="/personal_data"
                                                                                   style="color: black">согласие на
                    обработку персональных данных</a>.
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
<section class="block-4" id="advantages">
    <div class="content-wrap">
        <div class="section-title">Почему обратиться в Кофемаш-сервис - лучший способ починить кофемашину</div>
        <div class="block-4__items">
            <div class="block-4__item">
                <div class="block-4__item-title">Монобрендовый сервис</div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/x.svg') }}" alt>Работает
                    только с одним брендом
                </div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/x.svg') }}" alt>Технику
                    надо доставлять
                    самостоятельно
                </div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/x.svg') }}" alt>Цены
                    как правило высокие
                </div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/check.svg') }}" alt>Гарантия
                    по договору
                </div>
            </div>
            <div class="block-4__item main">
                <div class="block-4__item-title">Кофемаш-сервис</div>
                <div class="block-4__item-line"></div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/check.svg') }}" alt>Мастера,
                    умеющие работать с
                    брендом и типом вашей техники
                </div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/check.svg') }}" alt>Выезд
                    за 1 час
                </div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/check.svg') }}" alt>Склад
                    запчастей и ремонт на дому
                </div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/check.svg') }}" alt>Доступные
                    цены
                </div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/check.svg') }}" alt>Гарантия
                    по договору
                </div>
                <button class="button block-4__item-btn" data-toggle="modal" data-target="#callback">Вызвать мастера
                </button>
                <div class="block-4__item-badge"><img
                        src="{{ asset('assets/coffee_machine/images/block-4__ellipse.svg') }}" alt><span>Выбор<br> очевиден!</span>
                </div>
            </div>
            <div class="block-4__item">
                <div class="block-4__item-title">Частный мастер</div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/x.svg') }}" alt>С
                    какими-то брендами работал, с
                    какими-то нет
                </div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/x.svg') }}" alt>Приедет
                    когда сможет, а не когда
                    удобно вам
                </div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/x.svg') }}" alt>Мелкие
                    запчасти есть, но серьезные
                    детали будет искать в магазине
                </div>
                <div class="block-4__item-check"><img src="{{ asset('assets/coffee_machine/images/x.svg') }}" alt>Зачастую
                    по вопросам гарантии не
                    дозвониться
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block-5" id="work">
    <div class="content-wrap">
        <div class="section-title">Как мы работаем</div>
        <div class="block-5__subtitle">Качественный ремонт кофемашины за <span>5 шагов</span></div>
        <div class="block-5__content">
            <img src="{{ asset('assets/coffee_machine/images/block-5__image.png') }}" class="block-5__image">
            <div class="block-5__items">
                <div class="block-5__item">
                    <div class="block-5__num">1<img
                            src="{{ asset('assets/coffee_machine/images/block-5__ellipse.svg') }}" alt></div>
                    <div class="block-5__text">Вы оставляете заявку на сайте или по телефону, мы связываемся с вами,
                        называем цену и срок приезда мастера
                    </div>
                    <svg class="icon arrow-r">
                        <use xlink:href="{{ asset('assets/coffee_machine/images/sprite.svg#arrow-r') }}"></use>
                    </svg>
                </div>
                <div class="block-5__item">
                    <div class="block-5__num">2<img
                            src="{{ asset('assets/coffee_machine/images/block-5__ellipse.svg') }}" alt></div>
                    <div class="block-5__text">К вам выезжает мастер и проводит диагностику. Это бесплатно при
                        ремонте у нас
                    </div>
                    <svg class="icon arrow-r">
                        <use xlink:href="{{ asset('assets/coffee_machine/images/sprite.svg#arrow-r') }}"></use>
                    </svg>
                </div>
                <div class="block-5__item">
                    <div class="block-5__num">3<img
                            src="{{ asset('assets/coffee_machine/images/block-5__ellipse.svg') }}" alt></div>
                    <div class="block-5__text">Мастер производит ремонт прямо на дому, используя оригинальные
                        запчасти
                    </div>
                    <svg class="icon arrow-r">
                        <use xlink:href="{{ asset('assets/coffee_machine/images/sprite.svg#arrow-r') }}"></use>
                    </svg>
                </div>
                <div class="block-5__item">
                    <div class="block-5__num">4<img
                            src="{{ asset('assets/coffee_machine/images/block-5__ellipse.svg') }}" alt></div>
                    <div class="block-5__text">После завершения ремонта вы&nbsp;принимаете работу, убеждаетесь в
                        устранении проблемы и качестве услуг
                    </div>
                    <svg class="icon arrow-r">
                        <use xlink:href="{{ asset('assets/coffee_machine/images/sprite.svg#arrow-r') }}"></use>
                    </svg>
                </div>
                <div class="block-5__item">
                    <div class="block-5__num">5<img
                            src="{{ asset('assets/coffee_machine/images/block-5__ellipse.svg') }}" alt></div>
                    <div class="block-5__text">Оплачиваете работы любым удобным Вам способом, получаете чек и
                        гарантию до 24 месяцев
                    </div>
                </div>
            </div>
        </div>
        <!-- <img class="block-5__img" src="assets/images/block-5__img.png" alt> -->
    </div>
</section>
<section class="block-7">
    <div class="content-wrap">
        <div class="block-7__flex-wrap">
            <div class="block-7__contacts">
                <div class="section-title">Починим вашу кофемашину уже сегодня!</div>
                <div class="block-7__text">Выполнено ремонтов за сегодня: <span>24</span></div>
                <div class="block-7__text">Мастеров на линии: <span>15</span></div>
                <div class="block-7__text">Свободных мастеров: <span>5</span></div>
                <div class="block-7__text">Среднее время прибытия мастера: ~ <span>39 минут</span></div>
                <a class="block-7__text phone" href=""></a>
                <button class="button block-7__button" data-toggle="modal" data-target="#callback">Вызвать мастера
                </button>
            </div>
            <div class="block-7__map" id="-map"
                 style="background: url(https://coffeemachina.com/wp-content/uploads/2019/05/kofemashina-doma.jpg) no-repeat center / cover">

            </div>
        </div>
    </div>
</section>
<section class="block-6" id="reviews">
    <div class="content-wrap">
        <div class="section-title">Что говорят клиенты</div>
        <div class="block-6__slider">
            <div class="swiper reviews">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="block-6__slider-name">Полина Волгина</div>
                        <div class="block-6__slider-separator"></div>
                        <div class="block-6__slider-type">Сгорел термопредохранитель
                        </div>
                        <div class="block-6__slider-text">В одно ужасное утро моя любимица – кофемашина померла. Жить
                            без кофе я не собиралась, потому сразу вызвала мастера. Рада, что наткнулась на
                            Кофемаш-сервис, мало того, что починили все хорошо, так еще и скидку большую сделал. Всем
                            советую.
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block-6__slider-name">Арсений Рогозин</div>
                        <div class="block-6__slider-separator"></div>
                        <div class="block-6__slider-type">Не варила</div>
                        <div class="block-6__slider-text">Вызывал мастера из Кофемаш-сервиса из-за сбоя в работе
                            проф-кофемашины, потому что так выгоднее и быстрее, чем обращаться к другим мастерам или в
                            сервисные центры. Всегда выручает!
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block-6__slider-name">Марта Белова</div>
                        <div class="block-6__slider-separator"></div>
                        <div class="block-6__slider-type">Сломался рожок
                        </div>
                        <div class="block-6__slider-text">Сломался рожок в кофемашине на работе. Мастер где-то через час
                            после звонка и вернул аппарат к жизни за считанные часы. Но больше всего позитивных эмоций
                            вызвала довольно демократичная цена. Здесь реально выгодно ремонтироваться. В случае чего
                            буду обращаться только к этому спецу.
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block-6__slider-name">Дмитрий Горин</div>
                        <div class="block-6__slider-separator"></div>
                        <div class="block-6__slider-type">Кофемашина Nespresso</div>
                        <div class="block-6__slider-text">Чинил здесь капсульную кофемашину Nespresso. Лучший мастер из
                            тех, что мне попадались. Ответственно подходит к работе и всегда находится в тесном контакте
                            с клиентом.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-6__arrows">
            <div class="block-6__arrow l">
                <svg class="icon chevron-l">
                    <use xlink:href="{{ asset('assets/coffee_machine/images/sprite.svg#chevron-l') }}"></use>
                </svg>
            </div>
            <div class="block-6__arrow r">
                <svg class="icon chevron-l">
                    <use xlink:href="{{ asset('assets/coffee_machine/images/sprite.svg#chevron-l') }}"></use>
                </svg>
            </div>
        </div>

    </div>
</section>
<section class="block-8">
    <div class="content-wrap">
        <form class="block-8__form sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">


        <svg class="hide-sm" width="540" height="498" viewBox="0 0 540 498" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="539" height="497" rx="19.5" stroke="white" stroke-dasharray="4 4"></rect>
            </svg>
            <div class="block-8__title">Скидка 15% при заказе ремонта через сайт</div>
            <div class="block-8__subtitle">Закажите ремонт кофемашины сейчас<br> и получите максимальную выгоду!
            </div>
            <div class="block-8__input">
                <input type="text" placeholder="Имя" name="fullname">
            </div>
            <div class="block-8__input">
                <input type="tel" placeholder="Телефон" name="phone" data-inputmask="'mask': '+7 (999) 999-99-99'"
                       required>
            </div>
            <div style="text-align: center; ">
                Заполняя указанное выше поле, я даю <a href="/personal_data" style="color: black">согласие на обработку
                    персональных данных</a>.
            </div>
            <button class="button block-8__btn alt" type="submit">Вызвать мастера
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
        <img class="block-8__ellipse first" src="{{ asset('assets/coffee_machine/images/block-8__ellipse-1.svg') }}"
             alt><img
            class="block-8__ellipse second" src="{{ asset('assets/coffee_machine/images/block-8__ellipse-2.svg') }}"
            alt><img class="block-8__img"
                     src="{{ asset('assets/coffee_machine/images/block-8__img.png') }}"
                     alt>
    </div>
</section>


<div class="w-100 bg-light" style="margin-top: 220px;">
    <footer class="py-3 my-4 container">
        <p class="text-center text-muted">&copy; 2023 Ремонт бытовой техники</p>
    </footer>
</div>


<script src="https://lk.newapi.ru/stat/37892/js"></script>
<script src="{{asset('assets/send_lead.js')}}"></script>


<script src="{{ asset('assets/coffee_machine/js/vendor.js') }}"></script>
<script src="{{ asset('assets/coffee_machine/js/scripts.js') }}"></script>


<script src="{{ asset('assets/coffee_machine/node_modules/inputmask/dist/inputmask.min.js') }}"></script>
<script
    src="{{ asset('assets/coffee_machine/node_modules/inputmask/dist/bindings/inputmask.binding.js') }}"></script>

<script src="{{ asset('assets/coffee_machine/lib/get_ga_ya_clientID.js') }}"></script>
<script>
    SLGodObject.helpers.setAllCliendID();
</script>

<script src="{{ asset('assets/coffee_machine/lib/lib.js') }}"></script>


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
