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
    <?php require('./login&join/join_modal.php')?>
    <?php require('./login&join/login_modal.php')?>

        <?php if (isset($_GET['id']) && $_GET['id'] == 'admin'){ ?>
            <!-- 관리자 -->
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
        <?php } elseif (isset($_GET['id']) && in_array($_GET['id'], ['man1', 'man2', 'man3'])){ ?>
            <!-- 담당자 -->
        <?php } elseif (isset($_GET['id'])) { ?>
            <!-- 일반회원 -->
            <h3>체험예약 페이지</h3>
            <input type="text" placeholder="search"> <button>검색</button> <br>
            <button>전체 일정 보기</button>
        <?php } else { ?>
            <!-- 로그인X -->
        <?php } ?>
        
        
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="index.js"></script>
    <script src="check_id.js"></script>
</body>
</html>