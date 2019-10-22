jQuery(function ($) {
    const ajaxLoadMore = () => {

        const templateUrl = '<?= get_bloginfo("template_url"); ?>';
        const button = document.querySelector('.load-more');
        let postsLists = document.querySelector('.posts-list');

        if (typeof (button) !== 'undefined' && button !== null) {
            postsLists.dataset.page = 1;

            button.addEventListener('click', (e) => {
                let current_page = $(".posts-list").data("page");
                let page_max = $(".posts-list").data("max");

                let params = new URLSearchParams();

                console.log(params)
                params.append('action', 'load_more_posts');
                params.append('current_page', current_page);


                axios.post('wp-admin/admin-ajax.php', params)
                    .then(res => {

                        postsLists.innerHTML += res.data.data;

                        let url = window.location.href;
                        // let getUrl = url.slice(0, -1);
                        // let newUrl = getUrl + '?'; 
                        let newUrl = url;
                        
                        window.history.pushState('', document.title, newUrl + 'page=' + current_page);
                        

                        console.log({
                            res
                        });
                        console.log(getUrl + '?');

                        if (current_page == page_max) {
                            button.parentNode.removeChild(button);
                        }
                        current_page++;

                        $(".posts-list").data("page", current_page);

                        
                    });
            });
        }
    }

    ajaxLoadMore();
});