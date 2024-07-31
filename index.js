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
document.querySelector('.join_submit').addEventListener('click', function(event) {
    const userid = document.querySelector('#userid').value;
    const name = document.querySelector('#name').value;
    const userpw = document.querySelector('#userpw').value;

    if (userid.length < 4) {
        alert("아이디를 4글자 이상 입력해주세요.");
        event.preventDefault();
        return false;
    }
    if (name.length < 2) {
        alert("이름을 2글자 이상 입력해주세요.");
        event.preventDefault();
        return false;
    }
    if (userpw.length < 4) {
        alert("비밀번호를 4글자 이상 입력해주세요.");
        event.preventDefault();
        return false;
    }
});
