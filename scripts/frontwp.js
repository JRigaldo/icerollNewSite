var blogPostsBtn = document.getElementById('post-btn');
var blogPostsContainer = document.getElementById('blog-posts-container');

if(blogPostsBtn){
    blogPostsBtn.addEventListener('click', function(){
        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'http://localhost:8888/iceroll/wp-json/wp/v2/posts');
        ourRequest.onload = function() {
            if(ourRequest.status >= 200 && ourRequest.status < 400){
                var data = JSON.parse(ourRequest.responseText);
                console.log('load', data);
                createHTML(data);
                blogPostsBtn.remove();
            }else{
                console.log("We connected to the server, but it return an error.");
            }
        }
        ourRequest.onerror = function(){
            console.log("Connection error !");
        }

        ourRequest.send();
    });
}

function createHTML (postsData){
    var HTMLString = '';
    for (let i = 0; i < postsData.length; i++) {
        HTMLString += '<h2>' + postsData[i].title.rendered + '</h2>';
        HTMLString += postsData[i].content.rendered;
    }

    blogPostsContainer.innerHTML = HTMLString;
}

// Quick Add Post Ajax
var quickAddButton = document.querySelector('#quick-add-button');
if(quickAddButton){
    quickAddButton.addEventListener('click', function(){
        var myPostData = {
            'title': document.querySelector('.admin-quick-add [name="title"]').value,
            'content': document.querySelector('.admin-quick-add [name="content"]').value,
            'status': 'publish'
        }


        var createPost = new XMLHttpRequest();
        createPost.open('POST', 'http://localhost:8888/iceroll/wp-json/wp/v2/posts');
        createPost.setRequestHeader('X-WP-Nonce', magicalData.nonce);
        createPost.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
        createPost.send(JSON.stringify(myPostData));
    });
}