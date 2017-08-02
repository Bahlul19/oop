<?php

spl_autoload_register(function($class_name){
    include("classes/".$class_name.".php");
});

$post = new Post();
$comment = new Comment();

$post->filter();
$comment->filter();

if($BBCodeEnabled == false && $EmoticonEnabled == false)
{
    $postContent = $post->getContent();
    $commentContent = $comment->getContent();
}

else if($BBCodeEnabled == true && $EmoticonEnabled == false)    
{
    $bbcode = new BBCodeParser($post);
    $postContent = $bbcode->getContent();
    
    $bbcode = new BBCodeParser($comment);
    $commentContent = $bbcode->getContent();
    
}

else if($EmoticonEnabled == true && $BBCodeEnabled == false)    
{
    $emoticon = new Emoticon($post);
    $postContent = $emoticon->getContent();
    
    $emoticon = new Emoticon($comment);
    $commentContent = $emoticon->getContent();
    
}




?>