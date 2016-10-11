<?php
    if(!defined("_BASE_URL")) die("Pirate reconnu !");

    if(isset($_SESSION['user']) && $_GET['signout'] != "ok"){
        header('Location: ?module=admin&action=index');
        exit();

    } else if(isset($_SESSION['user']) && $_GET['signout'] = "ok"){
        unset($_SESSION['user']);
        header('Location: ?module=admin&action=login');
        exit();
    } else if (isset($_POST['user_mail'])) {
        require_once('model/admin/user_login.php');

        $form = $_POST;
        $form['user_password'] = md5($_POST['user_password']);
        $user = user_login($form);
        if ($user) {
            $_SESSION['user'] = $user;
            $_SESSION['flash']['success'] = "Bonjour ". $_SESSION["user"]["so_user_pseudo"]. " !";
            header('Location: ?module=admin&action=index');
            exit();
        } else {
            header('Location: ?module=admin&action=login');
            exit();
        }
    } else {
        include_once('view/admin/login.php');
    }