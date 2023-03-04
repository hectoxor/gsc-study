$(document).ready(function() {
    $(document).on("click", function(event) {
        var target = event.target;
        if (!$(target).hasClass('cities_choice')) {
            $('.other_city').slideUp();
            $('.cities').removeClass('active');
        }
    });

    $('.cities_choice').on("click", function() {
        $(this).siblings('.other_city').slideToggle();
        $(this).parent('.cities').toggleClass('active');
    });

    $('.search-icon').on("click", function() {
        $('.search').toggleClass('active');
    });


    $.fn.setCursorPosition = function(pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    };
    //   mask phone
    $('input[type="tel"]').click(function() {
        $(this).setCursorPosition(3);
    }).mask("+7 (999) 999 99 99");

    let alertt = document.querySelector(".alert--fixed");
    let alertClose = document.querySelectorAll(".alert--close")
    for (let item of alertClose) {
        item.addEventListener('click', function(event) {
            alertt.classList.remove("alert--active")
            alertt.classList.remove("alert--warning")
            alertt.classList.remove("alert--error")
        })
    }
    $('.way').waypoint({
        handler: function() {
            $(this.element).addClass("way--active")
        },
        offset: '90%'
    });


    (function() {
        const header = document.querySelector('.header__top.header__top-in');
        window.onscroll = () => {
            if (header && window.pageYOffset > 50) {
                header.classList.add('header_active');
            } else if (header) {
                header.classList.remove('header_active');
                if ($(".padding-top")[0]) {
                    $('.header__top.header__top-in').addClass('header_active');
                }
            }
        };
    }());

    (function() {
        if ($(".padding-top")[0]) {
            $('.header__top.header__top-in').addClass('header_active');
        }
    }());


    $('.nav__items li a[href*="#"],  [href*="#"]').on('click.smoothscroll', function(e) {
        var top = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
        if (top <= 0) {
            top = 180;
        } else {
            top = 120;
        }
        var hash = this.hash,
            _hash = hash.replace(/#/, ''),
            theHref = $(this).attr('href').replace(/#.*/, '');

        if (theHref && location.href.replace(/#.*/, '') != theHref) return; // Р Р…Р Вµ РЎвЂљР ВµР С”РЎС“РЎвЂ°Р В°РЎРЏ РЎРѓРЎвЂљРЎР‚Р В°Р Р…Р С‘РЎвЂ Р В°

        var $target = _hash === '' ? $('body') : $(hash + ', a[name="' + _hash + '"]').first();

        if (!$target.length) return;

        e.preventDefault();

        $('html, body').stop().animate({ scrollTop: $target.offset().top - 110 }, 1000, 'swing', function() {

        });
        return false;
    });


    $('.partners__wrapper').slick({
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 1000,
        arrows: false,
        autoplay: 'true',
        autoplaySpeed: '2000',
        responsive: [{
                breakpoint: 1050,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    $('.univers__slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        dots: true,
        speed: 1000,
        arrows: false,
        autoplay: 'true',
        autoplaySpeed: '2000',
        slidesToScroll: 1,
        variableWidth: true,
        responsive: [{
                breakpoint: 1250,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 1080,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.news-slider').slick({
        slidesToShow: 3,
        dots: true,
        autoplay: false,
    });

    $('.organizations__items').slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        speed: 2000,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 1250,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 1080,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.tab').on("click", function() {
        var tab_index = $(this).index();
        if (!$(this).hasClass('active')) {
            $('.tab').removeClass('active');
            $(this).addClass('active');
            $('.tab-items').removeClass('active');
            $('.tab-items').eq(tab_index).addClass('active');
        }
    });


    $('.burger').on("click", function() {
        $('.header-menu').addClass("active")
        $('.burger').addClass("active")
    });

    $('.header-close').on("click", function() {
        $('.header-menu').removeClass("active");
        $('.burger').removeClass("active");
    });

    // function mobMenuSec() {
    //     if ($(document).width() < 700) {
    //         $('.nav__item.under.icon.app').prependTo('.header-menu .prepend');
    //         $('.nav__item.under.icon.pre').prependTo('.header-menu .prepend');

    //     } else {
    //         $('.header-menu .prepend .nav__item.app').prependTo('.nav__items');
    //         $('.header-menu .prepend .nav__item.pre').appendTo('.nav__items');
    //     }
    // }

    // mobMenuSec();

    $('.js-slide').on("click", function(e) {
        e.preventDefault();
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).siblings().removeClass('active')
        } else {
            $(this).addClass('active');
            $(this).siblings().addClass('active')
        }
    });
    $('.under-m').on("click", function(e) {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).children('under-part').removeClass('active')
        } else {
            $(this).addClass('active');
            $(this).children('under-part').addClass('active')
        }
    });

    // window.addEventListener('resize', () => {
    //     mobMenuSec();
    // });

    $('.tab-sec').on("click", function() {
        var tab_index = $(this).index();

        if (!$(this).hasClass('active')) {
            $('.tab-sec').removeClass('active');
            $(this).addClass('active');
            $('.tab-items').removeClass('active');
            $('.tab-items').eq(tab_index).addClass('active');
        }
    });


    $('.popup-comand').on("click", function() {
        var dir_img = $(this).parent('.our-command__item').find('img').attr('src');
        var dir_name = $(this).parent('.our-command__item').find('.our-command__item-title').text();
        var dir_position = $(this).parent('.our-command__item').find('.our-command__item-subtitle').text();
        var dir_text = $(this).parent('.our-command__item').find('.dir_body').html();

        $('#dir_img').attr('src', dir_img);
        $('#dir_name').text(dir_name);
        $('#dir_position').text(dir_position);
        $('#dir_body').html(dir_text);
    });




    $('.review-popup').on("click", function() {
        var dir_img_sec = $(this).parents('.reviews__item').find('img').attr('src');
        var dir_name_sec = $(this).parents('.reviews__item').find('.reviews-title').text();
        var dir_position_sec = $(this).parents('.reviews__item').find('.student-pos').text();
        var dir_text_sec = $(this).parents('.reviews__item').find('.reviews__item-texts').html();
        console.log("lsdkjbje")
        $('#dir_img-sec').attr('src', dir_img_sec);
        $('#dir_name-sec').text(dir_name_sec);
        $('#dir_position-sec').text(dir_position_sec);
        $('#dir_body-sec').html(dir_text_sec);
    });


    // $('.news .news__items').slick({
    //     responsive: [{
    //             breakpoint: 100000,
    //             settings: "unslick"
    //         },
    //         {
    //             breakpoint: 440,
    //             settings: {
    //                 dots: true,
    //                 infinite: true,
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1,
    //                 arrows: false,
    //                 autoplay: true,
    //                 speed: 2000,
    //                 autoplaySpeed: 3000,
    //             }
    //         }
    //     ]
    // });

    ///закрытие при области

    $(document).click(function(event) {
        if (!$(event.target).closest('.nav__item').length) {
            if ($('.under-part').hasClass('active')) {
                $('.under-part').removeClass('active');
                $('.js-slide').removeClass('active');
            }
        }
    });



    //Send tests to backend

    let generalTest = document.querySelector('.general-test');
    let teenTest = document.querySelector('.teen-test');
    let teenTest2 = document.querySelector('.teen-test-2');
    let kidsTest = document.querySelector('.kids-test');
    let ieltsTest = document.querySelector('.ielts-test');
    let hiddenTextAreaData = document.querySelector('.result-textarea');
    let formTest = document.querySelector('.formTest');

    let globalObjData;
    let questionsObj;
    let answerObj;

    function getTextAreaData(data) {
        let storage = localStorage.getItem(data, questionsObj)
        // console.log(storage)
        hiddenTextAreaData.value = storage;
    }

    function clearLocalStorage() {
        localStorage.removeItem(globalObjData)
    }

    //GENERAL TEST
    if (generalTest) {
        questionsObj = JSON.parse(localStorage.getItem('General')) || {};
        answerObj = questionsObj.answers || {
            'grammar': {},
            'reading': {},
            'listening': {},
            'writing': {}
        };
        generalTest.addEventListener('click', setAnswerQuestions)
        generalTest.addEventListener('input', setTextAreaQuestions)
        getAnswerQuestions('General');
        getTextAreaData('General');
        globalObjData = 'General';
        formTest.addEventListener('submit', clearLocalStorage)
    }

    //TEENS TEST
    if (teenTest) {
        questionsObj = JSON.parse(localStorage.getItem('Teen')) || {};
        answerObj = questionsObj.answers || {
            'grammar': {},
            'reading': {},
            'listening': {},
            'writing': {}
        };
        teenTest.addEventListener('click', setAnswerQuestions)
        teenTest.addEventListener('input', setTextAreaQuestions)
        getAnswerQuestions('Teen');
        getTextAreaData('Teen');
        globalObjData = 'Teen';
        formTest.addEventListener('submit', clearLocalStorage)
    }

    if (teenTest2) {
        questionsObj = JSON.parse(localStorage.getItem('Teen2')) || {};
        answerObj = questionsObj.answers || {
            'grammar': {},
            'reading': {},
            'listening': {},
            'writing': {}
        };
        teenTest2.addEventListener('click', setAnswerQuestions)
        teenTest2.addEventListener('input', setTextAreaQuestions)
        getAnswerQuestions('Teen2');
        getTextAreaData('Teen2');
        globalObjData = 'Teen2';
        formTest.addEventListener('submit', clearLocalStorage)
    }

    //KIDS TEST
    if (kidsTest) {
        questionsObj = JSON.parse(localStorage.getItem('Kids')) || {};
        answerObj = questionsObj.answers || {
            'grammar': {},
            'reading': {},
            'listening': {},
            'writing': {}
        };
        kidsTest.addEventListener('click', setAnswerQuestions)
        kidsTest.addEventListener('input', setTextAreaQuestions)
        getAnswerQuestions('Kids');
        getTextAreaData('Kids');
        globalObjData = 'Kids';
        formTest.addEventListener('submit', clearLocalStorage)
    }

    //IELTS TEST
    if (ieltsTest) {
        questionsObj = JSON.parse(localStorage.getItem('Ielts')) || {};
        answerObj = questionsObj.answers || {
            'grammar': {},
            'reading': {},
            'listening': {},
            'writing': {}
        };
        ieltsTest.addEventListener('click', setAnswerQuestions)
        ieltsTest.addEventListener('input', setTextAreaQuestions)
        getAnswerQuestions('Ielts');
        getTextAreaData('Ielts');
        globalObjData = 'Ielts';
        formTest.addEventListener('submit', clearLocalStorage)
    }

    //Записываем checkbox в объект
    function setAnswerQuestions(e) {
        if (e.target.classList.contains('question-row__input') || e.target.classList.contains('input-checkbox--grammar')) {
            // console.log(e.target.id)
            let sectionName = e.target.closest('body').querySelector('.section').getAttribute('data-name')
            questionsObj['test_name'] = sectionName;
            if (e.target.checked) {
                const ids = Object.keys(answerObj)
                ids.forEach((id) => {
                    let nameTests = e.target.closest('.js-test-part').querySelector('.title-sec').getAttribute('data-sec')
                    if (id === nameTests) {
                        // console.log(nameTests)
                        // console.log(id)
                        let nameQuestion = 'question' + e.target.getAttribute('name')
                        answerObj[id][nameQuestion] = e.target.id;
                        questionsObj.answers = answerObj;
                    }
                })
                localStorage.setItem(sectionName, JSON.stringify(questionsObj))
                getTextAreaData(globalObjData);
            }
        }
        // console.log(questionsObj)
    }
    //Записываем textarea В объект
    function setTextAreaQuestions(e) {
        if (e.target.classList.contains('js-textarea')) {
            let sectionName = e.target.closest('body').querySelector('.section').getAttribute('data-name')
            questionsObj['test_name'] = sectionName;
            const ids = Object.keys(answerObj)
            ids.forEach((id) => {
                let nameTests = e.target.closest('.test-part').querySelector('.title-sec').getAttribute('data-sec')
                if (id === nameTests) {
                    // console.log(nameTests)
                    // console.log(id)
                    let nameTextArea = e.target.getAttribute('name');
                    answerObj[id][nameTextArea] = e.target.value;
                    questionsObj.answers = answerObj;
                }
            })
            localStorage.setItem(sectionName, JSON.stringify(questionsObj))
            getTextAreaData(globalObjData);
        }
    }

    function getAnswerQuestions(name) {
        let objectAnswers = JSON.parse(localStorage.getItem(name, questionsObj))
            // console.log(objectAnswers)
        let grammarInputs = document.querySelectorAll('.test-part--grammar .question-row__input')
        let kidsGrammarInputs = document.querySelectorAll('.test-part--grammar .input-checkbox')
        let readingInputs = document.querySelectorAll('.test-part--reading .question-row__input')
        let listeningInputs = document.querySelectorAll('.test-part--listening .question-row__input')
        // let listeningSelect = document.querySelectorAll('.test-part--listening select')
        let writingInputs = document.querySelectorAll('.test-part--writing .question-row__input')
        let textAreas = document.querySelectorAll('.js-textarea')
        let answersGrammar = objectAnswers?.['answers']['grammar'];
        let answersReading = objectAnswers?.['answers']['reading'];
        let answersListening = objectAnswers?.['answers']['listening'];
        let answersWriting = objectAnswers?.['answers']['writing'];
        if (answersGrammar) {
            grammarInputs.forEach((input, i) => {
                let nameQuestion = 'question' + input.getAttribute('name');
                if (answersGrammar.hasOwnProperty(nameQuestion)) {
                    if (input.id === answersGrammar[nameQuestion]) {
                        input.checked = true;
                    }
                }
            })
            textAreas.forEach((area, i) => {
                let nameArea = area.getAttribute('name');
                // console.log(nameArea)
                if (answersWriting.hasOwnProperty(nameArea)) {
                    area.value = answersWriting[nameArea]
                }
            })
        }
        if (answersReading) {
            readingInputs.forEach((input, i) => {
                let nameQuestion = 'question' + input.getAttribute('name');
                if (answersReading.hasOwnProperty(nameQuestion)) {
                    if (input.id === answersReading[nameQuestion]) {
                        input.checked = true;
                    }
                }
            })
        }
        if (answersListening) {
            listeningInputs.forEach(input => {
                let nameQuestion = 'question' + input.getAttribute('name');
                if (answersListening.hasOwnProperty(nameQuestion)) {
                    if (input.id === answersListening[nameQuestion]) {
                        input.checked = true;
                    }
                }
            })
            textAreas.forEach((area, i) => {
                let nameArea = area.getAttribute('name');
                if (answersListening.hasOwnProperty(nameArea)) {
                    area.value = answersListening[nameArea]
                }
            })
        }
        if (answersWriting) {
            writingInputs.forEach(input => {
                let nameQuestion = 'question' + input.getAttribute('name');
                if (answersWriting.hasOwnProperty(nameQuestion)) {
                    if (input.id === answersListening[nameQuestion]) {
                        input.checked = true;
                    }
                }
            })
            textAreas.forEach((area, i) => {
                let nameArea = area.getAttribute('name');
                // console.log(nameArea)
                if (answersWriting.hasOwnProperty(nameArea)) {
                    area.value = answersWriting[nameArea]
                }
            })
        }
        if (answersGrammar) {
            kidsGrammarInputs.forEach((input, i) => {
                let nameQuestion = 'question' + input.getAttribute('name');
                if (answersGrammar.hasOwnProperty(nameQuestion)) {
                    if (input.id === answersGrammar[nameQuestion]) {
                        input.checked = true;
                    }
                }
            })
            textAreas.forEach((area, i) => {
                let nameArea = area.getAttribute('name');
                if (answersGrammar.hasOwnProperty(nameArea)) {
                    area.value = answersGrammar[nameArea]
                }
            })
        }
    }

    let formSelectArea = document.querySelector('.form-select')
    let spanSelectArea = document.querySelector('.form-select__heading')
    let upperSelectArea = document.querySelector('.form-select-area')
    let inputSelectArea = document.querySelector('.js-input-type')
    if (formSelectArea) {
        formSelectArea.addEventListener('click', userChoiceType)
    }

    function userChoiceType(e) {
        const target = e.target;
        // console.log(target)
        if (target.classList.contains('js-type-study')) {
            // console.log('123')
            spanSelectArea.textContent = target.textContent;
            upperSelectArea.classList.remove('active')
            inputSelectArea.value = target.textContent;
        }
        if (target.classList.contains('form-select__heading')) {
            // console.log('123')
            target.nextElementSibling.classList.toggle('active')
        }
    }

    let sectionTest = document.querySelector('.tests');
    if(sectionTest) {
        sectionTest.addEventListener('click', e => {
            const target = e.target;
            if(target.classList.contains('submit')){    
                let li = document.querySelectorAll('.tab-sec')
                let liactive = document.querySelector('.tab-sec.active')
                li.forEach(li => {
                    if(li.classList.contains('active')) {
                        li.classList.remove('active')
                        liactive.nextElementSibling.classList.add('active')
                    }
                })
                // target.parentNode('.tab-items').classList.remove('active')
                // target.parentNode('.tab-items').nextElementSibling.classList.add('active')
                target.parentNode.classList.remove('active')
                target.parentNode.nextElementSibling.classList.add('active')
                $('html, body').stop().animate({ scrollTop: $('.test-slider').offset().top - 120 }, 1500, 'swing', function(){});
            }
        })
    }

});