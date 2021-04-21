<?php
//Данные для подключения к серверу MySQL
$servername = "localhost";
$database = "catstyle";
$username = "root";
$password = "Liza335633";

$conn = mysqli_connect($servername, $username, $password, $database);


//Проверка соединения с БД
if (!$conn) {
 die("Подключение не выполнено: " . mysqli_connect_error());
}




$sql = "INSERT INTO registerdata (fio,cname,breed,length,data,datac,girth,choice) VALUES (
'{$_POST['fio']}','".$_POST['cname']."',
'".$_POST['breed']."','".$_POST['length']."',
'".$_POST['data']."','".$_POST['datac']."',
'".$_POST['girth']."','".$_POST['choice']."')" ;

//Проверка статуса выполнения sql запроса 

if (mysqli_query($conn, $sql)) {
 echo "Запись успешно добавлена</br>";
echo "<a href='index.html'>На главную</a>";
} else {
 echo "Ошибка добавления записи: " . $sql . "<br>" . 
mysqli_error($conn);
}

//Строка с текстом sql запроса для таблицы 
//Закрытие соединения
mysqli_close($conn);
?>