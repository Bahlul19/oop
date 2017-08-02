<?php

class Posts implements Iterator
{
    public $posts = array();
    
    public $var; 
    
    public function __construct()
    {
       if(is_array($posts))
       {
          $this->posts = $posts;
       }
    }
    
    public function rewind()
    {
        reset($this->posts);
    }
    
    public function current()
    {
        return $this->posts;
    }
    
    public function key()
    {
       return $this->var;
    }
    
    public function next()
    {
         return $this->var;
    }
    
    //in valid method check if the current() is true or false
    
    public function valid()
    {
       return($this->current() == !false);
    }
    
}


?>