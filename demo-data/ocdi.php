<?php

function webfx_import_files() {
    return array(
        array(
            'import_file_name'             => 'University Animal Clinic',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-data/demo-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-data/widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-data/customizer.dat',
            'import_notice'                => __( 'This theme works best with ACF installed.', 'university-animal-clinic' ),
        ),
    );
}
add_filter( 'ocdi/import_files', 'webfx_import_files' );

function webfx_after_import_setup() {
     // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Header Menu', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'menu-1' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
            'menu-2' => $footer_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
        )
    );
    
     // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'webfx_after_import_setup' );