<?php
session_start(); // Начинаем сессию

require_once "./config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['user-email']) && isset($_POST['user-password'])) {
    $email = $_POST['user-email'];
    $password = $_POST['user-password'];

    $sql = "SELECT * FROM users_id WHERE user_email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
      $stmt->bind_param('s', $email);
      $stmt->execute();

      $result = $stmt->get_result();
      $user = $result->fetch_assoc();

      if ($user && password_verify($password, $user['user_password'])) {
        $_SESSION['auth'] = true;
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['user_email'] = $user['user_email'];
        // Перенаправляем пользователя на главную страницу
        header("Location: ../index.php");
        exit();
      } else {
        echo "Авторизация не удалась <br> <a href='../index.php'>Вернуться на начало</a> <br>";
      }
    } else {
      echo "Ошибка подготовки запроса: " . $conn->error;
    }
  } else {
    echo "Пожалуйста, заполните все поля.";
  }
} else {
  echo "Неверный метод запроса.";
}
