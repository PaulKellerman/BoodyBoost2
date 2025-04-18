<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boodyboost";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email-reg"]);
    $name = htmlspecialchars($_POST["name-reg"]);
    $password = $_POST["password-reg"]; // Не экранируем пароль перед хешированием

    // Валидация данных (пример)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Неверный формат email.");
    }
    if (strlen($password) < 6) {
        die("Пароль должен быть не менее 6 символов.");
    }


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO user_reg (email, name, password) VALUES (?, ?, ?)");

    if (!$stmt) {
        die("Ошибка подготовки запроса: " . $conn->error);
    }

    $stmt->bind_param("sss", $email, $name, $hashed_password);

    if ($stmt->execute()) {
        $user_id = $conn->insert_id;
        $_SESSION['user_id'] = $user_id;
        
        header("Location: index-reg.php"); // Перенаправляем на защищенную страницу
        exit();
    } else {
        die("Ошибка регистрации: " . $stmt->error); // Более информативное сообщение об ошибке
    }

    $stmt->close();
}

$conn->close();
?>