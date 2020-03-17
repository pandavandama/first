<?php
$inform = $_POST['del'];


require "configDB.php";


$query = $pdo->query("SELECT * FROM `name_list`");
$row = $query ->fetch (PDO::FETCH_OBJ);
unlink($row->img_path);

$sql = "DELETE FROM `name_list` WHERE id = '$inform'";
$query = $pdo->prepare($sql);

$query->execute();

header('Location: /');