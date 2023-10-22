$('[href^="#"]').on('click', function(){
  var target = $(this).attr('href');
  $('html, body').animate({scrollTop: $(target).offset().top - 100}, 300);
  return false;
});

const reviews = new Swiper('.reviews__content', {
  slidesPerView: 1,
  spaceBetween: 20,
  watchSlidesProgress: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    991: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  }
});

// Конструктор модалки
class Modal {
  constructor(container, options) {
    this.container = document.querySelector(container);
    this.options = {
      activeClass: 'show',
      close: this.container.querySelector('[data-dissmis="modal"]'),
      triggers: document.querySelectorAll(`[data-modal="${container}"]`),
      scrollWidth: (function () {
        let div = document.createElement('div');
        let scrollWidth;
        div.style.overflowY = 'scroll';
        div.style.width = '50px';
        div.style.height = '50px';
        document.body.append(div);
        scrollWidth = div.offsetWidth - div.clientWidth;
        div.remove();
        return scrollWidth;
      }()),
      // Деструктуризируем в конце,
      // чтобы переприсвоить дефолтные опции кастомными
      ...options,
    };

    this.options.triggers.forEach((item) => {
      item.addEventListener('click', () => this.show());
    });

    this.options.close?.addEventListener('click', () => this.hide());
  }

  modal(type) {
    type === 'show'
    ? this.show()
    : this.hide();
  }

  show() {
    this.container.classList.add(this.options.activeClass);
    this.#disableOverflow();
  }

  hide() {
    this.container.classList.remove(this.options.activeClass);
    this.#enableOverflow();
  }

  #disableOverflow() {
    body.style.overflow = 'hidden';
    body.style.overflow = this.options.scrollWidth;
  }

  #enableOverflow() {
    body.style.overflow = 'hidden';
    body.style.overflow = '';
  }
}


// Инит модалок
let modalCta = new Modal('.modal--cta', {
  activeClass: 'modal--show'
});

let modalReviews = new Modal('.modal--review', {
  activeClass: 'modal--show'
});

let menu = new Modal('.menu', {
  activeClass: 'menu--show',
});

let menuItems = document.querySelectorAll('.header__menu-item');
menuItems.forEach(
  item => item.addEventListener('click', () => menu.modal('hide'))
);

// Добавляет в скрытый input модальки название услуги
let serviceButton = document.querySelectorAll('.pricelist__item-button');
serviceButton.forEach(function(item) {
  item.addEventListener('click', ({ target }) => {
    let title = 
      target.parentNode.querySelector('.pricelist__item-title').innerText + ' –– ' +
      target.parentNode.querySelector('.pricelist__item-value').innerText
    let input = document.querySelector('.modal--cta input[name="work"]');
    input.setAttribute('value', title);
  })
});
