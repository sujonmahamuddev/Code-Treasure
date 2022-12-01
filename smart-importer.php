<?php

function demo_import_files() {
    return array(

      array(
        'import_file_name'             => 'Demo Import',
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/data.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/widgets.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/customizer.dat',
        'import_preview_image_url'   => consultia_theme_img . '/demos/demo-1.jpg',
        'import_notice'                => __( 'After Importing demo setup menu and more settings ', 'text-domain' ),
        'preview_url'                => '#',
      ),
      array(
        'import_file_name'             => 'Demo Import',
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/data.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/widgets.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/customizer.dat',
        'import_preview_image_url'   => consultia_theme_img . '/demos/demo-1.jpg',
        'import_notice'                => __( 'After Importing demo setup menu and more settings ', 'text-domain' ),
        'preview_url'                => '#',
      ),
      array(
        'import_file_name'             => 'Demo Import',
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/data.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/widgets.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/customizer.dat',
        'import_preview_image_url'   => consultia_theme_img . '/demos/demo-1.jpg',
        'import_notice'                => __( 'After Importing demo setup menu and more settings ', 'text-domain' ),
        'preview_url'                => '#',
      ),
      array(
        'import_file_name'             => 'Demo Import',
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/data.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/widgets.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/dummy-data/contents/customizer.dat',
        'import_preview_image_url'   => consultia_theme_img . '/demos/demo-1.jpg',
        'import_notice'                => __( 'After Importing demo setup menu and more settings ', 'text-domain' ),
        'preview_url'                => '#',
      ),

    );
}
add_filter( 'pt-ocdi/import_files', 'demo_import_files' );


function demo_after_import( $selected_import ) {

    if ( 'Home V1' === $selected_import['import_file_name'] ) {

        esc_html_e( 'Thank You! for installing demo ( Home V1 ).', 'demo' );

        $front_page_id = get_page_by_title( 'Home V1' );
        $blog_page_id  = get_page_by_title( 'Blog' );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        update_option( 'page_for_posts', $blog_page_id->ID );

		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
		set_theme_mod( 'nav_menu_locations', array(
				'mainmenu' => $main_menu->term_id,
			)
		);
    }elseif( 'Home V2' === $selected_import['import_file_name'] ) {

        esc_html_e( 'Thank You! for installing demo ( Home V2 ).', 'demo' );

        $front_page_id = get_page_by_title( 'Home V2' );
        $blog_page_id  = get_page_by_title( 'Blog' );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        update_option( 'page_for_posts', $blog_page_id->ID );

		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
		set_theme_mod( 'nav_menu_locations', array(
				'mainmenu' => $main_menu->term_id,
			)
		);

    }elseif( 'Home V3' === $selected_import['import_file_name'] ) {

        esc_html_e( 'Thank You! for installing demo ( Home V3 ).', 'demo' );

        $front_page_id = get_page_by_title( 'Home V3' );
        $blog_page_id  = get_page_by_title( 'Blog' );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        update_option( 'page_for_posts', $blog_page_id->ID );

        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        set_theme_mod( 'nav_menu_locations', array(
                'mainmenu' => $main_menu->term_id,
            )
        );
    }elseif( 'Home V4' === $selected_import['import_file_name'] ) {

        esc_html_e( 'Thank You! for installing demo ( Home V4 ).', 'demo' );

        $front_page_id = get_page_by_title( 'Home V4' );
        $blog_page_id  = get_page_by_title( 'Blog' );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        update_option( 'page_for_posts', $blog_page_id->ID );

		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
		set_theme_mod( 'nav_menu_locations', array(
				'mainmenu' => $main_menu->term_id,
			)
		);
    }

}
add_action( 'pt-ocdi/after_import', 'demo_after_import' );
