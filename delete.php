<?php
$inform = $_POST['del'];


require "configDB.php";

$sql = "DELETE FROM `name_list` WHERE id = '$inform'";
$query = $pdo->prepare($sql);
$query->execute();

header('Location: /');