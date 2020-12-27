<?php

namespace App;


function mytheme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En-tête du menu');
    register_nav_menu('footer', 'Pied de page');

    add_image_size('post-thumbnail', 350, 215, true);

}


function mytheme_register_assets(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    //wp_deregister_script('jquery');

    // wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function mytheme_title_separator(){
    return '|';
}

function mytheme_document_title_parts ($title){
    unset($title['tagline']);
    $title['subtitle'] ='Blog  de pâtisserie';
    return $title;
}

function mytheme_menu_class ($classes){
    $classes[] = 'nav-item';

    return $classes;
}

function mytheme_menu_link_class ($attrs){
    $attrs['class'] = 'nav-link';

    return $attrs;
}

function mytheme_pagination(){
    $pages = paginate_links(['type' => 'array']);
    if($pages === null){
        return;
    }
    echo '<nav aria-label="Pagination">';
    echo '<ul class="pagination">';
    foreach ($pages as $page){
        $active = strpos($page, 'current') !== false;
        $class ='page-item';
        if($active){
            $class .= ' active';
        }
        echo '<li class='.$class.'>';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

add_action('after_setup_theme', 'App\mytheme_supports');
add_action('wp_enqueue_scripts', 'App\mytheme_register_assets');

add_filter('document_title_separator', 'App\mytheme_title_separator');
add_filter('document_title_parts', 'App\mytheme_document_title_parts');
add_filter('nav_menu_css_class', 'App\mytheme_menu_class');
add_filter('nav_menu_link_attributes', 'App\mytheme_menu_link_class');

