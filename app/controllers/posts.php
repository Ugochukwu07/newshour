<?php 

include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/middleware.php');
include(ROOT_PATH . '/app/helpers/validatePost.php');

$table = 'post';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$id = '';
$titley = '';
$body = '';
$topic_id = '';
$published = '';

if(isset($_GET['id'])){
    $post = selectOne($table, ['id' => $_GET['id']]);
    $id = $post['id'];
    $titley = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}


if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();

    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    /// update publish
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = 'Publish State Changed';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . "/admin/post/index.php");
    exit();

}




if(isset($_GET['del_id'])){
    adminOnly();
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = 'Post Deleted Successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . "/admin/post/index.php");
    exit();
}



if (isset($_POST['add-post'])) {
    adminOnly();
      $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, 'Failed To Upload Image');
        	}   
    } else {
        array_push($errors, 'Post Image Required');
    }


if (count($errors) === 0) {
    adminOnly();
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_SESSION['message'] = 'Post created Successfully';
        $_SESSION['type'] = 'success';
        $_POST['body'] = htmlentities($_POST['body']);
        $post_id = create($table, $_POST);
        header('location: ' . BASE_URL . "/admin/post/index.php");
        exit();
}else{
    $titley = $_POST['title'];
    $body = $_POST['body'];
    $topic_id = $_POST['topic_id'];
    $published = isset($_POST['published']) ? 1 : 0;
}  
}   

//..............................................................................//

if (isset($_POST['update-post'])) {
    adminOnly();
    $errors = validatePost($_POST);

  if (!empty($_FILES['image']['name'])) {
      $image_name = time() . '_' . $_FILES['image']['name'];
      $destination = ROOT_PATH . "/assets/images/" . $image_name;

      $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

      if ($result) {
          $_POST['image'] = $image_name;
        } else {
            array_push($errors, 'Failed To Upload Image');
            }   
    } else {
        array_push($errors, 'Post Image Required');
    }


  if (count($errors) === 0) {
    adminOnly();
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_SESSION['message'] = 'Post Updated Successfully';
        $_SESSION['type'] = 'success';
        $_POST['body'] = htmlentities($_POST['body']);
        $post_id = update($table, $id, $_POST);
        header('location: ' . BASE_URL . "/admin/post/index.php");
        exit();
    }else{
        $titley = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
     
}

?>