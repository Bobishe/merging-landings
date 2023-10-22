<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('assets/header/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header/my_css.css') }}">

</head>
<body>





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

                    <form class="sltop__form"
                          action="addorders.php?idp=d515ed05-cc50-d0a7-48c025ced3bac5ab"
                    >
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

                        <input type="hidden" name="view_id" value="">
                        <input type="hidden" name="branch_id" value="777">
                        <input type="hidden" name="idp" value="d515ed05-cc50-d0a7-48c025ced3bac5ab">
                        <input type="hidden" name="is_pm" value="false">
                        <input type="hidden" name="thread_id" value="37605">
                        <input type="hidden" name="thread_type" value="1">



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





<div class="container">
    <footer class="py-3 my-4">
        <p class="text-center text-muted">&copy; 2023 Ремонт бытовой техники</p>
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


</body>
</html>
