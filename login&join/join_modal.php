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