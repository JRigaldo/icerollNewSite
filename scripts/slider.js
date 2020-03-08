(function($){
    /**
     * initializeBlock
     *
     * Adds custom JavaScript to the block HTML.
     *
     * @date    15/4/19
     * @since   1.0.0
     *
     * @param   object $block The block jQuery element.
     * @param   object attributes The block attributes (only available when editing).
     * @return  void
     */

    var initializeBlockHeader = function( $block ) {
        $block.find('.slides').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            variableWidth: true
        });     
    }


    // Initialize each block on page load (front end).
    $(document).ready(function(){
        $('.slider-header').each(function(){
            initializeBlockHeader( $(this) );
        });
    });

    // // Initialize dynamic block preview (editor).
    // if( window.acf ) {
    //     window.acf.addAction( 'render_blocks_slider_header', initializeBlockHeader );
    // }

})(jQuery);
