<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대전 C모듈</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <button class="join_btn">회원가입</button>
    <button class="login_btn">로그인</button>

    <div class="join_modal">
        <h2>회원가입</h2>
        <input type="text" name="userid" id="userid" placeholder="아이디"> <button type="button">중복확인</button> <br>
        <input type="text" name="name" id="name" placeholder="이름"> <br>
        <input type="password" name="userpw" id="userpw" placeholder="비밀번호"> <br>
        <button type="submit">가입하기</button>
        <button type="reset" class="join_reset">취소</button>
    </div>

    <script src="index.js"></script>
</body>
</html>