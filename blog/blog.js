const btn_post = document.querySelector('.dodaj_post');
const post_container = document.querySelector('.post_container');
const post_close = document.querySelector('.post_close');

btn_post.addEventListener('click', function(){
    post_container.style.display = 'flex';
});

post_close.addEventListener('click', function(){
    post_container.style.display = 'none';
});