<?php

require __DIR__ . '/number.php';

$result = ['value' => Number::encryption(@$_GET['v'])];
header("Content-Type: application/json; charset=utf-8");
header("HTTP/1.1 200 OK");
echo json_encode($result);

