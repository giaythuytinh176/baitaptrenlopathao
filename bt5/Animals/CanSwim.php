<?php

include_once "Duck.php";

interface CanSwim extends Duck
{
    public function swim($name);
}