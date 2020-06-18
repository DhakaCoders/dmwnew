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
})(jQuery);