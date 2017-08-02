<?php

spl_autoload_register(function($class_name){
   include("classes/".$class_name.".php"); 
});

//pull up the values from the posts class and call there

$blogPosts = getAllPosts();

$posts = new Posts();//make a posts object

foreach($posts as $post)
{
   echo $post->getTitle();
   echo $post->getContent();
   echo $post->getAuthor();
   
  $comments = new Comments($post->getComment());//inside foreach loop asign comment object
  //foreach loop for comments
  foreach($comments as $comment)
  {
      echo $comment->getTitle();
      echo $comment->getContent();
  }
  
}



?>