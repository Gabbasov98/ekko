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



    $(".custom-scroll").mCustomScrollbar();
    $(".custom-scroll-x").mCustomScrollbar({
        axis: "x",
        theme: "light-3",
        advanced: {
            autoExpandHorizontalScroll: true
        }
    });

    if ($(window).innerWidth() < 768) {
        $(".custom-scroll-x-mob").mCustomScrollbar({
            axis: "x",
            theme: "light-3",
            advanced: {
                autoExpandHorizontalScroll: true
            }
        });
    }


    $(".consultation select").niceSelect()
    $(".modal1 select").niceSelect()


    $(".header__burger").click(function() {
        $(".header-menu").show()
        $("body").addClass("fixed-body")
    })



    $(document).mouseup(function(e) {
        var div = $(".header__cart-hidden");
        clickOutsideElemnt(div, e)
    });

    $(".header__search-cancel").click(function() {
        $(this).siblings("input").val('')
    })

    $(".map__info-item").click(function() {
        console.log(true)
        $(".map__info-item").removeClass("map__info-item--active")
        $(this).addClass("map__info-item--active")
    })

    $(".cabinet-user__top").click(function() {
        $(this).toggleClass("cabinet-user__top--active")
    })

    $(".cabinet-nav__top").click(function() {
        $(this).toggleClass("cabinet-nav__top--active")
    })

    $(".cabinet-orders__all").click(function() {
        $(this).hide();
        $(".cabinet-orders__table-row").removeClass("cabinet-orders__table-row--hidden")
    })

    $(".cabinet-bonus__all").click(function() {
        $(this).hide();
        $(".cabinet-bonus__table-row").removeClass("cabinet-bonus__table-row--hidden")
    })

    $(".cabinet-pass__pass-toggle").click(function() {
        if ($(this).hasClass("cabinet-pass__pass-toggle--active")) {
            console.log(true)
            $(this).removeClass("cabinet-pass__pass-toggle--active")
            $(this).siblings("input").attr("type", "password")
        } else {
            $(this).addClass("cabinet-pass__pass-toggle--active")
            $(this).siblings("input").attr("type", "text")
            console.log(false)
        }
    })

    $(".category__sidebar-show").click(function() {
        $(this).toggleClass("category__sidebar-show--active")
    })

    $(document).mouseup(function(e) { // событие клика по веб-документу
        var div = $(".category__sidebar"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            &&
            div.has(e.target).length === 0 &&
            $(".category__sidebar-show").hasClass("category__sidebar-show--active")) { // и не по его дочерним элементам
            $(".category__sidebar-show").removeClass("category__sidebar-show--active")
        }
    });

    $(".order__tab").click(function() {
        let path = $(this).attr("data-tab-path");
        $(".order__tab").removeClass("order__tab--active");
        $(`.order__tab[data-tab-path="${path}"]`).addClass("order__tab--active");
        $(".order__content").removeClass("order__content--active");
        $(`.order__content[data-content-path="${path}"]`).addClass("order__content--active");

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