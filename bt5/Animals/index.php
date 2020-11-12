<?php

include_once "Penguin.php";
include_once "Dove.php";
include_once "Duck.php";
include_once "CanSwim.php";

//print("<pre>" . print_r($animals, true) . "</pre>");

function describe($bird) {
    if ($bird instanceof Bird) {
        $bird->info();
        if ($bird instanceof CanFly) {
            $bird->fly();
        }
        if ($bird instanceof CanSwim) {
            $bird->swim();
        }
    } else {
        die("This is not a bird. I cannot describe it.");
    }
}
// describe these birds please
describe(new Penguin);
echo "---<br>";
describe(new Dove);
echo "---<br>";
//describe(new Duck);  // Cannot instantiate interface 'Duck'