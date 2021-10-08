<?
die();
if (mail("alexxx.abc@yandex.ru", "заголовок", "текст")) {
    echo 'Отправлено';
}
else {
    echo 'Не отправлено';
}