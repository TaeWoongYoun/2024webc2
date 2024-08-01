<h3>체험예약 페이지</h3>
<h5>체험 검색 영역</h5>
<input type="text" placeholder="search"> <button>검색</button> <br>
<a href="date.php"><button>전체 일정 보기</button></a>

<div class="booth_area">
    <?php
        $sql = "SELECT * FROM booth_man";
        $result = mysqli_query($conn, $sql);
        $booth_id = 0;
        while ($row = mysqli_fetch_array($result)){
            echo "
            <div class='booth_admin'>
                <p class='booth_user_modal_open' data-booth-id='{$booth_id}'>체험이름 : {$row['ex_name']}</p>
                <p>담당자 : 담당자1</p>
                <p>운영일자 : {$row['date']}</p>
                <p>운영시간 : {$row['start_time']} ~ {$row['finish_time']}</p>
            </div>

            <div class='booth_user_modal' id='booth_user_modal_{$booth_id}'>
                <form action='list.php' method='post'>
                    <input type='text' placeholder='체험이름'>
                    <p>담당자1</p>
                    <input type='number' placeholder='신청인원'>
                    <p>신청가능인원 : {$row['member']}</p>
                    <input type='text' placeholder='리뷰'> <br>
                    <button type='submit'>예약</button>
                    <button type='button' class='booth_user_modal_close'>닫기</button>
                </form>
            </div>";
            $booth_id++;
        }
    ?>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openButtons = document.querySelectorAll('.booth_user_modal_open');
        const closeButtons = document.querySelectorAll('.booth_user_modal_close');

        openButtons.forEach(button => {
            button.addEventListener('click', function() {
                const boothId = this.getAttribute('data-booth-id');
                const modal = document.getElementById('booth_user_modal_' + boothId);
                modal.style.display = 'block';
            });
        });

        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const modal = this.closest('.booth_user_modal');
                modal.style.display = 'none';
            });
        });
    });
</script>