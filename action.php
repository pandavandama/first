<?php
$images_path = "Images_users/";



//var_dump($_FILES);

$file_name = $_FILES['image']['name'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];

if($file_type == 'image/png')
$type_path = '.png';








$name = $_POST['name'];
$date = date('Y-m-d');

if($name == ''){
    echo 'Введите имя';
    exit();
}



$dsn = 'mysql:host=192.168.1.188:3306; dbname=name-list';
$pdo = new PDO($dsn, 'root');

$query = $pdo->query("SELECT * FROM `name_list` ORDER BY id DESC");
    $row = $query ->fetch (PDO::FETCH_OBJ);
    $last_id = $row->id + 1;
    

$file_new_name = $images_path.$name.'['.$last_id.']'.$type_path;
move_uploaded_file($file_tmp,$file_new_name);

$sql = "INSERT INTO `name_list`(name,date,img_path) VALUES('$name', '$date','$file_new_name')";
$query = $pdo->prepare($sql);
$query->execute();

header('Location: /');