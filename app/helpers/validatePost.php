<?php

function validatePost($post) {
    $errors  = array();

    if (empty($post['title'])) {
    array_push($errors, 'Title Required');
    }
    if (empty($post['body'])) {
        array_push($errors, 'Body of Post Required');
        }
    if (empty($post['topic_id'])) {
    array_push($errors, 'Please Select A Topic');
    }
    
    $existingPost = selectOne('post', ['title' => $post['title']]);

    if($existingPost){
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Post Title Already Exists');
        }
        if (isset($post['add-post'])) {
            array_push($errors, 'Post Title Already Exists');
        }       
    }
return $errors;
}

?>