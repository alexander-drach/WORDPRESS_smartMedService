<?php
$name = $_POST['name'];
$phone = $_POST['tel'];
$message = $_POST['message'];

$email = "smartmedservice@mail.ru ";

if ($_POST['check'] != 'nospam') exit('Spam detected');

if ($phone && $name) {
  $send_message = "
Имя: $name" . "\n" . 
"Телефон: $phone" . "\n" .
"Собщение: $message";

  mail($email, 'С сайта СмартМедСервис', $send_message);
}

$url = 'http://smartmedservice/wp-content/themes/smartMedServise-theme';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ваше сообщение отправлено!</title>
  <link rel='stylesheet' href='<?php echo $url ?>/assets-gulp/build/css/style.min.css' type='text/css' media='all' />
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
          <div class="header_inner">
              <a class="logo" href="/">
                  <svg width="398" height="45">
                      <use xlink:href="<?php echo $url ?>/assets-gulp/build/img/sprite.svg#logo"></use>
                  </svg>
              </a>
              <nav class="nav">
                <a href="/">На главную</a>
              </nav>
          </div>
        </div>
    </header>
    <main>
      <div class="container">
        <div class="page-content">
          <h1>Ваше сообщение отправлено!</h1>
          <p>Имя: <?php echo $name?></p>
          <p>Телефон: <?php echo $phone?></p>
          <p>Сообщение: <?php echo $message?></p>
          <a href="/">Вернуться на главную</a>
        </div>
      </div>      
    </main>    
    <footer class="footer">
      <div class="container">
          <div class="footer__inner">
              <div class="copyright">
                  <span>СмартМедСервис.</span>
                  <span>Все права защищены, <?php echo date('Y') ?>г.</span>
                  <span>Лицензия ЛО-55 №002478 от 18 января 2019 г.</span>
              </div>
              <div class="footer__contact">
                  <a class="link-data" href="#">Политика обработки персональных данных.</a>
              </div>
          </div>
      </div>
    </footer>
  </div>
</body>

</html>