<h1>Đây là danh sách các sản phẩm</h1>


<?php


$arr = array("Điện thoại" => array("Iphone", "Samsung", "Nokia", "Blackberry"),
    "Giày" => array("Adidas", "Nike",),
    "Máy tính" => array("MSI", "Macbook", "iMac", "Asus"),
);

echo '<table border="1px solid black" cellpadding="15spx">';


foreach ($arr as $key => $value) {
    echo "<tr>";
    echo "<th>$key</th>";
    foreach ($value as $v1) {
        echo "<th>$v1</th>";
    }
    echo "</tr>";
}

echo '</table>';

