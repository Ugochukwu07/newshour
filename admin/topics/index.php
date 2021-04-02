<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

adminOnly();

$title = 'Manage Topics'
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
                
            <div class="content">
                <h2 class="page-title">Manage Topics</h2>
                <?php include(ROOT_PATH . "/app/includes/messages.php");?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                    
                        <?php foreach ($topics as $key => $topic):?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $topic['name']; ?></td>
                            <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">Edit</a></td>
                            <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">Delete</a></td>
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
    <script src="../../assets/js/jquery-3.4.1.slim.min.js"></script>
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>

</body>

</html>