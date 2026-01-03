<?php
header('Content-Type: application/json');

// Bật / tắt server tại đây
$server_on = true;

if ($server_on) {
    echo json_encode([
        "status" => "success",
        "message" => "Server is live"
    ]);
} else {
    echo json_encode([
        "status" => "offline",
        "message" => "Server is down"
    ]);
}
