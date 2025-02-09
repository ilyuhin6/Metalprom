<?php
$user_name = htmlspecialchars($_POST['username']);
$user_phone = htmlspecialchars($_POST['userphone']);

$token = '7925418811:AAHp04YDPKID5hEWvE8uUD866VIMbZq6A6Y';
$chat_id = '-4730914854';;


$formData = array(
  "Клиент " => $user_name,
  "Телефон " => $user_phone
);

foreach ($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
};

$sendTelegram =  fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendTelegram === FALSE) {
  // Обработка ошибки
  echo "Произошла ошибка при отправке сообщения";
} else {
  echo "Сообщение успешно отправлено!";
}
