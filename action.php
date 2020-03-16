<?php





$name = $_POST['name'];
$date = date('Y-m-d');
if($name == ''){
    echo 'Введите имя';
    exit();
}
$dsn = 'mysql:host=192.168.1.188:3306; dbname=name-list';
$pdo = new PDO($dsn, 'root');

$sql = "INSERT INTO `name_list`(name,date) VALUES('$name', '$date')";
$query = $pdo->prepare($sql);
$query->execute();

header('Location: /');