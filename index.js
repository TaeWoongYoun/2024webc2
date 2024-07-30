document.addEventListener('DOMContentLoaded', function(){
    const joinBtn = document.querySelector('.join_btn');
    const joinModal = document.querySelector('.join_modal');
    const joinReset = document.querySelector('.join_reset');

    function modal(a,b,c){
        a.addEventListener('click', function(){
            b.style.display = c
        })
    }

    modal(joinBtn, joinModal, 'block');
    modal(joinReset, joinModal, 'none');
})