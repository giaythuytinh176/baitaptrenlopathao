<?php

include_once "Database.php";

$stmt = $pdo->prepare("SELECT * FROM Accounts JOIN Money as M on Accounts.ID = M.ID");
$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);//FETCH_ASSOC: to Array


print("<pre>" . print_r($data, true) . "</pre>");