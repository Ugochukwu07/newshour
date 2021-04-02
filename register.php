<?php include('path.php');?>
<?php 
include(ROOT_PATH . '/app/controllers/users.php');
guestOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Goggle Fonts -->
    <link href="assets/css/googlefonts.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="assets/js/fontawesome.js"></script>
    <script src="fontawesome-free-5.12.0-web\js/all.js"></script>
    <script src="fontawesome-free-5.12.0-web/metadata/icons.json"></script>
    <link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
</head>

<body>
<?php include(ROOT_PATH . "/app/includes/header.php");?>
    <div class="auth-content">
    <h2 class="form-title">Register</h2>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
        <form action="register.php" method="post">
            <div>
                <label for="">Username</label>
                <input type="text" name="username" value="<?php echo $username;?>" class="text-input">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo $email;?>" class="text-input">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" value="<?php echo $password;?>" class="text-input">
            </div>
            <div>
                <label for="">Confirm Password</label>
                <input type="password" name="passwordConfi" value="<?php echo $passwordConfi;?>" class="text-input">
            </div>
            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>
            <p>Or <a href=<?php echo BASE_URL . "/login.php";?>>Sign In!</a></p>
        </form>
    </div>
    <!-- JQurey -->
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <!-- Slick Js -->
    <script src="assets/js/slick.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>

</body>

</html>