<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
include(ROOT_PATH . '/app/helpers/paging.php');
adminOnly();
if(isset($_POST['search-term'])){
    $postTitle = "You Searched For: '" . $_POST['search-term'] . " ' ";

    #get total numbers of pages
    $totalPages = count(search($_POST['search-term'])) / $results_per_page;

    #get posts aagin with start and limts
    $posts = searchLimts($_POST['search-term'], $start, $results_per_page);

}else{
        $postTitle = "Posts";
        #get total numbers of pages
        $totalPages = count(getPublishedpostAll()) / $results_per_page;

        #get posts aagin with start and limts
        $posts = getPublishedpostAllLimts($start, $results_per_page);

}

$title = 'Manage Posts';
$manage = 'Add Posts';
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
                <div class="section search" style="margin: 10px;">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" id="text-input" placeholder="Search...">
                    </form>
                </div>
            </div>
            <div class="content">
                <h2 class="page-title"><?php echo $postTitle; ?></h2>
                <?php include(ROOT_PATH . "/app/includes/messages.php");?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>

                    <?php foreach ($posts as $key => $post): ?>
                    <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td><?php echo $post['username']; ?></td>
                            <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                            <td><a href="edit.php?del_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>
                            <?php if ($post['published']): ?>
                                <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">Unpublish</a></td>
                            <?php else: ?>
                                <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">Publish</a></td>
                            <?php endif;?>
                        </tr>
                    <?php endforeach;?>    
                    </tbody>
                    
                </table>
                <div class="paging-wrapper">
                    <ul>
                        <?php
                            for ($x=1; $x < $totalPages + 1; $x++) {
                                    echo "<a href='?page=$x'><li>$x</li></a>";
                               
                            }
                        ?>
                    </ul>
                </div>
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