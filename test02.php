<?php 
function dd($value) { // to be deleted
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}
$news_keyword = 'bitcoin';
$news_api_key = '896ff0be567945939518e5b28ddae309';
$url = "http://newsapi.org/v2/everything?q=" . $news_keyword . "&from=2020-04-08&sortBy=publishedAt&apiKey=" . $news_api_key;
$list = file_get_contents($url);
  $json = json_decode($list, true);
//dd($json);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tets</title>
</head>
<style>
    .post {
        background-color: grey;
        width: 80%;
        min-height: 250px;
        box-shadow: 3px 3px 3px #000011, -3px -3px -3px #202020;
        display: flex;
        padding: 10px;
        margin: 10px;
        font-family: sans-serif;
    }
    
    .post img {
        width: 300px;
        height: 100%;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    
    h1 {
        background-color: #202020;
        color: #fff;
        padding: 10px;
        margin-bottom: 10px;
        font-weight: 600;
        font-size: 30px;
        font-family: sans-serif;
    }
    
    .post .contents {
        text-align: left;
        font-size: 15px;
        margin-left: 10px;
        border: 1px solid silver;
        padding: 5px;
    }
    ul{
        display: flex;
        padding: 5px;
        text-transform: uppercase;
        flex-wrap: wrap;
    }
    ul li{
        padding: 5px;
        background: #fff;
        list-style: none;
        margin-left: 5px;
        margin-right: 5px;
        border: 1px solid silver;
    }
    a{
        text-decoration: underline;
        display: block;
        color: #181818;
    }
</style>

<body>
    <h1 style="text-align: center;">Test For API's</h1>
    <hr>
    <center>
        <?php foreach($json->articles as $obj){?>
        <div class="post">
            <img src="<?php echo $obj['urlToImage']; ?>" alt="">
            <div class="contents"><a href="<?php echo $obj['url']?>">
                <h2><?php echo $obj['title']; ?></h2></a>
                <?php echo $obj['description']; ?>
            <hr>
                <p>
                    <?php echo $obj['content']; ?>
                </p>
            </div>
            
            
        </div>
        <?php }?>
    </center>
</body>

</html>