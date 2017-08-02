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
        $content = $this->parseBBCode($this->getContent());
        return $content;
    }
    
    private function parseEmoticon()
    {
        //code will be go heree..
    }
}


?>
