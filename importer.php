<?php

function demo_theme_importer() {
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
	);
}
add_filter( 'ocdi/import_files', 'demo_theme_importer' );
