<?php
    if(isset($_GET['id'])){
        if (in_array($_GET['id'], ['admin', 'man1', 'man2', 'man3'])){
            echo "
            <a href='index.php'><button class='logout'>로그아웃</button></a>
            <button class=''>마이페이지</button>
            <button class=''>알림이미지</button>
            ";
        } else {
            echo "
            <a href='index.php'><button class='logout'>로그아웃</button></a>
            <button class=''>마이페이지</button>
            ";
        }
    } else {
        echo "
        <button class='login_btn'>로그인</button>
        <button class='join_btn'>회원가입</button>
        ";
    }
?>