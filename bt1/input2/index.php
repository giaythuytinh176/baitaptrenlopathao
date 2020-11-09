<html>

<header>

    <title>bai 2</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</header>

<body>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
        echo "ban vua dang nhap dung tai khoan roi.";
    } else {
        echo "ban  nhap sai roi.";
    }

}


?>


<br>
<br>
<br>

<!--<input type="text" name="user" placeholder="Nhap username">-->
<!--<br>-->
<!--<input type="password" name="pass" placeholder="Nhap password">-->

<form method="POST">
    <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Enter username">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>

</html>
