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
            <button id="openModalBtn">부스 일정 생성</button>
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

        <div id="scheduleModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>부스 일정 생성</h2>
            <form id="scheduleForm">
                <label for="operationDate">운영일자:</label>
                <input type="date" id="operationDate" name="operationDate" required><br>

                <label for="startTime">운영 시작 시간:</label>
                <input type="time" id="startTime" name="startTime" min="09:00" max="19:00" required><br>

                <label for="endTime">운영 종료 시간:</label>
                <input type="time" id="endTime" name="endTime" min="09:00" max="19:00" required><br>

                <label for="maxParticipants">최대 인원:</label>
                <input type="number" id="maxParticipants" name="maxParticipants" min="1" required><br>

                <button type="submit">일정 생성</button>
            </form>
        </div>
    </div>
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="index.js"></script>
    <script src="check_id.js"></script>
    <script>
        // scripts.js
$(document).ready(function() {
    var modal = $('#scheduleModal');
    var openModalBtn = $('#openModalBtn');
    var closeModalBtn = $('.close');
  
    openModalBtn.click(function() {
      modal.show();
    });
  
    closeModalBtn.click(function() {
      modal.hide();
    });
  
    $(window).click(function(event) {
      if ($(event.target).is(modal)) {
        modal.hide();
      }
    });
  
    $('#scheduleForm').submit(function(event) {
      event.preventDefault();
  
      var formData = $(this).serialize();
  
      $.ajax({
        type: 'POST',
        url: 'create_schedule.php',
        data: formData,
        success: function(response) {
          alert(response);
          modal.hide();
        },
        error: function() {
          alert('일정 생성 중 오류가 발생했습니다.');
        }
      });
    });
  });
    </script>
</body>
</html>