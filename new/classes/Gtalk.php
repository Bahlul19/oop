<?php

class Gtalk implements Observer
{
    public function notification()
    {
        echo "Message from Gtalk<br/>";
    }
}

?>