<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RBTrem | Профессиональный ремонт посудомоечных машин</title>
    <link rel="stylesheet" href="{{ asset('assets/dishwasher/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dishwasher/css/style.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/dishwasher/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/dishwasher/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/dishwasher/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/dishwasher/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/dishwasher/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
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
                    <a class="nav-link" aria-current="page" href="#prices" style="color: black">Цены</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#advantages" style="color: black">Преимущества</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#work" style="color: black">Схема работы</a>
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


<section class="block-1" style="margin-top: 150px;">
    <div class="content-wrap">
        <div class="block-1__title">Ремонт <span>посудомоечных машин</span> на дому</div>
        <form class="sltop__form block-1__form " action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">
            <div class="block-1__input-wrap">
                <input type="text" name="fullname">
                <div class="block-1__input-placeholder">Имя</div>
            </div>
            <div class="block-1__input-wrap">
                <input type="tel" name="phone" _placeholder="+7 (___) ___-__-__"
                       data-inputmask="'mask': '+7 (999) 999-99-99'" required>
                <div class="block-1__input-placeholder">Номер телефона</div>
            </div>
            <button class="button block-1__btn" type="submit">Вызвать мастера
            </button>
            <div class="block-1__personal">Заполняя указанное выше поле, я даю <a href="/personal_data">согласие на обработку персональных данных</a>.</div>


            <input type="hidden" name="branch_id" value="0">
            <input type="hidden" name="is_pm" value="false">
            <input type="hidden" name="thread_id" value="37892">
            <input type="hidden" name="thread_type" value="3">
            <input type="hidden" name="sub_id1" value="">
            <input type="hidden" name="sub_id2" value="">
            <input type="hidden" name="sub_id3" value="">
            <input type="hidden" name="direction_id" value="2">

        </form>
        <div class="block-1__items">
            <div class="block-1__item"><img src="{{ asset('assets/dishwasher/images/block-1__icon-1.svg') }}" alt>
                <div class="block-1__item-title">Диагностика<br> и выезд бесплатно</div>
                <div class="block-1__item-subtitle">При ремонте у нас</div>
            </div>
            <div class="block-1__item"><img src="{{ asset('assets/dishwasher/images/block-1__icon-2.svg') }}" alt>
                <div class="block-1__item-title">Оригинальные запчасти</div>
                <div class="block-1__item-subtitle">И качественные аналоги</div>
            </div>
            <div class="block-1__item"><img src="{{ asset('assets/dishwasher/images/block-1__icon-3.svg') }}" alt>
                <div class="block-1__item-title">Гарантия</div>
                <div class="block-1__item-subtitle">До 3 лет на отдельные виды работ</div>
            </div>
            <div class="block-1__item"><img src="{{ asset('assets/dishwasher/images/block-1__icon-4.svg') }}" alt>
                <div class="block-1__item-title">Быстрый ремонт</div>
                <div class="block-1__item-subtitle">На месте, сложные случаи доставляем в&nbsp;сервис</div>
            </div>
        </div>
        <img class="block-1__decor" src="{{ asset('assets/dishwasher/images/block-1__decor.svg') }}" alt><img class="block-1__img hide-md"
                                                                                    src="{{ asset('assets/dishwasher/images/block-1__img.png') }}"
                                                                                    alt>
    </div>
</section>
<section class="block-2">
    <div class="content-wrap">
        <div class="block-2__left">
            <div class="section-title">Качественный ремонт любой сложности</div>
            <div class="block-2__left-text">Вы можете быть уверены в качестве, ведь наши мастера знают, как устроена
                техника современных брендов, а собственный склад оригинальных запчастей позволяет произвести ремонт
                прямо на дому. Если технике потребуется сложный ремонт мы отвезем ее в собственный сервисный центр и
                вернем по окончанию работ с гарантией на сделынный ремонт
            </div>
        </div>
        <div class="block-2__right">
            <div class="block-2__item">
                <div class="block-2__item-content">
                    <div class="block-2__item-title">< 968</div>
                    <div class="block-2__item-subtitle">Успешно выполнили более 968 ремонтов</div>
                </div>
                <div class="block-2__item-icon"><img src="{{ asset('assets/dishwasher/images/block-2__icon-1.svg') }}" alt></div>
            </div>
            <div class="block-2__item">
                <div class="block-2__item-content">
                    <div class="block-2__item-title">Никаких студентов</div>
                    <div class="block-2__item-subtitle">Только опытные<br> мастера</div>
                </div>
                <div class="block-2__item-icon"><img src="{{ asset('assets/dishwasher/images/block-2__icon-2.svg') }}" alt></div>
            </div>
            <div class="block-2__item">
                <div class="block-2__item-content">
                    <div class="block-2__item-title">94% случаев</div>
                    <div class="block-2__item-subtitle">Решаем проблему<br> за один выезд в 94% случаев</div>
                </div>
                <div class="block-2__item-icon"><img src="{{ asset('assets/dishwasher/images/block-2__icon-3.svg') }}" alt></div>
            </div>
            <div class="block-2__item">
                <div class="block-2__item-content">
                    <div class="block-2__item-title">Многолетний опыт</div>
                    <div class="block-2__item-subtitle">Умеем работать со всеми брендами посудомоечных машин</div>
                </div>
                <div class="block-2__item-icon"><img src="{{ asset('assets/dishwasher/images/block-2__icon-4.svg') }}" alt></div>
            </div>
        </div>
    </div>
</section>
<section class="block-3">
    <div class="swiper brands">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('assets/dishwasher/images/block-3__brand-1.png') }}" alt></div>
            <div class="swiper-slide"><img src="{{ asset('assets/dishwasher/images/block-3__brand-2.png') }}" alt></div>
            <div class="swiper-slide"><img src="{{ asset('assets/dishwasher/images/block-3__brand-3.png') }}" alt></div>
            <div class="swiper-slide"><img src="{{ asset('assets/dishwasher/images/block-3__brand-4.png') }}" alt></div>
            <div class="swiper-slide"><img src="{{ asset('assets/dishwasher/images/block-3__brand-5.png') }}" alt></div>
            <div class="swiper-slide"><img src="{{ asset('assets/dishwasher/images/block-3__brand-6.png') }}" alt></div>
            <div class="swiper-slide"><img src="{{ asset('assets/dishwasher/images/block-3__brand-7.png') }}" alt></div>
        </div>
    </div>
</section>
<section class="block-4" id="prices">
    <div class="content-wrap">
        <div class="section-title">Цены на ремонт<br> посудомоечных машин</div>
        <div class="block-4__table">
            <div class="block-4__table-head">
                <div class="block-4__head-cell hide-xs">Услуги</div>
                <div class="block-4__head-cell hide-xs">Стоимость</div>
                <div class="block-4__head-cell hide-xl show-xs">Услуги и стоимость</div>
            </div>
            <div class="block-4__table-content">

                <div class="block-4__table-row">
                    <div class="block-4__table-cell"></div>
                    <div class="block-4__table-cell"></div>
                    <div class="block-4__table-cell"><a href="#" data-popup="request">Заказать</a></div>
                </div>

            </div>
            <div class="block-4__table-more">
                <svg class="icon eye">
                    <use xlink:href="assets/images/sprite.svg#eye"></use>
                </svg>
                <span>Посмотреть все</span>
            </div>
        </div>
        <div class="block-4__text">* Цена ремонта зависит от бренда техники, вида и сложности неисправности. В таблицах
            ниже приведены минимальные<br> цены работ на частые виды поломок
        </div>
        <div class="block-4__payment-title">Принимаем к оплате:</div>
        <ul class="block-4__payment-text">
            <li>Наличные</li>
            <li>Visa</li>
            <li>MasterCard</li>
        </ul>
        <div class="block-4__discount">
            <div class="block-4__discount-title">Нашли цены дешевле?</div>
            <div class="block-4__discount-title">Подарим скидку!</div>
            <div class="block-4__discount-subtitle">Позвоните нам или закажите звонок</div>
            <button class="button block-4__discount-btn alt" data-toggle="modal" data-target="#callback">Вызвать мастера
            </button>
            <img class="block-4__discount-decor" src="{{ asset('assets/dishwasher/images/block-4__discount-decor.svg') }}" alt><img
                class="block-4__discount-img" src="{{ asset('assets/dishwasher/images/block-4__discount-img.png') }}" alt>
        </div>
    </div>
</section>
<section class="block-5" id="advantages">
    <div class="content-wrap">
        <div class="section-title">Почему обратиться в RBTrem — лучший<br> способ починить посудомоечную машину?</div>
        <div class="block-5__items">
            <div class="block-5__wrap hide-xl show-lg hide-md"></div>
            <div class="block-5__item">
                <div class="block-5__item-title">Монобрендовый<br> сервис</div>
                <div class="block-5__item-text">
                    <svg class="icon x">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#x') }}"></use>
                    </svg>
                    Работает только с одним брендом
                </div>
                <div class="block-5__item-text">
                    <svg class="icon x">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#x') }}"></use>
                    </svg>
                    Технику надо доставлять самостоятельно
                </div>
                <div class="block-5__item-text">
                    <svg class="icon x">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#x') }}"></use>
                    </svg>
                    Высокие цены
                </div>
                <div class="block-5__item-text">
                    <svg class="icon check">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#check') }}"></use>
                    </svg>
                    Гарантия по договору
                </div>
            </div>
            <div class="block-5__item main">
                <div class="block-5__item-title">RBTrem</div>
                <div class="block-5__item-text">
                    <svg class="icon check">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#check') }}"></use>
                    </svg>
                    Мастера, умеющие работать с брендом<br> и типом вашей техники
                </div>
                <div class="block-5__item-text">
                    <svg class="icon check">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#check') }}"></use>
                    </svg>
                    Выезд за 1 час
                </div>
                <div class="block-5__item-text">
                    <svg class="icon check">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#check') }}"></use>
                    </svg>
                    Склад запчастей и ремонт на дому
                </div>
                <div class="block-5__item-text">
                    <svg class="icon check">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#check') }}"></use>
                    </svg>
                    Доступные цены
                </div>
                <div class="block-5__item-text">
                    <svg class="icon check">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#check') }}"></use>
                    </svg>
                    Гарантия по договору
                </div>
                <button class="button block-5__btn" data-toggle="modal" data-target="#callback">Вызвать мастера
                </button>
                <div class="block-5__badge">
                    <svg class="icon block-5__decor">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#block-5__decor') }}"></use>
                    </svg>
                    Выбор<br> очевиден
                </div>
            </div>
            <div class="block-5__item">
                <div class="block-5__item-title">Частный мастер</div>
                <div class="block-5__item-text">
                    <svg class="icon x">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#x') }}"></use>
                    </svg>
                    С какими-то брендами работал,<br> с какими-то нет
                </div>
                <div class="block-5__item-text">
                    <svg class="icon x">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#x') }}"></use>
                    </svg>
                    Приедет когда сможет, а не когда удобно вам
                </div>
                <div class="block-5__item-text">
                    <svg class="icon x">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#x') }}"></use>
                    </svg>
                    Мелкие запчасти есть, но серьезные детали будет искать в магазине
                </div>
                <div class="block-5__item-text">
                    <svg class="icon x">
                        <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#x') }}"></use>
                    </svg>
                    Нет официальной гарантии
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block-6" id="work">
    <div class="content-wrap">
        <div class="section-title">Как мы работаем</div>
        <div class="block-6__item">
            <div class="block-6__num">1</div>
            <div class="block-6__item-content">
                <div class="block-6__title">Оставьте заявку</div>
                <div class="block-6__subtitle">Наш менеджер свяжется с вами, чтобы обсудить цену<br> и срок приезда
                    мастера
                </div>
            </div>
        </div>
        <div class="block-6__item">
            <div class="block-6__num">2</div>
            <div class="block-6__item-content">
                <div class="block-6__title">Диагностика</div>
                <div class="block-6__subtitle">К вам приезжает мастер и проводит диагностику.<br> Это бесплатно при
                    ремонте у нас
                </div>
            </div>
        </div>
        <div class="block-6__item">
            <div class="block-6__num">3</div>
            <div class="block-6__item-content">
                <div class="block-6__title">Ремонт</div>
                <div class="block-6__subtitle">Ремонт производится прямо на дому</div>
            </div>
        </div>
        <div class="block-6__item">
            <div class="block-6__num">4</div>
            <div class="block-6__item-content">
                <div class="block-6__title">Проверка работы</div>
                <div class="block-6__subtitle">После ремонта вы принимаете работу, чтобы убедиться<br> в устранении
                    неисправности
                </div>
            </div>
        </div>
        <div class="block-6__item">
            <div class="block-6__num">5</div>
            <div class="block-6__item-content">
                <div class="block-6__title">Оплата</div>
                <div class="block-6__subtitle">После оплаты вы получаете чек и гарантию до 3-х лет</div>
            </div>
        </div>
        <img class="block-6__img" src="{{ asset('assets/dishwasher/images/block-6__img.png') }}" alt>
    </div>
</section>
<section class="block-7">
    <div class="content-wrap">
        <div class="block-7__left">
            <div class="section-title">Починим вашу посудомоечную машину уже сегодня!</div>
            <div class="block-7__grid">
                <div class="block-7__item">
                    <div class="block-7__item-title">Выполнено ремонтов<br> за сегодня</div>
                    <div class="block-7__item-value">24</div>
                </div>
                <div class="block-7__item">
                    <div class="block-7__item-title">Мастеров<br> на линии</div>
                    <div class="block-7__item-value">15</div>
                </div>
                <div class="block-7__item">
                    <div class="block-7__item-title">Свободных мастеров сейчас</div>
                    <div class="block-7__item-value">5</div>
                </div>
                <div class="block-7__item">
                    <div class="block-7__item-title">Среднее время прибытия мастера</div>
                    <div class="block-7__item-value">39 минут</div>
                </div>
            </div>
            <button class="button block-7__btn" data-toggle="modal" data-target="#callback">Вызвать мастера
            </button>
        </div>
        <div class="block-7__map" id="map" style="background: url(https://www.hausdorf.ru/upload/iblock/4ed/foto_razmery_vstraivaemykh_posudomoechnykh_mashin_pm.jpg2.jpg) no-repeat center / cover">
        </div>
    </div>
</section>
<section class="block-8" id="reviews">
    <div class="content-wrap">
        <div class="block-8__title-wrap">
            <div class="section-title">Что говорят клиенты</div>
            <div class="block-8__btn"></div>
            <!--            <button class="button block-8__btn" data-popup="review">Оставить отзыв-->
            <!--            </button>-->
            <div class="block-8__slider-btn l">
                <svg class="icon chevron-r">
                    <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#chevron-r') }}"></use>
                </svg>
            </div>
            <div class="block-8__slider-btn r">
                <svg class="icon chevron-r">
                    <use xlink:href="{{ asset('assets/dishwasher/images/sprite.svg#chevron-r') }}"></use>
                </svg>
            </div>
        </div>
        <div class="block-8__slider">
            <div class="swiper reviews">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="block-8__author"><img class="block-8__author-photo"
                                                          src="{{ asset('assets/dishwasher/images/block-8__img-1.png') }}" alt>
                            <div class="block-8__author-info">
                                <div class="block-8__author-name">Ирина Мельникова</div>
                                <div class="block-8__author-type">Домохозяйка</div>
                            </div>
                        </div>
                        <div class="block-8__text">Сломалась дверь в посудомойке. Мастер оперативно приехал, все
                            починил. Очень деликатен, вежлив. Все рассказал, показал. Даже по стиральной машине дал
                            консультацию. Однозначно рекомендую!
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block-8__author"><img class="block-8__author-photo"
                                                          src="{{ asset('assets/dishwasher/images/block-8__img-2.png') }}" alt>
                            <div class="block-8__author-info">
                                <div class="block-8__author-name">Роман Ильин</div>
                                <div class="block-8__author-type">Предприниматель</div>
                            </div>
                        </div>
                        <div class="block-8__text">Спасибо мастеру Игорю за быструю и профессиональную помощь! Сразу
                            видно - человек разбирается в устройстве машины и может быстро решить проблему. А потом
                            объяснить и подсказать, как быть, если это повториться.
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block-8__author"><img class="block-8__author-photo"
                                                          src="{{ asset('assets/dishwasher/images/block-8__img-1.png') }}" alt>
                            <div class="block-8__author-info">
                                <div class="block-8__author-name">Ирина Мельникова</div>
                                <div class="block-8__author-type">Домохозяйка</div>
                            </div>
                        </div>
                        <div class="block-8__text">Сломалась дверь в посудомойке. Мастер оперативно приехал, все
                            починил. Очень деликатен, вежлив. Все рассказал, показал. Даже по стиральной машине дал
                            консультацию. Однозначно рекомендую!
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block-8__author"><img class="block-8__author-photo"
                                                          src="{{ asset('assets/dishwasher/images/block-8__img-2.png') }}" alt>
                            <div class="block-8__author-info">
                                <div class="block-8__author-name">Роман Ильин</div>
                                <div class="block-8__author-type">Предприниматель</div>
                            </div>
                        </div>
                        <div class="block-8__text">Спасибо мастеру Игорю за быструю и профессиональную помощь! Сразу
                            видно - человек разбирается в устройстве машины и может быстро решить проблему. А потом
                            объяснить и подсказать, как быть, если это повториться.
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block-8__author"><img class="block-8__author-photo"
                                                          src="{{ asset('assets/dishwasher/images/block-8__img-1.png') }}" alt>
                            <div class="block-8__author-info">
                                <div class="block-8__author-name">Ирина Мельникова</div>
                                <div class="block-8__author-type">Домохозяйка</div>
                            </div>
                        </div>
                        <div class="block-8__text">Сломалась дверь в посудомойке. Мастер оперативно приехал, все
                            починил. Очень деликатен, вежлив. Все рассказал, показал. Даже по стиральной машине дал
                            консультацию. Однозначно рекомендую!
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block-8__author"><img class="block-8__author-photo"
                                                          src="{{ asset('assets/dishwasher/images/block-8__img-2.png') }}" alt>
                            <div class="block-8__author-info">
                                <div class="block-8__author-name">Роман Ильин</div>
                                <div class="block-8__author-type">Предприниматель</div>
                            </div>
                        </div>
                        <div class="block-8__text">Спасибо мастеру Игорю за быструю и профессиональную помощь! Сразу
                            видно - человек разбирается в устройстве машины и может быстро решить проблему. А потом
                            объяснить и подсказать, как быть, если это повториться.
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block-8__author"><img class="block-8__author-photo"
                                                          src="{{ asset('assets/dishwasher/images/block-8__img-1.png') }}" alt>
                            <div class="block-8__author-info">
                                <div class="block-8__author-name">Ирина Мельникова</div>
                                <div class="block-8__author-type">Домохозяйка</div>
                            </div>
                        </div>
                        <div class="block-8__text">Сломалась дверь в посудомойке. Мастер оперативно приехал, все
                            починил. Очень деликатен, вежлив. Все рассказал, показал. Даже по стиральной машине дал
                            консультацию. Однозначно рекомендую!
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="block-8__author"><img class="block-8__author-photo"
                                                          src="{{ asset('assets/dishwasher/images/block-8__img-2.png') }}" alt>
                            <div class="block-8__author-info">
                                <div class="block-8__author-name">Роман Ильин</div>
                                <div class="block-8__author-type">Предприниматель</div>
                            </div>
                        </div>
                        <div class="block-8__text">Спасибо мастеру Игорю за быструю и профессиональную помощь! Сразу
                            видно - человек разбирается в устройстве машины и может быстро решить проблему. А потом
                            объяснить и подсказать, как быть, если это повториться.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-8__pagination"></div>
    </div>
</section>
<section class="block-9">
    <div class="content-wrap">
        <div class="section-title">Скидка 15% при заказе<br> ремонта через сайт</div>
        <div class="block-9__subtitle">Закажите ремонт посудомоечной машины сейчас и получите<br> максимальную выгоду!
        </div>
        <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">
            <div class="block-9__flex-wrap">
                <div class="block-1__input-wrap">
                    <input type="text" name="fullname">
                    <div class="block-1__input-placeholder">Имя</div>
                </div>
                <div class="block-1__input-wrap">
                    <input type="tel" name="phone" _placeholder="+7 (___) ___-__-__"
                           data-inputmask="'mask': '+7 (999) 999-99-99'" required>
                    <div class="block-1__input-placeholder">Номер телефона</div>
                </div>
            </div>
            <button class="button block-9__btn" type="submit">Вызвать мастера
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
        <div class="block-9__personal">Заполняя указанное выше поле, я даю <a href="/personal_data">согласие на обработку персональных данных</a>.</div>
        <div class="block-9__circle hide-xs"></div>
        <div class="block-9__img hide-xs"><img src="{{ asset('assets/dishwasher/images/block-9__img.png') }}" alt></div>
    </div>
</section>
<div class="container" style="margin-top: 100px;">
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






<script src="{{ asset('assets/dishwasher/js/vendor.js') }}"></script>

<script src="{{ asset('assets/dishwasher/js/scripts.js') }}"></script>
</body>


<script src="{{ asset('assets/dishwasher/node_modules/inputmask/dist/inputmask.min.js') }}"></script>
<script src="{{ asset('assets/dishwasher/node_modules/inputmask/dist/bindings/inputmask.binding.js') }}"></script>

<script src="{{ asset('assets/dishwasher/lib/get_ga_ya_clientID.js') }}"></script>
<script>
    SLGodObject.helpers.setAllCliendID();
</script>

<script src="{{ asset('assets/dishwasher/lib/lib.js') }}"></script>


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



</html>
