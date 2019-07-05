<?php
//Вносим данные в БД
require_once 'connection.php'; // подключаем скрипт
 
if(isset($_POST['telephone']) && isset($_POST['name'])&& isset($_POST['message'])&& isset($_POST['master'])
&& isset($_POST['work'])&& isset($_POST['date'])&& isset($_POST['time'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Error " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $telephone = htmlentities(mysqli_real_escape_string($link, $_POST['telephone']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $message = htmlentities(mysqli_real_escape_string($link, $_POST['message']));
    $master = htmlentities(mysqli_real_escape_string($link, $_POST['master']));
    $work = htmlentities(mysqli_real_escape_string($link, $_POST['work']));
    $date = htmlentities(mysqli_real_escape_string($link, $_POST['date']));
    $time = htmlentities(mysqli_real_escape_string($link, $_POST['time']));

     // создание строки запроса
     $query ="INSERT INTO orders(Telephone, Name, Message, Work, Master, Date, Time)
      VALUES('$telephone', '$name','$message','$master','$work','$date','$time')";
     
     // выполняем запрос
     $result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)); 
     if($result)
     {
         echo "Спасибо, менеджер с вами свяжется";
     }
     // закрываем подключение
     mysqli_close($link);
 }

    ?>