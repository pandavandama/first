<?php
$inform = $_POST['del'];
$this_path = $_POST['path'];

require "configDB.php";


$query = $pdo->query("SELECT * FROM `name_list` WHERE id = '$inform'");
$row = $query ->fetch (PDO::FETCH_OBJ);
unlink($row->img_path);

$sql = "DELETE FROM `name_list` WHERE id = '$inform'";
$query = $pdo->prepare($sql);

$query->execute();


header('Location: '.$this_path.'');