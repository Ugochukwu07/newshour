<?php 
include('path.php');
include(ROOT_PATH . '/app/controllers/topics.php');
include(ROOT_PATH . "/app/helpers/messages.php");
usersOnly();
$topicl = array('bitcoin','forex','football','music','nature','life','fighting', 'movies', 'games', 'politics');
$news_keyword = array_rand($topicl, 1);
$news_api_key = '896ff0be567945939518e5b28ddae309';

$url = "http://newsapi.org/v2/everything?q=" . $news_keyword . "&from=2020-04-08&sortBy=publishedAt&apiKey=" . $news_api_key;
$url = "http://newsapi.org/v2/everything?q=bitcoin&from=2020-04-09&sortBy=publishedAt&apiKey=896ff0be567945939518e5b28ddae309";
$list = file_get_contents($url);
$json = json_decode($list, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/api.css">
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
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Slider Wrapper -->
        <div class="post-slider">
            <h2 class="slider-title">Trending Post</h2>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper">
            <?php foreach ($json['articles'] as $obj) {?>
                <div class="post">
                    <img src="<?php echo $obj['urlToImage']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="<?php echo $obj['url']; ?>"><?php echo $obj['title']; ?></a></h4>
                        <i class="fa fa-user"></i> Ugochukwu &nbsp;
                        <i class="fa fa-calendar"></i> May 6, 2089
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <!-- //Slider Wrapper -->
        <!-- Content -->
        <div class="content">
            <!-- Ad Section -->
            <div class="ad-section">
                <img src="./images/rdet.jpg" width="100%" style="margin: 10px;" alt="">
                <img src="./images/rdet.jpg" width="100%" style="margin: 10px;" alt="">
                <img src="./images/rdet.jpg" width="100%" style="margin: 10px;" alt="">
            </div>
            <!-- //Ad Section -->
            <!-- Main Content -->
            <div class="main">
                <h2 class="recent-post-title">Recent Post</h2>
                <?php foreach($json['articles'] as $obj){?>
                <div class="post clearfix">
                    <img src="<?php echo $obj['urlToImage']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h4><a href="<?php echo $obj['url']?>"><?php echo $obj['title']; ?></a></h4>
                        <i class="fa fa-user"></i> Ugochukwu &nbsp;
                        <i class="fa fa-calendar"></i> May 6, 2089
                        <p class="post-preview-text"><?php echo $obj['description']; ?></p>
                        <br><a href="<?php echo $obj['url']?>" class="btn read-more">Read More</a>
                    </div>
                </div>
                <?php }?>
                <div class="post clearfix">
                    <img src="images/imagesjy.jpg" alt="" class="post-image">
                    <img src="images/imagesjy.jpg" alt="" class="post-image">
                </div>
            </div>
            <!-- //Main Content -->
            <!-- Sidebar Content -->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" id="text-input" placeholder="Search...">
                    </form>
                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Hoildays</a></li>
                    </ul>
                </div>
                <br>
                <a href="#"><img src="images/btcmine.png" class="ad hidden"></a>
            </div>
            <!-- //Side bar Content -->

        </div>
        <!-- // Content -->
    </div>
    <!-- // Page Wrapper -->
    <!-- footer -->
    <div class="footer" name="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>News</span>Hour</h1>
                <p>NewsHour is on of the top blog in the whole world in general. As it was ranked #1 by BBC on 52th Dec. 2098 in Middle East and The West. This blog is for sale. Contact Ekwueme Ugochukwu using the below email. Thanks for viewing.
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> &nbsp; +234-814-344-0606</span>
                    <span><i class="fas fa-envelope"></i> &nbsp; ekwuemeugochukwu83@gmail.com</span>
                </div>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-section quick">
                <h2>Quick Links</h2>
                <br>
                <ul>
                    <a href="#">
                        <li>Events</li>
                    </a>
                    <a href="#">
                        <li>Teams</li>
                    </a>
                    <a href="#">
                        <li>Mentors</li>
                    </a>
                    <a href="#">
                        <li>Gallery</li>
                    </a>
                    <a href="#">
                        <li>Terms & Conditions</li>
                    </a>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h2>Contact Us</h2>
                <br>
                <form action="index.html" method="post" class="">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address">
                    <textarea row="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big contact-btn"><i class="fas fa-envelope"></i>Send</button>
                </form>
            </div>
        </div>
        <div class=" footer-bottom">
            <i class="fas fa-copyright    "></i> newshour.com | Designed By Ekwueme Ugochukwu
        </div>
    </div>
    <!-- // footer -->
    <!-- JQurey -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <!-- Slick Js -->
    <script src="js/slick.js"></script>
    <!-- Custom Script -->
    <script src="js/scripts.js"></script>

</body>

</html>