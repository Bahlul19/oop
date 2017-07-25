<?php

function dd($data) //if we use same $animal or $data output will be same
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

?>