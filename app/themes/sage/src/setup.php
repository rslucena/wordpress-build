<?php

namespace App;

use Illuminate\Contracts\Container\Container as ContainerContract;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Config;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

if ( ! function_exists( 'is_plugin_active' ) )
	require_once( ABSPATH . '/wp-admin/includes/plugin.php' );

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('sage/main.css', asset_path('assets/styles/main.min.css'), false, true);
	wp_enqueue_script('slick/slider.js', asset_path('assets/scripts/slider.min.js'), ['jquery'], true, true);
	wp_enqueue_script('slick/lightbox.js', asset_path('assets/scripts/lightbox.min.js'), ['jquery'], true, true);
	wp_enqueue_script('sage/main.js', asset_path('assets/scripts/main.min.js'), ['jquery'], true, true);
}, 100);

add_action( 'admin_enqueue_scripts', function(){
    wp_enqueue_style('sage/admin-main.css', asset_path('assets/styles/admin-main.min.css'), false, null);
}, 100);

add_action('after_setup_theme', function () {

	//ATIVE SUPORT SOIL
    add_theme_support('soil-clean-up');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');
    register_nav_menus(['primary_navigation' => __('Navegação', '')]);
    add_theme_support('post-thumbnails');
    add_theme_support('customize-selective-refresh-widgets');

	//ATIVE PLUGINS
	activate_plugin( PLUGINDIR .'/acf/acf.php' );
	activate_plugin( PLUGINDIR .'/soil/soil.php' );
	activate_plugin( PLUGINDIR .'/contactform/wp-contact-form-7.php' );
	activate_plugin( PLUGINDIR .'/classiceditor/classic-editor.php' );

}, 20);

add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Footer', 'sage'),
        'id'            => 'sidebar-footer'
    ] + $config);
});

add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

add_action('after_setup_theme', function () {
    $paths = [
        'dir.stylesheet' => get_stylesheet_directory(),
        'dir.template'   => get_template_directory(),
        'dir.upload'     => wp_upload_dir()['basedir'],
        'uri.stylesheet' => get_stylesheet_directory_uri(),
        'uri.template'   => get_template_directory_uri(),
    ];
    $viewPaths = collect(preg_replace('%[\/]?(templates)?[\/.]*?$%', '', [STYLESHEETPATH, TEMPLATEPATH]))
        ->flatMap(function ($path) {
            return ["{$path}/templates", $path];
        })->unique()->toArray();
    config([
        'assets.manifest' => "{$paths['dir.stylesheet']}/assets.json",
        'assets.uri'      => "{$paths['uri.stylesheet']}/",
        'view.compiled'   => "{$paths['dir.upload']}/cache/compiled",
        'view.namespaces' => ['App' => WP_CONTENT_DIR],
        'view.paths'      => $viewPaths,
    ] + $paths);

    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (ContainerContract $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view'], $app);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= App\\asset_path({$asset}); ?>";
    });
});


/**
 * Init config
 */
sage()->bindIf('config', Config::class, true);
