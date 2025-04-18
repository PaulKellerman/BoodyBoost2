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

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"]; // Не экранируем перед запросом
    $password = $_POST["password"];

    // Валидация (можно добавить больше проверок)
    if (empty($email) || empty($password)) {
        $error_message = "Заполните все поля.";
    } else {
        $stmt = $conn->prepare("SELECT id, password FROM user_reg WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $user_id;
                header("Location: index-reg.php");
                exit();
            } else {
                $error_message = "Неверный пароль.";
            }
        } else {
            $error_message = "Пользователь с таким email не найден.";
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Авторизация</title>
    <script>
        <?php if (!empty($error_message)): ?>
            alert("<?php echo $error_message; ?>");
        <?php endif; ?>
    </script>
</head>
<body>

    <form action="autoveref.php" method="post"> <!-- Убедитесь, что action указывает на этот файл -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Войти</button>
    </form>

</body>
</html>
