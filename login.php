<?php
// Dummy credentials for example
$valid_username = "admin";
$valid_password = "1234";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $valid_username && $password === $valid_password) {
        $out = [
            "response" => "ok"
        ];
    } else {
        $out = [
            "response" => "error"
        ];
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($out);
} else {
    http_response_code(400);
    header("Content-Type:text/plain");
    echo "400 - Bad Request";
}
?>