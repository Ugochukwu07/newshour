<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/posts.php");

adminOnly();

$title = 'Edit Posts';
$manage = 'Manage Post';
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
                <a href="create.php" class="btn btn-big">Add Posts</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>
            <h2 class="page-title">Edit Post</h2>
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
            <form action="edit.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo $titley; ?>" class="text-input" placeholder="Title">
                </div>

                <div>
                    <label>Body</label>
                    <textarea name="body" id="body" row="5" class="text-input" placeholder="Body of The Post"><?php echo $body; ?></textarea>
                </div>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" class="text-input">
                </div>
                <div>
                    <label>Topics</label>
                    <select name="topic_id" class="text-input">
                    <option value=""></option>
                    <?php foreach ($topics as $key => $topic): ?>
                        <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                        <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                        <?php else: ?>
                        <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                        <?php endif; ?>
                    <?php endforeach;?>
                        </select>
                </div>
                <div>
                        <?php if(empty($published) && $published == 0):?>
                            <label>
                            <input type="checkbox" name="published">
                            Publish
                            </label>
                        <?php else:?>
                            <label>
                            <input type="checkbox" name="published" checked>
                            Publish
                            </label>
                        <?php endif;?>
                </div>
                <div>
                    <button class="btn btn-big" type="submit" name="update-post">Update Post</button>
                </div>
            </form>
        </div>
    </div>
    <!--// Admin Content-->
    <!-- JQurey -->
    <script src="../../assets/js/jquery-3.4.1.slim.min.js"></script>

    <script src=<?php include(ROOT_PATH . "/ckeditor.js"); ?>></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>