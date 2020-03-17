
<?php
echo '<form action="'.$delete_path.'" method="post" class="form_inf">
<img src="'.$row->img_path.'" class="img_profile" id="img'.$row->id.'">
<input type="hidden" name="del" id="del_in" value="'.$row->id.'">
<div class="info_show"  id="inf'.$row->id.'">'. $row->name.'<br></div>
        <button name="delete" type="submit" class="btns" id="btn'.$id.'">удалить</button>
        </form>';
?>