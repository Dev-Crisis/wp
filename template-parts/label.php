<?php 
if(empty($args)) return;

$text = $args['text'];
$for = $args['for'];
?>
<label class="label" for="<?= $for; ?>"><?= $text; ?></label>