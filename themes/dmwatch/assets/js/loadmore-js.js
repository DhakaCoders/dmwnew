(function($) {
$("#loadMore").on('click', function(e) {
    e.preventDefault();
    //init
    var that = $(this);
    var page = $(this).data('page');
    var newPage = page + 1;
    var ajaxurl = that.data('url');
    //ajax call
    $.ajax({
        url: ajaxurl,
        type: 'post',
        data: {
            page: page,
            el_li: 'not',
            action: 'ajax_event_script_load_more'
        },
        beforeSend: function ( xhr ) {
            $('#ajxaloader').show();
             
        },
        
        success: function(html ) {
            //check
            if (html == 0) {
                $('.fl-see-all-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
                $('.fl-see-all-btn').hide();
                $('#ajxaloader').hide();
            } else {
                $('#ajxaloader').hide();
                that.data('page', newPage);
                $('#ajax-content').append(html.substr(html.length-1, 1) === '0'? html.substr(0, html.length-1) : html);
            }
        },
        error: function(html ) {
            console.log('asdfsd');
        },
    });
});

$("#newsLoadMore").on('click', function(e) {
    e.preventDefault();
    //init
    var that = $(this);
    var page = $(this).data('page');
    var newPage = page + 1;
    var ajaxurl = that.data('url');
    //ajax call
    $.ajax({
        url: ajaxurl,
        type: 'post',
        data: {
            page: page,
            el_li: 'not',
            action: 'ajax_news_script_load_more'
        },
        beforeSend: function ( xhr ) {
            $('#ajxaloader').show();
             
        },
        
        success: function(html ) {
            //check
            if (html == 0) {
                $('.fl-see-all-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
                $('.fl-see-all-btn').hide();
                $('#ajxaloader').hide();
            } else {
                $('#ajxaloader').hide();
                that.data('page', newPage);
                $('#news-content').append(html.substr(html.length-1, 1) === '0'? html.substr(0, html.length-1) : html);
            }
        },
        error: function(html ) {
            console.log('asdfsd');
        },
    });
});

$("#mediaLoadMore").on('click', function(e) {
    e.preventDefault();
    //init
    var that = $(this);
    var page = $(this).data('page');
    var newPage = page + 1;
    var ajaxurl = that.data('url');
    //ajax call
    $.ajax({
        url: ajaxurl,
        type: 'post',
        data: {
            page: page,
            el_li: 'not',
            action: 'ajax_media_script_load_more'
        },
        beforeSend: function ( xhr ) {
            $('#medialoader').show();
             
        },
        
        success: function(html ) {
            //check
            if (html == 0) {
                $('.fl-see-all-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
                $('.fl-see-all-btn').hide();
                $('#medialoader').hide();
            } else {
                $('#medialoader').hide();
                that.data('page', newPage);
                $('#media-content').append(html.substr(html.length-1, 1) === '0'? html.substr(0, html.length-1) : html);
            }
        },
        error: function(html ) {
            console.log('asdfsd');
        },
    });
});

$("#publicloadMore").on('click', function(e) {
    e.preventDefault();
    var recentID = '';
    var cType = '';
    var cYear = '';
    if($('#recentID').length){
        recentID = $('#recentID').data('postid');
    }
    if($('#filter').length){
        cType = $('#filter').data('type');
        cYear = $('#filter').data('year');
    }
    console.log(cType);
    console.log(cYear);
    //init
    var that = $(this);
    var page = $(this).data('page');
    var newPage = page + 1;
    var ajaxurl = that.data('url');
    //ajax call
    $.ajax({
        url: ajaxurl,
        type: 'post',
        data: {
            page: page,
            post_id: recentID,
            type: cType,
            year: cYear,
            el_li: 'not',
            action: 'ajax_public_script_load_more'
        },
        beforeSend: function ( xhr ) {
            $('#publicloader').show();
             
        },
        
        success: function(html ) {
            //check
            if (html == 0) {
                $('.fl-see-all-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
                $('.fl-see-all-btn').hide();
                $('#publicloader').hide();
            } else {
                $('#publicloader').hide();
                that.data('page', newPage);
                $('#public-content').append(html.substr(html.length-1, 1) === '0'? html.substr(0, html.length-1) : html);
            }
        },
        error: function(html ) {
            console.log('asdfsd');
        },
    });
});
})(jQuery);



function makeTimer() {

    //      var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");  
        var endTime = new Date("29 Jun 2020 9:56:00 GMT+06:00");          
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            jQuery("#days").html(days + "<span>Days</span>");
            jQuery("#hours").html(hours + "<span>Hours</span>");
            jQuery("#minutes").html(minutes + "<span>Minutes</span>");
            jQuery("#seconds").html(seconds + "<span>Seconds</span>");       

    }

    setInterval(function() { makeTimer(); }, 1000);