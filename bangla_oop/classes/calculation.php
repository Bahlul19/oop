<?php

//class Calculation
//{
//    public $a =0;
//    public $b = 0;
//    public $result;
//    
//    function getValue($x,$y)
//    {
//        $this->a = $x;
//        $this->b = $y;
//        return $this;
//    }
//    function getResult()
//    {
////        $this->result = $this->a * $this->b;
////        
////        return $this->result;
//        $this->result = $this->a * $this->b;
//        return $this->result;
//        
//    }
//}
//Method chaining er khetre object instance ta ke return korte hobe 

class Calculation
{
    public $a = 0;
    public $b = 0;
    public $result;
    
    
    function getValue($x,$y)
    {
        $this->a = $x;
        $this->b = $y;
        return $this;
    }
    
    function getResult()
    {
        $this->result = $this->a * $this->b;
        return $this->result;
    }
}






























?>