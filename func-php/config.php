<?php
$servername = "localhost"; // Адрес сервера базы данных, по умолчанию localhost
$username = "root"; // Имя пользователя базы данных, обычно root
$password = ""; // Пароль пользователя, либо root, либо пустое поле
$dbname = "metalprom"; // Имя вашей базы данных

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
} else {
  echo 'OK братка, поехали дальше!';
}
