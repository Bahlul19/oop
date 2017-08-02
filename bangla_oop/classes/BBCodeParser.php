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
    
    private function parseBBCode()
    {
        //code will be go heree..
    }
}


?>
