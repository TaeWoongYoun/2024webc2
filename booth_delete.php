<?php $conn = mysqli_connect('localhost', 'root', '', 'daejeon')?>

<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "DELETE FROM booth_man WHERE id = '$id'";
    mysqli_query($conn, $sql);
?>

<script>
    location.href = 'index.php?id=admin'
</script>