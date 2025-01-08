<?php

/**
 * Post Type Change
 *
 * Plugin Name: PostType Change
 * Plugin URI: 
 * Description:
 * Version:     1.0.
 * Author:      Felipe Pinheiro
 * Author URI:  https://github.com/felipesantos2
 * Text Domain: post-type-change
 * Requires at least: 4.9
 * Requires PHP: 5.2.4
 */

if (! defined('ABSPATH')) {
    throw new \Exeception('Constants is not defined !');
}

if (! class_exists('Post_type_Change')) {
    class Post_type_Change
    {
        public static function initialize(): void
        {
            add_action('admin_menu', static::register_the_page() );
        }

        public static function register_the_page()
        {
            add_menu_page(
                'tools.php',
                'Felipe',
                'Felipe',
                'manage_options',
                'my-custom-submenu-page',
                static::page_content()
            );
        }

        public static function page_content()
        {
?>
            <div class="wrap">
                <h2>Page Title</h2>
            </div>
<?php
        }
    }
}


Post_type_Change::initialize();
