<?php

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
