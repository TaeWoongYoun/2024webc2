<?php $conn = mysqli_connect('localhost', 'root', '', 'daejeon')?>

<?php
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
    $finish_time = mysqli_real_escape_string($conn, $_POST['finish_time']);
    $member = mysqli_real_escape_string($conn, $_POST['member']);
    $sql = "INSERT INTO booth (date, start_time, finish_time, member) VALUES ('$date', '$start_time', '$finish_time', '$member')";
    mysqli_query($conn, $sql);
?>

<script>
    alert('부스 일정이 생성되었습니다.')
    location.href = 'index.php?id=admin'
</script>