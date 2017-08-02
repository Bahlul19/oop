<?php


class Comments implements Iterator
{
    private $comments = array();
    //value gula array hisabe niya hobe
    
    function __construct($posts)
    {
        if(is_array($posts))
        {
            $this->posts = $posts;
        }
    }
    
    public function rewind()
    {
        //set or reset post-- means post gulo initialize korbe 
        reset($this->posts);
    }
    
    public function current()
    {
        //return current post
        return current($this->posts);
    }
    public function key()
    {
        //variable return korbe
        return key($this->var);
    }
    
    public function next()
    {
        //return next value of the posts
        return next($this->var);
    }
    
    public function valid()
    {
        //return current object
        
        return ($this->current() == !false);
        //specially it return boolean value
    }

    

}


?>