<?php 

require "configDB.php";

$query = $pdo->query("SELECT * FROM `users` ORDER BY id");
while($row = $query ->fetch (PDO::FETCH_OBJ)){

    if($row->date != date('Y-m-d H:i:s')){
        echo "blin";
    }
   

}