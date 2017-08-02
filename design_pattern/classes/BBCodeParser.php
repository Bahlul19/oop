<?php

class BBCodeParser
{
    private $post;
    
    public function __construct($object)
    {
        $this->post = $object;
    }
    
    public function getContent()
    {
       $post->filter();
       
       $content = $this->parseBBCode($this->getContent());
       
       return $content;
    }
    
    
    public function parserBBCode($content)
    {
        //your coding process will be go here....
    }
}
?>