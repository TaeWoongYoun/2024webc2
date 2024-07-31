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