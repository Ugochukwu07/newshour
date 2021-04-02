<?php 

function usersOnly($redirect = '/login.php') {
    if (empty($_SESSION['id'])) {
        $_SESSION['message'] = 'You are not logged in!!';
        $_SESSION['type'] = 'error';

        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function adminOnly($redirect = '/index.php') {
    if (empty($_SESSION['admin']) || empty($_SESSION['id'])) {
        $_SESSION['message'] = 'You are not authorized!!';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function guestOnly($redirect = '/index.php') {
    if (!empty($_SESSION['id'])) {
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function headAdminOnly($redirect = '/admin/users/index.php') {
    $heademail = 'ekwuemepddaul68@gmail.com';
    if ($_SESSION['email'] != $heademail) {
        $_SESSION['message'] = 'You are not authorized!!';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}