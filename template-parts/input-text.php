<?php 

if(empty($args)) return;
$slug = $args['unique'];
$placeholder = $args['placeholder'];

?>
<input type="text" name="<?= $slug; ?>" id="<?= $slug; ?>" placeholder="<?= $placeholder; ?>" class="input-text">