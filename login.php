<?php $conn = mysqli_connect('localhost', 'root', '', 'daejeon')?>

<?php
    $id = mysqli_real_escape_string($conn, $_POST['userid']);
    $pw = mysqli_real_escape_string($conn, $_POST['userpw']);
    if (empty($id) || empty($pw)){
        echo "
        <script>
            alert('아이디와 비밀번호를 입력해주세요.');
            location.href = 'index.php';
        </script>";
    } elseif ($id == 'admin' && $pw == '1234' ){
        $_SESSION['userid'] == $id;
        $_SESSION['userpw'] == $pw;
        echo "
        <script>
            alert('관리자로 로그인 되었습니다.');
            location.href = 'index.php?id=admin';
        </script>";
    } elseif ($id == 'man1' && $pw == '1234' ){
        $_SESSION['userid'] == $id;
        $_SESSION['userpw'] == $pw;
        echo "
        <script>
            alert('담당자1로 로그인 되었습니다.');
            location.href = 'index.php?id=man1';
        </script>";
    } elseif ($id == 'man2' && $pw == '1234' ){
        $_SESSION['userid'] == $id;
        $_SESSION['userpw'] == $pw;
        echo "
        <script>
            alert('담당자2로 로그인 되었습니다.');
            location.href = 'index.php?id=man2';
        </script>";
    } elseif ($id == 'man3' && $pw == '1234' ){
        $_SESSION['userid'] == $id;
        $_SESSION['userpw'] == $pw;
        echo "
        <script>
            alert('담당자3로 로그인 되었습니다.');
            location.href = 'index.php?id=man3';
        </script>";
    } else {
        $sql = "SELECT * FROM user WHERE userid = '$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
            $_SESSION['userid'] == $id;
            $_SESSION['userpw'] == $pw;
            echo "
            <script>
                alert('일반회원으로 로그인 되었습니다.');
                location.href = 'index.php?id=$id';
            </script>";
        } else {
            echo "
            <script>
                alert('회원가입을 먼저 진행해주세요.');
                location.href = 'index.php';
            </script>";
        }
    }
?>