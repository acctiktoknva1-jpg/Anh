<?php
header('Content-Type: application/json');

/*
  true  = SERVER LIVE  (tool chạy)
  false = SERVER OFFLINE (tool dừng)
*/
$server_on = true;

if ($server_on) {
    echo json_encode([
        "status" => "success"
    ]);
} else {
    echo json_encode([
        "status" => "offline"
    ]);
}
