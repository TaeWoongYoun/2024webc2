<?php $conn = mysqli_connect('localhost', 'root', '', 'daejeon')?>

<?php
    $id = $_POST['userid'];
    $name = $_POST['name'];
    $pw = $_POST['userpw'];
    $sql = "INSERT INTO user (userid, name, userpw) VALUES ('$id', '$name', '$pw')";
    mysqli_query($conn, $sql);
?>

<script>
    alert("회원가입이 완료되었습니다.")
    location.href = 'index.php'
</script>