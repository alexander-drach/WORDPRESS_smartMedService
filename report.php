<?php
$name = $_POST['name'];
$phone = $_POST['tel'];

var_dump($_POST);



if ($_POST['check'] != 'nospam') exit('Spam detected');

if ($phone && $name) {
  $send_message = "
Имя: $name" . "\n" . 
"Телефон: $phone";

  mail('alexander-drach@mail.ru', 'С сайта СмартМедСервис', $send_message);
}