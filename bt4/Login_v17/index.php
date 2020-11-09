<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V17</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<?php

include_once "function.php";
$mess = '';


if (!empty($_POST['username']) && !empty($_POST['password'])) {

    // print("<pre>" . print_r($_POST, true) . "</pre>");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loadJs = loadJson();
    $login = false;
    foreach ($loadJs as $value) {
        if ($username == $value[0] && $password == $value[1]) {
            $login = true;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            break;
        }
    }

    if ($login) {
        $mess = "Login successful.";
    } else {
        $mess = "Your password is incorrect.";
    }
}

?>


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                    <input id="first-name" class="input100" type="text" name="username" placeholder="User name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>

                <div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

                    <a href="#" class="txt2">
                        Username / password?
                    </a>
                </div>
                <div class="w-full text-center">
                    <a id="page-signup" href="#/signup.html" class="txt3">Sign Up</a>
                </div>
            </form>
            <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
        </div>
        <div class="w-full text-center" style="align-content: center">
            <?php
            if (!empty($mess) && $mess == 'Login successful.') {
                //header("refresh:1;url=" . str_replace("index.php", "", "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") . "showExe.php");
                include "showExe.php";
            } else {
                echo $mess;
            }
            ?>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
    if (document.URL.includes("index.php")) {
        document.getElementById('page-signup').href = document.URL.replace("index.php", "signup.php");
    } else {
        document.getElementById('page-signup').href = document.URL + "signup.php";
    }

    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>