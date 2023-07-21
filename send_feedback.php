<?php
$botToken = '6362640340:AAFos5SD0OwuH6j9ktUWmTz_LFE0a3tGCu0';
$chatId = '6233207868';
$message = 'Новое сообщение из формы обратной связи: ' . $_POST['message'];

$telegramApiUrl = 'https://api.telegram.org/bot' . $botToken . '/sendMessage';

$ch = curl_init($telegramApiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'chat_id' => $chatId,
    'text' => $message,
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

if ($response) {
    echo 'Сообщение успешно отправлено в Telegram!';
} else {
    echo 'Ошибка при отправке сообщения в Telegram.';
}
?>
