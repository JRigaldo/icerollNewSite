const ajaxLoadMore = () => {
    
    const templateUrl = '<?= get_bloginfo("template_url"); ?>';
    const button = document.querySelector('.load-more');
    let postsLists = document.querySelector('.posts-list');

    if(typeof (button) !== 'undefined' && button !== null) {
        postsLists.dataset.page = 1;
        
        
        button.addEventListener('click', (e) => {
            let current_page = jQuery(".posts-list" ).data( "page");
            let page_max = jQuery(".posts-list" ).data( "max");

            let params = new URLSearchParams();
            params.append('action', 'load_more_posts');
            params.append('current_page', current_page);
            
        
            axios.post('wp-admin/admin-ajax.php', params)
                .then(res => {
                    console.log({res});
                    

                    postsLists.innerHTML += res.data.data;

                    // let getUrl = window.location.href;
                    //let baseUrl = getUrl.protocol + "//" + getUrl.host + "/";

                    // window.history.pushState('', '', 'page/' + (parseInt(postsLists.dataset.page) + 1 ));

                    if(current_page == page_max){
                        button.parentNode.removeChild(button);
                    }
                    current_page++;
                    jQuery(".posts-list" ).data( "page",current_page);
                }); 

        });
    }
}

ajaxLoadMore();