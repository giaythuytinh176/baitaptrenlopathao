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


<?php
session_start();

echo '<div class="container">';
if (isset($_SESSION['username'])) {
    echo 'You are signed in. Welcome: <strong>' . $_SESSION['username'] . "</strong> &nbsp; <a href=\"logout.php\">Logout</a>";
    echo "</div>";
    ?>

    <table border="1px solid black" class="table table-dark">

        <tr>
            <th scope="col">STT</th>
            <th scope="col"> Mã học viên</th>
            <th scope="col"> Họ và tên</th>
            <th scope="col"> Buổi 1 - Tổng quan</th>
            <th scope="col">Buổi 2 - Mảng 1</th>
            <th scope="col"> Buổi 3 - Mảng 2</th>
            <th scope="col"> Review</th>
        </tr>
        <tr>
            <th>3</th>
            <th>CGMD001851</th>
            <th>Lê Đức Tâm</th>
            <th><a href="https://github.com/giaythuytinh176/baitaptrenlopathao">https://github.com/giaythuytinh176/baitaptrenlopathao</a>
            </th>
            <th><a href="https://github.com/giaythuytinh176/baitaptrenlopathao">https://github.com/giaythuytinh176/baitaptrenlopathao</a>
            </th>
            <th><a href="https://github.com/giaythuytinh176/baitaptrenlopathao">https://github.com/giaythuytinh176/baitaptrenlopathao</a>
            </th>
            <th>
                <select>
                    <option value=""></option>
                    <option value="Dat">Dat</option>
                    <option value="binh thuong">binh thuong</option>
                    <option value="ko Dat">ko Dat</option>
                </select>

            </th>
        </tr>


    </table>


    <?php
} else {
    echo 'You are not signed in. <a href="index.php">Login</a>';
}


?>
