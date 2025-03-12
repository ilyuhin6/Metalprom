<?php
require_once "./config.php";
// Собираем данные с формы и сохраняем их в переменные
$user_name = mb_convert_case($_POST['user-name'], MB_CASE_TITLE);  // Переводим в верхний регистр имяя
$user_email = $_POST['user-email'];
$user_password = $_POST['user-password'];
// хешурием пароль
$cripto_passw = password_hash($user_password, PASSWORD_DEFAULT);
$msg = 'Регистрация цспешна';
// ---------------------------------------------


// Готовим sql запрос
$sql = "INSERT INTO users_id (user_name,  user_email, user_password) 
                VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $user_name,  $user_email, $cripto_passw);
// проверка прошел ли запрос
if ($stmt->execute()) {
  echo  $msg;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close(); // Закрываем подготовленный запрос
$conn->close(); // Закрываем подключение к базе данных
