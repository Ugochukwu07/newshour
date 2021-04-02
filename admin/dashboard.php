<?php 
include("../path.php");
include(ROOT_PATH . "/app/controllers/users.php");

adminOnly();

$title = 'Dash Board';
$manage = 'Manage User'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo 'Admin Section - ' . $title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- custom css -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <!-- Goggle Fonts -->
    <link href="../assets/css/googlefonts.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="../assets/js/fontawesome.js"></script>
    <script src="../fontawesome-free-5.12.0-web\js/all.js"></script>
    <script src="../fontawesome-free-5.12.0-web/metadata/icons.json"></script>
    <link href="../fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
</head>

<body>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>
    <!--Admin Page Wrapper -->
    <div class="admin-wrapper">
        <!-- Left Side Bar -->
        <?php include(ROOT_PATH . "/app/includes/leftbar.php");?>
        <!-- // Left Side Bar -->
        <!--Admin Content-->
        <div class="admin-content">
        
            <h2 class="page-title">Dash Board</h2>
            <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
            
        </div>
    </div>
    <!--// Admin Content-->
    <!-- JQurey -->
    <script src="../assets/js/jquery-3.4.1.slim.min.js"></script>

    <script src="../ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>