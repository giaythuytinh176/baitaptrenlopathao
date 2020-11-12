<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
include_once "Database/Database.php";

function saveToJson($data)
{
    // print("<pre>" . print_r($data, true) . "</pre>");die();
    $filename = "data.json";
    $data_json = json_decode(file_get_contents($filename), true);
    if (empty($data_json)) $data_json = [];
    array_push($data_json, $data);
    file_put_contents($filename, json_encode($data_json));
}

function loadJson()
{
    $filename = "data.json";
    $data = json_decode(file_get_contents($filename), true);
    if (empty($data)) $data = [];
    return $data;
}

function updateLoginDatebyUserToDB($username)
{
    $pdo = Database::getConnect();

    $params = ["login_date" => date("H:i:s d-m-Y"), "username" => $username];
    $sql = "UPDATE Accounts SET login_date=:login_date WHERE username=:username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':login_date', $params['login_date']);
    $stmt->bindParam(':username', $params['username']);
    $stmt->execute($params);
}

function isLogin()
{
    if (!empty($_COOKIE['username']) && !empty($_COOKIE["password"])) {
        if (empty($_SESSION['username'])) {
            $checkExistUsername = loadDBbyUsername($_COOKIE['username']);
            if (!empty($checkExistUsername['username']) && $_COOKIE["password"] == md5($checkExistUsername['password'])) {
                $_SESSION['username'] = $checkExistUsername['username'];
                $_SESSION['password'] = $checkExistUsername['password'];
            }
        }
    }
}

function updateLogoutDatebyUserToDB($username)
{
    global $pdo;
    $params = ["logout_date" => date("H:i:s d-m-Y"), "username" => $username];
    $sql = "UPDATE Accounts SET logout_date=:logout_date WHERE username=:username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':logout_date', $params['logout_date']);
    $stmt->bindParam(':username', $params['username']);
    $stmt->execute($params);
}

function insertToDB($params)
{
    global $pdo;
    $params['time'] = date("H:i:s d-m-Y");
    $params['login_date'] = '';
    $params['logout_date'] = '';

    $sql = "INSERT INTO Accounts (username, password, time, login_date, logout_date) VALUES (:username,:password,:time,:login_date,:logout_date)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $params['username']);
    $stmt->bindParam(':password', $params['password']);
    $stmt->bindParam(':date', $params['time']);
    $stmt->bindParam(':login_date', $params['login_date']);
    $stmt->bindParam(':logout_date', $params['logout_date']);
    $stmt->execute($params);
}

function loadDB()
{
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM Accounts");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);//FETCH_ASSOC: to Array
    return $data;
}

function loadDBbyUsername($username)
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM Accounts WHERE username=:username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}