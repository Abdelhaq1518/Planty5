<?php
// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')):
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('font-awesome', 'simple-line-icons', 'oceanwp-style'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);


// END ENQUEUE PARENT ACTION
function add_admin_link_to_menu($items, $args)
{
    if (is_user_logged_in() && current_user_can('administrator')) {
        // Créer un lien vers le tableau de bord WordPress
        $admin_link = '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-admin"><a href="' . admin_url() . '">Admin</a></li>';

        // Trouver la position du menu "Nous rencontrer"
        $meet_position = strpos($items, 'Nous rencontrer');

        // Vérifier si "Nous rencontrer" existe dans le menu
        if ($meet_position !== false) {
            // Calculer la position de "Commander" en fonction de "Nous rencontrer"
            $order_position = $meet_position + strlen('Nous rencontrer');

            // Insérer le lien "Admin" à la position calculée
            $items = substr_replace($items, $admin_link, $order_position, 0);
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);