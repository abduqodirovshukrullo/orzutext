$(document).ready(function () {

        // Fakes the loading setting a timeout
        setTimeout(function () {
            $('body').addClass('loaded');
        }, 3500);

    function videoUrl(link) {
        $('#mainVideo').src = link;
    }

    var videoBlog = $('.media-main-video');
    var videoTeg = $('.media-main-video-item')[0];

    play = false;

    videoBlog.click(function() {
        if(play){
            videoTeg.pause();
            play = false;
            $('.media-video-play').css('opacity', 1)
        }else{
            videoTeg.play();
            play = true;
            $('.media-video-play').css('opacity', 0)
        }
    });

    $('.vacancy-item').click(function() {
        var parent = $(this).closest('.vacancy-block');
        parent.toggleClass('vacancy-js')
        parent.find('.vacancy-text-block').slideToggle();
    });

    $('.counter-item-title').counterUp({delay:15,time:2500});

    $(".fancybox").fancybox();

    $('.photo-in-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        fade: true,
        asNavFor: '.photo-in-slider-nav'
    });
    $('.photo-in-slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.photo-in-slider-for',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ],
    });

    wow = new WOW(
        {
            boxClass: 'wow',      // default
            animateClass: 'animated', // default
            offset: 0,          // default
            mobile: true,       // default
            live: false        // default

        }
    )
    wow.init();

     /* menu modal */
    $('.ham-menu').click(function () {
        $('.header-center-container-bottom').fadeIn();
    });
    function closeSerchModal(e){
        var target = $(e.target);
        if(target.is('.header-center-container-bottom')){
            target.fadeOut();
        }
    }
    $('.header-center-container-bottom').click( closeSerchModal );

    /* menu modal */

    $('.header-lang-top').click(function(){
        $('.header-lang-bottom').slideToggle();
        $(this).toggleClass('rotate-arrow');
    })

    $('.main-tower-btn1').click(function(){
        $(this).addClass('active');
        $('.main-tower-btn2').removeClass('active');
    });

    $('.main-tower-btn2').click(function(){
        $(this).addClass('active');
        $('.main-tower-btn1').removeClass('active');
    })
    $('.product-btn1').click(function(){
        $(this).addClass('active');
        $('.product-btn2').removeClass('active');
        $('.product-btn3').removeClass('active');
    });
    $('.product-btn2').click(function(){
        $(this).addClass('active');
        $('.product-btn1').removeClass('active');
        $('.product-btn3').removeClass('active');
    });
    $('.product-btn3').click(function(){
        $(this).addClass('active');
        $('.product-btn1').removeClass('active');
        $('.product-btn2').removeClass('active');
    });

    $('.main-slider').slick({
        dots: true,
        arrows: true,
        // fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: `<button class="main-slider-arrow arrow-right">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
\t viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve">
\t\t<path d="M388.418,240.923L153.751,6.256c-8.341-8.341-21.824-8.341-30.165,0s-8.341,21.824,0,30.165L343.17,256.005
\t\t\tL123.586,475.589c-8.341,8.341-8.341,21.824,0,30.165c4.16,4.16,9.621,6.251,15.083,6.251c5.461,0,10.923-2.091,15.083-6.251
\t\t\tl234.667-234.667C396.759,262.747,396.759,249.264,388.418,240.923z"/>
</svg>
        </button>`,
        nextArrow: `<button class="main-slider-arrow arrow-left">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
\t viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve">
\t\t<path d="M388.418,240.923L153.751,6.256c-8.341-8.341-21.824-8.341-30.165,0s-8.341,21.824,0,30.165L343.17,256.005
\t\t\tL123.586,475.589c-8.341,8.341-8.341,21.824,0,30.165c4.16,4.16,9.621,6.251,15.083,6.251c5.461,0,10.923-2.091,15.083-6.251
\t\t\tl234.667-234.667C396.759,262.747,396.759,249.264,388.418,240.923z"/>
</svg>
        </button>`,
    });
    $('.sertificates-block').slick({
        dots: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // fade: true,
        // autoplay: true,
        // autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
    });
    $('.logo-slider').slick({
        dots: true,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        // fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
                        {
                            breakpoint: 1199,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
            
                            }
                        },
                        {
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow:3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 575,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow:2,
                                slidesToScroll: 1
                            }
                        }
                    ],
    });
    
});

// function myFunction(yopish){
//     yopish.classList.toggle('change');
// }

    $(function () { AOS.init({ 
        offset: 100,
        duration: 1000, 
        easing: "ease-out-quad", 
        once: !0 }); 
        window.addEventListener('load', AOS.refresh); });
var config = document.querySelector('#MixItUpE4BE3F');
var mixer = mixitup(config);

$(document).ready(function () {
    $(document).on('click', '.main-tower-mix', function () {
        var element = $(this);
        var id = $(this).attr('data-id');
        var type = $(this).attr('data-type-id');
        element.html("...");
        $.ajax({
            url: '/productMore',
            method: "GET",
            data: {id: id, type: type},
            dataType: "text",
            success: function (data) {
                if (data !== '') {
                    $('.filtering').append(JSON.parse(data).content);
                    element.attr("data-id", JSON.parse(data).id)
                    element.html(JSON.parse(data).lang);
                }
                else {
                    element.html("РќР•Рў Р”РђРќРќР«РҐ");
                }
            }
        });
    });
});

$(document).on('click', '.control-filter button', function () {
   
    if ($("button[data-filter='.filters_1']").hasClass('mixitup-control-active')) {
        $('.main-tower-mix').attr('data-type-id', 1);
    }
    if ($("button[data-filter='.filters_2']").hasClass('mixitup-control-active')) {
        $('.main-tower-mix').attr('data-type-id', 2);
    }
})

var config = document.querySelector('#MixItUpE4');
var mixer = mixitup(config);

$(document).ready(function () {
    $(document).on('click', '.brand-mix', function () {
        var element = $(this);
        var id = $(this).attr('data-id');
        var type = $(this).attr('data-type-id');
        element.html("...");
        $.ajax({
            url: '/productMore',
            method: "GET",
            data: {id: id, type: type},
            dataType: "text",
            success: function (data) {
                if (data !== '') {
                    $('.filtering').append(JSON.parse(data).content);
                    element.attr("data-id", JSON.parse(data).id)
                    element.html(JSON.parse(data).lang);
                }
                else {
                    element.html("РќР•Рў Р”РђРќРќР«РҐ");
                }
            }
        });
    });
});

$(document).on('click', '.control-filter button', function () {
   
    if ($("button[data-filter='.brand_1']").hasClass('mixitup-control-active')) {
        $('.brand-mix').attr('data-type-id', 1);
    }
    if ($("button[data-filter='.brand_2']").hasClass('mixitup-control-active')) {
        $('.brand-mix').attr('data-type-id', 2);
    }
    if ($("button[data-filter='.brand_3']").hasClass('mixitup-control-active')) {
        $('.brand-mix').attr('data-type-id', 2);
    }
})





