<?php
$servername = "185.114.247.170"; // Адрес сервера базы данных, по умолчанию localhost
$username = "cy41861"; // Имя пользователя базы данных, обычно root
$password = "PoP368kOV"; // Пароль пользователя, либо root, либо пустое поле
$dbname = "cy41861_mybd"; // Имя вашей базы данных

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
} else {
  echo 'OK братка, поехали дальше!';
}
