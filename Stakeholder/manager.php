<h3>체험예약 페이지</h3>

<div class="booth_area">
    <?php
    $sql = "SELECT * FROM booth";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)){
        echo "
        <div class='booth'>
        <form action='booth_man.php' method='post'>
            <p>운영일자 : {$row['date']}</p>
            <input type='hidden' name='date' value='{$row['date']}'>
            <p>운영시간 : {$row['start_time']} ~ {$row['finish_time']}</p>
            <input type='hidden' name='start_time' value='{$row['start_time']}'>
            <input type='hidden' name='finish_time' value='{$row['finish_time']}'>
            <p>최대인원 : {$row['member']}명</p>
            <input type='hidden' name='member' value='{$row['member']}'>
            <input type='text' name='ex_name' placeholder='체험이름' require>
            <button type='submit'>등록요청</button>
        </form>
        </div>
        ";
    }
    ?>
</div>

<h3>승인대기 영역</h3>
<div class="booth_area">
    <?php
        $sql = "SELECT * FROM booth_man";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)){
            echo "
            <div class='booth_admin'>
                <p>운영일자 : {$row['date']}</p>
                <p>운영시간 : {$row['start_time']} ~ {$row['finish_time']}</p>
                <p>최대인원 : {$row['member']}</p>
                <p>체험이름 : {$row['ex_name']}</p>
                <button>승인대기</button>
            </div>
            ";
        }
    ?>
</div>