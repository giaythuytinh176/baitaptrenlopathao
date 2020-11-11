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

function updateLogoutDatebyUserToDB($username)
{
    $pdo = Database::getConnect();

    $params = ["logout_date" => date("H:i:s d-m-Y"), "username" => $username];
    $sql = "UPDATE Accounts SET logout_date=:logout_date WHERE username=:username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':logout_date', $params['logout_date']);
    $stmt->bindParam(':username', $params['username']);
    $stmt->execute($params);
}

function insertToDB($params)
{
    $pdo = Database::getConnect();
    $params['time'] = date("H:i:s d-m-Y");

    $sql = "INSERT INTO Accounts (username, password, time) VALUES (:username,:password,:time)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $params['username']);
    $stmt->bindParam(':password', $params['password']);
    $stmt->bindParam(':date', $params['time']);
    $stmt->execute($params);
}

function loadDB()
{
    $pdo = Database::getConnect();
    $stmt = $pdo->query("SELECT * FROM Accounts");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);//FETCH_ASSOC: to Array
    return $data;
}