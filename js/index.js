function sliderMain() {
    var swiper = new Swiper('.main .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: ' .main .swiper-button-next',
            prevEl: ' .main .swiper-button-prev',
        },
        pagination: {
            el: '.main .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 30
            },
        }
    })
}

function sliderCatalog() {
    var swiper = new Swiper('.collection__slider--green .swiper-container', {
        spaceBetween: 6,
        navigation: {
            nextEl: '.collection__slider--green .swiper-button-next',
            prevEl: '.collection__slider--green .swiper-button-prev',
        },
        pagination: {
            el: '.collection__slider--green .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 6
            },
            560: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
            1240: {
                slidesPerView: 5,
            },

        }
    })
}

function sliderCatalog2() {
    var swiper = new Swiper('.collection__slider--brown .swiper-container', {
        spaceBetween: 6,
        navigation: {
            nextEl: '.collection__slider--brown .swiper-button-next',
            prevEl: '.collection__slider--brown .swiper-button-prev',
        },
        pagination: {
            el: '.collection__slider--brown .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 6
            },
            560: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
            1240: {
                slidesPerView: 5,
            },

        }
    })
}


function gallery() {
    var swiper = new Swiper(".catalog-item .mySwiper", {
        spaceBetween: 10,
        slidesPerView: "5",
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".catalog-item .mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".catalog-item .swiper-button-next",
            prevEl: ".catalog-item .swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
}




$(document).ready(function() {
    cartCalc()
    sliderMain()
    sliderCatalog()
    sliderCatalog2()
    gallery()

    $('input[type="tel"]').mask('+7 (999) 999-9999', { placeholder: '+7 (   )    -    ' });



    $(".nav__item").hover(onIn, onOut);
    $(".nav__item-show").click(function() {
        if ($(this).hasClass("nav__item-show--active")) {
            $(".nav__item-show").removeClass("nav__item-show--active")
        } else {
            $(".nav__item-show").removeClass("nav__item-show--active")
            $(this).addClass("nav__item-show--active")
        }

    })


    $(".header__search-select-show").click(function() {
        $(this).addClass("header__search-select-show--active")
        $(this).siblings(".header__search-select-hidden").slideDown()
    })

    $(".header__catalog-item").hover(onIn2, onOut2);
    $(".header__catalog-item-show").click(function() {
        if (window.innerWidth < 992) {
            $(this).toggleClass("header__catalog-item-show--active")
        }
    })


    $(".header__catalog-show").click(function() {
        if ($(this).parents(".header__catalog").hasClass("header__catalog--active")) {
            $(".header__catalog").removeClass("header__catalog--active")
        } else {
            $(".header__catalog").removeClass("header__catalog--active")
            $(this).parents(".header__catalog").addClass("header__catalog--active")
        }

    })

    $(document).mouseup(function(e) { // ?????????????? ?????????? ???? ??????-??????????????????
        var div = $(".header__catalog-hidden");
        if (!div.is(e.target) // ???????? ???????? ?????? ???? ???? ???????????? ??????????
            &&
            div.has(e.target).length === 0) { // ?? ???? ???? ?????? ???????????????? ??????????????????
            div.parents(".header__catalog").removeClass("header__catalog--active")
                // $(".header__search-select-show").removeClass("header__search-select-show--active")
        }
    });


    $(document).mouseup(function(e) { // ?????????????? ?????????? ???? ??????-??????????????????
        var div = $(".header__search-select-hidden");
        if (!div.is(e.target) // ???????? ???????? ?????? ???? ???? ???????????? ??????????
            &&
            div.has(e.target).length === 0) { // ?? ???? ???? ?????? ???????????????? ??????????????????
            div.hide()
            $(".header__search-select-show").removeClass("header__search-select-show--active")
        }
    });

    $(".header__burger").click(function() {
        $(this).toggleClass("header__burger--active")
        $("body").toggleClass("fixed-body")
        $(".header-top__center").slideToggle()
    })

    $(".header__lang--active").click(function() {
        $(this).parents(".header__langs").addClass("header__langs--active")
    })

    $(document).mouseup(function(e) { // ?????????????? ?????????? ???? ??????-??????????????????
        var div = $(".header__langs");
        if (!div.is(e.target) // ???????? ???????? ?????? ???? ???? ???????????? ??????????
            &&
            div.has(e.target).length === 0) { // ?? ???? ???? ?????? ???????????????? ??????????????????
            // div.hide()
            if ($(".header__langs").hasClass("header__langs--active")) {
                $(".header__langs").removeClass("header__langs--active")
            }
        }
    });


    $(".collection__tab").click(function() {
        let path = $(this).attr("data-tabs-path")
        console.log(path)
        $(".collection__tab").removeClass("collection__title--active")
        $(`.collection__tab[data-tabs-path="${path}"]`).addClass("collection__title--active")
        $(".collection__content").removeClass("collection__content--active")
        $(`.collection__content[data-content-path="${path}"]`).addClass("collection__content--active")
            // sliderCatalog()
        if (path == 2) {
            sliderCatalog2()
        }
    })
    $(".questions__item-show").click(function() {
        if ($(this).parents(".questions__item").hasClass("questions__item--active")) {
            $(this).parents(".questions__item").removeClass("questions__item--active")
        } else {
            $(".questions__item-show").parents(".questions__item").removeClass("questions__item--active")
            $(this).parents(".questions__item").addClass("questions__item--active")
        }
    })

    $(".catalog__filter-item-show").click(function() {
        $(this).toggleClass("catalog__filter-item-show--active")
    })

    $(".catalog__filter-top").click(function() {
        $(this).toggleClass("catalog__filter-top--active")
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