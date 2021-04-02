<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/users.php");

headAdminOnly();


$title = 'Manage Admin Users';
$manage = 'Add User';
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
            <div class="content">
                <h2 class="page-title">Manage Admin Users</h2>
                <?php include(ROOT_PATH . "/app/includes/messages.php");?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($adminUsers as $key => $user):?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $user['username']; ?></td>
                            <?php if($user['admin'] === 1):?>
                            <td><?php echo 'Admin'; ?></td>
                            <?php else: ?>
                                <td><?php echo 'User'; ?></td>
                            <?php endif; ?>
                            <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Edit</a></td>
                            <td><a href="index.php?del_id=<?php echo $user['id']; ?>" class="delete">Delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--// Admin Content-->
    </div>
    <!-- JQurey -->
    <script src="../../js/jquery-3.4.1.slim.min.js"></script>
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>

</body>

</html>