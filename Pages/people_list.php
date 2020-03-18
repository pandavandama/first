<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<?php require "../Blocks/Header.php"; ?>

<main>
<div class="list">
    <?php
    
    $delete_path = "../delete.php";
    $help_path = "/";
    

    
    require "../configDB.php";
    $this_path = "Pages/people_list.php";
    $query = $pdo->query("SELECT * FROM `name_list` WHERE id > 99");
    while($row = $query ->fetch (PDO::FETCH_OBJ)){

        require "../Blocks/Block_info.php";
        
    }

    

    
    
    ?>
    
    
    </div>
    </main>


    <?php require "../Blocks/footer.php"; ?>
    
</body>
</html>
