<?php
  $name='Ира';
  $age='28';
  $email='blinovagamira@gmail.com';
  $city='Санкт-Петербург';
  $about='Маркетолог'
?>

<!Doctype html>
<html lang="ru">
 <head>
   <meta charset="UTF-8">
   <title>Обо мне</title>
 </head>
  <body>
    <h1> Страница пользователя <?=$name ?> </h1>
       <p style="margin-bottom: -10px"> Имя: <?= $name ?> </p>
       <p style="margin-bottom: -10px"> Возраст: <?= $age ?> </p>
       <p style="margin-bottom: -10px"> Почта: <a href="mailto:blinovagmira@gmail.com"> <?= $email ?> </a> </p>
       <p style="margin-bottom: -10px"> Город: <?= $city ?> </p>
       <p> О себе: <?= $about ?> </p>
  </body>
</html>
