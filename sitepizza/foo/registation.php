<?php
require_once 'db.php';
session_start();

if (isset($_POST['join'])) {
    $pass = md5($_POST['pass']);
    $login = $_POST['name'];
    $sql = "SELECT * FROM users_reg WHERE login = '$login' AND pass = '$pass'";
    $conn = $dbh;
    $res = $conn->query($sql);
    if ($res) {
        $name = ($res->fetch());
        if (!empty($name)){
            $_SESSION['user'] = $name['login'];
            header('Location:..');
        } else{
            $_SESSION['err'] = 'Пользователь не найден';
            header('Location:..');
    }
        header('Location:..');
    }
}
if (isset($_POST['but'])) {
    $login = $_POST['name'];
    $pass = md5($_POST['pass']);
    $mail = $_POST['mail'];
    $sql = "INSERT INTO users_reg (login, pass, mail) VALUES ('$login','$pass','$mail')";
    $conn = $dbh;
    $res = $conn->exec($sql);
    $_SESSION['user'] = $login;
    header('Location:..');
}

if (isset($_POST['exit'])) {
    unset($_SESSION['user']);
    header('Location:/');
}
