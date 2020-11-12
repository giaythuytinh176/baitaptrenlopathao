<?php

include_once "function.php";

session_start();
session_destroy();
unset($_COOKIE['username']);
setcookie("username", "", time() - 3600);
unset($_COOKIE['password']);
setcookie("password", "", time() - 3600);

echo "log out";


if (isset($_SESSION['username'])) {
    updateLogoutDatebyUserToDB($_SESSION['username']);
}
header("refresh:1;url=index.php");
