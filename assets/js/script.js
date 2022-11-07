// TODO: Нужно переделать всю эту какашку. Перейти с Gulp на Webpack/Parcel. Подключить библиотеки через npm

$(function () {
    let tab = $('.tabs-box > div');
    tab.hide().filter(':first').show();
    $('.tabs-link a').on('click', function () {
        tab.hide();
        tab.filter(this.hash).show();
        $('.tabs-link a').removeClass('active');
        $(this).addClass('active');
        return false;
    }).filter(':first').click();
});

$(function () {
    $('.input-visible').on('change', function () {
        let input = $(this);
        if (input.val().length) {
            input.addClass('populated');
        } else {
            input.removeClass('populated');
        }
    });
});


$(function () {
    let header = $('.header');
    let limit = 680;
    let win = $(window);
    win.on('scroll', function () {
        let top = win.scrollTop();
        let path = location.pathname;
        if (path.search('/user|operator/') >= 0) {
            header.toggleClass('colorized', false);
        } else if ( path != '/') {
            header.toggleClass('colorized', true);
        } else if(top < limit) {
            header.toggleClass('colorized', false);
        } else {
            header.toggleClass('colorized', true);
        }

    });
});

function mask(openitem, closeitem, block, colorClass) {
    let closeItem = $('.' + block).prev('.' + closeitem);
    $('.' + openitem).on('click', function () {
        closeItem.parent().switchClass('bounceOutUp', 'bounceInDown');
        $(closeItem.parent().parent()).css('visibility', 'visible');
        $('.mask').css('visibility', 'visible').switchClass('hidden', colorClass, 500);

    });
    $(closeItem).on('click', function () {
        closeItem.parent().switchClass('bounceInDown', 'bounceOutUp');
        $('.mask').switchClass(colorClass, 'hidden', 500, 'swing', function () {
            $(this).css('visibility', 'hidden');
            $(closeItem.parent().parent()).css('visibility', 'hidden');
        });
    });
}

function canvasDollar() {
    (function () {
        let requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
            window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        window.requestAnimationFrame = requestAnimationFrame;
    })();
    let canvas = $('.canvas-dollar')[0];
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight + 200;
    if (canvas.getContext) {
        let ctx = canvas.getContext('2d');
        let w = canvas.width;
        let h = canvas.height;
        ctx.fillStyle = 'rgba(0,0,0,0.13)';
        ctx.font = 'bolder 10em Montserrat';

        let init = [];
        let maxParts = 6;
        for (let a = 0; a < maxParts; a++) {
            init.push({
                x: Math.random() * w,
                y: Math.random() * h,
                xs: -4 + Math.random() * 4 + 2,
                ys: Math.random() + 1
            })
        }

        let particles = [];
        for (let b = 0; b < maxParts; b++) {
            particles[b] = init[b];
        }

        function draw() {
            ctx.clearRect(0, 0, w, h);
            for (let c = 0; c < particles.length; c++) {
                let p = particles[c];
                ctx.beginPath();
                ctx.fillText('$', p.x, p.y);
            }
            move();
            requestAnimationFrame(draw);
        }

        function move() {
            for (let b = 0; b < particles.length; b++) {
                let p = particles[b];
                p.x += p.xs;
                p.y += p.ys;
                if (p.x > w || p.y > h) {
                    p.x = Math.random() * w;
                    p.y = 20;
                }
            }
        }

        requestAnimationFrame(draw);

    }
}


function showModal(showClass, modalClass, closeClass = '.close-button') {
    $('.btn' + showClass).on('click', function () {
        $(modalClass).fadeIn();
    });

    $(closeClass).on('click', function () {
        $(modalClass).fadeOut();
    });
}

function showMsg(message) {
    $('#msg').text(message).show();
    setTimeout(function () {
        $('#msg').slideUp();
    }, 2000);
}

let UserData;
$(document).ready(function () {
    showModal('.set-money', '.modal.set-money',);
    showModal('.get-money', '.modal.get-money',);
    showModal('.close-score', '.modal.close-score', '.close-button, .btn.no');

    $(".enterme").focusin(function () {
        $(this).prev().addClass("to-be-label");
    });
    $(".enterme").blur(function () {
        if ($(this).val() == 0) $(this).prev().removeClass("to-be-label");
    });

    $('.grid-fixed .form-register').hide().filter(':first').show();

    mask('login', 'hide', 'form-login', 'dark');
    mask('register', 'hide', 'form-register', 'random');


    let steps = $('.step-bar ul li');
    let forms = $('.grid-fixed .form-register');

    $('.firstNext').on('click', (e) => {
        $(steps[1]).find('.number').addClass('active');
        $(steps[1]).find('.line').addClass('active');
        $(forms[0]).switchClass('zoomIn', 'zoomOut', function () {
            $(forms[1]).switchClass('zoomOut', 'zoomIn', 300, function () {
                $(forms[0]).hide();
                $(this).show();
            });
        });
    });

    $('.secondNext').on('click', (e) => {
        $(steps[2]).find('.number').addClass('active');
        $(steps[2]).find('.line').addClass('active');
        $(forms[1]).switchClass('zoomIn', 'zoomOut', function () {
            $(forms[2]).switchClass('zoomOut', 'zoomIn', 300, function () {
                $(forms[1]).hide();
                $(this).show();
            });
        });
    });

    $('.firstPrev').on('click', (e) => {
        $(steps[1]).find('.number').removeClass('active');
        $(steps[1]).find('.line').removeClass('active');
        $(forms[1]).switchClass('zoomIn', 'zoomOut', function () {
            $(forms[0]).switchClass('zoomOut', 'zoomIn', 300, function () {
                $(forms[1]).hide();
                $(this).show();
            });
        });
    });

    $('.secondPrev').on('click', (e) => {
        $(steps[2]).find('.number').removeClass('active');
        $(steps[2]).find('.line').removeClass('active');
        $(forms[2]).switchClass('zoomIn', 'zoomOut', function () {
            $(forms[1]).switchClass('zoomOut', 'zoomIn', 300, function () {
                $(forms[2]).hide();
                $(this).show();
            });
        });
    });


    $('#registration').click(function () {
        let formData = '';

        forms.each(function () {
            let el = $(this).find('.box').serialize();
            formData += el + "&";
        });


        $.ajax({
            url: '/account/registration/',
            type: 'POST',
            data: formData,
            success: function (result) {
                window.location = '/user/index/' + result;
            }
        });
    });

    $(".btn[name='login']").click(function () {
        let formData = '';
        forms.each(function () {
            let el = $('#log').serialize();
            formData += el + "&";
        });
        $.ajax({
            url: '/account/login/',
            type: 'POST',
            data: formData,
            success: function (result) {
                let json = JSON.parse(result);
                if (json.status == false) {
                    showMsg(json.message);
                } else {
                    window.location = json.message;
                }

            }
        });
    });

    $('.search-input .fa-search').on('click', function () {
        let series = $('.search-input .passport-series').val(),
            num = $('.search-input .passport-num').val();
        $.post(
            window.location + '/search/',
            {
                passport_num: num,
                passport_series: series
            },
            function (data) {
                let json = JSON.parse(data);
                if (json.status) {
                    UserData = json;
                    setUserData(json.message);
                } else {
                    showMsg(json.message);
                }

            }
        )
    });


    $('.fa-eye').click(function () {
        let type = $('#pwd').attr('type') == "text" ? "password" : 'text';
        let c = $(this).css('color') == "rgb(59, 71, 107)" ? "#fff" : "#3b476b";
        $(this).css({'color': c});
        $('#pwd').prop('type', type);
    });

    $('#toggleMenu .thumbs').on('click', function () {
        $('#sidebar-menu li span').css({'opacity': 1, 'margin-left': "10px"});
        $('#sidebar-menu').toggleClass('slide');
    });

    $("#sidebar-menu li").on('click', function () {
        $("#sidebar-menu li").not(this).removeClass("selected");
        $(this).toggleClass("selected");
    });

});

$('#print').on('click', function () {
    let panel = $(this).parent();
    panel.hide();
    $('#printed').printThis({
        importCSS: true,            // import page CSS
        importStyle: true,         // import style tags
        printContainer: true,       // grab outer container as well as the contents of the selector
        loadCSS: "../css/main.min.css",  // path to additional css file - use an array [] for multiple
        formValues: true,           // preserve input/form values
        canvas: true,              // copy canvas elements (experimental)
    });
    setTimeout(function () {
        panel.show();
    }, 1000);
});


function setUserData(data) {
    $('.user-name').text(data.user.surname + ' ' + data.user.name + ' ' + data.user.father_name);
    $('.date_birthday').text(data.user.date_birthday);
    $('.passport_num').text(data.user.passport_num);
    $('.passport_office').text(data.user.passport_office);
    $('.passport_series').text(data.user.passport_series);
    $('.passport_series').text(data.user.passport_series);
    $('.user_info--score .header-text').text("№ " + data.score.id);
    $('.residence').text(data.user.residence);
    $('.phone').text(data.user.phone);

    $('.percent').text(data.contribution.percent + ' %');
    $('.date_close').text(data.contribution.percent + ' %');
    $('.taken').text(function () {
        return (data.contribution.replenished == 0) ? 'Нет' : 'Да';
    });
    $('.replinished').text(function () {
        return (data.contribution.taken == 0) ? 'Нет' : 'Да';
    });


    $("input[name='id_score']").val(data.score.id);

    let inScore = data.score.money;
    let startScore = Number(data.attachment.start_money);
    let getScore = 0;
    console.log(data);

    for (let i = 0; i < Object.keys(data.attachment_history).length; i++) {
        getScore = Number(data.attachment_history[i].came_money);
    }

    let endScoreNotRep = Math.floor(startScore * Math.pow(1 + data.contribution.percent / 100,   data.attachment.days / 365));

    let money = [inScore, startScore, getScore, endScoreNotRep];

    $('.not-result').hide();
    $('.user_info-box').fadeIn();
    $('.user_info--score').fadeIn();
    $('.user_info--functions').fadeIn();
    scoreChart(money);
}

function scoreChart(money) {
    let userScore = $('.user-score');

    let oilData = {
        labels: [
            "На счету",
            "Начальная сумма",
            "Начислено",
            "Конечная сумма"
        ],
        datasets: [
            {
                data: money,
                backgroundColor: [
                    "#FF6384",
                    "#63FF84",
                    "#ffda22",
                    "#8463FF",
                    "#6384FF"
                ]
            }]
    };


    Chart.defaults.global.defaultFontFamily = "Montserrat";
    Chart.defaults.global.defaultFontSize = 16;


    let getTotal = function () {
        let sum = myDoughnutChart.config.data.datasets[0].data.reduce((a, b) => a + b, 0);
        return sum;
    };
    let chartOptions = {
        rotation: -Math.PI,
        cutoutPercentage: 70,
        circumference: Math.PI * 2,
        plugins: {
            doughnutlabel: {
                labels: [
                    /*{
                        text: 'Итого',
                        font: {
                            size: '40',
                        },
                        color: 'grey'
                    },
                    {
                        text: getTotal,
                        font: {
                            size: '30'
                        },
                        color: 'dodgerBlue'
                    },*/
                ]
            },
            labels: [
                {
                    render: 'value',
                    position: 'outside'
                }
            ]
        },
        legend: {
            position: 'left'
        },
        animation: {
            animateRotate: true,
            animateScale: false
        },
    };
    let myDoughnutChart = new Chart(userScore, {
        type: 'doughnut',
        data: oilData,
        options: chartOptions
    });

}

$(function () {
    $('.sum, .date').on('input', function () {
        let intVal = this.value.replace(/[^\d]/g, '');
        this.value = intVal;
    }).on('blur', function () {
        let size = $(this).data('size');
        switch ($(this).data('math')) {
            case 'min':
                if(this.value <= size) {
                    this.value = size;
                }
                break;
            case 'max':
                if(this.value >= size) {
                    this.value = size;
                }
                break;
        }
    });
});

$('.calc').on('click', function () {
    let sum = $('.sum').val();
    let date = $('.date').val();
    let percent = $('.percent').text().replace(/[^\d]/g, '');
    console.log(percent);
    let endScore = Math.floor(sum * Math.pow(1 + percent / 100,  date / 365));
    $('.end-money').text(endScore + ' руб');
    $('.plus-money').text(endScore - sum + ' руб');
});



$(window).on("load resize", function() {
    let scrollWidth = $('.tbl-content').width() - $('.tbl-content .table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();