<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  

<section class="ad">

</section>
<section class="ad_right">

</section>
<?php require "Blocks/Header.php" ?>
    
    <main>
    <div class="in_1">
    
    <form action="action.php" method="post">
    <input type="text" name="name" id="name_1" placeholder="Имя">
    <button type="submit" value="Отправить" name="sendName" >Отправить</button>
    <button type="reset" >Стереть</button>
        
    </div>
    </form>
    <section name="info">
    <?php
    require 'configDB.php';

    echo '<div class="info_cont">';
    $query = $pdo->query("SELECT * FROM `name_list`");
    while($row = $query ->fetch (PDO::FETCH_OBJ)){

        echo '<form action="delete.php" method="post" class="form_inf"><input type="hidden" name="del" id="del_in" value="'.$row->id.'"><div class="info_show"  id="inf'.$row->id.'">'. $row->name.'<br> '.$row->date.'</div>
        <button name="delete" type="submit" class="btns" id="btn'.$id.'">del</button>
        </form>';
        echo $inform;
    }
    echo '</div>';
    //$query = $pdo->query("DELETE FROM `name_list` WHERE id='' ");
    ?>
    
    </section>
    </main>
    
    
<?php require "Blocks/footer.php" ?>


<script src="js/javascript.js"></script>
</body>
</html>