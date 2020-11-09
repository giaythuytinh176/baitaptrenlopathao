<html>

<header>

    <title>bai 1</title>

</header>

<body>

<?php

function findTotal($num)
{
    $sum = 0;
    for ($i = 0; $i < $num; $i++) {
        if ($sum + $i > $num) {
            break;
        } else $sum += $i;
    }
    return $sum;
}


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['btn']) && isset($_GET['num'])) {
        echo "Tong cua cac so co tong nho hon " . $_GET['num'] . " la: " . findTotal((float)$_GET['num']);
    }
}




?>

<form method="get">
    <input type="number" name="num" placeholder="Nhap so">
    <input type="submit" name="btn" value="Submit">
</form>



</body>

</html>
