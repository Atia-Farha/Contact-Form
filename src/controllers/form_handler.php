<?php

require_once __DIR__ . "/../includes/db.php";
require_once __DIR__ . "/../includes/functions.php";

$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? clean_input($_POST["name"]) : "";
    $email = isset($_POST["email"]) ? clean_input($_POST["email"]) : "";
    $message = isset($_POST["message"]) ? clean_input($_POST["message"]) : "";

    if (!empty($name) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            $success_message = "Message sent successfully!";
        } else {
            $error_message = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $error_message = "Name and Message are required!";
    }
}

$conn->close();

?>