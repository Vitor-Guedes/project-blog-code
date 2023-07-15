<?php
    require_once '../data/posts.php';

    $currentPost = [];
    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
            break ;
        }
    }
    
?>

POST DATA