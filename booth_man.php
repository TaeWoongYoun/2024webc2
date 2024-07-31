<?php $conn = mysqli_connect('localhost', 'root', '', 'daejeon')?>

<?php
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
    $finish_time = mysqli_real_escape_string($conn, $_POST['finish_time']);
    $member = mysqli_real_escape_string($conn, $_POST['member']);
    $ex_name = mysqli_real_escape_string($conn, $_POST['ex_name']);
    $sql = "INSERT INTO booth_man (date, start_time, finish_time, member, ex_name) VALUES ('$date', '$start_time', '$finish_time', '$member', '$ex_name')";
    mysqli_query($conn, $sql);
?>

<script>
    alert('체험이 예약되었습니다.')
    location.href = 'index.php?id=man1'
</script>