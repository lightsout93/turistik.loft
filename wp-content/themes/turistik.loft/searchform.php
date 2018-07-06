<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
 <label for="s"><?php echo "Поиск"; ?></label>
<input type="text" name="s" id="s" placeholder="<?php echo "Поиск"; ?>" />
<input type="submit" name="submit" id="searchsubmit" value="<?php echo "Поиск"; ?>" />
</form>