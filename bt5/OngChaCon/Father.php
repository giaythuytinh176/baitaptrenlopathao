<?php

include_once "GrandFather.php";

class Father extends GrandFather
{
    public function __construct($age)
    {
        parent::__construct($age);
    }

    public function Run()
    {
        return "Toc do 20km/h";
    }

    public function Sing(){
        return "Dang hat";
    }
}