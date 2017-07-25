<?php

function hello($data)
{
    echo "<pre>";
    
    var_dump($data);
    
    
    echo "</pre>";
}

$hello = [
    'name' => 'Tausif',
    'age'  => 20,
    
  ];

hello($hello);

?>
