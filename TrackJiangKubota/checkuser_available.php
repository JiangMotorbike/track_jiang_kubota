<?php
include_once('functions.php');

$usernamecheck = new DB_con();

$uname = $_POST['username'];

$sql = $usernamecheck->usernameavailable($uname);

$num = mysqli_num_rows($sql);

if ($num > 0) {
    echo "<span style='color: red;'>ขื่อนี้ถูกใช้งานแล้ว</span>";
    echo "<script>$('#submit').prop('disabled', true);</script>";
} else {
    echo "<span style='color: green;'>ขื่อนี้ใช้งานได้</span>";
    echo "<script>$('#submit').prop('disabled', false);</script>";
}

?> 