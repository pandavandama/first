<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  

<section class="ad">

</section>
<section class="ad_right">

</section>
<?php require "Blocks/Header.php" ?>
    
    <main>
    <div class="in_1">
    
    <form method="get">
    <input type="text" name="name" id="name_1">
    <input type="submit" value="Отправить">
    <input type="reset" value="Очистить">
    </div>
    </form>
    <?php echo htmlspecialchars($_GET['name'])?>
    </main>
    
    
<?php require "Blocks/footer.php" ?>


</body>
</html>