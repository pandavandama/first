<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/auth_form.css">
</head>
<body>
  

<section class="ad">

</section>
<section class="ad_right">

</section>
<?php
require "timer.php";
require "Blocks/Header.php";
$delete_path = "delete.php";
$loc = "";
$help_path = "";
$this_path = "/";



?>
    
    <main>
    <div class="in_1">
    <div class="form_add_show_btn" id="btn_form1" onclick="show_form_add(true)">+</div>
    <?php require "Blocks/form_add.php";  ?>
    </div>
    
    <section name="info" class="info">
    <?php
    require 'configDB.php';
    
    echo '<div class="info_cont">';
    $query = $pdo->query("SELECT * FROM `name_list` WHERE id > 99");
    while($row = $query ->fetch (PDO::FETCH_OBJ)){

        require "Blocks/Block_info.php";
        
    }
    echo '</div>';
    //$query = $pdo->query("DELETE FROM `name_list` WHERE id='' ");
    ?>
    
    </section>
    </main>
    
    <section class="block_auth">
    
    <form action="login.php" method="get">
    <input type="login" name="login" class="auth_input" id="log_in_">
    <input type="password" name="password" class="auth_input" id="pass_in">
    <button type="submit" id="log_in_btn">Войти</button>
    </form>
    
    </section>

    
<?php require "Blocks/footer.php" ?>

<script src="js/account.js"></script>
<script src="js/javascript.js"></script>
</body>
</html>