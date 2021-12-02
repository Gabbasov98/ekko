function sliderMain() {
    var swiper = new Swiper('.main .swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 0,
        effect: 'fade',
        speed: 1500,
        navigation: {
            nextEl: '.main .swiper-button-next',
            prevEl: '.main .swiper-button-prev',
        },
        pagination: {
            el: '.main .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 0
            },

        }
    })
}




$(document).ready(function() {
    cartCalc()
    sliderMain()
    $('input[type="tel"]').mask('+7 (999) 999-9999', { placeholder: '+7 (       )         -' });



    $(".nav__item").hover(onIn, onOut);


    $(".header__search-select-show").click(function() {
        $(this).addClass("header__search-select-show--active")
        $(".header__search-select-hidden").slideDown()
    })

    $(".header__catalog-item").hover(onIn2, onOut2);

    $(".header__catalog-show").click(function() {
        if ($(this).parents(".header__catalog").hasClass("header__catalog--active")) {
            $(".header__catalog").removeClass("header__catalog--active")
        } else {
            $(".header__catalog").removeClass("header__catalog--active")
            $(this).parents(".header__catalog").addClass("header__catalog--active")
        }

    })

    $(document).mouseup(function(e) { // событие клика по веб-документу
        var div = $(".header__catalog-hidden");
        if (!div.is(e.target) // если клик был не по нашему блоку
            &&
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.parents(".header__catalog").removeClass("header__catalog--active")
                // $(".header__search-select-show").removeClass("header__search-select-show--active")
        }
    });


    $(document).mouseup(function(e) { // событие клика по веб-документу
        var div = $(".header__search-select-hidden");
        if (!div.is(e.target) // если клик был не по нашему блоку
            &&
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.hide()
            $(".header__search-select-show").removeClass("header__search-select-show--active")
        }
    });


    $(".questions__item-show").click(function() {
        if ($(this).parents(".questions__item").hasClass("questions__item--active")) {
            $(this).parents(".questions__item").removeClass("questions__item--active")
        } else {
            $(".questions__item-show").parents(".questions__item").removeClass("questions__item--active")
            $(this).parents(".questions__item").addClass("questions__item--active")
        }
    })

})

function clickOutsideElemnt(div, e) {
    if (!div.is(e.target) &&
        div.has(e.target).length === 0) {
        div.hide();
    }
}

function cartCalc() {
    $('.ccalc .ccalc-minus').click(function() {
        let a = $(this).closest('.ccalc').find('input').val();
        if (a > 1) {
            let b = +a - 1;
            $(this).closest('.ccalc').find('input').val(b);
        } else {
            $(this).closest('.ccalc').find('input').val(a);
            $(this).addClass("disabled");
        }
    });
    $('.ccalc .ccalc-plus').click(function() {
        let a = $(this).closest('.ccalc').find('input').val();
        let b = +a + 1;
        $(this).closest('.ccalc').find('input').val(b);
        $(this).siblings(".ccalc-minus").removeClass("disabled");
    });
}


function onIn() {
    if (window.innerWidth > 992) {
        let el = $(this)
        setTimeout(function() {
            if (el.is(':hover')) {
                console.log(el)
                el.children(".nav__item-show").addClass("nav__item-show--active")
            }
        }, 200);
    }
}

function onOut() {
    if (window.innerWidth > 992) {
        $(this).children(".nav__item-show").removeClass("nav__item-show--active")
    }
}

function onIn2() {
    if (window.innerWidth > 992) {
        let el = $(this)
        setTimeout(function() {
            if (el.is(':hover')) {
                console.log(el)
                el.children(".header__catalog-item-show").addClass("header__catalog-item-show--active")
            }
        }, 200);
    }
}

function onOut2() {
    if (window.innerWidth > 992) {
        $(this).children(".header__catalog-item-show").removeClass("header__catalog-item-show--active")
    }
}