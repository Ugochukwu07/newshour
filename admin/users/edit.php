<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/users.php");

adminOnly();

$title = 'Edit Users';
$manage = 'Manage User'
?>
<!DOCTYPE html>
<html lang="en">

<?php include(ROOT_PATH . "/app/includes/adminhead.php");?>

<body>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>
    <!--Admin Page Wrapper -->
    <div class="admin-wrapper">
        <!-- Left Side Bar -->
        <?php include(ROOT_PATH . "/app/includes/leftbar.php");?>
        <!-- // Left Side Bar -->
        <!--Admin Content-->
        <div class="admin-content">
        <div class="botton-group">
                <a href="create.php" class="btn btn-big">Add Users</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>
            <h2 class="page-title">Edit User</h2>
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
            <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                    <label>Username</label>
                    <input type="text" name="username" class="text-input" value="<?php echo $username; ?>">
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" class="text-input" value="<?php echo $email; ?>">
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" class="text-input">
                </div>
                <div>
                    <label>Confirm Password</label>
                    <input type="password" name="passwordConfi" class="text-input">
                </div>
                <div>
                    <?php if(isset($admin) && $admin == 1): ?>
                        <label>
                     <input type="checkbox" name="admin" checked>
                    Admin
                    </label>
                    <?php else:?>
                        <label>
                     <input type="checkbox" name="admin">
                    Admin
                    </label>
                    <?php endif;?>
                </div>
                <div>
                    <button type="submit" class="btn btn-big but" name="update-user">Update User</button>
                </div>
            </form>

        </div>
    </div>
    <!--// Admin Content-->
    <!-- JQurey -->
    <script src="../../js/jquery-3.4.1.slim.min.js"></script>

    <script src="ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>
</body>

</html>