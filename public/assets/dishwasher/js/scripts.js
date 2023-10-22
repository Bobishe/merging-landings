function TogglePopup(type) {
    if ( $('html').hasClass('popup') && type !== 'hide' ) {
        TogglePopup('hide');
        setTimeout(TogglePopup.bind(null, type), 300);
    } else
        type === 'hide'
            ? $('html').removeClass()
            : $('.popup').hide().filter(`.${type}`).show().parents('html').addClass(`popup ${type}`);
}

$(() => {
    new Swiper('.swiper.brands', {
        slidesPerView: 'auto',
        centeredSlides: true,
        loop: true,
        autoplay: true
    });

    new Swiper('.swiper.reviews', {
        spaceBetween: 28,
        slidesPerView: 'auto',
        navigation: {
            prevEl: '.block-8__slider-btn.l',
            nextEl: '.block-8__slider-btn.r'
        },
        pagination: {
            el: '.block-8__pagination',
            type: 'bullets'
        },
        breakpoints: {
            768: {
                slidesPerGroup: 2
            }
        }
    });

    $('input, textarea').focusin(e => {
       let $this = $(e.currentTarget);
       $this.next().addClass('moved');
    }).focusout(e => {
        let $this = $(e.currentTarget);
        if ( !$this.val() )
            $this.next().removeClass('moved');
    });

    $('.block-4__table-more').click(e => {
        let $this = $(e.currentTarget),
            table = $this.parent();
        table.toggleClass('opened');
        $this.find('span').text(table.hasClass('opened') ? 'Скрыть' : 'Посмотреть все');
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
            let work = '';
            if ( $this.parent().hasClass('block-4__table-cell') )
                work = $this.parents('.block-4__table-row').find('.block-4__table-cell:first-child').text();
            $('.popup.request input[name="work"]').val(work);
            return false;
        }
    });

    if ( navigator.userAgent.indexOf('Mac') > 0 )
        $('html').attr('data-is-mac', 'true');
});