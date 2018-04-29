<!DOCTYPE>
<html lang="ru">

<head>
  <title>Вэб разработчик</title>
  <meta charset="utf-8">
  <style>
    body {
      font-family: sans-serif;
    }

    dl {
      display: table-row;
    }

    dt, dd {
      display: table-cell;
      padding: 5px 10px;
    }
  </style>
</head>
<body>
<?php
    $name = 'Константин';
    $age = 46;
    $email = 'itandem@yandex.ru';
    $city = 'Самара';
    $job = 'Вэб-разработчик';
    if ($name) {
        ?>
      <div>
        <h1>Страница пользователя <?= $name ?></h1>
        <dl>
          <dt>Имя</dt>
          <dd><?= $name ?></dd>
        </dl>
        <dl>
          <dt>Возраст</dt>
          <dd><?= $age ?></dd>
        </dl>
        <dl>
          <dt>Адрес электронной почты</dt>
          <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
        </dl>
        <dl>
          <dt>Город</dt>
          <dd><?= $city ?></dd>
        </dl>
        <dl>
          <dt>О себе</dt>
          <dd><?= $job ?></dd>
        </dl>
      </div>
    <?php } else { ?>
      <div>
        <h2>Пользователь не найден</h2>
      </div>
    <?php } ?>
</body>
</html>
