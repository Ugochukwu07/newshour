<?php 

$errors = array();
$complain_id = '';
$email = '';
$message = '';
$table = 'complains';

function validateComplain($user) {
    $errors  = array();
    if (empty($user['email'])) {
        array_push($errors, 'Email Required');
    }
    if (empty($user['message'])) {
        array_push($errors, 'Textarea Cannot be Empty');
    }
return $errors;
}
if(isset($_POST['complain'])){
    usersOnly();
    unset($_POST['complain']);
    $_POST['user_id'] = $_SESSION['id'];
    $errors = validateComplain($_POST);
    if (count($errors) === 0) {
        $id = create($table, $_POST);

        $_SESSION['message'] = "Admin Contacted Succesfully";
        $_SESSION['type'] = "success";
        header('location:' . BASE_URL . '/index.php');
        exit();
    }else {
        $email = $_POST['email'];
        $message = $_POST['message'];
    }
}

?>