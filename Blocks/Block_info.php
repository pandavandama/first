
<?php

echo '<form action="'.$delete_path.'" method="post" class="form_inf">
<img src="'.$help_path.$row->img_path.'" class="img_profile" id="img'.$row->id.'">
<input type="hidden" name="del"  value="'.$row->id.'"><input type="hidden" name="path" value="'.$this_path.'">
<div class="info_show"  id="inf'.$row->id.'">'. $row->name.'<br></div>
        <button name="delete" type="submit" class="btns">удалить</button>
        </form>';
?>