



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

    @yield('content')


