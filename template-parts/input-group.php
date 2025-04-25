<?php

if (empty($args)) return;

?>
<div class="input-group">

    <?php
    get_part('label', null, $args['label']);
    ?>
    <?php
    get_part('input', 'text', $args['input']);

    ?>
</div>