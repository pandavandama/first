<?php
echo '
<section class="form_add">
    <div class="form_add_wrapper">
    <form action="action.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="path" id="path" value="'.$this_path.'">
    <div id="hide_form_add" onclick="show_form_add(false)">X</div>
    <input type="text" name="name" class="input_form_add" id="name_1" placeholder="Имя">
    <div class="btns_form1">
    <input type="file" title="" class="form_btns" name="image" id="img_load">
    <button type="submit" class="form_btns" value="Отправить" name="sendName" >Отправить</button>
    <button type="reset" class="form_btns">Стереть</button>
    </div>
    </form>
    </div>
</section>';
?>