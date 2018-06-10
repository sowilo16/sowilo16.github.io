<?php

if ($_POST['c3po'] != 28283) { echo 'Не проидена проверка для защиты от ботов. Включите JavaScript!'; exit; }

$field_name = $_POST['df-name'];
$field_email = $_POST['df-email'];
$field_telephone = $_POST['df-telephone'];
$field_organization = $_POST['df-organization'];
$field_comment = $_POST['df-comment'];

$mail_to = 'dimon-kreker@yandex.ru';
$subject = "Заявка ДЕМО ЗУМ от \"$field_name\"";

$body_message = "Контактное лицо: $field_name\r\n";
$body_message .= "E-mail: $field_email\r\n";
$body_message .= "Организация: $field_organization\r\n";
$body_message .= "Телефон: $field_telephone\r\n";
$body_message .= "Комментарий: $field_comment";

$headers .= 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";
$mail_status = mail($mail_to, $subject, $body_message, $headers);

if($mail_status) { echo 'OK'; }
else { echo "Не удалось отправить сообщение.\r\nMailer Error: $mail->ErrorInfo"; }

?>