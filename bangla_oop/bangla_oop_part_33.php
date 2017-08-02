<?php

spl_autoload_register(function($class_name){
   
    include("classes/".$class_name.".php");
    
});

$blogPosts = getAllPosts();

$posts = new Posts();

foreach($posts as $post)
{
    echo $post->getTitle();
    echo $post->getAuthorName();
    echo $post->getDate();
    echo $post->getContent();
    
    $comments = new Comments($post->getComment);
    
    foreach ($comments as $comment)
    {
        echo $comment->getCommentAuther();
        echo $comment->getCommentContent();
    }
}


?>