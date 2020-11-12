<?php

include_once "Bird.php";
include_once "CanFly.php";

class Dove extends Bird implements CanFly
{
    public function swim($name = null)
    {
        echo "Dove No, i can't<br>";
    }

    public function fly($name = null)
    {
        echo "Dove Yes, i can<br>";
    }

    public function info()
    {

    }

}