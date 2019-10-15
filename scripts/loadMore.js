/* Add loadMore button */
jQuery(document).ready(function($){

    $(document).on('click', '.load-more', function(){
        var page = $(this).data('page');
        var ajaxurl = $(this).data('url');

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                page: page,
                action: 'load_more_posts'
            },
            error: function(response){
                console.log(response)
            },
            success: function(response){
                $('.load-more-posts-container').append(response);
                console.log(response);
            }
        });
    });
});