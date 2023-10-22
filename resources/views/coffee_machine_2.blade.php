<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/coffee_machine_2/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/coffee_machine_2/css/style.css') }}">
    <link rel="preload" href="{{ asset('assets/coffee_machine_2/fonts/Montserrat-Regular.ttf') }}" as="font"
          crossorigin>
    <link rel="preload" href="{{ asset('assets/coffee_machine_2/fonts/Montserrat-SemiBold.ttf') }}" as="font"
          crossorigin>
    <link rel="preload" href="{{ asset('assets/coffee_machine_2/fonts/Montserrat-Bold.ttf') }}" as="font" crossorigin>
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('assets/coffee_machine_2/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ asset('assets/coffee_machine_2/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ asset('assets/coffee_machine_2/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/coffee_machine_2/images/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/coffee_machine_2/images/favicons/safari-pinned-tab.svg') }}"
          color="#8d2148">
    <link rel="shortcut icon" href="{{ asset('assets/coffee_machine_2/images/favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#8d2148">
    <meta name="msapplication-config"
          content="{{ asset('assets/coffee_machine_2/images/favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#8d2148">
    <title>Ремонт кофемашин</title>
    <meta name="description" content="Бесплатный выезд мастера в день обращения. Гарантия на все работы.">


    <link rel="stylesheet" href="{{ asset('assets/header/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header/my_css.css') }}">

</head>
<body id="body">


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
                    <a class="nav-link" aria-current="page" href="#guarantees" style="color: black">Гарантии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#breakdowns" style="color: black">Что мы ремонтируем</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#steps" style="color: black">Как мы работаем</a>
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
<section class="heroscreen">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="heroscreen__title">
                    Ремонт кофемашин<br>
                </h1>
                <p class="heroscreen__description">Бесплатный выезд мастера в день обращения</p>
                <form class="sltop__form heroscreen__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                    <input class="input heroscreen__form-input" type="tel" name="phone"
                           placeholder="Введите номер телефона">
                    <button class="button heroscreen__form-button" type="submit">Получить консультацию</button>
                    <p class="heroscreen__form-privicy">Заполняя указанное выше поле, я даю <a href="/personal_data" style="color: black">согласие на обработку персональных данных</a>.
                    <input type="hidden" name="fullname" value="без имени">

                        <input type="hidden" name="branch_id" value="0">
                        <input type="hidden" name="is_pm" value="false">
                        <input type="hidden" name="thread_id" value="37892">
                        <input type="hidden" name="thread_type" value="3">
                        <input type="hidden" name="sub_id1" value="">
                        <input type="hidden" name="sub_id2" value="">
                        <input type="hidden" name="sub_id3" value="">
                        <input type="hidden" name="direction_id" value="2">
                </form>
                <div class="heroscreen__advantages">
                    <div class="heroscreen__advantages-item">
                        <h3 class="heroscreen__advantages-item-title">Бесплатно</h3>
                        <p class="heroscreen__advantages-item-text">диагностика проблем</p>
                    </div>
                    <div class="heroscreen__advantages-item">
                        <h3 class="heroscreen__advantages-item-title">1 год</h3>
                        <p class="heroscreen__advantages-item-text">гарантия на работу</p>
                    </div>
                    <div class="heroscreen__advantages-item">
                        <h3 class="heroscreen__advantages-item-title">1 час</h3>
                        <p class="heroscreen__advantages-item-text">среднее время ремонта</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5"><img class="heroscreen__image"
                                       src="{{ asset('assets/coffee_machine_2/images/heroscreen__image.png') }}"></div>
        </div>
    </div>
</section>
<section class="guarantees" id="guarantees">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="guarantees__title">Гарантия на все работы</h2>
                <p class="guarantees__description">После каждого выполненного ремонта мы выписываем гарантию на 1 год.
                    Гарантия распространяется как на комплектующие, так и на услуги нашего сервисного центра</p>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="row">
                    <div class="col-lg-6">
                        <article class="guarantees__grid-item">
                            <svg class="icon guarantees__grid-item-icon" role="icon">
                                <use xlink:href="{{ asset('assets/coffee_machine_2/images/sprite.svg#repair') }}"></use>
                            </svg>
                            <p class="guarantees__grid-item-text"><b>Оригинальные</b> запчасти</p>
                        </article>
                        <article class="guarantees__grid-item">
                            <svg class="icon guarantees__grid-item-icon" role="icon">
                                <use xlink:href="{{ asset('assets/coffee_machine_2/images/sprite.svg#wagon') }}"></use>
                            </svg>
                            <p class="guarantees__grid-item-text">Ремонт <b>на выезде</b> и в официальном центре</p>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="guarantees__grid-item">
                            <svg class="icon guarantees__grid-item-icon" role="icon">
                                <use xlink:href="{{ asset('assets/coffee_machine_2/images/sprite.svg#clock') }}"></use>
                            </svg>
                            <p class="guarantees__grid-item-text">Работаем <b>ежедневно</b></p>
                        </article>
                        <article class="guarantees__grid-item">
                            <svg class="icon guarantees__grid-item-icon" role="icon">
                                <use xlink:href="{{ asset('assets/coffee_machine_2/images/sprite.svg#worker') }}"></use>
                            </svg>
                            <p class="guarantees__grid-item-text"><b>Опытные</b> и квалифицированные мастера</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="breakdowns" id="breakdowns">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="breakdowns__image-wrapper"><img class="breakdowns__image"
                                                            src="{{ asset('assets/coffee_machine_2/images/breakdowns__image.png') }}">
                </div>
            </div>
            <div class="col-lg-7">
                <h2 class="breakdowns__title">Выберите неисправность</h2>
                <div class="row" style="height: 100%;">
                    <div class="col-md-6 breakdowns__list-first">
                        <article class="breakdowns__item breakdowns__item--active" data-price="1490">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Не включается</p>
                        </article>
                        <article class="breakdowns__item" data-price="1190">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Не греет воду</p>
                        </article>
                        <article class="breakdowns__item" data-price="1190">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Не подаёт воду</p>
                        </article>
                        <article class="breakdowns__item" data-price="1190">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Кофе слабый и невкусный</p>
                        </article>
                        <article class="breakdowns__item" data-price="1190">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Протекает или сливает в поддон</p>
                        </article>
                        <article class="breakdowns__item" data-price="1190">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Нет индикации на кофемашине</p>
                        </article>
                    </div>
                    <div class="col-md-6 breakdowns__list-second">
                        <article class="breakdowns__item" data-price="1490">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Необходима настройка</p>
                        </article>
                        <article class="breakdowns__item" data-price="1490">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Не перемалывает кофе</p>
                        </article>
                        <article class="breakdowns__item" data-price="1490">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Кофе выходит холодный</p>
                        </article>
                        <article class="breakdowns__item" data-price="1190">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Не делает пену из капучинатора</p>
                        </article>
                        <article class="breakdowns__item" data-price="1190">
                            <div class="breakdowns__item-bullet"></div>
                            <p class="breakdowns__item-text">Кофе/вода плохо течет, малый напор</p>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr class="breakdowns__hr">
                <div class="breakdowns__amount">Стоимость ремонта: <b>&nbsp;от&nbsp;<span
                            class="breakdowns__amount-price">1490</span>&nbsp;₽</b>
                    <button class="button breakdowns__amount-button" data-toggle="modal" data-target=".modal">У меня
                        другая поломка
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="steps" id="steps">
    <div class="container">
        <h2 class="steps__title">Как мы работаем</h2>
        <div class="steps__grid">
            <artilce class="steps__grid-item">
                <header class="steps__grid-item-header">
                    <div class="steps__grid-item-header-index">1</div>
                    <img class="steps__grid-item-header-image"
                         src="{{ asset('assets/coffee_machine_2/images/steps__image-1.png') }}">
                    <hr class="steps__grid-item-header-dash">
                </header>
                <div class="steps__grid-item-content">
                    <h3 class="steps__grid-item-content-title">Отправка заявки</h3>
                    <p class="steps__grid-item-content-text">Осталяете заявку на нашем сайте или по телефону</p>
                </div>
            </artilce>
            <artilce class="steps__grid-item">
                <header class="steps__grid-item-header">
                    <div class="steps__grid-item-header-index">2</div>
                    <img class="steps__grid-item-header-image"
                         src="{{ asset('assets/coffee_machine_2/images/steps__image-2.png') }}">
                    <hr class="steps__grid-item-header-dash">
                </header>
                <div class="steps__grid-item-content">
                    <h3 class="steps__grid-item-content-title">Диагностика</h3>
                    <p class="steps__grid-item-content-text">Мастер приезжает и проводит бесплатную диагностику</p>
                </div>
            </artilce>
            <artilce class="steps__grid-item">
                <header class="steps__grid-item-header">
                    <div class="steps__grid-item-header-index">3</div>
                    <img class="steps__grid-item-header-image"
                         src="{{ asset('assets/coffee_machine_2/images/steps__image-3.png') }}">
                    <hr class="steps__grid-item-header-dash">
                </header>
                <div class="steps__grid-item-content">
                    <h3 class="steps__grid-item-content-title">Согласование</h3>
                    <p class="steps__grid-item-content-text">Проводим согласование цены и сроков ремонта</p>
                </div>
            </artilce>
            <artilce class="steps__grid-item">
                <header class="steps__grid-item-header">
                    <div class="steps__grid-item-header-index">4</div>
                    <img class="steps__grid-item-header-image"
                         src="{{ asset('assets/coffee_machine_2/images/steps__image-4.png') }}">
                </header>
                <div class="steps__grid-item-content">
                    <h3 class="steps__grid-item-content-title">Ремонт</h3>
                    <p class="steps__grid-item-content-text">Осуществление ремонта, оплата производится после ремонта,
                        когда вы видите готовый результат</p>
                </div>
            </artilce>
        </div>
    </div>
</section>
<section class="brands">
    <div class="container">
        <h2 class="brands__title">Ремонтируем кофемашины<br> всех известных брендов</h2>
        <div class="brands__grid">
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__siemens.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__bork.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__krups.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__philips.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__bosch.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__fulgor.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__miele.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__delonghi.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__saeco.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__aeg.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__gaggia.png') }}">
            </article>
            <article class="brands__grid-item"><img class="brands__grid-item-image"
                                                    src="{{ asset('assets/coffee_machine_2/images/brands__zug.png') }}">
            </article>
        </div>
    </div>
</section>
<section class="reviews" id="reviews">
    <div class="container">
        <h2 class="reviews__title">Что говорят о нас клиенты</h2>
        <div class="reviews__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="reviews__slider-slide">
                        <figure class="reviews__slider-figure"><img class="reviews__slider-figure-image"
                                                                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-1.png') }}">
                            <figcaption class="reviews__slider-figure-caption">Лиза</figcaption>
                        </figure>
                        <div class="reviews__slider-comment">Кофемашина Saeco не работала, на дисплее высвечивалась
                            ошибка. Позвонили в ваш сервис. Мастер посмотрел и определил, что проблема в паровом блоке.
                            Заменил на новый. Машина снова в строю. Спасибо!
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="reviews__slider-slide">
                        <figure class="reviews__slider-figure"><img class="reviews__slider-figure-image"
                                                                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-2.png') }}">
                            <figcaption class="reviews__slider-figure-caption">Сергей</figcaption>
                        </figure>
                        <div class="reviews__slider-comment">Из-за поломки пароблока кофемашина не грела воду. Позвонил,
                            вызвал мастера, договорился на удобное время, на вечер, Мастер пришел точно вовремя,
                            грамотно, а главное, бесплатно, сделал диагностику и отремонтировал на месте. Все отлично,
                            придраться не к чему)
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="reviews__slider-slide">
                        <figure class="reviews__slider-figure"><img class="reviews__slider-figure-image"
                                                                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-3.png') }}">
                            <figcaption class="reviews__slider-figure-caption">Светлана</figcaption>
                        </figure>
                        <div class="reviews__slider-comment">Случилась неприятность — кофемашина перестала делать пену.
                            Вызвала мастера, после диагностики он поставил диагноз — вышла из строя помпа. Пришлось
                            оплатить замену, благо цены нормальные. Качество отличное!
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="reviews__slider-slide">
                        <figure class="reviews__slider-figure"><img class="reviews__slider-figure-image"
                                                                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-4.png') }}">
                            <figcaption class="reviews__slider-figure-caption">Ирина</figcaption>
                        </figure>
                        <div class="reviews__slider-comment">Кофемашина отключилась и отказывалась включаться, как потом
                            оказалось, забились фильтры. Вызвала мастера из вашего СЦ, он машину почистил, сделал
                            декальцинацию. Уже через пару часов я наслаждалась натуральным вкусным кофе! Спасибо за
                            оперативность!
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="reviews__slider-slide">
                        <figure class="reviews__slider-figure"><img class="reviews__slider-figure-image"
                                                                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-5.png') }}">
                            <figcaption class="reviews__slider-figure-caption">Мария</figcaption>
                        </figure>
                        <div class="reviews__slider-comment">Была проблема с кофемашиной — не наливала кофе. Нашла ваш
                            сайт, оставила заявку и уже в тот же день пришел мастер, все на месте разобрал, почистил.
                            Все быстро, четко было сделано, по сумме недорого, я довольна вашей работой, буду
                            обращаться.
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="reviews__slider-slide">
                        <figure class="reviews__slider-figure"><img class="reviews__slider-figure-image"
                                                                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-6.png') }}">
                            <figcaption class="reviews__slider-figure-caption">Андрей</figcaption>
                        </figure>
                        <div class="reviews__slider-comment">Обращаличь в центр по поводу ремонта кофемашины Philips —
                            надо было поменять датчик нагрева кофе. Все было сделано в лучшем виде, быстро, качественно
                            и цена порадовала. Надежный сервис, рекомендую!
                        </div>
                    </article>
                </div>
            </div>
            <div class="reviews__slider-pagination"><img class="reviews__slider-pagination-item"
                                                         src="{{ asset('assets/coffee_machine_2/images/reviews__image-1.png') }}"><img
                    class="reviews__slider-pagination-item"
                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-2.png') }}"><img
                    class="reviews__slider-pagination-item"
                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-3.png') }}"><img
                    class="reviews__slider-pagination-item"
                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-4.png') }}"><img
                    class="reviews__slider-pagination-item"
                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-5.png') }}"><img
                    class="reviews__slider-pagination-item"
                    src="{{ asset('assets/coffee_machine_2/images/reviews__image-6.png') }}"></div>
        </div>
    </div>
</section>
<section class="questions">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="questions__title">У вас остались вопросы?</h2>
                <p class="questions__description">Оставьте заявку и через 15 минут наш менеджер вам перезвонит и
                    проконсультирует</p>
                <form class="sltop__form" action="https://secretapi.ru/bt/addorders?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab">

                    <input class="input questions__form-input" type="tel" name="phone"
                           placeholder="Введите номер телефона">
                    <button class="button questions__form-button" type="submit">Заказать звонок</button>
                    <p class="questions__form-privicy">Заполняя указанное выше поле, я даю <a href="/personal_data">согласие на обработку персональных данных</a>.
                    <input type="hidden" name="fullname" value="без имени">

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
            <div class="col-md-6">
                <div class="map" id="yamap"></div>
            </div>
        </div>
    </div>
</section>
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





<script src="{{ asset('assets/coffee_machine_2/js/vendor.js') }}"></script>
<script src="{{ asset('assets/coffee_machine_2/js/script.js') }}"></script>
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
                    "id": 37607,
                    "part_id": 25308,
                    "hash": null,
                    "idp": "d515ed05-cc50-d0a7-48c025ced3bac5ab",
                    "title": "\u0420\u0435\u043c\u043e\u043d\u0442 \u043a\u043e\u0444\u0435\u043c\u0430\u0448\u0438\u043d \u041b\u0435\u043d\u0434 2",
                    "type": 2,
                    "is_pm": 0,
                    "tool_type": 1,
                    "tool_id": 1117,
                    "created_at": "2023-08-03 20:24:00",
                    "updated_at": "2023-08-03 20:24:36",
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
                        "domain": "coffe-remont.ru",
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
                        "new_offer_id": 68,
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
        "id": 37607,
        "part_id": 25308,
        "hash": null,
        "idp": "d515ed05-cc50-d0a7-48c025ced3bac5ab",
        "title": "\u0420\u0435\u043c\u043e\u043d\u0442 \u043a\u043e\u0444\u0435\u043c\u0430\u0448\u0438\u043d \u041b\u0435\u043d\u0434 2",
        "type": 2,
        "is_pm": 0,
        "tool_type": 1,
        "tool_id": 1117,
        "created_at": "2023-08-03 20:24:00",
        "updated_at": "2023-08-03 20:24:36",
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
            "domain": "coffe-remont.ru",
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
            "new_offer_id": 68,
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
        "id": 37607,
        "part_id": 25308,
        "hash": null,
        "idp": "d515ed05-cc50-d0a7-48c025ced3bac5ab",
        "title": "\u0420\u0435\u043c\u043e\u043d\u0442 \u043a\u043e\u0444\u0435\u043c\u0430\u0448\u0438\u043d \u041b\u0435\u043d\u0434 2",
        "type": 2,
        "is_pm": 0,
        "tool_type": 1,
        "tool_id": 1117,
        "created_at": "2023-08-03 20:24:00",
        "updated_at": "2023-08-03 20:24:36",
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
            "domain": "coffe-remont.ru",
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
            "new_offer_id": 68,
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
    fetch('/addorders.php')
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            var branchInputs = document.getElementsByName('branch_id');

            window.detectedBranchData = data.branchData;

            for (var i = 0; i < branchInputs.length; ++i) {
                branchInputs[i].value = data.branchData.id;
            }
            // console.log(data.ip + ' - ' + data.branchData.name + ' (id: ' + data.branchData.id + ')');
        });
</script>


<script>
    window.hcaptcha2 = {
        reset: function () {
        }
    };
</script>

</body>
</html>
