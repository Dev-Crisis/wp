<?php

$menu = get_menu_items('Nav');
?>
<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= get_bloginfo('name') . ' - ' . get_the_title() ?></title>
    <?php wp_head(); ?>
</head>
<body <?= body_class(); ?>>
<header class="header">
    <nav class="menu">
        <?php
        foreach ($menu as $item) {
            ?>
            <a class="menu-link" href="<?= is_page($item->title) ? '#' : $item->url ?>"><?= $item->title ?></a>
            <?php
        }
        ?>
    </nav>
</header>
