
    //Обратный отсчет времени
$('document').ready(function() {
    'use strict';
    var end = Math.floor((new Date("09/20/2017")).getTime()/1000);
    var now =  Math.floor((new Date).getTime()/1000);
    var start = Math.floor((new Date("09/04/2017")).getTime()/1000);

    $('.countdown').final_countdown({
        'start': start,
        'end': end,
        'now': now
    });
});

$('.modal_close, .main_overlay').click(function(){
    $('.countdown').final_countdown({
        'start': undefined,
        'end': undefined,
        'now': undefined
        });

    });