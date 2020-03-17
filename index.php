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
<?php require "Blocks/Header.php";  ?>
    
    <main>
    <div class="in_1">
    <div class="form_add_show_btn" id="btn_form1" onclick="show_form_add(true)">+</div>
    <section class="form_add">
    <div class="form_add_wrapper">
    <form action="action.php" method="post" enctype="multipart/form-data">
    <div id="hide_form_add" onclick="show_form_add(false)">X</div>
    <input type="text" name="name" class="input_form_add" id="name_1" placeholder="Имя">
    <div class="btns_form1">
    <input type="file" name="image" id="img_load">
    <button type="submit" class="form_btns" value="Отправить" name="sendName" >Отправить</button>
    <button type="reset" class="form_btns">Стереть</button>
    </div>
    </form>
    </div>
    </section>
    </div>
    
    <section name="info" class="info">
    <?php
    require 'configDB.php';

    echo '<div class="info_cont">';
    $query = $pdo->query("SELECT * FROM `name_list`");
    while($row = $query ->fetch (PDO::FETCH_OBJ)){

        require "Blocks/Block_info.php";
        
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