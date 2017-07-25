<?php

//require 'ep12_function.php';



class Task
{
    public $description;
    
    public $completed = false;


    public function __construct($description) 
    {
        $this->description = $description;
    }
    
    public function complete()
    {
         $this->completed = true;
    }
    
    public function isComplete()
    {
     return $this->completed;
    }  
    
}

//$task = new Task('Hello World');

//dd($task);

//$task->complete();
//
//var_dump($task->isComplete());

//Take a task variable as an ARRAY

$task = [
    new Task('Go to the store'),
    new Task('Finish the screencast'),
    new Task('Clean my room')
];

//dd($task);

$task[0] -> complete();

require 'ep12_view.php';
     


?>