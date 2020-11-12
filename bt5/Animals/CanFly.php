<?php

include_once "Duck.php";

interface CanFly extends Duck
{
    public function fly($name);
}