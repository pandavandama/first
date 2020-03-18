<?php

$login = $_GET['login'];
$password = $_GET['password'];

//var_dump($_GET);
$dsn = 'mysql:host=192.168.1.188:3306; dbname=name-list';
$pdo = new PDO($dsn, 'root');

$query = $pdo->query("SELECT * FROM `users` ORDER BY id");
while($row = $query ->fetch (PDO::FETCH_OBJ)){

    if($row->password == $password){
        $date = date('Y-m-d H:i:s');      
        
        $sql = "UPDATE `users` SET `date` = '$date',`auth_bool` = 1 WHERE `login`= '$login' ";
        $query = $pdo->prepare($sql);
        $query->execute();
        

        
    }
    
}

header('Location: /');
echo "aaa";
