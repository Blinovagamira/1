<!Doctype html>
<?php

  $name='Ира';
  $age='28';
  $email='blinovagamira@gmail.com';
  $city='Санкт-Петербург';
  $about='Маркетолог'

?>

<html lang="ru">
 <head>
   <meta charset="UTF-8">
   <title>Обо мне</title>
 </head>
  <body>

    <h1> Страница пользователя <?=$name ?> </h1>

       <p> Имя:
           <br> <?=$name ?> </p>
       <p> Возраст:
           <br> <?=$age ?> </p>
       <p> Почта:
           <br>
              <a href=blinovagmira@gmail.com> <?=$email ?> </a> </p>
       <p> Город:
           <br> <?=$city ?> </p>
       <p> О себе:
           <br> <?=$about ?> </p>

 </body>
</html>
