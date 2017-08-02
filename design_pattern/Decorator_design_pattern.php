 <?php 
 
 
 spl_autoload_register(function($class_name){
     include("classes/".$class_name.".php");
 });
 
 $post    = new Post();
 
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
     $bbcode = new BBCodeParser($post);//pass post object in bbcode
     $postContent = $bbcode->getContent();
     
     $bbcode = new BBCodeParser($comment);//pass post object in bbcode
     $commentContent = $bbcode->getContent();
     
 }
 
 else if($BBCodeEnabled == false && $EmoticonEnabled == true)
 {
     $emoticon = new Emoticon($post);//pass post object in bbcode
     $postContent = $emoticon->getContent();
     
     $emoticon = new Emoticon($comment);//pass post object in bbcode
     $commentContent = $emoticon->getContent();
     
 }
 
 
 
?>