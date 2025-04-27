<?php

const TEMPLATE_PARTS = "/template-parts/";

function is_dev(): bool
{
    return str_contains($_SERVER['HTTP_HOST'], '.local');
}

function get_part(string $slug, string|null $name = null, mixed $args = null)
{
    get_template_part(TEMPLATE_PARTS . $slug, $name, $args);
}

/**
 * @return void
 */
function default_actions(): void
{

    $basePath = get_template_directory_uri();

    if (is_dev()) {
        wp_enqueue_script_module('dev-vite', 'http://localhost:5173/@vite/client', [], null);
        wp_enqueue_script_module('dev-script', 'http://localhost:5173/src/index.js', [], null);
        wp_enqueue_script_module('dev-style', 'http://localhost:5173/src/index.css', [], null);
    } else {
        wp_enqueue_style('dist-style', $basePath . '/dist/main.css', [], null);
        wp_enqueue_script_module('dist-script', $basePath . '/dist/index.js', [], null);
    }
}

add_action('wp_enqueue_scripts', 'default_actions');

function add_nav(): void
{
    register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'add_nav');

/**
 * @param mixed $value
 * @return void
 */
function dd(mixed $value): void
{
    dump($value);
    exit;
}

/**
 * @param mixed $value
 * @return void
 */
function dump(mixed $value): void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function get_menu_items(string $menu_slug = "nav"): array
{
    $items = wp_get_nav_menu_items($menu_slug);
    return $items ?: [];
}
