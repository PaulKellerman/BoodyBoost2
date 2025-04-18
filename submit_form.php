<?php

require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $name = $_POST["name"];


    $pr = $conn->prepare("INSERT INTO news (email, number, name) VALUES (?, ?, ?)");
    $pr->bind_param("sis", $email, $tel, $name);

    if ($pr->execute()) {
        echo "Успешно"; 
    } else {
        echo "Ошибка: " . $pr->error; 
    }

    $pr->close();
}

$conn->close();
?>