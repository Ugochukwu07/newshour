<?php 

function validate($user) {
    $errors  = array();
    
    if (empty($user['username'])) {
        array_push($errors, 'Username Required');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Email Required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password Required');
    }
    if ($user['passwordConfi'] !== $user['password']) {
        array_push($errors, 'Passwords do not match');
    }

    $existingUser = selectOne('user', ['username' => $user['username']]);
    if($existingUser){
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'UserName Already Exists');
        }
        if (isset($user['create-admin']) || isset($user['register-btn'])) {
            array_push($errors, 'UserName Already Exists');
        }       
    }

    $existingUser = selectOne('user', ['email' => $user['email']]);
    if($existingUser){
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email Already Exists');
        }
        if (isset($user['create-admin']) || isset($user['register-btn'])) {
            array_push($errors, 'Email Already Exists');
        }       
    }
return $errors;
}

function validateLogin($user) {
    $errors  = array();

    if (empty($user['username'])) {
    array_push($errors, 'Username Required');
    }
    if (empty($user['password'])) {
    array_push($errors, 'Password Required');
    }
return $errors;
}

?>