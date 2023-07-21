<?php

/* https://api.telegram.org/bot6362640340:AAFos5SD0OwuH6j9ktUWmTz_LFE0a3tGCu0/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$comment = $_POST['user_text'];
$token = "6362640340:AAFos5SD0OwuH6j9ktUWmTz_LFE0a3tGCu0";
$chat_id = "-891831498";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Коментар: ' => $comment
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

  if ($sendToTelegram) {
    header('Location: thank-you.html');
  } else {
    echo "Error";
  }
?>