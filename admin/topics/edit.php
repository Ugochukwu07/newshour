<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

adminOnly();

$title = 'Edit Topics';
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
            <a href=<?php echo BASE_URL . "/admin/topics/create.php";?> class="btn btn-big">Add Topics</a>
            <a href=<?php echo BASE_URL . "/admin/topics/index.php";?> class="btn btn-big">Manage Topics</a>
                </div>
            <h2 class="page-title">Edit Topic</h2>
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
            <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div>
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="description" id="body" row="5" class="text-input"><?php echo $description; ?></textarea>
                </div>
                <div>
                    <button class="btn btn-big" name="update-topic" type="submit">Update Topic</button>
                </div>
            </form>
        </div>
    </div>
    <!--// Admin Content-->
    <!-- JQurey -->
    <script src="../../assets/js/jquery-3.4.1.slim.min.js"></script>
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>