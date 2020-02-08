<?php
//function curso_tax() {
//
//    $labels = array(
//        'name'                       => _x( 'Instrutores', 'Taxonomy General Name', 'academiadopsicologo' ),
//        'singular_name'              => _x( 'Instrutor', 'Taxonomy Singular Name', 'academiadopsicologo' )
//    );
//
//    $args = array(
//        'labels'                     => $labels,
//        'hierarchical'               => true,
//        'public'                     => true,
//        'show_ui'                    => true,
//        'show_admin_column'          => true,
//        'show_in_nav_menus'          => true,
//        'show_tagcloud'              => true,
//    );
//    register_taxonomy( 'instrutores', array( 'post' ), $args );
//
//}
//add_action( 'init', 'curso_tax', 0 );

//add_action( 'init', function() {
//	$labels = array(
//		'name'                  => _x( 'Serviços', 'Post Type General Name', 'text_domain' ),
//		'singular_name'         => _x( 'Serviço', 'Post Type Singular Name', 'text_domain' ),
//	);
//	$args = array(
//		'label'                 => __( 'Serviços', 'text_domain' ),
//		'labels'                => $labels,
//		'supports'              => array( 'title', 'editor', 'thumbnail' ),
//		'taxonomies'            => array(),
//		'hierarchical'          => false,
//		'public'                => true,
//		'show_ui'               => true,
//		'show_in_menu'          => true,
//		'menu_position'         => 6,
//		'menu_icon'             => 'dashicons-tag',
//		'show_in_admin_bar'     => true,
//		'show_in_nav_menus'     => true,
//		'can_export'            => true,
//		'has_archive'           => true,
//		'exclude_from_search'   => true,
//		'publicly_queryable'    => true,
//		'capability_type'       => 'post',
//	);
//	register_post_type( 'servico', $args );
//
//}, 0 );