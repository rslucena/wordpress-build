<?php

namespace App;

/** * Theme customizer */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
	// Add postMessage support
	$wp_customize->get_setting('blogname')->transport = 'postMessage';
	$wp_customize->selective_refresh->add_partial('blogname', [
		'selector' => '.brand',
		'render_callback' => function () {
			bloginfo('name');
		}
	]);
});

//REMOVER ITENS MENU ADMIN
add_action( 'wp_before_admin_bar_render', function() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_node( 'dashboard' );
	$wp_admin_bar->remove_node( 'search' );
} );

add_action( 'wp_dashboard_setup', function() {
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );   // Right Now
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' ); // Recent Comments
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );  // Incoming Links
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );   // Plugins
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );  // Quick Press
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );  // Recent Drafts
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );   // WordPress blog
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );   // Other WordPress News
} );

add_action( 'admin_menu',  function() {
	remove_meta_box( 'autordiv', 'post', 'normal' );
	remove_meta_box( 'pageparentdiv', 'page', 'normal' );
});

//RENOMEAR MENU
add_action( 'admin_menu', function() {

	if(is_super_admin() == false){

	global $menu;
	global $submenu;

	$menu[2] = $menu[60];
	unset($menu[26]); //CONTACT FORM
	unset($menu[75]); //IMPORTAR E EXPORTAR
	unset($menu[60]); //APARENCIA
	unset($menu[65]); //PLUGINS
	unset($submenu['themes.php'][7]);


		remove_menu_page( 'edit.php?post_type=acf-field-group' );
		unset($menu['edit.php?post_type=acf-field-group']);

	remove_submenu_page( 'options-general.php', 'privacy.php' );
	remove_submenu_page( 'options-general.php', 'options-writing.php' );
	remove_submenu_page( 'options-general.php', 'options-reading.php' );
	remove_submenu_page( 'options-general.php', 'options-discussion.php' );
	remove_submenu_page( 'options-general.php', 'options-media.php' );

	}


});

//REMOVE TEXT FOOTER ADMIN
add_filter('admin_footer_text', function () { echo ''; });


///PERSONALIZAÇÃO
add_action( 'wp_before_admin_bar_render', function() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'wp-logo' );
}, 0 );


add_filter('login_headerurl', function() {
	return get_home_url();
});

add_filter('login_headertitle', function() {
	return get_bloginfo('name');
});

add_action('after_setup_theme', function() {
	show_admin_bar(false);
});




