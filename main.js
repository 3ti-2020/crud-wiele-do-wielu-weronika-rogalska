const btn_du = document.querySelector('.btn_du');
const user_container = document.querySelector('.user_container');
const user_close = document.querySelector('.user_close');

btn_du.addEventListener('click', function(){
    user_container.style.display = 'flex';
});

user_close.addEventListener('click', function(){
    user_container.style.display = 'none';
});

const btn_dat = document.querySelector('.btn_dat');
const book_container = document.querySelector('.book_container');
const book_close = document.querySelector('.book_close');

btn_dat.addEventListener('click', function(){
    book_container.style.display = 'flex';
});

book_close.addEventListener('click', function(){
    book_container.style.display = 'none';
});
