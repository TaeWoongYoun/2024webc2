<?php $conn = mysqli_connect('localhost', 'root', '', 'daejeon')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대전 C모듈</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require('./header/btn.php')?>

    <div class="join_modal">
        <h2>회원가입</h2>
        <form action="join.php" method="post" onsubmit="return ck(this)">
            <input type="text" name="userid" id="userid" placeholder="아이디"> <button type="button" id="check_id">중복확인</button> <br>
            <input type="hidden" name="ok" id="ok" value="0">
            <input type="text" name="name" id="name" placeholder="이름"> <br>
            <input type="password" name="userpw" id="userpw" placeholder="비밀번호"> <br>
            <button type="submit" class="join_submit">가입하기</button>
            <button type="reset" class="join_reset">취소</button>
        </form>
    </div>

    <div class="login_modal">
        <h2>로그인</h2>
        <form action="login.php" method="post">
            <input type="text" name="userid" id="login_id" placeholder="아이디"> <br>
            <input type="password" name="userpw" id="login_pw" placeholder="비밀번호"> <br>
            <select name="member" id="member">
                <option value='회원구분' selected disabled>회원구분</option>
                <option value="관리자">관리자</option>
                <option value="담당자">담당자</option>
                <option value="일반회원">일반회원</option>
            </select> <br>
            <button type="submit">가입하기</button>
            <button type="reset" class="login_reset">취소</button>
        </form>
    </div>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="index.js"></script>
    <script src="check_id.js"></script>
</body>
</html>