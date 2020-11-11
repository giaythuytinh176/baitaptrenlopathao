<?php

include_once "Father.php";

class Child extends Father
{
public function __construct($age)
{
    parent::__construct($age);
}


}