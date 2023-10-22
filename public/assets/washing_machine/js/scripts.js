function TogglePopup(type) {
    type == 'hide' ? $('html').removeClass() : $('.popup').hide().filter(`.${type}`).show().parents('html').addClass(`popup ${type}`);
}

$(() => {
    new Swiper('.swiper.brands', {
        spaceBetween: 40,
        slidesPerView: 'auto',
        navigation: {
            prevEl: '.block-2__slider-arrow.l',
            nextEl: '.block-2__slider-arrow.r'
        }
    });

    new Swiper('.swiper.reviews', {
        spaceBetween: 40,
        slidesPerView: 'auto',
        navigation: {
            prevEl: '.block-6__arrow.l',
            nextEl: '.block-6__arrow.r'
        }
    });

    // ymaps.ready(() => {
    //     let map = new ymaps.Map('map', {
    //         center: [53.902284, 27.561831],
    //         zoom: 12,
    //         controls: [
    //             'zoomControl'
    //         ]
    //     },
    //     {
    //         suppressMapOpenBlock: true
    //     });
    // });

    $('[data-popup]').click(function(e) {
        let $this = $(e.currentTarget),
            popup = $this.data('popup');
        if ( e.currentTarget === e.target || e.currentTarget.tagName == 'A' ) {
            TogglePopup(popup);
            let product = '';
            if ( $this.hasClass('block-3__table-link') )
                product = $this.parents('.block-3__table-row').find('.block-3__table-cell:first-child').text();
            $('.popup.request input[name="product"]').val(product);
            return false;
        }
    });

    if ( navigator.userAgent.indexOf('Mac') > 0 )
        $('html').attr('data-is-mac', 'true');

    //$('input[type="tel"]').mask("+7 (999) 999-99-99");
});