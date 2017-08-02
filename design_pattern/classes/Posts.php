<?php

class Posts implements Iterator
{
    
    private $posts = array();
    //value/post gula array hisabe niya hobe
    
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
        //cheking true or false
        
        return ($this->current() == !false);
        
        //specially it return boolean value
    }

    

}


?>

