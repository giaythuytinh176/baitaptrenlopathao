<?php

include "Father.php";
include "Child.php";

$child = new Child(15, "Hello");

echo $child->run();
var_dump($child);