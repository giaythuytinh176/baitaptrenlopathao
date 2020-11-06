<style>

    .inline {
        display: inline-block;
        margin: 3em;
    }

</style>


<fieldset class="inline">
    <legend>
        <h1>Tính chiết khấu: </h1>

    </legend>
    <form method="POST">
        Nhập số tiền:
        <input type="number" name="num">
        <input type="submit" value="Submit">
    </form>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST['num'];
    $money = 0;
    if ($number >= 100000 && $number < 500000) {
        $money = $number * 0.99;
    } elseif ($number >= 500000 && $number < 3000000) {
        $money = $number * 0.98;
    } elseif ($number >= 3000000) {
        $money = $number * 0.95;
    } else {
        $money = $number;
    }
    echo "<legend>Số tiền " . $number . " sau chiết khấu là: " . $money . "</legend>";
}

?>

</fieldset>

