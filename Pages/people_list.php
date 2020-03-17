<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    
    <?php
    $loc = "Pages/people_list.php";
    $delete_path = "../delete.php";



    require "../Blocks/Header.php"; 
    require "../configDB.php";

    $query = $pdo->query("SELECT * FROM `name_list` WHERE id > 99");
    while($row = $query ->fetch (PDO::FETCH_OBJ)){

        require "../Blocks/Block_info.php";
        
    }
    
    
    ?>
    
</body>
</html>
