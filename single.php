<?php 
include('path.php');
include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['t_id'])) {
    $posts = getPOstById(($_GET['t_id']));
}else if (isset($_GET['id'])) {
    $post = selectOne('post', ['id' => $_GET['id']]);
}


$posts = selectAll('post', ['published' => 1]);
//dd($posts);
$topics = selectAll('topics');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $post['title']; ?> | NewsHour</title>
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
    <style>
    @media only screen and (max-width: 425px) {
        .content .main-content.single{
            font-size: .8rem;
            padding: 5px 5px;
        }
        .content .main-content.single .post-title,
        .content .main-content.single h1,
        .content .sidebar .section h2,.content .sidebar .section h4{ 
            font-size: .9rem;
        }
        .content .sidebar{
            width: 100%;
        }
        .content .sidebar .section{
            margin: 5px;
            padding: 5px;
        }
    }
    .content .main-content.single img{
    max-width: 100%;
}
    </style>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
<?php include(ROOT_PATH . "/app/includes/header.php");?>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Content -->
        <div class="content clearfix">
            <!-- Main Content -->
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>
                <div class="post-content">
                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" width="100%">
                <?php echo html_entity_decode($post['body']); ?>
                </div>
            </div>
            <!--// Main Content -->
            <!-- Side Contents -->
            <div class="sidebar single">
                <div class="fb-page" data-href="https://web.facebook.com/Hydrogen-Tech-104079737825405/?modal=admin_todo_tour" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://web.facebook.com/Hydrogen-Tech-104079737825405/?modal=admin_todo_tour" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/Hydrogen-Tech-104079737825405/?modal=admin_todo_tour">Hydrogen Tech</a></blockquote>
                </div>
               
                <div class="section popular">
                    <h2 class="popular title">Popular Posts</h2>

                        <?php foreach ($posts as $p): ?>
                        <div class="post clearfix">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                            <a href="single.php?id=<?php echo $p['id']; ?>" class="title">
                                <h4><?php echo substr($p['title'], 0, 35) . '...'; ?></h4>
                            </a>
                        </div>
                        <?php endforeach; ?>
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
            <div class="ads" style="margin: 5px; background: #fff;">
            
            </div>
            <!--// Side Contents -->
        </div>
        <!-- // Content -->
    </div>
    <!-- // Page Wrapper -->
<?php include(ROOT_PATH . "/app/includes/footer.php");?>
    <!-- JQurey -->
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <!-- Slick Js -->
    <script src="assets/js/slick.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>

</body>

</html>