<h3>관리자 페이지</h3>
<h5>부스 일정 생성 영역</h5>
<button class="booth_modal_open">부스 일정 생성</button>

<div class="booth_modal">
    <form action="boothCreate.php" method="post">
        운영일자 : <input type="date" name="date" id="date" require> <br>
        운영 시작 시간 : <input type="time" name="start_time" min='09:00' max='19:00' require> <br>
        운영 종료 시간 : <input type="time" name="finish_time" min='09:00' max='19:00' require> <br>
        최대 인원 : <input type="number" name="member" require> <br>
        <button type="submit">일정 생성</button>
        <button type="reset" class="booth_modal_close">생성 취소</button>
    </form>
</div>

<script>
    const boothModalOpen = document.querySelector('.booth_modal_open');
    const boothModal = document.querySelector('.booth_modal');
    const boothModalClose = document.querySelector('.booth_modal_close');

    boothModalOpen.addEventListener('click', function(){
        boothModal.style.display = 'block';
    })
    boothModalClose.addEventListener('click', function(){
        boothModal.style.display = 'none';
    })
</script>