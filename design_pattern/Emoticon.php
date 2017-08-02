<?php

class Emoticon
{
    private $post;
    
    public function __construct($object)
    {
        $this->post = $object;
    }
    
    public function getContent()
    {
       $post->filter();
       
       $content = $this->parseEmoticon($this->getContent());
       
       return $content;
    }
    
    
    public function parseEmoticon($content)
    {
        //your coding process will be go here....
    }
}
?>
