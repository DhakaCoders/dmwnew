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


$("#searchloadMore").on('click', function(e) {
    e.preventDefault();
    var cType = '';
    var cYear = '';
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
            type: cType,
            year: cYear,
            el_li: 'not',
            action: 'ajax_report_search_script_load_more'
        },
        beforeSend: function ( xhr ) {
            $('#searchloader').show();
             
        },
        
        success: function(html ) {
            //check
            if (html == 0) {
                $('.fl-see-all-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
                $('.fl-see-all-btn').hide();
                $('#searchloader').hide();
            } else {
                $('#searchloader').hide();
                that.data('page', newPage);
                $('#search-content').append(html.substr(html.length-1, 1) === '0'? html.substr(0, html.length-1) : html);
            }
        },
        error: function(html ) {
            console.log('asdfsd');
        },
    });
});


$("#reportloadMore").on('click', function(e) {
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
            action: 'ajax_report_script_load_more'
        },
        beforeSend: function ( xhr ) {
            $('#reportloader').show();
             
        },
        
        success: function(html ) {
            //check
            if (html == 0) {
                $('.fl-see-all-btn-rep').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
                $('.fl-see-all-btn-rep').hide();
                $('#reportloader').hide();
            } else {
                $('#reportloader').hide();
                that.data('page', newPage);
                $('#report-content').append(html.substr(html.length-1, 1) === '0'? html.substr(0, html.length-1) : html);
            }
        },
        error: function(html ) {
            console.log('asdfsd');
        },
    });
});
})(jQuery);