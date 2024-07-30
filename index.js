document.addEventListener('DOMContentLoaded', function(){
    const joinBtn = document.querySelector('.join_btn');
    const loginBtn = document.querySelector('.login_btn');
    const joinModal = document.querySelector('.join_modal');
    const loginModal = document.querySelector('.login_modal');
    const joinReset = document.querySelector('.join_reset');
    const loginReset = document.querySelector('.login_reset');

    function modal(a,b,c){
        a.addEventListener('click', function(){
            b.style.display = c
        })
    }

    modal(joinBtn, joinModal, 'block');
    modal(joinBtn, loginModal, 'none');
    modal(joinReset, joinModal, 'none');
    modal(loginBtn, loginModal, 'block');
    modal(loginBtn, joinModal, 'none');
    modal(loginReset, loginModal, 'none');
})