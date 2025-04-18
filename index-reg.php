<?php
session_start();

if (isset($_SESSION['user_id'])) {
    echo '<a class ="btn-ex" href="logout.php">Выйти</a>'; 
}


if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); 
}


echo "Привет, пользователь!";

?>