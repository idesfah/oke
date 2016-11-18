<?php

include 'confiig/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from user where username='$username'"
        . " and password='$password'");
var_dump($login);
$data = mysqli_num_rows($login);
if ($data > 0) {
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['login'] = $user['username'];
//    var_dump($_SESSION);
    header("location:index.php");
} else {
    header("location:index.php?login=0");
}
