<?php

include_once "Bird.php";
include_once "CanSwim.php";

class Penguin extends Bird implements CanSwim {
    public function info()
    {
        echo "my name is pengiun<br>";
    }

    public function fly($name = null)
    {
        echo "Penguin No, i can't<br>";
    }

    public function swim($name = null)
    {
        echo "Penguin Yes, i can<br>";
    }

}