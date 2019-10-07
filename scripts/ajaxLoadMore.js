const ajaxLoadMore = () => {
    
    const templateUrl = '<?= get_bloginfo("template_url"); ?>';
    const button = document.querySelector('.load-more');

    if(typeof (button) !== 'undefined' && button !== null) {
        document.querySelector('.posts-list').dataset.page = 1;
        
        button.addEventListener('click', (e) => {
            let current_page = document.querySelector('.posts-list').dataset.page;

            let params = new URLSearchParams();
            params.append('action', 'load_more_posts');
            params.append('current_page', current_page);
        
            axios.post('wp-admin/admin-ajax.php', params)
                .then(res => {
                    console.log({res})
                    let posts_lists = document.querySelector('.posts-list');

                    posts_lists.innerHTML += res.data.data;

                    let getUrl = window.location.href;
                    // let baseUrl = getUrl.protocol + "//" + getUrl.host + "/";

                    window.history.pushState('', '', 'page/' + (parseInt(document.querySelector('.posts-list').dataset.page) + 1 ));

                    if(document.querySelector('.posts-list').dataset.page = document.querySelector('.posts-list').dataset.max){
                        button.parentNode.removeChild(button);
                    } 

                    document.querySelector('.posts-list').dataset.page++;
                });

        });
    }
}

ajaxLoadMore();