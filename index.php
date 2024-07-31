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

    
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="index.js"></script>
    <script src="check_id.js"></script>
</body>
</html>