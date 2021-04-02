<?php 
include('path.php');
include(ROOT_PATH . '/app/controllers/topics.php');
include(ROOT_PATH . "/app/helpers/messages.php");
$posts = array();
$results_per_page = 2;
include(ROOT_PATH . '/app/helpers/paging.php');
$postTitle = 'Recent Posts';
if (isset($_GET['t_id'])) {
    $posts = getPOstById(($_GET['t_id']));

    #count posts
    $number_of_posts = count($posts);

    #get total numbers of pages
    $totalPages = $number_of_posts / $results_per_page;

    #get posts aagin with start and limts
    $posts = getPOstByIdLimts($start, $results_per_page, ($_GET['t_id']));
    $postTitle = "You Searched For Topics Under: '" . $_GET['name'] . " ' ";
}else if(isset($_POST['search-term'])){
    $postTitle = "You Searched For: '" . $_POST['search-term'] . " ' ";
    #$posts = search($_POST['search-term']);

    #count posts
    #$number_of_posts = count($posts);

    #get total numbers of pages
    #$totalPages = $number_of_posts / $results_per_page;
    $totalPages = count(search($_POST['search-term'])) / $results_per_page;
    #get posts aagin with start and limts
    $posts = searchLimts($_POST['search-term'], $start, $results_per_page);

}else {
    $posts = getPublishedpost();
    
    #count posts
    $number_of_posts = count($posts);

    #get total numbers of pages
    $totalPages = $number_of_posts / $results_per_page;

    #get posts aagin with start and limts
    $posts = getPublishedpostpage($start, $results_per_page);
}

/* $page = count($posts) / 5;
dd($posts); */
//$topics = selectAll('topics');
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <title>Welcome</title>
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
<?php include(ROOT_PATH . "/app/includes/messages.php");?>
<?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Slider Wrapper -->
        <div class="post-slider">
            <h2 class="slider-title">Trending Post</h2>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper clearfix">
                <?php foreach($posts as $post): ?>
                <div class="post">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="Post Image" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                        <i class="fa fa-user"></i> <?php echo $post['username']; ?> &nbsp;
                        <i class="fa fa-calendar"></i> <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- //Slider Wrapper -->
        <!-- Content -->
        <div class="content clearfix">
            <!-- Main Content -->
            <div class="main-content">
                <h2 class="recent-post-title"><?php echo $postTitle; ?></h2>
                <?php foreach($posts as $rows): ?>
                        <div class="post clearfix">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $rows['image']; ?>" alt="Recent Post Image" class="post-image">            
                            <div class="post-preview">
                                <h4><a href="single.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['title']; ?></a></h4>
                                <i class="fa fa-user"></i> <?php echo $rows['username']; ?> &nbsp;
                                <i class="fa fa-calendar"></i> <?php echo date('F j, Y', strtotime($rows['created_at'])); ?>
                                <p class="post-preview-text"><?php echo html_entity_decode(substr($rows['body'], 0, 150) . '...'); ?></p>
                                <br><a href="single.php?id=<?php echo $rows['id']; ?>" class="btn read-more">Read More</a>
                            </div>
                        </div>
                <?php endforeach; ?>

                <div class="paging-wrapper">
                    <ul>
                        <?php
                            for ($x=1; $x < $totalPages + 1; $x++) { 
                                if ($x >61) {
                                    exit();
                                }else {
                                    echo "<a href='?page=$x'><li>$x</li></a>";
                                }
                                
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <!--// Main Content -->
            <!-- Side Contents -->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" id="text-input" placeholder="Search...">
                    </form>
                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>

                    <?php foreach ($topics as $key => $topic):?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?> 
                    </ul>
                </div>
                <br>
                <a href="#"><img src="assets/images/btcmine.png" class="ad hidden"></a>
            </div>
            <!--// Side Contents -->
        </div>
        <!-- // Content -->
    </div>
    <!-- // Page Wrapper -->

    <!-- JQurey -->
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <!-- Slick Js -->
    <script src="assets/js/slick.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
    <?php include(ROOT_PATH . "/app/includes/footer.php");?>
</body>

</html>