<?php

namespace App;

/** Add <body> classes */
add_filter('body_class', function (array $classes) {
    // Add page slug if it doesn't exist
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    // Add class if sidebar is active
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    return $classes;
});


//CUSTOMIZAR LOGIN
add_filter('login_redirect', function () {
	return 'wp-admin/themes.php';
});

//CUSTOMIZAR RESUMO
add_filter('excerpt_more', function ($more) { global $post; return ''; });
add_filter( 'excerpt_length', function ( $length  ) { return 30; } , 999 );


/** Template Hierarchy should search for .blade.php files */
array_map(function ($type) {
    add_filter("{$type}_template_hierarchy", function ($templates) {
        return call_user_func_array('array_merge', array_map(function ($template) {
            $transforms = [
                '%^/?(templates)?/?%' => config('sage.disable_option_hack') ? 'templates/' : '',
                '%(\.blade)?(\.php)?$%' => ''
            ];
            $normalizedTemplate = preg_replace(array_keys($transforms), array_values($transforms), $template);
            return ["{$normalizedTemplate}.blade.php", "{$normalizedTemplate}.php"];
        }, $templates));
    });
}, [
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment'
]);

/** * Render page using Blade */
add_filter('template_include', function ($template) {
    $data = array_reduce(get_body_class(), function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    echo template($template, $data);

    // Return a blank file to make WordPress happy
    return get_theme_file_path('index.php');
}, PHP_INT_MAX);
add_filter('comments_template', 'App\\template_path');

/** Filter Query */
add_action( 'pre_get_posts', function( $q ){
	if( $title = $q->get( '_meta_or_title' ) ){
		add_filter( 'get_meta_sql', function( $sql ) use ( $title ){
			global $wpdb;
			static $nr = 0;
			if( 0 != $nr++ ) return $sql;
			$sql['where'] = sprintf(
				" AND ( %s OR %s ) ",
				$wpdb->prepare( "{$wpdb->posts}.post_title = '%s'", $title ),
				mb_substr( $sql['where'], 5, mb_strlen( $sql['where'] ) )
			);
			return $sql;
		});
	}
});