<?php
//require pages
require_once('settings.php');
$Outline->header();

if (isset($_POST['uname']) && isset($_POST['pswd'])) {
    // authenticate
    $user = new  User();
    $isLogged = $user->login($_POST['uname'], $_POST['pswd']);
    if ($isLogged) {
        $_SESSION['user'] = serialize($user);
    }
}

if (isset($_SESSION['user'])) {
    header('location:index.php');
}

require 'segments/login.form.php';
$Outline->footer();
