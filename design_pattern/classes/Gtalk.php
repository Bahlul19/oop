<?php

class Gtalk implements Observer
{
    public function message()
    {
        echo "Message from gtalk<br/>";
    }
}

?>