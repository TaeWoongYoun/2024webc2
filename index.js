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

    document.querySelector('.join_submit').addEventListener('click', function(event) {
        const userid = document.querySelector('#userid').value.trim();
        const name = document.querySelector('#name').value.trim();
        const userpw = document.querySelector('#userpw').value;

        const useridRegex = /^[a-zA-Z0-9]{4,}$/; // 4글자 이상의 알파벳 및 숫자
        const nameRegex = /^[a-zA-Z가-힣]{2,}$/; // 2글자 이상의 알파벳 또는 한글
        const userpwRegex = /^.{4,}$/; // 4글자 이상의 문자

        if (!useridRegex.test(userid)) {
            alert("아이디를 4글자 이상 입력해주세요.");
            event.preventDefault();
            return false;
        }
        if (!nameRegex.test(name)) {
            alert("이름을 2글자 이상 입력해주세요.");
            event.preventDefault();
            return false;
        }
        if (!userpwRegex.test(userpw)) {
            alert("비밀번호를 4글자 이상 입력해주세요.");
            event.preventDefault();
            return false;
        }
    });
})