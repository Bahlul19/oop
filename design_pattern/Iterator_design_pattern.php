<?php

//Iterator Design Patter

spl_autoload_register(function($class_name)
{
    include("classes/".$class_name.".php");
});

$blogPosts = getAllPost();

$posts = new Posts();

foreach($posts as $post)
{
//That all are imaginary method,when we make a blog this is a structural system
//Thats why we will make these method
    echo $post->getTitle();
    echo $post->getContent();
    echo $post->getDate();
    echo $post->getAuthor();
    
    $comments = new Comments($posts->getComments());
    foreach($comments as $comment)
    {
        echo $comment->getCommentAuthor();
        echo $comment->getCommentDate();
    }
}

?>